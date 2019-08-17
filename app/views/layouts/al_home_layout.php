<!DOCTYPE html>
<html lang="fr">
<head>
  <base href="<?php echo BASE;?>">
   <link rel="icon" type="image/x-icon" href="fav.ico" />
   <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="fav.ico" /><![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo (isset($title)?$title:"Empty title"); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo LIB.'Materialize/css/materialize.min.css'; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_GLYPH; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_ICONS; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_STYLE; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_MAIN; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo LIB_WOW_CSS; ?>" media="screen,projection">
  <?php echo (isset($styles)?'<link rel="stylesheet" href="'.CSS.$styles.'.css" media="screen" title="no title" charset="utf-8">':""); ?>
  <?php echo (isset($font)?'<link rel="stylesheet" href="'.FONTS.$font.'" media="screen" title="no title" charset="utf-8">':""); ?>
</head>
<body bgcolor="#c8bdbd" id="body-id">
    <?php require 'al_menu_layout.php'; ?>
    <div class="row row-content">
      <div class="col s12  margin-top-1 ">
        <div class="row all-content-1 color-back-content ">
     		 <?php self::content($content,$data);	?>
        </div>
      </div>
    </div>
     <?php require 'al_footer_layout.php'; ?>
   <div id="fb-root"></div>
<span id="view-id"><notification></notification></span>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=1636359836484395&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	 <script src="<?php echo LIB.'jQuery/jquery.min.js'; ?>"></script>
	 <script src="<?php echo MATERIALIZE_LIB; ?>"></script>
   <script src="<?php echo LIB_WOW_JS; ?>"></script>
   <script src="<?php echo LIB_ALL.'Vue.js/vue.js'; ?>"></script>
   <script src="<?php echo JS.'ciud-vue.js'; ?>"></script>
   <script src="<?php echo JS_MAIN; ?>"></script>
   <?php echo (isset($js)? '<script src="'.JS.$js.'.js"></script>':''); ?>
   
</body>
</html>
