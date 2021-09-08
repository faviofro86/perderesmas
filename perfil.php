<?php
session_start();
include_once('includes/conexion.php');
include_once('includes/usuario.php');
if(isset($_SESSION['logged_in'])){
    $user = new Usuario;
    $doc = $_SESSION['doc'];
    $datos = $user->datos($doc);
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Gloria - Perder es más">
    <meta property="og:site_name" content="Gloria - Perder es más">
    <meta property="og:url" content="perderesmas.pe">
    <meta property="og:description" content="¡Bienvenido a tu nuevo reto!">
    <meta property="og:type" content="website">
    <meta property="og:image" content="#perderesmas.pe/ppl.jpg">

    <title>Gloria - Perder es más</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <style>
        .perfil a {
            color: #ff9933;
        }
    </style>
</head>

<body>
    <header class="header d-flex align-items-center">
        <div class="containerLogoCompleto">
            <img class="logoCompleto" src="img/logoCompleto.png" alt="logo">
        </div>
        <img id="menuBtn" class="menuBtnHamburguer" src="https://pipartners.cl/wp-content/uploads/2021/07/menuH.png" alt="menu">
        <!--Inclusión del menú-->
        <?php include('menu.php'); ?>
    </header>
    <main role="main">
        <section class="perfilContainer textCenter">
            <p class="perfil__saludo">Hola, <?php echo $datos['nombres'] . ' ' . $datos['appaterno'] ; ?></p>

            <p class="perfil__titulo white textCenter">MIS DATOS</p>
            <form id="formDatos" class="formDatos" action="">
                <label for="peso">Peso:
                    <input type="text" name="peso" id="peso">
                </label>
                <label for="estatura">Estatura:
                    <input type="text" name="estatura" id="estatura">
                </label>
                <label for="complexion" class="complexsionContainer">Complexión:
                    <select name="complexion" id="complexion">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </label>
                <label for="edad">Edad:
                    <input type="number" name="edad" id="edad">
                </label>
                <input type="submit" value="GUARDAR DATOS">
            </form>
            <p class="perfil__cambiarPassword">CAMBIAR CONTRASEÑA</p>
            <form id="formPassword" class="formPassword" action="">
                <label for="oldPassword">Contraseña antigua:
                    <input type="password" name="oldPassword" id="oldPassword">
                </label>
                <label for="newPassword">Contraseña nueva:
                    <input type="password" name="newPassword" id="newPassword">
                </label>
                <label for="confirmPassword">Confirmar contraseña:
                    <input type="password" name="confirmPassword" id="confirmPassword">
                </label>
                <input type="submit" value="GRABAR">
            </form>
            <img class="personRunning" src="img/ilustracion_2.png" alt="personRunning">

        </section>

    </main>

    <script src="js/scripts.js"></script>
</body>
<?php }else{
    header('Location: ../index.php');
}?>