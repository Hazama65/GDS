<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ic.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query_inter="SELECT * FROM datos_generales";

    $data_inter =$connectionDB->getRows($query_inter);

?>