<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ane.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT dp.*,c.*,am.*,ph.*,rp.*,pq.*,phi.*,rpo.* FROM datos_paciente dp
        JOIN conmorbilidades c ON dp.id_paciente=c.id_paciente
        JOIN atencion_medica am ON dp.id_paciente=am.id_paciente
        JOIN pre_hierro ph ON dp.id_paciente=ph.id_paciente
        JOIN reacciones_previas rp ON dp.id_paciente=rp.id_paciente
        JOIN procedimiento_qx pq ON dp.id_paciente=pq.id_paciente
        JOIN post_hierro phi ON dp.id_paciente=phi.id_paciente
        JOIN reacciones_posteriores rpo ON dp.id_paciente=rpo.id_paciente WHERE dp.id_paciente='$id_paciente';";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $curp = $data['curp'];
                $nombre_paciente = $data['nombre_paciente'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $asnm = $data['asnm'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $resultadoimc = $data['resultadoimc'];
        
                $tip = $data['tip'];
                $cancer = $data['cancer'];
                $neumonia = $data['neumonia'];
                $drogasIV = $data['drogasIV'];
                $eclampsia = $data['eclampsia'];
                $artropatia = $data['artropatia'];
                $les_activo = $data['les_activo'];
                $miomatosis = $data['miomatosis'];
                $nefropatia = $data['nefropatia'];
                $colelitiasis = $data['colelitiasis'];
                $sx_hellp = $data['sx_hellp'];
                $sx_nefrotico = $data['sx_nefrotico'];
                $drepanocitica = $data['drepanocitica'];
                $hipotiroidismo = $data['hipotiroidismo'];
                $miastenia_gravis = $data['miastenia_gravis'];
                $ruptura_esplenica = $data['ruptura_esplenica'];
                $lesion_renal = $data['lesion_renal'];
                $enferemedades_graves = $data['enferemedades_graves'];
                $diabetes_gestacional = $data['diabetes_gestacional'];
                $condilomatosis_vulvar = $data['condilomatosis_vulvar'];
                $hipertension_gestacional = $data['hipertension_gestacional'];
                $falla_cardiaca = $data['falla_cardiaca'];
                $infeccion_vias = $data['infeccion_vias'];
                $desequilibrio_hidro = $data['desequilibrio_hidro'];
                $ninguna = $data['ninguna'];
                $otros = $data['otros'];
                $otros_campo = $data['otros_campo'];
        
                $embarazo = $data['embarazo'];
                $puerperio = $data['puerperio'];
        
                $pre_hemoglobina = $data['pre_hemoglobina'];
                $pre_b12 = $data['pre_b12'];
                $pre_ferretina = $data['pre_ferretina'];
                $pre_calculoDeficiencia = $data['pre_calculoDeficiencia'];
                $pre_tratamiento = $data['pre_tratamiento'];
                $pre_sacarato = $data['pre_sacarato'];
                $dosis_sacarato = $data['dosis_sacarato'];
                $numero_dosisSacarato = $data['numero_dosisSacarato'];
                $pre_carboximaltosa = $data['pre_carboximaltosa'];
                $dosis_carboximaltosa = $data['dosis_carboximaltosa'];
                $numero_dosisCarboximaltosa = $data['numero_dosisCarboximaltosa'];
                $pre_dextrano = $data['pre_dextrano'];
                $dosis_dextrano = $data['dosis_dextrano'];
                $numero_dosisDextrano = $data['numero_dosisDextrano'];
                $premeditacion = $data['premeditacion'];
                $medicamento = $data['medicamento'];
                $solucion_infundida = $data['solucion_infundida'];
        
                $pre_cefalea = $data['pre_cefalea'];
                $pre_nauseas = $data['pre_nauseas'];
                $pre_hipertension = $data['pre_hipertension'];
                $pre_hipotension = $data['pre_hipotension'];
                $pre_taquicardia = $data['pre_taquicardia'];
                $pre_bradicardia = $data['pre_bradicardia'];
                $pre_otro = $data['pre_otro'];
                $pre_ninguna = $data['pre_ninguna'];
                $pre_grado_reaccion = $data['pre_grado_reaccion'];
        
                $cirugia = $data['cirugia'];
                $fecha_cirugia = $data['fecha_cirugia'];
                $pre_qxHemoglobina = $data['pre_qxHemoglobina'];
                $cesarea = $data['cesarea'];
                $fecha_cesarea = $data['fecha_cesarea'];
                $hemorragia_masiva = $data['hemorragia_masiva'];
                $cantidad_sangrado = $data['cantidad_sangrado'];
                $hemorragia = $data['hemorragia'];
                $complicasiones = $data['complicasiones'];
                $transfusiones = $data['transfusiones'];
                $ninguna_transfusion = $data['ninguna_transfusion'];
                $plasma = $data['plasma'];
                $no_plasma = $data['no_plasma'];
                $plaquetas = $data['plaquetas'];
                $no_plaquetas = $data['no_plaquetas'];
                $crioprecipitado = $data['crioprecipitado'];
                $no_crioprecipitado = $data['no_crioprecipitado'];
                $plaqueta_globular = $data['plaqueta_globular'];
                $no_plaqueta_globular = $data['no_plaqueta_globular'];
        
                $post_hemoglobina = $data['post_hemoglobina'];
                $post_b12 = $data['post_b12'];
                $post_ferretina = $data['post_ferretina'];
                $post_calculoDeficiencia = $data['post_calculoDeficiencia'];
                $post_tratamiento = $data['post_tratamiento'];
                $tratamiento_oral = $data['tratamiento_oral'];
                $post_sacarato = $data['post_sacarato'];
                $post_dosis_sacarato = $data['post_dosis_sacarato'];
                $post_numero_dosisSacarato = $data['post_numero_dosisSacarato'];
                $post_carboximaltosa = $data['post_carboximaltosa'];
                $post_dosis_carboximaltosa = $data['post_dosis_carboximaltosa'];
                $post_numero_dosisCarboximaltosa = $data['post_numero_dosisCarboximaltosa'];
                $post_dextrano = $data['post_dextrano'];
                $post_dosis_dextrano = $data['post_dosis_dextrano'];
                $post_numero_dosisDextrano = $data['post_numero_dosisDextrano'];
                $post_premeditacion = $data['post_premeditacion'];
                $post_medicamento = $data['post_medicamento'];
                $post_solucion_infundida = $data['post_solucion_infundida'];
        
                $post_cefalea = $data['post_cefalea'];
                $post_nauseas = $data['post_nauseas'];
                $post_hipertension = $data['post_hipertension'];
                $post_hipotension = $data['post_hipotension'];
                $post_taquicardia = $data['post_taquicardia'];
                $post_bradicardia = $data['post_bradicardia'];
                $post_Urticaria = $data['post_urticaria'];
                $post_otro = $data['post_otro'];
                $post_ninguna = $data['post_ninguna'];
                $post_grado_reaccion = $data['post_grado_reaccion'];

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