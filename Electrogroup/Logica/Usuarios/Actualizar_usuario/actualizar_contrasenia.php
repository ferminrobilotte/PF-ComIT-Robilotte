<?php
session_start();
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$email= $_SESSION['email'];
$contraseña= $_POST['contraseña-actual'];
$contraseña= hash("sha512",$contraseña);
$contraseña_nueva= $_POST['contraseña-nueva'];
$contraseña_nueva= hash("sha512",$contraseña_nueva);

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT contrasenia FROM clientes WHERE email='$email'";
$rec= mysqli_query($conn, $sql);
$verificar=0;
$erores='';

while ($result = mysqli_fetch_object($rec)){
    if($result->contrasenia==$contraseña){
                $verificar=1;
            }
            else{
               $verificar=0;
            }
}

if($verificar == 1){
	$sql="UPDATE clientes SET contrasenia='$contraseña_nueva' WHERE email='$email'";
	mysqli_query($conn, $sql);
	header("Location: ../../../Disenio/control-usuario.php");
} else{
	$errores='<li>La contraseña no coincide con la actual</li>';
}