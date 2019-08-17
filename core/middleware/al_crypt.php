<?php

  /**
   *
   */

  namespace core\middleware;

  class Crypt
  {


    function __construct()
    {
      echo "crypt";
    }

    protected static function md5($key)
    {
      return sha1(md5(md5($key))).sha1(md5(md5($key)));
    }

    protected static function randAlphabet()
    {
          $char1= array('Q','?','!','°','/','|','*','£','$','%','&','?','ì','@','#','§',']',';','-','+','ò' );
          $char2= array('A','Q','W','E','R','T','Y','Y','U','U','I','O','P','S','D','F','G','X','Z','M','B' );
          $lenght1=count($char1);
          $lenght2=count($char2);

          $crypt=$char2[rand(0,$lenght1-1)].
          rand(0,999).
          rand(0,9999).
          $char2[rand(0,$lenght2-1)].
          $char1[rand(0,$lenght1-1)].
          rand(0,9999).
          $char2[rand(0,$lenght2-1)].
          rand(0,9999).
          rand(0,99).
          $char1[rand(0,$lenght1-1)].
          rand(0,9999).
          $char2[rand(0,$lenght2-1)].
          $char1[rand(0,$lenght1-1)].
          rand(0,99).
          $char2[rand(0,$lenght2-1)];
          return $crypt;
    }

     public static function numericCode()
    {
          $char= array('A','Q','W','E','R','T','Y','H','C','U','I','O','P','S','D','F','G','X','Z','M','B' );
          $lenght=count($char);

          $crypt=rand(10,99).
          $char[rand(0,$lenght - 1)].
          $char[rand(0,$lenght - 1)].
          rand(10,99).
          $char[rand(0,$lenght - 1)].
          rand(10,99).
          $char[rand(0,$lenght - 1)];
         
          return $crypt;
    }
  }

 ?>
