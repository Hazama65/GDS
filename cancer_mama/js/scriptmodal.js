//FUNCIONS ANTECEDENTES HEREDOFAMILIARES CANCER 

// Antecedentes Heredofamilaires: Cancer de Prostata 

document.addEventListener("DOMContentLoaded", function () {
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


// Antecedentes Ginecológicos

// ESTA EMBARAZADA


document.addEventListener("DOMContentLoaded", function () {

    var selectEstaEmbarazada = document.getElementById("Esta_Embarazada");
    var divFechaProbable = document.getElementById("Fecha_probable");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectEstaEmbarazada.value === "Si") {
            divFechaProbable.style.display = "block";

        } else {
            divFechaProbable.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectEstaEmbarazada.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});

// LACTANCIA

document.addEventListener("DOMContentLoaded", function () {

    var selectLactancia = document.getElementById("Lactancia");
    var divTiempoLactancia = document.getElementById("Tiempo_lactancia");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectLactancia.value === "Si") {
            divTiempoLactancia.style.display = "block";

        } else {
            divTiempoLactancia.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectLactancia.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});

// Mastectomía Extrainstitucional

document.addEventListener("DOMContentLoaded", function () {

    var selectMastectomia = document.getElementById("Mastectomia_extrain");
    var divLateralidadFecha = document.getElementById("late_fecha_maste");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectMastectomia.value === "Si") {
            divLateralidadFecha.style.display = "block";

        } else {
            divLateralidadFecha.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectMastectomia.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});


// Histopatología

document.addEventListener("DOMContentLoaded", function () {

    var selectHistopatologia = document.getElementById("Histopatologia");
    var divDXHistopatologia = document.getElementById("Histo_area");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectHistopatologia.value === "Si") {
            divDXHistopatologia.style.display = "block";

        } else {
            divDXHistopatologia.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectHistopatologia.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});


// DX HISTOPATOLOGICO 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div siguiente que se debe mostrar
    var selectElement = document.getElementById("Histopatologia_area");
    var divSiguiente = document.getElementById("DXHistopatologia");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó una opción diferente a "Sin Registro"
        if (selectElement.value !== "Sin Registro") {
            // Muestra el div siguiente si no se seleccionó "Sin Registro"
            divSiguiente.style.display = "block";
        } else {
            // Oculta el div siguiente en caso contrario
            divSiguiente.style.display = "none";
        }
    });
});


// Inmunohistoquimica

document.addEventListener("DOMContentLoaded", function () {

    var selectInmunohistoquimica = document.getElementById("Inmunohistoquimica");
    var divDXInmunohistoquimica = document.getElementById("Inmuno_area");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectInmunohistoquimica.value === "Si") {
            divDXInmunohistoquimica.style.display = "block";

        } else {
            divDXInmunohistoquimica.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectInmunohistoquimica.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});


// DX Area Inmunohistoquimica 

document.addEventListener("DOMContentLoaded", function () {

    var selectElementInmuno = document.getElementById("Inmunohistoquimica_area");
    var divSiguienteArea = document.getElementById("Area_Inmunohistoquimica");

    selectElementInmuno.addEventListener("change", function () {
        // Comprueba si se seleccionó una opción diferente a "Sin Registro"
        if (selectElementInmuno.value !== "Sin Registro") {
            // Muestra el div siguiente si no se seleccionó "Sin Registro"
            divSiguienteArea.style.display = "block";
        } else {
            // Oculta el div siguiente en caso contrario
            divSiguienteArea.style.display = "none";
        }
    });
});

// Oncogén HER2

document.addEventListener("DOMContentLoaded", function () {

    var selectInmunohocogen = document.getElementById("Oncogen_her2");
    var divDXInmunoFISH = document.getElementById("Fish_tt");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectInmunohocogen.value === "++") {
            divDXInmunoFISH.style.display = "block";

        } else {
            divDXInmunoFISH.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectInmunohocogen.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});


// MOLECULAR

document.addEventListener("DOMContentLoaded", function () {

    var selectMolecular = document.getElementById("Molecular");
    var divDXAreaMolecular = document.getElementById("Histo_areaMolecular");

    // Función para mostrar u ocultar campos según la selección
    function mostrarCampos() {
        if (selectMolecular.value === "Si") {
            divDXAreaMolecular.style.display = "block";

        } else {
            divDXAreaMolecular.style.display = "none";

        }
    }

    // Agrega un evento de cambio al elemento select
    selectMolecular.addEventListener("change", mostrarCampos);

    // Muestra u oculta los campos iniciales según la selección inicial
    mostrarCampos();
});

// AREA MOLECULAR

document.addEventListener("DOMContentLoaded", function () {

    var selectMolecularArea = document.getElementById("Molecular_area");
    var divMolecularEstudios = document.getElementById("Molecular_estudios");

    selectMolecularArea.addEventListener("change", function () {
        // Comprueba si se seleccionó una opción diferente a "Sin Registro"
        if (selectMolecularArea.value !== "Sin Registro") {
            // Muestra el div siguiente si no se seleccionó "Sin Registro"
            divMolecularEstudios.style.display = "block";
        } else {
            // Oculta el div siguiente en caso contrario
            divMolecularEstudios.style.display = "none";
        }
    });
});


