<?php
session_start();
		/**
		*@author Apps Lernen
 	 	*@category Controllers
  		*@package app/controllers
		**/

		class Home extends core\allib\Controller
		{

			private $data_;

			public  function index()
			{
				$this->data_ = app\models\Home::getHome();
				if (isset($_SESSION['user']['token'])) 
				 {
				 	$token=$_SESSION['user']['token'];
      				$this->render_($token);
     			 } else 

     			 {
       				$_SESSION['user']['token']=core\middleware\Secure::newToken();
					$token=$_SESSION['user']['token'];

					$this->render_($token);
     			 }
			}

			private function render_($token){
				return parent::render(
					"home_layout",
					"home",
					$data = array(
						'title' => 'Accueil | Bienvenu au club informatique de l\'université de douala',
						'slogan1' => 'Bienvenu au Club Informatique ', 
						'slogan2' => 'de l\'université de Douala',
						'data_home'=>$this->data_,
						'token'=>$token)
					);
			}
		}
 ?>
