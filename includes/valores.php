<?php

include_once('conexion.php');
include_once('usuario.php');
$dni=$_GET['dni'];

$user = new Usuario;

$grasa = $user->grasa($dni);
echo json_encode($grasa);

$imc = $user->imc($dni);
echo json_encode($imc);

$peso = $user->peso($dni);
echo json_encode($peso);

$cintura = $user->cintura($dni);
echo json_encode($cintura);

$brazo = $user->brazo($dni);
echo json_encode($brazo);

?>