
//  TASA PARA CALCULAR  TASA TOTAL IASSS EGRESOS
// Obtener los elementos de entrada y salida
var totalIaasInput = document.getElementById('total_iass');
var egresosInput = document.getElementById('egresos');
var tasasIaas100Input = document.getElementById('tasas_IAAS100');

// Escuchar cambios en los campos de entrada
totalIaasInput.addEventListener('input', calcularPorcentaje);
egresosInput.addEventListener('input', calcularPorcentaje);

// Función para calcular el porcentaje y mostrarlo
function calcularPorcentaje() {
    // Obtener los valores de entrada
    var totalIaas = parseFloat(totalIaasInput.value);
    var egresos = parseFloat(egresosInput.value);

    // Verificar si los valores de entrada son válidos
    if (!isNaN(totalIaas) && !isNaN(egresos) && egresos !== 0) {
        // Realizar el cálculo del porcentaje
        var porcentaje = (totalIaas / egresos) * 100;

        // Mostrar el resultado en el campo correspondiente
        tasasIaas100Input.value = porcentaje.toFixed(2);

        // Aplicar estilo de relleno si el porcentaje es mayor o igual a 2
        if (porcentaje >= 3) {
            tasasIaas100Input.style.backgroundColor = 'red';
        } else {
            tasasIaas100Input.style.backgroundColor = 'green'; // Restablecer el relleno a su valor predeterminado
        }
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío y restablecer el relleno
        tasasIaas100Input.value = '';
        tasasIaas100Input.style.backgroundColor = '';
    }
}

// Obtener los elementos de entrada y salida
var totalIaasInput = document.getElementById('total_iass');
var deihInput = document.getElementById('deih');
var deih1000Input = document.getElementById('DEIH_1000');

// Escuchar cambios en los campos de entrada
totalIaasInput.addEventListener('input', calcularTasasDeih1000);
deihInput.addEventListener('input', calcularTasasDeih1000);

// Función para calcular las tasas y actualizar el campo de salida
function calcularTasasDeih1000() {
    // Obtener los valores de entrada
    var totalIaas = parseFloat(totalIaasInput.value);
    var deih = parseFloat(deihInput.value);

    // Verificar si los valores de entrada son válidos
    if (!isNaN(totalIaas) && !isNaN(deih) && deih !== 0) {
        // Realizar el cálculo de las tasas
        var tasasDeih1000 = (totalIaas / deih) * 1000;

        // Mostrar el resultado en el campo correspondiente
        deih1000Input.value = tasasDeih1000.toFixed(2);

        // Aplicar estilo de relleno rojo si el valor es igual o mayor a 2
        if (tasasDeih1000 >= 4) {
            deih1000Input.style.backgroundColor = 'red';
        } else {
            deih1000Input.style.backgroundColor = 'green'; // Restablecer el color de fondo a su valor predeterminado
        }
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío y el estilo de fondo predeterminado
        deih1000Input.value = '';
        deih1000Input.style.backgroundColor = '';
    }
}

// CALCULAR LA TASA DE NEUMONIA NASOCOMIALES

// Obtener los elementos de entrada y salida
var neumoniaNasocomialesInput = document.getElementById('neumonia_nasocomiales');
var numEgresosInput = document.getElementById('num_egresos');
var tasaNeumoniaNNOutput = document.getElementById('tasa_neumoniaNN');

// Escuchar cambios en los campos de entrada
neumoniaNasocomialesInput.addEventListener('input', calcularTasaNN);
numEgresosInput.addEventListener('input', calcularTasaNN);

// Función para calcular la tasa de Neumonía NN
function calcularTasaNN() {
    // Obtener los valores de entrada
    var neumoniaNasocomiales = parseFloat(neumoniaNasocomialesInput.value);
    var numEgresos = parseFloat(numEgresosInput.value);

    // Verificar si los valores de entrada son válidos
    if (!isNaN(neumoniaNasocomiales) && !isNaN(numEgresos) && numEgresos !== 0) {
        // Realizar el cálculo de la tasa
        var tasaNeumoniaNN = (neumoniaNasocomiales / numEgresos) * 100;

        // Mostrar el resultado en el campo correspondiente
        tasaNeumoniaNNOutput.value = tasaNeumoniaNN.toFixed(1); // Redondeamos a 2 decimales
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío
        tasaNeumoniaNNOutput.value = '';
    }
}

//  TASA PARA CALCULAR NEUMONIA VENTILACIÓN MECANICA

// Obtener los elementos de entrada y salida
var neumoniaInput = document.getElementById('neumonia_ventilacionmecanica');
var diasInput = document.getElementById('dias_ventilacion_mecanica');
var tasaOutput = document.getElementById('tasa_neumoniaVM');

// Escuchar cambios en los campos de entrada
neumoniaInput.addEventListener('input', calcularTasa1);
diasInput.addEventListener('input', calcularTasa1);

// Función para calcular la tasa 
function calcularTasa1() {
    var neumoniaVentilacionMecanica = parseFloat(neumoniaInput.value);
    var diasVentilacionMecanica = parseFloat(diasInput.value);

    if (!isNaN(neumoniaVentilacionMecanica) && !isNaN(diasVentilacionMecanica) && diasVentilacionMecanica !== 0) {
        // Realizar el cálculo de la tasa
        var tasaNeumoniaVM = (neumoniaVentilacionMecanica / diasVentilacionMecanica) * 1000;

        // Mostrar el resultado 
        tasaOutput.value = tasaNeumoniaVM.toFixed(1); // Redondeamos a 2 decimales

        // Aplicar estilo de relleno rojo si el valor es mayor o igual a 14
        if (tasaNeumoniaVM >= 14) {
            tasaOutput.style.backgroundColor = 'red';
        } else {
            tasaOutput.style.backgroundColor = 'green'; // Restablecer el color de fondo a su valor predeterminado
        }
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío y el estilo de fondo predeterminado
        tasaOutput.value = '';
        tasaOutput.style.backgroundColor = '';
    }
}

