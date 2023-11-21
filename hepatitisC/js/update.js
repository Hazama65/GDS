import { setAlerts }from './plugins/alerts_hc.plugin.js';
import { httpClients }from './plugins/http-client_hc.plugin.js';


const url = 'php/controllers/update.controller.php';
const formData = $('#edit_form');

export const editForm = () => {
    formData.on('submit', async function(event){
        event.preventDefault();
        let alldata = $(this).serialize();
        // console.log(alldata);
        validationData(alldata);
    })
}

const validationData = async (alldata) => {
    try {
        const response = (await httpClients.post(url,alldata));
        console.log(response);
        
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