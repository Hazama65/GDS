<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CM.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_paciente dp
        JOIN signos_vitales_sometria svs ON dp.id_paciente = svs.id_paciente
        JOIN antecedentes_patologicos ap ON dp.id_paciente = ap.id_paciente
        JOIN antecedentes_familiares af ON dp.id_paciente = af.id_paciente
        JOIN antecedentes_gineco ag ON dp.id_paciente = ag.id_paciente
        JOIN antecedentes_emb ae ON dp.id_paciente = ae.id_paciente
        JOIN atencion_clinica ac ON dp.id_paciente = ac.id_paciente
        JOIN histopatologia histo ON dp.id_paciente = histo.id_paciente
        JOIN inmuno inm ON dp.id_paciente = inm.id_paciente
        JOIN molecular mc ON dp.id_paciente = mc.id_paciente
        JOIN tratamiento tx ON dp.id_paciente = tx.id_paciente
        JOIN quimio qm ON dp.id_paciente = qm.id_paciente
        JOIN momento1 m1 ON dp.id_paciente = m1.id_paciente
        JOIN momento2 m2 ON dp.id_paciente = m2.id_paciente
        JOIN momento3 m3 ON dp.id_paciente = m3.id_paciente
        JOIN hhtht ht ON dp.id_paciente = ht.id_paciente
        JOIN full_quimio fqm ON dp.id_paciente = fqm.id_paciente
        JOIN radio_defun rd ON dp.id_paciente = rd.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $nombre_px = $data['nombre_px'];
                $curp = $data['curp'];
                $genero = $data['genero'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $Estadocivil = $data['Estadocivil'];
                $Raza = $data['Raza'];
                $unidad_referencia = $data['unidad_referencia'];
                $Presion_sistolica = $data['Presion_sistolica'];
                $Presion_Diastolica = $data['Presion_Diastolica'];
                $FC = $data['FC'];
                $fr = $data['fr'];
                $Glucemia = $data['Glucemia'];
                $peso = $data['peso'];
                $talla = $data['talla'];
                $circunferencia = $data['circunferencia'];
                $BRCA_1 = $data['BRCA_1'];
                $BRCA_2 = $data['BRCA_2'];
                $diabetes = $data['diabetes'];
                $renal_cronica = $data['renal_cronica'];
                $Hipertension = $data['Hipertension'];
                $Tabaquismo = $data['Tabaquismo'];
                $Antecedentecancer_mama = $data['Antecedentecancer_mama'];
                $Antecedentes_ninguna = $data['Antecedentes_ninguna'];
                $Heredo_Cancer = $data['Heredo_Cancer'];
                $Heredo_CancerProstata = $data['Heredo_CancerProstata'];
                $Abuelo_materno_cancer = $data['Abuelo_materno_cancer'];
                $Abuelo_paterno_cancer = $data['Abuelo_paterno_cancer'];
                $Hermano_Prostata = $data['Hermano_Prostata'];
                $Padre_cancer_Prostata = $data['Padre_cancer_Prostata'];
                $Primo_Materno_Prostata = $data['Primo_Materno_Prostata'];
                $Primo_Paterno_Prostata = $data['Primo_Paterno_Prostata'];
                $Tio_Materno_Prostata = $data['Tio_Materno_Prostata'];
                $Tio_Paterno_Prostata = $data['Tio_Paterno_Prostata'];
                $Heredo_CancerOvario = $data['Heredo_CancerOvario'];
                $Abuela_MaternaAntecedentes_Ovario = $data['Abuela_MaternaAntecedentes_Ovario'];
                $Abuela_PaternaAntecedentes_Ovario = $data['Abuela_PaternaAntecedentes_Ovario'];
                $Hermana_Antecedentes_Ovario = $data['Hermana_Antecedentes_Ovario'];
                $Madre_Antecedentes_Ovario = $data['Madre_Antecedentes_Ovario'];
                $PrimaMaterna_Antecedentes_Ovario = $data['PrimaMaterna_Antecedentes_Ovario'];
                $Prima_paternaAntecedentes_Ovario = $data['Prima_paternaAntecedentes_Ovario'];
                $Tia_MaternaAntecedentes_Ovario = $data['Tia_MaternaAntecedentes_Ovario'];
                $Tia_PaternaAntecedentes_Ovario = $data['Tia_PaternaAntecedentes_Ovario'];
                $Heredo_CancerMama = $data['Heredo_CancerMama'];
                $Abuela_MaternaAntecedentes_Mama = $data['Abuela_MaternaAntecedentes_Mama'];
                $Abuela_PaternaAntecedentes_Mama = $data['Abuela_PaternaAntecedentes_Mama'];
                $Hermana_Antecedentes_Mama = $data['Hermana_Antecedentes_Mama'];
                $Madre_Antecedentes_Mama = $data['Madre_Antecedentes_Mama'];
                $PrimaMaterna_Antecedentes_Mama = $data['PrimaMaterna_Antecedentes_Mama'];
                $Prima_paternaAntecedentes_Mama = $data['Prima_paternaAntecedentes_Mama'];
                $Tia_MaternaAntecedentes_Mama = $data['Tia_MaternaAntecedentes_Mama'];
                $Tia_PaternaAntecedentes_Mama = $data['Tia_PaternaAntecedentes_Mama'];
                $Menarca = $data['Menarca'];
                $Menopausia = $data['Menopausia'];
                $Gestas = $data['Gestas'];
                $Esta_Embarazada = $data['Esta_Embarazada'];
                $fecha_probableParto = $data['fecha_probableParto'];
                $Terapia_remplazoHormonal = $data['Terapia_remplazoHormonal'];
                $Lactancia = $data['Lactancia'];
                $Tiempo = $data['Tiempo'];
                $Gestas_Embarazo = $data['Gestas_Embarazo'];
                $Paras = $data['Paras'];
                $Abortos = $data['Abortos'];
                $Cesareas = $data['Cesareas'];
                $Ectopicos = $data['Ectopicos'];
                $comentarios = $data['comentarios'];
                $Fecha_primeraAtencion = $data['Fecha_primeraAtencion'];
                $BIRADS_Referencia = $data['BIRADS_Referencia'];
                $BIRADS_Hospital = $data['BIRADS_Hospital'];
                $Lateralidad = $data['Lateralidad'];
                $Estado_clinico = $data['Estado_clinico'];
                $Etapa_Clinica = $data['Etapa_Clinica'];
                $Estado_Tamaño = $data['Estado_Tamaño'];
                $Metastasis = $data['Metastasis'];
                $Calidad_ECOG = $data['Calidad_ECOG'];
                $Compromiso_linfatico = $data['Compromiso_linfatico'];
                $Mastectomia_extrain = $data['Mastectomia_extrain'];
                $Lateralidad_mastectomia = $data['Lateralidad_mastectomia'];
                $fecha_ATC = $data['fecha_ATC'];
                $Histopatologia = $data['Histopatologia'];
                $Histopatologia_area = $data['Histopatologia_area'];
                $Dx_Histopatologia_area = $data['Dx_Histopatologia_area'];
                $fecha_dxHistopatologico = $data['fecha_dxHistopatologico'];
                $Histopatologia_Nottinghan = $data['Histopatologia_Nottinghan'];
                $Histopatologia_Escala_SBR = $data['Histopatologia_Escala_SBR'];
                $Histopatologia_Escala_MID = $data['Histopatologia_Escala_MID'];
                $Inmunohistoquimica = $data['Inmunohistoquimica'];
                $Inmunohistoquimica_area = $data['Inmunohistoquimica_area'];
                $Receptores_RE = $data['Receptores_RE'];
                $Receptores_RP = $data['Receptores_RP'];
                $KI_67 = $data['KI_67'];
                $P_53 = $data['P_53'];
                $Triple_Negativo = $data['Triple_Negativo'];
                $PDL = $data['PDL'];
                $Oncogen_her2 = $data['Oncogen_her2'];
                $FISH = $data['FISH'];
                $Molecular = $data['Molecular'];
                $Molecular_area = $data['Molecular_area'];
                $Luminal_A = $data['Luminal_A'];
                $Luminal_B = $data['Luminal_B'];
                $Enriquecido_HER = $data['Enriquecido_HER'];
                $Basal = $data['Basal'];
                $Quirurgicos = $data['Quirurgicos'];
                $Lateralidad_QX = $data['Lateralidad_QX'];
                $Tipo_qx = $data['Tipo_qx'];
                $tipo_ganglionar = $data['tipo_ganglionar'];
                $fecha_ganglionar = $data['fecha_ganglionar'];
                $fecha_Mastectomia = $data['fecha_Mastectomia'];
                $tipo_Mastectomia = $data['tipo_Mastectomia'];
                $tipo_MastReconstruccion_Mastectomia = $data['tipo_MastReconstruccion_Mastectomia'];
                $Quimioterapia = $data['Quimioterapia'];
                $Antraciclinas = $data['Antraciclinas'];
                $Tipo_QT = $data['Tipo_QT'];
                $FechaInicio_QT = $data['FechaInicio_QT'];
                $FechaTernmino_QT = $data['FechaTernmino_QT'];
                $_5fu_Esquema = $data['5fu_Esquema'];
                $AC_Esquema = $data['AC_Esquema'];
                $Esquema_AC_T = $data['Esquema_AC_T'];
                $AC_TH_Esquema = $data['AC_TH_Esquema'];
                $AT_Esquema = $data['AT_Esquema'];
                $Atezolizumab_Esquema = $data['Atezolizumab_Esquema'];
                $Bevacizumab_Esquema = $data['Bevacizumab_Esquema'];
                $Capecitabina_Esquema = $data['Capecitabina_Esquema'];
                $CBP_Esquema = $data['CBP_Esquema'];
                $Ciclofosfamida_Esquema = $data['Ciclofosfamida_Esquema'];
                $Cisplatino_Esquema = $data['Cisplatino_Esquema'];
                $CMF_Esquema = $data['CMF_Esquema'];
                $Ctuximab_Esquema = $data['Ctuximab_Esquema'];
                $Docetaxel_Esquema = $data['Docetaxel_Esquema'];
                $EC_Esquema = $data['EC_Esquema'];
                $Etopósido_Esquema = $data['Etopósido_Esquema'];
                $FAC_Esquema = $data['FAC_Esquema'];
                $FEC_Esquema = $data['FEC_Esquema'];
                $Herceptin_Esquema = $data['Herceptin_Esquema'];
                $Lapatinib_Esquema = $data['Lapatinib_Esquema'];
                $Paclitaxel_Esquema = $data['Paclitaxel_Esquema'];
                $Pembrolixumab_Esquema = $data['Pembrolixumab_Esquema'];
                $Pertuzumab_Esquema = $data['Pertuzumab_Esquema'];
                $TAC_Esquema = $data['TAC_Esquema'];
                $TC_Esquema = $data['TC_Esquema'];
                $TCH_Esquema = $data['TCH_Esquema'];
                $TCHP_Esquema = $data['TCHP_Esquema'];
                $TH_Esquema = $data['TH_Esquema'];
                $THP_Esquema = $data['THP_Esquema'];
                $Trastuzumab_Esquema = $data['Trastuzumab_Esquema'];
                $Trastuzumab_SinRegistro = $data['Trastuzumab_SinRegistro'];
                $_5fu = $data['5fu'];
                $AC = $data['AC'];
                $AC_T_1QT = $data['AC_T_1QT'];
                $AC_TH1QT = $data['AC_TH1QT'];
                $AT_1QT = $data['AT_1QT'];
                $Atezolizumab_1QT = $data['Atezolizumab_1QT'];
                $Bevacizumab_1QT = $data['Bevacizumab_1QT'];
                $Capecitabina_1QT = $data['Capecitabina_1QT'];
                $CBP_1QT = $data['CBP_1QT'];
                $Ciclofosfamida_1QT = $data['Ciclofosfamida_1QT'];
                $Cisplatino_1QT = $data['Cisplatino_1QT'];
                $CMF_1QT = $data['CMF_1QT'];
                $Ctuximab_1QT = $data['Ctuximab_1QT'];
                $Docetaxel_1QT = $data['Docetaxel_1QT'];
                $EC_1QT = $data['EC_1QT'];
                $Etopósido_1QT = $data['Etopósido_1QT'];
                $FAC_1QT = $data['FAC_1QT'];
                $FEC_1QT = $data['FEC_1QT'];
                $Herceptin_1QT = $data['Herceptin_1QT'];
                $Lapatinib_1QT = $data['Lapatinib_1QT'];
                $Paclitaxel_1QT = $data['Paclitaxel_1QT'];
                $Pembrolixumab_1QT = $data['Pembrolixumab_1QT'];
                $Pertuzumab_1QT = $data['Pertuzumab_1QT'];
                $TAC_1QT = $data['TAC_1QT'];
                $TC_1QT = $data['TC_1QT'];
                $TCH_1QT = $data['TCH_1QT'];
                $TCHP_1QT = $data['TCHP_1QT'];
                $TH_1QT = $data['TH_1QT'];
                $THP_1QT = $data['THP_1QT'];
                $Trastuzumab_1QT = $data['Trastuzumab_1QT'];
                $SinRegistro_1QT = $data['SinRegistro_1QT'];
                $FechaInicio_QTPaliativoz = $data['FechaInicio_QTPaliativoz'];
                $FechaTermino_QTPaliativo = $data['FechaTermino_QTPaliativo'];
                $_5fu_2doQTP = $data['5fu_2doQTP'];
                $AC_2doQTP = $data['AC_2doQTP'];
                $AC_T_2doQTP = $data['AC_T_2doQTP'];
                $AC_T_2doQTPV = $data['AC_T_2doQTPV'];
                $AT_2doQTP = $data['AT_2doQTP'];
                $Atezolizumab_2doQTP = $data['Atezolizumab_2doQTP'];
                $Bevacizumab_2doQTP = $data['Bevacizumab_2doQTP'];
                $Capecitabina_2doQTP = $data['Capecitabina_2doQTP'];
                $CBP_2doQTP = $data['CBP_2doQTP'];
                $Ciclofosfamida_2doQTP = $data['Ciclofosfamida_2doQTP'];
                $Cisplatino_2doQTP = $data['Cisplatino_2doQTP'];
                $CMF_2doQTP = $data['CMF_2doQTP'];
                $Ctuximab_2doQTP = $data['Ctuximab_2doQTP'];
                $Docetaxel_2doQTP = $data['Docetaxel_2doQTP'];
                $EC_2doQTP = $data['EC_2doQTP'];
                $Etopósido_2doQTP = $data['Etopósido_2doQTP'];
                $FAC_2doQT = $data['FAC_2doQT'];
                $FEC_2doQTP = $data['FEC_2doQTP'];
                $Herceptin_2doQTP = $data['Herceptin_2doQTP'];
                $Lapatinib_2doQTP = $data['Lapatinib_2doQTP'];
                $Paclitaxel_2doQTP = $data['Paclitaxel_2doQTP'];
                $Pembrolixumab_2doQTP = $data['Pembrolixumab_2doQTP'];
                $Pertuzumab_2doQTP = $data['Pertuzumab_2doQTP'];
                $TAC_2doQTP = $data['TAC_2doQTP'];
                $TC_2doQTP = $data['TC_2doQTP'];
                $TCH_2doQTP = $data['TCH_2doQTP'];
                $TCHP_2doQTP = $data['TCHP_2doQTP'];
                $TH_2doQTP = $data['TH_2doQTP'];
                $THP_2doQTP = $data['THP_2doQTP'];
                $Trastuzumab_2doQTP = $data['Trastuzumab_2doQTP'];
                $SinRegistro_2doQTP = $data['SinRegistro_2doQTP'];
                $FechaInicio_QT2Paliativo = $data['FechaInicio_QT2Paliativo'];
                $FechaTermino_QTP2aliativo = $data['FechaTermino_QTP2aliativo'];
                $Hormoterapia = $data['Hormoterapia'];
                $Hormonoterapia_QT = $data['Hormonoterapia_QT'];
                $Momento_Hormonoterapia = $data['Momento_Hormonoterapia'];
                $HER_2 = $data['HER_2'];
                $Esquema_HER = $data['Esquema_HER'];
                $triple_negativo = $data['triple_negativo'];
                $EsquemaTriple_negativo = $data['EsquemaTriple_negativo'];
                $Hormosensible = $data['Hormosensible'];
                $Inhibidores_Ciclinas = $data['Inhibidores_Ciclinas'];
                $Tipo_Tratamiento = $data['Tipo_Tratamiento'];
                $Completo_Quimio = $data['Completo_Quimio'];
                $CausaQT_Incompleta = $data['CausaQT_Incompleta'];
                $fecha_quimio = $data['fecha_quimio'];
                $fecha_fallecio = $data['fecha_fallecio'];
                $Fallecio_causa = $data['Fallecio_causa'];
                $otra_causa = $data['otra_causa'];
                $Radioterapia = $data['Radioterapia'];
                $Tipo_radioterapia = $data['Tipo_radioterapia'];
                $fecha_radioterapia = $data['fecha_radioterapia'];
                $numero_radio = $data['numero_radio'];
                $Defuncion = $data['Defuncion'];
                $fecha_Defuncion = $data['fecha_Defuncion'];
                $causa_defuncion = $data['causa_defuncion'];
                




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