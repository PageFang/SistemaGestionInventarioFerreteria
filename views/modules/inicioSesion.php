<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title> Inventario - Inicio Sesion </title>
        
        <!-- Styles -->
        <link href="../../../Inventario_Ferreteria/views/assets/css/styles.css" rel="stylesheet" />
        
        <!-- Icon -->
        <link rel="icon" href="../../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.ico">
        
        <!-- Scripts -->
        <script src="../../../Inventario_Ferreteria/views/assets/plugins/jquery/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <!-- Fondo -->
        <style type="text/css">
                body { 
                    background-image: url('../../../Inventario_Ferreteria/views/assets/img/Background.jpg');
                    height : 100%;
                }
        </style>
    </head>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                
                <main>
                    
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Iniciar Sesion </h3>
                                    </div>

                                    <div class="card-body">
                                        <form id="formInicioSesion" onsubmit="return iniciarSesion()" method="POST">
                                            
                                            <label for="nombreLogin"> Nombre De Usuario : </label>
                                            <input class="form-control" id="nombreLogin" name="nombreLogin" type="text" placeholder="Ej. WalterSilva" required="" />
                                            
                                            <br>

                                            <label for="nombreLogin"> Contraseña : </label>
                                            <input class="form-control" id="passwordLogin" name="passwordLogin" type="password" placeholder="Ej. a5d67g2191j13" required="" />
                                            
                                            <br>

                                            <input class="container-fluid" type="submit" value="Iniciar Sesion">
                                            
                                        </form>
                                    </div>

                                    <div class="card-footer text-center py-3">
                                        <div class="small"> <a class="btn btn-primary" href="../../../Inventario_Ferreteria/views/modules/registroUsuario.php"> ¿No tienes una cuenta? Cree Una </a></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../../Inventario_Ferreteria/views/assets/js/usuarioScript.js"></script>

    </body>
</html>
