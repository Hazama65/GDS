<?php
include ('php/controllers/consulta.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Consulta</title>
</head>

<body>
    <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(188, 58, 126)">Datos Paciente</th>
                <th scope="col" style="background-color:rgb(188, 58, 126)"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">Nombre</td>
                <td> <?php echo $nombre_px; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CURP</td>
                <td> <?php echo $curp; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Género</td>
                <td> <?php echo $genero; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de Nacimiento</td>
                <td> <?php echo $fecha_nacimiento; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Estado Civil</td>
                <td> <?php echo $Estadocivil; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Raza</td>
                <td> <?php echo $Raza; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Unidad de Referencia</td>
                <td> <?php echo $unidad_referencia; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Signos Vitales</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Presión Sistólica</td>
                <td> <?php echo $Presion_sistolica; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Presión Diastólica</td>
                <td> <?php echo $Presion_Diastolica; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Frecuencia Cardíaca</td>
                <td> <?php echo $FC; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Frecuencia Respiratoria</td>
                <td> <?php echo $fr; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Glucemia Capilar</td>
                <td> <?php echo $Glucemia; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Somatometria</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Peso (kg)</td>
                <td> <?php echo $peso; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Talla (m)</td>
                <td> <?php echo $talla; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Circunferencia Cintura(cm)</td>
                <td> <?php echo $circunferencia; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Antecedentes Patologícos</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Conocida con Gen BRCA 1</td>
                <td> <?php echo $BRCA_1; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Conocida con Gen BRCA 2</td>
                <td> <?php echo $BRCA_2; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Diabetes Mellitus</td>
                <td> <?php echo $diabetes; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Enfermedad Renal Cronica</td>
                <td> <?php echo $renal_cronica; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hipertensión Arterial</td>
                <td> <?php echo $Hipertension; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tabaquismo</td>
                <td> <?php echo $Tabaquismo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cáncer de mama</td>
                <td> <?php echo $Antecedentecancer_mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguna de las Anteriores</td>
                <td> <?php echo $Antecedentes_ninguna; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Antecedentes Heredofamiliares</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Cáncer</td>
                <td> <?php echo $Heredo_Cancer; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cáncer Próstata</td>
                <td> <?php echo $Heredo_CancerProstata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abuelo Materno</td>
                <td> <?php echo $Abuelo_materno_cancer; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abuelo Paterno</td>
                <td> <?php echo $Abuelo_paterno_cancer; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hermano</td>
                <td> <?php echo $Hermano_Prostata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Padre</td>
                <td> <?php echo $Padre_cancer_Prostata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Primo Materno</td>
                <td> <?php echo $Primo_Materno_Prostata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Primo Paterno</td>
                <td> <?php echo $Primo_Paterno_Prostata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tío Materno</td>
                <td> <?php echo $Tio_Materno_Prostata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tío Paterno</td>
                <td> <?php echo $Tio_Paterno_Prostata; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cáncer Ovario</td>
                <td> <?php echo $Heredo_CancerOvario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td> <?php echo $Abuela_MaternaAntecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td> <?php echo $Abuela_PaternaAntecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hermana</td>
                <td> <?php echo $Hermana_Antecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Madre</td>
                <td> <?php echo $Madre_Antecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Prima Materna</td>
                <td> <?php echo $PrimaMaterna_Antecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Prima Paterna</td>
                <td> <?php echo $Prima_paternaAntecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tía Materna</td>
                <td> <?php echo $Tia_MaternaAntecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tía Paterna</td>
                <td> <?php echo $Tia_PaternaAntecedentes_Ovario; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cáncer Mama</td>
                <td> <?php echo $Heredo_CancerMama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td> <?php echo $Abuela_MaternaAntecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td> <?php echo $Abuela_PaternaAntecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hermana</td>
                <td> <?php echo $Hermana_Antecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Madre</td>
                <td> <?php echo $Madre_Antecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Prima Materna</td>
                <td> <?php echo $PrimaMaterna_Antecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Prima Paterna</td>
                <td> <?php echo $Prima_paternaAntecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tía Materna</td>
                <td> <?php echo $Tia_MaternaAntecedentes_Mama; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tía Paterna</td>
                <td> <?php echo $Tia_PaternaAntecedentes_Mama; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Antecedentes Ginecológicos</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Menarca</td>
                <td> <?php echo $Menarca; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Menopausia</td>
                <td> <?php echo $Menopausia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Gestas</td>
                <td> <?php echo $Gestas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Esta Embarazada</td>
                <td> <?php echo $Esta_Embarazada; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Probable Parto</td>
                <td> <?php echo $fecha_probableParto; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapia Reemplazo Hormonal</td>
                <td> <?php echo $Terapia_remplazoHormonal; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lactancia</td>
                <td> <?php echo $Lactancia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tiempo</td>
                <td> <?php echo $Tiempo; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Antecedentes Embarazos</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Gestas</td>
                <td> <?php echo $Gestas_Embarazo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Paras</td>
                <td> <?php echo $Paras; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Abortos</td>
                <td> <?php echo $Abortos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cesáreas</td>
                <td> <?php echo $Cesareas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ectópicos</td>
                <td> <?php echo $Ectopicos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Comentario</td>
                <td> <?php echo $comentarios; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Atención Clínica</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Primera Atención</td>
                <td> <?php echo $Fecha_primeraAtencion; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">BIRADS Referencia</td>
                <td> <?php echo $BIRADS_Referencia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">BIRADS Hospital</td>
                <td> <?php echo $BIRADS_Hospital; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td> <?php echo $Lateralidad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Estado Clínico</td>
                <td> <?php echo $Estado_clinico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Etapa Clínica</td>
                <td> <?php echo $Etapa_Clinica; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Estado Tamaño Tumoral</td>
                <td> <?php echo $Estado_Tamaño; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Metástasis</td>
                <td> <?php echo $Metastasis; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Calidad Vida ECOG</td>
                <td> <?php echo $Calidad_ECOG; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Compromiso Linfático Nodal</td>
                <td> <?php echo $Compromiso_linfatico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Mastectomía Extrainstitucional</td>
                <td> <?php echo $Mastectomia_extrain; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lateralidad Mastectomía Extrainstitucional</td>
                <td> <?php echo $Lateralidad_mastectomia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha</td>
                <td> <?php echo $fecha_ATC; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Histopatología</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Histopatología</td>
                <td> <?php echo $Histopatologia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Área</td>
                <td> <?php echo $Histopatologia_area; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dx Histopatológico</td>
                <td> <?php echo $Dx_Histopatologia_area; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Dx Histopatológico</td>
                <td> <?php echo $fecha_dxHistopatologico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Nottinghan</td>
                <td> <?php echo $Histopatologia_Nottinghan; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Escala SBR</td>
                <td> <?php echo $Histopatologia_Escala_SBR; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Escala MID</td>
                <td> <?php echo $Histopatologia_Escala_MID; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Inmunohistoquimica</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Inmunohistoquimica</td>
                <td> <?php echo $Inmunohistoquimica; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Área</td>
                <td> <?php echo $Inmunohistoquimica_area; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Receptores Estrógenos (RE)</td>
                <td> <?php echo $Receptores_RE; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Receptores Progesterona (RP)</td>
                <td> <?php echo $Receptores_RP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">KI-67</td>
                <td> <?php echo $KI_67; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">P 53</td>
                <td> <?php echo $P_53; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Triple Negativo</td>
                <td> <?php echo $Triple_Negativo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Se realizó PDL</td>
                <td> <?php echo $PDL; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Oncogén HER2</td>
                <td> <?php echo $Oncogen_her2; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FISH</td>
                <td> <?php echo $FISH; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Molecular</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Molecular</td>
                <td> <?php echo $Molecular; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Área</td>
                <td> <?php echo $Molecular_area; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Luminal A</td>
                <td> <?php echo $Luminal_A; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Luminal B</td>
                <td> <?php echo $Luminal_B; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Enriquecido en HER 2+</td>
                <td> <?php echo $Enriquecido_HER; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Basal</td>
                <td> <?php echo $Basal; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Tratamiento</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Quirurgicos</td>
                <td> <?php echo $Quirurgicos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lateralidad QX</td>
                <td> <?php echo $Lateralidad_QX; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td> <?php echo $Tipo_qx; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo Ganglionar</td>
                <td> <?php echo $tipo_ganglionar; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Ganglionar</td>
                <td> <?php echo $fecha_ganglionar; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Mastectomia</td>
                <td> <?php echo $fecha_Mastectomia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo Mastectomia</td>
                <td> <?php echo $tipo_Mastectomia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Reconstrucción</td>
                <td> <?php echo $tipo_MastReconstruccion_Mastectomia; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Quimioterapia</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Quimioterapia</td>
                <td> <?php echo $Quimioterapia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Antraciclinas</td>
                <td> <?php echo $Antraciclinas; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Momento QT</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo</td>
                <td> <?php echo $Tipo_QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Inicio</td>
                <td> <?php echo $FechaInicio_QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Ternmino</td>
                <td> <?php echo $FechaTernmino_QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">5FU</td>
                <td> <?php echo $_5fu_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC</td>
                <td> <?php echo $AC_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC/T</td>
                <td> <?php echo $Esquema_AC_T; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC/TH</td>
                <td> <?php echo $AC_TH_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AT</td>
                <td> <?php echo $AT_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Atezolizumab</td>
                <td> <?php echo $Atezolizumab_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Bevacizumab</td>
                <td> <?php echo $Bevacizumab_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Capecitabina</td>
                <td> <?php echo $Capecitabina_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CBP</td>
                <td> <?php echo $CBP_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ciclofosfamida</td>
                <td> <?php echo $Ciclofosfamida_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cisplatino</td>
                <td> <?php echo $Cisplatino_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CMF</td>
                <td> <?php echo $CMF_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ctuximab</td>
                <td> <?php echo $Ctuximab_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Docetaxel</td>
                <td> <?php echo $Docetaxel_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">EC</td>
                <td> <?php echo $EC_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Etopósido</td>
                <td> <?php echo $Etopósido_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FAC</td>
                <td> <?php echo $FAC_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FEC</td>
                <td> <?php echo $FEC_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Herceptin</td>
                <td> <?php echo $Herceptin_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lapatinib</td>
                <td> <?php echo $Lapatinib_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Paclitaxel</td>
                <td> <?php echo $Paclitaxel_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pembrolixumab</td>
                <td> <?php echo $Pembrolixumab_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pertuzumab</td>
                <td> <?php echo $Pertuzumab_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TAC</td>
                <td> <?php echo $TAC_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TC</td>
                <td> <?php echo $TC_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TCH</td>
                <td> <?php echo $TCH_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TCHP</td>
                <td> <?php echo $TCHP_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TH</td>
                <td> <?php echo $TH_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">THP</td>
                <td> <?php echo $THP_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Trastuzumab</td>
                <td> <?php echo $Trastuzumab_Esquema; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sin Registro</td>
                <td> <?php echo $Trastuzumab_SinRegistro; ?> </td>
            </tr>


            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">1er Línea QT</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">5FU</td>
                <td> <?php echo $_5fu; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC</td>
                <td> <?php echo $AC; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC/T</td>
                <td> <?php echo $AC_T_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC/TH</td>
                <td> <?php echo $AC_TH1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AT</td>
                <td> <?php echo $AT_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Atezolizumab</td>
                <td> <?php echo $Atezolizumab_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Bevacizumab</td>
                <td> <?php echo $Bevacizumab_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Capecitabina</td>
                <td> <?php echo $Capecitabina_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CBP</td>
                <td> <?php echo $CBP_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ciclofosfamida</td>
                <td> <?php echo $Ciclofosfamida_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cisplatino</td>
                <td> <?php echo $Cisplatino_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CMF</td>
                <td> <?php echo $CMF_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ctuximab</td>
                <td> <?php echo $Ctuximab_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Docetaxel</td>
                <td> <?php echo $Docetaxel_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">EC</td>
                <td> <?php echo $EC_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Etopósido</td>
                <td> <?php echo $Etopósido_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FAC</td>
                <td> <?php echo $FAC_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FEC</td>
                <td> <?php echo $FEC_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Herceptin</td>
                <td> <?php echo $Herceptin_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lapatinib</td>
                <td> <?php echo $Lapatinib_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Paclitaxel</td>
                <td> <?php echo $Paclitaxel_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pembrolixumab</td>
                <td> <?php echo $Pembrolixumab_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pertuzumab</td>
                <td> <?php echo $Pertuzumab_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TAC</td>
                <td> <?php echo $TAC_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TC</td>
                <td> <?php echo $TC_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TCH</td>
                <td> <?php echo $TCH_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TCHP</td>
                <td> <?php echo $TCHP_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TH</td>
                <td> <?php echo $TH_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">THP</td>
                <td> <?php echo $THP_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Trastuzumab</td>
                <td> <?php echo $Trastuzumab_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sin Registro</td>
                <td> <?php echo $SinRegistro_1QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Inicio QT</td>
                <td> <?php echo $FechaInicio_QTPaliativoz; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Término QT</td>
                <td> <?php echo $FechaTermino_QTPaliativo; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">2da Línea QT</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">5FU</td>
                <td> <?php echo $_5fu_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC</td>
                <td> <?php echo $AC_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC/T</td>
                <td> <?php echo $AC_T_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC/TH</td>
                <td> <?php echo $AC_T_2doQTPV; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">AT</td>
                <td> <?php echo $AT_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Atezolizumab</td>
                <td> <?php echo $Atezolizumab_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Bevacizumab</td>
                <td> <?php echo $Bevacizumab_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Capecitabina</td>
                <td> <?php echo $Capecitabina_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CBP</td>
                <td> <?php echo $CBP_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ciclofosfamida</td>
                <td> <?php echo $Ciclofosfamida_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cisplatino</td>
                <td> <?php echo $Cisplatino_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">CMF</td>
                <td> <?php echo $CMF_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ctuximab</td>
                <td> <?php echo $Ctuximab_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Docetaxel</td>
                <td> <?php echo $Docetaxel_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">EC</td>
                <td> <?php echo $EC_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Etopósido</td>
                <td> <?php echo $Etopósido_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FAC</td>
                <td> <?php echo $FAC_2doQT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">FEC</td>
                <td> <?php echo $FEC_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Herceptin</td>
                <td> <?php echo $Herceptin_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lapatinib</td>
                <td> <?php echo $Lapatinib_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Paclitaxel</td>
                <td> <?php echo $Paclitaxel_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pembrolixumab</td>
                <td> <?php echo $Pembrolixumab_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pertuzumab</td>
                <td> <?php echo $Pertuzumab_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TAC</td>
                <td> <?php echo $TAC_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TC</td>
                <td> <?php echo $TC_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TCH</td>
                <td> <?php echo $TCH_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TCHP</td>
                <td> <?php echo $TCHP_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">TH</td>
                <td> <?php echo $TH_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">THP</td>
                <td> <?php echo $THP_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Trastuzumab</td>
                <td> <?php echo $Trastuzumab_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sin Registro</td>
                <td> <?php echo $SinRegistro_2doQTP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Inicio QT</td>
                <td> <?php echo $FechaInicio_QT2Paliativo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Término QT</td>
                <td> <?php echo $FechaTermino_QTP2aliativo; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Hormoterapia</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Hormoterapia</td>
                <td> <?php echo $Hormoterapia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo Hormonoterapia</td>
                <td> <?php echo $Hormonoterapia_QT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Momento Hormonoterapia</td>
                <td> <?php echo $Momento_Hormonoterapia; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">HER2 +++</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">HER2 +++</td>
                <td> <?php echo $HER_2; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Esquema HER2 +++</td>
                <td> <?php echo $Esquema_HER; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Triple Negativo</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Triple Negativo</td>
                <td> <?php echo $triple_negativo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Esquema Triple Negativo</td>
                <td> <?php echo $EsquemaTriple_negativo; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Hormonosensible</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Hormonosensible</td>
                <td> <?php echo $Hormosensible; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Inhibidores Ciclinas</td>
                <td> <?php echo $Inhibidores_Ciclinas; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Tipo Tratamiento</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo Tratamiento</td>
                <td> <?php echo $Tipo_Tratamiento; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Completo Quimio</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Completo Quimio</td>
                <td> <?php echo $Completo_Quimio; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Causa QT Incompleta</td>
                <td> <?php echo $CausaQT_Incompleta; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha</td>
                <td> <?php echo $fecha_quimio; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Falleció QT</td>
                <td> <?php echo $fecha_fallecio; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Causa Falleció QT</td>
                <td> <?php echo $Fallecio_causa; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Especifique Otra</td>
                <td> <?php echo $otra_causa; ?> </td>
            </tr>

            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Radioterapia</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Radioterapia</td>
                <td> <?php echo $Radioterapia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo Radioterapia</td>
                <td> <?php echo $Tipo_radioterapia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Inicio</td>
                <td> <?php echo $fecha_radioterapia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Número Sesiones</td>
                <td> <?php echo $numero_radio; ?> </td>
            </tr>
            
            <tr>
                <th scope="col"style="background-color:rgb(188, 58, 126)">Defunción</th>
                <th scope="col"style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Defunción</td>
                <td> <?php echo $Defuncion; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Defunción</td>
                <td> <?php echo $fecha_Defuncion; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Causa</td>
                <td> <?php echo $causa_defuncion; ?> </td>
            </tr>
            










        </tbody>
    </table>

</body>

</html>