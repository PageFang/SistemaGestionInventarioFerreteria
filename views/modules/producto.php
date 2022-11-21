<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario - Productos </title>
        
        <!-- ICON --> 
        <link rel="icon" href="../../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.ico">
        
        <!-- STYLES -->   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />

        <!-- ICONS  --> 
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
                        </div>

                    </div>
                </nav>
            </div>

            <!-- CONTENIDO -->
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Productos </h1>
                        
                        <!-- CARD TABLA INVENTARIO PRODUCTO -->
                        <div class="card mb-4">

                            <!-- CARD TABLA INVENTARIO PRODUCTO  ENCABEZADO -->
                            <div class="card-header">
                                <i class="fa-solid fa-clipboard-list"></i>
                                <span> Listado de Productos : </span>
                            </div>
                            
                            <!--CARD TABLA INVENTARIO PRODUCTO CONTENIDO -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        
                                        <div class="row"> 
                                            
                                            <!-- INGRESAR PRODUCTO BTN -->
                                            <div class="col-3">
                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalInsertarProducto"> Ingresar Producto </button>
                                            </div>

                                            <!-- LISTAR PRODUCTOS -->
                                            <div class="col-2">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"> Listar Por </button>
                                                    
                                                    <!-- LISTADO DE FUNCIONES -->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" onclick="ordenarNombreProductoAsc()">Filtrar Producto A-Z</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarNombreProductoDesc()">Filtrar Producto Z-A</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMasRecientesProducto()">Filtrar por Mas Recientes</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMasAntiguosProducto()">Filtrar por Mas Antiguos</a></li>
                                                    </ul>

                                                </div>
                                            </div>

                                            <!-- MODAL INSERTAR PRODUCTO -->
                                            <div class="col">
                                                <div class="modal fade" id="modalInsertarProducto" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Ingresar Producto : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL --> 
                                                            <div class="modal-body">
                                                                
                                                                <!-- FORMULARIO INGRESO PRODUCTO -->
                                                                <form form id="formInsertarProducto" onsubmit="return insertarProducto()" method="POST"> 
                                                                
                                                                    <label>Nombre : </label>
                                                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" placeholder="Ej. Alambre de Cobre" required="" >
                                                                    
                                                                    <label>Descripcion : </label>
                                                                    <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm" placeholder="Ej. Alambres de cobre desnudo, suave, semiduro y duro, cableado concentrico" required="">
                                                                    
                                                                    <label>Marca : </label>
                                                                    <input type="text" id="marca" name="marca" class="form-control form-control-sm" placeholder="Ej. Nexans" required="">
                                                                    
                                                                    <br>
                                                                    
                                                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar Producto </button>
                                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- MODAL ACTUALIZAR PRODUCTO -->
                                            <div class="col">
                                                <div class="modal fade" id="modalActualizarProducto"  data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Actualizar Producto : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL -->
                                                            <div class="modal-body">
                                                                
                                                                <!-- FORMULARIO ACTUALIZAR PRODUCTO -->
                                                                <form form id="formUptadeProducto" onsubmit="return actualizarProducto()" method="POST"> 
                                                                    
                                                                    <label>Id : </label>
                                                                    <input type="text" id="id" name="id" class="form-control form-control-sm " readonly="readonly">

                                                                    <label>Nombre : </label>
                                                                    <input type="text" id="nombreUp" name="nombreUp" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Descripcion : </label>
                                                                    <input type="text" id="descripcionUp" name="descripcionUp" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Marca : </label>
                                                                    <input type="text" id="marcaUp" name="marcaUp" class="form-control form-control-sm" required="">
                                                                    
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

                                <!-- INTERESPACIO -->      
                                <div class="row">
                                    <div class="col mb-4"> </div>
                                </div>

                                <!-- TABLA DE INVENTARIO PRODUCTOS -->
                                <div class="row">
                                    <div id="tablaProducto"></div>
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
        <script src="../../../Inventario_Ferreteria/views/assets/js/productoScript.js"></script>
        
        <!-- FUNCION MOSTRAR INVENTARIO PRODUCTOS -->
        <script type="text/javascript">
            mostrarProducto();
        </script>

    </body>
</html>