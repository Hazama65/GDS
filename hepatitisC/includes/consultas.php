<?php
    include(__DIR__ . "/../php/dbconfig_hc.php");


    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $query_Facts = "SELECT 
        SUM(CASE WHEN sinRegistro = 'si' THEN 1 ELSE 0 END) AS 'Sin Registro',
        SUM(CASE WHEN relacionesSex = 'si' THEN 1 ELSE 0 END) AS 'RelacionesSex',
        SUM(CASE WHEN transfusiones = 'si' THEN 1 ELSE 0 END) AS 'Transfusiones',
        SUM(CASE WHEN drogasEnd = 'si' THEN 1 ELSE 0 END) AS 'Drogas Endovenosas',
        SUM(CASE WHEN piercing = 'si' THEN 1 ELSE 0 END) AS 'Piercing',
        SUM(CASE WHEN presidiario = 'si' THEN 1 ELSE 0 END) AS 'Presidiario',
        SUM(CASE WHEN expresidiario = 'si' THEN 1 ELSE 0 END) AS 'Expresidiario',
        SUM(CASE WHEN situacionCalle = 'si' THEN 1 ELSE 0 END) AS 'Situación de Calle'
    FROM
        factores_riesgo";
    $result_Facts = mysqli_query($conn, $query_Facts);
    $data_Facts = array();

    if ($result_Facts) {
        $row = mysqli_fetch_assoc($result_Facts);

        foreach ($row as $campo => $valor) {
            $Valores = intval($valor);

            $data_Facts[] = array(
                "country" => $campo,
                "value" => $Valores
            );
        }
    }

    $FactRiesgos = json_encode($data_Facts);

    $query_Relaciones = "SELECT 
        SUM(CASE WHEN vih = 'si' THEN 1 ELSE 0 END) AS 'Pacientes con VIH',
        SUM(CASE WHEN hepatitis = 'si' THEN 1 ELSE 0 END) AS 'Pacientes con Hepatitis',
        SUM(CASE WHEN sexoServidoras = 'si' THEN 1 ELSE 0 END) AS 'Sexo Servidoras',
        SUM(CASE WHEN parejasOcasionales = 'si' THEN 1 ELSE 0 END) AS 'Parejas Ocasionales',
        SUM(CASE WHEN pacienteToxicomanias = 'si' THEN 1 ELSE 0 END) AS 'Pacientes con Toxicomanias',
        SUM(CASE WHEN ninguna = 'si' THEN 1 ELSE 0 END) AS 'Ninguna'
    FROM
        factores_riesgo";
    $result_Relaciones = mysqli_query($conn, $query_Relaciones);
    $data_Relaciones = array();
    if ($result_Relaciones) {
        $row = mysqli_fetch_assoc($result_Relaciones);

        foreach ($row as $campo => $valor) {
            $Valores = intval($valor);

            $data_Relaciones[] = array(
                "country" => $campo,
                "value" => $Valores
            );
        }
    }

    $RelacionesSex = json_encode($data_Relaciones);



    $query_Antecedentes = "SELECT
        SUM(CASE WHEN hemofilia = 'si' THEN 1 ELSE 0 END) AS 'Hemofilia',
        SUM(CASE WHEN ERC = 'si' THEN 1 ELSE 0 END) AS 'ERC en Hemodialisis',
        SUM(CASE WHEN trabajadorSalud = 'si' THEN 1 ELSE 0 END) AS 'Trabajador de la Salud',
        SUM(CASE WHEN transplante = 'si' THEN 1 ELSE 0 END) AS 'Transplante',
        SUM(CASE WHEN cirrosis = 'si' THEN 1 ELSE 0 END) AS 'Cirrosis',
        SUM(CASE WHEN obesidad = 'si' THEN 1 ELSE 0 END) AS 'Obesidad',
        SUM(CASE WHEN prediabetes = 'si' THEN 1 ELSE 0 END) AS 'Prediabetes',
        SUM(CASE WHEN diabetesMellitus = 'si' THEN 1 ELSE 0 END) AS 'Diabetes Mellitus',
        SUM(CASE WHEN hipertencionArt = 'si' THEN 1 ELSE 0 END) AS 'Hipertensión Arterial',
        SUM(CASE WHEN alcoholismo = 'si' THEN 1 ELSE 0 END) AS 'Alcoholismo',
        SUM(CASE WHEN HB = 'si' THEN 1 ELSE 0 END) AS 'Virus HB',
        SUM(CASE WHEN ninguno_Ant = 'si' THEN 1 ELSE 0 END) AS 'Ninguno'
    FROM
        antecedentes";
    $result_Antecedentes = mysqli_query($conn, $query_Antecedentes);
    $data_Antecedentes = array();

    if ($result_Antecedentes) {
        $row = mysqli_fetch_assoc($result_Antecedentes);

        foreach ($row as $campo => $valor) {
            $Valores = intval($valor);

            $data_Antecedentes[] = array(
                "country" => $campo,
                "value" => $Valores
            );
        }
    }

    $Antecedentes = json_encode($data_Antecedentes);


    $query_DX = "SELECT cargaDX,COUNT(*) as Conteo FROM atencion_clinica GROUP BY cargaDX";
    $result_DX = mysqli_query($conn, $query_DX);
    $data_DX = array();

    if ($result_DX->num_rows > 0) {
        while ($row = $result_DX->fetch_assoc()) {
            $data_DX[] = array(
                "country" => $row["cargaDX"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $cargaDX = json_encode($data_DX);


    $query_RespuestaDX = "SELECT respuestaViral,COUNT(*) as Conteo FROM atencion_clinica GROUP BY respuestaViral";
    $result_RespuestaDX = mysqli_query($conn, $query_RespuestaDX);
    $data_RespuestaDX = array();

    if ($result_RespuestaDX->num_rows > 0) {
        while ($row = $result_RespuestaDX->fetch_assoc()) {
            $data_RespuestaDX[] = array(
                "country" => $row["respuestaViral"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $RespuestaDX = json_encode($data_RespuestaDX);


    $query_ultraSonido = "SELECT resultadoUltra,COUNT(*) as Conteo FROM ultrasonidohepatico GROUP BY resultadoUltra";
    $result_ultraSonido = mysqli_query($conn, $query_ultraSonido);
    $data_ultraSonido = array();

    if ($result_ultraSonido->num_rows > 0) {
        while ($row = $result_ultraSonido->fetch_assoc()) {
            $data_ultraSonido[] = array(
                "country" => $row["resultadoUltra"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $ultraSonido = json_encode($data_ultraSonido);


    $query_Estea = "SELECT esteatosis,COUNT(*) as Conteo FROM ultrasonidohepatico GROUP BY esteatosis";
    $result_Estea = mysqli_query($conn, $query_Estea);
    $data_Estea = array();

    if ($result_Estea->num_rows > 0) {
        while ($row = $result_Estea->fetch_assoc()) {
            $data_Estea[] = array(
                "country" => $row["esteatosis"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $Esteatosis = json_encode($data_Estea);


    $query_FIB4 = "SELECT FIB4resultado,COUNT(*) as Conteo FROM indicehepatico GROUP BY FIB4resultado";
    $result_FIB4 = mysqli_query($conn, $query_FIB4);
    $data_FIB4 = array();

    if ($result_FIB4->num_rows > 0) {
        while ($row = $result_FIB4->fetch_assoc()) {
            $data_FIB4[] = array(
                "country" => $row["FIB4resultado"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $FIB4 = json_encode($data_FIB4);


    $query_NAFLD = "SELECT NAFLDresultado,COUNT(*) as Conteo FROM indicehepatico GROUP BY NAFLDresultado";
    $result_NAFLD = mysqli_query($conn, $query_NAFLD);
    $data_NAFLD = array();

    if ($result_NAFLD->num_rows > 0) {
        while ($row = $result_NAFLD->fetch_assoc()) {
            $data_NAFLD[] = array(
                "country" => $row["NAFLDresultado"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $NAFLD = json_encode($data_NAFLD);


    $query_APRI = "SELECT APRIresultado,COUNT(*) as Conteo FROM indicehepatico GROUP BY APRIresultado";
    $result_APRI = mysqli_query($conn, $query_APRI);
    $data_APRI = array();

    if ($result_APRI->num_rows > 0) {
        while ($row = $result_APRI->fetch_assoc()) {
            $data_APRI[] = array(
                "country" => $row["APRIresultado"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $APRI = json_encode($data_APRI);


    $query_Tratamiento = "SELECT tratamiento ,COUNT(*) as Conteo FROM tratamiento GROUP BY tratamiento";
    $result_Tratamiento = mysqli_query($conn, $query_Tratamiento);
    $data_Tratamiento = array();

    if ($result_Tratamiento->num_rows > 0) {
        while ($row = $result_Tratamiento->fetch_assoc()) {
            $data_Tratamiento[] = array(
                "country" => $row["tratamiento"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $Tratamiento = json_encode($data_Tratamiento);


    $query_Ribavirina = "SELECT ribavirina ,COUNT(*) as Conteo FROM tratamiento GROUP BY ribavirina";
    $result_Ribavirina = mysqli_query($conn, $query_Ribavirina);
    $data_Ribavirina = array();

    if ($result_Ribavirina->num_rows > 0) {
        while ($row = $result_Ribavirina->fetch_assoc()) {
            $data_Ribavirina[] = array(
                "country" => $row["ribavirina"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $Ribavirina = json_encode($data_Ribavirina);


    $query_Defuncion = "SELECT causa, COUNT(*) as Conteo FROM defuncion GROUP BY causa";
    $result_Defuncion = mysqli_query($conn, $query_Defuncion);
    $data_Defuncion = array();

    if ($result_Defuncion->num_rows > 0) {
        while ($row = $result_Defuncion->fetch_assoc()) {
            $data_Defuncion[] = array(
                "country" => $row["causa"],
                "value" => intval($row["Conteo"])
            );
        }
    }
    $Defuncion = json_encode($data_Defuncion);













?>
