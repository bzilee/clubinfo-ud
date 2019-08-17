<?php

  /**
  * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
  * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   *@author   Apps Lernen
   *@category Models
   *@package core
   */

  
    namespace core\allib;
    use PDO;

  class Model extends Config
  {

    public static $authentification=null;

  public  function __construct($auth_db = array())
    {


      //echo "model";die();
      //debug("model");
      //debug($auth_db);


      if(!empty($auth_db)) //Si une base de donnees est definie en dehors de celle de la configuration par defaut
      {
        extract($auth_db);
        if (isset($type_db) and isset($host) and isset($db_name) and isset($user) and isset($password))
        {
         // self::connectDB($type_db, $host, $db_name, $user, $password);
          self::$authentification=$auth_db;
        } else
        {
          echo "Données d'authentification à la base de données invalides ..."; die();
        }

      }
      else
      {

          $a=parent::getDataAuthDB();
          // echo var_dump($a);
          // extract($a);
          // self::connectDB($type_db, $host, $db_name, $user, $password);
           self::$authentification=$a;

      }
    }

    /**
   *@access public
   *@param $type_db Le type de base de données
   *@param $host Le nom de l'hote
   *@param $db_name Le nom de la base
   *@param $user  Le nom d'utilisateur
   *@param $password  Le mot de pass
   *@return Array Retourne la vue demandée
   */

  public function connectDB(/*$type_db, $host, $db_name, $user, $password*/)
  {

    //echo var_dump(self::$authentification);
    try
						{
              extract(self::$authentification);
              //echo $type_db;
              $d=$type_db.":host=".$host.";dbname=".$db_name;
               $attribute= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
              // use PDO;
							$db= new PDO($d,$user,$password, $attribute); //pour simplifier les choses db pour dataBase(base de donnees)
               $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              return $db;
							/*$db-> setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
							$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);*/
						}
						catch(PDOException $e)
						{

              if (is_file(PATH_ERROR_ROOT."al_write_error_.php"))
              {
                  $title=STRING_TITLE_PAGE_ERROR_CONNECT_DB;
                  $msg=STRING_ERROR_TO_CONNECT_DB;
                  $footer=STRING_FOOTER_PAGE_;
                  require_once(PATH_ERROR_ROOT."al_write_error_.php");
                  die();
              }
              else
              {
                echo STRING_ERROR_TO_CONNECT_DB;
               die();
              }
						}
  }

  }

 ?>
