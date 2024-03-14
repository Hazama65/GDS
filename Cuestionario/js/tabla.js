$(document).ready(function() {
    $('#myTable').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontraron registros",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 a 0 de 0 registros",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
        },
        scrollX: true,
        layout: {
            topStart: {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        filename: 'Datos del Formulario', // Nombre del archivo personalizado
                    },
                    {
                        text: 'Metricas',
                        action: function () {
                            window.location.href = 'metricas.html';
                        },
                        className: 'btn-metricas'
                    }
                ]
            }
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

    cerrarSesionButton.addEventListener('click', function () {
        // Redirige al usuario a la página de cierre de sesión
        window.location.href = 'php/destroysession.php';
    });
});
