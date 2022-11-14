<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");


    class EliminarProducto {

        static public function eliminarProductoController(){

            $id=$_POST['id'];

            $respuesta =  PedidoModel::eliminarPedidoModel($id);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $eliminar = new EliminarProducto();
    $eliminar->eliminarProductoController();
?>