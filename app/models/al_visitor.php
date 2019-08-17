<?php  

	/**
	*hhhhhhhhhhhhhhhhhhh
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Visitor extends Model
{

		public static function newVisitor()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_visiteurs` (`id`, `user_agent`, `name_system`, `ip_adresse`, `port_connexion`, `navigateur`, `date`, `site_reference`) VALUES (NULL, :user_agent, :name_system, :ip_adresse, :port_connexion, :navigateur, NOW(), :site_reference)");

					// $insert->bindValue(':id',NULL , PDO::PARAM_INT);
					$insert->bindValue(':user_agent', 'user-agent' , PDO::PARAM_STR);
					$insert->bindValue(':name_system', 'windows' , PDO::PARAM_STR);
					$insert->bindValue(':ip_adresse', 'C:\fgfgfgfg' , PDO::PARAM_STR);
					$insert->bindValue(':port_connexion', 56566 , PDO::PARAM_INT);
					$insert->bindValue(':navigateur', 'opera', PDO::PARAM_STR);
					// $insert->bindValue(':date_pub', DATE() , PDO::PARAM_STR);
					$insert->bindValue(':site_reference','fb.com', PDO::PARAM_STR);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getVisitors()
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_visiteurs GROUP BY id DESC LIMIT 20");
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
