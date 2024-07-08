<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$query_informacion_academica = "SELECT 
    COUNT(CASE WHEN grado_tecnico <> '' THEN 1 END) AS total_grado_tecnico,
    COUNT(CASE WHEN grado_posttecnico <> '' THEN 1 END) AS total_grado_posttecnico,
    COUNT(CASE WHEN grado_licenciatura <> '' THEN 1 END) AS total_grado_licenciatura,
    COUNT(CASE WHEN grado_especialidad <> '' THEN 1 END) AS total_grado_especialidad,
    COUNT(CASE WHEN grado_maestria <> '' THEN 1 END) AS total_grado_maestria,
    COUNT(CASE WHEN grado_doctorado <> '' THEN 1 END) AS total_grado_doctorado
FROM informacion_academica; ";
$data_informacion_academica = $connectionDB->getRows($query_informacion_academica);

$query_genero = "SELECT genero,COUNT(genero) FROM datos_personal GROUP BY genero";
$data_genero = $connectionDB->getRows($query_genero);

$data = array(
    'informacion_academica' => $data_informacion_academica,
    'genero' => $data_genero
);

echo json_encode($data);
?>