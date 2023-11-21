<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hc.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);
    $connectionDBClues = new Database(DB_HOST_Clues,DB_NAME_Clues,DB_USERNAME_Clues,DB_PASSWORD_Clues);


    $query_paciente="SELECT * FROM pacientes";

    $data_paciente =$connectionDB->getRows($query_paciente);

    $query_clues="SELECT * FROM clues";

    $AllData_Clues =$connectionDBClues->getRows($query_clues);

    $estados = "SELECT * FROM estados ORDER BY NombreEstado";
    $AllData_Estados = $connectionDBEM->getRows($estados);
    
    $municipiosQuery = "SELECT * FROM municipios";
    $AllData_Municipios = $connectionDBEM->getRows($municipiosQuery);
    
    echo '<script>';
    echo 'var estadosData = ' . json_encode($AllData_Estados) . ';';
    echo 'var municipiosData = ' . json_encode($AllData_Municipios) . ';';
    echo '</script>';


?>