<?php
session_start();
include_once('../includes/conexion.php');
if (isset($_SESSION['logged_in'])) {
    include_once('../includes/usuario.php');

    $user = new Usuario;
    $conex = new Conexion;
    $id = $_GET['dni'];
    $data = $user->datos($id);

?>
    <!doctype html>
    <?php include_once('head.php'); ?>
    <?php include_once('nav.php'); ?>


    <div class="page-container no-right-sidebar">
        <!-- <div class="container"> -->

        <div class="custom-breadcrumb">
            <h3><?php echo $data['nombres'] . ' ' . $data['appaterno'] . ' ' . $data['apmaterno'];?></h3>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card mixFilterable">
                    <div class="card-body table-responsive custom-datatable">
                        <div class="col-lg-9 col-md-8">
                                <div class="card-body">
                                    <form class="settings-form" action="grabar.php" method="post">
                                        <div class="form-group">
                                            <label>Grasa:</label>
                                            <input type="text" class="form-control" name="grasa">
                                        </div>
                                        <div class="form-group">
                                            <label>IMC:</label>
                                            <input type="text" class="form-control" name="imc">
                                        </div>
                                        <div class="form-group">
                                            <label>Peso:</label>
                                            <input type="text" class="form-control" name="peso">
                                        </div>
                                        <div class="form-group">
                                            <label>Cintura:</label>
                                            <input type="text" class="form-control" name="cintura">
                                        </div>
                                        <div class="form-group">
                                            <label>Brazo:</label>
                                            <input type="text" class="form-control" name="brazo">
                                        </div>
                                        <div class="form-group">
                                            <label>Estatura:</label>
                                            <input type="text" class="form-control" name="estatura">
                                        </div>
                                        <div class="form-group">
                                            <label>Complexión:</label>
                                            <input type="text" class="form-control" name="complex">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha:</label>
                                            <input type="date" name="fecha" value="2021-09-01" min="2021-08-01" max="2021-12-31">
                                        </div>
                                        <input type="hidden" name="dni" value="<?php echo $id;?>">
                                        <button type="submit" class="btn btn-primary btn-lg mt-4">Registrar</button>
                                    </form>
                                </div>
                        </div>
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