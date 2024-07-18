

// TIPO DE RESPUESTA 

document.addEventListener("DOMContentLoaded", function () {

    let SelectRespuesta = document.getElementById("respuesta");
    let divTipoRespuestas = document.getElementById("respuesta_tipo");

    SelectRespuesta.addEventListener("change", function () {

        if (SelectRespuesta.value === "Si") {
            divTipoRespuestas.style.display = "block";
        } else {
            divTipoRespuestas.style.display = "none";
        }
    });
});

// Respuesta Corto Plazo
document.addEventListener("DOMContentLoaded", function () {
    let SelectRespuestaCorta = document.getElementById("Corto");
    let divDescripcionRespuestaCorta = document.getElementById("desc_corto");

    SelectRespuestaCorta.addEventListener("change", function () {
        if (SelectRespuestaCorta.value === "Si") {
            divDescripcionRespuestaCorta.style.display = "block";
        } else {
            divDescripcionRespuestaCorta.style.display = "none";
        }
    });
});

// Respuesta Mediano Plazo

document.addEventListener("DOMContentLoaded", function () {

    let SelectRespuestaMediano = document.getElementById("Mediano");
    let divDescripcionRespuestaMedia = document.getElementById("desc_mediano");

    SelectRespuestaMediano.addEventListener("change", function () {
        if (SelectRespuestaMediano.value === "Si") {
            divDescripcionRespuestaMedia.style.display = "block";

        } else {
            divDescripcionRespuestaMedia.style.display = "none";
        }
    });
});

// Respuesta Largo Plazo

document.addEventListener("DOMContentLoaded", function () {

    let SelectRespuestaLarga = document.getElementById("Largo");
    let divDescripcionRespuestaLarga = document.getElementById("desc_largo");

    SelectRespuestaLarga.addEventListener("change", function () {
        if (SelectRespuestaLarga.value === "Si") {
            divDescripcionRespuestaLarga.style.display = "block";

        } else {
            divDescripcionRespuestaLarga.style.display = "none";
        }
    });
});

// VALIDACION 

document.addEventListener("DOMContentLoaded", function () {
    let selectValidacioon = document.getElementById("Val_evento");
    let divanalisis_event = document.getElementById("analisis_event");
    let divtipo_adverso = document.getElementById("tipo_adverso");
    let divAnalisis_cr = document.getElementById("Analisis_cr");
    let divNo_porque = document.getElementById("No_porque");
    let divResultado_centi = document.getElementById("resultado_centi");

    selectValidacioon.addEventListener("change", function () {
        if (selectValidacioon.value === "Cuasifalla" || selectValidacioon.value === "Riesgo de Infección" || selectValidacioon.value === "Incidente") {
            divanalisis_event.style.display = "block";


            divtipo_adverso.style.display = "none";
            divAnalisis_cr.style.display = "none";
            divNo_porque.style.display = "none";
            divResultado_centi.style.display = "none";
        } else if (selectValidacioon.value === "Evento Adverso") {
            divanalisis_event.style.display = "none";


            divtipo_adverso.style.display = "block";
            divAnalisis_cr.style.display = "none";
            divNo_porque.style.display = "none";
            divResultado_centi.style.display = "none";

            let selectEventoAdversoSeg = document.getElementById("evento_adversoseg");
            selectEventoAdversoSeg.addEventListener("change", function () {
                if (selectEventoAdversoSeg.value === "Sin daño" || selectEventoAdversoSeg.value === "Leve" || selectEventoAdversoSeg.value === "Moderado") {
                    divanalisis_event.style.display = "block";


                    divAnalisis_cr.style.display = "none";
                    divNo_porque.style.display = "none";
                    divResultado_centi.style.display = "none";
                } else if (selectEventoAdversoSeg.value === "Grave") {
                    divanalisis_event.style.display = "none";


                    divAnalisis_cr.style.display = "block";
                    divNo_porque.style.display = "none";
                    divResultado_centi.style.display = "none";
                } else {
                    divanalisis_event.style.display = "none";


                    divAnalisis_cr.style.display = "none";
                    divNo_porque.style.display = "none";
                    divResultado_centi.style.display = "none";
                }
            });
        } else if (selectValidacioon.value === "Centinela") {
            divanalisis_event.style.display = "none";


            divtipo_adverso.style.display = "none";
            divAnalisis_cr.style.display = "block";
            divNo_porque.style.display = "none";
            divResultado_centi.style.display = "none";
        } else {
            divanalisis_event.style.display = "none";


            divtipo_adverso.style.display = "none";
            divAnalisis_cr.style.display = "none";
            divNo_porque.style.display = "none";
            divResultado_centi.style.display = "none";
        }

        let selectAnalisisCr = document.getElementById("analisis");
        selectAnalisisCr.addEventListener("change", function () {
            if (selectAnalisisCr.value === "Si") {
                divNo_porque.style.display = "none";
                divResultado_centi.style.display = "block";
            } else if (selectAnalisisCr.value === "No") {
                divNo_porque.style.display = "block";
                divResultado_centi.style.display = "none";
            } else {
                divNo_porque.style.display = "none";
                divResultado_centi.style.display = "none";
            }
        });
    });
});



// EVENTO ADVERSO

