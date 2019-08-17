<div class="col s4 form">
	
	<form class="register-members" token="<?php echo $token; ?>">
		<div class="col s12 m12 l12 input-field">
  			<!-- <label for="nom" class="">Nom et prénom<span class="text-red">*</span></label> -->
  			<input class="name-input" type="text" name="nom" id="nom" for="nom" placeholder="Nom et prénom" required>
  		</div>
  	<!--  -->
  		<div class="col s12 m12 l12 input-field">
  			<!-- <label for="nom" class="">Nom et prénom<span class="text-red">*</span></label> -->
  			<input class="school-input" type="text" name="school" id="school" for="school" placeholder="Etablissement :" required>
  		</div>
  	<!-- <div class="col s12 m12 l12 select-field">
		<label class="">Etablissement</label>
		<select class="school-select display">
  		<option value="1" selected> FGI</option>
  		<option value="2"> ENSET </option>
  		<option value="3"> IUT </option>
  		<option value="4"> FS </option>
  		<option value="5"> FSEGA </option>
  		<option value="6"> FLSH </option>
		</select>
	</div> -->
  	<!--  -->
  	<!--  -->
  		<div class="col s12 m12 l12 input-field">
  			<!-- <label for="nom" class="">Nom et prénom<span class="text-red">*</span></label> -->
  			<input class="option-input" type="text" name="option" id="option" for="option" placeholder="Filiere :" required>
  		</div>
  	<!-- <div class="col s12 m12 l12 select-field">
		<label class="">Filiere</label>
		<select class="option-select display">
  		<option value="1" selected> Mécanique</option>
  		<option value="2"> Topographie </option>
  		<option value="3"> Biologie </option>
  		<option value="4"> Informatique </option>
  		<option value="5"> Lettre </option>
  		<option value="6"> Sociologie </option>
		</select>
	</div> -->
  	<!--  -->
	  	<div class="col s12 m12 l12 input-field">
	  		<!-- <label for="tel" class="">Téléphone : <span class="text-red">*</span></label> -->
	  		<input class="tel" type="number" name="tel" for="tel" placeholder="Téléphone :" required>
	  	</div>
  	<!--  -->
  		<div class="col s12 m12 l12 input-field">
	  		<!-- <label for="tel_w" class=""> <span class="text-red">*</span></label> -->
	  		<input class="tel_w" type="number" name="tel_w" for="tel_w" placeholder="Téléphone W:" required>
	  	</div>
  	<!--  -->
	  	<div class="col s12 m12 l12 input-field">
	  		<!-- <label for="date" class="">Date inscription : <span class="text-red">*</span></label> -->
	  		<input class="date_register" type="date" name="date" for="date" min="2017-11-01" max="2020-01-01"  required>
	  	</div>
	  	<div class="col s12 m12 l12 select-field"  which="hh">
			<input type="submit" name="submit" value="Soumettre" class="btn btn-submit-register" id="submit-register" identify="students"><span class="loader" ></span><span class="msg"></span>
		</div>
	</form>
</div>
<div class="col s8 list-members" id="register-list">
<?php 
if (isset($datas)) {
	
	foreach ($datas as $value) {
		?>
			<div class="col s12 elmt-members data-members" id="<?php echo $value['code_id']; ?>" style="">
				<div class="col s4 nom"><?php echo $value['id'].'. '.$value['nom'].' '.$value['prenom']; ?></div>
				<div class="col s4 tel"><?php echo $value['num_tel'].'/'.$value['num_whatsapp']; ?></div>
				<div class="col s4 options"><?php echo $value['etablissement'].'/'.$value['filiere']; ?>
					<a href="#" rel="delete" class="aaa" id="aaa" data-id="<?php echo $value['id'];?>">
						<SPAN class="ciud-icons m-load" data-id="<?php echo $value['id'];?>">&#110;</SPAN>
					</a>
					<a href="#" >
						<SPAN class="ciud-icons " >&#111;</SPAN>
					</a>
					<!-- <a href="#">
						<SPAN class="loader style-loader" data-id="<?php //echo $value['id'];?>"></SPAN>
					</a> -->
					
				</div>
			</div>
		<!--  -->
		<?php
	}
}
 ?>

</div>
