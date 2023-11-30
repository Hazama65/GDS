<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hf.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];

        $queryAllData = "SELECT *
        FROM datos_paciente AS dp
        JOIN clinica AS cl ON dp.id_paciente = cl.id_paciente
        JOIN fish AS f ON dp.id_paciente = f.id_paciente
        JOIN hjhs AS h ON dp.id_paciente = h.id_paciente
        JOIN usg AS u ON dp.id_paciente = u.id_paciente
        JOIN tratamiento AS t ON dp.id_paciente = t.id_paciente
        JOIN inhibidor AS i ON dp.id_paciente = i.id_paciente
        JOIN tratamiento_mensual AS tm ON dp.id_paciente = tm.id_paciente where dp.id_paciente='$id_paciente';";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $nombre_paciente = $data['nombre_paciente'];
                $curp = $data['curp'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $peso = $data['peso'];
                $tipohemofilia = $data['tipohemofilia'];
                $deficienciafactor = $data['deficienciafactor'];
                $tipoVIII = $data['tipoVIII'];
                $tipoIX = $data['tipoIX'];
                $tipoXI = $data['tipoXI'];
                $tipovw = $data['tipovw'];
                $otrashemofilias = $data['otrashemofilias'];
                $clasificacionGravedad = $data['clasificacionGravedad'];
                $inhibidor = $data['inhibidor'];
                $bajarespuesta = $data['bajarespuesta'];
                $altarespuesta = $data['altarespuesta'];
                $artropatiahemolitica = $data['artropatiahemolitica'];
                $area_afectada = $data['area_afectada'];
                $sangradosmensuales = $data['sangradosmensuales'];
                $requierefactor = $data['requierefactor'];
                $resultadoFISH = $data['resultadoFISH'];
                $comer_aseo = $data['comer_aseo'];
                $bathe = $data['bathe'];
                $vestirse = $data['vestirse'];
                $sentar = $data['sentar'];
                $Cunclillas = $data['Cunclillas'];
                $Caminar = $data['Caminar'];
                $Correr = $data['Correr'];
                $Subir = $data['Subir'];
                $puntuacion_HJHS = $data['puntuacion_HJHS'];
                $CI_inflamacion = $data['CI_inflamacion'];
                $CI_duracion = $data['CI_duracion'];
                $CI_atrofiamuscular = $data['CI_atrofiamuscular'];
                $CI_crepitacion_movimiento = $data['CI_crepitacion_movimiento'];
                $CI_perdida_flexion = $data['CI_perdida_flexion'];
                $CI_perdida_extension = $data['CI_perdida_extension'];
                $CI_dolor_articular = $data['CI_dolor_articular'];
                $CI_fuerza = $data['CI_fuerza'];
                $CD_inflamacion = $data['CD_inflamacion'];
                $CD_duracion = $data['CD_duracion'];
                $CD_atrofiamuscular = $data['CD_atrofiamuscular'];
                $CD_crepitacion_movimiento = $data['CD_crepitacion_movimiento'];
                $CD_perdida_flexion = $data['CD_perdida_flexion'];
                $CD_perdida_extension = $data['CD_perdida_extension'];
                $CD_dolor_articular = $data['CD_dolor_articular'];
                $CD_fuerza = $data['CD_fuerza'];
                $RI_inflamacion = $data['RI_inflamacion'];
                $RI_duracion = $data['RI_duracion'];
                $RI_atrofiamuscular = $data['RI_atrofiamuscular'];
                $RI_crepitacion_movimiento = $data['RI_crepitacion_movimiento'];
                $RI_perdida_flexion = $data['RI_perdida_flexion'];
                $RI_perdida_extension = $data['RI_perdida_extension'];
                $RI_dolor_articular = $data['RI_dolor_articular'];
                $RI_fuerza = $data['RI_fuerza'];
                $RD_inflamacion = $data['RD_inflamacion'];
                $RD_duracion = $data['RD_duracion'];
                $RD_atrofiamuscular = $data['RD_atrofiamuscular'];
                $RD_crepitacion_movimiento = $data['RD_crepitacion_movimiento'];
                $RD_perdida_flexion = $data['RD_perdida_flexion'];
                $RD_perdida_extension = $data['RD_perdida_extension'];
                $RD_dolor_articular = $data['RD_dolor_articular'];
                $RD_fuerza = $data['RD_fuerza'];
                $TI_inflamacion = $data['TI_inflamacion'];
                $TI_duracion = $data['TI_duracion'];
                $TI_atrofiamuscular = $data['TI_atrofiamuscular'];
                $TI_crepitacion_movimiento = $data['TI_crepitacion_movimiento'];
                $TI_perdida_flexion = $data['TI_perdida_flexion'];
                $TI_perdida_extension = $data['TI_perdida_extension'];
                $TI_dolor_articular = $data['TI_dolor_articular'];
                $TI_fuerza = $data['TI_fuerza'];
                $TD_inflamacion = $data['TD_inflamacion'];
                $TD_duracion = $data['TD_duracion'];
                $TD_atrofiamuscular = $data['TD_atrofiamuscular'];
                $TD_crepitacion_movimiento = $data['TD_crepitacion_movimiento'];
                $TD_perdida_flexion = $data['TD_perdida_flexion'];
                $TD_perdida_extension = $data['TD_perdida_extension'];
                $TD_dolor_articular = $data['TD_dolor_articular'];
                $TD_fuerza = $data['TD_fuerza'];
                $suma_articulaciones = $data['suma_articulaciones'];
                $marcha_global = $data['marcha_global'];
                $USG_6meses = $data['USG_6meses'];
                $_6_actividad_inflamatoria = $data['6_actividad_inflamatoria'];
                $_6_derrame_sinovitis = $data['6_derrame_sinovitis'];
                $_6_hipertrofia_sinovial = $data['6_hipertrofia_sinovial'];
                $_6_Cartilago = $data['6_Cartilago'];
                $_6_Hueso = $data['6_Hueso'];
                $USG_12meses = $data['USG_12meses'];
                $_12_actividad_inflamatoria = $data['12_actividad_inflamatoria'];
                $_12_derrame_sinovitis = $data['12_derrame_sinovitis'];
                $_12_hipertrofia_sinovial = $data['12_hipertrofia_sinovial'];
                $_12_Cartilago = $data['12_Cartilago'];
                $_12_Hueso = $data['12_Hueso'];
                $USG_24meses = $data['USG_24meses'];
                $_24_actividad_inflamatoria = $data['24_actividad_inflamatoria'];
                $_24_derrame_sinovitis = $data['24_derrame_sinovitis'];
                $_24_hipertrofia_sinovial = $data['24_hipertrofia_sinovial'];
                $_24_Cartilago = $data['24_Cartilago'];
                $_24_Hueso = $data['24_Hueso'];
                $tipo_tratamiento = $data['tipo_tratamiento'];
                $profilaxis = $data['profilaxis'];
                $Profilaxis_Emicizumab = $data['Profilaxis_Emicizumab'];
                $tipo_Profilaxis = $data['tipo_Profilaxis'];
                $dosis_tipoProfilaxis = $data['dosis_tipoProfilaxis'];
                $totalui = $data['totalui'];
                $nodosisporsemana = $data['nodosisporsemana'];
                $entrega = $data['entrega'];
                $dosis = $data['dosis'];
                $totalui_total = $data['totalui_total'];
                $nodosisporsemana_2 = $data['nodosisporsemana_2'];
                $totaluisemana = $data['totaluisemana'];
                $dosis_desvio = $data['dosis_desvio'];
                $totalui_desvio = $data['totalui_desvio'];
                $nodosisporsemana_desvio = $data['nodosisporsemana_desvio'];
                $totalui_desvio_semana = $data['totalui_desvio_semana'];
                $turo_250 = $data['turo_250'];
                $turo_500 = $data['turo_500'];
                $turo_1000 = $data['turo_1000'];
                $octo_250 = $data['octo_250'];
                $octo_500 = $data['octo_500'];
                $simo_250 = $data['simo_250'];
                $simo_500 = $data['simo_500'];
                $simo_1000 = $data['simo_1000'];
                $factorVIII_250 = $data['factorVIII_250'];
                $factorVIII_500 = $data['factorVIII_500'];
                $factorVIIIvW_500 = $data['factorVIIIvW_500'];
                $factorVIIIvW_1000 = $data['factorVIIIvW_1000'];
                $factorIX_500 = $data['factorIX_500'];
                $factorIX_500_2 = $data['factorIX_500_2'];
                $factorIX_600 = $data['factorIX_600'];
                $factorIX_1000 = $data['factorIX_1000'];
                $entrega_2 = $data['entrega_2'];
                $fVW_500 = $data['fVW_500'];
                $fvw_100 = $data['fvw_100'];
            }
        }
    }

?>