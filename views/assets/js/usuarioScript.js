function iniciarSesion(){
    
    console.log("Iniciar Sesion Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/iniciarSesionController.php",
        data:$('#formInsertarProducto').serialize(),
        
        success:function(respuesta){
            //console.log("Respuesta Mostrar Producto : " + respuesta); 
            $('#tablaProducto').html(respuesta);
        }
    });

}