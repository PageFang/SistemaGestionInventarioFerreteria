<?php
    
    require_once("../../Inventario_Ferreteria/models/proveedorModel.php");

    class ActualizarPedido {

        public static function actualizarProveedorController(){
            
            $id = $_POST['idUp'];
    
            // Validar Entrada Mayusculas y Minusculas (Nombre)
            $nombre = strtolower($_POST['nombreUp']);
            $nombre = ucwords($nombre);
        
            // Validar Entrada Mayusculas y Minusculas (Descripcion)
            $direccion = strtolower($_POST['direccionUp']);
            $direccion = ucwords($direccion);

            $correoElectronico =$_POST['correoElectronicoUp'];

            $telefono =$_POST['telefonoUp'];
            echo"$telefono";  
        
            $respuestaActualizaDatos =  ProveedorModel::actualizarProveedorModel($id,$nombre,$direccion,$correoElectronico,$telefono);
            
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $actualizar = new ActualizarPedido();
    $actualizar->actualizarProveedorController();

?>