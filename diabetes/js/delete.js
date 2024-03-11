import { setAlerts } from "./plugins/alerts_db.plugin.js";
import { httpClients } from "./plugins/http-client_db.plugin.js";

const url = 'php/controllers/delete.controller.php';


document.addEventListener('DOMContentLoaded', function () {
    // Función para eliminar un paciente
    const deletePaciente = async () => {
        // Mostrar el diálogo de confirmación
        const result = await setAlerts.confirmDelete();

        // Verificar si el usuario confirmó la eliminación
        if (result.isConfirmed) {
            // Obtener el ID del paciente
            const idPaciente = document.getElementById('borrar_paciente').getAttribute("data-id-paciente");
            const params = { idPaciente: idPaciente };


            try {
                const response = await httpClients.get(url, params);

                if(response == 1) {
                    // Mostrar mensaje de éxito
                    setAlerts.successAlert(
                        'El paciente ha sido borrado.', 
                        '¡Borrado!',
                        null,
                        'index.php'
                    );
                } else {
                    setAlerts.errorAlert('Error al Eliminar Paciente1');
                }
            } catch (error) {
                console.error(error);
                setAlerts.errorAlert('Error al Eliminar Paciente2');
            }
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // El usuario ha cancelado la operación
            setAlerts.warningAlert('Operación cancelada.');
        }
    };

    // Asigna la función al evento click del botón de borrar paciente
    document.getElementById('borrar_paciente').addEventListener('click', deletePaciente);
});

