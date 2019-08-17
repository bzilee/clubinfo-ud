<div class="col s12 l12 t-activity wow fadeInDown" data-wow-delay="0.25s" id="t-activity">
              <div style="text-align:center;" class="col s12 l4 title-our-activities" id="title-our-activities">
                NOS ACTIVITES
              </div >
              <p class="col offset-s1 s10 offset-m1 m9 m6 offset-l1 l5 activity-text">
                L’élément principal de la mission du club est le partage de connaissances. Le club a mis en place les activités décrites ci-après pour favoriser l’acquisition de nouvelles connaissances par ses membres. Pour obtenir des informations sur une de ces activités, cliquez sur le lien  associé à l’activité.
              </p>
 </div> 
<?php 
    if (isset($data_home) AND count($data_home)!=0 and count($data_home[0])!=0) {
    foreach ($data_home[0] as $key =>  $value) {
      if ($key%2==0) {
        ?>
        <!-- fadeInDown,slideInLeft, slideInRight -->
           <div class="col s12 l12 wow fadeInDown" data-wow-delay="0.25s" >
              <div class="col s12 l4">
                <div class="style-icons activity-icon"><?php echo $value['ic_img'];?></div>
               
              </div>
              <p class="col offset-s1 s10 offset-m1 m9 m6 offset-l1 l5 activity-text">
                <font color="#0071c5"><?php echo $value['activity_name'];?></font>
                <?php echo $value['activity_description'];?>
              </p>
            </div> 
<!-- 18/05/2018 13:01:99 -->
  <?php
      } else {
        ?>
           <div class="col s12 l12 activities wow fadeInDown" data-wow-delay="0.25s" id="activities">
              <p class="col offset-s1 s10 offset-m1 m9 m6 offset-l1 l5 activity-text">
                <font color="#0071c5"><?php echo $value['activity_name'];?></font>
                <?php echo $value['activity_description'];?>
              </p>
              <div class="col s12 l4">
                <div class="style-icons activity-icon"><?php echo $value['ic_img'];?></div>
              </div>
             
            </div> 
<!-- 18/05/2018 13:01:99 -->
  <?php
      }
      
  
}
  } else {
    ?>
      <div class="col s12 bloc-actu" style="height:1000px;text-align: center;" >
        <p class="" style="font-size: 25px;margin-top: 100px;"> Opps ... pas d'activités pour l'instant.
        </p>
      </div>
    <?php
  }

?>
  <div class="col s12 box-content wow fadeInDown" data-wow-duration="0.15s" style="background-color: #fafafa">
        <h5 class="col s12 accent-3 margin-top-small align-center-small actu-a-la-une wow  slideInLeft" data-wow-delay="0.5s">ACTUALITES A LA UNE</h5>
        <?php
           if (count($data_home)!=0 and count($data_home[1])!=0) {
          foreach ($data_home[1] as $value) {
            ?>

                  <div class="col s12 l3 actu-block  style="height:220px;">
                    <div class=""style="margin:0 10px;background-color:#000;">
                      <div class="image-descript" style="height:160px;">
                        <img src="<?php echo  $value['img_directory']; ?>" style="height:inherit;">
                      </div>
                      <div class="title-actu" style="height:60px;background-color:#0874c5;">
                        <p><?php echo  $value['title']; ?></p>
                        <p style="text-align: right;"><span class="ciud-icons">&#169;</span>500 vues</p>
                      </div>
                    </div>
                  </div>
               <?php
        }

        } else {
          ?>
            <div class="col s12 bloc-actu wow pulse animated" data-wow-iteration="infinite" data-wow-duration="1500ms" style="height:1000px;text-align: center;" >
              <p class="" style="font-size: 25px;margin-top: 100px;"> 
                Opps ... pas d'actualites pour l'instant.
              </p>
            </div>
          <?php
        }

      ?>
  </div>
<div class="col s12 box-content partner-box" style="background-color: #232323">
  <h5 class="col s12 accent-3 margin-top-small align-center-small actu-a-la-une wow slideInLeft" data-wow-delay="0.25s"">NOS PARTENAIRES</h5>

  <?php 
      if (count($data_home)!=0 and count($data_home[2])!=0) {
      foreach ($data_home[2] as $value) {
        
    ?>

              <div class="col s6 l4 partenaire-block wow fadeInDown" data-wow-duration="0.25s" style="height:100px;text-align:center;">
                <img src="<?php echo $value['logo_path'];?>">
                <p><?php echo $value['name'];?></p>
              </div>

       <?php
    }

    } else {
      ?>
        <div class="col s12 bloc-actu wow pulse animated" data-wow-iteration="infinite" data-wow-duration="1500ms" style="height:1000px;text-align: center;" >
          <p class="" style="font-size: 25px;margin-top: 100px;"> Opps ... pas de partenaires pour l'instant.</p>
        </div>
          <?php
    }

  ?>
</div>
           
<!-- End Partenaires -->
<div class="col s12 box-content" style="background-color: #eee;">
 <h5 class="col s12 accent-3 margin-top-small align-center-small actu-a-la-une wow slideInLeft" data-wow-delay="0.25s">VOS SUGGESTIONS</h5>
 <div class="col s12 m6 l6 wow fadeInDown suggest-us" data-wow-duration="0.25s" id="suggest-us">
   <form class="col s12 suggest-form  wow fadeInDown" data-wow-duration="0.25s" token="<?php echo $_SESSION['user']['token']; ?>" id="suggestion-form">
      <div class="col s12 input-field ">
        <label for="nom" class=""><span class="text-red"></span></label>
        <input class="ciud-input text-color-suggestion" type="text" name="nom" for="nom"  onfocus="this.value=''" placeholder="Nom et prénom" id="name">
      </div>
      <!--  -->
      <div class="col s12 input-field">
        <label for="matricule" class=""><span class="text-red"></span></label>
        <input class="ciud-input text-color-suggestion" type="text" name="tel_mail" for="matricule" placeholder="Téléphone" id="tel">
      </div>
      <!--  -->
      <div class="col s12 input-field">
        <label for="matricule" class=""><span class="text-red"></span></label>
        <input class="ciud-input text-color-suggestion" type="text" name="tel_mail" for="matricule" placeholder="address e-mail" id="mail">
      </div>
      <!--  -->
      <div class="col s12">
        <textarea class="textare-suggestion text-color-suggestion" rows="50" height="100px" cols="50" onfocus="this.value=''" name="submit-field" id="data-suggestion">Rédigez vos suggestions ici :
        </textarea>
      </div>
        
      <div class="col s12 select-field submit-field">
        <input type="submit" name="submit" value="Soumettre" class="btn btn-submit-register" id="submit-suggestion">
      </div>
    </form>
  </div>
  <div class="col s12 m6 l6 wow fadeInDown find-us" data-wow-duration="0.75s">
    <p class="contact-us">Nous retrouver :</p>
    <p><span class="ciud-icons wow pulse animated" data-wow-iteration="infinite" data-wow-duration="1500ms">&#36;</span>Campus 2, Mesaligne de l'amphi Geoge Ngango</p>
    <p><span class="ciud-icons">&#192;</span> Numéro : 655555555  655555555 655555555</p>
    <div >
     
    </div>
  </div>
  
</div>

