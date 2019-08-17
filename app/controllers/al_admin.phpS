<?php

session_start();

		/**
		*@author Apps Lernen
  		*@category Controllers
  		*@package app-myfaculty/controllers
		*/
		class Admin extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				// debug_(isset($_SESSION['user']['id']));
				// debug($_SESSION['user']['password']);
				 if (isset($_SESSION['user']['id']) && isset($_SESSION['user']['password']) && isset($_SESSION['user']['token'])) 
				 {
				 	$enregistrement=count(app\models\Members::selectMembersAdded_by($_SESSION['user']['id'],0));
				 	$membres=count(app\models\Members::selectMembersAdded_by($_SESSION['user']['id'],1));
      				parent::render("admin_layout","home",$data = array('title' => 'Poste d\'admistration - CIUD','styles' => 'ciud-poste_admin','js'=>'ciud-admin_js','nbre_registers'=>$enregistrement,'nbre_membres'=>$membres));
     			 } else 
     			 {
       				$_SESSION['user']['token']=core\middleware\Secure::newToken();
					$token=$_SESSION['user']['token'];

					parent::render("admin_layout","login-form",$data = array('title' => 'Authentification poste d\'admistration - CIUD','styles' => 'ciud-poste_admin_login','js'=>'ciud-admin_js','token'=>$token));
     			 }
			}

		

		}
 ?>
