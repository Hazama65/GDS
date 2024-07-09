import { setAlerts } from "./plugins/alerts.plugin_evc.js";
import { httpClients } from "./plugins/http-client.plugin_evc.js";


const url = "php/controllers/seguimiento_n.controller.php";
const data = $('#seguimiento_n_evc');

export const seguimientoForm = () => {

    data.on('submit', async function (event){
        event.preventDefault();
        let alldata = $(this).serialize();
        // console.log(alldata);

        showLoadingOverlay();

        validation(alldata);

    })

}

const validation = async (alldata) => {
    try {

    
        const response = await httpClients.post(url, alldata);
        console.log(response);

        hideLoadingOverlay();
        
        if (response == 0) {return setAlerts.errorAlert('Hubo una Falla en el servidor al Guardar los datos')}


        if (response == 'success') {
            return setAlerts.successAlert(
                'Guardado',
                null,
                null,
                'index.php',
            );
        }
    } catch (error) {
        hideLoadingOverlay();
        console.error(error);
        setAlerts.errorAlert('Hubo un error en la solicitud.');
    }
}


function showLoadingOverlay() {
    document.getElementById('loading-overlay').style.display = 'flex';
}

function hideLoadingOverlay() {
    document.getElementById('loading-overlay').style.display = 'none';
}




// Calcular Escala HAS-BLED

function calcularPuntuacion() {
    let checkboxes = document.querySelectorAll('#Alcoholismo_HAS, #Hipertension_HAS, #funcionrenal_HAS, #funcionhepatica_HAS, #ACVPREV_HAS, #Hemorragiaimportante_HAS, #EdadSup_HAS, #INR_HAS, #medicacionaines_HAS');
    let puntuacion = 0;

    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            puntuacion += parseInt(checkbox.value);
        }
    });

    document.getElementById('puntuacion_has').value = puntuacion;

    // Determinar la interpretación basada en la puntuación
    if (puntuacion === 1) {
        document.getElementById('interpretacion_has').value = 'Riesgo Bajo (Probabilidad de sangrado en un año entre el 1.02 y el 1.5 %)';
    } else if (puntuacion === 2) {
        document.getElementById('interpretacion_has').value = 'Riesgo Intermedio (Probabilidad de sangrado en un año entre 1.88 y 3.2 %)';
    } else if (puntuacion >= 3 && puntuacion <= 9) {
        document.getElementById('interpretacion_has').value = 'Riesgo Alto (Probabilidad de sangrado en un año entre el 4.9 y el 19.6 %)';
    } else {
        document.getElementById('interpretacion_has').value = ''; // Manejar otros casos si es necesario
    }
}

// Event listener para los checkboxes específicos
document.addEventListener('DOMContentLoaded', function () {
    let checkboxes = document.querySelectorAll('#Alcoholismo_HAS, #Hipertension_HAS, #funcionrenal_HAS, #funcionhepatica_HAS, #ACVPREV_HAS, #Hemorragiaimportante_HAS, #EdadSup_HAS, #INR_HAS, #medicacionaines_HAS');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calcularPuntuacion();
        });
    });
});

// Event listener para los checkboxes específicos
document.addEventListener('DOMContentLoaded', function () {
    let checkboxes = document.querySelectorAll('#Alcoholismo_HAS, #Hipertension_HAS, #funcionrenal_HAS, #funcionhepatica_HAS, #ACVPREV_HAS, #Hemorragiaimportante_HAS, #EdadSup_HAS, #INR_HAS, #medicacionaines_HAS');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calcularPuntuacionHAS();
        });
    });
});



document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento checkbox y el div que se debe mostrar/ocultar
    var checkboxEstatinas = document.getElementById("estatinas");
    var divEstatinasDosistiempo = document.getElementById("estatinas_dosistiempo");

    // Agrega un evento de cambio al elemento checkbox
    checkboxEstatinas.addEventListener("change", function () {
        // Comprueba si el checkbox está marcado
        if (checkboxEstatinas.checked) {
            // Muestra el div si el checkbox está marcado
            divEstatinasDosistiempo.style.display = "block";
        } else {
            // Oculta el div si el checkbox no está marcado
            divEstatinasDosistiempo.style.display = "none";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento checkbox y el div que se debe mostrar/ocultar
    var checkboxCerebrolisina = document.getElementById("Cerebrolisina_med");
    var divnone_cerebrolisina= document.getElementById("none_cerebrolisina");

    // Agrega un evento de cambio al elemento checkbox
    checkboxCerebrolisina.addEventListener("change", function () {
        // Comprueba si el checkbox está marcado
        if (checkboxCerebrolisina.checked) {
            // Muestra el div si el checkbox está marcado
            divnone_cerebrolisina.style.display = "block";
        } else {
            // Oculta el div si el checkbox no está marcado
            divnone_cerebrolisina.style.display = "none";
        }
    });
});

