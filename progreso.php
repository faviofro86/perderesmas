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
        .progreso {
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

        <section class="perderMas">
            <p class="white perderMasBienvenido">¡BIENVENIDO!</p>
            <h1 class="white perderMasTitulo">PERDER ES MÁS</h1>
            <!-- <a class="perderMasBtn white" href="#" target="_blank" rel="noopener noreferrer">VER MÁS</a> -->
        </section>

        <!-- 1 grafica  -->
        <section class="grasaCorporalContainer">
            <p class="tituloGrasaCorporal textCenter">% DE GRASA CORPORAL</p>
            <!-- <canvas id="myChartGrasaCorporal" style="width: 75vw; height: 60vh; margin: auto;"></canvas> -->
            <img class="personRunning" src="img/ilustracion_2.png" alt="personRunning">
        </section>

        <!-- 2 grafica  -->
        <section class="grasaCorporalContainer">
            <p class="tituloGrasaCorporal textCenter">IMC</p>
            <p class="subtituloCharts textCenter">Índice de masa corporal</p>

            <!-- <canvas id="myChartImc" style="width: 75vw; height: 60vh; margin: auto;"></canvas> -->
            <img class="personRunning" src="img/ilustracion_2.png" alt="personRunning">
        </section>

        <!-- 3 grafica  -->
        <section class="grasaCorporalContainer">
            <p class="tituloGrasaCorporal textCenter">PESO</p>

            <!-- <canvas id="myChartPeso" style="width: 75vw; height: 60vh; margin: auto;"></canvas> -->
            <img class="personRunning" src="img/ilustracion_2.png" alt="personRunning">
        </section>

        <!-- 4 grafica  -->
        <section class="grasaCorporalContainer">
            <p class="tituloGrasaCorporal textCenter">CIRCUNFERENCIA DE CINTURA</p>

            <!-- <canvas id="myChartCC" style="width: 75vw; height: 60vh; margin: auto;"></canvas> -->
            <img class="personRunning" src="img/ilustracion_2.png" alt="personRunning">
        </section>

        <!-- 5 grafica  -->
        <section class="grasaCorporalContainer">
            <p class="tituloGrasaCorporal textCenter">CIRCUNFERENCIA DE BRAZO</p>

            <!-- <canvas id="myChartCB" style="width: 75vw; height: 60vh; margin: auto;"></canvas> -->
            <img class="personRunning" src="img/ilustracion_2.png" alt="personRunning">
        </section>


        <section class="departamentoNutricion">
            <h3 class="white tituloDeparamento">DEPARTAMENTO DE NUTRICION</h3>
            <p class="white parrafoDuda">Si tienes alguna duda puedes comunicarte al correo:</p>
            <a class="correoNutricion" href="mailto:consultorionutricion@deprodeca.com.pe" target="_blank"
                rel="noopener noreferrer">consultorionutricion@deprodeca.com.pe</a>
        </section>

    </main>




    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"
        integrity="sha256-bC3LCZCwKeehY6T4fFi9VfOU0gztUa+S4cnkIhVPZ5E=" crossorigin="anonymous"></script>
    <script src="js/charts.js"></script>

</body>