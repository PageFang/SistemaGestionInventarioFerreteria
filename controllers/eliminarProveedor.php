<?php

    require_once("../../Inventario_Ferreteria/models/proveedorModel.php");

    $id=$_POST['id'];

    $respuesta =  ProveedorModel::eliminarProveedorModel($id);
?>