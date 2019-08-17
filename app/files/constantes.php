<?php

//Les chemins d'acces reguliers
		define('CSS','assets/app/css/');							//redirection core/css/
		define('CSS_STYLE','assets/app/css/ciud-style.css');
		define('CSS_MAIN','assets/app/css/ciud-main.css');
		define('CSS_ICONS','assets/app/css/ciud-icons.css');
		define('CSS_GLYPH','assets/app/fonts/glyph/ciud-stylesheet.css');
		define('CSS_ALL','assets/all/allib-css/');
		define('IMAGES','assets/app/images/');					//redirection core/images/
		define('FONTS','assets/app/app/fonts/'); 					//redirection core/fonts/
		define('JQUERY_ALL','assets/all/lib/jQuery/jquery-3.3.1.min.js');
		define('JS','assets/app/js/');
		define('JS_MAIN','assets/app/js/ciud-js.js');
		define('JAVASCRIPT','assets/app/js/');
		define('JAVASCRIPT_','assets/all/allib-js/');
		define('LIB','assets/app/lib/');
		define('LIB_ALL','assets/all/lib/');
		define('MATERIALIZE_LIB','assets/app/lib/Materialize/js/materialize.min.js');
		define('LIB_WOW_JS','assets/app/lib/WOW/js/wow.min.js');
		define('LIB_WOW_CSS','assets/app/lib/WOW/css/animate.css');			//redirection core/js/

//L'url de base des lins relatifs
		// $script_name=$_SERVER['SCRIPT_NAME'];
		// $folder_projet= ($script_name!="/index.php")?$script_name:"";
		// $folder_projet=str_replace("/index.php","",$folder_projet);
		// $ip=core\helpers\userDatas\userDatas::getIpHost();
		// $url=core\helpers\userDatas\userDatas::getIpHost().$folder_projet;

		define('BASE', core\helpers\url\Http::getUrl());

		define('TARGET', '');
//Les titres de page dans header
		define('TITLE_ABOUT', 'En savoir plus sùr nous | Apps Lernen');
		define('TITLE_HOME', 'Apprendre autrement-Bienvenue | Apps Lernen');
		define('TITLE_404', 'Page non trouvée | Apps Lernen');
		define('TITLE_ALSTORE', 'ALstore | Magasin d\'application-Apps Lernen');
		define('TITLE_CONTACT', 'Nous contacter | L\'équipe Apps Lernen');
		define('TITLE_CATEGORIES', 'ALstore Catégories | Magasin d\'application-Apps Lernen');
		define('TITLE_CATEGORIES_EM', 'ALstore Catégories Enseignement maternel | Magasin d\'application-Apps Lernen');
		define('COPYRIGHT', '© 2018 Club informatique, Université de douala - Created by <a href="https://fb.com/appslernen" >APPS LERNEN </a>');


//Variables relatives aux fichiers dans /views/
//------------Les prefixes "al_" sont à omettres----------//
		define('INDEX', 'index.php');
		define('FOOTER', 'footer.php');
		define('ABOUT', 'about.php');
		define('ERROR', 'page404.php');
		define('HOME', 'home.php');
		define('APPS_STORE', 'alstore.php');
		define('CONTACT', 'contact.php');

//Constantes par defauts
		define('DEFAULT_DESIGN', 'default');
		define('APPS_DESIGN', 'smart');

 ?>
