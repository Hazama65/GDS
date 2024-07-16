document.addEventListener('DOMContentLoaded', function () {

    function mostrarIdPaciente(event) {
        const listItem = event.target.closest(".patient-item");
        const id_paciente = listItem.getAttribute("data-id-paciente");

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

    function mostrarIdPaciente(event) {
        const listItem = event.target.closest(".patient-item");
        const id_paciente = listItem.getAttribute("data-id-paciente");

        // Muestra la consulta principal del paciente
        mostrarConsultaPrincipal(id_paciente);
    }

    // Agrega eventos de clic a cada elemento de la lista de pacientes
    const patientItems = document.querySelectorAll(".patient-item");
    patientItems.forEach(function (item) {
        item.addEventListener("click", mostrarIdPaciente);
    });

});
