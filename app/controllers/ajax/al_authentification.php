<?php 

session_start();

	// if (condition) {
		
	// 	if (isset($_POST['id']) && isnbh, get($_POST['token']) && $_SESSION['id']['token']==$_POST['token']) {
	// 		$_SESSION['id']=$_POST['id'];

	// 	} else {
	// 		return false;
	// 	}
	
	// } else {
	// 	# code...
	// }


	if (isset($_POST['id']) && isset($_POST['password'])  && isset($_POST['token']) && $_POST['id']!='' && $_POST['password']!=''  ) 
		{
			if (isset($_SESSION['user']['token']) && $_SESSION['user']['token']==$_POST['token']) {
				
			
				$datas=app\models\Admin::selectAdmin($_POST['id'], false);

				if ( isset($datas) && count($datas)==1 &&  $datas[0]['mot_passe']==$_POST['password'] ) {
					if ($datas[0]['accces']==1) {
						$_SESSION['user']['id']=$_POST['id'];
						$_SESSION['user']['password']=$_POST['password'];
						# CODE DE SORTIE : 111 ==> connexion reussite avec succès
						echo "111";
					} else {
						# CODE DE SORTIE : 000 ==> accès refusé
						echo "000"; 
					}
				}
				else {
					# CODE DE SORTIE : 001 ==> Identifiant ou mot de passe incorrect
					echo "001";
				}
			
			} else {
				echo "002";
			}

		} else 
		{
			# CODE DE SORTIE : 003 ==> Veillez remplir tout les champs ...
			echo "003";
		}
		
 ?>