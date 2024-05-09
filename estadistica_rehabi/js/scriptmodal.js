
//cambiar el CURP a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function() {
this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre_paciente');

nombreInput.addEventListener('blur', function() {
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


// FECHA
document.addEventListener("DOMContentLoaded", function () {
    // Obtener la fecha actual
    var fechaActual = new Date();

    // Obtener el elemento de entrada de fecha
    var fechaRegistroInput = document.getElementById("fecha_registro");

    // Formatear la fecha actual como una cadena YYYY-MM-DD
    var fechaFormateada = fechaActual.toISOString().split('T')[0];

    // Establecer la fecha formateada como el valor predeterminado en el campo de entrada
    fechaRegistroInput.value = fechaFormateada;
});


// TIPO DE CONSULTA

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectTipoConsulta = document.getElementById("tipo_consulta");
    var divNumSesiones = document.getElementById("num_sesiones");

    // Agregar un evento de cambio al elemento select
    selectTipoConsulta.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectTipoConsulta.value == "Subsecuente") {
            // Si se selecciona "Subsecuente", mostrar el div correspondiente
            divNumSesiones.style.display = "block";
        } else {
            // Si no se selecciona "Subsecuente", ocultar el div
            divNumSesiones.style.display = "none";
        }
    });
});




