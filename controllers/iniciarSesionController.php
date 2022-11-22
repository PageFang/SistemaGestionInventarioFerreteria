<?php
    
    require_once("../../Inventario_Ferreteria/models/usuarioModel.php");
    
    class IniciarSesion {

        static public function iniciarSesionController(){

            session_start();

            $nombreUsuario = $_POST['nombreLogin'];
            $contraseña = $_POST['passwordLogin'];

            $respuestaExitsUsuario = UsuarioModel::verificarUsuario($nombreUsuario);
            
            $password="";
            $idUser="";

            if($respuestaExitsUsuario){

                foreach ($respuestaExitsUsuario as $key => $value) {
                    $idUser = $value['id'];
                    $password = $value['passwordUser'];
                    $nombre = $value['nombreUsuario'];
                }

                if(password_verify($contraseña,$password)){
                    echo "1";
                    $_SESSION['user_id'] = $idUser;
                }else{
                    echo "2";
                }

            }elseif (!$respuestaExitsUsuario) {
                echo "2";
            }
            }



            /*
            $id_User = "";
            $nombre = "";
            $email = "";
            $rol = "";

            if ($respuestaExitsUsuario){
            
                foreach ($respuestaExitsUsuario as $key => $value) {
                    $id_User = $value['id'];
                    $nombre = $value['nombreUsuario'];
                    $email = $value['correoElectronico'];
                    $rol = $value['rol_id'];
                }

                session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] =  $id_User;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['email'] = $email;
                $_SESSION['rol'] = $rol;

                echo "1";
            }else{
                echo "2";
                
            }*/
        }
    

    $iniciar = new IniciarSesion();
    $iniciar->iniciarSesionController();
?>