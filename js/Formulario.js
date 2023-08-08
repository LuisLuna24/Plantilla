jQuery(document).on('submit','#Formulario', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: 'php/Validar.php',
        type: 'POST',
        dataType: 'json',
        data: ,
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        conso
    })
});




/*$("#enviar").click(function(){
    $.ajax({
        url: "../php/Validar.php",
        type: "post",
        data: $("#Formulario").serialize(),
        success: function(resultado){
            $("#resultado").html(resultado);
        }
    });
});*/