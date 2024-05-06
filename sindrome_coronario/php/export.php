<?php
// Incluir el archivo de configuración de la base de datos
include ('dbconfig_CB.php');

// Conectar a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Consulta SQL
$query_pacientes = "SELECT * FROM datos_paciente dp
JOIN antecedentes ant ON dp.id_paciente = ant.id_paciente
JOIN hvc ON dp.id_paciente = hvc.id_paciente
JOIN afecciones_orales ao ON dp.id_paciente = ao.id_paciente
JOIN lesion_orales lo ON dp.id_paciente = lo.id_paciente
JOIN ubicacion_derecha ud ON dp.id_paciente = ud.id_paciente
JOIN ubicacion_izquierda ui ON dp.id_paciente = ui.id_paciente
JOIN atencion_clinica_histo_inmuno ahm ON dp.id_paciente = ahm.id_paciente
JOIN tratamiento1 trat1 ON dp.id_paciente = trat1.id_paciente
JOIN tratamiento2 trat2 ON dp.id_paciente = trat2.id_paciente
JOIN tratamiento3 trat3 ON dp.id_paciente = trat3.id_paciente
JOIN exito_defuncion exitdefun ON dp.id_paciente = exitdefun.id_paciente";


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
        'CURP',
        'Nombre Completo',
        'Escolaridad',
        'Fecha de nacimiento',
        'Edad',
        'Sexo',
        'Talla',
        'Peso',
        'IMC',
        'Estado',
        'Municipio',
        'Referencia',
        'Unidad de Referencia',
        'Exposición Solar',
        'Comidas al Día',
        'Higiene Bucal',
        'Alcoholismo',
        'Tabaquismo',
        'Cocaina',
        'Marihuana',
        'Medicamentos Controlados',
        'Solventes',
        'Ninguno',
        'Frecuencia del Alcoholismo',
        'Años con Tabaquismo',
        'Cigarros al día',
        'Autolesiones',
        'Bruxismo',
        'Interposicion Lingual',
        'Onicofagia',
        'Queilofagia',
        'Respiracion Oral',
        'Succion Labial',
        'Succion Digital',
        'Ninguno',
        'VIH',
        'VPH',
        'I. Epstein Barr',
        'Ninguno',
        'Colon y Recto',
        'Endometrio',
        'Gástrico',
        'Hígado',
        'Leucemia',
        'Linfoma No Hodgkin',
        'Mama',
        'Melanoma',
        'Ovario',
        'Páncreas',
        'Próstata',
        'Pulmón',
        'Riñón',
        'Testículo',
        'Tiroides',
        'Vejiga',
        'Ninguno',
        'Afectacion Dental',
        'Lesiones Orales',
        'Ubicacion',
        'Enfermedad Periodontal',
        'Organo Dental Fracturado',
        'Protesis Fija Desajustada',
        'Protesis Fija Fracturada',
        'Protesis Removible Desajustada',
        'Protesis Removible Fracturada',
        'Maxilar Superior Derecho',
        'Maxilar Superior Izquierdo',
        'Maxilar Inferior Derecho',
        'Maxilar Inferior Izquierdo',
        'Existe Lesion Oral',
        'Tipo de Tejido',
        'Melatónica',
        'Nódulo',
        'Pigmentada',
        'Tumor',
        'Ulcera',
        'Verruga',
        'Vesicula',
        'Coloración',
        'Derecha',
        'Izquierda',
        'Ninguno',
        'Cuerpo Mandibular',
        'Encia Superior',
        'Labios',
        'Lengua',
        'Encia Inferior',
        'Maxilar Posterior',
        'Mucosa Bucal',
        'Paladar Blando',
        'Paladar Duro',
        'Piso',
        'Premaxilar',
        'Proceso Alveolar',
        'Rama Mandibular',
        'Trigono Retromolar',
        'Labios',
        'Lengua',
        'Paladar Blando',
        'Paladar Duro',
        'Encia superior',
        'Encia inferior',
        'Está relacionado con un órgano dental',
        'Maxilar Superior Derecho',
        'Maxilar Inferior Derecho',
        'Ninguno',
        'Cuerpo Mandibular',
        'Encia Superior',
        'Labios',
        'Lengua',
        'Encia Inferior',
        'Maxilar Posterior',
        'Mucosa Bucal',
        'Paladar Blando',
        'Paladar Duro',
        'Piso',
        'Premaxilar',
        'Proceso Alveolar',
        'Rama Mandibular',
        'Trigono Retromolar',
        'Labios',
        'Lengua',
        'Paladar Blando',
        'Paladar Duro',
        'Encia superior',
        'Encia inferior',
        'Está relacionado con un órgano dental',
        'Maxilar Superior Izquierdo',
        'Maxilar Inferior Izquierdo',
        'Fecha primer atención',
        'Etapa clinica',
        'Tamaño Tumoral',
        'Compromiso Linfático Nodal',
        'Metástasis',
        'Sin registro',
        'Hepatica',
        'Pulmonar',
        'Cerebrales',
        'Óseas',
        'Cervicouterino',
        'Mediastino',
        'Suprarrenal',
        'Tiroidea',
        'Ganglionar',
        'Estadío Clinico',
        'Calidad de vida ECOG',
        'Dx Histopatologico',
        'Fecha de Reporte',
        'Tipo',
        'Maligno',
        'Se realizó PDL',
        'PDL',
        'Quimioterapia',
        '5Fluororacilo',
        'Beuacizumab',
        'Capecitabina',
        'Carboplatino',
        'Cetuximab',
        'Ciclofosfamida',
        'Cisplatino',
        'Docetaxel',
        'Etoposido',
        'Herceptin',
        'Paclitaxel',
        'Pertuzumab',
        'Trastuzumab',
        'Quirúrgico',
        'Tipo de Cirugía',
        'Lugar DRMC',
        'Tipo DRMC',
        'Nivel Cervical',
        'Maxilectomia de Infraestructura',
        'Reconstrucción',
        'Ninguno',
        'Colgajo Microvascular',
        'Injerto Oseo Autologo o Cadaverico',
        'Material de Osteosintesis',
        'Rotacion de Colgajo',
        'Toma y Aplicacion de Injerto',
        'Radioterapia',
        'Fecha',
        'Momento RT',
        'Dosis',
        'Fracciones',
        'No. Fracciones',
        'Técnica',
        'Caries',
        'Disgeusia',
        'Dolor',
        'Fractura',
        'Infeccion',
        'Hemorragias',
        'Mucositis',
        'Osteonecrosis',
        'Parestesia',
        'Propios De La Anestesia Local',
        'Radiodermitis',
        'Reaccion Alergica',
        'Trismus',
        'Xerostomia',
        'Ninguno',
        'Cavidad Oral',
        'Cocleas',
        'Cristalinos',
        'Esofago',
        'Labios',
        'Laringe',
        'Mandibula',
        'Medula',
        'Nervio Óptico',
        'Ojos',
        'Pared Faringea Posterior',
        'Parotidas',
        'Sublinguales',
        'Tallo',
        'Tiroides',
        'Dosis Máx Cavidad Oral',
        'Dosis Prom Cavidad Oral',
        'Dosis Máx Cocleas',
        'Dosis Prom Cocleas',
        'Dosis Máx Cristalinos',
        'Dosis Prom Cristalinos',
        'Dosis Máx Esofago',
        'Dosis Prom Esofago',
        'Dosis Máx Labios',
        'Dosis Prom Labios',
        'Dosis Máx Laringe',
        'Dosis Prom Laringe',
        'Dosis Máx Mandibula',
        'Dosis Prom Mandibula',
        'Dosis Máx Medula',
        'Dosis Prom Medula',
        'Dosis Máx Nervio Óptico',
        'Dosis Prom Nervio Óptico',
        'Dosis Máx Ojos',
        'Dosis Prom Ojos',
        'Dosis Máx Pared Faringea Posterior',
        'Dosis Prom Pared Faringea Posterior',
        'Dosis Máx Parotidas',
        'Dosis Prom Parotidas',
        'Dosis Máx Sublinguales',
        'Dosis Prom Sublinguales',
        'Dosis Máx Tallo',
        'Dosis Prom Tallo',
        'Dosis Máx Tiroides',
        'Dosis Prom Tiroides',
        'Caso Exitoso',
        'Respuesta al Tratamiento',
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


    $sheet->getStyle('A1:IR1')->applyFromArray($styleArray);

    // Agregar los datos desde la base de datos
    $row = 2;
    while ($fila = mysqli_fetch_assoc($result)) {
        $sheet->fromArray([$fila], null, 'A' . $row);
        $row++;
    }

    // Crear un objeto Writer para guardar el archivo Excel
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Definir la ubicación del archivo Excel
    $excel_file = 'Datos CB.xlsx';

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