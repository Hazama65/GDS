
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


document.addEventListener("DOMContentLoaded", function () {
    // Obtener la fecha actual
    var fechaActual = new Date();

    // Obtener el elemento de entrada de fecha
    var fechaRegistroInput = document.getElementById("fecha_registro");

    // Formatear la fecha actual como una cadena YYYY-MM-DD
    var fechaFormateada = fechaActual.toISOString().split('T')[0];

    // Establecer la fecha formateada como el valor predeterminado en el campo de entrada
    if (fechaRegistroInput) {
        fechaRegistroInput.value = fechaFormateada;
    }

});



// Función para manejar el cambio en el primer grupo de radio buttons
function manejarCambioNivelConciencia() {
    var valorSeleccionado = document.querySelector('input[name="nivel_conciencia"]:checked').value;
    document.getElementById('puntaje_nivel_conciencia_valor').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarCambioPreguntasVerbales() {
    var valorSeleccionado = document.querySelector('input[name="preguntas_verbales"]:checked').value;
    document.getElementById('puntaje_preguntas_verbales_valor').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarCambioOrdenesMotoras() {
    var valorSeleccionado = document.querySelector('input[name="ordenes_motoras"]:checked').value;
    document.getElementById('puntaje_preguntas_ordenes_motoras').textContent = valorSeleccionado;
    sumarRespuestas();
}


// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarCambioMirada() {
    var valorSeleccionado = document.querySelector('input[name="mirada_conjugada"]:checked').value;
    document.getElementById('puntaje_preguntas_mirada').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarCamposVisuales() {
    var valorSeleccionado = document.querySelector('input[name="campos_visuales"]:checked').value;
    document.getElementById('puntaje_preguntas_campos_visuales').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarParesiaFaciales() {
    var valorSeleccionado = document.querySelector('input[name="paresia_facial"]:checked').value;
    document.getElementById('puntaje_preguntas_paresia_facial').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarSuperiores_Brazo_Derecho() {
    var valorSeleccionado = document.querySelector('input[name="superiores_brazo_derecho"]:checked').value;
    document.getElementById('puntaje_preguntas_superiores_brazo_derecho').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarSuperiores_Brazo_Izquierdo() {
    var valorSeleccionado = document.querySelector('input[name="superiores_brazo_izquierdo"]:checked').value;
    document.getElementById('puntaje_preguntas_superiores_brazo_izquierdo').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarInferiores_Pierna_Derecha() {
    var valorSeleccionado = document.querySelector('input[name="inferiores_pierna_derecha"]:checked').value;
    document.getElementById('puntaje_preguntas_inferiores_pierna_derecha').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarInferiores_Pierna_Izquierda() {
    var valorSeleccionado = document.querySelector('input[name="inferiores_pierna_izquierda"]:checked').value;
    document.getElementById('puntaje_preguntas_inferiores_pierna_izquierda').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarAtaxia() {
    var valorSeleccionado = document.querySelector('input[name="ataxia"]:checked').value;
    document.getElementById('puntaje_preguntas_ataxia').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarAtaxia() {
    var valorSeleccionado = document.querySelector('input[name="ataxia"]:checked').value;
    document.getElementById('puntaje_preguntas_ataxia').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarSensibilidad() {
    var valorSeleccionado = document.querySelector('input[name="sensibilidad"]:checked').value;
    document.getElementById('puntaje_preguntas_sensibilidad').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarLenguaje() {
    var valorSeleccionado = document.querySelector('input[name="lenguaje"]:checked').value;
    document.getElementById('puntaje_preguntas_lenguaje').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarDisartria() {
    var valorSeleccionado = document.querySelector('input[name="Disartria"]:checked').value;
    document.getElementById('puntaje_preguntas_Disartria').textContent = valorSeleccionado;
    sumarRespuestas();
}

// Función para manejar el cambio en el segundo grupo de radio buttons
function manejarENI() {
    var valorSeleccionado = document.querySelector('input[name="eni"]:checked').value;
    document.getElementById('puntaje_preguntas_eni').textContent = valorSeleccionado;
    sumarRespuestas();
}







// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="nivel_conciencia"]').forEach(function(radio) {
    radio.addEventListener('change', manejarCambioNivelConciencia);
});

document.querySelectorAll('input[name="preguntas_verbales"]').forEach(function(radio) {
    radio.addEventListener('change', manejarCambioPreguntasVerbales);
});

document.querySelectorAll('input[name="ordenes_motoras"]').forEach(function(radio) {
    radio.addEventListener('change', manejarCambioOrdenesMotoras);
});

document.querySelectorAll('input[name="mirada_conjugada"]').forEach(function(radio) {
    radio.addEventListener('change', manejarCambioMirada);
});

document.querySelectorAll('input[name="campos_visuales"]').forEach(function(radio) {
    radio.addEventListener('change', manejarCamposVisuales);
});

document.querySelectorAll('input[name="paresia_facial"]').forEach(function(radio) {
    radio.addEventListener('change', manejarParesiaFaciales);
});

document.querySelectorAll('input[name="superiores_brazo_derecho"]').forEach(function(radio) {
    radio.addEventListener('change', manejarSuperiores_Brazo_Derecho);
});

document.querySelectorAll('input[name="superiores_brazo_izquierdo"]').forEach(function(radio) {
    radio.addEventListener('change', manejarSuperiores_Brazo_Izquierdo);
});

document.querySelectorAll('input[name="inferiores_pierna_derecha"]').forEach(function(radio) {
    radio.addEventListener('change', manejarInferiores_Pierna_Derecha);
});

document.querySelectorAll('input[name="inferiores_pierna_izquierda"]').forEach(function(radio) {
    radio.addEventListener('change', manejarInferiores_Pierna_Izquierda);
});

document.querySelectorAll('input[name="ataxia"]').forEach(function(radio) {
    radio.addEventListener('change', manejarAtaxia);
});

document.querySelectorAll('input[name="sensibilidad"]').forEach(function(radio) {
    radio.addEventListener('change', manejarSensibilidad);
});

document.querySelectorAll('input[name="lenguaje"]').forEach(function(radio) {
    radio.addEventListener('change', manejarLenguaje);
});

document.querySelectorAll('input[name="Disartria"]').forEach(function(radio) {
    radio.addEventListener('change', manejarDisartria);
});

document.querySelectorAll('input[name="eni"]').forEach(function(radio) {
    radio.addEventListener('change', manejarENI);
});



function sumarRespuestas() {
    var total = 0;

    // Sumar los valores de las respuestas en el primer grupo de preguntas
    total += parseInt(document.getElementById('puntaje_nivel_conciencia_valor').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_verbales_valor').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_ordenes_motoras').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_mirada').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_campos_visuales').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_paresia_facial').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_superiores_brazo_derecho').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_superiores_brazo_izquierdo').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_inferiores_pierna_derecha').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_inferiores_pierna_izquierda').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_ataxia').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_sensibilidad').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_lenguaje').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_Disartria').textContent);
    total += parseInt(document.getElementById('puntaje_preguntas_eni').textContent);

    // Aplicar las condiciones según el total obtenido
    var resultadoTexto = "";
    if (total === 0) {
        resultadoTexto = "Sin déficit";
    } else if (total >= 1 && total <= 4) {
        resultadoTexto = "Déficit leve";
    } else if (total >= 5 && total <= 15) {
        resultadoTexto = "Déficit moderado";
    } else if (total >= 16 && total <= 20) {
        resultadoTexto = "Déficit moderadamente grave";
    } else if (total >= 21 && total <= 42) {
        resultadoTexto = "Déficit grave";
    } else {
        resultadoTexto = "Fuera de rango";
    }

    // Actualizar el valor mostrado en la sección "Puntaje Total"
    document.getElementById("puntaje_total_valor").innerText = total;
    document.getElementById("puntaje_total_texto").innerText = resultadoTexto;

    document.getElementById("NIHSS").value = total;
    document.getElementById("NIHSS_escala").value = resultadoTexto;
    
}







// **********************************************************+
// ESCALA BARTHEL
// **********************************************************+

// Función para manejar el cambio en el primer grupo de radio buttons
function manejarComer() {
    var valorSeleccionado = document.querySelector('input[name="barthel_comer"]:checked').value;
    document.getElementById('puntaje_nivel_comer').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_comer"]').forEach(function(radio) {
    radio.addEventListener('change', manejarComer);
});


// **********************************************************+
function manejarTraslado() {
    var valorSeleccionado = document.querySelector('input[name="barthe_traslado"]:checked').value;
    document.getElementById('puntaje_nivel_traslado').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthe_traslado"]').forEach(function(radio) {
    radio.addEventListener('change', manejarTraslado);
});



// **********************************************************+
function manejarAseo() {
    var valorSeleccionado = document.querySelector('input[name="barthel_aseo"]:checked').value;
    document.getElementById('puntaje_nivel_aseo').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_aseo"]').forEach(function(radio) {
    radio.addEventListener('change', manejarAseo);
});


// **********************************************************+
function manejarRetrete() {
    var valorSeleccionado = document.querySelector('input[name="barthel_retrete"]:checked').value;
    document.getElementById('puntaje_nivel_retrete').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_retrete"]').forEach(function(radio) {
    radio.addEventListener('change', manejarRetrete);
});


// **********************************************************+
function manejarDucharse() {
    var valorSeleccionado = document.querySelector('input[name="barthel_ducharse"]:checked').value;
    document.getElementById('puntaje_nivel_ducharse').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_ducharse"]').forEach(function(radio) {
    radio.addEventListener('change', manejarDucharse);
});


