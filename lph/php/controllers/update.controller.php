<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_lph.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente            = $_POST['id_paciente'];
        $curp                   = $_POST['curp'];
        $nombre                 = $_POST['nombre'];
        $fecha                  = $_POST['fecha'];
        $edad                   = $_POST['edad'];
        $sexo                   = $_POST['sexo'];
        $Estado                 = $_POST['Estado'];
        $municipio              = $_POST['municipio'];
        $referencia             = $_POST['referencia'];
        $telefono               = $_POST['telefono'];
        $Escolaridad            = $_POST['Escolaridad'];
        $Estadocivil            = $_POST['Estadocivil'];
        $talla                  = $_POST['talla'];
        $peso                   = $_POST['peso'];
        $imc                    = $_POST['imc'];
        $imcdescripcion         = $_POST['imcdescripcion'];
        $circunferencia         = $_POST['circunferencia'];
        $derechohabiencia       = $_POST['derechohabiencia'];
        $estudio_socioeconomico = $_POST['estudio_socioeconomico'];
        $nivel                  = $_POST['nivel'];

        $queryPaciente = $sql = "UPDATE datos_paciente
        SET 
            curp = '$curp',
            nombre_paciente = '$nombre',
            fecha_nacimiento = '$fecha',
            edad = '$edad',
            sexo = '$sexo',
            estado = '$Estado',
            municipio = '$municipio',
            referencia = '$referencia',
            num_telefonico = '$telefono',
            escolaridad = '$Escolaridad',
            estado_civil = '$Estadocivil',
            talla = '$talla',
            peso = '$peso',
            imc = '$imc',
            resultado_imc = '$imcdescripcion',
            circunferencia_abdominal = '$circunferencia',
            derecho_habiencia = '$derechohabiencia',
            socioeconomico = '$estudio_socioeconomico',
            nivel_economico = '$nivel'
        WHERE id_paciente = '$id_paciente'";        
        $dataPaciente = $connectionDB->ShotSimple($queryPaciente);

        $fisura        = $_POST['fisura'];
        $LPH_Padre     = $_POST['LPH_Padre'];
        $LPH_Madre     = $_POST['LPH_Madre'];
        $AbueloM_LPH   = $_POST['AbueloM_LPH'];
        $AbuelaM_LPH   = $_POST['AbuelaM_LPH'];
        $AbueloP_LPH   = $_POST['AbueloP_LPH'];
        $AbuelaP_LPH   = $_POST['AbuelaP_LPH'];
        $num_hermanas  = $_POST['num_hermanas'];
        $num_hermanos  = $_POST['num_hermanos'];

        $queryAntecedentes_Heredo = "UPDATE antecedentes_familiares
        SET 
            fisura = '$fisura',
            padre = '$LPH_Padre',
            madre = '$LPH_Madre',
            abuelo_materno = '$AbueloM_LPH',
            abuela_materna = '$AbuelaM_LPH',
            abuelo_paterno = '$AbueloP_LPH',
            abuela_paterna = '$AbuelaP_LPH',
            no_hermanas = '$num_hermanas',
            no_hermanos = '$num_hermanos'
        WHERE id_paciente = $id_paciente";
        $dataAntecedentes_Heredo = $connectionDB -> ShotSimple($queryAntecedentes_Heredo);


        $semanasgestacion       = $_POST['semanasgestacion'];
        $complicacionesembarazo = $_POST['complicacionesembarazo'];
        $complicacionesparto    = $_POST['complicacionesparto'];
        $tabaquismo             = $_POST['tabaquismo'];
        $alcoholismo            = $_POST['alcoholismo'];
        $malformaciones         = $_POST['malformaciones'];
        $dxfisuraembarazo       = $_POST['dxfisuraembarazo'];

        $queryAntecedentes_Natales = "UPDATE antecedentes_natales
        SET 
            sem_gestacion = $semanasgestacion,
            comp_embarazo = '$complicacionesembarazo',
            comp_parto = '$complicacionesparto',
            tabaquismo = '$tabaquismo',
            alcoholismo = '$alcoholismo',
            malformaciones = '$malformaciones',
            fisura_embarazo = '$dxfisuraembarazo'
        WHERE id_paciente = $id_paciente";
        $dataAntecedentes_Natales = $connectionDB -> ShotSimple($queryAntecedentes_Natales);

        $alergicos         = $_POST['alergicos'];
        $Analgesicos       = $_POST['Analgesicos'];
        $Anestesicos       = $_POST['Anestesicos'];
        $Antibioticos      = $_POST['Antibioticos'];
        $Antiinflamatorios = $_POST['Antiinflamatorios'];

        $queryAntecedentes_Pato = "UPDATE antecedentes_patologicos
        SET 
            alergias = '$alergicos',
            analgesicos = '$Analgesicos',
            anastesicos = '$Anestesicos',
            antibioticos = '$Antibioticos',
            antiinflamatorios = '$Antiinflamatorios'
        WHERE id_paciente = $id_paciente";
        $dataAntecedentes_Pato = $connectionDB -> ShotSimple($queryAntecedentes_Pato);

        $fechaingreso  = $_POST['fechaingreso'];
        $etapaatencion = $_POST['etapaatencion'];

        $queryAtencion = "UPDATE etapa_atencion
        SET 
            fecha_ingreso = '$fechaingreso',
            etapa_atencion = '$etapaatencion'
        WHERE id_paciente = $id_paciente";
        $dataAtencion = $connectionDB -> ShotSimple($queryAtencion);
        
        $Audiologia                       = $_POST['Audiologia'];
        $Maxilofacial                     = $_POST['Maxilofacial'];
        $Reconstructiva                   = $_POST['Reconstructiva'];
        $Neonatologia                     = $_POST['Neonatologia'];
        $Ortodoncia                       = $_POST['Ortodoncia'];
        $Otorrinolaringologia_A           = $_POST['Otorrinolaringologia_A'];
        $Protesis_MaxilofacialA           = $_POST['Protesis_MaxilofacialA'];
        $Psicologia_A                     = $_POST['Psicologia_A'];
        $Rehabilitacion_A                 = $_POST['Rehabilitacion_A'];
        $Lenguaje_A                       = $_POST['Lenguaje_A'];
        $Fisica_A                         = $_POST['Fisica_A'];
        $Ocupacional_A                    = $_POST['Ocupacional_A'];
        $Atencion_Psicomotriz_A           = $_POST['Atencion_Psicomotriz_A'];
        $Curso_De_Induccion_A             = $_POST['Curso_De_Induccion_A'];
        $Curso_Lactancia_Materna_A        = $_POST['Curso_Lactancia_Materna_A'];
        $Estudios_Audiologicos_A          = $_POST['Estudios_Audiologicos_A'];
        $Terapia_Para_Padres_A            = $_POST['Terapia_Para_Padres_A'];
        $Valoracion_Inicial_De_Lenguaje_A = $_POST['Valoracion_Inicial_De_Lenguaje_A'];
        $Ortopedia_PreQuirurgica_XA       = $_POST['Ortopedia_PreQuirurgica_XA'];
        $Palatoplastia_XA                 = $_POST['Palatoplastia_XA'];
        $Queiloplastias_XA                = $_POST['Queiloplastias_XA'];
        $EstatusQxa                       = $_POST['EstatusQxa'];
        $fechacirugiaa                    = $_POST['fechacirugiaa'];

        $queryEtapa_A = "UPDATE etapa_a
        SET 
            a_audiologia = '$Audiologia',
            a_maxilofacial = '$Maxilofacial',
            a_reconstructiva = '$Reconstructiva',
            a_neonatologia = '$Neonatologia',
            a_ortodoncia = '$Ortodoncia',
            a_otorrino = '$Otorrinolaringologia_A',
            a_protesis_maxilo = '$Protesis_MaxilofacialA',
            a_psicologia = '$Psicologia_A',
            a_rehabilitacion = '$Rehabilitacion_A',
            a_terapia_lenguaje = '$Lenguaje_A',
            a_terapia_fisica = '$Fisica_A',
            a_terapia_ocupacional = '$Ocupacional_A',
            a_psicomotriz = '$Atencion_Psicomotriz_A',
            a_curso_induccion = '$Curso_De_Induccion_A',
            a_lactancia_materna = '$Curso_Lactancia_Materna_A',
            a_estudios_audio = '$Estudios_Audiologicos_A',
            a_terapia_padres = '$Terapia_Para_Padres_A',
            a_valoracion_lenguaje = '$Valoracion_Inicial_De_Lenguaje_A',
            a_ortopedia = '$Ortopedia_PreQuirurgica_XA',
            a_palatoplastia = '$Palatoplastia_XA',
            a_queiloplastia = '$Queiloplastias_XA',
            a_estapa_estatus = '$EstatusQxa',
            a_fecha_cirugia = '$fechacirugiaa'
        WHERE id_paciente = $id_paciente";
        $dataEtapa_A = $connectionDB -> ShotSimple($queryEtapa_A);

        $Audiologia_B                        = $_POST['Audiologia_B'];
        $Cirugoa_Maxilofacial_B              = $_POST['Cirugoa_Maxilofacial_B'];
        $Cirugia_Reconstructiva_B            = $_POST['Cirugia_Reconstructiva_B'];
        $Nutricion_B                         = $_POST['Nutricion_B'];
        $Ortodoncia_B                        = $_POST['Ortodoncia_B'];
        $Otorrinolaringologia_B              = $_POST['Otorrinolaringologia_B'];
        $Pediatria_B                         = $_POST['Pediatria_B'];
        $Psicologia_B                        = $_POST['Psicologia_B'];
        $Protesis_Maxilofacial_B             = $_POST['Protesis_Maxilofacial_B'];
        $Rehabilitacion_B                    = $_POST['Rehabilitacion_B'];
        $Terapia_De_Lenguaje_B               = $_POST['Terapia_De_Lenguaje_B'];
        $Terapia_Fisica_B                    = $_POST['Terapia_Fisica_B'];
        $Terapia_Ocupacional_B               = $_POST['Terapia_Ocupacional_B'];
        $Atencion_Psicologica_B              = $_POST['Atencion_Psicologica_B'];
        $Curso_De_Induccion_B                = $_POST['Curso_De_Induccion_B'];
        $Estudios_Audiologicos_B             = $_POST['Estudios_Audiologicos_B'];
        $Valoracion_Patron_De_Cierre_Velar_B = $_POST['Valoracion_Patron_De_Cierre_Velar_B'];
        $Valoracion_Del_Lenguaje_B           = $_POST['Valoracion_Del_Lenguaje_B'];
        $Injerto_Oseo_XB                     = $_POST['Injerto_Oseo_XB'];
        $Ortopedia_Maxilar_XB                = $_POST['Ortopedia_Maxilar_XB'];
        $Palatoplastia_XB                    = $_POST['Palatoplastia_XB'];
        $Queiloplastias_XB                   = $_POST['Queiloplastias_XB'];
        $EstatusQxb                          = $_POST['EstatusQxb'];
        $fechacirugiab                       = $_POST['fechacirugiab'];

        $queryEtapa_B = "UPDATE etapa_b
        SET 
            b_audiologia = '$Audiologia_B',
            b_maxilofacial = '$Cirugoa_Maxilofacial_B',
            b_reconstructiva = '$Cirugia_Reconstructiva_B',
            b_nutricion = '$Nutricion_B',
            b_ortodoncia = '$Ortodoncia_B',
            b_otorrino = '$Otorrinolaringologia_B',
            b_pediatria = '$Pediatria_B',
            b_psicologia = '$Psicologia_B',
            b_protesis_maxilo = '$Protesis_Maxilofacial_B',
            b_rehabilitacion = '$Rehabilitacion_B',
            b_terapia_lenguaje = '$Terapia_De_Lenguaje_B',
            b_terapia_fisica = '$Terapia_Fisica_B',
            b_terapia_ocupacional = '$Terapia_Ocupacional_B',
            b_atencion_psicologia = '$Atencion_Psicologica_B',
            b_curso_induccion = '$Curso_De_Induccion_B',
            b_estudios_audiologicos = '$Estudios_Audiologicos_B',
            b_cierre_velar = '$Valoracion_Patron_De_Cierre_Velar_B',
            b_valoracion_lenguaje = '$Valoracion_Del_Lenguaje_B',
            b_inserto_oseo = '$Injerto_Oseo_XB',
            b_ortopedia_maxilar = '$Ortopedia_Maxilar_XB',
            b_palatoplastia = '$Palatoplastia_XB',
            b_queiloplastia = '$Queiloplastias_XB',
            b_etapa_estatus = '$EstatusQxb',
            b_fecha_cirugia = '$fechacirugiab'
        WHERE id_paciente = $id_paciente";
        $dataEtapa_B = $connectionDB -> ShotSimple($queryEtapa_B);

        $Audiologia_C                        = $_POST['Audiologia_C'];
        $Cirugia_Maxilofacial_C              = $_POST['Cirugia_Maxilofacial_C'];
        $Cirugia_Reconstructiva_C            = $_POST['Cirugia_Reconstructiva_C'];
        $Nutricion_C                         = $_POST['Nutricion_C'];
        $Ortodoncia_C                        = $_POST['Ortodoncia_C'];
        $Otorrinolaringologia_C              = $_POST['Otorrinolaringologia_C'];
        $Pediatria_C                         = $_POST['Pediatria_C'];
        $Psicologia_C                        = $_POST['Psicologia_C'];
        $Protesis_Maxilofacial_C             = $_POST['Protesis_Maxilofacial_C'];
        $Rehabilitacion_C                    = $_POST['Rehabilitacion_C'];
        $Terapia_De_Lenguaje_C               = $_POST['Terapia_De_Lenguaje_C'];
        $Terapia_Fisica_C                    = $_POST['Terapia_Fisica_C'];
        $Terapia_Ocupacional_C               = $_POST['Terapia_Ocupacional_C'];
        $Atencion_Psicologica_C              = $_POST['Atencion_Psicologica_C'];
        $Curso_De_Induccion_C                = $_POST['Curso_De_Induccion_C'];
        $Estudios_Audiologicos_C             = $_POST['Estudios_Audiologicos_C'];
        $Valoracion_Patron_De_Cierre_Velar_C = $_POST['Valoracion_Patron_De_Cierre_Velar_C'];
        $Valoracion_Del_Lenguaje_C           = $_POST['Valoracion_Del_Lenguaje_C'];
        $Injerto_Oseo_XC                     = $_POST['Injerto_Oseo_XC'];
        $Ortodoncia_XC                       = $_POST['Ortodoncia_XC'];
        $Ortopedia_Maxilar_XC                = $_POST['Ortopedia_Maxilar_XC'];
        $Otras_Plastias_XC                   = $_POST['Otras_Plastias_XC'];
        $Palatoplastia_XC                    = $_POST['Palatoplastia_XC'];
        $Queiloplastia_XC                    = $_POST['Queiloplastia_XC'];
        $EstatusQxc                          = $_POST['EstatusQxc'];
        $idfechacirugia_c                    = $_POST['idfechacirugia_c'];

        $queryEtapa_C = "UPDATE etapa_c
        SET 
            c_audiologia = '$Audiologia_C',
            c_maxilofacial = '$Cirugia_Maxilofacial_C',
            c_cirugia_recontructiva = '$Cirugia_Reconstructiva_C',
            c_nutricion = '$Nutricion_C',
            c_ortodoncia = '$Ortodoncia_C',
            c_otorrino = '$Otorrinolaringologia_C',
            c_pediatria = '$Pediatria_C',
            c_psicologia = '$Psicologia_C',
            c_protesis_maxilo = '$Protesis_Maxilofacial_C',
            c_rehabilitacion = '$Rehabilitacion_C',
            c_terapia_leguaje = '$Terapia_De_Lenguaje_C',
            c_terapia_fisica = '$Terapia_Fisica_C',
            c_terapia_ocupacional = '$Terapia_Ocupacional_C',
            c_atencion_psicologica = '$Atencion_Psicologica_C',
            c_curso_induccion = '$Curso_De_Induccion_C',
            c_estudio_audiologicos = '$Estudios_Audiologicos_C',
            c_cierre_veral = '$Valoracion_Patron_De_Cierre_Velar_C',
            c_valoracion_lenguaje = '$Valoracion_Del_Lenguaje_C',
            c_inserto_oseo = '$Injerto_Oseo_XC',
            c_ortodoncia_tratamiento = '$Ortodoncia_XC',
            c_ortopedia_maxilar = '$Ortopedia_Maxilar_XC',
            c_otras_plastias = '$Otras_Plastias_XC',
            c_palatoplastia = '$Palatoplastia_XC',
            c_queiloplastia = '$Queiloplastia_XC',
            c_fecha_cirugia = '$idfechacirugia_c'
        WHERE id_paciente = $id_paciente";
        $dataEtapa_C = $connectionDB -> ShotSimple($queryEtapa_C);

        $Audiologia_D                            = $_POST['Audiologia_D'];
        $Cirugia_Maxilofacial_D                  = $_POST['Cirugia_Maxilofacial_D'];
        $Cirugia_Reconstructiva_D                = $_POST['Cirugia_Reconstructiva_D'];
        $Nutricion_D                             = $_POST['Nutricion_D'];
        $Ortodoncia_D                            = $_POST['Ortodoncia_D'];
        $Otorrinolaringologia_D                  = $_POST['Otorrinolaringologia_D'];
        $Pediatria_D                             = $_POST['Pediatria_D'];
        $Psicologia_D                            = $_POST['Psicologia_D'];
        $Protesis_Maxilofacial_D                 = $_POST['Protesis_Maxilofacial_D'];
        $Rehabilitacion_D                        = $_POST['Rehabilitacion_D'];
        $Terapia_De_Lenguaje_D                   = $_POST['Terapia_De_Lenguaje_D'];
        $Terapia_Fisica_D                        = $_POST['Terapia_Fisica_D'];
        $Terapia_Ocupacional_D                   = $_POST['Terapia_Ocupacional_D'];
        $Atencion_Psicologica_D                  = $_POST['Atencion_Psicologica_D'];
        $Curso_De_Induccion_D                    = $_POST['Curso_De_Induccion_D'];
        $Estudios_Audiologicos_D                 = $_POST['Estudios_Audiologicos_D'];
        $Valoracion_Del_Lenguaje_D               = $_POST['Valoracion_Del_Lenguaje_D'];
        $Cirugia_Ortognatica_Distraccion_Osea_XD = $_POST['Cirugia_Ortognatica_Distraccion_Osea_XD'];
        $Injerto_Oseo_XD                         = $_POST['Injerto_Oseo_XD'];
        $Ortodoncia_XD                           = $_POST['Ortodoncia_XD'];
        $Ortopedia_Maxilar_XD                    = $_POST['Ortopedia_Maxilar_XD'];
        $Otras_Plastias_XD                       = $_POST['Otras_Plastias_XD'];
        $Palatoplastia_XD                        = $_POST['Palatoplastia_XD'];
        $Queiloplastia_XD                        = $_POST['Queiloplastia_XD'];
        $Rinoplastia_XD                          = $_POST['Rinoplastia_XD'];
        $EstatusQxd                              = $_POST['EstatusQxd'];
        $idfechacirugia_d                        = $_POST['idfechacirugia_d'];

        $queryEtapa_D = "UPDATE etapa_d
        SET 
            d_audiologia = '$Audiologia_D',
            d_maxilofacial = '$Cirugia_Maxilofacial_D',
            d_cirugia_recontructiva = '$Cirugia_Reconstructiva_D',
            d_nutricion = '$Nutricion_D',
            d_ortodoncia = '$Ortodoncia_D',
            d_otorrino = '$Otorrinolaringologia_D',
            d_pediatria = '$Pediatria_D',
            d_psicologia = '$Psicologia_D',
            d_protesis_maxilo = '$Protesis_Maxilofacial_D',
            d_rehabilitacion = '$Rehabilitacion_D',
            d_terapia_lenguaje = '$Terapia_De_Lenguaje_D',
            d_terapia_fisica = '$Terapia_Fisica_D',
            d_terapia_ocupacional = '$Terapia_Ocupacional_D',
            d_atencion_psicologica = '$Atencion_Psicologica_D',
            d_curso_induccion = '$Curso_De_Induccion_D',
            d_estudios_audiologicos = '$Estudios_Audiologicos_D',
            d_valoracion_lenguaje = '$Valoracion_Del_Lenguaje_D',
            d_ortagnatica = '$Cirugia_Ortognatica_Distraccion_Osea_XD',
            d_inserto_oseo = '$Injerto_Oseo_XD',
            d_ortodoncia_tratamiento = '$Ortodoncia_XD',
            d_ortopedia_maxilar = '$Ortopedia_Maxilar_XD',
            d_otras_plastias = '$Otras_Plastias_XD',
            d_palatoplastias = '$Palatoplastia_XD',
            d_queiloplastia = '$Queiloplastia_XD',
            d_rinoplastia = '$Rinoplastia_XD',
            d_etapa_fecha = '$idfechacirugia_d'
        WHERE id_paciente = $id_paciente";
        $dataEtapa_D = $connectionDB -> ShotSimple($queryEtapa_D);

        $fisura_or        = $_POST['fisura_or'];
        $labioderecho     = $_POST['labioderecho'];
        $labioizq         = $_POST['labioizq'];
        $Alveolo_Derecho  = $_POST['Alveolo_Derecho'];
        $AlveoloIzquierdo = $_POST['AlveoloIzquierdo'];
        $paladarduro      = $_POST['paladarduro'];
        $velopaladar      = $_POST['velopaladar'];

        $queryFisura  = "UPDATE fisura
        SET 
            fisura_or = '$fisura_or',
            labio_dcho = '$labioderecho',
            labio_izdo = '$labioizq',
            alveolo_dcho = '$Alveolo_Derecho',
            alveolo_izdo = '$AlveoloIzquierdo',
            paladar_duro = '$paladarduro',
            velo_paladar = '$velopaladar'
        WHERE id_paciente = $id_paciente";
        
        $dataFisura = $connectionDB -> ShotSimple($queryFisura);



        echo 'success';
    }

?>