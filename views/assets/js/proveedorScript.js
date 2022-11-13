

// Funcion mostrar lista de productos
function mostrarProveedor(){

    console.log("Mostrar Proveedores Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorMostrarController.php",
        data:{funcion: "1"},
        
        success:function(respuesta){
            //console.log("Respuesta Mostrar Proveedor : " + respuesta);
            $('#tablaProveedor').html(respuesta);
        }
    });
}


// Funcion Insertar Producto
function insertarProveedor(){

    console.log("Insertar Proveedores Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorInsertarController.php",
        data:$('#formInsertarProveedor').serialize(),
        
        success:function(respuesta){
            
            console.log("Respuesta Insertar Proveedor : " + respuesta);
            mostrarProveedor();
            
            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formInsertarProveedor')[0].reset();
                swal({
                    title: "Proveedor Registrado",
                    text: "El Proveedor ha sido registrado con exito",
                    icon: "success",
                    button: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarProveedor')[0].reset();
                swal({
                    title: "Error al Registrar",
                    text: "El Proveedor que desea ingresar ya existe en el Inventario",
                    icon: "error",
                    button: "Aceptar",
                });
            }
        }
    });
    return false;
}


// Funcion Eliminar Producto
function eliminarProveedor(id){
    
    swal({
        title:  "¿ Desea eliminar este registro de proveedor del Inventario ?",
        text :  "Una vez eliminado el registro no podra recuperarse",
        icon:   "warning",
        buttons : true,
        dangerMode : true,
    })

    .then((willDelete) => {
        
        $.ajax({
            type:"POST",
            url:"../../../../Inventario_Ferreteria/controllers/eliminarProveedor.php",
            data:"id=" + id,
            success:function(r){
                console.log(r);
                if(r!=null){
                mostrarProveedor();
                swal("Proveedor Eliminado Exitosamente", "", "info");
            }else{
                    swal("Error al Eliminar", ":(", "error");
                }
            }
        });

    })
}


// Funcion Editar Producto
function obtenerProveedor(id){
    console.log("A");
    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/obtenerProveedor.php",
        
        success:function(r){

            r=jQuery.parseJSON(r);
            $('#idUp').val(r['id']);
            $('#nombreUp').val(r['nombre']);
            $('#direccionUp').val(r['direccion']);
            $('#correoElectronicoUp').val(r['correoElectronico']);
            $('#telefonoUp').val(r['telefono']);
        }
    });
}
/*
function actualizarProducto(){
    
    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/actualizarProducto.php",
        data:$('#frminsertUp').serialize(),
        
        success:function(r){
            mostrar();
            if(r!= null){
                swal("El Producto ha sido Actualizado", "", "success");
            }else{
                swal("El Producto no ha sido Actualizado", "", "error");
            }
        }
    });
    return false;
}*/



function ordenarNombreProveedorAsc(){
    console.log("Hola Asc");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorOrdenarController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaProveedor').html(r);
        }
    });
}


function ordenarNombreProveedorDesc(){
    console.log("Hola Asc");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorOrdenarController.php",
        data:{funcion: "2"},
        
        success:function(r){
            $('#tablaProveedor').html(r);
        }
    });
}


function ordenarMasRecienteProveedor(){
    console.log("Hola Asc");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorOrdenarController.php",
        data:{funcion: "3"},
        
        success:function(r){
            $('#tablaProveedor').html(r);
        }
    });
}



function ordenarMasAntiguoProveedor(){
    console.log("Hola Asc");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorOrdenarController.php",
        data:{funcion: "4"},
        
        success:function(r){
            $('#tablaProveedor').html(r);
        }
    });
}
