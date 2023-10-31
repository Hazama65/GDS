<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_residentes.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query_Residentes="SELECT * FROM datos_productividad";

    $data_Residentes =$connectionDB->getRows($query_Residentes);

?>