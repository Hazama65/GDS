const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre');

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

    // Obtener el elemento de la edad
    var edadInput = document.getElementById("edad");

    // Establecer el valor de la edad
    edadInput.value = edad;

    // Cambiar el color de fondo en base a la edad
    if (edad >= 18) {
        // Edad igual o menor a 18, establecer fondo rojo
        edadInput.style.backgroundColor = "red";
    } else {
        // Edad mayor a 18, establecer fondo verde
        edadInput.style.backgroundColor = "green";
    }

    // Determinar el sexo y mostrarlo en el campo correspondiente
    var sexo = curp.charAt(10);
    if (sexo === "H") {
        document.getElementById("sexo").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sexo").value = "Mujer";
    }
}

// FUNCIÓN PARA BLOQUEAR LA SELECCIÓN DE DIAS 

// Obtén la referencia al elemento de entrada de fecha
var fechaInput = document.getElementById('fecha_inicio');

// Obtén la fecha actual en el formato "YYYY-MM-DD"
var fechaActual = new Date().toISOString().split('T')[0];

// Establece la fecha máxima en el campo de entrada de fecha (hoy)
fechaInput.setAttribute('max', fechaActual);

// FUNCIÓN PARA CALCULAR EL TIEMPO DE INICIO DE SINTOMAS

// Función para obtener la hora y fecha actuales y establecer los valores en los campos correspondientes
function establecerHoraYFechaActuales() {
    // Obtiene la fecha actual
    var fechaActual = new Date();

    // Obtiene la hora y los minutos actuales
    var horas = fechaActual.getHours();
    var minutos = fechaActual.getMinutes();

    // Formatea la hora para que tenga dos dígitos
    var horaFormateada = (horas < 10 ? '0' : '') + horas + ':' + (minutos < 10 ? '0' : '') + minutos;

    // Establece la hora y fecha actuales en los campos correspondientes
    document.getElementById("tiempo").value = horaFormateada;
    document.getElementById("fecha_Actual").valueAsDate = fechaActual;
}

// Llama a la función para establecer la hora y fecha actuales inicialmente
establecerHoraYFechaActuales();

// Función para calcular la diferencia de tiempo y cambiar el color de fondo en consecuencia
function calcularDiferenciaTiempo() {
    // Obtiene la fecha y hora de inicio de síntomas
    var fechaInicioSintomas = new Date(document.getElementById("fecha_inicio").value + " " + document.getElementById("inicio_sintomas").value);

    // Obtiene la fecha y hora actuales del sistema del usuario
    var fechaActual = new Date();
    var horaActual = fechaActual.getHours() + (fechaActual.getMinutes() / 60);

    // Calcula la diferencia en horas
    var horasDiferencia = (fechaActual - fechaInicioSintomas) / (1000 * 60 * 60);

    // Actualiza el campo de resultado_time con la diferencia formateada
    document.getElementById("resultado_time").value = horasDiferencia.toFixed(2);

    // Cambia el color de fondo en base a la diferencia
    if (horasDiferencia > 4.5) {
        document.getElementById("resultado_time").style.backgroundColor = "green";
    } else {
        document.getElementById("resultado_time").style.backgroundColor = "red";
    }
}

// Configura eventos de cambio para los campos de fecha y hora de inicio de síntomas
document.getElementById("fecha_inicio").addEventListener("input", calcularDiferenciaTiempo);
document.getElementById("inicio_sintomas").addEventListener("input", calcularDiferenciaTiempo);


function mostrarParametrosNihss() {
    var nihssSelect = document.getElementById('nihss');
    var parametrosNihss = document.getElementById('parametros_nihss');
    var selectedOption = nihssSelect.value;

    if (selectedOption === "5-15 Moderado" || selectedOption === "16-20 Moderado Severo" || selectedOption === "21-42 Severo") {
        parametrosNihss.style.display = "block";
    } else {
        parametrosNihss.style.display = "none";

    }
}



