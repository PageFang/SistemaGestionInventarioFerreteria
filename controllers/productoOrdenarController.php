<?php

    require_once("../../Inventario_Ferreteria/models/productoModel.php");
    $funcionExecute = "";

    class OrdenarProductoController {
        
        // Funcion Mostrar Productos 
        static public function ordenarNombreProductoAsc(){
            
            $obj = new ProductoModel();
            $datos = $obj->ordenarNombreProductoAscModel();
            
            $tabla ='<table id="tablaProducto" class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Marca </th>
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
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerProducto('.$value['id'].')"  data-bs-toggle="modal" data-bs-target="#actualizarModalProducto">
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

        // Funcion Mostrar Productos 
        static public function ordenarNombreProductoDesc(){
            
            $obj = new ProductoModel();
            $datos = $obj->ordenarNombreProductoDescModel();
            
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
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerProducto('.$value['id'].')"  data-bs-toggle="modal" data-bs-target="#actualizarModalProducto">
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


        // Funcion Mostrar Productos 
        static public function ordenarMasRecientesProducto(){
            
            $obj = new ProductoModel();
            $datos = $obj->ordenarMasRecienteProductoModel();
            
            $tabla ='<table id="tablaProducto" class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Marca </th>
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
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerProducto('.$value['id'].')"  data-bs-toggle="modal" data-bs-target="#actualizarModalProducto">
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

        static public function ordenarMasAntiguoProducto(){
            
            $obj = new ProductoModel();
            $datos = $obj->ordenarMasAntiguoProductoModel();
            
            $tabla ='<table id="tablaProducto" class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Marca </th>
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
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerProducto('.$value['id'].')"  data-bs-toggle="modal" data-bs-target="#actualizarModalProducto">
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
                $mostrar = new OrdenarProductoController();
                $mostrar->ordenarNombreProductoAsc();
                break;

            case '2': 
                $mostrar = new OrdenarProductoController();
                $mostrar->ordenarNombreProductoDesc();
                break;
        
            case '3': 
                $mostrar = new OrdenarProductoController();
                $mostrar->ordenarMasRecientesProducto();
                break;

            case '4': 
                $mostrar = new OrdenarProductoController();
                $mostrar->ordenarMasAntiguoProducto();
                break;
        }
    } 
?>
