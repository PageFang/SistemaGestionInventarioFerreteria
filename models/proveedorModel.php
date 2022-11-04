<?php

    require_once("connection.php");
    
    class ProveedorModel {
       
        static public function mostrarProveedorModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,direccion,telefono FROM proveedor");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function insertarProveedorModel($datosModel){
            
            //$stmt =Connect::connectBd()-> prepare("INSERT INTO ciudad (nombre) 
                 //   VALUE (:nombre)");
            //$stmt->bindParam(":nombre", $datosModel["ciudad"], PDO::PARAM_STR);
            //$ciudad_id = $stmt->Connect::connectBd()->insert_id;

            $stmt =Connect::connectBd()-> prepare("INSERT INTO proveedor (nombre,direccion,telefono,ciudad_id) 
                    VALUE (:nombre, :direccion, :telefono, :ciudad_id)");
            
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":ciudad_id", $datosModel["ciudad_id"], PDO::PARAM_INT);
            
            return $stmt->execute();
            $stmt = null;
        }

        static public function eliminarProveedorModel($id){
              
            $stmt =Connect::connectBd()-> prepare("DELETE FROM proveedor WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           
            return $stmt->execute();
        }

        // Obtener Producto for Modificar 
        static public function obtenerProveedorModel($id){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,direccion,telefono FROM producto WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }


    }
    
    
    ?>