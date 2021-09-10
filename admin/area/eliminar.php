<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
    include_once('../../includes/areas.php');

    $area = new Areas;
    if(isset($_GET['id_area'])){
        $id_area = $_GET['id_area'];
        $area->eliminararea($id_area);
        $url = "<meta http-equiv='refresh' content='1;URL=listarareas.php'><script language='javascript'>alert('Área eliminada')</script>";
        echo $url;
    }
}
?>