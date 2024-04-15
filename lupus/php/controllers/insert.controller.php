<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_LP.php');
$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Tables = array(
        $table_datos_paciente = 'datos_paciente',
        $table_datos_patologicos = 'antecedentes_patologicos',
        $table_datos_act_lupica = 'act_lupica',
        $table_datos_sledai = 'sledai',
        $table_datos_laboratorio = 'laboratorio',
        $table_datos_anticuerpos_renal_prono = 'anticuerpos_renal_prono',
        $table_datos_tratamiento_defuncion = 'tratamiento_defuncion'
    );

    $Data_pacientes = array(
        'curp'             => $_POST['curp'],
        'nombre_completo'  => $_POST['nombre_completo'],
        'escolaridad'      => $_POST['escolaridad'],
        'fecha_nacimiento' => $_POST['birth_date'],
        'edad'             => $_POST['edad'],
        'sexo'             => $_POST['sex'],
        'talla'            => $_POST['talla'],
        'peso'             => $_POST['peso'],
        'imc'              => $_POST['imc']
    );

    foreach ($Data_pacientes as $key => $value) {
        $Data_pacientes[$key] = $connectionDB->escapeString($value);
    }
    $Result_pacientes = $connectionDB->insertData($Tables[0], $Data_pacientes);

    $Data_antecedentes = array(
        'ninguno'     => isset($_POST['ninguno']) ? 'Si' : 'No',
        'alcoholismo' => isset($_POST['alcoholismo']) ? 'Si' : 'No',
        'AR'          => isset($_POST['AR']) ? 'Si' : 'No',
        'DM'          => isset($_POST['DM']) ? 'Si' : 'No',
        'HA'          => isset($_POST['HA']) ? 'Si' : 'No',
        'obesidad'    => isset($_POST['obesidad']) ? 'Si' : 'No',
        'SA'          => isset($_POST['SA']) ? 'Si' : 'No',
        'id_paciente' => $Result_pacientes
    );

    foreach ($Data_antecedentes as $key => $value) {
        $Data_antecedentes[$key] = $connectionDB->escapeString($value);
    }
    $Result_antecedentes = $connectionDB->insertData($Tables[1], $Data_antecedentes);

    $Data_act_lupica = array(
        'AA'          => $_POST['AA'],
        'AC'          => $_POST['AC'],
        'AH'          => $_POST['AH'],
        'AI'          => $_POST['AI'],
        'AN'          => $_POST['AN'],
        'ARE'         => $_POST['ARE'],
        'AM'          => $_POST['AM'],
        'ACA'         => $_POST['ACA'],
        'id_paciente' => $Result_pacientes
    );

    foreach ($Data_act_lupica as $key => $value) {
        $Data_act_lupica[$key] = $connectionDB->escapeString($value);
    }
    $Result_act_lupica = $connectionDB->insertData($Tables[2], $Data_act_lupica);


    $Data_sledai = array(
        'convulsion'        => isset($_POST['convulsion']) ? $_POST['convulsion'] : '',
        'psicosis'          => isset($_POST['psicosis']) ? $_POST['psicosis'] : '',
        'SCO'               => isset($_POST['SCO']) ? $_POST['SCO'] : '',
        'AV'                => isset($_POST['AV']) ? $_POST['AV'] : '',
        'TNC'               => isset($_POST['TNC']) ? $_POST['TNC'] : '',
        'DCL'               => isset($_POST['DCL']) ? $_POST['DCL'] : '',
        'EVC'               => isset($_POST['EVC']) ? $_POST['EVC'] : '',
        'vasculitis'        => isset($_POST['vasculitis']) ? $_POST['vasculitis'] : '',
        'artritis'          => isset($_POST['artritis']) ? $_POST['artritis'] : '',
        'miositis'          => isset($_POST['miositis']) ? $_POST['miositis'] : '',
        'CU'                => isset($_POST['CU']) ? $_POST['CU'] : '',
        'hematuria'         => isset($_POST['hematuria']) ? $_POST['hematuria'] : '',
        'piuria'            => isset($_POST['piuria']) ? $_POST['piuria'] : '',
        'proteinuria'       => isset($_POST['proteinuria']) ? $_POST['proteinuria'] : '',
        'erupcion'          => isset($_POST['erupcion']) ? $_POST['erupcion'] : '',
        'UM'                => isset($_POST['UM']) ? $_POST['UM'] : '',
        'pleuritis'         => isset($_POST['pleuritis']) ? $_POST['pleuritis'] : '',
        'pericarditis'      => isset($_POST['pericarditis']) ? $_POST['pericarditis'] : '',
        'COM'               => isset($_POST['COM']) ? $_POST['COM'] : '',
        'ADN'               => isset($_POST['ADN']) ? $_POST['ADN'] : '',
        'fiebre'            => isset($_POST['fiebre']) ? $_POST['fiebre'] : '',
        'trombocitopenia'   => isset($_POST['trombocitopenia']) ? $_POST['trombocitopenia'] : '',
        'leucopenia'        => isset($_POST['leucopenia']) ? $_POST['leucopenia'] : '',
        'alopecia'          => isset($_POST['alopecia']) ? $_POST['alopecia'] : '',
        'resultados_sledai' => isset($_POST['resultados_sledai']) ? $_POST['resultados_sledai'] : '',
        'id_paciente'       => $Result_pacientes
    );

    foreach ($Data_sledai as $key => $value) {
        $Data_sledai[$key] = $connectionDB->escapeString($value);
    }
    $Result_sledai = $connectionDB->insertData($Tables[3], $Data_sledai);

    $Data_laboratorio = array(
        'ASE'         => $_POST['ASE'],
        'BUN'         => $_POST['BUN'],
        'C3'          => $_POST['C3'],
        'C4'          => $_POST['C4'],
        'CS'          => $_POST['CS'],
        'P24'         => $_POST['P24'],
        'A24'         => $_POST['A24'],
        'leucocitos'  => $_POST['leucocitos'],
        'linfocitos'  => $_POST['linfocitos'],
        'plaquetas'   => $_POST['plaquetas'],
        'hemoglobina' => $_POST['hemoglobina'],
        'VD'          => $_POST['VD'],
        'AL'          => $_POST['AL'],
        'id_paciente' => $Result_pacientes

    );

    foreach ($Data_laboratorio as $key => $value) {
        $Data_laboratorio[$key] = $connectionDB->escapeString($value);
    }
    $Result_laboratorio = $connectionDB->insertData($Tables[4], $Data_laboratorio);


    $Data_anticuerpos_renal_prono = array(
        'AC_DNA'      => $_POST['AC_DNA'],
        'AC_SM'       => $_POST['AC_SM'],
        'AC_RNP'      => $_POST['AC_RNP'],
        'AC_RO'       => $_POST['AC_RO'],
        'AC_LA'       => $_POST['AC_LA'],
        'AC_CM'       => $_POST['AC_CM'],
        'AC_CG'       => $_POST['AC_CG'],
        'AC_BG'       => $_POST['AC_BG'],
        'AC_BM'       => $_POST['AC_BM'],
        'BR'          => $_POST['BR'],
        'BR_tipo'     => $_POST['BR_tipo'],
        'indice'      => $_POST['indice'],
        'indice_tipo' => $_POST['indice_tipo'],
        'id_paciente' => $Result_pacientes

    );

    foreach ($Data_anticuerpos_renal_prono as $key => $value) {
        $Data_anticuerpos_renal_prono[$key] = $connectionDB->escapeString($value);
    }
    $Result_anticuerpos_renal_prono = $connectionDB->insertData($Tables[5], $Data_anticuerpos_renal_prono);


    $data_tratamiento_defuncion = array(
        'Metrotexate'       => isset($_POST['Metrotexate']) ? 'Si' : 'No',
        'ds_metro'          => $_POST['ds_metro'],
        'Hidroxicloroquina' => isset($_POST['Hidroxicloroquina']) ? 'Si' : 'No',
        'ds_hidro'          => $_POST['ds_hidro'],
        'Azatioprina'       => isset($_POST['Azatioprina']) ? 'Si' : 'No',
        'ds_aza'            => $_POST['ds_aza'],
        'Prednisona'        => isset($_POST['Prednisona']) ? 'Si' : 'No',
        'ds_predi'          => $_POST['ds_predi'],
        'Micofenolato'      => isset($_POST['Micofenolato']) ? 'Si' : 'No',
        'ds_mico'           => $_POST['ds_mico'],
        'Ciclofosfamida'    => isset($_POST['Ciclofosfamida']) ? 'Si' : 'No',
        'ds_ciclo'          => $_POST['ds_ciclo'],
        'Rituximab'         => isset($_POST['Rituximab']) ? 'Si' : 'No',
        'AT'                => $_POST['AT'],
        'defuncion'         => $_POST['defuncion'],
        'id_paciente'       => $Result_pacientes
    );

    foreach ($data_tratamiento_defuncion as $key => $value) {
        $data_tratamiento_defuncion[$key] = $connectionDB->escapeString($value);
    }
    $Result_tratamiento_defuncion = $connectionDB->insertData($Tables[6], $data_tratamiento_defuncion);

    echo 'success';
}


?>