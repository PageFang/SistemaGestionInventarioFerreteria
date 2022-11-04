<?php

    require_once("../../Inventario_Ferreteria/models/productoModel.php");

    $id=$_POST['id'];

    $respuesta =  ProductoModel::eliminarProductoModel($id);
?>