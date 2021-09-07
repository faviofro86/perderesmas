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
        <img id="menuBtn" class="menuBtnHamburguer" src="https://pipartners.cl/wp-content/uploads/2021/07/menuH.png"
            alt="menu">
        <div id="menuMobile" class="d-flex align-items-center menuMobile">
            <img id="menuBtnCerrar" class="menuBtnCerrar"
                src="https://pipartners.cl/wp-content/uploads/2021/07/boton-cerrar.png" alt="cerrar">
            <nav class="headerNav">
                <ul class="menu d-flex align-items-center ">
                    <li class="menu__li"><a class="menu__a inicio" href="home.php" rel="noopener noreferrer">Inicio</a>
                    </li>
                    <li class="menu__li bordesLaterales"><a class="menu__a progreso" href="progreso.html"
                            rel="noopener noreferrer">Progreso</a>
                    </li>
                    <li class="menu__li"><a class="menu__a premios" href="premios.html"
                            rel="noopener noreferrer">Premios</a>
                    </li>
                    <li class="menu__li bordesLaterales"><a class="menu__a menuTycColor"
                            href="terminos_y_condiciones.html" rel="noopener noreferrer">T y C</a></li>
                    <li class="menu__li perfil"><a class="menu__a" href="perfil.php" target="_blank"
                            rel="noopener noreferrer">Perfil</a></li>
                    <li class="menu__li"><a class="menu__a" href="logout.php" target="_blank" rel="noopener noreferrer">Salir</a>
                    </li>
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
        <section class="perfilContainer textCenter">
            <p class="perfil__saludo">Hola, {Nombres y apellidos}</p>

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