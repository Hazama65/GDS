document.addEventListener('DOMContentLoaded', function () {

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
                    option.nuevaPropiedad = 'valor de la nueva propiedad';
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

    function mostrarConsultaPrincipal(idPaciente) {
        // Realiza una solicitud AJAX para obtener la consulta principal del paciente
        $.ajax({
            type: "GET",
            url: "consulta.php", // Cambia la URL según tu configuración
            data: { idPaciente: idPaciente },
            success: function (response) {
                // Actualiza el contenido del div con la consulta principal
                document.getElementById("tabla-seguimiento").innerHTML = response;
            },
            error: function (xhr, status, error) {
                console.error("Error en la solicitud AJAX:", error);
            }
        });
    }

    function mostrarSeguimiento(valorSeleccionado, textoSeleccionado) {
        // Realiza una solicitud AJAX para obtener el seguimiento seleccionado

        
        $.ajax({
            type: "GET",
            url: "consulta_seguimiento.php", // Cambia la URL según tu configuración
            data: {
                valorSeleccionado: valorSeleccionado,
                textoSeleccionado: textoSeleccionado
            },
            success: function (response) {
                // Actualiza el contenido del div con el seguimiento seleccionado
                document.getElementById("tabla-seguimiento").innerHTML = response;
            },
            error: function (xhr, status, error) {
                console.error("Error en la solicitud AJAX:", error);
            }
        });
    }

    function mostrarIdPaciente(event) {
        const listItem = event.target.closest(".patient-item");
        const id_paciente = listItem.getAttribute("data-id-paciente");

        // Muestra la consulta principal del paciente
        mostrarConsultaPrincipal(id_paciente);
    }

    function obtenerValorTextoSeleccionado() {
        const valorSeleccionado = document.getElementById('paciente_seleccionado').value;
        const textoSeleccionado = document.getElementById('paciente_seleccionado').options[document.getElementById('paciente_seleccionado').selectedIndex].text;

        // Muestra el seguimiento seleccionado
        mostrarSeguimiento(valorSeleccionado, textoSeleccionado);
    }

    // Agrega eventos de clic a cada elemento de la lista de pacientes
    const patientItems = document.querySelectorAll(".patient-item");
    patientItems.forEach(function (item) {
        item.addEventListener("click", mostrarIdPaciente);
    });

    // Agrega un evento change al select de seguimientos
    const selectElement = document.getElementById('paciente_seleccionado');
    selectElement.addEventListener('change', obtenerValorTextoSeleccionado);

});
