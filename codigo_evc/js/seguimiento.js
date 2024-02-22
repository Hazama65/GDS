import { setAlerts } from "./plugins/alerts.plugin_evc.js";
import { httpClients } from "./plugins/http-client.plugin_evc.js";


const url = "php/controllers/seguimiento.controller.php";
const data = $('#seguimiento_evc');

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
