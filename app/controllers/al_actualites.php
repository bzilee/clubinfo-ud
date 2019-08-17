<?php
		/**
		*@author Apps Lernen
  *@category Controllers
  *@package app-myfaculty/controllers
		*/
		
		class Actualites extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				$data_actu = app\models\Actualites::getActus();
			
				parent::render("default_layout","actualites",$data = array('title' => 'Actualites | Des actualités détaillées sur mesure','styles' => 'ciud-actu','slogan1' => 'Toutes les actualités en un clic ', 'slogan2' => 'Dans notre plate-forme Web','data_actu'=>$data_actu));
			}

			public function detail($a, $params)
			{
				// debug( $a);
				$tab=explode('-', $params);
				$id= end($tab);
				
				if ($params!="") {
					if (ctype_digit($id)) {
						$data_actu = app\models\Actualites::getActu($id);
						if (count($data_actu)==1) {
						
							if (strtolower($data_actu[0]['url_actu'])==str_replace('-'.$id,'',$params)) {
								parent::render("default_layout","detail_actualite",$data = array('title' => 'Actualites | Une espèce en voie de disparution','styles' => 'ciud-detail-common'));
							} else {
								// echo "Ooops... erreur: actu non trouvee";
								write_error(get_class().'/'.$a[1].'/'.$params,'id existant mais non correspondance avec l\'actu demandée', 404);
								getPageError();
							}

						} else {
							// echo "Ooops... erreur: aucune correspondance avec l'id";
							write_error(get_class().'/'.$a[1].'/'.$params,'actu non trouvée', 404);
							getPageError();
						}
					} else {
						write_error(get_class().'/'.$a[1].'/'.$params,'id non entier', 404);
						getPageError();
					}
				} else {
						write_error(get_class().'/'.$a[1].'/'.$params,'absence de paramètres', 404);
						getPageError();
				}
				
				
			}

		}
 ?>
