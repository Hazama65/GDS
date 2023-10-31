<?php
    // Incluir el archivo de configuración de la base de datos
    include('dbconfig.php');

    // Conectar a la base de datos
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Consulta SQL
    $query = "SELECT dp.*, am.medico, d.nombre AS diagnostico, p.nombre AS procedimiento, 
    am.proce_programado, am.infarto, ab.*, lc.*, sb.*
    FROM atencion_medica am
    JOIN datos_paciente dp ON am.id_paciente = dp.id_paciente
    JOIN diagnosticos d ON am.diagnostico = d.id_diagnostico 
    JOIN procedimientos p ON am.procedimiento = p.id_procedimiento
    JOIN abordaje ab ON am.id_paciente = ab.id_paciente
    JOIN lesion_coronaria lc ON am.id_paciente = lc.id_paciente
    JOIN sten_balon sb ON am.id_paciente = sb.id_paciente;";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si se obtuvieron resultados
    if ($result) {
        // Importar la biblioteca PhpSpreadsheet
        require '../../vendor/autoload.php';

        // Crear un nuevo objeto de hoja de cálculo
        $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Agregar los encabezados de las columnas
        $columns = array(
            'Id',
            'Fecha Registro',
            'Nombre',
            'Edad',
            'Sexo',
            'Diabetico',
            'Hipertension',
            'Medico',
            'Diagnostico',
            'Procedimiento',
            'Procedimiento programado',
            'Infarto',
            'Braquial',
            'Lateralidad',
            'Cubital',
            'Lateralidad',	
            'Deltopectoral',
            'Lateralidad',
            'Femoral',
            'Lateralidad',
            'Radial',
            'Lateralidad',
            'Subclavio',
            'Lateralidad',
            'Transradial Distal',
            'Lateralidad',
            'Destino',
            'Bifurcación',
            'Cincunfleja',
            'Coronario Derecha',
            'Descendente Anterior',	
            'Ramo Intermedio',
            'Tronco Coronario Izquierdo',
            'Stent',
            'Número',
            'Medidas',
            'Balón',
            'Número',
            'Medidas'
        );
            
        $sheet->fromArray([$columns], null, 'A1');

        // Agregar los datos desde la base de datos
        $row = 2;
        while ($fila = mysqli_fetch_assoc($result)) {
            $sheet->fromArray([$fila], null, 'A' . $row);
            $row++;
        }

        // Crear un objeto Writer para guardar el archivo Excel
        $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        // Definir la ubicación del archivo Excel
        $excel_file = 'Datos Hemodinamia.xlsx';

        // Guardar el archivo Excel
        $writer->save($excel_file);

        // Descargar el archivo Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $excel_file . '"');
        header('Cache-Control: max-age=0');

        $file_path = realpath($excel_file);
        readfile($file_path);
        unlink($file_path); // Eliminar el archivo temporal

        exit();
    } else {
        echo "Error al ejecutar la consulta SQL: " . mysqli_error($conn);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
?>
