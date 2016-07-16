$(function() {

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(".main-mnu").slideToggle();
		return false;
	});
	
	$('.glass').click(function() {
		if (!$('.search form').hasClass('block')) {
			$('.search form').addClass('block');
		}
		else {
			$('.search form').removeClass('block');
		}
	});

	$('.top_mnu ul ul').mouseover(function(){
		$(this).prev().addClass('hover_a');
	});

	$('.top_mnu ul ul').mouseout(function(){
		$(this).prev().removeClass('hover_a');
	});

	$('.bot-mnu ul ul').mouseover(function(){
		$(this).prev().addClass('hover_a2');
	});

	$('.bot-mnu ul ul').mouseout(function(){
		$(this).prev().removeClass('hover_a2');
	});

});