<?php
        require(__DIR__ . '/../models/database.model.php');
        include(__DIR__ . '/../dbconfig_lph.php');

        $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

                $queryPaciente = "INSERT INTO datos_paciente (curp,nombre_paciente,fecha_nacimiento,edad,sexo,estado,municipio,
                referencia,num_telefonico,escolaridad,estado_civil,talla,peso,imc,resultado_imc,circunferencia_abdominal,
                derecho_habiencia,socioeconomico,nivel_economico)
                VALUES ('$curp','$nombre','$fecha','$edad','$sexo','$Estado','$municipio','$referencia','$telefono','$Escolaridad',
                '$Estadocivil','$talla','$peso','$imc','$imcdescripcion','$circunferencia','$derechohabiencia','$estudio_socioeconomico',
                '$nivel')";
                $dataPaciente = $connectionDB->ShotSimple($queryPaciente);
                $ultimoId = $connectionDB->last_id;


                $fisura        = $_POST['fisura'];
                $LPH_Padre     = $_POST['LPH_Padre'];
                $LPH_Madre     = $_POST['LPH_Madre'];
                $AbueloM_LPH   = $_POST['AbueloM_LPH'];
                $AbuelaM_LPH   = $_POST['AbuelaM_LPH'];
                $AbueloP_LPH   = $_POST['AbueloP_LPH'];
                $AbuelaP_LPH   = $_POST['AbuelaP_LPH'];
                $num_hermanas  = $_POST['num_hermanas'];
                $num_hermanos  = $_POST['num_hermanos'];

                $queryAntecedentes_Heredo = "INSERT INTO antecedentes_familiares VALUES ('$fisura','$LPH_Padre','$LPH_Madre',
                '$AbueloM_LPH','$AbuelaM_LPH','$AbueloP_LPH','$AbuelaP_LPH','$num_hermanas','$num_hermanos','$ultimoId')";
                $dataAntecedentes_Heredo = $connectionDB -> ShotSimple($queryAntecedentes_Heredo);


                $semanasgestacion       = $_POST['semanasgestacion'];
                $complicacionesembarazo = $_POST['complicacionesembarazo'];
                $complicacionesparto    = $_POST['complicacionesparto'];
                $tabaquismo             = $_POST['tabaquismo'];
                $alcoholismo            = $_POST['alcoholismo'];
                $malformaciones         = $_POST['malformaciones'];
                $dxfisuraembarazo       = $_POST['dxfisuraembarazo'];

                $queryAntecedentes_Natales = "INSERT INTO antecedentes_natales VALUES ('$semanasgestacion','$complicacionesembarazo',
                '$complicacionesparto','$tabaquismo','$alcoholismo','$malformaciones','$dxfisuraembarazo','$ultimoId')";
                $dataAntecedentes_Natales = $connectionDB -> ShotSimple($queryAntecedentes_Natales);


                $alergicos         = $_POST['alergicos'];
                $Analgesicos       = $_POST['Analgesicos'];
                $Anestesicos       = $_POST['Anestesicos'];
                $Antibioticos      = $_POST['Antibioticos'];
                $Antiinflamatorios = $_POST['Antiinflamatorios'];

                $queryAntecedentes_Pato = "INSERT INTO antecedentes_patologicos VALUES ('$alergicos','$Analgesicos','$Anestesicos',
                '$Antibioticos','$Antiinflamatorios','$ultimoId')";
                $dataAntecedentes_Pato = $connectionDB -> ShotSimple($queryAntecedentes_Pato);


                $fechaingreso  = $_POST['fechaingreso'];
                $etapaatencion = $_POST['etapaatencion'];

                $queryAtencion = "INSERT INTO etapa_atencion VALUES ('$fechaingreso','$etapaatencion','$ultimoId')";
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

                $queryEtapa_A = "INSERT INTO etapa_a VALUES ('$Audiologia','$Maxilofacial','$Reconstructiva','$Neonatologia','$Ortodoncia','$Otorrinolaringologia_A',
                '$Protesis_MaxilofacialA','$Psicologia_A','$Rehabilitacion_A','$Lenguaje_A','$Fisica_A','$Ocupacional_A','$Atencion_Psicomotriz_A','$Curso_De_Induccion_A',
                '$Curso_Lactancia_Materna_A','$Estudios_Audiologicos_A','$Terapia_Para_Padres_A','$Valoracion_Inicial_De_Lenguaje_A','$Ortopedia_PreQuirurgica_XA',
                '$Palatoplastia_XA','$Queiloplastias_XA','$EstatusQxa','$fechacirugiaa','$ultimoId')";
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

                $queryEtapa_B = "INSERT INTO etapa_b VALUES ('$Audiologia_B','$Cirugoa_Maxilofacial_B','$Cirugia_Reconstructiva_B','$Nutricion_B','$Ortodoncia_B',
                '$Otorrinolaringologia_B','$Pediatria_B','$Psicologia_B','$Protesis_Maxilofacial_B','$Rehabilitacion_B','$Terapia_De_Lenguaje_B','$Terapia_Fisica_B',
                '$Terapia_Ocupacional_B','$Atencion_Psicologica_B','$Curso_De_Induccion_B','$Estudios_Audiologicos_B','$Valoracion_Patron_De_Cierre_Velar_B',
                '$Valoracion_Del_Lenguaje_B','$Injerto_Oseo_XB','$Ortopedia_Maxilar_XB','$Palatoplastia_XB','$Queiloplastias_XB','$EstatusQxb',
                '$fechacirugiab','$ultimoId')";
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

                $queryEtapa_C = "INSERT INTO etapa_c VALUES ('$Audiologia_C','$Cirugia_Maxilofacial_C','$Cirugia_Reconstructiva_C','$Nutricion_C','$Ortodoncia_C',
                '$Otorrinolaringologia_C','$Pediatria_C','$Psicologia_C','$Protesis_Maxilofacial_C','$Rehabilitacion_C','$Terapia_De_Lenguaje_C','$Terapia_Fisica_C',
                '$Terapia_Ocupacional_C','$Atencion_Psicologica_C','$Curso_De_Induccion_C','$Estudios_Audiologicos_C','$Valoracion_Patron_De_Cierre_Velar_C',
                '$Valoracion_Del_Lenguaje_C','$Injerto_Oseo_XC','$Ortodoncia_XC','$Ortopedia_Maxilar_XC','$Otras_Plastias_XC','$Palatoplastia_XC','$Queiloplastia_XC',
                '$EstatusQxc','$idfechacirugia_c','$ultimoId')";
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

                $queryEtapa_D = "INSERT INTO etapa_d VALUES ('$Audiologia_D','$Cirugia_Maxilofacial_D','$Cirugia_Reconstructiva_D','$Nutricion_D','$Ortodoncia_D',
                '$Otorrinolaringologia_D','$Pediatria_D','$Psicologia_D','$Protesis_Maxilofacial_D','$Rehabilitacion_D','$Terapia_De_Lenguaje_D','$Terapia_Fisica_D',
                '$Terapia_Ocupacional_D','$Atencion_Psicologica_D','$Curso_De_Induccion_D','$Estudios_Audiologicos_D','$Valoracion_Del_Lenguaje_D',
                '$Cirugia_Ortognatica_Distraccion_Osea_XD','$Injerto_Oseo_XD','$Ortodoncia_XD','$Ortopedia_Maxilar_XD','$Otras_Plastias_XD','$Palatoplastia_XD',
                '$Queiloplastia_XD','$Rinoplastia_XD','$EstatusQxd','$idfechacirugia_d','$ultimoId')";
                $dataEtapa_D = $connectionDB -> ShotSimple($queryEtapa_D);


                $fisura_or        = $_POST['fisura_or'];
                $labioderecho     = $_POST['labioderecho'];
                $labioizq         = $_POST['labioizq'];
                $Alveolo_Derecho  = $_POST['Alveolo_Derecho'];
                $AlveoloIzquierdo = $_POST['AlveoloIzquierdo'];
                $paladarduro      = $_POST['paladarduro'];
                $velopaladar      = $_POST['velopaladar'];

                $queryFisura = "INSERT INTO fisura VALUES ('$fisura_or','$labioderecho','$labioizq','$Alveolo_Derecho',
                '$AlveoloIzquierdo','$paladarduro','$velopaladar','$ultimoId')";
                $dataFisura = $connectionDB -> ShotSimple($queryFisura);




                echo 'success';
        }


?>