<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilol.css">

    <title>Bicentenario Glorioso</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="Bicentenario Glorioso">
    <meta property="og:url" content="https://bicentenarioglorioso.com">
    <meta property="og:image" content="https://bicentenarioglorioso.com/ppl.jpg">
    <meta property="og:description" content="¡PARTICIPA Y ENTRA AL SORTEO DE 28 CANASTAS BICENTENARIO GLORIOSO!">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 p-0">

                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <img src="escudo.png" alt="" class="escudo img-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#exampleModal">
                        Menú &#9776;
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 d-flex justify-content-end">
                            <li class="nav-item active">
                                <a class="nav-link" href="./">PARTICIPAR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="premios.html">PREMIOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="terminos-y-condiciones.html">TÉRMINOS Y CONDICIONES</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">PARTICIPAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="premios.html">PREMIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="terminos-y-condiciones.html">TÉRMINOS Y CONDICIONES</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex align-items-center">


            <div class="col-12 col-md-6 text-center mt-5 order-12 order-md-0">
                <img src="Titular.png" alt="" class="img-fluid">

                <div class="pasos">
                    <h4>Sigue estos pasos:</h4>
                    <p class="mb-0">1- Síguenos en nuestras redes sociales</p>
                    <p class="mb-0">Facebook: <a href=""><img src="fb.svg" alt=""> Gloria Perú</a></p>
                    <p>Instagram: <a href=""><img src="instagram.svg" alt=""> gloria_peru</a></p>
                    <p>2- Ingresa tus datos en el formulario</p>
                </div>

                <div class="container mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8 participa">
                            <form class="text-left registro" action="add-db.php" method="POST">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="nombre">Nombre:</label>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="apellido">Apellido:</label>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="correo">Correo:</label>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <input type="email" class="form-control" id="correo" name="correo" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="telefono">Número telefónico:</label>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                </div>

                                <div class="form-row text-center mt-3 pl-4 d-flex justify-content-center">

                                    <div>
                                        <input class="form-check-input" type="checkbox" id="gridCheck" name="tyc">
                                        <label class="form-check-label order-0" for="gridCheck">
                                            Acepto los <a href="terminos-y-condiciones.html" target="_blank"
                                                style="text-decoration: underline; cursor: pointer; color: #ffffff">
                                                términos y condiciones</a>
                                        </label>
                                    </div>
                                </div>
                                <label id="tyc-error" class="error" for="tyc"></label>
                                <div class="form-row mt-3">
                                    <div class="col-12">
                                        <input type="submit" value="Enviar">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 order-1 order-md-12" style="z-index: -550; position: relative;">
                <img src="lata.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Load Validation JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $('#registro').hide();

        $(document).ready(function () {

            $('#telefono').on('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            $(".registro").validate({
                rules: {
                    nombre: {
                        required: true
                    },
                    apellido: {
                        required: true
                    },
                    correo: {
                        required: true,
                        email: true
                    },
                    telefono: {
                        required: true
                    },
                    tyc: {
                        required: true,
                    }
                },
                messages: {
                    nombre: {
                        required: "Por favor ingresa tu nombre"
                    },
                    apellido: {
                        required: "Por favor ingresa tu apellido"
                    },
                    correo: {
                        required: "Ingresa un email",
                        email: "Ingresa un email valido"
                    },
                    telefono: {
                        required: "Por favor ingresa un número de contacto"
                    },
                    tyc: {
                        required: "Debes aceptar los términos y condiciones"
                    }
                }
            });

        });
    </script>


</body>

</html>