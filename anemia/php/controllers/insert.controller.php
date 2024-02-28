<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ane.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_paciente         = 'datos_paciente',
            $table_conmorbilidades        = 'conmorbilidades',
            $table_atencion_medica        = 'atencion_medica',
            $table_pre_hierro             = 'pre_hierro',
            $table_reacciones_previas     = 'reacciones_previas',
            $table_procedimiento_qx       = 'procedimiento_qx',
            $table_post_hierro            = 'post_hierro',
            $table_reacciones_posteriores = 'reacciones_posteriores'
        );

        $Data_pacientes = array(
            'curp'             => $_POST['curp'],
            'nombre_paciente'  => $_POST['nombre'],
            'fecha_nacimiento' => $_POST['fecha'],
            'edad'             => $_POST['edad'],
            'sexo'             => $_POST['sexo'],
            'asnm'             => $_POST['asnm'],
            'talla'            => $_POST['talla'],
            'peso'             => $_POST['peso'],
            'imc'              => $_POST['imc'],
            'resultadoimc'     => $_POST['imcdescripcion']
        );

        foreach ($Data_pacientes as $key => $value) {
            $Data_pacientes[$key] = $connectionDB->escapeString($value);
        }
        $Result_Paciente = $connectionDB->insertData($Tables[0], $Data_pacientes);

        $Data_conmorbilidades = array(
            'tip'                      => isset($_POST["TIP"]) ? 'Si' : 'No',
            'cancer'                   => isset($_POST["Cáncer"]) ? 'Si' : 'No',
            'neumonia'                 => isset($_POST["Neumonia"]) ? 'Si' : 'No',
            'drogasIV'                 => isset($_POST["DrogasIV"]) ? 'Si' : 'No',
            'eclampsia'                => isset($_POST["Eclampsia"]) ? 'Si' : 'No',
            'artropatia'               => isset($_POST["Artropatía"]) ? 'Si' : 'No',
            'les_activo'               => isset($_POST["LESActivo"]) ? 'Si' : 'No',
            'miomatosis'               => isset($_POST["Miomatosis"]) ? 'Si' : 'No',
            'nefropatia'               => isset($_POST["Nefropatia"]) ? 'Si' : 'No',
            'colelitiasis'             => isset($_POST["Colelitiasis"]) ? 'Si' : 'No',
            'sx_hellp'                 => isset($_POST["SxdeHELLP"]) ? 'Si' : 'No',
            'sx_nefrotico'             => isset($_POST["SxNefrotico"]) ? 'Si' : 'No',
            'drepanocitica'            => isset($_POST["Drepanocitica"]) ? 'Si' : 'No',
            'hipotiroidismo'           => isset($_POST["Hipotiroidismo"]) ? 'Si' : 'No',
            'miastenia_gravis'         => isset($_POST["Miastenia"]) ? 'Si' : 'No',
            'ruptura_esplenica'        => isset($_POST["RupturaEsplenica"]) ? 'Si' : 'No',
            'lesion_renal'             => isset($_POST["LESRenalAguda"]) ? 'Si' : 'No',
            'enferemedades_graves'     => isset($_POST["EnfermedadesGraves"]) ? 'Si' : 'No',
            'diabetes_gestacional'     => isset($_POST["diabetesgestacional"]) ? 'Si' : 'No',
            'condilomatosis_vulvar'    => isset($_POST["candilomatosisvalvular"]) ? 'Si' : 'No',
            'hipertension_gestacional' => isset($_POST["HASGestacional"]) ? 'Si' : 'No',
            'falla_cardiaca'           => isset($_POST["FallaCardiacaCardiopatia"]) ? 'Si' : 'No',
            'infeccion_vias'           => isset($_POST["InfeccionViasUrinarias"]) ? 'Si' : 'No',
            'desequilibrio_hidro'      => isset($_POST["DesequilibrioHidro"]) ? 'Si' : 'No',
            'ninguna'                  => isset($_POST["ninguno"]) ? 'Si' : 'No',
            'otros'                    => isset($_POST["otros"]) ? 'Si' : 'No',
            'otros_campo'              => $_POST["input_Otros"],
            'id_paciente'              => $Result_Paciente
        );
        
        foreach ($Data_conmorbilidades as $key => $value) {
            $Data_conmorbilidades[$key] = $connectionDB->escapeString($value);
        }
        $Result_conmorbilidades = $connectionDB->insertData($Tables[1], $Data_conmorbilidades);

        $Data_atencion_medica = array(
            'embarazo'    => $_POST['Embarazo'],
            'puerperio'   => $_POST['Puerperio'],
            'id_paciente' => $Result_Paciente
        );
        
        foreach ($Data_atencion_medica as $key => $value) {
            $Data_atencion_medica[$key] = $connectionDB->escapeString($value);
        }
        $Result_atencion_medica = $connectionDB->insertData($Tables[2], $Data_atencion_medica);

        $Data_pre_hierro = array(
            'pre_hemoglobina'             => $_POST['pre_Hemoglobina'],
            'pre_b12'                     => $_POST['pre_b12'],
            'pre_ferretina'               => $_POST['pre_ferritina'],
            'pre_calculoDeficiencia'      => $_POST['pre_calculo'],
            'pre_tratamiento'             => $_POST['pre_tratamientohierro'],
            'pre_sacarato'                => $_POST['sacaratoferrico'],
            'dosis_sacarato'              => $_POST['dosisscaratoferrico'],
            'numero_dosisSacarato'        => $_POST['nodosissfpre'],
            'pre_carboximaltosa'          => $_POST['carboximaltosaferrica'],
            'dosis_carboximaltosa'        => $_POST['dosiscarboximaltosaferrica'],
            'numero_dosisCarboximaltosa'  => $_POST['nocarboximaltosaferrica'],
            'pre_dextrano'                => $_POST['hierrodextrano'],
            'dosis_dextrano'              => $_POST['dosishierro'],
            'numero_dosisDextrano'        => $_POST['nodosishierro'],
            'premeditacion'               => $_POST['premedicacion'],
            'medicamento'                 => $_POST['medicamento'],
            'solucion_infundida'          => $_POST['pre_solucioninfundida'],
            'id_paciente'                 => $Result_Paciente
        );
        
        foreach ($Data_pre_hierro as $key => $value) {
            $Data_pre_hierro[$key] = $connectionDB->escapeString($value);
        }
        $Result_pre_hierro = $connectionDB->insertData($Tables[3], $Data_pre_hierro);


        $Data_reacciones_previas = array(
            'pre_cefalea'        => isset($_POST["cefaleaRA"]) ? 'Si' : 'No',
            'pre_nauseas'        => isset($_POST["nauseasRA"]) ? 'Si' : 'No',
            'pre_hipertension'   => isset($_POST["hipertensionRA"]) ? 'Si' : 'No',
            'pre_hipotension'    => isset($_POST["hipotensionRA"]) ? 'Si' : 'No',
            'pre_taquicardia'    => isset($_POST["taquicardiaRA"]) ? 'Si' : 'No',
            'pre_bradicardia'    => isset($_POST["bradicardiaRA"]) ? 'Si' : 'No',
            'pre_otro'           => isset($_POST["otroRA"]) ? 'Si' : 'No',
            'pre_ninguna'        => isset($_POST["ningunaRA"]) ? 'Si' : 'No',
            'pre_grado_reaccion' => isset($_POST["reaccionadversa"]) ? 'Si' : 'No',
            'id_paciente'        => $Result_Paciente
        );
        
        foreach ($Data_reacciones_previas as $key => $value) {
            $Data_reacciones_previas[$key] = $connectionDB->escapeString($value);
        }
        $Result_reacciones_previas = $connectionDB->insertData($Tables[4], $Data_reacciones_previas);

        $Data_procedimiento_qx = array(
            'cirugia'               => $_POST['cirugia'],
            'fecha_cirugia'         => $_POST['fechacirugia'],
            'pre_qxHemoglobina'     => $_POST['hemoglobinapre'],
            'cesarea'               => $_POST['cesarea'],
            'fecha_cesarea'         => $_POST['fechacesarea'],
            'hemorragia_masiva'     => $_POST['HemorragiaMasiva'],
            'cantidad_sangrado'     => $_POST['cantidadsangrado'],
            'hemorragia'            => $_POST['Hemorragia'],
            'complicasiones'        => $_POST['Complicaciones'],
            'transfusiones'         => $_POST['Transfusion'],
            'ninguna_transfusion'   => isset($_POST["ninguncomponente"]) ? 'Si' : 'No',
            'plasma'                => isset($_POST["plasma"]) ? 'Si' : 'No',
            'no_plasma'             => $_POST['componenteplasma'],
            'plaquetas'             => isset($_POST["plaquetas"]) ? 'Si' : 'No',
            'no_plaquetas'          => $_POST['componenteplaquetas'],
            'crioprecipitado'       => isset($_POST["Crioprecipitados"]) ? 'Si' : 'No',
            'no_crioprecipitado'    => $_POST['componentescrioprecipitados'],
            'plaqueta_globular'     => isset($_POST["PaqueteGlobular"]) ? 'Si' : 'No',
            'no_plaqueta_globular'  => $_POST['componentePG'],
            'id_paciente'           => $Result_Paciente
        );
        
        foreach ($Data_procedimiento_qx as $key => $value) {
            $Data_procedimiento_qx[$key] = $connectionDB->escapeString($value);
        }
        $Result_procedimiento_qx = $connectionDB->insertData($Tables[5], $Data_procedimiento_qx);

        $Data_post_hierro = array(
            'post_hemoglobina'                  => $_POST['post_hemo'],
            'post_b12'                          => $_POST['post_b12'],
            'post_ferretina'                    => $_POST['post_ferretina'],
            'post_calculoDeficiencia'           => $_POST['post_calculo'],
            'post_tratamiento'                  => $_POST['post_tratamientohierro'],
            'tratamiento_oral'                  => $_POST['tratamientoviaoral'],
            'post_sacarato'                     => $_POST['sacaratoferricopost'],
            'post_dosis_sacarato'               => $_POST['dosisscaratoferricopost'],
            'post_numero_dosisSacarato'        => $_POST['nodosissacaratoferricopost'],
            'post_carboximaltosa'              => $_POST['carboximaltosaferricapost'],
            'post_dosis_carboximaltosa'        => $_POST['dosiscarboximaltosaferricapost'],
            'post_numero_dosisCarboximaltosa'  => $_POST['nocarboximaltosaferricapost'],
            'post_dextrano'                    => $_POST['hierrodextranopost'],
            'post_dosis_dextrano'              => $_POST['dosishierropost'],
            'post_numero_dosisDextrano'        => $_POST['nodosishierropost'],
            'post_premeditacion'               => $_POST['premedicacionpost'],
            'post_medicamento'                 => $_POST['medicamentopost'],
            'post_solucion_infundida'          => $_POST['post_solucioninfundida'],
            'id_paciente'                      => $Result_Paciente
        );
        
        foreach ($Data_post_hierro as $key => $value) {
            $Data_post_hierro[$key] = $connectionDB->escapeString($value);
        }
        $Result_post_hierro = $connectionDB->insertData($Tables[6], $Data_post_hierro);

        $Data_reacciones_previas = array(
            'post_cefalea'         => isset($_POST["cefaleaRApost"]) ? 'Si' : 'No',
            'post_nauseas'         => isset($_POST["nauseasRApost"]) ? 'Si' : 'No',
            'post_hipertension'    => isset($_POST["hipertensionRApost"]) ? 'Si' : 'No',
            'post_hipotension'     => isset($_POST["hipotensionRApost"]) ? 'Si' : 'No',
            'post_taquicardia'     => isset($_POST["taquicardiaRApost"]) ? 'Si' : 'No',
            'post_bradicardia'     => isset($_POST["bradicardiaRApost"]) ? 'Si' : 'No',
            'post_urticaria'       => isset($_POST["UrticariaRApost"]) ? 'Si' : 'No',
            'post_otro'            => isset($_POST["otroRApost"]) ? 'Si' : 'No',
            'post_ninguna'         => isset($_POST["ningunaRApost"]) ? 'Si' : 'No',
            'post_grado_reaccion'  => $_POST['reaccionadversapost'],
            'id_paciente'          => $Result_Paciente
        );
        
        foreach ($Data_reacciones_previas as $key => $value) {
            $Data_reacciones_previas[$key] = $connectionDB->escapeString($value);
        }
        $Result_reacciones_previas = $connectionDB->insertData($Tables[7], $Data_reacciones_previas);


        echo 'success';
    }


?>