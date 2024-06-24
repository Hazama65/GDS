$.ajax({
    url: 'php/controllers/metricas.controller.php',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        console.log(data);

        // Obtener el elemento thead y tbody
        var thead = $('#tabla-cabeceras');
        var tbody = $('#tabla-datos');

        // Limpiar cualquier contenido previo
        thead.empty();
        tbody.empty();

        // Crear la fila de encabezados de turno
        var encabezadoTurno = '<tr><th scope="col"> </th>';
        data.turno.forEach(function (turno) {
            encabezadoTurno += `<th scope="col">${turno.turno}</th>`;
        });
        encabezadoTurno += '</tr>';
        thead.append(encabezadoTurno);

        // Crear las filas de datos de servicios
        data.servicio.forEach(function (servicio) {
            var filaServicio = `<tr><th scope="row">${servicio.servicio}</th>`;
            data.turno.forEach(function (turno) {
                // Buscar el conteo de personal para este turno/servicio
                var conteo = 0;
                data.personal.forEach(function (personal) {
                    if (personal.servicio === servicio.servicio && personal.turno === turno.turno) {
                        conteo++;
                    }
                });
                // Agregar el conteo como dato en la celda correspondiente
                filaServicio += `<td>${conteo}</td>`;
            });
            filaServicio += '</tr>';
            tbody.append(filaServicio);
        });
    },
    error: function (xhr, status, error) {
        console.error("Error al obtener los datos:", status, error);
    }
});
