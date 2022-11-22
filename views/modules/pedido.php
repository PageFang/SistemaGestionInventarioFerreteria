<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario - Pedidos </title>
        
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
                            <a class="nav-link" href="#">
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
                        <h1 class="mt-4"> Pedidos </h1>
                        
                        <!-- CARD TABLA INVENTARIO PEDIDO -->
                        <div class="card mb-4">

                            <!-- CARD TABLA INVENTARIO PEDIDO ENCABEZADO -->
                            <div class="card-header">
                                <i class="fa-solid fa-clipboard-list"></i>
                                <span> Listado de Pedidos :  </span>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        
                                        <div class="row">
                                            
                                            <!-- INGRESAR PEDIDO -->
                                            <div class="col-2">
                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalInsertarPedido"> Ingresar Pedido </button>
                                            </div>

                                            <!-- LISTAR PEDIDOS -->
                                            <div class="col-2">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"> Listar Por </button>
                                                    
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" onclick="ordenarMasRecientesPedidos()">Filtrar Mas Recientes</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMasAntiguosPedidos()">Filtrar Mas Antiguos</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMaxCantidadPedidos()">Filtrar Mayor Cantidad</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMinCantidadPedidos()">Filtrar Menor Cantidad</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMaxValorUnidadPedidos()">Filtrar Mayor Valor Unitario</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMinValorUnidadPedidos()">Filtrar Menor Valor Unitario</a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMaxValorPedidos()">Filtrar Mayor Valor </a></li>
                                                        <li><a class="dropdown-item" onclick="ordenarMinValorPedidos()">Filtrar Menor Valor </a></li>
                                                    </ul>
                                                    </ul>
                                                    </ul>

                                                </div>
                                            </div>

                                            <!-- GENERAR REPORTES -->
                                            <div class="col-2">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"> Generar Reporte </button>
                                                        
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" onclick="window.location='../../../Inventario_Ferreteria/controllers/pedidoReporte.php'" formtarget="_blank" rel="noopener noreferrer">Ver Reporte</a></li>
                                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalFechaReporte">Descargar Reporte</a></li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>

                                            <!-- MODAL INSERTAR PEDIDO -->
                                            <div class="col">
                                                <div class="modal fade" id="modalInsertarPedido" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Ingresar Pedido : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL -->
                                                            <div class="modal-body">
                                                                
                                                                <!-- FORMULARIO INSERTAR PEDIDO -->
                                                                <form form id="formInsertarPedido" onsubmit="return insertarPedido()" method="POST"> 
                                                                    
                                                                    <label> Producto : </label>
                                                                    <select name="productoSelect" id="productoSelect">
                                                                        
                                                                        <option value="0"> Seleccione el Producto </option> 
                                                                        
                                                                        <?php 
                                                                            
                                                                            include("../../../Inventario_Ferreteria/models/connection.php");
                                                                            $stmt = Connect::connectBd()-> prepare("SELECT * FROM producto");
                                                                            $stmt->execute();
                                                                            $datos = $stmt->fetchAll();

                                                                            foreach ($datos as $valores) {
                                                                                echo  ('<option value="'.$valores['id'].'">'.$valores['nombre'].'</>') ;
                                                                            }
                                                                        ?>

                                                                    </select>
                                                                    
                                                                    <br><br>

                                                                    <label> Proveedor : </label>
                                                                    <select name="proveedorSelect" id="proveedorSelect">
                                                                        
                                                                        <option value="0"> Seleccione el Proveedor </option> 
                                                                        
                                                                        <?php 

                                                                            $stmt = Connect::connectBd()-> prepare("SELECT * FROM proveedor");
                                                                            $stmt->execute();
                                                                            $datos = $stmt->fetchAll();
                                                                                
                                                                            foreach ($datos as $valores) {
                                                                                echo  ('<option value="'.$valores['id'].'">'.$valores['nombreProveedor'].'</>') ;
                                                                            }
                                                                        ?>

                                                                    </select>
                                                                    
                                                                    <br>

                                                                    <label> Cantidad : </label>
                                                                    <input type="text" id="cantidad" name="cantidad" class="form-control form-control-sm" placeholder="Ej. 34" required=""  onkeypress='return validaNumericos(event)'>
                                                                        
                                                                    <label> FechaI Ingreso : </label>
                                                                    <input type="date" id="fechaIngreso" name="fechaIngreso" class="form-control form-control-sm" placeholder="Ej. 09/05/2022" required="">
                                                                        
                                                                    <label> Valor Unitario : </label>
                                                                    <input type="text" id="valorUnitario" name="valorUnitario" class="form-control form-control-sm" placeholder="Ej. 1000" required=""  onkeypress='return validaNumericos(event)'>
                                                                    
                                                                    <br>
                                                                        
                                                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar Pedido </button>
                                                                
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                                            
                                            <!-- MODAL ACTUALIZAR PEDIDO -->
                                            <div class="col">
                                                <div class="modal fade" id="modalActualizarPedido" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Actualizar Pedido : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL -->
                                                            <div class="modal-body">
                                                                
                                                                <form form id="formUpdatePedido" onsubmit="return actualizarPedido()" method="POST"> 

                                                                    <label>Id : </label>
                                                                    <input type="text" id="idUp" name="idUp" class="form-control form-control-sm " readonly="readonly">
                                                                    
                                                                    <br>

                                                                    <label> Producto : </label>
                                                                    <select name="productoSelectUp" id="productoSelectUp">
                                                                        
                                                                        <option value="0"> Seleccione el Producto </option> 
                                                                        
                                                                        <?php 
                                                                            
                                                                            $stmt = Connect::connectBd()-> prepare("SELECT * FROM producto");
                                                                            $stmt->execute();
                                                                            $datos = $stmt->fetchAll();

                                                                            foreach ($datos as $valores) {
                                                                                echo  ('<option value="'.$valores['id'].'">'.$valores['nombre'].'</>') ;
                                                                            }
                                                                        ?>

                                                                    </select>
                                                                    
                                                                    <br><br>

                                                                    <label> Proveedor : </label>
                                                                    
                                                                    <select name="proveedorSelectUp" id="proveedorSelectUp">
                                                                        
                                                                        <option value="0"> Seleccione el Proveedor </option> 
                                                                        
                                                                        <?php 

                                                                            $stmt = Connect::connectBd()-> prepare("SELECT * FROM proveedor");
                                                                            $stmt->execute();
                                                                            $datos = $stmt->fetchAll();
                                                                                
                                                                            foreach ($datos as $valores) {
                                                                                echo  ('<option value="'.$valores['id'].'">'.$valores['nombreProveedor'].'</>') ;
                                                                            }
                                                                        ?>

                                                                    </select>
                                                                    
                                                                    <br>

                                                                    <label> Cantidad : </label>
                                                                    <input type="text" id="cantidadUp" name="cantidadUp" class="form-control form-control-sm" placeholder="Ej. 34" required=""  onkeypress='return validaNumericos(event)'>
                                                                        
                                                                    <label> FechaI Ingreso : </label>
                                                                    <input type="date" id="fechaIngresoUp" name="fechaIngresoUp" class="form-control form-control-sm" placeholder="Ej. 09/05/2022" required="">
                                                                        
                                                                    <label> Valor Unitario : </label>
                                                                    <input type="text" id="valorUnitarioUp" name="valorUnitarioUp" class="form-control form-control-sm" placeholder="Ej. 1000" required=""  onkeypress='return validaNumericos(event)'>
                                                                    
                                                                    <br>
                                                                        
                                                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Actualizar Datos </button>
                                                                
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- MODAL GENERAR REPORTE -->
                                            <div class="col">
                                                <div class="modal fade" id="modalFechaReporte" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- CABECERA MODAL -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Generar Reporte : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- CUERPO MODAL -->
                                                            <div class="modal-body">
                                                                
                                                                <form form id="formGenerarPedido"  method="GET"> 

                                                                    <label> Fecha Inicio: </label>
                                                                    <input type="date" id="fechaIncio" name="fechaIncio" class="form-control form-control-sm" placeholder="Ej. 09/05/2022" required="">
                                                                    
                                                                    <label> Fecha Final: </label>
                                                                    <input type="date" id="fechaFinal" name="fechaFinal" class="form-control form-control-sm" placeholder="Ej. 09/05/2022" required="">
                                                                    
                                                                    <br>

                                                                    <input type="submit" formaction="../../../Inventario_Ferreteria/controllers/pedidoReporte.php" formtarget="_blank" value="Generar Reporte">
                                                                    
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
                                    <div class="col mb-4"></div>
                                </div>
                                
                                <!-- TABLA INVENTARIO PEDIDO -->
                                <div class="row">
                                    <div id="tablaPedido"></div>
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
        <script src="../../../Inventario_Ferreteria/views/assets/js/pedidoScript.js"></script>
        <script src="../../../Inventario_Ferreteria/views/assets/js/validaciones.js"></script>
        
        <!-- FUNCION MOSTRAR TABLA INVENTARIO -->
        <script type="text/javascript">
            mostrarPedido();
        </script>

    </body>
</html>