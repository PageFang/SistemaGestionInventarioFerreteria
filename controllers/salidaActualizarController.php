<?php
    
    require_once("../../Inventario_Ferreteria/models/salidaModel.php");

    class ActualizarSalida {

        public static function actualizarSalidaController(){

            $id = $_POST['idUp'];
            $cantidad = $_POST['cantidadUp'];
            $fechaSalida = $_POST['fechaSalidaUp'];
            $valorUnitario = $_POST['valorUnitarioUp'];
            $valorTotal = ($_POST['cantidadUp'] *  $_POST['valorUnitarioUp'] );
        
            $respuestaActualizarSalida =  SalidaModel::actualizarSalidaModel($id,$cantidad,$fechaSalida,$valorUnitario,$valorTotal);
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $actualizar = new ActualizarSalida();
    $actualizar->actualizarSalidaController();

?>