<?php
require (__DIR__ . '/../php/models/database.model.php');
include (__DIR__ . "/../php/dbconfig.php");

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$nihss = "SELECT NIHSS_escala,COUNT(NIHSS_escala) AS conteo FROM 
    (SELECT NIHSS_escala FROM escalas UNION ALL SELECT NIHSS_escala FROM seguimiento) 
    AS combined GROUP BY NIHSS_escala";
$all_nihss = $connectionDB->getRows($nihss);


// Convertir los resultados en un array asociativo con conteo como entero
$result_nihss = [];
foreach ($all_nihss as $row) {
    $result_nihss[] = [
        'NIHSS_escala' => $row['NIHSS_escala'],
        'conteo' => intval($row['conteo'])
    ];
}

$bart = "SELECT BARTHEL_escala,COUNT(BARTHEL_escala) AS conteo FROM 
    (SELECT BARTHEL_escala FROM escalas UNION ALL SELECT BARTHEL_escala FROM seguimiento) 
    AS combined GROUP BY BARTHEL_escala";
$all_bart = $connectionDB->getRows($bart);


// Convertir los resultados en un array asociativo con conteo como entero
$result_bart = [];
foreach ($all_bart as $row) {
    $result_bart[] = [
        'BARTHEL_escala' => $row['BARTHEL_escala'],
        'conteo' => intval($row['conteo'])
    ];
}

$fim = "SELECT FIM_escala,COUNT(FIM_escala) AS conteo FROM 
    (SELECT FIM_escala FROM escalas UNION ALL SELECT FIM_escala FROM seguimiento) 
    AS combined GROUP BY FIM_escala";
$all_fim = $connectionDB->getRows($fim);


// Convertir los resultados en un array asociativo con conteo como entero
$result_fim = [];
foreach ($all_fim as $row) {
    $result_fim[] = [
        'FIM_escala' => $row['FIM_escala'],
        'conteo' => intval($row['conteo'])
    ];
}

$rank = "SELECT RANKIN_escala,COUNT(RANKIN_escala) AS conteo FROM 
    (SELECT RANKIN_escala FROM escalas UNION ALL SELECT RANKIN_escala FROM seguimiento) 
    AS combined GROUP BY RANKIN_escala";
$all_rank = $connectionDB->getRows($rank);


// Convertir los resultados en un array asociativo con conteo como entero
$result_rank = [];
foreach ($all_rank as $row) {
    $result_rank[] = [
        'RANKIN_escala' => $row['RANKIN_escala'],
        'conteo' => intval($row['conteo'])
    ];
}

$marcha = "SELECT MARCHA_escala,COUNT(MARCHA_escala) AS conteo FROM 
    (SELECT MARCHA_escala FROM escalas UNION ALL SELECT MARCHA_escala FROM seguimiento) 
    AS combined GROUP BY MARCHA_escala";
$all_marcha = $connectionDB->getRows($marcha);


// Convertir los resultados en un array asociativo con conteo como entero
$result_marcha = [];
foreach ($all_marcha as $row) {
    $result_marcha[] = [
        'MARCHA_escala' => $row['MARCHA_escala'],
        'conteo' => intval($row['conteo'])
    ];
}

$data = array(
    $result_nihss,
    $result_bart,
    $result_fim,
    $result_rank,
    $result_marcha
);

echo json_encode($data);


// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     // Obtener las variables de la solicitud AJAX
//     $empleado = isset($_GET['empleado']) ? $_GET['empleado'] : '';
//     $terapia_fisica = isset($_GET['terapia_fisica']) ? $_GET['terapia_fisica'] : '';
//     $terapia_ocupacional = isset($_GET['terapia_ocupacional']) ? $_GET['terapia_ocupacional'] : '';
//     $terapia_lenguaje = isset($_GET['terapia_lenguaje']) ? $_GET['terapia_lenguaje'] : '';
//     $fecha_1 = isset($_GET['fecha_1']) ? $_GET['fecha_1'] : '';
//     $fecha_2 = isset($_GET['fecha_2']) ? $_GET['fecha_2'] : '';

