<?php
	/**
	*@author Apps Lernen
  	*@category Controllers
  	*@package app-myfaculty/controllers
	*/
		class Register extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","register",$data = array('title' => 'S\'enregistrer pour les seminaires du club informatique de l\'université de douala', 'styles' => 'ciud-register'));
			}



		}
 ?>
