<?php
session_start();
include_once('includes/conexion.php');
if(isset($_SESSION['logged_in'])){
    $_SESSION['doc'] = $datos['dni'];

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <style>
        .inicio {
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
        <div id="menuMobile" class="d-flex align-items-center menuMobile">
            <img id="menuBtnCerrar" class="menuBtnCerrar" src="https://pipartners.cl/wp-content/uploads/2021/07/boton-cerrar.png" alt="cerrar">
            <nav class="headerNav">
                <ul class="menu d-flex align-items-center ">
                    <li class="menu__li"><a class="menu__a inicio" href="home.php" rel="noopener noreferrer">Inicio</a>
                    </li>
                    <li class="menu__li bordesLaterales"><a class="menu__a progreso" href="progreso.html" rel="noopener noreferrer">Progreso</a>
                    </li>
                    <li class="menu__li"><a class="menu__a premios" href="premios.html" rel="noopener noreferrer">Premios</a>
                    </li>
                    <li class="menu__li bordesLaterales"><a class="menu__a menuTycColor" href="terminos_y_condiciones.html" rel="noopener noreferrer">T y C</a></li>
                    <li class="menu__li perfil"><a class="menu__a" href="perfil.php" rel="noopener noreferrer">Perfil</a></li>
                    <li class="menu__li"><a class="menu__a" href="logout.php" rel="noopener noreferrer">Salir</a></li>
                </ul>
            </nav>
            <div class="socialMedia d-flex align-items-center">
                <a href="">
                    <img class="menuWhatsapp" src="img/whatsapp.png" alt="whatsaapp">
                </a>
                <a href="">
                    <img class="menuMensaje" src="img/mensaje.png" alt="msj">
                </a>
                <img class="logoGloria" src="img/logoGloria.png" alt="logo">
            </div>
        </div>
    </header>
    <main role="main">
        <section class="nuevoReto">
            <h2 class="white nuevoRetoTitutlo">¡BIENVENIDO A TU NUEVO RETO!</h2>
        </section>

        <section class="articulos">
            <div class="articuloDestacado">
                <h3 class="tituloArticulo">¿Cómo tomarte las medidas solicitadas por el nutricionista?</h3>
                <a class="btnArticulo white" href="#" target="_blank" rel="noopener noreferrer">Ver más</a>
            </div>
            <div class="articulosSecundarios">
                <div class="articulo_1">
                    <h3 class="tituloArticulo">Perder es más</h3>
                    <a class="btnArticulo white" href="#" target="_blank" rel="noopener noreferrer">Ver más</a>
                </div>
                <div class="articulo_2">
                    <h3 class="tituloArticulo">Tips para llevar una vida sana</h3>
                    <a class="btnArticulo white" href="https://labuenanutricion.com/blog/que-es-la-alimentacion-saludable-beneficia-la-salud/" target="_blank" rel="noopener noreferrer">Ver más</a>
                </div>
            </div>
        </section>

        <section class="departamentoNutricion">
            <h3 class="white tituloDeparamento">DEPARTAMENTO DE NUTRICION</h3>
            <p class="white parrafoDuda">Si tienes alguna duda puedes comunicarte al correo:</p>
            <a class="correoNutricion" href="mailto:consultorionutricion@deprodeca.com.pe" target="_blank" rel="noopener noreferrer">consultorionutricion@deprodeca.com.pe</a>
        </section>
    </main>

    <script src="js/scripts.js"></script>
</body>
<?php }else{
    header('Location: index.php');
}?>