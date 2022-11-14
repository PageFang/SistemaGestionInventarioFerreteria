<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");
    
    class InsertarPedido{

        static public function insertarPedidoController(){
            
            $cantidad = $_POST['cantidad'];
            $fechaIngreso = $_POST['fechaIngreso'];
            $valorUnitario = $_POST['valorUnitario'];
            $producto_id =$_POST['productoSelect'];
            $proveedor_id = $_POST['proveedorSelect'];
            $valorTotal = ($_POST['cantidad'] *  $_POST['valorUnitario'] );
            
            $cantidadUpdate = 0;

            $respuestaInsertarPedido =  PedidoModel::insertarPedidoModel($cantidad,$fechaIngreso,$valorUnitario,$producto_id,$proveedor_id,$valorTotal);
            echo "1";
            echo "/ Producto = $producto_id";
            echo "/ Id = $respuestaInsertarPedido";

            $respuestaBuscarCantidad = PedidoModel::buscarPedidoModel($producto_id);
            $a = serialize($respuestaBuscarCantidad);
            echo "/Cantidad =  $a";

            foreach ($respuestaBuscarCantidad as $key => $value) {
                $cantidadUpdate += intval($value['cantidad']);
            }

            echo " FOR : $cantidadUpdate";
            
            $respuestaActualizarCantidadInventario = PedidoModel::actualizarCantidadInventario($producto_id,$cantidadUpdate,$respuestaInsertarPedido);
        }
    }

    // Ejecuta el metodo Insertar
    $insertar = new InsertarPedido();
    $insertar->insertarPedidoController();

?>