<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


    $id_cirugia = null;
    if (isset($_GET['idCirugia']) && is_numeric($_GET['idCirugia'])) {
            $id_cirugia = $_GET['idCirugia'];

            $query= "SELECT dc.id_cirugia, dc.medico, dc.cirugia, dc.sala, d.nombre AS diagnostico,
            dc.fecha_solicitud,dc.fecha_programada,dc.fecha_realizada,tiempos.*,cancelaciones.*
            FROM datos_cirugia dc
            LEFT JOIN diagnosticos d ON dc.diagnostico = d.id_diagnostico
            JOIN tiempos ON tiempos.id_cirugia=dc.id_cirugia
            JOIN cancelaciones ON cancelaciones.id_cirugia=dc.id_cirugia WHERE dc.id_cirugia='$id_cirugia'";


            $data= mysqli_query($conn,$query);
                    
            if ($data->num_rows > 0) {
                $row = $data -> fetch_assoc();
                $medico = $row['medico'];
                $cirugia = $row['cirugia'];
                $sala = $row['sala'];
                $diagnostico = $row['diagnostico'];
                $fecha_solicitud = $row['fecha_solicitud'];
                $fecha_programada = $row['fecha_programada'];
                $fecha_realizada = $row['fecha_realizada'];
                $programada = $row['programada'];
                $ingreso = $row['ingreso'];
                $anestesia = $row['anestesia'];
                $inicio = $row['inicio'];
                $fin = $row['fin'];
                $egreso = $row['egreso'];
                $pro_ingreso = $row['programada_ingreso'];
                $pro_inicio = $row['programada_inicio'];
                $ingreso_egreso = $row['ingreso_egreso'];
                $ingreso_anestesia = $row['ingreso_anestesia'];
                $ingreso_inicio = $row['ingreso_inicio'];
                $inicio_fin = $row['inicio_fin'];
                $S_medico = $row['S_medico'];
                $motivo = $row['motivo'];

            }else {
                echo "No se ando podido encontrar los datos del paciente";
                exit;
            }
    }else {
            echo $id_cirugia;
            exit;
    }
    ?>