<?php
		/**
		*@author Apps Lernen
  *@category Controllers
  *@package app-myfaculty/controllers
		*/
		class About extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("about_layout","about",$data = array('title' => 'A propos du Club Informatique de l\'université de Douala','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Via notre plate-forme Web'));
			}

			public function mission_politique()
			{
				parent::render("default_layout","mission_politique",$data = array('title' => 'A propos du Club Informatique de l\'université de Douala','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Notre mission et Politique'));
			}

				public function avertissement()
			{
				parent::render("warning_layout","avertissement",$data = array('title' => 'A propos du Club Informatique de l\'université de Douala','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Avertissement'));
			}

		}
 ?>
