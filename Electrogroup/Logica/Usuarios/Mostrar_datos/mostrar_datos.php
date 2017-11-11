<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$email= $_SESSION['email'];

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT dni, nombre, apellido, telefono FROM clientes WHERE email='$email'";
$rec=mysqli_query($conn, $sql);

while($result = mysqli_fetch_object($rec)){
	$nombre= $result->nombre;
	$apellido=$result->apellido;
	$dni=$result->dni;
	$telefono=$result->telefono;
}
