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


// FUNCION PARA NUMERO DE MEDICAMENTOS 
// document.addEventListener("DOMContentLoaded", function () {
//     let selectInvestigacion = document.getElementById("realizo_investigacion");
//     let divUnoMedicamento = document.getElementById("un_medicamento");
//     let divDosMedicamento = document.getElementById("dos_medicamento");
//     let divTresMedicamento = document.getElementById("tres_medicamento");

//     // Función para ocultar todos los divs de medicamentos y restablecer sus valores
//     function resetDivs() {
//         divUnoMedicamento.style.display = "none";
//         divDosMedicamento.style.display = "none";
//         divTresMedicamento.style.display = "none";

//         // Opcional: Restablecer los valores a 0 o su valor inicial
//         let inputsUno = divUnoMedicamento.querySelectorAll('input, select');
//         inputsUno.forEach(input => input.value = input.defaultValue);

//         let inputsDos = divDosMedicamento.querySelectorAll('input, select');
//         inputsDos.forEach(input => input.value = input.defaultValue);

//         let inputsTres = divTresMedicamento.querySelectorAll('input, select');
//         inputsTres.forEach(input => input.value = input.defaultValue);
//     }

//     selectInvestigacion.addEventListener("change", function () {
//         resetDivs(); // Oculta todos los divs y restablece sus valores

//         // Muestra los divs correspondientes según la selección
//         if (selectInvestigacion.value === "Medicamentos Involucrados Uno") {
//             divUnoMedicamento.style.display = "block";
//         } else if (selectInvestigacion.value === "Medicamentos Involucrado Dos") {
//             divUnoMedicamento.style.display = "block";
//             divDosMedicamento.style.display = "block";
//         } else if (selectInvestigacion.value === "Medicamentos Involucrado Tres") {
//             divUnoMedicamento.style.display = "block";
//             divDosMedicamento.style.display = "block";
//             divTresMedicamento.style.display = "block";
//         }
//     });
// });


// FUNCION MOSTRAR OTROS EN TIPO 
document.addEventListener("DOMContentLoaded", function () {
    let selectvalidacion_evento = document.getElementById("validacion_evento");
    let divtipo_valevento = document.getElementById("tipo_valevento");
    let dividHraei = document.getElementById("hraei_idmos");

    selectvalidacion_evento.addEventListener("change", function () {
        // Oculta ambos divs por defecto
        divtipo_valevento.style.display = "none";
        dividHraei.style.display = "none";

        // Muestra el div correspondiente según la opción seleccionada
        if (selectvalidacion_evento.value === "Si") {
            dividHraei.style.display = "block";
        } else if (selectvalidacion_evento.value === "No") {
            divtipo_valevento.style.display = "block";
        }
    });
});





// FUNCION MOSTRAR OTROS EN TIPO DE ERRO 
document.addEventListener("DOMContentLoaded", function () {
    let selecterror = document.getElementById("error");
    let divTipoOtro_error = document.getElementById("TipoOtro_error");

    selecterror.addEventListener("change", function () {
        // Oculta el div por defecto
        divTipoOtro_error.style.display = "none";

        // Muestra el div solo si el valor seleccionado es "Selección Inapropiada Del Medicamento"
        if (selecterror.value === "Otros") {
            divTipoOtro_error.style.display = "block";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    let selectMedicamentos_Involucrado = document.getElementById("realizoInvestigacion");
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
            "potencialError",
            "errorsindaño",
            "ErrorconDaño",
            "ErrorMortal",
            "investi_estrate",
            "analsisicausaraiz",
            "descri_conclusion",
            "descri_prevencion",
            "descri_analisisraiz",
            "archivocausaraiz",
            "evi_prev"
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

    initializeSelect("evidencia_prevencion", function () {
        document.getElementById("evi_prev").style.display =
            this.value === "Si" ? "block" : "none";
    });

    initializeSelect("analisis_causa", function () {
        document.getElementById("descri_analisisraiz").style.display =
            this.value === "Si" ? "block" : "none";

        document.getElementById("archivocausaraiz").style.display =
            this.value === "Si" ? "block" : "none";

        document.getElementById("investi_estrate").style.display =
            this.value === "Si" ? "block" : "none";
    });

    // Ejecutar las funciones al cargar la página para establecer el estado inicial
    mostrarInvestiEstrate();
    mostrarAnalisisCausaRaiz();
});


document.addEventListener("DOMContentLoaded", function () {
    let estatusSelect = document.getElementById("Estatus");

    estatusSelect.addEventListener("change", function () {
        switch (this.value) {
            case "Bajo Evaluación":
                this.style.backgroundColor = "rgb(207, 56, 44)";
                this.style.color = "white"; // Cambia el color del texto si es necesario
                break;
            case "Cerrado":
                this.style.backgroundColor = "rgb(170, 182, 7)";
                this.style.color = "white"; // Cambia el color del texto si es necesario
                break;
            default:
                this.style.backgroundColor = ""; // Restablece el color de fondo a su valor inicial
                this.style.color = ""; // Restablece el color del texto a su valor inicial
                break;
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    let estatusSelect = document.getElementById("tipo_evento");

    estatusSelect.addEventListener("change", function () {
        switch (this.value) {
            case "Calidad":
                this.style.backgroundColor = "rgb(147, 54, 161)";
                this.style.color = "white"; // Cambia el color del texto si es necesario
                break;
            case "Tecnovigilancia":
                this.style.backgroundColor = "rgb(64, 120, 212)";
                this.style.color = "white"; // Cambia el color del texto si es necesario
                break;
            default:
                this.style.backgroundColor = ""; // Restablece el color de fondo a su valor inicial
                this.style.color = ""; // Restablece el color del texto a su valor inicial
                break;
        }
    });
});

