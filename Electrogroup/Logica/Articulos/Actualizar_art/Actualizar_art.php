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

$sql="UPDATE articulo SET precio='$precio' WHERE nombre='$nombre'";
$result= mysqli_query($conn, $sql);

if($result){
    echo "articulo actualizado";
} else{
    echo "No se ha podido actualizar el articulo";
}

