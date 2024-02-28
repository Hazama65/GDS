<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ane.php');

    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


    $query_pacientes="SELECT * FROM datos_paciente";

    $data_ane =$connectionDB->getRows($query_pacientes);

?>