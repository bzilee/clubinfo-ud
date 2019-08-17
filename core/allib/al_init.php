<?php

/**
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 * @author   Apps Lernen
 * @category Initialise
 * @package core
 */
namespace core\allib;
use core\middleware\Http;


if(!defined("ALLIB"))  define("ALLIB","core/allib/");
require_once(WEB_ROOT.ALLIB."al_constant.php");
require_once(WEB_ROOT."core/helpers/allib/al_fonctions.php");
require_once(WEB_ROOT."core/helpers/debug/al_helper.php");
require_once(WEB_ROOT."core/helpers/helpers_server/al_var_server.php");
require_once(WEB_ROOT.ALLIB."al_auto_loader.php");
spl_autoload_register("al_auto_loader");
require_once(WEB_ROOT.LANG."al_".Config::getLang().".php");




  class Initialise extends Dispatcher
  {

/**
 * Le constructeur
 *
 * @param
 * @return instancie le dispatcher
 */

    function __construct()
    {
        if (Config::getLoading()==true)
        {
            new Loading();
        }

        //Verification du protocol et utilisation
        if (Config::$use_https===true) {
            Http::httpsProtocol();
        }

        //Construction de tout les PACKAGEs
        parent::__construct();
    }

  }



 ?>
