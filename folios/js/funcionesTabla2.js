$(document).ready(function() {
    var table2 = $('#tabla2').DataTable({
        deferRender: true,
        scrollCollapse: true,
        scroller: true,
        scrollY: 600,
        dom: 'lBfrtip', // Agregar la letra 'l' para habilitar la opción de selección de registros por página
        buttons: [
            'copy', 'csv', 'excel', 'print'
        ],
        lengthMenu: [10, 20, 50, 100], // Opciones para el número de registros por página
        pageLength: 10 // Número de registros por página predeterminado
    });
    

var rowsToDelete = []; // Almacena las filas que deben eliminarse

table2.rows().every(function() {
    var data = this.data();

    const estatus = data[12];

    if (estatus == "Caducado") {
        this.nodes().to$().css("background-color", "rgb(255, 0, 0, 0.30)");
    }
    if (estatus == "Atendido") {
        this.nodes().to$().css("background-color", "rgb(255, 255, 0, 0.30)");
    }
    if (estatus == "Activo") {
        rowsToDelete.push(this.index()); // Agrega el índice de la fila actual a la lista
    }
});

// Elimina las filas que cumplan con la condición
for (var i = rowsToDelete.length - 1; i >= 0; i--) {
    table2.row(rowsToDelete[i]).remove();
}

// Vuelve a dibujar la tabla para reflejar los cambios
table2.draw();
});