//     // Inicializar un arreglo para contener las condiciones de la consulta
//     $conditions = [];

//     // Agregar condiciones a la consulta solo si las variables tienen datos
//     if ($empleado !== '') {
//         $conditions[] = "terapeuta = '$empleado'";
//     }
//     if ($terapia_fisica !== '') {
//         $conditions[] = "t_fisica = '$terapia_fisica'";
//     }
//     if ($terapia_ocupacional !== '') {
//         $conditions[] = "t_ocupacional = '$terapia_ocupacional'";
//     }
//     if ($terapia_lenguaje !== '') {
//         $conditions[] = "t_lenguaje = '$terapia_lenguaje'";
//     }
//     if ($fecha_1 !== '' && $fecha_2 !== '') {
//         $conditions[] = "fecha BETWEEN '$fecha_1' AND '$fecha_2'";
//     }
//     // Construir la parte WHERE de la consulta SQL
//     $whereClause = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';



//     // Consulta para contar todos los pacientes
//     $query_all_pacientes = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica $whereClause";
//     $all_Pacientes = $connectionDB->getRows($query_all_pacientes);

//     // Consulta para contar todos los pacientes completos
//     $query_all_full_pacientes = "SELECT COUNT(id_paciente) AS conteo FROM estadistica $whereClause";
//     $all_full_Pacientes = $connectionDB->getRows($query_all_full_pacientes);

//     // Consulta para contar el tipo de pacientes
//     $query_tipo_pacientes = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_pacientes .= " AND tipo_paciente <> ''";
//     }
//     $query_tipo_pacientes .= " GROUP BY tipo_paciente";
//     $tipo_pacientes = $connectionDB->getRows($query_tipo_pacientes);


//     // Consulta para contar el tipo de consulta
//     $query_tipo_consulta = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica $whereClause GROUP BY tipo_consulta";
//     $tipo_consulta = $connectionDB->getRows($query_tipo_consulta);

//     // Consulta para contar el tipo de terapia
//     $query_tipo_terapia = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica $whereClause GROUP BY tipo_terapias";
//     $tipo_terapia = $connectionDB->getRows($query_tipo_terapia);


//     $global_data = array();

//     $global_data['Turno'] = 'Global';

//     if (!empty($all_Pacientes)) {
//         $global_data['pacientes'] = intval($all_Pacientes[0]['conteo']);
//     }

//     if (!empty($all_full_Pacientes)) {
//         $global_data['sesiones'] = intval($all_full_Pacientes[0]['conteo']);
//     }

//     foreach ($tipo_pacientes as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $global_data[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_consulta as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $global_data[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $global_data[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }

//     $query_all_pacientes_m = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_all_pacientes_m .= " AND turno='Matutino'";
//     }
//     $all_Pacientes_m = $connectionDB->getRows($query_all_pacientes_m);

//     $query_all_full_pacientes_m = "SELECT COUNT(id_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_all_full_pacientes_m .= " AND turno='Matutino'";
//     }
//     $all_full_Pacientes_m = $connectionDB->getRows($query_all_full_pacientes_m);

//     $query_tipo_pacientes_m = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_pacientes_m .= " AND tipo_paciente <> '' AND turno='Matutino' GROUP BY tipo_paciente;";
//     }
//     $tipo_pacientes_m = $connectionDB->getRows($query_tipo_pacientes_m);

//     $query_tipo_consulta_m = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_consulta_m .= " AND turno='Matutino' GROUP BY tipo_consulta;";
//     }
//     $tipo_consulta_m = $connectionDB->getRows($query_tipo_consulta_m);

