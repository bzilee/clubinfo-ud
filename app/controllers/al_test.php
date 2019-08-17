<?php



/**
 *@author Apps Lernen
  *@category Controllers
  *@package app-myfaculty/controllers
 */

class Test extends core\allib\Controller
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
    }

    public function b_s($a,$b)
    {
      //echo var_dump($b);
      // echo "Bonjour/Bonsoir";
      echo $_POST['id'];
       echo $_POST['password'];
    }

    public function b($a,$b)
    {
    //  echo var_dump($a);
      echo'<br/>';
        echo var_dump($b);
      echo "Salut !";
      // setMsgError("Error","une erreur","By zile");
       echo "Ta mere";
    }
    public function space($a,$b)
    {
    echo "<br/>";
    echo core\helpers\userDatas\userDatas::basicUserAgent();
    }

    public function jquery($a,$b)
    {
      parent::render("layout_query","jquery",$data = array('title' => "Jquery" ,'footer'=>false ));
    }

    public function phpinfo($a,$b)
    {
      phpinfo();
    }

    public function ajax($a,$b)
    {
      parent::render("layout_query","ajax",$data = array('title' => "Jquery" ,'footer'=>false ));
    }

    public function server($a,$b)
    {
      debug($_SERVER);
    }
    public function timee($a,$b)
    {
      //echo time();
      echo core\middle\Secure::newToken();
    }

    public function secure($a,$b)
    {
      //$subjet=$_SERVER["HTTP_REFERER"]
    //  $black_list=config\AccessDenied::ARS($black_list,$subjet)
      core\middle\Secure::ARS($black_list,$subjet);
      //echo core\middle\Secure::newToken();
    }
}

 ?>
