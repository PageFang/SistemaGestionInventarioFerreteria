<?php

    require_once("../../Inventario_Ferreteria/models/ciudadModel.php");

    $id = $_POST['id'];

    echo json_encode(CiudadModel::obtenerCiudadModel($id));
    
?>