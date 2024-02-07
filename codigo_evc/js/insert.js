import { setAlerts } from "./plugins/alerts.plugin_evc.js";
import { httpClients } from "./plugins/http-client.plugin_evc.js";


const url = "php/controllers/insert.controller.php";
const data = $('#evc_form');

export const mainForm = () => {

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

        hideLoadingOverlay();

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
