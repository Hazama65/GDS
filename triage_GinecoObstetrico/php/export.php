<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_gn.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT dg.*,dp.*,ag.*,sv.*,si.*,sg.*,tr.*,rt.* FROM datos_generales dg
JOIN datos_paciente dp on dg.id_GN = dp.id_GN
JOIN antecedentes_go ag on dg.id_GN = ag.id_GN
JOIN signos_vitales sv ON dg.id_GN = sv.id_GN
JOIN sintomas si ON dg.id_GN = si.id_GN
JOIN signos sg ON dg.id_GN = sg.id_GN
JOIN tira_reactiva tr ON dg.id_GN = tr.id_GN
JOIN resultados_triaje rt ON dg.id_GN = rt.id_GN";

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
        'Elabora',
        'CURP',
        'Nombre Completo',
        'Fecha Nacimiento',
        'Edad',
        'Prueba Covid',
        'Gestas',
        'Paras',
        'Abortos',
        'Embarazos Ectópicos',
        'Hijos Vivos',
        'FUM',
        'Fecha Probable Parto',
        'Sem Gestación',
        'Presión arterial sistólica (mmHg)',
        'Presión arterial diastólica (mmHg)',
        'Frecuencia Cardiaca',
        'Frecuencia respiratoria',
        'Temperatura (°C)',
        'Frecuencia Cardiaca Fetal',
        'Talla',
        'Peso',
        'IMC',
        'Resultado IMC',
        'Estado de Conciencia',
        'Convulsiones',
        'Sintomas de vasoespasmo',
        'Dolor en epigastrio o en barra',
        'Movimientos Fetales',
        'Sangrado Vaginal',
        'Salida de líquido amniótico',
        'Trabajo de Parto',
        'Presentación fetal',
        'Proteínas',
        'Leucocitos',
        'Glucosa',
        'Nitritos',
        'Cetonas',
        'Eritrocítos',
        'Resultado Triage',
        'Destino',
        'Activación Código',

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
    $excel_file = 'Datos Triage.xlsx';

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
