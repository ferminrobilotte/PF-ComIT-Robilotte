<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT * FROM articulo WHERE Categoria='TV' OR Categoria='Informatica' order by RAND() LIMIT 4";
$rec= mysqli_query($conn, $sql);

$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id_1=$row[0];
$precio_1=$row[1];
$nombre_1=$row[2];
$imagen_1=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id_2=$row[0];
$precio_2=$row[1];
$nombre_2=$row[2];
$imagen_2=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id_3=$row[0];
$precio_3=$row[1];
$nombre_3=$row[2];
$imagen_3=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
$id_4=$row[0];
$precio_4=$row[1];
$nombre_4=$row[2];
$imagen_4=$row[5];

