<?php 
session_start();

	if (isset($_SESSION['user']['token']) && $_SESSION['user']['token']==$_POST['token']) {
		$token=$_SESSION['user']['token'];

		if (isset($_POST['data'])) {
	
		$datas=app\models\Members::selectMembersAdded_by($_SESSION['user']['id'],0);

		}
	} 
	else 
	{
		die();
	}

	
 ?>