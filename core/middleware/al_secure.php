<?php

/**
 * Secure
 * Module de gestion de la securité
 */

 namespace core\middleware;


class Secure extends Crypt
{

  function __construct()
  {

  }

  public static function isAjaxQuery()
  {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest')
    {
      return true;
    }
    else
    { return false;}
  }

  /**
   * ARC Access refusé pour dautres sites
   *
   *
   */

  public static function newToken()
  {
    return parent::randAlphabet(); //parent::md5(time()*rand(1,99999));
  }

  /**
   * ARC Access refusé pour dautres sites
   *
   *
   */
  public static function ARS($black_list,$subjet)
  {
      $response=false;

      for ($i=0; $i < count($black_list) ; $i++)
      {
        if (preg_match("/".$black_list[$i]."/", $subjet))
        {
          $response=true;
          break;
        }
      }
    return $response;
  }


}

 ?>
