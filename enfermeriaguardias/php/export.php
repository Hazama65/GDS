<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_EG.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT 
    ds.id_suplencia,
    us.num_suplencia,
    us.fecha_realizada,
    ts.numeroempleado_1,
    ts.enlace_numeroempleado,
    ts.niv_academico,
    ts.codigopuesto,
    ts.puesto,
    ts.turno,
    ts.dias_h,
    ts.horaInicio,
    ts.horaFin,
    ts.servicio,
    ts.criticas,
    ts.clinicas,
    ts.quirurgicas,
    ts.perinatales,
    ts.ambulatoria,
    ts.hospitalizacion,
    ts.pediatria,
    tss.numeroempleado_suplencia,
    tss.nombre_suplencia,
    tss.niv_academico2,
    tss.codigopuesto_suplencia,
    tss.puesto_suplencia,
    tss.turno2,
    tss.dias_h2,
    tss.horaInicio2,
    tss.horaFin2,
    tss.servicio2,
    tss.criticas2,
    tss.clinicas2,
    tss.quirurgicas2,
    tss.perinatales2,
    tss.ambulatoria2,
    tss.hospitalizacion2,
    tss.pediatria2,
    ds.fecha_tramite,
    ds.fecha_suplencia,
    ds.autoriza,
    ds.observaciones
    FROM datos_suplencia ds
    JOIN trabajador_sustituido ts ON ds.id_sustituido = ts.id_sustituido
    JOIN trabajador_sustituto tss ON ds.id_sustituto = tss.id_sustituto
    JOIN uso_suplencias us ON ds.id_suplencia = us.id_suplencia";


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
    $columns1 = array(
        'ID',
        'No. Suplencia',
        'Fecha Solicitud',
        'No. Empleado',
        'Nombre',
        'Nivel Académico',
        'Código de Puesto',
        'Puesto',
        'Turno',
        'Días Hábiles',
        'Horario inicio',
        'Horario fin',
        'Servicio',
        'Críticas',
        'Clínicas',
        'Quirúrgicas',
        'Perinatales',
        'Ambulatorias',
        'Hospitarias',
        'Pediatría / Neonatología',
        'No. Empleado',
        'Nombre',
        'Nivel Académico',
        'Código de Puesto',
        'Puesto',
        'Turno',
        'Días Hábiles',
        'Horario inicio',
        'Horario fin',
        'Servicio',
        'Críticas',
        'Clínicas',
        'Quirúrgicas',
        'Perinatales',
        'Ambulatorias',
        'Hospitalarias',
        'Pediatría / Neonatología',
        'Del',
        'Al',
        'Autoriza',
        'Observaciones'
    );

    // Agregar nombres generales de encabezados
    $sheet->setCellValue('A1', 'Datos de la Suplencia');
    $sheet->setCellValue('D1', 'Datos Del Solicitante');
    $sheet->setCellValue('U1', 'Datos De Quien Efectua La Suplencia');
    $sheet->setCellValue('AL1', 'Dia Que Se Solicita');


    // Agregar los encabezados de las columnas a partir de la fila 2
    $sheet->fromArray([$columns1], null, 'A2');

    // Fusionar celdas para encabezados generales
    $sheet->mergeCells('A1:C1');
    $sheet->mergeCells('D1:T1');
    $sheet->mergeCells('U1:AK1');
    $sheet->mergeCells('AL1:AO1');

    // Establecer estilos para los encabezados generales
    $styleArrayHeader1 = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => 'ffffff'],
            'size' => 10,
            'name' => 'Avenir Next LT Pro'
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => '2c5880']
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

    $styleArrayHeader2 = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => 'ffffff'],
            'size' => 10,
            'name' => 'Avenir Next LT Pro'
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => '5686b3']
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

    $styleArrayHeader3 = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => 'ffffff'],
            'size' => 10,
            'name' => 'Avenir Next LT Pro'
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => '85abcf']
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

    $styleArrayHeader4 = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => 'ffffff'],
            'size' => 10,
            'name' => 'Avenir Next LT Pro'
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => '9ccbf7']
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

    $sheet->getStyle('A1')->applyFromArray($styleArrayHeader1);
    $sheet->getStyle('D1')->applyFromArray($styleArrayHeader2);
    $sheet->getStyle('U1')->applyFromArray($styleArrayHeader3);
    $sheet->getStyle('AL1')->applyFromArray($styleArrayHeader4);

    // Establecer estilos para los encabezados de las columnas
    $styleArrayColumn = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => '000000'],
            'size' => 10,
            'name' => 'Avenir Next LT Pro'
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => 'd3e8fc']
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

    $sheet->getStyle('A2:AO2')->applyFromArray($styleArrayColumn);

    // Ajustar el tamaño de las columnas automáticamente
    foreach ($sheet->getColumnIterator() as $column) {
        $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
    }

    // Agregar los datos desde la base de datos
    $row = 3;
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