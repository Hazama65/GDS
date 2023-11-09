<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_lph.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT *
FROM datos_paciente
JOIN antecedentes_familiares ON datos_paciente.id_paciente = antecedentes_familiares.id_paciente
JOIN antecedentes_natales ON datos_paciente.id_paciente = antecedentes_natales.id_paciente
JOIN antecedentes_patologicos ON datos_paciente.id_paciente = antecedentes_patologicos.id_paciente
JOIN etapa_atencion ON datos_paciente.id_paciente = etapa_atencion.id_paciente
JOIN etapa_a ON datos_paciente.id_paciente = etapa_a.id_paciente
JOIN etapa_b ON datos_paciente.id_paciente = etapa_b.id_paciente
JOIN etapa_c ON datos_paciente.id_paciente = etapa_c.id_paciente
JOIN etapa_d ON datos_paciente.id_paciente = etapa_d.id_paciente
JOIN fisura ON datos_paciente.id_paciente = fisura.id_paciente;
";

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
        'CURP',
        'Nombre Completo',
        'Fecha Nacimiento',
        'Edad',
        'Sexo',
        'Escolaridad',
        'Estado Civil',
        'Estado',
        'Municipio',
        'Referencia',
        'Num. Telefonico',
        'Talla',
        'Peso',
        'IMC',
        'Resultado IMC',
        'Circunferencia Abdominal',
        'Derechohabiencia',
        'Estudio Socioeconómico',
        'Nivel',
        'Fisura Labiopalatina',
        'Padre',
        'Madre',
        'Abuelo Materno',
        'Abuela Materna',
        'Abuelo Paterno',
        'Abuela Paterna',
        'Número de Hermanas',
        'Número de Hermanos',
        'Semanas Gestación',
        'Complicaciones en Embarazo',
        'Complicaciones en Parto',
        'Tabaquismo Durante Embarazo',
        'Alcoholismo Durante Embarazo',
        'Malformaciones Congénitas',
        'Dx de Fisura Durante Embarazo',
        'Alergicos',
        'Analgesicos',
        'Anestesicos',
        'Antibioticos',
        'Antiinflamatorios',
        'Fecha Ingreso Clínica',
        'Etapa de Atención',
        'Audiologia',
        'Cirugía Maxilofacial',
        'Cirugía Reconstructiva',
        'Neonatología',
        'Ortodoncia',
        'Otorrinolaringologia',
        'Protesis Maxilofacial',
        'Psicologia',
        'Rehabilitación',
        'Terapia De Lenguaje',
        'Terapia Fisica',
        'Terapia Ocupacional',
        'Atención Psicomotriz',
        'Curso De Inducción',
        'Curso Lactancia Materna',
        'Estudios Audiológicos',
        'Terapia Para Padres',
        'Valoración Inicial De Lenguaje',
        'Ortopedia Pre-quirúrgica	',
        'Palatoplastia',
        'Queiloplastias',
        'Estatus',
        'Etapa A: Fecha de Cirugia',
        'Audiologia',
        'Cirugía Maxilofacial',
        'Cirugía Reconstructiva',
        'Nutrición',
        'Ortodoncia',
        'Otorrinolaringologia',
        'Pediatría',
        'Psicologia',
        'Protesis Maxilofacial',
        'Rehabilitación',
        'Terapia De Lenguaje',
        'Terapia Fisica',
        'Terapia Ocupacional',
        'Atención Psicologica',
        'Curso De Inducción',
        'Estudios Audiológicos',
        'Valoración Patrón De Cierre Velar',
        'Valoración Del Lenguaje',
        'Injerto Óseo',
        'Ortopedia Maxilar',
        'Palatoplastia',
        'Queiloplastia',
        'Estatus',
        'Fecha de Cirugia',
        'Audiologia',
        'Cirugía Maxilofacial',
        'Cirugía Reconstructiva',
        'Nutricion',
        'Ortodoncia',
        'Otorrinolaringologia',
        'Pediatría',
        'Psicologia',
        'Protesis Maxilofacial',
        'Rehabilitación',
        'Terapia De Lenguaje',
        'Terapia Fisica',
        'Terapia Ocupacional',
        'Atención Psicologica',
        'Curso De Inducción',
        'Estudios Audiológicos',
        'Valoración Patrón De Cierre Velar',
        'Valoración Del Lenguaje',
        'Injerto óseo',
        'Ortodoncia',
        'Ortopedia Maxilar',
        'Otras Plastias',
        'Palatoplastia',
        'Queiloplastia',
        'Estatus',
        'Fecha de Cirugia',
        'Audiologia',
        'Cirugía Maxilofacial',
        'Cirugía Reconstructiva',
        'Nutricion',
        'Ortodoncia',
        'Otorrinolaringologia',
        'Pediatría',
        'Psicologia',
        'Protesis Maxilofacial',
        'Rehabilitación',
        'Terapia De Lenguaje',
        'Terapia Fisica',
        'Terapia Ocupacional',
        'Atención Psicologica',
        'Curso De Inducción',
        'Estudios Audiológicos',
        'Valoración Del Lenguaje',
        'Cirugía Ortognatica/Distracción Osea',
        'Injerto óseo',
        'Ortodoncia',
        'Ortopedia Maxilar',
        'Otras Plastias',
        'Palatoplastia',
        'Queiloplastia',
        'Rinoplastia',
        'Estatus',
        'Fecha de Cirugia',
        'Fisura',
        'Labio Derecho',
        'Labio Izquierdo',
        'Alveolo Derecho',
        'Alveolo Izquierdo',
        'Paladar Duro',
        'Velo De Paladar'
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
    $excel_file = 'Datos LPH.xlsx';

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
