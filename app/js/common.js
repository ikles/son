$(function() {

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(".main-mnu").slideToggle();
		return false;
	});
	
	$('.glass').click(function() {
		if (!$('.search input').hasClass('block')) {
			$('.search input').addClass('block');
		}
		else {
			$('.search input').removeClass('block');
		}
	});

	$('.top_mnu ul ul').mouseover(function(){
		$(this).prev().addClass('hover_a');
	});

	$('.top_mnu ul ul').mouseout(function(){
		$(this).prev().removeClass('hover_a');
	});

});