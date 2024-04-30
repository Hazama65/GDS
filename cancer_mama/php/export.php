<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_CM.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT * FROM datos_paciente dp
JOIN signos_vitales_sometria svs ON dp.id_paciente = svs.id_paciente
JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
JOIN antecedentes_familiares af ON dp.id_paciente = af.id_paciente
JOIN antecedentes_gineco ag ON dp.id_paciente = ag.id_paciente
JOIN antecedentes_emb ae ON dp.id_paciente = ae.id_paciente
JOIN atencion_clinica ac ON dp.id_paciente = ac.id_paciente
JOIN histopatologia histo ON dp.id_paciente = histo.id_paciente
JOIN inmuno inm ON dp.id_paciente = inm.id_paciente
JOIN molecular mc ON dp.id_paciente = mc.id_paciente
JOIN tratamiento tx ON dp.id_paciente = tx.id_paciente
JOIN quimio qm ON dp.id_paciente = qm.id_paciente
JOIN momento1 m1 ON dp.id_paciente = m1.id_paciente
JOIN momento2 m2 ON dp.id_paciente = m2.id_paciente
JOIN momento3 m3 ON dp.id_paciente = m3.id_paciente
JOIN hhtht ht ON dp.id_paciente = ht.id_paciente
JOIN full_quimio fqm ON dp.id_paciente = fqm.id_paciente
JOIN radio_defun rd ON dp.id_paciente = rd.id_paciente";


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
        'Nombre',
        'CURP',
        'Género',
        'Fecha de Nacimiento',
        'Estado Civil',
        'Raza',
        'Unidad de Referencia',
        'Presión Sistólica',
        'Presión Diastólica',
        'Frecuencia Cardíaca',
        'Frecuencia Respiratoria',
        'Glucemia Capilar',
        'Peso',
        'Talla',
        'Circunferencia Cintura',
        'Conocida con Gen BRCA 1',
        'Conocida con Gen BRCA 2',
        'Diabetes Mellitus',
        'Enfermedad Renal Cronica',
        'Hipertensión Arterial',
        'Tabaquismo',
        'Cáncer de mama',
        'Ninguna de las Anteriores',
        'Cáncer',
        'Cáncer Próstata',
        'Abuelo Materno',
        'Abuelo Paterno',
        'Hermano',
        'Padre',
        'Primo Materno',
        'Primo Paterno',
        'Tío Materno',
        'Tío Paterno',
        'Cáncer Ovario',
        'Abuela Materna',
        'Abuela Paterna',
        'Hermana',
        'Madre',
        'Prima Materna',
        'Prima Paterna',
        'Tía Materna',
        'Tía Paterna',
        'Cáncer Mama',
        'Abuela Materna',
        'Abuela Paterna',
        'Hermana',
        'Madre',
        'Prima Materna',
        'Prima Paterna',
        'Tía Materna',
        'Tía Paterna',
        'Menarca',
        'Menopausia',
        'Gestas',
        'Esta Embarazada',
        'Fecha Probable Parto',
        'Terapia Reemplazo Hormonal',
        'Lactancia',
        'Tiempo',
        'Gestas',
        'Paras',
        'Abortos',
        'Cesáreas',
        'Ectópicos',
        'Comentario',
        'Fecha Primera Atención',
        'BIRADS Referencia',
        'BIRADS Hospital',
        'Lateralidad',
        'Estado Clínico',
        'Etapa Clínica',
        'Estado Tamaño Tumoral',
        'Metástasis',
        'Calidad Vida ECOG',
        'Compromiso Linfático Nodal',
        'Mastectomía Extrainstitucional',
        'Lateralidad Mastectomía Extrainstitucional',
        'Fecha',
        'Histopatología',
        'Área',
        'Dx Histopatológico',
        'Fecha Dx Histopatológico',
        'Nottinghan',
        'Escala SBR',
        'Escala MID',
        'Inmunohistoquimica',
        'Área',
        'Receptores Estrógenos',
        'Receptores Progesterona',
        'KI-67',
        'P 53',
        'Triple Negativo',
        'Se realizó PDL',
        'Oncogén HER2',
        'FISH',
        'Molecular',
        'Área',
        'Luminal A',
        'Luminal B',
        'Enriquecido en HER 2+',
        'Basal',
        'Quirurgicos',
        'Lateralidad QX',
        'Tipo',
        'Tipo Ganglionar',
        'Fecha Ganglionar',
        'Fecha Mastectomia',
        'Tipo Mastectomia',
        'Reconstrucción',
        'Quimioterapia',
        'Antraciclinas',
        'Tipo',
        'Fecha Inicio',
        'Fecha Ternmino',
        '5FU',
        'AC',
        'AC/T',
        'AC/TH',
        'AT',
        'Atezolizumab',
        'Bevacizumab',
        'Capecitabina',
        'CBP',
        'Ciclofosfamida',
        'Cisplatino',
        'CMF',
        'Ctuximab',
        'Docetaxel',
        'EC',
        'Etopósido',
        'FAC',
        'FEC',
        'Herceptin',
        'Lapatinib',
        'Paclitaxel',
        'Pembrolixumab',
        'Pertuzumab',
        'TAC',
        'TC',
        'TCH',
        'TCHP',
        'TH',
        'THP',
        'Trastuzumab',
        'Sin Registro',
        '5FU',
        'AC',
        'AC/T',
        'AC/TH',
        'AT',
        'Atezolizumab',
        'Bevacizumab',
        'Capecitabina',
        'CBP',
        'Ciclofosfamida',
        'Cisplatino',
        'CMF',
        'Ctuximab',
        'Docetaxel',
        'EC',
        'Etopósido',
        'FAC',
        'FEC',
        'Herceptin',
        'Lapatinib',
        'Paclitaxel',
        'Pembrolixumab',
        'Pertuzumab',
        'TAC',
        'TC',
        'TCH',
        'TCHP',
        'TH',
        'THP',
        'Trastuzumab',
        'Sin Registro',
        'Fecha Inicio QT',
        'Fecha Término QT',
        '5FU',
        'AC',
        'AC/T',
        'AC/TH',
        'AT',
        'Atezolizumab',
        'Bevacizumab',
        'Capecitabina',
        'CBP',
        'Ciclofosfamida',
        'Cisplatino',
        'CMF',
        'Ctuximab',
        'Docetaxel',
        'EC',
        'Etopósido',
        'FAC',
        'FEC',
        'Herceptin',
        'Lapatinib',
        'Paclitaxel',
        'Pembrolixumab',
        'Pertuzumab',
        'TAC',
        'TC',
        'TCH',
        'TCHP',
        'TH',
        'THP',
        'Trastuzumab',
        'Sin Registro',
        'Fecha Inicio QT',
        'Fecha Término QT',
        'Hormoterapia',
        'Tipo Hormonoterapia',
        'Momento Hormonoterapia',
        'HER2 +++',
        'Esquema HER2 +++',
        'Triple Negativo',
        'Esquema Triple Negativo',
        'Hormonosensible',
        'Inhibidores Ciclinas',
        'Tipo Tratamiento',
        'Completo Quimio',
        'Causa QT Incompleta',
        'Fecha',
        'Fecha Falleció QT',
        'Causa Falleció QT',
        'Especifique Otra',
        'Radioterapia',
        'Tipo Radioterapia',
        'Fecha Inicio',
        'Número Sesiones',
        'Defunción',
        'Fecha Defunción',
        'Causa'
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
    $excel_file = 'Datos CM.xlsx';

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