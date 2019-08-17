<?php
		/**
		*@author Apps Lernen
  *@category Controllers
  *@package app-myfaculty/controllers
		*/
		class Seminaires extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("about_layout","about",$data = array('title' => 'A propos du Club Informatique de l\'université de Douala','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Via notre plate-forme Web'));
			}

			public function programmes()
			{
				parent::render("default_layout","programmes",$data = array('title' => 'Des seminaires taillés à votre pointe','styles' => 'ciud-about','slogan1' => 'Des seminaires taillés à votre pointe', 'slogan2' => 'Les programmes en cours'));
			}

			public function anterieurs()
			{
				parent::render("about_layout","programmes",$data = array('title' => 'Des seminaires taillés à votre pointe','styles' => 'ciud-about','slogan1' => 'Absenté lors d\'un seminaire', 'slogan2' => 'Il est temps de se ratrapper'));
			}
		}
 ?>