// **********************************************************+
function manejarDesplazarse() {
    var valorSeleccionado = document.querySelector('input[name="barthel_desplazarse"]:checked').value;
    document.getElementById('puntaje_nivel_desplazarse').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_desplazarse"]').forEach(function(radio) {
    radio.addEventListener('change', manejarDesplazarse);
});


// **********************************************************+
function manejarEscaleras() {
    var valorSeleccionado = document.querySelector('input[name="barthel_escaleras"]:checked').value;
    document.getElementById('puntaje_nivel_escaleras').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_escaleras"]').forEach(function(radio) {
    radio.addEventListener('change', manejarEscaleras);
});
// **********************************************************+
function manejarVestirse() {
    var valorSeleccionado = document.querySelector('input[name="barthel_vestirse"]:checked').value;
    document.getElementById('puntaje_nivel_vestirse').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_vestirse"]').forEach(function(radio) {
    radio.addEventListener('change', manejarVestirse);
});
// **********************************************************+
function manejarHeces() {
    var valorSeleccionado = document.querySelector('input[name="barthel_heces"]:checked').value;
    document.getElementById('puntaje_nivel_heces').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_heces"]').forEach(function(radio) {
    radio.addEventListener('change', manejarHeces);
});
// **********************************************************+
function manejarOrina() {
    var valorSeleccionado = document.querySelector('input[name="barthel_orina"]:checked').value;
    document.getElementById('puntaje_nivel_orina').textContent = valorSeleccionado;
    sumarRespuestasB();
}
// Agrega eventos de cambio a los radio buttons
document.querySelectorAll('input[name="barthel_orina"]').forEach(function(radio) {
    radio.addEventListener('change', manejarOrina);
});


