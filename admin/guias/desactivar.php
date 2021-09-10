<?php
include_once('../../includes/conexion.php');
include_once('../../includes/guias.php');

$guia = new Guias;
if(isset($_GET['id_guia'])){
    $id_guia = $_GET['id_guia'];
    $estado = $_GET['estado'];
    if($estado=="1"){
        $mensaje = "Guia activada";
    }else{$mensaje ="Guia desactivada";}
    $guia->desactivar($estado, $id_guia);
    $url = "<meta http-equiv='refresh' content='1;URL=listar.php'><script language='javascript'>alert('".$mensaje."')</script>";
    echo $url;
}
?>