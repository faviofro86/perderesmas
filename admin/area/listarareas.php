<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
include_once('../../includes/areas.php');

$area = new Areas;
$editar = $area->fetch_todas();
if(isset($_GET['id_area'])){
    $id_area=$_GET['id_area'];
    $select = $area->fetch_area($id_area);
    

}

?>
<!doctype html>
    <?php include_once('../head.php');?>
    <?php include_once('../nav.php');?>
                
                
                <div class="page-container no-right-sidebar">
                    <!-- <div class="container"> -->

                    <div class="custom-breadcrumb">
                        <h3>Listar Áreas</h3>
                        <div class="breadcrumb-inner">
                            <a href="#">Dashboard</a>
                            <span>Listar Áreas</span>
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
                                            <th scope="col">Área</th>
                                            <th scope="col">¿Quienes somos?</th>
                                            <th scope="col" class="text-center">Imagen</th>
                                            <th scope="col">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($editar as $unarea){ ?>
                                            <tr class="has-actions-hidden mix delivered">
                                                <td class="checkbox-col custom-checkbox">
                                                    <?php echo $unarea['id_area']; ?>
                                                </td>
                                                <td>
                                                    <div class="heading">
                                                    <?php echo $unarea['titulo']; ?>
                                                    </div>
                                                    <div class="actions-row">
                                                    <a class="edit" href="#" data-toggle="modal" data-target="#popupModal" id="">editar</a>
                                                    <a class="delete" href="eliminar.php?id_area=<?php echo $unarea['id_area']; ?>">eliminar</a>
                                                    <a class="delete" href="desactivar.php?id_area=<?php echo $unarea['id_area']; ?>&estado=<?php if($unarea['estado']=="0"){$estado="1";$btnestado="activar";}else{$estado="0";$btnestado="desactivar";} 
                                                                              echo $estado; ?>"><?php echo $btnestado; ?></a>
                                                    </div>
                                                </td>
                                                <td><?php $mostrar=substr($unarea['quienessomos'],0,80); ?>
                                                    <?php echo $mostrar."..."; ?></td>
                                                <td style="text-align:center;" class="text-center">
                                                    <figure class="img-fluid" style="width:50%;text-align: center;margin:auto;">
                                                    <img src="../../<?php echo $unarea['imagen']; ?>" alt="">
                                                    </figure>
                                                </td>
                                                <td><?php if($unarea['estado']=="1"){
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
                    <!-- Modal -->
                      <div class="modal product fade" id="popupModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>

                            <div class="modal-thumbnail">
                              <img src="../../<?php echo $unarea['imagen']; ?>" alt="">
                              <a href="javascript:void(0):" class="p-photo-upload"><i class="fas fa-camera"></i> Update Photo</a>
                            </div>

                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="product-title">Product Title:</label>
                                  <input type="text" class="form-control" id="product-title">
                                </div>
                                <div class="form-group">
                                  <label for="product-price">Price:</label>
                                  <input type="text" class="form-control" id="product-price">
                                </div>
                                <div class="form-group product-colors">
                                  <label for="product-color">Product Colors:</label>
                                  <select class="nice-select custom-select" id="product-color">
                                    <option selected>Red</option>
                                    <option value="1">Green</option>
                                    <option value="2">Blue</option>
                                    <option value="3">Gray</option>
                                  </select>
                                </div>
                                <div class="form-group product-stocks">
                                  <label for="product-stock">Product Stock:</label>
                                  <select class="nice-select custom-select" id="product-stock">
                                    <option selected>In stock</option>
                                    <option value="1">Out of stock</option>
                                  </select>
                                </div>
                                <button class="btn btn-filled btn-gradient" type="submit">Save Changes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal Box end -->
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

    <?php include_once('../footer.php');?>
   <?php }else{
    header('Location: ../index.php');
}?>