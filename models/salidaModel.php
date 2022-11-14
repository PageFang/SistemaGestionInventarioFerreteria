<?php

    require_once("connection.php");
    
    class SalidaModel {
        
        // Metodo Mostrar Lista de Salidas 
        static public function mostrarSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        // Metodo Insertar Salida
        static public function insertarSalidaModel($cantidad,$fechaSalida,$valorUnitario,$valorTotal,$producto_id){
        
            $pdo = Connect::connectBd();
            $stmt =$pdo->prepare("INSERT INTO salida (producto_id,cantidad,fechaSalida,valorUnitario,valorTotal) VALUE ( :producto_id, :cantidad, :fechaSalida, :valorUnitario, :valorTotal )");
            
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":fechaSalida", $fechaSalida, PDO::PARAM_STR);
            $stmt->bindParam(":valorUnitario", $valorUnitario, PDO::PARAM_STR);
            $stmt->bindParam(":valorTotal", $valorTotal, PDO::PARAM_STR);
            
            $stmt -> execute(); 
            
            // Ultima Id Insertada
            $salida_id = $pdo->lastInsertId();

            return $salida_id;
            $stmt = null;
        }

        // Eliminar Salida
        static public function eliminarSalidaModel($id){
            
            $stmt =Connect::connectBd()-> prepare("DELETE FROM salida WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            return $stmt->execute();
        }

        // Obtener Datos del Salida
        static public function obtenerDatosSalidaModel($id){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,cantidad,fechaSalida,valorUnitario,valorTotal FROM salida WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }
        
        // Actualizar Datos Salida
        static public function actualizarSalidaModel($id,$cantidad,$fechaSalida,$valorUnitario,$valorTotal){
            
            $stmt = Connect::connectBd()-> prepare("UPDATE salida SET cantidad = :cantidad, fechaSalida = :fechaSalida, valorUnitario = :valorUnitario, valorTotal = :valorTotal WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":cantidad",  $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":fechaSalida", $fechaSalida, PDO::PARAM_STR);
            $stmt->bindParam(":valorUnitario", $valorUnitario, PDO::PARAM_STR);
            $stmt->bindParam(":valorTotal", $valorTotal, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch();
            $stmt = null;
        }


        static public function ordenarMasRecienteSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id ORDER BY fechaSalida ASC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMasAntiguoSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id ORDER BY fechaSalida DESC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMaxCantidadSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id ORDER BY cantidad DESC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMinCantidadSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id  ORDER BY cantidad ASC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMaxValorUnidadSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id ORDER BY valorUnitario DESC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMinValorUnidadSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id ORDER BY valorUnitario ASC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMaxValorSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id ORDER BY valorTotal DESC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMinValorSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id  ORDER BY valorTotal ASC");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        
    }
    
?>