//  TASA PARA CALCULAR BACTERIEMIA

// Obtener los elementos de entrada y salida
var bacteriemiaInput = document.getElementById('infeccion_torrentesanguineo_cateterVC');
var diasCateterInput = document.getElementById('dias_catetercentral');
var tasaBacteriaOutput = document.getElementById('tasa_bacteriemia');

// Escuchar cambios en los campos de entrada
bacteriemiaInput.addEventListener('input', calcularTasa2);
diasCateterInput.addEventListener('input', calcularTasa2);

// Función para calcular la tasa 
function calcularTasa2() {
    var bacteriemia = parseFloat(bacteriemiaInput.value);
    var diasCateter = parseFloat(diasCateterInput.value);

    if (!isNaN(bacteriemia) && !isNaN(diasCateter) && diasCateter !== 0) {
        // Realizar el cálculo de la tasa
        var tasaBacteriemia = (bacteriemia / diasCateter) * 1000;

        // Mostrar el resultado 
        tasaBacteriaOutput.value = tasaBacteriemia.toFixed(2); // Redondeamos a 2 decimales

        // Aplicar estilo de relleno rojo si el valor es mayor o igual a 2.45
        if (tasaBacteriemia >= 2.45) {
            tasaBacteriaOutput.style.backgroundColor = 'red';
        } else {
            tasaBacteriaOutput.style.backgroundColor = 'green'; // Restablecer el color de fondo a su valor predeterminado
        }
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío y el estilo de fondo predeterminado
        tasaBacteriaOutput.value = '';
        tasaBacteriaOutput.style.backgroundColor = '';
    }
}

//  TASA PARA CALCULAR SONDA VESICAL

// Obtener los elementos de entrada y salida
var viasUrinariasInput = document.getElementById('infeccion_tractoUrinario_CaterUrinario');
var diasSondasInput = document.getElementById('dias_SondasVesical');
var tasaInfeccionCUOutput = document.getElementById('tasa_infeccion_ViasUrinarias');

// Escuchar cambios en los campos de entrada
viasUrinariasInput.addEventListener('input', calcularTasa3);
diasSondasInput.addEventListener('input', calcularTasa3);

// Función para calcular la tasa  
function calcularTasa3() {
    var infeccionViasUrinarias = parseFloat(viasUrinariasInput.value);
    var diasSonda = parseFloat(diasSondasInput.value);

    if (!isNaN(infeccionViasUrinarias) && !isNaN(diasSonda) && diasSonda !== 0) {
        // Realizar el cálculo de la tasa
        var tasaInfeccionCU = (infeccionViasUrinarias / diasSonda) * 1000;

        // Mostrar el resultado 
        tasaInfeccionCUOutput.value = tasaInfeccionCU.toFixed(2); // Redondeamos a 2 decimales

    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío y el estilo de fondo predeterminado
        tasaInfeccionCUOutput.value = '';
        tasaInfeccionCUOutput.style.backgroundColor = '';
    }
}

//  TASA PARA CALCULAR IHQX

// Obtener los elementos de entrada y salida
var infeccionSitioQxInput = document.getElementById('Infeccion_sitio_qx');
var numeroTotalISQXInput = document.getElementById('numero_total_ISQX');
var tasaISQXOutput = document.getElementById('tasa_isqx');

// Escuchar cambios en los campos de entrada
infeccionSitioQxInput.addEventListener('input', calcularTasaISQX);
numeroTotalISQXInput.addEventListener('input', calcularTasaISQX);

// Función para calcular la tasa de ISQX
function calcularTasaISQX() {
    // Obtener los valores de entrada
    var infeccionSitioQx = parseFloat(infeccionSitioQxInput.value);
    var numeroTotalISQX = parseFloat(numeroTotalISQXInput.value);

    // Verificar si los valores de entrada son válidos
    if (!isNaN(infeccionSitioQx) && !isNaN(numeroTotalISQX) && numeroTotalISQX !== 0) {
        // Realizar el cálculo de la tasa
        var tasaISQX = (infeccionSitioQx / numeroTotalISQX) * 100;

        // Mostrar el resultado en el campo correspondiente
        tasaISQXOutput.value = tasaISQX.toFixed(2); // Redondeamos a 2 decimales
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío
        tasaISQXOutput.value = '';
    }
}

// Obtener los elementos de entrada y salida
var diarreanasoInput = document.getElementById('diarrea_tasa');
var diasCDifficileInput = document.getElementById('numero_egresos_diarreas');
var tasadiarreaotput = document.getElementById('tasa_diarrea_resul');

// Escuchar cambios en los campos de entrada
diarreanasoInput.addEventListener('input', calcularTasaDiarrea);
diasCDifficileInput.addEventListener('input', calcularTasaDiarrea);

// Función para calcular la tasa de Diarrea Nasocomiales
function calcularTasaDiarrea() {
    var diarreaso = parseFloat(diarreanasoInput.value);
    var diasCDifficile = parseFloat(diasCDifficileInput.value);

    // Verificar si los valores de entrada son válidos
    if (!isNaN(diarreaso) && !isNaN(diasCDifficile) && diasCDifficile !== 0) {
        // Realizar el cálculo de la tasa
        var tasaDiarrea = (diarreaso / diasCDifficile) * 100;

        // Mostrar el resultado en el campo correspondiente
        tasadiarreaotput.value = tasaDiarrea.toFixed(2); // Redondeamos a 2 decimales
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío
        tasadiarreaotput.value = '';
    }
}

    
