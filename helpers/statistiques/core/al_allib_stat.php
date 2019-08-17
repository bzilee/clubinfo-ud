<?php 

	/**
	* 
	*/
	namespace helpers\statistiques\core;
	class Allib_stat 
	{
		
		function __construct()
		{
			
		}

		public static function viewPage($name_page)
		{
			$date=date("Y-m-d H:i:s");
			if (file_get_contents("helpers/statistiques/Data/stat.txt") !='') {
				
				$file = fopen ("helpers/statistiques/Data/stat.txt", "r+");
				$content = fgets ($file, 1000);
				$tab= explode(' ', $content);
				$chaine_visites = $tab[2];
				$nbre_visite = explode('=', $chaine_visites)[1];
				$nbre_visite++;
				fseek ($file, 0);
				fputs ($file, $date.' Nombre_de_visites='.$nbre_visite.' Page='.$name_page, 1000);

				fseek ($file, 0);
				$content = fgets ($file, 1000);
				debug($content);
				fclose ($fp);
				
			} else {
				$nbre_visite=0;
				$file = fopen ("helpers/statistiques/Data/stat.txt", "r+");
				fputs ($file, $date.' Nombre_de_visites='.$nbre_visite.' Page='.$name_page, 1000);
				fclose ($fp);
			}
			
			
		}
	}

 ?>