import { setAlert } from "./plugins/alerts.plugin.js";

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const errorMessage = urlParams.get('message'); // Extrae el mensaje de error

    if (status === 'success') {
        setAlert.successAlert('El archivo se ha procesado y guardado correctamente.', 'Éxito', 0, 'table.php');
    } else if (status === 'error' && errorMessage) {
        setAlert.errorAlert(decodeURIComponent(errorMessage)); // Muestra el mensaje de error en la alerta
    } else if (status === 'error') {
        setAlert.errorAlert('Hubo un problema al procesar el archivo.');
    }
});
