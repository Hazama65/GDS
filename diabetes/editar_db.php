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

    <title>Diabetes Mellitus</title>
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


        <h5>Diabetes Mellitus</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="container">
        <form id="editar_diabetes" method="POST" autocomplete="off">

            <div style="background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>DATOS GENERALES</h6>
            </div>

            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="col-md-4" id="idcurp">
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" value="<?php echo $curp; ?>" placeholder="CURP" style="font-size: 13px;">
                </div>

                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" value="<?php echo $nombre; ?>" class="control form-control" style="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px; background">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" onblur="curp2date();" value="<?php echo $fecha_nacimiento; ?>" class="control form-control" style="font-size: 13px;" readonly>
                </div>
                <div class="col-md-4">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" value="<?php echo $edad; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" value="<?php echo $sexo; ?>" name="sexo" style="font-size: 13px;" readonly>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Escolaridad</strong>
                    <select name="Escolaridad" id="Escolaridad" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro" <?php if ($escolaridad == 'Sin Registro') echo 'selected'; ?>>Seleccione</option>
                        <option value="Primaria Completa" <?php if ($escolaridad == 'Primaria Completa') echo 'selected'; ?>>Primaria Completa</option>
                        <option value="Primaria Incompleta" <?php if ($escolaridad == 'Primaria Incompleta') echo 'selected'; ?>>Primaria Incompleta</option>
                        <option value="Secundaria Completa" <?php if ($escolaridad == 'Secundaria Completa') echo 'selected'; ?>>Secundaria Completa</option>
                        <option value="Secundaria Incompleta" <?php if ($escolaridad == 'Secundaria Incompleta') echo 'selected'; ?>>Secundaria Incompleta</option>
                        <option value="Preparatoria Completa" <?php if ($escolaridad == 'Preparatoria Completa') echo 'selected'; ?>>Preparatoria Completa</option>
                        <option value="Preparatoria Incompleta" <?php if ($escolaridad == 'Preparatoria Incompleta') echo 'selected'; ?>>Preparatoria Incompleta</option>
                        <option value="Licenciatura Completa" <?php if ($escolaridad == 'Licenciatura Completa') echo 'selected'; ?>>Licenciatura Completa</otion>
                        <option value="Licenciatura Incompleta" <?php if ($escolaridad == 'Licenciatura Incompleta') echo 'selected'; ?>>Licenciatura Incompleta</option>
                        <option value="Doctorado Completo" <?php if ($escolaridad == 'Doctorado Completo') echo 'selected'; ?>>Doctorado Completo</option>
                        <option value="Doctorado Incompleto" <?php if ($escolaridad == 'Doctorado Incompleto') echo 'selected'; ?>>Doctorado Incompleto</option>
                        <option value="Sin Registro" <?php if ($escolaridad == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estado Civil</strong>
                    <select name="Estadocivil" id="Estadocivil" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro">Seleccione</option>
                        <option value="Soltera" <?php if ($estadoCivil == 'Soltera') echo 'selected'; ?>>Soltero</option>
                        <option value="Casada" <?php if ($estadoCivil == 'Casada') echo 'selected'; ?>>Casado</option>
                        <option value="Viuda" <?php if ($estadoCivil == 'Viuda') echo 'selected'; ?>>Viudo</option>
                        <option value="Divorciada" <?php if ($estadoCivil == 'Divorciada') echo 'selected'; ?>>Divorciado</option>
                        <option value="Concubinato" <?php if ($estadoCivil == 'Concubinato') echo 'selected'; ?>>Concubinato</option>
                        <option value="Separada" <?php if ($estadoCivil == 'Separada') echo 'selected'; ?>>Separado</option>
                        <option value="" <?php if ($estadoCivil == '') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estado</strong>
                    <select name="estado" id="estado" class="form-control" style="font-size: 13px;">
                        <?php
                        if (!empty($AllData_Estados)) {
                            foreach ($AllData_Estados as $row1) {
                                $selected = ($row1["Estado_Id"] == $estado) ? 'selected' : '';
                                echo "<option value='" . $row1["Estado_Id"] . "' $selected>" . $row1["NombreEstado"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No hay datos disponibles</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Municipio</strong>
                    <select name="municipio" id="municipio" class="form-control" style="font-size: 13px;">
                        <?php
                        if (!empty($AllData_Municipios)) {
                            foreach ($AllData_Municipios as $row2) {
                                $selected = ($row2["MunicipioID"] == $municipio) ? 'selected' : '';
                                echo "<option value='" . $row2["MunicipioID"] . "' $selected>" . $row2["NombreMunicipio"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No hay datos disponibles</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4"> 
                    <strong style="font-size: 14px;">Referencia</strong>
                    <input list="Clues" type="text" class="form-control" id="referencia" name="referencia" value="<?php echo $referencia; ?>" style="font-size: 13px;">
                </div>

                <datalist id="Clues">
                    <?php
                    if (!empty($AllData_Clues)) {
                        foreach ($AllData_Clues as $row1) {
                            echo "<option value='" . $row1["id_clues"] . "'>" . $row1["nombre_clues"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay datos disponibles</option>";
                    }
                    ?>
                </datalist>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" value="<?php echo $talla; ?>" style="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" value="<?php echo $peso; ?>" name="peso" style="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="<?php echo $imc; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="<?php echo $resultado_imc; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Circunferencia Cintura</strong>
                    <input type="number" step="any" class="form-control" id="circunferencia" value="<?php echo $circunferencia_abdominal; ?>" name="circunferencia" style="font-size: 13px;">
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Derechohabiencia</strong>
                    <select name="derechohabiencia" id="derechohabiencia" class="form-control" style="font-size: 14px;" onchange="mostrarCampos()">
                        <option value="Sin registro" <?php if ($derechoAbiencia == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Si" <?php if ($derechoAbiencia == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No" <?php if ($derechoAbiencia == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-4" id="estudio_socioeconomico_field">
                    <strong style="font-size: 14px;">Estudio Socioeconómico</strong>
                    <select name="estudio_socioeconomico" id="estudio_socioeconomico" class="form-control" style="font-size: 14px;" onchange="mostrarNivel()">
                        <option value="Sin registro" <?php if ($estudio_socioEconomico == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Si" <?php if ($estudio_socioEconomico == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No" <?php if ($estudio_socioEconomico == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-4" id="nivel_field">
                    <strong style="font-size: 14px;">Nivel</strong>
                    <select name="nivel" id="nivel" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione" <?php if ($nivel_economico == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Nx" <?php if ($nivel_economico == 'Nx') echo 'selected'; ?>>Nx</option>
                        <option value="N1" <?php if ($nivel_economico == 'N1') echo 'selected'; ?>>N1</option>
                        <option value="N2" <?php if ($nivel_economico == 'N2') echo 'selected'; ?>>N2</option>
                        <option value="N3" <?php if ($nivel_economico == 'N3') echo 'selected'; ?>>N3</option>
                        <option value="N4" <?php if ($nivel_economico == 'N4') echo 'selected'; ?>>N4</option>
                        <option value="N5" <?php if ($nivel_economico == 'N5') echo 'selected'; ?>>N5</option>
                        <option value="N6" <?php if ($nivel_economico == 'N6') echo 'selected'; ?>>N6</option>
                        <option value="N7" <?php if ($nivel_economico == 'N7') echo 'selected'; ?>>N7</option>
                    </select>
                </div> <br>
                <br>

                <!-- ***********************************ANTECEDENTES HEREDOFAMILIARES*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                            ANTECEDENTES HEREDOFAMILIARES</h5>
                    </div>
                </div>
                <!--===============AH: DIABETES=======================-->

                <div class="col-md-12" id="ah_diabetes">
                    <strong style="font-size: 14px;">Diabetes Mellitus </strong>
                    <select name="diabetesSelect" id="diabetesSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($diabetes_mellitus_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($diabetes_mellitus_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>


                <!--===============HEREDOFAMILIARES DIABETES=======================-->

                <!--===============sI SELECCIONAMOS PADRE =======================-->
                <div class="container" id="heredo_familia">

                    <div class="row">

                        <div class="col-md-3" id="PadreField">
                            <span style="font-size: 14px;">Padre - Tipo DM</span>
                            <select name="tipoPadre" id="tipoPadre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($padre_dm == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Tipo 1" <?php if ($padre_dm == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                                <option value="Tipo 2" <?php if ($padre_dm == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                                <option value="Gestacional" <?php if ($padre_dm == 'Gestacional') echo 'selected'; ?>>Gestacional</option>
                                <option value="MODY" <?php if ($padre_dm == 'MODY') echo 'selected'; ?>>MODY</option>
                                <option value="LADA" <?php if ($padre_dm == 'LADA') echo 'selected'; ?>>LADA</option>
                                <option value="Otra" <?php if ($padre_dm == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE =======================-->
                        <div class="col-md-3" id="MadreField">
                            <span style="font-size: 14px;">Madre - Tipo DM</span>
                            <select name="tipoMadre" id="tipoMadre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($madre_dm == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Tipo 1" <?php if ($madre_dm == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                                <option value="Tipo 2" <?php if ($madre_dm == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                                <option value="Gestacional" <?php if ($madre_dm == 'Gestacional') echo 'selected'; ?>>Gestacional</option>
                                <option value="MODY" <?php if ($madre_dm == 'MODY') echo 'selected'; ?>>MODY</option>
                                <option value="LADA" <?php if ($madre_dm == 'LADA') echo 'selected'; ?>>LADA</option>
                                <option value="Otra" <?php if ($madre_dm == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->

                        <div class="col-md-3" id="Abuelo_MaternoField">
                            <span style="font-size: 14px;">Abuelo Materno - Tipo DM</span>
                            <select name="tipoAbueloMaterno" id="tipoAbueloMaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_materno_dm == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Tipo 1" <?php if ($abuelo_materno_dm == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                                <option value="Tipo 2" <?php if ($abuelo_materno_dm == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                                <option value="Gestacional" <?php if ($abuelo_materno_dm == 'Gestacional') echo 'selected'; ?>>Gestacional</option>
                                <option value="MODY" <?php if ($abuelo_materno_dm == 'MODY') echo 'selected'; ?>>MODY</option>
                                <option value="LADA" <?php if ($abuelo_materno_dm == 'LADA') echo 'selected'; ?>>LADA</option>
                                <option value="Otra" <?php if ($abuelo_materno_dm == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA =======================-->
                        <div class="col-md-3" id="Abuela_MaternaField">
                            <span style="font-size: 14px;">Abuela Materna - Tipo DM</span>
                            <select name="tipoAbuelaMaterna" id="tipoAbuelaMaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_materna_dm == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Tipo 1" <?php if ($abuela_materna_dm == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                                <option value="Tipo 2" <?php if ($abuela_materna_dm == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                                <option value="Gestacional" <?php if ($abuela_materna_dm == 'Gestacional') echo 'selected'; ?>>Gestacional</option>
                                <option value="MODY" <?php if ($abuela_materna_dm == 'MODY') echo 'selected'; ?>>MODY</option>
                                <option value="LADA" <?php if ($abuela_materna_dm == 'LADA') echo 'selected'; ?>>LADA</option>
                                <option value="Otra" <?php if ($abuela_materna_dm == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                        <div class="col-md-3" id="Abuelo_PaternoField">
                            <span style="font-size: 14px;">Abuelo Paterno - Tipo DM</span>
                            <select name="tipoAbueloPaterno" id="tipoAbueloPaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_paterno_dm == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Tipo 1" <?php if ($abuelo_paterno_dm == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                                <option value="Tipo 2" <?php if ($abuelo_paterno_dm == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                                <option value="Gestacional" <?php if ($abuelo_paterno_dm == 'Gestacional') echo 'selected'; ?>>Gestacional</option>
                                <option value="MODY" <?php if ($abuelo_paterno_dm == 'MODY') echo 'selected'; ?>>MODY</option>
                                <option value="LADA" <?php if ($abuelo_paterno_dm == 'LADA') echo 'selected'; ?>>LADA</option>
                                <option value="Otra" <?php if ($abuelo_paterno_dm == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO =======================-->

                        <div class="col-md-3" id="Abuela_PaternaField">
                            <span style="font-size: 14px;">Abuela Paterna - Tipo DM</span>
                            <select name="tipoAbuelaPaterna" id="tipoAbuelaPaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_paterna_dm == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Tipo 1" <?php if ($abuela_paterna_dm == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                                <option value="Tipo 2" <?php if ($abuela_paterna_dm == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                                <option value="Gestacional" <?php if ($abuela_paterna_dm == 'Gestacional') echo 'selected'; ?>>Gestacional</option>
                                <option value="MODY" <?php if ($abuela_paterna_dm == 'MODY') echo 'selected'; ?>>MODY</option>
                                <option value="LADA" <?php if ($abuela_paterna_dm == 'LADA') echo 'selected'; ?>>LADA</option>
                                <option value="Otra" <?php if ($abuela_paterna_dm == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA =======================-->

                        <div class="col-md-3" id="HermanaField">
                            <span style="font-size: 14px;">Número de Hermanas-DM </span>
                            <input type="number" step="any" class="form-control" id="num_hermanas" name="num_hermanas" value="<?php echo $no_hermanas_dm; ?>" style="font-size: 14px;">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO =======================-->

                        <div class="col-md-3" id="HermanoField">
                            <span style="font-size: 14px;">Número de Hermanos- DM</span>
                            <input type="number" step="any" class="form-control" id="num_hermanos" name="num_hermanos" value="<?php echo $no_hermanos_dm; ?>" style="font-size: 14px;">
                        </div>

                    </div> <!--===========DIV CONTAINER DIABETES ================--> <br>
                </div> <!--=========== DIV DEL ROW DE DIABETES ================-->



                <!--===============     Hipertensión Arterial =======================-->

                <div class="col-md-12" id="ah_Hipertension">
                    <strong style="font-size: 14px;">Hipertensión Arterial </strong>
                    <select name="hipertensionSelect" id="hipertensionSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($hipertension_arterial_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($hipertension_arterial_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===============Hipertensión Arterial Heredofamiliar  =======================-->

                <div class="container" id="HAS_familia">

                    <div class="row">

                        <div class="col-md-3" id="PadreHAS">
                            <span style="font-size: 14px;">Padre - HAS</span>
                            <select name="HAS_Padre" id="HAS_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($padre_has == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($padre_has == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE  HAS=======================-->
                        <div class="col-md-3" id="MadreHAS">
                            <span style="font-size: 14px;">Madre - HAS</span>
                            <select name="HAS_Madre" id="HAS_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($madre_has == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($madre_has == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO HAS=======================-->

                        <div class="col-md-3" id="Abuelo_MaternoHAS">
                            <span style="font-size: 14px;">Abuelo Materno - HAS</span>
                            <select name="AbueloM_HAS" id="AbueloM_HAS" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_materno_has == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_materno_has == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA HAS  =======================-->
                        <div class="col-md-3" id="Abuela_MaternaHAS">
                            <span style="font-size: 14px;">Abuela Materno - HAS</span>
                            <select name="AbuelaM_HAS" id="AbuelaM_HAS" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_materna_has == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_materna_has == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO HAS =======================-->
                        <div class="col-md-3" id="Abuelo_PaternoHAS">
                            <span style="font-size: 14px;">Abuelo Paterno - HAS</span>
                            <select name="AbueloP_HAS" id="AbueloP_HAS" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_paterno_has == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_paterno_has == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============sI SELECCIONAMOS ABUELA PATERNA HAS =======================-->
                        <div class="col-md-3" id="Abuela_PaternaHAS">
                            <span style="font-size: 14px;">Abuela Paterna - HAS</span>
                            <select name="AbuelaP_HAS" id="AbuelaP_HAS" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_paterna_has == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_paterna_has == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA  HAS =======================-->

                        <div class="col-md-3" id="HermanaHAS">
                            <span style="font-size: 14px;">Número de Hermanas- HAS </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasHAS" name="num_hermanasHAS" value="<?php echo $no_hermanas_has; ?>" style="font-size: 14px;">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO  HAS =======================-->

                        <div class="col-md-3" id="HermanoHAS">
                            <span style="font-size: 14px;">Número de Hermanos- HAS</span>
                            <input type="number" step="any" class="form-control" id="num_hermanosHAS" name="num_hermanosHAS" value="<?php echo $no_hermanos_has; ?>" style="font-size: 14px;">
                        </div>

                    </div><!--===========DIV HAS ================--><br>

                </div> <!--=========== DIV DEL ROW DE HAS ================-->



                <!--=========== HEREDOFAMILIARES DE ENFERMEDADES CARDIOVASCULAR  ================-->

                <div class="col-md-12" id="ah_evc">
                    <strong style="font-size: 14px;">Enfermedad Cardiovascular</strong>
                    <select name="EVCSelect" id="EVCSelect" class="form-control" style="font-size: 14px;" onchange="mostrarOcultarSecciones()">
                        <option value="Negado" <?php if ($enfermedad_cardioVascular_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($enfermedad_cardioVascular_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <!--===========  EVENTO VASCULAR CEREBRAL  ================-->

                <div class="col-md-12" id="ah_ecv">
                    <strong style="font-size: 14px;">Evento Vascular Cerebral</strong>
                    <select name="ECVSelect" id="ECVSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($evento_vascular_cerebral_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($evento_vascular_cerebral_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--=========== HEREDOFAMILIARES DE EVENTO VASCULAR CEREBRAL  ================-->

                <div class="container" id="ECV_familia">

                    <div class="row">

                        <div class="col-md-3" id="PadreECV">
                            <span style="font-size: 14px;">Padre - ECV</span>
                            <select name="ECV_Padre" id="ECV_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($padre_evc == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($padre_evc == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE  ECV=======================-->
                        <div class="col-md-3" id="MadreECV">
                            <span style="font-size: 14px;">Madre - ECV</span>
                            <select name="ECV_Madre" id="ECV_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($madre_evc == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($madre_evc == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO ECV=======================-->

                        <div class="col-md-3" id="Abuelo_MaternoECV">
                            <span style="font-size: 14px;">Abuelo Materno - ECV</span>
                            <select name="AbueloM_ECV" id="AbueloM_ECV" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_materno_evc == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_materno_evc == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA ECV  =======================-->
                        <div class="col-md-3" id="Abuela_MaternaECV">
                            <span style="font-size: 14px;">Abuela Materno - ECV </span>
                            <select name="AbuelaM_ECV" id="AbuelaM_ECV" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_materna_evc == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_materna_evc == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO ECV =======================-->
                        <div class="col-md-3" id="Abuelo_PaternoECV">
                            <span style="font-size: 14px;">Abuelo Paterno - ECV</span>
                            <select name="AbueloP_ECV" id="AbueloP_ECV" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_paterno_evc == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_paterno_evc == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============sI SELECCIONAMOS ABUELA PATERNA ECV =======================-->
                        <div class="col-md-3" id="Abuela_PaternaECV">
                            <span style="font-size: 14px;">Abuela Paterna - ECV</span>
                            <select name="AbuelaP_ECV" id="AbuelaP_ECV" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_paterna_evc == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_paterna_evc == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA  ECV =======================-->

                        <div class="col-md-3" id="HermanaECV">
                            <span style="font-size: 14px;">Número de Hermanas- ECV </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasECV" name="num_hermanasECV" value="<?php echo $no_hermanas_evc; ?>" style="font-size: 14px;">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO ECV =======================-->

                        <div class="col-md-3" id="HermanoECV">
                            <span style="font-size: 14px;">Número de Hermanos- ECV</span>
                            <input type="number" step="any" class="form-control" id="num_hermanosECV" name="num_hermanosECV" value="<?php echo $no_hermanos_evc; ?>" style="font-size: 14px;">
                        </div>

                    </div><!--===========DIV ECV ================--> <br>

                </div> <!--=========== DIV DEL ROW DE ECV ================-->



                <!--=========== Cardiopatía isquémica ================-->

                <div class="col-md-12" id="ah_ci">
                    <strong style="font-size: 14px;">Cardiopatía isquémica</strong>
                    <select name="CardiopatiaSelect" id="CardiopatiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($cardiopatia_isquemica_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($cardiopatia_isquemica_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="container" id="CI_familia">

                    <div class="row">

                        <!--===============sI SELECCIONAMOS PADRE  Cardiopatía isquémica=======================-->

                        <div class="col-md-3" id="PadreCI">
                            <span style="font-size: 14px;">Padre - CI</span>
                            <select name="CI_Padre" id="CI_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($padre_ci == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($padre_ci == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE  Cardiopatía isquémica=======================-->
                        <div class="col-md-3" id="MadreCI">
                            <span style="font-size: 14px;">Madre - CI</span>
                            <select name="CI_Madre" id="CI_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($madre_ci == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($madre_ci == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO Cardiopatía isquémica======================-->

                        <div class="col-md-3" id="Abuelo_MaternoCI">
                            <span style="font-size: 14px;">Abuelo Materno - CI</span>
                            <select name="AbueloM_CI" id="AbueloM_CI" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_materno_ci == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_materno_ci == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA Cardiopatía isquémica =======================-->
                        <div class="col-md-3" id="Abuela_MaternaCI">
                            <span style="font-size: 14px;">Abuela Materno - CI </span>
                            <select name="AbuelaM_CI" id="AbuelaM_CI" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_materna_ci == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_materna_ci == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO Cardiopatía isquémica =======================-->
                        <div class="col-md-3" id="Abuelo_PaternoCI">
                            <span style="font-size: 14px;">Abuelo Paterno - CI</span>
                            <select name="AbueloP_CI" id="AbueloP_CI" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_paterno_ci == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_paterno_ci == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============sI SELECCIONAMOS ABUELA PATERNA Cardiopatía isquémica =======================-->
                        <div class="col-md-3" id="Abuela_PaternaCI">
                            <span style="font-size: 14px;">Abuela Paterna - CI</span>
                            <select name="AbuelaP_CI" id="AbuelaP_CI" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_paterna_ci == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_paterna_ci == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA Cardiopatía isquémica =======================-->

                        <div class="col-md-3" id="HermanaCI">
                            <span style="font-size: 14px;">Número de Hermanas- CI </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasCI" name="num_hermanasCI" value="<?php echo $no_hermanas_ci; ?>" style="font-size: 14px;">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO Cardiopatía isquémica =======================-->

                        <div class="col-md-3" id="HermanoCI">
                            <span style="font-size: 14px;">Número de Hermanos- CI </span>
                            <input type="number" step="any" class="form-control" id="num_hermanosCI" name="num_hermanosCI" value="<?php echo $no_hermanos_ci; ?>" style="font-size: 14px;">
                        </div>

                    </div><!--===========DIV Cardiopatía isquémica ================--> <br>

                </div> <!--=========== DIV DEL ROW DE Cardiopatía isquémica================-->


                <!--========= DISLIPIDEMIA ================-->

                <div class="col-md-12" id="ah_dislipidemia">
                    <strong style="font-size: 14px;">Dislipidemia</strong>
                    <select name="dislipidemiaSelect" id="dislipidemiaSelect" class="form-control" style="font-size: 14px;" onchange="mostrarOcultarSeccionesdislipidemias()">
                        <option value="Negado" <?php if ($dislipidemia_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($dislipidemia_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <!--========= HIPERTRIGLICERIDEMIA ================-->


                <div class="col-md-12" id="ah_trigliceridemia">
                    <strong style="font-size: 14px;">Hipertrigliceridemia</strong>
                    <select name="trigliceridemiaSelect" id="trigliceridemiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($hipertrigliceridemia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($hipertrigliceridemia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="container" id="trigliceridemia_familia">

                    <div class="row">

                        <div class="col-md-3" id="Padre_trigliceridemia">
                            <span style="font-size: 14px;">Padre - HTG</span>
                            <select name="trigliceridemia_Padre" id="trigliceridemia_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($padre_htg == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($padre_htg == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE  HTG=======================-->
                        <div class="col-md-3" id="Madre_trigliceridemia">
                            <span style="font-size: 14px;">Madre - HTG</span>
                            <select name="HTG_Madre" id="HTG_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($madre_htg == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($madre_htg == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO HTG=======================-->

                        <div class="col-md-3" id="AbueloMaterno_trigliceridemia">
                            <span style="font-size: 14px;">Abuelo Materno - HTG</span>
                            <select name="AbueloM_HTG" id="AbueloM_HTG" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_materno_htg == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_materno_htg == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA HTG  =======================-->
                        <div class="col-md-3" id="AbuelaMaterna_trigliceridemia">
                            <span style="font-size: 14px;">Abuela Materno - HTG </span>
                            <select name="AbuelaM_HTG" id="AbuelaM_HTG" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_materna_htg == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_materna_htg == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO HTG =======================-->
                        <div class="col-md-3" id="AbueloPaterno_trigliceridemia">
                            <span style="font-size: 14px;">Abuelo Paterno - HTG</span>
                            <select name="AbueloP_HTG" id="AbueloP_HTG" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_paterno_htg == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_paterno_htg == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============sI SELECCIONAMOS ABUELA PATERNA HTG =======================-->
                        <div class="col-md-3" id="AbuelaPaterna_trigliceridemia">
                            <span style="font-size: 14px;">Abuela Paterna - HTG</span>
                            <select name="AbuelaPaterna_HTG" id="AbuelaPaterna_HTG" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_paterna_htg == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_paterna_htg == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA  HTG =======================-->

                        <div class="col-md-3" id="Hermana_trigliceridemia">
                            <span style="font-size: 14px;">Número de Hermanas- HTG </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasHTG" name="num_hermanasHTG" value="<?php echo $no_hermanas_htg; ?>" style="font-size: 14px;">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO HTG =======================-->

                        <div class="col-md-3" id="Hermano_trigliceridemia">
                            <span style="font-size: 14px;">Número de Hermanos- HTG </span>
                            <input type="number" step="any" class="form-control" id="num_hermanosHTG" name="num_hermanosHTG" value="<?php echo $no_hermanos_htg; ?>" style="font-size: 14px;">
                        </div>

                    </div><!--===========DIV HTG ================--> <br>

                </div> <!--=========== DIV DEL ROW DE HTG ================-->

                <!--=========== DIV DEL ROW DE HTG ================-->



                <!--=========== Hipercolesterolemia================-->

                <div class="col-md-12" id="ah_Hipercolesterolemia">
                    <strong style="font-size: 14px;">Hipercolesterolemia</strong>
                    <select name="HipercolesterolemiaSelect" id="HipercolesterolemiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($hipercolesterolemia_estado == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($hipercolesterolemia_estado == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="container" id="Hipercolesterolemia_familia">

                    <div class="row">

                        <div class="col-md-3" id="Padre_LDL">
                            <span style="font-size: 14px;">Padre -H-LDL</span>
                            <select name="LDL_Padre" id="LDL_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($padre_ldl == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($padre_ldl == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE  H-LDL=======================-->
                        <div class="col-md-3" id="Madre_LDL">
                            <span style="font-size: 14px;">Madre - H-LDL</span>
                            <select name="LDL_Madre" id="LDL_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($madre_ldl == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($madre_ldl == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO H-LDL =======================-->

                        <div class="col-md-3" id="AbueloMaterno_LDL">
                            <span style="font-size: 14px;">Abuelo Materno - H-LDL</span>
                            <select name="AbueloM_LDL" id="AbueloM_LDL" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_materno_ldl == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_materno_ldl == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA H-LDL=======================-->
                        <div class="col-md-3" id="AbuelaMaterna_LDL">
                            <span style="font-size: 14px;">Abuela Materna-H-LDL </span>
                            <select name="AbuelaM_LDL" id="AbuelaM_LDL" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_materna_ldl == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_materna_ldl == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO H-LDL =======================-->
                        <div class="col-md-3" id="AbueloPaterno_LDL">
                            <span style="font-size: 14px;">Abuelo Paterno - H-LDL</span>
                            <select name="AbueloP_LDL" id="AbueloP_LDL" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuelo_paterno_ldl == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuelo_paterno_ldl == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============sI SELECCIONAMOS ABUELA PATERNA H-LDL =======================-->
                        <div class="col-md-3" id="AbuelaPaterna_LDL">
                            <span style="font-size: 14px;">Abuela Paterna - H-LDL</span>
                            <select name="AbuelaP_LDL" id="AbuelaP_LDL" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($abuela_paterna_ldl == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($abuela_paterna_ldl == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA  LDL =======================-->

                        <div class="col-md-3" id="Hermana_LDL">
                            <span style="font-size: 14px;">Número de Hermanas- H-LDL </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasLDL" name="num_hermanasLDL" value="<?php echo $no_hermanas_ldl; ?>" style="font-size: 14px;">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO LDL =======================-->

                        <div class="col-md-3" id="Hermano_trigliceridemia">
                            <span style="font-size: 14px;">Número de Hermanos- H-LDL</span>
                            <input type="number" step="any" class="form-control" id="num_hermanosLDL" name="num_hermanosLDL" value="<?php echo $no_hermanos_ldl; ?>" style="font-size: 14px;">
                        </div>

                    </div><!--===========DIV LDL================--> <br>

                </div> <!--=========== DIV DEL ROW DE LDL================-->


                <!-- **********************************COMORBILIDADES*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:10px">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                            COMORBILIDADES</h5>
                    </div>
                </div>

                <!--=========== -	Enfermedad hepática grasa no alcohólica ================-->
                <div class="col-md-6" id="com_hepato">
                    <strong style="font-size: 14px;">Enfermedad hepática grasa no alcohólica </strong>
                    <select name="HepaticaSelect" id="HepaticaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($EHGNA == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Esteatosis" <?php if ($EHGNA == 'Esteatosis') echo 'selected'; ?>>Esteatosis</option>
                        <option value="Esteatohepatitis" <?php if ($EHGNA == 'Esteatohepatitis') echo 'selected'; ?>>Esteatohepatitis</option>
                        <option value="Cirrosis" <?php if ($EHGNA == 'Cirrosis') echo 'selected'; ?>>Cirrosis</option>
                    </select>
                </div>

                <!--=========== SELECCION DE CIRROSIS Y CHILD-PUGH ================-->
                <div class="col-md-6" id="com_Child">
                    <strong style="font-size: 14px;"> Child-Pugh </strong>
                    <select name="CirrosisSelect" id="CirrosisSelect" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione" <?php if ($Child_Pugh == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="A" <?php if ($Child_Pugh == 'A') echo 'selected'; ?>>A</option>
                        <option value="B" <?php if ($Child_Pugh == 'B') echo 'selected'; ?>>B</option>
                        <option value="C" <?php if ($Child_Pugh == 'C') echo 'selected'; ?>>C</option>
                    </select>
                </div>

                <!--===========Dislipidemia ================-->
                <div class="col-md-6" id="com_dislipidemia">
                    <strong style="font-size: 14px;">Dislipidemia </strong>
                    <select name="DislipidemiaSelect" id="DislipidemiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado" <?php if ($dislipidemia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Hipertrigliceridemia" <?php if ($dislipidemia == 'Hipertrigliceridemia') echo 'selected'; ?>>Hipertrigliceridemia</option>
                        <option value="Hipercolesterolemia" <?php if ($dislipidemia == 'Hipercolesterolemia') echo 'selected'; ?>>Hipercolesterolemia</option>
                        <option value="Hipoalfalipoproteinemia" <?php if ($dislipidemia == 'Hipoalfalipoproteinemia') echo 'selected'; ?>>Hipoalfalipoproteinemia</option>
                        <option value="Mixta" <?php if ($dislipidemia == 'Mixta') echo 'selected'; ?>>Mixta</option>
                    </select>
                </div>

                <!--===========Distiroidismo ================-->
                <div class="col-md-6" id="com_distiroidismo ">
                    <strong style="font-size: 14px">Distiroidismo </strong>
                    <select name="DistiroidismoSelect" id="DistiroidismoSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($distiroidismo == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Hipotiroidismo" <?php if ($distiroidismo == 'Hipotiroidismo') echo 'selected'; ?>>Hipotiroidismo</option>
                        <option value="Hipertiroidismo" <?php if ($distiroidismo == 'Hipertiroidismo') echo 'selected'; ?>>Hipertiroidismo</option>
                        <option value="Bocio" <?php if ($distiroidismo == 'Bocio') echo 'selected'; ?>>Bocio</option>
                    </select>
                </div>

                <!--===========  Cancer ================-->
                <div class="col-md-6" id="com_cancer">
                    <strong style="font-size: 14px">Cancer</strong>
                    <select name="CancerSelect" id="CancerSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($cancer == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($cancer == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===========  Insuficiencia Cardiaca ================-->
                <div class="col-md-6" id="com_insuCardiaca">
                    <strong style="font-size: 14px">Insuficiencia Cardiaca</strong>
                    <select name="Insfuciencia_Cardiaca" id="InsuCardiacaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($insuficiencia_cardiaca == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($insuficiencia_cardiaca == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>


                <!--===========  Disritmias cardiacas ================-->
                <div class="col-md-6" id="com_Disritmiascardiacas">
                    <strong style="font-size: 14px">Disritmias cardiacas</strong>
                    <select name="Disritmias_cardiacas" id="DisritmiasSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($disritmias_cardiacas == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($disritmias_cardiacas == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===========  Osteoporosis ================-->
                <div class="col-md-6" id="com_Osteoporosis">
                    <strong style="font-size: 14px">Osteoporosis</strong>
                    <select name="OsteoporosisSelect" id="OsteoporosisSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($osteoporosis == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($osteoporosis == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===========  Gota/Hiperuricemia  ================-->
                <div class="col-md-6" id="com_Gota">
                    <strong style="font-size: 14px">Gota/Hiperuricemia</strong>
                    <select name="Gota" id="GotaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($gota == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($gota == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--=========== Lupus Eritematoso Sistemico  ================-->
                <div class="col-md-6" id="com_LES">
                    <strong style="font-size: 14px">Lupus Eritematoso Sistemico</strong>
                    <select name="LupusSelect" id="LupusSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($LES == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($LES == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--=========== Artritris Reumatoide   ================-->
                <div class="col-md-6" id="com_atrtitis">
                    <strong style="font-size: 14px">Artritris Reumatoide</strong>
                    <select name="ArtritisSelect" id="ArtritisSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($artritis_reumatoide == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($artritis_reumatoide == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--=========== Artritris Reumatoide   ================-->
                <div class="col-md-6" id="com_hipertension">
                    <strong style="font-size: 14px">Hipertensión Arterial</strong>
                    <select name="HipertensioncomorSelect" id="HipertensioncomorSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($hipertension == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($hipertension == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===========  Síndrome de Cushing    ================-->
                <div class="col-md-6" id="com_cushing">
                    <strong style="font-size: 14px">Síndrome de Cushing </strong>
                    <select name="CushingSelect" id="CushingSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($SC == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($SC == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <!--===========  Al seleeccionar  Cushing    ================-->
                <div class="col-md-6" id="com_sindrome">
                    <strong style="font-size: 14px">Tipo de Cushing </strong>
                    <select name="SindromeSelect" id="SindromeSelect" class="form-control" style="font-size: 14px">
                        <option value="Seleccione" <?php if ($tipo_SC == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Exogeno" <?php if ($tipo_SC == 'Exogeno') echo 'selected'; ?>>Exógeno</option>
                        <option value="Endogeno" <?php if ($tipo_SC == 'Endogeno') echo 'selected'; ?>>Endógeno</option>
                    </select>
                </div>

                <!-- **********************************LABORATORIOS*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                            LABORATORIOS</h5>
                    </div>
                </div>

                <!--===============   Laboratorios -	TGO=======================-->

                <div class="col-md-2">
                    <strong style="font-size: 14px;">TGO</strong>
                    <input type="number" step="any" class="form-control" id="id_TGO" value="<?php echo $TGO; ?>" name="id_TGO">
                </div>
                <!--===============   Laboratorios -	TGP=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">TGP</strong>
                    <input type="number" step="any" class="form-control" id="id_TGP" value="<?php echo $TGP; ?>" name="id_TGP">
                </div>
                <!--===============   Laboratorios -	FA=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">FA</strong>
                    <input type="number" step="any" class="form-control" id="id_FA " value="<?php echo $FA; ?>" name="id_FA">
                </div>
                <!--===============   Laboratorios -	GGT=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">GGT</strong>
                    <input type="number" step="any" class="form-control" id="id_GGT" value="<?php echo $GGT; ?>" name="id_GGT">
                </div>
                <!--===============   Laboratorios -	DHL=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">DHL</strong>
                    <input type="number" step="any" class="form-control" id="id_DHL" value="<?php echo $DHL; ?>" name="id_DHL">
                </div>
                <!--===============   Laboratorios - Proteínas totales=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 13px;">Proteínas totales</strong>
                    <input type="number" step="any" class="form-control" id="id_proteinastotales" value="<?php echo $proteinas_totales; ?>" name="id_proteinastotales">
                </div>
                <!--===============   Laboratorios - Albumina=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Albumina</strong>
                    <input type="number" step="any" class="form-control" id="id_Albumina" value="<?php echo $albumina; ?>" name="id_Albumina">
                </div>
                <!--===============   Laboratorios - Globulinas=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Globulinas</strong>
                    <input type="number" step="any" class="form-control" id="id_Globulinas" value="<?php echo $globulinas; ?>" name="id_Globulinas">
                </div>
                <!--===============   Laboratorios - Relación (A/G)=======================-->
                <div class="col-md-2" id="relacionAG">
                    <strong style="font-size: 14px;">Relación (A/G)</strong>
                    <input type="number" step="any" class="form-control" id="id_relacion" value="<?php echo $AG; ?>" name="id_relacion">
                </div>
                <!--===============   Laboratorios - BT=======================-->
                <div class="col-md-2" id="BT">
                    <strong style="font-size: 14px;">BT</strong>
                    <input type="number" step="any" class="form-control" id="id_BT" value="<?php echo $BT; ?>" name="id_BT">
                </div>
                <!--===============   Laboratorios - BD=======================-->
                <div class="col-md-2" id="BT">
                    <strong style="font-size: 14px;">BD</strong>
                    <input type="number" step="any" class="form-control" id="id_BD" value="<?php echo $BD; ?>" name="id_BD">
                </div>
                <!--===============   Laboratorios - BI=======================-->
                <div class="col-md-2" id="BT">
                    <strong style="font-size: 14px;">BI</strong>
                    <input type="number" step="any" class="form-control" id="id_BI" value="<?php echo $BI; ?>" name="id_BI">
                </div>
                <!--===============   Laboratorios - HB=======================-->
                <div class="col-md-2" id="HB">
                    <strong style="font-size: 14px;">HB</strong>
                    <input type="number" step="any" class="form-control" id="id_HB" value="<?php echo $HB; ?>" name="id_HB">
                </div>
                <!--===============   Laboratorios - VSG=======================-->
                <div class="col-md-2" id="VSG">
                    <strong style="font-size: 14px;">VSG</strong>
                    <input type="number" step="any" class="form-control" id="id_VSG" value="<?php echo $VSG; ?>" name="id_VSG">
                </div>
                <!--===============   Laboratorios - OHD=======================-->
                <div class="col-md-2" id="25-OHD">
                    <strong style="font-size: 14px;">25-OHD</strong>
                    <input type="number" step="any" class="form-control" id="id_OHD" value="<?php echo $OHD; ?>" name="id_OHD">
                </div>
                <!--===============   Laboratorios - creatinina=======================-->
                <div class="col-md-3">
                    <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI Creatinina</a></i>
                    <input type="number" step="any" class="form-control" id="creatinina" value="<?php echo $creatinina; ?>" name="creatinina" onchange="calcularNefropatia()">
                </div>
                <!--===============   Laboratorios - cistatina=======================-->
                <div class="col-md-3">
                    <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI creatinina-cistatina</a></i>
                    <input type="number" step="any" class="form-control" id="cistatina" value="<?php echo $creatinina_cistatina; ?>" name="cistatina">
                </div>

                <!--===============   Laboratorios - Glucosa=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Glucosa</strong>
                    <input type="number" step="any" class="form-control" id="id_glucosa" value="<?php echo $glucosa; ?>" name="id_glucosa">
                </div>

                <!--===============   Laboratorios- HB Glucosilada=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">HB Glucosilada</strong>
                    <input type="number" step="any" class="form-control" id="id_glucosilada" value="<?php echo $glucosilada; ?>" name="id_glucosilada">
                </div>

                <!--===============   Laboratorios- Ácido Úrico=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Ácido Úrico</strong>
                    <input type="number" step="any" class="form-control" id="id_urico" value="<?php echo $acido_urico; ?>" name="id_urico">
                </div>

                <!--===============   Laboratorios- Urea=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Urea</strong>
                    <input type="number" step="any" class="form-control" id="id_urea" value="<?php echo $urea; ?>" name="id_urea">
                </div>

                <!--===============   Laboratorios- Creatinina=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Creatinina</strong>
                    <input type="number" step="any" class="form-control" id="id_creatinina" value="<?php echo $creatinina2; ?>" name="id_creatinina">
                </div>

                <!--===============   Laboratorios- Colesterol=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Colesterol</strong>
                    <input type="number" step="any" class="form-control" id="id_colesterol" value="<?php echo $colesterol; ?>" name="id_colesterol">
                </div>

                <!--===============   Laboratorios- Triglicéridos=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Triglicéridos</strong>
                    <input type="number" step="any" class="form-control" id="id_trigliceridos" value="<?php echo $trigliceridos; ?>" name="id_trigliceridos">
                </div>

                <!--===============   Laboratorios- LDL=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">LDL</strong>
                    <input type="number" step="any" class="form-control" id="id_LDL" value="<?php echo $LDL; ?>" name="id_LDL">
                </div>

                <!--===============   Laboratorios- HDL=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">HDL</strong>
                    <input type="number" step="any" class="form-control" id="id_HDL" value="<?php echo $HDL; ?>" name="id_HDL">
                </div>

                <!--===============   Laboratorios- ALB 24 HRS=======================-->
                <div class="col-md-2">
                    <strong style="font-size: 14px;">ALB 24 HRS</strong>
                    <input type="number" step="any" class="form-control" id="id_HBG" value="<?php echo $HBG; ?>" name="id_HBG">
                </div>


                <!-- **********************************COMPLICACIONES*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                            COMPLICACIONES</h5>
                    </div>
                </div>

                <!--===========             Retinopatía     ================-->
                <div class="col-md-4" id="com_retinopatia ">
                    <strong style="font-size: 14px">Retinopatía</strong>
                    <select name="RetinopatiaSelect" id="RetinopatiaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($retinopatia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="No proliferativa" <?php if ($retinopatia == 'No proliferativa') echo 'selected'; ?>>No proliferativa</option>
                        <option value="Proliferativa" <?php if ($retinopatia == 'Proliferativa') echo 'selected'; ?>>Proliferativa</option>
                        <option value="Edema Macular de significancia clínica" <?php if ($retinopatia == 'Edema Macular de significancia clínica') echo 'selected'; ?>>Edema Macular de significancia clínica</option>
                    </select>
                </div>

                <!--===========             Retinopatía     ================-->
                <div class="col-md-4" id="com_ceguera ">
                    <strong style="font-size: 14px">Ceguera </strong>
                    <select name="CegueraSelect" id="CegueraSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($ceguera == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($ceguera == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===============  NEFROPATIA  =======================-->
                <div class="col-md-4" id="com_nefro">
                    <strong style="font-size: 14px;">Nefropatía</strong>
                    <input type="text" class="form-control" id="id_nefro" name="nefro" value="<?php echo $nefropatia; ?>">
                </div>

                <!--===========         Cardiopatía isquémica     ================-->
                <div class="col-md-4" id="com_cardiopatia ">
                    <strong style="font-size: 14px"> Cardiopatía isquémica</strong>
                    <select name="Cardiopatia_isquemicaSelect" id="Cardiopatia_isquemicaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($CI == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($CI == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <!--===========     Enfermedad Vascular Cerebral Isquémica     ================-->
                <div class="col-md-4" id="com_isquemica ">
                    <strong style="font-size: 14px"> Enfermedad Vascular Cerebral Isquémica </strong>
                    <select name="IsquemicaSelect" id="IsquemicaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($EVCI == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($EVCI == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===========        Insuficiencia Arterial Periférica    ================-->
                <div class="col-md-4" id="com_cardiopatia ">
                    <strong style="font-size: 14px"> Insuficiencia Arterial Periférica</strong>
                    <select name="InsuficienciaArterialPerifericaSelect" id="InsuficienciaArterialPerifericaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($IAP == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($IAP == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <br><br>
                <!--===========     Neuropatía     ================-->
                <div class="col-md-12" id="com_neuropatia">
                    <strong style="font-size: 14px">Neuropatía </strong>
                    <select name="neuropatiaSelect" id="neuropatiaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($neuropatia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($neuropatia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="container" id="neuropatia">

                    <div class="row">

                        <div class="col-md-4" id="neuropatia_polineuropatia">
                            <span style="font-size: 14px;">Polineuropatía </span>
                            <select name="polineuropatia" id="polineuropatia" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($polineuropatia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($polineuropatia == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Simétrica Distal=======================-->
                        <div class="col-md-4" id="neuropatia_simetrica">
                            <span style="font-size: 14px;">Simétrica Distal</span>
                            <select name="Simetrica_Distal" id="Simetrica_Distal" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($Simetrica_Distal == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($Simetrica_Distal == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Pie de Charcot =======================-->

                        <div class="col-md-4" id="neuropatia_Charcot">
                            <span style="font-size: 14px;">Pie de Charcot</span>
                            <select name="Pie_Charcot" id="Pie_Charcot" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($Pie_Charcot == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($Pie_Charcot == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Neuropatía GastrointestinalL=======================-->
                        <div class="col-md-4" id="neuropatia_gastrointestinal">
                            <span style="font-size: 13px;">Neuropatía Gastrointestinal</span>
                            <select name="neuropatia_gastro" id="neuropatia_gastro" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($neuropatia_gastro == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($neuropatia_gastro == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Neuropatía Genitourinaria =======================-->
                        <div class="col-md-4" id="neuropatia_genitourinario">
                            <span style="font-size: 14px;">Neuropatía Genitourinaria</span>
                            <select name="neuropatia_genito" id="neuropatia_genito" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($neuropatia_genito == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($neuropatia_genito == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============Neuropatía Cardiovascular=======================-->
                        <div class="col-md-4" id="neuropatia_Cardiovascular">
                            <span style="font-size: 14px;">Neuropatía Cardiovascular</span>
                            <select name="neuropatia_cardio" id="neuropatia_cardio" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($neuropatia_cardio == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($neuropatia_cardio == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                    </div><!--===========DIV NEUROPATIA================--> <br>

                </div> <!--=========== DIV NEUROPATIA================-->


                <!--===========    Amputaciones    ================-->

                <div class="col-md-12" id="com_amputaciones">
                    <strong style="font-size: 14px">Amputaciones</strong>
                    <select name="AmputacionesSelect" id="AmputacionesSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($amputacion == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($amputacion == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="container" id="amputaciones">

                    <div class="row">

                        <div class="col-md-12" id="Dedos">
                            <span style="font-size: 14px;">Dedos </span>
                            <select name="amputaciones_dedos" id="amputaciones_dedos" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($amputaciones_dedos == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($amputaciones_dedos == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Lateralidad-DEDOS-MANOS =======================-->
                        <div class="col-md-6" id="dedos_Mano">
                            <span style="font-size: 14px;">Dedos-Mano </span>
                            <select name="Mano_dedos" id="Mano_dedos" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione" <?php if ($Mano_dedos == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Derecho" <?php if ($Mano_dedos == 'Derecho') echo 'selected'; ?>>Derecho</option>
                                <option value="Izquierda" <?php if ($Mano_dedos == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                                <option value="Bilateral" <?php if ($Mano_dedos == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                            </select>
                        </div>
                        <!--===============Lateralidad-DEDOS-PIES =======================-->
                        <div class="col-md-6" id="dedos_Pies">
                            <span style="font-size: 14px;">Dedos-Pie</span>
                            <select name="Pies_dedos" id="Pies_dedos" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione" <?php if ($Pies_dedos == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Derecho" <?php if ($Pies_dedos == 'Derecho') echo 'selected'; ?>>Derecho</option>
                                <option value="Izquierda" <?php if ($Pies_dedos == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                                <option value="Bilateral" <?php if ($Pies_dedos == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                            </select>
                        </div>


                        <!--===============Transmetatarsiana =======================-->
                        <div class="col-md-6" id="Transmetatarsiana">
                            <span style="font-size: 14px;">Transmetatarsiana</span>
                            <select name="amputaciones_transmetatarsiana" id="amputaciones_transmetatarsiana" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($amputaciones_transmetatarsiana == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($amputaciones_transmetatarsiana == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Lateralidad-Transmetatarsiana =======================-->
                        <div class="col-md-6" id="Transmetatarsiana_lateralidad">
                            <span style="font-size: 14px;">Transmetatarsiana-Lateralidad </span>
                            <select name="lateralidad_Transmetatarsiana" id="lateralidad_Transmetatarsiana" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione" <?php if ($lateralidad_Transmetatarsiana == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Derecho" <?php if ($lateralidad_Transmetatarsiana == 'Derecho') echo 'selected'; ?>>Derecho</option>
                                <option value="Izquierda" <?php if ($lateralidad_Transmetatarsiana == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                                <option value="Bilateral" <?php if ($lateralidad_Transmetatarsiana == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                            </select>
                        </div>

                        <!--===============Infracondílea =======================-->

                        <div class="col-md-6" id="Infracondílea">
                            <span style="font-size: 14px;">Infracondílea</span>
                            <select name="amputaciones_infracondilea" id="amputaciones_infracondilea" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($amputaciones_infracondilea == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($amputaciones_infracondilea == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============Lateralidad-Infracondílea =======================-->
                        <div class="col-md-6" id="Infracondílea_lateralidad">
                            <span style="font-size: 14px;">Infracondílea-Lateralidad </span>
                            <select name="lateralidad_Infracondilea" id="lateralidad_Infracondilea" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione" <?php if ($lateralidad_Infracondilea == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Derecho" <?php if ($lateralidad_Infracondilea == 'Derecho') echo 'selected'; ?>>Derecho</option>
                                <option value="Izquierda" <?php if ($lateralidad_Infracondilea == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                                <option value="Bilateral" <?php if ($lateralidad_Infracondilea == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                            </select>
                        </div>

                        <!--===============Supracondílea Derecha=======================-->
                        <div class="col-md-6" id="supracondilea">
                            <span style="font-size: 14px;">Supracondílea</span>
                            <select name="amputaciones_Supracondilea" id="amputaciones_Supracondilea" class="form-control" style="font-size: 14px;">
                                <option value="Negado" <?php if ($amputaciones_Supracondilea == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($amputaciones_Supracondilea == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============Lateralidad-Supracondilea =======================-->
                        <div class="col-md-6" id="Supracondilea_lateralidad">
                            <span style="font-size: 14px;">Supracondilea-Lateralidad </span>
                            <select name="lateralidad_Supracondilea" id="lateralidad_Supracondilea" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione" <?php if ($lateralidad_Supracondilea == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                <option value="Derecho" <?php if ($lateralidad_Supracondilea == 'Derecho') echo 'selected'; ?>>Derecho</option>
                                <option value="Izquierda" <?php if ($lateralidad_Supracondilea == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                                <option value="Bilateral" <?php if ($lateralidad_Supracondilea == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                            </select>
                        </div>

                    </div><!--===========DIV AMPUTACIONES================-->

                </div> <!--=========== DIV AMPUTACIONES================-->


                <!-- ********************************** TRATAMIENTOS *********************************** -->

                <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                            TRATAMIENTO</h5>
                    </div>
                </div>
                <!-- ********************************** Tratamiento Farmacolofico *********************************** -->
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                background-color:rgb(80, 177, 210,0.5);
                color: aliceblue;
                margin-top:5px;
                font-size: 13px;">
                        Tratamiento Farmacológico</h5>
                </div>


                <div class="col-md-12" id="id_tx1">
                    <strong style="font-size: 14px">Hipoglucemiantes</strong>
                    <select name="HipoglucemiantesSelect" id="HipoglucemiantesSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($hipoglucemiantes == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($hipoglucemiantes == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <div class="container" id="tx_Hipoglucemiantes">

                    <div class="row">

                        <!--===============Si con Tratamiento Hipoglucemiantes =======================-->

                        <!--===========    Metformina    ================-->
                        <div class="col-md-4" id="tx_metformina">
                            <span style="font-size: 14px;">Metformina</span>
                            <select name="MetforminaSelect" id="MetforminaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($metformina == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($metformina == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===========     Sulfonilureas     ================-->
                        <div class="col-md-4" id="tx_sulfonilureas">
                            <span style="font-size: 14px;">Sulfonilureas</span>
                            <select name="SulfonilureaSelect" id="SulfonilureaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($sulfonilureas == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Glibenclamida" <?php if ($sulfonilureas == 'Glibenclamida') echo 'selected'; ?>>Glibenclamida</option>
                                <option value="Clorpropamida" <?php if ($sulfonilureas == 'Clorpropamida') echo 'selected'; ?>>Clorpropamida</option>
                                <option value="Glibenclamida" <?php if ($sulfonilureas == 'Glibenclamida') echo 'selected'; ?>>Glibenclamida</option>
                                <option value="Glipizida" <?php if ($sulfonilureas == 'Glipizida') echo 'selected'; ?>>Glipizida</option>
                                <option value="Glicazida" <?php if ($sulfonilureas == 'Glicazida') echo 'selected'; ?>>Glicazida</option>
                                <option value="Otra" <?php if ($sulfonilureas == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>

                        <!--===========     Glinidas    ================-->
                        <div class="col-md-4" id="tx_glinidas">
                            <span style="font-size: 14px">Glinidas</span>
                            <select name="GlinidasSelect" id="GlinidasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($glinidas == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Nateglinida" <?php if ($glinidas == 'Nateglinida') echo 'selected'; ?>>Nateglinida</option>
                                <option value="Repaglinida" <?php if ($glinidas == 'Repaglinida') echo 'selected'; ?>>Repaglinida</option>
                            </select>
                        </div>

                        <!--===========     I-DPP4    ================-->
                        <div class="col-md-4" id="tx_IDPP4">
                            <span style="font-size: 14px">I-DPP4</span>
                            <select name="I_DPP4Select" id="I-DPP4Select" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($DPP4 == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Sitagliptina" <?php if ($DPP4 == 'Sitagliptina') echo 'selected'; ?>>Sitagliptina</option>
                                <option value="Linagliptina" <?php if ($DPP4 == 'Linagliptina') echo 'selected'; ?>>Linagliptina</option>
                                <option value="Alogliptina" <?php if ($DPP4 == 'Alogliptina') echo 'selected'; ?>>Alogliptina</option>
                                <option value="Saxagliptina" <?php if ($DPP4 == 'Saxagliptina') echo 'selected'; ?>>Saxagliptina</option>
                                <option value="Vildagliptina" <?php if ($DPP4 == 'Vildagliptina') echo 'selected'; ?>>Vildagliptina</option>
                                <option value="Otra" <?php if ($DPP4 == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>

                        <!--===========   -	ISGLT-2    ================-->
                        <div class="col-md-4" id="tx_ISGLT2">
                            <span style="font-size: 14px">ISGLT-2 </span>
                            <select name="ISGLT2Select" id="ISGLT2Select" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($ISGLT == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Dapaglifozina" <?php if ($ISGLT == 'Dapaglifozina') echo 'selected'; ?>>Dapaglifozina</option>
                                <option value="Canaglifozina" <?php if ($ISGLT == 'Canaglifozina') echo 'selected'; ?>>Canaglifozina</option>
                                <option value="Empaglifozina" <?php if ($ISGLT == 'Empaglifozina') echo 'selected'; ?>>Empaglifozina</option>
                            </select>
                        </div>

                        <!--===========     Análogos de GLP-1     ================-->
                        <div class="col-md-4" id="tx_GLP1">
                            <span style="font-size: 14px">Análogos de GLP-1</span>
                            <select name="GLP1Select" id="GLP1Select" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($GLP == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Exenatida" <?php if ($GLP == 'Exenatida') echo 'selected'; ?>>Exenatida</option>
                                <option value="Liraglutida" <?php if ($GLP == 'Liraglutida') echo 'selected'; ?>>Liraglutida</option>
                                <option value="Semaglutida" <?php if ($GLP == 'Semaglutida') echo 'selected'; ?>>Semaglutida</option>
                                <option value="Lixisenatida" <?php if ($GLP == 'Lixisenatida') echo 'selected'; ?>>Lixisenatida</option>
                                <option value="Otra" <?php if ($GLP == 'Otra') echo 'selected'; ?>>Otra</option>
                            </select>
                        </div>
                        <!--===========    Pioglitazona     ================-->

                        <div class="col-md-6" id="tx_pioglitazona">
                            <span style="font-size: 14px">Pioglitazona</span>
                            <select name="PioglitazonaSelect" id="PioglitazonaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($pioglitazona == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($pioglitazona == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===========    Inhibidores de la alfaglucosidasa    ================-->
                        <div class="col-md-6" id="tx_inhibidores">
                            <span style="font-size: 14px">Inhibidores de la alfaglucosidasa </span>
                            <select name="inhibidoresSelect" id="inhibidoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($IA == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Acarbosa" <?php if ($IA == 'Acarbosa') echo 'selected'; ?>>Acarbosa</option>
                                <option value="Miglitol" <?php if ($IA == 'Miglitol') echo 'selected'; ?>>Miglitol</option>
                            </select>
                        </div>

                    </div><!--===========DIV TX Hipoglucemiantes ================--> <br>

                </div> <!--=========== DIV DEL ROW DE Hipoglucemiantes================-->

                <!--=========== TRATAMIENTOS CON INSULINAS================-->

                <div class="col-md-12" id="id_tx2">
                    <strong style="font-size: 14px">Insulinas</strong>
                    <select name="InsulinasSelect" id="InsulinasSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($insulina == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($insulina == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <div class="container" id="tx_Insulinas">

                    <div class="row">

                        <!--===============Si con Tratamiento Hipoglucemiantes =======================-->

                        <!--===========    NPH    ================-->
                        <div class="col-md-6" id="tx_NPH">
                            <span style="font-size: 14px">NPH</span>
                            <select name="NPHSelect" id="NPHSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($NPH == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($NPH == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_nph">
                            <span style="font-size: 14px;">NPH Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_nph" name="id_nph" value="<?php echo $NPH_dosis; ?>">
                        </div>

                        <!--===========    RAPIDA REGULAR    ================-->
                        <div class="col-md-6" id="tx_rapidaregular">
                            <span style="font-size: 14px">Rápida regular </span>
                            <select name="RapidaRegularSelect" id="RapidaRegularSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($rapida_regular == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($rapida_regular == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_rapidaregular">
                            <span style="font-size: 14px;"> Rápida Regular Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_rapidaregular" name="id_rapidaregular" value="<?php echo $rapida_regular_dosis; ?>">
                        </div>

                        <!--===========    GLARGINA     ================-->
                        <div class="col-md-6" id="tx_glargina ">
                            <span style="font-size: 14px">Glargina</span>
                            <select name="GlarginaSelect" id="GlarginaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($glardina == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($glardina == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Glargina">
                            <span style="font-size: 14px;">Glargina Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_glargina" name="id_glargina" value="<?php echo $glardina_dosis; ?>">
                        </div>

                        <!--===========    GLARGINA 300     ================-->
                        <div class="col-md-6" id="tx_glargina300 ">
                            <span style="font-size: 14px">Glargina 300</span>
                            <select name="Glar300Select" id="Glar300Select" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($glardina_300 == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($glardina_300 == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Glar300">
                            <span style="font-size: 14px;"> Glargina 300 Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_glargina300" name="id_glargina300" value="<?php echo $glardina_300_dosis; ?>">
                        </div>

                        <!--===========    DETEMIR       ================-->
                        <div class="col-md-6" id="tx_detemir">
                            <span style="font-size: 14px">Detemir</span>
                            <select name="DetemirSelect" id="DetemirSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($detemir == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($detemir == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Detemir">
                            <span style="font-size: 14px;">Detemir Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_detemir" name="id_detemir" value="<?php echo $detemir_dosis; ?>">
                        </div>


                        <!--===========    DEGLUDEC   ================-->
                        <div class="col-md-6" id="tx_degludec">
                            <span style="font-size: 14px">Degludec</span>
                            <select name="DegludecrSelect" id="DegludecrSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($degludec == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($degludec == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Degludec">
                            <span style="font-size: 14px;">Degludec Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_degludec" name="id_degludec" value="<?php echo $degludec_dosis; ?>">
                        </div>

                        <!--===========    LISPRO   ================-->
                        <div class="col-md-6" id="tx_lispro">
                            <span style="font-size: 14px">Lispro</span>
                            <select name="LisproSelect" id="LisproSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($lispro == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($lispro == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Lispro">
                            <span style="font-size: 14px;">Lispro Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_lispro" name="id_lispro" value="<?php echo $lispro_prota_dosis; ?>">
                        </div>

                        <!--===========   ASPART Aspart    ================-->
                        <div class="col-md-6" id="tx_aspart">
                            <span style="font-size: 14px">Aspart</span>
                            <select name="AspartSelect" id="AspartSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($aspart == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($aspart == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Aspart">
                            <span style="font-size: 14px;">Aspart Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_aspart" name="id_aspart" value="<?php echo $aspart_dosis; ?>">
                        </div>


                        <!--===========   Glulisina     ================-->
                        <div class="col-md-6" id="tx_glulisina">
                            <span style="font-size: 14px">Glulisina</span>
                            <select name="Glulisina" id="GlulisinaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($glulisina == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($glulisina == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Glulisina">
                            <span style="font-size: 14px;">Glulisina Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_glulisina" name="id_glulisina" value="<?php echo $glulisina_dosis; ?>">
                        </div>

                        <!--===========    NPH/REGULAR   ================-->
                        <div class="col-md-6" id="tx_NPH_Regular">
                            <span style="font-size: 14px">NPH/Regular</span>
                            <select name="NPH_Regular" id="NPHRegularSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($NPH_regular == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($NPH_regular == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_nphRegular">
                            <span style="font-size: 14px;">NPH/Regular Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_nphRegular" name="id_nphRegular" value="<?php echo $NPH_regular_dosis; ?>">
                        </div>


                        <!--===========    Lispro protamina/lispro   ================-->
                        <div class="col-md-6" id="tx_protamina">
                            <span style="font-size: 14px">Lispro protamina/Lispro</span>
                            <select name="protamina" id="ProtaminaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($lispro_prota == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($lispro_prota == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Protamina">
                            <span style="font-size: 14px;">Lispro protamina/Lispro</span>
                            <input type="number" step="any" class="form-control" id="id_Protamina" name="id_Protamina" value="<?php echo $lispro_prota_dosis; ?>">
                        </div>

                    </div><!--===========DIV TX INSULINAS ================--> <br>

                </div> <!--=========== DIV DEL ROW DE INSULINAS================-->


                <div class="col-md-12" id="id_tx3">
                    <strong style="font-size: 14px">Hipolipemiantes</strong>
                    <select name="HipolipemiantesSelect" id="HipolipemiantesSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($hipolipemiante == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($hipolipemiante == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <div class="container" id="tx_Hipolipemiantes">

                    <div class="row">

                        <!--===============Si con Tratamiento Hipolipemiantes=======================-->

                        <!--===========    Hipolipemiantes    ================-->
                        <div class="col-md-3" id="tx_Estatinas">
                            <span style="font-size: 14px">Estatinas</span>
                            <select name="EstatinasSelect" id="EstatinasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($estatinas == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Rosuvastatina" <?php if ($estatinas == 'Rosuvastatina') echo 'selected'; ?>>Rosuvastatina</option>
                                <option value="Atorvastatina" <?php if ($estatinas == 'Atorvastatina') echo 'selected'; ?>>Atorvastatina</option>
                                <option value="Pravastatina" <?php if ($estatinas == 'Pravastatina') echo 'selected'; ?>>Pravastatina</option>
                                <option value="Simvastatina" <?php if ($estatinas == 'Simvastatina') echo 'selected'; ?>>Simvastatina</option>
                                <option value="Otros" <?php if ($estatinas == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="tx_Fibratos">
                            <span style="font-size: 14px">Fibratos</span>
                            <select name="FibratosSelect" id="FibratosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($fibratos == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Bezafibrato" <?php if ($fibratos == 'Bezafibrato') echo 'selected'; ?>>Bezafibrato</option>
                                <option value="Fenofibrato" <?php if ($fibratos == 'Fenofibrato') echo 'selected'; ?>>Fenofibrato</option>
                                <option value="Gemfibrozil" <?php if ($fibratos == 'Gemfibrozil') echo 'selected'; ?>>Gemfibrozil</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="tx_Omega">
                            <span style="font-size: 14px">Omega 3</span>
                            <select name="OmegaSelect" id="OmegaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($omega_3 == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($omega_3 == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>


                        <div class="col-md-3" id="tx_absorcion">
                            <span style="font-size: 14px">Inhibidores de la Absorción</span>
                            <select name="Inhibidores_AbsorcionSelect" id="Inhibidores_AbsorcionSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($IAB == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Ezetimiba" <?php if ($IAB == 'Ezetimiba') echo 'selected'; ?>>Ezetimiba</option>
                            </select>
                        </div>

                    </div><!--===========DIV TX Hipolipemiantes ================--> <br>

                </div> <!--=========== DIV DEL ROW DE Hipolipemiantes================-->



                <!--=========== tratamientos con  Antihipertensivos================-->


                <div class="col-md-12" id="id_tx4">
                    <strong style="font-size: 14px">Antihipertensivos</strong>
                    <select name="AntihipertensivosSelect" id="AntihipertensivosSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($antihipertensivos == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($antihipertensivos == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <div class="container" id="tx_Antihipertensivos">

                    <div class="row">

                        <!--===============Si con Antihipertensivos=======================-->

                        <!--===========    Hipolipemiantes    ================-->
                        <div class="col-md-6" id="tx_IECAS">
                            <span style="font-size: 14px">IECAS</span>
                            <select name="IECASSelect" id="IECASSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($IECAS == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Enalapril" <?php if ($IECAS == 'Enalapril') echo 'selected'; ?>>Enalapril</option>
                                <option value="Lisinopril" <?php if ($IECAS == 'Lisinopril') echo 'selected'; ?>>Lisinopril</option>
                                <option value="Captopril" <?php if ($IECAS == 'Captopril') echo 'selected'; ?>>Captopril</option>
                                <option value="Ramipril" <?php if ($IECAS == 'Ramipril') echo 'selected'; ?>>Ramipril</option>
                                <option value="Otros" <?php if ($IECAS == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <!--===============Si con ARA-II=======================-->
                        <div class="col-md-6" id="tx_ARAII">
                            <span style="font-size: 14px">ARA-II</span>
                            <select name="ARAIISelect" id="ARAIISelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($ARAII == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Losartan" <?php if ($ARAII == 'Losartan') echo 'selected'; ?>>Losartan</option>
                                <option value="Telmisartan" <?php if ($ARAII == 'Telmisartan') echo 'selected'; ?>>Telmisartan</option>
                                <option value="Irbesartan" <?php if ($ARAII == 'Irbesartan') echo 'selected'; ?>>Irbesartan</option>
                                <option value="Candesartan" <?php if ($ARAII == 'Candesartan') echo 'selected'; ?>>Candesartan</option>
                                <option value="Olmesartan" <?php if ($ARAII == 'Olmesartan') echo 'selected'; ?>>Olmesartan</option>
                                <option value="Valsartan" <?php if ($ARAII == 'Valsartan') echo 'selected'; ?>>Valsartan</option>
                                <option value="Otros" <?php if ($ARAII == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <!--===============Si conInhibidores de la Renina=======================-->

                        <div class="col-md-6" id="tx_Inhibidores">
                            <span style="font-size: 14px">Inhibidores de la Renina</span>
                            <select name="InhibidoresSelect" id="InhibidoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($IR == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Aliskiren" <?php if ($IR == 'Aliskiren') echo 'selected'; ?>>Aliskiren</option>
                            </select>
                        </div>


                        <!--===============Si Calcioantagonistas=======================-->
                        <div class="col-md-6" id="tx_Calcioantagonistas">
                            <span style="font-size: 14px">Calcioantagonistas</span>
                            <select name="CalcioantagonistasSelect" id="CalcioantagonistasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($calcioantagonistas == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Nifedipino" <?php if ($calcioantagonistas == 'Nifedipino') echo 'selected'; ?>>Nifedipino</option>
                                <option value="Amlodipino" <?php if ($calcioantagonistas == 'Amlodipino') echo 'selected'; ?>>Amlodipino</option>
                                <option value="Verapamilo" <?php if ($calcioantagonistas == 'Verapamilo') echo 'selected'; ?>>Verapamilo</option>
                                <option value="Felodipino" <?php if ($calcioantagonistas == 'Felodipino') echo 'selected'; ?>>Felodipino</option>
                                <option value="Otros" <?php if ($calcioantagonistas == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <!--===============Si Betabloqueadores=======================-->

                        <div class="col-md-6" id="tx_Betabloqueadores">
                            <span style="font-size: 14px">Betabloqueadores</span>
                            <select name="BetabloqueadoresSelect" id="BetabloqueadoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($betabloqueadores == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Metoprolol" <?php if ($betabloqueadores == 'Metoprolol') echo 'selected'; ?>>Metoprolol</option>
                                <option value="Propranolol" <?php if ($betabloqueadores == 'Propranolol') echo 'selected'; ?>>Propranolol</option>
                                <option value="Labetalol" <?php if ($betabloqueadores == 'Labetalol') echo 'selected'; ?>>Labetalol</option>
                                <option value="Carvedilol" <?php if ($betabloqueadores == 'Carvedilol') echo 'selected'; ?>>Carvedilol</option>
                                <option value="Atenolol" <?php if ($betabloqueadores == 'Atenolol') echo 'selected'; ?>>Atenolol</option>
                                <option value="Bisoprolol" <?php if ($betabloqueadores == 'Bisoprolol') echo 'selected'; ?>>Bisoprolol</option>
                                <option value="Nebivolol" <?php if ($betabloqueadores == 'Nebivolol') echo 'selected'; ?>>Nebivolol</option>
                                <option value="Otros" <?php if ($betabloqueadores == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>


                        <!--===============Si Diuréticos tiazidas=======================-->

                        <div class="col-md-6" id="tx_Diureticos">
                            <span style="font-size: 14px">Diuréticos tiazidas</span>
                            <select name="DiureticosSelect" id="DiureticosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($DT == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Hidroclorotiazida" <?php if ($DT == 'Hidroclorotiazida') echo 'selected'; ?>>Hidroclorotiazida</option>
                                <option value="Clortalidona" <?php if ($DT == 'Clortalidona') echo 'selected'; ?>>Clortalidona</option>
                                <option value="Otros" <?php if ($DT == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <!--===============Si Alfabloqueadores  =======================-->

                        <div class="col-md-6" id="tx_Alfabloqueadores">
                            <span style="font-size: 14px">Alfabloqueadores</span>
                            <select name="AlfabloqueadoresSelect" id="AlfabloqueadoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($alfabloqueadores == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Prazocina" <?php if ($alfabloqueadores == 'Prazocina') echo 'selected'; ?>>Prazocina</option>
                                <option value="Terazocina" <?php if ($alfabloqueadores == 'Terazocina') echo 'selected'; ?>>Terazocina</option>
                                <option value="Otros" <?php if ($alfabloqueadores == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <!--===============Si Espironolactona =======================-->

                        <div class="col-md-6" id="tx_Espironolactona">
                            <span style="font-size: 14px">Espironolactona</span>
                            <select name="EspironolactonaSelect" id="EspironolactonaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($espironolactoma == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($espironolactoma == 'Si') echo 'selected'; ?>>Si</option>
                                <option value="Otros" <?php if ($espironolactoma == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>


                    </div><!--===========DIV TX Antihipertensivos ================--> <br>

                </div> <!--=========== DIV DEL ROW DE Antihipertensivos================-->


                <!--=========== tratamientos con  OTROS ================-->


                <div class="col-md-12" id="id_tx5">
                    <strong style="font-size: 14px">Otros</strong>
                    <select name="OtrosSelect" id="OtrosSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($otros == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($otros == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <div class="container" id="tx_Otros">

                    <div class="row">

                        <!--===============Si con Antihipertensivos=======================-->

                        <!--===========    ASA    ================-->
                        <div class="col-md-6" id="tx_ASA">
                            <span style="font-size: 14px">ASA</span>
                            <select name="ASASelect" id="ASASelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($ASA == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($ASA == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>


                        <!--===========    Alopurinol    ================-->
                        <div class="col-md-6" id="tx_Alopurinol">
                            <span style="font-size: 14px">Alopurinol</span>
                            <select name="AlopurinolSelect" id="AlopurinolSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($alopurinol == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($alopurinol == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>

                        <!--===============Si -	Neuromodulador =======================-->
                        <div class="col-md-6" id="tx_Neuromodulador">
                            <span style="font-size: 14px">Neuromodulador</span>
                            <select name="NeuromoduladorSelect" id="NeuromoduladorSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($neuromodulador == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Gabapentina" <?php if ($neuromodulador == 'Gabapentina') echo 'selected'; ?>>Gabapentina</option>
                                <option value="Pregabalina" <?php if ($neuromodulador == 'Pregabalina') echo 'selected'; ?>>Pregabalina</option>
                                <option value="Carbamazepina" <?php if ($neuromodulador == 'Carbamazepina') echo 'selected'; ?>>Carbamazepina</option>
                                <option value="Otros" <?php if ($neuromodulador == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>

                        <!--===============Si -	Procineticos =======================-->

                        <div class="col-md-6" id="tx_Procineticos">
                            <sapi_windows_cp_is_utf8 style="font-size: 14px">Procineticos</sapi_windows_cp_is_utf8>
                            <select name="ProcineticosSelect" id="ProcineticosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado" <?php if ($procineticos == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Metocloprmida" <?php if ($procineticos == 'Metocloprmida') echo 'selected'; ?>>Metocloprmida</option>
                                <option value="Cisaprida" <?php if ($procineticos == 'Cisaprida') echo 'selected'; ?>>Cisaprida</option>
                                <option value="Cinitaprida" <?php if ($procineticos == 'Cinitaprida') echo 'selected'; ?>>Cinitaprida</option>
                                <option value="Otros" <?php if ($procineticos == 'Otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>




                    </div><!--===========DIV TX OTROS ================--> <br>

                </div> <!--=========== DIV DEL ROW DE OTROS================-->

                <!--===========Numero de Farmacos Totales ================-->
                <div class="col-md-6">
                    <strong style="font-size: 14px;">Número de Fármacos Totales utilizados </strong>
                    <input type="number" class="form-control" id="Farmacos_utilizados" name="Farmacos_utilizados" style="font-size: 13px;" value="<?php echo $no_farmacos; ?>">
                </div><br> <br>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                background-color:rgb(80, 177, 210,0.5);
                color: aliceblue;
                margin-top:5px;
                font-size: 14px;">
                        Medidas Generales</h5>
                </div>

                <div class="col-md-12" id="id_Ejercicio">
                    <strong style="font-size: 14px">Ejercicio</strong>
                    <select name="EjercicioSelect" id="EjercicioSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($ejercicio_estatus == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($ejercicio_estatus == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <div class="container" id="tx_ejercicio">

                    <div class="row">

                        <!--===============Si EJERCICIO=======================-->

                        <!-- Veces a la Semana -->
                        <div class="col-md-3" id="Veces_tiempo">
                            <strong style="font-size: 14px;">Veces a la Semana</strong>
                            <input type="number" class="form-control" id="id_vecestiempo" name="id_vecestiempo" value="<?php echo $no_semana; ?>">
                        </div>

                        <!-- Apego Veces -->
                        <div class="col-md-3" id="Apego_tiempo">
                            <strong style="font-size: 14px;">Apego Veces</strong>
                            <input type="text" class="form-control" id="id_apegotiempo" name="id_apegotiempo" readonly value="<?php echo $no_veces; ?>">
                        </div>

                        <!-- Tiempo a la Semana -->
                        <div class="col-md-3" id="Tiempo_Semana">
                            <strong style="font-size: 14px;">Tiempo a la Semana</strong>
                            <input type="number" class="form-control" id="id_tiemposemana" name="id_tiemposemana" placeholder="min" value="<?php echo $t_semana; ?>">
                        </div>

                        <!-- Apego a la Semana -->
                        <div class="col-md-3" id="Apego_Veces">
                            <strong style="font-size: 14px;">Apego a la Semana</strong>
                            <input type="text" class="form-control" id="id_apegoveces" name="id_apegoveces" readonly value="<?php echo $t_no_semana; ?>">
                        </div>


                    </div><!--===========DIV TX Ejercicio ================--> <br>

                </div> <!--=========== DIV DEL ROW DE Ejercicio================-->




            </div> <!-- <row PRIMERO-->

            <!--=========== Boton de editar ================-->
            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
            </div>
            <br>
    </div><!-- <div container-->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scriptmodal.js"></script>


    <script type="module">
        import {
            editForm
        } from "./js/update.js";
        editForm();
    </script>

    <script>
        $(document).ready(function() {
            // Cuando se selecciona un estado
            $('#estado').change(function() {
                var estadoId = $(this).val(); // Obtiene el valor seleccionado

                // Filtra los municipios por el estado seleccionado
                var filteredMunicipios = municipiosData.filter(function(municipio) {
                    return municipio.Estado_Id == estadoId;
                });

                // Limpia el segundo select
                $('#municipio').empty();

                // Agrega las opciones recuperadas
                if (filteredMunicipios.length > 0) {
                    $.each(filteredMunicipios, function(index, municipio) {
                        $('#municipio').append('<option value="' + municipio.MunicipioID + '">' + municipio.NombreMunicipio + '</option>');
                    });
                } else {
                    // Si no hay municipios, muestra un mensaje
                    $('#municipio').append('<option value="">No hay municipios disponibles</option>');
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

            cerrarSesionButton.addEventListener('click', function() {
                // Redirige al usuario a la página de cierre de sesión
                window.location.href = 'php/destroysession.php';
            });
        });
    </script>


</body>
</head>