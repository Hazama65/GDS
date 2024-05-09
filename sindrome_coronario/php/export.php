<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_SC.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT * FROM datos_paciente dp
JOIN factor_riesgo fact ON dp.id_paciente = fact.id_paciente
JOIN antecedentes_familiares ant ON dp.id_paciente = ant.id_paciente
JOIN atencion_clinica ac ON dp.id_paciente = ac.id_paciente
JOIN paraclinicos para ON dp.id_paciente = para.id_paciente
JOIN tratamiento trata ON dp.id_paciente = trata.id_paciente
JOIN lesion_coronaria lc ON dp.id_paciente = lc.id_paciente
JOIN tratamiento_esp esp ON dp.id_paciente = esp.id_paciente
JOIN viabilidad via ON dp.id_paciente = via.id_paciente
JOIN eco_defuncion eco ON dp.id_paciente = eco.id_paciente";


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
        'Nombre Completo',
        'CURP',
        'Fecha de Nacimiento',
        'Edad',
        'Sexo',
        'Estado Civil',
        'Población Indígena',
        'Raza',
        'Escolaridad',
        'Unidad de Referencia',
        'Estado',
        'Alcaldía o Municipio',
        'Presión Arterial',
        'Frecuencia Cardíaca',
        'Frecuencia Respiratoria',
        'Peso (kg)',
        'Talla (m)',
        'Circunferencia Cintura(cm)',
        'Ninguno',
        'Hiperlipidemia',
        'Diabetes',
        'Hipertensión',
        'Alcoholismo',
        'Prima Paterna',
        'Enfermedad renal cronica',
        'Hiperuricemia',
        'Obesidad',
        'IAM previo',
        'Ectasia coronaria',
        'Cardiomiopatia de takotsubo',
        'Enfermedad multivaso',
        'Revascularización cardiaca previa',
        'Padre',
        'Madre',
        'Abuelo Materno',
        'Abuelo Paterno',
        'Abuela Materna',
        'Abuela Paterna',
        'Hermano',
        'Hermana',
        'Prima Materna',
        'Prima Paterna',
        'Primo Paterno',
        'Primo Materno',
        'Tía Materna',
        'Tía Paterna',
        'Tío Materno',
        'Tío Paterno',
        'Inicio Sintomas',
        'Características Dolor',
        'Inicio de triage',
        'Termino de triage',
        'Dolor Retroesternal',
        'Opresivo',
        'Irradiación brazo izquierdo',
        'Más de 10 minutos',
        'Náuseas',
        'Diaforesis',
        'Síncope',
        'Dolor Epigastrio',
        'Punzante',
        'Pleurítico',
        'Disnea',
        'Palpitación',
        'Diaforesis',
        'Síncope',
        'Intensidad Dolor',
        'Electrocardiograma',
        'Localización Electrocardiograma',
        'Con o Sin Elevación',
        'MACE Hospitalario',
        'Killip Kimball',
        'CK',
        'CK-MB',
        'Troponinas',
        'Glucosa',
        'Urea',
        'Creatinina',
        'Colesterol',
        'Trigliceridos',
        'Ácido Úrico',
        'HB Glucosilada',
        'Proteínas',
        'LDL',
        'HDL',
        'Fibrinólisis',
        'Fecha/hora de inicio',
        'Fecha/hora de finaliza',
        'Tipo Fibrinólisis',
        'Procedimiento Exitoso',
        'Fecha/Hora',
        'Tipo de Procedimiento',
        'Sitio Punción',
        'Lesiones Coronarias',
        'Coronaria Derecha',
        'Coronaria Izquierda',
        'Descendente Anterior',
        'Descendente Posterior',
        'Tronco Coronario Izquierdo',
        'Bifurcación',
        'Circunfleja',
        'Dominancia Derecha',
        'Codominancia',
        'Dominancia Izquierda',
        'Ramo Posterolateral',
        'Ramo Septales',
        'Ramo Marginales',
        'Clasificación DUQUE',
        'Clasificación Medina',
        'Clasificación ACC/AHA',
        'TIMI',
        'Procedimiento TIMI',
        'Clasificación TIMI',
        'Tomografía Coherencia Óptica',
        'Trombosis Intracoronaria',
        'Aspiración Trombo',
        'Prótesis Metálico',
        'Número de Prótesis',
        'Revascularización',
        'Procedimiento Exitoso',
        'AIRBUS',
        'Resultado AIRBUS',
        'Prótesis Endovascular',
        '1er Generación',
        '2da Generación',
        'Litotricia Intracoronaria',
        'Schockwave C2',
        'Complicaciones Schockwave C2',
        'Marcapasos',
        'Soporte Ventricular',
        'Complicaciones',
        'Tipo Disfunción Ventricular',
        'Tipo Complicaciones Mecánicas',
        'Pericárdicas',
        'Eléctricas',
        'Gammagrama Cardiaco Inicial',
        'Resultado Gammagrama Cardiaco',
        'Localización Gammagrama',
        'Segmento',
        'Resonancia Magnetica Inicial',
        'Resultado Resonancia Magnetica',
        'Ergometría Inicial',
        'Etapa 1',
        'Etapa 2',
        'Etapa 3',
        'Etapa 4',
        'Etapa 5',
        'Etapa 6',
        'Etapa 7',
        'Suspensión de Estudio',
        'Distolico Inicial',
        'Sistolico Inicial',
        'Frac. Eyección Ventrículo Izq Inicial',
        'Movilidad Inicial',
        'Segmento',
        'Causa de Defunción',
        'Fecha de Defunción'
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


    $sheet->getStyle('A1:FB1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos SC.xlsx';

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