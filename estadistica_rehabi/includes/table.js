$.ajax({
    url: 'includes/tables.php', // Cambia esto a la ruta de tu script PHP que devuelve los datos
    type: 'GET',
    dataType: 'json',
    success: function (data) {

        let tbody = $('#tabla-datos');
        tbody.empty(); // Vaciar la tabla antes de llenarla con nuevos datos

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


            total_terapia_fisica = + terapia_fisica;
            total_terapia_ocupacional = + terapia_ocupacional;
            total_terapia_lenguaje = + terapia_lenguaje;
            total_aplicacion_ferula = + aplicacion_ferula;
            total_Aplicacion_vendaje_enyesado = + Aplicacion_vendaje_enyesado;
            total_Baño_parafina = + Baño_parafina;
            total_CHC_CF = + CHC_CF;
            total_Corrientes_interfereciales = + Corrientes_interfereciales;
            total_Electroestimulacion = + Electroestimulacion;
            total_Ejercicio_Asistido = + Ejercicio_Asistido;
            total_Ejercicio_Fisioterapia = + Ejercicio_Fisioterapia;
            total_Hidroterapia_TanqueTerapéutico = + Hidroterapia_TanqueTerapéutico;
            total_Hidroterapia_Tina_Habbard = + Hidroterapia_Tina_Habbard;
            total_Hidroterapia_Tina_Remolinos = + Hidroterapia_Tina_Remolinos;
            total_TENS = + TENS;
            total_TerapiacombinadaUSG_CorrienteEléctrica = + TerapiacombinadaUSG_CorrienteEléctrica;
            total_Ultrasonido_Terapeutico = + Ultrasonido_Terapeutico;
            total_TraccionCervical_Lumbar = + TraccionCervical_Lumbar;
            total_Rehabi_cardiaca = + Rehabi_cardiaca;
            total_Ejercicios_respiratorio = + Ejercicios_respiratorio;
            total_Terapia_Laser = + Terapia_Laser;
            total_Toxina_Botulinica = + Toxina_Botulinica;

            let row = '<tr>' +
                '<td>' + item.año + '</td>' +
                '<td>' + item.mes + '</td>' +
                '<td>' + terapia_fisica + '</td>' +
                '<td>' + terapia_ocupacional + '</td>' +
                '<td>' + terapia_lenguaje + '</td>' +
                '<td>' + aplicacion_ferula + '</td>' +
                '<td>' + Aplicacion_vendaje_enyesado + '</td>' +
                '<td>' + Baño_parafina + '</td>' +
                '<td>' + CHC_CF + '</td>' +
                '<td>' + Corrientes_interfereciales + '</td>' +
                '<td>' + Electroestimulacion + '</td>' +
                '<td>' + Ejercicio_Asistido + '</td>' +
                '<td>' + Ejercicio_Fisioterapia + '</td>' +
                '<td>' + Hidroterapia_TanqueTerapéutico + '</td>' +
                '<td>' + Hidroterapia_Tina_Habbard + '</td>' +
                '<td>' + Hidroterapia_Tina_Remolinos + '</td>' +
                '<td>' + TENS + '</td>' +
                '<td>' + TerapiacombinadaUSG_CorrienteEléctrica + '</td>' +
                '<td>' + Ultrasonido_Terapeutico + '</td>' +
                '<td>' + TraccionCervical_Lumbar + '</td>' +
                '<td>' + Rehabi_cardiaca + '</td>' +
                '<td>' + Ejercicios_respiratorio + '</td>' +
                '<td>' + Terapia_Laser + '</td>' +
                '<td>' + Toxina_Botulinica + '</td>' +
                '<td>' + total_especializado + '</td>' +
                '</tr>';

            tbody.append(row);

        });
        let totalGeneral = total_terapia_ocupacional + total_terapia_lenguaje + total_Baño_parafina + total_CHC_CF + total_Corrientes_interfereciales + total_Electroestimulacion + total_Hidroterapia_TanqueTerapéutico + total_Hidroterapia_Tina_Habbard + total_Hidroterapia_Tina_Remolinos + total_TENS + total_TerapiacombinadaUSG_CorrienteEléctrica + total_Ultrasonido_Terapeutico + total_TraccionCervical_Lumbar + total_Rehabi_cardiaca + total_Ejercicios_respiratorio + total_Terapia_Laser + total_Toxina_Botulinica


        // Mostrar los totales por columna en el pie de la tabla
        $('#total_terapia_fisica').text(total_terapia_fisica);
        $('#total_terapia_ocupacional').text(total_terapia_ocupacional);
        $('#total_terapia_lenguaje').text(total_terapia_lenguaje);
        $('#total_aplicacion_ferula').text(total_aplicacion_ferula);
        $('#total_Aplicacion_vendaje_enyesado').text(total_Aplicacion_vendaje_enyesado);
        $('#total_Baño_parafina').text(total_Baño_parafina);
        $('#total_CHC_CF').text(total_CHC_CF);
        $('#total_Corrientes_interfereciales').text(total_Corrientes_interfereciales);
        $('#total_Electroestimulacion').text(total_Electroestimulacion);
        $('#total_Ejercicio_Asistido').text(total_Ejercicio_Asistido);
        $('#total_Ejercicio_Fisioterapia').text(total_Ejercicio_Fisioterapia);
        $('#total_Hidroterapia_TanqueTerapéutico').text(total_Hidroterapia_TanqueTerapéutico);
        $('#total_Hidroterapia_Tina_Habbard').text(total_Hidroterapia_Tina_Habbard);
        $('#total_Hidroterapia_Tina_Remolinos').text(total_Hidroterapia_Tina_Remolinos);
        $('#total_TENS').text(total_TENS);
        $('#total_TerapiacombinadaUSG_CorrienteEléctrica').text(total_TerapiacombinadaUSG_CorrienteEléctrica);
        $('#total_Ultrasonido_Terapeutico').text(total_Ultrasonido_Terapeutico);
        $('#total_TraccionCervical_Lumbar').text(total_TraccionCervical_Lumbar);
        $('#total_Rehabi_cardiaca').text(total_Rehabi_cardiaca);
        $('#total_Ejercicios_respiratorio').text(total_Ejercicios_respiratorio);
        $('#total_Terapia_Laser').text(total_Terapia_Laser);
        $('#total_Toxina_Botulinica').text(total_Toxina_Botulinica);
        $('#totalGeneral').text(totalGeneral);


    },
    error: function (xhr, status, error) {
        console.error("Error al obtener los datos:", status, error);
    }
});

const exportToExcel = (tableId,Texto) => {
    // Obtener la tabla DOM
    let tabla = document.getElementById(tableId);

    // Crear un nuevo libro de Excel
    let workbook = XLSX.utils.book_new();

    // Convertir la tabla a una hoja de Excel
    let ws = XLSX.utils.table_to_sheet(tabla);

    // Agregar la hoja al libro
    XLSX.utils.book_append_sheet(workbook, ws, "Datos");

    // Generar el archivo Excel y guardarlo
    let date = new Date();
    let filename = `Resumen ${Texto} ` + date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + ".xlsx";
    XLSX.writeFile(workbook, filename);
}