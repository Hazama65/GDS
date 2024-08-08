// Script para calcular IMC
document.addEventListener('DOMContentLoaded', function () {
    const tallaInput = document.getElementById('Seguimiento_talla');
    const pesoInput = document.getElementById('Seguimiento_peso');
    const imcInput = document.getElementById('Seguimiento_imc');
    const descripcionInput = document.getElementById('Seguimiento_imcdescripcion');

    tallaInput.addEventListener('input', calculaIMC);
    pesoInput.addEventListener('input', calculaIMC);

    function calculaIMC() {
        const talla = parseFloat(tallaInput.value.replace(',', '.'));
        const peso = parseFloat(pesoInput.value);

        if (talla && peso) {
            const imc = peso / (talla * talla);
            const descripcion = obtenerDescripcionIMC(imc);

            imcInput.value = imc.toFixed(2);
            descripcionInput.value = descripcion;
        } else {
            imcInput.value = '';
            descripcionInput.value = '';
        }
    }

    function obtenerDescripcionIMC(imc) {
        if (imc < 18.5) {
            return 'Bajo peso';
        } else if (imc >= 18.5 && imc < 25) {
            return 'Peso normal';
        } else if (imc >= 25 && imc < 30) {
            return 'Sobrepeso';
        } else if (imc >= 30 && imc < 35) {
            return 'Obesidad grado I';
        } else if (imc >= 35 && imc < 40) {
            return 'Obesidad grado II';
        } else {
            return 'Obesidad grado III';
        }
    }
});



// Apartado Relaciones Sexuales

function showRelacionesSexualesDiv(checkbox) {
    var relacionesSexualesDiv = document.getElementById('Seguimiento_relacionessexuales');
    relacionesSexualesDiv.style.display = checkbox.checked ? 'block' : 'none';
}

// Respuesta Viral Sostenida

function showRVSOptions(select) {
    var valorRVS = document.getElementById('idvalorrvs');
    var fechaRVS = document.getElementById('idfrvs');

    if (select.value === 'Detectable') {
        valorRVS.style.display = 'block';
        fechaRVS.style.display = 'block';
    } else {
        valorRVS.style.display = 'none';
        fechaRVS.style.display = 'none';
    }
}


// Ultrasonido hepatico

function showUHOptions(select) {
    var resultadoUltrasonido = document.getElementById('Seguimiento_idresultadoultrasonido');
    var esteatosis = document.getElementById('idesteatosis');

    if (select.value === 'Si') {
        resultadoUltrasonido.style.display = 'block';
    } else {
        resultadoUltrasonido.style.display = 'none';
        esteatosis.style.display = 'none';
    }
}



//Muestra Esteatosis

function showEsteatosisOptions(select) {
    var esteatosis = document.getElementById('Seguimiento_idesteatosis');

    if (select.value === 'Esteatosis') {
        esteatosis.style.display = 'block';
    } else {
        esteatosis.style.display = 'none';
    }
}


// Calculo del FIB4

function calculateFIB4Result() {
    // Obtener el valor de FIB 4
    var fib4Value = parseFloat(document.getElementById('Seguimiento_fib4').value);

    // Obtener el elemento donde se mostrará el resultado
    var resultadoFIBElement = document.getElementById('Seguimiento_resultadofib');

    // Calcular el resultado FIB 4 y actualizar el elemento correspondiente
    if (fib4Value <= 1.45) {
        resultadoFIBElement.value = "F0-F2 Sin Fibrosis Avanzada";
    } else if (fib4Value <= 3.25) {
        resultadoFIBElement.value = "Fibrosis Intermedia";
    } else {
        resultadoFIBElement.value = "F3-F4 Fibrosis Significativa";
    }
}


// Calculo de NAFLD

function calculateNAFLDResult() {
    // Obtener el valor de NAFLD
    var nafldValue = parseFloat(document.getElementById('Seguimiento_nafld').value);

    // Obtener el elemento donde se mostrará el resultado
    var resultadoNAFLDElement = document.getElementById('Seguimiento_resultadonafld');

    // Calcular el resultado de NAFLD y actualizar el elemento correspondiente
    if (nafldValue <= 1.455) {
        resultadoNAFLDElement.value = "F0-F2 Sin Fibrosis Avanzada";
    } else if (nafldValue <= 0.675) {
        resultadoNAFLDElement.value = "Fibrosis Intermedia";
    } else {
        resultadoNAFLDElement.value = "F3-F4 Fibrosis Significativa";
    }
}


  //Calculo de APRI
  function calculateAPRIResult() {
    // Obtener el valor de APRI
    var apriValue = parseFloat(document.getElementById('Seguimiento_apri').value);

    // Obtener el elemento donde se mostrará el resultado
    var resultadoAPRIElement = document.getElementById('Seguimiento_resultadoapri');

    // Calcular el resultado de APRI y actualizar el elemento correspondiente
    if (apriValue <= 1.5) {
      resultadoAPRIElement.value = "F0-F2 Sin Fibrosis Avanzada";
    } else if (apriValue <= 0.5) {
      resultadoAPRIElement.value = "Fibrosis Intermedia";
    } else {
      resultadoAPRIElement.value = "F3-F4 Fibrosis Significativa";
    }
  }


  
  //Script que se habilita cuando se selecciona Sí en Defunción.

  function showDefuncionOptions(select) {
    var causadefuncionDiv = document.getElementById('Seguimiento_idcausadefuncion');

    // Mostrar el div de causadefuncion solo si se selecciona "Sí" en el select de defunción
    causadefuncionDiv.style.display = (select.value === 'Si') ? 'block' : 'none';
  }