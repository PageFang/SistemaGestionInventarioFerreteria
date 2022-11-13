<?php

    require_once("../../Inventario_Ferreteria/models/ciudadModel.php");

    class EliminarCiudad {

        static public function eliminarCiudadController(){

            $id=$_POST['id'];

            $respuesta =  CiudadModel::eliminarCiudadModel($id);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $eliminar = new EliminarCiudad();
    $eliminar->eliminarCiudadController();
?>