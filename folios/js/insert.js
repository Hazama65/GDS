import { setAlerts } from "./plugins/alerts_folio.plugin.js";
import { httpClients } from "./plugins/http-client_folio.plugin.js";


const url ='php/controllers/folio.controller.php';

const formData = $('#form_folio');

export const mainForm = () =>{
    formData.on('submit',async function(event){
        event.preventDefault();
        let alldata = $(this).serialize();

        validationData(alldata);
    })
}

const validationData = async (alldata)=>{
    try {
        const response = (await httpClients.post(url,alldata));

        if (response == 0) return setAlerts.errorAlert('Datos incorrectos, verificar datos');

        if (response == 1) {
            return setAlerts.successAlert(
                'Datos guardardados',
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


