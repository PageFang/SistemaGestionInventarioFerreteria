<?php

    require_once("../../Inventario_Ferreteria/models/proveedorModel.php");
    $funcionExecute = "";

    class ProveedorController {
        
        // Mostrar Productos 
        static public function mostrarProveedorController(){
            
            $obj = new ProveedorModel();
            $datos = $obj->mostrarProveedorModel();
           
            $tabla ='<table id="tablaProveedor" class="table table-bordered border-dark table-hover">
                        <thead>
                        <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead> 
                        <tbody>';

            $datosTabla = "";

            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla.' <tr>
                                                <td>'.$value['id'].'</td>
                                                <td>'.$value['nombre'].'</td>
                                                <td>'.$value['direccion'].'</td>
                                                <td>'.$value['telefono'].'</td>
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerProveedor('.$value['id'].')" data-bs-toggle="modal" data-bs-target="#actualizarModalProveedor">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
											    </td>
                                                <td>
                                                    <span class="btn btn-dark" onclick="eliminarProveedor('.$value['id'].')">
                                                        <li class="fas fa-trash-alt"></li>
                                                    </span>
											    </td>
                                            </tr>';
            }
           
            echo $tabla.$datosTabla.' </tbody> </table>';
        }
    }
    echo "<script>console.log('Hola');</script>";

    if(!empty($_POST['funcion'])) {
        
        $funcionExecute = $_POST['funcion'];
        
        //En función del parámetro que nos llegue ejecutamos una función u otra
        switch($funcionExecute) {
            case '1': 
                $mostrar = new ProveedorController();
                $mostrar->mostrarProveedorController();
                echo "<script>console.log('Entra Case Mostrar');</script>";
                break;
          
        }
    }
    
?>
    
