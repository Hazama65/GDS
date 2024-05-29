import { setAlerts } from "./plugins/alerts_res.plugin.js";
import { httpClients } from "./plugins/http-client_res.plugin.js";

const url = 'php/controllers/delete.controller.php';

document.addEventListener('DOMContentLoaded', function () {
    // Función para eliminar un paciente
    const deletePaciente = async () => {
        // Obtener el ID del paciente
        const idResidente = document.getElementById('borrar_paciente').getAttribute("data-id-paciente");
        const params = new URLSearchParams({ idResidente }).toString();
        const fullUrl = `${url}?${params}`;

        console.log(idResidente, fullUrl);

        try {
            const response = await httpClients.get(fullUrl);
            console.log(response);

            if (response == 1) {
                // Mostrar mensaje de éxito
                setAlerts.successAlert(
                    'El paciente ha sido borrado.',
                    '¡Borrado!',
                    null,
                    'index.php'
                );
            } else {
                setAlerts.errorAlert('Error al Eliminar Paciente1: respuesta inesperada del servidor');
            }
        } catch (error) {
            console.error('Error de red o del servidor:', error);
            setAlerts.errorAlert('Error al Eliminar Paciente2: error de red o del servidor');
        }
    };

    // Asigna la función al evento click del botón de borrar paciente
    document.getElementById('borrar_paciente').addEventListener('click', deletePaciente);
});
