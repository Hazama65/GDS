<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Estadística de Rehabilitación</title>
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


        <h5>Seguimiento Estadística de Rehabilitación</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <div class="row">

            <div style="background-color: rgb(106, 158, 218);
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                <h6>Datos del Terapeuta</h6>
            </div>


            <div class="col-md-6">
                <strong style="font-size: 13px;">Nombre Terapeuta</strong>
                <input id="nombre_terapeuta_seg" name="nombre_terapeuta_seg" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">Turno</strong>
                <select name="Turno_terapeutai_seg" id="Turno_terapeutai_seg" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Jornada">Jornada</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                </select>
            </div>

            <div class="col-md-6"style="display:none;">
                <strong style="font-size: 13px;">Fecha de registro</strong>
                <input id="fecha_registro_seg" name="fecha_registro_seg" type="date" class="control form-control" value="" style="font-size: 13px;" readonly>
            </div>

            <div class="form-header">
                <h5 class="form-title" style="text-align: center;
                            background-color:rgb(106, 158, 218);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                    Datos del Paciente</h5>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">Nombre del Paciente</strong>
                <input id="nombre_paciente_seg" name="nombre_paciente_seg" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>



            <div class="col-md-3">
                <strong style="font-size: 13px;">CURP</strong>
                <input id="curp_seg" name="curp_seg" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                <input id="fecha_seg" name="fecha_seg" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
            </div>
            <div class="col-md-3">
                <strong style="font-size: 14px;">Edad</strong>
                <input id="edad_seg" name="edad_seg" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 14px;">Sexo</strong>
                <input type="text" class="control form-control" id="sexo_seg" onclick="curp2date();" name="sexo_seg" style="font-size: 13px;" readonly>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Tipo de Paciente</strong>
                <select name="tipo_paciente_seg" id="tipo_paciente_seg" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Pediatrico">Pediatrico</option>
                    <option value="Adulto">Adulto</option>
                </select>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Tipo de Consulta</strong>
                <select name="tipo_consulta_seg" id="tipo_consulta_seg" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Primera Vez">Primera Vez</option>
                    <option value="Subsecuente">Subsecuente</option>
                </select>
            </div>



            <div class="col-md-3" id="num_sesiones_seg" style="display:none;">
                <strong style="font-size: 13px;">Número de Sesiones</strong>
                <input id="sesiones_num_seg" name="sesiones_num_seg" type="number" class="control form-control" value="" style="font-size: 13px;">
            </div>
            <!-- ************************Antecedentes Patologícos********************************* -->
            <div class="form-header">
                <h6 class="form-title" style="text-align: center;
                            background-color: rgb(106, 158, 218) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                    Terapias y Procedimientos</h6>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">Tipo de Terapias</strong>
                <select name="tipo_terapias_seg" id="tipo_terapias_seg" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Terapias ambulatorias">Terapias ambulatorias</option>
                    <option value="Terapias en Hospitalización ">Terapias en Hospitalización </option>
                </select>
            </div>



            <!-- Procedimientos -->

            <div class="container" id="Procedimientos_seg">
                <div class="form-header">
                    <h6 class="form-title" style="text-align: center;
                            background-color: rgb(106, 158, 218,0.5) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;"> Procedimientos</h6>
                </div>

                <div class="row">

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Terapia fisica</span>
                        <input type="checkbox" name="terapia_fisica_seg" id="terapia_fisica_seg" value="Terapia fisica" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Terapia ocupacional</span>
                        <input type="checkbox" name="terapia_ocupacional_seg" id="terapia_ocupacional_seg" value="Terapia ocupacional" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Terapia de lenguaje</span>
                        <input type="checkbox" name="terapia_lenguaje_seg" id="terapia_lenguaje_seg" value="Terapia de lenguaje" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Aplicación de férula</span>
                        <input type="checkbox" name="aplicacion_ferula_seg" id="aplicacion_ferula_seg" value="Aplicación de férula" style="font-size:14px; margin: 5px auto; display: block;">
                    </div><br> <br>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Aplicación de vendaje enyesado</span>
                        <input type="checkbox" name="Aplicacion_vendaje_enyesado_seg" id="Aplicacion_vendaje_enyesado_seg" value="Aplicación de vendaje enyesado" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>


                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Baño de parafina</span>
                        <input type="checkbox" name="Baño_parafina_seg" id="Baño_parafina_seg" value="Baño de parafina" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">CHC/CF</span>
                        <input type="checkbox" name="CHC_CF_seg" id="CHC_CF_seg" value="CHC/CF" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>


                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Corrientes interfereciales</span>
                        <input type="checkbox" name="Corrientes_interfereciales_seg" id="Corrientes_interfereciales_seg" value="Corrientes interfereciales" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>
                    <br> <br>
                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Electroestimulación</span>
                        <input type="checkbox" name="Electroestimulacion_seg" id="Electroestimulacion_seg" value="Electroestimulación" style="font-size:14px; margin: 5px auto; display: block;">

                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ejercicio Asistido</span>
                        <input type="checkbox" name="Ejercicio_Asistido_seg" id="Ejercicio_Asistido_seg" value="Ejercicio Asistido" style="font-size:14px; margin: 5px auto; display: block;">

                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ejercicio de Fisioterapia</span>
                        <input type="checkbox" name="Ejercicio_Fisioterapia_seg" id="Ejercicio_Fisioterapia_seg" value="Ejercicio de Fisioterapia" style="font-size:14px; margin: 5px auto; display: block;">

                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Hidroterapia/Tanque Terapéutico</span>
                        <input type="checkbox" name="Hidroterapia_TanqueTerapéutico_seg" id="Hidroterapia_TanqueTerapéutico_seg" value="Hidroterapia/Tanque Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <br> <br>
                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Hidroterapia/Tina de Habbard</span>
                        <input type="checkbox" name="Hidroterapia_Tina_Habbard_seg" id="Hidroterapia_Tina_Habbard_seg" value="Hidroterapia/Tina de Habbard" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Hidroterapia/Tina de Remolinos</span>
                        <input type="checkbox" name="Hidroterapia_Tina_Remolinos_seg" id="Hidroterapia_Tina_Remolinos_seg" value="Hidroterapia/Tina de Remolinos" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">TENS</span>
                        <input type="checkbox" name="TENS" id="TENS_seg" value="TENS_seg" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Terapia combinada USG y Corriente Eléctrica</span>
                        <input type="checkbox" name="TerapiacombinadaUSG_CorrienteEléctrica_seg" id="TerapiacombinadaUSG_CorrienteEléctrica_seg" value="Terapia combinada USG y Corriente Eléctrica" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <br><br>
                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ultrasonido Terapéutico</span>
                        <input type="checkbox" name="Ultrasonido_Terapeutico_seg" id="Ultrasonido_Terapeutico_seg" value="Ultrasonido Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Tracción Cervical y Lumbar</span>
                        <input type="checkbox" name="TraccionCervical_Lumbar_seg" id="TraccionCervical_Lumbar_seg" value="Tracción Cervical y Lumbar" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Rehabilitacion Cardíaca</span>
                        <input type="checkbox" name="Rehabi_cardiaca_seg" id="Rehabi_cardiaca_seg" value="Rehabilitacion Cardíaca" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ejercicio respiratorio (R. Pulmonar)</span>
                        <input type="checkbox" name="Ejercicios_respiratorio_seg" id="Ejercicios_respiratorio_seg" value="Ejercicio respiratorio (R. Pulmonar)" style="font-size:14px; margin: 5px auto; display: block;">
                    </div> <br> <br>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Terapia Laser</span>
                        <input type="checkbox" name="Terapia_Laser_seg" id="Terapia_Laser_seg" value="Terapia Laser" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-3" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Toxina Botulinica</span>
                        <input type="checkbox" name="Toxina_Botulinica_seg" id="Toxina_Botulinica_seg" value="Toxina Botulinica" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                </div>








            </div>

            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Guardar Seguimiento</button>
            </div><br><br>
        </div><br>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/seguimiento.js"></script>


</html>