$(function(){
	$('#btn-registro').click(function(){
		$(".mod-usuario").modal("hide");
	});
	$('#send').click(function(e) {
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
    $("#send").click(function(e){
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

    $(document).on("click", "#send", function(e){
        var email = $('.email-usuario').val();
        var contraseña= $(".contraseña-usuario").val();

        $.ajax({
            type:  'post',
            data:  {email:email,contraseña:contraseña},
            url:   '../Logica/Usuarios/Registrar_usuario/Registrar_usuario.php',
            success:  function (response) {
                msg="";
                if (response == 1) {
                    window.location.replace = "registro-exitoso.html";
                } else{
                    msg="El email ya corresponde a un usuario registrado";
                    alert(msg);
                }
            }
        });
    });
    
    $(document).on("click", ".iniciar", function(e){
        var email= $('#email-usuario').val();
        var contraseña= $("#contraseña-usuario").val();

        if ($.trim(email).length == 0) {
            alert('Ingrese un email');
            e.preventDefault();
        }
        if ($.trim(contraseña).length == 0) {
            alert('Ingrese una contraseña');
            e.preventDefault();
        }

        var params = {
            "email" : email,
            "contraseña" : contraseña
        };
        $.ajax({
            type:  'post',
            data:  {email:email,contraseña:contraseña},
            url:   '../Logica/Iniciar_sesion/Iniciar_sesion.php',
            success:  function (response) {
                msg="";
                if (response == 1) {
                    //window.location.replace = "principal.php";
                } else{
                    msg="Usuario o contraseña incorrecta";
                    alert(msg);
                }
            }
        });
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



