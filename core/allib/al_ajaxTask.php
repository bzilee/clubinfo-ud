<?php

  /**
  * Gestionnaire du moteur Ajax
  *
  *
  * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
  * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
  *@author Apps Lernen
  *@category Configuration
  *@package core
   */

  namespace core\allib;
  use core\middleware\Secure;
  class AjaxTask
  {

    function __construct()
    {
      
    }

    public  function referer($referTo,$view)//,$data=NULL
    {

    //  if ($data!=NULL) extract($data);
      if (Secure::isAjaxQuery()) {
          $file_ajax_query=ltrim(WEB_ROOT, "/").Dispatcher::getModule()."/".Config::getControllersRoot().strtolower(get_class($this))."/".Config::getPrefixeFiles().$referTo.".php";

          $view_ajax=Dispatcher::getModule()."/".Config::getViewsAjaxRoot().Config::getPrefixeFiles().$view.".php";

          if (is_file($file_ajax_query) && is_file($view_ajax))
          {
            require_once($file_ajax_query);
            require_once($view_ajax);
          }
          else
          {
            setMsgErrorAjax(004);
          }
     
      } else {
        getPageError();
      }

    }

   
        
  }


 ?>
