

// SELECCIONAR ÁREA 

document.addEventListener("DOMContentLoaded", function () {
    let selectAreaAtencion = document.getElementById("area_atencion");
    let divAreaAmbulatorio = document.getElementById("area_ambulatorio");
    let divHospitalizacionArea = document.getElementById("hospitalazacion_area");

    selectAreaAtencion.addEventListener("change", function () {
        //  opción seleccionada
        if (selectAreaAtencion.value === "Ambulatorio") {
            // Mostrar div de área ambulatorio y ocultar el de hospitalización
            divAreaAmbulatorio.style.display = "block";
            divHospitalizacionArea.style.display = "none";

        } else if (selectAreaAtencion.value === "Hospitalizacion") {
            // Mostrar div de hospitalización y ocultar el de área ambulatorio

            divAreaAmbulatorio.style.display = "none";
            divHospitalizacionArea.style.display = "block";

        } else {
            // Ocultar ambos divs si no se selecciona ninguna opción válida
            divAreaAmbulatorio.style.display = "none";
            divHospitalizacionArea.style.display = "none";
        }
    });
});





//  AMBULATORIO 

document.addEventListener("DOMContentLoaded", function () {
    let selecAmbulatorio = document.getElementById("area_ambu");
    let divPV = document.getElementById("ambulatoria_PB");
    let divUnidadApoyoPB = document.getElementById("ambulatoria_unidadapoyo");
    let divPiso1 = document.getElementById("ambulatoria_piso1");
    let divunidadapoyoPiso1 = document.getElementById("ambulatoria_unidadapoyopiso1");
    let divPiso2 = document.getElementById("ambulatoria_piso2");
    let divPiso3 = document.getElementById("ambulatoria_piso3");
    let divesneñanza = document.getElementById("ambulatoria_enseñanzapiso1");

    selecAmbulatorio.addEventListener("change", function () {

        if (selecAmbulatorio.value === "P.B") {
            divPV.style.display = "block";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Unidad de Apoyo de PB") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "block";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Piso 1") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "block";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Unidad de Apoyo Piso 1") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "block";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Piso 2") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "block";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Piso 3") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "block";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Enseñanza Piso 1") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "block";

        } else {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";
        }
    });
});

// HOSPITALIZACION 

document.addEventListener("DOMContentLoaded", function () {
    let selectHospitalizacion = document.getElementById("area_atencionHospi");
    let divPlantaBaja = document.getElementById("PB");
    let divHospiPimerPiso = document.getElementById("primerpiso");
    let divHospiSegundoPiso = document.getElementById("segundopiso");
    let divHospiTercerPiso = document.getElementById("tercerpiso");
    let divHospiCuartoPiso = document.getElementById("cuartopiso");

    selectHospitalizacion.addEventListener("change", function () {

        if (selectHospitalizacion.value === "P.B") {
            divPlantaBaja.style.display = "block";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Primero Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "block";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Segundo Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "block";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Tercer Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "block";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Cuarto Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "block";

        } else {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";
        }
    });
});




// SELECCIONAR TIPO DE EVENTO 

document.addEventListener("DOMContentLoaded", function () {
    let selectTipoEvento = document.getElementById("Tipo_evento");
    let divtip_adverso= document.getElementById("tip_adverso");
    let divtip_centinela = document.getElementById("tip_centinela");
    let divinfo_familiar = document.getElementById("info_familiar");

    selectTipoEvento.addEventListener("change", function () {
        //  opción seleccionada
        if (selectTipoEvento.value === "Evento Adverso") {
            // Mostrar div de área ambulatorio y ocultar el de hospitalización
            divtip_adverso.style.display = "block";
            divtip_centinela.style.display = "none";
            divinfo_familiar.style.display = "block"

        } else if (selectTipoEvento.value === "Centinela") {
            // Mostrar div de hospitalización y ocultar el de área ambulatorio

            divtip_adverso.style.display = "none";
            divtip_centinela.style.display = "block";
            divinfo_familiar.style.display = "block"


        } else {
            // Ocultar ambos divs si no se selecciona ninguna opción válida
            divtip_adverso.style.display = "none";
            divtip_centinela.style.display = "none";
            divinfo_familiar.style.display = "none"

        }
    });
});

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

