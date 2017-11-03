<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT nombre FROM articulo";
$rec= mysqli_query($conn, $sql);
$verificar=0;

while($result= mysqlI_fetch_object($rec)){
    if($result->nombre==$nombre){
                $verificar=1;
            }
}
 if($verificar==0){
            $sql= "INSERT INTO articulo (precio, nombre) VALUES ('$precio','$nombre')";
            mysqli_query($conn, $sql);
            echo "Articulo agregado";
} else{
    echo "El nombre del articulo ya existe";
}

?>