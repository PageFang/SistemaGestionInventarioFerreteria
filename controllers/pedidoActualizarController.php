<?php
    
    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");

    class ActualizarPedido {

        public static function actualizarPedidoController(){

            $id = $_POST['idUp'];
            $cantidad = $_POST['cantidadUp'];
            $fechaIngreso = $_POST['fechaIngresoUp'];
            $valorUnitario = $_POST['valorUnitarioUp'];
            $valorTotal = ($_POST['cantidadUp'] *  $_POST['valorUnitarioUp'] );
        
            $respuestaActualizarPedido =  PedidoModel::actualizarPedidoModel($id,$cantidad,$fechaIngreso,$valorUnitario,$valorTotal);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $actualizar = new ActualizarPedido();
    $actualizar->actualizarPedidoController();

?>