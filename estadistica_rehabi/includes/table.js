$.ajax({
    url: 'includes/tables.php', // Cambia esto a la ruta de tu script PHP que devuelve los datos
    type: 'GET',
    dataType: 'json',
    success: function (data) {


        let total_terapia_fisica = 0;
        let total_terapia_ocupacional = 0;
        let total_terapia_lenguaje = 0;
        let total_aplicacion_ferula = 0;
        let total_Aplicacion_vendaje_enyesado = 0;
        let total_Baño_parafina = 0;
        let total_CHC_CF = 0;
        let total_Corrientes_interfereciales = 0;
        let total_Electroestimulacion = 0;
        let total_Ejercicio_Asistido = 0;
        let total_Ejercicio_Fisioterapia = 0;
        let total_Hidroterapia_TanqueTerapéutico = 0;
        let total_Hidroterapia_Tina_Habbard = 0;
        let total_Hidroterapia_Tina_Remolinos = 0;
        let total_TENS = 0;
        let total_TerapiacombinadaUSG_CorrienteEléctrica = 0;
        let total_Ultrasonido_Terapeutico = 0;
        let total_TraccionCervical_Lumbar = 0;
        let total_Rehabi_cardiaca = 0;
        let total_Ejercicios_respiratorio = 0;
        let total_Terapia_Laser = 0;
        let total_Toxina_Botulinica = 0;



        data.forEach(function (item) {


            let terapia_fisica = Number(item.total_terapia_fisica);
            let terapia_ocupacional = Number(item.total_terapia_ocupacional);
            let terapia_lenguaje = Number(item.total_terapia_lenguaje);
            let aplicacion_ferula = Number(item.total_aplicacion_ferula);
            let Aplicacion_vendaje_enyesado = Number(item.total_Aplicacion_vendaje_enyesado);
            let Baño_parafina = Number(item.total_Baño_parafina);
            let CHC_CF = Number(item.total_CHC_CF);
            let Corrientes_interfereciales = Number(item.total_Corrientes_interfereciales);
            let Electroestimulacion = Number(item.total_Electroestimulacion);
            let Ejercicio_Asistido = Number(item.total_Ejercicio_Asistido);
            let Ejercicio_Fisioterapia = Number(item.total_Ejercicio_Fisioterapia);
            let Hidroterapia_TanqueTerapéutico = Number(item.total_Hidroterapia_TanqueTerapéutico);
            let Hidroterapia_Tina_Habbard = Number(item.total_Hidroterapia_Tina_Habbard);
            let Hidroterapia_Tina_Remolinos = Number(item.total_Hidroterapia_Tina_Remolinos);
            let TENS = Number(item.total_TENS);
            let TerapiacombinadaUSG_CorrienteEléctrica = Number(item.total_TerapiacombinadaUSG_CorrienteEléctrica);
            let Ultrasonido_Terapeutico = Number(item.total_Ultrasonido_Terapeutico);
            let TraccionCervical_Lumbar = Number(item.total_TraccionCervical_Lumbar);
            let Rehabi_cardiaca = Number(item.total_Rehabi_cardiaca);
            let Ejercicios_respiratorio = Number(item.total_Ejercicios_respiratorio);
            let Terapia_Laser = Number(item.total_Terapia_Laser);
            let Toxina_Botulinica = Number(item.total_Toxina_Botulinica);

            let total_especializado = terapia_ocupacional + terapia_lenguaje + Baño_parafina + CHC_CF + Corrientes_interfereciales + Electroestimulacion + Hidroterapia_TanqueTerapéutico + Hidroterapia_Tina_Habbard + Hidroterapia_Tina_Remolinos + TENS + TerapiacombinadaUSG_CorrienteEléctrica + Ultrasonido_Terapeutico + TraccionCervical_Lumbar + Rehabi_cardiaca + Ejercicios_respiratorio + Terapia_Laser + Toxina_Botulinica


            total_terapia_fisica =+ terapia_fisica;
            total_terapia_ocupacional =+ terapia_ocupacional;
            total_terapia_lenguaje =+ terapia_lenguaje;
            total_aplicacion_ferula =+ aplicacion_ferula;
            total_Aplicacion_vendaje_enyesado =+ Aplicacion_vendaje_enyesado;
            total_Baño_parafina =+ Baño_parafina;
            total_CHC_CF =+ CHC_CF;
            total_Corrientes_interfereciales =+ Corrientes_interfereciales;
            total_Electroestimulacion =+ Electroestimulacion;
            total_Ejercicio_Asistido =+ Ejercicio_Asistido;
            total_Ejercicio_Fisioterapia =+ Ejercicio_Fisioterapia;
            total_Hidroterapia_TanqueTerapéutico =+ Hidroterapia_TanqueTerapéutico;
            total_Hidroterapia_Tina_Habbard =+ Hidroterapia_Tina_Habbard;
            total_Hidroterapia_Tina_Remolinos =+ Hidroterapia_Tina_Remolinos;
            total_TENS =+ TENS;
            total_TerapiacombinadaUSG_CorrienteEléctrica =+ TerapiacombinadaUSG_CorrienteEléctrica;
            total_Ultrasonido_Terapeutico =+ Ultrasonido_Terapeutico;
            total_TraccionCervical_Lumbar =+ TraccionCervical_Lumbar;
            total_Rehabi_cardiaca =+ Rehabi_cardiaca;
            total_Ejercicios_respiratorio =+ Ejercicios_respiratorio;
            total_Terapia_Laser =+ Terapia_Laser;
            total_Toxina_Botulinica =+ Toxina_Botulinica;










            tbody += `
                <tr>
                    <td>${row.mes}</td>
                    <td>${row.total_terapia_fisica}</td>
                    <td>${row.total_terapia_ocupacional}</td>
                    <td>${row.total_terapia_lenguaje}</td>
                    <td>${row.total_aplicacion_ferula}</td>
                    <td>${row.total_Aplicacion_vendaje_enyesado}</td>
                    <td>${row.total_Baño_parafina}</td>
                    <td>${row.total_CHC_CF}</td>
                    <td>${row.total_Corrientes_interfereciales}</td>
                    <td>${row.total_Electroestimulacion}</td>
                    <td>${row.total_Ejercicio_Asistido}</td>
                    <td>${row.total_Ejercicio_Fisioterapia}</td>
                    <td>${row.total_Hidroterapia_TanqueTerapéutico}</td>
                    <td>${row.total_Hidroterapia_Tina_Habbard}</td>
                    <td>${row.total_Hidroterapia_Tina_Remolinos}</td>
                    <td>${row.total_TENS}</td>
                    <td>${row.total_TerapiacombinadaUSG_CorrienteEléctrica}</td>
                    <td>${row.total_Ultrasonido_Terapeutico}</td>
                    <td>${row.total_TraccionCervical_Lumbar}</td>
                    <td>${row.total_Rehabi_cardiaca}</td>
                    <td>${row.total_Ejercicios_respiratorio}</td>
                    <td>${row.total_Terapia_Laser}</td>
                    <td>${row.total_Toxina_Botulinica}</td>
                </tr>
            `;
        });
        $('#tablaEnfermeros tbody').html(tbody);



        let tbody = $('#tabla-recuento');
        tbody.empty(); // Vaciar la tabla antes de llenarla con nuevos datos

        // variables para almacenar los totales por columna
        let totalLunes = 0;
        let totalMartes = 0;
        let totalMiercoles = 0;
        let totalJueves = 0;
        let totalViernes = 0;
        let totalSabado = 0;
        let totalDomingo = 0;

        response.conteo_turnos.forEach(function (item) {
            // Convertir los valores a números
            let lunes = Number(item.total_lunes);
            let martes = Number(item.total_martes);
            let miercoles = Number(item.total_miercoles);
            let jueves = Number(item.total_jueves);
            let viernes = Number(item.total_viernes);
            let sabado = Number(item.total_sabado);
            let domingo = Number(item.total_domingo);

            // Calcular el total por fila (turno)
            let totalTurno = lunes + martes + miercoles + jueves + viernes + sabado + domingo;

            // Agregar los valores a los totales por columna
            totalLunes += lunes;
            totalMartes += martes;
            totalMiercoles += miercoles;
            totalJueves += jueves;
            totalViernes += viernes;
            totalSabado += sabado;
            totalDomingo += domingo;

            // Crear una fila para la tabla
            let row = '<tr>' +
                '<td>' + item.turno + '</td>' +
                '<td>' + lunes + '</td>' +
                '<td>' + martes + '</td>' +
                '<td>' + miercoles + '</td>' +
                '<td>' + jueves + '</td>' +
                '<td>' + viernes + '</td>' +
                '<td>' + sabado + '</td>' +
                '<td>' + domingo + '</td>' +
                '<td>' + totalTurno + '</td>' +
                '</tr>';
            tbody.append(row);
        });

        // Calcular el total general (sumando los totales de los días)
        let totalGeneral = totalLunes + totalMartes + totalMiercoles + totalJueves + totalViernes + totalSabado + totalDomingo;

        // Mostrar los totales por columna en el pie de la tabla
        $('#total_lunes').text(totalLunes);
        $('#total_martes').text(totalMartes);
        $('#total_miercoles').text(totalMiercoles);
        $('#total_jueves').text(totalJueves);
        $('#total_viernes').text(totalViernes);
        $('#total_sabado').text(totalSabado);
        $('#total_domingo').text(totalDomingo);
        $('#total_general').text(totalGeneral);
    },
    error: function (xhr, status, error) {
        console.error("Error al obtener los datos:", status, error);
    }
});
