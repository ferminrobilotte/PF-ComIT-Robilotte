<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT * FROM articulo WHERE Categoria='Cocina' OR Categoria='Heladeras y freezers' order by RAND() LIMIT 4";
$rec= mysqli_query($conn, $sql);

$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id_coc1=$row[0];
$precio_coc1=$row[1];
$nombre_coc1=$row[2];
$imagen_coc1=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id_coc2=$row[0];
$precio_coc2=$row[1];
$nombre_coc2=$row[2];
$imagen_coc2=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id_coc3=$row[0];
$precio_coc3=$row[1];
$nombre_coc3=$row[2];
$imagen_coc3=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
$id_coc4=$row[0];
$precio_coc4=$row[1];
$nombre_coc4=$row[2];
$imagen_coc4=$row[5];