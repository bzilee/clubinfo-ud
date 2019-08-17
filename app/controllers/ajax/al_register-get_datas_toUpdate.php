<?php 

session_start();

$a="";
	if ($a==""/*isset($_SESSION['user']['id']) && isset($_SESSION['user']['password']) && isset($_SESSION['user']['token']) && $_SESSION['user']['token']==$_POST['token']*/) 
	{
		if (isset($_POST['id'])) 
		{
			$datas=app\models\Members::selectMembersWithId($_POST['id']);
		  if (count($datas)==1) {

		   	$datas[1]="succes";
		   	echo json_encode($datas);
		   } else {
		   	$datas[1]="unsuccess";
		   	echo json_encode($datas);
		   }

		} else {
			$datas[1]="echec de modification";
		   	echo json_encode($datas);
		}
	}
	else{
		$datas[1]="ACCESS DENIED";
		   	echo json_encode($datas);
	}
 ?>