<?php

 $script_name=$_SERVER['SCRIPT_NAME'];


  if(!defined("WEB_ROOT"))  define("WEB_ROOT",str_replace(($script_name!="/index.php")?$script_name:"/index.php","",$_SERVER['SCRIPT_NAME']));
  /*
  |-----------------------------------------------------------------------------------------------
  |
  |-----------------------------------------------------------------------------------------------
  */

  require_once(WEB_ROOT."core/allib/al_init.php");
  /*
  |-----------------------------------------------------------------------------------------------
  |
  |-----------------------------------------------------------------------------------------------
  */
// helpers\statistiques\core\Allib_stat::viewPage('index');
  new core\allib\Initialise();

 ?>
