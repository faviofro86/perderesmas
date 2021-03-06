<?php
include_once('includes/nutri.php');
$nutri = new Nutricionista;
$doc = $_SESSION['doc'];
$contacto = $nutri->datos($doc);
$wasap="https://api.whatsapp.com/send/?phone=51".$contacto['telefono'];
$email="mailto:".$contacto['email'];
?>
        
        <div id="menuMobile" class="d-flex align-items-center menuMobile">
            <img id="menuBtnCerrar" class="menuBtnCerrar" src="https://pipartners.cl/wp-content/uploads/2021/07/boton-cerrar.png" alt="cerrar">
            <nav class="headerNav">
                <ul class="menu d-flex align-items-center">
                    <li class="menu__li"><a class="menu__a inicio" href="home.php" rel="noopener noreferrer">Inicio</a></li>
                    <li class="menu__li bordesLaterales"><a class="menu__a progreso" href="progreso.php" rel="noopener noreferrer">Progreso</a></li>
                    <li class="menu__li"><a class="menu__a premios" href="premios.php" rel="noopener noreferrer">Premios</a></li>
                    <li class="menu__li bordesLaterales"><a class="menu__a menuTycColor" href="terminos_y_condiciones.php" rel="noopener noreferrer">T y C</a></li>
                    <li class="menu__li perfil"><a class="menu__a" href="perfil.php" rel="noopener noreferrer">Perfil</a></li>
                    <li class="menu__li"><a class="menu__a" href="includes/functions.php?a=a" rel="noopener noreferrer">Salir</a></li>
                </ul>
            </nav>
            <div class="socialMedia d-flex align-items-center">
                <a href="<?php echo $wasap; ?>">
                    <img class="menuWhatsapp" src="img/whatsapp.png" alt="whatsaapp">
                </a>
                <a href="<?php echo $email; ?>">
                    <img class="menuMensaje" src="img/mensaje.png" alt="msj">
                </a>
                <img class="logoGloria" src="img/logoGloria.png" alt="logo">
            </div>
        </div>