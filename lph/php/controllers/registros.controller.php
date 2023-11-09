<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_lph.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query_Pacientes="SELECT * FROM datos_paciente";

    $data_Pacientes =$connectionDB->getRows($query_Pacientes);

?>