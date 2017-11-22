$(function(){
  $('[data-toggle="popover"]').popover();
  $('#micuenta').popover();

  $('#send-datos').click(function(e) {
      var nombreusuario = ($('.nombreusuario').val());
      var apellidousuario = ($('.apellidousuario').val());
      var dniusuario = ($('.dniusuario').val());
      var telefonousuario = ($('.telefonousuario').val());
      if ($.trim(nombreusuario).length == 0) {
            alert('Por favor introduzca un nombre valido');
            e.preventDefault();
      };
      if ($.trim(apellidousuario).length == 0) {
            alert('Por favor introduzca un apellido valido');
            e.preventDefault();
      };
      if ($.trim(dniusuario).length == 0 || $.isNumeric(dniusuario)==false) {
            alert('Por favor introduzca un dni valido');
            e.preventDefault();
      };
      if ($.trim(telefonousuario).length == 0 || $.isNumeric(telefonousuario)==false) {
            alert('Por favor introduzca un telefono valido');
            e.preventDefault();
      };
  });

  $(document).on("click", "#send-contrasenia", function(e){
      console.log('numero');
      console.log(contraseña1);
      console.log(contraseña2);
      console.log(contraseñaactual);
  		var contraseña1 = $(".contraseña-nueva").val();
    	var contraseña2 = $(".repetir-contraseña").val();
      var contraseñaactual = $(".contraseña-actual").val();
    	if($.trim(contraseña1).length==0 || $.trim(contraseña1).length<8){
    		alert('Por favor introduzca una contraseña de 8 o mas caracteres');
    		e.preventDefault();
    	}
    	if(contraseña1!=contraseña2){
    		alert('Las contraseñas no son iguales');
    		e.preventDefault();
    	} 
      if ($.trim(contraseñaactual).length==0){
        alert('Por favor introduzca su contraseña actual');
        e.preventDefault();
      }

      $.ajax({
            type:  'post',
            data:  {contraseñaactual:contraseñaactual},
            url:   '../Logica/Usuarios/Actualizar_usuario/actualizar_contrasenia.php',
            success:  function (response) {
                msg="";
                if (response == 1) {
                    window.location = "control-usuario.php";
                } else{
                    msg="Su contraseña actual es incorrecta";
                    alert(msg);
                }
            }
        });
  });

});