document.addEventListener("DOMContentLoaded", function () {
    // Manejo de evento de análisis
    let Selectevento_analisis = document.getElementById("tipo_incidente");
    let divs_incidentes = [
        document.getElementById("admi_Clinica"),
        document.getElementById("Proceso_procedimiento"),
        document.getElementById("Documentacion"),
        document.getElementById("Documentacion_InfeccionSanitaria"),
        document.getElementById("Sangre_productos"),
        document.getElementById("Nutricion"),
        document.getElementById("oxigeno_gasesVapores"),
        document.getElementById("Comportamiento"),
        document.getElementById("AccidentesPacientes"),
        document.getElementById("Gestion_recursos")
    ];

    Selectevento_analisis.addEventListener("change", function () {
        // Oculta todos los divs
        divs_incidentes.forEach(div => div.style.display = "none");

        // Muestra el div correspondiente según el valor seleccionado
        if (Selectevento_analisis.value === "Administración clínica") {
            document.getElementById("admi_Clinica").style.display = "block";
        } else if (Selectevento_analisis.value === "Proceso/procedimiento clínico") {
            document.getElementById("Proceso_procedimiento").style.display = "block";
        } else if (Selectevento_analisis.value === "Documentación") {
            document.getElementById("Documentacion").style.display = "block";
        } else if (Selectevento_analisis.value === "Infección asociada a la atención sanitaria") {
            document.getElementById("Documentacion_InfeccionSanitaria").style.display = "block";
        } else if (Selectevento_analisis.value === "Sangre/productos sanguíneos") {
            document.getElementById("Sangre_productos").style.display = "block";
        } else if (Selectevento_analisis.value === "Nutrición") {
            document.getElementById("Nutricion").style.display = "block";
        } else if (Selectevento_analisis.value === "Oxígeno/gases/vapores") {
            document.getElementById("oxigeno_gasesVapores").style.display = "block";
        } else if (Selectevento_analisis.value === "Comportamiento") {
            document.getElementById("Comportamiento").style.display = "block";
        } else if (Selectevento_analisis.value === "Accidentes de los pacientes") {
            document.getElementById("AccidentesPacientes").style.display = "block";
        } else if (Selectevento_analisis.value === "Recursos/Gestión de la organización") {
            document.getElementById("Gestion_recursos").style.display = "block";
        }
    });

    // Manejo de caídas
    let SelecCaidas = document.getElementById("Caidas");
    let divcaidas_tipo = document.getElementById("caidas_tipo");
    let TipoCaidas = document.getElementById("TipoCaidas");
    let divcaidas_subtipo = document.getElementById("caidas_subtipo");
    let SubtipoCaidas = document.getElementById("SubtipoCaidas");

    SelecCaidas.addEventListener("change", function () {
        if (SelecCaidas.value === "Si") {
            divcaidas_tipo.style.display = "block";
        } else {
            // Restablecer valores y ocultar campos adicionales
            divcaidas_tipo.style.display = "none";
            TipoCaidas.selectedIndex = 0;
            divcaidas_subtipo.style.display = "none";
            SubtipoCaidas.selectedIndex = 0;
        }
    });

    TipoCaidas.addEventListener("change", function () {
        if (TipoCaidas.value === "Si") {
            divcaidas_subtipo.style.display = "block";
        } else {
            divcaidas_subtipo.style.display = "none";
            SubtipoCaidas.selectedIndex = 0;
        }
    });
});

// Resultados para el paciente

document.addEventListener("DOMContentLoaded", function () {

    let Selecresultados_paciente = document.getElementById("resultados_paciente");
    let divGradoDaño = document.getElementById("GradoDaño");

    Selecresultados_paciente.addEventListener("change", function () {
        if (Selecresultados_paciente.value === "Grado de daño") {
            divGradoDaño.style.display = "block";

        } else {
            divGradoDaño.style.display = "none";

        }
    });
});

// RResultados para la Oranización

document.addEventListener("DOMContentLoaded", function () {

    let Selecresultados_organizacion = document.getElementById("resultados_organizacion");
    let divAumentoRecursosPX = document.getElementById("AumentoRecursosPX");

    Selecresultados_organizacion.addEventListener("change", function () {
        if (Selecresultados_organizacion.value === "Aumento de los recursos asignados al paciente") {
            divAumentoRecursosPX.style.display = "block";

        } else {
            divAumentoRecursosPX.style.display = "none";

        }
    });
});

// ANALISIS

document.addEventListener("DOMContentLoaded", function () {

    let SelectAnalisis = document.getElementById("evento_analisis");
    let divalidacion_segui = document.getElementById("validacion_segui");
    let divRespuestaanalsisi = document.getElementById("segui_respuesVal")

    SelectAnalisis.addEventListener("change", function () {
        if (SelectAnalisis.value === "Si") {
            divalidacion_segui.style.display = "block";
            divRespuestaanalsisi.style.display = "block"

        } else {
            divalidacion_segui.style.display = "none";
            divRespuestaanalsisi.style.display = "none"

        }
    });
});


// EVENTO ADVERSO






document.addEventListener("DOMContentLoaded", function () {
    let selectEstatus = document.getElementById("estatus");

    selectEstatus.addEventListener("change", function () {
        switch (selectEstatus.value) {
            case "Solo Detectado":
                selectEstatus.style.backgroundColor = "#e0e0e0";
                break;
            case "No hay respuesta":
                selectEstatus.style.backgroundColor = "#f4444f";
                break;
            case "Respuesta":
                selectEstatus.style.backgroundColor = "#f6bc66";
                break;
            case "Seguimiento":
                selectEstatus.style.backgroundColor = "#b0f7b8";
                break;
            case "Cerrado Caso":
                selectEstatus.style.backgroundColor = "#79addc";
                break;
            default:
                selectEstatus.style.backgroundColor = "";
                break;
        }
    });
});

