$.ajax({
    url: 'php/controllers/consulta_tabla.controller.php',
    type: 'GET',
    dataType: 'json',
    success: function (data) {

        const registrosPorPagina = 10; // Número de registros por página
        let paginaActual = 1; // Página actual inicialmente

        // Función para mostrar la tabla con paginación
        function mostrarTablaEnfermeros(datos, pagina) {
            let html = "";
            const inicio = (pagina - 1) * registrosPorPagina;
            const fin = inicio + registrosPorPagina;
            const datosPagina = datos.slice(inicio, fin);

            datosPagina.forEach(enfermero => {
                html += `
                    <tr>
                        <td><img src="${enfermero.foto || ''}" class="imagen-enfermero"></td>
                        <td>${enfermero.noempleado || ''}</td>
                        <td>${enfermero.apellidoPaterno || ''}</td>
                        <td>${enfermero.apellidoMaterno || ''}</td>
                        <td>${enfermero.nombre || ''}</td>    
                        <td>${enfermero.codigo || ''}</td>
                        <td><a href="ver_personal.php?id=${enfermero.id_enfermero || ''}">Ver</a></td>
                        <td><a href="editar.php?id=${enfermero.id_enfermero || ''}">Editar</a></td>
                    </tr>
                `;
            });

            $("#tablaEnfermeros").html(html);
        }

        // Función para mostrar el paginador
        function mostrarPaginador(totalRegistros) {
            const numeroPaginas = Math.ceil(totalRegistros / registrosPorPagina);
            let html = "";

            for (let i = 1; i <= numeroPaginas; i++) {
                html += `<li class="page-item"><a href="#" class="page-link pagina">${i}</a></li>`;
            }

            $("#paginador").html(html);
        }

        // Mostrar la tabla con todos los enfermeros al cargar la página
        mostrarTablaEnfermeros(data, paginaActual);
        mostrarPaginador(data.length);

        // Función para cambiar de página
        $(document).on("click", ".pagina", function (event) {
            event.preventDefault();
            paginaActual = parseInt($(this).text());
            mostrarTablaEnfermeros(data, paginaActual);
        });

        // Función para filtrar los enfermeros en tiempo real
        $("#buscador").on("input", function () {
            const valorBusqueda = $(this).val().toLowerCase();
            const resultados = data.filter(enfermero => 
                (enfermero.noempleado && enfermero.noempleado.toString().toLowerCase().includes(valorBusqueda)) ||
                (enfermero.apellidoPaterno && enfermero.apellidoPaterno.toLowerCase().includes(valorBusqueda)) ||
                (enfermero.apellidoMaterno && enfermero.apellidoMaterno.toLowerCase().includes(valorBusqueda)) ||
                (enfermero.nombre && enfermero.nombre.toLowerCase().includes(valorBusqueda)) ||
                (enfermero.codigo && enfermero.codigo.toLowerCase().includes(valorBusqueda))
            );

            mostrarTablaEnfermeros(resultados, 1); // Mostrar resultados desde la primera página
            mostrarPaginador(resultados.length); // Actualizar paginador con los nuevos resultados
        });
    },
    error: function (xhr, status, error) {
        console.error("Error al obtener los datos:", status, error);
    }
});
