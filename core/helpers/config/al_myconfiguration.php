<?php

/**
 * Fichier d'authentification
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 * @author Apps Lernen
 * @package core
 *
 */

  class MyConfiguration extends Config
  {
    private static $a=[];

    /**
     * showConfig
     *
     * Fonction de recapitulation des paramètres de configuration
     *
     * @param
     * @return Table/Page Html
     */
    static public function config()
    {
      core\helpers\header\Header::basic();

      self::$a[0]=parent::getDataAuthDB();
      extract(self::$a[0]);
      require_once("core/helpers/config/al_myconfig.view.php");
    }
  }


 ?>
