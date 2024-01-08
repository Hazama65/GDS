<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_gc.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT *
FROM datos_paciente dp
LEFT JOIN apnp_tos apnpT ON dp.id_paciente = apnpT.id_paciente   
LEFT JOIN apnp_tuberculosis apnpTuber ON dp.id_paciente = apnpTuber.id_paciente
LEFT JOIN apnp_vih apnpV ON dp.id_paciente = apnpV.id_paciente
LEFT JOIN apnp_animales_viajes AniVia ON dp.id_paciente = AniVia.id_paciente
LEFT JOIN apnp_vacunas vacu ON dp.id_paciente = vacu.id_paciente
LEFT JOIN app ap ON dp.id_paciente = ap.id_paciente
LEFT JOIN atencion_clinica ac ON dp.id_paciente = ac.id_paciente
LEFT JOIN app_otros apOtros ON dp.id_paciente = apOtros.id_paciente
LEFT JOIN app_etiologia etio ON dp.id_paciente = etio.id_paciente
LEFT JOIN app_tf_tb tftb ON dp.id_paciente = tftb.id_paciente
LEFT JOIN laboratorio lab ON dp.id_paciente = lab.id_paciente
LEFT JOIN pfh ON dp.id_paciente = pfh.id_paciente
LEFT JOIN serologia_cultivo sc ON dp.id_paciente = sc.id_paciente
LEFT JOIN estudios_alta ea ON dp.id_paciente = ea.id_paciente";

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
        'Nombre Paciente',
        'Sexo',
        'Edad de Abordaje',
        'Residencia',
        'Nivel Socioeconomico',
        'Contacto con Personas Enfermas',
        'Contacto con personas Tos crónica',
        'Padre',
        'Madre',
        'Abuelo Materno',
        'Abuela Materna',
        'Abuelo Paterno',
        'Abuela Paterna',
        'Número de Hermanas',
        'Número de Hermanos',
        'Contacto con personas Tuberculosis',
        'Padre',
        'Madre',
        'Abuelo Materno',
        'Abuela Materna',
        'Abuelo Paterno',
        'Abuela Paterna',
        'Número de Hermanas',
        'Número de Hermanos',
        'Contacto con personas VIH',
        'Padre',
        'Madre',
        'Abuelo Materno',
        'Abuela Materna',
        'Abuelo Paterno',
        'Abuela Paterna',
        'Número de Hermanas',
        'Número de Hermanos',
        'Contacto con Animales',
        'Perros',
        'Gatos',
        'Conejos',
        'Pollos',
        'Chinches',
        'Ratas',
        'Moscos',
        'Gallinas',
        'Cerdos',
        'Caballos',
        'Becerros',
        'Pajaro',
        'Borregos',
        'Tortugas',
        'Patos',
        'Burros',
        'Moscas',
        'Viajes recientes',
        'Lugar',
        'Visitas a Cuevas',
        'Alimentarios',
        'Tipo-Alimentario',
        'Vacunación Completa',
        'BCG',
        'Hepatitis B',
        'Pentavalente Acelular',
        'Hepatitis B',
        'Rotavirus',
        'Neumococo B',
        'Pentavalente Acelular',
        'Rotavirus',
        'Neumococo B',
        'Pentavalente Acelular',
        'Rotavirus',
        'Influenza',
        'Influenza 2da dosis',
        'SRP',
        'Neumococo C.',
        'Pentavalente Acelular',
        'Influenza Refuerzo Anual',
        'Influenza Refuerzo Anual',
        'DPT(Refuerzo)',
        'Influenza Refuerzo Anual',
        'Influenza Refuerzo Anual',
        'OVP',
        'SRP (Refuerzo)',
        'VPH',
        'Reflujo',
        'Neumopatía Crónica',
        'Edad-Neumopatía',
        'Talla Baja',
        'Discapacidad Intelectual',
        'Pancreatitis por AVP',
        'LPH',
        'Epilepsia',
        'Amigdalectomía',
        'Apendicectomía',
        'Rubeola',
        'Invaginación',
        'Fractura',
        'Rinitis Alérgica',
        'Pielonefritis',
        'Varicela',
        'Edad-Varicela',
        'Tiempo de Evolución',
        'Período Evolución',
        'Tamaño del Ganglio',
        'Doloroso',
        'No Doloroso',
        'Indurado',
        'No Indurado',
        'Hipertermico',
        'Con Secreción',
        'Sin Secreción',
        'Bien Delimitado',
        'Mal Delimitado',
        'Fijo',
        'Movíl',
        'Cambios de Coloración',
        'Sin Cambios de Coloració',
        'Otros Ganglios',
        'Submandibulares',
        'Axilares',
        'Inguinales',
        'Cervicales',
        'Retroauriculares',
        'Subclavicular',
        'Occipital',
        'Adenopatias',
        'VEB',
        'CMV',
        'TB',
        'B19',
        'Bocio',
        'Rubéola',
        'Bartonella',
        'Toxoplamosis',
        'Inflamatorio',
        'Parvovirus',
        'Varicela',
        'Isonicida',
        'Rifampicina',
        'Pirazinamida',
        'Etambutol',
        'Hemoglobina',
        'Hematocrito',
        'Leucocitos',
        'Neutrófilos',
        'Linfocitos',
        'Monocitos',
        'Plaquetas',
        'Eosinófilos',
        'Eritrocitos',
        'Procalcitonina',
        'Volumen Corpuscular Medio',
        'Ancho de Distribución Eritrocitaria',
        'DHL',
        'AST',
        'ALT',
        'Globulina',
        'Albúmina',
        'BD',
        'BI',
        'TGO',
        'TGP',
        'FA',
        'GGT',
        'PT',
        'REL A/G',
        'Proteinas Totales',
        'Serología',
        'Resultado-Serología',
        'Prueba PCR',
        'Resultado-PCR',
        'Cultivo',
        'Resultado-Cultivo',
        'Tomografía',
        'Resultado-Tomografía',
        'Ultrasonido',
        'Resultado-Ultrasonido',
        'Biopsia',
        'Resultado-Biopsia',
        'Referencia',
        'Institución',
        'Causa',
        'Alta',
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
    $excel_file = 'Datos Ganglio Cervical.xlsx';

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
