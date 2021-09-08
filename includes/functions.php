<?php
session_start();
include_once('conexion.php');
$email = $_POST['email'];
$dni = $_POST['dni'];
$ind = md5($_POST['dni']);

if(isset($_GET['a'])){
    logout();
}

public function logout(){
    session_destroy();
    header('Location: ../index.php');//echo "<meta http-equiv='refresh' content='1;URL=../index.php'>";
}





if(isset($_GET['b'])){
    $header = 'From: ' . 'noreply@somosucv.edu.pe' . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/html; charset=utf-8";
    
    
    $mensaje = "Este mensaje fue enviado por Perderesmas.pe";
    $mensaje .= " \r\n\r\n";
    $mensaje .= "Haga clic en el enlace a continuación para restablecer su contraseña: ";
    $mensaje .= "https://perderesmas.pe/functions.php?c=" . $ind ;
    $mensaje .= " \r\n\r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());
    
    $asunto = "Suscripcion desde SOMOSUCV - " 
    $para = "hmayta@ucv.edu.pe";
    mail($para, $asunto, utf8_decode($mensaje), $header);
    
    global $pdo;
    $query = $pdo->prepare("UPDATE `registros` SET `recovery`= 1 WHERE `email`=? AND `dni` = ?");
    $query->bindValue(1, $email);
    $query->bindValue(2, $dni);
    $query->execute();
    
}

if(isset($_GET['c'])){
    
}

?>