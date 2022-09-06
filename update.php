<?php

include("conexion.php");
$con=conectar();
$id=$_POST['idAutor'];
$Nombre=$_POST['Nombre'];
$Nacionalidad=$_POST['Nacionalidad'];

$sql="UPDATE autor SET Nombre='$Nombre',Nacionalidad='$Nacionalidad' WHERE idAutor='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: banco.php");
    }
?>