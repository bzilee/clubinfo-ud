
$(function(){ //Begin Ready
		
	$('.auth-form input#submit').click(function(e) {
				e.preventDefault();
				var nom=$('#id').val();
				var password= $('#password').val();
				var token= $('#auth-form-admin').attr('token');

				// $('div.header').animate({"opacity":"0.2"});//fadeOut('slow');//css({})
				changeImage('loader.gif','#e5eff1') ;

				$('input#id').attr('disabled','');
				$('input#password').attr('disabled','');
				$('input#submit').attr('disabled','');

				 $.post(
			          'ajax/login', //'test/b_s', //'get.php',

			          { id: nom , password: password, token: token} ,//'TOTO'

			          function (data)
			          {
			          // alert(data);die();
			          if (data=='111') { location.reload(true);
			          }
			           else if (data=='000')
			          	{ 	
							changeImage('Access.denied.gif','#e5eff1') ;
			          		// try_againt.gif
			          		// $('input#password').attr('ciud-error','erreur');
			          	}
			          	 else if (data=='001' || data=='003' )
			          	{ 	
							changeImage('againagain.gif','#e5eff1') ;
			          		// 
			          		// $('input#password').attr('ciud-error','erreur');
			          	}
			          	
			          },

			         'text'
				 );
	});

	$('#disconnect').click(function(e) {
				e.preventDefault();
				var token= $(this).attr('token');
			
				 $.post(
			          'ajax/logout',

			          function (data)
			          {
			         		if (data=='true') { location.reload(true);} else { alert("Echec de Déconnexion");}
			          },

			         'text'
				 );

	});

	$('.link-control-panel').click(function(e) {
				e.preventDefault();
				// window.history.pushState(document.title,document.title,"gestion/members");
				var which= $(this).attr('which');
				var url="";
				var token=$('.header #btn-logout button').attr('token');
				getLoader('loading.gif');
				switch (which) {
						case 'stat':
							url='ajax/statistiques';
							break;
						case 'gestion':
							url='ajax/gestion';
							break;
						case 'analyse':
							url='ajax/analyse';
							break;
						case 'observation':
							url='ajax/observation';
						break;
						case 'msg':
							url='ajax/messagerie';
						break;
						case 'programme':
							url='ajax/programmation';
						break;
						case 'news':
							url='ajax/journalisation';
						break;
						case 'set':
							url='ajax/parametre';
						break;
						default:
							url='ajax/';
							break;
					} 

				 $.post(
			          url,

			          { token: token} ,

			          function (data)
			          {
			          	// alert(data);die();
			          	if (data=='') 
			          	{
			          		location.reload(true);
			          	} 
			          	else if (data=='warning')
			          	{	
			          		getLoader('anything.png'); 
			          		$('#main-content').html('<p></p>');
			          	}
			          		else 
			          	{	
			          		getLoader('anything.png'); 
			          		$('#main-content').html('<p>'+data+'</p>');
			          	}
			          
			          	
						
			          },

			         'text'
				 );

	});

	// $('').click(function(e) {
	// 			e.preventDefault();

	// 		});	

});//End document ready

	$('body').on('click', '.elmt-gestion-link',function (e) { 
				e.preventDefault();
				var which= $(this).attr('which');
				var url="";
				var token= $('.bloc').attr('token');
				getLoader('loading.gif');
				switch (which) {
						
						case 'members':
							url='ajax/gestion/members';
							break;
						case 'register':
							url='ajax/gestion/enregistrer';
							break;
						
						default:
							url='ajax/';
							break;
					} 

				 $.post(
			          url,

			          { token: token, data:''} ,

			          function (data)
			          {
			          	
			          	getLoader('anything.png'); 
			          	$('#main-content').html(data);
						
			          },

			         'text'
				 );
		

	});

	$('body').on('click', 'form.register-members #submit-register',function (e) { 
				e.preventDefault();
				getLoader_1('loading.gif');

				$('.name-input').attr('disabled','');
				$('.school-select').attr('disabled','');
				$('.option-select').attr('disabled','');
				$('.tel').attr('disabled','');
				$('.tel_w').attr('disabled','');
				$('.date_register').attr('disabled','');
				$('#submit-register').attr('disabled','');
				var token= $('form.register-members').attr('token');
				var nom=$('.name-input').val(), tel=$('.tel').val(), tel_w=$('.tel_w').val(), date_register=$('.date_register').val();
				// var school=$('.school-select option:selected').text(), option=$('.option-select option:selected').text();
				var school=$('.school-input').val(), option=$('.option-input').val();
				var identify=$('#submit-register').attr('identify');
				// var format = /^\d{4}(-\d{1,2}){2}$/;
				// alert(format.test(date_register)+date_register);
				// die();
				if(verify(tab=[nom,school,option,tel,tel_w,date_register]))
					{
						$.post(
			          'ajax/register/members/',

			          { nom: nom, tel: tel, tel_w: tel_w, date_register: date_register,school: school, option:option, token: token,identify: identify} ,//'TOTO'

			          function (data)
			          {
			          	// alert(data[0]['id']);die();
			          	if (data[1]==="succes") 
			          		{
			          			$('.name-input').removeAttr('disabled','').val('');
								$('.school-input').removeAttr('disabled','').val('');
								$('.option-input').removeAttr('disabled','').val('');
								$('.tel').removeAttr('disabled','').val('');
								$('.tel_w').removeAttr('disabled','').val('');
								$('.date_register').removeAttr('disabled','').val('');
								$('#submit-register').removeAttr('disabled','');
			          			getLoader_1('anything.png');
			          			schowResults(data);
			          		} else if(data[1]==="unsucces"){
			          			alert("Echec d'enregistrement");
			          		}
			          		else if(data[1]==="champs vides"){
			          			alert("Veillez remplir tout les champs");
			          		}
			          		else
			          		{
			          			// alert(data[1]);die(); 
			          			location.reload(true);
			          		}
						
			          },

			         'json'
				 );
					}
				else{

								$('.name-input').removeAttr('disabled','').val(nom);
								$('.school-select').removeAttr('disabled','').val(school);
								$('.option-select').removeAttr('disabled','').val(option);
								$('.tel').removeAttr('disabled','').val(tel);
								$('.tel_w').removeAttr('disabled','').val(tel_w);
								$('.date_register').removeAttr('disabled','').val(date_register);
								$('#submit-register').removeAttr('disabled','');
			          			getLoader_1('anything.png');
			          			alert('unsuccessfull save. Bien vouloir verifier la validité des champs...');
				};
				
				
	});

	$('body').on('click', 'form.register-members-m #submit-register',function (e) { 
				e.preventDefault();
				getLoader_2('loading.gif');
				$('form.register-members-m .name-input').attr('disabled','');
				$('form.register-members-m .school-input').attr('disabled','');
				$('form.register-members-m .option-input').attr('disabled','');
				$('form.register-members-m .tel').attr('disabled','');
				$('form.register-members-m .tel_w').attr('disabled','');
				$('form.register-members-m .date_register').attr('disabled','');
				$('form.register-members-m #submit-register').attr('disabled','');
				$('form.register-members-m #cancel-register').attr('disabled','');
				var token = $('form.register-members-m').attr('token');
				var code_id = $('form.register-members-m').attr('id');
				var nom=$('form.register-members-m .name-input').val(), tel=$('form.register-members-m .tel').val(), tel_w=$('form.register-members-m .tel_w').val(), date_register=$('form.register-members-m .date_register').val();				
				var school=$('form.register-members-m .school-input').val(), option=$('form.register-members-m .option-input').val();

				if(verify(tab=[nom,school,option,tel,tel_w,date_register]))
					{
						// alert(nom+school+option+tel_w+tel+date_register+token+code_id);die();
						$.post(
			          'ajax/register/update/datas/member',

			          { nom: nom, tel: tel, tel_w: tel_w, date_register: date_register,school: school, option:option, token: token,id_user:code_id} ,//'TOTO'

			          function (data)
			          {
			          	// alert(data);die();
			          	// alert(data[0]);die();
			          	if (data[1]==="succes") 
			          		{
			          			$('form.register-members-m .name-input').removeAttr('disabled','').val('');
								$('form.register-members-m .school-input').removeAttr('disabled','').val('');
								$('form.register-members-m .option-input').removeAttr('disabled','').val('');
								$('form.register-members-m .tel').removeAttr('disabled','').val('');
								$('form.register-members-m .tel_w').removeAttr('disabled','').val('');
								$('form.register-members-m .date_register').removeAttr('disabled','').val('');
								$('#submit-register').removeAttr('disabled','');
			          			getLoader_1('anything.png');
			          			schowResults(data,true);
			          			closePopup();
			          		} else if(data[1]==="unsuccess"){
			          			alert("Echec d'enregistrement");
			          		}
			          		else if(data[1]==="champs vides"){
			          			alert("Veillez remplir tout les champs");
			          		}
			          		else
			          		{
			          			// alert(data[1]);die(); 
			          			location.reload(true);
			          		}
						
			          },

			         'json'
				 );
					}
				else{

								$('form.register-members-m .name-input').removeAttr('disabled','').val(nom);
								$('form.register-members-m .school-select').removeAttr('disabled','').val(school);
								$('form.register-members-m .option-select').removeAttr('disabled','').val(option);
								$('form.register-members-m .tel').removeAttr('disabled','').val(tel);
								$('form.register-members-m .tel_w').removeAttr('disabled','').val(tel_w);
								$('form.register-members-m .date_register').removeAttr('disabled','').val(date_register);
								$('#submit-register').removeAttr('disabled','');
			          			getLoader_1('anything.png');
			          			alert('unsuccessfull save. Bien vouloir verifier la validité des champs...');
				};
				
				
	});

	$('body').on('click', 'form.register-members-m #cancel-register',function (e) { 
				e.preventDefault();
				closePopup();
	});	
	$('body').on('click', 'div#register-list .data-members .options .aaa',function (e) {
		e.preventDefault();
		var id= $(this).attr('data-id');//var id= $(this).attr('data-id');
		var token=$('.header #btn-logout button').attr('token');
		// alert(id);die();
		getLoader_3('loading.gif',id);
		$.post(
			          'ajax/register/get/datas/member',

			          { token: token,id:id} ,

			          function (data)
			          {
			          	// alert(id);die();
			          	// alert(data[1]+id);die();
			          	// alert(data);die();
			          	if (data[1]==="succes") 
			          		{
			          			setPopup(data,token);
			          			getLoader_3('anything.png',id,true);
			          		} else if(data[1]==="unsuccess"){
			          			alert("Echec d'enregistrement");
			          		}
			          		else if(data[1]==="echec de modification"){
			          			alert("echec de modification");
			          		}
			          		else
			          		{
			          			alert("acces denied");die();
			          			getLoader_3('anything.png',id,true); 
			          			location.reload(true);
			          		}
						
			          },

			         'json'
				 );

	});

	// $(document).on('click','.msg',function () {
	// 	alert('boire');
	// });

	function die(msg="")
	{
	    throw msg;
	}

	function changeImage(images,couleur) {
		$('input#id').removeAttr('disabled','');
		$('input#password').removeAttr('disabled','');
		$('input#submit').removeAttr('disabled','');

		$('div.logo-map').animate({"opacity":"0"}).queue(function () {
		$('div.logo-map').css({"opacity":"1",'background-image':'url(assets/app/images/'+images+')'});//try_againt.gif
		$('div.header').css({'background-color':couleur});//animate({"background-color":"#e5eff1"})
		$(this).dequeue();
		});
	}

	function getLoader(images) {
		$('#main-content').css({"opacity":"1",'background-image':'url(assets/app/images/'+images+')'});
	}

	function getLoader_1(images) {
		// $('.loader').css({'background-color':'black'});
		$('.loader').css({'background-image':'url(assets/app/images/'+images+')'});
	}
	function getLoader_2(images) {
		// $('.loader').css({'background-color':'black'});
		$('form.register-members-m .loader').css({'background-image':'url(assets/app/images/'+images+')'});
	}
	function getLoader_3(images,id,remove=false) {
		// $('.loader').css({'background-color':'black'});

		var content ="&#110;";
		if (remove===false) 
		{
			content=$('#register-list span[data-id='+id+'].m-load');
			$('#register-list span[data-id='+id+'].m-load').css({'background-image':'url(assets/app/images/'+images+')'}).html('').addClass('style-loader');
		} else 
		{
			$('#register-list span[data-id='+id+'].m-load').css({'background-image':'url(assets/app/images/'+images+')'}).html(content).removeClass('style-loader');
		}
	}

	function verify(tab=[]) {
		error=[];
		var  format_date = /^\d{4}(-\d{1,2}){2}$/;
		var  format_num =  /^6[56789]\d{7}$/;

		if(tab[0].length < 2 ){error[0]="error"; }
		if(tab[1].length < 2 ){error[1]="error"; }
		if(tab[2].length < 2 ){error[2]="error"; }
		// if(tab[3].length != 9 ){error[3]="error"; }
		// if(tab[4].length  != 9){error[4]="error"; }	
		if(!format_num.test(tab[3])){error[3]="error";}
		if(!format_num.test(tab[4])){error[4]="error";}
    	if(!format_date.test(tab[5])){error[5]="error";}

    	if (error.length==0) {return true;} else { return false;}
    }
