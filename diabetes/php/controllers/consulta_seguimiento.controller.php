<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig_db.php');

$connectionDBSEG = new Database(DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_seguimiento = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT *
    FROM datos_seguimiento DS
    LEFT JOIN seguimiento_antihipertensivos SA ON DS.id_seguimiento = SA.id_seguimiento
    LEFT JOIN seguimiento_comorbilidades SC ON DS.id_seguimiento = SC.id_seguimiento
    LEFT JOIN seguimiento_complicaciones SCP ON DS.id_seguimiento = SCP.id_seguimiento
    LEFT JOIN seguimiento_ejercicio SE ON DS.id_seguimiento = SE.id_seguimiento
    LEFT JOIN seguimiento_hipoglucemiantes SH ON DS.id_seguimiento = SH.id_seguimiento
    LEFT JOIN seguimiento_hipolipemiante SL ON DS.id_seguimiento = SL.id_seguimiento
    LEFT JOIN seguimiento_insulina SI ON DS.id_seguimiento = SI.id_seguimiento
    LEFT JOIN seguimiento_laboratorio SLab ON DS.id_seguimiento = SLab.id_seguimiento
    LEFT JOIN seguimiento_otros SO ON DS.id_seguimiento = SO.id_seguimiento
    WHERE DS.id_seguimiento = '$id_seguimiento' AND fecha_seguimiento = '$fecha_seguimiento'";
    $data_seguimiento = $connectionDBSEG->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $curp = $data['curp'];
            $talla = $data['talla'];
            $peso = $data['peso'];
            $imc = $data['imc'];
            $resultado_imc = $data['resultado_imc'];
            $circunferencia_abdominal = $data['circunferencia_abdominal'];
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
            $hipertension = $data['hipertension'];
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

} else {
    echo $id_paciente;
}


?>