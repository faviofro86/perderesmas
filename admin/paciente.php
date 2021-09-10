<?php
session_start();
include_once('../includes/conexion.php');
if (isset($_SESSION['logged_in'])) {
    include_once('../includes/usuario.php');

    $user = new Usuario;
    $conex = new Conexion;
    $id = $_SESSION['id'];
    $lista = $user->fetch_todos($id);

?>
    <!doctype html>
    <?php include_once('head.php'); ?>
    <?php include_once('nav.php'); ?>


    <div class="page-container no-right-sidebar">
        <!-- <div class="container"> -->

        <div class="custom-breadcrumb">
            <h3>{Nombre y apellidos}</h3>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card mixFilterable">
                    <div class="card-body table-responsive custom-datatable">
                        <table class="table sorting-datatable display" id="example" style="width: 100%;">
                            <!-- <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Apellidos</th>
                                            </tr>
                                        </thead> -->
                            <tbody>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>DNI: {dni}</p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>CORREO: {correo}</p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>EDAD: {edad}</p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>ESTATURA: {estatura}</p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>COMPLEXION: {complexion}</p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        PESO: <input type="text" name="peso">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- </div> -->
    </div>
    <script>
        $(document).ready(function() {
            var lolz = $('#lolz');
            var kk = $('#kk');
            kk.click(function() {
                alert(lolz.val());
            });
        });
    </script>
    </main>
    </div>

    <?php include_once('footer.php'); ?>
<?php } else {
    header('Location: index.php');
} ?>