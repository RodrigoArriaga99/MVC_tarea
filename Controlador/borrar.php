<?php
$idAutor=$_GET['id'];
$Nombre=$_GET['nom'];
$Nacionalidad=$_GET['naci'];

include("../Modelo/conexion.php");
$con=conectar();

$sql="delete from autor where idAutor='$idAutor'";
$query=mysqli_query($con,$sql);


    if($query){
        Header("Location: ../Vista/banco.php");
    }
?>
