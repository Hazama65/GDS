<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');


$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
$connectionDB_med = new Database(DB_HOST_med, DB_NAME_med, DB_USERNAME_med, DB_PASSWORD_med);



$query_personales = "SELECT * FROM datos_paciente";
$data = $connectionDB->getRows($query_personales);

$query_medicamentos = "SELECT * FROM medicamentos";
$data_med = $connectionDB_med->getRows($query_medicamentos);




?>
