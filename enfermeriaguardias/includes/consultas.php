<?php
    include(__DIR__ . "/../php/dbconfig_EG.php");
    require(__DIR__ . '/../php/models/database.model.php');



    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);




    $query_sustituido = "SELECT nom_sustituido,COUNT(*) AS Conteo FROM trabajador_sustituido GROUP BY nom_sustituido";

    $result_sustituido = $connectionDB->getRows($query_sustituido);

    $query_sustituto = "SELECT nom_sustituto,COUNT(*) AS Conteo FROM trabajador_sustituto GROUP BY nom_sustituto";

    $result_sustituto = $connectionDB->getRows($query_sustituto);


    $response = array(
        'trabajador_sustituido' => $result_sustituido,
        'trabajador_sustituto' => $result_sustituto,
    );

    echo json_encode ($response);

    


?>
