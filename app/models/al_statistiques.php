<?php  

	/**
	*hhhhhhhhhhhhhhhhhhh
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Statistiques extends Model
{

		public static function newActu()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_actualites` (`id`,`categorie`,`img_file`,`img_directory`,`title`,`content`,`date_pub`,`publication_by`,`here_school`) VALUES (NULL,:categorie,:img_file,:img_directory,:title,:content,NOW(),:publication_by,:here_school)");

					// $insert->bindValue(':id',NULL , PDO::PARAM_INT);
					$insert->bindValue(':categorie', 'CINEMA' , PDO::PARAM_STR);
					$insert->bindValue(':img_file', 'FGFHVBFHDGFGVGFHBVFGVFGVB' , PDO::PARAM_STR);
					$insert->bindValue(':img_directory', 'C:\fgfgfgfg' , PDO::PARAM_STR);
					$insert->bindValue(':title', 'espece en voix de disparution' , PDO::PARAM_STR);
					$insert->bindValue(':content', 'loremgjgkjjfgjjggnnghthnjh', PDO::PARAM_STR);
					// $insert->bindValue(':date_pub', DATE() , PDO::PARAM_STR);
					$insert->bindValue(':publication_by','Bzile', PDO::PARAM_STR);
					$insert->bindValue(':here_school', 'FAC Sciences', PDO::PARAM_INT);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getActus()
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_actualites GROUP BY id DESC LIMIT 2");
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
