<?php
		/**
		*@author Apps Lernen
  		*@category Controllers
  		*@package app-myfaculty/controllers
		*/
		class Adhesion extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","adhesion",$data = array('title' => 'A propos du Club Informatique de l\'université de Douala','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Via notre plate-forme Web'));
			}

		}
 ?>
