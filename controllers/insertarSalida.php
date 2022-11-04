<?php
    require_once("../../Inventario_Ferreteria/models/salidaModel.php");
    
    $cantidad = $_POST['cantidad'];
    $valorUnitario = $_POST['valorUnitario'];
    $valorTotal = $cantidad * $valorUnitario;
    $fechaSalida =  $_POST['fechaSalida'];
    $producto_id = $_POST['productoSalida'];

   /* $datosController = array (
        'producto_id'=> $_POST['productoSalida'],
        'cantidad'=> $_POST['cantidad'],
        'fechaSalida'=> $_POST['fechaSalida'],
        'valorUnitario'=> $_POST['valorUnitario'],
        'valorTotal'=> $valorTotal
    );
    */
    //echo "<script>console.log(ID PRODUCTO:'{$_POST['productoSalida']}');</script>";
    //echo "<script>console.log(Valor Unitario:'{$valorUnitario}');</script>";
    //echo "<script>console.log(Valor Total:'{$valorTotal}');</script>";

    $respuestaInsertar =  SalidaModel::insertarSalidaModel($cantidad,$fechaSalida, $valorUnitario, $valorTotal, $producto_id);

    echo "<script>console.log(Id :'{$respuestaInsertar}');</script>";
    $respuestaActualizar =  SalidaModel::actualizarCantidadSalidaModel($cantidad,$producto_id,$respuestaInsertar);