function sumarRespuestasB() {
    var total = 0;

    // Sumar los valores de las respuestas en el primer grupo de preguntas
    total += parseInt(document.getElementById('puntaje_nivel_comer').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_traslado').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_aseo').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_retrete').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_ducharse').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_desplazarse').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_escaleras').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_vestirse').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_heces').textContent);
    total += parseInt(document.getElementById('puntaje_nivel_orina').textContent);

    // Aplicar las condiciones según el total obtenido
    var resultadoTexto = "";
    if (total < 20) {
        resultadoTexto = "Total";
    } else if (total >= 20 && total <= 35) {
        resultadoTexto = "Grave";
    } else if (total >= 40 && total <= 55) {
        resultadoTexto = "Moderado";
    } else if (total >= 60) {
        resultadoTexto = "Leve";
    } else {
        resultadoTexto = "Fuera de rango";
    }

    // Actualizar el valor mostrado en la sección "Puntaje Total"
    document.getElementById("puntaje_total_valorB").innerText = total;
    document.getElementById("puntaje_total_textoB").innerText = resultadoTexto;

    document.getElementById("BARTHEL").value = total;
    document.getElementById("BARTHEL_escala").value = resultadoTexto;
}






// **********************************************************+
// ESCALA FIM
// **********************************************************+



// FUNCIÓN QUE HACE QUE CAMBIE DE COLOR CADA SELECT DE LA ESCALA FIM
function changeColor(select) {
    // Obtener el valor seleccionado
    var valorSeleccionado = select.value;
    
    // Remover todas las clases de color
    select.classList.remove('verde', 'amarillo', 'rojo');

    // Establecer la clase de color según el valor seleccionado
    if (valorSeleccionado == '7' || valorSeleccionado == '6') {
        select.classList.add('verde');
    } else if (valorSeleccionado == '5' || valorSeleccionado == '4' || valorSeleccionado == '3') {
        select.classList.add('amarillo');
    } else if (valorSeleccionado == '2' || valorSeleccionado == '1') {
        select.classList.add('rojo');
    }
}

