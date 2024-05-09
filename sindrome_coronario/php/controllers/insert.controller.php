<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_SC.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_paciente           = 'datos_paciente',
            $table_factor_riesgo            = 'factor_riesgo',
            $table_antecedentes_familiares  = 'antecedentes_familiares',
            $table_atencion_clinica         = 'atencion_clinica',
            $table_paraclinicos             = 'paraclinicos',
            $table_tratamiento              = 'tratamiento',
            $table_lesion_coronaria         = 'lesion_coronaria',
            $table_tratamiento_esp          = 'tratamiento_esp',
            $table_viabilidad               = 'viabilidad',
            $table_eco_defuncion            = 'eco_defuncion'
        );

        $Data_pacientes = array(
            'nombre'              => $_POST['nombre'],
            'curp'                => $_POST['curp'],
            'fecha'               => $_POST['fecha'],
            'edad'                => $_POST['edad'],
            'sexo'                => $_POST['sexo'],
            'Estadocivil'         => $_POST['Estadocivil'],
            'Poblacion_indigena'  => $_POST['Poblacion_indigena'],
            'Raza'                => $_POST['Raza'],
            'Escolaridad'         => $_POST['Escolaridad'],
            'unidad_referencia'   => $_POST['unidad_referencia'],
            'estado'              => $_POST['estado'],
            'Alcaldia_municipio'  => $_POST['Alcaldia_municipio'],
            'Presion_Arterial'    => $_POST['Presion_Arterial'],
            'FC'                  => $_POST['FC'],
            'fr'                  => $_POST['fr'],
            'peso'                => $_POST['peso'],
            'talla'               => $_POST['talla'],
            'circunferencia'      => $_POST['circunferencia']
        );

        foreach ($Data_pacientes as $key => $value) {
            $Data_pacientes[$key] = $connectionDB->escapeString($value);
        }
        $Result_pacientes = $connectionDB->insertData($Tables[0], $Data_pacientes);

        $Data_factor_riesgo = array(
            'Ninguno_factor'             => isset($_POST['Ninguno_factor'])? 'Si' : 'No',
            'Hiperlipidemia_factor'      => isset($_POST['Hiperlipidemia_factor'])? 'Si' : 'No',
            'Diabetes_factor'            => isset($_POST['Diabetes_factor'])? 'Si' : 'No',
            'Hipertensión_facator'       => isset($_POST['Hipertensión_facator'])? 'Si' : 'No',
            'Alcoholismo_factor'         => isset($_POST['Alcoholismo_factor'])? 'Si' : 'No',
            'Tabaquismo_factor'          => isset($_POST['Tabaquismo_factor'])? 'Si' : 'No',
            'Enfermedad_renal'           => isset($_POST['Enfermedad_renal'])? 'Si' : 'No',
            'Hiperuricemia_factor'       => isset($_POST['Hiperuricemia_factor'])? 'Si' : 'No',
            'Obesidad_factor'            => isset($_POST['Obesidad_factor'])? 'Si' : 'No',
            'Previo_factor'              => isset($_POST['Previo_factor'])? 'Si' : 'No',
            'ectasia_factor'             => isset($_POST['ectasia_factor'])? 'Si' : 'No',
            'Cardiomio'                  => isset($_POST['Cardiomio'])? 'Si' : 'No',
            'multivaso_factor'           => isset($_POST['multivaso_factor'])? 'Si' : 'No',
            'Resvascularizacion_factor'  => isset($_POST['Resvascularizacion_factor'])? 'Si' : 'No',
            'id_paciente'                => $Result_pacientes
        );

        foreach ($Data_factor_riesgo as $key => $value) {
            $Data_factor_riesgo[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[1], $Data_factor_riesgo);

        $Data_antecedentes_familiares = array(
            'Padre_antecedente'           => $_POST['Padre_antecedente'],
            'Madre_antecedente'           => $_POST['Madre_antecedente'],
            'Abuelo_Materno_antecedente'  => $_POST['Abuelo_Materno_antecedente'],
            'Abuelo_Paterno_antecedente'  => $_POST['Abuelo_Paterno_antecedente'],
            'Abuela_Materna_antecedente'  => $_POST['Abuela_Materna_antecedente'],
            'Abuela_Paterna_antecedente'  => $_POST['Abuela_Paterna_antecedente'],
            'Hermano_antecedente'         => $_POST['Hermano_antecedente'],
            'Hermana_antecedente'         => $_POST['Hermana_antecedente'],
            'Prima_Materna_antecedente'   => $_POST['Prima_Materna_antecedente'],
            'Prima_Paterna_antecedente'   => $_POST['Prima_Paterna_antecedente'],
            'Primo_Paterno_antecedente'   => $_POST['Primo_Paterno_antecedente'],
            'Primo_Materno_antecedente'   => $_POST['Primo_Materno_antecedente'],
            'Tia_Materna_antecedente'     => $_POST['Tia_Materna_antecedente'],
            'Tia_Paterna_antecedente'     => $_POST['Tia_Paterna_antecedente'],
            'Tia_Materno_antecedente'     => $_POST['Tia_Materno_antecedente'],
            'Tia_Paterno_antecedente'     => $_POST['Tia_Paterno_antecedente'],
            'id_paciente'                 => $Result_pacientes

        );

        foreach ($Data_antecedentes_familiares as $key => $value) {
            $Data_antecedentes_familiares[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[2], $Data_antecedentes_familiares);

        
        $Data_atencion_clinica = array(
            'Inicio_sintomas'              => $_POST['Inicio_sintomas'],
            'Caracteristica_dolor'         => $_POST['Caracteristica_dolor'],
            'Inicio_triage'                => $_POST['Inicio_triage'],
            'Termino_triage'               => $_POST['Termino_triage'],
            'Dolor_Retroesternal'          => isset($_POST['Dolor_Retroesternal']) ? 'Si' : 'No',
            'Opresivo'                     => isset($_POST['Opresivo']) ? 'Si' : 'No',
            'Irradiación_brazo_izquierdo'  => isset($_POST['Irradiación_brazo_izquierdo']) ? 'Si' : 'No',
            'Más_de_10_minutos'            => isset($_POST['Más_de_10_minutos']) ? 'Si' : 'No',
            'Náuseas'                      => isset($_POST['Náuseas']) ? 'Si' : 'No',
            'Diaforesis_1'                 => isset($_POST['Diaforesis_1']) ? 'Si' : 'No',
            'Síncope_1'                    => isset($_POST['Síncope_1']) ? 'Si' : 'No',
            'Dolor_Epigastrio'             => isset($_POST['Dolor_Epigastrio']) ? 'Si' : 'No',
            'Punzante'                     => isset($_POST['Punzante']) ? 'Si' : 'No',
            'Pleurítico'                   => isset($_POST['Pleurítico']) ? 'Si' : 'No',
            'Disnea'                       => isset($_POST['Disnea']) ? 'Si' : 'No',
            'Palpitación'                  => isset($_POST['Palpitación']) ? 'Si' : 'No',
            'Diaforesis_2'                 => isset($_POST['Diaforesis_2']) ? 'Si' : 'No',
            'Síncope_2'                    => isset($_POST['Síncope_2']) ? 'Si' : 'No',
            'int_dolor'                    => $_POST['int_dolor'],
            'Electrocardiograma'           => $_POST['Electrocardiograma'],
            'local_electro'                => $_POST['local_electro'],
            'ConSin_elevancion'            => $_POST['ConSin_elevancion'],
            'mace'                         => $_POST['mace'],
            'Kill_kimbal'                  => $_POST['Kill_kimbal'],
            'id_paciente'                  => $Result_pacientes
        );

        foreach ($Data_atencion_clinica as $key => $value) {
            $Data_atencion_clinica[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[3], $Data_atencion_clinica);

        $Data_paraclinicos = array(
            'ck'             => $_POST['ck'],
            'ck_mb'          => $_POST['ck_mb'],
            'Troponinas'     => $_POST['Troponinas'],
            'Glucosa'        => $_POST['Glucosa'],
            'Urea'           => $_POST['Urea'],
            'Creatinina'     => $_POST['Creatinina'],
            'Colesterol'     => $_POST['Colesterol'],
            'Trigliceridos'  => $_POST['Trigliceridos'],
            'Acido_Urico'    => $_POST['Acido_Urico'],
            'hb_glucosilada' => $_POST['hb_glucosilada'],
            'Proteinas'      => $_POST['Proteinas'],
            'LDL'            => $_POST['LDL'],
            'HDL'            => $_POST['HDL'],
            'id_paciente'    => $Result_pacientes
        );

        foreach ($Data_paraclinicos as $key => $value) {
            $Data_paraclinicos[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[4], $Data_paraclinicos);

        $Data_tratamiento = array(
            'Fibrinolisis'             => $_POST['Fibrinolisis'],
            'Inicio_txfibronilis'      => $_POST['Inicio_txfibronilis'],
            'finaliza_txfibronilis'    => $_POST['finaliza_txfibronilis'],
            'Tipo_Fibrinolisis'        => $_POST['Tipo_Fibrinolisis'],
            'procedimiento_exitoso_1'  => $_POST['procedimiento_exitoso_1'],
            'Inicio_Angio'             => $_POST['Inicio_Angio'],
            'Tipo_Procedimiento'       => $_POST['Tipo_Procedimiento'],
            'sitio_puncion'            => $_POST['sitio_puncion'],
            'Lesiones_coronarias'      => $_POST['Lesiones_coronarias'],
            'id_paciente'              => $Result_pacientes
        );

        foreach ($Data_tratamiento as $key => $value) {
            $Data_tratamiento[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[5], $Data_tratamiento);

        $Data_lesion_coronaria = array(
            'Coronaria_Derecha'           => isset($_POST['Coronaria_Derecha']) ? 'Si' : 'No',
            'Coronaria_Izquierda'         => isset($_POST['Coronaria_Izquierda']) ? 'Si' : 'No',
            'Descendente_Anterior'        => isset($_POST['Descendente_Anterior']) ? 'Si' : 'No',
            'Descendente_Posterior'       => isset($_POST['Descendente_Posterior']) ? 'Si' : 'No',
            'Tronco_Coronario_Izquierdo'  => isset($_POST['Tronco_Coronario_Izquierdo']) ? 'Si' : 'No',
            'Bifurcacion'                 => isset($_POST['Bifurcacion']) ? 'Si' : 'No',
            'Circunfleja'                 => isset($_POST['Circunfleja']) ? 'Si' : 'No',
            'Dominancia_Derecha'          => isset($_POST['Dominancia_Derecha']) ? 'Si' : 'No',
            'Codominancia'                => isset($_POST['Codominancia']) ? 'Si' : 'No',
            'Dominancia_Izquierda'        => isset($_POST['Dominancia_Izquierda']) ? 'Si' : 'No',
            'Ramo_Posterolateral'         => isset($_POST['Ramo_Posterolateral']) ? 'Si' : 'No',
            'Ramo_Septales'               => isset($_POST['Ramo_Septales']) ? 'Si' : 'No',
            'Ramo_Marginales'             => isset($_POST['Ramo_Marginales']) ? 'Si' : 'No',
            'duque'                       => $_POST['duque'],
            'Medina'                      => $_POST['Medina'],
            'clasificacion_acc'           => $_POST['clasificacion_acc'],
            'TIMI'                        => $_POST['TIMI'],
            'Procedimiento_TIMI'          => $_POST['Procedimiento_TIMI'],
            'Calificacion_TIMI'           => $_POST['Calificacion_TIMI'],
            'Tomografia_coherencia'       => $_POST['Tomografia_coherencia'],
            'Trombosis_intra'             => $_POST['Trombosis_intra'],
            'Aspiracion_trombo'           => $_POST['Aspiracion_trombo'],
            'Protesis_metalico'           => $_POST['Protesis_metalico'],
            'protesis_num'                => $_POST['protesis_num'],
            'revascularizacion'           => $_POST['revascularizacion'],
            'Procedimiento_exitoso_2'     => $_POST['Procedimiento_exitoso_2'],
            'AIRBUS'                      => $_POST['AIRBUS'],
            'Resu_AIRBUS'                 => $_POST['Resu_AIRBUS'],
            'Prote_Endovascular'          => $_POST['Prote_Endovascular'],
            '1_generacion'                => $_POST['1_generacion'],
            '2da_generacion'              => $_POST['2da_generacion'],
            'id_paciente'                 => $Result_pacientes
        );

        foreach ($Data_lesion_coronaria as $key => $value) {
            $Data_lesion_coronaria[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[6], $Data_lesion_coronaria);


        $Data_tratamiento_esp = array(
            'Litotricia'           => $_POST['Litotricia'],
            'Schockwave'           => $_POST['Schockwave'],
            'Schockwave_compli'    => $_POST['Schockwave_compli'],
            'Marcapasos'           => $_POST['Marcapasos'],
            'Soporte_ventricular'  => $_POST['Soporte_ventricular'],
            'Complicaciones'       => $_POST['Complicaciones'],
            'disfu_ventri'         => $_POST['disfu_ventri'],
            'compli_mecanicas'     => $_POST['compli_mecanicas'],
            'compli_Pericarditis'  => $_POST['compli_Pericarditis'],
            'compli_Electricas'    => $_POST['compli_Electricas'],
            'id_paciente'          => $Result_pacientes
        );

        foreach ($Data_tratamiento_esp as $key => $value) {
            $Data_tratamiento_esp[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[7], $Data_tratamiento_esp);

        $Data_viabilidad = array(
            'Gamma'                 => $_POST['Gamma'],
            'gamma_cardi'           => $_POST['gamma_cardi'],
            'Localizacion_gamma'    => $_POST['Localizacion_gamma'],
            'Segmento_gamma'        => $_POST['Segmento_gamma'],
            'Resonancia_inicial'    => $_POST['Resonancia_inicial'],
            'resultado_resonancia'  => $_POST['resultado_resonancia'],
            'ergometria'            => $_POST['ergometria'],
            'Etapa_1'               => $_POST['Etapa_1'],
            'Etapa_2'               => $_POST['Etapa_2'],
            'Etapa_3'               => $_POST['Etapa_3'],
            'Etapa_4'               => $_POST['Etapa_4'],
            'Etapa_5'               => $_POST['Etapa_5'],
            'Etapa_6'               => $_POST['Etapa_6'],
            'Etapa_7'               => $_POST['Etapa_7'],
            'Suspension_estudio'    => $_POST['Suspension_estudio'],
            'id_paciente'           => $Result_pacientes
        );

        foreach ($Data_viabilidad as $key => $value) {
            $Data_viabilidad[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[8], $Data_viabilidad);

        $Data_eco_defuncion = array(
            'Distolico_inicial'     => $_POST['Distolico_inicial'],
            'Sistolico_inicial'     => $_POST['Sistolico_inicial'],
            'eyeccion_ventriizqui'  => $_POST['eyeccion_ventriizqui'],
            'movilidad_inicial'     => $_POST['movilidad_inicial'],
            'Segmento'              => $_POST['Segmento'],
            'Causa_defun'           => $_POST['Causa_defun'],
            'Defuncion_fecha'       => $_POST['Defuncion_fecha'],
            'id_paciente'           => $Result_pacientes
        );

        foreach ($Data_eco_defuncion as $key => $value) {
            $Data_eco_defuncion[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[9], $Data_eco_defuncion);


        
        echo 'success';
    }


?>