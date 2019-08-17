<?php


    /**
     *
     * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
     * @link          http://www.apps-lernen.com
     * @author   Apps Lernen
     * @category Dispatcher
     * @package core
     */
    namespace core\allib;
    
    class Dispatcher extends Route
    {

      function __construct()
      {
          self::dispatch();
      }

      /**
       * Aiguilleur principal
       *
       * Verifie l'éxistence du chemin de la ressource(url) et et de son contenu
       *
       * @access private
       * @param string $_GET['ref'] Variable globale contenant le chemin de la ressource emis depuis le fichier *.htaccess situé à la racine du site
       * @return appel_de_son_co-aiguilleur fonction
       */

       private static function dispatch()
       {
         $auth=new Authentification(self::getModule());

         if(count($auth->getErrorConfig())===0)
         {

           if (isset($_GET['ref']) && $_GET['ref']!=="")
           {
             self::_controller();
           }
           else
           {
              self::getHomePage();
           }
         }
         else
         {
          self::getViewConfig(); //CENTRE DE CONTROLE DES CONFIGURATIONS
         }
      }

      /**
      * Get Module
      *
      *@access public
      *
      */
      public static function getModule()
      {

      $modules=Config::getModules();

      $url=parent::parse_url(); //Array, netoyage et retour tableau de parties d'url
      $controller_or_module=(isset($url[0])? $url[0] : "");

      return $module=(in_array($controller_or_module,$modules))? PREFIXE_MODULE.$controller_or_module : DEFAULT_MODULE;

      }


      /**
      * Co-Aiguilleur principal
      *
      *@access private
      *
      */
      private static function _controller()
      {
          $default_model_url="Dispatcher_".Config::getNoModelUrlDefault();
          if (isValidUrlWithParams()===false) getPageError();

          switch (Config::getNoModelUrl()) {
            case 1:
                self::Dispatcher_1();//Dispatcher_1();
              break;
            case 2:
                self::Dispatcher_2();
              break;
            case 3:
                self::Dispatcher_3();
              break;

            default:
                self::$default_model_url();
              break;
          }

      }

      /**
      * 
      *
      *@access private
      *
      */
      private static function getViewConfig()
      {
          if (is_file(PATH_ERROR_ROOT."al_write_config_state.php"))
          {
            require_once(WEB_ROOT.PATH_ERROR_ROOT."al_write_config_state.php");
          }
          else
          {
            echo "<h2 style='position:relative;top:calc(100vh /2);'>
            <p align='center' >
              Ooops ! Mauvaise configuration !
            </p>
            </h2>";
          }


      }

      /**
       * undocumented function summary
       *
       * Undocumented function long description
       *
       * @param type var Description
       * @return return type
       */
      public static function getHomePage()
      {
        if(file_exists(self::getModule()."/".Config::getControllersRoot().Config::getPrefixeFiles().Config::getNameHomePage().".php"))
        {
          require_once
           (WEB_ROOT.self::getModule()."/".Config::getControllersRoot().Config::getPrefixeFiles().Config::getNameHomePage().".php");
           $control=ucfirst(Config::getNameHomePage());
           $c=new $control();//infos de la base de donnees
           $c->index();
        }
        else
        {
           write_error(get_class().'/'.$control.':'.$action.'/','Impossible de trouver la page d\'acceuil :'.$control, 002);
          getPageError();
        }
      }


      /**
       *
       * Page d'action
       *
       * Fonction de génération page d'action
       *
       * @access private
       * @param array<string> $action L'action à afficher
       * @return $action_final string
       */

      protected static function getParamss($array_param)
      {
        $params=[];

        $array_params=explode('-' , $array_param);

        if (count($array_params) <= Config::getKeyWordsUrl())
        {
          for ($i=(count($array_params) - 1);$i >= 0  AND $i <= (count($array_params) - 1) ;$i--)
          {
            $params[$i]=$array_params[$i];
          }
          echo "string-1";
        }
        else
        {
          for ($i=(count($array_params) - 1);$i >= (count($array_params) - Config::getKeyWordsUrl())  AND $i <= (count($array_params) - 1) ;$i--)
          {
            $params[$i]=$array_params[$i];
          }
          echo "string-2";
        }
          return $params;
      }


            /**
             * Dispatcher N°1
             *
             * Fonction de traitement du modèle d'url n°1
             *
             */
            public static function Dispatcher_1()
            {
              $modules=Config::getModules();
              $url=parent::parse_url(); //Array, netoyage et retour tableau de parties d'url
              $controller_or_module=(isset($url[0])? $url[0] : "");

                /*----------------Détection du module--------------------------*/
              if(!in_array($controller_or_module, $modules))
              {

                  self::gestionModulesParDefault($controller_or_module,$url);

              }
              else
              {
                  // echo "ici les modules";
                  self::gestionModulesNonParDefault($controller_or_module,$url);
              }
            /*-------------------End : Détection module-----------------------*/
            }

            public static function detectModule()
            {

             $modules=Config::getModules();
              $url=parent::parse_url(); //Array, netoyage et retour tableau de parties d'url
              $controller_or_module=(isset($url[0])? $url[0] : "");
                 if(!in_array($controller_or_module, $modules))
              {

                  return "";

              }
              else
              {
                  return $controller_or_module;
              }
            }


            /**
             * gestionModulesNonParDefault
             *
             * Fonction de gestion des Modules
             *
             * @access protected
             * @param string $module Le Module à gerer
             * @param array<string> $url L'url
             */

            protected static  function gestionModulesNonParDefault($module,$url)
            {
              /*------------------Traitement------------------------*/
              $controller=(isset($url[1])? $url[1] : "");
              $actions=($controller=="") ? "" : parent::getActions($url,2); //Contient les actions($actions[0]) et les paramètres($actions[1])
                if ($controller=="")
                {
                  self::getHomePage();
                }
                else
                {
                    if (is_file(PREFIXE_MODULE.$module."/".Config::getControllersRoot().Config::getPrefixeFiles().$controller.".php"))
                    {
                        if ($controller!="home")
                         {
                           require_once(WEB_ROOT."app-".$module."/".Config::getControllersRoot().Config::getPrefixeFiles().$controller.".php");
                           $control=ucfirst($controller);
                              /*------Est-ce un fichier class ?-------*/
                               if(class_exists($control, false))
                               {
                                 $c=new $control();
                               }
                               else
                               {
                                 /*----------Follow(Redirection) à la page d'erreur------------*/
                                 $title=STRING_TITLE_TO_GET_CLASS;
                                 $msg=STRING_ERROR_TO_GET_CLASS;
                                 $footer=STRING_FOOTER_PAGE_;
                                 require_once(PATH_ERROR_ROOT."al_write_error_.php");
                                 die();
                               }
                               /*------End : Est-ce un fichier class ?-------*/

                           $action=self::getFinalAction($actions[0],2);

                           /*------Est-ce un fichier class ?-------*/

                           // echo var_dump($actions[0])."vide";
                           // echo $action."vide";
                           if (method_exists($c, $action))
                           {
                             $c->$action($actions[0],$actions[1]);
                           }
                           else
                           {
                            write_error(get_class().'/'.$control.':'.$action.'/','Méthode inéxistante du controleur :'.$control, 003);
                            getPageError();
                           }

                         }
                         else
                         {
                           write_error(get_class().'/'.$control.':'.$action.'/','Erreur lors de l\'instanciation du Controleur :'.$control, 002);
                          getPageError();
                         }
                    }
                    else
                    {
                       write_error(get_class().'/'.$control.':'.$action.'/','Controleur inéxistante  :'.$control, 002);
                      getPageError();
                    }
                          /*--------------------End : Traitement--------------------------------*/
                }
            }

            protected static  function gestionModulesParDefault($controller,$url)
            {

              /*------------------Traitement------------------------*/
              $actions=($controller=="") ? "" : parent::getActions($url); //Contient les actions($actions[0]) et les paramètres($actions[1])
              $control="";
               $action="";

              if (is_file(DEFAULT_MODULE."/".Config::getControllersRoot().Config::getPrefixeFiles().$controller.".php"))
              {
                  if ($controller!="home")
                   {
                     require_once(WEB_ROOT.DEFAULT_MODULE."/".Config::getControllersRoot().Config::getPrefixeFiles().$controller.".php");
                     $control=ucfirst($controller);
                        /*------Est-ce un fichier class ?-------*/
                         if(class_exists($control, false))
                         {
                           $c=new $control();
                         }
                         else
                         {
                           /*----------Redirection à la page d'erreur------------*/
                           $title=STRING_TITLE_TO_GET_CLASS;
                           $msg=STRING_ERROR_TO_GET_CLASS;
                           $footer=STRING_FOOTER_PAGE_;
                           require_once(PATH_ERROR_ROOT."al_write_error_.php");
                           die();
                         }
                         /*------End : Est-ce un fichier class ?-------*/

                     $action=self::getFinalAction($actions[0]);

                     /*------Est-ce un fichier class ?-------*/
                     if (method_exists($c, $action))
                     {
                        
                       $c->$action($actions[0],$actions[1]);//recois le bloc d'action + les parametres
                     }
                     else
                     {
                       write_error($_GET['ref'],'Méthode inéxistante du controleur :'.$control, 003);
                      getPageError();

                     }

                   }
                   else
                   {
                     write_error($_GET['ref'],'Erreur lors de l\'instanciation du Controleur :'.$control, 002);
                    getPageError( );
                   }
              }
              else
              {
                  write_error($_GET['ref'],'Controleur inéxistante  :'.$control, 002);
                getPageError();
              }
                    /*--------------------End : Traitement--------------------------------*/
            }
            protected static  function Dispatcher_2()
            {

            }


    }

 ?>
