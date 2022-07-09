<?php

$conexion = mysqli_connect("localhost","root","","proyectoservi");

//$conexion = mysqli_connect("localhost","id19215195_servielectronic801","@ElectronicServi01","id19215195_servielectronic");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];


session_start();
$_SESSION['correo'] = $correo;

//include('conexiondb.php');

$consulta ="SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contraseña' AND status =1 AND idRol = 3";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);
if ($filas){
    header("location:listadoCitas.php");

}else{
    ?>
    <?php
    include ("inicioSesion.php");
    ?>
    <h1>Error, rectifique los datos</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>