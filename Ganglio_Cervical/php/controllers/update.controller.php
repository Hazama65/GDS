<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
            $id_paciente          = $_POST['id_paciente'];  
            $nombre_paciente      = $_POST['nombre_paciente'];
            $sexo                 = $_POST['sexo'];
            $edad                 = $_POST['edad'];
            $residencia           = $_POST['residencia'];
            $Nivel_socioeconomico = $_POST['Nivel_socioeconomico'];
            
            $queryPacientes = "UPDATE datos_paciente SET 
                nombre_paciente = '$nombre_paciente',
                sexo = '$sexo',
                edad = '$edad',
                residencia = '$residencia',
                nivel_socioeconomico = '$Nivel_socioeconomico'
            WHERE id_paciente = $id_paciente";
            $dataPacientes = $connectionDB->ShotSimple($queryPacientes);

            
            $contacto_personas = $_POST['contacto_personas'];
            $TosCronicaSelect  = $_POST['TosCronicaSelect'];
            $TosPadre          = $_POST['TosPadre'];
            $Tos_Madre         = $_POST['Tos_Madre'];
            $TosAbueloMaterno  = $_POST['TosAbueloMaterno'];
            $TosAbuelaMaterna  = $_POST['TosAbuelaMaterna'];
            $TosAbueloPaterno  = $_POST['TosAbueloPaterno'];
            $TosAbuelaPaterna  = $_POST['TosAbuelaPaterna'];
            $Tos_hermanas      = $_POST['Tos_hermanas'];
            $Tos_hermanos      = $_POST['Tos_hermanos'];

            $queryTos = "UPDATE apnp_tos SET
                contacto_enfermos = '$contacto_personas',
                tos_cronica = '$TosCronicaSelect',
                tos_padre = '$TosPadre',
                tos_madre = '$Tos_Madre',
                tos_abuelo_m = '$TosAbueloMaterno',
                tos_abuela_m = '$TosAbuelaMaterna',
                tos_abuelo_p = '$TosAbueloPaterno',
                tos_abuela_p = '$TosAbuelaPaterna',
                tos_no_hermanas = '$Tos_hermanas',
                tos_no_hermanos = '$Tos_hermanos'
            WHERE id_paciente = $id_paciente";
            $dataTos = $connectionDB->ShotSimple($queryTos);


            $TuberculosisSelect = $_POST['TuberculosisSelect'];
            $TuberPadre         = $_POST['TuberPadre'];
            $TuberMadre         = $_POST['TuberMadre'];
            $TuberAbueloMaterno = $_POST['TuberAbueloMaterno'];
            $TuberAbuelaMaterna = $_POST['TuberAbuelaMaterna'];
            $TuberAbueloPaterno = $_POST['TuberAbueloPaterno'];
            $TuberAbuelaPaterna = $_POST['TuberAbuelaPaterna'];
            $Tuber_hermanas     = $_POST['Tuber_hermanas'];
            $Tuber_hermanos     = $_POST['Tuber_hermanos'];

            $queryTuber = "UPDATE apnp_tuberculosis SET 
                tuberculosis = '$TuberculosisSelect',
                tuberculosis_padre = '$TuberPadre',
                tuberculosis_madre = '$TuberMadre',
                tuberculosis_abuelo_m = '$TuberAbueloMaterno',
                tuberculosis_abuela_m = '$TuberAbuelaMaterna',
                tuberculosis_abuelo_p = '$TuberAbueloPaterno',
                tuberculosis_abuela_p = '$TuberAbuelaPaterna',
                tuberculosis_no_hermanas = '$Tuber_hermanas',
                tuberculosis_no_hermanos = '$Tuber_hermanos'
            WHERE id_paciente = $id_paciente;";

            $dataTuber = $connectionDB->ShotSimple($queryTuber);

            $VIHSelect        = $_POST['VIHSelect'];
            $VIHPadre         = $_POST['VIHPadre'];
            $VIHMadre         = $_POST['VIHMadre'];
            $VIHAbueloMaterno = $_POST['VIHAbueloMaterno'];
            $VIHAbuelaMaterna = $_POST['VIHAbuelaMaterna'];
            $VIHAbueloPaterno = $_POST['VIHAbueloPaterno'];
            $VIHAbuelaPaterna = $_POST['VIHAbuelaPaterna'];
            $VIH_hermanas     = $_POST['VIH_hermanas'];
            $VIH_hermanos     = $_POST['VIH_hermanos'];

            $queryVih = "UPDATE apnp_vih SET 
                vih = '$VIHSelect',
                vih_padre = '$VIHPadre',
                vih_madre = '$VIHMadre',
                vih_abuelo_m = '$VIHAbueloMaterno',
                vih_abuela_m = '$VIHAbuelaMaterna',
                vih_abuelo_p = '$VIHAbueloPaterno',
                vih_abuela_p = '$VIHAbuelaPaterna',
                vih_no_hermanas = '$VIH_hermanas',
                vih_no_hermanos = '$VIH_hermanos'
            WHERE id_paciente = $id_paciente;";
            $dataVih = $connectionDB->ShotSimple($queryVih);


            $contacto_animales = $_POST['contacto_animales'];
            $Perros            = isset($_POST["Perros"]) ? 'Si' : 'No';
            $Gatos             = isset($_POST['Gatos']) ? 'Si' : 'No';
            $Conejos           = isset($_POST['Conejos']) ? 'Si' : 'No';
            $Pollos            = isset($_POST['Pollos']) ? 'Si' : 'No';
            $Chinches          = isset($_POST['Chinches']) ? 'Si' : 'No';
            $Ratas             = isset($_POST['Ratas']) ? 'Si' : 'No';
            $Moscos            = isset($_POST['Moscos']) ? 'Si' : 'No';
            $Gallinas          = isset($_POST['Gallinas']) ? 'Si' : 'No';
            $Cerdos            = isset($_POST['Cerdos']) ? 'Si' : 'No';
            $Caballos          = isset($_POST['Caballos']) ? 'Si' : 'No';
            $Becerros          = isset($_POST['Becerros']) ? 'Si' : 'No';
            $Pajaros           = isset($_POST['Pajaros']) ? 'Si' : 'No';
            $Borregos          = isset($_POST['Borregos']) ? 'Si' : 'No';
            $Tortugas          = isset($_POST['Tortugas']) ? 'Si' : 'No';
            $Patos             = isset($_POST['Patos']) ? 'Si' : 'No';
            $Burros            = isset($_POST['Burros']) ? 'Si' : 'No';
            $Moscas            = isset($_POST['Moscas']) ? 'Si' : 'No';
            $viajes            = $_POST['viajes'];
            $lugarSelect       = $_POST['lugarSelect'];
            $cuevas            = $_POST['cuevas'];
            $alimentos         = $_POST['alimentos'];
            $tipoalimentos     = $_POST['tipoalimentos'];
            $vacunacion        = $_POST['vacunacion'];

            $queryContacto = "UPDATE apnp_animales_viajes SET 
                contacto_animales = '$contacto_animales',
                perro = '$Perros',
                gato = '$Gatos',
                conejo = '$Conejos',
                pollo = '$Pollos',
                chinche = '$Chinches',
                rata = '$Ratas',
                mosco = '$Moscos',
                gallinas = '$Gallinas',
                cerdo = '$Cerdos',
                caballo = '$Caballos',
                becerro = '$Becerros',
                pajaro = '$Pajaros',
                borrego = '$Borregos',
                tortuga = '$Tortugas',
                pato = '$Patos',
                burro = '$Burros',
                mosca = '$Moscas',
                viajes_recientes = '$viajes',
                lugar = '$lugarSelect',
                vist_cuevas = '$cuevas',
                alimentarios = '$alimentos',
                tipo_alimentarios = '$tipoalimentos',
                vacunacion = '$vacunacion'
            WHERE id_paciente = $id_paciente;";
            $dataContacto = $connectionDB->ShotSimple($queryContacto);

            $bcg                      = isset($_POST['bcg']) ? 'Si' : 'No';
            $hepatitis_nacimiento     = isset($_POST['hepatitis_nacimiento']) ? 'Si' : 'No';
            $pentavalente_2mes        = isset($_POST['pentavalente_2mes']) ? 'Si' : 'No';
            $hepatitisB_2mes          = isset($_POST['hepatitisB_2mes']) ? 'Si' : 'No';
            $rotavirus_2mes           = isset($_POST['rotavirus_2mes']) ? 'Si' : 'No';
            $neumococo_2mes           = isset($_POST['neumococo_2mes']) ? 'Si' : 'No';
            $pentavalente_4mes        = isset($_POST['pentavalente_4mes']) ? 'Si' : 'No';
            $rotavirus_4mes           = isset($_POST['rotavirus_4mes']) ? 'Si' : 'No';
            $neumococo_4mes           = isset($_POST['neumococo_4mes']) ? 'Si' : 'No';
            $pentavalente_6mes        = isset($_POST['pentavalente_6mes']) ? 'Si' : 'No';
            $rotavirus_6mes           = isset($_POST['rotavirus_6mes']) ? 'Si' : 'No';
            $Influenza_6mes           = isset($_POST['Influenza_6mes']) ? 'Si' : 'No';
            $Influenza_7mes           = isset($_POST['Influenza_7mes']) ? 'Si' : 'No';
            $SRP_12mes                = isset($_POST['SRP_12mes']) ? 'Si' : 'No';
            $neumococo_12mes          = isset($_POST['neumococo_12mes']) ? 'Si' : 'No';
            $Pentavaleente_18mes      = isset($_POST['Pentavaleente_18mes']) ? 'Si' : 'No';
            $influenza_refuerzo_24mes = isset($_POST['influenza_refuerzo_24mes']) ? 'Si' : 'No';
            $influenza_refuerzo_36mes = isset($_POST['influenza_refuerzo_36mes']) ? 'Si' : 'No';
            $DPTrefuerzo_48mes        = isset($_POST['DPTrefuerzo_48mes']) ? 'Si' : 'No';
            $Influenza_R48mes         = isset($_POST['Influenza_R48mes']) ? 'Si' : 'No';
            $Influenza_R59            = isset($_POST['Influenza_R59']) ? 'Si' : 'No';
            $OVP59                    = isset($_POST['OVP59']) ? 'Si' : 'No';
            $srp_refuerzo             = isset($_POST['srp_refuerzo']) ? 'Si' : 'No';
            $VPH_11                   = isset($_POST['VPH_11']) ? 'Si' : 'No';

            $queryVacunas = "UPDATE apnp_vacunas SET 
                BCG = '$bcg',
                Hepatitis_B_1 = '$hepatitis_nacimiento',
                Pentavalente_Acelular_1 = '$pentavalente_2mes',
                Hepatitis_B_2 = '$hepatitisB_2mes',
                Rotavirus_1 = '$rotavirus_2mes',
                Neumococo_1 = '$neumococo_2mes',
                Pentavalente_Acelular_2 = '$pentavalente_4mes',
                Rotavirus_2 = '$rotavirus_4mes',
                Neumococo_2 = '$neumococo_4mes',
                Pentavalente_Acelular_3 = '$pentavalente_6mes',
                Rotavirus_3 = '$rotavirus_6mes',
                Influenza_1 = '$Influenza_6mes',
                Influenza_2 = '$Influenza_7mes',
                SRP_1 = '$SRP_12mes',
                Neumococo_3 = '$neumococo_12mes',
                Pentavalente_Acelular_4 = '$Pentavaleente_18mes',
                Influenza_refuerzo_1 = '$influenza_refuerzo_24mes',
                Influenza_refuerzo_2 = '$influenza_refuerzo_36mes',
                DPT = '$DPTrefuerzo_48mes',
                Influenza_refuerzo_3 = '$Influenza_R48mes',
                Influenza_refuerzo_4 = '$Influenza_R59',
                OVP = '$OVP59',
                SRP_2 = '$srp_refuerzo',
                VPH = '$VPH_11'
            WHERE id_paciente = $id_paciente;";
            $dataVacunas = $connectionDB->ShotSimple ($queryVacunas);


            $Reflujo                  = $_POST['Reflujo'];
            $Neuropatia_croninca      = $_POST['Neuropatia_croninca'];
            $neumo_edad               = $_POST['neumo_edad'];
            $talla_baja               = $_POST['talla_baja'];
            $Discapacidad_intelectual = $_POST['Discapacidad_intelectual'];
            $pancreatitis_avp         = $_POST['pancreatitis_avp'];
            $LPH                      = $_POST['LPH'];
            $Epilepsia                = $_POST['Epilepsia'];
            $Amigda                   = $_POST['Amigda'];
            $apendicectomia           = $_POST['apendicectomia'];
            $Rubeola                  = $_POST['Rubeola'];
            $invaginacion             = $_POST['invaginacion'];
            $fractura                 = $_POST['fractura'];
            $rinitis_alergica         = $_POST['rinitis_alergica'];
            $Pielonefritis            = $_POST['Pielonefritis'];
            $varicela                 = $_POST['varicela'];
            $varicela_edad            = $_POST['varicela_edad'];

            $queryAntecedentes = "UPDATE app SET 
                reflujo = '$Reflujo',
                neuropatica_cron = '$Neuropatia_croninca',
                edad_neuro = '$neumo_edad',
                talla_baja = '$talla_baja',
                discapacidad_intelec = '$Discapacidad_intelectual',
                AVP = '$pancreatitis_avp',
                LPH = '$LPH',
                epilipsia = '$Epilepsia',
                amigdalectomia = '$Amigda',
                apendicectomia = '$apendicectomia',
                rubeola = '$Rubeola',
                invaginacion = '$invaginacion',
                fractura = '$fractura',
                rinitis = '$rinitis_alergica',
                pielonefritis = '$Pielonefritis',
                varicela = '$varicela',
                edad_varicela = '$varicela_edad'
            WHERE id_paciente = $id_paciente;";
            $dataAntecendentes = $connectionDB->ShotSimple($queryAntecedentes);


            
            $evolucion_ganglio  = $_POST['evolucion_ganglio'];
            $evolucion_periodo  = $_POST['evolucion_periodo'];
            $Ganglio_tama       = $_POST['Ganglio_tama'];
            $Doloroso           = isset($_POST['Doloroso']) ? 'Si' : 'No';
            $No_doloroso        = isset($_POST['No_doloroso']) ? 'Si' : 'No';
            $Indurado           = isset($_POST['Indurado']) ? 'Si' : 'No';
            $No_Indurado        = isset($_POST['No_Indurado']) ? 'Si' : 'No';
            $Eritematoso        = isset($_POST['Eritematoso']) ? 'Si' : 'No';
            $Hipertermico       = isset($_POST['Hipertermico']) ? 'Si' : 'No';
            $con_Secrecion      = isset($_POST['con_Secrecion']) ? 'Si' : 'No';
            $sin_secrecion      = isset($_POST['sin_secrecion']) ? 'Si' : 'No';
            $bien_delimitado    = isset($_POST['bien_delimitado']) ? 'Si' : 'No';
            $mal_delimitado     = isset($_POST['mal_delimitado']) ? 'Si' : 'No';
            $Fijo               = isset($_POST['Fijo']) ? 'Si' : 'No';
            $Movil              = isset($_POST['Movil']) ? 'Si' : 'No';
            $cambios_coloracion = isset($_POST['cambios_coloracion']) ? 'Si' : 'No';
            $sin_cambios        = isset($_POST['sin_cambios']) ? 'Si' : 'No';

            $queryAtencion = "UPDATE atencion_clinica SET 
                tiempo_evo = '$evolucion_ganglio',
                periodo_evo = '$evolucion_periodo',
                tamaño_ganglio = '$Ganglio_tama',
                doloroso = '$Doloroso',
                no_doloroso = '$No_doloroso',
                indurado = '$Indurado',
                no_indurado = '$No_Indurado',
                eritematoso = '$Eritematoso',
                hipertermico = '$Hipertermico',
                secrecion = '$con_Secrecion',
                sin_secrecion = '$sin_secrecion',
                bien_delimitado = '$bien_delimitado',
                mal_delimitado = '$mal_delimitado',
                fijo = '$Fijo',
                movil = '$Movil',
                cambio_coloracion = '$cambios_coloracion',
                sin_cambio_coloracion = '$sin_cambios'
            WHERE id_paciente = $id_paciente;";
            $dataAtencion = $connectionDB->ShotSimple($queryAtencion);


            $otros_ganglios        = $_POST['otros_ganglios'];
            $local_submandibulares = isset($_POST['local_submandibulares']) ? 'Si' : 'No' ;
            $local_axilares        = isset($_POST['local_axilares']) ? 'Si' : 'No' ;
            $local_inguinales      = isset($_POST['local_inguinales']) ? 'Si' : 'No' ;
            $local_cervicales      = isset($_POST['local_cervicales']) ? 'Si' : 'No' ;
            $local_retroauri       = isset($_POST['local_retroauri']) ? 'Si' : 'No' ;
            $local_subclav         = isset($_POST['local_subclav']) ? 'Si' : 'No' ;
            $local_occipital       = isset($_POST['local_occipital']) ? 'Si' : 'No' ;
            $local_adeno           = isset($_POST['local_adeno']) ? 'Si' : 'No' ;

            $queryOtros = "UPDATE app_otros SET 
                otros_ganglios = '$otros_ganglios',
                submandibulares = '$local_submandibulares',
                axilares = '$local_axilares',
                inguinales = '$local_inguinales',
                cervicales = '$local_cervicales',
                retroauriculares = '$local_retroauri',
                subclavicular = '$local_subclav',
                occipital = '$local_occipital',
                adenopatias = '$local_adeno'
            WHERE id_paciente = $id_paciente;";
            $dataOtros=$connectionDB->ShotSimple($queryOtros);


            $etiologia_VEB          = isset($_POST['etiologia_VEB']) ? 'Si' : 'No' ;
            $etiologia_CMV          = isset($_POST['etiologia_CMV']) ? 'Si' : 'No' ;
            $etiologia_TB           = isset($_POST['etiologia_TB']) ? 'Si' : 'No' ;
            $etiologia_B19          = isset($_POST['etiologia_B19']) ? 'Si' : 'No' ;
            $etiologia_bocio        = isset($_POST['etiologia_bocio']) ? 'Si' : 'No' ;
            $etiologia_rubeola      = isset($_POST['etiologia_rubeola']) ? 'Si' : 'No' ;
            $etiologia_bartonella   = isset($_POST['etiologia_bartonella']) ? 'Si' : 'No' ;
            $etiologia_toxoplamosis = isset($_POST['etiologia_toxoplamosis']) ? 'Si' : 'No' ;
            $etioligia_inflamatorio = isset($_POST['etioligia_inflamatorio']) ? 'Si' : 'No' ;
            $etiologia_parvovirus   = isset($_POST['etiologia_parvovirus']) ? 'Si' : 'No' ;
            $etiologia_varicela     = isset($_POST['etiologia_varicela']) ? 'Si' : 'No' ;

            $queryEtio = " UPDATE app_etiologia SET 
                VEB = '$etiologia_VEB',
                CMV = '$etiologia_CMV',
                TB = '$etiologia_TB',
                B19 = '$etiologia_B19',
                bocio = '$etiologia_bocio',
                rebeola = '$etiologia_rubeola',
                bartonella = '$etiologia_bartonella',
                toxoplasmosis = '$etiologia_toxoplamosis',
                inflamatorio = '$etioligia_inflamatorio',
                parvovirus = '$etiologia_parvovirus',
                varicela = '$etiologia_varicela'
            WHERE id_paciente = $id_paciente;";
            $dataEtio = $connectionDB->ShotSimple($queryEtio);




            $tx_Isonicida    = isset ($_POST['tx_Isonicida']) ? 'Si' : 'No' ;
            $tx_Rifampicina  = isset ($_POST['tx_Rifampicina']) ? 'Si' : 'No' ;
            $tx_Pirazinamida = isset ($_POST['tx_Pirazinamida']) ? 'Si' : 'No' ;
            $tx_Etambutol    = isset ($_POST['tx_Etambutol']) ? 'Si' : 'No' ;

            $queryTB = "UPDATE app_tf_tb SET 
                isonicida = '$tx_Isonicida',
                rifampicina = '$tx_Rifampicina',
                pirazinamida = '$tx_Pirazinamida',
                etambutol = '$tx_Etambutol'
            WHERE id_paciente = $id_paciente;";
            $dataTB = $connectionDB->ShotSimple($queryTB);


            $id_Hemoglobina    = $_POST['id_Hemoglobina'];
            $id_Hematocrito    = $_POST['id_Hematocrito'];
            $id_Leucocitos     = $_POST['id_Leucocitos'];
            $id_Neutrfilos     = $_POST['id_Neutrfilos'];
            $id_Linfocitos     = $_POST['id_Linfocitos'];
            $id_Monocitos      = $_POST['id_Monocitos'];
            $id_Plaquetas      = $_POST['id_Plaquetas'];
            $id_Eosinofilos    = $_POST['id_Eosinofilos'];
            $id_Eritrocitos    = $_POST['id_Eritrocitos'];
            $id_Procalcitonina = $_POST['id_Procalcitonina'];
            $id_VCM            = $_POST['id_VCM'];
            $id_ADE            = $_POST['id_ADE'];

            $queryLab = "UPDATE laboratorio SET 
                hemoglobina = '$id_Hemoglobina',
                hematocrito = '$id_Hematocrito',
                leucocitos = '$id_Leucocitos',
                neutrofilos = '$id_Neutrfilos',
                linfocitos = '$id_Linfocitos',
                monocitos = '$id_Monocitos',
                plaquetas = '$id_Plaquetas',
                eosinofilos = '$id_Eosinofilos',
                eritrocitos = '$id_Eritrocitos',
                procalcitonina = '$id_Procalcitonina',
                vol_corpuscular = '$id_VCM',
                ancho_eritrocitaria = '$id_ADE'
            WHERE id_paciente = $id_paciente;";
            $dataLab = $connectionDB->ShotSimple($queryLab);


            $id_DHL      = $_POST['id_DHL'];
            $id_AST      = $_POST['id_AST'];
            $id_ALT      = $_POST['id_ALT'];
            $id_Glob     = $_POST['id_Glob'];
            $id_albumina = $_POST['id_albumina'];
            $id_BD       = $_POST['id_BD'];
            $id_BI       = $_POST['id_BI'];
            $id_TGO      = $_POST['id_TGO'];
            $id_TGP      = $_POST['id_TGP'];
            $id_FA       = $_POST['id_FA'];
            $id_GGT      = $_POST['id_GGT'];
            $id_PT       = $_POST['id_PT'];
            $id_Real     = $_POST['id_Real'];
            $id_PT       = $_POST['id_PT'];

            $queryPFH = "UPDATE pfh SET 
                DHL = '$id_DHL',
                AST = '$id_AST',
                ALT = '$id_ALT',
                globulina = '$id_Glob',
                albumina = '$id_albumina',
                db = '$id_BD',
                bi = '$id_BI',
                tgo = '$id_TGO',
                tgp = '$id_TGP',
                fa = '$id_FA',
                ggt = '$id_GGT',
                pt = '$id_PT',
                rel = '$id_Real',
                proteinas_totales = '$id_PT'
            WHERE id_paciente = $id_paciente;";
            $dataPFH = $connectionDB->ShotSimple($queryPFH);


            $lab_serologia     = $_POST['lab_serologia'];
            $resultado_cultivo = $_POST['resultado_cultivo'];
            $prueb_pcr         = $_POST['prueb_pcr'];
            $resultado_PCR     = $_POST['resultado_PCR'];
            $lab_cultivo       = $_POST['lab_cultivo'];
            $resultado_cultivo = $_POST['resultado_cultivo'];

            $querySeroCul = "UPDATE serologia_cultivo SET 
                serologia = '$lab_serologia',
                resultado_sero = '$resultado_cultivo',
                PCR = '$prueb_pcr',
                resultado_PCR = '$resultado_PCR',
                cultivo = '$lab_cultivo',
                resultado_cultivo = '$resultado_cultivo'
            WHERE id_paciente = $id_paciente;";
            $dataSeroCul = $connectionDB->ShotSimple($querySeroCul);


            $lab_tomografia        = $_POST['lab_tomografia'];
            $resultado_tomografia  = $_POST['resultado_tomografia'];
            $lab_Ultrasonido       = $_POST['lab_Ultrasonido'];
            $resultado_Ultrasonido = $_POST['resultado_Ultrasonido'];
            $lab_Biopsia           = $_POST['lab_Biopsia'];
            $resultado_Biopsia     = $_POST['resultado_Biopsia'];
            $referencia            = $_POST['referencia'];
            $resultado_referencia  = $_POST['resultado_referencia'];
            $causa_ref             = $_POST['causa_ref'];
            $id_Alta               = $_POST['id_Alta'];
            $id_causa              = $_POST['id_causa'];

            $queryEstudiosAlta = "UPDATE estudios_alta SET 
                tomografia = '$lab_tomografia',
                resultado_tomografia = '$resultado_tomografia',
                ultrasonido = '$lab_Ultrasonido',
                resultado_ultrasonido = '$resultado_Ultrasonido',
                biopsia = '$lab_Biopsia',
                resultado_biopsia = '$resultado_Biopsia',
                referencia = '$referencia',
                institucion = '$resultado_referencia',
                causa_referencia = '$causa_ref',
                alta = '$id_Alta',
                causa_alta = '$id_causa'
            WHERE id_paciente = $id_paciente;";
            $dataEstudiosAlta = $connectionDB->ShotSimple($queryEstudiosAlta);


        echo 'success';
    }

?>