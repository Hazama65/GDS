import { setAlerts } from "./plugins/alerts_res.plugin.js";
import { httpClients } from "./plugins/http-client_res.plugin.js";
import { hideLoadingOverlay, showLoadingOverlay } from "./plugins/loader.plugin.js";

const url = 'php/controllers/insert.controller.php';

const formData = $('#residente_form');

export const mainForm = () =>{
    formData.on('submit',async function(event){
        event.preventDefault();
        let alldata = $(this).serialize();


        showLoadingOverlay();


        validationData(alldata);
    })
}

const validationData = async (alldata) =>{
    try {
        const response = (await httpClients.post(url,alldata));
        console.log(response);

        hideLoadingOverlay();


        if(response == 'Error') {return setAlerts.errorAlert('Hubo una Falla en el servidor al Guardar los datos')}

        if (response == 'success') {
            return setAlerts.successAlert(
                'Datos Guardados Correctamente',
                null,
                null,
                'index.php'
            )
        }
        
    } catch (error) {
        console.error('An error ocurred in the system, please contact with your administrator:', error);

        return setAlert.errorAlert('Se produjo un error al procesar la solicitud.');

    }
}