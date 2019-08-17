/*
   * Fichier de decompte [Compte à rebour CLUB INFORMATIQUE UNIVERSITE DE DOUALA]
   * @copyright     Copyright (c) Apps Lernen. (https://www.facebook.com/appslernen)
   * @link    http://facebook.com/appslernen ; b.ziletankeu@gmail.com
   * @author Apps Lernen by Bzile Tankeu 655149221
   * @package NONAME



INSTRUCTIONS D'UTILISATION
-------------------------
-------HTML--------------
<!DOCTYPE html>
<html>
<head>
<title></title>
	 <script src="chemin__du_fichier.js"></script>
</head>
<body>

<div id="count_down">
	<span class="" id="jour"></span>:
	<span class="" id="heure"></span>:
	<span class="" id="minute"></span>:
	<span class="" id="seconde"></span>
</div>

</body>
</html>


----------------Ajuster la date de deploiement--------------
			 targetTime : new Date('date_de_deploiement')

----------Respect du format -------------
    AAA-MM-JJ HH:mm:ss (2018-03-25 00:00:00)
*/


ciud_countDownManager={

	targetTime: new Date('2018-03-25 00:00:00'),
	displayElements:{
		jour: null,
		heure: null,
		mininute: null,
		seconde: null
	},

	int: function () {
		this.displayElements.jour=$('jour');
		this.displayElements.heure= $('heure');
		this.displayElements.mininute= $('minute');
		this.displayElements.seconde= $('seconde');

		this.tick_tack();
		window.setInterval('ciud_countDownManager.tick_tack();', 1000);


	},

	tick_tack : function () {
		var timeNow = new Date();
		if (timeNow > this.targetTime) { timeNow = this.targetTime;}
		var difference= this.dateDifference(timeNow, targetTime);
		this.displayElements.jour.text(difference.jour);
		this.displayElements.heure.text(difference.heure);
		this.displayElements.mininute.text(difference.mininute);
		this.displayElements.seconde.text(difference.seconde);
	},

	dateDifference : function (timeNow, targetTime) {
		var difference = {};
		var time =  targetTime - timeNow;

		time = Math.floor(time/1000);
		difference.seconde = time%60;
		time = Math.floor((time - difference.seconde)/60);
		difference.mininute = time%60;
		time = Math.floor((time - difference.mininute)/60);
		difference.heure = time%24;
		time = Math.floor((time - difference.heure)/24);
		difference.jour = time;

		return difference;

	}
} ;

$(function(){ ciud_countDownManager.init();});
