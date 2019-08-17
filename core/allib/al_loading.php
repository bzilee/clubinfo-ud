<?php

  /**
   * Fichiers  de chargement des classes/Fichiers indepandants du "core"
   * @copyright     Copyright (c) Apps Lernen. (http://www.apps-lernen.com)
   * @link          http://www.apps-lernen.com; http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   * @author Apps Lernen
   * @package core
   * @category Loadeur
   */


  namespace core\allib;
  use DirectoryIterator;
  
  class Loading extends Dispatcher
  {

    function __construct()
    {
      self::getAutoLoadFiles();
      // self::getAutoLoadFilesModels();

    }
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param string $file_root Chemin du fichier à charger. Définition du chemin depuis la racine du site.
     * @return
     */

    public static function file_($file_root)
    {
        if (is_file($file_root))
        {
            require_once($file_root);
        }
        else
        {
          $title=STRING_TITLE_ERROR_TO_INCLUDE_FILES;
          $msg=STRING_ERROR_TO_INCLUDE_FILES;
          $footer=STRING_FOOTER_PAGE_;
          require_once(PATH_ERROR_ROOT."al_write_error_.php");die();
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
    public static function getAutoLoadFiles()
    {

      try {
          $dir= new DirectoryIterator(self::getModule()."/".Config::getPathAutoLoad());
          foreach ($dir as $file)
          {
            if ($file->getExtension()=="php" AND $file->isFile())
            {
            require_once(rtrim(self::getModule()."/".Config::getPathAutoLoad(),"/,\\")."/".$file->getFilename());
            }
          }
      }
      catch (Exception $e)
      {
          $title=STRING_TITLE_PAGE_BAD_DEFINE_OFPATH_AUTO_LOADING;
          $msg=STRING_ERROR_TO_DEFINE_PATH_TO_AUTOLOAD_FILES;
          $footer=STRING_FOOTER_PAGE_;
          require_once(PATH_ERROR_ROOT."al_write_error_.php");die();
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
    // public function getAutoLoadFilesModels()
    // {
    //   try {
    //       $dir= new DirectoryIterator(Config::getModelsRoot());
    //       foreach ($dir as $file)
    //       {
    //         if ($file->getExtension()=="php" AND $file->isFile())
    //         {
    //         require_once(rtrim(Config::getModelsRoot(),"/,\\")."/".$file->getFilename());
    //         }
    //       }
    //   }
    //   catch (Exception $e)
    //   {
    //       $title=STRING_TITLE_PAGE_BAD_DEFINE_OFPATH_AUTO_LOADING;
    //       $msg=STRING_ERROR_TO_DEFINE_PATH_TO_AUTOLOAD_FILES;
    //       $footer=STRING_FOOTER_PAGE_;
    //       require_once(PATH_ERROR_ROOT."al_write_error_.php");die();
    //   }
    // }


  }


 ?>
