$( document ).ready(function() {
  $('#menu >ul >li >a').click(function() {
    $('#menu li').removeClass('active');
    $(this).closest('li').addClass('active');	
    var checkElement = $(this).next();
    // đóng phần tử sub-menu 
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    // hiện phần tử sub-menu
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    		$(".has-sub").click(function(){
		        if($(".sub-child:visible").length==0)
		        {
		        	$(".sub-child").show();
		        }else{
		        	$(".sub-child").hide();
		        }
    });  
    	$('#menu ul ul:visible').slideUp('normal');
      	checkElement.slideDown('normal');
    }
    if($(this).closest('li').find('ul').children().length == 0) {
      return true;
    } else {
      return false;	
    }		
  });
});
