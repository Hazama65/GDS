import { setAlert } from "./plugins/alerts.plugin.js";
import { httpClient } from "./plugins/http-client.plugin.js";

const url = 'php/controllers/login.controller.php';
const formLogin = $('#login_form');

export const mainLogin = () => {
    formLogin.on('submit', async function (event) {
        event.preventDefault();
        let formData = $(this).serialize();

        showLoadingOverlay();

        validateLogin(formData);
    });
}

const validateLogin = async (formData) => {
    try {
        const response = JSON.parse(await httpClient.post(url, formData));
        console.log(response);

        hideLoadingOverlay();
        
        if (response === 0) return setAlert.errorAlert('Usuario o Password incorrectos');

        const typeToken = response[0].typetoken.trim();

        const redirectPaths = {
            'anemia': '../anemia/index.php',
            'endoscopia': '../endoscopia/index.php',
            'folios': '../folios/index.php',
            'folios_vista': '../folios/vista.php',
            'hemodinamia': '../hemodinamia/index.php',
            'ambulatoria': '../ambulatoria/index.php',
            'interconsulta': '../interconsultas_mi/index.php',
            'residentes': '../residentes/index.php',
            'diabetes': '../diabetes/index.php',
            'hepatitisc': '../hepatitisC/index.php',
            'lph': '../lph/index.php',
            'hemofilia': '../hemofilia/index.php',
            'ganglio_cervical': '../ganglio_cervical/index.php',
            'cuestionario': '../cuestionario/registros.php',
            'tasa_iaas': '../tasa_iaas/index.php',
            'iaas': '../iaas/index.php',
            'enfermeriaguardias': '../enfermeriaguardias/index.php',
            'enfermeriaguardias_p': '../enfermeriaguardias/index_personal.php',
            'satisfaccion': '../encuesta_satisfaccion/registros.php',
            'lupus': '../lupus/index.php',
            'ar': '../artritis/index.php',
            'sca': '../sindrome_coronario/index.php',
            'rehabilitacion_censo': '../rehabilitacion/index.php',
            'estadistica_rehab': '../estadistica_rehabi/index.php'
        };

        if (redirectPaths[typeToken]) {
            return setAlert.successAlert(
                'La operación se ha completado correctamente.',
                null,
                null,
                redirectPaths[typeToken]
            );
        } else {
            console.log(redirectPaths[typeToken]);
            return setAlert.errorAlert('Tipo de token no reconocido.');
        }
    } catch (error) {
        hideLoadingOverlay();
        console.error('An error occurred in the system, please contact your administrator:', error);
        return setAlert.errorAlert('Se produjo un error al procesar la solicitud.');
    }
}

const showLoadingOverlay = () => {
    document.getElementById('loading-overlay').style.display = 'flex';
}

const hideLoadingOverlay = () => {
    document.getElementById('loading-overlay').style.display = 'none';
}



    
