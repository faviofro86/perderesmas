<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
include_once('../../includes/areas.php');
include_once('../../includes/guias.php');

$area = new Areas;
$guias = new Guias;
$editar = $area->fetch_areas();
$lista = $guias->listar(); 


?>
<!doctype html>
    <?php include_once('../head.php');?>
    <?php include_once('../nav.php');?>
                
                
                <div class="page-container no-right-sidebar">
                    <!-- <div class="container"> -->

                    <div class="custom-breadcrumb">
                        <h3>Listar Guías</h3>
                        <div class="breadcrumb-inner">
                            <a href="#">Dashboard</a>
                            <span>Listar Guías</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            
                            <div class="card products mixFilterable">
                                <div class="card-body table-responsive custom-datatable">
                                    <table class="table sorting-datatable display" id="example" style="width: 100%;">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Área</th>
                                            <th scope="col">Creación</th>
                                            <th scope="col">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($lista as $guia){ ?>
                                            <tr class="has-actions-hidden mix delivered">
                                                <td class="checkbox-col custom-checkbox">
                                                    <?php echo $guia['id_area']; ?>
                                                </td>
                                                <td>
                                                    <div class="heading">
                                                    <?php echo $guia['titulo']; ?>
                                                    </div>
                                                    <div class="actions-row">
                                                    <a class="edit" href="editarguia.php?id_guia=<?php echo $guia['id_guia']; ?>">edit</a>
                                                    <a class="delete" href="eliminar.php?id_guia=<?php echo $guia['id_guia']; ?>">delete</a>
                                                    <a class="delete" href="desactivar.php?id_guia=<?php echo $guia['id_guia']; ?>&estado=<?php if($guia['estado']=="0"){$estado="1";$btnestado="activar";}else{$estado="0";$btnestado="desactivar";} 
                                                                              echo $estado; ?>"><?php echo $btnestado; ?></a>
                                                    </div>
                                                    
                                                </td>
                                                <td>
                                                    <?php echo $guia['area']; ?>
                                                </td>
                                                <td><?php echo $guia['creacion']; ?></td>
                                                <td><?php if($guia['estado']=="1"){
                                                            echo "Activado";
                                                        } else{
                                                        echo "Desactivado";} ?></td>
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
            </main>
        </div>
    <?php include_once('../footer.php');?>
    <?php }else{
    header('Location: ../index.php');
}?>