


// FUNCION DISPOSITIVOS MEDICOS 

document.getElementById('dispositivo_select').addEventListener('change', function () {
    let dispositivoDiv = document.getElementById('select_dispositivomedico');
    if (this.value === 'Si') {
        dispositivoDiv.style.display = 'flex';
    } else {
        dispositivoDiv.style.display = 'none';
        // Restablecer valores de los campos cuando se selecciona "No" o se cambia la selección
        let inputs = dispositivoDiv.querySelectorAll('input');
        inputs.forEach(function (input) {
            input.value = '';
        });
    }
});



// OCULTAR FACTORES DEL DISPOSITIVO 

document.addEventListener('DOMContentLoaded', function () {
    const factorDispositivoCheckbox = document.getElementById('factor_dispositivo');
    const errorUsuarioCheckbox = document.getElementById('error_usuario');
    const errorExternoCheckbox = document.getElementById('error_externo');

    const dispositivoFactoresDiv = document.getElementById('Dispositivo_factores');
    const factoresUsuarioDiv = document.getElementById('factores_Usuario');
    const factoresExterosDiv = document.getElementById('factores_Exteros');

    factorDispositivoCheckbox.addEventListener('change', function () {
        toggleDiv(factorDispositivoCheckbox, dispositivoFactoresDiv);
    });

    errorUsuarioCheckbox.addEventListener('change', function () {
        toggleDiv(errorUsuarioCheckbox, factoresUsuarioDiv);
    });

    errorExternoCheckbox.addEventListener('change', function () {
        toggleDiv(errorExternoCheckbox, factoresExterosDiv);
    });

    function toggleDiv(checkbox, div) {
        if (checkbox.checked) {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
            // Restablecer todos los campos dentro del div
            const inputs = div.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    input.checked = false;
                } else {
                    input.value = '';
                }
            });
        }
    }
});


document.getElementById('agentes_diagnostico').addEventListener('change', function () {
    let agentesInvasivosDiv = document.getElementById('Agentesinvasivos_diagnostico');
    agentesInvasivosDiv.style.display = this.checked ? 'block' : 'none';
});

document.getElementById('equipo_medico').addEventListener('change', function () {
    let equipoInvasivosDiv = document.getElementById('Equipo_invasivos_medico');
    equipoInvasivosDiv.style.display = this.checked ? 'block' : 'none';
});

document.getElementById('protesis_ortesis').addEventListener('change', function () {
    let protesisInvasivosDiv = document.getElementById('Protesis_invasivos_ortesis');
    protesisInvasivosDiv.style.display = this.checked ? 'block' : 'none';
});

document.getElementById('insumos_odonto').addEventListener('change', function () {
    let insumosInvasivosDiv = document.getElementById('Insumos_invasivos_odonto');
    insumosInvasivosDiv.style.display = this.checked ? 'block' : 'none';
});

document.getElementById('materiales_quirurgicos').addEventListener('change', function () {
    let materialesInvasivosDiv = document.getElementById('Materiales_invasivos_quirurgicos');
    materialesInvasivosDiv.style.display = this.checked ? 'block' : 'none';
});

document.getElementById('productos_higienicos').addEventListener('change', function () {
    let productosInvasivosDiv = document.getElementById('Productos_invasivos_higienicos');
    productosInvasivosDiv.style.display = this.checked ? 'block' : 'none';
});



// FUNCION VALIDACION DEL EVENTO
document.getElementById('validacion_evento').addEventListener('change', function () {
    let validacion_eventoDIV = document.getElementById('val_event');

    if (this.value === 'Si') {
        validacion_eventoDIV.style.display = 'flex';
    } else {
        // Restablecer valores de los campos dentro del contenedor antes de ocultarlo
        let inputs = validacion_eventoDIV.querySelectorAll('input');
        let selects = validacion_eventoDIV.querySelectorAll('select');

        inputs.forEach(function (input) {
            input.value = '';
        });

        selects.forEach(function (select) {
            select.selectedIndex = 0; // Restablece el select a su primera opción
        });

        // Ahora oculta el contenedor
        validacion_eventoDIV.style.display = 'none';
    }
});



// FUNCION PARA OCULTAR EVIDENCIA 

document.getElementById('acciones_preventivas').addEventListener('change', function () {
    var evidenciaEstatusDIV = document.getElementById('evidencia_estatus');
    var seleccionArchivoDIV = document.getElementById('seleccion_archivo');

    if (this.value === 'Si') {
        evidenciaEstatusDIV.style.display = 'block';
    } else {
        evidenciaEstatusDIV.style.display = 'none';
        seleccionArchivoDIV.style.display = 'none';

        // Restablecer los valores de los campos
        document.getElementById('evidencia').value = '';
        document.getElementById('file').value = '';
    }
});

document.getElementById('evidencia').addEventListener('change', function () {
    var seleccionArchivoDIV = document.getElementById('seleccion_archivo');

    if (this.value === 'Si') {
        seleccionArchivoDIV.style.display = 'block';
    } else {
        seleccionArchivoDIV.style.display = 'none';

        // Restablecer el valor del campo de archivo
        document.getElementById('file').value = '';
    }
});


// EVENTOS 

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





// document.addEventListener("DOMContentLoaded", function () {
//     let selectalerta_cofrepris = document.getElementById("alerta_cofrepris");

//     selectalerta_cofrepris.addEventListener("change", function () {
//         switch (selectalerta_cofrepris.value) {
//             case "No":
//                 selectalerta_cofrepris.style.backgroundColor = "#008000";
//                 break;
//             case "Si":
//                 selectalerta_cofrepris.style.backgroundColor = "#f4444f";
//                 break;

//             default:
//                 selectalerta_cofrepris.style.backgroundColor = "";
//                 break;
//         }
//     });
// });


document.getElementById('alerta_cofrepris').addEventListener('change', function () {
    let redCircle = document.getElementById('circle-red');
    let yellowCircle = document.getElementById('circle-yellow');
    let greenCircle = document.getElementById('circle-green');

    // Reset all circles
    redCircle.classList.remove('active');
    yellowCircle.classList.remove('active');
    greenCircle.classList.remove('active');

    // Change circle color based on selected value
    if (this.value === 'No') {
        greenCircle.classList.add('active');
    } else if (this.value === 'Si') {
        redCircle.classList.add('active');
    } else {
        yellowCircle.classList.add('active'); // You can customize this if you want a different behavior for the default option
    }
});
