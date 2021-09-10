<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){

$titulo = $_POST['titulo'];
$quienessomos = $_POST['quienessomos'];
$estado = $_POST['estado'];
$video="";

$fecha=date("d-m-Y");

$target_dir = "../../assets/img/areas/";
$archivo ="";

$hora=date('h:i:s', time());


try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    if(isset($_FILES['imagen'])){
        $imagen= $_FILES['imagen'];
        $target_file = $target_dir . basename($imagen["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (file_exists($target_file)) {
            $uploadOk = 0;
            echo "El archivo ya existe.";
        }

        if ($imagen["size"] > 1000000) {
            $uploadOk = 0;
            echo "El archivo y tamaño.";
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $uploadOk = 0;
            echo "El archivo y formato.";
        }

        if ($uploadOk == 0) {
            echo "El archivo no se subio.";
        } else {
            if (move_uploaded_file($imagen["tmp_name"], $target_file)) {
                $archivo = "assets/img/areas/".basename($imagen["name"]);
            } else {
                echo "Hubo un error subiendo el archivo.";
            }
        }
        $sql = "INSERT INTO `areas` (`titulo`,`quienessomos`,`imagen`,`estado`) VALUES ('".$titulo."','".$quienessomos."','".$archivo."','".$estado."')";
        $pdo->exec($sql);
    }
    //else if(isset($_POST['video'])){
        //$video = $_POST['video'];
        //$videostr = htmlspecialchars($video);
        
        //$sql2 = "INSERT INTO `areas` (`titulo`,`quienessomos`,`imagen`,`estado`) VALUES ('".$titulo."','".$quienessomos."','".$videostr."','".$estado."')";
        //$pdo->exec($sql2);
    //}
    

    //$url = "<meta http-equiv='refresh' content='1;URL=listarhogar.php'><script language='javascript'>alert('Tip grabado')</script>";
    //echo html_entity_decode($target_file);
    $url = "<meta http-equiv='refresh' content='1;URL=listarareas.php'><script language='javascript'>alert('Área grabada')</script>";
    echo $url;
    
} catch(PDOException $e) {
   echo $e->getMessage();
}

$pdo = null;
}

?>