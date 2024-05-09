<?php
require(__DIR__ . '/../php/models/database.model.php');
include(__DIR__ . '/../php/dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$query_cuestion_1 = "SELECT pregunta_1,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_1";
$data_cuestion_1 = $connectionDB->getRows($query_cuestion_1);

$query_cuestion_2 = "SELECT pregunta_2,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_2";
$data_cuestion_2 = $connectionDB->getRows($query_cuestion_2);

$query_cuestion_3 = "SELECT pregunta_3,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_3";
$data_cuestion_3 = $connectionDB->getRows($query_cuestion_3);

$query_cuestion_4 = "SELECT pregunta_4,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_4";
$data_cuestion_4 = $connectionDB->getRows($query_cuestion_4);

$query_cuestion_5 = "SELECT pregunta_5,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_5";
$data_cuestion_5 = $connectionDB->getRows($query_cuestion_5);

$query_cuestion_6 = "SELECT pregunta_6,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_6";
$data_cuestion_6 = $connectionDB->getRows($query_cuestion_6);

$query_cuestion_7 = "SELECT pregunta_7,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_7";
$data_cuestion_7 = $connectionDB->getRows($query_cuestion_7);

$query_cuestion_8 = "SELECT pregunta_8,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_8";
$data_cuestion_8 = $connectionDB->getRows($query_cuestion_8);

$query_cuestion_9 = "SELECT pregunta_9,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_9";
$data_cuestion_9 = $connectionDB->getRows($query_cuestion_9);

$query_cuestion_10 = "SELECT pregunta_10,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_10";
$data_cuestion_10 = $connectionDB->getRows($query_cuestion_10);

$query_cuestion_11 = "SELECT pregunta_11,COUNT(*) as conteo FROM respuesta_encuesta GROUP BY pregunta_11";
$data_cuestion_11 = $connectionDB->getRows($query_cuestion_11);

// Combina los resultados de ambas consultas en un solo array asociativo
$response = array(
    'cuestion_1' => $data_cuestion_1,
    'cuestion_2' => $data_cuestion_2,
    'cuestion_3' => $data_cuestion_3,
    'cuestion_4' => $data_cuestion_4,
    'cuestion_5' => $data_cuestion_5,
    'cuestion_6' => $data_cuestion_6,
    'cuestion_7' => $data_cuestion_7,
    'cuestion_8' => $data_cuestion_8,
    'cuestion_9' => $data_cuestion_9,
    'cuestion_10' => $data_cuestion_10,
    'cuestion_11' => $data_cuestion_11
);


// Envía el array combinado como respuesta JSON
echo json_encode($response);
?>