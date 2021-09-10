<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
    include_once('../../includes/guias.php');

    $guia = new Guias;
    if(isset($_GET['id_guia'])){
        $id_guia = $_GET['id_guia'];
        $guia->eliminarguia($id_guia);
        $url = "<meta http-equiv='refresh' content='1;URL=listar.php'><script language='javascript'>alert('Guia eliminada')</script>";
        echo $url;
    }
}
?>