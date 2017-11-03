<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";
$nombre= $_POST['nombre'];

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql="DELETE FROM articulo WHERE nombre='$nombre'";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "articulo eliminado";
} else {
    echo "error eliminando articulo" .mysqli_error($conn);
}
