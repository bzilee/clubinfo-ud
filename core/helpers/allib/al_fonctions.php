<?php


use  core\helpers\header\Header, core\allib\Config,core\allib\Dispatcher;


/**
 * Fichier des fonctions
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 * @author Apps Lernen
 * @package core
 *
 */


//*************************************************************************************************

  /**
   * Allib Information
   *
   * Information de configuration du framework
   *
   * @return return Tableau dinformations
   */

  function allibinfos()
  {
    return MyConfiguration::config();
  }


  /**
   * undocumented function summary
   *
   * Undocumented function long description
   *
   * @param type var Description
   * @return return type
   */
  function arrays_in_array(...$arrays)
  {
    $arrays_in_array=[];

    foreach ($arrays as $key => $value)
    {
      $arrays_in_array[$key]=$value;
    }
    return $arrays_in_array;
  }


    /**
     * setMsgError
     *
     * Function d'affichage d'un message d'erreur personnalisable.
     *
     * @param string $title Titre de la page d'erreur
     * @param string $msg Le message d'erreur
     * @param string $footer Signature du pieds de page
     */
    function setMsgError($title,$msg,$footer)
    {
      // Follow(Redirection) à la page d'erreur
      core\helpers\header\Header::statut(404);
      require_once(PATH_ERROR_ROOT."al_write_error_.php");
      die();
    }

    function setMsgErrorAjax($code_erreur)
    {
      Header::statut(404);
      write_error('ajax/','Acces à un lien non approprié', $code_erreur);
      echo "false";
      
    }

   function getPageError($msg="")
    {
      Header::statut(404);

      //Si page d'erreur non défini

      if (empty(Config::getNamePageError()))
      {
        require_once(WEB_ROOT."core/helpers/error/al_write_error.php");
      }
      //Si non :
      else
      {
        // page d'erreur existante ? :
        if(is_file(Dispatcher::getModule()."/".Config::getControllersRoot().Config::getPrefixeFiles().Config::getNamePageError().".php"))
        {
          require_once(WEB_ROOT.Dispatcher::getModule()."/".Config::getControllersRoot().Config::getPrefixeFiles().Config::getNamePageError().".php");
          $control=ucfirst(Config::getNamePageError());
          $c=new $control();
          $c->index();
        }
        //si non page d'erreur mal configuré :
        else
        {
          require_once(WEB_ROOT."core/helpers/error/al_write_error.php");
        }

      }
        die();
    }


          /**
          *@access private
          *
          */

           function isValidUrlWithParams()
          {
              $url=getFilterUrl();
              if (preg_match("/-/", $url))
              {
                $params=explode('-', $url, 2);
                if (preg_match('@/@', $params[1]) || preg_match('/(-){2,}/', $params[1]) || preg_match('/-$/', $params[1]) || $params[1]=="")
                {
                  return false;
                }
                else
                {
                  return true;
                }

              }
              else
              {
                return true;
              }
          }


        /**
        *@access private
        *
        */

         function getFilterUrl()
        {
          return $url=filter_var($_GET["ref"], FILTER_SANITIZE_URL);  //Filtrage de l'URL
        }

        function write_error($content_,$msg,$error_code="")
        {
          $file = fopen('log/error_log.txt','a+'); // ouvrir le fichier ou le créer
          fseek($file,SEEK_END); // poser le point de lecture à la fin du fichier
          $content="";
          switch ($error_code) {
            case 404:
             $content='ERREUR 404 Url='.$content_.' message: '.$msg.'  Date= "'.Date("F j, Y, g:i a").'"'."\r\n"; // ajouter un retour à la ligne au fichier
              break;
              case 001:
             $content='ERREUR système(Module) Url='.$content_.' message: '.$msg.'  Date= "'.Date("F j, Y, g:i a").'"'."\r\n"; // ajouter un retour à la ligne au fichier
              break;
              case 002:
             $content='ERREUR système(Controleur) Url='.$content_.' message: '.$msg.'  Date= "'.Date("F j, Y, g:i a").'"'."\r\n"; // ajouter un retour à la ligne au fichier
              break;
              case 003:
             $content='ERREUR système(Méthode) Url='.$content_.' message: '.$msg.'  Date= "'.Date("F j, Y, g:i a").'"'."\r\n"; // ajouter un retour à la ligne au fichier
              break;
               case 004:
             $content='ERREUR Sécurité(Ajax) Url='.$content_.' message: '.$msg.'  Date= "'.Date("F j, Y, g:i a").'"'."\r\n"; // ajouter un retour à la ligne au fichier
              break;
            
            default:
             $content=$content_;
              break;
          }
          
          fputs($file,$content); // ecrire ce texte
          fclose($file); //fermer le fichier
        }


 ?>
