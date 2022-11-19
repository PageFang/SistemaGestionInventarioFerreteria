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
            
            $cantidadStock = 0;

            $respuestaInsertarPedido =  PedidoModel::insertarPedidoModel($cantidad,$fechaIngreso,$valorUnitario,$producto_id,$proveedor_id,$valorTotal);
            echo "/ Producto = $producto_id";
            echo "/ Id = $respuestaInsertarPedido";

            $respuestaBuscarCantidad = PedidoModel::buscarPedidoModel($producto_id);
            $a = serialize($respuestaBuscarCantidad);
            //echo "/Cantidad =  $a";

            foreach ($respuestaBuscarCantidad as $key => $value) {
                $cantidadStock = intval($value['cantidad']);
                echo " FOR : $cantidadStock";
            }
            $cantidadUpdate = $cantidadStock+$cantidad;
            //echo " TOTAL FOR : $cantidadStock";
            
            $respuestaActualizarCantidadInventario = PedidoModel::actualizarCantidadInventario($producto_id,$cantidadUpdate,$respuestaInsertarPedido);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $insertar = new InsertarPedido();
    $insertar->insertarPedidoController();

?>