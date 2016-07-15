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

});