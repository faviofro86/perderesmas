
            <header class="header sticky-header">
                <div class="container-fluid">

                    <div class="d-flex align-items-center">
                        <a href="listar.php" class="logo">
                            <img src="assets/images/logoGloria.png" alt="Gloria" />
                        </a>
                        <button class="menu-toggler arrow">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <!-- <a href="#" class="menu-toggler">
                        <i class="ti-menu"></i>
                        </a> -->
                        <div class="header-search d-none d-md-block">
                            <form action="#" class="search-form">
                                <input type="search" name="search" placeholder="Buscar aquí...">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>

                        <ul class="navbar-nav utility-nav ml-auto">
                            <li class="nav-item expand-screen">
                                <a href="javascript:void(0);">
                                    <i class="fas fa-expand"></i>
                                </a>
                            </li>                            
                            <li class="nav-item nav-profile">
                                <a class="user-profile" href="#" role="button" id="profiletab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <figure class="avatar-circle-sm">
                                        <img src="assets/images/avatar.jpg" alt="">
                                        <span class="presence-indicator online"></span>
                                    </figure>
                                    <strong class="user-name"><?php echo $_SESSION['nombres']; ?> <i class="fas fa-angle-down"></i></strong>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="profiletab">
                                    <a href="#">
                                        <i class="far fa-user"></i>
                                        <div class="text">
                                            <p>Perfil</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <i class="far fa-edit"></i>
                                        <div class="text">
                                            <p>Contraseña</p>
                                        </div>
                                    </a>
                                    <a href="../logout.php">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <div class="text">
                                            <p>Cerrar sesión</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </header>
            <!-- Header strat -->
            <main class="main-container">
                <!-- INICIO DEL NAV -->
                <nav class="sidebar sidebar-main">
                    <ul class="accordion" id="accordion">
                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Usuarios</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="listar.php">Listar</a></li>
                                <li><a href="agregar.php">Agregar datos</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>