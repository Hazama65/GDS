import { setAlerts } from "./plugins/alerts_res.plugin.js";
import { httpClients } from "./plugins/http-client_res.plugin.js";
import { hideLoadingOverlay, showLoadingOverlay } from "./plugins/loader.plugin.js";


const url = 'php/controllers/update.controller.php';
const formData = $('#editarResidentes_form');

export const editForm = () => {
    formData.on('submit', async function(event){
        event.preventDefault();
        let alldata = $(this).serialize();
        // console.log(alldata);
        showLoadingOverlay();

        validationData(alldata);
    })
}

const validationData = async (alldata) => {
    try {
        const response = (await httpClients.post(url,alldata));
        console.log(response);

        hideLoadingOverlay();

        
        if (response == 0) {return setAlerts.errorAlert('Fallo del servidor al Guardar los Datos')}

        if (response == 'success') {
            return setAlerts.successAlert(
                'Datos Actualizados Correctamente',
                null,
                null,
                'index.php'
            )
            
        }

    } catch (error) {
        
    }
}