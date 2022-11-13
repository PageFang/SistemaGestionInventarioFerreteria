<?php

    require_once("connection.php");
    
    class CiudadModel {
        
        // Mostrar Listado Ciudad 
        static public function mostrarCiudadModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre FROM ciudad");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        // Seleccionar Ciudad para Validar
        static public function seleccionarCiudadModel($datosModel){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre FROM ciudad WHERE nombre=:nombre"); 
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        // Insertar Ciudad
        static public function insertarCiudadModel($datosModel){
            
            $stmt =Connect::connectBd()-> prepare("INSERT INTO ciudad (nombre) VALUE (:nombre)");
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            
            return $stmt->execute();
            $stmt = null;
        }

        // Obtener Producto for Modificar 
        static public function obtenerCiudadModel($id){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre FROM ciudad WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch();
            $stmt = null;
        }

        // Modificar Producto 
        static public function actualizarCiudadModel($id,$nombre){
            
            $stmt = Connect::connectBd()-> prepare("UPDATE ciudad SET nombre = :nombre WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nombre",  $nombre, PDO::PARAM_STR);
            
            $stmt->execute();
            
            return $stmt->fetch();
            $stmt = null;
        }
    } 
    
?>