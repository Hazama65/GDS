<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_EG.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT ds.id_suplencia,
    ds.fecha_tramite,
    ds.fecha_suplencia,
    ds.autoriza,
    ts.nom_sustituido,
    ts.num_empleado,
    ts.niv_academico,
    ts.turno,
    ts.servicio,
    ts.criticas,
    ts.clinicas,
    ts.quirurgicas,
    ts.perinatales,
    ts.ambulatoria,
    ts.hospitalizacion,
    ts.pediatria,
    tss.nom_sustituto,
    tss.num_empleado2,
    tss.niv_academico2,
    tss.turno2,
    tss.servicio2,
    tss.criticas2,
    tss.clinicas2,
    tss.quirurgicas2,
    tss.perinatales2,
    tss.ambulatoria2,
    tss.hospitalizacion2,
    tss.pediatria2
FROM datos_suplencia ds
JOIN trabajador_sustituido ts ON ds.id_sustituido = ts.id_sustituido
JOIN trabajador_sustituto tss ON ds.id_sustituto = tss.id_sustituto";


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
        'Fecha de Tramite',
        'Fecha de Suplencia',
        'Nombre de Quien Autoriza',
        'Trabajador Sustituido',
        'Número de Empleado',
        'Nivel Académico',
        'Turno',
        'Servicio',
        'Críticas',
        'Clínicas',
        'Quirúrgicas',
        'Perinatales',
        'Ambulatorias',
        'Hospitalización',
        'Pediatría / Neonatología',
        'Trabajador Sustituto',
        'Número de Empleado',
        'Nivel Académico',
        'Turno',
        'Servicio',
        'Críticas',
        'Clínicas',
        'Quirúrgicas',
        'Perinatales',
        'Ambulatorias',
        'Hospitalización',
        'Pediatría / Neonatología'
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
    

    $sheet->getStyle('A1:AB1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos EG.xlsx';

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