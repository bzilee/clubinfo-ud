<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo STRING_TITLE_CHECK_CENTER; ?></title>
    <style type="text/css">

    @@font-face
    {
        font-family: 'bubbleboddy light';
        src:
             url('css/Bobbleboddy_light.ttf') format('truetype');
    }
    @@font-face
    {
        font-family: '[z] Arista Light';
        src:
             url('css/[z] Arista light.ttf') format('truetype');
    }
    @@font-face
    {
        font-family: 'Roboto';
        src:
             url('css/Roboto-Light.ttf') format('truetype');
    }

    @@font-face
    {
        font-family: 'Roboto';
        src:
             url('css/Roboto-Bold.ttf') format('truetype');
    }


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

    .header
    {
      color: white;
    font-family: 'bubbleboddy light';
    	/*font-style: bold;*/
    	padding: calc((30px)/2) 0 calc((30px)/2) 0;
    	margin: 50px calc((100% - 80%)/2) 0 calc((100% - 80%)/2);
    	width: 80%;
		box-shadow: inset -1px 1px 0px 0px #7d7a7a;
    }

    .title-config
    {
      color: white;
      font-family: 'bubbleboddy light';
    	padding: calc((20px)/4) 0 calc((20px)/4) 0;
    	margin: 50px calc((100% - 80%)/2) 0 calc((100% - 80%)/2);
    	width: 80%;
		box-shadow: inset -1px 1px 0px 0px #7d7a7a;
    }

     .bloc-s
    {
      font-family: 'Roboto';
    	display: inline-block;
    	margin-bottom: 10px;
    	font-style: italic;
    	padding: calc((30px)/2) 0 calc((30px)/2) 0;
    	width: calc(100%);
    	min-height: calc(15px);

    }

    .liste-erreurs  p:last-child
   {
     margin-bottom: 50px;
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
    font-family: 'bubbleboddy light';
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
      font-family: '[z] Arista Light';
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

      <p class="header error">
        <?php echo STRING_CHECK_CENTER; ?>
      </p>

      <p class="title-config error-config"><?php echo STRING_CONFIG_STATE; ?></p>
      <div class="liste-erreurs">
      <?php
      
        foreach (Authentification::getErrorConfig() as $value) {
        ?>
        <p class="bloc-s alert">
        <?php echo $value ?><br/>
        </p>
        <?php
        }
      ?>
          <!-- <p class="bloc-s ok">
          ok !<br/>
          </p> -->

        <div class="infos-1">
          <?php echo STRING_FOOTER; ?> <span class="author"><a href="<?php echo URL_APPSLERNEN;?>" target="_blank" ><?php echo STRING_FOOTER_; ?></a></span> <?php echo STRING_FOOTER__; ?>
        </div>
     </div>

  </div>
  </body>
</html>
