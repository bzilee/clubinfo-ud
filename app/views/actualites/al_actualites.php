<h5 class="col s12 accent-3 margin-top-small radius-top align-center-small">Actualités</h5>

<?php 

	if (count($data_actu)!=0) {
		foreach ($data_actu as $value) {
			
	?>
		<div class="col s12 bloc-actu">
			<a href="actualites/detail/<?php echo strtolower($value['url_actu']).'-'.$value['id'];?>">
			<div class="img-actu-description" style="background-image:url(<?php echo $value['img_directory'];?>);">

			</div>
      	    <div class="col s12 content-actu">
				 <div class="theme-title-actu" style="">
					 <span class="theme-actu"><?php echo $value['categorie'];?> :  </span><span class="title-actualites"><?php echo  $value['title'];?></span>
				 </div>
				 <p class="small-description-actu" style=""><?php echo  $value['content'];?></p>
				 <p class="about-actualites" style=";">
						 Publié le <?php echo  $value['date_pub'];?>, par <?php echo  $value['publication_by'] ;?>.
				 </p>
       		</div>
			</a>
			</div>
<!-- 18/05/2018 13:01:99 -->
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

