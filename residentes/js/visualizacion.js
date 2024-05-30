// Función para mostrar la tabla del paciente seleccionado
function mostrarTablaSeguimiento(event) {
    const listItem = event.target.closest(".patient-item");
    const id_residente = listItem.getAttribute("data-id-paciente");

    document.getElementById('borrar_paciente').setAttribute("data-id-paciente", id_residente);

    
    // Realiza una solicitud AJAX para obtener el HTML de la tabla de seguimiento
    $.ajax({
        type: "GET",
        url: "consulta.php",
        data: { idResidente: id_residente },
        success: function(response) {
            // Actualiza el contenido del div con el HTML recibido
            document.getElementById("tabla-seguimiento").innerHTML = response;
        },
        error: function(xhr, status, error) {
            console.error("Error en la solicitud AJAX:", error);
        }
    });

    $('#borrar_paciente').show();


}

// Agrega eventos de clic a cada elemento de la lista
const patientItems = document.querySelectorAll(".patient-item");
patientItems.forEach(function(item) {
    item.addEventListener("click", mostrarTablaSeguimiento);
});