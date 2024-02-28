
// Tasa de Neumonía Asociada a la Ventilación Mecánica

// Obtener los elementos de entrada y salida
var neumoniaInput = document.getElementById('neumonia_ventilacionmecanica');
var diasInput = document.getElementById('dias_ventilacion_mecanica');
var tasaOutput = document.getElementById('tasa_neumoniaVM');


neumoniaInput.addEventListener('input', calcularTasa1);
diasInput.addEventListener('input', calcularTasa1);

// Función para calcular la tasa 
function calcularTasa1() {

    var neumoniaVentilacionMecanica = parseFloat(neumoniaInput.value);
    var diasVentilacionMecanica = parseFloat(diasInput.value);


    if (!isNaN(neumoniaVentilacionMecanica) && !isNaN(diasVentilacionMecanica) && diasVentilacionMecanica !== 0) {
        // Realizar la regla de tres
        var tasaNeumoniaVM = (neumoniaVentilacionMecanica * 1000) / diasVentilacionMecanica;

        // Muestra  el resultado 
        tasaOutput.value = tasaNeumoniaVM.toFixed(2); // Redondeamos a 2 decimales
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío
        tasaOutput.value = '';
    }
}

// Tasa de Bacteriemia Asociada al Uso de Catéter Venoso Central


// Obtener los elementos de entrada y salida
var BacteriemiaInput = document.getElementById('infeccion_torrentesanguineo_cateterVC');
var diascateterInput = document.getElementById('dias_catetercentral');
var tasabacteriaOutput = document.getElementById('tasa_bacteriemia');


BacteriemiaInput.addEventListener('input', calcularTasa2);
diascateterInput.addEventListener('input', calcularTasa2);

// Función para calcular la tasa 
function calcularTasa2() {

    var Bacteriemia = parseFloat(BacteriemiaInput.value);
    var diasCateter= parseFloat(diascateterInput.value);


    if (!isNaN(Bacteriemia) && !isNaN(diasCateter) && diasCateter !== 0) {
        // Realizar la regla de tres
        var tasaNeumoniaBac = (Bacteriemia * 1000) / diasCateter;

        // Muestra  el resultado 
        tasabacteriaOutput.value = tasaNeumoniaBac.toFixed(2); // Redondeamos a 2 decimales
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío
        tasabacteriaOutput.value = '';
    }
}

// Tasa de Infección de Vías Urinarias Asociada al Uso de Cateter Urinario

// Obtener los elementos de entrada y salida
var ViasUrinariasInput = document.getElementById('infeccion_tractoUrinario_CaterUrinario');
var diasSondasInput = document.getElementById('dias_SondasVesical');
var tasainfeccionCUOutput = document.getElementById('tasa_infeccion_ViasUrinarias');


ViasUrinariasInput.addEventListener('input', calcularTasa3);
diasSondasInput.addEventListener('input', calcularTasa3);

// Función para calcular la tasa 
function calcularTasa3() {

    var Bacteriemia = parseFloat(ViasUrinariasInput.value);
    var diasSonda= parseFloat(diasSondasInput.value);


    if (!isNaN(Bacteriemia) && !isNaN(diasSonda) && diasSonda !== 0) {
        // Realizar la regla de tres
        var tasaInfeccionCU = (Bacteriemia * 1000) / diasSonda;

        // Muestra  el resultado 
        tasainfeccionCUOutput.value = tasaInfeccionCU.toFixed(2); // Redondeamos a 2 decimales
    } else {
        // Si los valores de entrada no son válidos, dejar el campo de salida vacío
        tasainfeccionCUOutput.value = '';
    }
}