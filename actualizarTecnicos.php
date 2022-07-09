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
    <title>Actualizar Tecnico</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="resources/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/estylos-css/fontawesome/css/all.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="resources/estylos-css/general.css">
    <link rel="stylesheet" href="resources/estylos-css/updCita.css">
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
                    <i class="fa-solid fa-house fa-2x"></i>
                    <a href="index.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item">
                    <i class="fa-solid fa-calendar fa-2x"></i>
                    <a href="listadoCitas.php" class="nav-menu-link nav-link">Citas</a>
                </li>
                <li class="nav-menu-item">
                    <a href="listadoTecnicos.html" class="nav-menu-link nav-link">Tecnicos</a>
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
        <div class="forms1 justify-content-center">
            <div class="update mb-3">
                <h1 class="titulo">
                    Actualizar tecnico
                </h1>
                <p class="indicaciones">
                    Formulario para actualizar datos de algun tecnico
                </p>

            </div>
            <form class="row col-sm-12 elform ft" id="elform">
                <div class="form-group col-sm-6 mb-5 pb-5">
                    <label for="exampleInputEmail1">Matricula</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Matricula" required>
                </div>
                <div class="form-group col-sm-6 mb-5 pb-5">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre" required>
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="exampleInputPassword1">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellidos" required>
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="exampleFormControlSelect1">Area de especialidad</label>
                    <select required class="form-control" id="exampleFormControlSelect1">
                        <option>Soporte de equipo de computo</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="exampleInputPassword1">Email</label>
                    <input required n type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input required minlength="8" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <button type="button" class="btn btn-primary btns1 col-md-12 mb-4 pb-4 btTec1 botonTecnico1" data-toggle="modal" data-target="#exampleModalCenter">Actualizar
                </button>
                <button type="button" class="btn bg-warning  btns2 col-md-12 btTec2 mensaje btecnicoss" id="btns2">Cancelar </button>

            </form>
        </div>
    </div>

    <div class="col-sm-12 footerr fotTec bg-dark text-white justify-content-center">
        <footer class="abajo">
            <p>
                &copy; 2022 Company ServiElectronic, Inc
            </p>

        </footer>
    </div>
</body>

<!-- ************************************************************************************************************************-->
<!-- POPUP-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro de efectuar los siguientes cambios?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="can" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="location.href='dispositivos.html';">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!-- POPUP-->
<!-- ************************************************************************************************************************-->

<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="resources/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/js/bootstrap.min.js" js/bootstrap.min.js integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<!-- Custom JS-->
<script src="resources/js/animaciones.js"></script>
<script src="resources/js/paginadoTabs.js"></script>
<script src="resources/js/filtradoTabs.js"></script>
<!-- Custom JS-->

</html>