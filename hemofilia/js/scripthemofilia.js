function formatoNombre() {
    var nombreInput = document.getElementById('nombre');
    nombreInput.value = nombreInput.value.toLowerCase().replace(/\b\w/g, function (l) {
        return l.toUpperCase();
    });
}

function curp2date() {
    var curpInput = document.getElementById('curp');
    var fechaInput = document.getElementById('fecha');
    var edadInput = document.getElementById('edad');
    var sexoInput = document.getElementById('sexo');

    var curp = curpInput.value.toUpperCase();
    curpInput.value = curp; // Convierte el CURP a mayúsculas

    var fechaNacimiento = curp.substring(4, 10);
    var año = parseInt(fechaNacimiento.substring(0, 2));

    // Ajusta el año para nacimientos en el 2000 o posterior
    if (año >= 0 && año <= 19) {
        año = 2000 + año;
    } else {
        año = 1900 + año;
    }

    var mes = fechaNacimiento.substring(2, 4);
    var dia = fechaNacimiento.substring(4, 6);
    var fechaCompleta = año + "-" + mes + "-" + dia;

    fechaInput.value = fechaCompleta;

    var today = new Date();
    var birthDate = new Date(fechaCompleta);
    var age = today.getFullYear() - birthDate.getFullYear();

    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    edadInput.value = age;

    var sexo = curp.substring(10, 11);
    sexoInput.value = (sexo === 'H') ? 'Hombre' : 'Mujer';
}





document.getElementById("deficienciafactor").addEventListener("change", function() {
    var selectedOption = this.value;
    
    // Ocultar todos los selects y el input
    document.getElementById("idtipovw").style.display = "none";
    document.getElementById("idtipoVIII").style.display = "none";
    document.getElementById("idtipoIX").style.display = "none";
    document.getElementById("idtipoXI").style.display = "none";
    document.getElementById("idotrashemofilias").style.display = "none";
    
    // Mostrar el select correspondiente según la opción seleccionada
    if (selectedOption === "EVW") {
        document.getElementById("idtipovw").style.display = "block";
    } else if (selectedOption === "VIII") {
        document.getElementById("idtipoVIII").style.display = "block";
    } else if (selectedOption === "IX") {
        document.getElementById("idtipoIX").style.display = "block";
    } else if (selectedOption === "XI") {
        document.getElementById("idtipoXI").style.display = "block";
    } else if (selectedOption === "Otras") {
        document.getElementById("idotrashemofilias").style.display = "block";
    }
});



document.getElementById("inhibidor").addEventListener("change", function() {
    var selectedOption = this.value;
    
    // Ocultar todos los campos
    document.getElementById("idbajarespuesta").style.display = "none";
    document.getElementById("idaltarespuesta").style.display = "none";
    
    // Mostrar el campo correspondiente según la opción seleccionada
    if (selectedOption === "Baja respuesta -5UB") {
        document.getElementById("idbajarespuesta").style.display = "block";
    } else if (selectedOption === "Alta respuesta >5UB") {
        document.getElementById("idaltarespuesta").style.display = "block";
    }
});


document.getElementById("artropatiahemolitica").addEventListener("change", function() {
    var selectedOption = this.value;
    var areaAfectadaSelect = document.getElementById("idarea_afectada");
    
    // Mostrar u ocultar el campo "Área Afectada" según la selección en "Artropatia Hemolitica"
    if (selectedOption === "Si") {
        areaAfectadaSelect.style.display = "block";
    } else {
        areaAfectadaSelect.style.display = "none";
    }
});

document.getElementById("sangradosmensuales").addEventListener("input", function() {
    var sangradosMensualesValue = this.value;
    var requiereFactorSelect = document.getElementById("idrequierefactor");
    
    // Mostrar u ocultar el campo "Requirió factor" según el valor en "No. de Sangrados Mensuales"
    if (sangradosMensualesValue > 1) {
        requiereFactorSelect.style.display = "block";
    } else {
        requiereFactorSelect.style.display = "none";
    }
});



