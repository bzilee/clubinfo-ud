console.log(get_hWindow());
var state=false;

	$('#menu-middle').click(function() {

		(state===false) ? hiddenMenu() : visibleMenu() ;
	});

	function hiddenMenu()
	{
		$('#menu-middle span:nth-child(1)').removeClass('bar-top').addClass('bar');
		$('#menu-middle span:nth-child(2)').removeClass('bar-middle').addClass('bar');
		$('#menu-middle span:nth-child(3)').removeClass('bar-bottom').addClass('bar');

		state=true;
	}

	function visibleMenu()
	{
		$('#menu-middle span:nth-child(1)').addClass('bar-top').removeClass('bar');
		$('#menu-middle span:nth-child(2)').addClass('bar-middle').removeClass('bar');
		$('#menu-middle span:nth-child(3)').addClass('bar-bottom').removeClass('bar');

		state=false;
	}


	function get_hWindow()
	{
		var hwindow= $(window).height();
		return hwindow;
	}

	function get_h(selector)
	{
		var height= $(selector).height();
		return height;
	}

	function get_w(selector)
	{
		var height= $(selector).width();
		return height;
	}
