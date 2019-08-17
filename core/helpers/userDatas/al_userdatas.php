<?php
/**
 * Fichier données d'utilisateur'
 * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
 * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
 * @author Apps Lernen
 * @package core
 *
 */
namespace core\helpers\userDatas;

class userDatas
{

    private static function getOS()
    {
         $platform    =   "Système inconnu";
         $array       =   array(
           '/windows nt 10/i'     =>  'Windows 10',
           '/windows nt 6.3/i'     =>  'Windows 8.1',
           '/windows nt 6.2/i'     =>  'Windows 8',
           '/windows nt 6.1/i'     =>  'Windows 7',
           '/windows nt 6.0/i'     =>  'Windows Vista',
           '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
           '/windows nt 5.1/i'     =>  'Windows XP',
           '/windows xp/i'         =>  'Windows XP',
           '/windows nt 5.0/i'     =>  'Windows 2000',
           '/windows me/i'         =>  'Windows ME',
           '/win98/i'              =>  'Windows 98',
           '/win95/i'              =>  'Windows 95',
           '/win16/i'              =>  'Windows 3.11',
           '/macintosh|mac os x/i' =>  'Mac OS X',
           '/mac_powerpc/i'        =>  'Mac OS 9',
           '/linux/i'              =>  'Linux',
           '/ubuntu/i'             =>  'Ubuntu',
           '/iphone/i'             =>  'iPhone',
           '/ipod/i'               =>  'iPod',
           '/ipad/i'               =>  'iPad',
           '/android/i'            =>  'Android',
           '/blackberry/i'         =>  'BlackBerry',
           '/webos/i'              =>  'Mobile'
         );
        foreach ($array as $regex => $value) {
            if (preg_match($regex, $_SERVER['HTTP_USER_AGENT'])) {
                $platform    =   $value;
            }
        }
         return $platform;
    }



    private static function getBrowser()
    {
        $browser        =   "Navigateur inconnu";
        $array  =   array(
          '/msie/i'       =>  'Internet Explorer',
          '/firefox/i'    =>  'Firefox',
          '/safari/i'     =>  'Safari',
          '/chrome/i'     =>  'Chrome',
          '/edge/i'       =>  'Edge',
          '/opera/i'      =>  'Opera',
          '/OPR/i'      =>  'Opera',
          '/Vivaldi/i'      =>  'Vivaldi',
          '/netscape/i'   =>  'Netscape',
          '/maxthon/i'    =>  'Maxthon',
          '/konqueror/i'  =>  'Konqueror',
          '/mobile/i'     =>  'Handheld Browser'
        );
        foreach ($array as $regex => $value) {
            if (preg_match($regex, $_SERVER['HTTP_USER_AGENT'])) {
                $browser    =   $value;
            }
        }
        return $browser;
    }

    public static function getIp()
    {
        //ip si internet est partagé
        if (isset($_SERVER['HTTP_CLIENT_IP']))
        {
            return $_SERVER['HTTP_CLIENT_IP'];
        }//ip derriere un proxy
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }//ip normal
        else{
            return (isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'');
        }

    }

    public static function getIpHost()
    {
        return ($_SERVER['HTTP_HOST']);
    }

    public static function basicUserAgent()
    {
        return self::getIp().', '.self::getBrowser().', '.self::getOS();
    }

    public static function allUserAgent()
    {
        return self::getIp().', '.self::getBrowser().', '.self::getOS();
    }

}
