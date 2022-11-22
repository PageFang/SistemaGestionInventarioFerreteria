<?php 
    require_once("connection.php");
    
    class UsuarioModel {
    
        // Verficar si el usuario ya existe
        static public function verificarUsuario($nombreUsuario){

            $stmt = Connect::connectBd()-> prepare("SELECT * FROM usuario WHERE nombreUsuario = :nombre"); 
            $stmt->bindParam(":nombre", $nombreUsuario, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function registrarUsuario($nombre,$rol,$email,$password,$telefono){

            $stmt = Connect::connectBd()-> prepare("INSERT INTO usuario (rol_id,nombreUsuario,correoElectronico,passwordUser,telefono) VALUE ( :rol_id, :nombreUsuario, :correoElectronico, :passwordUser, :telefono)"); 
            
            $stmt->bindParam(":rol_id", $rol, PDO::PARAM_INT);
            $stmt->bindParam(":nombreUsuario", $nombre, PDO::PARAM_STR); 
            $stmt->bindParam(":correoElectronico", $email, PDO::PARAM_STR);
            $stmt->bindParam(":passwordUser", $password, PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }
    }

?>