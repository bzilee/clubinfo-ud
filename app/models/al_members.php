<?php  

	/**
	*hhhhhhhhhhhhhhhhhhh
	**/



	namespace app\models;
	use core\allib\Model, PDO;

	class Members extends Model
{

		public static function newMember($code_id,$nom,$prenom, $matricule, $sexe, $tel_w, $tel, $etablissement, $filiere, $domaine_competence, $date_register, $added_by,$complet)
		{

		try {

					$connection= new Model();
					$connection=$connection->connectDB();
					$insert=$connection->prepare("INSERT INTO `ciud_membres` (`id`, `code_id`, `nom`, `prenom`, `matricule`, `sexe`, `num_whatsapp`, `num_tel`, `etablissement`, `filiere`, `date`, `domaine_competence`, `date_register`, `added_by`,`complet`) VALUES (NULL, :code_id, :nom, :prenom, :matricule, :sexe, :num_whatsapp, :num_tel, :etablissement, :filiere, NOW(), :domaine_competence,:date_register,:added_by , :complet)");

					// $insert->bindValue(':id',NULL , PDO::PARAM_INT);
					$insert->bindValue(':code_id', $code_id , PDO::PARAM_STR);
					$insert->bindValue(':nom', $nom , PDO::PARAM_STR);
					$insert->bindValue(':prenom', $prenom , PDO::PARAM_STR);
					$insert->bindValue(':matricule', $matricule , PDO::PARAM_STR);
					$insert->bindValue(':sexe', $sexe, PDO::PARAM_STR);
					// $insert->bindValue(':date_pub', DATE() , PDO::PARAM_STR);
					$insert->bindValue(':num_whatsapp',$tel_w, PDO::PARAM_INT);
					$insert->bindValue(':num_tel', $tel, PDO::PARAM_INT);
					$insert->bindValue(':etablissement', $etablissement, PDO::PARAM_STR);
					$insert->bindValue(':filiere', $filiere, PDO::PARAM_STR);
					$insert->bindValue(':domaine_competence', $domaine_competence, PDO::PARAM_STR);
					$insert->bindValue(':date_register', $date_register, PDO::PARAM_STR);
					$insert->bindValue(':added_by', $added_by, PDO::PARAM_STR);
					$insert->bindValue(':complet', $complet, PDO::PARAM_STR);

					if ($connection) {$connection= NULL;}
				 
					return $insert->execute();

			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public static function getMembers()
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_membres ");
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll();
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public static function selectMembersAdded_by($added_by,$statut)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_membres WHERE added_by= :added_by AND complet= :statut ORDER BY id DESC");
					$select->bindValue(':added_by', $added_by, PDO::PARAM_STR);
					$select->bindValue(':statut', $statut, PDO::PARAM_STR);
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll();
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public static function selectMembersWithId_user($id_user)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_membres WHERE code_id= :id_user");
					$select->bindValue(':id_user', $id_user, PDO::PARAM_STR);
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll(PDO::FETCH_ASSOC);
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public static function selectMembersWithId($id)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("SELECT * FROM ciud_membres WHERE id= :id");
					$select->bindValue(':id', $id, PDO::PARAM_STR);
					$select->execute();
					if ($connection) {$connection = NULL;}
					
					return $select->fetchAll(PDO::FETCH_ASSOC);
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

		public static function updateDatasMember($id,$nom,$prenom,$num_whatsapp,$num_tel,$etablissement,$filiere,$date_register)
		{

		try {
					$connection= new Model();
					$connection=$connection->connectDB();
					$select=$connection->prepare("UPDATE `ciud_membres` SET `nom` = :nom, `prenom` = :prenom, `num_whatsapp` = :num_whatsapp, `num_tel` = :num_tel, `etablissement` = :etablissement, `filiere` = :filiere, `date_register` = :date_register WHERE `ciud_membres`.`code_id` = :id");
					$select->bindValue(':id', $id, PDO::PARAM_STR);
					$select->bindValue(':nom', $nom, PDO::PARAM_STR);
					$select->bindValue(':prenom', $prenom, PDO::PARAM_STR);
					$select->bindValue(':num_whatsapp', $num_whatsapp, PDO::PARAM_INT);
					$select->bindValue(':num_tel', $num_tel, PDO::PARAM_INT);
					$select->bindValue(':etablissement', $etablissement, PDO::PARAM_STR);
					$select->bindValue(':filiere', $filiere, PDO::PARAM_STR);
					$select->bindValue(':date_register', $date_register, PDO::PARAM_STR);
					$select->bindValue(':filiere', $filiere, PDO::PARAM_STR);
					
					if ($connection) {$connection = NULL;}
					
					return $select->execute();//->fetchAll(PDO::FETCH_ASSOC);
			}
			 catch (PDOException $e) 
			{
				echo $e->getMessage();
			}

		}

}

?>
