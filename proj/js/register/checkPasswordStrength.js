$('#register-password').keyup(function(e) {
	e.preventDefault();

	var data = "pass=" + this.value;

	$.ajax({
		url: '../../actions/users/checkPasswordStrength.php',
		data: data,
		type: "post",
		datatype: "json",

		success: function(data, status) {
			var res = JSON.parse(data);
			if(res.result < 2)
				$("#inputPasswordDiv").attr("class","form-group has-error" );
			else if(res.result < 4)
				$("#inputPasswordDiv").attr("class","form-group has-warning" );
			else
				$("#inputPasswordDiv").attr("class","form-group has-success" );
		},
		error: function(jqXHR, textstatus, errorthrown) {
			//alert(jqXHR + ": " + textstatus + ": " + errorthrown);
		}
	});
});

$('#register-confirm-password').keyup(function(e) {
	e.preventDefault();

	var confirmPass = this.value;
	var newPass = document.getElementById('register-password').value;

	if(confirmPass === newPass)
		$( "#inputPasswordConfirmDiv" ).attr("class","form-group has-success" );
	else
		$( "#inputPasswordConfirmDiv" ).attr("class","form-group has-error" );
});
