<?php
include (__DIR__ . "/../php/dbconfig_ER.php");
require (__DIR__ . '/../php/models/database.model.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Obtener las variables de la solicitud AJAX
    $empleado = isset($_GET['empleado']) ? $_GET['empleado'] : '';
    $terapia_fisica = isset($_GET['terapia_fisica']) ? $_GET['terapia_fisica'] : '';
    $terapia_ocupacional = isset($_GET['terapia_ocupacional']) ? $_GET['terapia_ocupacional'] : '';
    $terapia_lenguaje = isset($_GET['terapia_lenguaje']) ? $_GET['terapia_lenguaje'] : '';
    $fecha_1 = !empty($_GET['fecha_1']) ? $_GET['fecha_1'] : '2020-01-30';
    $fecha_2 = !empty($_GET['fecha_2']) ? $_GET['fecha_2'] : '2055-12-30';
    
    $sesiones_num = '';
    $primera_vez = '';
    $subsecuente = '';
    $terapias_ambulatorias = '';
    $terapias_hospitalizacion = '';

    if (!empty($terapia_fisica)) {
        $sesiones_num .= 'p.sesiones_num_' . $terapia_fisica;
    }

    if (!empty($terapia_ocupacional)) {
        if (!empty($sesiones_num)) {
            $sesiones_num .= ' + ';
        }
        $sesiones_num .= 'p.sesiones_num_' . $terapia_ocupacional;
    }

    if (!empty($terapia_lenguaje)) {
        if (!empty($sesiones_num)) {
            $sesiones_num .= ' + ';
        }
        $sesiones_num .= 'p.sesiones_num_' . $terapia_lenguaje;
    }

    if (empty($sesiones_num)) {
        $sesiones_num = 'p.sesiones_num_terapia_fisica + p.sesiones_num_terapia_ocupacional + p.sesiones_num_terapia_lenguaje';
    }



    if (!empty($terapia_fisica)) {
        $primera_vez .= 'p.primera_vez_' . $terapia_fisica;
    }

    if (!empty($terapia_ocupacional)) {
        if (!empty($primera_vez)) {
            $primera_vez .= ' + ';
        }
        $primera_vez .= 'p.primera_vez_' . $terapia_ocupacional;
    }

    if (!empty($terapia_lenguaje)) {
        if (!empty($primera_vez)) {
            $primera_vez .= ' + ';
        }
        $primera_vez .= 'p.primera_vez_' . $terapia_lenguaje;
    }

    if (empty($primera_vez)) {
        $primera_vez = 'p.primera_vez_terapia_fisica + p.primera_vez_terapia_ocupacional + p.primera_vez_terapia_lenguaje';
    }

    if (!empty($terapia_fisica)) {
        $subsecuente .= 'p.subsecuente_' . $terapia_fisica;
    }

    if (!empty($terapia_ocupacional)) {
        if (!empty($subsecuente)) {
            $subsecuente .= ' + ';
        }
        $subsecuente .= 'p.subsecuente_' . $terapia_ocupacional;
    }

    if (!empty($terapia_lenguaje)) {
        if (!empty($subsecuente)) {
            $subsecuente .= ' + ';
        }
        $subsecuente .= 'p.subsecuente_' . $terapia_lenguaje;
    }

    if (empty($subsecuente)) {
        $subsecuente = 'p.subsecuente_terapia_fisica + p.subsecuente_terapia_ocupacional + p.subsecuente_terapia_lenguaje';
    }




    if (!empty($terapia_fisica)) {
        $terapias_ambulatorias .= 'p.terapias_ambulatorias_' . $terapia_fisica;
    }

    if (!empty($terapia_ocupacional)) {
        if (!empty($terapias_ambulatorias)) {
            $terapias_ambulatorias .= ' + ';
        }
        $terapias_ambulatorias .= 'p.terapias_ambulatorias_' . $terapia_ocupacional;
    }

    if (!empty($terapia_lenguaje)) {
        if (!empty($terapias_ambulatorias)) {
            $terapias_ambulatorias .= ' + ';
        }
        $terapias_ambulatorias .= 'p.terapias_ambulatorias_' . $terapia_lenguaje;
    }

    if (empty($terapias_ambulatorias)) {
        $terapias_ambulatorias = 'p.terapias_ambulatorias_terapia_fisica + p.terapias_ambulatorias_terapia_ocupacional + p.terapias_ambulatorias_terapia_lenguaje';
    }



    if (!empty($terapia_fisica)) {
        $terapias_hospitalizacion .= 'p.terapias_hospitalizacion_' . $terapia_fisica;
    }

    if (!empty($terapia_ocupacional)) {
        if (!empty($terapias_hospitalizacion)) {
            $terapias_hospitalizacion .= ' + ';
        }
        $terapias_hospitalizacion .= 'p.terapias_hospitalizacion_' . $terapia_ocupacional;
    }

    if (!empty($terapia_lenguaje)) {
        if (!empty($terapias_hospitalizacion)) {
            $terapias_hospitalizacion .= ' + ';
        }
        $terapias_hospitalizacion .= 'p.terapias_hospitalizacion_' . $terapia_lenguaje;
    }

    if (empty($terapias_hospitalizacion)) {
        $terapias_hospitalizacion = 'p.terapias_hospitalizacion_terapia_fisica + p.terapias_hospitalizacion_terapia_ocupacional + p.terapias_hospitalizacion_terapia_lenguaje';
    }

    // Inicializar un arreglo para contener las condiciones de la consulta
    $conditions = [];

    // Agregar condiciones a la consulta solo si las variables tienen datos
// Agregar condiciones a la consulta solo si las variables tienen datos
    if (!empty($empleado)) {
        $conditions[] = "datos_paciente.nombre_terapeuta = '$empleado'";
    }
    if (!empty($fecha_1)) {
        $conditions[] = "datos_paciente.fecha_inicio >= '$fecha_1'";
    }
    if (!empty($fecha_2)) {
        $conditions[] = "datos_paciente.fecha_fin <= '$fecha_2'";
    }
    // Construir la parte WHERE de la consulta SQL
    $whereClause = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';


    $consulta1_g = "SELECT 
        tipos.tipo_paciente,
        COALESCE(COUNT(filtered_data.id_paciente), 0) AS total
    FROM 
        (SELECT 'Adulto' AS tipo_paciente UNION SELECT 'Pediatrico') AS tipos
    LEFT JOIN 
        (SELECT 
            datos_paciente.id_paciente, 
            datos_paciente.tipo_paciente
        FROM 
            datos_paciente
        LEFT JOIN 
            procedimientos ON datos_paciente.id_paciente = procedimientos.id_paciente 
            $whereClause
        ) AS filtered_data ON tipos.tipo_paciente = filtered_data.tipo_paciente
    GROUP BY 
        tipos.tipo_paciente";

    $consulta2_g = "SELECT 'Total', COUNT(*) AS total 
    FROM procedimientos 
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = procedimientos.id_paciente $whereClause";

    $consulta3_g = "SELECT 'Sesiones', SUM($sesiones_num) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause";

    $consulta4_g = "SELECT 'primera vez', SUM($primera_vez) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause";

    $consulta5_g = "SELECT 'subsecuente', SUM($subsecuente) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause";

    $consulta6_g = "SELECT 'ambulatoria', SUM($terapias_ambulatorias) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause";

    $consulta7_g = "SELECT 'hospitalizacion', SUM($terapias_hospitalizacion) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause";


    $results_g = [];

    // Ejecutar cada consulta y agregar los resultados al array
    $queries_g = [$consulta1_g, $consulta2_g, $consulta3_g, $consulta4_g, $consulta5_g, $consulta6_g, $consulta7_g];

    foreach ($queries_g as $query) {
        $result = $connectionDB->getRows($query);
        foreach ($result as $row) {
            $results_g[] = $row;
        }
    }



    $consulta1_m = "SELECT 
        tipos.tipo_paciente,
        COALESCE(COUNT(filtered_data.id_paciente), 0) AS total
    FROM 
        (SELECT 'Adulto' AS tipo_paciente UNION SELECT 'Pediatrico') AS tipos
    LEFT JOIN 
        (SELECT 
            datos_paciente.id_paciente, 
            datos_paciente.tipo_paciente
        FROM 
            datos_paciente
        LEFT JOIN 
            procedimientos ON datos_paciente.id_paciente = procedimientos.id_paciente 
            $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'
        ) AS filtered_data ON tipos.tipo_paciente = filtered_data.tipo_paciente
    GROUP BY 
        tipos.tipo_paciente";

    $consulta2_m = "SELECT 'Total', COUNT(*) AS total 
    FROM procedimientos 
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = procedimientos.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'";

    $consulta3_m = "SELECT 'Sesiones', SUM($sesiones_num) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'";

    $consulta4_m = "SELECT 'primera vez', SUM($primera_vez) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'";

    $consulta5_m = "SELECT 'subsecuente', SUM($subsecuente) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'";

    $consulta6_m = "SELECT 'ambulatoria', SUM($terapias_ambulatorias) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'";

    $consulta7_m = "SELECT 'hospitalizacion', SUM($terapias_hospitalizacion) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Matutino'";


    $results_m = [];

    // Ejecutar cada consulta y agregar los resultados al array
    $queries_m = [$consulta1_m, $consulta2_m, $consulta3_m, $consulta4_m, $consulta5_m, $consulta6_m, $consulta7_m];

    foreach ($queries_m as $query) {
        $result = $connectionDB->getRows($query);
        foreach ($result as $row) {
            $results_m[] = $row;
        }
    }





    $consulta1_v = "SELECT 
        tipos.tipo_paciente,
        COALESCE(COUNT(filtered_data.id_paciente), 0) AS total
    FROM 
        (SELECT 'Adulto' AS tipo_paciente UNION SELECT 'Pediatrico') AS tipos
    LEFT JOIN 
        (SELECT 
            datos_paciente.id_paciente, 
            datos_paciente.tipo_paciente
        FROM 
            datos_paciente
        LEFT JOIN 
            procedimientos ON datos_paciente.id_paciente = procedimientos.id_paciente 
            $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'
        ) AS filtered_data ON tipos.tipo_paciente = filtered_data.tipo_paciente
    GROUP BY 
        tipos.tipo_paciente";

    $consulta2_v = "SELECT 'Total', COUNT(*) AS total 
    FROM procedimientos 
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = procedimientos.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'";

    $consulta3_v = "SELECT 'Sesiones', SUM($sesiones_num) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'";

    $consulta4_v = "SELECT 'primera vez', SUM($primera_vez) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'";

    $consulta5_v = "SELECT 'subsecuente', SUM($subsecuente) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'";

    $consulta6_v = "SELECT 'ambulatoria', SUM($terapias_ambulatorias) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'";

    $consulta7_v = "SELECT 'hospitalizacion', SUM($terapias_hospitalizacion) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Vespertino'";


    $results_v = [];

    // Ejecutar cada consulta y agregar los resultados al array
    $queries_v = [$consulta1_v, $consulta2_v, $consulta3_v, $consulta4_v, $consulta5_v, $consulta6_v, $consulta7_v];

    foreach ($queries_v as $query) {
        $result = $connectionDB->getRows($query);
        foreach ($result as $row) {
            $results_v[] = $row;
        }
    }


    $consulta1_j = "SELECT 
        tipos.tipo_paciente,
        COALESCE(COUNT(filtered_data.id_paciente), 0) AS total
    FROM 
        (SELECT 'Adulto' AS tipo_paciente UNION SELECT 'Pediatrico') AS tipos
    LEFT JOIN 
    (SELECT 
        datos_paciente.id_paciente, 
        datos_paciente.tipo_paciente
    FROM 
        datos_paciente
    LEFT JOIN 
        procedimientos ON datos_paciente.id_paciente = procedimientos.id_paciente 
        $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'
        ) AS filtered_data ON tipos.tipo_paciente = filtered_data.tipo_paciente
    GROUP BY 
    tipos.tipo_paciente";

    $consulta2_j = "SELECT 'Total', COUNT(*) AS total 
    FROM procedimientos 
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = procedimientos.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'";

    $consulta3_j = "SELECT 'Sesiones', SUM($sesiones_num) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'";

    $consulta4_j = "SELECT 'primera vez', SUM($primera_vez) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'";

    $consulta5_j = "SELECT 'subsecuente', SUM($subsecuente) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'";

    $consulta6_j = "SELECT 'ambulatoria', SUM($terapias_ambulatorias) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'";

    $consulta7_j = "SELECT 'hospitalizacion', SUM($terapias_hospitalizacion) AS total
    FROM procedimientos p
    INNER JOIN datos_paciente ON datos_paciente.id_paciente = p.id_paciente $whereClause AND datos_paciente.Turno_terapeuta = 'Jornada'";


    $results_j = [];

    // Ejecutar cada consulta y agregar los resultados al array
    $queries_j = [$consulta1_j, $consulta2_j, $consulta3_j, $consulta4_j, $consulta5_j, $consulta6_j, $consulta7_j];

    foreach ($queries_j as $query) {
        $result = $connectionDB->getRows($query);
        foreach ($result as $row) {
            $results_j[] = $row;
        }
    }

    function getTotal($results, $index)
    {
        return isset($results[$index]) && !is_null($results[$index]['total']) ? intval($results[$index]['total']) : 0;
    }

    $data_g = array();
    $data_g['Turno'] = 'Global';
    $data_g['Adulto'] = getTotal($results_g, 0);
    $data_g['Pediatrico'] = getTotal($results_g, 1);
    $data_g['Total'] = getTotal($results_g, 2);
    $data_g['Sesiones'] = getTotal($results_g, 3);
    $data_g['Primera vez'] = getTotal($results_g, 4);
    $data_g['Subsecuente'] = getTotal($results_g, 5);
    $data_g['Terapias ambulatorias'] = getTotal($results_g, 6);
    $data_g['Terapias en Hospitalización'] = getTotal($results_g, 7);

    $data_m = array();
    $data_m['Turno'] = 'Matutino';
    $data_m['Adulto'] = getTotal($results_m, 0);
    $data_m['Pediatrico'] = getTotal($results_m, 1);
    $data_m['Total'] = getTotal($results_m, 2);
    $data_m['Sesiones'] = getTotal($results_m, 3);
    $data_m['Primera vez'] = getTotal($results_m, 4);
    $data_m['Subsecuente'] = getTotal($results_m, 5);
    $data_m['Terapias ambulatorias'] = getTotal($results_m, 6);
    $data_m['Terapias en Hospitalización'] = getTotal($results_m, 7);

    $data_v = array();
    $data_v['Turno'] = 'Vespertino';
    $data_v['Adulto'] = getTotal($results_v, 0);
    $data_v['Pediatrico'] = getTotal($results_v, 1);
    $data_v['Total'] = getTotal($results_v, 2);
    $data_v['Sesiones'] = getTotal($results_v, 3);
    $data_v['Primera vez'] = getTotal($results_v, 4);
    $data_v['Subsecuente'] = getTotal($results_v, 5);
    $data_v['Terapias ambulatorias'] = getTotal($results_v, 6);
    $data_v['Terapias en Hospitalización'] = getTotal($results_v, 7);

    $data_j = array();
    $data_j['Turno'] = 'Jornada';
    $data_j['Adulto'] = getTotal($results_j, 0);
    $data_j['Pediatrico'] = getTotal($results_j, 1);
    $data_j['Total'] = getTotal($results_j, 2);
    $data_j['Sesiones'] = getTotal($results_j, 3);
    $data_j['Primera vez'] = getTotal($results_j, 4);
    $data_j['Subsecuente'] = getTotal($results_j, 5);
    $data_j['Terapias ambulatorias'] = getTotal($results_j, 6);
    $data_j['Terapias en Hospitalización'] = getTotal($results_j, 7);



    $data = array(
        $data_g,
        $data_m,
        $data_v,
        $data_j
    );


    echo json_encode($data);


} 

?>