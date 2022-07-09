<?php

include("../conexion.php");
$con=conectar();

$idServicio=$_GET['id'];

$sql = "UPDATE servicios SET status = 0 WHERE idServicio='$idServicio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../listadoServicios.php");
    }
?>