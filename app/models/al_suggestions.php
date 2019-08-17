<?php  

	/**
	*hhhhhhhhhhhhhhhhhhh
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Suggestions extends Model
{

		public static function newSuggestion($name,$prenom,$tel,$mail,$msg)
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_messages` (`id`, `name`,`prenom`, `telephone`,`e-mail`, `message`,`date`) VALUES (NULL, :name, :prenom, :tel, :mail, :message, NOW())");

					// $insert->bindValue(':id',NULL , PDO::PARAM_INT);
					$insert->bindValue(':name', $name , PDO::PARAM_STR);
					$insert->bindValue(':prenom', $prenom , PDO::PARAM_STR);
					$insert->bindValue(':tel', $tel , PDO::PARAM_STR);
					$insert->bindValue(':mail', $mail , PDO::PARAM_STR);
					$insert->bindValue(':message',$msg , PDO::PARAM_STR);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getMessage()
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_messages");
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
