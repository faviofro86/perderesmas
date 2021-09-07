<?php
  include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    
    <style>
        .buscar {
            display: flex;
            justify-content: space-between;
        }

    </style>

</head>

<body id="page-top">
    
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="logout.php">
                <div class="sidebar-brand-text mx-3">Salir</div>
            </a>
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="pt-3">

                <?php

                    $sql = mysqli_query($conn, "SELECT * FROM registros");

                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>dni</th>
                                        <th>apellidoPaterno</th>
                                        <th>apellidoMaterno</th>
                                        <th>nombres</th>
                                        <th>edad</th>
                                        <th>telfono</th>
                                        <th>areaDetrabajo</th>
                                        <th>cargo</th>
                                        <th>empresa</th>
                                        <th>email</th>
                                        <th>fecha</th>
                                        <th>hora</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>dni</th>
                                        <th>apellidoPaterno</th>
                                        <th>apellidoMaterno</th>
                                        <th>nombres</th>
                                        <th>edad</th>
                                        <th>telfono</th>
                                        <th>areaDetrabajo</th>
                                        <th>cargo</th>
                                        <th>empresa</th>
                                        <th>email</th>
                                        <th>fecha</th>
                                        <th>hora</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                       <?php
                                        while($row = mysqli_fetch_assoc($sql)){
                                        
                                        echo '
                                            <tr>
                                                <td>'.$row["dni"].'</td>
                                                <td>'.$row["appaterno"].'</td>
                                                <td>'.$row["apmaterno"].'</td>
                                                <td>'.$row["nombres"].'</td>
                                                <td>'.$row["edad"].'</td>
                                                <td>'.$row["telefono"].'</td>
                                                <td>'.$row["area"].'</td>
                                                <td>'.$row["cargo"].'</td>
                                                <td>'.$row["empresa"].'</td>
                                                <td>'.$row["email"].'</td>
                                                <td>'.$row["fecha"].'</td>
                                                <td>'.$row["hora"].'</td>
                                                
                                            </tr>
                                        ';
                                        }
                                        
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>
