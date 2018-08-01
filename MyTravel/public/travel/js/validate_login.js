$(document).ready(function(){
	$('#name_error').hide();
	$('#pass_error').hide();
	$('.required').hide();
	$('#important').hide();
	$('#check-sucess').hide();
	$('.required1').hide();

	var error_name = false;
	var error_pass = false;

	
	// $("#login").submit(function(){
	// 	error_name = false;
	// 	error_pass = false;

		$("#fr_name").focusout(function() {
		
		var username =  new RegExp(/[a-zA-Z]{8,20}$/);
		if(username.test($("#fr_name").val())){
			$('#name_error').hide();
			$('#important').hide();
			$('#check-sucess').show();
		}else{
			$('#name_error').html('Bạn phải nhập từ 8-20 ký tự');
			$('#name_error').show();
			$('#important').show();
			$('#check-sucess').hide();
			error_name = true;
		}
			});
		$("#fr_pass").focusout(function(){
			var password = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,16}$/);
			
			if(password.test($("#fr_pass").val())){
				$("#pass_error").hide();
				$('#important').hide();
				$('#check-sucess').show();
			}
			else{
				$("#pass_error").html('Mật khẩu từ 8 ký tự bao gồm chữ số');
				$("#pass_error").show();
				$('#important').show();
				$('#check-sucess').hide();
				error_pass = true;
			}
		});
		// if(error_pass==false && error_name==false){
	// 		return true;
	// 	}
	// 	else{
	// 		return false;
	// 	}
	// });
});