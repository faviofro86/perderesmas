<?php
include_once('../../includes/conexion.php');
include_once('../../includes/areas.php');

$area = new Areas;
if(isset($_GET['id_area'])){
    $id_area = $_GET['id_area'];
    $estado = $_GET['estado'];
    if($estado=="1"){
        $mensaje = "Área activada";
    }else{$mensaje ="Área desactivada";}
    $area->desactivar($estado, $id_area);
    $url = "<meta http-equiv='refresh' content='1;URL=listarareas.php'><script language='javascript'>alert('".$mensaje."')</script>";
    echo $url;
}
?>