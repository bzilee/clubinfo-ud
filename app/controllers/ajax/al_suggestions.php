<?php 

session_start();
// die(json_encode($_POST['token']));
	if (isset($_SESSION['user']['token']) && $_SESSION['user']['token']==$_POST['token']) 
	{

		if (isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['data_suggestion']) && $_POST['name']!="" && $_POST['tel']!="" && $_POST['mail']!="" && $_POST['data_suggestion']!="" ) 
		{
			$name= trim($_POST['name']);
			$tab=explode(' ', $name);

			$prenom=(count($tab)>1) ?end($tab) : '';
			$name= trim( str_replace($prenom, '', $name) );
			$tel=$_POST['tel'];
			$mail=$_POST['mail'];
			$data_suggestion=$_POST['data_suggestion'];

			$datas=app\models\Suggestions::newSuggestion(
				$name,
				$prenom,
				$tel,
				$mail,
				$data_suggestion
			);
		  if (count($datas)==1) {
		   	echo json_encode("avec success");
		   } else {
		   	echo json_encode("unsuccess");
		   }

		} else {
		   	echo json_encode("empty field");
		}
	}
	else{
		$datas="access error";
		   	echo json_encode($datas);
	}
 ?>