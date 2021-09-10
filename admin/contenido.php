<div class="container-fluid">
            <div class="container">
                <h1>Editar Guía</h1>
                <form method="post" action="edicionbienestar.php" enctype="multipart/form-data">
                    <h4>Datos para la guía</h4>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="id" name="id_tip" value="<?php echo $id_guia; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label>Seleccionar Área:</label>
                        <select class="form-select" aria-label="Default select example" name="categoria">
                            <option value="<?php echo $editar['id_area']; ?>" selected><?php echo $categoria['titulo']; ?></option>
                            <?php foreach($select as $option){ ?>
                            <option value="<?php echo $option['id_area']; ?>"><?php echo $option['titulo']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $editar['titulo']; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Descripción:</label>
                        <textarea class="form-control" id="subtitulo" name="subtitulo" rows="3"><?php echo $editar['descripcion']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Requisitos:</label>
                        <textarea class="form-control" id="parrafo" name="parrafo" rows="3"><?php echo $editar['requisitos']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Proceso:</label>
                        <textarea class="form-control" id="frasefinal" name="frasefinal" rows="3"><?php echo $editar['proceso']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Costo:</label>
                        <input type="text" class="form-control" id="frasefinal" name="frasefinal" value="<?php echo $editar['costo']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <input type="checkbox" onclick="var input = document.getElementById('file2'); var output = document.getElementById('video'); if(this.checked){ input.disabled = false; input.focus(); output.disabled = true;}else{input.disabled=true; output.disabled = false;}" />Activar para imagen<br>
                        <label>Subir la imagen aquí:</label>
                        <input class="form-control" type="file" id="file2" name="imgtip" disabled="disabled"/>
                        <br>
                        <label>Poner la URL del vídeo aquí:</label>
                        <input type="text" class="form-control" id="video" name="video" value="<?php echo $editar['multimedia']; ?>">

                    </div>
                    <div class="mb-3">
                        <label>Estado de la guía:</label>
                        <select class="form-select">
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
                    <br>
                    <button type="submit" class="btn btn-success btn-animate">Grabar</button>
                </form>
            </div>
        </div>