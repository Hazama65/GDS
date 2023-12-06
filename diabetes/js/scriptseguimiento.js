function calculaIMC1() {
    const tallaInput = document.getElementById('talla_seg');
    const pesoInput = document.getElementById('peso_seg');
    const imcInput = document.getElementById('imc_seg');
    const descripcionInput = document.getElementById('imcdescripcion_seg');
    
    const talla = parseFloat(tallaInput.value.replace(',', '.'));
    const peso = parseFloat(pesoInput.value);
    
    // Verifica si los valores de talla y peso son válidos
    if (isNaN(talla) || isNaN(peso) || talla <= 0 || peso <= 0) {
        // Muestra un mensaje de error
        alert('Por favor, ingrese valores válidos para la talla y el peso.');
        return;
    }

    const imc = peso / (talla * talla);
    const descripcion = obtenerDescripcionIMC(imc);

    imcInput.value = imc.toFixed(2);
    descripcionInput.value = descripcion;
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

    // COMORBILIDADES " Enfermedad hepática grasa no  "

document.addEventListener("DOMContentLoaded", function() {
    const HepaticaSelect = document.getElementById("HepaticaSelect_seg");
    const heredoFamiliaContainer = document.getElementById("seg_Child");

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
    const CushingSelect = document.getElementById("CushingSelect_seg");
    const heredoFamiliaContainer = document.getElementById("seg_sindrome");

    CushingSelect.addEventListener("change", function() {
        if (CushingSelect.value === "Si") {
            heredoFamiliaContainer.style.display = "block";
        } else {
            heredoFamiliaContainer.style.display = "none";
        }
    });
});


// AL INTRODUCIR VALOR IGUAL O MENOR A 11 SE HABILITE EL CAMPO DE HB GLUCOSILADA

document.getElementById("id_HB_seg").addEventListener("input", function() {
    var valorBH = parseFloat(this.value);
    var glucosiladaInput = document.getElementById("id_glucosilada_seg");

    if (valorBH <= 11) {
        glucosiladaInput.readOnly = true;
    } else {
        glucosiladaInput.readOnly = false;
    }
});


// COMPLICACIONES NEFROPATIA

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("neuropatiaSelect_seg");
    var divElement = document.getElementById("neuropatia_seg");

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


                        // COMPLICACIONES AMPUTACIONES

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("AmputacionesSelect_seg");
    var divElement = document.getElementById("amputaciones_seg");

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

// SELECCIONAR LATERALIDAD DE DEDOS-AMPUTADOS

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y los divs que se deben mostrar/ocultar
    var selectElement = document.getElementById("amputaciones_dedos_seg");
    var divMano = document.getElementById("dedos_Mano_seg");
    var divPies = document.getElementById("dedos_Pies_seg");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra los divs si se selecciona "Si"
            divMano.style.display = "block";
            divPies.style.display = "block";
        } else {
            // Oculta los divs en caso contrario
            divMano.style.display = "none";
            divPies.style.display = "none";
        }
    });
});


// SELECCIONAR LATERALIDAD DE Transmetatarsiana-AMPUTADOS

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("amputaciones_transmetatarsiana_seg");
    var divElement = document.getElementById("Transmetatarsiana_lateralidad_seg");

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

// SELECCIONAR LATERALIDAD DE AMPUTADOS- INFRACONDÍLEA

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("amputaciones_infracondilea_seg");
    var divElement = document.getElementById("Infracondílea_lateralidad_seg");

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

// SELECCIONAR LATERALIDAD DE AMPUTADOS- SUPRACONDILEA

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("amputaciones_Supracondilea_seg");
    var divElement = document.getElementById("Supracondilea_lateralidad_seg");

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

