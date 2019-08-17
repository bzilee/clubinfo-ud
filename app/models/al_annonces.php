<?php 

	/**
	* 
	*/

	namespace app\models;
	use core\allib\Model, PDO;

	class Annonces 
	{
		
		function __construct()
		{
			
		}

		public static function newAnnonce()
		{

		try {


					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_annonces` (`id`, `title`, `description`, `infos_contact`, `img_description`, `img_path`, `location`, `is_public`, `date`, `edit_by`) VALUES (NULL, :title, :description, :infos_contact, :img_description,:img_path , :location, :is_public,NOW(), :edit_by)");

					$insert->bindValue(':title', 'Formation professionnelle' , PDO::PARAM_STR);
					$insert->bindValue(':description', 'description jhgrjhfgrhrhfghhh' , PDO::PARAM_STR);
					$insert->bindValue(':infos_contact', '76768568575' , PDO::PARAM_STR);
					$insert->bindValue(':img_description', 'descriptionjhgrjhfgrhrhfghhh' , PDO::PARAM_STR);
					$insert->bindValue(':img_path', 'assets/app/images/img4.jpg' , PDO::PARAM_STR);
					$insert->bindValue(':is_public', 1 , PDO::PARAM_INT);
					$insert->bindValue(':location', 'IAI Cameroun' , PDO::PARAM_STR);
					$insert->bindValue(':edit_by', 'Wilfried' , PDO::PARAM_STR);
					

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getAnnonces()
		{
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_annonces");
					 $select->execute();

					if ($connection) {$connection= NULL;}
				 
					return $select->fetchAll(PDO::FETCH_ASSOC);
		}

		public static function setAnnonce($id,$title, $description, $infos_contact, $img_description,$img_path , $location, $is_public, $edit_by)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("UPDATE `ciud_annonces` SET `title` = :title, `description` = :description, `infos_contact`=:infos_contact, `img_description` = :img_description, `img_path` = :img_path, `location` = :location,`is_public` = :is_public,`date` = NOW(),`edit_by` = :edit_by WHERE `ciud_annonces`.`id` = $id");
					
					$insert->bindValue(':title', $title , PDO::PARAM_STR);
					$insert->bindValue(':description', $description , PDO::PARAM_STR);
					$insert->bindValue(':infos_contact', $infos_contact , PDO::PARAM_INT);
					$insert->bindValue(':img_description', $img_description , PDO::PARAM_STR);
					$insert->bindValue(':img_path', $img_path , PDO::PARAM_STR);
					$insert->bindValue(':location', $location , PDO::PARAM_INT);
					$insert->bindValue(':is_public', $is_public , PDO::PARAM_INT);
					$insert->bindValue(':edit_by', $edit_by , PDO::PARAM_STR);
					$insert->execute();
					if ($connection) {$connection = NULL;}
					
					return $insert->execute();
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}
	}

 ?>