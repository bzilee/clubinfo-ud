<?php

  /**
   * Espace de pré-configuration de l'application
   * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
   * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   * @author Apps Lernen
   * @package config
   */

  namespace config;
  use  core\allib as default_;
  class Config extends default_\Config
  {

     /*
    * 
    *
    */
    public static $useAjax="true|false";


     /*
    * 
    *
    */
    public static  $deniedAcces="true|false";


     /*
    * 
    *
    */
    public static  $nameFileAccesDenied="AccesDenied";

     /*
    * Prise en charge du protocole https
    * Si oui, $useHTTPSecure=true
    * S non, $useHTTPSecure=false
    */
    public static  $useHTTPSecure=false;



    /*
    * Définition de l'environnement de travail
    * Exemple : 
    *         $environnement="outline" pour un developpent en local
    *         $environnement="inline" pour un deploiement en ligne
    */

    public static  $environnement="outline";




  }


 ?>
