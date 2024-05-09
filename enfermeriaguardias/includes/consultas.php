<?php
include(__DIR__ . "/../php/dbconfig_EG.php");
require(__DIR__ . '/../php/models/database.model.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['empleado_1']) && isset($_GET['fecha_1']) && isset($_GET['fecha_2'])) {
    // Si se envían datos específicos, realizar la consulta con los parámetros recibidos
    $empleado = $_GET['empleado_1'];
    $fecha_1 = $_GET['fecha_1'];
    $fecha_2 = $_GET['fecha_2'];

    $query_sustituido = "SELECT CONCAT(ts.numeroempleado_1, ' - ' ,ts.enlace_numeroempleado) AS nom_sustituido, COUNT(*) AS Conteo
    FROM datos_suplencia ds 
    INNER JOIN trabajador_sustituido ts ON ts.id_sustituido=ds.id_sustituido 
    WHERE ts.numeroempleado_1='$empleado' and ds.fecha_tramite BETWEEN '$fecha_1' and '$fecha_2'
    GROUP BY ts.numeroempleado_1";

    $result_sustituido = $connectionDB->getRows($query_sustituido);


    $query_sustituto = "SELECT CONCAT(ts.numeroempleado_suplencia, ' - ' ,ts.nombre_suplencia) AS nom_sustituto, COUNT(*) AS Conteo
    FROM datos_suplencia ds 
    INNER JOIN trabajador_sustituto ts ON ts.id_sustituto=ds.id_sustituto 
    WHERE ts.numeroempleado_suplencia='$empleado' and ds.fecha_tramite BETWEEN '$fecha_1' and '$fecha_2'
    GROUP BY ts.numeroempleado_suplencia";

    $result_sustituto = $connectionDB->getRows($query_sustituto);

    $response = array(
        'trabajador_sustituido' => $result_sustituido,
        'trabajador_sustituto' => $result_sustituto,
    );

    echo json_encode($response);

} else {
    // Si no se envían datos específicos, mostrar los datos iniciales sin necesidad de entrar en el bloque if

    $query_sustituido = "SELECT CONCAT(numeroempleado_1, ' - ', enlace_numeroempleado) AS nom_sustituido ,COUNT(*) AS Conteo FROM trabajador_sustituido GROUP BY enlace_numeroempleado";

    $result_sustituido = $connectionDB->getRows($query_sustituido);

    $query_sustituto = "SELECT CONCAT (numeroempleado_suplencia, ' - ', nombre_suplencia) AS nom_sustituto, COUNT(*) AS Conteo FROM trabajador_sustituto GROUP BY nombre_suplencia";

    $result_sustituto = $connectionDB->getRows($query_sustituto);

    $response = array(
        'trabajador_sustituido' => $result_sustituido,
        'trabajador_sustituto' => $result_sustituto,
    );

    echo json_encode($response);
}
?>

