<?php

    require_once("connection.php");
    
    class SalidaModel {
        
        static public function mostrarSalidaModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function insertarSalidaModel($cantidad, $fechaSalida, $valorUnitario, $valorTotal, $producto_id){
        
            $pdo = Connect::connectBd();
            $stmt =$pdo->prepare("INSERT INTO salida (cantidad,fechaSalida,valorUnitario,valorTotal,producto_id) VALUE ( :cantidad, :fechaSalida, :valorUnitario, :valorTotal, :producto_id)");
            
            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":fechaSalida", $fechaSalida, PDO::PARAM_STR);
            $stmt->bindParam(":valorUnitario", $valorUnitario, PDO::PARAM_STR);
            $stmt->bindParam(":valorTotal", $valorTotal, PDO::PARAM_STR);
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt -> execute(); 

            $salida_id = $pdo->lastInsertId();
            echo "<script>console.log('Id : {$salida_id}');</script>";

            $stmt_2 = Connect::connectBd()->prepare("INSERT INTO inventario (cantidad,producto_id,salida_id) VALUES (:cantidad, :producto_id, :salida_id)");
            $stmt_2->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt_2->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt_2->bindParam(":salida_id", $salida_id, PDO::PARAM_INT);

            $stmt_2 -> execute(); 
            return $stmt_2 = null;
        }

        static public function eliminarSalidaModel($id){
            
            $stmt =Connect::connectBd()-> prepare("DELETE FROM salida WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            return $stmt->execute();
        }
    }
    
?>