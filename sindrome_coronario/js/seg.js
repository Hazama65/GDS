


// Gammagrama Cardiaco Inicial

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectGamma = document.getElementById("Seg_Gamma");
    var divresultado_gamma = document.getElementById("Seg_resultado_gamma");

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
    var selectgamma_cardi = document.getElementById("Seg_gamma_cardi");
    var divpositivo_1 = document.getElementById("Seg_positivo_1");
    var divpositivo_2 = document.getElementById("Seg_positivo_2");


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
    var selectResonancia_inicial = document.getElementById("Seg_Resonancia_inicial");
    var divresonancia_resu = document.getElementById("Seg_resonancia_resu");
    var divresonancia_ergometria = document.getElementById("Seg_resonancia_ergometria");


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

// Defunción
document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectSeg_defun = document.getElementById("Seg_defun");
    var divreseg_defuncioncausa = document.getElementById("seg_defuncioncausa");

    // Agregar un evento de cambio al elemento select
    selectSeg_defun.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectSeg_defun.value === "Si") {
            // Si se selecciona , mostrar el div correspondiente y ocultar el otro
            divreseg_defuncioncausa.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divreseg_defuncioncausa.style.display = "none";
        }
    });
});



// Seguimiento Defunción

document.addEventListener("DOMContentLoaded", function () {
    var selectCausaDefun = document.getElementById("Seg_Causa_defun");
    var divFechaDefuncion = document.getElementById("seg_fecha_defuncion");

    selectCausaDefun.addEventListener("change", function () {
        // Ocultar el campo de fecha de defunción por defecto
        divFechaDefuncion.style.display = "none";

        // Mostrar el campo de fecha de defunción si se selecciona una causa cardiaca o no cardiaca
        if (selectCausaDefun.value === "Cardiaca" || selectCausaDefun.value === "No Cardiaca") {
            divFechaDefuncion.style.display = "block";
        }
    });
});
