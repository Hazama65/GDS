//cambiar el CURP a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});

const campos = ['nombre_paciente', 'apellidos_paterno', 'apellidos_materno'];

campos.forEach(function (campo) {
    const input = document.getElementById(campo);
    if (input) {
        input.addEventListener('blur', function () {
            this.value = this.value.toUpperCase();
        });
    }
});

document.getElementById("curp").addEventListener("input", function () {
    curp2date();
});

function curp2date() {
    // Obtener el valor del CURP ingresado
    var curp = document.getElementById("curp").value;

    // Verificar que el CURP tenga la longitud mínima necesaria para evitar errores
    if (curp.length < 18) {
        // Puedes limpiar los campos si el CURP es demasiado corto
        document.getElementById("fecha").value = "";
        document.getElementById("edad").value = "";
        document.getElementById("sexo").value = "";
        document.getElementById("mujer").style.display = "none";
        return;
    }

    // Extraer los primeros 6 dígitos del CURP que representan la fecha de nacimiento
    var fechaNacimiento = curp.substr(4, 6);

    // Obtener los dígitos que representan el año en la fecha de nacimiento
    var yearDigits = parseInt(fechaNacimiento.substr(0, 2), 10);

    // Calcular el año completo de nacimiento tomando en cuenta el siglo
    var year = (yearDigits >= 0 && yearDigits <= 21) ? 2000 + yearDigits : 1900 + yearDigits;

    // Obtener el mes y el día de la fecha de nacimiento
    var month = parseInt(fechaNacimiento.substr(2, 2), 10);
    var day = parseInt(fechaNacimiento.substr(4, 2), 10);

    // Formatear la fecha de nacimiento completa
    var fechaCompleta = year + "-" + String(month).padStart(2, '0') + "-" + String(day).padStart(2, '0');

    // Actualizar el campo "fecha" con la fecha de nacimiento
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
    var sexo = curp.charAt(10).toUpperCase();
    var sexoCompleto = (sexo === "H") ? "Hombre" : (sexo === "M") ? "Mujer" : "Desconocido";
    document.getElementById("sexo").value = sexoCompleto;

    // Mostrar el div con ID "mujer" si el sexo es femenino
    var mujerDiv = document.getElementById("mujer");
    if (sexo === "M") {
        mujerDiv.style.display = "block";
    } else {
        mujerDiv.style.display = "none";
    }
}



document.getElementById("informante").addEventListener("change", function () {
    let informanteSeleccionado = this.value;

    // Obtener los divs que deben mostrarse u ocultarse
    let informanteInfo = document.getElementById("informante_info");
    let datosPacienteFam = document.getElementById("datos_pacientefam");

    // Ocultar ambos divs inicialmente y restablecer sus valores
    informanteInfo.style.display = "none";
    datosPacienteFam.style.display = "none";
    resetFields(informanteInfo);
    resetFields(datosPacienteFam);

    // Mostrar el div correspondiente según la selección
    if (informanteSeleccionado === "Profesional De La Salud") {
        informanteInfo.style.display = "block";
    } else if (informanteSeleccionado === "Paciente o Familiar") {
        datosPacienteFam.style.display = "block";
    }
});

// Función para restablecer los valores de los campos dentro de un div
function resetFields(container) {
    var inputs = container.querySelectorAll("input, select, textarea");
    inputs.forEach(function (input) {
        if (input.type === "checkbox" || input.type === "radio") {
            input.checked = false;
        } else if (input.tagName.toLowerCase() === "select") {
            input.selectedIndex = 0;
        } else {
            input.value = "";
        }
    });
}


window.onload = function () {
    var today = new Date();
    var yyyy = today.getFullYear();
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // Los meses son 0-indexados en JavaScript
    var dd = String(today.getDate()).padStart(2, '0');

    var fechaActual = yyyy + '-' + mm + '-' + dd;
    document.getElementById("fecha_reporte").value = fechaActual;
};