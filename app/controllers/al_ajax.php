<?php


/**
  * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
  * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
  *@author Apps Lernen

  *@category Controllers
  *@package app-myfaculty/controllers
 */
class Ajax extends core\allib\AjaxTask
{

    function __construct()
    {
      // self::index();
    }
    /**
     *@access public
     *@param
     *@return retourne la vue principale si pas d'actions
     */

    public function index($a,$b)
    {
      core\helpers\header\Header::statut(404);
     // parent::referer();
    }

    public function messages($a,$b)
    {
      parent::referer("get","welcome");
    }

    public function login($a,$b)
    {
     parent::referer("authentification","welcome");      
    }

    public function logout($a,$b)
    {
     parent::referer("logout","welcome");      
    }

    public function statistiques($a,$b)
    {
     parent::referer("statistiques","statistiques-form");      
    }


    public function gestion($a,$b)
    {
     parent::referer("gestion","gestion-form");      
    }

     public function analyse($a,$b)
    {
     parent::referer("analyse","analyse-form");      
    }

     public function observation($a,$b)
    {
     parent::referer("observation","observation-form");      
    }

     public function messagerie($a,$b)
    {
     parent::referer("messagerie","messagerie-form");      
    }

     public function programmation($a,$b)
    {
     parent::referer("programmation","programmation-form");      
    }

    public function journalisation($a,$b)
    {
        parent::referer("journalisation","journalisation-form");
    }

    public function parametre($a,$b)
    {
        parent::referer("parametre","parametre-form");
    }

     public function gestion_members($a,$b)
    {
     parent::referer("gestion","gestion-form-members");      
    }

     public function gestion_enregistrer($a,$b)
    {
     parent::referer("enregistrement","gestion-form-students");      
    }

      public function register_members($a,$b)
    {
     parent::referer("register-members","welcome");      
    }

    public function register_update_datas_member($a,$b)
    {
    parent::referer("register-members_update","welcome");    
    } 
    public function register_get_datas_member($a,$b)
    {
    parent::referer("register-get_datas_toUpdate","welcome");    
    } 
    public function suggestions($a,$b)
    {
    parent::referer("suggestions","welcome");    
    } 

}

 ?>
