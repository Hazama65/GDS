<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_lph.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);

    $query_Pacientes="SELECT * FROM datos_paciente";

    $data_Pacientes =$connectionDB->getRows($query_Pacientes);



    $estados = "SELECT * FROM estados ORDER BY NombreEstado";

    $AllData_Estados = $connectionDBEM->getRows($estados);


    if(isset($_POST['estadoId'])){
        $estadoId = $_POST['estadoId'];
    
        $municipioQuery = "SELECT * FROM Municipios WHERE Estado_Id = $estadoId";
        $AllData_municipio = $connectionDBEM->getRows($municipioQuery);
    
        // Convierte el resultado en un array asociativo
        $municipiosArray = array();
    
        foreach ($AllData_municipio as $row) {
            $municipiosArray[] = $row;
        }
    
        // Devuelve los municipios en formato JSON
        echo json_encode($municipiosArray);
    }


?>