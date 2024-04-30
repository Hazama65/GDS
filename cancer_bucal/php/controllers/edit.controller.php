<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CB.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);
    $connectionDBClues = new Database(DB_HOST_Clues,DB_NAME_Clues,DB_USERNAME_Clues,DB_PASSWORD_Clues);


    $query_clues="SELECT * FROM clues";
    $AllData_Clues =$connectionDBClues->getRows($query_clues);


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
        JOIN antecedentes ant ON dp.id_paciente = ant.id_paciente
        JOIN hvc ON dp.id_paciente = hvc.id_paciente
        JOIN afecciones_orales ao ON dp.id_paciente = ao.id_paciente
        JOIN lesion_orales lo ON dp.id_paciente = lo.id_paciente
        JOIN ubicacion_derecha ud ON dp.id_paciente = ud.id_paciente
        JOIN ubicacion_izquierda ui ON dp.id_paciente = ui.id_paciente
        JOIN atencion_clinica_histo_inmuno ahm ON dp.id_paciente = ahm.id_paciente
        JOIN tratamiento1 trat1 ON dp.id_paciente = trat1.id_paciente
        JOIN tratamiento2 trat2 ON dp.id_paciente = trat2.id_paciente
        JOIN tratamiento3 trat3 ON dp.id_paciente = trat3.id_paciente
        JOIN exito_defuncion exitdefun ON dp.id_paciente = exitdefun.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);


        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente= $data['id_paciente'];
                $curp = $data['curp'];
                $nombre_completo = $data['nombre_completo'];
                $escolaridad = $data['escolaridad'];
                $birth_date = $data['birth_date'];
                $edad = $data['edad'];
                $sex = $data['sex'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $estado = $data['estado'];
                $municipio = $data['municipio'];
                $ref = $data['ref'];
                $uni_ref = $data['uni_ref'];
                $exp_solar = $data['exp_solar'];
                $num_comidas = $data['num_comidas'];
                $higinee_bucal = $data['higinee_bucal'];
                $alcoholismo = $data['alcoholismo'];
                $tabaquismo = $data['tabaquismo'];
                $cocaina = $data['cocaina'];
                $marihuana = $data['marihuana'];
                $med_control = $data['med_control'];
                $solventes = $data['solventes'];
                $at_ninguno = $data['at_ninguno'];
                $hz_alcohol = $data['hz_alcohol'];
                $tiempo_tabaco = $data['tiempo_tabaco'];
                $num_cigarros = $data['num_cigarros'];
                $autolesiones = $data['autolesiones'];
                $bruxismo = $data['bruxismo'];
                $IL = $data['IL'];
                $onicofagia = $data['onicofagia'];
                $queilofagia = $data['queilofagia'];
                $RO = $data['RO'];
                $SL = $data['SL'];
                $SD = $data['SD'];
                $hab_ninguno = $data['hab_ninguno'];
                $VIH = $data['VIH'];
                $VPH = $data['VPH'];
                $epste_bar = $data['epste_bar'];
                $vr_ninguno = $data['vr_ninguno'];
                $colon_rec = $data['colon_rec'];
                $endometrio = $data['endometrio'];
                $gastrico = $data['gastrico'];
                $higado = $data['higado'];
                $leucemia = $data['leucemia'];
                $hodgkin = $data['hodgkin'];
                $mama = $data['mama'];
                $melanoma = $data['melanoma'];
                $ovario = $data['ovario'];
                $pancreas = $data['pancreas'];
                $prostata = $data['prostata'];
                $pulmon = $data['pulmon'];
                $rinon = $data['rinon'];
                $testiculo = $data['testiculo'];
                $tiroides = $data['tiroides'];
                $vejiga = $data['vejiga'];
                $cancer_ninguno = $data['cancer_ninguno'];
                $afec_dent = $data['afec_dent'];
                $les_orales = $data['les_orales'];
                $ubicacion = $data['ubicacion'];
                $enf_perio = $data['enf_perio'];
                $org_dent_frac = $data['org_dent_frac'];
                $prot_f_desa = $data['prot_f_desa'];
                $prot_f_fract = $data['prot_f_fract'];
                $prot_r_desa = $data['prot_r_desa'];
                $prot_r_fract = $data['prot_r_fract'];
                $msd = $data['msd'];
                $msi = $data['msi'];
                $mid = $data['mid'];
                $mii = $data['mii'];
                $elo = $data['elo'];
                $tipo_tejido = $data['tipo_tejido'];
                $melatonica = $data['melatonica'];
                $nodulo = $data['nodulo'];
                $pigmentada = $data['pigmentada'];
                $tumor = $data['tumor'];
                $ulcera = $data['ulcera'];
                $verruga = $data['verruga'];
                $vesicula = $data['vesicula'];
                $coloracion = $data['coloracion'];
                $ubic_derecha = $data['ubic_derecha'];
                $ubic_Izquierda = $data['ubic_Izquierda'];
                $derec_ninguno = $data['derec_ninguno'];
                $derec_CM = $data['derec_CM'];
                $derec_ES = $data['derec_ES'];
                $derec_labio = $data['derec_labio'];
                $derec_lengua = $data['derec_lengua'];
                $derec_EI = $data['derec_EI'];
                $derec_MP = $data['derec_MP'];
                $derec_MB = $data['derec_MB'];
                $derec_PB = $data['derec_PB'];
                $derec_PD = $data['derec_PD'];
                $derec_piso = $data['derec_piso'];
                $derec_premaxilar = $data['derec_premaxilar'];
                $derec_PA = $data['derec_PA'];
                $derec_RM = $data['derec_RM'];
                $derec_TR = $data['derec_TR'];
                $derec_labios = $data['derec_labios'];
                $derec_lenguas = $data['derec_lenguas'];
                $derec_PBL = $data['derec_PBL'];
                $derec_PDR = $data['derec_PDR'];
                $derec_ESP = $data['derec_ESP'];
                $derec_EIF = $data['derec_EIF'];
                $derec_EROD = $data['derec_EROD'];
                $derec_MSD = $data['derec_MSD'];
                $derec_MID = $data['derec_MID'];
                $izqui_ninguno = $data['izqui_ninguno'];
                $izqui_CM = $data['izqui_CM'];
                $izqui_ES = $data['izqui_ES'];
                $izqui_labio = $data['izqui_labio'];
                $izqui_lengua = $data['izqui_lengua'];
                $izqui_EI = $data['izqui_EI'];
                $izqui_MP = $data['izqui_MP'];
                $izqui_MB = $data['izqui_MB'];
                $izqui_PB = $data['izqui_PB'];
                $izqui_PD = $data['izqui_PD'];
                $izqui_piso = $data['izqui_piso'];
                $izqui_premaxilar = $data['izqui_premaxilar'];
                $izqui_PA = $data['izqui_PA'];
                $izqui_RM = $data['izqui_RM'];
                $izqui_TR = $data['izqui_TR'];
                $izqui_labios = $data['izqui_labios'];
                $izqui_lenguas = $data['izqui_lenguas'];
                $izqui_PBL = $data['izqui_PBL'];
                $izqui_PDR = $data['izqui_PDR'];
                $izqui_ESP = $data['izqui_ESP'];
                $izqui_EIF = $data['izqui_EIF'];
                $izqui_EROD = $data['izqui_EROD'];
                $izqui_MSD = $data['izqui_MSD'];
                $izqui_MID = $data['izqui_MID'];
                $fecha_primera_at = $data['fecha_primera_at'];
                $etapa_clinica = $data['etapa_clinica'];
                $size_tumoral = $data['size_tumoral'];
                $compro_linfa = $data['compro_linfa'];
                $metastatis = $data['metastatis'];
                $at_sinReg = $data['at_sinReg'];
                $at_hepatica = $data['at_hepatica'];
                $at_pulmonar = $data['at_pulmonar'];
                $at_cerebrales = $data['at_cerebrales'];
                $at_oseas = $data['at_oseas'];
                $at_cervicouterino = $data['at_cervicouterino'];
                $at_mediastino = $data['at_mediastino'];
                $at_suprarrenal = $data['at_suprarrenal'];
                $at_tiroidea = $data['at_tiroidea'];
                $at_ganglionar = $data['at_ganglionar'];
                $estado_clinico = $data['estado_clinico'];
                $ECOG = $data['ECOG'];
                $dx_histo = $data['dx_histo'];
                $fecha_repo = $data['fecha_repo'];
                $tipo_histo = $data['tipo_histo'];
                $maligno_histo = $data['maligno_histo'];
                $inmuno_pdl = $data['inmuno_pdl'];
                $inmuno_pdl_val = $data['inmuno_pdl_val'];
                $tx_quimio = $data['tx_quimio'];
                $tx_5Fluororacilo = $data['tx_5Fluororacilo'];
                $tx_Beuacizumab = $data['tx_Beuacizumab'];
                $tx_Capecitabina = $data['tx_Capecitabina'];
                $tx_Carboplatino = $data['tx_Carboplatino'];
                $tx_Cetuximab = $data['tx_Cetuximab'];
                $tx_Ciclofosfamida = $data['tx_Ciclofosfamida'];
                $tx_Cisplatino = $data['tx_Cisplatino'];
                $tx_Docetaxel = $data['tx_Docetaxel'];
                $tx_Etoposido = $data['tx_Etoposido'];
                $tx_Herceptin = $data['tx_Herceptin'];
                $tx_Paclitaxel = $data['tx_Paclitaxel'];
                $tx_Pertuzumab = $data['tx_Pertuzumab'];
                $tx_Trastuzumab = $data['tx_Trastuzumab'];
                $tx_quiru = $data['tx_quiru'];
                $tx_quiru_tipo = $data['tx_quiru_tipo'];
                $lugar_DRMC = $data['lugar_DRMC'];
                $tipo_DRMC = $data['tipo_DRMC'];
                $nivel_cervical = $data['nivel_cervical'];
                $tx_maxilo_infra = $data['tx_maxilo_infra'];
                $tx_recontruccion = $data['tx_recontruccion'];
                $recons_ninguno = $data['recons_ninguno'];
                $recons_CM = $data['recons_CM'];
                $recons_IO = $data['recons_IO'];
                $recons_MO = $data['recons_MO'];
                $recons_RC = $data['recons_RC'];
                $recons_AI = $data['recons_AI'];
                $tx_radio = $data['tx_radio'];
                $fecha_radio = $data['fecha_radio'];
                $momento_radio = $data['momento_radio'];
                $dosis_radio = $data['dosis_radio'];
                $fracciones_dosis = $data['fracciones_dosis'];
                $no_fracciones = $data['no_fracciones'];
                $fracciones_tecnica = $data['fracciones_tecnica'];
                $rt_caries = $data['rt_caries'];
                $rt_disgeusia = $data['rt_disgeusia'];
                $rt_dolor = $data['rt_dolor'];
                $rt_fractura = $data['rt_fractura'];
                $rt_infeccion = $data['rt_infeccion'];
                $rt_hemorragias = $data['rt_hemorragias'];
                $rt_mucositis = $data['rt_mucositis'];
                $rt_osteonecrosis = $data['rt_osteonecrosis'];
                $rt_parestesia = $data['rt_parestesia'];
                $rt_propios = $data['rt_propios'];
                $rt_radiodermitis = $data['rt_radiodermitis'];
                $rt_RA = $data['rt_RA'];
                $rt_trismus = $data['rt_trismus'];
                $rt_xerostomia = $data['rt_xerostomia'];
                $rt_ninguno = $data['rt_ninguno'];
                $OARS_CO = $data['OARS_CO'];
                $OARS_cocleas = $data['OARS_cocleas'];
                $OARS_cristalinos = $data['OARS_cristalinos'];
                $OARS_esofago = $data['OARS_esofago'];
                $OARS_labios = $data['OARS_labios'];
                $OARS_laringe = $data['OARS_laringe'];
                $OARS_mandibula = $data['OARS_mandibula'];
                $OARS_medula = $data['OARS_medula'];
                $OARS_NO = $data['OARS_NO'];
                $OARS_ojos = $data['OARS_ojos'];
                $OARS_PFP = $data['OARS_PFP'];
                $OARS_parotidas = $data['OARS_parotidas'];
                $OARS_sublinguales = $data['OARS_sublinguales'];
                $OARS_tallo = $data['OARS_tallo'];
                $OARS_tiroides = $data['OARS_tiroides'];
                $Dosis_Máx_CO = $data['Dosis_Máx_CO'];
                $Dosis_Prom_CO = $data['Dosis_Prom_CO'];
                $Dosis_Máx_Cocleas = $data['Dosis_Máx_Cocleas'];
                $Dosis_Prom_Cocleas = $data['Dosis_Prom_Cocleas'];
                $Dosis_Máx_Cristalinos = $data['Dosis_Máx_Cristalinos'];
                $Dosis_Prom_Cristalinos = $data['Dosis_Prom_Cristalinos'];
                $Dosis_Máx_Esofago = $data['Dosis_Máx_Esofago'];
                $Dosis_Prom_Esofago = $data['Dosis_Prom_Esofago'];
                $Dosis_Máx_Labios = $data['Dosis_Máx_Labios'];
                $Dosis_Prom_Labios = $data['Dosis_Prom_Labios'];
                $Dosis_Máx_Laringe = $data['Dosis_Máx_Laringe'];
                $Dosis_Prom_Laringe = $data['Dosis_Prom_Laringe'];
                $Dosis_Máx_Mandibula = $data['Dosis_Máx_Mandibula'];
                $Dosis_Prom_Mandibula = $data['Dosis_Prom_Mandibula'];
                $Dosis_Máx_Medula = $data['Dosis_Máx_Medula'];
                $Dosis_Prom_Medula = $data['Dosis_Prom_Medula'];
                $Dosis_Máx_NO = $data['Dosis_Máx_NO'];
                $Dosis_Prom_NO = $data['Dosis_Prom_NO'];
                $Dosis_Máx_Ojos = $data['Dosis_Máx_Ojos'];
                $Dosis_Prom_Ojos = $data['Dosis_Prom_Ojos'];
                $Dosis_Máx_PFP = $data['Dosis_Máx_PFP'];
                $Dosis_Prom_PFP = $data['Dosis_Prom_PFP'];
                $Dosis_Máx_Parotidas = $data['Dosis_Máx_Parotidas'];
                $Dosis_Prom_Parotidas = $data['Dosis_Prom_Parotidas'];
                $Dosis_Máx_Sublinguales = $data['Dosis_Máx_Sublinguales'];
                $Dosis_Prom_Sublinguales = $data['Dosis_Prom_Sublinguales'];
                $Dosis_Máx_Tallo = $data['Dosis_Máx_Tallo'];
                $Dosis_Prom_Tallo = $data['Dosis_Prom_Tallo'];
                $Dosis_Máx_Tiroides = $data['Dosis_Máx_Tiroides'];
                $Dosis_Prom_Tiroides = $data['Dosis_Prom_Tiroides'];
                $caso_exitoso = $data['caso_exitoso'];
                $resp_tx = $data['resp_tx'];
                $defuncion = $data['defuncion'];
                $fecha_defuncion = $data['fecha_defuncion'];
                $causa_defuncion = $data['causa_defuncion'];

            }
        }
    }

?>