/* JavaScript para calcular el Total Autocuidado */
// Obtener todos los selectores de autocuidado
var selectoresAutocuidado = document.querySelectorAll('.fim-select[data-section="autocuidado"]');

// Función para calcular el Total Autocuidado y mostrar el texto correspondiente
function calcularYMostrarTotalAutocuidado() {
    var total = 0;
    selectoresAutocuidado.forEach(function(selector) {
        total += parseInt(selector.value);
    });

    // Calcular el promedio
    var promedio = total / selectoresAutocuidado.length;

    // Mostrar el texto correspondiente al promedio
    var texto = "Total: " + total;
    if (promedio == 7) {
        texto += " - Independiente";
    } else if (promedio >= 6) {
        texto += " - Independencia modificada";
    } else if (promedio >= 5) {
        texto += " - Supervision";
    } else if (promedio >= 4) {
        texto += " - Asistencia minima";
    } else if (promedio >= 3) {
        texto += " - Asistencia moderada";
    } else if (promedio >= 2) {
        texto += " - Asistencia maxima";
    } else {
        texto += " - Asistencia total";
    }

    document.getElementById('texto_autocuidado').textContent = texto;
}

// Función para actualizar el valor FIM cuando cambia la selección en cualquier selector
function actualizarValorFIM(selector) {
    var fimSpanId = selector.id.replace("fim_", "puntaje_nivel_fim_");
    document.getElementById(fimSpanId).textContent = selector.value;
}

// Asignar eventos de cambio a cada selector para calcular y mostrar el total de autocuidado y actualizar el valor FIM correspondiente
selectoresAutocuidado.forEach(function(selector) {
    selector.addEventListener('change', function() {
        calcularYMostrarTotalAutocuidado();
        actualizarValorFIM(selector); // Actualizar el valor FIM correspondiente
        calcularTotalGeneralF();
    });
});

/*+++++++ CONTROL ESFINTERES +++++++*/
// Obtener todos los selectores de Control de Esfínteres
var selectoresControlEsfinteres = document.querySelectorAll('.fim-select[data-section="controlesfinteres"]');

// Función para calcular el Total Control de Esfínteres y mostrar el texto correspondiente
function calcularYMostrarTotalControlEsfinteres() {
    var total = 0;
    selectoresControlEsfinteres.forEach(function(selector) {
        total += parseInt(selector.value);
    });

    // Calcular el promedio
    var promedio = total / selectoresControlEsfinteres.length;

    // Mostrar el texto correspondiente al promedio
    var texto = "Total: " + total;
    if (promedio == 7) {
        texto += " - Independiente";
    } else if (promedio >= 6) {
        texto += " - Independencia modificada";
    } else if (promedio >= 5) {
        texto += " - Supervisión";
    } else if (promedio >= 4) {
        texto += " - Asistencia mínima";
    } else if (promedio >= 3) {
        texto += " - Asistencia moderada";
    } else if (promedio >= 2) {
        texto += " - Asistencia máxima";
    } else {
        texto += " - Asistencia total";
    }

    document.getElementById('texto_control_esfinteres').textContent = texto;
}

// Asignar eventos de cambio a cada selector para calcular y mostrar el total de control de esfínteres y actualizar el valor FIM correspondiente
selectoresControlEsfinteres.forEach(function(selector) {
    selector.addEventListener('change', function() {
        calcularYMostrarTotalControlEsfinteres();
        actualizarValorFIM(selector); // Actualizar el valor FIM correspondiente
        calcularTotalGeneralF();
    });
});

/*+++++++ MOVILIDAD +++++++*/
// Obtener todos los selectores de Movilidad
var selectoresMovilidad = document.querySelectorAll('.fim-select[data-section="movilidad"]');

// Función para calcular el Total Movilidad y mostrar el texto correspondiente
function calcularYMostrarTotalMovilidad() {
    var total = 0;
    selectoresMovilidad.forEach(function(selector) {
        total += parseInt(selector.value);
    });

    // Calcular el promedio
    var promedio = total / selectoresMovilidad.length;

    // Mostrar el texto correspondiente al promedio
    var texto = "Total: " + total;
    if (promedio == 7) {
        texto += " - Independiente";
    } else if (promedio >= 6) {
        texto += " - Independencia modificada";
    } else if (promedio >= 5) {
        texto += " - Supervisión";
    } else if (promedio >= 4) {
        texto += " - Asistencia mínima";
    } else if (promedio >= 3) {
        texto += " - Asistencia moderada";
    } else if (promedio >= 2) {
        texto += " - Asistencia máxima";
    } else {
        texto += " - Asistencia total";
    }

    document.getElementById('texto_movilidad').textContent = texto;
}

