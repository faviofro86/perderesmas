<?php

include_once('conexion.php');
include_once('usuarios.php');
$dni=$_GET['dni'];

$user = new Usuario;

$grasa = $user->grasa($dni);
echo json_encode($grasa);

?>