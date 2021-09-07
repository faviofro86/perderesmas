    <?php

        include("conexion.php");

        $nombre     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
        $apellido	= mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES))); 
        $correo	    = mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES))); 
        $telefono	= mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));

        $date = new DateTime("now", new DateTimeZone('America/Lima') );
        
        $fecha = $date->format('Y-m-d H:i:s');

        $insert = mysqli_query($con, "INSERT INTO participantes (nombre, apellido, correo, telefono, fecha) 
                                                    VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$fecha')") or die ("Problemas al insertar ".mysqli_error($con));
        if($insert){
            $_SESSION['participantes'] = 1;
            
            header('Location: ./?reg=1');
        }else{
            $_SESSION['participantes'] = 0;
            
            header('Location: ./?reg=0');
        }
    ?>