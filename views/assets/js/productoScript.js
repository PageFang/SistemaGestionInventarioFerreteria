

// FUNCION MOSTRAR LISTA DE PRODUCTOS
function mostrarProducto(){
    
    console.log("Mostrar Productos Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoMostrarController.php",
        
        success:function(respuesta){
            //console.log("Respuesta Mostrar Producto : " + respuesta); 
            $('#tablaProducto').html(respuesta);
        }
    });
}


// FUNCION INSERTAR PRODUCTO
function insertarProducto(){

    console.log("Ingresar Producto Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoInsertarController.php",
        data:$('#formInsertarProducto').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Insertar Producto : " + respuesta);
            mostrarProducto();

            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formInsertarProducto')[0].reset();
                Swal.fire({
                    title: "Producto Registrado",
                    text: "El Producto ha sido registrado con exito",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarProducto')[0].reset();
                Swal.fire({
                    title: "Error al Registrar",
                    text: "El producto que desea ingresar ya existe en el Inventario",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }
        }
    });
    return false;
}


// FUNCION ELIMINAR PRODUCTO
function eliminarProducto(id){
    
    Swal.fire({
        title: " ¿ Desea eliminar este producto del Inventario ? ",
        text : " Una vez eliminado el producto no podra recuperarse ",
        icon:  "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
    })

    .then(resultado  => {
        
        if(resultado.value){
            
            $.ajax({
                
                type: "POST",
                url: "../../../../Inventario_Ferreteria/controllers/productoEliminarController.php",
                data:"id=" + id,
                
                success:function(respuesta){
                    console.log("Respuesta Eliminar Producto : " + respuesta);
                    mostrarProducto();
    
                    if(respuesta == 1) {
                        
                        Swal.fire({
                            title: "Producto Eliminado",
                            text: "El Producto ha sido eliminado con exito",
                            icon: "success",
                            confirmButtonText: "Aceptar",
                        });
    
                    } else if(respuesta == 2) {
                        
                        Swal.fire({
                            title: "Error al Eliminar",
                            text: "No se ha podido Eliminar el Producto del Inventario",
                            icon: "error",
                            confirmButtonText: "Aceptar",
                        });
                    }
                }
            });
    
        } else {

        }
    });
}


// FUNCION OBTENER DATOS PRODUCTO
function obtenerDatosProducto(id){
    
    console.log("Obtener Datos Producto Js");

    $.ajax({
        
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/productoObtenerDatosController.php",
        
        success:function(respuesta){
            console.log("Respuesta Obtener Datos Producto : " + respuesta);

            respuesta=jQuery.parseJSON(respuesta);
            $('#id').val(respuesta['id']);
            $('#nombreUp').val(respuesta['nombre']);
            $('#descripcionUp').val(respuesta['descripcion']);
            $('#marcaUp').val(respuesta['marca']);
        }
    });
}


// FUNCION ACTUALIZAR PRODUCTO
function actualizarProducto(){
    
    console.log("Actualizar Datos Producto Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoActualizarController.php",
        data:$('#formUptadeProducto').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Actualizar Datos Producto : " + respuesta);
            mostrarProducto();

            if(respuesta == 1) {
                        
                Swal.fire({
                    title: "Producto Actualizado",
                    text: "Se han actualizdo los Datos del Producto",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                Swal.fire({
                    title: "Error al Actualizar",
                    text: "No se han podido actualizar la informacion del producto",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }

        }
    });
    return false;
}


// FUNCION ORDENAR PRODUCTO A-Z
function ordenarNombreProductoAsc(){
    
    console.log("Ordenar Producto Asc Js");
    
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoOrdenarController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaProducto').html(r);
        }
    });
}


// FUNCION ORDENAR PRODUCTO Z-A
function ordenarNombreProductoDesc(){
    
    console.log("Ordenar Producto Desc Js");
    
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoOrdenarController.php",
        data:{funcion: "2"},
        
        success:function(r){
            $('#tablaProducto').html(r);
        }
    });
}


// FUNCION ORDENAR PRODUCTO RECIENTES
function ordenarMasRecientesProducto(){
    
    console.log("Ordenar Producto Mas Recientes Js");
    
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoOrdenarController.php",
        data:{funcion: "3"},
        
        success:function(r){
            $('#tablaProducto').html(r);
        }
    });
}


// FUNCION ORDENAR PRODUCTO ANTIGUOS
function ordenarMasAntiguosProducto(){
    
    console.log("Ordenar Producto Mas Antiguos Js");
    
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoOrdenarController.php",
        data:{funcion: "4"},
        
        success:function(r){
            $('#tablaProducto').html(r);
        }
    });
}