// Selccion de Tratamiento con Hipoglucemiantes 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("HipoglucemiantesSelect_seg");
    var divElement = document.getElementById("tx_Hipoglucemiantes_seg");

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
    var selectElement = document.getElementById("InsulinasSelect_Seg");
    var divElement = document.getElementById("tx_Insulinas_Seg");

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
    const NPHSelect = document.getElementById("NPHSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_nph_Seg");

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
    const RapidaRegularSelect = document.getElementById("RapidaRegularSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_rapidaregular_Seg");

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
    const GlarginaSelect = document.getElementById("GlarginaSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Glargina_Seg");

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
    const Glar300Select = document.getElementById("Glar300Select_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Glar300_Seg");

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
    const DetemirSelect = document.getElementById("DetemirSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Detemir_Seg");

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
    const DegludecrSelect = document.getElementById("DegludecrSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Degludec_Seg");

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
    const LisproSelect = document.getElementById("LisproSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Lispro_Seg");

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
    const AspartSelect = document.getElementById("AspartSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Aspart_Seg");

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
    const GlulisinaSelect = document.getElementById("GlulisinaSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Glulisina_Seg");

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
    const NPHRegularSelect = document.getElementById("NPHRegularSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_nphRegular_Seg");

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
    const ProtaminaSelect = document.getElementById("ProtaminaSelect_Seg");
    const heredoFamiliaContainer = document.getElementById("dosis_Protamina_Seg");

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
    var selectElement = document.getElementById("HipolipemiantesSelect_seg");
    var divElement = document.getElementById("tx_Hipolipemiantes_seg");

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
    var selectElement = document.getElementById("AntihipertensivosSelect_seg");
    var divElement = document.getElementById("tx_Antihipertensivos_seg");

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
    var selectElement = document.getElementById("OtrosSelect_seg");
    var divElement = document.getElementById("tx_Otros_seg");

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

// SELECCIONAR SI AL REALIZAR EJERCICIO

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("EjercicioSelect_seg");
    var divElement = document.getElementById("tx_ejercicio_seg");

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

// CAMPOS DE APEGO VECES DIA SEMANA SE INTRODUZCA EL TIPO DE APEGO Y CAMBIE DE COLOR 
document.addEventListener('DOMContentLoaded', function() {
    const vecesSemanaInput = document.getElementById('id_vecestiempo_seg');
    const apegoVecesInput = document.getElementById('id_apegotiempo_seg');

    vecesSemanaInput.addEventListener('input', function() {
        const vecesSemanaValue = parseInt(vecesSemanaInput.value, 10);

        if (vecesSemanaValue < 3) {
            apegoVecesInput.value = 'Malo';
            apegoVecesInput.style.backgroundColor = 'red';
            apegoVecesInput.style.color = 'white';
        } else if (vecesSemanaValue >= 3 && vecesSemanaValue <= 4) {
            apegoVecesInput.value = 'Moderado';
            apegoVecesInput.style.backgroundColor = 'yellow';
            apegoVecesInput.style.color = 'black';
        } else if (vecesSemanaValue >= 5 && vecesSemanaValue <= 7) {
            apegoVecesInput.value = 'Ideal';
            apegoVecesInput.style.backgroundColor = 'green';
            apegoVecesInput.style.color = 'white';
        }
    });
});

// CAMPOS DE APEGO TIEMPO A LA SEMANA  SE INTRODUZCA EL TIPO DE APEGO Y CAMBIE DE COLOR 
document.addEventListener('DOMContentLoaded', function() {
    const tiempoSemanaInput = document.getElementById('id_tiemposemana_seg');
    const apegovecesInput = document.getElementById('id_apegoveces_seg');

    tiempoSemanaInput.addEventListener('input', function() {
        const tiempoSemanaValue = parseInt(tiempoSemanaInput.value, 10);

        if (tiempoSemanaValue < 150) {
            apegovecesInput.value = 'Mal Apego';
            apegovecesInput.style.backgroundColor = 'red';
            apegovecesInput.style.color = 'white';
        } else {
            apegovecesInput.value = 'Buen Apego';
            apegovecesInput.style.backgroundColor = 'green';
            apegovecesInput.style.color = 'white';
        }
    });
});

function imprimirValor() {
    var creatininaValue = parseFloat(document.getElementById("creatinina_seg").value);

        // Calcula el rango de Nefropatía basado en el valor de creatinina
    var rango = "";
    if (creatininaValue > 90) {
        rango = "G1 >90 Normal";
    } else if (creatininaValue >= 60 && creatininaValue <= 89) {
        rango = "G2 60-89 Ligeramente disminuido";

    } else if (creatininaValue >= 45 && creatininaValue <= 59) {
        rango = "G3a 45-59 Descenso ligero-moderado";

    } else if (creatininaValue >= 30 && creatininaValue <= 44) {
        rango = "G3b 30-44 Descenso moderado";

    } else if (creatininaValue >= 15 && creatininaValue <= 29) {
        rango = "G4 15-29 Descenso severo";

    } else {
        rango = "G5 MENOS 15 Falla renal";

    }
    // Muestra el resultado en el campo de texto
    document.getElementById("id_nefro_seg").value = rango;
}