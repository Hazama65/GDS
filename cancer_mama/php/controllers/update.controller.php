<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CM.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Tables = array(
            $table_datos_paciente           = 'datos_paciente',
            $table_signos_vitales_sometria  = 'signos_vitales_sometria',
            $table_antecedentes_patologicos = 'antecedentes_patologicos',
            $table_antecedentes_familiares  = 'antecedentes_familiares',
            $table_antecedentes_gineco      = 'antecedentes_gineco',
            $table_antecedentes_emb         = 'antecedentes_emb',
            $table_atencion_clinica         = 'atencion_clinica',
            $table_histopatologia           = 'histopatologia',
            $table_inmuno                   = 'inmuno',
            $table_molecular                = 'molecular',
            $table_tratamiento              = 'tratamiento',
            $table_quimio                   = 'quimio',
            $table_momento1                 = 'momento1',
            $table_momento2                 = 'momento2',
            $table_momento3                 = 'momento3',
            $table_hhtht                    = 'hhtht',
            $table_full_quimio              = 'full_quimio',
            $table_radio_defun              = 'radio_defun',
        );

        $updateColum ='id_paciente';
        $updateId    = $_POST['id_paciente'];


        $Data_pacientes = array(
            'nombre_px'         => $_POST['nombre_px'],
            'curp'              => $_POST['curp'],
            'genero'            => $_POST['genero'],
            'fecha_nacimiento'  => $_POST['fecha_nacimiento'],
            'Estadocivil'       => $_POST['Estadocivil'],
            'Raza'              => $_POST['Raza'],
            'unidad_referencia' => $_POST['unidad_referencia']
        );
        $connectionDB->updateData($Tables[0],$Data_pacientes,$updateColum,$updateId);

        $Data_signos_vitales_sometria = array(
            'Presion_sistolica'  => $_POST['Presion_sistolica'],
            'Presion_Diastolica' => $_POST['Presion_Diastolica'],
            'FC'                 => $_POST['FC'],
            'fr'                 => $_POST['fr'],
            'Glucemia'           => $_POST['Glucemia'],
            'peso'               => $_POST['peso'],
            'talla'              => $_POST['talla'],
            'circunferencia'     => $_POST['circunferencia']
        );
        $connectionDB->updateData($Tables[1],$Data_signos_vitales_sometria,$updateColum,$updateId);

        $Data_antecedentes_patologicos = array(
            'BRCA_1'                 => isset($_POST['BRCA_1']) ? 'Si' : 'No',
            'BRCA_2'                 => isset($_POST['BRCA_2']) ? 'Si' : 'No',
            'diabetes'               => isset($_POST['diabetes']) ? 'Si' : 'No',
            'renal_cronica'          => isset($_POST['renal_cronica']) ? 'Si' : 'No',
            'Hipertension'           => isset($_POST['Hipertension']) ? 'Si' : 'No',
            'Tabaquismo'             => isset($_POST['Tabaquismo']) ? 'Si' : 'No',
            'Antecedentecancer_mama' => isset($_POST['Antecedentecancer_mama']) ? 'Si' : 'No',
            'Antecedentes_ninguna'   => isset($_POST['Antecedentes_ninguna']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[2],$Data_antecedentes_patologicos,$updateColum,$updateId);

        $Data_antecedentes_familiares = array(
            'Heredo_Cancer'                     => $_POST['Heredo_Cancer'],
            'Heredo_CancerProstata'             => $_POST['Heredo_CancerProstata'],
            'Abuelo_materno_cancer'             => isset($_POST['Abuelo_materno_cancer']) ? 'Si' : 'No',
            'Abuelo_paterno_cancer'             => isset($_POST['Abuelo_paterno_cancer']) ? 'Si' : 'No',
            'Hermano_Prostata'                  => isset($_POST['Hermano_Prostata']) ? 'Si' : 'No',
            'Padre_cancer_Prostata'             => isset($_POST['Padre_cancer_Prostata']) ? 'Si' : 'No',
            'Primo_Materno_Prostata'            => isset($_POST['Primo_Materno_Prostata']) ? 'Si' : 'No',
            'Primo_Paterno_Prostata'            => isset($_POST['Primo_Paterno_Prostata']) ? 'Si' : 'No',
            'Tio_Materno_Prostata'              => isset($_POST['Tio_Materno_Prostata']) ? 'Si' : 'No',
            'Tio_Paterno_Prostata'              => isset($_POST['Tio_Paterno_Prostata']) ? 'Si' : 'No',
            'Heredo_CancerOvario'               => $_POST['Heredo_CancerOvario'],
            'Abuela_MaternaAntecedentes_Ovario' => isset($_POST['Abuela_MaternaAntecedentes_Ovario']) ? 'Si' : 'No',
            'Abuela_PaternaAntecedentes_Ovario' => isset($_POST['Abuela_PaternaAntecedentes_Ovario']) ? 'Si' : 'No',
            'Hermana_Antecedentes_Ovario'       => isset($_POST['Hermana_Antecedentes_Ovario']) ? 'Si' : 'No',
            'Madre_Antecedentes_Ovario'         => isset($_POST['Madre_Antecedentes_Ovario']) ? 'Si' : 'No',
            'PrimaMaterna_Antecedentes_Ovario'  => isset($_POST['PrimaMaterna_Antecedentes_Ovario']) ? 'Si' : 'No',
            'Prima_paternaAntecedentes_Ovario'  => isset($_POST['Prima_paternaAntecedentes_Ovario']) ? 'Si' : 'No',
            'Tia_MaternaAntecedentes_Ovario'    => isset($_POST['Tia_MaternaAntecedentes_Ovario']) ? 'Si' : 'No',
            'Tia_PaternaAntecedentes_Ovario'    => isset($_POST['Tia_PaternaAntecedentes_Ovario']) ? 'Si' : 'No',
            'Heredo_CancerMama'                 => $_POST['Heredo_CancerMama'],
            'Abuela_MaternaAntecedentes_Mama'   => isset($_POST['Abuela_MaternaAntecedentes_Mama']) ? 'Si' : 'No',
            'Abuela_PaternaAntecedentes_Mama'   => isset($_POST['Abuela_PaternaAntecedentes_Mama']) ? 'Si' : 'No',
            'Hermana_Antecedentes_Mama'         => isset($_POST['Hermana_Antecedentes_Mama']) ? 'Si' : 'No',
            'Madre_Antecedentes_Mama'           => isset($_POST['Madre_Antecedentes_Mama']) ? 'Si' : 'No',
            'PrimaMaterna_Antecedentes_Mama'    => isset($_POST['PrimaMaterna_Antecedentes_Mama']) ? 'Si' : 'No',
            'Prima_paternaAntecedentes_Mama'    => isset($_POST['Prima_paternaAntecedentes_Mama']) ? 'Si' : 'No',
            'Tia_MaternaAntecedentes_Mama'      => isset($_POST['Tia_MaternaAntecedentes_Mama']) ? 'Si' : 'No',
            'Tia_PaternaAntecedentes_Mama'      => isset($_POST['Tia_PaternaAntecedentes_Mama']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[3],$Data_antecedentes_familiares,$updateColum,$updateId);

        $Data_antecedentes_gineco = array(
            'Menarca'                  => $_POST['Menarca'],
            'Menopausia'               => $_POST['Menopausia'],
            'Gestas'                   => $_POST['Gestas'],
            'Esta_Embarazada'          => $_POST['Esta_Embarazada'],
            'fecha_probableParto'      => $_POST['fecha_probableParto'],
            'Terapia_remplazoHormonal' => $_POST['Terapia_remplazoHormonal'],
            'Lactancia'                => $_POST['Lactancia'],
            'Tiempo'                   => $_POST['Tiempo']
        );
        $connectionDB->updateData($Tables[4],$Data_antecedentes_gineco,$updateColum,$updateId);

        $Data_antecedentes_emb = array(
            'Gestas_Embarazo' => $_POST['Gestas_Embarazo'],
            'Paras'           => $_POST['Paras'],
            'Abortos'         => $_POST['Abortos'],
            'Cesareas'        => $_POST['Cesareas'],
            'Ectopicos'       => $_POST['Ectopicos'],
            'comentarios'     => $_POST['comentarios']
        );
        $connectionDB->updateData($Tables[5],$Data_antecedentes_emb,$updateColum,$updateId);

        $Data_atencion_clinica = array(
            'Fecha_primeraAtencion'   => $_POST['Fecha_primeraAtencion'],
            'BIRADS_Referencia'       => $_POST['BIRADS_Referencia'],
            'BIRADS_Hospital'         => $_POST['BIRADS_Hospital'],
            'Lateralidad'             => $_POST['Lateralidad'],
            'Estado_clinico'          => $_POST['Estado_clinico'],
            'Etapa_Clinica'           => $_POST['Etapa_Clinica'],
            'Estado_Tamaño'           => $_POST['Estado_Tamaño'],
            'Metastasis'              => $_POST['Metastasis'],
            'Calidad_ECOG'            => $_POST['Calidad_ECOG'],
            'Compromiso_linfatico'    => $_POST['Compromiso_linfatico'],
            'Mastectomia_extrain'     => $_POST['Mastectomia_extrain'],
            'Lateralidad_mastectomia' => $_POST['Lateralidad_mastectomia'],
            'fecha_ATC'               => $_POST['fecha_ATC']
        );
        $connectionDB->updateData($Tables[6],$Data_atencion_clinica,$updateColum,$updateId);

        $Data_histopatologia = array(
            'Histopatologia'            => $_POST['Histopatologia'],
            'Histopatologia_area'       => $_POST['Histopatologia_area'],
            'Dx_Histopatologia_area'    => $_POST['Dx_Histopatologia_area'],
            'fecha_dxHistopatologico'   => $_POST['fecha_dxHistopatologico'],
            'Histopatologia_Nottinghan' => $_POST['Histopatologia_Nottinghan'],
            'Histopatologia_Escala_SBR' => $_POST['Histopatologia_Escala_SBR'],
            'Histopatologia_Escala_MID' => $_POST['Histopatologia_Escala_MID']
        );
        $connectionDB->updateData($Tables[7],$Data_histopatologia,$updateColum,$updateId);

        $Data_inmuno = array(
            'Inmunohistoquimica'      => $_POST['Inmunohistoquimica'],
            'Inmunohistoquimica_area' => $_POST['Inmunohistoquimica_area'],
            'Receptores_RE'           => $_POST['Receptores_RE'],
            'Receptores_RP'           => $_POST['Receptores_RP'],
            'KI_67'                   => $_POST['KI_67'],
            'P_53'                    => $_POST['P_53'],
            'Triple_Negativo'         => $_POST['Triple_Negativo'],
            'PDL'                     => $_POST['PDL'],
            'Oncogen_her2'            => $_POST['Oncogen_her2'],
            'FISH'                    => $_POST['FISH']
        );
        $connectionDB->updateData($Tables[8],$Data_inmuno,$updateColum,$updateId);

        $Data_molecular = array(
            'Molecular'       => $_POST['Molecular'],
            'Molecular_area'  => $_POST['Molecular_area'],
            'Luminal_A'       => $_POST['Luminal_A'],
            'Luminal_B'       => $_POST['Luminal_B'],
            'Enriquecido_HER' => $_POST['Enriquecido_HER'],
            'Basal'           => $_POST['Basal']
        );
        $connectionDB->updateData($Tables[9],$Data_molecular,$updateColum,$updateId);

        $Data_tratamiento = array(
            'Quirurgicos'                         => $_POST['Quirurgicos'],
            'Lateralidad_QX'                      => $_POST['Lateralidad_QX'],
            'Tipo_qx'                             => $_POST['Tipo_qx'],
            'tipo_ganglionar'                     => $_POST['tipo_ganglionar'],
            'fecha_ganglionar'                    => $_POST['fecha_ganglionar'],
            'fecha_Mastectomia'                   => $_POST['fecha_Mastectomia'],
            'tipo_Mastectomia'                    => $_POST['tipo_Mastectomia'],
            'tipo_MastReconstruccion_Mastectomia' => $_POST['tipo_MastReconstruccion_Mastectomia']
        );
        $connectionDB->updateData($Tables[10],$Data_tratamiento,$updateColum,$updateId);

        $Data_quimio = array(
            'Quimioterapia' => $_POST['Quimioterapia'],
            'Antraciclinas' => $_POST['Antraciclinas']
        );
        $connectionDB->updateData($Tables[11],$Data_quimio,$updateColum,$updateId);

        $Data_momento1 = array(
            'Tipo_QT'                 => $_POST['Tipo_QT'],
            'FechaInicio_QT'          => $_POST['FechaInicio_QT'],
            'FechaTernmino_QT'        => $_POST['FechaTernmino_QT'],
            '5fu_Esquema'             => isset($_POST['5fu_Esquema']) ? 'Si' : 'No',
            'AC_Esquema'              => isset($_POST['AC_Esquema']) ? 'Si' : 'No',
            'Esquema_AC_T'            => isset($_POST['Esquema_AC_T']) ? 'Si' : 'No',
            'AC_TH_Esquema'           => isset($_POST['AC_TH_Esquema']) ? 'Si' : 'No',
            'AT_Esquema'              => isset($_POST['AT_Esquema']) ? 'Si' : 'No',
            'Atezolizumab_Esquema'    => isset($_POST['Atezolizumab_Esquema']) ? 'Si' : 'No',
            'Bevacizumab_Esquema'     => isset($_POST['Bevacizumab_Esquema']) ? 'Si' : 'No',
            'Capecitabina_Esquema'    => isset($_POST['Capecitabina_Esquema']) ? 'Si' : 'No',
            'CBP_Esquema'             => isset($_POST['CBP_Esquema']) ? 'Si' : 'No',
            'Ciclofosfamida_Esquema'  => isset($_POST['Ciclofosfamida_Esquema']) ? 'Si' : 'No',
            'Cisplatino_Esquema'      => isset($_POST['Cisplatino_Esquema']) ? 'Si' : 'No',
            'CMF_Esquema'             => isset($_POST['CMF_Esquema']) ? 'Si' : 'No',
            'Ctuximab_Esquema'        => isset($_POST['Ctuximab_Esquema']) ? 'Si' : 'No',
            'Docetaxel_Esquema'       => isset($_POST['Docetaxel_Esquema']) ? 'Si' : 'No',
            'EC_Esquema'              => isset($_POST['EC_Esquema']) ? 'Si' : 'No',
            'Etopósido_Esquema'       => isset($_POST['Etopósido_Esquema']) ? 'Si' : 'No',
            'FAC_Esquema'             => isset($_POST['FAC_Esquema']) ? 'Si' : 'No',
            'FEC_Esquema'             => isset($_POST['FEC_Esquema']) ? 'Si' : 'No',
            'Herceptin_Esquema'       => isset($_POST['Herceptin_Esquema']) ? 'Si' : 'No',
            'Lapatinib_Esquema'       => isset($_POST['Lapatinib_Esquema']) ? 'Si' : 'No',
            'Paclitaxel_Esquema'      => isset($_POST['Paclitaxel_Esquema']) ? 'Si' : 'No',
            'Pembrolixumab_Esquema'   => isset($_POST['Pembrolixumab_Esquema']) ? 'Si' : 'No',
            'Pertuzumab_Esquema'      => isset($_POST['Pertuzumab_Esquema']) ? 'Si' : 'No',
            'TAC_Esquema'             => isset($_POST['TAC_Esquema']) ? 'Si' : 'No',
            'TC_Esquema'              => isset($_POST['TC_Esquema']) ? 'Si' : 'No',
            'TCH_Esquema'             => isset($_POST['TCH_Esquema']) ? 'Si' : 'No',
            'TCHP_Esquema'            => isset($_POST['TCHP_Esquema']) ? 'Si' : 'No',
            'TH_Esquema'              => isset($_POST['TH_Esquema']) ? 'Si' : 'No',
            'THP_Esquema'             => isset($_POST['THP_Esquema']) ? 'Si' : 'No',
            'Trastuzumab_Esquema'     => isset($_POST['Trastuzumab_Esquema']) ? 'Si' : 'No',
            'Trastuzumab_SinRegistro' => isset($_POST['Trastuzumab_SinRegistro']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[12],$Data_momento1,$updateColum,$updateId);

        $Data_momento2 = array(
            '5fu'                => isset($_POST['5fu']) ? 'Si' : 'No',
            'AC'                 => isset($_POST['AC']) ? 'Si' : 'No',
            'AC_T_1QT'           => isset($_POST['AC_T_1QT']) ? 'Si' : 'No',
            'AC_TH1QT'           => isset($_POST['AC_TH1QT']) ? 'Si' : 'No',
            'AT_1QT'             => isset($_POST['AT_1QT']) ? 'Si' : 'No',
            'Atezolizumab_1QT'   => isset($_POST['Atezolizumab_1QT']) ? 'Si' : 'No',
            'Bevacizumab_1QT'    => isset($_POST['Bevacizumab_1QT']) ? 'Si' : 'No',
            'Capecitabina_1QT'   => isset($_POST['Capecitabina_1QT']) ? 'Si' : 'No',
            'CBP_1QT'            => isset($_POST['CBP_1QT']) ? 'Si' : 'No',
            'Ciclofosfamida_1QT' => isset($_POST['Ciclofosfamida_1QT']) ? 'Si' : 'No',
            'Cisplatino_1QT'     => isset($_POST['Cisplatino_1QT']) ? 'Si' : 'No',
            'CMF_1QT'            => isset($_POST['CMF_1QT']) ? 'Si' : 'No',
            'Ctuximab_1QT'       => isset($_POST['Ctuximab_1QT']) ? 'Si' : 'No',
            'Docetaxel_1QT'      => isset($_POST['Docetaxel_1QT']) ? 'Si' : 'No',
            'EC_1QT'             => isset($_POST['EC_1QT']) ? 'Si' : 'No',
            'Etopósido_1QT'      => isset($_POST['Etopósido_1QT']) ? 'Si' : 'No',
            'FAC_1QT'            => isset($_POST['FAC_1QT']) ? 'Si' : 'No',
            'FEC_1QT'            => isset($_POST['FEC_1QT']) ? 'Si' : 'No',
            'Herceptin_1QT'      => isset($_POST['Herceptin_1QT']) ? 'Si' : 'No',
            'Lapatinib_1QT'      => isset($_POST['Lapatinib_1QT']) ? 'Si' : 'No',
            'Paclitaxel_1QT'     => isset($_POST['Paclitaxel_1QT']) ? 'Si' : 'No',
            'Pembrolixumab_1QT'  => isset($_POST['Pembrolixumab_1QT']) ? 'Si' : 'No',
            'Pertuzumab_1QT'     => isset($_POST['Pertuzumab_1QT']) ? 'Si' : 'No',
            'TAC_1QT'            => isset($_POST['TAC_1QT']) ? 'Si' : 'No',
            'TC_1QT'             => isset($_POST['TC_1QT']) ? 'Si' : 'No',
            'TCH_1QT'            => isset($_POST['TCH_1QT']) ? 'Si' : 'No',
            'TCHP_1QT'           => isset($_POST['TCHP_1QT']) ? 'Si' : 'No',
            'TH_1QT'             => isset($_POST['TH_1QT']) ? 'Si' : 'No',
            'THP_1QT'            => isset($_POST['THP_1QT']) ? 'Si' : 'No',
            'Trastuzumab_1QT'    => isset($_POST['Trastuzumab_1QT']) ? 'Si' : 'No',
            'SinRegistro_1QT'    => isset($_POST['SinRegistro_1QT']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[13],$Data_momento2,$updateColum,$updateId);

        $Data_momento3 = array(
            'FechaInicio_QTPaliativoz'  => $_POST['FechaInicio_QTPaliativoz'],
            'FechaTermino_QTPaliativo'  => $_POST['FechaTermino_QTPaliativo'],
            '5fu_2doQTP'                => isset($_POST['5fu_2doQTP']) ? 'Si' : 'No',
            'AC_2doQTP'                 => isset($_POST['AC_2doQTP']) ? 'Si' : 'No',
            'AC_T_2doQTP'               => isset($_POST['AC_T_2doQTP']) ? 'Si' : 'No',
            'AC_T_2doQTPV'              => isset($_POST['AC_T_2doQTPV']) ? 'Si' : 'No',
            'AT_2doQTP'                 => isset($_POST['AT_2doQTP']) ? 'Si' : 'No',
            'Atezolizumab_2doQTP'       => isset($_POST['Atezolizumab_2doQTP']) ? 'Si' : 'No',
            'Bevacizumab_2doQTP'        => isset($_POST['Bevacizumab_2doQTP']) ? 'Si' : 'No',
            'Capecitabina_2doQTP'       => isset($_POST['Capecitabina_2doQTP']) ? 'Si' : 'No',
            'CBP_2doQTP'                => isset($_POST['CBP_2doQTP']) ? 'Si' : 'No',
            'Ciclofosfamida_2doQTP'     => isset($_POST['Ciclofosfamida_2doQTP']) ? 'Si' : 'No',
            'Cisplatino_2doQTP'         => isset($_POST['Cisplatino_2doQTP']) ? 'Si' : 'No',
            'CMF_2doQTP'                => isset($_POST['CMF_2doQTP']) ? 'Si' : 'No',
            'Ctuximab_2doQTP'           => isset($_POST['Ctuximab_2doQTP']) ? 'Si' : 'No',
            'Docetaxel_2doQTP'          => isset($_POST['Docetaxel_2doQTP']) ? 'Si' : 'No',
            'EC_2doQTP'                 => isset($_POST['EC_2doQTP']) ? 'Si' : 'No',
            'Etopósido_2doQTP'          => isset($_POST['Etopósido_2doQTP']) ? 'Si' : 'No',
            'FAC_2doQT'                 => isset($_POST['FAC_2doQT']) ? 'Si' : 'No',
            'FEC_2doQTP'                => isset($_POST['FEC_2doQTP']) ? 'Si' : 'No',
            'Herceptin_2doQTP'          => isset($_POST['Herceptin_2doQTP']) ? 'Si' : 'No',
            'Lapatinib_2doQTP'          => isset($_POST['Lapatinib_2doQTP']) ? 'Si' : 'No',
            'Paclitaxel_2doQTP'         => isset($_POST['Paclitaxel_2doQTP']) ? 'Si' : 'No',
            'Pembrolixumab_2doQTP'      => isset($_POST['Pembrolixumab_2doQTP']) ? 'Si' : 'No',
            'Pertuzumab_2doQTP'         => isset($_POST['Pertuzumab_2doQTP']) ? 'Si' : 'No',
            'TAC_2doQTP'                => isset($_POST['TAC_2doQTP']) ? 'Si' : 'No',
            'TC_2doQTP'                 => isset($_POST['TC_2doQTP']) ? 'Si' : 'No',
            'TCH_2doQTP'                => isset($_POST['TCH_2doQTP']) ? 'Si' : 'No',
            'TCHP_2doQTP'               => isset($_POST['TCHP_2doQTP']) ? 'Si' : 'No',
            'TH_2doQTP'                 => isset($_POST['TH_2doQTP']) ? 'Si' : 'No',
            'THP_2doQTP'                => isset($_POST['THP_2doQTP']) ? 'Si' : 'No',
            'Trastuzumab_2doQTP'        => isset($_POST['Trastuzumab_2doQTP']) ? 'Si' : 'No',
            'SinRegistro_2doQTP'        => isset($_POST['SinRegistro_2doQTP']) ? 'Si' : 'No',
            'FechaInicio_QT2Paliativo'  => $_POST['FechaInicio_QT2Paliativo'],
            'FechaTermino_QTP2aliativo' => $_POST['FechaTermino_QTP2aliativo']
        );
        $connectionDB->updateData($Tables[14],$Data_momento3,$updateColum,$updateId);

        $Data_hhtht = array(
            'Hormoterapia'           => $_POST['Hormoterapia'],
            'Hormonoterapia_QT'      => $_POST['Hormonoterapia_QT'],
            'Momento_Hormonoterapia' => $_POST['Momento_Hormonoterapia'],
            'HER_2'                  => $_POST['HER_2'],
            'Esquema_HER'            => $_POST['Esquema_HER'],
            'triple_negativo'        => $_POST['triple_negativo'],
            'EsquemaTriple_negativo' => $_POST['EsquemaTriple_negativo'],
            'Hormosensible'          => $_POST['Hormosensible'],
            'Inhibidores_Ciclinas'   => $_POST['Inhibidores_Ciclinas'],
            'Tipo_Tratamiento'       => $_POST['Tipo_Tratamiento']
        );
        $connectionDB->updateData($Tables[15],$Data_hhtht,$updateColum,$updateId);

        $Data_full_quimio = array(
            'Completo_Quimio'    => $_POST['Completo_Quimio'],
            'CausaQT_Incompleta' => $_POST['CausaQT_Incompleta'],
            'fecha_quimio'       => $_POST['fecha_quimio'],
            'fecha_fallecio'     => $_POST['fecha_fallecio'],
            'Fallecio_causa'     => $_POST['Fallecio_causa'],
            'otra_causa'         => $_POST['otra_causa']
        );
        $connectionDB->updateData($Tables[16],$Data_full_quimio,$updateColum,$updateId);

        $Data_radio_defun = array(
            'Radioterapia'       => $_POST['Radioterapia'],
            'Tipo_radioterapia'  => $_POST['Tipo_radioterapia'],
            'fecha_radioterapia' => $_POST['fecha_radioterapia'],
            'numero_radio'       => $_POST['numero_radio'],
            'Defuncion'          => $_POST['Defuncion'],
            'fecha_Defuncion'    => $_POST['fecha_Defuncion'],
            'causa_defuncion'    => $_POST['causa_defuncion']
        );
        $connectionDB->updateData($Tables[17],$Data_radio_defun,$updateColum,$updateId);

        echo 'success'; 
    }
?>