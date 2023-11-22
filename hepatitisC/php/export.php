<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_hc.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT p.*,s.*,fr.*,ant.*,ate.*,l.*,uh.*,ih.*,t.*,d.* FROM pacientes p 
JOIN sometria s on p.id_paciente = s.id_paciente
JOIN factores_riesgo fr on p.id_paciente = fr.id_paciente
JOIN antecedentes ant ON p.id_paciente = ant.id_paciente
JOIN atencion_clinica ate ON p.id_paciente = ate.id_paciente
JOIN laboratorio l ON p.id_paciente = l.id_paciente
JOIN ultrasonidohepatico uh ON p.id_paciente = uh.id_paciente
JOIN indicehepatico ih ON p.id_paciente = ih.id_paciente
JOIN tratamiento t ON p.id_paciente = t.id_paciente
JOIN defuncion d ON p.id_paciente = d.id_paciente
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
        'Estado Civil',
        'Estado',
        'Municipio',
        'Referenciado',
        'Unidad de Referencia',
        'Talla',
        'Peso',
        'IMC',
        'Resultado IMC',
        'Circunferencia',
        'Sin Registro',
        'Relaciones Sexuales',
        'Transfusiones',
        'Drogas Endovenosas',
        'Piercing',
        'Presidiario',
        'Expresidiario',
        'Situación de Calle',
        'Pacientes con VIH',
        'Pacientes con Hepatitis',
        'Sexo Servidoras',
        'Parejas Ocasionales',
        'Pacientes con Toxicomanias',
        'Ninguna',
        'Hemofilia',
        'ERC en Hemodialisis',
        'Trabajador de la Salud',
        'Transplante',
        'Cirrosis',
        'Obesidad',
        'Prediabetes',
        'Diabetes Mellitus',
        'Hipertensión Arterial',
        'Alcoholismo',
        'Virus HB',
        'Ninguno',
        'Atención Inicial',
        'Carga Viral Inicial',
        'Carga Viral Dx',
        'Respuesta Viral Sostenida',
        '# RVS',
        'Fecha RVS',
        'AST',
        'BUN',
        'CREAT',
        'ALT',
        'Plaquetas',
        'Albumina',
        'Glucosa',
        'HBA1C',
        'Trigliceridos',
        'HDL',
        'Ultrasonido Hepático',
        'Resultado Ultrasonido',
        'Esteatosis',
        'FIB 4',
        'Resultado FIB 4',
        'NAFLD',
        'Resultado NAFLD',
        'APRI',
        'Resultado APRI',
        'Fecha Inicio Tratamiento',
        'Tratamiento',
        'Ribavirina',
        'Fecha Fin Tratamiento',
        'Defunción',
        'Causa'
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
    $excel_file = 'Datos HepatitisC.xlsx';

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
