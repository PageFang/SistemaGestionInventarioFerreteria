<?php
    
    require_once("../../Inventario_Ferreteria/models/productoModel.php");

    class ActualizarProducto {

        public static function actualizarProductoController(){
            
            $id = $_POST['id'];
    
            ## VALIDAR ENTRADA MAYUSCULAS Y MINISCULAS (NOMBRE)
            $nombre = strtolower($_POST['nombreUp']);
            $nombre = ucwords($nombre);
        
            ## VALIDAR ENTRADA MAYUSCULAS Y MINISCULAS (DESCRIPCION)
            $descripcion = strtolower($_POST['descripcionUp']);
            $descripcion = ucfirst($descripcion);
        
            ## VALIDAR ENTRADA MAYUSCULAS Y MINISCULAS (MARCA)
            $marca = strtolower($_POST['marcaUp']);
            $marca = ucwords($marca);
            
            $respuestaActualizaDatos =  ProductoModel::actualizarProductoModel($id, $nombre, $descripcion,$marca);
            
            echo "1";
        }
    }

    ## EJECUTA METODO ACTUALIZAR
    $actualizar = new ActualizarProducto();
    $actualizar->actualizarProductoController();

?>