// Dentro de tu script JavaScript
document.addEventListener('DOMContentLoaded', function () {
    // ... Tu código existente ...

    function mostrarIdPaciente(event) {
        const listItem = event.target.closest(".patient-item");
        const id_paciente = listItem.getAttribute("data-id-paciente");

        
        // Realiza una solicitud AJAX para obtener datos relacionados con el paciente
        $.ajax({
            type: "GET",
            url: "php/controllers/consulta_seg.controller.php", // Debes crear este archivo para manejar la obtención de datos del paciente
            data: { idPaciente: id_paciente },
            success: function (response) {
                // Procesa la respuesta (supongamos que response es un array de opciones)
                const opcionesSelect = JSON.parse(response);

                // Actualiza el contenido del select con las opciones obtenidas
                const selectElement = document.getElementById('paciente_seleccionado');
                selectElement.innerHTML = '';

                // Agrega una opción sin valor
                const optionSinValor = document.createElement('option');
                optionSinValor.value = ''; // Puedes dejar el valor vacío o asignar un valor específico
                optionSinValor.textContent = 'Seleccione Seguimiento'; // Puedes cambiar el texto según tus necesidades
                selectElement.appendChild(optionSinValor);

                opcionesSelect.forEach(function (opcion) {
                    const option = document.createElement('option');
                    option.value = opcion.valor; // Ajusta según tus datos
                    option.textContent = opcion.texto; // Ajusta según tus datos
                    selectElement.appendChild(option);
                });

                // Muestra el select ahora que tiene opciones
                $('#select-container').show();
            },
            error: function (xhr, status, error) {
                console.error("Error en la solicitud AJAX:", error);
            }
        });

        $('#Seguimiento_index').show();
    }

    // Agrega eventos de clic a cada elemento de la lista
    const patientItems = document.querySelectorAll(".patient-item");
    patientItems.forEach(function (item) {
        item.addEventListener("click", mostrarIdPaciente);
    });
});




document.addEventListener('DOMContentLoaded', function () {

    function cambiarIframe(valorSeleccionado, textoSeleccionado) {

        $.ajax({
            type: "GET",
            url: "consulta_seguimiento.php",
            data: {
                valorSeleccionado: valorSeleccionado,
                textoSeleccionado: textoSeleccionado
            },
            success: function (response) {

                // Accede al contenido del iframe
                const iframeDocument = $('#consulta')[0].contentDocument || $('#consulta')[0].contentWindow.document;

                // Limpia el contenido actual del iframe
                iframeDocument.open();
                iframeDocument.write("");
                iframeDocument.close();

                // Escribe el nuevo contenido en el iframe
                iframeDocument.open();
                iframeDocument.write(response);
                iframeDocument.close();
            },
            error: function (xhr, status, error) {
                console.error("Error en la solicitud AJAX:", error);
            }
        });

    }

    function obtenerValorTextoSeleccionado() {
        const valorSeleccionado = document.getElementById('paciente_seleccionado').value;
        const textoSeleccionado = document.getElementById('paciente_seleccionado').options[document.getElementById('paciente_seleccionado').selectedIndex].text;

        cambiarIframe(valorSeleccionado, textoSeleccionado);
    }

    // Agrega un evento change al select
    const selectElement = document.getElementById('paciente_seleccionado');
    selectElement.addEventListener('change', obtenerValorTextoSeleccionado);
});

