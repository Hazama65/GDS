import { setAlerts } from "./plugins/alerts_gn.plugin.js";
import { httpClients } from "./plugins/http-client_gn.plugin.js";

const url = 'php/controllers/insert.controller.php';

const formData = $('#gineco_form');

export const mainForm = () => {
    formData.on('submit',async function(event){
        event.preventDefault();
        let alldata = $(this).serialize();

        // console.log(alldata);

        validationData(alldata)
    })
}


const validationData = async ( alldata ) => {

    try {
        const response = (await httpClients.post(url,alldata));

        if (response == 0) {return setAlerts.errorAlert('Fallo del servidor al guardar los datos')}

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