<?php

/**
 * Secure
 * Module de gestion de la securité
 */

 namespace core\middleware;
 

class Http 
{

  function __construct()
  {

  }

  public static function httpsProtocol()
  {
     if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
        $redirect = 'https://' .'www.'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $redirect);
        exit();
      }
     
  }

}

 ?>
