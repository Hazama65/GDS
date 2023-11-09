<?php
    include('php/controllers/consulta.controller.php');
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
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> Datos Generales</th>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre_paciente ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Nacimiento</td>
                <td><?php echo $fecha_nacimiento ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Escolaridad</td>
                <td><?php echo $escolaridad ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estado Civil</td>
                <td><?php echo $estado_civil ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estado</td>
                <td><?php echo $estado ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Municipio</td>
                <td><?php echo $municipio ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Referencia</td>
                <td><?php echo $referencia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Num. Telefonico</td>
                <td><?php echo $num_telefonico ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Talla</td>
                <td><?php echo $talla ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Peso</td>
                <td><?php echo $peso ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">IMC</td>
                <td><?php echo $imc ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado IMC</td>
                <td><?php echo $resultado_imc ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Circunferencia Abdominal</td>
                <td><?php echo $circunferencia_abdominal ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Derechohabiencia</td>
                <td><?php echo $derecho_habiencia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estudio Socioeconómico</td>
                <td><?php echo $socioeconomico ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nivel</td>
                <td><?php echo $nivel_economico ; ?></td>
            </tr>

          <!--Antecedentes Heredofamiliar-->
            <tr>
                <th scope="col"  style="background-color:rgb(3, 187, 133, 0.7);"> Antecedentes Heredofamiliar</th>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Fisura Labiopalatina</td>
                <td><?php echo $fisura ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Padre</td>
                <td><?php echo $padre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Madre</td>
                <td><?php echo $madre ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Abuelo Materno</td>
                <td><?php echo $abuelo_materno ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td><?php echo $abuela_materna ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Paterno</td>
                <td><?php echo $abuelo_paterno ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td><?php echo $abuela_paterna ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Hermanas</td>
                <td><?php echo $no_hermanas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Hermanos</td>
                <td><?php echo $no_hermanos ; ?></td>
            </tr>


            <!--====================================Atención médica============================-->
            
            <tr>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> Antecedentes Perinatales</th>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Semanas Gestación</td>
                <td><?php echo $sem_gestacion  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones en Embarazo</td>
                <td><?php echo $comp_embarazo  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones en Parto</td>
                <td><?php echo $comp_parto  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tabaquismo Durante Embarazo</td>
                <td><?php echo $tabaquismo  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alcoholismo Durante Embarazo</td>
                <td><?php echo $alcoholismo  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Malformaciones Congénitas</td>
                <td><?php echo $malformaciones  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Dx de Fisura Durante Embarazo</td>
                <td><?php echo $fisura_embarazo  ; ?></td>
            </tr>


            <!--===================================Antecedentes Personales Patológicos====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);">Antecedentes Personales Patológicos</th>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Alergicos</td>
                <td><?php echo $alergias  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Analgesicos</td>
                <td><?php echo $analgesicos  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Anestesicos</td>
                <td><?php echo $anastesicos  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Antibioticos</td>
                <td><?php echo $antibioticos  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Antiinflamatorios</td>
                <td><?php echo $antiinflamatorios  ; ?></td>
            </tr>

            <!--===================================ATENCIÓN CLÍNICA====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);">ATENCIÓN CLÍNICA</th>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> </th>
            </tr>

            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);">Etapa de Atención Clínica</th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Ingreso Clínica</td>
                <td><?php echo $fecha_ingreso  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa de Atención</td>
                <td><?php echo $etapa_atencion  ; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);">Etapa A: Valoraciones Médicas</th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Audiologia</td>
                <td><?php echo $a_audiologia ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cirugía Maxilofacial</td>
                <td><?php echo $a_maxilofacial ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cirugía Reconstructiva</td>
                <td><?php echo $a_reconstructiva ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neonatología</td>
                <td><?php echo $a_neonatologia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortodoncia</td>
                <td><?php echo $a_ortodoncia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otorrinolaringologia</td>
                <td><?php echo $a_otorrino ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Protesis Maxilofacial</td>
                <td><?php echo $a_protesis_maxilo  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Psicologia</td>
                <td><?php echo $a_psicologia  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Rehabilitación</td>
                <td><?php echo $a_rehabilitacion  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia De Lenguaje</td>
                <td><?php echo $a_terapia_lenguaje  ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Terapia Fisica</td>
                <td><?php echo $a_terapia_fisica  ; ?></td>
            </tr>
            
            
            <tr>
                <td class="estilo-celda">Terapia Ocupacional</td>
                <td><?php echo $a_terapia_ocupacional  ; ?></td>
            </tr>

            <!--===================================Etapa A: Tipo Tratamiento Médico====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);">Etapa A: Tipo Tratamiento Médico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Atención Psicomotriz</td>
                <td><?php echo $a_psicomotriz ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Curso De Inducción</td>
                <td><?php echo $a_curso_induccion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Curso Lactancia Materna</td>
                <td><?php echo $a_lactancia_materna ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estudios Audiológicos</td>
                <td><?php echo $a_estudios_audio ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Para Padres</td>
                <td><?php echo $a_terapia_padres ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Valoración Inicial De Lenguaje</td>
                <td><?php echo $a_valoracion_lenguaje ; ?></td>
            </tr>


            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);">Etapa A: Tipo Tratamiento Quirúrgico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Ortopedia Pre-quirúrgica</td>
                <td><?php echo  $a_ortopedia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Palatoplastia</td>
                <td><?php echo  $a_palatoplastia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Queiloplastias</td>
                <td><?php echo  $a_queiloplastia ; ?></td>
            </tr>

            <!--===================================Etapa A: ESTATUS ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);">Etapa A: Estatus</th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.6);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Estatus</td>
                <td><?php echo  $a_estapa_estatus ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa A: Fecha de Cirugia</td>
                <td><?php echo  $a_fecha_cirugia ; ?></td>
            </tr>

        <!--===================================ETAPA B ====================================-->


            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.5);">Etapa B: Valoraciones Médicas</th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.5);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Audiologia</td>
                <td><?php echo  $b_audiologia ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cirugía Maxilofacial</td>
                <td><?php echo  $b_maxilofacial ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cirugía Reconstructiva</td>
                <td><?php echo  $b_reconstructiva ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nutrición</td>
                <td><?php echo  $b_nutricion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortodoncia</td>
                <td><?php echo  $b_ortodoncia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otorrinolaringologia</td>
                <td><?php echo  $b_otorrino ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Pediatría</td>
                <td><?php echo $b_pediatria ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Psicologia</td>
                <td><?php echo $b_psicologia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Protesis Maxilofacial</td>
                <td><?php echo $b_protesis_maxilo ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Rehabilitación</td>
                <td><?php echo $b_rehabilitacion ; ?></td>
            </tr>
            
            
            <tr>
                <td class="estilo-celda">Terapia De Lenguaje</td>
                <td><?php echo $b_terapia_lenguaje ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Fisica</td>
                <td><?php echo $b_terapia_fisica ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Ocupacional</td>
                <td><?php echo $b_terapia_ocupacional ; ?></td>
            </tr>


            <!--===================================Etapa B: Tipo Tratamiento Médico====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.5);">Etapa B: Tipo Tratamiento Médico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Atención Psicologica</td>
                <td><?php echo $b_atencion_psicologia  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Curso De Inducción</td>
                <td><?php echo $b_curso_induccion  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estudios Audiológicos</td>
                <td><?php echo $b_estudios_audiologicos  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Valoración Patrón De Cierre Velar</td>
                <td><?php echo $b_cierre_velar  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Valoración Del Lenguaje</td>
                <td><?php echo $b_valoracion_lenguaje  ; ?></td>
            </tr>

