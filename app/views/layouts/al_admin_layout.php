		<!DOCTYPE html>
		<html>
		<head>
		<link rel="icon" type="image/x-icon" href="fav.ico" />
   		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="fav.ico" /><![endif]-->
  		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title><?php echo (isset($title)?$title:"Empty title"); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo LIB.'Materialize/css/materialize.min.css'; ?>" media="screen,projection">
  		<link rel="stylesheet" type="text/css" href="<?php echo CSS_GLYPH; ?>" media="screen,projection">
  		<link rel="stylesheet" type="text/css" href="<?php echo CSS_ICONS; ?>" media="screen,projection">
  		<?php echo (isset($styles)?'<link rel="stylesheet" href="'.CSS.$styles.'.css" media="screen" title="no title" charset="utf-8">':""); ?>
  		<?php echo (isset($font)?'<link rel="stylesheet" href="'.FONTS.$font.'" media="screen" title="no title" charset="utf-8">':""); ?>
		</head>
		<body>
			 	<?php self::content($content,$data);	?>
		<div id="ciud-popup"></div>
		<div id="ciud-masque"></div>
		 <script src="<?php echo LIB.'jQuery/jquery.min.js'; ?>"></script>
	 	<script src="<?php echo MATERIALIZE_LIB; ?>"></script>
	 	<script src="<?php echo JS_MAIN; ?>"></script>
   		<script src="<?php echo LIB_WOW_JS; ?>"></script>
    	<?php echo (isset($js)? '<script src="'.JS.$js.'.js"></script>':''); ?>
		</body>
		</html>