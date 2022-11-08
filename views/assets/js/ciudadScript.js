
// Funcion Mostrar Lista Productos
function mostrarCiudad(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/ciudadController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaCiudad').html(r);
        }
    });
}

function insertarCiudad(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/insertarCiudad.php",
        data:$('#formInsertarCiudad').serialize(),
        
        success:function(r){
            mostrarCiudad();
            
            console.log("Respuesta Insertar : " + r); 
            if(r != null) { // VALIDAR
                // Limpia el formulario despues de llenarlo
                $('#formInsertarCiudad')[0].reset();
               // swal("El Producto ha sido Registrado", "", "success");
            }else{
                // swal("El Producto no ha sido Registrado", "", "error");
            }
        }
    });
    return false;
}

// Funcion Editar Producto
function obtenerCiudad(id){
    
    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/obtenerCiudad.php",
        
        success:function(r){
            r=jQuery.parseJSON(r);
            $('#idUp').val(r['id']);
            $('#nombreUp').val(r['nombre']);
        }
    });
}

function actualizarCiudad(){
    
    console.log("A");
    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/actualizarProducto.php",
        data:$('#formUptadeCiudad').serialize(),
        
        success:function(r){
            mostrarCiudad();
            if(r!= null){
                //swal("El Producto ha sido Actualizado", "", "success");
            }else{
                //swal("El Producto no ha sido Actualizado", "", "error");
            }
        }
    });
    return false;
}