<!--===================================Etapa B: Tipo Tratamiento Quirúrgico ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.5);">Etapa B: Tipo Tratamiento Quirúrgico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Injerto Óseo</td>
                <td><?php echo $b_inserto_oseo  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortopedia Maxilar</td>
                <td><?php echo $b_ortopedia_maxilar  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Palatoplastia</td>
                <td><?php echo $b_palatoplastia  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Queiloplastia</td>
                <td><?php echo $b_queiloplastia  ; ?></td>
            </tr>


            <!--===================================Etapa B: ESTATUS ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(4, 172, 182, 0.5);">Etapa B: Estatus</th>
                <th scope="col" style="background-color:rgb(4, 172, 182, 0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Estatus</td>
                <td><?php echo $b_etapa_estatus  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Fecha de Cirugia</td>
                <td><?php echo $b_fecha_cirugia  ; ?></td>
            </tr>


 <!--===================================Etapa C: INICIA  ====================================-->

            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);">Etapa C: Valoraciones Médicas</th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Audiologia</td>
                <td><?php echo $c_audiologia  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cirugía Maxilofacial</td>
                <td><?php echo $c_maxilofacial  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cirugía Reconstructiva</td>
                <td><?php echo $c_cirugia_recontructiva  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nutricion</td>
                <td><?php echo $c_nutricion  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortodoncia</td>
                <td><?php echo $c_ortodoncia  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otorrinolaringologia</td>
                <td><?php echo $c_otorrino  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Pediatría</td>
                <td><?php echo $c_pediatria  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Psicologia</td>
                <td><?php echo $c_psicologia  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Protesis Maxilofacial</td>
                <td><?php echo $c_protesis_maxilo  ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Rehabilitación</td>
                <td><?php echo $c_rehabilitacion  ; ?></td>
            </tr>
            
            
            <tr>
                <td class="estilo-celda">Terapia De Lenguaje</td>
                <td><?php echo $c_terapia_leguaje  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Fisica</td>
                <td><?php echo $c_terapia_fisica  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Ocupacional</td>
                <td><?php echo $c_terapia_ocupacional  ; ?></td>
            </tr>


            <!--===================================Etapa C: Tipo Tratamiento Médico====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);">Etapa C: Tipo Tratamiento Médico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Atención Psicologica</td>
                <td><?php echo $c_atencion_psicologica  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Curso De Inducción</td>
                <td><?php echo $c_curso_induccion  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estudios Audiológicos</td>
                <td><?php echo $c_estudio_audiologicos  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Valoración Patrón De Cierre Velar</td>
                <td><?php echo $c_cierre_veral  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Valoración Del Lenguaje</td>
                <td><?php echo $c_valoracion_lenguaje  ; ?></td>
            </tr>

