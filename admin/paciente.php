<?php
session_start();
include_once('../includes/conexion.php');
if (isset($_SESSION['logged_in'])) {
    include_once('../includes/usuario.php');

    $user = new Usuario;
    $conex = new Conexion;
    $id = $_GET['dni'];
    $data = $user->datos($id);
    $valores = $user->valoresd($id);

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
                        <table class="table sorting-datatable display" id="example" style="width: 100%;">
                            <tbody>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>DNI: <?php echo $data['dni']; ?></p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>CORREO: <?php echo $data['email']; ?></p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>EDAD: <?php echo $data['edad']; ?></p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>ÁREA: <?php echo $data['area']; ?></p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>CARGO: <?php echo $data['cargo']; ?></p>
                                    </td>
                                </tr>
                                <tr class="has-actions-hidden mix delivered">
                                    <td>
                                        <p>EMPRESA: <?php echo $data['empresa']; ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body table-responsive custom-datatable">
                        <table class="table sorting-datatable display" id="example" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Grasa</th>
                                    <th scope="col">IMC</th>
                                    <th scope="col">Peso</th>
                                    <th scope="col">Cintura</th>
                                    <th scope="col">Brazo</th>
                                    <th scope="col">Estatura</th>
                                    <th scope="col">Complexión</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($valores as $valor){ ?>
                                <tr class="has-actions-hidden mix delivered">
                                    <td class="checkbox-col custom-checkbox">
                                        <?php echo $valor['id']; ?>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['grasa']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['imc']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['peso']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['cintura']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['brazo']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['estatura']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['complexion']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <?php echo $valor['fecha']; ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div>
                            <a class="btn btn-primary" href="registrar.php?dni=<?php echo $data['dni']; ?>">Registrar</a>
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