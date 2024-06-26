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