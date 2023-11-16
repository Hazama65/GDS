import { setAlert } from "./plugins/alerts.plugin.js";
import { httpClient } from "./plugins/http-client.plugin.js";



const url = 'php/controllers/login.controller.php';

const formLogin = $('#login_form');

export const mainLogin = () => {
    formLogin.on('submit',  async function (event) {
        event.preventDefault();
        let formData = $(this).serialize();

        validateLogin(formData);
        
    })
}

const validateLogin = async (formData) => {

    try{

        const response = JSON.parse( await httpClient.post(url, formData) );
        
        if(response === 0) return setAlert.errorAlert('Usuario o Password incorrectos');

        const typeToken = response[0].typetoken;

        if(typeToken.trim() === 'anemia'){
            return setAlert.successAlert(
                'La operación se ha completado correctamente.',
                null,
                null,
                '../anemia/index.php'
            )
        }

        if(typeToken.trim() === 'endoscopia'){
            return setAlert.successAlert(
                'La operación se ha completado correctamente.',
                null,
                1500,
                '../endoscopia/index.php'
            )
        }

        if (typeToken.trim() === 'folios') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../folios/index.php'
            )
        }
        if (typeToken.trim() === 'folios_vista') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../folios/vista.php'
            )
        }

        if (typeToken.trim() === 'hemodinamia') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../hemodinamia/index.php'
            )
        }
        if (typeToken.trim() === 'ambulatoria') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../ambulatoria/index.php'
            )
        }
        if (typeToken.trim() === 'interconsulta') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../interconsultas_mi/index.php'
            )
        }

        if (typeToken.trim() === 'residentes') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../residentes/index.php'
            )
        }
        if (typeToken.trim() === 'diabetes') {
            return setAlert.successAlert(
                'La operacion se ha completado correctamente.',
                null,
                null,
                '../diabetes/index.php'
            )
        }





    }catch(error){

            // Aquí puedes manejar el error en la petición AJAX
        console.error('An error ocurred in the system, please contact with your administrator:', error);

        return setAlert.errorAlert('Se produjo un error al procesar la solicitud.');
    
    }
}

    
