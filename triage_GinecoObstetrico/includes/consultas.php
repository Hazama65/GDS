<?php
    include(__DIR__ . "/../php/dbconfig_gn.php");


    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $query_Elabora = "SELECT elabora, COUNT(*) AS Conteo FROM datos_generales GROUP BY elabora";
    $result_Elabora = mysqli_query($conn, $query_Elabora);
    $data_Elabora = array();
    if ($result_Elabora-> num_rows > 0) {
        while ($row = $result_Elabora->fetch_assoc()) {
            $data_Elabora[] = array(
                "country" => $row["elabora"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $ResultadosElabora = json_encode($data_Elabora);

    $query_resultadoTria = "SELECT resultado_triage,COUNT(*) as Conteo FROM resultados_triaje GROUP BY resultado_triage";
    $result_Resultado_Tria = mysqli_query($conn, $query_resultadoTria);
    $data_ResultadoTria = array();

    if ($result_Resultado_Tria->num_rows > 0) {
        while ($row = $result_Resultado_Tria->fetch_assoc()) {
            $data_ResultadoTria[] = array(
                "country" => $row["resultado_triage"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $ResultadosTria = json_encode($data_ResultadoTria);


    $query_Destino = "SELECT destino,COUNT(*) as Conteo FROM resultados_triaje GROUP BY destino";
    $result_Destino = mysqli_query($conn, $query_Destino);
    $data_Destino = array();

    if ($result_Destino->num_rows > 0) {
        while ($row = $result_Destino->fetch_assoc()) {
            $data_Destino[] = array(
                "country" => $row["destino"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $Destino = json_encode($data_Destino);

    $query_Codigo = "SELECT codigo,COUNT(*) as Conteo FROM resultados_triaje GROUP BY codigo";
    $result_Codigo = mysqli_query($conn, $query_Codigo);
    $data_Codigo = array();

    if ($result_Codigo->num_rows > 0) {
        while ($row = $result_Codigo->fetch_assoc()) {
            $data_Codigo[] = array(
                "country" => $row["codigo"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $Codigo = json_encode($data_Codigo);


    






?>
