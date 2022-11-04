<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario </title>
        
        <!-- Styles -->   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />

        <!-- Icons --> 
        <script src="https://kit.fontawesome.com/4afb0f7fd4.js" crossorigin="anonymous"></script>
        
        <!-- Scripts -->  
        <script src="../../../Inventario_Ferreteria/views/assets/plugins/jquery/jquery.min.js"></script>
        <script src="../../../Inventario_Ferreteria/views/assets/plugins/sweetalert.min.js"></script>
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
                        </div>

                    </div>
                </nav>
            </div>

            <!-- Contenido -->
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Productos </h1>
                        
                        <!-- Card Tabla Inventario Productos -->
                        <div class="card mb-4">

                            <!-- Card Tabla Inventario Productos Encabezado -->
                            <div class="card-header">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span> Listado de Productos : </span>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        
                                        <div class="row"> 
                                            <div class="col">
                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal"> Ingresar Producto </button>
                                            </div>

                                            <div class="col">
                                                
                                                <!-- Modal Insertar Producto -->
                                                <div class="modal" id="myModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Cabecera Modal -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Ingresar Producto : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- Cuerpo Modal -->
                                                            <div class="modal-body">
                                                                <form form id="frminsert" onsubmit="return insertarDatos()" method="POST"> 
                                                                
                                                                    
                                                                    
                                                                    <label>Nombre</label>
                                                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Descripcion</label>
                                                                    <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Marca</label>
                                                                    <input type="text" id="marca" name="marca" class="form-control form-control-sm">
                                                                    <br>
                                                                    <input type="submit" value="Guardar" class="btn btn-primary">
                                                    
                                                                </form>
                                                            </div>

                                                            <!-- Footer Modal -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal"> Cerrar </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">

                                                <!-- Modal Actualizar Producto -->
                                                <div class="modal" id="actualizarModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Cabecera Modal -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Actualizar Producto : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- Cuerpo Modal -->
                                                            <div class="modal-body">
                                                                <form form id="frminsertUp" onsubmit="return actualizarProducto()" method="POST"> 
                                                                    
                                                                    <label>Id</label>
                                                                    <input type="text" id="id" name="id" class="form-control form-control-sm " readonly="readonly">

                                                                    <label>Nombre</label>
                                                                    <input type="text" id="nombreUp" name="nombreUp" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Descripcion</label>
                                                                    <input type="text" id="descripcionUp" name="descripcionUp" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Marca</label>
                                                                    <input type="text" id="marcaUp" name="marcaUp" class="form-control form-control-sm">
                                                                    <br>
                                                                    <input type="submit" value="Actualizar" class="btn btn-primary">
                                                    
                                                                </form>
                                                            </div>

                                                            <!-- Footer Modal -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal"> Cerrar </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- InterEspacio  -->      
                                <div class="row">
                                    <div class="col mb-4"></div>
                                </div>

                                <!-- Tabla Inventario de Productos -->
                                <div class="row">
                                    <div id="tablaProducto">    
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
        <script src="../../../Inventario_Ferreteria/views/assets/js/productoScript.js"></script>
        
        <script type="text/javascript">
            mostrar();
        </script>

    </body>
</html>