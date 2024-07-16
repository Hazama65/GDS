
//cambiar el CURP a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre_paciente');

nombreInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});
function curp2date() {
    // Obtener el valor del CURP ingresado
    var curp = document.getElementById("curp").value;

    // Extraer los primeros 6 dígitos del CURP que representan la fecha de nacimiento
    var fechaNacimiento = curp.substr(4, 6);

    // Obtener los dígitos que representan el año en la fecha de nacimiento
    var yearDigits = fechaNacimiento.substr(0, 2);

    // Calcular el año completo de nacimiento tomando en cuenta el siglo
    var year = parseInt(yearDigits);
    if (yearDigits >= 0 && yearDigits <= 21) {
        year = 2000 + year;
    } else {
        year = 1900 + year;
    }

    // Obtener el mes y el día de la fecha de nacimiento
    var month = fechaNacimiento.substr(2, 2);
    var day = fechaNacimiento.substr(4, 2);

    // Formatear la fecha de nacimiento completa
    var fechaCompleta = year + "-" + month + "-" + day;

    // Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
    document.getElementById("fecha").value = fechaCompleta;

    // Calcular la edad de manera precisa
    var fechaActual = new Date();
    var fechaNac = new Date(year, month - 1, day); // Meses en Date son 0-indexados
    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si la fecha de nacimiento aún no ha ocurrido este año
    if (
        fechaActual.getMonth() < fechaNac.getMonth() ||
        (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }
    document.getElementById("edad").value = edad;

    // Determinar el sexo y mostrarlo en el campo correspondiente

    var sexo = curp.charAt(10);
    if (sexo === "H") {
        document.getElementById("sexo").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sexo").value = "Mujer";
    }
}



function toggleFields(selectorId) {
    const checkbox = document.getElementById(selectorId);
    let sesiones_num = document.getElementById('div_sesiones_num_' + selectorId);
    let primera_vez = document.getElementById('div_primera_vez_' + selectorId);
    let subsecuente = document.getElementById('div_subsecuente_' + selectorId);
    let terapias_ambulatorias = document.getElementById('div_terapias_ambulatorias_' + selectorId);
    let terapias_hospitalizacion = document.getElementById('div_terapias_hospitalizacion_' + selectorId);


    if (checkbox.checked) {
        sesiones_num.style.display = 'block';
        primera_vez.style.display = 'block';
        subsecuente.style.display = 'block';
        terapias_ambulatorias.style.display = 'block';
        terapias_hospitalizacion.style.display = 'block';


    } else {
        sesiones_num.style.display = 'none';
        primera_vez.style.display = 'none';
        subsecuente.style.display = 'none';
        terapias_ambulatorias.style.display = 'none';
        terapias_hospitalizacion.style.display = 'none';
    }
}



