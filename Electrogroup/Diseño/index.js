$(function(){
	$('#btn-registro').click(function(){
		$(".mod-usuario").modal("hide");
	});
	$('#send').click(function() {
        var sEmail = $('.email-usuario').val();
        if ($.trim(sEmail).length == 0) {
            alert('Please enter valid email address');
            e.preventDefault();
        }
        if (!validateEmail(sEmail)) {
            alert('El email introducido no es valido');
            e.preventDefault();
        }
    });
    $("#send").click(function(){
    	var contraseña1= $(".contraseña-usuario").val();
    	var contraseña2= $(".repetir-contraseña").val();
    	if($.trim(contraseña1).length==0 || $.trim(contraseña1).length<8){
    		alert('Por favor introduzca una contraseña de 8 o mas caracteres');
    		e.preventDefault();
    	}
    	if(contraseña1!=contraseña2){
    		alert('Las contraseñas no son iguales');
    		e.preventDefault();
    	} 
    });
})


function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

