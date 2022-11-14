

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
                Swal.fire({
                    title: "Proveedor Registrado",
                    text: "El Proveedor ha sido registrado con exito",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarProveedor')[0].reset();
                Swal.fire({
                    title: "Error al Registrar",
                    text: "El proveedor que desea ingresar ya existe en el Inventario",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }
        }
    });
    return false;
}


// Funcion Eliminar Producto
function eliminarProveedor(id){

    console.log("Eliminar Proveedor Js");

    Swal.fire({
        title: "¿ Desea eliminar este Proveedor del Inventario ?",
        text : "Una vez eliminado el Proveedor no podra recuperarse",
        icon:  "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
    })

    .then(resultado  => {
        
        if(resultado.value){
            
            $.ajax({
                
                type: "POST",
                url: "../../../../Inventario_Ferreteria/controllers/proveedorEliminarController.php",
                data:"id=" + id,
                
                success:function(respuesta){
                    console.log("Respuesta Eliminar Proveedor : " + respuesta);
                    mostrarProveedor()
    
                    if(respuesta == 1) {
                        
                        Swal.fire({
                            title: "Proveedor Eliminado",
                            text: "El Proveedor ha sido eliminado con exito",
                            icon: "success",
                            confirmButtonText: "Aceptar",
                        });
    
                    } else if(respuesta == 2) {
                        
                        Swal.fire({
                            title: "Error al Eliminar",
                            text: "No se ha podido Eliminar el Proveedor del Inventario",
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


// Funcion Obtener  Proveedor
function obtenerDatosProveedor(id){

    console.log("Obtener Datos Proveedor Js");

    $.ajax({

        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/proveedorObtenerDatosController.php",
        
        success:function(respuesta){

            respuesta=jQuery.parseJSON(respuesta);
            $('#idUp').val(respuesta['id']);
            $('#nombreUp').val(respuesta['nombre']);
            $('#direccionUp').val(respuesta['direccion']);
            $('#correoElectronicoUp').val(respuesta['correoElectronico']);
            $('#telefonoUp').val(respuesta['telefono']);
        }
    });
}


// Funcion Actualizar Proveedor
function actualizarProveedor(){
    
    console.log("Actualizar Datos Proveedor Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/proveedorActualizarController.php",
        data:$('#formUpdateProveedor').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Actualizar Datos Proveedor : " + respuesta);
            mostrarProveedor();

            if(respuesta == 1) {
                        
                Swal.fire({
                    title: "Proveedor Actualizado",
                    text: "Se han actualizdo los Datos del Proveedor",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                Swal.fire({
                    title: "Error al Actualizar",
                    text: "No se ha podido actualizar la informacion del proveedor",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }

        }
    });
    return false;
}



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
