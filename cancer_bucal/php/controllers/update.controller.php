<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CB.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Tables = array(
            $table_datos_paciente                = 'datos_paciente',
            $table_antecedentes                  = 'antecedentes',
            $table_hvc                           = 'hvc',
            $table_afecciones_orales             = 'afecciones_orales',
            $table_lesion_orales                 = 'lesion_orales',
            $table_ubicacion_derecha             = 'ubicacion_derecha',
            $table_ubicacion_izquierda           = 'ubicacion_izquierda',
            $table_atencion_clinica_histo_inmuno = 'atencion_clinica_histo_inmuno',
            $table_tratamiento1                  = 'tratamiento1',
            $table_tratamiento2                  = 'tratamiento2',
            $table_tratamiento3                  = 'tratamiento3',
            $table_exito_defuncion               = 'exito_defuncion',
        );
        $updateColum ='id_paciente';
        $updateId    = $_POST['id_paciente'];

        $Data_pacientes = array(
            'curp'            => $_POST['curp'],
            'nombre_completo' => $_POST['nombre_completo'],
            'escolaridad'     => $_POST['escolaridad'],
            'birth_date'      => $_POST['birth_date'],
            'edad'            => $_POST['edad'],
            'sex'             => $_POST['sex'],
            'talla'           => $_POST['talla'],
            'peso'            => $_POST['peso'],
            'imc'             => $_POST['imc'],
            'estado'          => $_POST['estado'],
            'municipio'       => $_POST['municipio'],
            'ref'             => $_POST['ref'],
            'uni_ref'         => $_POST['uni_ref'],
        );
        $connectionDB->updateData($Tables[0],$Data_pacientes,$updateColum,$updateId);


        $Data_antecedentes = array(
            'exp_solar'      => $_POST['exp_solar'],
            'num_comidas'    => $_POST['num_comidas'],
            'higinee_bucal'  => $_POST['higinee_bucal'],
            'alcoholismo'    => isset($_POST['alcoholismo']) ? 'Si' : 'No',
            'tabaquismo'     => isset($_POST['tabaquismo']) ? 'Si' : 'No',
            'cocaina'        => isset($_POST['cocaina']) ? 'Si' : 'No',
            'marihuana'      => isset($_POST['marihuana']) ? 'Si' : 'No',
            'med_control'    => isset($_POST['med_control']) ? 'Si' : 'No',
            'solventes'      => isset($_POST['solventes']) ? 'Si' : 'No',
            'at_ninguno'     => isset($_POST['at_ninguno']) ? 'Si' : 'No',
            'hz_alcohol'     => $_POST['hz_alcohol'],
            'tiempo_tabaco'  => $_POST['tiempo_tabaco'],
            'num_cigarros'   => $_POST['num_cigarros']
        );
        $connectionDB->updateData($Tables[1],$Data_antecedentes,$updateColum,$updateId);

        $Data_hvc = array(
            'autolesiones'    => isset($_POST['autolesiones']) ? 'Si' : 'No',
            'bruxismo'        => isset($_POST['bruxismo']) ? 'Si' : 'No',
            'IL'              => isset($_POST['IL']) ? 'Si' : 'No',
            'onicofagia'      => isset($_POST['onicofagia']) ? 'Si' : 'No',
            'queilofagia'     => isset($_POST['queilofagia']) ? 'Si' : 'No',
            'RO'              => isset($_POST['RO']) ? 'Si' : 'No',
            'SL'              => isset($_POST['SL']) ? 'Si' : 'No',
            'SD'              => isset($_POST['SD']) ? 'Si' : 'No',
            'hab_ninguno'     => isset($_POST['hab_ninguno']) ? 'Si' : 'No',
            'VIH'             => isset($_POST['VIH']) ? 'Si' : 'No',
            'VPH'             => isset($_POST['VPH']) ? 'Si' : 'No',
            'epste_bar'       => isset($_POST['epste_bar']) ? 'Si' : 'No',
            'vr_ninguno'      => isset($_POST['vr_ninguno']) ? 'Si' : 'No',
            'colon_rec'       => isset($_POST['colon_rec']) ? 'Si' : 'No',
            'endometrio'      => isset($_POST['endometrio']) ? 'Si' : 'No',
            'gastrico'        => isset($_POST['gastrico']) ? 'Si' : 'No',
            'higado'          => isset($_POST['higado']) ? 'Si' : 'No',
            'leucemia'        => isset($_POST['leucemia']) ? 'Si' : 'No',
            'hodgkin'         => isset($_POST['hodgkin']) ? 'Si' : 'No',
            'mama'            => isset($_POST['mama']) ? 'Si' : 'No',
            'melanoma'        => isset($_POST['melanoma']) ? 'Si' : 'No',
            'ovario'          => isset($_POST['ovario']) ? 'Si' : 'No',
            'pancreas'        => isset($_POST['pancreas']) ? 'Si' : 'No',
            'prostata'        => isset($_POST['prostata']) ? 'Si' : 'No',
            'pulmon'          => isset($_POST['pulmon']) ? 'Si' : 'No',
            'rinon'           => isset($_POST['rinon']) ? 'Si' : 'No',
            'testiculo'       => isset($_POST['testiculo']) ? 'Si' : 'No',
            'tiroides'        => isset($_POST['tiroides']) ? 'Si' : 'No',
            'vejiga'          => isset($_POST['vejiga']) ? 'Si' : 'No',
            'cancer_ninguno'  => isset($_POST['cancer_ninguno']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[2],$Data_hvc,$updateColum,$updateId);


        $Data_afecciones_orales = array(
            'afec_dent'      => isset($_POST['afec_dent']) ? 'Si' : 'No',
            'les_orales'     => isset($_POST['les_orales']) ? 'Si' : 'No',
            'ubicacion'      => isset($_POST['ubicacion']) ? 'Si' : 'No',
            'enf_perio'      => isset($_POST['enf_perio']) ? 'Si' : 'No',
            'org_dent_frac'  => isset($_POST['org_dent_frac']) ? 'Si' : 'No',
            'prot_f_desa'    => isset($_POST['prot_f_desa']) ? 'Si' : 'No',
            'prot_f_fract'   => isset($_POST['prot_f_fract']) ? 'Si' : 'No',
            'prot_r_desa'    => isset($_POST['prot_r_desa']) ? 'Si' : 'No',
            'prot_r_fract'   => isset($_POST['prot_r_fract']) ? 'Si' : 'No',
            'msd'            => $_POST['msd'],
            'msi'            => $_POST['msi'],
            'mid'            => $_POST['mid'],
            'mii'            => $_POST['mii']
        );
        $connectionDB->updateData($Tables[3],$Data_afecciones_orales,$updateColum,$updateId);


        $Data_lesion_orales = array(
            'elo'             => $_POST['elo'],
            'tipo_tejido'     => $_POST['tipo_tejido'],
            'melatonica'      => isset($_POST['melatonica']) ? 'Si' : 'No',
            'nodulo'          => isset($_POST['nodulo']) ? 'Si' : 'No',
            'pigmentada'      => isset($_POST['pigmentada']) ? 'Si' : 'No',
            'tumor'           => isset($_POST['tumor']) ? 'Si' : 'No',
            'ulcera'          => isset($_POST['ulcera']) ? 'Si' : 'No',
            'verruga'         => isset($_POST['verruga']) ? 'Si' : 'No',
            'vesicula'        => isset($_POST['vesicula']) ? 'Si' : 'No',
            'coloracion'      => $_POST['coloracion'],
            'ubic_derecha'    => isset($_POST['ubic_derecha']) ? 'Si' : 'No',
            'ubic_Izquierda'  => isset($_POST['ubic_Izquierda']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[4],$Data_lesion_orales,$updateColum,$updateId);


        $Data_ubicacion_derecha = array(
            'derec_ninguno'     => isset($_POST['derec_ninguno']) ? 'Si' : 'No',
            'derec_CM'          => isset($_POST['derec_CM']) ? 'Si' : 'No',
            'derec_ES'          => isset($_POST['derec_ES']) ? 'Si' : 'No',
            'derec_labio'       => isset($_POST['derec_labio']) ? 'Si' : 'No',
            'derec_lengua'      => isset($_POST['derec_lengua']) ? 'Si' : 'No',
            'derec_EI'          => isset($_POST['derec_EI']) ? 'Si' : 'No',
            'derec_MP'          => isset($_POST['derec_MP']) ? 'Si' : 'No',
            'derec_MB'          => isset($_POST['derec_MB']) ? 'Si' : 'No',
            'derec_PB'          => isset($_POST['derec_PB']) ? 'Si' : 'No',
            'derec_PD'          => isset($_POST['derec_PD']) ? 'Si' : 'No',
            'derec_piso'        => isset($_POST['derec_piso']) ? 'Si' : 'No',
            'derec_premaxilar'  => isset($_POST['derec_premaxilar']) ? 'Si' : 'No',
            'derec_PA'          => isset($_POST['derec_PA']) ? 'Si' : 'No',
            'derec_RM'          => isset($_POST['derec_RM']) ? 'Si' : 'No',
            'derec_TR'          => isset($_POST['derec_TR']) ? 'Si' : 'No',
            'derec_labios'      => $_POST['derec_labios'],
            'derec_lenguas'     => $_POST['derec_lenguas'],
            'derec_PBL'         => $_POST['derec_PBL'],
            'derec_PDR'         => $_POST['derec_PDR'],
            'derec_ESP'         => $_POST['derec_ESP'],
            'derec_EIF'         => $_POST['derec_EIF'],
            'derec_EROD'        => $_POST['derec_EROD'],
            'derec_MSD'         => $_POST['derec_MSD'],
            'derec_MID'         => $_POST['derec_MID']
        );
        $connectionDB->updateData($Tables[5],$Data_ubicacion_derecha,$updateColum,$updateId);


        $Data_ubicacion_izquierda = array(
            'izqui_ninguno'     => isset($_POST['izqui_ninguno']) ? 'Si' : 'No',
            'izqui_CM'          => isset($_POST['izqui_CM']) ? 'Si' : 'No',
            'izqui_ES'          => isset($_POST['izqui_ES']) ? 'Si' : 'No',
            'izqui_labio'       => isset($_POST['izqui_labio']) ? 'Si' : 'No',
            'izqui_lengua'      => isset($_POST['izqui_lengua']) ? 'Si' : 'No',
            'izqui_EI'          => isset($_POST['izqui_EI']) ? 'Si' : 'No',
            'izqui_MP'          => isset($_POST['izqui_MP']) ? 'Si' : 'No',
            'izqui_MB'          => isset($_POST['izqui_MB']) ? 'Si' : 'No',
            'izqui_PB'          => isset($_POST['izqui_PB']) ? 'Si' : 'No',
            'izqui_PD'          => isset($_POST['izqui_PD']) ? 'Si' : 'No',
            'izqui_piso'        => isset($_POST['izqui_piso']) ? 'Si' : 'No',
            'izqui_premaxilar'  => isset($_POST['izqui_premaxilar']) ? 'Si' : 'No',
            'izqui_PA'          => isset($_POST['izqui_PA']) ? 'Si' : 'No',
            'izqui_RM'          => isset($_POST['izqui_RM']) ? 'Si' : 'No',
            'izqui_TR'          => isset($_POST['izqui_TR']) ? 'Si' : 'No',
            'izqui_labios'      => $_POST['izqui_labios'],
            'izqui_lenguas'     => $_POST['izqui_lenguas'],
            'izqui_PBL'         => $_POST['izqui_PBL'],
            'izqui_PDR'         => $_POST['izqui_PDR'],
            'izqui_ESP'         => $_POST['izqui_ESP'],
            'izqui_EIF'         => $_POST['izqui_EIF'],
            'izqui_EROD'        => $_POST['izqui_EROD'],
            'izqui_MSD'         => $_POST['izqui_MSD'],
            'izqui_MID'         => $_POST['izqui_MID']
        );
        $connectionDB->updateData($Tables[6],$Data_ubicacion_izquierda,$updateColum,$updateId);


        $Data_atencion_clinica_histo_inmuno = array(
            'fecha_primera_at'   => $_POST['fecha_primera_at'],
            'etapa_clinica'      => $_POST['etapa_clinica'],
            'size_tumoral'       => $_POST['size_tumoral'],
            'compro_linfa'       => $_POST['compro_linfa'],
            'metastatis'         => $_POST['metastatis'],
            'at_sinReg'          => isset($_POST['at_sinReg']) ? 'Si' : 'No',
            'at_hepatica'        => isset($_POST['at_hepatica']) ? 'Si' : 'No',
            'at_pulmonar'        => isset($_POST['at_pulmonar']) ? 'Si' : 'No',
            'at_cerebrales'      => isset($_POST['at_cerebrales']) ? 'Si' : 'No',
            'at_oseas'           => isset($_POST['at_oseas']) ? 'Si' : 'No',
            'at_cervicouterino'  => isset($_POST['at_cervicouterino']) ? 'Si' : 'No',
            'at_mediastino'      => isset($_POST['at_mediastino']) ? 'Si' : 'No',
            'at_suprarrenal'     => isset($_POST['at_suprarrenal']) ? 'Si' : 'No',
            'at_tiroidea'        => isset($_POST['at_tiroidea']) ? 'Si' : 'No',
            'at_ganglionar'      => isset($_POST['at_ganglionar']) ? 'Si' : 'No',
            'estado_clinico'     => $_POST['estado_clinico'],
            'ECOG'               => $_POST['ECOG'],
            'dx_histo'           => $_POST['dx_histo'],
            'fecha_repo'         => $_POST['fecha_repo'],
            'tipo_histo'         => $_POST['tipo_histo'],
            'maligno_histo'      => $_POST['maligno_histo'],
            'inmuno_pdl'         => $_POST['inmuno_pdl'],
            'inmuno_pdl_val'     => $_POST['inmuno_pdl_val']
        );
        $connectionDB->updateData($Tables[7],$Data_atencion_clinica_histo_inmuno,$updateColum,$updateId);


        $Data_tratamiento1 = array(
            'tx_quimio'          => $_POST['tx_quimio'],
            'tx_5Fluororacilo'   => isset($_POST['tx_5Fluororacilo']) ? 'Si' : 'No',
            'tx_Beuacizumab'     => isset($_POST['tx_Beuacizumab']) ? 'Si' : 'No',
            'tx_Capecitabina'    => isset($_POST['tx_Capecitabina']) ? 'Si' : 'No',
            'tx_Carboplatino'    => isset($_POST['tx_Carboplatino']) ? 'Si' : 'No',
            'tx_Cetuximab'       => isset($_POST['tx_Cetuximab']) ? 'Si' : 'No',
            'tx_Ciclofosfamida'  => isset($_POST['tx_Ciclofosfamida']) ? 'Si' : 'No',
            'tx_Cisplatino'      => isset($_POST['tx_Cisplatino']) ? 'Si' : 'No',
            'tx_Docetaxel'       => isset($_POST['tx_Docetaxel']) ? 'Si' : 'No',
            'tx_Etoposido'       => isset($_POST['tx_Etoposido']) ? 'Si' : 'No',
            'tx_Herceptin'       => isset($_POST['tx_Herceptin']) ? 'Si' : 'No',
            'tx_Paclitaxel'      => isset($_POST['tx_Paclitaxel']) ? 'Si' : 'No',
            'tx_Pertuzumab'      => isset($_POST['tx_Pertuzumab']) ? 'Si' : 'No',
            'tx_Trastuzumab'     => isset($_POST['tx_Trastuzumab']) ? 'Si' : 'No',
            'tx_quiru'           => $_POST['tx_quiru'],
            'tx_quiru_tipo'      => $_POST['tx_quiru_tipo'],
            'lugar_DRMC'         => $_POST['lugar_DRMC'],
            'tipo_DRMC'          => $_POST['tipo_DRMC'],
            'nivel_cervical'     => $_POST['nivel_cervical'],
            'tx_maxilo_infra'    => $_POST['tx_maxilo_infra'],
            'tx_recontruccion'   => $_POST['tx_recontruccion'],
            'recons_ninguno'     => isset($_POST['recons_ninguno']) ? 'Si' : 'No',
            'recons_CM'          => isset($_POST['recons_CM']) ? 'Si' : 'No',
            'recons_IO'          => isset($_POST['recons_IO']) ? 'Si' : 'No',
            'recons_MO'          => isset($_POST['recons_MO']) ? 'Si' : 'No',
            'recons_RC'          => isset($_POST['recons_RC']) ? 'Si' : 'No',
            'recons_AI'          => isset($_POST['recons_AI']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[8],$Data_tratamiento1,$updateColum,$updateId);


        $Data_tratamiento2 = array(
            'tx_radio'            => $_POST['tx_radio'],
            'fecha_radio'         => $_POST['fecha_radio'],
            'momento_radio'       => $_POST['momento_radio'],
            'dosis_radio'         => $_POST['dosis_radio'],
            'fracciones_dosis'    => $_POST['fracciones_dosis'],
            'no_fracciones'       => $_POST['no_fracciones'],
            'fracciones_tecnica'  => $_POST['fracciones_tecnica'],
            'rt_caries'           => isset($_POST['rt_caries']) ? 'Si' : 'No',
            'rt_disgeusia'        => isset($_POST['rt_disgeusia']) ? 'Si' : 'No',
            'rt_dolor'            => isset($_POST['rt_dolor']) ? 'Si' : 'No',
            'rt_fractura'         => isset($_POST['rt_fractura']) ? 'Si' : 'No',
            'rt_infeccion'        => isset($_POST['rt_infeccion']) ? 'Si' : 'No',
            'rt_hemorragias'      => isset($_POST['rt_hemorragias']) ? 'Si' : 'No',
            'rt_mucositis'        => isset($_POST['rt_mucositis']) ? 'Si' : 'No',
            'rt_osteonecrosis'    => isset($_POST['rt_osteonecrosis']) ? 'Si' : 'No',
            'rt_parestesia'       => isset($_POST['rt_parestesia']) ? 'Si' : 'No',
            'rt_propios'          => isset($_POST['rt_propios']) ? 'Si' : 'No',
            'rt_radiodermitis'    => isset($_POST['rt_radiodermitis']) ? 'Si' : 'No',
            'rt_RA'               => isset($_POST['rt_RA']) ? 'Si' : 'No',
            'rt_trismus'          => isset($_POST['rt_trismus']) ? 'Si' : 'No',
            'rt_xerostomia'       => isset($_POST['rt_xerostomia']) ? 'Si' : 'No',
            'rt_ninguno'          => isset($_POST['rt_ninguno']) ? 'Si' : 'No'
        );
        $connectionDB->updateData($Tables[9],$Data_tratamiento2,$updateColum,$updateId);


        $Data_tratamiento3 = array(
            'OARS_CO'                 => isset($_POST['OARS_CO']) ? 'Si' : 'No',
            'OARS_cocleas'            => isset($_POST['OARS_cocleas']) ? 'Si' : 'No',
            'OARS_cristalinos'        => isset($_POST['OARS_cristalinos']) ? 'Si' : 'No',
            'OARS_esofago'            => isset($_POST['OARS_esofago']) ? 'Si' : 'No',
            'OARS_labios'             => isset($_POST['OARS_labios']) ? 'Si' : 'No',
            'OARS_laringe'            => isset($_POST['OARS_laringe']) ? 'Si' : 'No',
            'OARS_mandibula'          => isset($_POST['OARS_mandibula']) ? 'Si' : 'No',
            'OARS_medula'             => isset($_POST['OARS_medula']) ? 'Si' : 'No',
            'OARS_NO'                 => isset($_POST['OARS_NO']) ? 'Si' : 'No',
            'OARS_ojos'               => isset($_POST['OARS_ojos']) ? 'Si' : 'No',
            'OARS_PFP'                => isset($_POST['OARS_PFP']) ? 'Si' : 'No',
            'OARS_parotidas'          => isset($_POST['OARS_parotidas']) ? 'Si' : 'No',
            'OARS_sublinguales'       => isset($_POST['OARS_sublinguales']) ? 'Si' : 'No',
            'OARS_tallo'              => isset($_POST['OARS_tallo']) ? 'Si' : 'No',
            'OARS_tiroides'           => isset($_POST['OARS_tiroides']) ? 'Si' : 'No',
            'Dosis_Máx_CO'            => $_POST['Dosis_Máx_CO'],
            'Dosis_Prom_CO'           => $_POST['Dosis_Prom_CO'],
            'Dosis_Máx_Cocleas'       => $_POST['Dosis_Máx_Cocleas'],
            'Dosis_Prom_Cocleas'      => $_POST['Dosis_Prom_Cocleas'],
            'Dosis_Máx_Cristalinos'   => $_POST['Dosis_Máx_Cristalinos'],
            'Dosis_Prom_Cristalinos'  => $_POST['Dosis_Prom_Cristalinos'],
            'Dosis_Máx_Esofago'       => $_POST['Dosis_Máx_Esofago'],
            'Dosis_Prom_Esofago'      => $_POST['Dosis_Prom_Esofago'],
            'Dosis_Máx_Labios'        => $_POST['Dosis_Máx_Labios'],
            'Dosis_Prom_Labios'       => $_POST['Dosis_Prom_Labios'],
            'Dosis_Máx_Laringe'       => $_POST['Dosis_Máx_Laringe'],
            'Dosis_Prom_Laringe'      => $_POST['Dosis_Prom_Laringe'],
            'Dosis_Máx_Mandibula'     => $_POST['Dosis_Máx_Mandibula'],
            'Dosis_Prom_Mandibula'    => $_POST['Dosis_Prom_Mandibula'],
            'Dosis_Máx_Medula'        => $_POST['Dosis_Máx_Medula'],
            'Dosis_Prom_Medula'       => $_POST['Dosis_Prom_Medula'],
            'Dosis_Máx_NO'            => $_POST['Dosis_Máx_NO'],
            'Dosis_Prom_NO'           => $_POST['Dosis_Prom_NO'],
            'Dosis_Máx_Ojos'          => $_POST['Dosis_Máx_Ojos'],
            'Dosis_Prom_Ojos'         => $_POST['Dosis_Prom_Ojos'],
            'Dosis_Máx_PFP'           => $_POST['Dosis_Máx_PFP'],
            'Dosis_Prom_PFP'          => $_POST['Dosis_Prom_PFP'],
            'Dosis_Máx_Parotidas'     => $_POST['Dosis_Máx_Parotidas'],
            'Dosis_Prom_Parotidas'    => $_POST['Dosis_Prom_Parotidas'],
            'Dosis_Máx_Sublinguales'  => $_POST['Dosis_Máx_Sublinguales'],
            'Dosis_Prom_Sublinguales' => $_POST['Dosis_Prom_Sublinguales'],
            'Dosis_Máx_Tallo'         => $_POST['Dosis_Máx_Tallo'],
            'Dosis_Prom_Tallo'        => $_POST['Dosis_Prom_Tallo'],
            'Dosis_Máx_Tiroides'      => $_POST['Dosis_Máx_Tiroides'],
            'Dosis_Prom_Tiroides'     => $_POST['Dosis_Prom_Tiroides']
        );
        $connectionDB->updateData($Tables[10],$Data_tratamiento3,$updateColum,$updateId);


        $Data_exito_defuncion = array(
            'caso_exitoso'     => $_POST['caso_exitoso'],
            'resp_tx'          => $_POST['resp_tx'],
            'defuncion'        => $_POST['defuncion'],
            'fecha_defuncion'  => $_POST['fecha_defuncion'],
            'causa_defuncion'  => $_POST['causa_defuncion']
        );
        $connectionDB->updateData($Tables[11],$Data_exito_defuncion,$updateColum,$updateId);




        echo 'success'; 
    }
?>