<?php
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

        $sql="SELECT email FROM clientes";
        $rec= mysqli_query($conn, $sql);
        $verificar=0;
        
        while ($result = mysqli_fetch_object($rec)){
            if($result->email==$email){
                $verificar=1;
            }
        }
        if($verificar==0){
            $sql = "INSERT INTO clientes(email, contrasenia) VALUES ('$email','$contraseña')";
            mysqli_query($conn, $sql);
            header ("Location: ../../../Disenio/registro-exitoso.html");
        }
        else{
            echo "el email ya esta registrado";
        }
?>