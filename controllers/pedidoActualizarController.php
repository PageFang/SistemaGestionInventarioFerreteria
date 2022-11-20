<?php
    
    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");

    class ActualizarPedido {

        public static function actualizarPedidoController(){

            $id = $_POST['idUp'];
            $producto_id =$_POST['productoSelectUp'];
            $cantidad = $_POST['cantidadUp'];
            $fechaIngreso = $_POST['fechaIngresoUp'];
            $valorUnitario = $_POST['valorUnitarioUp'];
            $valorTotal = ($_POST['cantidadUp'] *  $_POST['valorUnitarioUp'] );
            
            $cantidadStock = 0;
            
            ## ACTUALIZA INFORMACION EN PEDIDO
            $respuestaActualizarPedido =  PedidoModel::actualizarPedidoModel($id,$cantidad,$fechaIngreso,$valorUnitario,$valorTotal);
            echo "1";

            ## ACTUALIZA EL VALOR DE LA CANTIDAD EN INVENTARIO
            $respuestaActualizarCantidadInventario = PedidoModel::actualizarUpdateCantidadInventario($producto_id,$cantidad,$id);
            
            ## BUSCA LA CANTIDAD DE UN PRODUCTO EN INVENTARIO
            $respuestaBuscarCantidad = PedidoModel::buscarPedidoModel($producto_id);

            foreach ($respuestaBuscarCantidad as $key => $value) {
                ## $cantidadStock += intval($value['cantidad']); ACUMULA
                ## $cantidadStock += intval($value['cantidad']); TOMA EL ULTIMO VALOR
                $cantidadStock += intval($value['cantidad']);
                echo " FOR : $cantidadStock";
            }
            
            ##$cantidadUpdate = $cantidadStock+$cantidad; ACTUALIZA SI SOLO HAY UN PEDIDO Y EN LOS PEDIDOS ANTERIORES MENOS EN LA CANTIDAD ACTUAL

            
        }
    }

    ## EJECUTA EL METODO ACTUALIZAR
    $actualizar = new ActualizarPedido();
    $actualizar->actualizarPedidoController();

?>