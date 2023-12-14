<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT *
        FROM datos_paciente dp
        LEFT JOIN apnp_tos apnpT ON dp.id_paciente = apnpT.id_paciente   
        LEFT JOIN apnp_tuberculosis apnpTuber ON dp.id_paciente = apnpTuber.id_paciente
        LEFT JOIN apnp_vih apnpV ON dp.id_paciente = apnpV.id_paciente
        LEFT JOIN apnp_animales_viajes AniVia ON dp.id_paciente = AniVia.id_paciente
        LEFT JOIN apnp_vacunas vacu ON dp.id_paciente = vacu.id_paciente
        LEFT JOIN app ap ON dp.id_paciente = ap.id_paciente
        LEFT JOIN atencion_clinica ac ON dp.id_paciente = ac.id_paciente
        LEFT JOIN app_otros apOtros ON dp.id_paciente = apOtros.id_paciente
        LEFT JOIN app_etiologia etio ON dp.id_paciente = etio.id_paciente
        LEFT JOIN app_tf_tb tftb ON dp.id_paciente = tftb.id_paciente
        LEFT JOIN laboratorio lab ON dp.id_paciente = lab.id_paciente
        LEFT JOIN pfh ON dp.id_paciente = pfh.id_paciente
        LEFT JOIN serologia_cultivo sc ON dp.id_paciente = sc.id_paciente
        LEFT JOIN estudios_alta ea ON dp.id_paciente = ea.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $nombre_paciente = $data['nombre_paciente'];
                $sexo = $data['sexo'];
                $edad = $data['edad'];
                $residencia = $data['residencia'];
                $nivel_socioeconomico = $data['nivel_socioeconomico'];
                $contacto_enfermos = $data['contacto_enfermos'];
                $tos_cronica = $data['tos_cronica'];
                $tos_padre = $data['tos_padre'];
                $tos_madre = $data['tos_madre'];
                $tos_abuelo_m = $data['tos_abuelo_m'];
                $tos_abuela_m = $data['tos_abuela_m'];
                $tos_abuelo_p = $data['tos_abuelo_p'];
                $tos_abuela_p = $data['tos_abuela_p'];
                $tos_no_hermanas = $data['tos_no_hermanas'];
                $tos_no_hermanos = $data['tos_no_hermanos'];
                $tuberculosis = $data['tuberculosis'];
                $tuberculosis_padre = $data['tuberculosis_padre'];
                $tuberculosis_madre = $data['tuberculosis_madre'];
                $tuberculosis_abuelo_m = $data['tuberculosis_abuelo_m'];
                $tuberculosis_abuela_m = $data['tuberculosis_abuela_m'];
                $tuberculosis_abuelo_p = $data['tuberculosis_abuelo_p'];
                $tuberculosis_abuela_p = $data['tuberculosis_abuela_p'];
                $tuberculosis_no_hermanas = $data['tuberculosis_no_hermanas'];
                $tuberculosis_no_hermanos = $data['tuberculosis_no_hermanos'];
                $vih = $data['vih'];
                $vih_padre = $data['vih_padre'];
                $vih_madre = $data['vih_madre'];
                $vih_abuelo_m = $data['vih_abuelo_m'];
                $vih_abuela_m = $data['vih_abuela_m'];
                $vih_abuelo_p = $data['vih_abuelo_p'];
                $vih_abuela_p = $data['vih_abuela_p'];
                $vih_no_hermanas = $data['vih_no_hermanas'];
                $vih_no_hermanos = $data['vih_no_hermanos'];
                $contacto_animales = $data['contacto_animales'];
                $perro = $data['perro'];
                $gato = $data['gato'];
                $conejo = $data['conejo'];
                $pollo = $data['pollo'];
                $chinche = $data['chinche'];
                $rata = $data['rata'];
                $mosco = $data['mosco'];
                $gallinas = $data['gallinas'];
                $cerdo = $data['cerdo'];
                $caballo = $data['caballo'];
                $becerro = $data['becerro'];
                $pajaro = $data['pajaro'];
                $borrego = $data['borrego'];
                $tortuga = $data['tortuga'];
                $pato = $data['pato'];
                $burro = $data['burro'];
                $mosca = $data['mosca'];
                $viajes_recientes = $data['viajes_recientes'];
                $lugar = $data['lugar'];
                $vist_cuevas = $data['vist_cuevas'];
                $alimentarios = $data['alimentarios'];
                $tipo_alimentarios = $data['tipo_alimentarios'];
                $vacunacion = $data['vacunacion'];
                $BCG = $data['BCG'];
                $Hepatitis_B_1 = $data['Hepatitis_B_1'];
                $Pentavalente_Acelular_1 = $data['Pentavalente_Acelular_1'];
                $Hepatitis_B_2 = $data['Hepatitis_B_2'];
                $Rotavirus_1 = $data['Rotavirus_1'];
                $Neumococo_1 = $data['Neumococo_1'];
                $Pentavalente_Acelular_2 = $data['Pentavalente_Acelular_2'];
                $Rotavirus_2 = $data['Rotavirus_2'];
                $Neumococo_2 = $data['Neumococo_2'];
                $Pentavalente_Acelular_3 = $data['Pentavalente_Acelular_3'];
                $Rotavirus_3 = $data['Rotavirus_3'];
                $Influenza_1 = $data['Influenza_1'];
                $Influenza_2 = $data['Influenza_2'];
                $SRP_1 = $data['SRP_1'];
                $Neumococo_3 = $data['Neumococo_3'];
                $Pentavalente_Acelular_4 = $data['Pentavalente_Acelular_4'];
                $Influenza_refuerzo_1 = $data['Influenza_refuerzo_1'];
                $Influenza_refuerzo_2 = $data['Influenza_refuerzo_2'];
                $DPT = $data['DPT'];
                $Influenza_refuerzo_3 = $data['Influenza_refuerzo_3'];
                $Influenza_refuerzo_4 = $data['Influenza_refuerzo_4'];
                $OVP = $data['OVP'];
                $SRP_2 = $data['SRP_2'];
                $VPH = $data['VPH'];
                $reflujo = $data['reflujo'];
                $neuropatica_cron = $data['neuropatica_cron'];
                $edad_neuro = $data['edad_neuro'];
                $talla_baja = $data['talla_baja'];
                $discapacidad_intelec = $data['discapacidad_intelec'];
                $AVP = $data['AVP'];
                $LPH = $data['LPH'];
                $epilipsia = $data['epilipsia'];
                $amigdalectomia = $data['amigdalectomia'];
                $apendicectomia = $data['apendicectomia'];
                $rubeola = $data['rubeola'];
                $invaginacion = $data['invaginacion'];
                $fractura = $data['fractura'];
                $rinitis = $data['rinitis'];
                $pielonefritis = $data['pielonefritis'];
                $varicela = $data['varicela'];
                $edad_varicela = $data['edad_varicela'];
                $tiempo_evo = $data['tiempo_evo'];
                $periodo_evo = $data['periodo_evo'];
                $tamaño_ganglio = $data['tamaño_ganglio'];
                $doloroso = $data['doloroso'];
                $no_doloroso = $data['no_doloroso'];
                $indurado = $data['indurado'];
                $no_indurado = $data['no_indurado'];
                $eritematoso = $data['eritematoso'];
                $hipertermico = $data['hipertermico'];
                $secrecion = $data['secrecion'];
                $sin_secrecion = $data['sin_secrecion'];
                $bien_delimitado = $data['bien_delimitado'];
                $mal_delimitado = $data['mal_delimitado'];
                $fijo = $data['fijo'];
                $movil = $data['movil'];
                $cambio_coloracion = $data['cambio_coloracion'];
                $sin_cambio_coloracion = $data['sin_cambio_coloracion'];
                $otros_ganglios = $data['otros_ganglios'];
                $submandibulares = $data['submandibulares'];
                $axilares = $data['axilares'];
                $inguinales = $data['inguinales'];
                $cervicales = $data['cervicales'];
                $retroauriculares = $data['retroauriculares'];
                $subclavicular = $data['subclavicular'];
                $occipital = $data['occipital'];
                $adenopatias = $data['adenopatias'];
                $VEB = $data['VEB'];
                $CMV = $data['CMV'];
                $TB = $data['TB'];
                $B19 = $data['B19'];
                $bocio = $data['bocio'];
                $rebeola = $data['rebeola'];
                $bartonella = $data['bartonella'];
                $toxoplasmosis = $data['toxoplasmosis'];
                $inflamatorio = $data['inflamatorio'];
                $parvovirus = $data['parvovirus'];
                $varicela = $data['varicela'];
                $isonicida = $data['isonicida'];
                $rifampicina = $data['rifampicina'];
                $pirazinamida = $data['pirazinamida'];
                $etambutol = $data['etambutol'];
                $hemoglobina = $data['hemoglobina'];
                $hematocrito = $data['hematocrito'];
                $leucocitos = $data['leucocitos'];
                $neutrofilos = $data['neutrofilos'];
                $linfocitos = $data['linfocitos'];
                $monocitos = $data['monocitos'];
                $plaquetas = $data['plaquetas'];
                $eosinofilos = $data['eosinofilos'];
                $eritrocitos = $data['eritrocitos'];
                $procalcitonina = $data['procalcitonina'];
                $vol_corpuscular = $data['vol_corpuscular'];
                $ancho_eritrocitaria = $data['ancho_eritrocitaria'];
                $DHL = $data['DHL'];
                $AST = $data['AST'];
                $ALT = $data['ALT'];
                $globulina = $data['globulina'];
                $albumina = $data['albumina'];
                $db = $data['db'];
                $bi = $data['bi'];
                $tgo = $data['tgo'];
                $tgp = $data['tgp'];
                $fa = $data['fa'];
                $ggt = $data['ggt'];
                $pt = $data['pt'];
                $rel = $data['rel'];
                $proteinas_totales = $data['proteinas_totales'];
                $serologia = $data['serologia'];
                $resultado_sero = $data['resultado_sero'];
                $PCR = $data['PCR'];
                $resultado_PCR = $data['resultado_PCR'];
                $cultivo = $data['cultivo'];
                $resultado_cultivo = $data['resultado_cultivo'];
                $tomografia = $data['tomografia'];
                $resultado_tomografia = $data['resultado_tomografia'];
                $ultrasonido = $data['ultrasonido'];
                $resultado_ultrasonido = $data['resultado_ultrasonido'];
                $biopsia = $data['biopsia'];
                $resultado_biopsia = $data['resultado_biopsia'];
                $referencia = $data['referencia'];
                $institucion = $data['institucion'];
                $causa_referencia = $data['causa_referencia'];
                $alta = $data['alta'];
                $causa_alta = $data['causa_alta'];
            }
        }else {
            echo "No se encontro la informacion";
            exit;
        }
    }else {
        echo $id_paciente;
        exit;
    }


?>