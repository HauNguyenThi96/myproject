$(document).ready(function() {
	var index = 1;
	$('#btn1').click(function() {
		index=index-1;
		showImage(index);

	});
	$('#btn2').click(function() {
		index=index+1;
		showImage(index);

	});
	showImage(1);
	function showImage(n){
		var i;
		var x = document.getElementsByClassName("slides");
		// alert(slide.length);
		
		if(n > x.length){
			index = 1;
		}
		if(n < 1){
			index = x.length;
		}
		for(i = 0;i <x.length;i++){
			x[i].style.display = "none";
		}
		 x[index - 1].style.display = "block";
	}
	autoSlide();
	function autoSlide(){
		var i;
		var x=document.getElementsByClassName("slides");
		for(i = 0;i < x.length;i++){
			x[i].style.display = "none";
		}
		
		if(index > x.length){
			index = 1;
		}
		x[index - 1].style.display ="block";
		index++;
		setTimeout(autoSlide,2000);
	}
});