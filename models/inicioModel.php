<?php

    require_once("connection.php");
    
    class inicioModel {
       
        static public function mostrarInventarioModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,descripcion,marca FROM producto");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }
    }