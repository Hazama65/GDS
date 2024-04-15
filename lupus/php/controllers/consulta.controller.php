<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_LP.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_paciente dp
        JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
        JOIN act_lupica al ON dp.id_paciente = al.id_paciente
        JOIN sledai sl ON dp.id_paciente = sl.id_paciente
        JOIN laboratorio l ON dp.id_paciente = l.id_paciente
        JOIN anticuerpos_renal_prono arp ON dp.id_paciente = arp.id_paciente
        JOIN tratamiento_defuncion td ON dp.id_paciente = td.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $curp = $data['curp'];
                $nombre_completo = $data['nombre_completo'];
                $escolaridad = $data['escolaridad'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $ninguno = $data['ninguno'];
                $alcoholismo = $data['alcoholismo'];
                $AR = $data['AR'];
                $DM = $data['DM'];
                $HA = $data['HA'];
                $obesidad = $data['obesidad'];
                $SA = $data['SA'];
                $AA = $data['AA'];
                $AC = $data['AC'];
                $AH = $data['AH'];
                $AI = $data['AI'];
                $AN = $data['AN'];
                $ARE = $data['ARE'];
                $AM = $data['AM'];
                $ACA = $data['ACA'];

                $registros_sledai = array(
                    'convulsion' => $data['convulsion'],
                    'psicosis' => $data['psicosis'],
                    'SCO' => $data['SCO'],
                    'AV' => $data['AV'],
                    'TNC' => $data['TNC'],
                    'DCL' => $data['DCL'],
                    'EVC' => $data['EVC'],
                    'vasculitis' => $data['vasculitis'],
                    'artritis' => $data['artritis'],
                    'miositis' => $data['miositis'],
                    'CU' => $data['CU'],
                    'hematuria' => $data['hematuria'],
                    'piuria' => $data['piuria'],
                    'proteinuria' => $data['proteinuria'],
                    'erupcion' => $data['erupcion'],
                    'UM' => $data['UM'],
                    'pleuritis' => $data['pleuritis'],
                    'pericarditis' => $data['pericarditis'],
                    'COM' => $data['COM'],
                    'ADN' => $data['ADN'],
                    'fiebre' => $data['fiebre'],
                    'trombocitopenia' => $data['trombocitopenia'],
                    'leucopenia' => $data['leucopenia'],
                    'alopecia' => $data['alopecia']
                );
                
                $valores_sledai = '';
                
                foreach ($registros_sledai as $sledai) {
                    // Si la variable no está vacía, la concatenamos a la cadena con una coma
                    if ($sledai !== '') {
                        // Si la cadena ya tiene contenido, agregamos una coma antes de concatenar el valor
                        if ($valores_sledai !== '') {
                            $valores_sledai .= ',';
                        }
                        $valores_sledai .= $sledai;
                    }
                }
                
                $resultados_sledai = $data['resultados_sledai'];
                $ASE = $data['ASE'];
                $BUN = $data['BUN'];
                $C3 = $data['C3'];
                $C4 = $data['C4'];
                $CS = $data['CS'];
                $P24 = $data['P24'];
                $A24 = $data['A24'];
                $leucocitos = $data['leucocitos'];
                $linfocitos = $data['linfocitos'];
                $plaquetas = $data['plaquetas'];
                $hemoglobina = $data['hemoglobina'];
                $VD = $data['VD'];
                $AL = $data['AL'];
                $AC_DNA = $data['AC_DNA'];
                $AC_SM = $data['AC_SM'];
                $AC_RNP = $data['AC_RNP'];
                $AC_RO = $data['AC_RO'];
                $AC_LA = $data['AC_LA'];
                $AC_CM = $data['AC_CM'];
                $AC_CG = $data['AC_CG'];
                $AC_BG = $data['AC_BG'];
                $AC_BM = $data['AC_BM'];
                $BR = $data['BR'];
                $BR_tipo = $data['BR_tipo'];
                $indice = $data['indice'];
                $indice_tipo = $data['indice_tipo'];
                $Metrotexate = $data['Metrotexate'];
                $ds_metro = $data['ds_metro'];
                $Hidroxicloroquina = $data['Hidroxicloroquina'];
                $ds_hidro = $data['ds_hidro'];
                $Azatioprina = $data['Azatioprina'];
                $ds_aza = $data['ds_aza'];
                $Prednisona = $data['Prednisona'];
                $ds_predi = $data['ds_predi'];
                $Micofenolato = $data['Micofenolato'];
                $ds_mico = $data['ds_mico'];
                $Ciclofosfamida = $data['Ciclofosfamida'];
                $ds_ciclo = $data['ds_ciclo'];
                $Rituximab = $data['Rituximab'];
                $AT = $data['AT'];
                $defuncion = $data['defuncion'];


            }
        }else {
            echo "No se encontro la informacion";
            exit;
        }
    }else {
        echo $id_paciente;
        exit;
    }


?>