// Asignar eventos de cambio a cada selector para calcular y mostrar el total de movilidad y actualizar el valor FIM correspondiente
selectoresMovilidad.forEach(function(selector) {
    selector.addEventListener('change', function() {
        calcularYMostrarTotalMovilidad();
        actualizarValorFIM(selector); // Actualizar el valor FIM correspondiente
        calcularTotalGeneralF();
    });
});

/*+++++++ DEAMBULACIÓN +++++++*/
// Obtener todos los selectores de Deambulación
var selectoresDeambulacion = document.querySelectorAll('.fim-select[data-section="deambulacion"]');

// Función para calcular el Total Deambulación y mostrar el texto correspondiente
function calcularYMostrarTotalDeambulacion() {
    var total = 0;
    selectoresDeambulacion.forEach(function(selector) {
        total += parseInt(selector.value);
    });

    // Calcular el promedio
    var promedio = total / selectoresDeambulacion.length;

    // Mostrar el texto correspondiente al promedio
    var texto = "Total: " + total;
    if (promedio == 7) {
        texto += " - Independiente";
    } else if (promedio >= 6) {
        texto += " - Independencia modificada";
    } else if (promedio >= 5) {
        texto += " - Supervisión";
    } else if (promedio >= 4) {
        texto += " - Asistencia mínima";
    } else if (promedio >= 3) {
        texto += " - Asistencia moderada";
    } else if (promedio >= 2) {
        texto += " - Asistencia máxima";
    } else {
        texto += " - Asistencia total";
    }

    document.getElementById('texto_deambulacion').textContent = texto;
}

// Asignar eventos de cambio a cada selector para calcular y mostrar el total de deambulación y actualizar el valor FIM correspondiente
selectoresDeambulacion.forEach(function(selector) {
    selector.addEventListener('change', function() {
        calcularYMostrarTotalDeambulacion();
        actualizarValorFIM(selector); // Actualizar el valor FIM correspondiente
        calcularTotalGeneralF();
    });
});



/*+++++++ COMUNICACIÓN +++++++*/
// // Obtener todos los selectores de Control de Esfínteres
var selectoresComunicacion = document.querySelectorAll('.fim-select[data-section="comunicacion"]');

// Función para calcular el Total Control de Esfínteres y mostrar el texto correspondiente
function calcularYMostrarTotalComunicacion() {
    var total = 0;
    selectoresComunicacion.forEach(function(selector) {
        total += parseInt(selector.value);
    });

    // Calcular el promedio
    var promedio = total / selectoresComunicacion.length;

    // Mostrar el texto correspondiente al promedio
    var texto = "Total: " + total;
    if (promedio == 7) {
        texto += " - Independiente";
    } else if (promedio >= 6) {
        texto += " - Independencia modificada";
    } else if (promedio >= 5) {
        texto += " - Supervisión";
    } else if (promedio >= 4) {
        texto += " - Asistencia mínima";
    } else if (promedio >= 3) {
        texto += " - Asistencia moderada";
    } else if (promedio >= 2) {
        texto += " - Asistencia máxima";
    } else {
        texto += " - Asistencia total";
    }

    document.getElementById('texto_comunicacion').textContent = texto;
}

// Asignar eventos de cambio a cada selector para calcular y mostrar el total de control de esfínteres y actualizar el valor FIM correspondiente
selectoresComunicacion.forEach(function(selector) {
    selector.addEventListener('change', function() {
        calcularYMostrarTotalComunicacion();
        actualizarValorFIM(selector); // Actualizar el valor FIM correspondiente
        calcularTotalGeneralC();
    });
});


/*+++++++ COMUNICACIÓN +++++++*/
// // Obtener todos los selectores de Control de Esfínteres
var selectoresConocimientoSocial = document.querySelectorAll('.fim-select[data-section="conocimientosocial"]');

