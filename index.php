<?php
session_start();

include_once('includes/conexion.php');
if (isset($_SESSION['logged_in'])) {
    header('Location: home.php');
} else {
    if (isset($_POST['usuario'], $_POST['password'])) {
        $usuario = $_POST['usuario'];
        $password = md5($_POST['password']);
        if (empty($usuario) or empty($password)) {
            $error = "Ambos valores son requeridos";
        } else {
            $query = $pdo->prepare("SELECT * FROM registros WHERE email = ? AND password = ?");
            $query->bindValue(1, $usuario);
            $query->bindValue(2, $password);
            $query->execute();
            $datos = $query->fetch();
            $num = $query->rowCount();
            if ($num == 1) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $datos['nombres'];
                $_SESSION['doc'] = $datos['dni'];
                header('Location: home.php');
                exit();
            } else {
                $error = "Valores incorrectos";
            }
        }
    }
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
        <meta property="og:image" content="http://perderesmas.pe/ppl.jpg">

        <title>Gloria - Perder es más</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/login.css">

    </head>


    <body>
        <header class="headerLogin d-flex align-items-center justify-content-between">
            <img class="headerLogin__departamento" src="img/departamentoNutricion.png" alt="departamento nutricion">
            <img class="headerLogin__logoGloria" src="img/logoGloria.png" alt="logo gloria">
        </header>
        <main role="main">
            <section class="login">
                <div class="containerLogin">
                    <p class="white textCenter">Iniciar Sesión</p>
                    <!-- <p class="white textCenter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi nulla,
                        feugiat id
                        tristique sit
                        amet, faucibus vel orci. Nam aliquam eros ac urna suscipit efficitur ac id dui. Nulla dictum, tortor
                        ac dapibus luctus, tellus arcu tristique ex,
                    </p> -->
                    <!--Comentario de prueba-->
                    <img class="logoLoginForm" src="img/logoperderEsMasWhite.png" alt="logo">
                    <form class="formLogin" action="index.php" method="post">
                        <label class="w-100" for="email">
                            <input type="email" name="usuario" placeholder="E-mail">
                        </label>
                        <label class="w-100" for="password">
                            <input type="password" name="password" placeholder="contraseña">
                        </label>
                        <div><small class="alertaLogin"></small>
                            <?php if (isset($error)) { ?>
                                <small class="alertaLogin"><?php echo $error; ?></small>
                            <?php } ?>
                        </div>

                        <div class="recuerdameContainer d-flex align-items-center justify-content-between">
                            <label for="recordarme" class="recuerdame d-flex align-items-center">
                                <input type="checkbox" name="recordarme">Recordarme
                            </label>

                            <a class="loginMiembro" href="#" rel="noopener noreferrer"> ¿Olvidaste tu contraseña? </a> 
                        </div>

                        <input class="btnLogin white" type="submit" value="INICIO">
                    </form>
                </div>
            </section>

            <section class="artesBottom d-flex align-items-center justify-content-between">
                <img class="ilustracionLeft" src="img/ilustracion_2.png" alt="imagen">
                <img class="ilustracionRight" src="img/ilustracion_1.png" alt="imagen">
            </section>
        </main>
    </body>

    </html>
<?php
}
?>