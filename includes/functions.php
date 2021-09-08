<?php
session_start();
include_once('conexion.php');


if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['dni'])){
    $dni = $_POST['dni'];
    $ind = ((($dni + 1)*3)+3);
}



function logout(){
    session_destroy();
    header('Location: ../index.php');
    //echo "<meta http-equiv='refresh' content='1;URL=../index.php'>";
}


function recovery($a, $b, $c){
    $header = 'From: ' . 'noreply@perderesmas.pe' . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/html; charset=utf-8";
    
    
    $mensaje = "Este mensaje fue enviado por Perderesmas.pe";
    $mensaje .= "</br>";
    $mensaje .= "Haga clic en el enlace a continuación para restablecer su contraseña: ";
    $mensaje .= "</br>";
    $mensaje .= "https://perderesmas.pe/includes/functions.php?c=" . $c ;
    $mensaje .= "</br>";
    $mensaje .= "Enviado el " . date('d/m/Y', time());
    
    $asunto = "Recuperación de contraseña - Perderesmas.pe ";
    mail($a, $asunto, utf8_decode($mensaje), $header);
    
    global $pdo;
    $query = $pdo->prepare("UPDATE `registros` SET `recovery`= 1 WHERE `email`=? AND `dni` = ?");
    $query->bindValue(1, $a);
    $query->bindValue(2, $b);
    $query->execute();
    header('Location: ../recuperar.php?ok=1');
}

function restablecer($a, $b){
    global $pdo;
    $query = $pdo->prepare("UPDATE `registros` SET `recovery`= 0, `password`= ? WHERE `dni` = ? AND `recovery` = 1");
    $query->bindValue(1, $a);
    $query->bindValue(2, $b);
    $query->execute();
    header('Location: ../index.php');
}


if(isset($_GET['a'])){
    logout();
}


if(isset($_POST['email']) && isset($_POST['dni'])){
    recovery($email, $dni, $ind);
}


if(isset($_GET['c'])){
    $c = $_GET['c'];
    header('Location: ../newpass.php?c='.$c);
}


if(isset($_POST['newpass'])){
    $newpass = $_POST['newpass'];
    $ind2 = $_POST['ind2'];
    $dni2 = ((($ind2 - 3)/3)-1);
    restablecer($newpass, $dni2);
}


?>