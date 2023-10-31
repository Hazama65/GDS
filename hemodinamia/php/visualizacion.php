<?php
        include('dbconfig.php');
        $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $id_paciente = null;
        if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
                $id_paciente = $_GET['idPaciente'];

                $query= "SELECT dp.*, am.medico, d.nombre AS diagnostico, p.nombre AS procedimiento, 
                am.proce_programado, am.infarto, ab.*, lc.*, sb.*
                FROM atencion_medica am
                JOIN datos_paciente dp ON am.id_paciente = dp.id_paciente
                JOIN diagnosticos d ON am.diagnostico = d.id_diagnostico 
                JOIN procedimientos p ON am.procedimiento = p.id_procedimiento
                JOIN abordaje ab ON am.id_paciente = ab.id_paciente
                JOIN lesion_coronaria lc ON am.id_paciente = lc.id_paciente
                JOIN sten_balon sb ON am.id_paciente = sb.id_paciente WHERE dp.id_paciente='$id_paciente';";
        
                $data= mysqli_query($conn,$query);
        
                if ($data->num_rows > 0) {
                        $row = $data -> fetch_assoc();

                        $fecha = $row['fecha'];
                        $nombre_paciente = $row['nombre_paciente'];
                        $edad = $row['edad'];
                        $sexo  = $row['sexo'];
                        $diabetico = $row['diabetico'];
                        $hipertension = $row['hipertension'];
                        $medico = $row['medico'];
                        $diagnostico = $row['diagnostico'];
                        $procedimiento = $row['procedimiento'];
                        $proce_programado = $row['proce_programado'];
                        $infarto = $row['infarto'];
                        $braquial = $row['braquial'];
                        $lateralidad_braquial = $row['lateralidad_braquial'];
                        $cubital = $row['cubital'];
                        $lateralidad_cubital = $row['lateralidad_cubital'];
                        $deltopectoral = $row['deltopectoral'];
                        $lateralidad_dectopectoral = $row['lateralidad_dectopectoral'];
                        $femoral = $row['femoral'];
                        $lateralidad_femoral = $row['lateralidad_femoral'];
                        $radial = $row['radial'];
                        $lateralidad_radial = $row['lateralidad_radial'];
                        $subclavio = $row['subclavio'];
                        $lateralidad_subclavio = $row['lateralidad_subclavio'];
                        $transradial = $row['transradial'];
                        $lateralidad_transradial = $row['lateralidad_transradial'];
                        $destino_final = $row['destino_final'];
                        $bifurcacion = $row['bifurcacion'];
                        $cincunfleja = $row['cincunfleja'];
                        $coronaria_derecha = $row['coronaria_derecha'];
                        $desendente_ant = $row['desendente_ant'];
                        $ramo_inter = $row['ramo_inter'];
                        $tronco_coronario = $row['tronco_coronario'];
                        $stent = $row['stent'];
                        $stent_numero = $row['stent_numero'];
                        $stent_medidas = $row['stent_medidas'];
                        $balon = $row['balon'];
                        $balon_numeros = $row['balon_numeros'];
                        $balon_medidas = $row['balon_medidas'];

                        $conn ->close();
                }else {
                        echo "No se ando podido encontrar los datos del paciente";
                        exit;
                }
        }else {
                echo $id_paciente;
                exit;
        }


?>
