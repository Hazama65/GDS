<?php
include ('php/controllers/consulta.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(231, 52, 78);"> DATOS GENERALES </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Nacimiento</td>
                <td><?php echo $fecha; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Estado Civil</td>
                <td><?php echo $Estadocivil; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Población Indígena</td>
                <td><?php echo $Poblacion_indigena; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Raza</td>
                <td><?php echo $Raza; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Escolaridad</td>
                <td><?php echo $Escolaridad; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Unidad de Referencia</td>
                <td><?php echo $unidad_referencia; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Estado</td>
                <td><?php echo $estado; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Alcaldía o Municipio</td>
                <td><?php echo $Alcaldia_municipio; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Presión Arterial</td>
                <td><?php echo $Presion_Arterial; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Frecuencia Cardíaca</td>
                <td><?php echo $FC; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Frecuencia Respiratoria</td>
                <td><?php echo $fr; ?> </td>
            </tr>


            <tr>
                <td class="estilo-celda">Peso (kg)</td>
                <td><?php echo $peso; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Talla (m)</td>
                <td><?php echo $talla; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Circunferencia Cintura(cm)</td>
                <td><?php echo $circunferencia; ?> </td>
            </tr>


            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">FACTORES DE RIESGO </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $Ninguno_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Hiperlipidemia</td>
                <td><?php echo $Hiperlipidemia_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Diabetes</td>
                <td><?php echo $Diabetes_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertensión</td>
                <td><?php echo $Hipertensión_facator; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Alcoholismo</td>
                <td><?php echo $Alcoholismo_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Prima Paterna</td>
                <td><?php echo $Tabaquismo_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Enfermedad renal cronica</td>
                <td><?php echo $Enfermedad_renal; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Hiperuricemia</td>
                <td><?php echo $Hiperuricemia_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Obesidad</td>
                <td><?php echo $Obesidad_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">IAM previo</td>
                <td><?php echo $Previo_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ectasia coronaria</td>
                <td><?php echo $ectasia_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Cardiomiopatia de takotsubo</td>
                <td><?php echo $Cardiomio; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Enfermedad multivaso</td>
                <td><?php echo $multivaso_factor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Revascularización cardiaca previa</td>
                <td><?php echo $Resvascularizacion_factor; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">ANTECEDENTES HEREDO FAMILIARES </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Padre</td>
                <td><?php echo $Padre_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Madre</td>
                <td><?php echo $Madre_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Materno</td>
                <td><?php echo $Abuelo_Materno_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Paterno</td>
                <td><?php echo $Abuelo_Paterno_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td><?php echo $Abuela_Materna_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td><?php echo $Abuela_Paterna_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Hermano</td>
                <td><?php echo $Hermano_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Hermana</td>
                <td><?php echo $Hermana_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Prima Materna</td>
                <td><?php echo $Prima_Materna_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Prima Paterna</td>
                <td><?php echo $Prima_Paterna_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Primo Paterno</td>
                <td><?php echo $Primo_Paterno_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Primo Materno</td>
                <td><?php echo $Primo_Materno_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tía Materna</td>
                <td><?php echo $Tia_Materna_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tía Paterna</td>
                <td><?php echo $Tia_Paterna_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tío Materno</td>
                <td><?php echo $Tia_Materno_antecedente; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tío Paterno</td>
                <td><?php echo $Tia_Paterno_antecedente; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">ATENCIÓN CLINICA</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Inicio Sintomas</td>
                <td><?php echo $Inicio_sintomas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Características Dolor</td>
                <td><?php echo $Caracteristica_dolor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Inicio de triage</td>
                <td><?php echo $Inicio_triage; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Termino de triage</td>
                <td><?php echo $Termino_triage; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Características Típicas</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Dolor Retroesternal</td>
                <td><?php echo $Dolor_Retroesternal; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Opresivo</td>
                <td><?php echo $Opresivo; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Irradiación brazo izquierdo</td>
                <td><?php echo $Irradiación_brazo_izquierdo; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Más de 10 minutos</td>
                <td><?php echo $Más_de_10_minutos; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Náuseas</td>
                <td><?php echo $Náuseas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Diaforesis</td>
                <td><?php echo $Diaforesis_1; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Síncope</td>
                <td><?php echo $Síncope_1; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Características Atípicas</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Dolor Epigastrio</td>
                <td><?php echo $Dolor_Epigastrio; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Punzante</td>
                <td><?php echo $Punzante; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Pleurítico</td>
                <td><?php echo $Pleurítico; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Disnea</td>
                <td><?php echo $Disnea; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Palpitación</td>
                <td><?php echo $Palpitación; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Diaforesis</td>
                <td><?php echo $Diaforesis_2; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Síncope</td>
                <td><?php echo $Síncope_2; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Intensidad Dolor</td>
                <td><?php echo $int_dolor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Electrocardiograma</td>
                <td><?php echo $Electrocardiograma; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Localización Electrocardiograma</td>
                <td><?php echo $local_electro; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Con o Sin Elevación</td>
                <td><?php echo $ConSin_elevancion; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">MACE Hospitalario</td>
                <td><?php echo $mace; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Killip Kimball</td>
                <td><?php echo $Kill_kimbal; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">PARACLINICOS</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">CK</td>
                <td><?php echo $ck; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">CK-MB</td>
                <td><?php echo $ck_mb; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Troponinas</td>
                <td><?php echo $Troponinas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Glucosa</td>
                <td><?php echo $Glucosa; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Urea</td>
                <td><?php echo $Urea; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Creatinina</td>
                <td><?php echo $Creatinina; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Colesterol</td>
                <td><?php echo $Colesterol; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Trigliceridos</td>
                <td><?php echo $Trigliceridos; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ácido Úrico</td>
                <td><?php echo $Acido_Urico; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">HB Glucosilada</td>
                <td><?php echo $hb_glucosilada; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Proteínas</td>
                <td><?php echo $Proteinas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">LDL</td>
                <td><?php echo $LDL; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">HDL</td>
                <td><?php echo $HDL; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">TRATAMIENTO TROMBÓLISIS</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fibrinólisis</td>
                <td><?php echo $Fibrinolisis; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha/hora de inicio</td>
                <td><?php echo $Inicio_txfibronilis; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha/hora de finaliza</td>
                <td><?php echo $finaliza_txfibronilis; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo Fibrinólisis</td>
                <td><?php echo $Tipo_Fibrinolisis; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Procedimiento Exitoso</td>
                <td><?php echo $procedimiento_exitoso_1; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">ANGIOPLASTIA CORONARIA TRANSLUMINAL PERCUTANEA</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha/Hora</td>
                <td><?php echo $Inicio_Angio; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo de Procedimiento</td>
                <td><?php echo $Tipo_Procedimiento; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Sitio Punción</td>
                <td><?php echo $sitio_puncion; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Lesiones Coronarias</td>
                <td><?php echo $Lesiones_coronarias; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Coronaria Derecha</td>
                <td><?php echo $Coronaria_Derecha; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Coronaria Izquierda</td>
                <td><?php echo $Coronaria_Izquierda; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Descendente Anterior</td>
                <td><?php echo $Descendente_Anterior; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Descendente Posterior</td>
                <td><?php echo $Descendente_Posterior; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tronco Coronario Izquierdo</td>
                <td><?php echo $Tronco_Coronario_Izquierdo; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Bifurcación</td>
                <td><?php echo $Bifurcacion; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Circunfleja</td>
                <td><?php echo $Circunfleja; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Dominancia Derecha</td>
                <td><?php echo $Dominancia_Derecha; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Codominancia</td>
                <td><?php echo $Codominancia; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Dominancia Izquierda</td>
                <td><?php echo $Dominancia_Izquierda; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ramo Posterolateral</td>
                <td><?php echo $Ramo_Posterolateral; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ramo Septales</td>
                <td><?php echo $Ramo_Septales; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ramo Marginales</td>
                <td><?php echo $Ramo_Marginales; ?> </td>
            </tr>


            <tr>
                <td class="estilo-celda">Clasificación DUQUE</td>
                <td><?php echo $duque; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Clasificación Medina</td>
                <td><?php echo $Medina; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Clasificación ACC/AHA</td>
                <td><?php echo $clasificacion_acc; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">TIMI</td>
                <td><?php echo $TIMI; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Procedimiento TIMI</td>
                <td><?php echo $Procedimiento_TIMI; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Clasificación TIMI</td>
                <td><?php echo $Calificacion_TIMI; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tomografía Coherencia Óptica</td>
                <td><?php echo $Tomografia_coherencia; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Trombosis Intracoronaria</td>
                <td><?php echo $Trombosis_intra; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Aspiración Trombo</td>
                <td><?php echo $Aspiracion_trombo; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Prótesis Metálico</td>
                <td><?php echo $Protesis_metalico; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Prótesis</td>
                <td><?php echo $protesis_num; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Revascularización</td>
                <td><?php echo $revascularizacion; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Procedimiento Exitoso</td>
                <td><?php echo $Procedimiento_exitoso_2; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">AIRBUS</td>
                <td><?php echo $AIRBUS; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado AIRBUS</td>
                <td><?php echo $Resu_AIRBUS; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Prótesis Endovascular</td>
                <td><?php echo $Prote_Endovascular; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">1er Generación</td>
                <td><?php echo $_1_generacion; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">2da Generación</td>
                <td><?php echo $_2da_generacion; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">TRATAMIENTO ESPECIAL</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
                
            </tr>

            <tr>
                <td class="estilo-celda">Litotricia Intracoronaria</td>
                <td><?php echo $Litotricia; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Schockwave C2</td>
                <td><?php echo $Schockwave; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones Schockwave C2</td>
                <td><?php echo $Schockwave_compli; ?> </td>
            </tr>
            
            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78,0.5);">Marcapasos Temporal</th>
                <th scope="col" style="background-color: rgb(231, 52, 78,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Marcapasos</td>
                <td><?php echo $Marcapasos; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Soporte Ventricular</td>
                <td><?php echo $Soporte_ventricular; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78,0.5);">Complicaciones </th>
                <th scope="col" style="background-color: rgb(231, 52, 78,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $Complicaciones; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo Disfunción Ventricular</td>
                <td><?php echo $disfu_ventri; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo Complicaciones Mecánicas</td>
                <td><?php echo $compli_mecanicas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Pericárdicas</td>
                <td><?php echo $compli_Pericarditis; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Eléctricas</td>
                <td><?php echo $compli_Electricas; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Viabilidad y Perfusión Miocardia</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Gammagrama Cardiaco Inicial</td>
                <td><?php echo $Gamma; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado Gammagrama Cardiaco</td>
                <td><?php echo $gamma_cardi; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Localización Gammagrama</td>
                <td><?php echo $Localizacion_gamma; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Segmento</td>
                <td><?php echo $Segmento_gamma; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Resonancia Magnetica Inicial</td>
                <td><?php echo $Resonancia_inicial; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado Resonancia Magnetica</td>
                <td><?php echo $resultado_resonancia; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ergometría Inicial</td>
                <td><?php echo $ergometria; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 1</td>
                <td><?php echo $Etapa_1; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 2</td>
                <td><?php echo $Etapa_2; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 3</td>
                <td><?php echo $Etapa_3; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 4</td>
                <td><?php echo $Etapa_4; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 5</td>
                <td><?php echo $Etapa_5; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 6</td>
                <td><?php echo $Etapa_6; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 7</td>
                <td><?php echo $Etapa_7; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Suspensión de Estudio</td>
                <td><?php echo $Suspension_estudio; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Ecocardiograma</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Distolico Inicial</td>
                <td><?php echo $Distolico_inicial; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Sistolico Inicial</td>
                <td><?php echo $Sistolico_inicial; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Frac. Eyección Ventrículo Izq Inicial</td>
                <td><?php echo $eyeccion_ventriizqui; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Movilidad Inicial</td>
                <td><?php echo $movilidad_inicial; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Segmento</td>
                <td><?php echo $Segmento; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">PARACLINICOS</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Causa de Defunción</td>
                <td><?php echo $Causa_defun; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Defunción</td>
                <td><?php echo $Defuncion_fecha; ?> </td>
            </tr>



        </tbody>
    </table>





</body>

</html>