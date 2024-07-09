<?php
include('php/controllers/edit.controller.php');
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

    <title>Seguimiento Clínica EVC (Neurologia)</title>
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


        <h5>Seguimiento Código EVC (Neurologia)</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>

    <form id="seguimiento_n_evc" method="POST" autocomplete="off">
        <div class="container">

            <div class="row">

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                        border-radius: 8px;
                            background-color:rgb(237, 105, 127) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        Datos del Seguimiento</h5>
                </div>

                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Fecha de Seguimiento</strong>
                    <input type="date" class="form-control" id="fecha_seg" name="fecha_seg" style="font-size: 12px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px; ">Fecha de Sintomas</strong>
                    <input id="fecha_inicio" name="fecha_inicio" type="date" class="control form-control" style="font-size: 12px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px; ">Inicio de Sintomas</strong>
                    <input id="inicio_sintomas" name="inicio_sintomas" type="time" class="control form-control" style="font-size: 12px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px; ">Fecha de Atención</strong>
                    <input id="fecha_atencion" name="fecha_atencion" type="date" class="control form-control" style="font-size: 12px;">
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(155, 165, 209);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        Factor de Riesgo</h5>
                </div>

                <div class="row "> <!-- DIV DE ROW DEL FACTOR DE RIESGO-->

                    <div class="col-md-4">
                        <input type="checkbox" name="EVC" id="EVC" value="Ninguno" style="font-size:12px;">
                        <label for="EVC" style="font-size:12px;">Enfermedad Vascular Cerebral</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="Hipertension_2" id="Hipertension_2" value="Si" style="font-size: 12px;">
                        <label for="Hipertension_2" style="font-size: 12px;">Hipertensión</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="Diabetes" id="Diabetes" value="Si" style="font-size: 12px;">
                        <label for="Diabetes" style="font-size: 12px;">Diabetes</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="Tabaquismo" id="Tabaquismo" value="Si" style="font-size: 12px;">
                        <label for="Tabaquismo" style="font-size: 12px;">Tabaquismo</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="Covid" id="Covid" value="Si" style="font-size: 12px;">
                        <label for="Covid" style="font-size: 12px;">Covid</label>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-3" style="margin-top: 10px;">
                        <input type="checkbox" name="Hiperlipidemia" id="Hiperlipidemia" value="Si" style="font-size: 12px;">
                        <label for="Hiperlipidemia" style="font-size: 12px;">Hiperlipidemia</label>
                    </div>

                    <div class="col-md-3">
                        <input type="checkbox" name="Apnea" id="Apnea" value="Si" style="font-size: 12px;">
                        <label for="Apnea" style="font-size: 12px;">Apnea de Sueño</label>
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="enfermedad_cardio" id="enfermedad_cardio" value="Si" style="font-size: 12px;">
                        <label for="enfermedad_cardio" style="font-size: 12px;">Enfermedad Cardiovascular </label>
                    </div>

                </div> <!-- DIV FINAL DE ROW DEL FACTOR DE RIESGO-->

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(129, 93, 149,0.5) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        Tratamiento</h5>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <input type="checkbox" name="antiagregante" id="antiagregante" value="Ninguno" style="font-size:12px;">
                        <label for="antiagregante" style="font-size:12px;">Antiagregante</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="Anticoagulante" id="Anticoagulante" value="Si" style="font-size: 12px;">
                        <label for="Anticoagulante" style="font-size: 12px;">Anticoagulante</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="estatinas" id="estatinas" value="Si" style="font-size: 12px;">
                        <label for="estatinas" style="font-size: 12px;">Estatinas</label>
                    </div>

                    <div class="col-md-2">
                        <input type="checkbox" name="Cerebrolisina_med" id="Cerebrolisina_med" value="Si" style="font-size: 12px;">
                        <label for="Cerebrolisina_med" style="font-size: 12px;">Cerebrolisina</label>
                    </div>

                </div>

                <div class="container" id="estatinas_dosistiempo" style="display:none;">
                    <div class="row">

                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Estatinas</strong>
                            <select name="Estatinas_med" id="Estatinas_med" class="form-select" style="font-size: 12px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Atorvastatina">Atorvastatina</option>
                                <option value="Pravastatina">Pravastatina</option>
                                <option value="Rosuvastatina">Rosuvastatina</option>
                                <option value="Simvastatina">Simvastatina</option>
                                <option value="Ninguno">Ninguno</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="dosis_cere">
                            <strong style="font-size: 12px; margin-top: 50px;">Dosis-Estatinas</strong>
                            <input type="number" class="control form-control" id="dosis_Estatinas" name="dosis_Estatinas" style="font-size: 12px;">
                        </div>

                        <div class="col-md-4" id="tiempo_cere">
                            <strong style="font-size: 12px; margin-top: 50px;">Tiempo-Estatinas</strong>
                            <input type="text" class="control form-control" id="tiempo_Estatinas" name="tiempo_Estatinas" style="font-size: 12px;">
                        </div>

                    </div>
                </div>



                <div class="container" id="none_cerebrolisina" style="display:none;">
                    <div class="row">

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(129, 93, 149,0.4) ;
                            color:aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                                Cerebrolisina</h5>
                        </div>
                        <div class="col-md-4" id="Cerebrolisina_1">
                            <strong style="font-size: 12px; margin-top: 50px;">Cerebrolisina</strong>
                            <select name="cerebrolisina" id="cerebrolisina" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="dosis_cere">
                            <strong style="font-size: 12px; margin-top: 50px;">Dosis</strong>
                            <input type="number" class="control form-control" id="dosis_cerebro" name="dosis_cerebro" style="font-size: 12px;">
                        </div>

                        <div class="col-md-4" id="tiempo_cere">
                            <strong style="font-size: 12px; margin-top: 50px;">Tiempo</strong>
                            <input type="text" class="control form-control" id="tiempo_cerebro" name="tiempo_cerebro" style="font-size: 12px;">
                        </div>

                    </div>
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(237, 105, 127);
                            color:aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        Trombolisis</h5>
                </div>

                <div class="container" id="parametros_nihss">
                    <div class="row">
                        <div class="col-md-3" id="trombolisis_1">
                            <strong style="font-size: 12px; margin-top: 50px;">Trombolisis</strong>
                            <select name="trombolisis" id="trombolisis" class="form-control" style="font-size: 12px;" onchange="actualizarColorTrombolisis()">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="si_rtpa">
                            <strong style="font-size: 12px; margin-top: 50px;">r-TPA</strong>
                            <select name="r_TPA_1" id="r_TPA_1" class="form-control" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Alteplasa">Alteplasa</option>
                                <option value="Tenecteplasa">Tenecteplasa</option>
                                <option value="Reteplasa">Reteplasa</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="sangrado_1">
                            <strong style="font-size: 12px; margin-top: 50px;">Sangrado</strong>
                            <select name="sangrado" id="sangrado" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="nivel_1">
                            <strong style="font-size: 12px; margin-top: 50px;">Nivel </strong>
                            <select name="nivel" id="nivel" class="form-control" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Cerebro">Cerebro</option>
                                <option value="Encías">Encías</option>
                                <option value="Genitourinario">Genitourinario</option>
                                <option value="Gastrico">Gastrico</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="fecha_sangrado_1">
                            <strong style="font-size: 12px; margin-top: 50px;">Fecha de Sangrado</strong>
                            <input type="date" class="control form-control" id="fecha_sangrado" name="fecha_sangrado" style="font-size: 12px;">
                        </div>

                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                        background-color:rgb(127, 184, 235);
                        color: aliceblue;
                        margin-top:17px;
                        font-size: 15px;"> Escalas </h5>
                </div>



                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(127, 184, 235,0.7);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        NIHHS</h5>
                </div>



                <div class="col-md-12" id="escala_nihss_seg">
                    <strong style="font-size: 12px; margin-top: 50px;">Escala NIHSS</strong>
                    <select name="escala_nihss_seg" id="escala_nihss_seg" class="form-control" style="font-size: 12px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="1-4 Leve">1- 4 Leve</option>
                        <option value="5-15 Moderado">5- 15 Moderado</option>
                        <option value="16-20 Moderado Severo">16- 20 Moderado Severo</option>
                        <option value="21-42 Severo">21- 42 Severo</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(127, 184, 235,0.7);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        RANKIN</h5>
                </div>



                <div class="col-md-12">
                    <strong style="font-size: 12px; margin-top: 50px;">RANKIN</strong>
                    <select name="rankin_seguimiento" id="rankin_seguimiento" class="form-control" style="font-size: 12px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="0 Sin Sintomas A pesar de sintomas  realiza actividades cotidianas.">0 Sin
                            Sintomas A pesar de sintomas realiza actividades cotidianas.</option>
                        <option value="2 Incapacidad Leve. Incapaz de realizar actividades  previas  pero capaz de  hacer alguna actividad sin asistencia .">
                            2 Incapacidad Leve. Incapaz de realizar actividades previas pero capaz de hacer alguna
                            actividad sin asistencia .</option>
                        <option value="3 Incapacidad Moderada  Requiere alguna ayuda pero capaz de caminar sin ayuda.">3
                            Incapacidad Moderada Requiere alguna ayuda pero capaz de caminar sin ayuda.</option>
                        <option value="4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda">
                            4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus
                            necesidades corporales sin ayuda</option>
                        <option value="5 Incapacidad Severa  Confinado a cama,incontinente y requiere cuidado constante.">5
                            Incapacidad Severa Confinado a cama,incontinente y requiere cuidado constante.</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                        border-radius: 8px;
                        background-color:rgb(127, 184, 235,0.7);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 12px;">
                        HAS-BLED</h5>
                </div>

                <fieldset>
                    <legend>
                        <div class="container">
                            <div class="row">
                                <!-- Columna izquierda -->


                                <!-- Columna derecha -->
                                <div class="col-md-6">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="Alcoholismo_HAS" id="Alcoholismo_HAS" value="1" style="font-size:12px;">
                                        <label for="Alcoholismo_HAS" style="font-size:12px;">Alcoholismo</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="ACVPREV_HAS" id="ACVPREV_HAS" value="1" style="font-size:12px;">
                                        <label for="ACVPREV_HAS" style="font-size:12px;">ACV previo</label>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <input type="checkbox" name="funcionrenal_HAS" id="funcionrenal_HAS" value="1" style="font-size:12px;">
                                        <label for="funcionrenal_HAS" style="font-size:12px;">Función Renal Anómala</label>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <input type="checkbox" name="EdadSup_HAS" id="EdadSup_HAS" value="1" style="font-size:12px;">
                                        <label for="EdadSup_HAS" style="font-size:12px;">Edad superior a 65 años</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="checkbox" name="funcionhepatica_HAS" id="funcionhepatica_HAS" value="1" style="font-size:12px;">
                                        <label for="funcionhepatica_HAS" style="font-size:12px;">Función Hepática anormal</label>
                                    </div>

                                    <div class="col-md-8">
                                        <input type="checkbox" name="Hipertension_HAS" id="Hipertension_HAS" value="1" style="font-size:12px;">
                                        <label for="Hipertension_HAS" style="font-size:12px;">Hipertensión Arterial (PAS>160 mm Hg)</label>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="checkbox" name="Hemorragiaimportante_HAS" id="Hemorragiaimportante_HAS" value="1" style="font-size:12px;">
                                        <label for="Hemorragiaimportante_HAS" style="font-size:12px;">Hemorragia importante previa o predisposición</label>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="checkbox" name="medicacionaines_HAS" id="medicacionaines_HAS" value="1" style="font-size:12px;">
                                        <label for="medicacionaines_HAS" style="font-size:12px;">Medicación predisponente (Antiagregantes, AINES):</label>
                                    </div>



                                    <div class="col-md-12">
                                        <input type="checkbox" name="INR_HAS" id="INR_HAS" value="1" style="font-size:12px;">
                                        <label for="INR_HAS" style="font-size:12px;">INR lábil (menos del 60% del tiempo en rango terapéutico)</label>
                                    </div>



                                </div>

                                <div class="col-md-6">

                                <div class="col-md-5"></div>
                                <div class="col-md-5"></div>
                                <br>
                                    <div class="col-md-4">
                                        <strong style="font-size: 12px; margin-top: 50px;">Puntuación HAS-BLED</strong>
                                        <input type="number" class="control form-control" id="puntuacion_has" name="puntuacion_has" style="font-size: 12px;" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <strong style="font-size: 12px; margin-top: 50px;">Interpretación</strong>
                                        <input type="text" class="control form-control" id="interpretacion_has" name="interpretacion_has" style="font-size: 12px;" readonly>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </legend>
                </fieldset>





                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            border-radius: 8px;
                            background-color:rgb(127, 184, 235,0.7);
                            color:aliceblue;
                            margin-top:15px;
                            font-size: 12px;">
                        CHADS2</h5>
                </div>

                <fieldset>
                <legend>

                <div class="container" style="background-color:rgb(255, 255, 255); border-radius:8px;">
                    <div class="row">
                        <div class="col-md-6 row">

                            <div class="col-md-8">
                                <input id="E0" type="radio" name="E" value="0" size="2" onchange="calculateCHADS2VASc()">
                                <label for="E0" style="font-size:12px;">Edad menor de 60 años</label>
                            </div>


                            <div class="col-md-8">
                                <input id="E1" type="radio" name="E" value="1" size="2" onchange="calculateCHADS2VASc()">
                                <label for="E1" style="font-size:12px;">Edad entre 65 y 74 años</label>
                            </div>


                            <div class="col-md-8">
                                <input id="E2" type="radio" name="E" value="2" size="2" onchange="calculateCHADS2VASc()">
                                <label for="E2" style="font-size:12px;">Edad 75 años o mayor</label>
                            </div>



                            <div class="col-md-8">
                                <input id="ICC" type="checkbox" name="ICC" value="1" size="2" onchange="calculateCHADS2VASc()">
                                <label for="ICC" style="font-size:12px;">Historia de Insuf. Cardiaca Congestiva</label>
                            </div>


                            <div class="col-md-12">
                                <input id="HT" type="checkbox" name="HT" value="1" size="2" onchange="calculateCHADS2VASc()">
                                <label for="HT" style="font-size:12px;">Hipertensión actual (>140/90 mm Hg), o entratamiento</label>
                            </div>


                            <div class="col-md-8">
                                <input id="HA" type="checkbox" name="HA" value="2" size="2" onchange="calculateCHADS2VASc()">
                                <label for="HA" style="font-size:12px;">ACV, AIT o embolismo previo</label>
                            </div>



                            <div class="col-md-8">
                                <input id="HEV" type="checkbox" name="HEV" value="1" size="2" onchange="calculateCHADS2VASc()">
                                <label for="HEV" style="font-size:12px;">Historia de Enfermedad Vascular</label>
                            </div>



                            <div class="col-md-8">
                                <input id="D" type="checkbox" name="D" value="1" size="2" onchange="calculateCHADS2VASc()">
                                <label for="D" style="font-size:12px;">Diabetes</label>
                            </div>

                            <div class="col-md-8">
                                <input id="M" type="checkbox" name="M" value="1" size="2" onchange="calculateCHADS2VASc()">
                                <label for="M" style="font-size:12px;">El enfermo es mujer</label>
                            </div>

                        </div>

                        <div class="col-md-6">

                        <div class="col-md-5"></div>
                                <div class="col-md-5"></div>
                                <br>

                            <div class="col-md-4">
                                <strong style="font-size: 12px; margin-top: 50px;">Resultado</strong>
                                <input type="number" class="control form-control" id="chads" name="chads" style="font-size: 12px;" readonly>
                            </div>

                            <div class="col-md-12">
                                <strong style="font-size: 12px; margin-top: 50px;">Riesgo de accidente cerebrovascular
                                    isquémico</strong>
                                <input type="text" class="control form-control" id="riesgo_chads" name="riesgo_chads" style="font-size: 12px;" readonly>
                            </div>

                        </div>

                    </div>
                </div>

                </legend>
                </fieldset>


                <div class="seguimiento_btns">
                    <button type="submit" class="btn btn-primary">Guardar Seguimiento</button>
                </div>
            </div>

        </div>
    </form>


    <div id="loading-overlay" class="loading" style="display:none;">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/chads.js"></script>
<script type="module">
    import {
        seguimientoForm
    } from "./js/seguimiento_n.js";
    seguimientoForm();
</script>

</html>