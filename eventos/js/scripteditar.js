

// SELECCIONAR ÁREA 

document.addEventListener("DOMContentLoaded", function () {
    let selectAreaAtencion = document.getElementById("area_atencion");
    let divAreaAmbulatorio = document.getElementById("area_ambulatorio");
    let divHospitalizacionArea = document.getElementById("hospitalazacion_area");

    // Función para manejar la visibilidad
    function handleVisibility() {
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
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectAreaAtencion.addEventListener("change", handleVisibility);
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

    // Función para manejar la visibilidad de los divs sin restablecer los campos precargados
    function handleVisibility() {
        // Oculta todos los divs primero
        divPV.style.display = "none";
        divUnidadApoyoPB.style.display = "none";
        divPiso1.style.display = "none";
        divunidadapoyoPiso1.style.display = "none";
        divPiso2.style.display = "none";
        divPiso3.style.display = "none";
        divesneñanza.style.display = "none";

        // Muestra el div correspondiente según la selección
        let selectedValue = selecAmbulatorio.value.trim();
        if (selectedValue === "P.B") {
            divPV.style.display = "block";
        } else if (selectedValue === "Unidad de Apoyo de PB") {
            divUnidadApoyoPB.style.display = "block";
        } else if (selectedValue === "Piso 1") {
            divPiso1.style.display = "block";
        } else if (selectedValue === "Unidad de Apoyo Piso 1") {
            divunidadapoyoPiso1.style.display = "block";
        } else if (selectedValue === "Piso 2") {
            divPiso2.style.display = "block";
        } else if (selectedValue === "Piso 3") {
            divPiso3.style.display = "block";
        } else if (selectedValue === "Enseñanza Piso 1") {
            divesneñanza.style.display = "block";
        }
    }

    // Ejecutar la función inmediatamente cuando la página carga
    handleVisibility();

    // También ejecutar la función cuando se cambia la selección
    selecAmbulatorio.addEventListener("change", handleVisibility);
});


// HOSPITALIZACIÓN
document.addEventListener("DOMContentLoaded", function () {
    let selectHospitalizacion = document.getElementById("area_atencionHospi");
    let divPlantaBaja = document.getElementById("PB");
    let divHospiPrimerPiso = document.getElementById("primerpiso");
    let divHospiSegundoPiso = document.getElementById("segundopiso");
    let divHospiTercerPiso = document.getElementById("tercerpiso");
    let divHospiCuartoPiso = document.getElementById("cuartopiso");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectHospitalizacion.value === "P.B") {
            divPlantaBaja.style.display = "block";
            divHospiPrimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";
        } else if (selectHospitalizacion.value === "Primero Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPrimerPiso.style.display = "block";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";
        } else if (selectHospitalizacion.value === "Segundo Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPrimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "block";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";
        } else if (selectHospitalizacion.value === "Tercer Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPrimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "block";
            divHospiCuartoPiso.style.display = "none";
        } else if (selectHospitalizacion.value === "Cuarto Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPrimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "block";
        } else {
            divPlantaBaja.style.display = "none";
            divHospiPrimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectHospitalizacion.addEventListener("change", handleVisibility);
});


// SELECCIONAR TIPO DE EVENTO
document.addEventListener("DOMContentLoaded", function () {
    let selectTipoEvento = document.getElementById("Tipo_evento");
    let divtip_adverso = document.getElementById("tip_adverso");
    let divtip_centinela = document.getElementById("tip_centinela");
    let divinfo_familiar = document.getElementById("info_familiar");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectTipoEvento.value === "Evento Adverso") {
            divtip_adverso.style.display = "block";
            divtip_centinela.style.display = "none";
            divinfo_familiar.style.display = "block";
        } else if (selectTipoEvento.value === "Centinela") {
            divtip_adverso.style.display = "none";
            divtip_centinela.style.display = "block";
            divinfo_familiar.style.display = "block";
        } else {
            divtip_adverso.style.display = "none";
            divtip_centinela.style.display = "none";
            divinfo_familiar.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectTipoEvento.addEventListener("change", handleVisibility);
});

// TIPO DE RESPUESTA
document.addEventListener("DOMContentLoaded", function () {
    let selectRespuesta = document.getElementById("respuesta");
    let divTipoRespuestas = document.getElementById("respuesta_tipo");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectRespuesta.value === "Si") {
            divTipoRespuestas.style.display = "block";
        } else {
            divTipoRespuestas.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectRespuesta.addEventListener("change", handleVisibility);
});

// Respuesta Corto Plazo
document.addEventListener("DOMContentLoaded", function () {
    let selectRespuestaCorta = document.getElementById("Corto");
    let divDescripcionRespuestaCorta = document.getElementById("desc_corto");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectRespuestaCorta.value === "Si") {
            divDescripcionRespuestaCorta.style.display = "block";
        } else {
            divDescripcionRespuestaCorta.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectRespuestaCorta.addEventListener("change", handleVisibility);
});

// Respuesta Mediano Plazo
document.addEventListener("DOMContentLoaded", function () {
    let selectRespuestaMediano = document.getElementById("Mediano");
    let divDescripcionRespuestaMedia = document.getElementById("desc_mediano");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectRespuestaMediano.value === "Si") {
            divDescripcionRespuestaMedia.style.display = "block";
        } else {
            divDescripcionRespuestaMedia.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectRespuestaMediano.addEventListener("change", handleVisibility);
});


// Respuesta Largo Plazo
document.addEventListener("DOMContentLoaded", function () {
    let selectRespuestaLarga = document.getElementById("Largo");
    let divDescripcionRespuestaLarga = document.getElementById("desc_largo");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectRespuestaLarga.value === "Si") {
            divDescripcionRespuestaLarga.style.display = "block";
        } else {
            divDescripcionRespuestaLarga.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectRespuestaLarga.addEventListener("change", handleVisibility);
});


// VALIDACION 
document.addEventListener("DOMContentLoaded", function () {
    let selectValidacion = document.getElementById("Val_evento");
    let divAnalisisEvent = document.getElementById("analisis_event");
    let divTipoAdverso = document.getElementById("tipo_adverso");
    let divAnalisisCr = document.getElementById("Analisis_cr");
    let divNoPorque = document.getElementById("No_porque");
    let divResultadoCenti = document.getElementById("resultado_centi");
    let selectEventoAdversoSeg = document.getElementById("evento_adversoseg");
    let selectAnalisisCr = document.getElementById("analisis");

    // Función para manejar la visibilidad según el valor seleccionado en "Val_evento"
    function handleValidacionVisibility() {
        if (selectValidacion.value === "Cuasifalla" || selectValidacion.value === "Riesgo de Infección" || selectValidacion.value === "Incidente") {
            divAnalisisEvent.style.display = "block";
            divTipoAdverso.style.display = "none";
            divAnalisisCr.style.display = "none";
            divNoPorque.style.display = "none";
            divResultadoCenti.style.display = "none";
        } else if (selectValidacion.value === "Evento Adverso") {
            divAnalisisEvent.style.display = "none";
            divTipoAdverso.style.display = "block";
            divAnalisisCr.style.display = "none";
            divNoPorque.style.display = "none";
            divResultadoCenti.style.display = "none";

            // Manejar la visibilidad según el valor seleccionado en "evento_adversoseg"
            handleEventoAdversoSegVisibility();
        } else if (selectValidacion.value === "Centinela") {
            divAnalisisEvent.style.display = "none";
            divTipoAdverso.style.display = "none";
            divAnalisisCr.style.display = "block";
            divNoPorque.style.display = "none";
            divResultadoCenti.style.display = "none";
        } else {
            divAnalisisEvent.style.display = "none";
            divTipoAdverso.style.display = "none";
            divAnalisisCr.style.display = "none";
            divNoPorque.style.display = "none";
            divResultadoCenti.style.display = "none";
        }
    }

    // Función para manejar la visibilidad según el valor seleccionado en "evento_adversoseg"
    function handleEventoAdversoSegVisibility() {
        if (selectEventoAdversoSeg) {
            if (selectEventoAdversoSeg.value === "Sin daño" || selectEventoAdversoSeg.value === "Leve" || selectEventoAdversoSeg.value === "Moderado") {
                divAnalisisEvent.style.display = "block";
                divAnalisisCr.style.display = "none";
            } else if (selectEventoAdversoSeg.value === "Grave") {
                divAnalisisEvent.style.display = "none";
                divAnalisisCr.style.display = "block";
            } else {
                divAnalisisEvent.style.display = "none";
                divAnalisisCr.style.display = "none";
            }
        }
    }

    // Función para manejar la visibilidad según el valor seleccionado en "analisis"
    function handleAnalisisCrVisibility() {
        if (selectAnalisisCr) {
            if (selectAnalisisCr.value === "Si") {
                divNoPorque.style.display = "none";
                divResultadoCenti.style.display = "block";
            } else if (selectAnalisisCr.value === "No") {
                divNoPorque.style.display = "block";
                divResultadoCenti.style.display = "none";
            } else {
                divNoPorque.style.display = "none";
                divResultadoCenti.style.display = "none";
            }
        }
    }

    // Ejecutar las funciones al cargar la página
    handleValidacionVisibility();
    handleAnalisisCrVisibility();

    // Agregar eventos para los selectores
    selectValidacion.addEventListener("change", handleValidacionVisibility);
    if (selectEventoAdversoSeg) {
        selectEventoAdversoSeg.addEventListener("change", handleEventoAdversoSegVisibility);
    }
    if (selectAnalisisCr) {
        selectAnalisisCr.addEventListener("change", handleAnalisisCrVisibility);
    }
});




// EVENTO ADVERSO

document.addEventListener("DOMContentLoaded", function () {
    // Manejo de eventos adversos
    let selectEventoAnalisis = document.getElementById("tipo_incidente");
    let divsIncidentes = [
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

    selectEventoAnalisis.addEventListener("change", function () {
        // Oculta todos los divs
        divsIncidentes.forEach(div => div.style.display = "none");

        // Muestra el div correspondiente según el valor seleccionado
        let selectedValue = selectEventoAnalisis.value;
        switch (selectedValue) {
            case "Administración clínica":
                document.getElementById("admi_Clinica").style.display = "block";
                break;
            case "Proceso/procedimiento clínico":
                document.getElementById("Proceso_procedimiento").style.display = "block";
                break;
            case "Documentación":
                document.getElementById("Documentacion").style.display = "block";
                break;
            case "Infección asociada a la atención sanitaria":
                document.getElementById("Documentacion_InfeccionSanitaria").style.display = "block";
                break;
            case "Sangre/productos sanguíneos":
                document.getElementById("Sangre_productos").style.display = "block";
                break;
            case "Nutrición":
                document.getElementById("Nutricion").style.display = "block";
                break;
            case "Oxígeno/gases/vapores":
                document.getElementById("oxigeno_gasesVapores").style.display = "block";
                break;
            case "Comportamiento":
                document.getElementById("Comportamiento").style.display = "block";
                break;
            case "Accidentes de los pacientes":
                document.getElementById("AccidentesPacientes").style.display = "block";
                break;
            case "Recursos/Gestión de la organización":
                document.getElementById("Gestion_recursos").style.display = "block";
                break;
        }
    });

    // Manejo de caídas
    let selectCaidas = document.getElementById("Caidas");
    let divCaidasTipo = document.getElementById("caidas_tipo");
    let tipoCaidas = document.getElementById("TipoCaidas");
    let divCaidasSubtipo = document.getElementById("caidas_subtipo");
    let subtipoCaidas = document.getElementById("SubtipoCaidas");

    selectCaidas.addEventListener("change", function () {
        if (selectCaidas.value === "Si") {
            divCaidasTipo.style.display = "block";
        } else {
            // Ocultar y restablecer valores
            divCaidasTipo.style.display = "none";
            tipoCaidas.selectedIndex = 0;
            divCaidasSubtipo.style.display = "none";
            subtipoCaidas.selectedIndex = 0;
        }
    });

    tipoCaidas.addEventListener("change", function () {
        if (tipoCaidas.value === "Si") {
            divCaidasSubtipo.style.display = "block";
        } else {
            divCaidasSubtipo.style.display = "none";
            subtipoCaidas.selectedIndex = 0;
        }
    });
});


// Resultados para el paciente

document.addEventListener("DOMContentLoaded", function () {

    // Selección del campo de resultados del paciente
    let selectResultadosPaciente = document.getElementById("resultados_paciente");
    // Selección del div de grado de daño
    let divGradoDaño = document.getElementById("GradoDaño");

    // Manejo del cambio en el campo de resultados del paciente
    selectResultadosPaciente.addEventListener("change", function () {
        if (selectResultadosPaciente.value === "Grado de daño") {
            // Mostrar div si el valor es "Grado de daño"
            divGradoDaño.style.display = "block";
        } else {
            // Ocultar div si el valor no es "Grado de daño"
            divGradoDaño.style.display = "none";
        }
    });
});


// RResultados para la Oranización
document.addEventListener("DOMContentLoaded", function () {
    // Selección del campo de resultados de la organización
    let selectResultadosOrganizacion = document.getElementById("resultados_organizacion");
    // Selección del div de aumento de recursos
    let divAumentoRecursosPX = document.getElementById("AumentoRecursosPX");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectResultadosOrganizacion.value === "Aumento de los recursos asignados al paciente") {
            // Mostrar div si el valor es "Aumento de los recursos asignados al paciente"
            divAumentoRecursosPX.style.display = "block";
        } else {
            // Ocultar div si el valor no es "Aumento de los recursos asignados al paciente"
            divAumentoRecursosPX.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectResultadosOrganizacion.addEventListener("change", handleVisibility);
});



// ANALISIS

document.addEventListener("DOMContentLoaded", function () {
    // Selección del campo de análisis
    let selectAnalisis = document.getElementById("evento_analisis");
    // Selección de los divs
    let divValidacionSegui = document.getElementById("validacion_segui");
    let divRespuestaAnalisis = document.getElementById("segui_respuesVal");

    // Función para manejar la visibilidad
    function handleVisibility() {
        if (selectAnalisis.value === "Si") {
            // Mostrar divs si el valor es "Si"
            divValidacionSegui.style.display = "block";
            divRespuestaAnalisis.style.display = "block";
        } else {
            // Ocultar divs si el valor no es "Si"
            divValidacionSegui.style.display = "none";
            divRespuestaAnalisis.style.display = "none";
        }
    }

    // Ejecutar la función al cargar la página
    handleVisibility();

    // Ejecutar la función cuando se cambia la selección
    selectAnalisis.addEventListener("change", handleVisibility);
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

