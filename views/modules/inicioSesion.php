
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>Inventario - Inicio Sesion </title>
        
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
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesion</h3></div>
                                    <div class="card-body">
                                        
                                        <form id="formInicioSesion" onsubmit="return iniciarSesion()" method="POST">
                                            
                                            <input class="form-control" id="nombreLogin" name="nombreLogin" type="text" placeholder="Password" required="" />
                                            <br>
                                            <input class="form-control" id="passwordLogin" name="passwordLogin" type="password" placeholder="Password" required="" />
                                            <br>
                                            <input type="submit" value="Iniciar Sesion">
                                            <br>

                                        </form>
                                    </div>

                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../../../Inventario_Ferreteria/views/modules/registroUsuario.php">No tiene Cuenta ? Cree Una Aca </a></div>
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
