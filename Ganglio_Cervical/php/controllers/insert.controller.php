<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig_gc.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre_paciente      = $_POST['nombre_paciente'];
    $sexo                 = $_POST['sexo'];
    $edad                 = $_POST['edad'];
    $residencia           = $_POST['residencia'];
    $Nivel_socioeconomico = $_POST['Nivel_socioeconomico'];
    
    $queryPacientes = "INSERT INTO datos_paciente (nombre_paciente,sexo,edad,residencia,nivel_socioeconomico)
    VALUES ('$nombre_paciente','$sexo','$edad','$residencia','$Nivel_socioeconomico')";

    $dataPacientes = $connectionDB->ShotSimple($queryPacientes);
    $ultimoId = $connectionDB->last_id;

    
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

    $queryTos = "INSERT INTO apnp_tos VALUES('$contacto_personas','$TosCronicaSelect','$TosPadre','$Tos_Madre','$TosAbueloMaterno',
    '$TosAbuelaMaterna','$TosAbueloPaterno','$TosAbuelaPaterna','$Tos_hermanas','$Tos_hermanos','$ultimoId')";
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

    $queryTuber = "INSERT INTO apnp_tuberculosis VALUES ('$TuberculosisSelect','$TuberPadre','$TuberMadre','$TuberAbueloMaterno',
    '$TuberAbuelaMaterna','$TuberAbueloPaterno','$TuberAbuelaPaterna','$Tuber_hermanas','$Tuber_hermanos','$ultimoId')";
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

    $queryVih = "INSERT INTO apnp_vih VALUES ('$VIHSelect','$VIHPadre','$VIHMadre','$VIHAbueloMaterno','$VIHAbuelaMaterna',
    '$VIHAbueloPaterno','$VIHAbuelaPaterna','$VIH_hermanas','$VIH_hermanos','$ultimoId')";
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

    $queryContacto = "INSERT INTO apnp_animales_viajes VALUES ('$contacto_animales','$Perros','$Gatos','$Conejos','$Pollos',
    '$Chinches','$Ratas','$Moscos','$Gallinas','$Cerdos','$Caballos','$Becerros','$Pajaros','$Borregos','$Tortugas','$Patos',
    '$Burros','$Moscas','$viajes','$lugarSelect','$cuevas','$alimentos','$tipoalimentos','$vacunacion','$ultimoId')";
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

    $queryVacunas = "INSERT INTO apnp_vacunas VALUES ('$bcg','$hepatitis_nacimiento','$pentavalente_2mes','$hepatitisB_2mes',
    '$rotavirus_2mes','$neumococo_2mes','$pentavalente_4mes','$rotavirus_4mes','$neumococo_4mes','$pentavalente_6mes','$rotavirus_6mes',
    '$Influenza_6mes','$Influenza_7mes','$SRP_12mes','$neumococo_12mes','$Pentavaleente_18mes','$influenza_refuerzo_24mes',
    '$influenza_refuerzo_36mes','$DPTrefuerzo_48mes','$Influenza_R48mes','$Influenza_R59','$OVP59','$srp_refuerzo','$VPH_11','$ultimoId')";
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

    $queryAntecedentes = "INSERT INTO app VALUES ('$Reflujo','$Neuropatia_croninca','$neumo_edad','$talla_baja',
    '$Discapacidad_intelectual','$pancreatitis_avp','$LPH','$Epilepsia','$Amigda','$apendicectomia','$Rubeola','$invaginacion',
    '$fractura','$rinitis_alergica','$Pielonefritis','$varicela','$varicela_edad','$ultimoId')";
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

    $queryAtencion = "INSERT INTO atencion_clinica VALUES ('$evolucion_ganglio','$evolucion_periodo','$Ganglio_tama','$Doloroso',
    '$No_doloroso','$Indurado','$No_Indurado','$Eritematoso','$Hipertermico','$con_Secrecion','$sin_secrecion','$bien_delimitado',
    '$mal_delimitado','$Fijo','$Movil','$cambios_coloracion','$sin_cambios','$ultimoId')";
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

    $queryOtros = "INSERT INTO app_otros VALUES ('$otros_ganglios','$local_submandibulares','$local_axilares','$local_inguinales',
    '$local_cervicales','$local_retroauri','$local_subclav','$local_occipital','$local_adeno','$ultimoId')";
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

    $queryEtio = " INSERT INTO app_etiologia VALUES ('$etiologia_VEB','$etiologia_CMV','$etiologia_TB','$etiologia_B19','$etiologia_bocio',
    '$etiologia_rubeola','$etiologia_bartonella','$etiologia_toxoplamosis','$etioligia_inflamatorio','$etiologia_parvovirus',
    '$etiologia_varicela','$ultimoId')";
    $dataEtio = $connectionDB->ShotSimple($queryEtio);




    $tx_Isonicida    = isset ($_POST['tx_Isonicida']) ? 'Si' : 'No' ;
    $tx_Rifampicina  = isset ($_POST['tx_Rifampicina']) ? 'Si' : 'No' ;
    $tx_Pirazinamida = isset ($_POST['tx_Pirazinamida']) ? 'Si' : 'No' ;
    $tx_Etambutol    = isset ($_POST['tx_Etambutol']) ? 'Si' : 'No' ;

    $queryTB = "INSERT INTO app_tf_tb VALUES ('$tx_Isonicida','$tx_Rifampicina','$tx_Pirazinamida','$tx_Etambutol','$ultimoId')";
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

    $queryLab = "INSERT INTO laboratorio VALUES ('$id_Hemoglobina','$id_Hematocrito','$id_Leucocitos','$id_Neutrfilos','$id_Linfocitos',
    '$id_Monocitos','$id_Plaquetas','$id_Eosinofilos','$id_Eritrocitos','$id_Procalcitonina','$id_VCM','$id_ADE','$ultimoId')";
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

    $queryPFH = "INSERT INTO pfh VALUES ('$id_DHL','$id_AST','$id_ALT','$id_Glob','$id_albumina','$id_BD','$id_BI','$id_TGO','$id_TGP',
    '$id_FA','$id_GGT','$id_PT','$id_Real','$id_PT','$ultimoId') ";
    $dataPFH = $connectionDB->ShotSimple($queryPFH);


    $lab_serologia     = $_POST['lab_serologia'];
    $resultado_cultivo = $_POST['resultado_cultivo'];
    $prueb_pcr         = $_POST['prueb_pcr'];
    $resultado_PCR     = $_POST['resultado_PCR'];
    $lab_cultivo       = $_POST['lab_cultivo'];
    $resultado_cultivo = $_POST['resultado_cultivo'];

    $querySeroCul = "INSERT INTO serologia_cultivo VALUES ('$lab_serologia','$resultado_cultivo','$prueb_pcr','$resultado_PCR',
    '$lab_cultivo','$resultado_cultivo','$ultimoId')";
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

    $queryEstudiosAlta = "INSERT INTO estudios_alta VALUES ('$lab_tomografia','$resultado_tomografia','$lab_Ultrasonido',
    '$resultado_Ultrasonido','$lab_Biopsia','$resultado_Biopsia','$referencia','$resultado_referencia','$causa_ref',
    '$id_Alta','$id_causa','$ultimoId')";
    $dataEstudiosAlta = $connectionDB->ShotSimple($queryEstudiosAlta);

    echo 'success';

}

?>