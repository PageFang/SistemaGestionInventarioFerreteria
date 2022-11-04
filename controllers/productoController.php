<?php

    require_once("../../Inventario_Ferreteria/models/productoModel.php");
    $funcionExecute = "";

    class ProductoController {
        
        // Funcion Mostrar Productos 
        static public function mostrarDatosController(){
            
            $obj = new ProductoModel();
            $datos = $obj->mostrarProductoModel();
            
            $tabla ='<table id="tablaProducto" class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Marca </th>
                                <th>Valor Unitario </th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead> 
                        <tbody>';

            $datosTabla = "";

            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla.' <tr>
                                                <td>'.$value['id'].'</td>
                                                <td>'.$value['nombre'].'</td>
                                                <td>'.$value['descripcion'].'</td>
                                                <td>'.$value['marca'].'</td>
                                                <td>'.$value['valorUnitario'].'</td>
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerProducto('.$value['id'].')"  data-bs-toggle="modal" data-bs-target="#actualizarModal">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </span>
											    </td>
                                                <td>
                                                    <span class="btn btn-dark" onclick="eliminarProducto('.$value['id'].')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </span>
											    </td>
                                            </tr>';
            }
            echo $tabla.$datosTabla.' </tbody> </table>';
        }
    }
    
    if(!empty($_POST['funcion'])) {
        
        $funcionExecute = $_POST['funcion'];
        
        switch($funcionExecute) {
            case '1': 
                $mostrar = new ProductoController();
                $mostrar->mostrarDatosController();
                break;
        }
    } 
?>

