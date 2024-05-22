import { setAlerts } from "./plugins/alerts.plugin.js";
import { httpClients } from "./plugins/http-client.plugin.js";

const url = 'php/controllers/delete.controller.php';

document.addEventListener('DOMContentLoaded', function () {
    // Función para eliminar un paciente
    const deletePaciente = async () => {
        // Obtener el ID del paciente
        const idPaciente = document.getElementById('borrar_paciente').getAttribute("data-id-paciente");
        const params = new URLSearchParams({ idPaciente }).toString();
        const fullUrl = `${url}?${params}`;


        try {
            const response = await httpClients.get(fullUrl);
            console.log(response);

            if(response == 1) {
                // Mostrar mensaje de éxito
                setAlerts.successAlert(
                    'El paciente ha sido borrado.',
                    '¡Borrado!',
                    null,
                    'index_medico.php'
                );
            } else {
                setAlerts.errorAlert('Error al Eliminar Paciente1');
            }
        } catch (error) {
            console.error(error);
            setAlerts.errorAlert('Error al Eliminar Paciente2');
        }
    };

    // Asigna la función al evento click del botón de borrar paciente
    document.getElementById('borrar_paciente').addEventListener('click', deletePaciente);
});
