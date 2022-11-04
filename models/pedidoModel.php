<?php

    require_once("connection.php");
    
    class PedidoModel {
       
        static public function mostrarPedidoModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT id,cantidad,fechaIngreso,valorUnitario, valorTotal FROM pedido");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function insertarPedidoModel($cantidad,$fechaIngreso,$valorUnitario,$producto_id,$proveedor_id,$valorTotal){
            
            $stmt =Connect::connectBd()-> prepare("INSERT INTO pedido (producto_id,proveedor_id,cantidad,fechaIngreso,valorUnitario,valorTotal) 
            VALUE (:producto_id, :proveedor_id, :cantidad, :fechaIngreso, :valorUnitario, :valorTotal)");

           // $pedido_id = Connect::connectBd()->insert_id;
        
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt->bindParam(":proveedor_id", $proveedor_id, PDO::PARAM_INT);
            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":fechaIngreso", $fechaIngreso, PDO::PARAM_STR);
            $stmt->bindParam(":valorUnitario", $valorUnitario, PDO::PARAM_STR);
            $stmt->bindParam(":valorTotal", $valorTotal, PDO::PARAM_STR);
    
/*
            $stmt = Connect::connectBd()-> prepare("INSERT INTO inventario(cantidad,producto_id,pedido_id) VALUES (:cantidad, :producto_id, :pedido_id)");
            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt->bindParam(":pedido_id", $pedido_id, PDO::PARAM_INT);*/

            return $stmt->execute();
            $stmt = null;
        }

        static public function eliminarPedidoModel($id){
              
            $stmt =Connect::connectBd()-> prepare("DELETE FROM pedido WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           
            return $stmt->execute();
        }

    }
    
    
    ?>