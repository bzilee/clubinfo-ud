var state= false;
var state_sub_menu_= false;
var state_scroll=false;
new WOW().init();

	$(function(){ //Begin Ready
		// slider_ciud.init();
		// slider_ciud.play();
		resizeIntroAct();
		$(window).scroll(function () {
			height_window=$(window).height();
			position_scrollTop=$(window).scrollTop();
			if (position_scrollTop >= height_window) {
				$('#transite-menu').addClass('show-transition-menu');
				$('#sm-menu-ciud').addClass('sm-menu-ciud-transite');state_scroll=true;
			} else if((0 <= position_scrollTop) && (position_scrollTop < height_window)){
				if (state_scroll===true) {
					$('#transite-menu').removeClass('show-transition-menu');
					$('#sm-menu-ciud').removeClass('sm-menu-ciud-transite');state_scroll=false;
				}
			}
		});


			$('li#seminaires_').hover(function() {
				$('#sub-menu-larg').fadeIn('fast');//css('display','block')

				$('li#seminaires_').click(function () {
					state_sub_menu_=true;
					console.log('Un click');
				});
			},
			function()  {
					if (state_sub_menu_===true) {
							console.log('cliqué');
							state_sub_menu_=false;
					} else {
							$('#sub-menu-larg').fadeOut(100);
					}
				}

			);

			$('.sub-menu-larg').hover(function() { //cache le sous menu lors du survole sur les menus(où id=li#menu-elements)
				$('#sub-menu-larg').fadeOut('slow');//css('display','block')
			});

			$('#sub-menu-larg').css('width',parseFloat($('#menu-ciud').css('width')) - 30);

			$(window).resize(function(e){//reagir lors du redimensionnement de la fenetre de navigateur
				$('#sub-menu-larg').css('width',parseFloat($('#menu-ciud').css('width')) - 30);//redimensionne le sous menu large
				if (parseFloat($(window).width()) >= 993) { //cache le menu reduit si largeur fenetre est >= 993 (dimension au delà des tablettes)
					hiddenMenu();
				}

			});

			$('li#seminaires_').click(function() {
				$('#sub-menu-larg').fadeIn('slow');
			});

			$('#sub-menu-larg').hover(function() {
				$('#sub-menu-larg').fadeIn('fast');
			},
			function() {
				$('#sub-menu-larg').fadeOut('fast');
			});

			$('li#seminaires, li#prevent-defaultQ, li#menu-elementsQ, li#seminaires_, li#transite-menu-elementsQ, li#transite-seminaires_').click(function(e) {
				e.preventDefault();
			});

			$('#suggestion-form').submit(function(e) {
				e.preventDefault();
				var nom=$('input#name').val();
				var tel= $('input#tel').val();
				var mail= $('input#mail').val();
				var data_suggestions= $('#data-suggestion').val();
				var token= $('#suggestion-form').attr('token');

				$('input#name').attr('disabled','');
				$('input#tel').attr('disabled','');
				$('input#mail').attr('disabled','');
				$('textarea#data-suggestion').attr('disabled','');
				// $('input#submit-suggestion').attr('disabled','');

				 $.post(
			          'ajax/suggestions',

			          { name: nom , tel: tel, mail: mail, data_suggestion: data_suggestions, token: $('#suggestion-form').attr('token')} ,//'TOTO'

			          function (data)
			          {	
			          		
					          if (data==="avec success") { 	

									show_notification("Merci. Votre message a été envoyé...");
									console.log("Merci. Votre message a été envoyé...");
					          }
					           else if (data=='unsuccess')
					          { 	
									// echec reesayer
									show_notification("Votre message n'a pas été reçu. Réessayer...");
									console.log("Votre message n'a pas été reçu. Réessayer..");
					          }
					          	else if (data=="empty field")
					          { 	
					          		show_notification("Echec, verifier vos informations...");
					          		console.log("Echec, verifier vos informations...");
					          }
					          	else 
					          { 	
					          	// alert(data);die();
					          		show_notification(data);
					          		console.log(data);
					          }

	
			          },
			          'json'
				 );
			});



	});//End Ready

	$('#sm-menu-ciud').click(function() {
		// e.css('z-index':'100000001');
		(state===false)? visibleMenu() : hiddenMenu() ;
	});

		$('#seminaires').click(function() {
			openSubMenu();
		});

		function fadeOut_subMenu() {
				// if (state_sub_menu_===true) {
				// 		console.log('cliqué');
				// } else {
						$('#sub-menu-larg').fadeOut('slow');
				// }
			}

	function visibleMenu(){
    $('#sm-menu-ciud span:nth-child(1)').removeClass('bar').addClass('bar-top');
		$('#sm-menu-ciud span:nth-child(2)').removeClass('bar').addClass('bar-middle');
		$('#sm-menu-ciud span:nth-child(3)').removeClass('bar').addClass('bar-bottom');
		// Hide Slogan
		$('#slogan-ciud').removeClass('slogan-ciud');
		$('#slogan-ciud').addClass('invisible-slogan');
    // Hide Group cicrcle
		$('#circle-objet').removeClass('circle-objet');
		$('#circle-objet').addClass('invisible-gp-circle');
		// show Menu
		$('#menu-content').addClass('down');
		$('#menu-content').removeClass('up');

		// $('#menu-ciud').addClass('mobile-menu-ciud');
		//Empeche de scroller lors du deroulement du menu
		$('html').css('overflow-y','hidden');



		state=true;
	}

	function hiddenMenu(){
    $('#sm-menu-ciud span:nth-child(1)').removeClass('bar-top').addClass('bar');
		$('#sm-menu-ciud span:nth-child(2)').removeClass('bar-middle').addClass('bar');
		$('#sm-menu-ciud span:nth-child(3)').removeClass('bar-bottom').addClass('bar');
		// show Slagan
		$('#slogan-ciud').removeClass('invisible-slogan');
		$('#slogan-ciud').addClass('slogan-ciud');
		// show Group cicrcle
		$('#circle-objet').removeClass('invisible-gp-circle');
		$('#circle-objet').addClass('circle-objet');
		// hide Menu
		$('#menu-content').removeClass('down').addClass('up');

		//Empeche de scroller lors du deroulement du menu
		$('html').css('overflow-y','auto');
		// $('window').scrollTop(0,0);
		state=false;
	}

	var state_sub_menu= 1;

	function openSubMenu(){
		if (state_sub_menu==1) {
			 // $('#sub-menu').css('animation','ciud-open-subMenu .3s');
			 $('#sub-menu').css('display','block');
			state_sub_menu--;
		}
		else {

			 $('#sub-menu').css('display','none');//.css('animation','ciud-close-subMenu .3s')
			 state_sub_menu++;
		}
	}

	function disableScroll(e) {
			if (e.keyCode) {
				/^(32|33|34|35|36|38|40)$/.test(e.keyCode) && e.preventDefault();
			}
			else {
				e.preventDefault();
			}
	}

	function resizeIntroAct() {
			var a = $('#t-activity').height();
			var b = $('#title-our-activities').height();
			$('#title-our-activities').css('margin-top', (a/2 - b/2));
	}

	slider_ciud = {
		init : function () {
			slider_ciud.elmt_list_content = $('#list-content');
			slider_ciud.nbre_elmts=slider_ciud.elmt_list_content.find('.img-slide').length;
			slider_ciud.current_=0;
			slider_ciud.duration=1000;
		},

		next : function () {
			slider_ciud.current_++;
			if (slider_ciud.current_ > (slider_ciud.nbre_elmts - 1)) {
				slider_ciud.current_ = 0;
				console.log('oui');
				slider_ciud.elmt_list_content.stop().animate({marginLeft: - slider_ciud.current_*$(window).width()+"px"},slider_ciud.duration);
			}
				slider_ciud.elmt_list_content.stop().animate({marginLeft: - slider_ciud.current_*$(window).width()+"px"},slider_ciud.duration);

		},

		play: function () {
			slider_ciud.timer = window.setInterval('slider_ciud.next()' , 5000);
		}
	};
