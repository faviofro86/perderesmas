<?php
session_start();
include_once('../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
    
    
$grasa = $_POST['grasa'];
$imc = $_POST['imc'];
$peso = $_POST['peso'];
$cintura = $_POST['cintura'];
$brazo = $_POST['brazo'];
$estatura = $_POST['estatura'];
$complex = $_POST['complex'];
$fecha = $_POST['fecha'];
$dni = $_POST['dni'];


//$fecha=date("d-m-Y");

$hora=date('h:i:s', time());


try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "INSERT INTO `datos` (`dni`,`grasa`,`imc`,`peso`,`cintura`,`brazo`,`estatura`,`complexion`,`fecha`) VALUES ('".$dni."','".$grasa."','".$imc."','".$peso."','".$cintura."','".$brazo."','".$estatura."','".$complexion."','".$fecha."')";
    $pdo->exec($sql);
    
    $mensaje = "Valores registrados";

    $url = "<meta http-equiv='refresh' content='1;URL=paciente.php?dni=".$dni."'><script language='javascript'>alert('".$mensaje."')</script>";
    echo $url;
    
    
} catch(PDOException $e) {
    echo $e->getMessage();
    echo $chivo;
}

$pdo = null;
}

?>