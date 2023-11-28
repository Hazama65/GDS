<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hf.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nombre    = $_POST['nombre'];
        $curp      = $_POST['curp'];
        $fecha     = $_POST['fecha'];
        $edad      = $_POST['edad'];
        $sexo      = $_POST['sexo'];
        $peso      = $_POST['peso'];

        $queryPaciente ="INSERT INTO datos_paciente (nombre_paciente,curp,fecha_nacimiento,edad,sexo,peso) 
        VALUES ('$nombre','$curp','$fecha','$edad','$sexo','$peso')";
        $dataPaciente = $connectionDB->ShotSimple($queryPaciente);
        $ultimoID =$connectionDB->last_id;


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

        $queryClinica = "INSERT INTO clinica VALUES ('$tipohemofilia','$deficienciafactor','$tipovw','$tipoVIII','$tipoIX','$tipoXI',
        '$otrashemofilias','$clasificacionGravedad','$inhibidor','$bajarespuesta','$altarespuesta','$artropatiahemolitica',
        '$area_afectada','$sangradosmensuales','$requierefactor','$ultimoID')";
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

        $queryfish = "INSERT INTO fish VALUES ('$resultadoFISH','$comer_aseo','$bathe','$vestirse','$sentar','$Cunclillas',
        '$Caminar','$Correr','$Subir','$ultimoID')";
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

        $queryhjhs = "INSERT INTO hjhs VALUES ('$puntuacion_HJHS','$inflamacion','$duracion','$atrofiamuscular','$crepitacion_movimiento',
        '$perdida_flexion','$perdida_extension','$dolor_articular','$fuerza','$inflamacion_codoDerecho','$duracion_codoDerecho',
        '$atrofiamuscular_codoDerecho','$crepitacion_movimiento_codoDerecho','$perdida_flexion_codoDerecho',
        '$perdida_extension_codoDerecho','$dolor_articular_codoDerecho','$fuerza_codoDerecho','$inflamacion_RodillaIzquierda',
        '$duracion_RodillaIzquierda','$atrofiamuscular_RodillaIzquierda','$crepitacion_movimiento_RodillaIzquierda',
        '$perdida_flexion_RodillaIzquierda','$perdida_extension_RodillaIzquierda','$dolor_articular_RodillaIzquierda',
        '$fuerza_RodillaIzquierda','$inflamacion_RodillaDerecha','$duracion_RodillaDerecha','$atrofiamuscular_RodillaDerecha',
        '$crepitacion_movimiento_RodillaDerecha','$perdida_flexion_RodillaDerecha','$perdida_extension_RodillaDerecha',
        '$dolor_articular_RodillaDerecha','$fuerza_RodillaDerecha','$inflamacion_TobilloIzquierdo','$duracion_TobilloIzquierdo',
        '$atrofiamuscular_TobilloIzquierdo','$crepitacion_movimiento_TobilloIzquierdo','$perdida_flexion_TobilloIzquierdo',
        '$perdida_extension_TobilloIzquierdo','$dolor_articular_TobilloIzquierdo','$fuerza_TobilloIzquierdo','$inflamacion_TobilloDerecho',
        '$duracion_TobilloDerecho','$atrofiamuscular_TobilloDerecho','$crepitacion_movimiento_TobilloDerecho',
        '$perdida_flexion_TobilloDerecho','$perdida_extension_TobilloDerecho','$dolor_articular_TobilloDerecho',
        '$fuerza_TobilloDerecho','$suma_articulaciones','$marcha_global','$ultimoID')";
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

        $queryusg = "INSERT INTO usg VALUES ('$USG_6meses','$actividad_inflamatoria','$derrame_sinovitis','$hipertrofia_sinovial',
        '$Cartilago','$Hueso','$USG_12','$actividad_inflamatoria12','$derrame_sinovitis12','$hipertrofia_sinovial12','$Cartilago12',
        '$Hueso12','$USG_24','$actividad_inflamatoria24','$derrame_sinovitis24','$hipertrofia_sinovial24','$Cartilago24','$Hueso24',
        '$ultimoID')";
        $datausg = $connectionDB->ShotSimple($queryusg);


        $tipo_tratamiento      = $_POST['tipo_tratamiento'];
        $Profilaxis            = $_POST['Profilaxis'];
        $Profilaxis_Emicizumab = $_POST['Profilaxis_Emicizumab'];
        $tipo_Profilaxis       = $_POST['tipo_Profilaxis'];
        $dosis_tipoProfilaxis  = $_POST['dosis_tipoProfilaxis'];
        $totalui               = $_POST['totalui'];
        $nodosisporsemana      = $_POST['nodosisporsemana'];
        $entrega               = $_POST['entrega'];

        $queryTratamiento = "INSERT INTO tratamiento VALUES ('$tipo_tratamiento','$Profilaxis','$Profilaxis_Emicizumab','$tipo_Profilaxis',
        '$dosis_tipoProfilaxis','$totalui','$nodosisporsemana','$entrega','$ultimoID')";
        $dataTratamiento = $connectionDB->ShotSimple($queryTratamiento);


        $dosis                   = $_POST['dosis'];
        $totalui_total           = $_POST['totalui_total'];
        $nodosisporsemana_2      = $_POST['nodosisporsemana_2'];
        $totaluisemana           = $_POST['totaluisemana'];
        $dosis_desvio            = $_POST['dosis_desvio'];
        $totalui_desvio          = $_POST['totalui_desvio'];
        $nodosisporsemana_desvio = $_POST['nodosisporsemana_desvio'];
        $totalui_desvio_semana   = $_POST['totalui_desvio_semana'];

        $queryInhibidor = "INSERT INTO inhibidor VALUES ('$dosis','$totalui_total','$nodosisporsemana_2','$totaluisemana',
        '$dosis_desvio','$totalui_desvio','$nodosisporsemana_desvio','$totalui_desvio_semana','$ultimoID')";
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

        $queryTratamientoMensual = "INSERT INTO tratamiento_mensual VALUES ('$turo_250','$turo_500','$turo_1000','$octo_250','$octo_500',
        '$simo_250','$simo_500','$simo_1000','$factorVIII_250','$factorVIII_500','$factorVIIIvW_500','$factorVIIIvW_1000','$factorIX_500',
        '$factorIX_500_2','$factorIX_600','$factorIX_1000','$entrega_Emi','$fVW_500','$fvw_100','$ultimoID')";
        $dataTratamientoMensual = $connectionDB->ShotSimple($queryTratamientoMensual);
        
        echo 'success'; 
    }




?>