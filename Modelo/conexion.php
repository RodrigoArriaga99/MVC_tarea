<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="123456";

    $bd="banco";
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}
?>