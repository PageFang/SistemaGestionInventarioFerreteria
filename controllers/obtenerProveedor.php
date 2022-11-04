<?php

require_once("../../Inventario_Ferreteria/models/proveedorModel.php");

$id = $_POST['id'];

echo json_encode(ProveedorModel::obtenerProveedorModel($id));
?>