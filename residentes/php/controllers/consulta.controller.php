<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_residentes.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_residente = null;
    if (isset($_GET['idResidente']) && is_numeric($_GET['idResidente'])) {
        $id_residente = $_GET['idResidente'];

        $queryAllData = "SELECT dp.*, a.*, b.*, c.*, d.*, e.*, f.*, g.*, h.*, i.*, j.*
        FROM datos_productividad dp
        LEFT JOIN artrocentesis a ON dp.id_productividad = a.id_productividad
        LEFT JOIN aspiracion_mo b ON dp.id_productividad = b.id_productividad
        LEFT JOIN biopsia_celular c ON dp.id_productividad = c.id_productividad
        LEFT JOIN biopsia_piel d ON dp.id_productividad = d.id_productividad
        LEFT JOIN biopsia_tiroides e ON dp.id_productividad = e.id_productividad
        LEFT JOIN cvc f ON dp.id_productividad = f.id_productividad
        LEFT JOIN intubacion g ON dp.id_productividad = g.id_productividad
        LEFT JOIN paracentesis h ON dp.id_productividad = h.id_productividad
        LEFT JOIN puncion_lumbar i ON dp.id_productividad = i.id_productividad
        LEFT JOIN toracocentesis j ON dp.id_productividad = j.id_productividad WHERE dp.id_productividad ='$id_residente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {


                $fecha = $data['fecha'];
                $residentes = $data['residentes'];
                $nombre_responsable = $data['nombre_responsable'];
                $nombre_paciente    = $data['nombre_paciente'];

                $pl_intento1 = $data['pl_intento1'];
                $pl_comp1 = $data['pl_comp1'];
                $pl_TpoComp1 = $data['pl_TpoComp1'];
                $pl_otros1 = $data['pl_otros1'];
                $pl_intento2 = $data['pl_intento2'];
                $pl_comp2 = $data['pl_comp2'];
                $pl_TpoComp2 = $data['pl_TpoComp2'];
                $pl_otros2 = $data['pl_otros2'];
                $pl_intento3 = $data['pl_intento3'];
                $pl_comp3 = $data['pl_comp3'];
                $pl_TpoComp3 = $data['pl_TpoComp3'];
                $pl_otros3 = $data['pl_otros3'];
                

                $ib_intento1 = $data['ib_intento1'];
                $ib_comp1 = $data['ib_comp1'];
                $ib_TpoComp1 = $data['ib_TpoComp1'];
                $ib_otros1 = $data['ib_otros1'];
                $ib_intento2 = $data['ib_intento2'];
                $ib_comp2 = $data['ib_comp2'];
                $ib_TpoComp2 = $data['ib_TpoComp2'];
                $ib_otros2 = $data['ib_otros2'];
                $ib_intento3 = $data['ib_intento3'];
                $ib_comp3 = $data['ib_comp3'];
                $ib_TpoComp3 = $data['ib_TpoComp3'];
                $ib_otros3 = $data['ib_otros3'];
                

                $cv_TpoCVC1 = $data['cv_TpoCVC1'];
                $cv_Anatomia1 = $data['cv_Anatomia1'];
                $cv_intento1 = $data['cv_intento1'];
                $cv_comp1 = $data['cv_comp1'];
                $cv_TpoComp1 = $data['cv_TpoComp1'];
                $cv_otros1 = $data['cv_otros1'];
                $cv_TpoCVC2 = $data['cv_TpoCVC2'];
                $cv_Anatomia2 = $data['cv_Anatomia2'];
                $cv_intento2 = $data['cv_intento2'];
                $cv_comp2 = $data['cv_comp2'];
                $cv_TpoComp2 = $data['cv_TpoComp2'];
                $cv_otros2 = $data['cv_otros2'];
                $cv_TpoCVC3 = $data['cv_TpoCVC3'];
                $cv_Anatomia3 = $data['cv_Anatomia3'];
                $cv_intento3 = $data['cv_intento3'];
                $cv_comp3 = $data['cv_comp3'];
                $cv_TpoComp3 = $data['cv_TpoComp3'];
                $cv_otros3 = $data['cv_otros3'];
                


                            
                $pt_intento1 = $data['pt_intento1'];
                $pt_comp1 = $data['pt_comp1'];
                $pt_TpoComp1 = $data['pt_TpoComp1'];
                $pt_otros1 = $data['pt_otros1'];
                $pt_intento2 = $data['pt_intento2'];
                $pt_comp2 = $data['pt_comp2'];
                $pt_TpoComp2 = $data['pt_TpoComp2'];
                $pt_otros2 = $data['pt_otros2'];
                $pt_intento3 = $data['pt_intento3'];
                $pt_comp3 = $data['pt_comp3'];
                $pt_TpoComp3 = $data['pt_TpoComp3'];
                $pt_otros3 = $data['pt_otros3'];
                


                $bp_intento1 = $data['bp_intento1'];
                $bp_comp1 = $data['bp_comp1'];
                $bp_TpoComp1 = $data['bp_TpoComp1'];
                $bp_otros1 = $data['bp_otros1'];
                $bp_intento2 = $data['bp_intento2'];
                $bp_comp2 = $data['bp_comp2'];
                $bp_TpoComp2 = $data['bp_TpoComp2'];
                $bp_otros2 = $data['bp_otros2'];
                $bp_intento3 = $data['bp_intento3'];
                $bp_comp3 = $data['bp_comp3'];
                $bp_TpoComp3 = $data['bp_TpoComp3'];
                $bp_otros3 = $data['bp_otros3'];
                



                $bc_intento1 = $data['bc_intento1'];
                $bc_comp1 = $data['bc_comp1'];
                $bc_TpoComp1 = $data['bc_TpoComp1'];
                $bc_otros1 = $data['bc_otros1'];
                $bc_intento2 = $data['bc_intento2'];
                $bc_comp2 = $data['bc_comp2'];
                $bc_TpoComp2 = $data['bc_TpoComp2'];
                $bc_otros2 = $data['bc_otros2'];
                $bc_intento3 = $data['bc_intento3'];
                $bc_comp3 = $data['bc_comp3'];
                $bc_TpoComp3 = $data['bc_TpoComp3'];
                $bc_otros3 = $data['bc_otros3'];
                


                $bt_intento1 = $data['bt_intento1'];
                $bt_comp1 = $data['bt_comp1'];
                $bt_TpoComp1 = $data['bt_TpoComp1'];
                $bt_otros1 = $data['bt_otros1'];
                $bt_intento2 = $data['bt_intento2'];
                $bt_comp2 = $data['bt_comp2'];
                $bt_TpoComp2 = $data['bt_TpoComp2'];
                $bt_otros2 = $data['bt_otros2'];
                $bt_intento3 = $data['bt_intento3'];
                $bt_comp3 = $data['bt_comp3'];
                $bt_TpoComp3 = $data['bt_TpoComp3'];
                $bt_otros3 = $data['bt_otros3'];
                


                            
                $tora_intento1 = $data['tora_intento1'];
                $tora_comp1 = $data['tora_comp1'];
                $tora_TpoComp1 = $data['tora_TpoComp1'];
                $tora_otros1 = $data['tora_otros1'];
                $tora_intento2 = $data['tora_intento2'];
                $tora_comp2 = $data['tora_comp2'];
                $tora_TpoComp2 = $data['tora_TpoComp2'];
                $tora_otros2 = $data['tora_otros2'];
                $tora_intento3 = $data['tora_intento3'];
                $tora_comp3 = $data['tora_comp3'];
                $tora_TpoComp3 = $data['tora_TpoComp3'];
                $tora_otros3 = $data['tora_otros3'];
                


            

                $at_intento1 = $data['at_intento1'];
                $at_comp1 = $data['at_comp1'];
                $at_TpoComp1 = $data['at_TpoComp1'];
                $at_otros1 = $data['at_otros1'];
                $at_intento2 = $data['at_intento2'];
                $at_comp2 = $data['at_comp2'];
                $at_TpoComp2 = $data['at_TpoComp2'];
                $at_otros2 = $data['at_otros2'];
                $at_intento3 = $data['at_intento3'];
                $at_comp3 = $data['at_comp3'];
                $at_TpoComp3 = $data['at_TpoComp3'];
                $at_otros3 = $data['at_otros3'];
                



                $mo_intento1 = $data['mo_intento1'];
                $mo_comp1 = $data['mo_comp1'];
                $mo_TpoComp1 = $data['mo_TpoComp1'];
                $mo_otros1 = $data['mo_otros1'];
                $mo_intento2 = $data['mo_intento2'];
                $mo_comp2 = $data['mo_comp2'];
                $mo_TpoComp2 = $data['mo_TpoComp2'];
                $mo_otros2 = $data['mo_otros2'];
                $mo_intento3 = $data['mo_intento3'];
                $mo_comp3 = $data['mo_comp3'];
                $mo_TpoComp3 = $data['mo_TpoComp3'];
                $mo_otros3 = $data['mo_otros3'];
                

            }
        }else {
            echo "No se encontro la informacion";
            exit;
        }
    }else {
        echo $id_residente;
        exit;
    }


?>