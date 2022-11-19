<?php 
    require_once("connection.php");
    
    class UsuarioModel {
    
        // Verficar si el usuario ya existe
        static public function verificarUsuario($contraseña,$nombre){

            $stmt = Connect::connectBd()-> prepare("SELECT * FROM usuario WHERE nombre=:nombre AND contraseña=:contraseña");
            
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":contraseña", $contraseña, PDO::PARAM_STR);

            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;

        }
    }

?>