<?php 
session_start();


if (isset($_SESSION['user']['id']) && isset($_SESSION['user']['password']) && isset($_SESSION['user']['token'])   ) 
{
	unset($_SESSION['user']['id'] , $_SESSION['user']['password'] , $_SESSION['user']['token'] );
	echo "true";
} else 
{
	echo "false";
}

	
// header("Location: admin/");

 ?>