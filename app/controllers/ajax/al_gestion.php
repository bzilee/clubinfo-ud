<?php 
session_start();

	if (isset($_SESSION['user']['token']) && isset($_SESSION['user']['password']) && isset($_SESSION['user']['id'])) {

		if (isset($_POST['token']) && $_SESSION['user']['token']==$_POST['token']) {
			
		
			$token=$_SESSION['user']['token'];

			if (isset($_POST['data'])) {
		
			$datas=app\models\Members::selectMembersAdded_by($_SESSION['user']['id'],1);

			}


		} else {

			die('warning');
		}
	} 
	else 
	{
		die();
	}

	
 ?>