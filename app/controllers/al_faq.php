<?php
		/**
		*@author Apps Lernen
  		*@category Controllers
  		*@package app-myfaculty/controllers
		*/
		class Faq extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","faq",$data = array('title' => 'FAQ, club informatique - unversité de douala','styles' => 'ciud-about','slogan1' => 'Notre section', 'slogan2' => 'Fois aux questions'));
			}

		}
 ?>
