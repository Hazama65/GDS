import { setAlerts } from "./plugins/alerts.plugin_EG.js";
import { httpClients } from "./plugins/http-client.plugin_EG.js";
import { hideLoadingOverlay, showLoadingOverlay } from "./plugins/loader.plugin_EG.js";


const url = "php/controllers/insert.controller.php";
const data = $('#EG_form');

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