function validarNumero(input) {
    if (input.value < 0) {
        input.value = 0;
    } else if (input.value > 8) {
        input.value = 8;
    }
}

  // Función para calcular la suma de los valores seleccionados en los radio buttons INDEPENDENCIA FUNCIONAL FISH
  function calcularSuma() {
    // Suma de los valores de Cuidado Personal
    const cuidadoPersonal = [
      parseInt(document.querySelector('input[name="comer"]:checked').value) || 0,
      parseInt(document.querySelector('input[name="banarse"]:checked').value) || 0,
      parseInt(document.querySelector('input[name="vestirse"]:checked').value) || 0,
    ].reduce((a, b) => a + b, 0);

    // Suma de los valores de Transferir
    const transferir = [
      parseInt(document.querySelector('input[name="sentar"]:checked').value) || 0,
      parseInt(document.querySelector('input[name="Cunclillas"]:checked').value) || 0,
    ].reduce((a, b) => a + b, 0);

    // Suma de los valores de Locomotor
    const locomotor = [
      parseInt(document.querySelector('input[name="Caminar"]:checked').value) || 0,
      parseInt(document.querySelector('input[name="Correr"]:checked').value) || 0,
      parseInt(document.querySelector('input[name="Subir"]:checked').value) || 0,
    ].reduce((a, b) => a + b, 0);

    // Suma total
    const sumaTotal = cuidadoPersonal + transferir + locomotor;

    // Actualiza el valor en el input de Independencia Funcional (FISH)
    document.getElementById('resultadoFISH').value = sumaTotal;
  }

  // Asigna la función calcularSuma a todos los radio buttons
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach((radioButton) => {
    radioButton.addEventListener('change', calcularSuma);
  });


//*****************************************+ */
// Función para calcular la suma de los valores seleccionados en los select de SALUD ARTICULAR
function calcularSumaArticulaciones() {
    var suma = 0;

    // Lista de selectores a los que deseas aplicar la suma
    const selectores = [
        'inflamacion',
        'duracion',
        'atrofiamuscular',
        'crepitacion_movimiento',
        'perdida_flexion',
        'perdida_extension',
        'dolor_articular',
        'fuerza',
        'inflamacion_codoDerecho',
        'duracion_codoDerecho',
        'atrofiamuscular_codoDerecho',
        'crepitacion_movimiento_codoDerecho',
        'perdida_flexion_codoDerecho',
        'perdida_extension_codoDerecho',
        'dolor_articular_codoDerecho',
        'fuerza_codoDerecho',
        'inflamacion_RodillaIzquierda',
        'duracion_RodillaIzquierda',
        'atrofiamuscular_RodillaIzquierda',
        'crepitacion_movimiento_RodillaIzquierda',
        'perdida_flexion_RodillaIzquierda',
        'perdida_extension_RodillaIzquierda',
        'dolor_articular_RodillaIzquierda',
        'fuerza_RodillaIzquierda',
        'inflamacion_RodillaDerecha',
        'duracion_RodillaDerecha',
        'atrofiamuscular_RodillaDerecha',
        'crepitacion_movimiento_RodillaDerecha',
        'perdida_flexion_RodillaDerecha',
        'perdida_extension_RodillaDerecha',
        'dolor_articular_RodillaDerecha',
        'fuerza_RodillaDerecha',
        'inflamacion_TobilloIzquierdo',
        'duracion_TobilloIzquierdo',
        'atrofiamuscular_TobilloIzquierdo',
        'crepitacion_movimiento_TobilloIzquierdo',
        'perdida_flexion_TobilloIzquierdo',
        'perdida_extension_TobilloIzquierdo',
        'dolor_articular_TobilloIzquierdo',
        'fuerza_TobilloIzquierdo',
        'inflamacion_TobilloDerecho',
        'duracion_TobilloDerecho',
        'atrofiamuscular_TobilloDerecho',
        'crepitacion_movimiento_TobilloDerecho',
        'perdida_flexion_TobilloDerecho',
        'perdida_extension_TobilloDerecho',
        'dolor_articular_TobilloDerecho',
        'fuerza_TobilloDerecho'
    ];

    selectores.forEach(function(selector) {
        var selectElement = document.getElementById(selector);
        var selectedValue = parseInt(selectElement.options[selectElement.selectedIndex].getAttribute("data-valor"));
        if (!isNaN(selectedValue)) {
            suma += selectedValue;
        }
    });

    document.getElementById("suma_articulaciones").value = suma;
}

