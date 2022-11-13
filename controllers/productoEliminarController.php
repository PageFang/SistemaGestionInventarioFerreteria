<?php

    require_once("../../Inventario_Ferreteria/models/productoModel.php");

    class EliminarProducto {

        static public function eliminarProductoController(){

            $id=$_POST['id'];

            $respuesta =  ProductoModel::eliminarProductoModel($id);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $eliminar = new EliminarProducto();
    $eliminar->eliminarProductoController();
?>