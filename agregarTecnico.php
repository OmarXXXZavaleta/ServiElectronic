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
    <title>Nuevo Tecnico</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
        <div class="forms1 justify-content-center">
            <div class="update mb-3">
                <h1 class="titulo">
                    Nuevo tecnico
                </h1>
                <p class="indicaciones">
                    Formulario para ingresar un nuevo tecnico
                </p>

            </div>
            <form class="row col-sm-12 elform ft" id="elform" method="post" action="usuarios.php?action=altaTecnico">
                <div class="form-group col-sm-6 mb-5 pb-5">
                    <label for="matriculaTecnico">Matricula</label>
                    <input type="text" class="form-control" id="matriculaTecnico" aria-describedby="emailHelp" placeholder="Matricula" required>
                </div>
                <div class="form-group col-sm-6 mb-5 pb-5">
                    <label for="nombreTecnico">Nombre</label>
                    <input type="text" class="form-control" id="nombreTecnico" placeholder="Nombre" required>
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="apellidosTecnico">Apellidos</label>
                    <input type="text" class="form-control" id="apellidosTecnico" placeholder="Apellidos" required>
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="especialidadTecnico">Area de especialidad</label>
                    <select required class="form-control" id="especialidadTecnico">
                        <option>Soporte de equipo de computo</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="correoTecnico">Correo</label>
                    <input required n type="email" class="form-control" id="correoTecnico" placeholder="Email">
                </div>
                <div class="form-group col-sm-12 mb-5 pb-5">
                    <label for="contraseñaTecnico">Contraseña</label>
                    <input required minlength="8" type="password" class="form-control" id="contraseñaTecnico" placeholder="Contraseña">
                </div>

                <button type="button" class="btn btn-primary btns1 col-md-12 mb-4 pb-4 btTec1 botonTecnico1" data-toggle="modal" data-target="#exampleModalCenter">Agregar
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
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Esta seguro de agregar el tecnico?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="can" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="location.href='dispositivos.html';">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!-- POPUP-->
<!-- ************************************************************************************************************************-->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="resources/js/menu.js"></script>

</html>