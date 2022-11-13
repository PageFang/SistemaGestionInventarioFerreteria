<?php

    require_once("connection.php");
    
    class PedidoModel {
        
        // Mostar Lista de Pedidos
        static public function mostrarPedidoModel(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        // Insertar Pedido
        static public function insertarPedidoModel($cantidad,$fechaIngreso,$valorUnitario,$producto_id,$proveedor_id,$valorTotal){
            
            $pdo = Connect::connectBd();
            $stmt = $pdo-> prepare("INSERT INTO pedido (producto_id,proveedor_id,cantidad,fechaIngreso,valorUnitario,valorTotal) VALUE (:producto_id, :proveedor_id, :cantidad, :fechaIngreso, :valorUnitario, :valorTotal)");
            
            $stmt->bindParam(":producto_id", $producto_id, PDO::PARAM_INT);
            $stmt->bindParam(":proveedor_id", $proveedor_id, PDO::PARAM_INT);
            $stmt->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(":fechaIngreso", $fechaIngreso, PDO::PARAM_STR);
            $stmt->bindParam(":valorUnitario", $valorUnitario, PDO::PARAM_STR);
            $stmt->bindParam(":valorTotal", $valorTotal, PDO::PARAM_STR);
            
            $stmt->execute();

            // Ultima Id Insertada
            $pedido_id = $pdo->lastInsertId();

            return $pedido_id;
            $stmt = null;
        }
        
        /*
        static public function buscarPedidoInventarioModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT cantidad, producto_id, pedido_id FROM inventario");
            $stmt->execute();
            echo "<script>console.log('Ejecuta Cantidad Inventario');</script>";
            return $stmt->fetchAll();
            $stmt = null;
        }
            
            

        static public function eliminarPedidoModel($id){
            
            $stmt =Connect::connectBd()-> prepare("DELETE FROM pedido WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            return $stmt->execute();
        }
        // Ordenar Mas Recientes
        static public function ordenarCantidadPedidoAscModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY cantidad DESC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarCantidadPedidoDescModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY cantidad ASC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarValorPedidoAscModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY valorTotal ASC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarValorPedidoDescModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY valorTotal DESC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMasRecientePedidoModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY fechaIngreso ASC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarMasAntiguoPedidoModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY fechaIngreso DESC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarValorUnidadPedidoAscModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY valorUnitario ASC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }

        static public function ordenarValorUnidadPedidoDescModel(){
            $stmt = Connect::connectBd()-> prepare("SELECT pd.id,p.nombre, pd.cantidad, pd.fechaIngreso, pd.valorUnitario, pd.valorTotal from producto p left join pedido pd ON pd.producto_id = p.id ORDER BY valorUnitario DESC");
            $stmt->execute();
            
            return $stmt->fetchAll();
            $stmt = null;
        }
        */
    }
    
?>