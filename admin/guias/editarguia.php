<?php
include_once('../../includes/conexion.php');
include_once('../../includes/guias.php');
include_once('../../includes/areas.php');

$area = new Areas;
$guias = new Guias;

if(isset($_GET['id_guia'])){
    $id_guia=$_GET['id_guia'];
    $select = $area->fetch_areas();
    $editar = $guias->fetch_guia($id_guia);
    $categoria = $guias->categoriaxguia($id_guia);
}

?>
<!doctype html>
    <?php include_once('../head.php');?>
    <?php include_once('../nav.php');?>
                
                
                <div class="page-container no-right-sidebar">
                    <!-- <div class="container"> -->

                    <div class="custom-breadcrumb">
                        <h3>Editar Guía</h3>
                        <div class="breadcrumb-inner">
                            <a href="#">Dashboard</a>
                            <span>Editar Guía</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="settings-form" action="enviarguia.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Seleccionar Área:</label>
                                            <select class="nice-select custom-select" name="area">
                                                <option value="<?php echo $editar['id_area']; ?>" selected><?php echo $categoria['titulo']; ?></option>
                                                <?php foreach($select as $option){ ?>
                                                <option value="<?php echo $option['id_area']; ?>"><?php echo $option['titulo']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Titulo:</label>
                                            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $editar['titulo']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="editor">Descripción:</label>
                                            <div class="edicion">
                                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Agregar la descripción aquí...">
                                                    <?php echo $editar['descripcion']; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Requisitos:</label>
                                            <div class="edicion">
                                                <textarea class="form-control" id="requisitos" name="requisitos" rows="5"><?php echo $editar['requisitos']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Proceso:</label>
                                            <div class="edicion">
                                                <textarea class="form-control" id="proceso" name="proceso" rows="3"><?php echo $editar['proceso']; ?></textarea>
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
                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $id_guia; ?>" readonly>
                                    </div>
                                
                                
                                    <div class="statusBox">
                                        <div class="flex align-items-center justify-content-start">
                                            <p class="text-sm">Estado: </p>
                                            <select class="nice-select custom-select" name="estado">
                                                <?php if($editar['estado']=="1"){
                                                    $estado = "Activado";
                                                    $indexestado = "1";
                                                }else{
                                                    $estado = "Desactivado";
                                                    $indexestado = "0";
                                                } ?>
                                                <option value="<?php echo $indexestado; ?>"><?php echo $estado; ?></option>
                                                <option value="1">Activado</option>
                                                <option value="0">Desactivado</option>
                                            </select>
                                        </div>
                                        <div class="flex align-items-center justify-content-start">
                                            <p class="text-sm">Created: <a href="#"><?php echo $editar['creacion']; ?></a></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" onclick="var input = document.getElementById('inputGroupFile04'); var output = document.getElementById('video'); if(this.checked){ input.disabled = false; input.focus(); output.disabled = true;}else{input.disabled=true; output.disabled = false;}" />Activar para imagen<br>
                                            <label>Subir la imagen aquí:</label>
                                        <input type="file" class="form-control" id="inputGroupFile04" name="imagen" hidden disabled="disabled">
                                        <label class="" for="inputGroupFile04">
                                            <img src="../assets/images/products/b1.jpg" alt="">
                                            <span class="p-photo-upload">Seleccionar imagen</span>
                                        </label>
                                        <label>Poner la URL del vídeo aquí:</label>
                                        <input type="text" class="form-control" id="video" name="video" value="<?php echo addslashes($editar['multimedia']); ?>">
                                    </div>
                                
                                    
                                    <div class="form-group">
                                        <label>Costo:</label>
                                        <input type="text" class="form-control" id="costo" name="costo" value="<?php echo $editar['costo']; ?>">
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