// Función para calcular el Total Control de Esfínteres y mostrar el texto correspondiente
function calcularYMostrarTotalConocimientoSocial() {
    var total = 0;
    selectoresConocimientoSocial.forEach(function(selector) {
        total += parseInt(selector.value);
    });

    // Calcular el promedio
    var promedio = total / selectoresConocimientoSocial.length;

    // Mostrar el texto correspondiente al promedio
    var texto = "Total: " + total;
    if (promedio == 7) {
        texto += " - Independiente";
    } else if (promedio >= 6) {
        texto += " - Independencia modificada";
    } else if (promedio >= 5) {
        texto += " - Supervisión";
    } else if (promedio >= 4) {
        texto += " - Asistencia mínima";
    } else if (promedio >= 3) {
        texto += " - Asistencia moderada";
    } else if (promedio >= 2) {
        texto += " - Asistencia máxima";
    } else {
        texto += " - Asistencia total";
    }

    document.getElementById('texto_conocimientosocial').textContent = texto;
}

// Asignar eventos de cambio a cada selector para calcular y mostrar el total de control de esfínteres y actualizar el valor FIM correspondiente
selectoresConocimientoSocial.forEach(function(selector) {
    selector.addEventListener('change', function() {
        calcularYMostrarTotalConocimientoSocial();
        actualizarValorFIM(selector); // Actualizar el valor FIM correspondiente
        calcularTotalGeneralC();
    });
});


// Función para calcular el total general y mostrarlo (conjunto F)
function calcularTotalGeneralF() {
    var totalGeneralF = 0;
    // Calcular la suma de los totales de todas las secciones para el conjunto F
    totalGeneralF += parseInt(document.getElementById('texto_autocuidado').textContent.split(":")[1]);
    totalGeneralF += parseInt(document.getElementById('texto_control_esfinteres').textContent.split(":")[1]);
    totalGeneralF += parseInt(document.getElementById('texto_movilidad').textContent.split(":")[1]);
    totalGeneralF += parseInt(document.getElementById('texto_deambulacion').textContent.split(":")[1]);
    // Mostrar el total general en el elemento correspondiente para el conjunto F
    document.getElementById('puntaje_total_valorFIMM').textContent = totalGeneralF;
}

// Función para calcular el total general y mostrarlo (conjunto C)
function calcularTotalGeneralC() {
    var totalGeneralC = 0;
    // Calcular la suma de los totales de todas las secciones para el conjunto C
    totalGeneralC += parseInt(document.getElementById('texto_comunicacion').textContent.split(":")[1]);
    totalGeneralC += parseInt(document.getElementById('texto_conocimientosocial').textContent.split(":")[1]);
    // Mostrar el total general en el elemento correspondiente para el conjunto C
    document.getElementById('puntaje_total_valorFIMC').textContent = totalGeneralC;
}

// Función para calcular y mostrar el total general para ambos conjuntos al cargar la página
window.addEventListener('load', function() {
    calcularTotalGeneralF(); // Calcular y mostrar el total general para el conjunto F
    calcularTotalGeneralC(); // Calcular y mostrar el total general para el conjunto C
});



// Función para calcular el total general y mostrarlo (conjunto F)
function calcularTotalGeneralF() {
    var totalGeneralF = 0;
    // Calcular la suma de los totales de todas las secciones para el conjunto F
    totalGeneralF += parseInt(document.getElementById('texto_autocuidado').textContent.split(":")[1]);
    totalGeneralF += parseInt(document.getElementById('texto_control_esfinteres').textContent.split(":")[1]);
    totalGeneralF += parseInt(document.getElementById('texto_movilidad').textContent.split(":")[1]);
    totalGeneralF += parseInt(document.getElementById('texto_deambulacion').textContent.split(":")[1]);
    // Mostrar el total general en el elemento correspondiente para el conjunto F
    document.getElementById('puntaje_total_valorFIMM').textContent = totalGeneralF;
    // Llamar a la función para sumar y mostrar los totales
    sumarYMostrarTotales();
}

// Función para calcular el total general y mostrarlo (conjunto C)
function calcularTotalGeneralC() {
    var totalGeneralC = 0;
    // Calcular la suma de los totales de todas las secciones para el conjunto C
    totalGeneralC += parseInt(document.getElementById('texto_comunicacion').textContent.split(":")[1]);
    totalGeneralC += parseInt(document.getElementById('texto_conocimientosocial').textContent.split(":")[1]);
    // Mostrar el total general en el elemento correspondiente para el conjunto C
    document.getElementById('puntaje_total_valorFIMC').textContent = totalGeneralC;
    // Llamar a la función para sumar y mostrar los totales
    sumarYMostrarTotales();
}