//     $query_tipo_terapia_m = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_terapia_m .= " AND turno='Matutino' GROUP BY tipo_terapias;";
//     }
//     $tipo_terapia_m = $connectionDB->getRows($query_tipo_terapia_m);

//     $data_m = array();

//     $data_m['Turno'] = 'Matutino';


//     if (!empty($all_Pacientes_m)) {
//         $data_m['pacientes'] = intval($all_Pacientes_m[0]['conteo']);
//     }

//     foreach ($tipo_pacientes_m as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $data_m[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }
//     if (!empty($all_full_Pacientes_m)) {
//         $data_m['sesiones'] = intval($all_full_Pacientes_m[0]['conteo']);
//     }

//     foreach ($tipo_consulta_m as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $data_m[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia_m as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $data_m[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }


//     $query_all_pacientes_v = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_all_pacientes_v .= " AND turno='Vespertino'";
//     }
//     $all_Pacientes_v = $connectionDB->getRows($query_all_pacientes_v);

//     $query_all_full_pacientes_v = "SELECT COUNT(id_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_all_full_pacientes_v .= " AND turno='Vespertino'";
//     }
//     $all_full_Pacientes_v = $connectionDB->getRows($query_all_full_pacientes_v);

//     $query_tipo_pacientes_v = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_pacientes_v .= " AND tipo_paciente <> '' AND turno='Vespertino' GROUP BY tipo_paciente;";
//     }
//     $tipo_pacientes_v = $connectionDB->getRows($query_tipo_pacientes_v);

//     $query_tipo_consulta_v = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_consulta_v .= " AND turno='Vespertino' GROUP BY tipo_consulta;";
//     }
//     $tipo_consulta_v = $connectionDB->getRows($query_tipo_consulta_v);

//     $query_tipo_terapia_v = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_terapia_v .= " AND turno='Vespertino' GROUP BY tipo_terapias;";
//     }
//     $tipo_terapia_v = $connectionDB->getRows($query_tipo_terapia_v);

//     $data_v = array();

//     $data_v['Turno'] = 'Vespertino';


//     if (!empty($all_Pacientes_v)) {
//         $data_v['pacientes'] = intval($all_Pacientes_v[0]['conteo']);
//     }


//     foreach ($tipo_pacientes_v as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $data_v[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }
//     if (!empty($all_full_Pacientes_v)) {
//         $data_v['sesiones'] = intval($all_full_Pacientes_v[0]['conteo']);
//     }

//     foreach ($tipo_consulta_v as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $data_v[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia_v as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $data_v[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }


//     $query_all_pacientes_j = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_all_pacientes_j .= " AND turno='Jornada'";
//     }
//     $all_Pacientes_j = $connectionDB->getRows($query_all_pacientes_j);

//     $query_all_full_pacientes_j = "SELECT COUNT(id_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_all_full_pacientes_j .= " AND turno='Jornada'";
//     }
//     $all_full_Pacientes_j = $connectionDB->getRows($query_all_full_pacientes_j);

//     $query_tipo_pacientes_j = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_pacientes_j .= " AND tipo_paciente <> '' and turno='Jornada' GROUP BY tipo_paciente;";
//     }
//     $tipo_pacientes_j = $connectionDB->getRows($query_tipo_pacientes_j);

//     $query_tipo_consulta_j = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_consulta_j .= " AND turno='Jornada' GROUP BY tipo_consulta;";
//     }
//     $tipo_consulta_j = $connectionDB->getRows($query_tipo_consulta_j);

//     $query_tipo_terapia_j = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica $whereClause";
//     if (!empty($whereClause)) {
//         $query_tipo_terapia_j .= " AND turno='Jornada' GROUP BY tipo_terapias;";
//     }
//     $tipo_terapia_j = $connectionDB->getRows($query_tipo_terapia_j);

//     $data_j = array();

//     $data_j['Turno'] = 'Jornada';


//     if (!empty($all_Pacientes_j)) {
//         $data_j['pacientes'] = intval($all_Pacientes_j[0]['conteo']);
//     }


