<?php
//session_start();
//error_reporting(0);

// $varsesion = $_SESSION['correo'];
// if ($varsesion == true || $varsesion = '') {
//     header("location:listadoCitas.php");
//     die();
// }
?>

<script>
    window.alert("Comunicate con soporte si tienes algun problema")
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="">
<link rel="stylesheet" href="resources/estilos-css/css/estilos.css">
<link rel="stylesheet" href="resources/estylos-css/estilos.css/estilos.css">

<link rel="stylesheet" href="resources/estylos-css/estilos.css">



<body>
    <section id="fondoLogin" class="vh-100 bg-image">

        <div class="container-fluid h-100 subConLog">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div id="fondoTransparente" class="justify-content-center">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-5">Iniciar Sesión Administrador</h2>
                            <form action="validacionLogin.php" method="POST" class="login">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="">Correo:</label>
                                    <input type="email" name="correo" class="form-control form-control-lg" placeholder="Ingresa tu correo" required />
                                </div>
                                <div class="form-outline mb-4">

                                    <label class="form-label" for="">Contraseña:</label>

                                    <input type="password" name="contraseña" class="form-control form-control-lg" placeholder="Ingresa tu contraseña" minlength="" required />

                                </div>

                                <div class="d-flex justify-content-center" id="btncolor">
                                    <button type="submit" class="btn btn-lg btn-block  btn-outline  bg-primary btlog">
                                        <p id="letrasBlancas">Iniciar Sesión</p>
                                    </button>
                                </div>
                                <br>





                                <div class="d-flex justify-content-center" id="btncolor">


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>

<!--firebase-->
<script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";
    import {
        Auth
    } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";


    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyCzwe-M0vNMwJNwhktFh7tdWqphnuHD3ng",
        authDomain: "servielectronic-f6140.firebaseapp.com",
        projectId: "servielectronic-f6140",
        storageBucket: "servielectronic-f6140.appspot.com",
        messagingSenderId: "418903838966",
        appId: "1:418903838966:web:f47052acd09bcc9af35cd7"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth = firebase.auth(firebaseConfig);
</script>

<!--firebase-->

<!-- CUSTOM SCRIPTS-->
<script src="login.js"></script>
<!-- CUSTOM SCRIPTS-->

</html>