// Funcion mostrar lista de productos
function mostrarSalida(){

    //console.log("Entra Mostrar Js");

    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaController.php",
        data:{funcion: "1"},
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

// Funcion Insertar Producto
function insertarSalida(){

    //console.log("Entra Insertar Salida Js");

    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/insertarSalida.php",
        data:$('#formSalida').serialize(),
        success:function(r){
            console.log(r);
            mostrarSalida();
           if(r!= null){
                // Limpia el Formulario
                $('#formSalida')[0].reset();
             
                swal("Producto Registrado", ":)", "success");
            }else{
                swal("Error al Registrar", ":(", "error");
            }
        }
    });
    return false;
}


// Funcion Eliminar Producto
function eliminarSalida(id){
    console.log(id);
    swal({
        title: "¿ Desea eliminar este proveedor del Inventario ?",
        text : "Una vez eliminado no podra recuperarse",
        icon: "warning",
        buttons : true,
        dangerMode : true,
    })
    .then((willDelete) => {
        $.ajax({
            type:"POST",
            url:"../../../../Inventario_Ferreteria/controllers/eliminarSalida.php",
            data:"id=" + id,
            success:function(r){
            console.log(r);
               if(r!=null){
                mostrarSalida();
                    swal("Eliminado Exitosamente", ":)", "info");
                }else{
                    swal("Error al Eliminar", ":(", "error");
                }
            }
        });
    })
}