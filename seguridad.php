<?php

session_start();
//destruye la sesion de todos los usuarios
session_destroy();
header("location:inicioSesion.php");
