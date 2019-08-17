<?php 
session_start();
// echo json_encode("datas");die();//"succes";

	if (isset($_SESSION['user']['token']) && $_SESSION['user']['token']==$_POST['token']) 
	{
		$token=$_SESSION['user']['token'];
		if (
			isset($_POST['id_user']) &&
			isset($_POST['nom']) && 
			isset($_POST['tel'])  && 
			isset($_POST['tel_w']) && 
			isset($_POST['date_register']) && 
			isset($_POST['school'])  && 
			isset($_POST['option']) && 
			isset($_POST['token']) && 
			$_POST['id_user'] !="" &&
			$_POST['nom'] !="" &&
			$_POST['tel'] !=""  &&
			$_POST['tel_w'] !="" &&
			$_POST['date_register'] !="" &&
			$_POST['school'] !="" &&
			$_POST['option'] !="" &&
			$_POST['token'] !="" 
			) 
		{
			$nom=$_POST['nom'];
			$prenom="";
			$nom_complet=explode(' ', trim($_POST['nom']));
			if (count($nom_complet)>1) {
				$prenom=end($nom_complet);
				$nom=str_replace($prenom, '', $_POST['nom']);
			}
		  	$result= app\models\Members::updateDatasMember(
		  	$_POST['id_user'],
		  	ucwords(trim($nom)),
		  	ucwords(trim($prenom)),
		  	$_POST['tel_w'],
		  	$_POST['tel'],
		  	ucwords(trim($_POST['school'])),
		  	ucwords(trim($_POST['option'])),
		  	$_POST['date_register']
		  	 );

		   // echo json_encode($result);die();
		   if ($result) {

		   	$datas=app\models\Members::selectMembersWithId_user($_POST['id_user']);
		   	$datas[1]="succes";
		   	echo json_encode($datas);//"succes";
		   } else {
		   	$datas[1]="unsuccess";
		   	echo json_encode($datas);
		   }
		   
		}
		else
		{
			$datas[1]="champs vides";
		   	echo json_encode($datas);
		}
		
	} 
	else 
	{
		echo json_encode('access denied');
		
	}

	
 ?>