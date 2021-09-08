<?php

include_once('conexion.php');
include_once('usuarios.php');

$user = new Usuario;

$grasa = $user->grasa($_SESSION['doc']);
echo json_encode($grasa);

$imc = $user->imc($_SESSION['doc']);
echo json_encode($imc);

$peso = $user->peso($_SESSION['doc']);
echo json_encode($peso);

$cintura = $user->cintura($_SESSION['doc']);
echo json_encode($cintura);

$brazo = $user->brazo($_SESSION['doc']);
echo json_encode($brazo);

?>