<?php

require_once("../../Inventario_Ferreteria/models/proveedorModel.php");

$id=$_POST['id'];
echo "<script>console.log(ID Controlador:'{$id}');</script>";

$respuesta =  ProveedorModel::eliminarProveedorModel($id);
?>