<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');


$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


$query_personales = "SELECT * FROM datos_paciente";
$data = $connectionDB->getRows($query_personales);

// var_dump($data);

var_dump($data[0][1]);


?>