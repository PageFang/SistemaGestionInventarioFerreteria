<?php

require_once("../../Inventario_Ferreteria/models/pedidoModel.php");

$id=$_POST['id'];
echo "<script>console.log(ID Controlador:'{$id}');</script>";

$respuesta =  PedidoModel::eliminarPedidoModel($id);
?>