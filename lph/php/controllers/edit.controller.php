<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_lph.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];


        $query= "SELECT *
        FROM datos_paciente
        JOIN antecedentes_familiares ON datos_paciente.id_paciente = antecedentes_familiares.id_paciente
        JOIN antecedentes_natales ON datos_paciente.id_paciente = antecedentes_natales.id_paciente
        JOIN antecedentes_patologicos ON datos_paciente.id_paciente = antecedentes_patologicos.id_paciente
        JOIN etapa_a ON datos_paciente.id_paciente = etapa_a.id_paciente
        JOIN etapa_atencion ON datos_paciente.id_paciente = etapa_atencion.id_paciente
        JOIN etapa_b ON datos_paciente.id_paciente = etapa_b.id_paciente
        JOIN etapa_c ON datos_paciente.id_paciente = etapa_c.id_paciente
        JOIN etapa_d ON datos_paciente.id_paciente = etapa_d.id_paciente
        JOIN fisura ON datos_paciente.id_paciente = fisura.id_paciente WHERE datos_paciente.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);


        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente = $data['id_paciente'];
                $curp = $data['curp'];
                $nombre_paciente = $data['nombre_paciente'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $estado = $data['estado'];
                $municipio = $data['municipio'];
                $referencia = $data['referencia'];
                $num_telefonico = $data['num_telefonico'];
                $escolaridad = $data['escolaridad'];
                $estado_civil = $data['estado_civil'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $resultado_imc = $data['resultado_imc'];
                $circunferencia_abdominal = $data['circunferencia_abdominal'];
                $derecho_habiencia = $data['derecho_habiencia'];
                $socioeconomico = $data['socioeconomico'];
                $nivel_economico = $data['nivel_economico'];

                $fisura = $data['fisura'];
                $padre = $data['padre'];
                $madre = $data['madre'];
                $abuelo_materno = $data['abuelo_materno'];
                $abuela_materna = $data['abuela_materna'];
                $abuelo_paterno = $data['abuelo_paterno'];
                $abuela_paterna = $data['abuela_paterna'];
                $no_hermanas = $data['no_hermanas'];
                $no_hermanos = $data['no_hermanos'];

                $sem_gestacion = $data['sem_gestacion'];
                $comp_embarazo = $data['comp_embarazo'];
                $comp_parto = $data['comp_parto'];
                $tabaquismo = $data['tabaquismo'];
                $alcoholismo = $data['alcoholismo'];
                $malformaciones = $data['malformaciones'];
                $fisura_embarazo = $data['fisura_embarazo'];

                $alergias = $data['alergias'];
                $analgesicos = $data['analgesicos'];
                $anastesicos = $data['anastesicos'];
                $antibioticos = $data['antibioticos'];
                $antiinflamatorios = $data['antiinflamatorios'];

                $fecha_ingreso = $data['fecha_ingreso'];
                $etapa_atencion = $data['etapa_atencion'];

                $a_audiologia = $data['a_audiologia'];
                $a_maxilofacial = $data['a_maxilofacial'];
                $a_reconstructiva = $data['a_reconstructiva'];
                $a_neonatologia = $data['a_neonatologia'];
                $a_ortodoncia = $data['a_ortodoncia'];
                $a_otorrino = $data['a_otorrino'];
                $a_protesis_maxilo = $data['a_protesis_maxilo'];
                $a_psicologia = $data['a_psicologia'];
                $a_rehabilitacion = $data['a_rehabilitacion'];
                $a_terapia_lenguaje = $data['a_terapia_lenguaje'];
                $a_terapia_fisica = $data['a_terapia_fisica'];
                $a_terapia_ocupacional = $data['a_terapia_ocupacional'];
                $a_psicomotriz = $data['a_psicomotriz'];
                $a_curso_induccion = $data['a_curso_induccion'];
                $a_lactancia_materna = $data['a_lactancia_materna'];
                $a_estudios_audio = $data['a_estudios_audio'];
                $a_terapia_padres = $data['a_terapia_padres'];
                $a_valoracion_lenguaje = $data['a_valoracion_lenguaje'];
                $a_ortopedia = $data['a_ortopedia'];
                $a_palatoplastia = $data['a_palatoplastia'];
                $a_queiloplastia = $data['a_queiloplastia'];
                $a_estapa_estatus = $data['a_estapa_estatus'];
                $a_fecha_cirugia = $data['a_fecha_cirugia'];
                
                $b_audiologia =$data['b_audiologia'];
                $b_maxilofacial =$data['b_maxilofacial'];
                $b_reconstructiva =$data['b_reconstructiva'];
                $b_nutricion =$data['b_nutricion'];
                $b_ortodoncia =$data['b_ortodoncia'];
                $b_otorrino =$data['b_otorrino'];
                $b_pediatria =$data['b_pediatria'];
                $b_psicologia =$data['b_psicologia'];
                $b_protesis_maxilo =$data['b_protesis_maxilo'];
                $b_rehabilitacion =$data['b_rehabilitacion'];
                $b_terapia_lenguaje =$data['b_terapia_lenguaje'];
                $b_terapia_fisica =$data['b_terapia_fisica'];
                $b_terapia_ocupacional =$data['b_terapia_ocupacional'];
                $b_atencion_psicologia =$data['b_atencion_psicologia'];
                $b_curso_induccion =$data['b_curso_induccion'];
                $b_estudios_audiologicos =$data['b_estudios_audiologicos'];
                $b_cierre_velar =$data['b_cierre_velar'];
                $b_valoracion_lenguaje =$data['b_valoracion_lenguaje'];
                $b_inserto_oseo =$data['b_inserto_oseo'];
                $b_ortopedia_maxilar =$data['b_ortopedia_maxilar'];
                $b_palatoplastia =$data['b_palatoplastia'];
                $b_queiloplastia =$data['b_queiloplastia'];
                $b_etapa_estatus =$data['b_etapa_estatus'];
                $b_fecha_cirugia =$data['b_fecha_cirugia'];

                $c_audiologia = $data['c_audiologia'];
                $c_maxilofacial = $data['c_maxilofacial'];
                $c_cirugia_recontructiva = $data['c_cirugia_recontructiva'];
                $c_nutricion = $data['c_nutricion'];
                $c_ortodoncia = $data['c_ortodoncia'];
                $c_otorrino = $data['c_otorrino'];
                $c_pediatria = $data['c_pediatria'];
                $c_psicologia = $data['c_psicologia'];
                $c_protesis_maxilo = $data['c_protesis_maxilo'];
                $c_rehabilitacion = $data['c_rehabilitacion'];
                $c_terapia_leguaje = $data['c_terapia_leguaje'];
                $c_terapia_fisica = $data['c_terapia_fisica'];
                $c_terapia_ocupacional = $data['c_terapia_ocupacional'];
                $c_atencion_psicologica = $data['c_atencion_psicologica'];
                $c_curso_induccion = $data['c_curso_induccion'];
                $c_estudio_audiologicos = $data['c_estudio_audiologicos'];
                $c_cierre_veral = $data['c_cierre_veral'];
                $c_valoracion_lenguaje = $data['c_valoracion_lenguaje'];
                $c_inserto_oseo = $data['c_inserto_oseo'];
                $c_ortodoncia_tratamiento = $data['c_ortodoncia_tratamiento'];
                $c_ortopedia_maxilar = $data['c_ortopedia_maxilar'];
                $c_otras_plastias = $data['c_otras_plastias'];
                $c_palatoplastia = $data['c_palatoplastia'];
                $c_queiloplastia = $data['c_queiloplastia'];
                $c_etapa_estatus = $data['c_etapa_estatus'];
                $c_fecha_cirugia = $data['c_fecha_cirugia'];

                $d_audiologia = $data['d_audiologia'];
                $d_maxilofacial = $data['d_maxilofacial'];
                $d_cirugia_recontructiva = $data['d_cirugia_recontructiva'];
                $d_nutricion = $data['d_nutricion'];
                $d_ortodoncia = $data['d_ortodoncia'];
                $d_otorrino = $data['d_otorrino'];
                $d_pediatria = $data['d_pediatria'];
                $d_psicologia = $data['d_psicologia'];
                $d_protesis_maxilo = $data['d_protesis_maxilo'];
                $d_rehabilitacion = $data['d_rehabilitacion'];
                $d_terapia_lenguaje = $data['d_terapia_lenguaje'];
                $d_terapia_fisica = $data['d_terapia_fisica'];
                $d_terapia_ocupacional = $data['d_terapia_ocupacional'];
                $d_atencion_psicologica = $data['d_atencion_psicologica'];
                $d_curso_induccion = $data['d_curso_induccion'];
                $d_estudios_audiologicos = $data['d_estudios_audiologicos'];
                $d_valoracion_lenguaje = $data['d_valoracion_lenguaje'];
                $d_ortagnatica = $data['d_ortagnatica'];
                $d_inserto_oseo = $data['d_inserto_oseo'];
                $d_ortodoncia_tratamiento = $data['d_ortodoncia_tratamiento'];
                $d_ortopedia_maxilar = $data['d_ortopedia_maxilar'];
                $d_otras_plastias = $data['d_otras_plastias'];
                $d_palatoplastias = $data['d_palatoplastias'];
                $d_queiloplastia = $data['d_queiloplastia'];
                $d_rinoplastia = $data['d_rinoplastia'];
                $d_etapa_estatus = $data['d_etapa_estatus'];
                $d_etapa_fecha = $data['d_etapa_fecha'];
                
                $fisura_or = $data['fisura_or'];
                $labio_dcho = $data['labio_dcho'];
                $labio_izdo = $data['labio_izdo'];
                $alveolo_dcho = $data['alveolo_dcho'];
                $alveolo_izdo = $data['alveolo_izdo'];
                $paladar_duro = $data['paladar_duro'];
                $velo_paladar = $data['velo_paladar'];

            }
        }
    }

?>