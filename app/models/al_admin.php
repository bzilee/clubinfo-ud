<?php  

	/**
	*
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Admin extends Model
{

		public static function newAdmin()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_admin` (`id`, `identifiant`, `mot_passe`, `date`, `etablissement`, `filiere`, `domaine_acces`, `accces`) VALUES (NULL, :identifiant, :mot_passe,  NOW(), :etablissement, :filiere, :domaine_acces, :accces)");

					$insert->bindValue(':identifiant', 'CINEMA' , PDO::PARAM_STR);
					$insert->bindValue(':mot_passe', 'FGFHVBFHDGFGVGFHBVFGVFGVB' , PDO::PARAM_STR);
					// $insert->bindValue(':datee', NOW() , PDO::PARAM_STR);
					$insert->bindValue(':etablissement', 'FACSCIENCE' , PDO::PARAM_STR);
					$insert->bindValue(':filiere', 'pHYSIQUE', PDO::PARAM_STR);
					$insert->bindValue(':domaine_acces','aCCES COMPLET', PDO::PARAM_STR);
					$insert->bindValue(':accces', 0, PDO::PARAM_INT);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getAdmins()
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_admin");
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll(PDO::FETCH_ASSOC);
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public static function selectAdmin($matricule,$mode)
		{
			try {

				$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare('SELECT * FROM ciud_admin WHERE matricule=? ');
					switch ($mode) {
						case true:
							$select=$connection->prepare('SELECT * FROM ciud_admin WHERE matricule=? ');
							break;
						case false:
							$select=$connection->prepare('SELECT  `mot_passe`,`accces` FROM ciud_admin WHERE identifiant=:identifiant ');
							break;
						
						default:
						$select=$connection->prepare('SELECT * FROM ciud_admin WHERE identifiant=:identifiant  ');
							break;
					}
					$select->bindValue(':identifiant',$matricule);
					$select->execute();
					
					if ($connection) {$connection= NULL;}
					return $select->fetchAll(PDO::FETCH_ASSOC);
					
			} catch (Exception $e) {
				
			}
		}

}

?>
