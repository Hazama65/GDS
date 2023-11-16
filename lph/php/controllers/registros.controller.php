<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_lph.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);

    $query_Pacientes="SELECT * FROM datos_paciente";

    $data_Pacientes =$connectionDB->getRows($query_Pacientes);


    $query_clues ="SELECT * FROM clues";

    $data_clues = $connectionDB->getRows($query_clues);


    $estados = "SELECT * FROM estados ORDER BY NombreEstado";
    $AllData_Estados = $connectionDBEM->getRows($estados);
    
    $municipiosQuery = "SELECT * FROM municipios";
    $AllData_Municipios = $connectionDBEM->getRows($municipiosQuery);
    
    echo '<script>';
    echo 'var estadosData = ' . json_encode($AllData_Estados) . ';';
    echo 'var municipiosData = ' . json_encode($AllData_Municipios) . ';';
    echo '</script>';

?>