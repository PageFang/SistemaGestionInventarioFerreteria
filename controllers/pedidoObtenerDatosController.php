<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");

    class ObtenerDatosPedido {

        public static function obtenerDatosPedidoController(){

            $id = $_POST['id'];
            echo json_encode(PedidoModel::obtenerDatosPedidoModel($id));

        }
    }

    // Ejecuta el metodo Insertar
    $obtener = new ObtenerDatosPedido();
    $obtener->obtenerDatosPedidoController();

?>