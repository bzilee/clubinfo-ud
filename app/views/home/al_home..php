
<h5 class="col s12 accent-3 margin-top-small radius-top align-center-small">NOS ACTIVITES</h5>
<h6 class="col offset-s1 s10 l12 small-description">L’élément principal de la mission du club est le partage de connaissances. Le club a mis en place les activités décrites ci-après pour favoriser l’acquisition de nouvelles connaissances par ses membres. Pour obtenir des informations sur une de ces activités, cliquez sur le lien  associé à l’activité.</h6>

<?php 
    if (isset($data_home) AND count($data_home)!=0 and count($data_home[0])!=0) {
    foreach ($data_home[0] as $value) {
      
  ?>
           <div class="col s12 l6">
              <img src=""><div class="style-icons activity-icon"><?php echo $value['ic_img'];?></div>
              <h5 style="text-align:center;"> <font color="#0071c5"><?php echo $value['activity_name'];?></font></h5>
              <p class="col offset-s1 s10 offset-m1 m9 m6 offset-l1 l10 activity-text">
              <?php echo $value['activity_description'];?>
              </p>
            </div> 
<!-- 18/05/2018 13:01:99 -->
  <?php
}
  } else {
    ?>
      <div class="col s12 bloc-actu" style="height:1000px;text-align: center;" >
        <p class="" style="font-size: 25px;margin-top: 100px;"> Opps ... pas d'activités pour l'instant.
      </div>
    <?php
  }

?>
            <!-- End ACITIVITY -->
            <!-- ACTU -->
            <h5 class="col s12 accent-3 margin-top-small align-center-small actu-a-la-une">ACTUALITES A LA UNE</h5>
            <!--  -->
  <?php
     if (count($data_home)!=0 and count($data_home[1])!=0) {
    foreach ($data_home[1] as $value) {
      ?>

            <div class="col s12 l6 actu-block" style="height:200px;">
              <div class=""style="margin:0 10px;background-color:#000;">
                <div class="image-descript" style="height:160px;">
                  <img src="<?php echo  $value['img_directory']; ?>" style="height:inherit;">
                </div>
                <div class="title-actu" style="height:40px;background-color:#0874c5;">
                  <p><?php echo  $value['title']; ?><p>
                </div>
              </div>
            </div>
         <?php
  }

  } else {
    ?>
      <div class="col s12 bloc-actu" style="height:1000px;text-align: center;" >
        <p class="" style="font-size: 25px;margin-top: 100px;"> Opps ... pas d'actualites pour l'instant.
      </div>
    <?php
  }

?>
        
            <h5 class="col s12 accent-3 margin-top-small align-center-small actu-a-la-une">NOS PARTENAIRES</h5>


<?php 
    if (count($data_home)!=0 and count($data_home[2])!=0) {
    foreach ($data_home[2] as $value) {
      
  ?>

            <div class="col s6 l4 partenaire-block" style="height:100px;text-align:center;">
              <img src="<?php echo $value['logo_path'];?>">
              <p><?php echo $value['name'];?></p>
            </div>

     <?php
  }

  } else {
    ?>
      <div class="col s12 bloc-actu" style="height:1000px;text-align: center;" >
        <p class="" style="font-size: 25px;margin-top: 100px;"> Opps ... pas de partenaires pour l'instant.
      </div>
        <?php
  }

?>
           
            <!-- End Partenaires -->
