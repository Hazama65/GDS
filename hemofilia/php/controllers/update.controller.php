<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hf.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente   = $_POST["id_paciente"];
        $nombre        = $_POST['nombre'];
        $curp          = $_POST['curp'];
        $fecha         = $_POST['fecha'];
        $edad          = $_POST['edad'];
        $sexo          = $_POST['sexo'];
        $peso          = $_POST['peso'];

        $queryPaciente ="UPDATE datos_paciente SET
            nombre_paciente = '$nombre',
            curp = '$curp',
            fecha_nacimiento = '$fecha',
            edad = '$edad',
            sexo = '$sexo',
            peso = '$peso'
        WHERE id_paciente = $id_paciente";
        $dataPaciente = $connectionDB->ShotSimple($queryPaciente);


        $tipohemofilia         = $_POST['tipohemofilia'];
        $deficienciafactor     = $_POST['deficienciafactor'];
        $tipovw                = $_POST['tipovw'];
        $tipoVIII              = $_POST['tipoVIII'];
        $tipoIX                = $_POST['tipoIX'];
        $tipoXI                = $_POST['tipoXI'];
        $otrashemofilias       = $_POST['otrashemofilias'];
        $clasificacionGravedad = $_POST['clasificacionGravedad'];
        $inhibidor             = $_POST['inhibidor'];
        $bajarespuesta         = $_POST['bajarespuesta'];
        $altarespuesta         = $_POST['altarespuesta'];
        $artropatiahemolitica  = $_POST['artropatiahemolitica'];
        $area_afectada         = $_POST['area_afectada'];
        $sangradosmensuales    = $_POST['sangradosmensuales'];
        $requierefactor        = $_POST['requierefactor'];

        $queryClinica = "UPDATE clinica SET
            tipohemofilia = '$tipohemofilia',
            deficienciafactor = '$deficienciafactor',
            tipovw = '$tipovw',
            tipoVIII = '$tipoVIII',
            tipoIX = '$tipoIX',
            tipoXI = '$tipoXI',
            otrashemofilias = '$otrashemofilias',
            clasificacionGravedad = '$clasificacionGravedad',
            inhibidor = '$inhibidor',
            bajarespuesta = '$bajarespuesta',
            altarespuesta = '$altarespuesta',
            artropatiahemolitica = '$artropatiahemolitica',
            area_afectada = '$area_afectada',
            sangradosmensuales = '$sangradosmensuales',
            requierefactor = '$requierefactor'
        WHERE id_paciente = $id_paciente";
        $dataClinica = $connectionDB->ShotSimple($queryClinica);


        $resultadoFISH = $_POST['resultadoFISH'];
        $comer_aseo    = $_POST['comer_aseo'];
        $bathe         = $_POST['bathe'];
        $vestirse      = $_POST['vestirse'];
        $sentar        = $_POST['sentar'];
        $Cunclillas    = $_POST['Cunclillas'];
        $Caminar       = $_POST['Caminar'];
        $Correr        = $_POST['Correr'];
        $Subir         = $_POST['Subir'];

        $queryfish = "UPDATE fish SET
            resultadoFISH = '$resultadoFISH',
            comer_aseo = '$comer_aseo',
            bathe = '$bathe',
            vestirse = '$vestirse',
            sentar = '$sentar',
            Cunclillas = '$Cunclillas',
            Caminar = '$Caminar',
            Correr = '$Correr',
            Subir = '$Subir'
        WHERE id_paciente = $id_paciente";
        $datafish =$connectionDB->ShotSimple($queryfish);


        $puntuacion_HJHS                         = $_POST['puntuacion_HJHS'];
        $inflamacion                             = $_POST['inflamacion'];
        $duracion                                = $_POST['duracion'];
        $atrofiamuscular                         = $_POST['atrofiamuscular'];
        $crepitacion_movimiento                  = $_POST['crepitacion_movimiento'];
        $perdida_flexion                         = $_POST['perdida_flexion'];
        $perdida_extension                       = $_POST['perdida_extension'];
        $dolor_articular                         = $_POST['dolor_articular'];
        $fuerza                                  = $_POST['fuerza'];
        $inflamacion_codoDerecho                 = $_POST['inflamacion_codoDerecho'];
        $duracion_codoDerecho                    = $_POST['duracion_codoDerecho'];
        $atrofiamuscular_codoDerecho             = $_POST['atrofiamuscular_codoDerecho'];
        $crepitacion_movimiento_codoDerecho      = $_POST['crepitacion_movimiento_codoDerecho'];
        $perdida_flexion_codoDerecho             = $_POST['perdida_flexion_codoDerecho'];
        $perdida_extension_codoDerecho           = $_POST['perdida_extension_codoDerecho'];
        $dolor_articular_codoDerecho             = $_POST['dolor_articular_codoDerecho'];
        $fuerza_codoDerecho                      = $_POST['fuerza_codoDerecho'];
        $inflamacion_RodillaIzquierda            = $_POST['inflamacion_RodillaIzquierda'];
        $duracion_RodillaIzquierda               = $_POST['duracion_RodillaIzquierda'];
        $atrofiamuscular_RodillaIzquierda        = $_POST['atrofiamuscular_RodillaIzquierda'];
        $crepitacion_movimiento_RodillaIzquierda = $_POST['crepitacion_movimiento_RodillaIzquierda'];
        $perdida_flexion_RodillaIzquierda        = $_POST['perdida_flexion_RodillaIzquierda'];
        $perdida_extension_RodillaIzquierda      = $_POST['perdida_extension_RodillaIzquierda'];
        $dolor_articular_RodillaIzquierda        = $_POST['dolor_articular_RodillaIzquierda'];
        $fuerza_RodillaIzquierda                 = $_POST['fuerza_RodillaIzquierda'];
        $inflamacion_RodillaDerecha              = $_POST['inflamacion_RodillaDerecha'];
        $duracion_RodillaDerecha                 = $_POST['duracion_RodillaDerecha'];
        $atrofiamuscular_RodillaDerecha          = $_POST['atrofiamuscular_RodillaDerecha'];
        $crepitacion_movimiento_RodillaDerecha   = $_POST['crepitacion_movimiento_RodillaDerecha'];
        $perdida_flexion_RodillaDerecha          = $_POST['perdida_flexion_RodillaDerecha'];
        $perdida_extension_RodillaDerecha        = $_POST['perdida_extension_RodillaDerecha'];
        $dolor_articular_RodillaDerecha          = $_POST['dolor_articular_RodillaDerecha'];
        $fuerza_RodillaDerecha                   = $_POST['fuerza_RodillaDerecha'];
        $inflamacion_TobilloIzquierdo            = $_POST['inflamacion_TobilloIzquierdo'];
        $duracion_TobilloIzquierdo               = $_POST['duracion_TobilloIzquierdo'];
        $atrofiamuscular_TobilloIzquierdo        = $_POST['atrofiamuscular_TobilloIzquierdo'];
        $crepitacion_movimiento_TobilloIzquierdo = $_POST['crepitacion_movimiento_TobilloIzquierdo'];
        $perdida_flexion_TobilloIzquierdo        = $_POST['perdida_flexion_TobilloIzquierdo'];
        $perdida_extension_TobilloIzquierdo      = $_POST['perdida_extension_TobilloIzquierdo'];
        $dolor_articular_TobilloIzquierdo        = $_POST['dolor_articular_TobilloIzquierdo'];
        $fuerza_TobilloIzquierdo                 = $_POST['fuerza_TobilloIzquierdo'];
        $inflamacion_TobilloDerecho              = $_POST['inflamacion_TobilloDerecho'];
        $duracion_TobilloDerecho                 = $_POST['duracion_TobilloDerecho'];
        $atrofiamuscular_TobilloDerecho          = $_POST['atrofiamuscular_TobilloDerecho'];
        $crepitacion_movimiento_TobilloDerecho   = $_POST['crepitacion_movimiento_TobilloDerecho'];
        $perdida_flexion_TobilloDerecho          = $_POST['perdida_flexion_TobilloDerecho'];
        $perdida_extension_TobilloDerecho        = $_POST['perdida_extension_TobilloDerecho'];
        $dolor_articular_TobilloDerecho          = $_POST['dolor_articular_TobilloDerecho'];
        $fuerza_TobilloDerecho                   = $_POST['fuerza_TobilloDerecho'];
        $suma_articulaciones                     = $_POST['suma_articulaciones'];
        $marcha_global                           = $_POST['marcha_global'];

        $queryhjhs = "UPDATE hjhs SET
            puntuacion_HJHS = '$puntuacion_HJHS',
            CI_inflamacion = '$inflamacion',
            CI_duracion = '$duracion',
            CI_atrofiamuscular = '$atrofiamuscular',
            CI_crepitacion_movimiento = '$crepitacion_movimiento',
            CI_perdida_flexion = '$perdida_flexion',
            CI_perdida_extension = '$perdida_extension',
            CI_dolor_articular = '$dolor_articular',
            CI_fuerza = '$fuerza',
            CD_inflamacion = '$inflamacion_codoDerecho',
            CD_duracion = '$duracion_codoDerecho',
            CD_atrofiamuscular = '$atrofiamuscular_codoDerecho',
            CD_crepitacion_movimiento = '$crepitacion_movimiento_codoDerecho',
            CD_perdida_flexion = '$perdida_flexion_codoDerecho',
            CD_perdida_extension = '$perdida_extension_codoDerecho',
            CD_dolor_articular = '$dolor_articular_codoDerecho',
            CD_fuerza = '$fuerza_codoDerecho',
            RI_inflamacion = '$inflamacion_RodillaIzquierda',
            RI_duracion = '$duracion_RodillaIzquierda',
            RI_atrofiamuscular = '$atrofiamuscular_RodillaIzquierda',
            RI_crepitacion_movimiento = '$crepitacion_movimiento_RodillaIzquierda',
            RI_perdida_flexion = '$perdida_flexion_RodillaIzquierda',
            RI_perdida_extension = '$perdida_extension_RodillaIzquierda',
            RI_dolor_articular = '$dolor_articular_RodillaIzquierda',
            RI_fuerza = '$fuerza_RodillaIzquierda',
            RD_inflamacion = '$inflamacion_RodillaDerecha',
            RD_duracion = '$duracion_RodillaDerecha',
            RD_atrofiamuscular = '$atrofiamuscular_RodillaDerecha',
            RD_crepitacion_movimiento = '$crepitacion_movimiento_RodillaDerecha',
            RD_perdida_flexion = '$perdida_flexion_RodillaDerecha',
            RD_perdida_extension = '$perdida_extension_RodillaDerecha',
            RD_dolor_articular = '$dolor_articular_RodillaDerecha',
            RD_fuerza = '$fuerza_RodillaDerecha',
            TI_inflamacion = '$inflamacion_TobilloIzquierdo',
            TI_duracion = '$duracion_TobilloIzquierdo',
            TI_atrofiamuscular = '$atrofiamuscular_TobilloIzquierdo',
            TI_crepitacion_movimiento = '$crepitacion_movimiento_TobilloIzquierdo',
            TI_perdida_flexion = '$perdida_flexion_TobilloIzquierdo',
            TI_perdida_extension = '$perdida_extension_TobilloIzquierdo',
            TI_dolor_articular = '$dolor_articular_TobilloIzquierdo',
            TI_fuerza = '$fuerza_TobilloIzquierdo',
            TD_inflamacion = '$inflamacion_TobilloDerecho',
            TD_duracion = '$duracion_TobilloDerecho',
            TD_atrofiamuscular = '$atrofiamuscular_TobilloDerecho',
            TD_crepitacion_movimiento = '$crepitacion_movimiento_TobilloDerecho',
            TD_perdida_flexion = '$perdida_flexion_TobilloDerecho',
            TD_perdida_extension = '$perdida_extension_TobilloDerecho',
            TD_dolor_articular = '$dolor_articular_TobilloDerecho',
            TD_fuerza = '$fuerza_TobilloDerecho',
            suma_articulaciones = '$suma_articulaciones',
            marcha_global = '$marcha_global'
        WHERE id_paciente = $id_paciente";
        $datahjhs =$connectionDB->ShotSimple($queryhjhs);


        $USG_6meses               = $_POST['USG_6meses'];
        $actividad_inflamatoria   = $_POST['actividad_inflamatoria'];
        $derrame_sinovitis        = $_POST['derrame_sinovitis'];
        $hipertrofia_sinovial     = $_POST['hipertrofia_sinovial'];
        $Cartilago                = $_POST['Cartilago'];
        $Hueso                    = $_POST['Hueso'];
        $USG_12                   = $_POST['USG_12'];
        $actividad_inflamatoria12 = $_POST['actividad_inflamatoria12'];
        $derrame_sinovitis12      = $_POST['derrame_sinovitis12'];
        $hipertrofia_sinovial12   = $_POST['hipertrofia_sinovial12'];
        $Cartilago12              = $_POST['Cartilago12'];
        $Hueso12                  = $_POST['Hueso12'];
        $USG_24                   = $_POST['USG_24'];
        $actividad_inflamatoria24 = $_POST['actividad_inflamatoria24'];
        $derrame_sinovitis24      = $_POST['derrame_sinovitis24'];
        $hipertrofia_sinovial24   = $_POST['hipertrofia_sinovial24'];
        $Cartilago24              = $_POST['Cartilago24'];
        $Hueso24                  = $_POST['Hueso24'];

        $queryusg = "UPDATE usg SET
            USG_6meses = '$USG_6meses',
            6_actividad_inflamatoria = '$actividad_inflamatoria',
            6_derrame_sinovitis = '$derrame_sinovitis',
            6_hipertrofia_sinovial = '$hipertrofia_sinovial',
            6_Cartilago = '$Cartilago',
            6_Hueso = '$Hueso',
            USG_12meses = '$USG_12',
            12_actividad_inflamatoria = '$actividad_inflamatoria12',
            12_derrame_sinovitis = '$derrame_sinovitis12',
            12_hipertrofia_sinovial = '$hipertrofia_sinovial12',
            12_Cartilago = '$Cartilago12',
            12_Hueso = '$Hueso12',
            USG_24meses = '$USG_24',
            24_actividad_inflamatoria = '$actividad_inflamatoria24',
            24_derrame_sinovitis = '$derrame_sinovitis24',
            24_hipertrofia_sinovial = '$hipertrofia_sinovial24',
            24_Cartilago = '$Cartilago24',
            24_Hueso = '$Hueso24'
        WHERE id_paciente = $id_paciente";
        $datausg = $connectionDB->ShotSimple($queryusg);


        $tipo_tratamiento      = $_POST['tipo_tratamiento'];
        $Profilaxis            = $_POST['Profilaxis'];
        $Profilaxis_Emicizumab = $_POST['Profilaxis_Emicizumab'];
        $tipo_Profilaxis       = $_POST['tipo_Profilaxis'];
        $dosis_tipoProfilaxis  = $_POST['dosis_tipoProfilaxis'];
        $totalui               = $_POST['totalui'];
        $nodosisporsemana      = $_POST['nodosisporsemana'];
        $entrega               = $_POST['entrega'];

        $queryTratamiento = "UPDATE tratamiento SET
            tipo_tratamiento = '$tipo_tratamiento',
            profilaxis = '$Profilaxis',
            Profilaxis_Emicizumab = '$Profilaxis_Emicizumab',
            tipo_Profilaxis = '$tipo_Profilaxis',
            dosis_tipoProfilaxis = '$dosis_tipoProfilaxis',
            totalui = '$totalui',
            nodosisporsemana = '$nodosisporsemana',
            entrega = '$entrega'
        WHERE id_paciente = $id_paciente";
        $dataTratamiento = $connectionDB->ShotSimple($queryTratamiento);


        $dosis                   = $_POST['dosis'];
        $totalui_total           = $_POST['totalui_total'];
        $nodosisporsemana_2      = $_POST['nodosisporsemana_2'];
        $totaluisemana           = $_POST['totaluisemana'];
        $dosis_desvio            = $_POST['dosis_desvio'];
        $totalui_desvio          = $_POST['totalui_desvio'];
        $nodosisporsemana_desvio = $_POST['nodosisporsemana_desvio'];
        $totalui_desvio_semana   = $_POST['totalui_desvio_semana'];

        $queryInhibidor = "UPDATE inhibidor SET
            dosis = '$dosis',
            totalui_total = '$totalui_total',
            nodosisporsemana_2 = '$nodosisporsemana_2',
            totaluisemana = '$totaluisemana',
            dosis_desvio = '$dosis_desvio',
            totalui_desvio = '$totalui_desvio',
            nodosisporsemana_desvio = '$nodosisporsemana_desvio',
            totalui_desvio_semana = '$totalui_desvio_semana'
        WHERE id_paciente = $id_paciente";
        $dataInhibidor = $connectionDB->ShotSimple($queryInhibidor);


        $turo_250          = $_POST['turo_250'];
        $turo_500          = $_POST['turo_500'];
        $turo_1000         = $_POST['turo_1000'];
        $octo_250          = $_POST['octo_250'];
        $octo_500          = $_POST['octo_500'];
        $simo_250          = $_POST['simo_250'];
        $simo_500          = $_POST['simo_500'];
        $simo_1000         = $_POST['simo_1000'];
        $factorVIII_250    = $_POST['factorVIII_250'];
        $factorVIII_500    = $_POST['factorVIII_500'];
        $factorVIIIvW_500  = $_POST['factorVIIIvW_500'];
        $factorVIIIvW_1000 = $_POST['factorVIIIvW_1000'];
        $factorIX_500      = $_POST['factorIX_500'];
        $factorIX_500_2    = $_POST['factorIX_500_2'];
        $factorIX_600      = $_POST['factorIX_600'];
        $factorIX_1000     = $_POST['factorIX_1000'];
        $entrega_Emi       = $_POST['entrega_Emi'];
        $fVW_500           = $_POST['fVW_500'];
        $fvw_100           = $_POST['fvw_100'];

        $queryTratamientoMensual = "UPDATE tratamiento_mensual SET
            turo_250 = '$turo_250',
            turo_500 = '$turo_500',
            turo_1000 = '$turo_1000',
            octo_250 = '$octo_250',
            octo_500 = '$octo_500',
            simo_250 = '$simo_250',
            simo_500 = '$simo_500',
            simo_1000 = '$simo_1000',
            factorVIII_250 = '$factorVIII_250',
            factorVIII_500 = '$factorVIII_500',
            factorVIIIvW_500 = '$factorVIIIvW_500',
            factorVIIIvW_1000 = '$factorVIIIvW_1000',
            factorIX_500 = '$factorIX_500',
            factorIX_500_2 = '$factorIX_500_2',
            factorIX_600 = '$factorIX_600',
            factorIX_1000 = '$factorIX_1000',
            entrega_2 = '$entrega_Emi',
            fVW_500 = '$fVW_500',
            fvw_100 = '$fvw_100'
        WHERE id_paciente = $id_paciente";
        $dataTratamientoMensual = $connectionDB->ShotSimple($queryTratamientoMensual);

        
        echo 'success';
    }

?>