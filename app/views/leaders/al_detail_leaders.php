<h5 class="col s12 accent-3 margin-top-small radius-top align-center-small">Responsable des clubs d l'université de Douala</h5>
<div class="content-bloc">
 
<?php 
    if (isset($data_) and count($data_)!=0 and count($data_)!=0) {
    foreach ($data_ as $value) {
      
  ?>

      <!--  -->
      <div class="col s12 bloc-actu">
            <div class="col s12 img-assoc-description" style="background-image:url(<?php echo $value['img_directory']; ?>);">
              <div class="col s12 bloc-association">
                <a href="leaders/about/<?php echo $value['url'].'-'.$value['id']; ?>"><input type="button" class="btn btn-about-leaders bg-color-ciud" value="En savoir plus"></a>
                <p class="name-school" style=""><span class="name"><?php echo $value['etablissement']; ?></span> : Prèsident <?php echo $value['nom_president']; ?></p>
                <p class="academic-year-assoc" style="">Année academique <?php echo $value['year']; ?></p>
              </div>
            </div>
      </div>
      <!--  -->

     <?php
  }

  } else {
    ?>
      <div class="col s12 bloc-actu" style="height:1000px;text-align: center;" >
        <p class="" style="font-size: 25px;margin-top: 100px;"> Opps ... pas de Leaders dans le site pour l'instant.
      </div>
        <?php
  }

?>

</div>
