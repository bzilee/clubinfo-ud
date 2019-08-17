<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo STRING_TITLE_PAGE_ERROR; ?></title>
    <style type="text/css">
    body{
    	margin:0;
    	padding: 0;
    }

    html{
    	margin:0;
    	padding: 0;
    }

    .alert{
    	background-color: #f44336;
    	color: #FFF;
    }

    .container{

    	text-align: center;
    	width: 100%;
    	height: 100vh;
    }

    .bloc-p
    {
    	font-style: italic;
    	padding: calc((30px)/2) 0 calc((30px)/2) 0;
    	margin: 50px calc((100% - 80%)/2) 0 calc((100% - 80%)/2);
    	width: 80%;
		box-shadow: inset -1px 1px 0px 0px #7d7a7a;
    }

    .bloc-h
    {
    	padding: calc((20px)/4) 0 calc((20px)/4) 0;
    	margin: 50px calc((100% - 80%)/2) 0 calc((100% - 80%)/2);
    	width: 80%;
		box-shadow: inset -1px 1px 0px 0px #7d7a7a;
    }

     .bloc-s
    {
    	display: inline-block;
    	margin-bottom: 10px;
    	font-style: italic;
    	padding: calc((30px)/2) 0 calc((30px)/2) 0;
    	width: calc(50%);
    	min-height: calc(15px);

    }

    .infos-1
    {
    /* height: 30px; */
    position: fixed;
    bottom: 0;
    left: 0;
    width: calc(100% - 20px);
    background-color: black;
    color: dimgrey;
    padding: calc(15px / 4) 10px calc(15px / 4) 10px;
    }

    .author
    {
      color: #2196f3;
    }

    .author a:focus,
    .author a:active,
    .author a:hover,
    .author a:visited
    {
      color: #2196f3;
      text-decoration: none;
    }
    .author a:hover
    {
      color: #5bacec;
      text-decoration: none;
    }

    .author a
    {
      color: #2196f3;
      text-decoration: none;
    }

    /*.liste-erreurs p:nth-child(1)
    {
    	margin-right: 5%;
    	background-color: blue;
    }

     .liste-erreurs p:nth-child(2)
    {
    	margin-left: 5%;
    	background-color: yellow;
    }*/

    .liste-erreurs
    {
    	/*font-style: italic;*/
    	/*padding: calc((30px)/2) 0 calc((30px)/2) 0;*/
    	margin: 10px calc((100% - 80%)/2) 0 calc((100% - 80%)/2);
    	width: 80%;
    }

    .error
    {
    	background-color: #9e9e9e;
    	font-size: 25px;*/
    }

    .ok
    {
    	background-color: #4caf50;
    	font-size: 20px;*/
    }

    .error-config
    {
    	background-color: #607d8b;
    	font-size: 20px;*/
    }

    </style>
  </head>
  <body bgcolor="#424242">

  <div class="container">

      <p class="bloc-p error">
        <?php
          if ($msg[0]=="error") //type d'erreur
          {
            echo $msg[1];//Le msg1 à afficher
            echo '<span style="text-decoration:line-through;font-size:15px;">'.$msg[2].'</span>'; //Lien erroné
          }
          else if ($msg[0]=="alert")
          {
            echo $msg[1];
          }
           ?>
      </p>

      <p class="bloc-h error-config"><?php echo STRING_CONFIG_STATE; ?></p>
      <div class="liste-erreurs">
      <?php

        // INFO : $array_config[0] VAR DE CONFIG SEPARATEUR D'ACTIONS
        // INFO : $array_config[1] VAR DE CONFIG PAGE D'ERREUR
        // INFO : $array_config[2] VAR DE CONFIG PAGE D'ACCUEIL

        if ($array_config[0]!="-" and $array_config[0]!="_") {
          ?>
          <p class="bloc-s alert">
             <?php echo STRING_NO_SEPARATOR_ACTIONS; ?><br/>
          </p>
          <?php
        }
        if ($array_config[1]==false) {
          ?>
          <p class="bloc-s alert">
          <?php echo STRING_BAD_CONFIG_PAGE_ERROR; ?><br/>
          </p>
          <?php
        }
        if ($array_config[2]==false) {
          ?>
          <p class="bloc-s alert">
          <?php echo STRING_BAD_CONFIG_HOME_PAGE ?><br/>
          </p>
          <?php
        }
        if ($array_config[2]==true and $array_config[1]==true && ($array_config[0]=="-" || $array_config[0]=="_")) {
          ?>
          <p class="bloc-s ok">
          <?php echo STRING_GOOG_CONFIG_STATE; ?><br/>
          </p>
          <?php
        }
?>
        <div class="infos-1">
          <?php echo STRING_FOOTER; ?> <span class="author"><a href="<?php echo URL_APPSLERNEN;?>" target="_blank" ><?php echo STRING_FOOTER_; ?></a></span> <?php echo STRING_FOOTER__; ?>
        </div>
     </div>

  </div>
  </body>
</html>
