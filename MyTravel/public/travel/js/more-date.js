$(document).ready(function($) {
	$('#date-more').click(function(event) {
		if($(".list-datemore:visible").length==0){
			$('.list-datemore').show();
			$('#date-more').hide();
		}else{
			$('.list-datemore').hide();
		}
	});
});