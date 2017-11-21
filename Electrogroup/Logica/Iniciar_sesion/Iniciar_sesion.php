<?php
session_start();
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";
$email= $_POST['email'];
$contraseña= $_POST['contraseña'];
$contraseña= hash("sha512",$contraseña);

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT contrasenia FROM clientes WHERE email='$email'";
$rec= mysqli_query($conn, $sql);
$verificar=0;

while ($result = mysqli_fetch_object($rec)){
    if($result->contrasenia==$contraseña){
                $verificar=1;
            }
            else{
               $verificar=0;
            }
}

if($verificar == 1){
	$_SESSION['email'] = $email;
	echo 1;
} else{
    echo 0;
}
