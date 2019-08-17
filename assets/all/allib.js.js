var state=false;

	$('#menu-middle').click(function() {

		(state===false)? hiddenMenuLeftAndFullWidthContent() : visibleMenuLeftAndDefaultWidthContent() ;
	});

	function hiddenMenuLeftAndFullWidthContent()
	{
		$('#menu-middle span:nth-child(1)').removeClass('bar-top').addClass('bar');
		$('#menu-middle span:nth-child(2)').removeClass('bar-middle').addClass('bar');
		$('#menu-middle span:nth-child(3)').removeClass('bar-bottom').addClass('bar');

		$('#menu-left').css({'visibility':'hidden','transition':'visibility .4s cubic-bezier(0.25, 0.46, 0.45, 0.94)'});
		$('#content-gp').css({'width':'100%','transition':'width .4s cubic-bezier(0.25, 0.46, 0.45, 0.94)'});
		state=true;
	}

	function visibleMenuLeftAndDefaultWidthContent()
	{
		$('#menu-middle span:nth-child(1)').addClass('bar-top').removeClass('bar');
		$('#menu-middle span:nth-child(2)').addClass('bar-middle').removeClass('bar');
		$('#menu-middle span:nth-child(3)').addClass('bar-bottom').removeClass('bar');


		$('#menu-left').css({'display':'inline-block','visibility':'visible','transition':'width .4s cubic-bezier(0.25, 0.46, 0.45, 0.94)'});
		$('#content-gp').css({'width':'calc(100% - 200px)','transition':'width .4s cubic-bezier(0.25, 0.46, 0.45, 0.94)'});
		state=false;
	}
	$('ul.menu li#modules').click(function() {
		event.preventDefault();
		// event.stopPropagation();
		$('#toggle-menu').slideToggle(200).css('z-index','1001');
	});
