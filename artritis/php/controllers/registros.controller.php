<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_AT.php');

    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query_pacientes="SELECT * FROM datos_paciente dp
    JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
    JOIN laboratorio l ON dp.id_paciente = l.id_paciente
    JOIN usg_clinica uc ON dp.id_paciente = uc.id_paciente
    JOIN tratamiento t ON dp.id_paciente = t.id_paciente
    ORDER BY dp.nombre_paciente ASC";
    


    $data_AT =$connectionDB->getRows($query_pacientes);


?>