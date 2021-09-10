<?php
session_start();
include_once('../../includes/conexion.php');
if(isset($_SESSION['logged_in'])){

$area = $_POST['area'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$requisitos = $_POST['requisitos'];
$proceso = $_POST['proceso'];
$estado = $_POST['estado'];
$costo = $_POST['costo'];
$video="";


$fecha=date("d-m-Y");
if (!file_exists("../uploads/img".$fecha)) {
    mkdir("../uploads/img".$fecha, 0777, true);
}
$target_dir = "../uploads/img".$fecha."/";
$archivo = "";


$hora=date('h:i:s', time());


try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    if(isset($_FILES['imagen'])){
        $imagen= $_FILES['imagen'];
        $target_file = $target_dir . basename($imagen['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (file_exists($target_file)) {
            $uploadOk = 0;
            echo "El archivo ya existe.";
        }

        if ($imagen["size"] > 500000) {
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
                $archivo = '<img class="img-fluid" src="admin/uploads/img'.$fecha.'/'.basename($imagen['name']).'">' ;
                $chivo = htmlspecialchars($archivo);
            } else {
                echo "Hubo un error subiendo el archivo.";
            }
        }
        $sql = "INSERT INTO `guias` (`id_area`,`titulo`,`descripcion`,`requisitos`,`proceso`,`costo`,`estado`,`creacion`,`multimedia`) VALUES ('".$area."','".$titulo."','".$descripcion."','".$requisitos."','".$proceso."','".$costo."','".$estado."',now(),'".$chivo."')";
        $pdo->exec($sql);
    }
    else if(isset($_POST['video'])){
        $video = $_POST['video'];
        $videostr = htmlspecialchars($video);
        
        $sql2 = "INSERT INTO `guias` (`id_area`,`titulo`,`descripcion`,`requisitos`,`proceso`,`costo`,`multimedia`,`estado`,`creacion`) VALUES ('".$area."','".$titulo."','".$descripcion."','".$requisitos."','".$proceso."','".$costo."','".$videostr."','".$estado."',now())";
        $pdo->exec($sql2);
    }
    

    //$url = "<meta http-equiv='refresh' content='1;URL=listarhogar.php'><script language='javascript'>alert('Tip grabado')</script>";
    //echo html_entity_decode($archivo);
    $url = "<meta http-equiv='refresh' content='1;URL=listar.php'><script language='javascript'>alert('".$mensaje."')</script>";
    echo $url;
    
    
} catch(PDOException $e) {
   echo $e->getMessage();
    echo $chivo;
}

$pdo = null;
}

?>