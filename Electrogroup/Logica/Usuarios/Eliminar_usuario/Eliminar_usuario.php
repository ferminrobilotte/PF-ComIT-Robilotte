<?php
$servername = "localhost";
$username = "ferminrobilotte";
$password= "pincharata38531662";
$dbname="electrogroup_db";
$email= $_POST['email'];
$contraseña= $_POST['contraseña'];
//$contraseña= hash("sha512",$contraseña);

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT contrasenia FROM clientes WHERE email='$email' ";
$rec= mysqli_query($conn, $sql);
$verificar=0;

while ($result = mysqli_fetch_object($rec)){
            if($result->contrasenia==$contraseña){
                $verificar=1;
            }
        }
        
if ($verificar == 1){
    $sql="DELETE FROM clientes WHERE email='$email'";
    mysqli_query($conn, $sql);
    echo "usuario eliminado";
}        else{
    echo"la contraseña no coincide";
}
/*
$sql="DELETE FROM clientes WHERE email='$email'";
$result = mysqli_query($conn, $sql);
*/
