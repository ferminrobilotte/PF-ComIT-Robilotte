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
json_encode($id);
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

$sql="SELECT * FROM articulo WHERE (Categoria='$categoria' OR Marca='$marca') AND Nombre!='$nombre' order by RAND() LIMIT 4";
$rec= mysqli_query($conn, $sql);

$row=mysqli_fetch_array($rec,MYSQLI_NUM);
$id1=$row[0];
$precio1=$row[1];
$nombre1=$row[2];
$imagen1=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
$id2=$row[0];
$precio2=$row[1];
$nombre2=$row[2];
$imagen2=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
$id3=$row[0];
$precio3=$row[1];
$nombre3=$row[2];
$imagen3=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
$id4=$row[0];
$precio4=$row[1];
$nombre4=$row[2];
$imagen4=$row[5];