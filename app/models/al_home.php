<?php  

	/**
	*
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Home extends Model
{

		public static function newActivity()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_home` (`id`, `activity_name`, `activity_description`, `date_edition`) VALUES (NULL, :activity_name, :activity_description,NOW());");

					$insert->bindValue(':activity_name', 'activity_name' , PDO::PARAM_STR);
					$insert->bindValue(':activity_description', 'activity_description' , PDO::PARAM_STR);
					

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function setActivity($id,$activity_name,$activity_description)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("UPDATE `ciud_home` SET `activity_name` = :activity_name, `activity_description` = :activity_description, `date_edition`= NOW() WHERE `ciud_home`.`id` = :id");
					$insert->bindValue(':id', $id , PDO::PARAM_INT);
					$insert->bindValue(':activity_name', $activity_name , PDO::PARAM_STR);
					$insert->bindValue(':activity_description', $activity_description , PDO::PARAM_STR);
					$insert->execute();
					if ($connection) {$connection = NULL;}
					
					return $insert->execute();
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public function selectAdmin($matricule)
		{
			try {

				$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare('SELECT * FROM ciud_admin WHERE matricule=? ');
					$select->bindValue(1,$matricule);
					$select->execute();
					
					if ($connection) {$connection= NULL;}
					return $select->fetchAll(PDO::FETCH_ASSOC);
					
			} catch (Exception $e) {
				
			}
		}

		public static function getActivity()
		{
			try {

				$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare('SELECT * FROM ciud_home');
					$select->execute();
					
					if ($connection) {$connection= NULL;}
					return $select->fetchAll(PDO::FETCH_ASSOC);
					
			} catch (Exception $e) {
				
			}
		}

		public static function getHome()
		{
			try {

				$connection= new Model();
					$connection=$connection->connectDB();
					$select_home=$connection->prepare('

						SELECT *
						FROM ciud_home
					');
					$select_actu=$connection->prepare('

						SELECT *
						FROM ciud_actualites
						GROUP BY id DESC LIMIT 4
					');
					$select_partner=$connection->prepare('

						SELECT *
						FROM ciud_partenaires 
						WHERE is_partner= 1
					');
					$select_home->execute();
					$select_actu->execute();
					$select_partner->execute();
					
					if ($connection) {$connection= NULL;}
					return [$select_home->fetchAll(PDO::FETCH_ASSOC), $select_actu->fetchAll(PDO::FETCH_ASSOC), $select_partner->fetchAll(PDO::FETCH_ASSOC)];
					
			} catch (Exception $e) {
				
			}
		}

}

?>
