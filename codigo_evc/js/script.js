document.addEventListener("DOMContentLoaded", function () {
    const patientList = document.getElementById("patient-list");
    const searchInput = document.getElementById("search");

    // Escucha el evento de entrada en el campo de búsqueda
    searchInput.addEventListener("input", () => {
        const searchText = searchInput.value.toLowerCase();
        const patientItems = patientList.querySelectorAll("li");

        // Itera sobre los elementos de la lista de pacientes
        patientItems.forEach((item) => {
            const patientName = item.textContent.toLowerCase();
            if (patientName.includes(searchText)) {
                // Si el nombre del paciente coincide con la búsqueda, muestra el elemento
                item.style.display = "block";
            } else {
                // Si no coincide, oculta el elemento
                item.style.display = "none";
            }
        });
    });

    // Agrega eventos click a los botones "ver" y "editar"
    patientList.addEventListener("click", (event) => {
        const target = event.target;
        if (target.classList.contains("view-button")) {
            // Lógica para la acción "ver" aquí
            const patientItem = target.parentElement;
            const patientName = patientItem.textContent.trim().split(" ")[0];
            alert(`Ver detalles de ${patientName}`);
        } else if (target.classList.contains("edit-button")) {
            // Lógica para la acción "editar" aquí
            const patientItem = target.parentElement;
            const patientName = patientItem.textContent.trim().split(" ")[0];
            alert(`Editar información de ${patientName}`);
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const selects = document.querySelectorAll('.patient-action-select');

    selects.forEach(select => {
        select.addEventListener('change', function () {
            const idPaciente = this.getAttribute('data-id-paciente');
            const action = this.value;

            switch (action) {
                case 'editar':
                    window.location.href = 'editar_evc.php?id=' + idPaciente;
                    break;
                case 'seguimiento_r':
                    window.location.href = 'seguimiento_rehabilitacion.php?id=' + idPaciente;
                    break;

                case 'seguimiento_n':
                    window.location.href = 'seguimiento_neurologia.php?id=' + idPaciente;
                    break;
                default:
                    break;
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

    cerrarSesionButton.addEventListener('click', function () {
        // Redirige al usuario a la página de cierre de sesión
        window.location.href = 'php/destroysession.php';
    });
});
