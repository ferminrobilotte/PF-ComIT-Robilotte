<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];

$sql="SELECT precio, nombre, imagen, categoria, marca, descripcion, stock FROM articulo WHERE idArticulo='$id'";
$rec=mysqli_query($conn, $sql);

while($result = mysqli_fetch_object($rec)){
	$precio= $result->precio;
	$nombre=$result->nombre;
	$imagen=$result->imagen;
	$categoria=$result->categoria;
	$marca=$result->marca;
	$descripcion=$result->descripcion;
	$stock=$result->stock;
}