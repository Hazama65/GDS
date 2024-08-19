document.addEventListener("DOMContentLoaded", function () {
    let selectError = document.getElementById("error");

    selectError.addEventListener("change", function () {
        // Oculta todos los divs por defecto
        let divs = [
            "erroneo_medic",
            "medicamento_omision",
            "IncorrectasDosis",
            "medicamento_dosisincorrecta",
            "medicamento_monitorizacion"
        ];

        divs.forEach(function (divId) {
            document.getElementById(divId).style.display = "none";
        });

        // Muestra el div correspondiente según la selección
        switch (selectError.value) {
            case "Medicamento Erróneo":
                document.getElementById("erroneo_medic").style.display = "block";
                break;
            case "Omisión de Dosis o de Medicamento":
                document.getElementById("medicamento_omision").style.display = "block";
                break;
            case "Dosis Incorrecta":
                document.getElementById("IncorrectasDosis").style.display = "block";
                break;
            case "Duración del Tratamiento Incorrecta":
                document.getElementById("medicamento_dosisincorrecta").style.display = "block";
                break;
            case "Monitorización Insuficiente del Tratamiento":
                document.getElementById("medicamento_monitorizacion").style.display = "block";
                break;
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    let selectMedicamentoErroneo = document.getElementById("medicamento_erroneo");
    let divMedicamentoInapropiada = document.getElementById("medicamento_inapropiada");

    selectMedicamentoErroneo.addEventListener("change", function () {
        // Oculta el div por defecto
        divMedicamentoInapropiada.style.display = "none";

        // Muestra el div solo si el valor seleccionado es "Selección Inapropiada Del Medicamento"
        if (selectMedicamentoErroneo.value === "Selección Inapropiada Del Medicamento") {
            divMedicamentoInapropiada.style.display = "block";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    let selectInvestigacion = document.getElementById("realizo_investigacion");
    let divUnoMedicamento = document.getElementById("un_medicamento");
    let divDosMedicamento = document.getElementById("dos_medicamento");
    let divTresMedicamento = document.getElementById("tres_medicamento");

    // Función para ocultar todos los divs de medicamentos y restablecer sus valores
    function resetDivs() {
        divUnoMedicamento.style.display = "none";
        divDosMedicamento.style.display = "none";
        divTresMedicamento.style.display = "none";
        
        // Opcional: Restablecer los valores a 0 o su valor inicial
        let inputsUno = divUnoMedicamento.querySelectorAll('input, select');
        inputsUno.forEach(input => input.value = input.defaultValue);

        let inputsDos = divDosMedicamento.querySelectorAll('input, select');
        inputsDos.forEach(input => input.value = input.defaultValue);

        let inputsTres = divTresMedicamento.querySelectorAll('input, select');
        inputsTres.forEach(input => input.value = input.defaultValue);
    }

    selectInvestigacion.addEventListener("change", function () {
        resetDivs(); // Oculta todos los divs y restablece sus valores

        // Muestra los divs correspondientes según la selección
        if (selectInvestigacion.value === "Medicamentos Involucrados Uno") {
            divUnoMedicamento.style.display = "block";
        } else if (selectInvestigacion.value === "Medicamentos Involucrado Dos") {
            divUnoMedicamento.style.display = "block";
            divDosMedicamento.style.display = "block";
        } else if (selectInvestigacion.value === "Medicamentos Involucrado Tres") {
            divUnoMedicamento.style.display = "block";
            divDosMedicamento.style.display = "block";
            divTresMedicamento.style.display = "block";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    let selectMedicamentos_Involucrado = document.getElementById("Medicamentos_Involucrado");
    let divdescrp_inve = document.getElementById("descrp_inve");

    selectMedicamentos_Involucrado.addEventListener("change", function () {
        // Oculta el div por defecto
        divdescrp_inve.style.display = "none";

        // Muestra el div solo si el valor seleccionado es "Selección Inapropiada Del Medicamento"
        if (selectMedicamentos_Involucrado.value === "Si") {
            divdescrp_inve.style.display = "block";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    let selectevidencia_inves = document.getElementById("evidencia_inves");
    let divseleccion_archivo = document.getElementById("seleccion_archivo");

    selectevidencia_inves.addEventListener("change", function () {
        // Oculta el div por defecto
        divseleccion_archivo.style.display = "none";

        // Muestra el div solo si el valor seleccionado es "Selección Inapropiada Del Medicamento"
        if (selectevidencia_inves.value === "Si") {
            divseleccion_archivo.style.display = "block";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    let selectMedicamento_categoria = document.getElementById("Medicamento_categoria");

    let divpotencialError = document.getElementById("potencialError");
    let diverrorsindaño = document.getElementById("errorsindaño");
    let divErrorconDaño = document.getElementById("ErrorconDaño");
    let divErrorMortal = document.getElementById("ErrorMortal");

    selectMedicamento_categoria.addEventListener("change", function () {
        // Oculta todos los divs por defecto
        divpotencialError.style.display = "none";
        diverrorsindaño.style.display = "none";
        divErrorconDaño.style.display = "none";
        divErrorMortal.style.display = "none";

        // Muestra los divs correspondientes según la selección
        if (selectMedicamento_categoria.value === "Error Potencial o No Daño") {
            divpotencialError.style.display = "block";
        } else if (selectMedicamento_categoria.value === "Error Sin Daño") {
            diverrorsindaño.style.display = "block";
        } else if (selectMedicamento_categoria.value === "Error Con Daño") {
            divErrorconDaño.style.display = "block";
        } else if (selectMedicamento_categoria.value === "Error Mortal") {
            divErrorMortal.style.display = "block";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    // Función para ocultar todos los divs relacionados y restablecer selects
    function hideAllSections() {
        let divs = [
            "erroneo_medic",
            "medicamento_omision",
            "IncorrectasDosis",
            "medicamento_dosisincorrecta",
            "medicamento_monitorizacion",
            "medicamento_inapropiada",
            "investi_estrate",
            "analsisicausaraiz",
            "descri_conclusion",
            "descri_prevencion",
            "descri_analisisraiz"
        ];

        divs.forEach(function (divId) {
            let div = document.getElementById(divId);
            if (div) {
                div.style.display = "none";

                // Restablece el valor de los selects dentro del div
                let selects = div.getElementsByTagName("select");
                for (let select of selects) {
                    select.selectedIndex = 0; // Establece el índice seleccionado al primero
                }
            }
        });
    }

    // Inicializa los selectores y sus eventos de cambio
    function initializeSelect(selectId, callback) {
        let selectElement = document.getElementById(selectId);
        if (selectElement) {
            selectElement.addEventListener("change", callback);
        }
    }

    // Función para manejar el cambio en el selector de categorías de medicamentos
    initializeSelect("Medicamento_categoria", function () {
        hideAllSections(); // Oculta todos los divs y restablece selects al cambiar la selección
        switch (this.value) {
            case "Error Potencial o No Daño":
                document.getElementById("potencialError").style.display = "block";
                break;
            case "Error Sin Daño":
                document.getElementById("errorsindaño").style.display = "block";
                break;
            case "Error Con Daño":
                document.getElementById("ErrorconDaño").style.display = "block";
                break;
            case "Error Mortal":
                document.getElementById("ErrorMortal").style.display = "block";
                break;
        }
    });

    // Funciones para manejar el cambio en los selects de las secciones de investigación
    function mostrarInvestiEstrate() {
        if (
            document.getElementById("error_potencial").value !== "Seleccione" ||
            document.getElementById("Error_sindaño").value !== "Seleccione"
        ) {
            document.getElementById("investi_estrate").style.display = "block";
        } else {
            document.getElementById("investi_estrate").style.display = "none";
        }
    }

    function mostrarAnalisisCausaRaiz() {
        if (
            document.getElementById("error_condaño").value !== "Seleccione" ||
            document.getElementById("Error_Mortal").value !== "Seleccione"
        ) {
            document.getElementById("analsisicausaraiz").style.display = "block";
        } else {
            document.getElementById("analsisicausaraiz").style.display = "none";
        }
    }

    // Escuchar cambios en los selectores relacionados
    initializeSelect("error_potencial", mostrarInvestiEstrate);
    initializeSelect("Error_sindaño", mostrarInvestiEstrate);
    initializeSelect("error_condaño", mostrarAnalisisCausaRaiz);
    initializeSelect("Error_Mortal", mostrarAnalisisCausaRaiz);

    // Manejadores para otros selects
    initializeSelect("conclusion_investigacion", function () {
        document.getElementById("descri_conclusion").style.display = 
            this.value === "Si" ? "block" : "none";
    });

    initializeSelect("estrategia_preve", function () {
        document.getElementById("descri_prevencion").style.display = 
            this.value === "Si" ? "block" : "none";
    });

    initializeSelect("analisis_causa", function () {
        document.getElementById("descri_analisisraiz").style.display = 
            this.value === "Si" ? "block" : "none";
    });

    // Ejecutar las funciones al cargar la página para establecer el estado inicial
    mostrarInvestiEstrate();
    mostrarAnalisisCausaRaiz();
});


// funcion para restabelecer valores 
document.addEventListener("DOMContentLoaded", function () {
    // Función para ocultar todos los divs relacionados y restablecer selects
    function hideAllSections() {
        let divs = [
            "erroneo_medic",
            "medicamento_omision",
            "IncorrectasDosis",
            "medicamento_dosisincorrecta",
            "medicamento_monitorizacion",
            "medicamento_inapropiada",
            // Añade aquí más IDs si tienes divs adicionales que ocultar
        ];

        divs.forEach(function (divId) {
            let div = document.getElementById(divId);
            if (div) {
                div.style.display = "none";

                // Restablece el valor de los selects dentro del div
                let selects = div.getElementsByTagName("select");
                for (let select of selects) {
                    select.selectedIndex = 0; // Establece el índice seleccionado al primero
                }
            }
        });
    }

    // Inicializa los selectores y sus eventos de cambio
    function initializeSelect(selectId, callback) {
        let selectElement = document.getElementById(selectId);
        if (selectElement) {
            selectElement.addEventListener("change", callback);
        }
    }

    // Funciones de cambio para cada select
    initializeSelect("error", function () {
        hideAllSections(); // Oculta todos los divs y restablece selects al cambiar la selección
        switch (this.value) {
            case "Medicamento Erróneo":
                document.getElementById("erroneo_medic").style.display = "block";
                break;
            case "Omisión de Dosis o de Medicamento":
                document.getElementById("medicamento_omision").style.display = "block";
                break;
            case "Dosis Incorrecta":
                document.getElementById("IncorrectasDosis").style.display = "block";
                break;
            case "Duración del Tratamiento Incorrecta":
                document.getElementById("medicamento_dosisincorrecta").style.display = "block";
                break;
            case "Monitorización Insuficiente del Tratamiento":
                document.getElementById("medicamento_monitorizacion").style.display = "block";
                break;
        }
    });

    // Aquí puedes añadir más inicializaciones para otros selects si es necesario
});