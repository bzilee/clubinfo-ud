<?php

  /**
   * Fichier d'authentification
   * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
   * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   * @author Apps Lernen
   * @package core
   *
   */

   namespace core\allib;
   use core\helpers\header\Header;

  class Authentification extends Config
  {

    private static $error=[];


     function __construct($module)
    {
      self::checkStateConfig($module);
    }

    /**
    *
    *
    */

    protected static function checkStateConfig($module)
    {

      Header::basic();

      if(!(1 <= parent::getNoModelUrlDefault() AND parent::getNoModelUrlDefault()  <= 3 ))
      {
        //"Veillez définir le model d'url par defaut en respectant l'intervalle définie"
        self::$error[4]=STRING_UNDEFINE_NO_URL_MODEL_DEFAULT;
      }
      if(!is_file($module."/".parent::getControllersRoot().parent::getPrefixeFiles().parent::getNameHomePage().".php"))
      {
        //"Rassurer vous que le controleur de la page d'accueil est correctement définie."
        self::$error[1]=STRING_CHECK_CONTROLLER_HOMEPAGE_DEFINE;
      }
      if(!is_file($module."/".parent::getControllersRoot().parent::getPrefixeFiles().parent::getNamePageError().".php"))
      {
        //"Rassurer vous que le controleur de la page d'erreur est correctement définie."
        self::$error[0]=STRING_CHECK_CONTROLLER_PAGE_ERROR_DEFINE;
      }
      // if(parent::getSeparatorOfActions()!="-" AND parent::getSeparatorOfActions()!="_")
      // {
      //   //"Rassurer vous que le separateur des methodes d'action est bien défini."
      //   self::$error[2]=STRING_UNDEFINE_SEPARATOR_ACTION;
      // }
      // if(!(1 <= parent::getNoModelUrl() AND parent::getNoModelUrl() <= 3 ))
      // {
      //   //"Veillez choisir le model d'url dans l'intervalle définie"
      //   self::$error[3]=STRING_UNDEFINE_NO_URL_MODEL;
      // }


    }


    /**
    *
    *
    */

    public static function getErrorConfig()
    {
        // self::checkStateConfig($module);
        return self::$error;
    }
  }


 ?>
