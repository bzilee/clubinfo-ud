<?php
		/**
		*@author Apps Lernen
  		*@category Controllers
  		*@package app-myfaculty/controllers
		*/
		class Administration extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","admin",$data = array('title' => 'Hierachisation adminstrative de l\'université de douala','slogan1' => 'Hierachisation adminstrative', 'slogan2' => 'De l\'Université de Douala','styles'=>'ciud-etablissements'));
			}

			public function about()
			{
				parent::render("default_layout","about_school",$data = array('title' => 'Hierachisation adminstrative de l\'université de douala','slogan1' => 'Hierachisation adminstrative', 'slogan2' => 'Faculté des sciences','styles'=>'ciud-etablissements'));
			}

			

		}
 ?>
