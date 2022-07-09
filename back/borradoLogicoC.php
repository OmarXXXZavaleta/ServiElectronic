<?php

include("../conexion.php");
$con=conectar();

$idCita=$_GET['id'];

$sql = "UPDATE citas SET status = 0 WHERE idCita='$idCita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../listadoCitas.php");
    }
?>