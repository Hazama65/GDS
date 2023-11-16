$(document).ready(function(){
    // Inicializa el contador
    var contadorFarmacos = 0;

    // Cuando se selecciona un estado en cualquier elemento con la clase "estadoSelect"
    $('.estadoSelect').change(function(){
        var estadoId = $(this).val(); // Obtiene el valor seleccionado

        // Suma o resta según el valor seleccionado
        contadorFarmacos += (estadoId === 'Negado') ? -1 : 1;

        // Asigna el valor al campo numérico
        $('#Farmacos_utilizados').val(contadorFarmacos);
    });
});
