<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);
    $connectionDBSEG = new Database(DB_HOST_seg,DB_NAME_seg,DB_USERNAME_seg,DB_PASSWORD_seg);


    $id_paciente = null;
    if (isset($_GET['idPaciente']) && isset($_GET['idSeg']) && $_GET['idSeg'] == 0) {
        $id_paciente = $_GET['idPaciente'];
        $id_seg = $_GET['idSeg'];

        $query = "DELETE dp.*, ah.*, c.*, com.*, ec.*, hip.*, hg.*, hipo.*, ins.*, lab.*, ot.*, di.*, dis.*, ej.*
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

        $connectionDB->deleteRow($query);

        $query1 = "DELETE DS.*,SA.*,SC.*,SCP.*,SE.*,SH.*,SL.*,SI.*,SLab.*,SO.*
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
        WHERE DS.id_paciente ='$id_paciente'";

        $connectionDBSEG->deleteRow($query1);


        echo 1;

        exit;

    }if (isset($_GET['idPaciente']) && isset($_GET['idSeg']) && $_GET['idSeg'] != 0) {
        $id_seg = $_GET['idSeg'];

        $query = "DELETE DS.*,SA.*,SC.*,SCP.*,SE.*,SH.*,SL.*,SI.*,SLab.*,SO.*
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
        WHERE DS.id_seguimiento ='$id_seg'";

        $connectionDBSEG->deleteRow($query);

        echo 1;

        exit;

    } else {
        echo 'Error';

        exit;
    }
    
?>