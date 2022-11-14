<?php

    require_once("../../Inventario_Ferreteria/models/proveedorModel.php");

    class EliminarProveedor {

        static public function eliminarProveedorController(){

            $id=$_POST['id'];

            $respuestaEliminar =  ProveedorModel::eliminarProveedorModel($id);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $eliminar = new EliminarProveedor();
    $eliminar->eliminarProveedorController();
?>