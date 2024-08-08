<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Verifica si el usuario ha iniciado sesión y si tiene el sistema correcto
if (!isset($_SESSION['valid_user']) || $_SESSION['system_type'] !== 'estadistica_rehab') {
    // Si el usuario no ha iniciado sesión o no tiene permiso para este sistema
    header('Location: ../login/index.php');
    exit;
}
include ('php/controllers/edit.controller.php');
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
        <form id="seguimiento_ER" method="POST">
            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div style="background-color: rgb(106, 158, 218);
                            color:rgb(255, 255, 255);
                            text-align: center;
                            margin-top: 20px;">
                    <h6>Datos del Terapeuta</h6>
                </div>


                <div class="col-md-6">
                    <strong style="font-size: 13px;">Nombre Terapeuta</strong>
                    <select name="nombre_terapeuta_seg" id="nombre_terapeuta_seg" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                        <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                        <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                        <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                        <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                        <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                    </select>
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

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(106, 158, 218);
                                color: aliceblue;
                                margin-top:10px;
                                font-size: 14px;">
                        Datos del Seguimiento</h5>
                </div>


                <div class="col-md-6">
                    <strong style="font-size: 13px;">Número de Sesiones</strong>
                    <input id="sesiones_num_seg" name="sesiones_num_seg" type="number" class="control form-control" value="" style="font-size: 13px;">
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Fecha de Seguimiento</strong>
                    <input id="fecha_seg" name="fecha_seg" type="date" class="control form-control" value="" style="font-size: 13px;" readonly>
                </div>



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
                    <select name="tipo_terapias" id="tipo_terapias" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Terapias ambulatorias">Terapias ambulatorias</option>
                        <option value="Terapias en Hospitalización">Terapias en Hospitalización</option>
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
                            <input type="checkbox" name="terapia_fisica" id="terapia_fisica" value="Terapia fisica" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Terapia ocupacional</span>
                            <input type="checkbox" name="terapia_ocupacional" id="terapia_ocupacional" value="Terapia ocupacional" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Terapia de lenguaje</span>
                            <input type="checkbox" name="terapia_lenguaje" id="terapia_lenguaje" value="Terapia de lenguaje" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Aplicación de férula</span>
                            <input type="checkbox" name="aplicacion_ferula" id="aplicacion_ferula" value="Aplicación de férula" style="font-size:14px; margin: 5px auto; display: block;">
                        </div><br> <br>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Aplicación de vendaje enyesado</span>
                            <input type="checkbox" name="Aplicacion_vendaje_enyesado" id="Aplicacion_vendaje_enyesado" value="Aplicación de vendaje enyesado" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>


                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Baño de parafina</span>
                            <input type="checkbox" name="Baño_parafina" id="Baño_parafina" value="Baño de parafina" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">CHC/CF</span>
                            <input type="checkbox" name="CHC_CF" id="CHC_CF" value="CHC/CF" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>


                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Corrientes interfereciales</span>
                            <input type="checkbox" name="Corrientes_interfereciales" id="Corrientes_interfereciales" value="Corrientes interfereciales" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <br> <br>
                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Electroestimulación</span>
                            <input type="checkbox" name="Electroestimulacion" id="Electroestimulacion" value="Electroestimulación" style="font-size:14px; margin: 5px auto; display: block;">

                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ejercicio Asistido</span>
                            <input type="checkbox" name="Ejercicio_Asistido" id="Ejercicio_Asistido" value="Ejercicio Asistido" style="font-size:14px; margin: 5px auto; display: block;">

                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ejercicio de Fisioterapia</span>
                            <input type="checkbox" name="Ejercicio_Fisioterapia" id="Ejercicio_Fisioterapia" value="Ejercicio de Fisioterapia" style="font-size:14px; margin: 5px auto; display: block;">

                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hidroterapia/Tanque Terapéutico</span>
                            <input type="checkbox" name="Hidroterapia_TanqueTerapéutico" id="Hidroterapia_TanqueTerapéutico" value="Hidroterapia/Tanque Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <br> <br>
                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hidroterapia/Tina de Habbard</span>
                            <input type="checkbox" name="Hidroterapia_Tina_Habbard" id="Hidroterapia_Tina_Habbard" value="Hidroterapia/Tina de Habbard" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hidroterapia/Tina de Remolinos</span>
                            <input type="checkbox" name="Hidroterapia_Tina_Remolinos" id="Hidroterapia_Tina_Remolinos" value="Hidroterapia/Tina de Remolinos" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">TENS</span>
                            <input type="checkbox" name="TENS" id="TENS" value="TENS" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Terapia combinada USG y Corriente Eléctrica</span>
                            <input type="checkbox" name="TerapiacombinadaUSG_CorrienteEléctrica" id="TerapiacombinadaUSG_CorrienteEléctrica" value="Terapia combinada USG y Corriente Eléctrica" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <br><br>
                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ultrasonido Terapéutico</span>
                            <input type="checkbox" name="Ultrasonido_Terapeutico" id="Ultrasonido_Terapeutico" value="Ultrasonido Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tracción Cervical y Lumbar</span>
                            <input type="checkbox" name="TraccionCervical_Lumbar" id="TraccionCervical_Lumbar" value="Tracción Cervical y Lumbar" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Rehabilitacion Cardíaca</span>
                            <input type="checkbox" name="Rehabi_cardiaca" id="Rehabi_cardiaca" value="Rehabilitacion Cardíaca" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ejercicio respiratorio (R. Pulmonar)</span>
                            <input type="checkbox" name="Ejercicios_respiratorio" id="Ejercicios_respiratorio" value="Ejercicio respiratorio (R. Pulmonar)" style="font-size:14px; margin: 5px auto; display: block;">
                        </div> <br> <br>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Terapia Laser</span>
                            <input type="checkbox" name="Terapia_Laser" id="Terapia_Laser" value="Terapia Laser" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Toxina Botulinica</span>
                            <input type="checkbox" name="Toxina_Botulinica" id="Toxina_Botulinica" value="Toxina Botulinica" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                    </div>








                </div>

                <div style="display: flex; justify-content: flex-end; align-items: center;">
                    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Guardar Seguimiento</button>
                </div><br><br>
            </div><br>
        </form>
    </div>

        <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js\scripseguimiento.js"></script>

    <script type="module">
        import { seguimientoForm } from "./js/seguimiento.js";
        seguimientoForm();
    </script>


</body>


</html>