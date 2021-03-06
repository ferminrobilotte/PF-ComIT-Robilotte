<?php
session_start();
require '../Logica/Articulos/Mostrar_art/mostrar_art_infor.php';
require '../Logica/Articulos/Mostrar_art/mostrar_art_electr.php';
require '../Logica/Articulos/Mostrar_art/mostrar_art_coc.php';
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
    <link rel="stylesheet" href="index.css?ts=<?=time()?>&quot;" type="text/css">
    <!--CSS-->

    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:500" rel="stylesheet">
    <!--FONTS-->

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="index.js?ts=<?=time()?>&quot;"></script>
    <script src="control-usuario.js?ts=<?=time()?>&quot;"></script>
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
            <a href="principal.php" class="navbar-brand">
                <img class="img-fluid" src="Captura.png" width="70" height="60" alt="logo">
            </a>
            <form class="form-inline" method="post" action="buscar.php" type="search" placeholder="Search" aria-label="Search">
                <input class="form-control" type="search" size="60" placeholder="¿Qué estás buscando?" aria-label="Search" name="busqueda">
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
                    <form class="form-group" method="post">
                        <label for="email-usuario">Email</label>
                        <input type="email" class="form-control" name="email" id="email-usuario">
                        <label for="contraseña-usuario">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña" id="contraseña-usuario">
                        <label></label>
                        <div class="resultado"></div>
                        <button class="btn btn-block iniciar">Iniciar sesion</button>
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
                    <form method="post" class="form-group">
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
                <a class="nav-link anim-underline" href="buscar-inf-tv.php" id="informatica" ><strong>TV e Informatica</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="electrodomesticos" href="buscar-elec-cli.php"><strong>Electrodomesticos y Climatizacion</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="salud" href="buscar-pers-salud.php"><strong>Cuidado personal y Salud</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="lavado" href="buscar-lav-limp.php"><strong>Lavado y Limpieza</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="cocina" href="buscar-coc.php"><strong>Cocina, Heladeras y Freezers</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link anim-underline" id="otros" href="buscar-otros.php"><strong>Otros</strong></a>
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

    <!--Productos-->
    <div class="container container-card">
        <h2>Electrodomesticos y Climatizacion</h2>
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen1 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id1 ?>"><?php echo $nombre1;?></a></h5>
                        </div>
                        <div class="card-busqueda.phpblock">
                            <h5 class="card-tittle"><?php echo $nombre1;?></h5>
                            <h3 class="card-text">$ <?php echo $precio1;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen2 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id2 ?>"><?php echo $nombre2;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre2;?></h5>
                            <h3 class="card-text">$ <?php echo $precio2;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen3 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id3 ?>"><?php echo $nombre3;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre3;?></h5>
                            <h3 class="card-text">$ <?php echo $precio3;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen4 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id4 ?>"><?php echo $nombre4;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre4;?></h5>
                            <h3 class="card-text">$ <?php echo $precio4;?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Productos-->

    <!-- -->
    <div class="container img-custom">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="Carousel/portada2.jpg">
            </div>
        </div>
    </div>
    <!-- -->

    <!--Productos-->
    <div class="container container-card">
        <h2>TV e Informatica</h2>
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_1 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_1 ?>"><?php echo $nombre_1;?></a></h5>
                        </div>
                        <div class="card-busqueda.phpblock">
                            <h5 class="card-tittle"><?php echo $nombre_1;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_1;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_2 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_2 ?>"><?php echo $nombre_2;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre_2;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_2;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_3 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_3 ?>"><?php echo $nombre_3;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre_3;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_3;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_4 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_4 ?>"><?php echo $nombre_4;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre_4;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_4;?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Productos-->

    <!--Productos-->
     <div class="container container-card">
        <h2>Cocina, Heladeras y Freezers</h2>
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_coc1 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_coc1 ?>"><?php echo $nombre_coc1;?></a></h5>
                        </div>
                        <div class="card-busqueda.phpblock">
                            <h5 class="card-tittle"><?php echo $nombre_coc1;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_coc1;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_coc2 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_coc2 ?>"><?php echo $nombre_coc2;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre_coc2;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_coc2;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_coc3 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_coc3 ?>"><?php echo $nombre_coc3;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre_coc3;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_coc3;?></h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $imagen_coc4 ; ?>" class="card-image-top img-fluid">
                        <div class="img__description_layer">
                            <h5 class="img__description"><a href="articulo.php?id=<?php echo $id_coc4 ?>"><?php echo $nombre_coc4;?></a></h5>
                        </div>
                        <div class="card-block">
                            <h5 class="card-tittle"><?php echo $nombre_coc4;?></h5>
                            <h3 class="card-text">$ <?php echo $precio_coc4;?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!--Productos-->

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