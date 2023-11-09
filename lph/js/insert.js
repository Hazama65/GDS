import { setAlerts } from "./plugins/alerts_lph.plugin.js";
import { httpClients } from "./plugins/http-client_lph-plugin.js";

const url = 'php/controllers/insert.controller.php';

const formData = $('#lph_form');

export const mainForm = () => {
    formData.on('submit',async function (event){
        event.preventDefault();
        let alldata = $(this).serialize();

        validationData(alldata);
    })
}


const validationData = async (alldata) =>{
    try {
        const response = ( await httpClients.post(url,alldata));

        console.log(response);

        if(response == 0) {return setAlerts.errorAlert('Hubo un error al Guardar los Datos en la Base de Datos')}

        if (response == 'success') {
            return setAlerts.successAlert(
                'Datos Guardados Correctamente',
                null,
                null,
                'index.php'
            )
        }
    
    } catch (error) {
        console.log('An error ocurrend in the system, please contact with your administrator',error)

        return setAlerts.errorAlert('Se Produjo un error al Guardar los Datos en la Base de Datos')
    }
}