//     foreach ($tipo_pacientes_j as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $data_j[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }
//     if (!empty($all_full_Pacientes_j)) {
//         $data_j['sesiones'] = intval($all_full_Pacientes_j[0]['conteo']);
//     }

//     foreach ($tipo_consulta_j as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $data_j[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia_j as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $data_j[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }

//     $data = array(
//         $global_data,
//         $data_m,
//         $data_v,
//         $data_j
//     );

//     echo json_encode($data);



// } else {
//     $query_all_pacientes = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica;";
//     $all_Pacientes = $connectionDB->getRows($query_all_pacientes);

//     $query_all_full_pacientes = "SELECT COUNT(id_paciente) AS conteo FROM estadistica;";
//     $all_full_Pacientes = $connectionDB->getRows($query_all_full_pacientes);

//     $query_tipo_pacientes = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica WHERE tipo_paciente <> '' GROUP BY tipo_paciente;";
//     $tipo_pacientes = $connectionDB->getRows($query_tipo_pacientes);

//     $query_tipo_consulta = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica GROUP BY tipo_consulta;";
//     $tipo_consulta = $connectionDB->getRows($query_tipo_consulta);

//     $query_tipo_terapia = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica GROUP BY tipo_terapias;";
//     $tipo_terapia = $connectionDB->getRows($query_tipo_terapia);

//     $global_data = array();

//     $global_data['Turno'] = 'Global';

//     if (!empty($all_Pacientes)) {
//         $global_data['pacientes'] = intval($all_Pacientes[0]['conteo']);
//     }

//     if (!empty($all_full_Pacientes)) {
//         $global_data['sesiones'] = intval($all_full_Pacientes[0]['conteo']);
//     }

//     foreach ($tipo_pacientes as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $global_data[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_consulta as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $global_data[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $global_data[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }

//     $query_all_pacientes_m = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica WHERE turno='Matutino'";
//     $all_Pacientes_m = $connectionDB->getRows($query_all_pacientes_m);

//     $query_all_full_pacientes_m = "SELECT COUNT(id_paciente) AS conteo FROM estadistica WHERE turno='Matutino'";
//     $all_full_Pacientes_m = $connectionDB->getRows($query_all_full_pacientes_m);

//     $query_tipo_pacientes_m = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica WHERE tipo_paciente <> '' and turno='Matutino' GROUP BY tipo_paciente;";
//     $tipo_pacientes_m = $connectionDB->getRows($query_tipo_pacientes_m);

//     $query_tipo_consulta_m = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica WHERE turno='Matutino' GROUP BY tipo_consulta;";
//     $tipo_consulta_m = $connectionDB->getRows($query_tipo_consulta_m);

//     $query_tipo_terapia_m = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica WHERE turno='Matutino' GROUP BY tipo_terapias;";
//     $tipo_terapia_m = $connectionDB->getRows($query_tipo_terapia_m);

//     $data_m = array();

//     $data_m['Turno'] = 'Matutino';


//     if (!empty($all_Pacientes_m)) {
//         $data_m['pacientes'] = intval($all_Pacientes_m[0]['conteo']);
//     }

//     foreach ($tipo_pacientes_m as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $data_m[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }
//     if (!empty($all_full_Pacientes_m)) {
//         $data_m['sesiones'] = intval($all_full_Pacientes_m[0]['conteo']);
//     }

//     foreach ($tipo_consulta_m as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $data_m[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia_m as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $data_m[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }


//     $query_all_pacientes_v = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica WHERE turno='Vespertino'";
//     $all_Pacientes_v = $connectionDB->getRows($query_all_pacientes_v);

//     $query_all_full_pacientes_v = "SELECT COUNT(id_paciente) AS conteo FROM estadistica WHERE turno='Vespertino'";
//     $all_full_Pacientes_v = $connectionDB->getRows($query_all_full_pacientes_v);

