<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_SC.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connectionDBENF = new Database(DB_HOST_enf, DB_NAME_enf, DB_USERNAME_enf, DB_PASSWORD_enf);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);
    $connectionDBClues = new Database(DB_HOST_Clues,DB_NAME_Clues,DB_USERNAME_Clues,DB_PASSWORD_Clues);


    $query_clues="SELECT * FROM clues";
    $AllData_Clues =$connectionDBClues->getRows($query_clues);

    $query_enfermedades="SELECT * FROM enfermedades";
    
    $data_enf =$connectionDBENF->getRows($query_enfermedades);


    $estados = "SELECT * FROM estados ORDER BY NombreEstado";
    $AllData_Estados = $connectionDBEM->getRows($estados);
    
    $municipiosQuery = "SELECT * FROM municipios";
    $AllData_Municipios = $connectionDBEM->getRows($municipiosQuery);
    
    echo '<script>';
    echo 'var estadosData = ' . json_encode($AllData_Estados) . ';';
    echo 'var municipiosData = ' . json_encode($AllData_Municipios) . ';';
    echo '</script>';




    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];


        $query= "SELECT * FROM datos_paciente dp
        JOIN factor_riesgo fact ON dp.id_paciente = fact.id_paciente
        JOIN antecedentes_familiares ant ON dp.id_paciente = ant.id_paciente
        JOIN atencion_clinica ac ON dp.id_paciente = ac.id_paciente
        JOIN paraclinicos para ON dp.id_paciente = para.id_paciente
        JOIN tratamiento trata ON dp.id_paciente = trata.id_paciente
        JOIN lesion_coronaria lc ON dp.id_paciente = lc.id_paciente
        JOIN tratamiento_esp esp ON dp.id_paciente = esp.id_paciente
        JOIN viabilidad via ON dp.id_paciente = via.id_paciente
        JOIN eco_defuncion eco ON dp.id_paciente = eco.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);


        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente= $data['id_paciente'];
                $nombre = $data['nombre'];
                $curp = $data['curp'];
                $fecha = $data['fecha'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $Estadocivil = $data['Estadocivil'];
                $Poblacion_indigena = $data['Poblacion_indigena'];
                $Raza = $data['Raza'];
                $Escolaridad = $data['Escolaridad'];
                $unidad_referencia = $data['unidad_referencia'];
                $estado = $data['estado'];
                $Alcaldia_municipio = $data['Alcaldia_municipio'];
                $Presion_Arterial = $data['Presion_Arterial'];
                $FC = $data['FC'];
                $fr = $data['fr'];
                $peso = $data['peso'];
                $talla = $data['talla'];
                $circunferencia = $data['circunferencia'];
                $Ninguno_factor = $data['Ninguno_factor'];
                $Hiperlipidemia_factor = $data['Hiperlipidemia_factor'];
                $Diabetes_factor = $data['Diabetes_factor'];
                $Hipertensión_facator = $data['Hipertensión_facator'];
                $Alcoholismo_factor = $data['Alcoholismo_factor'];
                $Tabaquismo_factor = $data['Tabaquismo_factor'];
                $Enfermedad_renal = $data['Enfermedad_renal'];
                $Hiperuricemia_factor = $data['Hiperuricemia_factor'];
                $Obesidad_factor = $data['Obesidad_factor'];
                $Previo_factor = $data['Previo_factor'];
                $ectasia_factor = $data['ectasia_factor'];
                $Cardiomio = $data['Cardiomio'];
                $multivaso_factor = $data['multivaso_factor'];
                $Resvascularizacion_factor = $data['Resvascularizacion_factor'];
                $Padre_antecedente = $data['Padre_antecedente'];
                $Madre_antecedente = $data['Madre_antecedente'];
                $Abuelo_Materno_antecedente = $data['Abuelo_Materno_antecedente'];
                $Abuelo_Paterno_antecedente = $data['Abuelo_Paterno_antecedente'];
                $Abuela_Materna_antecedente = $data['Abuela_Materna_antecedente'];
                $Abuela_Paterna_antecedente = $data['Abuela_Paterna_antecedente'];
                $Hermano_antecedente = $data['Hermano_antecedente'];
                $Hermana_antecedente = $data['Hermana_antecedente'];
                $Prima_Materna_antecedente = $data['Prima_Materna_antecedente'];
                $Prima_Paterna_antecedente = $data['Prima_Paterna_antecedente'];
                $Primo_Paterno_antecedente = $data['Primo_Paterno_antecedente'];
                $Primo_Materno_antecedente = $data['Primo_Materno_antecedente'];
                $Tia_Materna_antecedente = $data['Tia_Materna_antecedente'];
                $Tia_Paterna_antecedente = $data['Tia_Paterna_antecedente'];
                $Tia_Materno_antecedente = $data['Tia_Materno_antecedente'];
                $Tia_Paterno_antecedente = $data['Tia_Paterno_antecedente'];
                $Inicio_sintomas = $data['Inicio_sintomas'];
                $Caracteristica_dolor = $data['Caracteristica_dolor'];
                $Inicio_triage = $data['Inicio_triage'];
                $Termino_triage = $data['Termino_triage'];
                $Dolor_Retroesternal = $data['Dolor_Retroesternal'];
                $Opresivo = $data['Opresivo'];
                $Irradiación_brazo_izquierdo = $data['Irradiación_brazo_izquierdo'];
                $Más_de_10_minutos = $data['Más_de_10_minutos'];
                $Náuseas = $data['Náuseas'];
                $Diaforesis_1 = $data['Diaforesis_1'];
                $Síncope_1 = $data['Síncope_1'];
                $Dolor_Epigastrio = $data['Dolor_Epigastrio'];
                $Punzante = $data['Punzante'];
                $Pleurítico = $data['Pleurítico'];
                $Disnea = $data['Disnea'];
                $Palpitación = $data['Palpitación'];
                $Diaforesis_2 = $data['Diaforesis_2'];
                $Síncope_2 = $data['Síncope_2'];
                $int_dolor = $data['int_dolor'];
                $Electrocardiograma = $data['Electrocardiograma'];
                $local_electro = $data['local_electro'];
                $ConSin_elevancion = $data['ConSin_elevancion'];
                $mace = $data['mace'];
                $Kill_kimbal = $data['Kill_kimbal'];
                $ck = $data['ck'];
                $ck_mb = $data['ck_mb'];
                $Troponinas = $data['Troponinas'];
                $Glucosa = $data['Glucosa'];
                $Urea = $data['Urea'];
                $Creatinina = $data['Creatinina'];
                $Colesterol = $data['Colesterol'];
                $Trigliceridos = $data['Trigliceridos'];
                $Acido_Urico = $data['Acido_Urico'];
                $hb_glucosilada = $data['hb_glucosilada'];
                $Proteinas = $data['Proteinas'];
                $LDL = $data['LDL'];
                $HDL = $data['HDL'];
                $Fibrinolisis = $data['Fibrinolisis'];
                $Inicio_txfibronilis = $data['Inicio_txfibronilis'];
                $finaliza_txfibronilis = $data['finaliza_txfibronilis'];
                $Tipo_Fibrinolisis = $data['Tipo_Fibrinolisis'];
                $procedimiento_exitoso_1 = $data['procedimiento_exitoso_1'];
                $Inicio_Angio = $data['Inicio_Angio'];
                $Tipo_Procedimiento = $data['Tipo_Procedimiento'];
                $sitio_puncion = $data['sitio_puncion'];
                $Lesiones_coronarias = $data['Lesiones_coronarias'];
                $Coronaria_Derecha = $data['Coronaria_Derecha'];
                $Coronaria_Izquierda = $data['Coronaria_Izquierda'];
                $Descendente_Anterior = $data['Descendente_Anterior'];
                $Descendente_Posterior = $data['Descendente_Posterior'];
                $Tronco_Coronario_Izquierdo = $data['Tronco_Coronario_Izquierdo'];
                $Bifurcacion = $data['Bifurcacion'];
                $Circunfleja = $data['Circunfleja'];
                $Dominancia_Derecha = $data['Dominancia_Derecha'];
                $Codominancia = $data['Codominancia'];
                $Dominancia_Izquierda = $data['Dominancia_Izquierda'];
                $Ramo_Posterolateral = $data['Ramo_Posterolateral'];
                $Ramo_Septales = $data['Ramo_Septales'];
                $Ramo_Marginales = $data['Ramo_Marginales'];
                $duque = $data['duque'];
                $Medina = $data['Medina'];
                $clasificacion_acc = $data['clasificacion_acc'];
                $TIMI = $data['TIMI'];
                $Procedimiento_TIMI = $data['Procedimiento_TIMI'];
                $Calificacion_TIMI = $data['Calificacion_TIMI'];
                $Tomografia_coherencia = $data['Tomografia_coherencia'];
                $Trombosis_intra = $data['Trombosis_intra'];
                $Aspiracion_trombo = $data['Aspiracion_trombo'];
                $Protesis_metalico = $data['Protesis_metalico'];
                $protesis_num = $data['protesis_num'];
                $revascularizacion = $data['revascularizacion'];
                $Procedimiento_exitoso_2 = $data['Procedimiento_exitoso_2'];
                $AIRBUS = $data['AIRBUS'];
                $Resu_AIRBUS = $data['Resu_AIRBUS'];
                $Prote_Endovascular = $data['Prote_Endovascular'];
                $_1_generacion = $data['1_generacion'];
                $_2da_generacion = $data['2da_generacion'];
                $Litotricia = $data['Litotricia'];
                $Schockwave = $data['Schockwave'];
                $Schockwave_compli = $data['Schockwave_compli'];
                $Marcapasos = $data['Marcapasos'];
                $Soporte_ventricular = $data['Soporte_ventricular'];
                $Complicaciones = $data['Complicaciones'];
                $disfu_ventri = $data['disfu_ventri'];
                $compli_mecanicas = $data['compli_mecanicas'];
                $compli_Pericarditis = $data['compli_Pericarditis'];
                $compli_Electricas = $data['compli_Electricas'];
                $Gamma = $data['Gamma'];
                $gamma_cardi = $data['gamma_cardi'];
                $Localizacion_gamma = $data['Localizacion_gamma'];
                $Segmento_gamma = $data['Segmento_gamma'];
                $Resonancia_inicial = $data['Resonancia_inicial'];
                $resultado_resonancia = $data['resultado_resonancia'];
                $ergometria = $data['ergometria'];
                $Etapa_1 = $data['Etapa_1'];
                $Etapa_2 = $data['Etapa_2'];
                $Etapa_3 = $data['Etapa_3'];
                $Etapa_4 = $data['Etapa_4'];
                $Etapa_5 = $data['Etapa_5'];
                $Etapa_6 = $data['Etapa_6'];
                $Etapa_7 = $data['Etapa_7'];
                $Suspension_estudio = $data['Suspension_estudio'];
                $Distolico_inicial = $data['Distolico_inicial'];
                $Sistolico_inicial = $data['Sistolico_inicial'];
                $eyeccion_ventriizqui = $data['eyeccion_ventriizqui'];
                $movilidad_inicial = $data['movilidad_inicial'];
                $Segmento = $data['Segmento'];
                $Causa_defun = $data['Causa_defun'];
                $Defuncion_fecha = $data['Defuncion_fecha'];

            }
        }
    }

?>