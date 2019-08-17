<?php

  /**
   * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
   * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   *@author Apps Lernen
   *@category Configuration
   *@package core
   */

  namespace core\allib;

  class Config
  {
    /*
    |---------------------------------------------------------------------------
    |
    |
    */
    private static $lang="french"; //french ou english
    private static $prefixe="al_"; // prefixe assigné à tout les fichiers
    private static $prefixe_paths="al_"; // prefixe assigné à tout les fichiers

/*----------------------------Chemin de configuration du MVC-------------------------|
| Les chemins doivent se terminer par un slash et ne doivent pas debuter par un slash|
|                                                                                    |
|------------------------------------------------------------------------------------|
|                           Chemin absolu du controllers                             |
|-----------------------------------------------------------------------------------*/
    private static $controllers_root="controllers/";
/*-------------------------------------------------------------------------------
|
|
|-------------------------------------------------------------------------------
|                          Chemin absolu du dossier des requètes Ajax
|------------------------------------------------------------------------------*/
    private static $ajax_root="controllers/ajax/";
/*-------------------------------------------------------------------------------
|
|
|-------------------------------------------------------------------------------
|           Chemin absolu du dossier des vues associées aux requètes Ajax
|------------------------------------------------------------------------------*/
    private static $ajax_root_view="views/ajax/";
/*-------------------------------------------------------------------------------
|
|
|-------------------------------------------------------------------------------
|                          Chemin absolu du Models
|------------------------------------------------------------------------------*/
    private static $models_root="app/models/";
    private static $models_path_name="models";
/*------------------------------------------------------------------------------
|
|
|-------------------------------------------------------------------------------
|                          Chemin absolu du Views
|------------------------------------------------------------------------------*/
    private static $views_root="views/";
/*------------------------------------------------------------------------------
|
|
|-------------------------------------------------------------------------------
|                          Chemin absolu des Layouts
|               les fichiers de layout doivent etre en *.php
|------------------------------------------------------------------------------*/
    private static $layouts_root="views/layouts/";
/*-----------------------------------------------------------------------------*/



/*--------------------------------L'URL------------------------------------------
|       Le nombre(un entier) d'actions(et/ou paramètres) y compris le controleur
|-------------------------------------------------------------------------------*/
    // private static $number_of_actions_plus_controller=5;
/*-------------------------------------------------------------------------------*/
    private static $separator_of_actions="_";
/*-------------------------------------------------------------------------------*/





/*-----------------Les Modèles d'urls--------------------------------------------
|
|          Modèle 1
|     www.exemple.com/LaClasse/Les/DifferentsNoms/DeLaMethode/etc
|
|--------------------------------------------------------------------------------
|
|         Modèle 2
|     www.abc,com/LaClasse/LaMethode/param1/param2/param3/.../paramN
|
|--------------------------------------------------------------------------------
|
|         Modèle 3
|     www.abc.com/LaClasse/LesDifferents/NomDeLaMethode/clee1-clee2-...-clee_n
|
|--------------------------------------------------------------------------------*/
    private static $no_model_url=1;
/*--------------------------MAGIC------------------------------------------------
|
|            En ca d'utilisation de plusieurs models d'urls
|              Bien définir le model par defaut de l'url
|            En cas de non definition du model d'url par defaut,
|                  une valeur par defaut sera utilisée : 1
|-------------------------------------------------------------------------------*/
    private static $no_model_url_default=1;
/*-------------------------------------------------------------------------------
|             En cas d'utilisation de l'url 3. La variable $key_words designe
|                               le nombre de mots clés situés à la
|                                        fin de l'url
|--------------------------------------------------------------------------------*/
    private static $key_words=15;
/*-------------------------------------------------------------------------------*/



/*--------------------Pages personnalisables------------------------------------
|                         La page 404 Error
|        nom du fichier page erreur personnalisee sans prefixe, sera ajout auto
|-------------------------------------------------------------------------------*/
  private static $name_personal_page_error="page404";
/*-------------------------------------------------------------------------------
|           La page accueille, à crréer dans le controllers du MVC
|         Nom du fichier page accueille sans prefixe, sera ajout auto
|--------------------------------------------------------------------------------*/
    private static $name_of_home_page="home";
/*------------------------------------------------------------------------------
|
|
|
|-------------------------DATABASE AUTH-----------------------------------------
|
|                 use DataBase ? choose true or false
|-------------------------------------------------------------------------------*/
    private static $use_database=true;
/*--------------------------------------------------------------------------------
|     si $use_database==false, les variables ci dessous ne ferons pas effets
|                 Premier paramètre : Le type de Base de Données
|---------------------------------------------------------------------------------*/
    private static $type_db="mysql";
/*---------------------------------------------------------------------------------
|                   Le nom de l'hote
|--------------------------------------------------------------------------------*/
    private static $host="localhost";
/*---------------------------------------------------------------------------------
|                   Le nom de la base de données
|---------------------------------------------------------------------------------*/
    private static $db_name="ciud";
/*---------------------------------------------------------------------------------
|                   Le nom d'utilisateur
|---------------------------------------------------------------------------------*/
    private static $user="root";
/*---------------------------------------------------------------------------------
|                   Le mot de passe
|----------------------------------------------------------------------------------*/
    private static $password="";
/*---------------------------------------------------------------------------------
|
|
|
|
|
|
|-------------------------AutoLoading Files-----------------------------------------
|
|         Configuration du dossier de pris en charge automatique des fichiers
|
|-----------------------------------------------------------------------------------
|          Pris en charge du chargement ?
|          Mettre true ou false selon le besoin
!----------------------------------------------------------------------------------*/
    private static $loading=true;
/*----------------------------------------------------------------------------------
|               Chemin du dossier à partir de chaque module installés
|---------------------------------------------------------------------------------*/
    private static $path_auto_load="files/";
/*---------------------------------------------------------------------------------
|
|
|
|-------------------------Define Modules-----------------------------------------
|
|                     Section d'insertion d'un nouveau packacge
|                  Rappel  Le Module par defaut est Le dossier "app"
|
|
|                       Ajouter autant de Modules Encompletant
|                 le tableau ci-dessous avec les nons des modules
|
|
|                 Les Modules installés sont situés à la racine du site
|                      dans les dossiers portant le prefixe "app-"
|
!----------------------------------------------------------------------------------
|
|---------------------------------------------------------------------------------*/
    private static $modules=["al_admin","myfaculty","ciud"];
/*----------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------------
|               Utilisation du protocol HTTPS
|---------------------------------------------------------------------------------*/
    public static $use_https=false;
     public static $use_ajax=true;


    function __construct()
    {

    }



    /**
    * @access public
    */

    public static function getConfigurationBase()
    {
      $array_config=[
                        self::$separator_of_actions,
                        is_file(self::getControllersRoot().self::getPrefixeFiles().self::getNamePageError().".php"),
                        is_file(self::getControllersRoot().self::getPrefixeFiles().self::getNameHomePage().".php")
                      ];
      return $array_config;
    }


    /**
    *@access public
    */

    public static function getDataAuthDB()
    {
      if (self::$use_database)
      {
        $data_auth = array('type_db' => self::$type_db,
                           'host' =>self::$host ,
                           'db_name' =>self::$db_name ,
                           'user' =>self::$user ,
                           'password' =>self::$password);
      }
      else
      {
        $data_auth = array();
      }
      return $data_auth;
    }

    /**
    *@access public
    */

    public static function getNoModelUrlDefault()
    {
       return self::$no_model_url_default;
    }


        /**
        *@access public
        */

        public static function getKeyWordsUrl()
        {
           return self::$key_words;
        }

    /**
    *@access public
    */

    public static function getPathAutoLoad()
    {
       return self::$path_auto_load;
    }

    /**
    *@access public
    */

    public static function getLoading()
    {
       return self::$loading;
    }


    /**
    *@access public
    */

    public static function getNoModelUrl()
    {
       return self::$no_model_url;
    }

    public static function getModelUrl($no_model_url)
    {
       switch ($no_model_url) {
        case 1:
           return "Modele 1 : <br/>www.exemple.com/LaClasse/Les/DifferentsNoms/DeLaMethode/etc";
          break;

        case 2:
             return "Modèle 2 : <br/>www.abc.com/LaClasse/LaMethode/param1/param2/param3/.../paramN";
          break;

        case 3:
               return "Modèle 3 : <br/>www.abc.com/LaClasse/LesDifferents/NomDeLaMethode/clee1-valeur1+clee2-valeur2";
          break;

        default :
           return "Incoonnu";
           break;
       }

    }

    public static function getPrefixeFiles()
    {
       return self::$prefixe;
    }

    /**
    *@access public
    */

    public static function getPrefixePaths()
    {
       return self::$prefixe_paths;
    }

    /**
    *@access public
    */

    public static function getLayoutsRoot()
    {
       return self::$layouts_root;
    }

    /**
    *@access public
    */

    public static function getViewsRoot()
    {
       return self::$views_root;
    }

    /**
    *@access public
    */

    public static function getControllersRoot()
    {
       return self::$controllers_root;
    }

    public static function getControllersAjaxRoot()
    {
       return self::$ajax_root;
    }

    public static function getViewsAjaxRoot()
    {
       return self::$ajax_root_view;
    }

    public static function getModelsRoot()
    {
       return self::$models_root;
    }

    // /**
    // *@access public
    // */
    //
    // public static function getNbPartsOfUrl()
    // {
    //
    //  return self::$number_of_actions_plus_controller;
    // }

    /**
    *@access public
    */

    public static function getLang()
    {
       return self::$lang;
    }

    public static function getNamePageError()
    {
       return self::$name_personal_page_error;
    }

    public static function getNameHomePage()
    {
       return self::$name_of_home_page;
    }


    /**
    *@access public
    */

    public static function getSeparatorOfActions()
    {
       return self::$separator_of_actions;
    }


    /**
    *@access public
    */

    public static function getModules()
    {
       return self::$modules;
    }

    public static function getModelsPathName()
    {
       return self::$models_path_name;
    }

  }

 ?>
