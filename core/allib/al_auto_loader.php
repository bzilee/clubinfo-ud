<?php

/**
 * Fichier d'auto-chargement des classes
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 * @author Apps Lernen
 * @package core
 *
 */

  function al_auto_loader($class)
  {

    // $word_array=explode("_",$class);
    // $root=$word_array[count($word_array) - 1];

   /* if ($root=="Model")
    {
      require_once(WEB_ROOT.Config::getModelsRoot().Config::getPrefixeFiles().$class.".php");
    }
    else*/ 

    //   if ($class=="MyConfiguration")
    // {
    //   require_once(WEB_ROOT."core/helpers/config/al_myconfiguration.php");
    // }
    // else if (preg_match('/\\\/', $class))
    // {

      $tab=array_reverse(explode('\\', $class));
      $tab[0] = 'al_'.strtolower($tab[0]).'.php';
      $file=implode(DS, array_reverse($tab));
      
      $file = str_replace('\\', DS, $file);
     // debug($file);
      if (file_exists($file)) {require_once $file;} else{echo "not exist";}
//     }
//     else
//     {
// // debug(strtolower($class));
//       require_once(WEB_ROOT."core/allib/al_".strtolower($class).".php");
//     }


  }

 ?>
