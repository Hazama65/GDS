<?php

require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$queryAllData = "SELECT * FROM respuesta_encuesta";

$AllData = $connectionDB->getRows($queryAllData);
?>