<?php
include(__DIR__ . "/../php/dbconfig_EG.php");
require(__DIR__ . '/../php/models/database.model.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['empleado_1']) && isset($_GET['fecha_1']) && isset($_GET['fecha_2'])) {
    // Si se envían datos específicos, realizar la consulta con los parámetros recibidos
    $empleado = $_GET['empleado_1'];
    $fecha_1 = $_GET['fecha_1'];
    $fecha_2 = $_GET['fecha_2'];

    $query_sustituido = "SELECT TS.nom_sustituido, COUNT(*) AS Conteo
        FROM datos_suplencia DS
        INNER JOIN trabajador_sustituido TS ON TS.id_sustituido = DS.id_sustituido
        WHERE TS.nom_sustituido='$empleado' AND DS.fecha_suplencia BETWEEN '$fecha_1' AND '$fecha_2'
        GROUP BY TS.nom_sustituido;";

    $result_sustituido = $connectionDB->getRows($query_sustituido);


    $query_sustituto = "SELECT TS.nom_sustituto, COUNT(*) AS Conteo
        FROM datos_suplencia DS
        INNER JOIN trabajador_sustituto TS ON TS.id_sustituto = DS.id_sustituto
        WHERE TS.nom_sustituto='$empleado' AND DS.fecha_suplencia BETWEEN '$fecha_1' AND '$fecha_2'
        GROUP BY TS.nom_sustituto;";

    $result_sustituto = $connectionDB->getRows($query_sustituto);

    $response = array(
        'trabajador_sustituido' => $result_sustituido,
        'trabajador_sustituto' => $result_sustituto,
    );

    echo json_encode($response);

} else {
    // Si no se envían datos específicos, mostrar los datos iniciales sin necesidad de entrar en el bloque if

    $query_sustituido = "SELECT nom_sustituido,COUNT(*) AS Conteo FROM trabajador_sustituido GROUP BY nom_sustituido";

    $result_sustituido = $connectionDB->getRows($query_sustituido);

    $query_sustituto = "SELECT nom_sustituto,COUNT(*) AS Conteo FROM trabajador_sustituto GROUP BY nom_sustituto";

    $result_sustituto = $connectionDB->getRows($query_sustituto);

    $response = array(
        'trabajador_sustituido' => $result_sustituido,
        'trabajador_sustituto' => $result_sustituto,
    );

    echo json_encode($response);
}
?>

