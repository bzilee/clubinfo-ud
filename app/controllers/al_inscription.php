<?php 

/**
		*@author Apps Lernen
 	 	*@category Controllers
  		*@package app/controllers

**/


class Inscription extends core\allib\Controller
{
	
	function __construct()
	{
		
	}


	public  function index()
	{
	
				parent::render("default_layout","inscription",$data = array('title' => 'S\'enregistrer pour les seminaires du club informatique de l\'université de douala', 'styles' => 'ciud-register','slogan1' => 'Inscription au Club Informatique ', 'slogan2' => 'De l\'Université de Douala'));
			

	}
}


 ?>