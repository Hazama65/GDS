// Función para mostrar la tabla del paciente seleccionado
function mostrarTablaSeguimiento(event) {
    const listItem = event.target.closest(".patient-item");
    const id_paciente = listItem.getAttribute("data-id-paciente");


    console.log(id_paciente);
    
    // Realiza una solicitud AJAX para obtener el HTML de la tabla de seguimiento
    $.ajax({
        type: "GET",
        url: "consulta.php",
        data: { idPaciente: id_paciente },
        success: function(response) {
            // Actualiza el contenido del div con el HTML recibido
            document.getElementById("tabla-seguimiento").innerHTML = response;
        },
        error: function(xhr, status, error) {
            console.error("Error en la solicitud AJAX:", error);
        }
    });


}

// Agrega eventos de clic a cada elemento de la lista
const patientItems = document.querySelectorAll(".patient-item");
patientItems.forEach(function(item) {
    item.addEventListener("click", mostrarTablaSeguimiento);
});
