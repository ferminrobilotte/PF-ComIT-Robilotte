<?php
session_start();
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$email= $_SESSION['email'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$telefono= $_POST['telefono'];

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE clientes SET DNI='$dni', nombre='$nombre', apellido='$apellido', telefono='$telefono' WHERE email='$email'";
$result=mysqli_query($conn, $sql);
if($result){
    header ("Location: ../../../Disenio/control-usuario.php");
}
else{
    echo "error " .$sql. "<br>" . mysqli_error($conn);
}