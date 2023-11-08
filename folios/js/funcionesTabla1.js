$(document).ready(function() {
    var table = $('#miTabla').DataTable({
        deferRender: true,
        scrollCollapse: true,
        scroller: true,
        scrollY: 600,
        dom: 'lBfrtip',
        buttons: ['excel'],
        lengthMenu: [10, 20, 50, 100],
        pageLength: 10
    });

    // Evento click para los botones en la columna "Acción"
    $('#miTabla tbody').on('click', 'button', function () {
        var row = $(this).closest('tr');
        var id = row.data('id');

        // Realiza la solicitud AJAX para eliminar la fila en el servidor
        $.ajax({
            type: 'POST',
            url: 'php/controllers/delete.controller.php',
            data: { id: id },
            success: function(response) {
                // Eliminar la fila de la tabla cuando se elimina con éxito en el servidor
                table.row(row).remove().draw(false);
                setAlerts.successAlert('Paciente Atendido', 'Exitoso', null, 'index.php');
            },
            error: function() {
                console.log('Error al eliminar la fila');
            }
        });
    });

    // Crear un array para almacenar las filas que deben eliminarse
    var rowsToDelete = [];

    table.rows().every(function() {
        var data = this.data();
        const estatus = data[12];
        const dateString = data[10];
        const fechaIndicada = new Date(dateString);
        const fechaActual = new Date();
        const diferenciaMilisegundos = fechaActual - fechaIndicada;
        const diferenciaDias = diferenciaMilisegundos / (1000 * 60 * 60 * 24);

        // Verifica si la diferencia de días es mayor que 2
        if (diferenciaDias > 3) {
            if (estatus === "Activo") {
                var id = this.node().getAttribute('data-id');
                $.ajax({
                    type: 'POST',
                    url: 'php/controllers/update.controller.php',
                    data: { id: id },
                    success: function(response) {
                    },
                    error: function() {
                        console.log('Error al realizar la consulta');
                    }
                });
            }
        }

        if (diferenciaDias < 3) {
            this.nodes().to$().css("background-color", "rgb(143, 188, 143, 0.30)");
        }

        if (estatus == "Caducado" || estatus == "Atendido") {
            // Agrega la fila a la lista de filas para eliminar
            rowsToDelete.push(this.index());
        }
    });

    // Elimina las filas que cumplen con las condiciones
    table.rows(rowsToDelete).remove().draw(false);
});
