<?php  

	/**
	*
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Leader extends Model
{

		public static function newLeader()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_leaders` (`id`, `type_assoc`, `nom_assoc`, `sigle_assoc`, `year`, `nom_president`, `nb_person_bureau`, `etablissement`,`img_file`,`img_directory`,`url`) VALUES (NULL, :type_assoc, :nom_assoc, :sigle_assoc, NOW(), :nom_president, :nb_person_bureau,:etablissement) ");

					$insert->bindValue(':type_assoc', 'AE' , PDO::PARAM_STR);
					$insert->bindValue(':nom_assoc', 'Association etudiants fac science' , PDO::PARAM_STR);
					// $insert->bindValue(':datee', NOW() , PDO::PARAM_STR);
					$insert->bindValue(':sigle_assoc', 'AE/FS' , PDO::PARAM_STR);
					$insert->bindValue(':nom_president', 'SERAPHIN', PDO::PARAM_STR);
					$insert->bindValue(':nb_person_bureau', 656, PDO::PARAM_INT);
					$insert->bindValue(':etablissement', 'FAC FS', PDO::PARAM_STR);
					$insert->bindValue(':img_file', 'fggtghtrhythythrty', PDO::PARAM_STR);
					$insert->bindValue(':img_directory', '', PDO::PARAM_STR);
					$insert->bindValue(':url', '', PDO::PARAM_STR);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getLeaders($type_assoc)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_leaders WHERE type_assoc= :type_assoc");
					$select->bindValue(':type_assoc', $type_assoc , PDO::PARAM_STR);
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll(PDO::FETCH_ASSOC);
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public static function selectLeader($id)
		{
			try {

				$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare('SELECT * FROM ciud_leaders WHERE id=? ');
					$select->bindValue(1,$id);
					$select->execute();
					
					if ($connection) {$connection= NULL;}
					return $select->fetchAll(PDO::FETCH_ASSOC);
					
			} catch (Exception $e) {
				
			}
		}

		public function upDateLeader($id)
		{
			
		}

}

?>
