<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$email= $_POST['email'];
$contraseña= $_POST['contraseña'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$telefono= $_POST['telefono'];

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}



