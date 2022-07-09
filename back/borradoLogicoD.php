<?php

include("../conexion.php");
$con=conectar();

$idDispositivo=$_GET['id'];

$sql = "UPDATE dispositivos SET status = 0 WHERE idDispositivo='$idDispositivo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../listadoDispositivos.php");
    }
?>