<?php

    require_once("../../Inventario_Ferreteria/models/salidaModel.php");
     
    class InsertarSalida {

        public static function insertarSalidaController(){
            
            $cantidad = $_POST['cantidad'];
            $fechaSalida = $_POST['fechaSalida'];
            $valorUnitario = $_POST['valorUnitario'];
            $producto_id =$_POST['productoSalida'];
            $valorTotal = ($_POST['cantidad'] *  $_POST['valorUnitario'] );
            
            $cantidadStock = 0;

            $respuestaBuscarCantidad = SalidaModel::buscarCantidadInventario($producto_id);
            
            foreach ($respuestaBuscarCantidad as $key => $value) {
                $cantidadStock = intval($value['cantidad']);
            }
            
            if($cantidadStock >= $cantidad){
                $respuestaInsertarSalida =  SalidaModel::insertarSalidaModel($cantidad,$fechaSalida,$valorUnitario,$valorTotal,$producto_id);
                echo "1";
            }elseif ($cantidadStock < $cantidad) {
                echo "2";
            }
        }
    }

    // Ejecuta el metodo Insertar
    $insertar = new InsertarSalida();
    $insertar->insertarSalidaController();

?>