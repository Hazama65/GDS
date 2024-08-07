document.getElementById('Tipo_clave').addEventListener('change', function () {
    const input = document.getElementById('clave_HRAEI');
    const selectedValue = this.value;

    switch (selectedValue) {
        case 'HRAEI':
            input.value = 'HRAEI-MD';
            break;
        case 'GC':
            input.value = 'GC-HRAEI-MD';
            break;
        case 'SADMI':
            input.value = 'SADMI-HRAEI-MD';
            break;
        case 'CENAPRECE':
            input.value = 'CENAPRECE-HRAEI-MED';
            break;
        default:
            input.value = '';
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el campo de entrada de fecha
    let fechaExistencia = document.getElementById('fecha_existencia');

    // Obtiene la fecha actual
    let today = new Date();

    // Formatea la fecha como YYYY-MM-DD
    let year = today.getFullYear();
    let month = String(today.getMonth() + 1).padStart(2, '0'); // Añade ceros delante si es necesario
    let day = String(today.getDate()).padStart(2, '0');
    let formattedDate = `${year}-${month}-${day}`;

    // Asigna la fecha formateada al campo de entrada
    fechaExistencia.value = formattedDate;
});

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene los elementos de entrada
    let numExistencia = document.getElementById('num_existencia');
    let numCPM = document.getElementById('num_cpm');
    let mesesExistencia = document.getElementById('Meses_existencia');

    // Función para calcular y mostrar los meses de existencia
    function calcularMesesExistencia() {
        let existencia = parseFloat(numExistencia.value);
        let cpm = parseFloat(numCPM.value);

        // Verifica que ambos valores sean válidos y que cpm no sea cero
        if (!isNaN(existencia) && !isNaN(cpm) && cpm !== 0) {
            let resultado = existencia / cpm;
            mesesExistencia.value = Math.round(resultado); // Redondea el resultado al número entero más cercano
        } else {
            mesesExistencia.value = ''; // Limpia el campo si no hay suficientes datos
        }
    }

    // Escucha los cambios en los campos de entrada
    numExistencia.addEventListener('input', calcularMesesExistencia);
    numCPM.addEventListener('input', calcularMesesExistencia);
});