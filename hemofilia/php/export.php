<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_hf.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT *
FROM datos_paciente AS dp
JOIN clinica AS cl ON dp.id_paciente = cl.id_paciente
JOIN fish AS f ON dp.id_paciente = f.id_paciente
JOIN hjhs AS h ON dp.id_paciente = h.id_paciente
JOIN usg AS u ON dp.id_paciente = u.id_paciente
JOIN tratamiento AS t ON dp.id_paciente = t.id_paciente
JOIN inhibidor AS i ON dp.id_paciente = i.id_paciente
JOIN tratamiento_mensual AS tm ON dp.id_paciente = tm.id_paciente";

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
        'Edad',
        'Sexo',
        'Peso',
        'Tipo de Hemofilia',
        'Deficiencia de factor',
        'Clasificación de Hemofilia (VIII)',
        'Clasificación de Hemofilia (IX)',
        'Clasificación de Hemofilia (XI)',
        'Tipo de EVW',
        'Otra Clasificación',
        'Clasificación por gravedad',
        'Inhibidor',
        'Inhibidor Baja Respuesta',
        'Inhibidor Alta Respuesta',
        'Artropatia Hemolitica',
        'Área Afectada',
        'No. de Sangrados Mensuales',
        'Requirió factor',
        '(FISH)',
'Comer y Asearse',
'Bañarse',
'Vestirse',
'Sentar',
'Cunclillas',
'Caminar',
'Correr',
'Subir Escaleras (12-14 pasos)',
'(HJHS)',
'Inflamación',
'Duración',
'Atrofia Muscular',
'Crepitación al Movimiento',
'Pérdida de la Flexión',
'Pérdida de la Extensión',
'Dolor Articular',
'Fuerza',
'Inflamación',
'Duración',
'Atrofia Muscular',
'Crepitación al Movimiento',
'Pérdida de la Flexión',
'Pérdida de la Extensión',
'Dolor Articular',
'Fuerza',
'Inflamación',
'Duración',
'Atrofia Muscular',
'Crepitación al Movimiento',
'Pérdida de la Flexión',
'Pérdida de la Extensión',
'Dolor Articular',
'Fuerza',
'Inflamación',
'Duración',
'Atrofia Muscular',
'Crepitación al Movimiento',
'Pérdida de la Flexión',
'Pérdida de la Extensión',
'Dolor Articular',
'Fuerza',
'Inflamación',
'Duración',
'Atrofia Muscular',
'Crepitación al Movimiento',
'Pérdida de la Flexión',
'Pérdida de la Extensión',
'Dolor Articular',
'Fuerza',
'Inflamación',
'Duración',
'Atrofia Muscular',
'Crepitación al Movimiento',
'Pérdida de la Flexión',
'Pérdida de la Extensión',
'Dolor Articular',
'Fuerza',
'Suma del total de Articulaciones',
'Marcha Global',
'6 meses',
'Actividad Inflamatoria',
'Escala de Derrame / Sinovitis',
'Escala de Hipertrofia Sinovial',
'Daño Osteocondral - Cartilago',
'Daño Osteocondral - Hueso',
'12 meses',
'Actividad Inflamatoria',
'Escala de Derrame / Sinovitis',
'Escala de Hipertrofia Sinovial',
'Daño Osteocondral - Cartilago',
'Daño Osteocondral - Hueso',
'24 meses',
'Actividad Inflamatoria',
'Escala de Derrame / Sinovitis',
'Escala de Hipertrofia Sinovial',
'Daño Osteocondral - Cartilago',
'Daño Osteocondral - Hueso',
'Tipo de Tratamiento',
'Profilaxis',
'Profilaxis con Emicizumab',
'Tipo Profilaxis con Emicizumab',
'Dosis(mg) / Kg',
'Total de mg por Dosis',
'N° de Dosis por semana',
'Entrega',
'Dosis / Kg',
'Total de UI por Dosis',
'N° de Dosis por semana',
'Total de UI por semana',
'Dosis / Kg',
'Total de UI por Dosis',
'N° de Dosis por semana',
'Total de UI por semana',
'Turoctocog Alfa 250 UI',
'Turoctocog Alfa 500 UI',
'Turoctocog Alfa 1000 UI',
'Octocog Alfa 250 UI',
'Octocog Alfa 500 UI',
'Simoctocog Alfa 250 UI',
'Simoctocog Alfa 500 UI',
'Simoctocog Alfa 1000 UI',
'Factor VIII 250 UI',
'Factor VIII 500 UI',
'Factor VIII + vW 500 UI',
'Factor VIII + vW 1000 UI',
'Factor IX 500 UI',
'Factor IX 500 UI',
'Factor IX 600 UI',
'Factor IX 1000 UI',
'Emicizumab',
'F VW 500 UI',
'F VW 1000 UI'
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
    $excel_file = 'Datos Hemofilia.xlsx';

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
