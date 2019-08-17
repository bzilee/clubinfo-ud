<?php
	/**
	*
	*/
	class Page404 extends core\allib\Controller
	{

		function __construct()
		{

		}

		/**
     * index
     *
     * Methode d'appelle de la page d'accueille
     *
     * @param type var Description
     * @return return type
     */
    public function index()
    {

       parent::render("404_layout","page404",$data = array('title' => "Page Not Found" ,'footer'=>false ));
    }

	}
 ?>
