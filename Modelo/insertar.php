<?php
include("../Modelo/conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$nacionalidad=$_POST['nacionalidad'];


$sql="INSERT INTO autor VALUES(default,'$nombre','$nacionalidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../Vista/banco.php");
    
}else {
}
?>