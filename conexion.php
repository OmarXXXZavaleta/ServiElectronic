<?php
function conectar(){
    $host="localhost";

    $user="root";
    //$user="id19215195_servielectronic801";

    $pass="";
    //$pass="@ElectronicServi01";

    $bd="proyectoServi";
    //$bd="id19215195_servielectronic";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
