

// Funcion mostrar lista de productos
function mostrarProveedor(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaProveedor').html(r);
        }
    });
}


// Funcion Insertar Producto
function insertarProveedor(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/insertarProveedor.php",
        data:$('#formProveedor').serialize(),
        
        success:function(r){
            mostrarProveedor();
            console.log(r);
            if(r!= null){
                // Limpia el Formulario
                $('#formProveedor')[0].reset();
            
                //swal("El Proveedor ha sido Registrado", "", "success");
            }else{
                //swal("El Proveedor no ha sido Registrado", "", "error");
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