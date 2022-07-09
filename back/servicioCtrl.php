<?php
include("servicio.php");
include("../conexion.php");

$opcion = $_REQUEST['opcion'];

$servicio1 = new servicio();
$servicio1->conexion();

switch ($opcion) {
    case 'insertar':

        $nombreServicio = $_REQUEST['nombreServicio'];
        $costoInicial = $_REQUEST['costoInicial'];
        $urlVideo = $_REQUEST['urlVideo'];
        $presentacionServicio = $_REQUEST['presentacionServicio'];
        $descripcionServicio = $_REQUEST['descripcionServicio'];

        //$statusServicio = $_REQUEST['status'];

        $servicio1->inicializar($nombreServicio, $costoInicial, $urlVideo, $presentacionServicio, $descripcionServicio);
        $servicio1->insertar();
        header("location:../listadoServicios.php");
        break;

    case 'modificar':

        $con = conectar();

        $idServicio = $_POST['idServicio'];
        $nombreServicio = $_POST['nombreServicio'];
        $costoInicial = $_POST['costoInicial'];
        $urlVideo = $_POST['urlVideo'];
        $presentacionServicio = $_POST['presentacionServicio'];
        $descripcionServicio = $_POST['descripcionServicio'];



        $sql = "UPDATE servicios set nombreServicio='$nombreServicio', costoInicialServicio='$costoInicial', urlVideo='$urlVideo', presentacionServicio='$presentacionServicio', descripcionServicio='$descripcionServicio' WHERE idServicio='$idServicio'";

        $query = mysqli_query($con, $sql);

        if ($query) {
            Header("Location: ../listadoServicios.php");
        }
        break;
}