<!--===================================Etapa C: Tipo Tratamiento Quirúrgico ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);">Etapa C: Tipo Tratamiento Quirúrgico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Injerto Óseo</td>
                <td><?php echo $c_inserto_oseo  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortodoncia</td>
                <td><?php echo $c_ortodoncia_tratamiento  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortopedia Maxilar</td>
                <td><?php echo $c_ortopedia_maxilar  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otras Plastias</td>
                <td><?php echo $c_otras_plastias  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Palatoplastia</td>
                <td><?php echo $c_palatoplastia  ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Queiloplastia</td>
                <td><?php echo $c_queiloplastia  ; ?></td>
            </tr>


            <!--===================================Etapa C: ESTATUS ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(4, 172, 182, 0.7);">Etapa C: Estatus</th>
                <th scope="col" style="background-color:rgb(4, 172, 182, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Estatus</td>
                <td><?php echo $c_etapa_estatus  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Fecha de Cirugia</td>
                <td><?php echo $c_fecha_cirugia  ; ?></td>
            </tr>

<!--===================================Etapa D: INICIA ====================================-->
<tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.4);">Etapa D: Valoraciones Médicas</th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.4);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Audiologia</td>
                <td><?php echo $d_audiologia ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cirugía Maxilofacial</td>
                <td><?php echo $d_maxilofacial ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cirugía Reconstructiva</td>
                <td><?php echo $d_cirugia_recontructiva ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nutricion</td>
                <td><?php echo $d_nutricion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortodoncia</td>
                <td><?php echo $d_ortodoncia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otorrinolaringologia</td>
                <td><?php echo $d_otorrino ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Pediatría</td>
                <td><?php echo $d_pediatria ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Psicologia</td>
                <td><?php echo $d_psicologia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Protesis Maxilofacial</td>
                <td><?php echo $d_protesis_maxilo ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Rehabilitación</td>
                <td><?php echo $d_rehabilitacion ; ?></td>
            </tr>
            
            
            <tr>
                <td class="estilo-celda">Terapia De Lenguaje</td>
                <td><?php echo $d_terapia_lenguaje ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Fisica</td>
                <td><?php echo $d_terapia_fisica ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Ocupacional</td>
                <td><?php echo $d_terapia_ocupacional ; ?></td>
            </tr>


            <!--===================================Etapa D: Tipo Tratamiento Médico====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);">Etapa D: Tipo Tratamiento Médico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Atención Psicologica</td>
                <td><?php echo  $d_atencion_psicologica ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Curso De Inducción</td>
                <td><?php echo  $d_curso_induccion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estudios Audiológicos</td>
                <td><?php echo  $d_estudios_audiologicos ; ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">Valoración Del Lenguaje</td>
                <td><?php echo  $d_valoracion_lenguaje ; ?></td>
            </tr>

<!--===================================Etapa D: Tipo Tratamiento Quirúrgico ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);">Etapa D: Tipo Tratamiento Quirúrgico </th>
                <th scope="col" style="background-color:rgb(3, 172, 182, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Cirugía  Ortognatica/Distracción Ósea</td>
                <td><?php echo  $d_ortagnatica ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Injerto Óseo</td>
                <td><?php echo  $d_inserto_oseo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortodoncia</td>
                <td><?php echo  $d_ortodoncia_tratamiento ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ortopedia Maxilar</td>
                <td><?php echo $d_ortopedia_maxilar ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otras Plastias</td>
                <td><?php echo $d_otras_plastias ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Palatoplastia</td>
                <td><?php echo $d_palatoplastias ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Queiloplastia</td>
                <td><?php echo $d_queiloplastia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rinoplastia</td>
                <td><?php echo $d_rinoplastia ; ?></td>
            </tr>

            <!--===================================Etapa D: ESTATUS ====================================-->
            <tr>
                <th scope="col" style="background-color:rgb(4, 172, 182, 0.7);">Etapa D: Estatus</th>
                <th scope="col" style="background-color:rgb(4, 172, 182, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Estatus</td>
                <td><?php echo $d_etapa_estatus  ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> Fecha de Cirugia</td>
                <td><?php echo $d_etapa_fecha  ; ?></td>
            </tr>
            
             <!--===================================FISURA ====================================-->
             <tr>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);">FISURAS</th>
                <th scope="col" style="background-color:rgb(3, 187, 133, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fisura</td>
                <td><?php echo $fisura_or ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Labio Derecho</td>
                <td><?php echo $labio_dcho ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Labio Izquierdo</td>
                <td><?php echo $labio_izdo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alveolo Derecho</td>
                <td><?php echo $alveolo_dcho ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alveolo Izquierdo</td>
                <td><?php echo $alveolo_izdo ; ?></td>
            </tr>
    
            <tr>
                <td class="estilo-celda">Paladar Duro</td>
                <td><?php echo $paladar_duro ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Velo De Paladar</td>
                <td><?php echo $velo_paladar ; ?></td>
            </tr>


        </tbody>
    </table>





</body>
</html>
       