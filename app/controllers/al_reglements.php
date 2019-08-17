<?php
		/**
		*@author Apps Lernen
  *@category Controllers
  *@package app-myfaculty/controllers
		*/
		class Reglements extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","reglements",$data = array('title' => 'Reglements du club informatique','styles' => 'ciud-about','slogan1' => 'En savoir plus sur le club informatique ', 'slogan2' => 'Le règlements interieurs'));
			}

			
		}
 ?>
