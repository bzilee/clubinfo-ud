<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <title></title>



<style media="screen">
  table
  {
    border-spacing: 0;
    border: 1px solid black;
    width: 100%;
  }
  body
  {
    background-color: #d2cece;
  }
  .container
  {
    width: 90%;
    margin: 0 calc(100% - 90% - 5%) 0 calc(100% - 90% - 5%);
  }

  .title-config
  {
    text-align: center;
    color: white;
    font-family: 'bubbleboddy light';
    padding: calc((20px)/4) 0 calc((20px)/4) 0;
    margin: 50px calc((100% - 80%)/2) 50px calc((100% - 80%)/2);
    width: 80%;
  box-shadow: inset -1px 1px 0px 0px #7d7a7a;
  }
.error-config
  {
    background-color: #607d8b;
    font-size: 20px;*/
  }
  thead
    {
      background-color: #607d8b;
    }
    .mhead
      {
        background-color: #607d8b;
      }

    .infos-1
    {
    /* height: 30px; */
    /*position: fixed;
    bottom: 0;
    left: 0;*/
    width: calc(100% - 20px);
    background-color: black;
    color: dimgrey;
    padding: calc(15px / 4) 10px calc(15px / 4) 10px;
    font-family: 'bubbleboddy light';
    text-align: center;
    }
</style>

</head>
<body>
<div class="container">
    <p class="title-config error-config"><?php echo STRING_MINIMAL_CONFIG; ?></p>
    <table border=1>
      <thead>
        <td><?php echo STRING_PROPATY; ?></td>
        <td><?php echo STRING_VALUES; ?></td>
        <td><?php echo STRING_ACCESSIBILITY; ?></td>
      </thead>

      <tr>
        <td><?php echo STRING_LANGUAGE; ?></td>
        <td><?php echo STRING_FR_EN; ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_LANGUAGE_DEFAULT;?></td>
        <td><?php echo (Config::getLang()=="french")?"Français":"English"; ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>

      <tr>
        <td class="mhead" style="text-align:center;" colspan="3"><?php echo STRING_DB; ?></td>

      </tr>
      <tr>
        <td><?php echo STRING_ACCESS_METHOD; ?></td>
        <td>PDO</td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_SGBD; ?></td>
        <td><?php echo $type_db; ?></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo STRING_HOTE; ?></td>
        <td><?php echo $host; ?></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo STRING_NAME_DB; ?></td>
        <td><?php echo $db_name; ?></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo STRING_USER; ?></td>
        <td><?php echo $user; ?></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo STRING_PASSWORD; ?></td>
        <td><?php echo $password; ?></td>
        <td></td>
      </tr>
      <tr>
        <td class="mhead" style="text-align:center;"colspan="3">URL</td>

      </tr>
      <tr>
        <td><?php echo STRING_MODEL_URL; ?></td>
        <td><?php echo Config::getModelUrl(Config::getNoModelUrl()); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_MODELE_URL_DEFAULT; ?></td>
        <td><?php echo Config::getModelUrl(Config::getNoModelUrlDefault()); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_KEY_WORDS_URL; ?></td>
        <td><?php echo Config::getKeyWordsUrl(); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td class="mhead" style="text-align:center;"colspan="3"><?php echo STRING_NAME_FILES_PATH; ?></td>

      </tr>
      <tr>
        <td><?php echo STRING_SEPARATOR_FILES; ?></td>
        <td><?php echo Config::getPrefixeFiles(); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_SEPARATOR_PATH; ?></td>
        <td><?php echo Config::getPrefixePaths(); ?></td>
        <td><?php echo STRING_UNTAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_CONTROLLERS_ROOT; ?></td>
        <td><?php echo Config::getControllersRoot(); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_MODELS_ROOT; ?></td>
        <td><?php echo Config::getModelsRoot(); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_VIEWS_ROOT; ?></td>
        <td><?php echo Config::getViewsRoot(); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_LAYOUTS_ROOT; ?></td>
        <td><?php echo Config::getLayoutsRoot(); ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_CHARGING_PATHS; ?></td>
        <td><?php echo (Config::getLoading()==true)? STRING_YES:STRING_NO; ?></td>
        <td><?php echo (Config::getLoading()==true)? STRING_TAKING:STRING_UNTAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_PATH_AUTO_LOAD_ROOT; ?></td>
        <td><?php echo Config::getPathAutoLoad(); ?></td>
        <td><?php echo (Config::getLoading()==true)? STRING_TAKING:STRING_UNTAKING; ?></td>
      </tr>
      

      <tr>
        <td><?php echo STRING_SEPARATOR_ACTIONS; ?></td>
        <td><?php echo "\"".Config::getSeparatorOfActions()."\""; ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td class="mhead" style="text-align:center;"colspan="3"><?php echo STRING_PAGES_PERSONNAL; ?></td>

      </tr>
      <tr>
        <td><?php echo STRING_NAME_HOME_PAGE; ?></td>
        <td><?php echo "\"".Config::getNameHomePage()."\""."<br/>Utilisation  : ".Config::getControllersRoot().Config::getPrefixeFiles().Config::getNameHomePage().".php"; ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
      <tr>
        <td><?php echo STRING_NAME_PAGE_ERROR; ?></td>
        <td><?php echo "\"".Config::getNamePageError()."\""."<br/>Utilisation  : ".Config::getControllersRoot().Config::getPrefixeFiles().Config::getNamePageError().".php"; ?></td>
        <td><?php echo STRING_TAKING; ?></td>
      </tr>
    </table>
    <div class="infos-1">
      <?php echo STRING_FOOTER; ?> <span class="author"><a href="<?php echo URL_APPSLERNEN;?>" target="_blank" ><?php echo STRING_FOOTER_; ?></a></span> <?php echo STRING_FOOTER__; ?>
    </div>

</div>

</body>
</html>