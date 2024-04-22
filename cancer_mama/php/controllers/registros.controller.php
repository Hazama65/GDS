<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CM.php');
        
    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connectionDBClues = new Database(DB_HOST_Clues,DB_NAME_Clues,DB_USERNAME_Clues,DB_PASSWORD_Clues);

    $query_pacientes="SELECT * FROM datos_paciente";
    
    $data_AT =$connectionDB->getRows($query_pacientes);

    $query_clues="SELECT * FROM clues";

    $AllData_Clues =$connectionDBClues->getRows($query_clues);


?>