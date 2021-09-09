<?php
//header('Content-Type: application/json; charset=utf-8');

include_once('usuario.php');
$dni=$_GET['dni'];

$user = new Usuario;

$peso = $user->peso($dni);
echo json_encode($peso);

?>