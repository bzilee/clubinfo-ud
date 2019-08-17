<?php 

	/**
	* 
	*/

	namespace app\models;
	use core\allib\Model, PDO;

	class Divers 
	{
		
		function __construct()
		{
			
		}

		public static function newDivers()
		{

		try {


					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_anniversaire` (`id`, `id_user`, `img_file`, `img_directory`, `date_naissance`, `date`) VALUES (NULL, :id_user, :img_file, :img_directory, :date_naissance,NOW())");

					$insert->bindValue(':id_user', 5 , PDO::PARAM_INT);
					$insert->bindValue(':img_file', 'descriptionjhgrjhfgrhrhfghhh' , PDO::PARAM_STR);
					$insert->bindValue(':img_directory', 'assets/app/images/montage00.png' , PDO::PARAM_STR);
					$insert->bindValue(':date_naissance', '1992-03-23' , PDO::PARAM_STR);
				
					

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getDivers()
		{
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_anniversaire");
					 $select->execute();

					if ($connection) {$connection= NULL;}
				 
					return $select->fetchAll(PDO::FETCH_ASSOC);
		}

		public static function setDivers($id, $id_user, $img_file,$img_directory,$date_naissance)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("UPDATE `ciud_anniversaire` SET `id_user` = :id_user, `img_file` = :img_file, `img_directory`=:img_directory, `date_naissance` = :date_naissance, `date` = NOW() WHERE `ciud_anniversaire`.`id` = $id");
					
					$insert->bindValue(':id_user', $id_user , PDO::PARAM_STR);
					$insert->bindValue(':img_file', $img_file , PDO::PARAM_STR);
					$insert->bindValue(':img_directory', $img_directory , PDO::PARAM_INT);
					$insert->bindValue(':date_naissance', $date_naissance , PDO::PARAM_STR);
				
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