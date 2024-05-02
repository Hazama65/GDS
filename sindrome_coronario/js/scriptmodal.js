//cambiar el CURP a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function() {
this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre');

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








// CARACTERISTICAS DEL DOLOR


document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectCaracDplor = document.getElementById("Caracteristica_dolor");
    var divCarcTIPICAS = document.getElementById("Cara_tipicas");
    var divCaracAtipicas = document.getElementById("Cara_Atipicas");

    // Agregar un evento de cambio al elemento select
    selectCaracDplor.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectCaracDplor.value === "Típicas") {
            // Si se selecciona "Típicas", mostrar el div correspondiente y ocultar el otro
            divCarcTIPICAS.style.display = "block";
            divCaracAtipicas.style.display = "none";
        } else if (selectCaracDplor.value === "Atípicas") {
            // Si se selecciona "Atípicas", mostrar el div correspondiente y ocultar el otro
            divCarcTIPICAS.style.display = "none";
            divCaracAtipicas.style.display = "block";
        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divCarcTIPICAS.style.display = "none";
            divCaracAtipicas.style.display = "none";
        }
    });
});


// MACE 


document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectMACE = document.getElementById("mace");
    var divKili = document.getElementById("Killi_kimball");

    // Agregar un evento de cambio al elemento select
    selectMACE.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectMACE.value === "Killip Kimball") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divKili.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divKili.style.display = "none";
        }
    });
});

// TRATAMIENTO TROMBOLISIS 

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectFibrinolisis = document.getElementById("Fibrinolisis");
    var divInicioFin = document.getElementById("inicio_fin_txfibronilis");

    // Agregar un evento de cambio al elemento select
    selectFibrinolisis.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectFibrinolisis.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divInicioFin.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divInicioFin.style.display = "none";
        }
    });
});

// LESIONES CORONARIAS

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectLesiones_coronarias = document.getElementById("Lesiones_coronarias");
    var divSi_lesionCoronaria = document.getElementById("Si_lesionCoronaria");

    // Agregar un evento de cambio al elemento select
    selectLesiones_coronarias.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectLesiones_coronarias.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divSi_lesionCoronaria.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divSi_lesionCoronaria.style.display = "none";
        }
    });
});

// TIMI

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectTIMI = document.getElementById("TIMI");
    var divtimi_pro1 = document.getElementById("timi_pro1");
    var divtimi_pro2 = document.getElementById("timi_pro2");


    // Agregar un evento de cambio al elemento select
    selectTIMI.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectTIMI.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divtimi_pro1.style.display = "block";
            divtimi_pro2.style.display = "block";


        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divtimi_pro1.style.display = "none";
            divtimi_pro2.style.display = "none";

        }
    });
});


// AIRBUS

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectAIRBUS = document.getElementById("AIRBUS");
    var divResultado_airbus = document.getElementById("Resultado_airbus");

    // Agregar un evento de cambio al elemento select
    selectAIRBUS.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectAIRBUS.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divResultado_airbus.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divResultado_airbus.style.display = "none";
        }
    });
});


// Prótesis Endovascular

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectProte_Endovascular = document.getElementById("Prote_Endovascular");
    var divcon_medicacion = document.getElementById("con_medicacion");
    var divcon_medicacion_2 = document.getElementById("con_medicacion_2");


    // Agregar un evento de cambio al elemento select
    selectProte_Endovascular.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectProte_Endovascular.value === "Con Medicación") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divcon_medicacion.style.display = "block";
            divcon_medicacion_2.style.display = "block";


        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divcon_medicacion.style.display = "none";
            divcon_medicacion_2.style.display = "none";

        }
    });
});

// Schockwave

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectSchockwave = document.getElementById("Schockwave");
    var divSchockwave_compli = document.getElementById("Complicaciones_Schockwave");

    // Agregar un evento de cambio al elemento select
    selectSchockwave.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectSchockwave.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divSchockwave_compli.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divSchockwave_compli.style.display = "none";
        }
    });
});


// MARCAPASOS

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectMarcapasos = document.getElementById("Marcapasos");
    var divSoporte_ventricular = document.getElementById("sopor_ventri");

    // Agregar un evento de cambio al elemento select
    selectMarcapasos.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectMarcapasos.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divSoporte_ventricular.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divSoporte_ventricular.style.display = "none";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    var selectComplicaciones = document.getElementById("Complicaciones");
    var divDisfuncionVentri = document.getElementById("Disfuncion_ventri");
    var divMecanicas = document.getElementById("Mecanicas");
    var divPericardicas = document.getElementById("Pericardicas");
    var divElectricas = document.getElementById("Electricas");

    selectComplicaciones.addEventListener("change", function () {
        // Ocultar todos los campos
        divDisfuncionVentri.style.display = "none";
        divMecanicas.style.display = "none";
        divPericardicas.style.display = "none";
        divElectricas.style.display = "none";

        // Mostrar el campo correspondiente al valor seleccionado
        if (selectComplicaciones.value === "Disfunción Ventricular") {
            divDisfuncionVentri.style.display = "block";
        } else if (selectComplicaciones.value === "Mecánicas") {
            divMecanicas.style.display = "block";
        } else if (selectComplicaciones.value === "Pericárdicas") {
            divPericardicas.style.display = "block";
        } else if (selectComplicaciones.value === "Eléctricas") {
            divElectricas.style.display = "block";
        }
    });
});


// Gammagrama Cardiaco Inicial

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectGamma = document.getElementById("Gamma");
    var divresultado_gamma = document.getElementById("resultado_gamma");

    // Agregar un evento de cambio al elemento select
    selectGamma.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectGamma.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divresultado_gamma.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divresultado_gamma.style.display = "none";
        }
    });
});



// Resultado Gammagrama Cardiaco

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectgamma_cardi = document.getElementById("gamma_cardi");
    var divpositivo_1 = document.getElementById("positivo_1");
    var divpositivo_2 = document.getElementById("positivo_2");


    // Agregar un evento de cambio al elemento select
    selectgamma_cardi.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectgamma_cardi.value === "Positivo") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divpositivo_1.style.display = "block";
            divpositivo_2.style.display = "block";


        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divpositivo_1.style.display = "none";
            divpositivo_2.style.display = "none";

        }
    });
});


// Resultado Gammagrama Cardiaco

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectResonancia_inicial = document.getElementById("Resonancia_inicial");
    var divresonancia_resu = document.getElementById("resonancia_resu");
    var divresonancia_ergometria = document.getElementById("resonancia_ergometria");


    // Agregar un evento de cambio al elemento select
    selectResonancia_inicial.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectResonancia_inicial.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divresonancia_resu.style.display = "block";
            divresonancia_ergometria.style.display = "block";


        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divresonancia_resu.style.display = "none";
            divresonancia_ergometria.style.display = "none";

        }
    });
});



// Seguimiento Postprocedimiento

document.addEventListener("DOMContentLoaded", function () {
    var selectCausaDefun = document.getElementById("Causa_defun");
    var divFechaDefuncion = document.getElementById("fecha_defuncion");

    selectCausaDefun.addEventListener("change", function () {
        // Ocultar el campo de fecha de defunción por defecto
        divFechaDefuncion.style.display = "none";

        // Mostrar el campo de fecha de defunción si se selecciona una causa cardiaca o no cardiaca
        if (selectCausaDefun.value === "Cardiaca" || selectCausaDefun.value === "No Cardiaca") {
            divFechaDefuncion.style.display = "block";
        }
    });
});
