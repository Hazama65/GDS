//cambiar el curp a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function() {
  this.value = this.value.toUpperCase();
});


// Función para cambiar la primera letra de cada palabra a mayusculas para que quede como nombre personal:
function capitalizeWords(str) {
    return str.replace(/(?:^|\s)\S/g, function(a) {
      return a.toUpperCase();
    });
  }
  
  const nombreInput = document.getElementById('nombre');
  
  nombreInput.addEventListener('blur', function() {
    this.value = capitalizeWords(this.value);
  });



// Función para calcular datos desde el CURP
function curp2date() {
    // Obtener el valor del CURP ingresado
    var curp = document.getElementById("curp").value;

    // Extraer la fecha de nacimiento y el sexo del CURP
    var fechaNacimiento = curp.substr(4, 6);
    var sexo = curp.substr(10, 1);

    // Calcular la fecha de nacimiento completa
    var year = fechaNacimiento.substr(0, 2);
    var month = fechaNacimiento.substr(2, 2);
    var day = fechaNacimiento.substr(4, 2);

    // Obtener la fecha actual
    var fechaActual = new Date();

    // Calcular la fecha de nacimiento completa considerando el siglo
    var birthYear = parseInt(year) < parseInt(fechaActual.getFullYear().toString().substr(2, 2))
        ? parseInt("20" + year)
        : parseInt("19" + year);
    var fechaNac = new Date(birthYear, month - 1, day);

    // Calcular la edad
    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si el mes actual es anterior al mes de nacimiento o si es el mismo mes pero el día actual es anterior al día de nacimiento
    if (
        (fechaActual.getMonth() < fechaNac.getMonth()) ||
        (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }

    // Mostrar la edad en el campo correspondiente
    document.getElementById("edad").value = edad;

    // Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
    var fechaCompleta = fechaNac.getFullYear() + "-" + month + "-" + day;
    document.getElementById("fecha").value = fechaCompleta;

    // Determinar el sexo y mostrarlo en el campo correspondiente
    if (sexo === "H") {
        document.getElementById("sexo").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sexo").value = "Mujer";
    }
}




//Script para calcular IMC
function calculaIMC() {
    const tallaInput = document.getElementById('talla');
    const pesoInput = document.getElementById('peso');
    const imcInput = document.getElementById('imc');
    const descripcionInput = document.getElementById('imcdescripcion');

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

document.addEventListener("DOMContentLoaded", function() {
    var referenciaSelect = document.getElementById("referencia");
    var unidadReferenciaDiv = document.getElementById("unidad_referencia_div");

    referenciaSelect.addEventListener("change", function() {
        if (referenciaSelect.value === "si") {
            unidadReferenciaDiv.style.display = "block";
        } else {
            unidadReferenciaDiv.style.display = "none";
        }
    });
});




// Apartado Relaciones Sexuales

function showRelacionesSexualesDiv(checkbox) {
    var relacionesSexualesDiv = document.getElementById('idrelacionessexuales');
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
    var resultadoUltrasonido = document.getElementById('idresultadoultrasonido');
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
    var esteatosis = document.getElementById('idesteatosis');

    if (select.value === 'Esteatosis') {
        esteatosis.style.display = 'block';
    } else {
        esteatosis.style.display = 'none';
    }
}


// Calculo del FIB4

function calculateFIB4Result() {
    // Obtener el valor de FIB 4
    var fib4Value = parseFloat(document.getElementById('fib4').value);

    // Obtener el elemento donde se mostrará el resultado
    var resultadoFIBElement = document.getElementById('resultadofib');

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
    var nafldValue = parseFloat(document.getElementById('nafld').value);

    // Obtener el elemento donde se mostrará el resultado
    var resultadoNAFLDElement = document.getElementById('resultadonafld');

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
    var apriValue = parseFloat(document.getElementById('apri').value);

    // Obtener el elemento donde se mostrará el resultado
    var resultadoAPRIElement = document.getElementById('resultadoapri');

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
    var causadefuncionDiv = document.getElementById('idcausadefuncion');

    // Mostrar el div de causadefuncion solo si se selecciona "Sí" en el select de defunción
    causadefuncionDiv.style.display = (select.value === 'Si') ? 'block' : 'none';
  }