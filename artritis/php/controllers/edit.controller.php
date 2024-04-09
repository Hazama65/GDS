<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_AT.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];


        $query= "SELECT * FROM datos_paciente dp
        JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
        JOIN laboratorio l ON dp.id_paciente = l.id_paciente
        JOIN usg_clinica uc ON dp.id_paciente = uc.id_paciente
        JOIN tratamiento t ON dp.id_paciente = t.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);


        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente= $data['id_paciente'];
                $curp = $data['curp'];
                $nombre_paciente = $data['nombre_paciente'];
                $escolaridad = $data['escolaridad'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $tabaquismo = $data['tabaquismo'];
                $alcoholismo = $data['alcoholismo'];
                $EH = $data['EH'];
                $DM = $data['DM'];
                $HA = $data['HA'];
                $obesidad = $data['obesidad'];
                $hiperlipidemia = $data['hiperlipidemia'];
                $plaquetas = $data['plaquetas'];
                $FRB = $data['FRB'];
                $FRN = $data['FRN'];
                $PCR = $data['PCR'];
                $VDB = $data['VDB'];
                $VDN = $data['VDN'];
                $AAB = $data['AAB'];
                $AAN = $data['AAN'];
                $VSG = $data['VSG'];
                $TGOB = $data['TGOB'];
                $TGON = $data['TGON'];
                $TGPB = $data['TGPB'];
                $TGPN = $data['TGPN'];
                $glucosa = $data['glucosa'];
                $colesterol = $data['colesterol'];
                $trigliceridos = $data['trigliceridos'];
                $FIB4 = $data['FIB4'];
                $resultado_fib = $data['resultado_fib'];
                $USG_hep = $data['USG_hep'];
                $USG_haz = $data['USG_haz'];
                $CE = $data['CE'];
                $sjc28 = $data['sjc28'];
                $tjc28 = $data['tjc28'];
                $pga = $data['pga'];
                $ega = $data['ega'];
                $CDAI = $data['CDAI'];
                $SDAI = $data['SDAI'];
                $Metrotexate = $data['Metrotexate'];
                $ds_metro = $data['ds_metro'];
                $Leflunomide = $data['Leflunomide'];
                $ds_leflu = $data['ds_leflu'];
                $Sulfazalasina = $data['Sulfazalasina'];
                $ds_sulfa = $data['ds_sulfa'];
                $Tocoferol = $data['Tocoferol'];
                $ds_toco = $data['ds_toco'];
                $Glucocorticoide = $data['Glucocorticoide'];
                $tx_gluco = $data['tx_gluco'];
                $ds_gluco = $data['ds_gluco'];
                $vit_d = $data['vit_d'];
                $ds_vit = $data['ds_vit'];
                $Biologico = $data['Biologico'];
                $tx_bio = $data['tx_bio'];
                $AT = $data['AT'];

            }
        }
    }

?>