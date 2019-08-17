<?php  

	/**
	*hhhhhhhhhhhhhhhhhhh
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Users extends Model
{

		public static function newUser()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_users` (`id`, `seminaire`, `code_identification`, `date`) VALUES (NULL, :seminaire, :code_identification, NOW())");

					// $insert->bindValue(':id',NULL , PDO::PARAM_INT);
					$insert->bindValue(':seminaire', 'user-agent' , PDO::PARAM_STR);
					$insert->bindValue(':code_identification', 'windows' , PDO::PARAM_STR);
					// $insert->bindValue(':date_pub', DATE() , PDO::PARAM_STR);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getUsers()
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_users");
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll();
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

}

?>
