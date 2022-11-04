<?php

    require_once("connection.php");
    
    class SalidaModel {
        
        static public function mostrarSalidaModel(){
            
            //$stmt = Connect::connectBd()-> prepare("SELECT id,cantidad,fechaSalida,valorUnitario,valorTotal FROM salida");
            $stmt = Connect::connectBd()-> prepare("SELECT s.id, p.nombre, s.cantidad, s.fechaSalida, s.valorUnitario, s.valorTotal FROM producto p LEFT JOIN salida s ON s.producto_id = p.id");
            
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function insertarSalidaModel($cantidad, $fechaSalida, $valorUnitario, $valorTotal, $producto_id){
        
            $stmt =Connect::connectBd()-> prepare("INSERT INTO salida (cantidad,fechaSalida,valorUnitario,valorTotal,producto_id) 
                VALUE ( :cantidad, :fechaSalida, :valorUnitario, :valorTotal, :producto_id)");
            
            

            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":fechaSalida", $fechaSalida, PDO::PARAM_STR);
            $stmt->bindParam(":valorUnitario", $valorUnitario, PDO::PARAM_STR);
            $stmt->bindParam(":valorTotal", $valorTotal, PDO::PARAM_STR);
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            
           /* $salida_id = Connect::connectBd()->insert_id;
            echo "<script>console.log(Salida ID:'{$salida_id}');</script>";
            actualizarCantidadSalidaModel($cantidad,$producto_id,$salida_id);

            return $stmt->execute();
            $stmt = null;*/
            $stmt -> execute();
            $salida_id =Connect::connectBd()->lastInsertId();
            
            echo "<script>console.log(Id Model :'{$lastInsertId}');</script>";
            $stmt = null;
            return  $lastInsertId;

        }

        static public function actualizarCantidadSalidaModel($cantidad,$producto_id,$salida_id){
            //echo "<script>console.log(Salida ID:'{$salida_id}');</script>";
            $stmt =Connect::connectBd()-> prepare("INSERT INTO inventario (cantidad, producto_id, salida_id) 
                    VALUE (:cantidad, :producto_id, :salida_id)");
            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt->bindParam(":salida_id", $salida_id, PDO::PARAM_INT);
            
           
            return $stmt->execute();
            $stmt = null;
        }

        static public function eliminarSalidaModel($id){
            $stmt =Connect::connectBd()-> prepare("DELETE FROM salida WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            return $stmt->execute();
        }

    }
    
    
    ?>