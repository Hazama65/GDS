<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gn.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


    $query_paciente="SELECT * FROM datos_paciente";

    $data_paciente =$connectionDB->getRows($query_paciente);


?>