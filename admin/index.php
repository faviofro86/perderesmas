<?php 
session_start();

include_once('../includes/conexion.php');
if(isset($_SESSION['logged_in'])){
    header('Location: listar.php');    
}else{
    if(isset($_POST['email'], $_POST['password'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if(empty($email) or empty($password)){
            $error = "Ambos valores son requeridos";
        }else{
            $query = $pdo->prepare("SELECT * FROM nutricionista WHERE email = ? AND password = ?");
            $query->bindValue(1, $email);
            $query->bindValue(2, $password);
            $query->execute();
            $datos = $query->fetch();
            $num = $query->rowCount();
            if($num ==1){
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $datos['nombres'];
                $_SESSION['id'] = $datos['id'];
                header('Location: listar.php');
                exit();
            }else{
                $error="Valores incorrectos";
            }
        }
    }
    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Gloria - Perder es más</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container my-5">


            <div class="row">
                <div class="col-6 text-center">
                    <img src="../img/logoGloria.png" alt="" class="img-fluid" style="max-height: 70px">
                </div>
                <div class="col-6 text-center">
                    <img src="../img/logoCompleto.png" alt="" class="img-fluid" style="max-height: 70px">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 mt-5 offset-lg-3 p-4 border bg-light shadow">
                    <?php if(isset($error)){?>
                    <small><?php echo $error; ?></small>
                    <?php } ?>
                    <form action="index.php" method="post" autocomplete="off">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->
</body>

</html>
<?php
}
?>
