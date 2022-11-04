<!DOCTYPE html>

<html lang="es">

    <!-- Comentario -->   
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventario</title>
        
        <!-- Styles -->   
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />
        
        <!-- Icons -->   
        <script src="https://kit.fontawesome.com/4afb0f7fd4.js" crossorigin="anonymous"></script>
        
        <!-- Scripts -->   
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="../../Inventario_Ferreteria/views/assets/plugins/jquery/jquery.min.js"></script>
        <script src="../../Inventario_Ferreteria/views/assets/plugins/sweetalert.min.js"></script>
    </head>

    <body class="sb-nav-fixed">

        <!-- Barra de Navegacion Superior -->   
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <span class="navbar-brand ps-4"> Inventario </span> 
        </nav>

        <div id="layoutSidenav">

            <!-- Barra de Navegacion Lateral -->   
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> Modulos : </div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-chimney"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="../../Inventario_Ferreteria/views/modules/producto.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-coins"></i></div>
                                Productos
                            </a>
                            <a class="nav-link" href="../../Inventario_Ferreteria/views/modules/pedido.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-truck-fast"></i></div>
                                Pedidos
                            </a>
                            <a class="nav-link" href="../../Inventario_Ferreteria/views/modules/salida.php">
                                <div class="sb-nav-link-icon"> <i class="fa-solid fa-cart-shopping"></i></div>
                                Salidas
                            </a>
                            <a class="nav-link" href="../../Inventario_Ferreteria/views/modules/proveedor.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                                Proveedores
                            </a>
                        </div>

                    </div>
                </nav>
            </div>

            <!-- Contenido -->
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inventario</h1> <br>
                        
                        <!-- Cards de Navegacion -->
                        <div class="row">
                            
                            <!-- Card Producto -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-coins"></i>
                                        <span> Productos </span>
                                    </div>
                                    <div class="card-footer  border-secondary d-flex  align-items-center justify-content-center">
                                        <a class="small text-white stretched-link text-decoration-none" href="../../Inventario_Ferreteria/views/modules/producto.php">Ver Mas </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Card Pedido -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-truck-fast"></i> 
                                        <span> Pedidos </span>
                                    </div>
                                    <div class="card-footer  border-secondary d-flex align-items-center justify-content-center">
                                        <a class="small text-white stretched-link text-decoration-none" href="../../Inventario_Ferreteria/views/modules/pedido.php">Ver Mas</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Salida -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <span> Salidas </span>
                                    </div>
                                    <div class="card-footer  border-secondary d-flex align-items-center justify-content-center">
                                        <a class="small text-white stretched-link text-decoration-none" href="../../Inventario_Ferreteria/views/modules/salida.php"">Ver Mas</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Proveedores -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-user-tie"></i>
                                        <span>Proveedores</span>
                                    </div>
                                    <div class="card-footer border-secondary d-flex align-items-center justify-content-center">
                                        <a class="small text-white stretched-link text-decoration-none" href="../../Inventario_Ferreteria/views/modules/proveedor.php">Ver Mas</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Card Tabla Inventario -->
                        <div class="card mb-4">
                            
                            <!-- Card Tabla Inventario Cabecera-->
                            <div class="card-header">
                                <i class="fa-solid fa-table-list"></i>
                                <span> Inventario General </span>
                            </div>
                            
                            <!-- Card Tabla Inventario Cuerpo -->
                            <div class="card-body">

                                <div class="row">
                                    <div id="tablaInventario">    
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../../Inventario_Ferreteria/views/assets/js/inicio.js"></script>
        
        <script type="text/javascript">
            mostrarInventario();
        </script>
    </body>
</html>