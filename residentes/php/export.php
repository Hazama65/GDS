<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_residentes.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT dp.*,i.*, g.*,f.*, h.*, d.*, c.*,e.*,j.*, a.*, b.*
FROM datos_productividad dp
LEFT JOIN artrocentesis a ON dp.id_productividad = a.id_productividad
LEFT JOIN aspiracion_mo b ON dp.id_productividad = b.id_productividad
LEFT JOIN biopsia_celular c ON dp.id_productividad = c.id_productividad
LEFT JOIN biopsia_piel d ON dp.id_productividad = d.id_productividad
LEFT JOIN biopsia_tiroides e ON dp.id_productividad = e.id_productividad
LEFT JOIN cvc f ON dp.id_productividad = f.id_productividad
LEFT JOIN intubacion g ON dp.id_productividad = g.id_productividad
LEFT JOIN paracentesis h ON dp.id_productividad = h.id_productividad
LEFT JOIN puncion_lumbar i ON dp.id_productividad = i.id_productividad
LEFT JOIN toracocentesis j ON dp.id_productividad = j.id_productividad;
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
        'Fecha',
        'Residente',
        'Punción Lumbar 1-Intento',
        'Punción Lumbar 1-Complicaciones',
        'Punción Lumbar 1-Tipo de complicaciones',
        'Punción Lumbar 1-Otra Complicación',
        'Punción Lumbar 2-Intento',
        'Punción Lumbar 2-Complicaciones',
        'Punción Lumbar 2-Tipo de complicaciones',
        'Punción Lumbar 2-Otra Complicación',
        'Punción Lumbar 3-Intento',
        'Punción Lumbar 3-Complicaciones',
        'Punción Lumbar 3-Tipo de complicaciones',
        'Punción Lumbar 3-Otra Complicación',
        'Intubación 1-Intento',
        'Intubación 1-Complicaciones',
        'Intubación 1-Tipo de complicaciones',
        'Intubación 1-Otra Complicación',
        'Intubación 2-Intento',
        'Intubación 2-Complicaciones',
        'Intubación 2-Tipo de complicaciones',
        'Intubación 2-Otra Complicación',
        'Intubación 3-Intento',
        'Intubación 3-Complicaciones',
        'Intubación 3-Tipo de complicaciones',
        'Intubación 3-Otra Complicación',
        'CVC 1-Tipo de CVC',
        'CVC 1-Intento',
        'CVC 1-Complicaciones',
        'CVC 1-Tipo de complicaciones',
        'CVC 1-Otra Complicación',
        'CVC 2-Tipo de CVC',
        'CVC 2-Intento',
        'CVC 2-Complicaciones',
        'CVC 2-Tipo de complicaciones',
        'CVC 2-Otra Complicación',
        'CVC 3-Tipo de CVC',
        'CVC 3-Intento',
        'CVC 3-Complicaciones',
        'CVC 3-Tipo de complicaciones',
        'CVC 3-Otra Complicación',
        'Paracentesis 1-Intento',
        'Paracentesis 1-Complicaciones',
        'Paracentesis 1-Tipo de complicaciones',
        'Paracentesis 1-Otra Complicación',
        'Paracentesis 2-Intento',
        'Paracentesis 2-Complicaciones',
        'Paracentesis 2-Tipo de complicaciones',
        'Paracentesis 2-Otra Complicación',
        'Paracentesis 3-Intento',
        'Paracentesis 3-Complicaciones',
        'Paracentesis 3-Tipo de complicaciones',
        'Paracentesis 3-Otra Complicación',
        'Biopsia Piel 1-Intento',
        'Biopsia Piel 1-Complicaciones',
        'Biopsia Piel 1-Tipo de complicaciones',
        'Biopsia Piel 1-Otra Complicación',
        'Biopsia Piel 2-Intento',
        'Biopsia Piel 2-Complicaciones',
        'Biopsia Piel 2-Tipo de complicaciones',
        'Biopsia Piel 2-Otra Complicación',
        'Biopsia Piel 3-Intento',
        'Biopsia Piel 3-Complicaciones',
        'Biopsia Piel 3-Tipo de complicaciones',
        'Biopsia Piel 3-Otra Complicación',
        'Biopsia Tejido Celular SUBC 1-Intento',
        'Biopsia Tejido Celular SUBC 1-Complicaciones',
        'Biopsia Tejido Celular SUBC 1-Tipo de complicaciones',
        'Biopsia Tejido Celular SUBC 1-Otra Complicación',
        'Biopsia Tejido Celular SUBC 2-Intento',
        'Biopsia Tejido Celular SUBC 2-Complicaciones',
        'Biopsia Tejido Celular SUBC 2-Tipo de complicaciones',
        'Biopsia Tejido Celular SUBC 2-Otra Complicación',
        'Biopsia Tejido Celular SUBC 3-Intento',
        'Biopsia Tejido Celular SUBC 3-Complicaciones',
        'Biopsia Tejido Celular SUBC 3-Tipo de complicaciones',
        'Biopsia Tejido Celular SUBC 3-Otra Complicación',
        'Biopsia Tiroides 1-Intento',
        'Biopsia Tiroides 1-Complicaciones',
        'Biopsia Tiroides 1-Tipo de complicaciones',
        'Biopsia Tiroides 1-Otra Complicación',
        'Biopsia Tiroides 2-Intento',
        'Biopsia Tiroides 2-Complicaciones',
        'Biopsia Tiroides 2-Tipo de complicaciones',
        'Biopsia Tiroides 2-Otra Complicación',
        'Biopsia Tiroides 3-Intento',
        'Biopsia Tiroides 3-Complicaciones',
        'Biopsia Tiroides 3-Tipo de complicaciones',
        'Biopsia Tiroides 3-Otra Complicación',
        'Toracocentesis 1-Intento',
        'Toracocentesis 1-Complicaciones',
        'Toracocentesis 1-Tipo de complicaciones',
        'Toracocentesis 1-Otra Complicación',
        'Toracocentesis 2-Intento',
        'Toracocentesis 2-Complicaciones',
        'Toracocentesis 2-Tipo de complicaciones',
        'Toracocentesis 2-Otra Complicación',
        'Toracocentesis 3-Intento',
        'Toracocentesis 3-Complicaciones',
        'Toracocentesis 3-Tipo de complicaciones',
        'Toracocentesis 3-Otra Complicación',
        'Artrocentesis 1-Intento',
        'Artrocentesis 1-Complicaciones',
        'Artrocentesis 1-Tipo de complicaciones',
        'Artrocentesis 1-Otra Complicación',
        'Artrocentesis 2-Intento',
        'Artrocentesis 2-Complicaciones',
        'Artrocentesis 2-Tipo de complicaciones',
        'Artrocentesis 2-Otra Complicación',
        'Artrocentesis 3-Intento',
        'Artrocentesis 3-Complicaciones',
        'Artrocentesis 3-Tipo de complicaciones',
        'Artrocentesis 3-Otra Complicación',
        'Aspiración de MO 1-Intento',
        'Aspiración de MO 1-Complicaciones',
        'Aspiración de MO 1-Tipo de complicaciones',
        'Aspiración de MO 1-Otra Complicación',
        'Aspiración de MO 2-Intento',
        'Aspiración de MO 2-Complicaciones',
        'Aspiración de MO 2-Tipo de complicaciones',
        'Aspiración de MO 2-Otra Complicación',
        'Aspiración de MO 3-Intento',
        'Aspiración de MO 3-Complicaciones',
        'Aspiración de MO 3-Tipo de complicaciones',
        'Aspiración de MO 3-Otra Complicación',
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
    $excel_file = 'Datos Residentes.xlsx';

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
