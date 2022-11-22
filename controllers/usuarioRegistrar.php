<?php

    require("../../Inventario_Ferreteria/models/usuarioModel.php");

    class RegistrarUsuario{
        
        static public function registrarUsuario(){
            
            $nombre =  $_POST['nombre'];
            $rol =  $_POST['rol'];
            $email =  $_POST['correoElectronico'];
            
            $password =  $_POST['password'];
            $password = password_hash($password,PASSWORD_BCRYPT);

            $telefono =  $_POST['telefono'];

            $respuestaInsertarUsuario = UsuarioModel::registrarUsuario($nombre,$rol,$email,$password,$telefono);
            echo "1";
        }

    }

    $registrar = new RegistrarUsuario();
    $registrar->registrarUsuario();
?>