document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("trombolisis1");
    var divElement = document.getElementById("si_rtpa");
    var divSangrado = document.getElementById("sangrado_1");



    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
            divSangrado.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
            divSangrado.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    let fecha_s = document.getElementById("fecha_sangrado_1");
    let sangrado = document.getElementById("sangrado");



    // Agrega un evento de cambio al elemento select
    sangrado.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (sangrado.value === "Si") {
            // Muestra el div si se selecciona "Si"
            fecha_s.style.display = "block";

        } else {
            // Oculta el div en caso contrario
            fecha_s.style.display = "none";
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const faceSelect = document.getElementById('Face');
    const armsSelect = document.getElementById('arms');
    const speechSelect = document.getElementById('speech');

    // Función para cambiar el estilo del texto según la opción seleccionada
    function cambiarEstiloTexto(selectElement) {
        const selectedValue = selectElement.value;

        if (selectedValue === 'Negado') {
            cambiarEstiloElemento(selectElement, 'green', 'white');
        } else if (selectedValue === 'Si') {
            cambiarEstiloElemento(selectElement, 'red', 'white');
        }
    }

    // Función para aplicar el cambio de estilo al elemento
    function cambiarEstiloElemento(elemento, backgroundColor, color) {
        elemento.style.backgroundColor = backgroundColor;
        elemento.style.color = color;
    }

    // Asignar evento de cambio a cada selector
    faceSelect.addEventListener('change', function () {
        cambiarEstiloTexto(this);
    });

    armsSelect.addEventListener('change', function () {
        cambiarEstiloTexto(this);
    });

    speechSelect.addEventListener('change', function () {
        cambiarEstiloTexto(this);
    });
});

// SELECCIONAR SI a SANGRADO 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("sangrado");
    var divElement = document.getElementById("nivel_1");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
        }
    });
});


// SELECCIONAMOS DEPENDENCIA
document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("dependendcia_funcional");
    var divElement = document.getElementById("depedencia");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
        }
    });
});

// SELECCIONAMOS MOTOR 
document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("Motor");
    var divElement = document.getElementById("motor_extramidadsuperior");
    var divmotor = document.getElementById("motor_extramidadinferior");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
            divmotor.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
            divmotor.style.display = "none";
        }
    });
});

// SELECCIONAMOS DEPENDENCIA
document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("Dolor");
    var divElement = document.getElementById("dolor_neuropatico");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Neuropatico"
        if (selectElement.value === "Neuropatico") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("se_activa");
    var divElement = document.getElementById("equipo_multi");

    divElement.style.display = "none";

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Neuropatico"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    let selectFace = document.getElementById("Face");

    selectFace.addEventListener("change", function () {
        if (selectFace.value === "Normal") {
            selectFace.style.backgroundColor = "rgb(176, 247, 184)";
        } else if (selectFace.value === "Alterado") {
            selectFace.style.backgroundColor = "rgb(255, 101, 101)";
        } else {
            selectFace.style.backgroundColor = "";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    let selectFace = document.getElementById("arms");

    selectFace.addEventListener("change", function () {
        if (selectFace.value === "Normal") {
            selectFace.style.backgroundColor = "rgb(176, 247, 184)";
        } else if (selectFace.value === "Alterado") {
            selectFace.style.backgroundColor = "rgb(255, 101, 101)";
        } else {
            selectFace.style.backgroundColor = "";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let selectFace = document.getElementById("speech");

    selectFace.addEventListener("change", function () {
        if (selectFace.value === "Normal") {
            selectFace.style.backgroundColor = "rgb(176, 247, 184)";
        } else if (selectFace.value === "Alterado") {
            selectFace.style.backgroundColor = "rgb(255, 101, 101)";
        } else {
            selectFace.style.backgroundColor = "";
        }
    });
});


// Calcular Escala HAS-BLED

function calcularPuntuacion() {
    let checkboxes = document.querySelectorAll('#Alcoholismo_HAS, #Hipertension_HAS, #funcionrenal_HAS, #funcionhepatica_HAS, #ACVPREV_HAS, #Hemorragiaimportante_HAS, #EdadSup_HAS, #INR_HAS, #medicacionaines_HAS');
    let puntuacion = 0;

    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            puntuacion += parseInt(checkbox.value);
        }
    });

    document.getElementById('puntuacion_has').value = puntuacion;

    // Determinar la interpretación basada en la puntuación
    if (puntuacion === 1) {
        document.getElementById('interpretacion_has').value = 'Riesgo Bajo (Probabilidad de sangrado en un año entre el 1.02 y el 1.5 %)';
    } else if (puntuacion === 2) {
        document.getElementById('interpretacion_has').value = 'Riesgo Intermedio (Probabilidad de sangrado en un año entre 1.88 y 3.2 %)';
    } else if (puntuacion >= 3 && puntuacion <= 9) {
        document.getElementById('interpretacion_has').value = 'Riesgo Alto (Probabilidad de sangrado en un año entre el 4.9 y el 19.6 %)';
    } else {
        document.getElementById('interpretacion_has').value = ''; // Manejar otros casos si es necesario
    }
}

// Event listener para los checkboxes específicos
document.addEventListener('DOMContentLoaded', function () {
    let checkboxes = document.querySelectorAll('#Alcoholismo_HAS, #Hipertension_HAS, #funcionrenal_HAS, #funcionhepatica_HAS, #ACVPREV_HAS, #Hemorragiaimportante_HAS, #EdadSup_HAS, #INR_HAS, #medicacionaines_HAS');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calcularPuntuacion();
        });
    });
});

