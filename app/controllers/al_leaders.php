<?php
		/**
		*@author Apps Lernen
  *@category Controllers
  *@package app-myfaculty/controllers
		*/
		class Leaders extends core\allib\Controller
		{

			function __construct()
			{

			}

			public function index()
			{
				parent::render("default_layout","leaders",$data = array('title' => 'Leaders | Les leaders de l\'université de douala','styles' => 'ciud-detail-common','slogan1' => 'Des leaders aux services des étudiants', 'slogan2' => 'Dévoués d\'un dynamisme accentué'));
			}

			public function about($a, $params)
			{
				$tab=explode('-', $params);
				$id= end($tab);
				
				if ($params!="") {
					if (ctype_digit($id)) {
						$data_ = app\models\Leader::selectLeader($id);
						// debug($data_);
						if (count($data_)==1) {
						
							if (strtolower($data_[0]['url'])==str_replace('-'.$id,'',$params)) {
								parent::render("default_layout","detail_leader_plus",$data = array('title' => 'Actualites | Une espèce en voie de disparution','styles' => 'ciud-detail-common','slogan1' => 'Des leaders aux services des étudiants', 'slogan2' => 'Club Informatique','data_'=>$data_));
								
							} else {
								// echo "Ooops... erreur: actu non trouvee";
								write_error(get_class().'/'.$a[1].'/'.$params,'Aucune sortie correspondante au leader selectionné', 404);
								getPageError();
							}

						} else {
							// echo "Ooops... erreur: aucune correspondance avec l'id";
							write_error(get_class().'/'.$a[1].'/'.$params,'Aucune sortie correspondante à l\'id', 404);
							getPageError();
						}
					} else {
						write_error(get_class().'/'.$a[1].'/'.$params, 'id non entier',404);
						getPageError();
					}
				} else {
						write_error(get_class().'/'.$a[1].'/'.$params,'absence de paramètres', 404);
						getPageError();
				}
				
				
				
			}

			public function clubs_universite_douala($a, $params)
			{
				$data_=app\models\Leader::getLeaders('CLUB');
				// debug($data_);
				parent::render("default_layout","detail_leaders",$data = array('title' => 'Actualites | Une espèce en voie de disparution','styles' => 'ciud-detail-common', 'data_'=> $data_));
			}

			public function association_etudiants($a, $params)
			{
				$data_=app\models\Leader::getLeaders('AE');
				// debug($data_);
				parent::render("default_layout","detail_leaders",$data = array('title' => 'Actualites | Une espèce en voie de disparution','styles' => 'ciud-detail-common', 'data_'=> $data_));
			}

		}
 ?>
