<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario - Proveedores</title>
        
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
                            <a class="nav-link" href="#">
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

            <!-- Contenido -->
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Proveedores </h1>
                        
                        <!-- Card Tabla Inventario Proveeedore -->
                        <div class="card mb-4">

                            <!-- Card Tabla Inventario Proveeedore Encabezado -->
                            <div class="card-header">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span> Listado de Proveedores : </span>
                            </div>
                            
                            <!-- Card Tabla Inventario Productos Contenido -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <div class="row">
                                            <div class="col">
                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal"> Ingresar Proveedor </button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark" onclick="ordenarNombreProveedorAsc()"> Ordenar A-Z</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark" onclick="ordenarNombreProveedorDesc()"> Ordenar Z-A</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark" onclick="ordenarMasRecienteProveedor()"> Ordenar Mas Recientes</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark" onclick="ordenarMasAntiguoProveedor()"> Ordenar Mas Antiguos</button>
                                            </div>

                                            <!-- Modal Insertar Proveedor -->
                                            <div class="col">
                                                <div class="modal fade" id="myModal" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Cabecera Modal -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Ingresar Proveedor : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- Cuerpo Modal -->
                                                            <div class="modal-body">
                                                                
                                                                <form form id="formProveedor" onsubmit="return insertarProveedor()" method="POST"> 
                                                                    
                                                                    <label>Nombre : </label>
                                                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" placeholder="Ej. Alejandro Rodriguez" required="">
                                                                    
                                                                    <label>Direccion : </label>
                                                                    <input type="text" id="direccion" name="direccion" class="form-control form-control-sm" placeholder="Ej. Calle 29 #44-05" required="">

                                                                    <label>Correo Electronico : </label>
                                                                    <input type="email" id="correoElectronico" name="correoElectronico" class="form-control form-control-sm" placeholder="maidanrojass@gmail.com" required="">
                                                                    
                                                                    <label>Telefono : </label>
                                                                    <input type="text" id="telefono" name="telefono" class="form-control form-control-sm" placeholder="3117709431"  required="" maxlength="10" onkeypress='return validaNumericos(event)'>

                                                                    <br>
                                                                    <label>Ciudad : </label>
                                                                    <select name="ciudadProveedor" id="">
                                                                    
                                                                        <option value="0"> Seleccione la ciudad </option> 
                                                                        
                                                                        <?php 
                                                                            include("../../../Inventario_Ferreteria/models/connection.php");
                                                                                // Trae el id y el nombre de los productos de la base de datos para mostralos como un option tomando como referencia el id del producto 
                                                                                $stmt = Connect::connectBd()-> prepare("SELECT * FROM ciudad");
                                                                                $stmt->execute();
                                                                                $datos = $stmt->fetchAll();
                                                                                foreach ($datos as $valores) {
                                                                                    echo  ('<option value="'.$valores['id'].'">'.$valores['nombre'].'</>') ;
                                                                                }
                                                                        ?>

                                                                    </select>
                                                                    <br> <br>
                                                                    <input type="submit" value="Guardar" class="btn btn-primary">

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Modal Actualizar Proveedor -->
                                            <div class="col">
                                                <div class="modal fade" id="actualizarModalProveedor" data-bs-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Cabecera Modal -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Actualizar Proveedor : </h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- Cuerpo Modal -->
                                                            <div class="modal-body">
                                                                
                                                                <!-- Formulario Actualizar Proveedor -->
                                                                <form form id="formUpdateProveedor" onsubmit="return actualizarProveedor()" method="POST"> 
                                                                    
                                                                    <label>Id : </label>
                                                                    <input type="text" id="idUp" name="idUp" class="form-control form-control-sm" >

                                                                    <label>Nombre : </label>
                                                                    <input type="text" id="nombreUp" name="nombreUp" class="form-control form-control-sm" required="">
                                                                    
                                                                    <label>Direccion : </label>
                                                                    <input type="text" id="direccionUp" name="direccionUp" class="form-control form-control-sm" required="">

                                                                    <label>CorreoElectronico : </label>
                                                                    <input type="email" id="correoElectronicoUp" name="correoElectronicoUp" class="form-control form-control-sm" equired="" maxlength="10">
                                                                    
                                                                    <label>Telefono : </label>
                                                                    <input type="text" id="telefonoUp" name="telefonoUp" class="form-control form-control-sm" equired="" maxlength="10">
                                                                    <br>
                                                                    <label>Ciudad : </label>

                                                                    <br> <br>
                                                                    <input type="submit" value="Actualizar Datos" class="btn btn-primary">

                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col mb-4"></div>
                                </div>

                                <!-- Tabla Inventario de Proveedor -->
                                <div class="row">
                                    <div id="tablaProveedor"></div>
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
        <script src="../../../Inventario_Ferreteria/views/assets/js/proveedorScript.js"></script>
        <script src="../../../Inventario_Ferreteria/views/assets/js/validaciones.js"></script>
        
        <script type="text/javascript">
            mostrarProveedor();
        </script>
    </body>
</html>