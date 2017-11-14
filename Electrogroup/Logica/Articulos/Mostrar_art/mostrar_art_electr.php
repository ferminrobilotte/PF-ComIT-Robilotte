<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT * FROM articulo WHERE Categoria='Electrodomesticos' OR Categoria='Climatizacion' order by RAND() LIMIT 4";
$rec= mysqli_query($conn, $sql);

$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id1=$row[0];
$precio1=$row[1];
$nombre1=$row[2];
$imagen1=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id2=$row[0];
$precio2=$row[1];
$nombre2=$row[2];
$imagen2=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
//echo "</br>";
$id3=$row[0];
$precio3=$row[1];
$nombre3=$row[2];
$imagen3=$row[5];
$row=mysqli_fetch_array($rec,MYSQLI_NUM);
//printf ("%s (%s) %s\n",$row[0],$row[1],$row[2]);
$id4=$row[0];
$precio4=$row[1];
$nombre4=$row[2];
$imagen4=$row[5];