// Event listener para los checkboxes específicos
document.addEventListener('DOMContentLoaded', function () {
    let checkboxes = document.querySelectorAll('#Alcoholismo_HAS, #Hipertension_HAS, #funcionrenal_HAS, #funcionhepatica_HAS, #ACVPREV_HAS, #Hemorragiaimportante_HAS, #EdadSup_HAS, #INR_HAS, #medicacionaines_HAS');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calcularPuntuacionHAS();
        });
    });
});


// // Calcular CHADS2-VAS Score

// function calcularPuntuacionCHADS2VASc() {
//     let puntuacion = 0;

//     // Sumar puntos de los radios
//     let radiosEdad = document.querySelectorAll('input[name="edad"]:checked');
//     if (radiosEdad.length > 0) {
//         puntuacion += parseInt(radiosEdad[0].value);
//     }

//     let radiosSexo = document.querySelectorAll('input[name="sexo"]:checked');
//     if (radiosSexo.length > 0) {
//         puntuacion += parseInt(radiosSexo[0].value);
//     }

//     // Sumar puntos de los checkboxes
//     let checkboxes = document.querySelectorAll('#Historia_insuf, #Diabetes_VC, #ACV_AIT, #HISTO_EVC, #HIPER_ACTUAL');
//     checkboxes.forEach(function (checkbox) {
//         if (checkbox.checked) {
//             puntuacion += parseInt(checkbox.value);
//         }
//     });

//     document.getElementById('puntuacion_VASc').value = puntuacion;

//     // Determinar la interpretación y el riesgo AVC basado en la puntuación
//     let interpretacion = '';
//     let riesgoAVC = '';

//     if (puntuacion <= 1) {
//         interpretacion = 'Riesgo bajo. Puede no requerir anticoagulación';
//         riesgoAVC = 'Menor de 1.3%';
//     } else if (puntuacion == 2) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '2.2%';
//     } else if (puntuacion == 3) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '3.2%';
//     } else if (puntuacion == 4) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '4.0%';
//     } else if (puntuacion == 5) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '6.7%';
//     } else if (puntuacion == 6) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '9.8%';
//     } else if (puntuacion == 7) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '9.6%';
//     } else if (puntuacion == 8) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '10.8%';
//     } else if (puntuacion == 9) {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = '15.2%';
//     } else {
//         interpretacion = 'Riesgo moderado o alto. Es candidato a anticoagulación';
//         riesgoAVC = ''; // Manejar otros casos si es necesario
//     }

//     document.getElementById('interpretacion_VASc').value = interpretacion;
//     document.getElementById('riesgo_VASc').value = riesgoAVC;
// }

// // Event listener para los radios y checkboxes
// document.addEventListener('DOMContentLoaded', function () {
//     let radiosYCheckboxes = document.querySelectorAll('input[type="radio"], input[type="checkbox"]');

//     radiosYCheckboxes.forEach(function (element) {
//         element.addEventListener('change', function () {
//             calcularPuntuacionCHADS2VASc();
//         });
//     });
// });
