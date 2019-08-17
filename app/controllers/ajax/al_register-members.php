<?php 
session_start();


	if (isset($_SESSION['user']['id']) && isset($_SESSION['user']['password']) && isset($_SESSION['user']['token'])) 
	{
		if (
			isset($_POST['nom']) && 
			isset($_POST['tel'])  && 
			isset($_POST['tel_w']) && 
			isset($_POST['date_register']) && 
			isset($_POST['school'])  && 
			isset($_POST['option']) && 
			isset($_POST['token']) && 
			isset($_POST['identify']) && 
			$_POST['nom'] !="" &&
			$_POST['tel'] !=""  &&
			$_POST['tel_w'] !="" &&
			$_POST['date_register'] !="" &&
			$_POST['school'] !="" &&
			$_POST['option'] !="" &&
			$_POST['token'] !="" &&
			$_POST['token'] !="" &&
			$_POST['identify'] !="" 
			) 
		{
			$nom=$_POST['nom'];
			$prenom="";
			$nom_complet=explode(' ', trim($_POST['nom']));
			if (count($nom_complet)>1) {
				$prenom=end($nom_complet);
				$nom=str_replace($prenom, '', $_POST['nom']);
			}
			
			
			$id_user=core\middleware\Crypt::numericCode();

		  	$result= app\models\Members::newMember(
		  	$id_user,
		  	ucwords(trim($nom)),
		  	ucwords(trim($prenom)),
		  	'empty',
		  	'empty',
		  	$_POST['tel_w'],
		  	$_POST['tel'],
		  	ucwords(trim($_POST['school'])),
		  	ucwords(trim($_POST['option'])),
		  	'empty',
		  	$_POST['date_register'],
		  	$_SESSION['user']['id'],
		  	($_POST['identify']=="members")?'1':'0'
		  	 );

		   
		   if ($result) {

		   	$datas=app\models\Members::selectMembersWithId_user($id_user);
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
		$datas[1]="pb de session";
		echo json_encode($datas);
	}



 ?>