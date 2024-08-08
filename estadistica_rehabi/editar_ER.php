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
    <title>Editar</title>
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


        <h5>Editar Registro Estadística de Rehabilitación</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>



    <div class="container">
        <form id="editar_ER" method="POST">
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
                    <select name="nombre_terapeuta" id="nombre_terapeuta" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($nombre_terapeuta== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="L.T.F Ana Carolina Flores Morelos"<?php if ($nombre_terapeuta== 'L.T.F Ana Carolina Flores Morelos') echo 'selected'; ?>>L.T.F Ana Carolina Flores Morelos</option>
                        <option value="L.T.O Ana Violeta De La Paz Gonzalez"<?php if ($nombre_terapeuta== 'L.T.O Ana Violeta De La Paz Gonzalez') echo 'selected'; ?>>L.T.O Ana Violeta De La Paz Gonzalez</option>
                        <option value="L.T.O Ana Violeta De La Paz Gonzalez"<?php if ($nombre_terapeuta== 'L.T.O Ana Violeta De La Paz Gonzalez') echo 'selected'; ?>>L.T.O Ana Violeta De La Paz Gonzalez</option>
                        <option value="L.T.C.H Fonseca Ayala Mariana"<?php if ($nombre_terapeuta== 'L.T.C.H Fonseca Ayala Mariana') echo 'selected'; ?>>L.T.C.H Fonseca Ayala Mariana</option>
                        <option value="L.T.C.H Katia Mayte De La Paz Gonzalez"<?php if ($nombre_terapeuta== 'L.T.C.H Katia Mayte De La Paz Gonzalez') echo 'selected'; ?>>L.T.C.H Katia Mayte De La Paz Gonzalez</option>
                        <option value="L.T.C.H Monjaras Bernal Isis Giovana"<?php if ($nombre_terapeuta== 'L.T.C.H Monjaras Bernal Isis Giovana') echo 'selected'; ?>>L.T.C.H Monjaras Bernal Isis Giovana</option>
                        <option value="L.T.F Aurea Guadalupe Hernández Salazar."<?php if ($nombre_terapeuta== 'L.T.F Aurea Guadalupe Hernández Salazar.') echo 'selected'; ?>>L.T.F Aurea Guadalupe Hernández Salazar.</option>
                        <option value="L.T.F Aurea Guadalupe Hernández Salazar."<?php if ($nombre_terapeuta== 'L.T.F Aurea Guadalupe Hernández Salazar.') echo 'selected'; ?>>L.T.F Aurea Guadalupe Hernández Salazar.</option>
                        <option value="L.T.F Brenda Roxana Monjaras Bernal"<?php if ($nombre_terapeuta== 'L.T.F Brenda Roxana Monjaras Bernal') echo 'selected'; ?>>L.T.F Brenda Roxana Monjaras Bernal</option>
                        <option value="L.T.F Brenda Roxana Monjaras Bernal"<?php if ($nombre_terapeuta== 'L.T.F Brenda Roxana Monjaras Bernal') echo 'selected'; ?>>L.T.F Brenda Roxana Monjaras Bernal</option>
                        <option value="L.T.F Diana Carolina Villegas Bannack."<?php if ($nombre_terapeuta== 'L.T.F Diana Carolina Villegas Bannack.') echo 'selected'; ?>>L.T.F Diana Carolina Villegas Bannack.</option>
                        <option value="L.T.F Estephanie García Martinez"<?php if ($nombre_terapeuta== 'L.T.F Estephanie García Martinez') echo 'selected'; ?>>L.T.F Estephanie García Martinez</option>
                        <option value="L.T.F Juan Carlos Reyna Mayorga"<?php if ($nombre_terapeuta== 'L.T.F Juan Carlos Reyna Mayorga') echo 'selected'; ?>>L.T.F Juan Carlos Reyna Mayorga</option>
                        <option value="L.T.F Maria Teresa De Jesus Perez Rios"<?php if ($nombre_terapeuta== 'L.T.F Maria Teresa De Jesus Perez Rios') echo 'selected'; ?>>L.T.F Maria Teresa De Jesus Perez Rios</option>
                        <option value="L.T.F Monserrat Ocampo García"<?php if ($nombre_terapeuta== 'L.T.F Monserrat Ocampo García') echo 'selected'; ?>>L.T.F Monserrat Ocampo García</option>
                        <option value="L.T.F Monserrat Ocampo García"<?php if ($nombre_terapeuta== 'L.T.F Monserrat Ocampo García') echo 'selected'; ?>>L.T.F Monserrat Ocampo García</option>
                        <option value="L.T.F Najla Karina Gelista Tovar"<?php if ($nombre_terapeuta== 'L.T.F Najla Karina Gelista Tovar') echo 'selected'; ?>>L.T.F Najla Karina Gelista Tovar</option>
                        <option value="L.T.F Negrete Rubio David Israel"<?php if ($nombre_terapeuta== 'L.T.F Negrete Rubio David Israel') echo 'selected'; ?>>L.T.F Negrete Rubio David Israel</option>
                        <option value="L.T.O Briseida Guevara Leyva"<?php if ($nombre_terapeuta== 'L.T.O Briseida Guevara Leyva') echo 'selected'; ?>>L.T.O Briseida Guevara Leyva</option>
                        <option value="L.T.O Lopez Sanchez Andrea Berenice"<?php if ($nombre_terapeuta== 'L.T.O Lopez Sanchez Andrea Berenice') echo 'selected'; ?>>L.T.O Lopez Sanchez Andrea Berenice</option>
                        <option value="P.T.C.H Espejo Rodríguez Erika Daniela"<?php if ($nombre_terapeuta== 'P.T.C.H Espejo Rodríguez Erika Daniela') echo 'selected'; ?>>P.T.C.H Espejo Rodríguez Erika Daniela</option>
                        <option value="P.T.F Diana Sofia Arceo Ramirez"<?php if ($nombre_terapeuta== 'P.T.F Diana Sofia Arceo Ramirez') echo 'selected'; ?>>P.T.F Diana Sofia Arceo Ramirez</option>
                        <option value="P.T.F Eloisa Medina Galicia"<?php if ($nombre_terapeuta== 'P.T.F Eloisa Medina Galicia') echo 'selected'; ?>>P.T.F Eloisa Medina Galicia</option>
                        <option value="P.T.F Mariana Quintero Flores"<?php if ($nombre_terapeuta== 'P.T.F Mariana Quintero Flores') echo 'selected'; ?>>P.T.F Mariana Quintero Flores</option>
                        <option value="P.T.F Valeria Yamilet Albarran Casanova"<?php if ($nombre_terapeuta== 'P.T.F Valeria Yamilet Albarran Casanova') echo 'selected'; ?>>P.T.F Valeria Yamilet Albarran Casanova</option>
                    </select>
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 13px;">Turno</strong>
                    <select name="Turno_terapeuta" id="Turno_terapeuta" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Turno_terapeuta== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Jornada"<?php if ($Turno_terapeuta== 'Jornada')echo 'selected'; ?>>Jornada</option>
                        <option value="Matutino"<?php if ($Turno_terapeuta== 'Matutino')echo 'selected'; ?>>Matutino</option>
                        <option value="Vespertino"<?php if ($Turno_terapeuta== 'Vespertino')echo 'selected'; ?>>Vespertino</option>
                    </select>
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
                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $nombre_paciente; ?>">
                </div>
    
    
    
                <div class="col-md-3">
                    <strong style="font-size: 13px;">CURP</strong>
                    <input id="curp" name="curp" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $curp; ?>">
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly value="<?php echo $fecha; ?>">
                </div>
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" style="font-size: 13px;" readonly value="<?php echo $edad; ?>">
                </div>
    
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly value="<?php echo $sexo; ?>">
                </div>
    
                <div class="col-md-2">
                    <strong style="font-size: 13px;">Tipo de Paciente</strong>
                    <select name="tipo_paciente" id="tipo_paciente" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($tipo_paciente== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Pediatrico"<?php if ($tipo_paciente== 'Pediatrico')echo 'selected'; ?>>Pediatrico</option>
                        <option value="Adulto"<?php if ($tipo_paciente== 'Adulto')echo 'selected'; ?>>Adulto</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px; ">Fecha Incio (Tratamiento)</strong>
                    <input id="fecha_inicio" name="fecha_inicio" type="date" class="control form-control" style="font-size: 13px;" required value="<?php echo $fecha_inicio; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px; ">Fecha Fin (Tratamiento)</strong>
                    <input id="fecha_fin" name="fecha_fin" type="date" class="control form-control" style="font-size: 13px;" required value="<?php echo $fecha_fin; ?>">
                </div>

                <!-- Procedimientos -->
    
                <div class="container" id="Procedimientos">
                    <div class="form-header">
                    <h6 class="form-title" style="text-align: center;
                                background-color: rgb(106, 158, 218) ;
                                color: aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Terapias</h6>
                    </div>
    
                    <div class="row">
    
                        <div class="col-md-3" id="div_sesiones_num_terapia_fisica">
                            <strong style="font-size: 13px;">Número de Terapias fisicas</strong>
                            <input id="sesiones_num_terapia_fisica" name="sesiones_num_terapia_fisica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_terapia_fisica; ?>">
                        </div>

                        <div class="col-md-2" id="div_primera_vez_terapia_fisica">
                            <strong style="font-size: 13px;">Primera Vez</strong>
                            <input id="primera_vez_terapia_fisica" name="primera_vez_terapia_fisica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $primera_vez_terapia_fisica; ?>">
                        </div>

                        <div class="col-md-2" id="div_subsecuente_terapia_fisica">
                            <strong style="font-size: 13px;">Subsecuente</strong>
                            <input id="subsecuente_terapia_fisica" name="subsecuente_terapia_fisica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $subsecuente_terapia_fisica; ?>">
                        </div>

                        <div class="col-md-2" id="div_terapias_ambulatorias_terapia_fisica">
                            <strong style="font-size: 13px;">Terapias ambulatorias</strong>
                            <input id="terapias_ambulatorias_terapia_fisica" name="terapias_ambulatorias_terapia_fisica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $terapias_ambulatorias_terapia_fisica; ?>">
                        </div>

                        <div class="col-md-2" id="div_terapias_hospitalizacion_terapia_fisica">
                            <strong style="font-size: 13px;">Terapias en Hospitalización</strong>
                            <input id="terapias_hospitalizacion_terapia_fisica" name="terapias_hospitalizacion_terapia_fisica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $terapias_hospitalizacion_terapia_fisica; ?>">
                        </div>

                        <div class="col-md-3" id="div_sesiones_num_terapia_ocupacional">
                            <strong style="font-size: 13px;">Número de Terapia ocupacional</strong>
                            <input id="sesiones_num_terapia_ocupacional" name="sesiones_num_terapia_ocupacional" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_terapia_ocupacional; ?>">
                        </div>

                        <div class="col-md-2" id="div_primera_vez_terapia_ocupacional">
                            <strong style="font-size: 13px;">Primera Vez</strong>
                            <input id="primera_vez_terapia_ocupacional" name="primera_vez_terapia_ocupacional" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $primera_vez_terapia_ocupacional; ?>">
                        </div>

                        <div class="col-md-2" id="div_subsecuente_terapia_ocupacional">
                            <strong style="font-size: 13px;">Subsecuente</strong>
                            <input id="subsecuente_terapia_ocupacional" name="subsecuente_terapia_ocupacional" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $subsecuente_terapia_ocupacional; ?>">
                        </div>

                        <div class="col-md-2" id="div_terapias_ambulatorias_terapia_ocupacional">
                            <strong style="font-size: 13px;">Terapias ambulatorias</strong>
                            <input id="terapias_ambulatorias_terapia_ocupacional" name="terapias_ambulatorias_terapia_ocupacional" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $terapias_ambulatorias_terapia_ocupacional; ?>">
                        </div>

                        <div class="col-md-2" id="div_terapias_hospitalizacion_terapia_ocupacional">
                            <strong style="font-size: 13px;">Terapias en Hospitalización</strong>
                            <input id="terapias_hospitalizacion_terapia_ocupacional" name="terapias_hospitalizacion_terapia_ocupacional" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $terapias_hospitalizacion_terapia_ocupacional; ?>">
                        </div>

                        <div class="col-md-3" id="div_sesiones_num_terapia_lenguaje">
                            <strong style="font-size: 13px;">Número de Terapia de lenguaje</strong>
                            <input id="sesiones_num_terapia_lenguaje" name="sesiones_num_terapia_lenguaje" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_terapia_lenguaje; ?>">
                        </div>

                        <div class="col-md-2" id="div_primera_vez_terapia_lenguaje">
                            <strong style="font-size: 13px;">Primera Vez</strong>
                            <input id="primera_vez_terapia_lenguaje" name="primera_vez_terapia_lenguaje" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $primera_vez_terapia_lenguaje; ?>">
                        </div>

                        <div class="col-md-2" id="div_subsecuente_terapia_lenguaje">
                            <strong style="font-size: 13px;">Subsecuente</strong>
                            <input id="subsecuente_terapia_lenguaje" name="subsecuente_terapia_lenguaje" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $subsecuente_terapia_lenguaje; ?>">
                        </div>

                        <div class="col-md-2" id="div_terapias_ambulatorias_terapia_lenguaje">
                            <strong style="font-size: 13px;">Terapias ambulatorias</strong>
                            <input id="terapias_ambulatorias_terapia_lenguaje" name="terapias_ambulatorias_terapia_lenguaje" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $terapias_ambulatorias_terapia_lenguaje; ?>">
                        </div>

                        <div class="col-md-2" id="div_terapias_hospitalizacion_terapia_lenguaje">
                            <strong style="font-size: 13px;">Terapias en Hospitalización</strong>
                            <input id="terapias_hospitalizacion_terapia_lenguaje" name="terapias_hospitalizacion_terapia_lenguaje" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $terapias_hospitalizacion_terapia_lenguaje; ?>">
                        </div>
                    </div>

                    <div class="form-header">
                    <h6 class="form-title" style="text-align: center;
                                background-color: rgb(106, 158, 218) ;
                                color: aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Procedimientos</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-2" id="div_sesiones_num_aplicacion_ferula">
                            <strong style="font-size: 13px;">Número de Aplicación de férula</strong>
                            <input id="sesiones_num_aplicacion_ferula" name="sesiones_num_aplicacion_ferula" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_aplicacion_ferula; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Aplicacion_vendaje_enyesado">
                            <strong style="font-size: 13px;">Número de Aplicación de vendaje enyesado</strong>
                            <input id="sesiones_num_Aplicacion_vendaje_enyesado" name="sesiones_num_Aplicacion_vendaje_enyesado" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Aplicacion_vendaje_enyesado; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Baño_parafina">
                            <strong style="font-size: 13px;">Número de Baño de parafina</strong>
                            <input id="sesiones_num_Baño_parafina" name="sesiones_num_Baño_parafina" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Baño_parafina; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_CHC_CF">
                            <strong style="font-size: 13px;">Número de CHC/CF</strong>
                            <input id="sesiones_num_CHC_CF" name="sesiones_num_CHC_CF" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_CHC_CF; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Corrientes_interfereciales">
                            <strong style="font-size: 13px;">Número de Corrientes interfereciales</strong>
                            <input id="sesiones_num_Corrientes_interfereciales" name="sesiones_num_Corrientes_interfereciales" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Corrientes_interfereciales; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Electroestimulacion">
                            <strong style="font-size: 13px;">Número de Electroestimulación</strong>
                            <input id="sesiones_num_Electroestimulacion" name="sesiones_num_Electroestimulacion" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Electroestimulacion; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Ejercicio_Asistido">
                            <strong style="font-size: 13px;">Número de Ejercicio Asistido</strong>
                            <input id="sesiones_num_Ejercicio_Asistido" name="sesiones_num_Ejercicio_Asistido" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Ejercicio_Asistido; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Ejercicio_Fisioterapia">
                            <strong style="font-size: 13px;">Número de Ejercicio de Fisioterapia</strong>
                            <input id="sesiones_num_Ejercicio_Fisioterapia" name="sesiones_num_Ejercicio_Fisioterapia" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Ejercicio_Fisioterapia; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Hidroterapia_TanqueTerapéutico">
                            <strong style="font-size: 13px;">Número de Hidroterapia/Tanque Terapéutico</strong>
                            <input id="sesiones_num_Hidroterapia_TanqueTerapéutico" name="sesiones_num_Hidroterapia_TanqueTerapéutico" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Hidroterapia_TanqueTerapéutico; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Hidroterapia_Tina_Habbard">
                            <strong style="font-size: 13px;">Número de Hidroterapia/Tina de Habbard</strong>
                            <input id="sesiones_num_Hidroterapia_Tina_Habbard" name="sesiones_num_Hidroterapia_Tina_Habbard" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Hidroterapia_Tina_Habbard; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Hidroterapia_Tina_Remolinos">
                            <strong style="font-size: 13px;">Número de Hidroterapia/Tina de Remolinos</strong>
                            <input id="sesiones_num_Hidroterapia_Tina_Remolinos" name="sesiones_num_Hidroterapia_Tina_Remolinos" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Hidroterapia_Tina_Remolinos; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_TENS">
                            <strong style="font-size: 13px;">Número de TENS</strong>
                            <input id="sesiones_num_TENS" name="sesiones_num_TENS" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_TENS; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica">
                            <strong style="font-size: 13px;">Número de Terapia combinada USG y Corriente Eléctrica</strong>
                            <input id="sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica" name="sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Ultrasonido_Terapeutico">
                            <strong style="font-size: 13px;">Número de Ultrasonido Terapéutico</strong>
                            <input id="sesiones_num_Ultrasonido_Terapeutico" name="sesiones_num_Ultrasonido_Terapeutico" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Ultrasonido_Terapeutico; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_TraccionCervical_Lumbar">
                            <strong style="font-size: 13px;">Número de Tracción Cervical y Lumbar</strong>
                            <input id="sesiones_num_TraccionCervical_Lumbar" name="sesiones_num_TraccionCervical_Lumbar" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_TraccionCervical_Lumbar; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Rehabi_cardiaca">
                            <strong style="font-size: 13px;">Número de Rehabilitacion Cardíaca</strong>
                            <input id="sesiones_num_Rehabi_cardiaca" name="sesiones_num_Rehabi_cardiaca" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Rehabi_cardiaca; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Ejercicios_respiratorio">
                            <strong style="font-size: 13px;">Número de Ejercicio respiratorio (R. Pulmonar)</strong>
                            <input id="sesiones_num_Ejercicios_respiratorio" name="sesiones_num_Ejercicios_respiratorio" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Ejercicios_respiratorio; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Terapia_Laser">
                            <strong style="font-size: 13px;">Número de Terapia Laser</strong>
                            <input id="sesiones_num_Terapia_Laser" name="sesiones_num_Terapia_Laser" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Terapia_Laser; ?>">
                        </div>

                        <div class="col-md-2" id="div_sesiones_num_Toxina_Botulinica">
                            <strong style="font-size: 13px;">Número de Toxina Botulinica</strong>
                            <input id="sesiones_num_Toxina_Botulinica" name="sesiones_num_Toxina_Botulinica" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $sesiones_num_Toxina_Botulinica; ?>">
                        </div>

                    </div>
    
                    <br>
                    <br>

    
                </div><br>
    
                <div style="display: flex; justify-content: flex-end; align-items: center;">
                    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
                </div><br><br>
    
            </div>
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
    <script src="js/scripteditar.js"></script>

    
    <script type="module">
        import { editForm } from "./js/update.js";
        editForm();
    </script>


</body>



</html>