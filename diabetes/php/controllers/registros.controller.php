<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query_pacientesDiaB="SELECT * FROM datos_paciente";

    $data_Diabetes =$connectionDB->getRows($query_pacientesDiaB);

?>