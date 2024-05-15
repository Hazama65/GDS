<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_AT.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT * FROM datos_paciente dp
JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
JOIN laboratorio l ON dp.id_paciente = l.id_paciente
JOIN usg_clinica uc ON dp.id_paciente = uc.id_paciente
JOIN tratamiento t ON dp.id_paciente = t.id_paciente";


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
        'CURP',
        'Nombre Completo',
        'Escolaridad',
        'Fecha de nacimiento',
        'Edad',
        'Sexo',
        'Talla',
        'Peso',
        'IMC',
        'Tabaquismo',
        'Alcoholismo',
        'Esteatosis Hepatica',
        'Diabetes Mellitus',
        'Hipertensión Arterial',
        'Obesidad',
        'Hiperlipidemia',
        'Plaquetas',
        'Factor Reumatoide Basal',
        'Factor Reumatoide Nominal',
        'PCR',
        'Vitamina D Basal',
        'Vitamina D Nominal',
        'AC Anticpp Basal',
        'AC Anticpp Nominal',
        'VSG',
        'TGO Basal',
        'TGO Nominal',
        'TGP Basal',
        'TGP Nominal',
        'Glucosa',
        'Colesterol',
        'Trigliceridos',
        'Fib 4',
        'Resultado FIB 4',
        'USG Hepático',
        'Hallazgo USG',
        'Clasificación Esteatosis',
        'Articulaciones Inflamadas SJC28',
        'Articulaciones Dolorosas TJC28',
        'Evaluación Global PGA',
        'Evaluación del Evaluador EGA',
        'Resultado CDAI',
        'Resultado SDAI',
        'Metrotexate',
        'Dosis Semanal',
        'Leflunomide',
        'Dosis Semanal',
        'Sulfazalasina',
        'Dosis Semanal',
        'Tocoferol',
        'Dosis Semanal',
        'Glucocorticoide',
        'Tratamiento',
        'Dosis Semanal',
        'Vitamina D',
        'Dosis Semanal',
        'Biológico',
        'Tratamiento',
        'Apego a Tratamiento'
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


    $sheet->getStyle('A1:BH1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos Artritis.xlsx';

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