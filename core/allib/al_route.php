<?php


    /**
    * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
    * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
     *@author Apps Lernen
     *@category Route
     *@package core
     */
    namespace core\allib;
    
    class Route
    {

      function __construct()
      {
        # code...
      }

      /**
      *@access private
      *
      */

      protected static function parse_url($string=NULL)
      {
        $url=filter_var((is_null($string))?$_GET["ref"]:$string , FILTER_SANITIZE_URL);  //Filtrage de l'URL
        $url=strtolower($url); //Transformation des caractères en minuscules
        //debug(explode('-', explode('-', $url, 2)[1]));
        //debug(self::isValidUrlWithParams($url));
        $url=explode('/',$url);  //Découpage de l'URL

        for ($i=0; $i < count($url) ; $i++)
        {
          $url_[$i]=$url[$i]; //Choix des 2 premières actions
        }
        return $url_;
      }


      /**
      *@access private
      *
      */

      public static function getText()
      {
        echo "<br/>Le routeur";
      }

      /**
      * Fonction de recuperations des actions d'url
      * @access protected
      * @return Array<string> L'url à recuperer les actions
      */

      protected static function getActions($url,$start=1)
      {

        $actions[1]="";
        $params="";
      //---------------Existence du contenu $url----------------
        if (!isset($url[1]) || $url[1]=="")
        {
          $actions[$start]=""; // Si vide ou n'existe pas du tout, $actions[1] prend une chaine vide"" pour eviter tout exceptions
        }
        else
        {
          for ($i=$start; $i <= count($url)-1 ; $i++) //la boucle commence à 1 par defaut, donc taille de $url -1
          {
      //---------------Existence du contenu DU SIGNE "-" dans $url[$i]----------------
            if (preg_match("/-/", $url[$i]))
            {
              for ($j=$i; $j <= count($url)-1 ;$j++)
              {
                  $params.=$url[$j]."-";
              }
                break; //Si existence, break:la boucle s'arrete ici en recuperant tout jusqu'à la fin de l'url
            }

           else
           {
             $actions[$i]=$url[$i]; //Si non, on recupère entierement nos actions jusqu'à rencontrer le signe "-" et capturer le paramètre avec fin de la boucle
           }
      //--FIN-------------Existence du contenu DU SIGNE "-" dans $url[$i]----------------

          }
        }
      //--FIN---------------Existence du contenu $url----------------

        return arrays_in_array($actions,trim($params,"-"));
      }


            /**
             *
             * Page d'action
             *
             * Fonction de génération page d'action
             *
             * @access private
             * @param array<string> $action L'action à afficher
             * @return $action_final string
             */

            protected static function getFinalAction($actions,$start=1)
            {
              $action_final="";
              for ($i=$start; $i <= count($actions); $i++)
              {
                if ($actions[$i]!="")
                {$action_final.=$actions[$i].Config::getSeparatorOfActions();}
                else
                {/*$action_final.="index";*/break;}
              }

               if ($action_final==""){$action_final="index";}  //on retourne index si $action_final==vide
            //   debug($action_final);
              return rtrim($action_final,"_");  //suppression du dernier caractère "_"
            }

    }

 ?>
