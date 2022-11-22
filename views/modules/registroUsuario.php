<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>Register - SB Admin</title>
        
        <link href="../../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />
        
        <script src="../../../Inventario_Ferreteria/views/assets/plugins/jquery/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear Cuenta</h3></div>
                                    <div class="card-body">
                                        
                                        <form id="formRegistrarUsuario" onsubmit="return registrarUsuario()" method="POST">
                                        
                                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Enter your first name" />
                                                <label for="nombre">Nombre</label>
                                                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Enter your first name" />
                                                <label for="telefono">Telefono</label>
                                                <input class="form-control" id="correoElectronico" name="correoElectronico" type="email" placeholder="name@example.com" />
                                                <label for="correoElectronico">Correo Electronico</label>
                                                <input class="form-control" id="password" name="password"  type="password" placeholder="Create a password" />
                                                <label for="password">Contraseña</label>
                                                <label>Cargo : </label>
                                                                    <select name="rol" id="">
                                                                    
                                                                        <option value="0"> Seleccione el cargo </option> 
                                                                        
                                                                        <?php 
                                                                            include("../../../Inventario_Ferreteria/models/connection.php");

                                                                            $stmt = Connect::connectBd()-> prepare("SELECT * FROM rol");
                                                                            $stmt->execute();
                                                                            $datos = $stmt->fetchAll();
                                                                            foreach ($datos as $valores) {
                                                                                echo  ('<option value="'.$valores['id'].'">'.$valores['nombreRol'].'</>') ;
                                                                            }
                                                                        ?>

                                                                    </select>
                                                                    
                                                <input type="submit" value="Registrar Usuario">
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../../../Inventario_Ferreteria/views/modules/inicioSesion.php">Tienes una Cuenta ? Incia Sesion </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../../Inventario_Ferreteria/views/assets/js/usuarioScript.js"></script>

    </body>
</html>