document.addEventListener('DOMContentLoaded', function() {
    // Agrega un listener de cambio a todos los selectores en la lista
    const selectores = [
        'inflamacion',
        'duracion',
        'atrofiamuscular',
        'crepitacion_movimiento',
        'perdida_flexion',
        'perdida_extension',
        'dolor_articular',
        'fuerza',
        'inflamacion_codoDerecho',
        'duracion_codoDerecho',
        'atrofiamuscular_codoDerecho',
        'crepitacion_movimiento_codoDerecho',
        'perdida_flexion_codoDerecho',
        'perdida_extension_codoDerecho',
        'dolor_articular_codoDerecho',
        'fuerza_codoDerecho',
        'inflamacion_RodillaIzquierda',
        'duracion_RodillaIzquierda',
        'atrofiamuscular_RodillaIzquierda',
        'crepitacion_movimiento_RodillaIzquierda',
        'perdida_flexion_RodillaIzquierda',
        'perdida_extension_RodillaIzquierda',
        'dolor_articular_RodillaIzquierda',
        'fuerza_RodillaIzquierda',
        'inflamacion_RodillaDerecha',
        'duracion_RodillaDerecha',
        'atrofiamuscular_RodillaDerecha',
        'crepitacion_movimiento_RodillaDerecha',
        'perdida_flexion_RodillaDerecha',
        'perdida_extension_RodillaDerecha',
        'dolor_articular_RodillaDerecha',
        'fuerza_RodillaDerecha',
        'inflamacion_TobilloIzquierdo',
        'duracion_TobilloIzquierdo',
        'atrofiamuscular_TobilloIzquierdo',
        'crepitacion_movimiento_TobilloIzquierdo',
        'perdida_flexion_TobilloIzquierdo',
        'perdida_extension_TobilloIzquierdo',
        'dolor_articular_TobilloIzquierdo',
        'fuerza_TobilloIzquierdo',
        'inflamacion_TobilloDerecho',
        'duracion_TobilloDerecho',
        'atrofiamuscular_TobilloDerecho',
        'crepitacion_movimiento_TobilloDerecho',
        'perdida_flexion_TobilloDerecho',
        'perdida_extension_TobilloDerecho',
        'dolor_articular_TobilloDerecho',
        'fuerza_TobilloDerecho'
    ];

    selectores.forEach(function(selector) {
        var selectElement = document.getElementById(selector);
        selectElement.addEventListener('change', calcularSumaArticulaciones);
    });
});



function calcularPuntuacionHJHSTotal() {
    var sumaArticulaciones = parseInt(document.getElementById("suma_articulaciones").value);
    var marchaGlobal = parseInt(document.getElementById("marcha_global").value);

    // Verifica si los valores son números antes de sumarlos
    if (!isNaN(sumaArticulaciones) && !isNaN(marchaGlobal)) {
        var puntuacionHJHSTotal = sumaArticulaciones + marchaGlobal;
        document.getElementById("puntuacion_HJHS").value = puntuacionHJHSTotal;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Agrega un listener de cambio al select de "Marcha Global"
    var marchaGlobalElement = document.getElementById("marcha_global");
    marchaGlobalElement.addEventListener('change', calcularPuntuacionHJHSTotal);
    
    // Agrega un listener de cambio al select de "Suma del total de Articulaciones"
    var sumaArticulacionesElement = document.getElementById("suma_articulaciones");
    sumaArticulacionesElement.addEventListener('change', calcularPuntuacionHJHSTotal);
});


/*CÓDIGO PARA LO QUE CORRESPONDE A USG 6 MESES */
/************************************************ */
///Este fragmento de codigo lo que hace es que, cuando seleccione Derrame Sinovitis o Hipertrofia sinovial, se mostrará la opción que corresponda:
document.getElementById("actividad_inflamatoria").addEventListener("change", function() {
    var selectedOption = this.value;
    
    // Ocultar todos los selectores relacionados
    document.getElementById("id_derrame_sinovitis").style.display = "none";
    document.getElementById("id_hipertrofia_sinovial").style.display = "none";
    
    // Mostrar el selector correspondiente según la opción seleccionada
    if (selectedOption === "Derrame Sinovitis") {
        document.getElementById("id_derrame_sinovitis").style.display = "block";
    } else if (selectedOption === "Hipertrofia sinovial") {
        document.getElementById("id_hipertrofia_sinovial").style.display = "block";
    }
});