function sumarYMostrarTotales() {
    // Calcular y mostrar los totales de F y C
    var puntajeTotalF = parseInt(document.getElementById('puntaje_total_valorFIMM').textContent);
    var puntajeTotalC = parseInt(document.getElementById('puntaje_total_valorFIMC').textContent);

    // Verificar si los valores son números válidos
    if (!isNaN(puntajeTotalF) && !isNaN(puntajeTotalC)) {
        // Sumar los totales de F y C
        var totalGeneral = puntajeTotalF + puntajeTotalC;

        // Mostrar el resultado en HTML
        document.getElementById('resultado_suma_totales').innerHTML = "Diagnóstico: " + totalGeneral;

        // Obtener el texto de dependencia según el total
        var textoDependencia = obtenerTextoDependencia(totalGeneral);

        // Mostrar el texto de dependencia
        var textoDependenciaElemento = document.getElementById('texto_dependencia');
        textoDependenciaElemento.textContent = textoDependencia;

        // Obtener el contenedor de totales
        var contenedorTotales = document.getElementById('contenedor_totales');

        // Cambiar el color de fondo del contenedor según el texto de dependencia
        if (textoDependencia === "Independiente funcional") {
            contenedorTotales.style.backgroundColor = "#B0DEB0"; // Verde claro
        } else if (textoDependencia === "Dependencia modificada") {
            contenedorTotales.style.backgroundColor = "#F5F99F"; // Amarillo claro
        } else if (textoDependencia === "Dependencia completa") {
            contenedorTotales.style.backgroundColor = "#E4A6A6"; // Rojo claro
        }
    } else {
        // Mostrar un mensaje de error si no se pueden obtener los valores
        document.getElementById('resultado_suma_totales').innerHTML = "No se pueden calcular los totales.";
    }

    document.getElementById("FIM").value = totalGeneral;
    document.getElementById("FIM_escala").value = textoDependencia;
}

// Función para obtener el texto de dependencia según el total
function obtenerTextoDependencia(total) {
    if (total >= 108) {
        return "Independiente funcional";
    } else if (total > 36) {
        return "Dependencia modificada";
    } else {
        return "Dependencia completa";
    }
}




//RANKIN

// JavaScript para manejar la selección y mostrar el valor seleccionado
const opciones = document.querySelectorAll('input[name="opcion"]');
const resultado = document.getElementById('valorSeleccionado');

opciones.forEach(opcion => {
  opcion.addEventListener('change', function() {
    resultado.textContent = opcion.value + '. ';
    switch(opcion.value) {
      case '0':
        resultado.textContent += 'No presentan síntomas';
        document.getElementById("RANKIN").value = 0;
        document.getElementById("RANKIN_escala").value = 'No presentan síntomas';

        break;
      case '1':
        resultado.textContent += 'Discapacidad no significativa';
        document.getElementById("RANKIN").value = 1;
        document.getElementById("RANKIN_escala").value = 'Discapacidad no significativa';

        break;
      case '2':
        resultado.textContent += 'Discapacidad ligera';
        document.getElementById("RANKIN").value = 2;
        document.getElementById("RANKIN_escala").value = 'Discapacidad ligera';

        break;
      case '3':
        resultado.textContent += 'Discapacidad moderada';
        document.getElementById("RANKIN").value = 3;
        document.getElementById("RANKIN_escala").value = 'Discapacidad moderada';

        break;
      case '4':
        resultado.textContent += 'Discapacidad moderadamente grave';
        document.getElementById("RANKIN").value = 4;
        document.getElementById("RANKIN_escala").value = 'Discapacidad moderadamente grave';

        break;
      case '5':
        resultado.textContent += 'Discapacidad severa: confinamiento en la cama';
        document.getElementById("RANKIN").value = 5;
        document.getElementById("RANKIN_escala").value = 'Discapacidad severa: confinamiento en la cama';

        break;
      case '6':
        resultado.textContent += 'Muerte';
        document.getElementById("RANKIN").value = 6;
        document.getElementById("RANKIN_escala").value = 'Muerte';

        break;
      default:
        resultado.textContent = '';
        document.getElementById("RANKIN").value = '';
        document.getElementById("RANKIN_escala").value = '';

        break;
    }
  });
});


// JavaScript para manejar la selección y mostrar el valor seleccionado
const opcionesDeambulacion = document.querySelectorAll('input[name="opcion-deambulacion"]');
const resultadoDeambulacion = document.getElementById('valorSeleccionadoDeambulacion');