// TRATAMIENTO QUIRURGICO 

document.addEventListener("DOMContentLoaded", function () {

    var selectTxQuirurgico = document.getElementById("Quirurgicos");
    var divTratamiento = document.getElementById("tx_lateralidadquirurgico");

    selectTxQuirurgico.addEventListener("change", function () {
        // Comprueba si se seleccionó una opción diferente a "Sin Registro"
        if (selectTxQuirurgico.value !== "Sin Registro") {
            // Muestra el div siguiente si no se seleccionó "Sin Registro"
            divTratamiento.style.display = "block";
        } else {
            // Oculta el div siguiente en caso contrario
            divTratamiento.style.display = "none";
        }
    });
})


// TIPO  LATERALIDAD 

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectTipoQx = document.getElementById("Tipo_qx");
    var divTratamientoGanglionar = document.getElementById("tratamiento_ganglionar");
    var divTratamientoMastectomia = document.getElementById("tratamiento_Mastectomia");

    // Agregar un evento de cambio al elemento select
    selectTipoQx.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectTipoQx.value === "Ganglionar") {
            // Si se selecciona "Ganglionar", mostrar el div correspondiente y ocultar el otro
            divTratamientoGanglionar.style.display = "block";
            divTratamientoMastectomia.style.display = "none";
        } else if (selectTipoQx.value === "Mastectomia") {
            // Si se selecciona "Mastectomia", mostrar el div correspondiente y ocultar el otro
            divTratamientoGanglionar.style.display = "none";
            divTratamientoMastectomia.style.display = "block";
        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divTratamientoGanglionar.style.display = "none";
            divTratamientoMastectomia.style.display = "none";
        }
    });
});


// QUIMIOTERAPIA 

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectQuimioterapia = document.getElementById("Quimioterapia");
    var divQuimioArtraciclinas = document.getElementById("quimio_antraciclinas");
    var divTerapiaQuimio = document.getElementById("quimioterapia_1");

    // Agregar un evento de cambio al elemento select
    selectQuimioterapia.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectQuimioterapia.value === "Si") {
            // Si se selecciona "Ganglionar", mostrar el div correspondiente y ocultar el otro
            divQuimioArtraciclinas.style.display = "block";
            divTerapiaQuimio.style.display = "block";

        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divQuimioArtraciclinas.style.display = "none";
            divTerapiaQuimio.style.display = "none";
        }
    });
});

// SELECCION DE TIPO QUIMIO 
document.addEventListener("DOMContentLoaded", function () {
    // Obtener el elemento select y los divs que se deben mostrar/ocultar
    var selectTipoQT = document.getElementById("Tipo_QT");
    var divEsquemaAdyNeo = document.getElementById("Esquema_ady_neo");
    var div1erLineaQT = document.getElementById("1erLinea_QT");
    var div2daLineaQT = document.getElementById("2daLinea_QT");

    // Agregar un evento de cambio al elemento select
    selectTipoQT.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectTipoQT.value === "Adyuvante" || selectTipoQT.value === "Neoadyuvante") {
            // Si se selecciona "Adyuvante" o "Neoadyuvante", mostrar el div correspondiente y ocultar los otros
            divEsquemaAdyNeo.style.display = "block";
            div1erLineaQT.style.display = "none";
            div2daLineaQT.style.display = "none";
        } else if (selectTipoQT.value === "Paliativo") {
            // Si se selecciona "Paliativo", mostrar ambos divs
            divEsquemaAdyNeo.style.display = "none";
            div1erLineaQT.style.display = "grid";
            div2daLineaQT.style.display = "block";
        } else {
            // Si no se selecciona ninguna opción válida, ocultar todos los divs
            divEsquemaAdyNeo.style.display = "none";
            div1erLineaQT.style.display = "none";
            div2daLineaQT.style.display = "none";
        }
    });
});


// HORMONOTERAPIA

document.addEventListener("DOMContentLoaded", function () {
    // Obtener el elemento select y los divs que se deben mostrar/ocultar
    var selectHormoterapia = document.getElementById("Hormoterapia");
    var divTipoHormono = document.getElementById("Tipo_hormono");
    var divHormoMoment = document.getElementById("hormo_moment");

    // Agregar un evento de cambio al elemento select
    selectHormoterapia.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectHormoterapia.value === "Si") {
            // Si se selecciona "Si", mostrar los divs correspondientes
            divTipoHormono.style.display = "block";
            divHormoMoment.style.display = "block";
        } else {
            // Si no se selecciona "Si", ocultar los divs correspondientes
            divTipoHormono.style.display = "none";
            divHormoMoment.style.display = "none";
        }
    });
});

