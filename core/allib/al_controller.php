<?php

/**
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 *@author   Apps Lernen
 *@category Controllers
 *@package core
 */

  namespace core\allib;
   use core\helpers\header\Header, config as main;

class Controller extends Model
{


  private $var= array();
  private $db= array();

  function __construct($auth_db = array())
  {
    parent::__construct($auth_db);//instanciation du model. Le constructeur de cette va etre appele dans le Dispatcher
  }

  /** Fonction de connexion à la base de donnees
  * Cette fonction doit etre appelée dans les sous models avant d'acceder à la base de donnees
 *@access public
 *@param
 *@return Array Retourne la vue demandée
 */
  protected  function usingDataBase()
  {

    parent::__construct(Config::getDataAuthDB());  //connexion à la base de doonnées
  }

  function getdb()
  {
    return $this->db;
  }
    /**
   *@access public
   *@param
   *@return Array Retourne la vue demandée
   */

  public function setVar($var)
  {

      $this->var = array_merge($this->var, $var);

  }

  /**
   *@access public
   *@param $layout Le layout du rendu en *.php sans prefixe
   *@param $content_ Le contenu du layout en *.php sans prefixe
   *@param $data Les donnees du layout+contenu
   *@param
   *@return view/html Retourne la vue demandée
   */

  public function render($layout, $content_, $data=[])
  {

      Header::basic();

      extract($data);
      //chemin du contenu. Le layout l'incluera automatiquement (apres son inclusion).
      if (main\Config::$environnement=="outline") {
       $content=ltrim(WEB_ROOT,'/').Dispatcher::getModule()."/".Config::getViewsRoot().strtolower(get_Class($this))."/".Config::getPrefixeFiles().$content_.".php";
      //appel du layout
      } else {
       $content=WEB_ROOT.Dispatcher::getModule()."/".Config::getViewsRoot().strtolower(get_Class($this))."/".Config::getPrefixeFiles().$content_.".php";
      //appel du layout
      }
      
      
      $layout_root=Dispatcher::getModule()."/".Config::getLayoutsRoot().Config::getPrefixeFiles().$layout.".php";

      if (is_file($layout_root))
      {
        require_once($layout_root);
      }
      else
      {
        setMsgError(STRING_TITLE_LAYOUT_ERROR,STRING_ERROR_TO_GET_LAYOUT,STRING_FOOTER_PAGE_);
      }


  }

  /**
    * Fonction de verification du contenu
   *@access private
   *@param $file_path le chemin du fichier (le coontenu a afficher) à verifier l'existence
   *@return view/html Retourne la vue demandée
   */

  private function verify_content($file_name,$data=[])
  {
   
    if(isset($file_name) && is_file($file_name))
    {
      extract($data);
      return  require_once $file_name ;
    }
    else
    {
      echo "<br/>Le contenu n'a pas été défini ou est peut-etre erroné";
    }

  }

  /**
    * Fonction de gestion d'elegance
   *@access private
   *@param $file_path le chemin du fichier (le coontenu a afficher) à verifier l'existence
   *@return view/html Retourne la vue demandée
   */

  private function content($file_path,$data=[])
  {

    return self::verify_content($file_path, $data);
  }

  /**
    * Fonction de redirection
   *@access private
   *@param $url chemin de la redirection
   *@return
   */

  private function redirect($url)
  {
    header("Location:".$url);
  }

}

 ?>