// ----------Smooth Scroll-----------------------

var smoothScroll = {
    speed: 0,
    delay: 10, // en ms
    timer: null,
    scrollSpeed: 10, //avant 8
    inertia: 0.95,
    init: function(){
        this.setEventsListeners();
    },
    setEventsListeners: function(){
        var me = this;
        $(document).bind('DOMMouseScroll mousewheel', function(e){
            me.setSpeed(e.originalEvent);
        });
	 },
    setSpeed: function(e){
        var direction = e.detail ? -e.detail : e.wheelDelta;
    	this.speed += direction < 0 ? -this.scrollSpeed : this.scrollSpeed;
    	if(this.timer == null){
    		this.timer = setTimeout(this.smoothScroll, this.delay, this);
    	}
    	e.preventDefault();
    },
    smoothScroll: function(scope){
		var self = scope;
    	self.speed *= self.inertia;

        var currScrollTop = $(window).scrollTop();
        $(window).scrollTop(currScrollTop-self.speed);

    	if(self.speed < self.inertia && self.speed > -self.inertia){
    		self.speed = 0;
    		clearTimeout(self.timer);
    		self.timer = null;
    	}else{
    		self.timer = setTimeout(self.smoothScroll, self.delay, self);
    	}
    }
}

smoothScroll.init();

//----------------End Smooth Scroll-----------------------

function die(msg="")
	{
	    throw msg;
	}

function show_notification(msg) {
	$('input#name').removeAttr('disabled','').val('');
		$('input#tel').removeAttr('disabled','').val('');
		$('input#mail').removeAttr('disabled','').val('');
		$('textarea#data-suggestion').removeAttr('disabled','').val('');
		$('input#submit-suggestion').removeAttr('disabled','');
		
	var notification = {
	      // props: ['type'], 
	      template: '<div class="notification-form " id="notification">'+msg+'</div>'
		}

	var view = new Vue({
		el: '#view-id',
		components: { notification },
		mounted: function () {
			console.log("Montee");
			

		},
		updated: function () {
			console.log("Mis a jour");
			

		}
	});

	$('.notification-form').fadeIn('slow');
	var close= setTimeout(function () {
			// var w=$('.notification-form').width();
			$('.notification-form').fadeOut('slow');
			$('#notification').remove();
			$('#view-id').append('<notification></notification>');
			console.log("destroyed");
	}, 5000);


}

(function (){
	$('#find-us').height($('#suggest-us').height());
}())