//este codigo es el que debe sumar USG (escala HEAD US) 6 meses
function actualizarSuma() {
    var derrameSinovitis = parseInt(document.getElementById("derrame_sinovitis").selectedOptions[0].getAttribute('data-valor')) || 0;
    var hipertrofiaSinovial = parseInt(document.getElementById("hipertrofia_sinovial").selectedOptions[0].getAttribute('data-valor')) || 0;
    var cartilago = parseInt(document.getElementById("Cartilago").selectedOptions[0].getAttribute('data-valor')) || 0;
    var hueso = parseInt(document.getElementById("Hueso").selectedOptions[0].getAttribute('data-valor')) || 0;

    var suma = derrameSinovitis + hipertrofiaSinovial + cartilago + hueso;

    document.getElementById("USG_6meses").value = suma;
}

// Escucha los cambios en los select
document.getElementById("derrame_sinovitis").addEventListener("change", actualizarSuma);
document.getElementById("hipertrofia_sinovial").addEventListener("change", actualizarSuma);
document.getElementById("Cartilago").addEventListener("change", actualizarSuma);
document.getElementById("Hueso").addEventListener("change", actualizarSuma);

// Llamada inicial para mostrar la suma cuando la página carga
actualizarSuma();






/************************************************ */
/*CÓDIGO PARA LO QUE CORRESPONDE A USG 12 MESES */
/************************************************ */

///Este fragmento de codigo lo que hace es que, cuando seleccione Derrame Sinovitis o Hipertrofia sinovial, se mostrará la opción que corresponda: (12 meses)
document.getElementById("actividad_inflamatoria12").addEventListener("change", function() {
    var selectedOption = this.value;
    
    // Ocultar todos los selectores relacionados
    document.getElementById("id_derrame_sinovitis12").style.display = "none";
    document.getElementById("id_hipertrofia_sinovial12").style.display = "none";
    
    // Mostrar el selector correspondiente según la opción seleccionada
    if (selectedOption === "Derrame Sinovitis") {
        document.getElementById("id_derrame_sinovitis12").style.display = "block";
    } else if (selectedOption === "Hipertrofia sinovial") {
        document.getElementById("id_hipertrofia_sinovial12").style.display = "block";
    }
});


// Función para sumar los valores del conjunto de select de 12 meses
function actualizarSuma12() {
    var derrameSinovitis12 = parseInt(document.getElementById("derrame_sinovitis12").selectedOptions[0].getAttribute('data-valor')) || 0;
    var hipertrofiaSinovial12 = parseInt(document.getElementById("hipertrofia_sinovial12").selectedOptions[0].getAttribute('data-valor')) || 0;
    var cartilago12 = parseInt(document.getElementById("Cartilago12").selectedOptions[0].getAttribute('data-valor')) || 0;
    var hueso12 = parseInt(document.getElementById("Hueso12").selectedOptions[0].getAttribute('data-valor')) || 0;

    var suma = derrameSinovitis12 + hipertrofiaSinovial12 + cartilago12 + hueso12;

    document.getElementById("USG_12").value = suma;
}

// Escucha los cambios en los select del conjunto de 12 meses
document.getElementById("derrame_sinovitis12").addEventListener("change", actualizarSuma12);
document.getElementById("hipertrofia_sinovial12").addEventListener("change", actualizarSuma12);
document.getElementById("Cartilago12").addEventListener("change", actualizarSuma12);
document.getElementById("Hueso12").addEventListener("change", actualizarSuma12);

// Llamada inicial para mostrar la suma cuando la página carga
actualizarSuma12();




/************************************************ */
/*CÓDIGO PARA LO QUE CORRESPONDE A USG 24 MESES */
/************************************************ */

///Este fragmento de codigo lo que hace es que, cuando seleccione Derrame Sinovitis o Hipertrofia sinovial, se mostrará la opción que corresponda: (12 meses)
document.getElementById("actividad_inflamatoria24").addEventListener("change", function() {
    var selectedOption = this.value;
    
    // Ocultar todos los selectores relacionados
    document.getElementById("id_derrame_sinovitis24").style.display = "none";
    document.getElementById("id_hipertrofia_sinovial24").style.display = "none";
    
    // Mostrar el selector correspondiente según la opción seleccionada
    if (selectedOption === "Derrame Sinovitis") {
        document.getElementById("id_derrame_sinovitis24").style.display = "block";
    } else if (selectedOption === "Hipertrofia sinovial") {
        document.getElementById("id_hipertrofia_sinovial24").style.display = "block";
    }
});


