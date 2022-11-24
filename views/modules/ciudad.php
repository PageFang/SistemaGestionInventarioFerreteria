
<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario - Ciudades </title>
        
        <!-- ICON --> 
        <link rel="icon" href="../../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.ico">
        
        <!-- STYLES -->   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />

        <!-- ICONS --> 
        <script src="https://kit.fontawesome.com/4afb0f7fd4.js" crossorigin="anonymous"></script>

        <!-- SCRIPTS -->  
        <script src="../../../Inventario_Ferreteria/views/assets/plugins/jquery/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body class="sb-nav-fixed">

        <!-- BARRA DE NAVEGACION SUPERIOR -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <span class="navbar-brand ps-4"> Inventario </span>
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
                            <a class="nav-link" href="producto.php">
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
                </nav>
            </div>

            <!-- CONTENIDO -->
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Ciudades </h1>
                        
                        <!-- CARD TABLA INVENTARIO CIUDADES -->
                        <div class="card mb-4">

                            <!-- CARD TABLA INVENTARIO CIUDADES ENCABEZADO -->
                            <div class="card-header">
                                <i class="fa-solid fa-clipboard-list"></i>
                                <span> Listado de Ciudades : </span>
                            </div>
                            
                            <!-- CARD TABLA INVENTARIO CIUDADES CONTENIDO -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        
                                        <div class="row"> 

                                            <!-- INGRESAR CIUDAD -->
                                            <div class="col-3">
                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#insertarCiudadModal"> Ingresar Ciudad </button>
                                            </div>
                                            
                                            <!-- LISTAR CIUDAD -->
                                            <div class="col-2">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"> Listar Por </button>
                                                    
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" onclick="ordenarNombreCiudadAsc()">Filtrar Ciudad A-Z</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarNombreCiudadDesc()">Filtrar Ciudad Z-A</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMasRecientesCiudad()">Filtrar por Mas Recientes</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMasAntiguosCiudad()">Filtrar por Mas Antiguos</a></li>
                                                    </ul>

                                                </div>
                                            </div>

                                            <!-- MODAL INSERTAR CIUDAD -->
                                            <div class="col">
                                                <div class="modal fade" id="insertarCiudadModal" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Ingresar Ciudad : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL -->
                                                            <div class="modal-body">
                                                                
                                                                <!-- FORMULARIO INGRESO PRODUCTO -->
                                                                <form form id="formInsertarCiudad" onsubmit="return insertarCiudad()" method="POST"> 
    
                                                                    <label>Nombre : </label>
                                                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" placeholder="Ej. Bogota" required="" >

                                                                    <br>
                                                                    
                                                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar Ciudad </button>
                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- MODAL ACTUALIZAR CANTIDAD -->
                                            <div class="col">
                                                <div class="modal fade" id="modalActualizarCiudad"  data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Actualizar Ciudad : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL -->
                                                            <div class="modal-body">
                                                                
                                                                <!-- FORMULARIO ACTUALIZAR DATOS CIUDAD-->
                                                                <form form id="formUptadeCiudad" onsubmit="return actualizarCiudad()" method="POST"> 
                                                                    
                                                                    <label>Id : </label>
                                                                    <input type="text" id="idUp" name="idUp" class="form-control form-control-sm " readonly="readonly">

                                                                    <label>Nombre : </label>
                                                                    <input type="text" id="nombreUp" name="nombreUp" class="form-control form-control-sm" required="">

                                                                    <br>
                                                                    
                                                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Actualizar Datos </button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- INTERESPACIO  -->      
                                <div class="row">
                                    <div class="col mb-4"> </div>
                                </div>

                                <!-- TABLA INVENTARIO CIUDAD -->
                                <div class="row">
                                    <div id="tablaCiudad"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
        <!-- SCRIPTS  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        
        <!-- SCRIPTS FUNCIONALIDADES -->
        <script src="../../../Inventario_Ferreteria/views/assets/js/ciudadScript.js"></script>
        
        <!-- FUNCION MOSTRAR TABLA CIUDADES -->
        <script type="text/javascript">
            mostrarCiudad();
        </script>

    </body>
</html>