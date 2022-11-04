
// Funcion mostrar lista de productos
function mostrar(){

    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/productoController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaProducto').html(r);
        }
    });
}

// Funcion Insertar Producto
function insertarDatos(){

    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/insertarProducto.php",
        data:$('#frminsert').serialize(),
        
        success:function(r){
            mostrar();
            console.log(r); 
            if(r!= null){
                // Limpia el formulario despues de llenarlo
                $('#frminsert')[0].reset();
                swal("El Producto ha sido Registrado", "", "success");
            }else{
                swal("El Producto no ha sido Registrado", "", "error");
            }
        }
    });
    return false;
}

// Funcion Eliminar Producto
function eliminarProducto(id){
    
    swal({
        title: " ¿ Desea eliminar este producto del Inventario ? ",
        text : " Una vez eliminado el producto no podra recuperarse ",
        icon:  "warning",
        buttons : true,
        dangerMode : true,
    })

    .then((willDelete) => {
        
        $.ajax({
            type:"POST",
            url:"../../../../Inventario_Ferreteria/controllers/eliminarProducto.php",
            data:"id=" + id,
            
            success:function(r){
            console.log(r);
               if(r!=null) { //VERFICAR VALIDACION R =! NULL
                    mostrar();
                    swal("Producto Eliminado Exitosamente", "", "info");
                }else{
                    swal("Error al Eliminar", "", "error");
                }
            }
        });
    })
}

// Funcion Editar Producto
function obtenerProducto(id){
    
    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/obtenerProducto.php",
        
        success:function(r){
            r=jQuery.parseJSON(r);
            $('#id').val(r['id']);
            $('#nombreUp').val(r['nombre']);
            $('#descripcionUp').val(r['descripcion']);
            $('#marcaUp').val(r['marca']);
        }
    });
}

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
}