// Función para sumar los valores del conjunto de select de 12 meses
function actualizarSuma24() {
    var derrameSinovitis24 = parseInt(document.getElementById("derrame_sinovitis24").selectedOptions[0].getAttribute('data-valor')) || 0;
    var hipertrofiaSinovial24 = parseInt(document.getElementById("hipertrofia_sinovial24").selectedOptions[0].getAttribute('data-valor')) || 0;
    var cartilago24 = parseInt(document.getElementById("Cartilago24").selectedOptions[0].getAttribute('data-valor')) || 0;
    var hueso24 = parseInt(document.getElementById("Hueso24").selectedOptions[0].getAttribute('data-valor')) || 0;

    var suma = derrameSinovitis24 + hipertrofiaSinovial24 + cartilago24 + hueso24;

    document.getElementById("USG_24").value = suma;
}

// Escucha los cambios en los select del conjunto de 12 meses
document.getElementById("derrame_sinovitis24").addEventListener("change", actualizarSuma24);
document.getElementById("hipertrofia_sinovial24").addEventListener("change", actualizarSuma24);
document.getElementById("Cartilago24").addEventListener("change", actualizarSuma24);
document.getElementById("Hueso24").addEventListener("change", actualizarSuma24);

// Llamada inicial para mostrar la suma cuando la página carga
actualizarSuma24();

// PROFILAXIS
function mostrarProfilaxis() {
    var tipoTratamiento = document.getElementById("tipo_tratamiento");
    var divProfilaxis = document.getElementById("id_Profilaxis");

    if (tipoTratamiento.value === "Profilaxis") {
        divProfilaxis.style.display = "block";
    } else {
        divProfilaxis.style.display = "none";
    }
}



function mostrarCampos() {
    var perfilaxisConEmicizumab = document.getElementById("Profilaxis_Emicizumab");
    var divTipoProfilaxis = document.getElementById("camposProfilaxis");
    var divDosisTipoProfilaxis = document.getElementById("id_dosis_tipoProfilaxis");
    var divTotalUI = document.getElementById("id_totalui");
    var divNoDosisPorSemana = document.getElementById("id_nodosisporsemana");
    var divEntrega = document.getElementById("id_entrega");

    if (perfilaxisConEmicizumab.value === "Si") {
        mostrarElemento(divTipoProfilaxis);
        mostrarElemento(divDosisTipoProfilaxis);
        mostrarElemento(divTotalUI);
        mostrarElemento(divNoDosisPorSemana);
        mostrarElemento(divEntrega);
    } else {
        ocultarElemento(divTipoProfilaxis);
        ocultarElemento(divDosisTipoProfilaxis);
        ocultarElemento(divTotalUI);
        ocultarElemento(divNoDosisPorSemana);
        ocultarElemento(divEntrega);
    }
}

// Funciones de utilidad para mostrar u ocultar elementos
function mostrarElemento(elemento) {
    elemento.style.display = "block";
}

function ocultarElemento(elemento) {
    elemento.style.display = "none";
}




function mostrarTerapiaReemplazo() {
    var inhibidor = document.getElementById("inhibidor");
    var terapiaReemplazo = document.getElementById("terapiaReemplazo");
    var camposTerapiaReemplazo = document.getElementById("camposTerapiaReemplazo");
    
    var agenteDesvio = document.getElementById("agenteDesvio");
    var camposAgenteDesvio = document.getElementById("camposAgenteDesvio");

    if (inhibidor.value === "Baja respuesta -5UB") {
        // Mostrar el contenedor y campos de terapia de reemplazo
        terapiaReemplazo.style.display = "block";
        camposTerapiaReemplazo.style.display = "block";

        // Ocultar el contenedor y campos de agente desvío
        agenteDesvio.style.display = "none";
        camposAgenteDesvio.style.display = "none";
    } else if (inhibidor.value === "Alta respuesta >5UB") {
        // Mostrar el contenedor y campos de agente desvío
        agenteDesvio.style.display = "block";
        camposAgenteDesvio.style.display = "block";

        // Ocultar el contenedor y campos de terapia de reemplazo
        terapiaReemplazo.style.display = "none";
        camposTerapiaReemplazo.style.display = "none";
    } else {
        // Ocultar ambos contenedores y campos si no se selecciona ninguna opción
        terapiaReemplazo.style.display = "none";
        camposTerapiaReemplazo.style.display = "none";
        agenteDesvio.style.display = "none";
        camposAgenteDesvio.style.display = "none";
    }
}



