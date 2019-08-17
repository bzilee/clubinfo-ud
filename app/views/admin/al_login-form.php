<div class="header" id="header">
	<div class="row">
 		<div class="" style="width: 100%;position: absolute;top: 50px;text-align: center;font-weight: bold;font-size: 25px;"><P>Poste d'administration CIUD</P></div>
	 	<div class="col s6 m6 l6 logo-map">
	 	
	 	</div>
	 	<div class="col s6 m6 l6 form-style ">
	 		<form class="col offset-s3 s6 auth-form" id="auth-form-admin" token="<?php echo (isset($token) ? $token:'');  ?>">
	 			<input type="text" name="id" id="id" placeholder="Identifiant">
	 			<input type="password" name="password" id="password" placeholder="Mot de passe">
	 			<div class="col s12 m12 l12 select-field">
					<input type="submit" name="submit" id="submit" value="Valider" class="btn " >
				</div>
	 		</form>
		</div>
	</div> 
</div>