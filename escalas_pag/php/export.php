<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT *
    FROM datos_paciente ds
    JOIN escalas ts ON ds.id_paciente = ts.id_paciente";

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
        'Nombre del Paciente',
        'CURP',
        'Fecha de Nacimiento',
        'Edad',
        'Sexo',
        'NIHSS',
        'NIHSS-Valor',
        'Barthel',
        'Barthel-Valor',
        'Escala FIM',
        'Escala FIM-Valor',
        'Rankin',
        'Rankin-Valor',
        'Motricity Index',
        'Marcha FAC',
        'Marcha FAC-Valor'
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


    $sheet->getStyle('A1:Q1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos CL.xlsx';

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