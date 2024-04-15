                    //FUNCIONS ANTECEDENTES HEREDOFAMILIARES CANCER 

// Antecedentes Heredofamilaires: Cancer de Prostata 
document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y los divs que se deben mostrar/ocultar
    var selectCancer = document.getElementById("Heredo_Cancer");
    var divCancerProstata = document.getElementById("Cancer_prostata");
    var divCancerOvario = document.getElementById("CancerOvario");
    var divCancerMama = document.getElementById("AH_Cancer_Mama");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectCancer.value === "Si") {
            divCancerProstata.style.display = "block";
            divCancerOvario.style.display = "block";
            divCancerMama.style.display = "block";
        } else {
            divCancerProstata.style.display = "none";
            divCancerOvario.style.display = "none";
            divCancerMama.style.display = "none";
        }
    }

    // Agrega un evento de cambio al elemento select
    selectCancer.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});


//  Antecedentes Heredo Familiares: Cancer de Prostata 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y los divs que se deben mostrar/ocultar
    var selectCancerProstata = document.getElementById("Heredo_CancerProstata");
    var divCancerProstataheredo = document.getElementById("CancerProstata");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectCancerProstata.value === "Si") {
            divCancerProstataheredo.style.display = "block";

        } else {
            divCancerProstataheredo.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectCancerProstata.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});

// Antecedentes Heredofamiliares: CANCER DE OVARIO. 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y los divs que se deben mostrar/ocultar
    var selectCancerOVARIO = document.getElementById("Heredo_CancerOvario");
    var divCancerOvariotaheredo = document.getElementById("Cancer_Ovario");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectCancerOVARIO.value === "Si") {
            divCancerOvariotaheredo.style.display = "block";

        } else {
            divCancerOvariotaheredo.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectCancerOVARIO.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});

// Antecedentes Heredofamiliares: CANCER DE MAMA. 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y los divs que se deben mostrar/ocultar
    var selectCancerMAMA = document.getElementById("Heredo_CancerMama");
    var divCancerMAMAtaheredo = document.getElementById("Cancer_Mama1");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectCancerMAMA.value === "Si") {
            divCancerMAMAtaheredo.style.display = "block";

        } else {
            divCancerMAMAtaheredo.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectCancerMAMA.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});
