<?php

    require_once("../../Inventario_Ferreteria/models/salidaModel.php");

    $id=$_POST['id'];
    echo "<script>console.log('Id Eliminar Salida : {$id}');</script>";

    $respuesta =  SalidaModel::eliminarSalidaModel($id);
?>