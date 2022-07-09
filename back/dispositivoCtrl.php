<?php
include("dispositivo.php");
include("../conexion.php");

$opcion = $_REQUEST['opcion'];

$dispositivo1 = new dispositivo();
$dispositivo1->conexion();

switch ($opcion) {
    case 'insertar':

        $nombreDispositivo = $_REQUEST['nombreDispositivo'];
        $modeloDispositivo = $_REQUEST['modeloDispositivo'];
        //$statusDispositivo = $_REQUEST['status'];

        $dispositivo1->inicializar($nombreDispositivo, $modeloDispositivo);
        $dispositivo1->insertar();
        header("location:../listadoDispositivos.php");
        break;

    case 'modificar':

        $con = conectar();

        $idDispositivo = $_POST['idDispositivo'];
        $nombreDispositivo = $_POST['nombreDispositivo'];
        $modeloDispositivo = $_POST['modeloDispositivo'];

        $sql = "UPDATE dispositivos SET nombreDispositivo='$nombreDispositivo',modeloDispositivo='$modeloDispositivo' WHERE idDispositivo='$idDispositivo'";
        $query = mysqli_query($con, $sql);

        if ($query) {
            Header("Location: ../listadoDispositivos.php");
        }
        break;

    case 'eliminar':
        $con = conectar();

        $idDispositivo = $_POST['idDispositivo'];


        $sql = "UPDATE dispositivos SET status = 0 WHERE idDispositivo='$idDispositivo'";
        $query = mysqli_query($con, $sql);

        if ($query) {
            Header("Location: ../listadoDispositivos.php");
        }
}