// HER 2

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectHER2 = document.getElementById("HER_2");
    var divEsquemaHerr = document.getElementById("Esquema_her2");

    // Agregar un evento de cambio al elemento select
    selectHER2.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectHER2.value === "Si") {
            // Si se selecciona "Ganglionar", mostrar el div correspondiente y ocultar el otro
            divEsquemaHerr.style.display = "block";
        
        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divEsquemaHerr.style.display = "none";
        }
    });
});

//             Triple Negativo

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectTripleNegativo = document.getElementById("triple_negativo");
    var divEsquemaTripleNegativo = document.getElementById("esquema_triple");

    // Agregar un evento de cambio al elemento select
    selectTripleNegativo.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectTripleNegativo.value === "Si") {
            // Si se selecciona "Ganglionar", mostrar el div correspondiente y ocultar el otro
            divEsquemaTripleNegativo.style.display = "block";
        
        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divEsquemaTripleNegativo.style.display = "none";
        }
    });
});


//             Hormonosensible

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectHormosensible= document.getElementById("Hormosensible");
    var divHormosensibleInhibidores = document.getElementById("Inhibidores");

    // Agregar un evento de cambio al elemento select
    selectHormosensible.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectHormosensible.value === "Si") {
            // Si se selecciona "Ganglionar", mostrar el div correspondiente y ocultar el otro
            divHormosensibleInhibidores.style.display = "block";
        
        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divHormosensibleInhibidores.style.display = "none";
        }
    });
});


// QUIMIOTERAPIA/ FALLECIO/ QUIMIO COMPLETA :

document.addEventListener("DOMContentLoaded", function () {
    var selectCompletoQuimio = document.getElementById("Completo_Quimio");
    var divQuimioFecha = document.getElementById("quimio_fecha");
    var divCausaIncompleta = document.getElementById("Causa_incompleta");
    var selectCausaIncompleta = document.getElementById("CausaQT_Incompleta");
    var divQuimioFechaQT = document.getElementById("quimio_fechaQT");
    var divCausaFallecio = document.getElementById("Causa_Fallecio");

    selectCompletoQuimio.addEventListener("change", function () {
        // Comprobar la opción seleccionada en Completo_Quimio
        if (selectCompletoQuimio.value === "Si") {
            // Si se selecciona "Si", mostrar el div de fecha de quimioterapia y ocultar los otros
            divQuimioFecha.style.display = "block";
            divCausaIncompleta.style.display = "none";
            divQuimioFechaQT.style.display = "none";
            divCausaFallecio.style.display = "none";
        } else if (selectCompletoQuimio.value === "No") {
            // Si se selecciona "No", mostrar el div de causa incompleta y ocultar los otros
            divCausaIncompleta.style.display = "block";
            divQuimioFecha.style.display = "block";
            divQuimioFechaQT.style.display = "none";
            divCausaFallecio.style.display = "none";
        }
    });

    selectCausaIncompleta.addEventListener("change", function () {
        // Comprobar la opción seleccionada en CausaQT_Incompleta
        if (selectCausaIncompleta.value === "Fallecio") {
            // Si se selecciona "Fallecio", mostrar el div de fecha de quimioterapia y causa de fallecimiento
            divQuimioFecha.style.display = "none";
            divQuimioFechaQT.style.display = "block";
            divCausaFallecio.style.display = "block";
        } else {
            // Si se selecciona otra opción, ocultar el div de fecha de quimioterapia y causa de fallecimiento
            divQuimioFechaQT.style.display = "none";
            divCausaFallecio.style.display = "none";
        }
    });
});


//            OTRA CAUSA 

document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos select y los divs que se deben mostrar/ocultar
    var selectFallecioCausa= document.getElementById("Fallecio_causa");
    var divQuimioOtra = document.getElementById("quimio_otra");

    // Agregar un evento de cambio al elemento select
    selectFallecioCausa.addEventListener("change", function () {
        // Comprobar la opción seleccionada
        if (selectFallecioCausa.value === "Otro") {
            // Si se selecciona "Ganglionar", mostrar el div correspondiente y ocultar el otro
            divQuimioOtra.style.display = "block";
        
        } else {
            // Si no se selecciona ninguna opción válida, ocultar ambos divs
            divQuimioOtra.style.display = "none";
        }
    });
});

// RADIOTERAPIA

document.addEventListener("DOMContentLoaded", function () {

    var selectRadioterapia = document.getElementById("Radioterapia");
    var divSiRadioterapia =document.getElementById("SI_Radioterapia");

    selectRadioterapia.addEventListener("change", function(){

        if(selectRadioterapia.value === "Si") {
            divSiRadioterapia.style.display ="block";

        }else {
            divSiRadioterapia.style.display ="none";
        }
    })
})

// DEFUNCION 

document.addEventListener("DOMContentLoaded", function () {

    var selectDefuncion = document.getElementById("Defuncion");
    var divFechaCausaDefu =document.getElementById("fecha_causaDefuncion");

    selectDefuncion.addEventListener("change", function(){

        if(selectDefuncion.value === "Si") {
            divFechaCausaDefu.style.display ="block";

        }else {
            divFechaCausaDefu.style.display ="none";
        }
    })
})

