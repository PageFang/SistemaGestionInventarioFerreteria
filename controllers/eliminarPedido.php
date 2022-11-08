<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");

    $id=$_POST['id'];

    $respuesta =  PedidoModel::eliminarPedidoModel($id);
?>