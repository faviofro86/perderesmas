<?php
session_start();
include_once('../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
include_once('../includes/usuario.php');

$user = new Usuario;
$conex = new Conexion;
$id = $_SESSION['id'];
$lista = $user->fetch_todos($id);

?>
<!doctype html>
    <?php include_once('head.php');?>
    <?php include_once('nav.php');?>
                
                
                <div class="page-container no-right-sidebar">
                    <!-- <div class="container"> -->

                    <div class="custom-breadcrumb">
                        <h3>Listar Usuarios</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            
                            <div class="card products mixFilterable">
                                <div class="card-body table-responsive custom-datatable">
                                    <table class="table sorting-datatable display" id="example" style="width: 100%;">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($lista as $uno){ ?>
                                            <tr class="has-actions-hidden mix delivered">
                                                <td class="checkbox-col custom-checkbox">
                                                    <?php echo $uno['id']; ?>
                                                </td>
                                                <td>
                                                    <div class="heading">
                                                    <?php echo $uno['dni']; ?>
                                                    </div>
                                                    <div class="actions-row">
                                                        <a class="edit" href="#" id="">Editar</a>
                                                    </div>
                                                </td>
                                                <td><?php echo $uno['nombres']; ?></td>
                                                <td><?php $apellidos = $uno['appaterno'].' '.$uno['apmaterno']; echo $apellidos; ?></td>
                                            </tr>
                                            <?php } ?>
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

    <?php include_once('footer.php');?>
   <?php }else{
    header('Location: index.php');
}?>