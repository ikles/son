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

	$('#searchsubmit').attr('value','');

	$('#s').attr('placeholder', 'Искать');

	//$('.order_consalt input').attr('required','');

	

	$('.wpcf7-submit').click(function(eventObject) {
		if ($('.your-name .wpcf7-text').val() == '' || $('.your-phone .wpcf7-text').val() == '') {
				alert('Заполните все поля');
				eventObject.preventDefault();
		}
		else {
			setTimeout('alert("Спасибо за вашу заявку, скоро мы с вами свяжемся!")', 2000);
		}
	});



	/*$('.wpcf7-form').submit(function() {
		setTimeout('alert('Спасибо!')', 4000);
	});*/

});