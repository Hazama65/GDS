<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_LP.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT * FROM datos_paciente dp
JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
JOIN act_lupica al ON dp.id_paciente = al.id_paciente
JOIN sledai sl ON dp.id_paciente = sl.id_paciente
JOIN laboratorio l ON dp.id_paciente = l.id_paciente
JOIN anticuerpos_renal_prono arp ON dp.id_paciente = arp.id_paciente
JOIN tratamiento_defuncion td ON dp.id_paciente = td.id_paciente";


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
        'Ninguno',
        'Alcoholismo',
        'Esteatosis Hepatica',
        'Diabetes Mellitus',
        'Hipertensión Arterial',
        'Obesidad',
        'Sx Antifosfolípidos',
        'Actividad Articular',
        'Actividad Cutánea',
        'Actividad Hematología',
        'Actividad Inmunológica',
        'Actividad Neurológica',
        'Actividad Renal',
        'Actividad Muscular',
        'Actividad Cardiaca',
        'Convulsión',
        'Psicosis',
        'Síndrome Cerebral Orgánico',
        'Alteración Visual',
        'Trastorno De Los Nervios Craneales',
        'Dolor De Cabeza Por Lupus',
        'EVC',
        'Vasculitis',
        'Artritis',
        'Miositis',
        'Cilindros Urinarios',
        'Hematuria',
        'Piuria',
        'Proteinuria',
        'Erupción',
        'Úlceras De Las Mucosas',
        'Pleuritis',
        'Pericarditis',
        'Bajo com(C3,C4 O Ch50 Bajo)',
        'Aumento de la Unión al ADN',
        'Fiebre',
        'Trombocitopenia',
        'Leucopenia',
        'Alopecia',
        'Resultado SLEDAI',
        'Albúmina Sérica',
        'BUN',
        'C3',
        'C4',
        'Creatina Sérica',
        'Proteinuria en 24 hrs',
        'Albúminuria en 24 hrs',
        'Leucocitos',
        'Linfocitos',
        'Plaquetas',
        'Hemoglobina',
        'Vitamina D',
        'Anticuerpo Lúpico',
        'Ac-DNA Elevado',
        'Ac-SM',
        'Ac-RNP',
        'Ac-RO',
        'Ac-LA',
        'Ac-Cardiolipinas IgM',
        'Ac-Cardiolipinas IgG',
        'Ac B2-GPI IgG',
        'Ac B2-GPI IgM',
        'Biopsia Renal',
        'Tipo',
        'Índice',
        'Tipo',
        'Metrotexate',
        'Dosis Semanal',
        'Hidroxicloroquina',
        'Dosis Semanal',
        'Azatioprina',
        'Dosis Semanal',
        'Prednisona',
        'Dosis Semanal',
        'Micofenolato de Mofetilo',
        'Dosis Semanal',
        'Ciclofosfamida',
        'Dosis Semanal',
        'Rituximab',
        'Apego a Tratamiento',
        'Defuncion'
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


    $sheet->getStyle('A1:CM1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos Lupus.xlsx';

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