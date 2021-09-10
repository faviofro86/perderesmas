<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){

include_once('../../includes/guias.php');
include_once('../../includes/areas.php');

$area = new Areas;
$select = $area->fetch_areas();


?>
<!doctype html>
    <?php include_once('../head.php');?>
    <?php include_once('../nav.php');?>
                
                
                <div class="page-container no-right-sidebar">
                    <!-- <div class="container"> -->

                    <div class="custom-breadcrumb">
                        <h3>Agregar Área</h3>
                        <div class="breadcrumb-inner">
                            <a href="#">Dashboard</a>
                            <span>Agregar Área</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="settings-form" action="grabararea.php" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Titulo:</label>
                                            <input type="text" class="form-control" id="titulo" name="titulo">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="editor">¿Quienes somos?:</label>
                                            <div class="edicion">
                                                <textarea class="form-control" id="quienessomos" name="quienessomos" placeholder="Agregar la descripción aquí...">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="separator-bordered" style="margin: 70px 0;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="card">
                                
                                    <div class="mb-5 card-header">
                                        <label for="p-title">ID de guía</label>
                                        <input type="text" class="form-control" id="id" name="id" readonly>
                                    </div>
                                
                                
                                    <div class="statusBox">
                                        <div class="flex align-items-center justify-content-start">
                                            <p class="text-sm">Estado: </p>
                                            <select class="nice-select custom-select" name="estado">
                                                <option value="1">Activado</option>
                                                <option value="0">Desactivado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Subir la imagen aquí:</label>
                                        <input type="file" class="form-control" id="inputGroupFile04" name="imagen" hidden>
                                        <label class="" for="inputGroupFile04">
                                            <img src="../assets/images/products/b1.jpg" alt="">
                                            <span class="p-photo-upload">Seleccionar imagen</span>
                                        </label>
                                    </div>

                               
                                    <button type="submit" class="btn btn-filled w-100 mt-5">Grabar cambios</button>
                                </form>
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