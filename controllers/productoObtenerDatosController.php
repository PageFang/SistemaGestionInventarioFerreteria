<?php

    require_once("../../Inventario_Ferreteria/models/productoModel.php");


    class ObtenerDatos {

        public static function obtenerDatosProductoController(){

            $id = $_POST['id'];
            echo json_encode(ProductoModel::obtenerDatosProductoModel($id));

        }
    }

    ## EJECUTA METODO OBTENER DATOS PRODUCTO
    $obtener = new ObtenerDatos();
    $obtener->obtenerDatosProductoController();

?>