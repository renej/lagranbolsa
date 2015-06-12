/**
 * Created by renjes on 13/05/15.
 */
$(document).ready(function(){
	$('#addEmpresa').validate({
		rules: {
			"nombreEmpresa": {
				required: true
			},
			"nombreUsuario": {
				required: true,
				minlength: 5,
				maxlength: 16
			}, 
			"password": {
				required: true,
				minlength: 5,
				maxlength: 20
			},
			"passwordConfirm": {
				required: true,
				minlength: 5,
				maxlength: 20,
				equalTo: "#password"
			}
		}
	});
});