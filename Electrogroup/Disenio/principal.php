<?php
session_start();
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
    <link rel="stylesheet" href="index.css" type="text/css">
    <!--CSS-->

    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:500" rel="stylesheet">
    <!--FONTS-->

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="index.js"></script>
    <script src="control-usuario.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!--JS-->

    <!-- -->
</head>
    
<body>
    <!--Barra fija-->
    <div class="container">
      <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <a href="principal.html" class="navbar-brand">
                <img class="img-fluid" src="Captura.png" width="70" height="60" alt="logo">
            </a>
            <form class="form-inline" type="search" placeholder="Search" aria-label="Search">
                <input class="form-control" type="search" size="60" placeholder="¿Qué estás buscando?" aria-label="Search">
                <button class="btn btn-outline" type="submit"><img src="Vectores/lupa2.png" width="20" height="20"></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php 
                        if(isset($_SESSION['email'])){
                    ?>
                    <button class="btn-modal-custom" id="micuenta" data-html="true" title='<a href="control-usuario.php">Mi cuenta</a>' data-toggle="popover" data-content='<a href="../Logica/Iniciar_sesion/cerrar_sesion.php">Cerrar sesion</a>' data-placement="bottom" data-trigger="focus">
                    <a class="nav-link" href="#">
                        <img class="img-fluid" src="Vectores/usuario.png" width="30" height="30">
                        Mi cuenta
                    </a>
                    </button>
                    <?php
                        }else{
                    ?>
                    <button class="btn-modal-custom" data-toggle="modal" data-target="#modal-usuario">
                    <a class="nav-link" href="#">
                        <img class="img-fluid" src="Vectores/usuario.png" width="30" height="30">
                        Iniciar sesion
                    </a>
                    </button>
                    <?php
                        }
                    ?>
                </li>
                <li class="nav-item carrito-custom">
                    <a class="nav-link" href="#">
                    <img src="Vectores/carrito.png" width="30" height="30">
                    </a>
                </li>
            </ul>
        </div>
      </nav>
        <!--Ventana inicio sesion-->
      <div class="modal fade mod-usuario" id="modal-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-usuario" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Iniciar sesión</h5>
                    <button class="close" id="close1" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Logica/Iniciar_sesion/Iniciar_sesion.php" method="post" class="form-group">
                        <label for="email-usuario">Email</label>
                        <input type="email" class="form-control" name="email" id="email-usuario">
                        <label for="contraseña-usuario">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña" id="contraseña-usuario">
                        <label></label>
                        <button class="btn btn-block">Iniciar sesion</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-registro" class="btn btn-block" data-toggle="modal" data-target="#modal-registro">
                        Registrate
                    </button>
                </div>
            </div>          
        </div>
    </div>
      <!--Ventana inicio sesion-->

      <!--Ventana registro-->
      <div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="modal-registro" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Registro de usuario</h5>
                    <button class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Logica/Usuarios/Registrar_usuario/Registrar_usuario.php" method="post" class="form-group">
                        <label for="email-usuario">Email</label>
                        <input type="email" class="form-control email-usuario" placeholder="Ingrese un email valido" name="email">
                        <label for="contraseña-usuario">Contraseña</label>
                        <input type="password" class="form-control contraseña-usuario" placeholder="Contraseña de 8 o mas digitos" name="contraseña" id="contraseña-usuario">
                        <label for="repetir-contraseña">Repetir contraseña</label>
                        <input type="password" class="form-control repetir-contraseña" name="repetir-contraseña" id="repetir-contraseña">
                        <label></label>
                        <button class="btn btn-block" id="send">Registrate</button>
                    </form>
                </div>
              </div>
          </div>
      </div>
      <!--Ventana registro-->
    </div>
    <!--Fin barra fija-->

    <!--Barra de categorias-->
    <div class="container-fluid nav-custom">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#" id="informatica" >TV e Informatica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="electrodomesticos" href="#">Electrodomesticos y Climatizacion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="salud" href="#">Cuidado personal y Salud</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="lavado" href="#">Lavado y Limpieza</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="cocina" href="#">Cocina, Heladeras y Freezers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="otros" href="#">Otros</a>
            </li>
        </ul>
    </div>
    <!--Fin Barra de categorias-->

    <!--Carrousel-->
    <div class="container-fluid carousel_custom">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="Carousel/portada.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Carousel/promocion1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Carousel/promocion2.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    <!--Fin carrousel-->

    <!-- -->
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col col-custom">
                <img src="Vectores/delivery.png" width="30" height="30">
                <p>Envios a <strong>todo el país</strong></p>
            </div>
            <div class="col">
                <img src="Vectores/shop.png" width="25" height="23">
                <p>Retira <strong>gratis hoy mismo</strong> por nuestro local</p>
            </div>
        </div>
    </div>
    <!-- -->

    <!-- -->
    <div class="container container-card">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->

    <!-- -->
    <div class="container img-custom">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="Carousel/portada2.jpg">
            </div>
        </div>
    </div>
    <!-- -->

    <!-- -->
    <div class="container container-card">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->

    <!-- -->
     <div class="container container-card">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Vectores/notebook.png" class="card-image-top img-fluid">
                        <div class="card-block">
                            <h1 class="card-tittle">Encabezado</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- -->

    <!-- -->
    <div class="container img-custom">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="Carousel/portada3.jpg">
            </div>
        </div>
    </div>
    <!-- -->    

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