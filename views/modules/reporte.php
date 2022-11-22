<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario Ferreteria "La Avenida" </title>
        <!-- ICON -->
        <link rel="icon" href="../../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.ico">

        <!-- STYLES -->   
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />
        
        <!-- ICONS -->   
        <script src="https://kit.fontawesome.com/4afb0f7fd4.js" crossorigin="anonymous"></script>
        
        <!-- SCRIPTS -->   
        <script src="../../../Inventario_Ferreteria/views/assets/plugins/jquery/jquery.min.js"></script>
    </head>

    <body class="sb-nav-fixed">

        <!-- BARRA DE NAVEGACION SUPERIOR -->   
        
           
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <div class="row">
                <div class="col-2">
                    <a class="navbar-brand ps-3" href="index.html">Inventario</a>
                </div>
            </div>
           
            <!-- Sidebar Toggle-->
            
            <!-- Navbar Search-->
            

            <!-- Navbar-->
            <div class="row">
            <div class="col-8">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
            </div>
           
            
            
            
        </nav>
            
        
        

        <div id="layoutSidenav">

            <!-- BARRA DE NAVEGACION LATERAL -->   
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading"> Modulos : </div>
                            <a class="nav-link" href="../../../Inventario_Ferreteria/views/template.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-chimney"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-coins"></i></div>
                                Productos
                            </a>
                            <a class="nav-link" href="pedido.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-truck-fast"></i></div>
                                Pedidos
                            </a>
                            <a class="nav-link" href="salida.php">
                                <div class="sb-nav-link-icon"> <i class="fa-solid fa-cart-shopping"></i></div>
                                Salidas
                            </a>
                            <a class="nav-link" href="proveedor.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                                Proveedores
                            </a>
                            <a class="nav-link" href="ciudad.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                                Ciudades
                            </a>
                            <a class="nav-link" href="reporte.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                                Reporte
                            </a>
                        </div>

                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">
                        </div>
                        <a href="cerrarSesion.php">Cerrar Sesion</a>
                    </div>

                </nav>
            </div>

            <!-- CONTENIDO -->
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inventario</h1> <br>
                        
                        <!-- CARDS DE NAVEGACION -->
                        <div class="row">
                            
                            <!-- CARD PRODUCTO -->
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-coins"></i>
                                        <span> Producto Mas Vendido </span>
                                    </div>
                                    <div class="card-footer  border-secondary d-flex  align-items-center justify-content-center">
                                        <p id="productosMasVendidos"></p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- CARD PEDIDO -->
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-truck-fast"></i> 
                                        <span> Producto Menos Vendido </span>
                                    </div>
                                    <div class="card-footer  border-secondary d-flex align-items-center justify-content-center">
                                        <p id="productosMenosVendidos"></p>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD SALIDA -->
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <span> Total Egresos  </span>
                                    </div>
                                    <div class="card-footer border-secondary d-flex align-items-center justify-content-center">
                                    <p id="totalEgresos"></p>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD PROVEEDORES -->
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-user-tie"></i>
                                        <span>Total Ingresos</span>
                                    </div>
                                    <div class="card-footer border-secondary d-flex align-items-center justify-content-center">
                                        <p id="totalIngresos"></p>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-user-tie"></i>
                                        <span>Total</span>
                                    </div>
                                    <div class="card-footer border-secondary d-flex align-items-center justify-content-center">
                                    <p id="total"></p>
                                    </div>
                                </div>
                            </div> 

                        </div>

                    </div>
                </main>
            </div>
        </div>
    
        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        
        <!-- SCRIPTS FUNCIONALIDADES -->
        <script src="../../../Inventario_Ferreteria/views/assets/js/reporteScript.js"></script>
        
        <!-- FUNCION MOSTRAR TABLA INVENTARIO -->
        <script type="text/javascript">
            mostrarTotalIngresos();
            mostrarTotalEgresos();
            mostrarTotal();
            productomasVendido();
            productomenosVendido();
        </script>
        
    </body>
</html>