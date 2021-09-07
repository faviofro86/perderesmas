<?php

$dni=        $_POST['dni'];
$appaterno=  $_POST['appaterno'];
$apmaterno=  $_POST['apmaterno'];
$nombres=    $_POST['nombres'];
$edad=       $_POST['edad'];
$telefono=   $_POST['telefono'];
$email=      $_POST['email'];
$area=       $_POST['area'];
$cargo=      $_POST['cargo'];
$empresa=    $_POST['empresa'];
$pass=       md5($_POST['pass']);
$tyc=        $_POST['tyc'];
$hora=date('h:i:s', time());


$servername = "localhost";
$username = "perderesmas_perderesmas";
$password = "*d3vu3lt4c0nz00m";
$dbname = "perderesmas_gloria";

try{

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `registros` (`dni`,`appaterno`,`apmaterno`,`nombres`,`edad`,`telefono`,`area`,`cargo`,`empresa`,`email`,`password`,`fecha`,`hora`,`condiciones`) VALUES ('".$dni."','".$appaterno."','".$apmaterno."','".$nombres."','".$edad."','".$telefono."','".$area."','".$cargo."','".$empresa."','".$email."','".$pass."',now(),'".$hora."','".$tyc."')";
    
    $conn->exec($sql);

    $url = "<meta http-equiv='refresh' content='1;URL=https://perderesmas.pe/gracias.html?".$dni."'>";
    echo $url;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>