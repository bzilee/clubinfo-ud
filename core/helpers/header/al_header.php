<?php


/**
 * Fichier d'entetes'
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 * @author Apps Lernen
 * @package core
 *
 */

 namespace core\helpers\header;


 class Header
 {

   function __construct()
   {

   }

   public static function basic()
   {
     header('Content-Type: text/html; charset=utf-8');
     header('Generator: Make with Allib-PHP v1.0; Powered By Apps Lernen; facebook/appslernen; www.apps-lernen.com');
   }

   public static function statut($number)
   {
      switch ($number) {
        case 404:
          header("HTTP/1.0 404 Page not found");
          break;
        default:
          echo "Alert : CODE du Statut incorrect";
          break;
      }
   }

   public static function myName($value='')
   {
     echo "Mon nom";
   }


     /**
    * @access public
    * @param $type_file
    * @param $name_file
    * @return
    */
     public static function download($name_file="",$type_file="")
     {
       header('Content-Type: application/pdf');
       header('Content-Disposition: attachment; filename="'.$name_file.".".$type_file.'"');
       readfile('a.pdf');  //source du fichier;
     }

     /**
    * @access public
    * @param $type_file
    * @param $name_file
    * @return
    */
     public static function redirection($lien)
     {
       header("Location: ".$lien." ");
     }

 }
