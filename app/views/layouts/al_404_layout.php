<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<base href="<?php echo BASE; ?>" target="<?php echo TARGET; ?>">
	  <link rel="icon" type="image/x-icon" href="fav.ico" />
   <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="fav.ico" /><![endif]-->

    <meta charset="utf-8">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo CSS.(isset($styles)?$styles:""); ?>" media="screen" title="no title" charset="utf-8">
    <link rel="icon" href="<?php echo IMAGES; ?>favicon.png" />

</head>
<body style="background-color:#333333;background-image:url(assets/all/images/404.gif);background-position:top;background-repeat:no-repeat;background-size: 550px;">

	<?php self::content($content,$data)	?>
</body>
</html>
