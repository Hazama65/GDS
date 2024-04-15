<?php
require(__DIR__ . '/../php/models/database.model.php');
include(__DIR__ . '/../php/dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$query_cuestion_1 = "SELECT pregunta_1,COUNT(*) as conteo FROM `pregunta1` GROUP BY pregunta_1";
$data_cuestion_1 = $connectionDB->getRows($query_cuestion_1);

$query_cuestion_2 = "SELECT pregunta_2,COUNT(*) as conteo FROM `pregunta2` GROUP BY pregunta_2";
$data_cuestion_2 = $connectionDB->getRows($query_cuestion_2);

$query_cuestion_3 = "SELECT pregunta_3,COUNT(*) as conteo FROM `pregunta3` GROUP BY pregunta_3";
$data_cuestion_3 = $connectionDB->getRows($query_cuestion_3);

$query_cuestion_4 = "SELECT pregunta_4,COUNT(*) as conteo FROM `pregunta4` GROUP BY pregunta_4";
$data_cuestion_4 = $connectionDB->getRows($query_cuestion_4);


$query_cuestion_1_1 = "SELECT respuesta_1, COUNT(respuesta_1) AS conteo
FROM (
    SELECT pregunta_1_a AS respuesta_1
    FROM pregunta1
    WHERE pregunta_1_a != ''
    UNION ALL
    SELECT pregunta_1_b
    FROM pregunta1
    WHERE pregunta_1_b != ''
    UNION ALL
    SELECT pregunta_1_c
    FROM pregunta1
    WHERE pregunta_1_c != ''
    UNION ALL
    SELECT pregunta_1_d
    FROM pregunta1
    WHERE pregunta_1_d != ''
    UNION ALL
    SELECT pregunta_1_e
    FROM pregunta1
    WHERE pregunta_1_e != ''
    UNION ALL
    SELECT pregunta_1_f
    FROM pregunta1
    WHERE pregunta_1_f != ''
) AS respuestas_no_vacias
GROUP BY respuesta_1;
";

$data_cuestion_1_1 = $connectionDB->getRows($query_cuestion_1_1);


$query_cuestion_2_1_a= "SELECT pregunta_2_1, COUNT(*) as conteo FROM pregunta2 
WHERE pregunta_2_1 != '' GROUP BY pregunta_2_1";

$data_cuestion_2_1_a= $connectionDB->getRows($query_cuestion_2_1_a);

$query_cuestion_2_1_b = "SELECT respuesta_2, COUNT(respuesta_2) AS conteo
FROM (
    SELECT pregunta_2_2_a AS respuesta_2
    FROM pregunta2
    WHERE pregunta_2_2_a != ''
    UNION ALL
    SELECT pregunta_2_2_b
    FROM pregunta2
    WHERE pregunta_2_2_b != ''
    UNION ALL
    SELECT pregunta_2_2_c
    FROM pregunta2
    WHERE pregunta_2_2_c != ''
    UNION ALL
    SELECT pregunta_2_2_d
    FROM pregunta2
    WHERE pregunta_2_2_d != ''
    UNION ALL
    SELECT pregunta_2_2_e
    FROM pregunta2
    WHERE pregunta_2_2_e != ''
    UNION ALL
    SELECT pregunta_2_2_f
    FROM pregunta2
    WHERE pregunta_2_2_f != ''
    UNION ALL
    SELECT pregunta_2_2_g
    FROM pregunta2
    WHERE pregunta_2_2_g != ''
    UNION ALL
    SELECT pregunta_2_2_h
    FROM pregunta2
    WHERE pregunta_2_2_h != ''
    UNION ALL
    SELECT pregunta_2_2_i
    FROM pregunta2
    WHERE pregunta_2_2_i != ''
    UNION ALL
    SELECT pregunta_2_2_j
    FROM pregunta2
    WHERE pregunta_2_2_j != ''
    UNION ALL
    SELECT pregunta_2_2_k
    FROM pregunta2
    WHERE pregunta_2_2_k != ''
    UNION ALL
    SELECT pregunta_2_2_l
    FROM pregunta2
    WHERE pregunta_2_2_l != ''
    UNION ALL
    SELECT pregunta_2_2_m
    FROM pregunta2
    WHERE pregunta_2_2_m != ''
    UNION ALL
    SELECT pregunta_2_2_n
    FROM pregunta2
    WHERE pregunta_2_2_n != ''
    UNION ALL
    SELECT pregunta_2_2_o
    FROM pregunta2
    WHERE pregunta_2_2_o != ''
    UNION ALL
    SELECT pregunta_2_2_p
    FROM pregunta2
    WHERE pregunta_2_2_p != ''
) AS respuestas_no_vacias
GROUP BY respuesta_2;
";

$data_cuestion_2_1_b = $connectionDB->getRows($query_cuestion_2_1_b);

$query_cuestion_4_1 = "SELECT respuesta_4_1, COUNT(respuesta_4_1) AS conteo
FROM (
    SELECT pregunta_4_2_a AS respuesta_4_1
    FROM pregunta4
    WHERE pregunta_4_2_a != ''
    UNION ALL
    SELECT pregunta_4_2_b
    FROM pregunta4
    WHERE pregunta_4_2_b != ''
    UNION ALL
    SELECT pregunta_4_2_c
    FROM pregunta4
    WHERE pregunta_4_2_c != ''
    UNION ALL
    SELECT pregunta_4_2_d
    FROM pregunta4
    WHERE pregunta_4_2_d != ''
    UNION ALL
    SELECT pregunta_4_2_e
    FROM pregunta4
    WHERE pregunta_4_2_e != ''
    UNION ALL
    SELECT pregunta_4_2_f
    FROM pregunta4
    WHERE pregunta_4_2_f != ''
    UNION ALL
    SELECT pregunta_4_2_g
    FROM pregunta4
    WHERE pregunta_4_2_g != ''
    UNION ALL
    SELECT pregunta_4_2_h
    FROM pregunta4
    WHERE pregunta_4_2_h != ''
    UNION ALL
    SELECT pregunta_4_2_i
    FROM pregunta4
    WHERE pregunta_4_2_i != ''
) AS respuestas_no_vacias
GROUP BY respuesta_4_1;
";

$data_cuestion_4_1 = $connectionDB->getRows($query_cuestion_4_1);

$query_cuestion_4_2 = "SELECT respuesta_4_2, COUNT(respuesta_4_2) AS conteo
FROM (
    SELECT pregunta_4_3_a AS respuesta_4_2
    FROM pregunta4
    WHERE pregunta_4_3_a != ''
    UNION ALL
    SELECT pregunta_4_3_b
    FROM pregunta4
    WHERE pregunta_4_3_b != ''
    UNION ALL
    SELECT pregunta_4_3_c
    FROM pregunta4
    WHERE pregunta_4_3_c != ''
    UNION ALL
    SELECT pregunta_4_3_d
    FROM pregunta4
    WHERE pregunta_4_3_d != ''
    UNION ALL
    SELECT pregunta_4_3_e
    FROM pregunta4
    WHERE pregunta_4_3_e != ''
    UNION ALL
    SELECT pregunta_4_3_f
    FROM pregunta4
    WHERE pregunta_4_3_f != ''
    UNION ALL
    SELECT pregunta_4_3_g
    FROM pregunta4
    WHERE pregunta_4_3_g != ''
) AS respuestas_no_vacias
GROUP BY respuesta_4_2;
";

$data_cuestion_4_2 = $connectionDB->getRows($query_cuestion_4_2);

$query_cuestion_4_3 = "SELECT respuesta_4_3, COUNT(respuesta_4_3) AS conteo
FROM (
    SELECT pregunta_4_4_a AS respuesta_4_3
    FROM pregunta4
    WHERE pregunta_4_4_a != ''
    UNION ALL
    SELECT pregunta_4_4_b
    FROM pregunta4
    WHERE pregunta_4_4_b != ''
) AS respuestas_no_vacias
GROUP BY respuesta_4_3;
";

$data_cuestion_4_3 = $connectionDB->getRows($query_cuestion_4_3);


// Combina los resultados de ambas consultas en un solo array asociativo
$response = array(
    'cuestion_1' => $data_cuestion_1,
    'cuestion_1_1' => $data_cuestion_1_1,
    'cuestion_2' => $data_cuestion_2,
    'cuestion_2_1_a' => $data_cuestion_2_1_a,
    'cuestion_2_1_b' => $data_cuestion_2_1_b,
    'cuestion_3' => $data_cuestion_3,
    'cuestion_4' => $data_cuestion_4,
    'cuestion_4_1' => $data_cuestion_4_1,
    'cuestion_4_2' => $data_cuestion_4_2,
    'cuestion_4_3' => $data_cuestion_4_3
);

// Envía el array combinado como respuesta JSON
echo json_encode($response);
?>