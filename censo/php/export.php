<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_censo.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT dp.*,ea.*,h.*,tx.*
    FROM datos_paciente dp
    LEFT JOIN estado_alerte ea ON dp.id_paciente = ea.id_paciente   
    LEFT JOIN herramientas h ON dp.id_paciente = h.id_paciente
    LEFT JOIN tratamiento tx ON dp.id_paciente = tx.id_paciente";

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
        'Nombre Completo',
        'CURP',
        'Fecha Nacimiento',
        'Sexo',
        'Edad',
        'Cama',
        'Cama Nueva Asignada',
        'Estado de Salud',
        'Diagnóstico',
        'GLASGOW',
        'RAMSEY',
        'Actividad Motora',
        'Signos Vitales',
        'PVC',
        'Precauciones Basadas T.',
        'Catéter Periférico C',
        'Catéter Venoso Central',
        'Dispositivo Respiratorio',
        'Sonda Foley',
        'Sonda Nasogástrica',
        'Colostomía',
        'Penrose',
        'Dieta',
        'Terapia Intravenosa',
        'Infusiones Especiales de Tx'
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
    $excel_file = 'Datos Censo.xlsx';

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
