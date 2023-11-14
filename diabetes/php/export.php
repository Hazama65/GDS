<?php
// Incluir el archivo de configuración de la base de datos
include('dbconfig_db.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query = "SELECT dp.*, di.*, hip.*, ec.*, dis.*, c.*, lab.*, com.*, hg.*, ins.*, hipo.*, ah.*, ot.*,ej.*
FROM datos_paciente dp
LEFT JOIN antihipertensivos ah ON dp.id_paciente = ah.id_paciente
LEFT JOIN comorbilidades c ON dp.id_paciente = c.id_paciente
LEFT JOIN complicaciones com ON dp.id_paciente = com.id_paciente
LEFT JOIN enfermedad_cardiovascular ec ON dp.id_paciente = ec.id_paciente
LEFT JOIN hipertension_arterial hip ON dp.id_paciente = hip.id_paciente
LEFT JOIN hipoglucemiantes hg ON dp.id_paciente = hg.id_paciente
LEFT JOIN hipolipemiantes hipo ON dp.id_paciente = hipo.id_paciente
LEFT JOIN insulina ins ON dp.id_paciente = ins.id_paciente
LEFT JOIN laboratorio lab ON dp.id_paciente = lab.id_paciente
LEFT JOIN otros ot ON dp.id_paciente = ot.id_paciente
LEFT JOIN diabetes_mellitus di ON dp.id_paciente = di.id_paciente
LEFT JOIN dislipidemia dis ON dp.id_paciente = dis.id_paciente
LEFT JOIN ejercicio ej ON dp.id_paciente = ej.id_paciente;
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
        'Curp',
        'Nombre',
        'Fecha Nacimiento',
        'Edad',
        'Sexo',
        'Escolaridad',
        'Estado Civil',
        'Estado',
        'Municipio',
        'Referencia',
        'Talla',
        'Peso',
        'IMC',
        'Resultado IMC',
        'Circunferencia Abdominal',
        'Derecho Abiencia',
        'Estudio Socioeconómico',
        'Nivel Económico',
        'Diabetes Mellitus',
        'Padre DM',
        'Madre DM',
        'Abuelo Materno DM',
        'Abuela Materna DM',
        'Abuelo Paterno DM',
        'Abuela Paterna DM',
        'No Hermanas DM',
        'No Hermanos DM',
        'Hipertensión Arterial ',
        'Padre HAS',
        'Madre HAS',
        'Abuelo Materno HAS',
        'Abuela Materna HAS',
        'Abuelo Paterno HAS',
        'Abuela Paterna HAS',
        'No Hermanas HAS',
        'No Hermanos HAS',
        'Enfermedad Cardiovascular ',
        'Evento Vascular Cerebral ',
        'Padre EVC',
        'Madre EVC',
        'Abuelo Materno EVC',
        'Abuela Materna EVC',
        'Abuelo Paterno EVC',
        'Abuela Paterna EVC',
        'No Hermanas EVC',
        'No Hermanos EVC',
        'Cardiopatía Isquémica ',
        'Padre CI',
        'Madre CI',
        'Abuelo Materno CI',
        'Abuela Materna CI',
        'Abuelo Paterno CI',
        'Abuela Paterna CI',
        'No Hermanas CI',
        'No Hermanos CI',
        'Dislipidemia ',
        'Hipertrigliceridemia',
        'Padre HTG',
        'Madre HTG',
        'Abuelo Materno HTG',
        'Abuela Materna HTG',
        'Abuelo Paterno HTG',
        'Abuela Paterna HTG',
        'No Hermanas HTG',
        'No Hermanos HTG',
        'Hipercolesterolemia ',
        'Padre LDL',
        'Madre LDL',
        'Abuelo Materno LDL',
        'Abuela Materna LDL',
        'Abuelo Paterno LDL',
        'Abuela Paterna LDL',
        'No Hermanas LDL',
        'No Hermanos LDL',
        'EHGNA',
        'Child Pugh',
        'Dislipidemia',
        'Distiroidismo',
        'Cancer',
        'Insuficiencia Cardiaca',
        'Disritmias Cardiacas',
        'Osteoporosis',
        'Gota',
        'LES',
        'Artritis Reumatoide',
        'Síndrome de Cushing ',
        'Tipo SC',
        'TGO',
        'TGP',
        'FA',
        'GGT',
        'DHL',
        'Proteínas Totales',
        'Albumina',
        'Globulinas',
        'AG',
        'BT',
        'BD',
        'BI',
        'HB',
        'VSG',
        'OHD',
        'Creatinina',
        'Creatinina Cistatina',
        'Glucosa',
        'BH',
        'Glucosilada',
        'Ácido Úrico',
        'Urea',
        'Creatinina 2',
        'Colesterol',
        'Triglicéridos',
        'LDL',
        'HDL',
        'HBG',
        'Retinopatía',
        'Ceguera',
        'Nefropatía',
        'Neuropatía',
        'Polineuropatía',
        'Simétrica Distal',
        'Pie Charcot',
        'Neuropatía Gastro',
        'Neuropatía Genito',
        'Neuropatía Cardio',
        'CI',
        'Amputación',
        'Amputaciones Dedos',
        'Mano Dedos',
        'Pies Dedos',
        'Amputaciones Transmetatarsiana',
        'Lateralidad Transmetatarsiana',
        'Amputaciones Infracondilea',
        'Lateralidad Infracondilea',
        'Amputaciones Supracondilea',
        'Lateralidad Supracondilea',
        'EVCI',
        'IAP',
        'Hipoglucemiantes',
        'Metformina',
        'Sulfonilureas',
        'Glinidas',
        'DPP4',
        'ISGLT',
        'GLP',
        'Pioglitazona',
        'IA',
        'Insulina',
        'NPH',
        'NPH Dosis',
        'Rápida Regular',
        'Rápida Regular Dosis',
        'Glardina',
        'Glardina Dosis',
        'Glardina 300',
        'Glardina 300 Dosis',
        'Detemir',
        'Detemir Dosis',
        'Degludec',
        'Degludec Dosis',
        'Lispro',
        'Lispro Dosis',
        'Aspart',
        'Aspart Dosis',
        'Glulisina',
        'Glulisina Dosis',
        'NPH Regular',
        'NPH Regular Dosis',
        'Lispro Prota',
        'Lispro Prota Dosis',
        'Hipolipemiante',
        'Estatinas',
        'Fibratos',
        'Omega 3',
        'IAB',
        'Antihipertensivos',
        'IECAS',
        'ARAII',
        'IR',
        'Calcioantagonistas',
        'Betabloqueadores',
        'DT',
        'Alfabloqueadores',
        'Espironolactoma',
        'Otros',
        'ASA',
        'Alopurinol',
        'Neuromodulador',
        'Procineticos',
        'No Farmacos',
        'Ejercicio',
        'Veces a la Semana',
        'Apego Veces',
        'Tiempo a la Semana',
        'Apego a la Semana'


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
    $excel_file = 'Datos Diabetes.xlsx';

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
