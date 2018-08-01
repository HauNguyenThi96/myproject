$(document).ready(function(){
	// login
	$('#login').click(function(){
		$('.panel-login').slideToggle('6000','swing');
		
	});
	$('#fr-close').click(function() {
		$(".panel-register").hide();
		$(".panel-login").fadeOut('6000');
	});
	// register
	$('#register').click(function(){
		$('.panel-login').hide();
		$('.panel-register').slideToggle('6000','swing');

		
	});
	$('#close-register').click(function() {
		$(".panel-register").fadeOut('6000');
	});
});