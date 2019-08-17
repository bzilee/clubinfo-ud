
<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?php echo (isset($title)?$title:"Empty title"); ?></title>
  <base href="<?php echo BASE;?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo (isset($title)?$title:"Empty title"); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo LIB.'Materialize/css/materialize.min.css'; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_GLYPH; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_ICONS; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_STYLE; ?>" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_MAIN; ?>" media="screen,projection">
   <?php echo (isset($styles)?'<link rel="stylesheet" href="'.CSS.$styles.'.css" media="screen" title="no title" charset="utf-8">':""); ?>
  <?php echo (isset($font)?'<link rel="stylesheet" href="'.FONTS.$font.'" media="screen" title="no title" charset="utf-8">':""); ?>
</head>
<body bgcolor="#c8bdbd">

    <div class="header" id="header">
      <div class="slider-show" id="slider-show" style="">
        <div class="list-content" id="list-content" >
          <img class="img-slide" id="list-content" src="assets/app/images/slider/img14.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/img15.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/img16.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/img17.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/img18.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/bg_alt_1.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/bg_alt_2.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/bg_alt_3.jpg">
          <img class="img-slide" id="list-content" src="assets/app/images/slider/bg_alt_4.jpg">
        </div>
      </div>
      <!-- Menu Content  -->
      <div class="ciud-sm-menu-content" style="z-index:10001;" id="menu-content" style="">
        <nav class="mobile-menu-ciud transparent">
          <ul class="mobile-menu">
            <li class="m-menu-elements" id="prevent-default"><a href="">ACCEUIL</a></li>
             <!-- <span class="ciud-icons">&#199;</span>  -->
            <li class="m-menu-elements" id="prevent-default"><a href="actualites">ACTUALITES</a></li>
            <li class="m-menu-elements" id="seminaires"><a href="seminaires">SEMINAIRES</a></li>
              <ul class="sub-menu" id="sub-menu">
                <li class="sub-menu-elmt m-menu-elements" id="prevent-default"><a href="seminaires/anterieurs">SEMINAIRES ANTERIEURS</a></li>
                <li class="sub-menu-elmt m-menu-elements" id="prevent-default"><a href="seminaires/programmes">SEMINAIRES PROGRAMMES</a></li>
              </ul>
            <!-- <a href="#">SEMINAIRES</a>   -->
            <li class="m-menu-elements" id="prevent-default"><a href="leaders">LEADERS</a></li>
            <li class="m-menu-elements" id="prevent-default"><a href="administration">ADMINISTRATION</a></li>
          </ul>
        </nav>
      </div>
      <!--End Menu Content  -->
      <!-- Masque -->
      <div class="ciud-masque" style="">
      </div>
      <!--End masque  -->
      <!--Logo  -->
      <div class="logo-ciud">
      </div>
      <!-- End logo -->
      <!-- Header Front -->

      <div class="header-front" style="">

          <nav class="menu-ciud  ciud-menu transparent" id="menu-ciud">
            <ul class="menu-inline mobile-menu">
              <li class="menu-elements m-menu-elements" id="menu-elements"><a href="">ACCEUIL</a></li>
               <!-- <span class="ciud-icons">&#199;</span>  -->
              <li class="menu-elements m-menu-elements" id="menu-elements"><a href="actualites">ACTUALITES</a></li>
              <li class="menu-elements m-menu-elements" id="seminaires_"><a href="seminaires">SEMINAIRES</a></li>
              <li class="menu-elements m-menu-elements" id="menu-elements"><a href="leaders">LEADERS</a></li>
              <li class="menu-elements " id="menu-elements"><a href="administration">ADMINISTRATION</a></li>
            </ul>
          </nav>
          <!-- Ex sm-menu -->
          <div class="slogan-ciud ciud-slogan" id="slogan-ciud">
              <p class="slogan-1"><?php echo (isset($slogan1)?$slogan1:"Empty title"); ?></p>
              <p class="slogan-2"><?php echo (isset($slogan2)?$slogan2:"Empty title"); ?></p>
          </div>
          <div class="circle-objet objet-circle" id="circle-objet">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
          </div>
        </div><!--End Header Front  -->

        <div class="sm-menu-ciud " id="sm-menu-ciud">
          <span class="menu-div bar"></span>
          <span class="menu-div bar"></span>
          <span class="menu-div bar"></span>
        </div>
        <!-- Sub Menu -->
        <ul class="sub-menu-larg" style="float:left;" id="sub-menu-larg">
          <li class="sub-menu-larg-elmt" id="menu-elements"><a href="seminaires/anterieurs">SEMINAIRES ANTERIEURS</a></li>
          <li class="sub-menu-larg-elmt" id="menu-elements"><a href="seminaires/programmes">SEMINAIRES PROGRAMMES</a></li>
        </ul>

        <!-- Sub Menu -->
      <!-- Transite menu -->
      <div class="transite-menu menu-ciud-transition" id="transite-menu">
        <div class="logo-ciud-transite">
        </div>
        <nav class="transite-menu-ciud transparent" id="transite-menu-ciud">
          <ul class="transite-menu-inline">
            <li class="transite-menu-elements " id="transite-menu-elements"><a href="">ACCEUIL</a></li>  <!-- <span class="ciud-icons">&#199;</span>  -->
            <li class="transite-menu-elements " id="transite-menu-elements"><a href="actualites">ACTUALITES</a></li>
            <li class="transite-menu-elements " id="transite-seminaires_"><a href="seminaires">SEMINAIRES</a></li>
            <li class="transite-menu-elements " id="transite-menu-elements"><a href="leaders">LEADERS</a></li>
            <li class="transite-menu-elements " id="transite-menu-elements"><a href="administration">ADMINISTRATION</a></li>
          </ul>
        </nav>
      </div
      <!-- End transite menu -->
    </div>
    <!-- End header -->

      <!--CONTENT  -->
      <div class="row row-content">
          <?php self::content($content,$data);	?>
      </div>
      <!-- END CONTENT -->

      <!--  Footer -->
    <div class="ciud-footer">
      <div class="row footer-style row-footer">
        <div class="col l4 s12">
          <ul class="" style="" id="">
            <li class=""><a href="#!"><span class="style-icons">&#199;</span>Retour à l'Acceuil</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#60;</span>Les Actualités</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#103;</span>Les Seminaires anterieurs</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#105;</span>Les Seminaires programmés</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#34;</span>Les Learders</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#34;</span>L'administration de l'UD</a></li>
          </ul>
        </div>
        <div class="col l4 s12">
          <ul class="" style="" id="">
            <li class=""><a href="#!"><span class="style-icons">&#57;</span>Rejoindre le club ?</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#47;</span>Partenaires</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#40;</span>Historiques</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#83;</span>FAQ</a></li>
          </ul>
        </div>
        <div class="col l4 s12">
          <ul class="" style="" id="">
            <li class=""><a href="#!"><span class="style-icons">&#77;</span>A propos de nous !</a></li>
            <li class=""><a href="#!">Nous suivre<br/></a>
              <a href="#!"><span class="style-icons">F</span></a>
              <a href="#!"><span class="">G</span></a>
              <a href="#!"><span class="">T</span></a>
            </li>
            <li class=""><a href="#!"><span class="style-icons">&#195;</span>Nous contacter ?</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#92;</span>(+237)69xxxxxxx</a></li>
            <li class=""><a href="#!"><span class="style-icons">&#92;</span>(+237)67xxxxxxx</a></li>
          </ul>
        </div>
      </div>
      <p class="copyright"><?php echo COPYRIGHT; ?></p>
    </div>
      <!--  End Footer -->

      <!--  Scripts-->
	 <script src="<?php echo LIB.'jQuery/jquery.min.js'; ?>"></script>
	 <script src="<?php echo MATERIALIZE_LIB; ?>"></script>
	 <script src="<?php echo JS_MAIN; ?>"></script>
     <script src="<?php echo (isset($js)?JS.$js:""); ?>"></script>
</body>
</html>
