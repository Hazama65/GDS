<?php
    include(__DIR__ . "/../php/dbconfig_residentes.php");

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $fechaInicio = "2023-01-01";
    $fechaFin = "2024-12-31";
    
    if (isset($_POST['fechaInicio']) && isset($_POST['fechaFin'])) {
        $fechaInicio = date("Y-m-d", strtotime($_POST['fechaInicio']));
        $fechaFin = date("Y-m-d", strtotime($_POST['fechaFin']));
    }

    // consulta para la obtencion del numero de veces usados de una sala 
    $queryProcedimientos = "SELECT 
    SUM(puncionLumbar) AS 'Punción Lumbar',
    SUM(intubacion) AS 'Intubación',
    SUM(cvc) AS 'CVC',
    SUM(parasentesis) AS 'Paracentesis',
    SUM(biopsia_piel) AS 'Biopsia de Piel',
    SUM(biopsia_celular) AS 'Biopsia Celular',
    SUM(biopsia_tiroides) AS 'Biopsia de Tiroides',
    SUM(toracosentesis) AS 'Toracocentesis',
    SUM(artrocentesis) AS 'Artrocentesis',
    SUM(mo) AS 'Aspiración de MO'
        FROM procedimientos
        WHERE id_productividad IN (SELECT id_productividad FROM datos_productividad 
        WHERE fecha BETWEEN '$fechaInicio' AND '$fechaFin');";
    $result_Procedimientos= mysqli_query($conn,$queryProcedimientos);

    $dataProcedimientos = array();

    if ($result_Procedimientos) {
        $row = mysqli_fetch_assoc($result_Procedimientos);
    
        // Nombres de los campos en la consulta
        $campos = array(
            "Punción Lumbar",
            "Intubación",
            "CVC",
            "Paracentesis",
            "Biopsia de Piel",
            "Biopsia Celular",
            "Biopsia de Tiroides",
            "Toracocentesis",
            "Artrocentesis",
            "Aspiración de MO"
        );
    
        // Recorre los campos y agrega los datos al arreglo
        foreach ($campos as $campo) {
            // Convierte el valor a entero
            $Valores = intval($row[$campo]);
    
            $dataProcedimientos[] = array(
                "country" => $campo,
                "value" => $Valores
            );
        }
    }
    $dataProcedimientos_json = json_encode($dataProcedimientos);



    $queryconteoResidente = "SELECT
    dp.residentes,SUM(puncionLumbar + intubacion + cvc + parasentesis + biopsia_piel + biopsia_celular + 
    biopsia_tiroides + toracosentesis + artrocentesis + mo) AS suma_total
    FROM procedimientos pr
    INNER JOIN datos_productividad dp ON pr.id_productividad = dp.id_productividad
    WHERE dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
    GROUP BY dp.residentes;";

    $result_conteoResidente = mysqli_query($conn, $queryconteoResidente);

    $dataConteoResidentes = array();

    if ($result_conteoResidente->num_rows > 0) {
        while ($row = $result_conteoResidente->fetch_assoc()) {
            $dataConteoResidentes[] = array(
                "country" => $row["residentes"],
                "value" => intval($row["suma_total"])
            );
        }
    }
    $dataConteoResidentes_json = json_encode($dataConteoResidentes);



    $residente = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar si se ha enviado el formulario
        if (isset($_POST['residente'])) {
            $residente = $_POST['residente'];
            
            $queryResidentesProcedimientos = "SELECT 
            SUM(pr.puncionLumbar) AS 'Punción Lumbar',
            SUM(pr.intubacion) AS 'Intubación',
            SUM(pr.cvc) AS 'CVC',
            SUM(pr.parasentesis) AS 'Paracentesis',
            SUM(pr.biopsia_piel) AS 'Biopsia de Piel',
            SUM(pr.biopsia_celular) AS 'Biopsia Celular',
            SUM(pr.biopsia_tiroides) AS 'Biopsia de Tiroides',
            SUM(pr.toracosentesis) AS 'Toracocentesis',
            SUM(pr.artrocentesis) AS 'Artrocentesis',
            SUM(pr.mo) AS 'Aspiración de MO'
            FROM datos_productividad dp
            JOIN procedimientos pr ON dp.id_productividad = pr.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
    
    
            $result_ResidentesProcedimientos= mysqli_query($conn,$queryResidentesProcedimientos);
    
            $dataResidentesProcedimientos = array();
    
            if ($result_ResidentesProcedimientos) {
                $row = mysqli_fetch_assoc($result_ResidentesProcedimientos);
            
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Punción Lumbar",
                        "Intubación",
                        "CVC",
                        "Paracentesis",
                        "Biopsia de Piel",
                        "Biopsia Celular",
                        "Biopsia de Tiroides",
                        "Toracocentesis",
                        "Artrocentesis",
                        "Aspiración de MO"
                    );
            
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
            
                        $dataResidentesProcedimientos[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $dataResidentesProcedimientos_json = json_encode($dataResidentesProcedimientos);

            
            $query_pl_int = "SELECT
                SUM(CASE WHEN pl_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pl_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pl_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN pl_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pl_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pl_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN puncion_lumbar pl ON dp.id_productividad = pl.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_pl_int = mysqli_query($conn, $query_pl_int);
            $data_pl_int = array();
            if ($result_pl_int) {
                $row = mysqli_fetch_assoc($result_pl_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
    
                        $data_pl_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_pl_int_json = json_encode($data_pl_int);     
            
            
            $queryComplicacionesResidentes = "SELECT
            TipoComp,SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT pl_TpoComp1 AS TipoComp, COUNT(pl_TpoComp1) AS Cantidad 
                FROM puncion_lumbar AS pl
                INNER JOIN datos_productividad AS dp ON pl.id_productividad = dp.id_productividad
                WHERE pl_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY pl_TpoComp1
                UNION ALL
                SELECT pl_TpoComp2 AS TipoComp, COUNT(pl_TpoComp2) AS Cantidad 
                FROM puncion_lumbar AS pl
                INNER JOIN datos_productividad AS dp ON pl.id_productividad = dp.id_productividad
                WHERE pl_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY pl_TpoComp2
                UNION ALL
                SELECT pl_TpoComp3 AS TipoComp, COUNT(pl_TpoComp3) AS Cantidad 
                FROM puncion_lumbar AS pl
                INNER JOIN datos_productividad AS dp ON pl.id_productividad = dp.id_productividad
                WHERE pl_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY pl_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
            $result_complicacionesResidentes = mysqli_query($conn, $queryComplicacionesResidentes);
            $dataComplicacionesResidentes = array();
            if ($result_complicacionesResidentes->num_rows > 0) {
                while ($row = $result_complicacionesResidentes->fetch_assoc()) {
                    $dataComplicacionesResidentes[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionesResidentes_json = json_encode($dataComplicacionesResidentes);


            $query_ib_int = "SELECT
                SUM(CASE WHEN ib_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN ib_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN ib_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN ib_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN ib_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN ib_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN intubacion ib ON dp.id_productividad = ib.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_ib_int = mysqli_query($conn, $query_ib_int);
            $data_ib_int = array();
            if ($result_ib_int) {
                $row = mysqli_fetch_assoc($result_ib_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_ib_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_ib_int_json = json_encode($data_ib_int);    
            
            
            $querycomplicacionesIntubacion = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT ib_TpoComp1 AS TipoComp, COUNT(ib_TpoComp1) AS Cantidad 
                FROM intubacion AS ib
                INNER JOIN datos_productividad AS dp ON ib.id_productividad = dp.id_productividad
                WHERE ib_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY ib_TpoComp1
                UNION ALL
                SELECT ib_TpoComp2 AS TipoComp, COUNT(ib_TpoComp2) AS Cantidad 
                FROM intubacion AS ib
                INNER JOIN datos_productividad AS dp ON ib.id_productividad = dp.id_productividad
                WHERE ib_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY ib_TpoComp2
                UNION ALL
                SELECT ib_TpoComp3 AS TipoComp, COUNT(ib_TpoComp3) AS Cantidad 
                FROM intubacion AS ib
                INNER JOIN datos_productividad AS dp ON ib.id_productividad = dp.id_productividad
                WHERE ib_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY ib_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
            $result_complicacionesIntubacion = mysqli_query($conn, $querycomplicacionesIntubacion);
            $dataComplicacionesIntubacion = array();
            if ($result_complicacionesIntubacion->num_rows > 0) {
                while ($row = $result_complicacionesIntubacion->fetch_assoc()) {
                    $dataComplicacionesIntubacion[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionesIntubacion_json = json_encode($dataComplicacionesIntubacion);


            $query_cvc_int = "SELECT
                SUM(CASE WHEN cv_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN cv_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN cv_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN cv_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN cv_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN cv_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN cvc c ON dp.id_productividad = c.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_cvc_int = mysqli_query($conn, $query_cvc_int);
            $data_cvc_int = array();
            if ($result_cvc_int) {
                $row = mysqli_fetch_assoc($result_cvc_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_cvc_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_cvc_int_json = json_encode($data_cvc_int);    
            
            
            $queryComplicacionesCVC = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT cv_TpoComp1 AS TipoComp, COUNT(cv_TpoComp1) AS Cantidad 
                FROM cvc AS cv
                INNER JOIN datos_productividad AS dp ON cv.id_productividad = dp.id_productividad
                WHERE cv_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY cv_TpoComp1
                UNION ALL
                SELECT cv_TpoComp2 AS TipoComp, COUNT(cv_TpoComp2) AS Cantidad 
                FROM cvc AS cv
                INNER JOIN datos_productividad AS dp ON cv.id_productividad = dp.id_productividad
                WHERE cv_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY cv_TpoComp2
                UNION ALL
                SELECT cv_TpoComp3 AS TipoComp, COUNT(cv_TpoComp3) AS Cantidad 
                FROM cvc AS cv
                INNER JOIN datos_productividad AS dp ON cv.id_productividad = dp.id_productividad
                WHERE cv_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY cv_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
            $result_complicacionesCVC = mysqli_query($conn, $queryComplicacionesCVC);
            $dataComplicacionCVC = array();
            if ($result_complicacionesCVC->num_rows > 0) {
                while ($row = $result_complicacionesCVC->fetch_assoc()) {
                    $dataComplicacionCVC[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionCVC_json = json_encode($dataComplicacionCVC);


            $query_pt_int = "SELECT
                SUM(CASE WHEN pt_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pt_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pt_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN pt_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pt_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN pt_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN paracentesis pc ON dp.id_productividad = pc.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_pt_int = mysqli_query($conn, $query_pt_int);
            $data_pt_int = array();
            if ($result_pt_int) {
                $row = mysqli_fetch_assoc($result_pt_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_pt_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_pt_int_json = json_encode($data_pt_int);    
            
            
            $queryComplicacionesParac = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT pt_TpoComp1 AS TipoComp, COUNT(pt_TpoComp1) AS Cantidad 
                FROM paracentesis AS pt
                INNER JOIN datos_productividad AS dp ON pt.id_productividad = dp.id_productividad
                WHERE pt_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY pt_TpoComp1
                UNION ALL
                SELECT pt_TpoComp2 AS TipoComp, COUNT(pt_TpoComp2) AS Cantidad 
                FROM paracentesis AS pt
                INNER JOIN datos_productividad AS dp ON pt.id_productividad = dp.id_productividad
                WHERE pt_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY pt_TpoComp2
                UNION ALL
                SELECT pt_TpoComp3 AS TipoComp, COUNT(pt_TpoComp3) AS Cantidad 
                FROM paracentesis AS pt
                INNER JOIN datos_productividad AS dp ON pt.id_productividad = dp.id_productividad
                WHERE pt_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY pt_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
            $result_complicacionesParac = mysqli_query($conn, $queryComplicacionesParac);
            $dataComplicacionParaC = array();
            if ($result_complicacionesParac->num_rows > 0) {
                while ($row = $result_complicacionesParac->fetch_assoc()) {
                    $dataComplicacionParaC[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionParaC_json = json_encode($dataComplicacionParaC);


            $query_bp_int = "SELECT
                SUM(CASE WHEN bp_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bp_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bp_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN bp_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bp_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bp_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN biopsia_piel bp ON dp.id_productividad = bp.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_bp_int = mysqli_query($conn, $query_bp_int);
            $data_bp_int = array();
            if ($result_bp_int) {
                $row = mysqli_fetch_assoc($result_bp_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_bp_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_bp_int_json = json_encode($data_bp_int);    
            
            
            $queryComplicacionesBiopsiaPiel = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT bp_TpoComp1 AS TipoComp, COUNT(bp_TpoComp1) AS Cantidad 
                FROM biopsia_piel AS bp
                INNER JOIN datos_productividad AS dp ON bp.id_productividad = dp.id_productividad
                WHERE bp_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bp_TpoComp1
                UNION ALL
                SELECT bp_TpoComp2 AS TipoComp, COUNT(bp_TpoComp2) AS Cantidad 
                FROM biopsia_piel AS bp
                INNER JOIN datos_productividad AS dp ON bp.id_productividad = dp.id_productividad
                WHERE bp_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bp_TpoComp2
                UNION ALL
                SELECT bp_TpoComp3 AS TipoComp, COUNT(bp_TpoComp3) AS Cantidad 
                FROM biopsia_piel AS bp
                INNER JOIN datos_productividad AS dp ON bp.id_productividad = dp.id_productividad
                WHERE bp_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bp_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
        
            $result_complicacionesBiopsiaPiel = mysqli_query($conn, $queryComplicacionesBiopsiaPiel);
            $dataComplicacionBiopsiaPiel = array();
            if ($result_complicacionesBiopsiaPiel->num_rows > 0) {
                while ($row = $result_complicacionesBiopsiaPiel->fetch_assoc()) {
                    $dataComplicacionBiopsiaPiel[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionBiopsiaPiel_json = json_encode($dataComplicacionBiopsiaPiel);


            $query_bc_int = "SELECT
                SUM(CASE WHEN bc_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bc_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bc_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN bc_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bc_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bc_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN biopsia_celular bc ON dp.id_productividad = bc.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_bc_int = mysqli_query($conn, $query_bc_int);
            $data_bc_int = array();
            if ($result_bc_int) {
                $row = mysqli_fetch_assoc($result_bc_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_bc_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_bc_int_json = json_encode($data_bc_int);    
            
            
            $queryComplicacionesBiopsiaCelular = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT bc_TpoComp1 AS TipoComp, COUNT(bc_TpoComp1) AS Cantidad 
                FROM biopsia_celular AS bc
                INNER JOIN datos_productividad AS dp ON bc.id_productividad = dp.id_productividad
                WHERE bc_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bc_TpoComp1
                UNION ALL
                SELECT bc_TpoComp2 AS TipoComp, COUNT(bc_TpoComp2) AS Cantidad 
                FROM biopsia_celular AS bc
                INNER JOIN datos_productividad AS dp ON bc.id_productividad = dp.id_productividad
                WHERE bc_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bc_TpoComp2
                UNION ALL
                SELECT bc_TpoComp3 AS TipoComp, COUNT(bc_TpoComp3) AS Cantidad 
                FROM biopsia_celular AS bc
                INNER JOIN datos_productividad AS dp ON bc.id_productividad = dp.id_productividad
                WHERE bc_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bc_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
        
        
            $result_complicacionesBiopsiaCelular = mysqli_query($conn, $queryComplicacionesBiopsiaCelular);
            $dataComplicacionBiopsiaCelular = array();
            if ($result_complicacionesBiopsiaCelular->num_rows > 0) {
                while ($row = $result_complicacionesBiopsiaCelular->fetch_assoc()) {
                    $dataComplicacionBiopsiaCelular[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionBiopsiaCelular_json = json_encode($dataComplicacionBiopsiaCelular);


            $query_bt_int = "SELECT
                SUM(CASE WHEN bt_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bt_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bt_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN bt_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bt_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN bt_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN biopsia_tiroides bt ON dp.id_productividad = bt.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_bt_int = mysqli_query($conn, $query_bt_int);
            $data_bt_int = array();
            if ($result_bt_int) {
                $row = mysqli_fetch_assoc($result_bt_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_bt_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_bt_int_json = json_encode($data_bt_int);    
            
            
            $queryComplicacionesTiroides= "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT bt_TpoComp1 AS TipoComp, COUNT(bt_TpoComp1) AS Cantidad 
                FROM biopsia_tiroides AS bt
                INNER JOIN datos_productividad AS dp ON bt.id_productividad = dp.id_productividad
                WHERE bt_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bt_TpoComp1
                UNION ALL
                SELECT bt_TpoComp2 AS TipoComp, COUNT(bt_TpoComp2) AS Cantidad 
                FROM biopsia_tiroides AS bt
                INNER JOIN datos_productividad AS dp ON bt.id_productividad = dp.id_productividad
                WHERE bt_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bt_TpoComp2
                UNION ALL
                SELECT bt_TpoComp3 AS TipoComp, COUNT(bt_TpoComp3) AS Cantidad 
                FROM biopsia_tiroides AS bt
                INNER JOIN datos_productividad AS dp ON bt.id_productividad = dp.id_productividad
                WHERE bt_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY bt_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
        
            $result_complicacionesTiroides = mysqli_query($conn, $queryComplicacionesTiroides);
            $dataComplicacionTiroides = array();
            if ($result_complicacionesTiroides->num_rows > 0) {
                while ($row = $result_complicacionesTiroides->fetch_assoc()) {
                    $dataComplicacionTiroides[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionTiroides_json = json_encode($dataComplicacionTiroides);


            $query_tora_int = "SELECT
                SUM(CASE WHEN tora_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN tora_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN tora_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN tora_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN tora_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN tora_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN toracocentesis tc ON dp.id_productividad = tc.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_tora_int = mysqli_query($conn, $query_tora_int);
            $data_tora_int = array();
            if ($result_tora_int) {
                $row = mysqli_fetch_assoc($result_tora_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_tora_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_tora_int_json = json_encode($data_tora_int);    
            
            
            $queryComplicacionesTora = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT tora_TpoComp1 AS TipoComp, COUNT(tora_TpoComp1) AS Cantidad 
                FROM toracocentesis AS tora
                INNER JOIN datos_productividad AS dp ON tora.id_productividad = dp.id_productividad
                WHERE tora_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY tora_TpoComp1
                UNION ALL
                SELECT tora_TpoComp2 AS TipoComp, COUNT(tora_TpoComp2) AS Cantidad 
                FROM toracocentesis AS tora
                INNER JOIN datos_productividad AS dp ON tora.id_productividad = dp.id_productividad
                WHERE tora_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY tora_TpoComp2
                UNION ALL
                SELECT tora_TpoComp3 AS TipoComp, COUNT(tora_TpoComp3) AS Cantidad 
                FROM toracocentesis AS tora
                INNER JOIN datos_productividad AS dp ON tora.id_productividad = dp.id_productividad
                WHERE tora_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY tora_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
        
        
            $result_complicacionesTora = mysqli_query($conn, $queryComplicacionesTora);
            $dataComplicacionTora = array();
            if ($result_complicacionesTora->num_rows > 0) {
                while ($row = $result_complicacionesTora->fetch_assoc()) {
                    $dataComplicacionTora[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionTora_json = json_encode($dataComplicacionTora);


            $query_art_int = "SELECT
                SUM(CASE WHEN at_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN at_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN at_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN at_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN at_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN at_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN artrocentesis ac ON dp.id_productividad = ac.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_art_int = mysqli_query($conn, $query_art_int);
            $data_art_int = array();
            if ($result_art_int) {
                $row = mysqli_fetch_assoc($result_art_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_art_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_art_int_json = json_encode($data_art_int);    
            
            
            $queryComplicacionesArt = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT at_TpoComp1 AS TipoComp, COUNT(at_TpoComp1) AS Cantidad 
                FROM artrocentesis AS at
                INNER JOIN datos_productividad AS dp ON at.id_productividad = dp.id_productividad
                WHERE at_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY at_TpoComp1
                UNION ALL
                SELECT at_TpoComp2 AS TipoComp, COUNT(at_TpoComp2) AS Cantidad 
                FROM artrocentesis AS at
                INNER JOIN datos_productividad AS dp ON at.id_productividad = dp.id_productividad
                WHERE at_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY at_TpoComp2
                UNION ALL
                SELECT at_TpoComp3 AS TipoComp, COUNT(at_TpoComp3) AS Cantidad 
                FROM artrocentesis AS at
                INNER JOIN datos_productividad AS dp ON at.id_productividad = dp.id_productividad
                WHERE at_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY at_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
        
            $result_complicacionesArt = mysqli_query($conn, $queryComplicacionesArt);
            $dataComplicacionArt = array();
            if ($result_complicacionesArt->num_rows > 0) {
                while ($row = $result_complicacionesArt->fetch_assoc()) {
                    $dataComplicacionArt[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionArt_json = json_encode($dataComplicacionArt);


            $query_mo_int = "SELECT
                SUM(CASE WHEN mo_intento1 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN mo_intento2 = 'exitoso' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN mo_intento3 = 'exitoso' THEN 1 ELSE 0 END) AS Exitosos,
                SUM(CASE WHEN mo_intento1 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN mo_intento2 = 'fallido' THEN 1 ELSE 0 END) + 
                SUM(CASE WHEN mo_intento3 = 'fallido' THEN 1 ELSE 0 END) AS Fallidos
            FROM datos_productividad dp
            JOIN aspiracion_mo mo ON dp.id_productividad = mo.id_productividad
            WHERE dp.residentes = '$residente'
                AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
            GROUP BY dp.residentes";
            $result_mo_int = mysqli_query($conn, $query_mo_int);
            $data_mo_int = array();
            if ($result_mo_int) {
                $row = mysqli_fetch_assoc($result_mo_int);
                if ($row) {
                    // Nombres de los campos en la consulta
                    $campos = array(
                        "Exitosos",
                        "Fallidos"
                    );
                    // Recorre los campos y agrega los datos al arreglo
                    foreach ($campos as $campo) {
                        // Convierte el valor a entero
                        $Valores = intval($row[$campo]);
                        $data_mo_int[] = array(
                            "country" => $campo,
                            "value" => $Valores
                        );
                    }
                }
            } else {
                // En caso de que la consulta no haya tenido resultados
                echo "La consulta no arrojó resultados.";
            }
            $data_mo_int_json = json_encode($data_mo_int);    
            
            
            $queryComplicacionesMO = "SELECT
            TipoComp, SUM(Cantidad) AS TotalCantidad
            FROM (
                SELECT mo_TpoComp1 AS TipoComp, COUNT(mo_TpoComp1) AS Cantidad 
                FROM aspiracion_mo AS mo
                INNER JOIN datos_productividad AS dp ON mo.id_productividad = dp.id_productividad
                WHERE mo_TpoComp1 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY mo_TpoComp1
                UNION ALL
                SELECT mo_TpoComp2 AS TipoComp, COUNT(mo_TpoComp2) AS Cantidad 
                FROM aspiracion_mo AS mo
                INNER JOIN datos_productividad AS dp ON mo.id_productividad = dp.id_productividad
                WHERE mo_TpoComp2 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY mo_TpoComp2
                UNION ALL
                SELECT mo_TpoComp3 AS TipoComp, COUNT(mo_TpoComp3) AS Cantidad 
                FROM aspiracion_mo AS mo
                INNER JOIN datos_productividad AS dp ON mo.id_productividad = dp.id_productividad
                WHERE mo_TpoComp3 != 'Seleccione' 
                    AND dp.residentes = '$residente' 
                    AND dp.fecha BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY mo_TpoComp3
            ) AS Subquery
            GROUP BY TipoComp;";
        
        
        
            $result_complicacionesMO = mysqli_query($conn, $queryComplicacionesMO);
            $dataComplicacionMO = array();
            if ($result_complicacionesMO->num_rows > 0) {
                while ($row = $result_complicacionesMO->fetch_assoc()) {
                    $dataComplicacionMO[] = array(
                        "country" => $row["TipoComp"],
                        "value" => intval($row["TotalCantidad"])
                    );
                }
            }
            $datadataComplicacionMO_json = json_encode($dataComplicacionMO);




        }
    }



?>