
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


                                // Funcion de SOCIECONOMICO   

        function mostrarCampos() {
        var derechohabiencia = document.getElementById("derechohabiencia").value;
        var estudioSocioeconomicoField = document.getElementById("estudio_socioeconomico_field");
                                
        if (derechohabiencia === "Si") {
            estudioSocioeconomicoField.style.display = "block";
        } else {
            estudioSocioeconomicoField.style.display = "none";
            }
        }
                                    // Funcion de SOCIECONOMICO PARA DESPLEGAR                 
        function mostrarNivel() {
        var estudioSocioeconomico = document.getElementById("estudio_socioeconomico").value;
        var nivelField = document.getElementById("nivel_field");

        if (estudioSocioeconomico === "Si") {
            nivelField.style.display = "block";
        } else {
            nivelField.style.display = "none";
        }
    }              

     // Funcion PARA DESPLEGAR  DIABETES MELLITUS

document.addEventListener("DOMContentLoaded", function() {
    const diabetesSelect = document.getElementById("diabetesSelect");
    const heredoFamiliaContainer = document.getElementById("heredo_familia");

    diabetesSelect.addEventListener("change", function() {
        if (diabetesSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const HASSelect = document.getElementById("hipertensionSelect");
    const heredoFamiliaContainer = document.getElementById("HAS_familia");

    HASSelect.addEventListener("change", function() {
        if (HASSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

     // Funcion PARA DESPLEGAR  ENFEREMDADES CARDIOVASCULARES 

    function mostrarOcultarSecciones() {
        var seleccion = document.getElementById("EVCSelect").value;
        if (seleccion === "Si") {
            document.getElementById("ah_ecv").style.display = "block";
            document.getElementById("ah_ci").style.display = "block";
        } else {
            document.getElementById("ah_ecv").style.display = "none";
            document.getElementById("ah_ci").style.display = "none";
        }
    }
 // Funcion PARA DESPLEGAR  ENFEREMDADES CARDIOVASCULARES HEREDOFAMILIARES DE ECV 
    
    document.addEventListener("DOMContentLoaded", function() {
        const ECVSelect = document.getElementById("ECVSelect");
        const heredoFamiliaContainer = document.getElementById("ECV_familia");
    
        ECVSelect.addEventListener("change", function() {
            if (ECVSelect.value === "Si") {
                heredoFamiliaContainer.style.display = "block";
            } else {
                heredoFamiliaContainer.style.display = "none";
            }
        });
    });
 // Funcion PARA DESPLEGAR  ENFEREMDADES CARDIOVASCULARES HEREDOFAMILIARES CARDIOPATIAS ISQUEMICAS 
    
    document.addEventListener("DOMContentLoaded", function() {
    const CardiopatiaSelect = document.getElementById("CardiopatiaSelect");
    const heredoFamiliaContainer = document.getElementById("CI_familia");

    CardiopatiaSelect.addEventListener("change", function() {
        if (CardiopatiaSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

  // Funcion PARA DESPLEGAR  DISLIPIDEMIAS

  function mostrarOcultarSeccionesdislipidemias() {
    var seleccion = document.getElementById("dislipidemiaSelect").value;
    var trigliceridemia = document.getElementById("ah_trigliceridemia");
    var hipercolesterolemia = document.getElementById("ah_Hipercolesterolemia");

    if (seleccion === "Si") {
        trigliceridemia.style.display = "block";
        hipercolesterolemia.style.display = "block";
    } else {
        trigliceridemia.style.display = "none";
        hipercolesterolemia.style.display = "none";
    }
}

// Funcion PARA DESPLEGAR  DISLIPIDEMIAS HEREDOFAMILIARES DE HIPERTRIGLICERIDEMIA 
    
document.addEventListener("DOMContentLoaded", function() {
    const trigliceridemiaSelect = document.getElementById("trigliceridemiaSelect");
    const heredoFamiliaContainer = document.getElementById("trigliceridemia_familia");

    trigliceridemiaSelect.addEventListener("change", function() {
        if (trigliceridemiaSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Funcion PARA DESPLEGAR  DISLIPIDEMIAS HEREDOFAMILIARES DE Hipercolesterolemia 
    
document.addEventListener("DOMContentLoaded", function() {
    const HipercolesterolemiaSelect = document.getElementById("HipercolesterolemiaSelect");
    const heredoFamiliaContainer = document.getElementById("Hipercolesterolemia_familia");

    HipercolesterolemiaSelect.addEventListener("change", function() {
        if (HipercolesterolemiaSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// COMORBILIDADES " Enfermedad hepática grasa no  "

document.addEventListener("DOMContentLoaded", function() {
    const HepaticaSelect = document.getElementById("HepaticaSelect");
    const heredoFamiliaContainer = document.getElementById("com_Child");

    HepaticaSelect.addEventListener("change", function() {
        if (HepaticaSelect.value === "Cirrosis") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// COMORBILIDADES SINDROME DE CUSHING 

document.addEventListener("DOMContentLoaded", function() {
    const CushingSelect = document.getElementById("CushingSelect");
    const heredoFamiliaContainer = document.getElementById("com_sindrome");

    CushingSelect.addEventListener("change", function() {
        if (CushingSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Selccion de Tratamiento con Hipoglucemiantes 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("HipoglucemiantesSelect");
    var divElement = document.getElementById("tx_Hipoglucemiantes");

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

// Selccion de Tratamiento con INSULINAS

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("InsulinasSelect");
    var divElement = document.getElementById("tx_Insulinas");

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

// Para mostrar las DOsis Diarias en medicamento NPH

document.addEventListener("DOMContentLoaded", function() {
    const NPHSelect = document.getElementById("NPHSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_nph");

    NPHSelect.addEventListener("change", function() {
        if (NPHSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento Rapida Regular

document.addEventListener("DOMContentLoaded", function() {
    const RapidaRegularSelect = document.getElementById("RapidaRegularSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_rapidaregular");

    RapidaRegularSelect.addEventListener("change", function() {
        if (RapidaRegularSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento GLARGINA

document.addEventListener("DOMContentLoaded", function() {
    const GlarginaSelect = document.getElementById("GlarginaSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Glargina");

    GlarginaSelect.addEventListener("change", function() {
        if (GlarginaSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento GLARGINA 300

document.addEventListener("DOMContentLoaded", function() {
    const Glar300Select = document.getElementById("Glar300Select");
    const heredoFamiliaContainer = document.getElementById("dosis_Glar300");

    Glar300Select.addEventListener("change", function() {
        if (Glar300Select.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento DETEMIR

document.addEventListener("DOMContentLoaded", function() {
    const DetemirSelect = document.getElementById("DetemirSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Detemir");

    DetemirSelect.addEventListener("change", function() {
        if (DetemirSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento DEGLUDEC

document.addEventListener("DOMContentLoaded", function() {
    const DegludecrSelect = document.getElementById("DegludecrSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Degludec");

    DegludecrSelect.addEventListener("change", function() {
        if (DegludecrSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento LISPRO

document.addEventListener("DOMContentLoaded", function() {
    const LisproSelect = document.getElementById("LisproSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Lispro");

    LisproSelect.addEventListener("change", function() {
        if (LisproSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});


// Para mostrar las DOsis Diarias en medicamento LISPRO

document.addEventListener("DOMContentLoaded", function() {
    const AspartSelect = document.getElementById("AspartSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Aspart");

    AspartSelect.addEventListener("change", function() {
        if (AspartSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});


// Para mostrar las DOsis Diarias en medicamento Glulisina 

document.addEventListener("DOMContentLoaded", function() {
    const GlulisinaSelect = document.getElementById("GlulisinaSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Glulisina");

    GlulisinaSelect.addEventListener("change", function() {
        if (GlulisinaSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento NPH / REGULAR

document.addEventListener("DOMContentLoaded", function() {
    const NPHRegularSelect = document.getElementById("NPHRegularSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_nphRegular");

    NPHRegularSelect.addEventListener("change", function() {
        if (NPHRegularSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Para mostrar las DOsis Diarias en medicamento Lispro protamina/Lispro

document.addEventListener("DOMContentLoaded", function() {
    const ProtaminaSelect = document.getElementById("ProtaminaSelect");
    const heredoFamiliaContainer = document.getElementById("dosis_Protamina");

    ProtaminaSelect.addEventListener("change", function() {
        if (ProtaminaSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});

// Selccion de Tratamiento con Hipolipemiantes

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("HipolipemiantesSelect");
    var divElement = document.getElementById("tx_Hipolipemiantes");

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

// Selccion de Tratamiento con ANTIHIPERTENSIVOS

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("AntihipertensivosSelect");
    var divElement = document.getElementById("tx_Antihipertensivos");

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

// Selccion de Tratamiento con OTROS 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("OtrosSelect");
    var divElement = document.getElementById("tx_Otros");

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

function calcularNefropatia() {
    // Obtén el valor de la creatinina ingresado por el usuario
    var creatinina = parseFloat(document.getElementById("creatinina").value);

    // Calcula el rango de Nefropatía basado en el valor de creatinina
    var rango = "";
    if (creatinina > 90) {
        rango = "G1 >90 Normal";
    } else if (creatinina >= 60 && creatinina <= 89) {
        rango = "G2 60-89 Ligeramente disminuido";
    } else if (creatinina >= 45 && creatinina <= 59) {
        rango = "G3a 45-59 Descenso ligero-moderado";
    } else if (creatinina >= 30 && creatinina <= 44) {
        rango = "G3b 30-44 Descenso moderado";
    } else if (creatinina >= 15 && creatinina <= 29) {
        rango = "G4 15-29 Descenso severo";
    } else {
        rango = "G5 MENOS 15 Falla renal";
    }

    // Muestra el resultado en el campo de texto
    document.getElementById("id_nefro").value = rango;
}