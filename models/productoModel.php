<?php

    require_once("connection.php");
    
    class ProductoModel {
        
        // Mostrar Lista Productos 
        static public function mostrarProductoModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id, nombre, descripcion, marca FROM producto");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        // Seleeccionar Productos 
        static public function seleccionarProductoModel($datosModel){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,descripcion,marca FROM producto WHERE nombre=:nombre"); 
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        // Insertar Producto
        static public function insertarProductoModel($datosModel){
            
            $stmt =Connect::connectBd()-> prepare("INSERT INTO producto (nombre,descripcion,marca) VALUE (:nombre, :descripcion, :marca)");
            
            $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
            $stmt->bindParam(":marca", $datosModel["marca"], PDO::PARAM_STR);
            
            return $stmt->execute();
            $stmt = null;
        }
        
        // Eliminar Producto
        static public function eliminarProductoModel($id){
            
            $stmt =Connect::connectBd()-> prepare("DELETE FROM producto WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            return $stmt->execute();
            $stmt = null;
        }

        // Obtener Datos del Producto
        static public function obtenerDatosProductoModel($id){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,nombre,descripcion,marca FROM producto WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }

        // Actualizar Datos del  Producto 
        static public function actualizarProductoModel($id,$nombre,$descripcion,$marca ){
            
            $stmt = Connect::connectBd()-> prepare("UPDATE producto SET nombre = :nombre, descripcion = :descripcion, marca = :marca WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nombre",  $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch();
            $stmt = null;
        }

        // Ordenar Producto A-Z Nombre
        static public function ordenarNombreProductoAscModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT p.id, p.nombre, p.descripcion, p.marca, pd.valorUnitario FROM producto p LEFT JOIN pedido pd ON p.id = pd.producto_id ORDER BY nombre ASC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null; 
        }

        // Ordenar Producto A-Z Nombre
        static public function ordenarNombreProductoDescModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT p.id, p.nombre, p.descripcion, p.marca, pd.valorUnitario FROM producto p LEFT JOIN pedido pd ON p.id = pd.producto_id ORDER BY nombre DESC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null; 
        }

        // Ordenar Mas reciente
        static public function ordenarMasAntiguoProductoModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT p.id, p.nombre, p.descripcion, p.marca, pd.valorUnitario FROM producto p LEFT JOIN pedido pd ON p.id = pd.producto_id ORDER BY id ASC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null; 
        }

        // Ordenar Mas Antiguo
        static public function ordenarMasRecienteProductoModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT p.id, p.nombre, p.descripcion, p.marca, pd.valorUnitario FROM producto p LEFT JOIN pedido pd ON p.id = pd.producto_id ORDER BY id DESC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null; 
        }
    } 
    
?>