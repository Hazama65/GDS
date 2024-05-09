<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_evc.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT dp.*,f.*,n.*,fr.*,evc.*,p.*,r.*,e.*,s.*
FROM datos_paciente dp
LEFT JOIN fast f ON dp.id_paciente = f.id_paciente   
LEFT JOIN nihss n ON dp.id_paciente = n.id_paciente
LEFT JOIN factor_riesgo fr ON dp.id_paciente = fr.id_paciente
LEFT JOIN codigo_evc evc ON dp.id_paciente = evc.id_paciente
LEFT JOIN puertas p ON dp.id_paciente = p.id_paciente
LEFT JOIN rehabilitacion r ON dp.id_paciente = r.id_paciente
LEFT JOIN escalas e ON dp.id_paciente = e.id_paciente
LEFT JOIN secuelas s ON dp.id_paciente = s.id_paciente;";

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
        'Nombre Completo',
        'CURP',
        'Fecha Nacimiento',
        'Sexo',
        'Edad de Ingreso',
        'Fecha de Sintomas',
        'Inicio de Sintomas',
        'FACE',
        'ARMS',
        'SPEECH',
        'TIME',
        'Escala NIHSS',
        'Trombolisis',
        'r-TPA',
        'Sangrado',
        'Nivel',
        'Enfermedad Vascular Cerebral',
        'Hipertensión',
        'Diabetes',
        'Tabaquismo',
        'Covid',
        'Hiperlipidemia',
        'Apnea  de Sueño',
        'Enfermedad Cardiovascular',
        'Se Activa Código EVC',
        'Defunción',
        'Área',
        'Personal Médico Adscrito Urgencias',
        'Personal de Admisión Hospitalaria',
        'Personal de Enfermería',
        'Personal de Imagenología',
        'Personal de Laboratorio',
        'Personal de CISFA',
        'Trabajo Social',
        'Camillero',
        'Médico neurólogo',
        'Hora de llegada Urgencias',
        'Hora de Atención TRIAGE',
        'Puerta-TRIAGE',
        'Hora de Atención CHOQUE',
        'Puerta-URGENCIAS',
        'Hora de Realización TAC',
        'Puerta-TAC',
        'Hora de Atención Equipo Multidisciplinario',
        'Puerta-MÉDICOS',
        'Hora de Inicio de Trombolisis',
        'Puerta-AGUJA',
        'Hora de Inicio a Terapia',
        'Terapia Intensiva',
        'Hora de TAC-Control',
        'TAC-Control',
        'Val. Inicial de Rehabilitación',
        'Val. Rehabilitación Hospitalaria',
        'Dependencia Funcional',
        'Dependencia Funcional-Nivel',
        'FIM Inicial',
        'Barthel Inicial',
        'RANKIN',
        'Deglución',
        'Lenguaje',
        'Motor',
        'Extremidad Superior',
        'Extremidad Inferior',
        'Dolor',
        'Tipo-Neuropático',
        'Cognitivo',
        'Interconsulta',
        'Neuropsicología',
        'Marcha',
        'Equilibrio'


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
    $excel_file = 'Datos EVC.xlsx';

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
