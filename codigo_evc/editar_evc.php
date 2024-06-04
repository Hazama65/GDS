<?php
include('php/controllers/edit.controller.php');
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
    <title>Editar Registro Código EVC</title>
</head>


<body>

    <header style="text-align: center;">
        <div style=" padding: 20px; text-align: left;">
            <a href="index.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                    <i class="bi bi-rewind-fill"></i>
                </button>
            </a>
        </div>


        <h5>Editar Código EVC</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <form id="evc_update" method="POST">
        <div class="container">
    
            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">
    
    
                <div class="col-md-6" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $nombre_paciente; ?>">
                </div>
    
                <div class="col-md-6" id="idcurp">
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP"
                        style="font-size: 13px;" value="<?php echo $curp; ?>">
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" onblur="curp2date();" class="control form-control"
                        style="font-size: 13px;"  value="<?php echo $fecha_nacimiento; ?>">
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo"
                        style="font-size: 13px;"  value="<?php echo $sexo; ?>">
                </div>
    
    
                <div class="col-md-4">
                    <strong style="font-size: 14px;">Edad de Ingreso</strong>
                    <input id="edad" name="edad" type="number" class="control form-control" style="font-size: 13px;"
                         value="<?php echo $edad; ?>">
                </div>
    
                <div class="col-md-6" style="display:none">
                    <strong style="font-size: 14px; ">Fecha</strong>
                    <input id="fecha_Actual" name="fecha_Actual" type="date" class="control form-control"
                        style="font-size: 13px;" >
                </div>
    
                <div class="col-md-3" style="display:none">
                    <strong style="font-size: 14px; ">Horario</strong>
                    <input id="tiempo" name="tiempo" type="time" class="control form-control" style="font-size: 13px;"
                        style="display: none;" >
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Fecha de Sintomas</strong>
                    <input id="fecha_inicio" name="fecha_inicio" type="date" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $fecha_sintomas; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Inicio de Sintomas</strong>
                    <input id="inicio_sintomas" name="inicio_sintomas" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $inicio_sintomas; ?>">
                </div>
    
                <!-- ************************Escala F.A.S.T*********************************** -->
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(155, 165, 209) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Escala F.A.S.T</h5>
                </div>
    
    
                <div class="row"> <!--ROW DE ESCALA FACE  -->
    
                    <div class="col-md-3" id="escala_face">
                        <strong style="font-size: 14px;">FACE</strong>
                        <select name="Face" id="Face" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($face == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Negado"<?php if ($face == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($face == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
                    <div class="col-md-3" id="escala_arms">
                        <strong style="font-size: 14px;">ARMS</strong>
                        <select name="arms" id="arms" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($arms == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Negado"<?php if ($arms == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($arms == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
                    <div class="col-md-3" id="escala_speech">
                        <strong style="font-size: 14px;">SPEECH</strong>
                        <select name="speech" id="speech" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($speech == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Negado"<?php if ($speech == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($speech == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
    
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TIME</strong>
                        <input type="text" class="control form-control" id="resultado_time" name="resultado_time"
                            style="font-size: 13px;"  value="<?php echo $time; ?>">
                    </div>
    
                </div><!-- row  ESCALA FAST-->
    
                <!-- ************************Escala NIHHS*********************************** -->
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(155, 165, 209) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Escala N.I.H.S.S Inicial</h5>
                </div>
    
    
    
                <div class="col-md-12" id="escala_nihss">
                    <i><a style="font-size: 14px; margin-top: 50px;"
                            href="https://www.rccc.eu/ppc/indicadores/Neuro/NIHSS.html" target="_blank">Escala NIHSS</a></i>
                    <select name="nihss" id="nihss" class="form-control" style="font-size: 14px;"
                        onchange="mostrarParametrosNihss()">
                        <option value="Seleccione"<?php if ($escala == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="1-4 Leve"<?php if ($escala == '1-4 Leve') echo 'selected'; ?>>1- 4 Leve</option>
                        <option value="5-15 Moderado"<?php if ($escala == '5-15 Moderado') echo 'selected'; ?>>5- 15 Moderado</option>
                        <option value="16-20 Moderado Severo"<?php if ($escala == '16-20 Moderado Severo') echo 'selected'; ?>>16- 20 Moderado Severo</option>
                        <option value="21-42 Severo"<?php if ($escala == '21-42 Severo') echo 'selected'; ?>>21- 42 Severo</option>
                    </select>
                </div>
    
                <div class="container" id="parametros_nihss" style="display: none;">
                    <div class="row">
                        <div class="col-md-3" id="trombolisis">
                            <strong style="font-size: 14px; margin-top: 50px;">Trombolisis</strong>
                            <select name="trombolisis1" id="trombolisis1" class="form-control" style="font-size: 14px;"
                                onchange="actualizarColorTrombolisis()">
                                <option value="Negado"<?php if ($trombolisis == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($trombolisis == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
    
                        <div class="col-md-3" id="si_rtpa" style="display: none;">
                            <strong style="font-size: 14px; margin-top: 50px;">r-TPA</strong>
                            <select name="vr_TPA_1" id="r_TPA_1" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione"<?php if ($tpa == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Alteplasa"<?php if ($tpa == 'Alteplasa') echo 'selected'; ?>>Alteplasa</option>
                                <option value="Tenecteplasa"<?php if ($tpa == 'Tenecteplasa') echo 'selected'; ?>>Tenecteplasa</option>
                                <option value="Reteplasa"<?php if ($tpa == 'Reteplasa') echo 'selected'; ?>>Reteplasa</option>
                            </select>
                        </div>
    
                        <div class="col-md-3" id="sangrado_1" style="display: none;">
                            <strong style="font-size: 14px; margin-top: 50px;">Sangrado</strong>
                            <select name="sangrado" id="sangrado" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($sangrado == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($sangrado == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
    
                        <div class="col-md-3" id="nivel_1" style="display: none;">
                            <strong style="font-size: 14px; margin-top: 50px;">Nivel </strong>
                            <select name="nivel" id="nivel" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione"<?php if ($nivel == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Cerebro"<?php if ($nivel == 'Cerebro') echo 'selected'; ?>>Cerebro</option>
                                <option value="Encías"<?php if ($nivel == 'Encías') echo 'selected'; ?>>Encías</option>
                                <option value="Genitourinario"<?php if ($nivel == 'Genitourinario') echo 'selected'; ?>>Genitourinario</option>
                                <option value="Otro"<?php if ($nivel == 'Otro') echo 'selected'; ?>>Otro</option>
                            </select>
                        </div>
                        <div class="col-md-12" id="fecha_sangrado_1" style="display: none;">
                            <strong style="font-size: 14px; margin-top: 50px;">Fecha de Sangrado</strong>
                            <input type="date" class="control form-control" id="fecha_sangrado"
                                name="fecha_sangrado" style="font-size: 13px;" value="<?php echo $fecha_sangrado; ?>">
                        </div>

                    </div>
                </div>
    
    
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(155, 165, 209) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Factor de Riesgo</h5>
                </div>
    
                <div class="row "> <!-- DIV DE ROW DEL FACTOR DE RIESGO-->
    
                    <div class="col-md-4">
                        <span style="font-size:14px;">Enfermedad Vascular Cerebral</span>
                        <input type="checkbox" name="EVC" id="EVC" value="Si" style="font-size:14px;" <?php if ($evc == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-2">
                        <span style="font-size: 14px;">Hipertensión</span>
                        <input type="checkbox" name="Hipertension" id="hipertension" value="Si" style="font-size: 14px;" <?php if ($hipertension == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-2">
                        <span style="font-size: 14px;">Diabetes</span>
                        <input type="checkbox" name="Diabetes" id="Diabetes" value="Si" style="font-size: 14px;" <?php if ($diabetes == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-2">
                        <span style="font-size: 14px;">Tabaquismo</span>
                        <input type="checkbox" name="Tabaquismo" id="Tabaquismo" value="Si" style="font-size: 14px;" <?php if ($tabaquismo == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-2">
                        <span style="font-size: 14px;">Covid</span>
                        <input type="checkbox" name="Covid" id="Covid" value="Si" style="font-size: 14px;" <?php if ($covid == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-1"></div>
    
                    <div class="col-md-3 style=" margin-top: 10px;">
                        <span style="font-size: 14px;">Hiperlipidemia</span>
                        <input type="checkbox" name="Hiperlipidemia" id="Hiperlipidemia" value="Si"
                            style="font-size: 14px;" <?php if ($hiperlipidemia == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-3">
                        <span style="font-size: 14px;">Apnea de Sueño</span>
                        <input type="checkbox" name="Apnea" id="Apnea" value="Si" style="font-size: 14px;" <?php if ($apnea == 'Si') echo "checked"; ?>>
                    </div>
    
                    <div class="col-md-4">
                        <span style="font-size: 14px;">Enfermedad Cardiovascular </span>
                        <input type="checkbox" name="Apnea" id="Apnea" value="Si" style="font-size: 14px;" <?php if ($enfcardio == 'Si') echo "checked"; ?>>
                    </div>
    
                </div> <!-- DIV FINAL DE ROW DEL FACTOR DE RIESGO-->
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(155, 165, 209);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Código de EVC</h5>
                </div>
    
                <div class="row"> <!-- CÓDIGO DE EVC -->
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px; margin-top: 50px;">Se Activa Código EVC</strong>
                        <select name="se_activa" id="se_activa" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($activacion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($activacion == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px; margin-top: 50px;">Defunción</strong>
                        <select name="defuncion" id="defuncion" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($defuncion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($defuncion == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px; margin-top: 50px;">Área</strong>
                        <select name="area" id="area" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($area == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Urgencias"<?php if ($area == 'Urgencias') echo 'selected'; ?>>Urgencias</option>
                            <option value="Hospitalización"<?php if ($area == 'Hospitalización') echo 'selected'; ?>>Hospitalización</option>
    
                        </select>
                    </div>

                    <br>
                    <div class="col-md-12" id="equipo_multi">
                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                                background-color:rgb(171, 153, 193,0.5);
                                color:rgb(255, 255, 255);
                                margin-top:15px;
                                font-size: 14px;">
                                Equipo Multidisciplinario</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span style="font-size:12px;">Personal Médico Adscrito Urgencias</span>
                                <input type="checkbox" name="pmau" id="pmau" style="font-size:14px;" <?php if ($pmau == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Personal de Admisión Hospitalaria</span>
                                <input type="checkbox" name="pah" id="pah" style="font-size:14px;" <?php if ($pah == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Personal de Enfermería</span>
                                <input type="checkbox" name="peia" id="peia" style="font-size:14px;" <?php if ($peia == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Personal de Imagenología</span>
                                <input type="checkbox" name="pim" id="pim" style="font-size:14px;" <?php if ($pim == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Personal de Laboratorio</span>
                                <input type="checkbox" name="plio" id="plio" style="font-size:14px;" <?php if ($plio == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Personal de CISFA</span>
                                <input type="checkbox" name="pcisfa" id="pcisfa" style="font-size:14px;" <?php if ($pcisfa == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Trabajo Social</span>
                                <input type="checkbox" name="ts" id="ts" style="font-size:14px;" <?php if ($ts == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Camillero</span>
                                <input type="checkbox" name="camillero" id="camillero" style="font-size:14px;" <?php if ($camillero == 'Si') echo "checked"; ?>>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size:12px;">Médico neurólogo</span>
                                <input type="checkbox" name="med_neuro" id="med_neuro" style="font-size:14px;" <?php if ($med_neuro == 'Si') echo "checked"; ?>>
                            </div>


                        </div>
                    </div>
    
                </div><!-- CÓDIGO DE EVC -->
    
    
                <!-- HORA DE REGISTRO -->
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(155, 165, 209) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Puertas</h5>
                </div>
    
    
                <div class="col-md-12">
                    <strong style="font-size: 14px; ">Hora de llegada Urgencias</strong>
                    <input id="tiempo_urgencias" name="tiempo_urgencias" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_llegada; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de Atención TRIAGE</strong>
                    <input id="tiempo_TRIAGE" name="tiempo_TRIAGE" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_triage; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Puerta-TRIAGE</strong>
                    <input type="text" id="puerta_triage" name="puerta_triage" class="control form-control"
                        style="font-size: 13pz;"  value="<?php echo $puerta_triage; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de Atención CHOQUE</strong>
                    <input id="tiempo_CHOQUE" name="tiempo_CHOQUE" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_choque; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Puerta-URGENCIAS</strong>
                    <input type="text" id="puerta_urgencias" name="puerta_urgencias" class="control form-control"
                        style="font-size: 13pz;"  value="<?php echo $puerta_urgencias; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de Realización TAC</strong>
                    <input id="tiempo_TAC" name="tiempo_TAC" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_tac; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Puerta-TAC</strong>
                    <input type="text" id="puerta_tac" name="puerta_tac" class="control form-control"
                        style="font-size: 13pz;"  value="<?php echo $puerta_tac; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de Atención Equipo Multidisciplinario</strong>
                    <input id="tiempo_Multidisciplinario" name="tiempo_Multidisciplinario" type="time"
                        class="control form-control" style="font-size: 13px;" value="<?php echo $hora_em; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Puerta-MÉDICOS</strong>
                    <input type="text" id="puerta_medicos" name="puerta_medicos" class="control form-control"
                        style="font-size: 13pz;"  value="<?php echo $puerta_medicos; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de Inicio de Trombolisis</strong>
                    <input id="tiempo_Trombolisis" name="tiempo_Trombolisis" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_trombo; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Puerta-AGUJA</strong>
                    <input type="text" id="puerta_aguja" name="puerta_aguja" class="control form-control"
                        style="font-size: 13pz;"   value="<?php echo $puerta_aguja; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de Ingreso a Terapia</strong>
                    <input id="tiempo_Terapia" name="tiempo_Terapia" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_terapia; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Terapia Intensiva</strong>
                    <input type="text" id="puerta_terapia" name="puerta_terapia" class="control form-control"
                        style="font-size: 13pz;"  value="<?php echo $terapia_intensiva; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px; ">Hora de TAC-Control</strong>
                    <input id="tiempo_tac" name="tiempo_tac" type="time" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $hora_tac_control; ?>">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 14px;">TAC-Control</strong>
                    <input type="text" id="puerta_taccontrol" name="puerta_taccontrol" class="control form-control"
                        style="font-size: 13pz;"  value="<?php echo $tac_control; ?>">
                </div>
    
    
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(155, 165, 209);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Escalas de Rehabilitación</h5>
                </div>
    
                <div class="row"> <!--  div del row de Escalas de Rehabilitacion -->
    
                    <div class="col-md-6">
                        <strong style="font-size: 14px; margin-top: 50px;">Val. Inicial de Rehabilitación</strong>
                        <select name="Valoracioninicial_Rehabi" id="Valoracioninicial_Rehabi" class="form-control"
                            style="font-size: 14px;">
                            <option value="Negado"<?php if ($inicial == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($inicial == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
                    <div class="col-md-6">
                        <strong style="font-size: 14px; margin-top: 50px;">Val. Rehabilitación Hospitalaria</strong>
                        <select name="valoracion_hospitalaria" id="valoracion_hospitalaria" class="form-control"
                            style="font-size: 14px;">
                            <option value="Negado"<?php if ($hospitalaria == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si<?php if ($hospitalaria == 'Si') echo 'selected'; ?>">Si</option>
                        </select>
                    </div>
    
    
                </div>
    
    
                <!-- ESCALAS -->
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(171, 153, 193,0.5);
                            color:rgb(255, 255, 255);
                            margin-top:15px;
                            font-size: 14px;">
                        Escalas</h5>
                </div>
    
                <div class="row">
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px; margin-top: 50px;">Dependencia Funcional</strong>
                        <select name="dependendcia_funcional" id="dependendcia_funcional" class="form-control"
                            style="font-size: 14px;">
                            <option value="Negado"<?php if ($df_nivel == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($df_nivel == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
    
                    <div class="col-md-4" id="depedencia" style="display:none">
                        <strong style="font-size: 14px; margin-top: 50px;">Dependencia Funcional-Nivel</strong>
                        <select name="dependendcia_tipo" id="dependendcia_tipo" class="form-control"
                            style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($df == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Leve"<?php if ($df == 'Leve') echo 'selected'; ?>>Leve</option>
                            <option value="Moderado"<?php if ($df == 'Moderado') echo 'selected'; ?>>Moderado</option>
                            <option value="Severo"<?php if ($df == 'Severo') echo 'selected'; ?>>Severo</option>
                        </select>
                    </div>
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">FIM Inicial </strong>
                        <input type="number" step="any" class="form-control" id="fim_inicial" name="fim_inicial"
                            style="font-size: 13px;" value="<?php echo $fim; ?>">
                    </div>
    
    
                    <div class="col-md-6">
                        <strong style="font-size: 14px; margin-top: 50px;">Barthel Inicial</strong>
                        <select name="bart" id="bart" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($barthel == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Menos de 20 dependencia Total"<?php if ($barthel == 'Menos de 20 dependencia Total') echo 'selected'; ?>>Menos de 20 dependencia Total </option>
                            <option value="20-35 Dependencia Severa"<?php if ($barthel == '20-35 Dependencia Severa') echo 'selected'; ?>>20-35 Dependencia Severa</option>
                            <option value="40-55 Dependencia Moderada"<?php if ($barthel == '40-55 Dependencia Moderada') echo 'selected'; ?>>40-55 Dependencia Moderada</option>
                            <option value="60-95 Dependencia Leve"<?php if ($barthel == '60-95 Dependencia Leve') echo 'selected'; ?>>60-95 Dependencia Leve</option>
                            <option value="95-100 Independencia "<?php if ($barthel == '95-100 Independencia ') echo 'selected'; ?>>95-100 Independencia </option>
                        </select>
                    </div>
    
                    <div class="col-md-6">
                        <strong style="font-size: 14px; margin-top: 50px;">RANKIN</strong>
                        <select name="rank" id="rank" class="form-control"
                            style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($rankin == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="0 Sin Sintomas A pesar de sintomas  realiza actividades cotidianas."<?php if ($rankin == '0 Sin Sintomas A pesar de sintomas  realiza actividades cotidianas.') echo 'selected'; ?>>0 Sin
                                Sintomas A pesar de sintomas realiza actividades cotidianas.</option>
                            <option
                                value="2 Incapacidad Leve. Incapaz de realizar actividades  previas  pero capaz de  hacer alguna actividad sin asistencia ."<?php if ($rankin == '2 Incapacidad Leve. Incapaz de realizar actividades  previas  pero capaz de  hacer alguna actividad sin asistencia .') echo 'selected'; ?>>
                                2 Incapacidad Leve. Incapaz de realizar actividades previas pero capaz de hacer alguna
                                actividad sin asistencia .</option>
                            <option value="3 Incapacidad Moderada  Requiere alguna ayuda pero capaz de caminar sin ayuda."<?php if ($rankin == '3 Incapacidad Moderada  Requiere alguna ayuda pero capaz de caminar sin ayuda.') echo 'selected'; ?>>3
                                Incapacidad Moderada Requiere alguna ayuda pero capaz de caminar sin ayuda.</option>
                            <option
                                value="4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda"<?php if ($rankin == '4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda') echo 'selected'; ?>>
                                4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus
                                necesidades corporales sin ayuda</option>
                            <option
                                value="5 Incapacidad Severa  Confinado a cama,incontinente y requiere cuidado constante."<?php if ($rankin == '5 Incapacidad Severa  Confinado a cama,incontinente y requiere cuidado constante.') echo 'selected'; ?>>5
                                Incapacidad Severa Confinado a cama,incontinente y requiere cuidado constante.</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong style="font-size: 14px;">Motricity Index </strong>
                        <input type="number" step="any" class="form-control" id="motri" name="motri"
                            style="font-size: 13px;" value="<?php echo $motri; ?>">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 14px; margin-top: 50px;">Marcha FAC</strong>
                        <select name="marcha" id="marcha" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($marcha == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="0 Sin deambulación"<?php if ($marcha == '0 Sin deambulación') echo 'selected'; ?>>0 Sin deambulación</option>
                            <option value="1 Deambulación funcional"<?php if ($marcha == '1 Deambulación funcional') echo 'selected'; ?>>1 Deambulación funcional</option>
                            <option value="2 Deambulación Hogar"<?php if ($marcha == '2 Deambulación Hogar') echo 'selected'; ?>>2 Deambulación Hogar</option>
                            <option value="3 Deambulación cerca de casa"<?php if ($marcha == '3 Deambulación cerca de casa') echo 'selected'; ?>>3 Deambulación cerca de casa</option>
                            <option value="4 Independiente en la comunidad"<?php if ($marcha == '4 Independiente en la comunidad') echo 'selected'; ?>>4 Independiente en la comunidad</option>
                            <option value="5 Normal"<?php if ($marcha == '5 Normal') echo 'selected'; ?>>5 Normal</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 14px;">Agatha</strong>
                        <input type="text" step="any" class="form-control" id="agatha" name="agatha"
                            style="font-size: 13px;" value="<?php echo $agatha; ?>">
                    </div>
    
    
                </div> <!--  div del row de Escalas de Rehabilitacion -->
    
                <!-- SECUELAS -->
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(171, 153, 193,0.5);
                            color:rgb(255, 255, 255);
                            margin-top:15px;
                            font-size: 14px;">
                        Secuelas</h5>
                </div>
    
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Deglución</strong>
                    <select name="deglucion" id="deglucion" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($deglucion == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Negado"<?php if ($deglucion == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($deglucion == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
    
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Lenguaje</strong>
                    <select name="Lenguaje" id="Lenguaje" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($lenguaje == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Negado"<?php if ($lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($lenguaje == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Motor</strong>
                    <select name="Motor" id="Motor" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($motor == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Negado"<?php if ($motor == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($motor == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
    
                <div class="col-md-3" id="motor_extramidadsuperior" style="display: none">
                    <strong style="font-size: 14px;">Extremidad Superior</strong>
                    <select name="Extremidad_superior" id="Extremidad_superior" class="form-control"
                        style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($extr_sup == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Derecha<?php if ($extr_sup == 'Derecha') echo 'selected'; ?>">Derecha</option>
                        <option value="Izquierda"<?php if ($extr_sup == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                        <option value="Bilateral"<?php if ($extr_sup == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                    </select>
                </div>
    
                <div class="col-md-3" id="motor_extramidadinferior" style="display: none">
                    <strong style="font-size: 14px;">Extremidad Inferior</strong>
                    <select name="Extremidad_Inferior" id="Extremidad_Inferior" class="form-control"
                        style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($extr_inf == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Derecha"<?php if ($extr_inf == 'Derecha') echo 'selected'; ?>>Derecha</option>
                        <option value="Izquierda"<?php if ($extr_inf == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                        <option value="Bilateral"<?php if ($extr_inf == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                    </select>
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Dolor</strong>
                    <select name="Dolor" id="Dolor" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($dolor == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Neuropatico"<?php if ($dolor == 'Neuropatico') echo 'selected'; ?>>Neuropático</option>
                        <option value="Somatico"<?php if ($dolor == 'Somatico') echo 'selected'; ?>>Somatico</option>
                    </select>
                </div>
    
                <div class="col-md-3" id="dolor_neuropatico" style="display:none">
                    <strong style="font-size: 14px;">Tipo-Neuropático</strong>
                    <input type="text" class="control form-control" id="neuropatico" name="neuropatico"
                        style="font-size: 13px;" value="<?php echo $tipo_neuro; ?>">
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Cognitivo</strong>
                    <select name="Cognitivo" id="Cognitivo" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($cognitivo == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($cognitivo == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($cognitivo == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Interconsulta</strong>
                    <select name="interconsulta" id="interconsulta" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($interconsulta == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($interconsulta == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($interconsulta == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Neuropsicología</strong>
                    <input type="text" class="control form-control" id="neuropsicologia" name="neuropsicologia"
                        style="font-size: 13px;"  value="<?php echo $neuro; ?>">
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Marcha</strong>
                    <select name="Marcha" id="Marcha" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($marcha == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Dependiente"<?php if ($marcha == 'Dependiente') echo 'selected'; ?>>Dependiente</option>
                        <option value="Independiente"<?php if ($marcha == 'Independiente') echo 'selected'; ?>>Independiente</option>
                    </select>
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Equilibrio</strong>
                    <input type="text" class="control form-control" id="Equilibrio" name="Equilibrio"
                        style="font-size: 13px;"  value="<?php echo $equilibrio; ?>">
                </div>
    
    
            </div> <!-- DIV ROW LINEA 11 --> <br>
    
    
            <div class="modal-footer">
    
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
            <br>
        </div>
    </form>

    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>



</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/puertas_script.js"></script>
<script src="js/scripteditar.js"></script>

<script type="module">
    import { editForm } from "./js/update.js";
    editForm();
</script>


</html>