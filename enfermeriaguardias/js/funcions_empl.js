const datos_1 = () => {
    let numeroEmpleado = document.getElementById('numeroempleado_1').value;
    $.ajax({
        type: 'GET',
        url: 'php/controllers/datos_personal.controller.php',
        data: {
            numero_empleado: numeroEmpleado
        },
        dataType: 'json',
        success: function (response) {
            if (response.error) {
                $('#enlace_numeroempleado').val('');
                $('#nivel_academico').val('');
                $('#codigopuesto').val('');
                $('#puesto').val('');
                console.error('Error: ' + response.error);
            } else {
                $('#enlace_numeroempleado').val(response.nombreEmpleado);
                $('#nivel_academico').val(response.nivAcademico);
                $('#codigopuesto').val(response.codigoPuesto);
                $('#puesto').val(response.puesto);
            }
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener los datos del empleado:', error);
        }
    });
}


const datos_2 = () => {
    let numeroEmpleado = document.getElementById('numeroempleado_suplencia').value;
    $.ajax({
        type: 'GET',
        url: 'php/controllers/datos_personal.controller.php',
        data: {
            numero_empleado: numeroEmpleado
        },
        dataType: 'json',
        success: function (response) {
            if (response.error) {
                $('#nombre_suplencia').val('');
                $('#nivel_academico_suplencia').val('');
                $('#codigopuesto_suplencia').val('');
                $('#puesto_suplencia').val('');
                console.error('Error: ' + response.error);
            } else {
                $('#nombre_suplencia').val(response.nombreEmpleado);
                $('#nivel_academico_suplencia').val(response.nivAcademico);
                $('#codigopuesto_suplencia').val(response.codigoPuesto);
                $('#puesto_suplencia').val(response.puesto);
            }
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener los datos del empleado:', error);
        }
    });
}

// Función para sumar un día a una fecha
const sumarUnDia = (fecha) => {
    var nuevaFecha = new Date(fecha);
    nuevaFecha.setDate(nuevaFecha.getDate() + 1);
    return nuevaFecha.toISOString().slice(0, 10);
}

const fecha_limite = () => {
    // Obtener el campo de fechaInicio
    var fechaInicio = document.getElementById('fechaInicio');

    // Función que se ejecutará cada vez que se introduce o cambia el valor en el campo de fechaInicio
    fechaInicio.addEventListener('input', function () {
        // Obtener el valor del campo de fechaInicio
        var fechaInicioValue = fechaInicio.value;

        // Lógica para determinar el valor del campo de fechaFin según el valor de turno
        let turno = document.getElementById('turno').value;
        let fechaFin = document.getElementById('fechaFin');

        if (turno === 'Nocturno') {
            // Sumar un día al valor de fechaInicioValue
            var nuevaFecha = sumarUnDia(fechaInicioValue);
            fechaFin.value = nuevaFecha;
        } else {
            fechaFin.value = fechaInicioValue;
        }
    });
}

fecha_limite();
