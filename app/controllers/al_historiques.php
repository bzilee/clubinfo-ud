<?php
		/**
		*@author Apps Lernen
  		*@category Controllers
  		*@package app-myfaculty/controllers
		*/
		class Historiques extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","historiques",$data = array('title' => 'Historiques du Club Informatique de l\'université de Douala','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Nos historiques'));
			}

		}
 ?>