opcionesDeambulacion.forEach(opcionDeambulacion => {
  opcionDeambulacion.addEventListener('change', function() {
    resultadoDeambulacion.textContent = opcionDeambulacion.value + '. ';
    switch(opcionDeambulacion.value) {
      case '0':
        resultadoDeambulacion.textContent += 'Sin deambulación';
        document.getElementById("MARCHA").value = '0';
        document.getElementById("MARCHA_escala").value = 'Sin deambulación';
        break;
      case '1':
        resultadoDeambulacion.textContent += 'Deambulación funcional';
        document.getElementById("MARCHA").value = '1';
        document.getElementById("MARCHA_escala").value = 'Deambulación funcional';
        break;
      case '2':
        resultadoDeambulacion.textContent += 'Deambulación Hogar';
        document.getElementById("MARCHA").value = '2';
        document.getElementById("MARCHA_escala").value = 'Deambulación Hogar';
        break;
      case '3':
        resultadoDeambulacion.textContent += 'Deambulación cerca de casa';
        document.getElementById("MARCHA").value = '3';
        document.getElementById("MARCHA_escala").value = 'Deambulación cerca de casa';
        break;
      case '4':
        resultadoDeambulacion.textContent += 'Independiente en la comunidad';
        document.getElementById("MARCHA").value = '4';
        document.getElementById("MARCHA_escala").value = 'Independiente en la comunidad';
        break;
      case '5':
        resultadoDeambulacion.textContent += 'Normal';
        document.getElementById("MARCHA").value = '5';
        document.getElementById("MARCHA_escala").value = 'Normal';
        break;
      default:
        resultadoDeambulacion.textContent = '';
        document.getElementById("MARCHA").value = '';
        document.getElementById("MARCHA_escala").value = '';
        break;
    }
  });
});





    // Función para calcular el Motricity Index según el valor seleccionado para "Abd de Hombro", "Flexo de Codo", "Flex de Cadera", "Exten de Rodilla", "Dorsiflex de Tobillo"
    function calcularMotricityIndex(valor) {
        if (valor === "5") return 33;
        else if (valor === "4") return 25;
        else if (valor === "3") return 19;
        else if (valor === "2") return 14;
        else if (valor === "1") return 9;
        else return 0;
    }

    // Función para calcular el Motricity Index según el valor seleccionado para "Agarre/pellizco"
    function calcularMotricityIndexAgarre(valor) {
        if (valor === "5") return 33;
        else if (valor === "4") return 26;
        else if (valor === "3") return 22;
        else if (valor === "2") return 19;
        else if (valor === "1") return 11;
        else return 0;
    }

    // Función para actualizar los valores de Motricity Index y los totales
    function updateIMValue(value, section) {
        var index;
        if (section === 'agarre') {
            index = calcularMotricityIndexAgarre(value);
        } else {
            index = calcularMotricityIndex(value);
        }
        document.getElementById('puntaje_' + section).innerText = index;
        
        // Calcular los totales
        var total_superior = parseInt(document.getElementById('puntaje_abdhombro').innerText) +
                            parseInt(document.getElementById('puntaje_flexo').innerText) +
                            parseInt(document.getElementById('puntaje_agarre').innerText)+1;
        var total_inferior = parseInt(document.getElementById('puntaje_flexcadera').innerText) +
                            parseInt(document.getElementById('puntaje_extenrodilla').innerText) +
                            parseInt(document.getElementById('puntaje_dorsiflex').innerText)+1;
        var total_motricity = (total_superior + total_inferior)/2;

        // Redondear el total al número entero más cercano
        total_motricity = Math.round(total_motricity);

        // Actualizar los valores de los totales
        document.getElementById('total_superior').value = total_superior;
        document.getElementById('total_inferior').value = total_inferior;
        document.getElementById('total_motricity').value = total_motricity;

        document.getElementById("MOTRICITY").value = total_motricity;

    }

    // Agregar listeners de cambio para cada selector
    document.getElementById('superior_abdhombro').addEventListener('change', function() {
        updateIMValue(this.value, 'abdhombro');
    });
    document.getElementById('superior_flexo').addEventListener('change', function() {
        updateIMValue(this.value, 'flexo');
    });
    document.getElementById('superior_agarre').addEventListener('change', function() {
        updateIMValue(this.value, 'agarre');
    });
    document.getElementById('inferior_flexcadera').addEventListener('change', function() {
        updateIMValue(this.value, 'flexcadera');
    });
    document.getElementById('inferior_extenrodilla').addEventListener('change', function() {
        updateIMValue(this.value, 'extenrodilla');
    });
    document.getElementById('inferior_dorsiflex').addEventListener('change', function() {
        updateIMValue(this.value, 'dorsiflex');
    });