// window.history.pushState(document.title,document.title,"/toto");
	function mergeFields(datas) {
		$('.name-input').removeAttr('disabled','').val(datas[0]['nom']+" "+datas[0]['prenom']);
		$('.school-select').removeAttr('disabled','').val(datas[0]['etablissement']);
		$('.option-select').removeAttr('disabled','').val(datas[0]['filiere']);
		$('.tel').removeAttr('disabled','').val(datas[0]['num_tel']);
		$('.tel_w').removeAttr('disabled','').val(datas[0]['num_whatsapp']);
		$('.date_register').removeAttr('disabled','').val(datas[0]['date_register']);
	}

	function schowResults(datas,delete_first=false) {
		if (delete_first) 
			{
				$('#register-list div.elmt-members[id="'+datas[0]['code_id']+'"]').html('');
			}
		$('#register-list').prepend( '<div class="col s12 elmt-members data-members" id="'+datas[0]['code_id']+'" style="">'+
									'<div class="col s4 nom">'+datas[0]['id']+'. '+datas[0]['nom']+' '+datas[0]['prenom']+'</div>'+
									'<div class="col s4 tel">'+datas[0]['num_tel']+'/'+datas[0]['num_whatsapp']+'</div>'+
									'<div class="col s4 options">'+datas[0]['etablissement']+'/'+datas[0]['filiere']+
										'<a href="#" rel="delete" class="aaa"  id="aaa" data-id="'+datas[0]['id']+'">'+ //data-id="'+datas[0]['id']+'"
											'<SPAN class="ciud-icons m-load" data-id="'+datas[0]['id']+'">&#110;</SPAN>'+
										'</a>'+
										'<a href="#" >'+
											'<SPAN class="ciud-icons">&#111;</SPAN>'+
										'</a>'+
									'</div>'+
									'</div>');
	}

	function setPopup(data,token) {
		$('#ciud-masque').fadeIn();
		$('#ciud-popup').fadeIn().css({'width':'800px'});
		$('#ciud-popup').html(
				'<div class="row">'+
					'<form class="register-members-m" win-type= "modal" token="'+token+'" id="'+data[0]['code_id']+'">'+
						'<div class="col s6 m6 l6 input-field">'+
				  			'<input class="name-input" type="text" name="nom" id="nom" for="nom" placeholder="Nom et prénom" value="'+data[0]['nom']+" "+data[0]['prenom']+'"required>'+
				  		'</div>'+
				  		'<div class="col s6 m6 l6 input-field">'+
				  			'<input class="school-input" type="text" name="school" id="school" for="school" placeholder="Etablissement :" value="'+data[0]['etablissement']+'"required>'+
				  		'</div>'+
			  			'<div class="col s6 m6 l6 input-field">'+
				  			'<input class="option-input" type="text" name="option" id="option" for="option" placeholder="Filiere :" value="'+data[0]['filiere']+'"required>'+
			  			'</div>'+
			  			'<div class="col s6 m6 l6 input-field">'+
				  			'<input class="tel" type="number" name="tel" for="tel" placeholder="Téléphone :" value="'+data[0]['num_tel']+'" required>'+
			  			'</div>'+
			  			'<div class="col s6 m6 l6 input-field">'+
				  			'<input class="tel_w" type="number" name="tel_w" for="tel_w" placeholder="Téléphone W:" value="'+data[0]['num_whatsapp']+'" required>'+
			  			'</div>'+
			  			'<div class="col s6 m6 l6 input-field">'+
				  			'<input class="date_register" type="date" name="date" for="date" min="2017-11-01" max="2020-01-01"  value="'+data[0]['date_register']+'" required>'+
			  			'</div>'+
			  			'<div class="col s12 m12 l12 select-field"  style="position: relative;height: 47px;" which="hh">'+
							'<input type="submit" name="submit" value="Soumettre" class="btn btn-submit-register" style="position: absolute;right:20px;" id="submit-register"><span class="loader" style="position: absolute;right: 200px;"></span><span class="msg"></span>'+
						'</div>'+
						'<div class="col s12 m12 l12 select-field"style="height: 47px;"   which="hh">'+
							'<input type="submit" name="cancel" value="Annuler" class="btn btn-submit-cancel waves-effect" style="position: absolute;right:20px;min-width: 148px;" id="cancel-register">'+
						'</div>'+
			  		'</div>'+
	  			'</div>'+
  			'</div>'
  		);
	}

	function closePopup() {
		$('#ciud-masque').fadeOut();
		$('#ciud-popup').fadeOut().css({'width':'0px'});
	}

	function surligne(number) {
		$('.*').css({'background-color': '#034a80'});
	}