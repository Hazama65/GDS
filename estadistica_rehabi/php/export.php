<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_ER.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT * FROM datos_paciente dp
JOIN procedimientos pro ON dp.id_paciente = pro.id_paciente";


// Ejecutar la consulta
$result = mysqli_query($conn, $query_pacientes);


// Verificar si se obtuvieron resultados
if ($result) {
    // Importar la biblioteca PhpSpreadsheet
    require '../../vendor/autoload.php';

    // Crear un nuevo objeto de hoja de cálculo
    $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Agregar los encabezados de las columnas
    $columns = array(
        'ID',
        'Nombre Terapeuta',
        'Turno',
        'Nombre del Paciente',
        'CURP',
        'Fecha de Nacimiento',
        'Edad',
        'Sexo',
        'Tipo de Paciente',
        'Reporte de',
        'Reporte hasta',
        'Número de Terapias fisicas',
        'Primera Vez (TF)',
        'Subsecuente (TF)',
        'Terapias ambulatorias (TF)',
        'Terapias en Hospitalización (TF)',
        'Número de Terapia ocupacional',
        'Primera Vez (TO)',
        'Subsecuente (TO)',
        'Terapias ambulatorias (TO)',
        'Terapias en Hospitalización (TO)',
        'Número de Terapia de lenguaje',
        'Primera Vez (TL)',
        'Subsecuente (TL)',
        'Terapias ambulatorias (TL)',
        'Terapias en Hospitalización (TL)',
        'Número de Aplicación de férula',
        'Número de Aplicación de vendaje enyesado',
        'Número de Baño de parafina',
        'Número de CHC/CF',
        'Número de Corrientes interfereciales',
        'Número de Electroestimulación',
        'Número de Ejercicio Asistido',
        'Número de Ejercicio de Fisioterapia',
        'Número de Hidroterapia/Tanque Terapéutico',
        'Número de Hidroterapia/Tina de Habbard',
        'Número de Hidroterapia/Tina de Remolinos',
        'Número de TENS',
        'Número de Terapia combinada USG y Corriente Eléctrica',
        'Número de Ultrasonido Terapéutico',
        'Número de Tracción Cervical y Lumbar',
        'Número de Rehabilitacion Cardíaca',
        'Número de Ejercicio respiratorio (R. Pulmonar)',
        'Número de Terapia Laser',
        'Número de Toxina Botulinica'
    );

    $sheet->fromArray([$columns], null, 'A1');

    // Ajustar el tamaño de las columnas automáticamente
    foreach ($sheet->getColumnIterator() as $column) {
        $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
    }

    // Establecer estilos para los encabezados
    $styleArray = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => 'ffffff'],
            'size' => 10,
            'name' => 'Avenir Next LT Pro'
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => '20485f']
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => ['rgb' => '000000'],
            ],
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            'wrapText' => true
        ]
    ];


    $sheet->getStyle('A1:AS1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos Rehabilitacion.xlsx';

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