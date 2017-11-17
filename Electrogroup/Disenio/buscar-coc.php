<?php
session_start();
require 'conexion.php';
$conn=conectar();
//$valor=$_POST['precio'];
$sql="SELECT * FROM articulo WHERE Categoria='Cocina' OR Categoria='Heladeras y freezers'";
//if($valor=='mayor'){
  //  $sql="SELECT * FROM articulo WHERE Categoria LIKE '%$busqueda%' OR Marca LIKE '%$busqueda%' OR Nombre LIKE '%$busqueda%' ORDER BY Precio ASC";
//};
//if($valor=='menor'){
  //  $sql="SELECT * FROM articulo WHERE Categoria LIKE '%$busqueda%' OR Marca LIKE '%$busqueda%' OR Nombre LIKE '%$busqueda%' ORDER BY Precio DESC";
//};

$rec= mysqli_query($conn, $sql);

$cantidad= mysqli_num_rows($rec);
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
    <link rel="stylesheet" href="busqueda.css?ts=<?=time()?>&quot;" type="text/css">
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
    
    <!--Marcas-->
    <div class="container">
        <div class="row">
            <div class="col-6 marcas">
                <p><?php echo $cantidad; ?> resultados para </p><a href="principal.php">Electrogroup</a> > <p><a href="buscar-coc.php">Cocina, Heladeras y Freezers</a></p>  
            </div>
            <!--<div class="col-6">
                <form method="post" action="buscar.php">
                <select type="submit" name="precio" id="precio">
                    <option value="nombre">Nombre</option>
                    <option value="menor">Menor precio</option>
                    <option value="mayor">Mayor precio</option>
                </select>
                </form>
            </div>-->
        </div>
        <hr>
    </div>
    <!--Marcas-->

    <!--Artiulos-->
    <div class="container">
        <div class="row">
                <?php 
                if ($cantidad==0){ 
                    ?>
                    <div class="container">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">No hay resultados para esta busqueda</h4>
                            <hr>
                            <p>-<strong>Revise la ortografia de</strong> la palabra</p>
                            <p>-Utilice <strong>palabras mas genericas</strong> en su busqueda</p>
                        </div>
                    </div>
                <?php } else{
                    while ($row=mysqli_fetch_array($rec)) {
                    ?>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="../Electrogroup_img/PRODUCTOS ELECTROGROUP/<?php echo $row[5] ; ?>">
                            <div class="img__description_layer">
                                <h5 class="img__description"><a href="articulo.php?id= <?php echo $row[0] ?>"><?php echo $row[2];?></a></h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-tittle"><?php echo $row[2];?></h5>
                                <h3 class="card-text">$ <?php echo $row[1];?></h3>
                            </div>
                        </div> 
                    </div><?php
                    }
                }
                ?>
        </div>
    </div>
    <!--Artiulos-->

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