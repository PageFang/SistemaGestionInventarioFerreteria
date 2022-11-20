<?php

    require_once("connection.php");
    
    class ProveedorModel {
        
        // Mostar Lista de Proveedores
        static public function mostrarProveedorModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,direccion,correoElectronico,telefono FROM proveedor");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }
        

        // Seleccionar Proveedor
        static public function seleccionarProveedorModel($datosModel){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,direccion,correoElectronico,telefono FROM proveedor WHERE nombre=:nombre"); 
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        // Insertar Proveedor
        static public function insertarProveedorModel($datosModel){
            
            $stmt =Connect::connectBd()-> prepare("INSERT INTO proveedor (nombre,direccion,correoElectronico,telefono,ciudad_id) VALUE (:nombre, :direccion, :correoElectronico, :telefono, :ciudad_id)");
            
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":correoElectronico", $datosModel["correoElectronico"], PDO::PARAM_STR);
            $stmt->bindParam(":ciudad_id", $datosModel["ciudad_id"], PDO::PARAM_INT);
            
            return $stmt->execute();
            $stmt = null;
        }

        // Eliminar Proveedor
        static public function eliminarProveedorModel($id){
            
            $stmt =Connect::connectBd()-> prepare("DELETE FROM proveedor WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            return $stmt->execute();
        }

        // Obtener Datos Proveedor
        static public function obtenerDatosProveedorModel($id){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,direccion,correoElectronico,telefono,ciudad_id FROM proveedor WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch();
            $stmt = null;
        }

        // Actualizar Proveedor
        static public function actualizarProveedorModel($id,$nombre,$direccion,$correoElectronico,$telefono){
            
            $stmt = Connect::connectBd()-> prepare("UPDATE proveedor SET nombre = :nombre, direccion = :direccion, correoElectronico = :correoElectronico, telefono = :telefono WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nombre",  $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $stmt->bindParam(":correoElectronico", $correoElectronico, PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch();
            $stmt = null;
        }

        static public function ordenarNombreProveedorAscModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT * FROM proveedor ORDER BY nombre ASC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarNombreProveedorDescModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT * FROM proveedor ORDER BY nombre DESC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMasRecientesProveedoresModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT * FROM proveedor ORDER BY id DESC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMasAntiguosProveedoresModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT * FROM proveedor ORDER BY id ASC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }
    }

?>