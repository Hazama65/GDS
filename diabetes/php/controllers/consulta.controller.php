<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);
    $connectionDBSEG = new Database(DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        
        $query_seguimiento = "SELECT * FROM datos_seguimiento WHERE id_paciente = '$id_paciente'";
        $data_seguimiento = $connectionDBSEG->getRows($query_seguimiento);

        $queryAllData = "SELECT dp.*, di.*, hip.*, ec.*, dis.*, c.*, lab.*, com.*, hg.*, ins.*, hipo.*, ah.*, ot.*,ej.*
        FROM datos_paciente dp
        LEFT JOIN antihipertensivos ah ON dp.id_paciente = ah.id_paciente   
        LEFT JOIN comorbilidades c ON dp.id_paciente = c.id_paciente
        LEFT JOIN complicaciones com ON dp.id_paciente = com.id_paciente
        LEFT JOIN enfermedad_cardiovascular ec ON dp.id_paciente = ec.id_paciente
        LEFT JOIN hipertension_arterial hip ON dp.id_paciente = hip.id_paciente
        LEFT JOIN hipoglucemiantes hg ON dp.id_paciente = hg.id_paciente
        LEFT JOIN hipolipemiantes hipo ON dp.id_paciente = hipo.id_paciente
        LEFT JOIN insulina ins ON dp.id_paciente = ins.id_paciente
        LEFT JOIN laboratorio lab ON dp.id_paciente = lab.id_paciente
        LEFT JOIN otros ot ON dp.id_paciente = ot.id_paciente
        LEFT JOIN diabetes_mellitus di ON dp.id_paciente = di.id_paciente
        LEFT JOIN dislipidemia dis ON dp.id_paciente = dis.id_paciente
        LEFT JOIN ejercicio ej ON dp.id_paciente = ej.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $curp = $data['curp'];
                $nombre = $data['nombre'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $escolaridad = $data['escolaridad'];
                $estadoCivil = $data['estadoCivil'];
                $estado = $data['estado'];
                $municipio = $data['municipio'];

                $queryEstado = "SELECT NombreEstado FROM estados WHERE Estado_Id ='$estado'";
                $dataEstado = $connectionDBEM->getRows($queryEstado);
                
                if (empty($dataEstado)) {
                    $estado1 = '';
                } else {
                    foreach ($dataEstado as $row1) {
                        $estado1 = $row1['NombreEstado'];
                    }
                }
                

                $queryMunicipio = "SELECT NombreMunicipio FROM municipios WHERE MunicipioID ='$municipio'";
                $dataMunicipio = $connectionDBEM->getRows($queryMunicipio);
                
                if (empty($dataMunicipio)) {
                    $municipio1 = '';
                } else {
                    foreach ($dataMunicipio as $row2) {
                        $municipio1 = $row2['NombreMunicipio'];
                    }
                }

                $referencia = $data['referencia'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $resultado_imc = $data['resultado_imc'];
                $circunferencia_abdominal = $data['circunferencia_abdominal'];
                $derechoAbiencia = $data['derechoAbiencia'];
                $estudio_socioEconomico = $data['estudio_socioEconomico'];
                $nivel_economico = $data['nivel_economico'];
                $diabetes_mellitus_estado = $data['diabetes_mellitus_estado'];
                $padre_dm = $data['padre_dm'];
                $madre_dm = $data['madre_dm'];
                $abuelo_materno_dm = $data['abuelo_materno_dm'];
                $abuela_materna_dm = $data['abuela_materna_dm'];
                $abuelo_paterno_dm = $data['abuelo_paterno_dm'];
                $abuela_paterna_dm = $data['abuela_paterna_dm'];
                $no_hermanas_dm = $data['no_hermanas_dm'];
                $no_hermanos_dm = $data['no_hermanos_dm'];
                $hipertension_arterial_estado = $data['hipertension_arterial_estado'];
                $padre_has = $data['padre_has'];
                $madre_has = $data['madre_has'];
                $abuelo_materno_has = $data['abuelo_materno_has'];
                $abuela_materna_has = $data['abuela_materna_has'];
                $abuelo_paterno_has = $data['abuelo_paterno_has'];
                $abuela_paterna_has = $data['abuela_paterna_has'];
                $no_hermanas_has = $data['no_hermanas_has'];
                $no_hermanos_has = $data['no_hermanos_has'];
                $enfermedad_cardioVascular_estado = $data['enfermedad_cardioVascular_estado'];
                $evento_vascular_cerebral_estado = $data['evento_vascular_cerebral_estado'];
                $padre_evc = $data['padre_evc'];
                $madre_evc = $data['madre_evc'];
                $abuelo_materno_evc = $data['abuelo_materno_evc'];
                $abuela_materna_evc = $data['abuela_materna_evc'];
                $abuelo_paterno_evc = $data['abuelo_paterno_evc'];
                $abuela_paterna_evc = $data['abuela_paterna_evc'];
                $no_hermanas_evc = $data['no_hermanas_evc'];
                $no_hermanos_evc = $data['no_hermanos_evc'];
                $cardiopatia_isquemica_estado = $data['cardiopatia_isquemica_estado'];
                $padre_ci = $data['padre_ci'];
                $madre_ci = $data['madre_ci'];
                $abuelo_materno_ci = $data['abuelo_materno_ci'];
                $abuela_materna_ci = $data['abuela_materna_ci'];
                $abuelo_paterno_ci = $data['abuelo_paterno_ci'];
                $abuela_paterna_ci = $data['abuela_paterna_ci'];
                $no_hermanas_ci = $data['no_hermanas_ci'];
                $no_hermanos_ci = $data['no_hermanos_ci'];
                $dislipidemia_estado = $data['dislipidemia_estado'];
                $hipertrigliceridemia = $data['hipertrigliceridemia'];
                $padre_htg = $data['padre_htg'];
                $madre_htg = $data['madre_htg'];
                $abuelo_materno_htg = $data['abuelo_materno_htg'];
                $abuela_materna_htg = $data['abuela_materna_htg'];
                $abuelo_paterno_htg = $data['abuelo_paterno_htg'];
                $abuela_paterna_htg = $data['abuela_paterna_htg'];
                $no_hermanas_htg = $data['no_hermanas_htg'];
                $no_hermanos_htg = $data['no_hermanos_htg'];
                $hipercolesterolemia_estado = $data['hipercolesterolemia_estado'];
                $padre_ldl = $data['padre_ldl'];
                $madre_ldl = $data['madre_ldl'];
                $abuelo_materno_ldl = $data['abuelo_materno_ldl'];
                $abuela_materna_ldl = $data['abuela_materna_ldl'];
                $abuelo_paterno_ldl = $data['abuelo_paterno_ldl'];
                $abuela_paterna_ldl = $data['abuela_paterna_ldl'];
                $no_hermanas_ldl = $data['no_hermanas_ldl'];
                $no_hermanos_ldl = $data['no_hermanos_ldl'];
                $EHGNA = $data['EHGNA'];
                $Child_Pugh = $data['Child_Pugh'];
                $dislipidemia = $data['dislipidemia'];
                $distiroidismo = $data['distiroidismo'];
                $cancer = $data['cancer'];
                $insuficiencia_cardiaca = $data['insuficiencia_cardiaca'];
                $disritmias_cardiacas = $data['disritmias_cardiacas'];
                $osteoporosis = $data['osteoporosis'];
                $gota = $data['gota'];
                $LES = $data['LES'];
                $artritis_reumatoide = $data['artritis_reumatoide'];
                $hipertension =$data['hipertension'];
                $SC = $data['SC'];
                $tipo_SC = $data['tipo_SC'];
                $TGO = $data['TGO'];
                $TGP = $data['TGP'];
                $FA = $data['FA'];
                $GGT = $data['GGT'];
                $DHL = $data['DHL'];
                $proteinas_totales = $data['proteinas_totales'];
                $albumina = $data['albumina'];
                $globulinas = $data['globulinas'];
                $AG = $data['AG'];
                $BT = $data['BT'];
                $BD = $data['BD'];
                $BI = $data['BI'];
                $HB = $data['HB'];
                $VSG = $data['VSG'];
                $OHD = $data['OHD'];
                $creatinina = $data['creatinina'];
                $creatinina_cistatina = $data['creatinina_cistatina'];
                $glucosa = $data['glucosa'];
                $glucosilada = $data['glucosilada'];
                $acido_urico = $data['acido_urico'];
                $urea = $data['urea'];
                $creatinina2 = $data['creatinina2'];
                $colesterol = $data['colesterol'];
                $trigliceridos = $data['trigliceridos'];
                $LDL = $data['LDL'];
                $HDL = $data['HDL'];
                $HBG = $data['HBG'];
                $retinopatia = $data['retinopatia'];
                $ceguera = $data['ceguera'];
                $nefropatia = $data['nefropatia'];
                $neuropatia = $data['neuropatia'];
                $polineuropatia = $data['polineuropatia'];
                $Simetrica_Distal = $data['Simetrica_Distal'];
                $Pie_Charcot = $data['Pie_Charcot'];
                $neuropatia_gastro = $data['neuropatia_gastro'];
                $neuropatia_genito = $data['neuropatia_genito'];
                $neuropatia_cardio = $data['neuropatia_cardio'];
                $CI = $data['CI'];
                $amputacion = $data['amputacion'];
                $amputaciones_dedos = $data['amputaciones_dedos'];
                $Mano_dedos = $data['Mano_dedos'];
                $Pies_dedos = $data['Pies_dedos'];
                $amputaciones_transmetatarsiana = $data['amputaciones_transmetatarsiana'];
                $lateralidad_Transmetatarsiana = $data['lateralidad_Transmetatarsiana'];
                $amputaciones_infracondilea = $data['amputaciones_infracondilea'];
                $lateralidad_Infracondilea = $data['lateralidad_Infracondilea'];
                $amputaciones_Supracondilea = $data['amputaciones_Supracondilea'];
                $lateralidad_Supracondilea = $data['lateralidad_Supracondilea'];
                $EVCI = $data['EVCI'];
                $IAP = $data['IAP'];
                $hipoglucemiantes = $data['hipoglucemiantes'];
                $metformina = $data['metformina'];
                $sulfonilureas = $data['sulfonilureas'];
                $glinidas = $data['glinidas'];
                $DPP4 = $data['DPP4'];
                $ISGLT = $data['ISGLT'];
                $GLP = $data['GLP'];
                $pioglitazona = $data['pioglitazona'];
                $IA = $data['IA'];
                $insulina = $data['insulina'];
                $NPH = $data['NPH'];
                $NPH_dosis = $data['NPH_dosis'];
                $rapida_regular = $data['rapida_regular'];
                $rapida_regular_dosis = $data['rapida_regular_dosis'];
                $glardina = $data['glardina'];
                $glardina_dosis = $data['glardina_dosis'];
                $glardina_300 = $data['glardina_300'];
                $glardina_300_dosis = $data['glardina_300_dosis'];
                $detemir = $data['detemir'];
                $detemir_dosis = $data['detemir_dosis'];
                $degludec = $data['degludec'];
                $degludec_dosis = $data['degludec_dosis'];
                $lispro = $data['lispro'];
                $lispro_dosis = $data['lispro_dosis'];
                $aspart = $data['aspart'];
                $aspart_dosis = $data['aspart_dosis'];
                $glulisina = $data['glulisina'];
                $glulisina_dosis = $data['glulisina_dosis'];
                $NPH_regular = $data['NPH_regular'];
                $NPH_regular_dosis = $data['NPH_regular_dosis'];
                $lispro_prota = $data['lispro_prota'];
                $lispro_prota_dosis = $data['lispro_prota_dosis'];
                $hipolipemiante = $data['hipolipemiante'];
                $estatinas = $data['estatinas'];
                $fibratos = $data['fibratos'];
                $omega_3 = $data['omega_3'];
                $IAB = $data['IAB'];
                $antihipertensivos = $data['antihipertensivos'];
                $IECAS = $data['IECAS'];
                $ARAII = $data['ARAII'];
                $IR = $data['IR'];
                $calcioantagonistas = $data['calcioantagonistas'];
                $betabloqueadores = $data['betabloqueadores'];
                $DT = $data['DT'];
                $alfabloqueadores = $data['alfabloqueadores'];
                $espironolactoma = $data['espironolactoma'];
                $otros = $data['otros'];
                $ASA = $data['ASA'];
                $alopurinol = $data['alopurinol'];
                $neuromodulador = $data['neuromodulador'];
                $procineticos = $data['procineticos'];
                $no_farmacos = $data['no_farmacos'];
                $ejercicio_estatus = $data['ejercicio_estatus'];
                $no_semana = $data['no_semana'];
                $no_veces = $data['no_veces'];
                $t_semana = $data['t_semana'];
                $t_no_semana = $data['t_no_semana'];

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