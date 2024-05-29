import { setAlerts } from "./plugins/alerts.plugin.js";
import { httpClients } from "./plugins/http-client.plugin.js";

const url = 'php/controllers/seguimiento.controller.php';

const formData = $('#seguimiento_escalas');

export const seguimientoForm = () => {
    formData.on('submit',async function (event){
        event.preventDefault();
        let alldata = $(this).serialize();

        // console.log(alldata);
        
        validationData(alldata);

    })
}

const validationData = async (alldata) =>{
    try {
        const response = (await httpClients.post(url,alldata));
        console.log(response);

        if (response == 0) {return setAlerts.errorAlert('Hubo una Falla en el servidor al Guardar los datos')}

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