$(document).ready(function() {
    
    //Aqui seleccionamos el dato a modificar
    $('.modificar').on('click', function() {
        var modificar = $(this).attr('id');
        
        //alert('El id es '+ modificar);

        $.ajax({
            url: 'modifica.php',
            method: 'post',
            dataType: 'json',
            data: {modificar:modificar},
            success: function(data) {
                console.log(data.id);
                //$('#res').html(data.nombre);
                $('#nombre').val(data.nombre);
                $('#apellido').val(data.apellido);
                $('#edad').val(data.edad);
                $('#modal').modal('show');
            }
        });
    });
    

    $('#formulario').on('submit', function() {
        alert('sale');
    });
});