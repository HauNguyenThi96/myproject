$(document).ready(function() {
	$('#btnclick').click(function() {
		if($(".drop-user:visible").length==0){
			$('.drop-user').show();
			$('#btnclick .fa-angle-down').show();
			$('#btnclick .fa-angle-right').hide();
		}else{
			$('.drop-user').hide();
			$('#btnclick .fa-angle-down').hide();
			$('#btnclick .fa-angle-right').show();
			
		}
	});
	// $("#btnclick").hover(function() {
	// 	$('.drop-user').slideDown('slow');
	// }, function() {
	// 	$('.drop-user').slideUp('slow');
	// });
});