<div class="row">
	<div class="col s12 col-header">
		<div class="header">
				<div class="col s2 logo-ciud"></div>

				<div class="select-field" id="btn-logout">
					<!-- <input type="submit" name="submit" id="disconnect" value="Disconnexion" class="btn " token="<?php //echo $_SESSION['user']['token']; ?>"> -->
					<button type="submit" name="submit" id="disconnect" value="Disconnexion" class="btn " token="<?php echo $_SESSION['user']['token']; ?>" style="font-family:'icon-worksregular';background-color: #cc1553;    font-weight: bold;padding: 0 10px;MARGIN-RIGHT: 50px;" >&#88;</button>
				</div>
		</div>
	</div>
	<div class="col m3 l2 control-panel">
		<nav class="menu-control-panel">
			<ul class="list-control-panel">
				<a href="" class="link-control-panel" id="link-control-panel" which="stat"><li class="elmt-control-panel"><span class="ciud-icons">&#44;</span>Statistiques</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="gestion"><li class="elmt-control-panel"><span class="ciud-icons">&#47;</span>Gestion</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="analyse"><li class="elmt-control-panel"><span class="ciud-icons">&#203;</span>Analyse</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="observation"><li class="elmt-control-panel"><span class="ciud-icons">&#203;</span>Observations</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="msg"><li class="elmt-control-panel"><span class="ciud-icons">&#203;</span>Messagerie</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="programme"><li class="elmt-control-panel"><span class="ciud-icons">&#203;</span>Programmation</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="news"><li class="elmt-control-panel"><span class="ciud-icons">&#60;</span>Journal</li></a>
				<a href="" class="link-control-panel" id="link-control-panel" which="set"><li class="elmt-control-panel"><span class="ciud-icons">&#106;</span>Paramètres</li></a>

			</ul>
		</nav>
	</div>
	<div class="col m9 l10 main-content" style="position: relative;" id="main-content">
		<p align="center">Poste d'administration CIUD
			<h2 align="center">Bienvenu <?php echo $_SESSION['user']['id']; ?></h2>
			<!-- <h6 align="center">COMMENCONS DES MAINTENANT ...</h6> -->
		</p>
		<p align="center" style="position: absolute;bottom: 0;"><br/><br/>
			Travail effectué : <strong>MEMBRES AYANT CONFIGURES LEUR MACHINE => <?php echo (isset($nbre_registers))?$nbre_registers: 'indefini'; ?>,</strong>
			<strong>MEMBRES INSCRITS => <?php echo (isset($nbre_membres))?$nbre_membres: 'indefini'; ?>, </strong>
			<br/><br/><br/><br/><br/><br/>
			Ton mot de passe est secret et ne doit pas se faire connaitre pas une autre entité.
			<br/>
			Et aussi certaines sections n'ont pas été achevées.<br/>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</P>
	</div>
</div>