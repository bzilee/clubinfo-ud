<?php 

	/**
   * Espace de pré-configuration de l'application
   * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
   * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   * @author Apps Lernen
   * @package config
   */
	namespace core\helpers\url;
	use config as con, core\helpers\userDatas\userDatas;
	class Http extends con\Config
	{
		
		public static function getUrl(){
			$script_name=$_SERVER['SCRIPT_NAME'];
			$folder_projet= ($script_name!="/index.php")?$script_name:"";
			$folder_projet=str_replace("/index.php","",$folder_projet);
			$ip=userDatas::getIpHost();
			$url=userDatas::getIpHost().$folder_projet;
		
			if (parent::$environnement=="outline") {
				return 'http://'.$url.'/';
			} elseif (parent::environnement=="inline") {
				if (parent::useHTTPSecure===false) {
					return 'http://'.$url.'/';
				}
				else {
					return 'https://'.$url.'/';
				}
				
			}
			

		}
	}
 ?>