<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: principal.php");
}
require '../Logica/Usuarios/Mostrar_Datos/mostrar_datos.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>ELECTROGROUP: Tienda online</title>
    <!-- META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--META-->

    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="control-usuario.css?ts=<?=time()?>&quot;" type="text/css">
    <!--CSS-->

    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:500|Slabo+27px" rel="stylesheet">
    <!--FONTS-->

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="control-usuario.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!--JS-->

    <!-- -->
</head>

<body>
    <!--Barra fija, sesion iniciada-->
    <div class="container">
      <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <a href="principal.php" class="navbar-brand">
                <img class="img-fluid" src="Captura.png" width="70" height="60" alt="logo">
            </a>
            <form class="form-inline" type="search" placeholder="Search" aria-label="Search">
                <input class="form-control" type="search" size="60" placeholder="¿Qué estás buscando?" aria-label="Search">
                <button class="btn btn-outline" type="submit"><img src="Vectores/lupa2.png" width="20" height="20"></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="btn-modal-custom" id="micuenta" data-html="true" title='<a href="control-usuario.php">Mi cuenta</a>' data-toggle="popover" data-content='<a href="../Logica/Iniciar_sesion/cerrar_sesion.php">Cerrar sesion</a>' data-placement="bottom" data-trigger="focus">
                    <a class="nav-link" href="#">
                        <img class="img-fluid" src="Vectores/usuario.png" width="30" height="30">
                        Mi cuenta
                    </a>
                    </button>
                </li>
                <li class="nav-item carrito-custom">
                    <a class="nav-link" href="#">
                    <img src="Vectores/carrito.png" width="30" height="30">
                    </a>
                </li>
            </ul>
        </div>
      </nav>
    </div>
    <!--Fin barra fija-->

    <!--Barra de categorias-->
    <div class="container-fluid nav-custom">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link anim-underline" href="busqueda.php" id="informatica" ><strong>TV e Informatica</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="electrodomesticos" href="busqueda.php"><strong>Electrodomesticos y Climatizacion</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="salud" href="busqueda.php"><strong>Cuidado personal y Salud</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="lavado" href="busqueda.php"><strong>Lavado y Limpieza</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="cocina" href="busqueda.php"><strong>Cocina, Heladeras y Freezers</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="otros" href="busqueda.php"><strong>Otros</strong></a>
            </li>
        </ul>
    </div>
    <!--Fin Barra de categorias-->

    <!--Control-usuario-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-custom1">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><strong>Inicio</strong></a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><strong>Mis compras</strong></a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><strong>Mis datos</strong></a>
                </div>
            </div>
            <div class="col col-custom">
                <div class="tab-content tab-custom" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    Lore ipsum
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    Lore lore
                    </div>
                    <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            <div class="col-10 title-custom">
                                <h4>Mis datos</h4>
                            </div>
                            <div class="col-10 col-custom2">
                                <div class="container datos-custom">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="row align-items-start">
                                                <div class="col-12 col-custom-datos">
                                                    <h6>Nombre:</h6>
                                                    <?php if(!empty($nombre)){?>
                                                    <p><?php echo $nombre ?></p>
                                                    <?php } else {?>
                                                    <p>-</p>
                                                    <?php };?>
                                                </div>
                                                <div class="col-12 col-custom-datos">
                                                    <h6>Numero de documento:</h6>
                                                    <?php if(!empty($dni)){?>
                                                    <p><?php echo $dni ?></p>
                                                    <?php } else {?>
                                                    <p>-</p>
                                                    <?php };?>
                                                </div>
                                                <div class="col-12 col-custom-datos">
                                                    <h6>Email:</h6>
                                                    <?php echo $email ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-12 col-custom-datos">
                                                    <h6>Apellido:</h6>
                                                    <?php if(!empty($apellido)){?>
                                                    <p><?php echo $apellido ?></p>
                                                    <?php } else {?>
                                                    <p>-</p>
                                                    <?php };?>
                                                </div>
                                                <div class="col-12 col-custom-datos">
                                                    <h6>Telefono:</h6> 
                                                    <?php if(!empty($telefono)){?>
                                                    <p><?php echo $telefono ?></p>
                                                    <?php } else {?>
                                                    <p>-</p>
                                                    <?php };?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn" data-toggle="modal" data-target="#modal-usuario">
                                            Actualizar datos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 title-custom">
                                <h4>Modificar contraseña</h4>
                            </div>
                            <div class="col-6 col-custom2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="text-custom">
                                                <h6>Contraseña:</h6>
                                                <p><strong>xxxxxxxx</strong></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn" data-toggle="modal" data-target="#modal-contraseña">
                                            Modificar contraseña
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--control-usuario-->

    <!--Modal actualizar usuario-->
    <div class="modal fade mod-usuario" id="modal-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-usuario" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Actualizar datos</h5>
                    <button class="close" id="close1" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Logica/Usuarios/Actualizar_usuario/actualizar_usuario.php" method="post" class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control nombreusuario" name="nombre" id="nombre">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control apellidousuario" name="apellido" id="apellido">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control dniusuario" name="dni" id="dni">
                        <label for="telefono">Telefono</label>
                        <input type="tel" class="form-control telefonousuario" placeholder="Sin espacios, ni guiones" name="telefono" id="telefono">
                        <label></label>
                        <button class="btn btn-block" id="send">Actualizar datos</button>
                        <?php if(!empty($errores)): ?>
                            <div>
                                <ul>
                                    <?php echo $errores; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>          
        </div>
    </div>
    <!--Modal actualizar usuario-->

    <!--Modal actualizar contraseña-->
    <div class="modal fade mod-usuario" id="modal-contraseña" tabindex="-1" role="dialog" aria-labelledby="modal-contraseña" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Actualizar contraseña</h5>
                    <button class="close" id="close1" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Logica/Usuarios/Actualizar_usuario/actualizar_contrasenia.php" method="post" class="form-group">
                        <label for="nombre">Contraseña actual</label>
                        <input type="password" class="form-control contraseña-actual" name="contraseña-actual" id="contraseña-actual">
                        <label for="apellido">Contraseña nueva</label>
                        <input type="password" class="form-control contraseña-nueva" placeholder="Contraseña de 8 o mas digitos" name="contraseña-nueva" id="contraseña-nueva">
                        <label for="dni">Repetir contraseña</label>
                        <input type="password" class="form-control repetir-contraseña" name="repetir-contraseña" id="repetir-contraseña">
                        <label></label>
                        <button class="btn btn-block" id="send-contraseña">Actualizar contraseña</button>
                    </form>
                </div>
            </div>          
        </div>
    </div>
    <!--Modal actualizar contraseña--> 

    <!--FOOTER -->
    <div class="container-fluid footer-custom">
        <div class="row justify-content-around">
            <div class="col img-fluid">
                <img src="logo-png.png" width="300" height="180">
            </div>
            <div class="col img-redes">
                <a href="https://www.facebook.com/Electrogrouponline/">
                    <img src="Vectores/face2.png" width="50" height="50">
                </a>
                <a href="https://www.instagram.com/electrogroupbahia/">
                    <img src="Vectores/instagram.png" width="50" height="50">
                </a>
            </div>
            <div class="col col-text">
                <h3><strong>CONTACTANOS</strong></h3>
                <p>Zelarrayan 742, Bahia Blanca, Buenos Aires</p>
                <p>Tel: 2914611589</p>
            </div>
        </div>
    </div>
    <!--FOOTER -->
</body>

</html>      