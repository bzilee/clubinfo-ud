<?php  

	/**
	*
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Partner extends Model
{

		public static function newPartner()
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_partenaires` (`id`, `name`, `name_sigle`, `logo`, `logo_path`, `is_partner`) VALUES (NULL, :name, :name_sigle, :logo, :logo_path, :is_partner)");

					$insert->bindValue(':name', 'name' , PDO::PARAM_STR);
					$insert->bindValue(':name_sigle', 'name_sigle' , PDO::PARAM_STR);
					$insert->bindValue(':logo', 'logo' , PDO::PARAM_STR);
					$insert->bindValue(':logo_path', 'logo_path' , PDO::PARAM_STR);
					$insert->bindValue(':is_partner', 1 , PDO::PARAM_INT);
					

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function setPartner($id,$name,$sigle_name,$logo,$logo_path,$is_partner)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("UPDATE `ciud_partenaires` SET `name` = :name, `name_sigle` = :name_sigle, `logo`= :logo,  `logo_path`= :logo_path, `is_partner`= :is_partner WHERE `ciud_partenaires`.`id` = :id");
					$insert->bindValue(':id', $id , PDO::PARAM_INT);
					$insert->bindValue(':name', $name , PDO::PARAM_STR);
					$insert->bindValue(':name_sigle', $sigle_name , PDO::PARAM_STR);
					$insert->bindValue(':logo', $logo , PDO::PARAM_STR);
					$insert->bindValue(':logo_path', $logo_path , PDO::PARAM_STR);
					$insert->bindValue(':is_partner', $is_partner , PDO::PARAM_INT);
					$insert->execute();
					if ($connection) {$connection = NULL;}
					
					return $insert->execute();
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public function getPartner()
		{
			try {

				$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare('SELECT * FROM ciud_partenaires');
					$select->bindValue(1,$matricule);
					$select->execute();
					
					if ($connection) {$connection= NULL;}
					return $select->fetchAll(PDO::FETCH_ASSOC);
					
			} catch (Exception $e) {
				
			}
		}

}

?>
