<?php
    require_once("../../Inventario_Ferreteria/models/salidaModel.php");
    
    $cantidad = $_POST['cantidad'];
    $valorUnitario = $_POST['valorUnitario'];
    $valorTotal = $cantidad * $valorUnitario;
    $fechaSalida =  $_POST['fechaSalida'];
    $producto_id = $_POST['productoSalida'];

    $respuestaInsertar =  SalidaModel::insertarSalidaModel($cantidad,$fechaSalida, $valorUnitario, $valorTotal, $producto_id);

?>