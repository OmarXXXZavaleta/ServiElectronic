<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['correo'];
if ($varsesion == null || $varsesion = '') {
    header("location:inicioSesion.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="resources/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resources/dataTables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="resources/estylos-css/fontawesome/css/all.css">
    <link rel="stylesheet" href="resources/estylos-css/general.css">
    <link rel="stylesheet" href="resources/estylos-css/menuBurger.css">
    <link rel="stylesheet" href="resources/estylos-css/extras.css">


    <script src="https://use.fontawesome.com/d1da709de7.js"></script>
</head>

<header class="col-md-12 cabeza">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">

                    <a class="nav-link">Bienvenido: <?= $_SESSION["correo"] ?><span class="sr-only"></span></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seguridad.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="col-sm-4 logo">
        <img class="rounded-circle" alt="100x100" src="resources/img/logo1.jpg">
    </div>
</header>

<body>



    <div class="container lateral-menu col-md-12">

        <nav class="nav">
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <i class="fas fa-home fa-2x"></i>
                    <a href="index.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item">
                    <i class="fas fa-calendar-alt fa-2x"></i>
                    <a href="listadoCitas.php" class="nav-menu-link nav-link">Citas</a>
                </li>
                <li class="nav-menu-item">
                    <a href="listadoTecnicos.php" class="nav-menu-link nav-link">Tecnicos</a>
                    <i class="fa-solid fa-gear fa-2x"></i>
                </li>
                <li class="nav-menu-item">
                    <a href="listadoUsuarios.php" class="nav-menu-link nav-link">Usuarios</a>
                    <i class="fa-solid fa-users fa-2x"></i>
                </li>
                <li class="nav-menu-item ultimo">
                    <a href="listadoServicios.php" class="nav-menu-link nav-link">Servicios</a>
                    <i class="fa fa-wrench fa-2x" aria-hidden="true"></i>
                </li>
                <li class="nav-menu-item ultimo">
                    <a href="listadoDispositivos.php" class="nav-menu-link nav-link">Dispositivos</a>
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                </li>
            </ul>
        </nav>
        <div class="bars__menu">
            <i class="fa-solid fa-bars fa-3x"></i>
        </div>
    </div>
    <div class="container2 cuerpoCard col-md-12 justify-content-center">
        <div class="titulo ">
            <h1 class="tabs">
                Bienvenido Administrador:

            </h1>
            <h2>
                <!-- <?= $_SESSION["correo"] ?> -->
            </h2>
        </div>

    </div>


    <div class="col-sm-12 footerr bg-dark text-white justify-content-center">
        <footer class="abajo">
            <p>
                &copy; 2022 Company ServiElectronic, Inc
            </p>

        </footer>
    </div>

</body>



<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="resources/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/js/bootstrap.min.js" js/bootstrap.min.js integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<!-- Bootstrap -->

<!-- Data tables-->
<script type="text/javascript" src="resources/dataTables/datatables.min.js"></script>
<script type="text/javascript" src="resources/dataTables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="resources/dataTables/DataTables-1.12.1/js/dataTables.bootstrap4.js"></script>
<!-- Data tables-->


<!-- Custom JS-->
<script src="resources/js/animaciones.js"></script>
<script src="resources/js/paginadoTabs.js"></script>
<script src="resources/js/filtradoTabs.js"></script>
<!-- Custom JS-->

</html>