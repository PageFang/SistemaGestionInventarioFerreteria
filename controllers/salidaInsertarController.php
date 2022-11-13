<?php

    require_once("../../Inventario_Ferreteria/models/salidaModel.php");
    
    class InsertarSalida {

        public static function insertarSalidaController(){
            
            $cantidad = $_POST['cantidad'];
            $fechaSalida = $_POST['fechaSalida'];
            $valorUnitario = $_POST['valorUnitario'];
            $producto_id =$_POST['productoSalida'];
            $valorTotal = ($_POST['cantidad'] *  $_POST['valorUnitario'] );
        
            $respuestaInsertarSalida =  SalidaModel::insertarSalidaModel($cantidad,$fechaSalida,$valorUnitario,$valorTotal,$producto_id);
            echo "1";

        }
    }

    // Ejecuta el metodo Insertar
    $insertar = new InsertarSalida();
    $insertar->insertarSalidaController();

?>