//     $query_tipo_pacientes_v = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica WHERE tipo_paciente <> '' and turno='Vespertino' GROUP BY tipo_paciente;";
//     $tipo_pacientes_v = $connectionDB->getRows($query_tipo_pacientes_v);

//     $query_tipo_consulta_v = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica WHERE turno='Vespertino' GROUP BY tipo_consulta;";
//     $tipo_consulta_v = $connectionDB->getRows($query_tipo_consulta_v);

//     $query_tipo_terapia_v = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica WHERE turno='Vespertino' GROUP BY tipo_terapias;";
//     $tipo_terapia_v = $connectionDB->getRows($query_tipo_terapia_v);

//     $data_v = array();

//     $data_v['Turno'] = 'Vespertino';


//     if (!empty($all_Pacientes_v)) {
//         $data_v['pacientes'] = intval($all_Pacientes_v[0]['conteo']);
//     }


//     foreach ($tipo_pacientes_v as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $data_v[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }
//     if (!empty($all_full_Pacientes_v)) {
//         $data_v['sesiones'] = intval($all_full_Pacientes_v[0]['conteo']);
//     }

//     foreach ($tipo_consulta_v as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $data_v[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia_v as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $data_v[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }


//     $query_all_pacientes_j = "SELECT COUNT(DISTINCT id_paciente) AS conteo FROM estadistica WHERE turno='Jornada'";
//     $all_Pacientes_j = $connectionDB->getRows($query_all_pacientes_j);

//     $query_all_full_pacientes_j = "SELECT COUNT(id_paciente) AS conteo FROM estadistica WHERE turno='Jornada'";
//     $all_full_Pacientes_j = $connectionDB->getRows($query_all_full_pacientes_j);

//     $query_tipo_pacientes_j = "SELECT tipo_paciente, COUNT(tipo_paciente) AS conteo FROM estadistica WHERE tipo_paciente <> '' and turno='Jornada' GROUP BY tipo_paciente;";
//     $tipo_pacientes_j = $connectionDB->getRows($query_tipo_pacientes_j);

//     $query_tipo_consulta_j = "SELECT tipo_consulta, COUNT(*) AS conteo FROM estadistica WHERE turno='Jornada' GROUP BY tipo_consulta;";
//     $tipo_consulta_j = $connectionDB->getRows($query_tipo_consulta_j);

//     $query_tipo_terapia_j = "SELECT tipo_terapias, COUNT(*) AS conteo FROM estadistica WHERE turno='Jornada' GROUP BY tipo_terapias;";
//     $tipo_terapia_j = $connectionDB->getRows($query_tipo_terapia_j);

//     $data_j = array();

//     $data_j['Turno'] = 'Jornada';


//     if (!empty($all_Pacientes_j)) {
//         $data_j['pacientes'] = intval($all_Pacientes_j[0]['conteo']);
//     }


//     foreach ($tipo_pacientes_j as $data) {
//         if (!empty($data['tipo_paciente'])) {
//             $data_j[$data['tipo_paciente']] = intval($data['conteo']);
//         }
//     }
//     if (!empty($all_full_Pacientes_j)) {
//         $data_j['sesiones'] = intval($all_full_Pacientes_j[0]['conteo']);
//     }

//     foreach ($tipo_consulta_j as $data) {
//         if (!empty($data['tipo_consulta'])) {
//             $data_j[$data['tipo_consulta']] = intval($data['conteo']);
//         }
//     }

//     foreach ($tipo_terapia_j as $data) {
//         if (!empty($data['tipo_terapias'])) {
//             $data_j[$data['tipo_terapias']] = intval($data['conteo']);
//         }
//     }

//     $data = array(
//         $global_data,
//         $data_m,
//         $data_v,
//         $data_j
//     );

//     echo json_encode($data);
// }

?>