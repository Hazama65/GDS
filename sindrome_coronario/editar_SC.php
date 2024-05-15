<?php
    include ('php/controllers/edit.controller.php');
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


    <title>Seguimiento Cancer de Mama</title>
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


        <h5>Editar Registro Paciente Síndrome Coronario Agudo </h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <form id="editar_SC" method="POST">

            <div style="background-color: #FF416C;
                color:rgb(255, 255, 255);
                text-align: center;
                margin-top: 20px;">
                <h6>Datos del Paciente </h6>
            </div>


            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 13px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $nombre; ?>">
                </div>

                <div class="col-md-4" id="idcurp">
                    <strong style="font-size: 13px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 13px;" value="<?php echo $curp; ?>">
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px; ">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly value="<?php echo $fecha; ?>">
                </div>
                <div class="col-md-4">
                    <strong style="font-size: 13px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" style="font-size: 13px;" readonly value="<?php echo $edad; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly value="<?php echo $sexo; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Estado Civil</strong>
                    <select name="Estadocivil" id="Estadocivil" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($Estadocivil== 'Sin Registro')echo 'selected'; ?>>Seleccione</option>
                        <option value="Soltera"<?php if ($Estadocivil== 'Soltera')echo 'selected'; ?>>Soltero</option>
                        <option value="Casada"<?php if ($Estadocivil== 'Casada')echo 'selected'; ?>>Casado</option>
                        <option value="Viuda"<?php if ($Estadocivil== 'Viuda')echo 'selected'; ?>>Viudo</option>
                        <option value="Divorciada"<?php if ($Estadocivil== 'Divorciada')echo 'selected'; ?>>Divorciado</option>
                        <option value="Concubinato"<?php if ($Estadocivil== 'Concubinato')echo 'selected'; ?>>Concubinato</option>
                        <option value="Separada"<?php if ($Estadocivil== 'Separada')echo 'selected'; ?>>Separado</option>
                    </select>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Población Indígena</strong>
                    <input id="Poblacion_indigena" name="Poblacion_indigena" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $Poblacion_indigena; ?>">
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Raza</strong>
                    <input id="Raza" name="Raza" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $Raza; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Escolaridad</strong>
                    <select name="Escolaridad" id="Escolaridad" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($Escolaridad== 'Sin Registro')echo 'selected'; ?>>Seleccione</option>
                        <option value="Soltera"<?php if ($Escolaridad== 'Soltera')echo 'selected'; ?>>Soltero</option>
                        <option value="Primaria"<?php if ($Escolaridad== 'Primaria')echo 'selected'; ?>>Primaria</option>
                        <option value="Secundaria"<?php if ($Escolaridad== 'Secundaria')echo 'selected'; ?>>Secundaria</option>
                        <option value="Preparatoria/Bachillerato"<?php if ($Escolaridad== 'Preparatoria/Bachillerato')echo 'selected'; ?>>Preparatoria/Bachillerato</option>
                        <option value="Licenciatura/lngenieria"<?php if ($Escolaridad== 'Licenciatura/lngenieria')echo 'selected'; ?>>Licenciatura/lngenieria</option>
                        <option value="Maestria"<?php if ($Escolaridad== 'Maestria')echo 'selected'; ?>>Maestria</option>
                        <option value="Doctorado"<?php if ($Escolaridad== 'Doctorado')echo 'selected'; ?>>Doctorado</option>
                        <option value="Sin Estudios"<?php if ($Escolaridad== 'Sin Estudios')echo 'selected'; ?>>Sin Estudios</option>
                    </select>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Unidad de Referencia</strong>
                    <input list="Clues" name="unidad_referencia" id="unidad_referencia" class="control form-control" style="font-size: 13px;" value="<?php echo $unidad_referencia; ?>">
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

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Estado</strong>
                    <select class="form-control" name="estado" id="estado" style="font-size: 13px;">
                        <?php
                        if (!empty($AllData_Estados)) {
                            foreach ($AllData_Estados as $row1) {
                                echo "<option value='" . $row1["Estado_Id"] . "'>" . $row1["NombreEstado"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No hay datos disponibles</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Alcaldía o Municipio</strong>
                    <select name="Alcaldia_municipio" id="Alcaldia_municipio" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                    </select>
                </div>



                <div class="col-md-3">
                    <strong style="font-size: 13px;">Presión Arterial</strong>
                    <input id="Presion_Arterial" name="Presion_Arterial" type="text" class="control form-control" value="<?php echo $Presion_Arterial; ?>" style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Frecuencia Cardíaca</strong>
                    <input id="FC" name="FC" type="number" value="<?php echo $FC; ?>" class="control form-control" style="font-size: 13px;">
                </div>



                <div class="col-md-3">
                    <strong style="font-size: 13px;">Frecuencia Respiratoria</strong>
                    <input type="number" value="<?php echo $fr; ?>" class="control form-control" id="fr" name="fr" style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Peso (kg)</strong>
                    <input type="number" value="<?php echo $peso; ?>" class="control form-control" id="peso" name="peso" style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Talla (m)</strong>
                    <input type="number" value="<?php echo $talla; ?>" class="control form-control" id="talla" name="talla" style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Circunferencia Cintura(cm)</strong>
                    <input type="number" value="<?php echo $circunferencia; ?>" class="control form-control" id="circunferencia" name="circunferencia" style="font-size: 13px;">
                </div>

                <!-- FACTORES DE RIESGO  -->
                <div class="form-header">
                    <h6 class="form-title" style="text-align: center;
            background-color:#FF416C ;
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        FACTORES DE RIESGO</h6>
                </div>

                <div class="container">
                    <label for="Factores_riesgo" style="font-size: 13px;"></label><br>
                    <div class="row">

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ninguno</span>
                            <input type="checkbox" <?php if ($Ninguno_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Ninguno_factor"
                                id="Ninguno_factor" value="Ninguno" style="font-size:14px; margin: 5px auto; ">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hiperlipidemia</span>
                            <input type="checkbox" <?php if ($Hiperlipidemia_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Hiperlipidemia_factor"
                                id="Hiperlipidemia_factor" value="Hiperlipidemia"
                                style="font-size:14px; margin: 5px auto; ">
                        </div>


                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Diabetes</span>
                            <input type="checkbox" <?php if ($Diabetes_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Diabetes_factor"
                                id="Diabetes_factor" value="Diabetes"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hipertensión</span>
                            <input type="checkbox" <?php if ($Hipertensión_facator == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Hipertensión_facator"
                                id="Hipertensión_factor" value="Hipertensión"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Alcoholismo</span>
                            <input type="checkbox" <?php if ($Alcoholismo_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Alcoholismo_factor"
                                id="Alcoholismo_Factor" value="Alcoholismo"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Prima Paterna</span>
                            <input type="checkbox" <?php if ($Tabaquismo_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Tabaquismo_factor"
                                id="Tabaquismo_factor" value="Tabaquismo"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Enfermedad renal cronica</span>
                            <input type="checkbox" <?php if ($Enfermedad_renal == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Enfermedad_renal"
                                id="Enfermedad_renal" value="Enfermedad_renal_cronica"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hiperuricemia</span>
                            <input type="checkbox" <?php if ($Hiperuricemia_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Hiperuricemia_factor"
                                id="Hiperuricemia_factor" value="Hiperuricemia"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Obesidad</span>
                            <input type="checkbox" <?php if ($Obesidad_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Obesidad_factor"
                                id="Obesidad_factor" value="Obesidad"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">IAM previo</span>
                            <input type="checkbox" <?php if ($Previo_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Previo_factor"
                                id="Previo_factor" value="IAM_previo"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>


                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ectasia coronaria</span>
                            <input type="checkbox" <?php if ($ectasia_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="ectasia_factor"
                                id="ectasia_factor" value="Ectasia_coronaria"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Cardiomiopatia de takotsubo</span>
                            <input type="checkbox" <?php if ($Cardiomio == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Cardiomio" id="Cardiomio"
                                value="Cardiomiopatia_takotsubo"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>


                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Enfermedad multivaso</span>
                            <input type="checkbox" <?php if ($multivaso_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="multivaso_factor"
                                id="multivaso_factor" value="Enfermedad_multivaso"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Revascularización cardiaca previa</span>
                            <input type="checkbox" <?php if ($Resvascularizacion_factor == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Resvascularizacion_factor"
                                id="Resvascularizacion_factor" value="Revascularizacion_cardiaca_previa"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                    </div>
                </div>

                <!-- ANTECENDENTES HEREDO FAMILIARES -->

                <div class="form-header">
                    <h6 class="form-title" style="text-align: center;
            background-color:#FF416C ;
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        ANTECEDENTES HEREDO FAMILIARES</h6>
                </div>

                <datalist id="enfermedades">
                    <?php
                    if (!empty($data_enf)) {
                        foreach ($data_enf as $row1) {
                            echo "<option value='" . $row1["enfermedad"] . "'>" . $row1["enfermedad"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay datos disponibles</option>";
                    }
                    ?>
                </datalist>



                <div class="col-md-3">
                    <strong style="font-size: 13px;">Padre</strong>
                    <input list="enfermedades" value="<?php echo $Padre_antecedente; ?>" name="Padre_antecedente" id="Padre_antecedente"
                        class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Madre</strong>
                    <input list="enfermedades" value="<?php echo $Madre_antecedente; ?>" name="Madre_antecedente" id="Madre_antecedente"
                        class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Abuelo Materno</strong>
                    <input list="enfermedades" value="<?php echo $Abuelo_Materno_antecedente; ?>" name="Abuelo_Materno_antecedente"
                        id="Abuelo_Materno_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Abuelo Paterno</strong>
                    <input list="enfermedades" value="<?php echo $Abuelo_Paterno_antecedente; ?>" name="Abuelo_Paterno_antecedente"
                        id="Abuelo_Paterno_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Abuela Materna</strong>
                    <input list="enfermedades" value="<?php echo $Abuela_Materna_antecedente; ?>" name="Abuela_Materna_antecedente"
                        id="Abuela_Materna_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Abuela Paterna</strong>
                    <input list="enfermedades" value="<?php echo $Abuela_Paterna_antecedente; ?>" name="Abuela_Paterna_antecedente"
                        id="Abuela_Paterna_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Hermano</strong>
                    <input list="enfermedades" value="<?php echo $Hermano_antecedente; ?>" name="Hermano_antecedente" id="Hermano_antecedente"
                        class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Hermana</strong>
                    <input list="enfermedades" value="<?php echo $Hermana_antecedente; ?>" name="Hermana_antecedente" id="Hermana_antecedente"
                        class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Prima Materna</strong>
                    <input list="enfermedades" value="<?php echo $Prima_Materna_antecedente; ?>" name="Prima_Materna_antecedente"
                        id="Prima_Materna_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Prima Paterna</strong>
                    <input list="enfermedades" value="<?php echo $Prima_Paterna_antecedente; ?>" name="Prima_Paterna_antecedente"
                        id="Prima_Paterna_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Primo Paterno</strong>
                    <input list="enfermedades" value="<?php echo $Primo_Paterno_antecedente; ?>" name="Primo_Paterno_antecedente"
                        id="Primo_Paterno_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Primo Materno</strong>
                    <input list="enfermedades" value="<?php echo $Primo_Materno_antecedente; ?>" name="Primo_Materno_antecedente"
                        id="Primo_Materno_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Tía Materna</strong>
                    <input list="enfermedades" value="<?php echo $Tia_Materna_antecedente; ?>" name="Tia_Materna_antecedente"
                        id="Tia_Materna_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Tía Paterna</strong>
                    <input list="enfermedades" value="<?php echo $Tia_Paterna_antecedente; ?>" name="Tia_Paterna_antecedente"
                        id="Tia_Paterna_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Tío Materno</strong>
                    <input list="enfermedades" value="<?php echo $Tia_Materno_antecedente; ?>" name="Tia_Materno_antecedente"
                        id="Tia_Materno_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Tío Paterno</strong>
                    <input list="enfermedades" value="<?php echo $Tia_Paterno_antecedente; ?>" name="Tia_Paterno_antecedente"
                        id="Tia_Paterno_antecedente" class="control form-control" style="font-size: 13px;">

                </div>

                <!-- ATENCIÓN CLINICA -->

                <div class="form-header">
                    <h6 class="form-title" style="text-align: center;
            background-color:#FF416C ;
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        ATENCIÓN CLINICA</h6>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Inicio Sintomas</strong>
                    <input type="datetime-local" value="<?php echo $Inicio_sintomas; ?>" class="control form-control" id="Inicio_sintomas"
                        name="Inicio_sintomas" style="font-size: 13px;">
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Características Dolor</strong>
                    <select name="Caracteristica_dolor" id="Caracteristica_dolor" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Caracteristica_dolor== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Típicas"<?php if ($Caracteristica_dolor== 'Típicas')echo 'selected'; ?>>Típicas</option>
                        <option value="Atípicas"<?php if ($Caracteristica_dolor== 'Atípicas')echo 'selected'; ?>>Atípicas</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Inicio de triage</strong>
                    <input type="datetime-local" value="<?php echo $Inicio_triage; ?>" class="control form-control" id="Inicio_triage" name="Inicio_triage" style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Termino de triage</strong>
                    <input type="datetime-local" value="<?php echo $Termino_triage; ?>" class="control form-control" id="Termino_triage" name="Termino_triage" style="font-size: 13px;">
                </div>




                <div class="container" id="Cara_tipicas">
                    <div class="form-header">
                        <h2 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108,0.5);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                            Características Típicas</h2>
                    </div>
                    <div class="row">

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Dolor Retroesternal</span>
                            <input type="checkbox" <?php if ($Dolor_Retroesternal == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Dolor_Retroesternal"
                                id="Dolor_Retroesternal" value="Dolor Retroesternal"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Opresivo</span>
                            <input type="checkbox" <?php if ($Opresivo == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Opresivo" id="Opresivo"
                                value="Opresivo" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Irradiación brazo izquierdo</span>
                            <input type="checkbox" <?php if ($Irradiación_brazo_izquierdo == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox"
                                name="Irradiación_brazo_izquierdo" id="Irradiación_brazo_izquierdo"
                                value="Irradiación brazo izquierdo"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Más de 10 minutos</span>
                            <input type="checkbox" <?php if ($Más_de_10_minutos == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Más_de_10_minutos"
                                id="Más_de_10_minutos" value="Más de 10 minutos"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Náuseas</span>
                            <input type="checkbox" <?php if ($Náuseas == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Náuseas" id="Náuseas"
                                value="Náuseas" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Diaforesis</span>
                            <input type="checkbox" <?php if ($Diaforesis_1 == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Diaforesis_1"
                                id="Diaforesis_1" value="Diaforesis"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Síncope</span>
                            <input type="checkbox" <?php if ($Síncope_1 == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Síncope_2" id="Síncope_2"
                                value="Síncope" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                    </div>
                </div>

                <div class="container" id="Cara_Atipicas">
                    <div class="form-header">
                        <h2 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108,0.5);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                            Características Atípicas</h2>
                    </div>
                    <div class="row">

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Dolor Epigastrio</span>
                            <input type="checkbox" <?php if ($Dolor_Epigastrio == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Dolor_Epigastrio"
                                id="Dolor_Epigastrio" value="Dolor Epigastrio"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Punzante</span>
                            <input type="checkbox" <?php if ($Punzante == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Punzante" id="Punzante"
                                value="Punzante" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Pleurítico</span>
                            <input type="checkbox" <?php if ($Pleurítico == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Pleurítico"
                                id="Pleurítico" value="Pleurítico"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Disnea</span>
                            <input type="checkbox" <?php if ($Disnea == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Disnea" id="Disnea"
                                value="Disnea" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Palpitación</span>
                            <input type="checkbox" <?php if ($Palpitación == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Palpitación"
                                id="Palpitación" value="Palpitación"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Diaforesis</span>
                            <input type="checkbox" <?php if ($Diaforesis_2 == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Diaforesis_2"
                                id="Diaforesis_2" value="Diaforesis"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                        <div class="col-md-3" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Síncope</span>
                            <input type="checkbox" <?php if ($Síncope_2 == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Síncope_1" id="Síncope_1"
                                value="Síncope" style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Intensidad Dolor</strong>
                        <select name="int_dolor" id="int_dolor" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione"<?php if ($int_dolor== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                            <option value="1/10"<?php if ($int_dolor== '1/10')echo 'selected'; ?>>1/10</option>
                            <option value="2/10"<?php if ($int_dolor== '2/10')echo 'selected'; ?>>2/10</option>
                            <option value="3/10"<?php if ($int_dolor== '3/10')echo 'selected'; ?>>3/10</option>
                            <option value="4/10"<?php if ($int_dolor== '4/10')echo 'selected'; ?>>4/10</option>
                            <option value="5/10"<?php if ($int_dolor== '5/10')echo 'selected'; ?>>5/10</option>
                            <option value="6/10"<?php if ($int_dolor== '6/10')echo 'selected'; ?>>6/10</option>
                            <option value="7/10"<?php if ($int_dolor== '7/10')echo 'selected'; ?>>7/10</option>
                            <option value="8/10"<?php if ($int_dolor== '8/10')echo 'selected'; ?>>8/10</option>
                            <option value="9/10"<?php if ($int_dolor== '9/10')echo 'selected'; ?>>9/10</option>
                            <option value="10/10"<?php if ($int_dolor== '10/10')echo 'selected'; ?>>10/10</option>
                        </select>
                    </div>


                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Electrocardiograma</strong>
                    <select name="Electrocardiograma" id="Electrocardiograma" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Electrocardiograma== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Normal"<?php if ($Electrocardiograma== 'Normal')echo 'selected'; ?>>Normal</option>
                        <option value="Isquema"<?php if ($Electrocardiograma== 'Isquema')echo 'selected'; ?>>Isquema</option>
                        <option value="Necrosis"<?php if ($Electrocardiograma== 'Necrosis')echo 'selected'; ?>>Necrosis</option>
                        <option value="Lesión"<?php if ($Electrocardiograma== 'Lesión')echo 'selected'; ?>>Lesión</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Localización Electrocardiograma</strong>
                    <select name="local_electro" id="local_electro" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($local_electro== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Anterior"<?php if ($local_electro== 'Anterior')echo 'selected'; ?>>Anterior</option>
                        <option value="Septal"<?php if ($local_electro== 'Septal')echo 'selected'; ?>>Septal</option>
                        <option value="Apical"<?php if ($local_electro== 'Apical')echo 'selected'; ?>>Apical</option>
                        <option value="Anteroseptal"<?php if ($local_electro== 'Anteroseptal')echo 'selected'; ?>>Anteroseptal</option>
                        <option value="Anterior Extenso"<?php if ($local_electro== 'Anterior Extenso')echo 'selected'; ?>>Anterior Extenso</option>
                        <option value="Lateral Alto"<?php if ($local_electro== 'Lateral Alto')echo 'selected'; ?>>Lateral Alto</option>
                        <option value="Lateral Bajo"<?php if ($local_electro== 'Lateral Bajo')echo 'selected'; ?>>Lateral Bajo</option>
                        <option value="Lateral"<?php if ($local_electro== 'Lateral')echo 'selected'; ?>>Lateral</option>
                        <option value="Inferior"<?php if ($local_electro== 'Inferior')echo 'selected'; ?>>Inferior</option>
                        <option value="Posterior"<?php if ($local_electro== 'Posterior')echo 'selected'; ?>>Posterior</option>
                        <option value="Ventrículo Derecho"<?php if ($local_electro== 'Ventrículo Derecho')echo 'selected'; ?>>Ventrículo Derecho</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Con o Sin Elevación</strong>
                    <select name="ConSin_elevancion" id="ConSin_elevancion" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($ConSin_elevancion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Con Elevación del ST"<?php if ($ConSin_elevancion== 'Con Elevación del ST')echo 'selected'; ?>>Con Elevación del ST</option>
                        <option value="Sin Elevación del ST"<?php if ($ConSin_elevancion== 'Sin Elevación del ST')echo 'selected'; ?>>Sin Elevación del ST</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">MACE Hospitalario</strong>
                    <select name="mace" id="mace" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($mace== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="EVC"<?php if ($mace== 'EVC')echo 'selected'; ?>>EVC</option>
                        <option value="Killip Kimball"<?php if ($mace== 'Killip Kimball')echo 'selected'; ?>>Killip Kimball</option>
                        <option value="Reinfarto"<?php if ($mace== 'Reinfarto')echo 'selected'; ?>>Reinfarto</option>
                        <option value="Muerte"<?php if ($mace== 'Muerte')echo 'selected'; ?>>Muerte</option>
                    </select>
                </div>

                <div class="col-md-4" id="Killi_kimball">
                    <strong style="font-size: 13px;">Killip Kimball</strong>
                    <select name="Kill_kimbal" id="Kill_kimbal" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Kill_kimbal== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="I"<?php if ($Kill_kimbal== 'I')echo 'selected'; ?>>I</option>
                        <option value="II"<?php if ($Kill_kimbal== 'II')echo 'selected'; ?>>II</option>
                        <option value="III"<?php if ($Kill_kimbal== 'III')echo 'selected'; ?>>III</option>
                        <option value="IV"<?php if ($Kill_kimbal== 'IV')echo 'selected'; ?>>IV</option>
                        <option value="Sin Registro"<?php if ($Kill_kimbal== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        PARACLINICOS</h5>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px;">CK</strong>
                    <input type="text" class="control form-control" id="ck" name="ck" style="font-size: 13px;" value="<?php echo $ck; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">CK-MB</strong>
                    <input type="text" class="control form-control" id="ck_mb" name="ck_mb" sytle="font-size: 13px;" value="<?php echo $ck_mb; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Troponinas</strong>
                    <input type="text" class="control form-control" id="Troponinas" name="Troponinas" value="<?php echo $Troponinas; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Glucosa</strong>
                    <input type="text" class="control form-control" id="Glucosa" name="Glucosa" value="<?php echo $Glucosa; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Urea</strong>
                    <input type="text" class="control form-control" id="Urea" name="Urea" sytle="font-size: 13px;" value="<?php echo $Urea; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Creatinina</strong>
                    <input type="text" class="control form-control" id="Creatinina" name="Creatinina" value="<?php echo $Creatinina; ?>""
                        sytle="font-size: 13px;">
                </div>
                <div class="col-md-2">
                    <strong style="font-size: 13px">Colesterol</strong>
                    <input type="text" class="control form-control" id="Colesterol" name="Colesterol" value="<?php echo $Colesterol; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Trigliceridos</strong>
                    <input type="text" class="control form-control" id="Trigliceridos" name="Trigliceridos" value="<?php echo $Trigliceridos; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Ácido Úrico</strong>
                    <input type="text" class="control form-control" id="Acido_Urico" name="Acido_Urico" value="<?php echo $Acido_Urico; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">HB Glucosilada</strong>
                    <input type="text" class="control form-control" id="hb_glucosilada" name="hb_glucosilada" value="<?php echo $hb_glucosilada; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Proteínas</strong>
                    <input type="text" class="control form-control" id="Proteinas" name="Proteinas" value="<?php echo $Proteinas; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">LDL</strong>
                    <input type="text" class="control form-control" id="LDL" name="LDL" sytle="font-size: 13px;" value="<?php echo $LDL; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">HDL</strong>
                    <input type="text" class="control form-control" id="HDL" name="HDL" sytle="font-size: 13px;" value="<?php echo $HDL; ?>">
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        TRATAMIENTO TROMBÓLISIS</h5>
                </div>

                <div class="col-md-12">
                    <strong style="font-size: 13px;">Fibrinólisis</strong>
                    <select name="Fibrinolisis" id="Fibrinolisis" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Fibrinolisis== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Fibrinolisis== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Fibrinolisis== 'No')echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="container" id="inicio_fin_txfibronilis">
                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Fecha/hora de inicio</strong>
                            <input type="datetime-local" value="<?php echo $Inicio_txfibronilis; ?>" class="control form-control" id="Inicio_txfibronilis"
                                name="Inicio_txfibronilis" style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Fecha/hora de finaliza</strong>
                            <input type="datetime-local" value="<?php echo $finaliza_txfibronilis; ?>" class="control form-control" id="finaliza_txfibronilis"
                                name="finaliza_txfibronilis" style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;"> Tipo Fibrinólisis</strong>
                            <select name="Tipo_Fibrinolisis" id="Tipo_Fibrinolisis" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione"<?php if ($Tipo_Fibrinolisis== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                <option value="Tecnecteplasa"<?php if ($Tipo_Fibrinolisis== 'Tecnecteplasa')echo 'selected'; ?>>Tecnecteplasa</option>
                                <option value="Alteplasa"<?php if ($Tipo_Fibrinolisis== 'Alteplasa')echo 'selected'; ?>>Alteplasa</option>
                                <option value="Estreptoquinasa"<?php if ($Tipo_Fibrinolisis== 'Estreptoquinasa')echo 'selected'; ?>>Estreptoquinasa</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Procedimiento Exitoso</strong>
                            <select name="procedimiento_exitoso_1" id="procedimiento_exitoso_1" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione"<?php if ($procedimiento_exitoso_1== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                <option value="Tecnecteplasa"<?php if ($procedimiento_exitoso_1== 'Tecnecteplasa')echo 'selected'; ?>>Tecnecteplasa</option>
                                <option value="Alteplasa"<?php if ($procedimiento_exitoso_1== 'Alteplasa')echo 'selected'; ?>>Alteplasa</option>
                                <option value="Estreptoquinasa"<?php if ($procedimiento_exitoso_1== 'Estreptoquinasa')echo 'selected'; ?>>Estreptoquinasa</option>
                            </select>
                        </div>

                    </div>
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        ANGIOPLASTIA CORONARIA TRANSLUMINAL PERCUTANEA</h5>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Fecha/Hora</strong>
                    <input type="datetime-local" value="<?php echo $Inicio_Angio; ?>" class="control form-control" id="Inicio_Angio" name="Inicio_Angio" style="font-size: 13px;">
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Tipo de Procedimiento</strong>
                    <select name="Tipo_Procedimiento" id="Tipo_Procedimiento" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Tipo_Procedimiento== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Primaria"<?php if ($Tipo_Procedimiento== 'Primaria')echo 'selected'; ?>>Primaria</option>
                        <option value="Rescate"<?php if ($Tipo_Procedimiento== 'Rescate')echo 'selected'; ?>>Rescate</option>
                        <option value="Farmacoinvasivo"<?php if ($Tipo_Procedimiento== 'Farmacoinvasivo')echo 'selected'; ?>>Farmacoinvasivo</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Sitio Punción</strong>
                    <select name="sitio_puncion" id="sitio_puncion" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($sitio_puncion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Braquial"<?php if ($sitio_puncion== 'Braquial')echo 'selected'; ?>>Braquial</option>
                        <option value="Femoral"<?php if ($sitio_puncion== 'Femoral')echo 'selected'; ?>>Femoral</option>
                        <option value="Radial"<?php if ($sitio_puncion== 'Radial')echo 'selected'; ?>>Radial</option>
                        <option value="Cubital"<?php if ($sitio_puncion== 'Cubital')echo 'selected'; ?>>Cubital</option>
                        <option value="Transradial Distal"<?php if ($sitio_puncion== 'Transradial Distal')echo 'selected'; ?>>Transradial Distal</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Lesiones Coronarias</strong>
                    <select name="Lesiones_coronarias" id="Lesiones_coronarias" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Lesiones_coronarias== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Lesiones_coronarias== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Lesiones_coronarias== 'No')echo 'selected'; ?>>No</option>

                    </select>
                </div>


                <div class="container" id="Si_lesionCoronaria">

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108,0.5);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                            Lesiones Coronarias</h5>
                    </div>

                    <div class="row">

                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Coronaria Derecha</span>
                            <input type="checkbox" <?php if ($Coronaria_Derecha == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Coronaria_Derecha"
                                id="Coronaria_Derecha" value="Coronaria Derecha"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Coronaria Izquierda</span>
                            <input type="checkbox" <?php if ($Coronaria_Izquierda == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Coronaria_Izquierda"
                                id="Coronaria_Izquierda" value="Coronaria Izquierda"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Descendente Anterior</span>
                            <input type="checkbox" <?php if ($Descendente_Anterior == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Descendente_Anterior"
                                id="Descendente_Anterior" value="Descendente Anterior"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Descendente Posterior</span>
                            <input type="checkbox" <?php if ($Descendente_Posterior == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Descendente_Posterior"
                                id="Descendente_Posterior" value="Descendente Posterior"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tronco Coronario Izquierdo</span>
                            <input type="checkbox" <?php if ($Tronco_Coronario_Izquierdo == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox"
                                name="Tronco_Coronario_Izquierdo" id="Tronco_Coronario_Izquierdo"
                                value="Tronco Coronario Izquierdo"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Bifurcación</span>
                            <input type="checkbox" <?php if ($Bifurcacion == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Bifurcacion"
                                id="Bifurcacion" value="Bifurcación"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Circunfleja</span>
                            <input type="checkbox" <?php if ($Circunfleja == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Circunfleja"
                                id="Circunfleja" value="Circunfleja"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Dominancia Derecha</span>
                            <input type="checkbox" <?php if ($Dominancia_Derecha == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Dominancia_Derecha"
                                id="Dominancia_Derecha" value="Dominancia Derecha"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Codominancia</span>
                            <input type="checkbox" <?php if ($Codominancia == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Codominancia"
                                id="Codominancia" value="Codominancia"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Dominancia Izquierda</span>
                            <input type="checkbox" <?php if ($Dominancia_Izquierda == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Dominancia_Izquierda"
                                id="Dominancia_Izquierda" value="Dominancia Izquierda"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ramo Posterolateral</span>
                            <input type="checkbox" <?php if ($Ramo_Posterolateral == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Ramo_Posterolateral"
                                id="Ramo_Posterolateral" value="Ramo Posterolateral"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ramo Septales</span>
                            <input type="checkbox" <?php if ($Ramo_Septales == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Ramo_Septales"
                                id="Ramo_Septales" value="Ramo Septales"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Ramo Marginales</span>
                            <input type="checkbox" <?php if ($Ramo_Marginales == 'Si') echo "checked"; ?> class="form-check-input ra-checkbox" name="Ramo_Marginales"
                                id="Ramo_Marginales" value="Ramo Marginales"
                                style="font-size:14px; margin: 5px auto; display: block;">
                        </div>

                    </div>

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Clasificación DUQUE</strong>
                    <select name="duque" id="duque" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($duque== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="No aplica"<?php if ($duque== 'No aplica')echo 'selected'; ?>>No aplica</option>
                        <option value="A"<?php if ($duque== 'A')echo 'selected'; ?>>A</option>
                        <option value="B"<?php if ($duque== 'B')echo 'selected'; ?>>B</option>
                        <option value="C"<?php if ($duque== 'C')echo 'selected'; ?>>C</option>
                        <option value="D"<?php if ($duque== 'D')echo 'selected'; ?>>D</option>
                        <option value="E"<?php if ($duque== 'E')echo 'selected'; ?>>E</option>
                        <option value="F"<?php if ($duque== 'F')echo 'selected'; ?>>F</option>
                        <option value="G"<?php if ($duque== 'G')echo 'selected'; ?>>G</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Clasificación Medina</strong>
                    <select name="Medina" id="Medina" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Medina== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="No aplica"<?php if ($Medina== 'No aplica')echo 'selected'; ?>>No aplica</option>
                        <option value="Medina 1,0,0"<?php if ($Medina== 'Medina 1,0,0')echo 'selected'; ?>>Medina 1,0,0</option>
                        <option value="Medina 0,1,0"<?php if ($Medina== 'Medina 0,1,0')echo 'selected'; ?>>Medina 0,1,0</option>
                        <option value="Medina 1,1,0"<?php if ($Medina== 'Medina 1,1,0')echo 'selected'; ?>>Medina 1,1,0</option>
                        <option value="Medina 1,1,1"<?php if ($Medina== 'Medina 1,1,1')echo 'selected'; ?>>Medina 1,1,1</option>
                        <option value="Medina 0,0,1"<?php if ($Medina== 'Medina 0,0,1')echo 'selected'; ?>>Medina 0,0,1</option>
                        <option value="Medina 1,0,1"<?php if ($Medina== 'Medina 1,0,1')echo 'selected'; ?>>Medina 1,0,1</option>
                        <option value="Medina 0,1,1"<?php if ($Medina== 'Medina 0,1,1')echo 'selected'; ?>>Medina 0,1,1</option>
                    </select>

                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Clasificación ACC/AHA</strong>
                    <select name="clasificacion_acc" id="clasificacion_acc" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($clasificacion_acc== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Tipo A"<?php if ($clasificacion_acc== 'Tipo A')echo 'selected'; ?>>Tipo A</option>
                        <option value="Tipo B"<?php if ($clasificacion_acc== 'Tipo B')echo 'selected'; ?>>Tipo B</option>
                        <option value="Tipo C"<?php if ($clasificacion_acc== 'Tipo C')echo 'selected'; ?>>Tipo C</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">TIMI</strong>
                    <select name="TIMI" id="TIMI" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($TIMI== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($TIMI== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($TIMI== 'No')echo 'selected'; ?>>No</option>
                    </select>
                </div>



                <div class="col-md-3" id="timi_pro1">
                    <strong style="font-size: 13px;">Procedimiento TIMI</strong>
                    <select name="Procedimiento_TIMI" id="Procedimiento_TIMI" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Procedimiento_TIMI== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Preprocedimiento"<?php if ($Procedimiento_TIMI== 'Preprocedimiento')echo 'selected'; ?>>Preprocedimiento</option>
                        <option value="Procedimiento"<?php if ($Procedimiento_TIMI== 'Procedimiento')echo 'selected'; ?>>Procedimiento</option>
                        <option value="Postprocedimiento"<?php if ($Procedimiento_TIMI== 'Postprocedimiento')echo 'selected'; ?>>Postprocedimiento</option>
                    </select>
                </div>

                <div class="col-md-3" id="timi_pro2">
                    <strong style="font-size: 13px;">Clasificación TIMI</strong>
                    <select name="Calificacion_TIMI" id="Calificacion_TIMI" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Calificacion_TIMI== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Sin Reperfusón"<?php if ($Calificacion_TIMI== 'Sin Reperfusón')echo 'selected'; ?>>Sin Reperfusón</option>
                        <option value="Penetración Sin Reperfusión"<?php if ($Calificacion_TIMI== 'Penetración Sin Reperfusión')echo 'selected'; ?>>Penetración Sin Reperfusión</option>
                        <option value="Perfusión Parcial"<?php if ($Calificacion_TIMI== 'Perfusión Parcial')echo 'selected'; ?>>Perfusión Parcial</option>
                        <option value="Perfusión Completa"<?php if ($Calificacion_TIMI== 'Perfusión Completa')echo 'selected'; ?>>Perfusión Completa</option>
                    </select>
                </div>



                <div class="col-md-6">
                    <strong style="font-size: 13px;">Tomografía Coherencia Óptica</strong>
                    <select name="Tomografia_coherencia" id="Tomografia_coherencia" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Tomografia_coherencia== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Tomografia_coherencia== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Tomografia_coherencia== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Tomografia_coherencia== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Trombosis Intracoronaria</strong>
                    <select name="Trombosis_intra" id="Trombosis_intra" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Trombosis_intra== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Trombosis_intra== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Trombosis_intra== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Trombosis_intra== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Aspiración Trombo</strong>
                    <select name="Aspiracion_trombo" id="Aspiracion_trombo" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Aspiracion_trombo== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Aspiracion_trombo== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Aspiracion_trombo== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Aspiracion_trombo== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Prótesis Metálico</strong>
                    <select name="Protesis_metalico" id="Protesis_metalico" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Protesis_metalico== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Protesis_metalico== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Protesis_metalico== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Protesis_metalico== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3" id="num_protesi">
                    <strong style="font-size: 13px;">Número de Prótesis</strong>
                    <input type="text" class="control form-control" id="protesis_num" name="protesis_num" style="font-size: 13px;" value="<?php echo $protesis_num; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Revascularización</strong>
                    <select name="revascularizacion" id="revascularizacion" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($revascularizacion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="No aplica"<?php if ($revascularizacion== 'No aplica')echo 'selected'; ?>>No aplica</option>
                        <option value="Completa"<?php if ($revascularizacion== 'Completa')echo 'selected'; ?>>Completa</option>
                        <option value="Incompleta"<?php if ($revascularizacion== 'Incompleta')echo 'selected'; ?>>Incompleta</option>
                        <option value="Sin Registro"<?php if ($revascularizacion== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Procedimiento Exitoso</strong>
                    <select name="Procedimiento_exitoso_2" id="Procedimiento_exitoso_2" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Procedimiento_exitoso_2== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Procedimiento_exitoso_2== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Procedimiento_exitoso_2== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Procedimiento_exitoso_2== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">AIRBUS</strong>
                    <select name="AIRBUS" id="AIRBUS" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($AIRBUS== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($AIRBUS== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($AIRBUS== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($AIRBUS== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3" id="Resultado_airbus">
                    <strong style="font-size: 13px;">Resultado AIRBUS</strong>
                    <select name="Resu_AIRBUS" id="Resu_AIRBUS" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Resu_AIRBUS== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Estenosis"<?php if ($Resu_AIRBUS== 'Estenosis')echo 'selected'; ?>>Estenosis</option>
                        <option value="Disección"<?php if ($Resu_AIRBUS== 'Disección')echo 'selected'; ?>>Disección</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Prótesis Endovascular</strong>
                    <select name="Prote_Endovascular" id="Prote_Endovascular" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Prote_Endovascular== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Absorb"<?php if ($Prote_Endovascular== 'Absorb')echo 'selected'; ?>>Absorb</option>
                        <option value="Con Medicación"<?php if ($Prote_Endovascular== 'Con Medicación')echo 'selected'; ?>>Con Medicación</option>
                        <option value="Sin Medicación"<?php if ($Prote_Endovascular== 'Sin Medicación')echo 'selected'; ?>>Sin Medicación</option>
                        <option value="Ninguno"<?php if ($Prote_Endovascular== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                    </select>
                </div>


                <div class="col-md-3" id="con_medicacion">
                    <strong style="font-size: 13px;">1er Generación</strong>
                    <select name="1_generacion" id="1_generacion" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($_1_generacion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Sirolimús"<?php if ($_1_generacion== 'Sirolimús')echo 'selected'; ?>>Sirolimús</option>
                        <option value="Paclitaxel"<?php if ($_1_generacion== 'Paclitaxel')echo 'selected'; ?>>Paclitaxel</option>
                        <option value="Ninguno"<?php if ($_1_generacion== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                    </select>
                </div>

                <div class="col-md-3" id="con_medicacion_2">
                    <strong style="font-size: 13px;">2da Generación</strong>
                    <select name="2da_generacion" id="2da_generacion" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($_2da_generacion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Everulimus"<?php if ($_2da_generacion== 'Everulimus')echo 'selected'; ?>>Everulimus</option>
                        <option value="Ridaforulimus"<?php if ($_2da_generacion== 'Ridaforulimus')echo 'selected'; ?>>Ridaforulimus</option>
                        <option value="Zotarulimus"<?php if ($_2da_generacion== 'Zotarulimus')echo 'selected'; ?>>Zotarulimus</option>
                        <option value="Ninguno"<?php if ($_2da_generacion== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        TRATAMIENTO ESPECIAL</h5>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Litotricia Intracoronaria</strong>
                    <select name="Litotricia" id="Litotricia" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Litotricia== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Litotricia== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Litotricia== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Litotricia== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Schockwave C2</strong>
                    <select name="Schockwave" id="Schockwave" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Schockwave== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Schockwave== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Schockwave== 'No')echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Schockwave== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-4" id="Complicaciones_Schockwave">
                    <strong style="font-size: 13px;">Complicaciones Schockwave C2</strong>
                    <select name="Schockwave_compli" id="Schockwave_compli" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Schockwave_compli== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="No Aplica"<?php if ($Schockwave_compli== 'No Aplica')echo 'selected'; ?>>No Aplica</option>
                        <option value="Disección"<?php if ($Schockwave_compli== 'Disección')echo 'selected'; ?>>Disección</option>
                        <option value="No Reflow"<?php if ($Schockwave_compli== 'No Reflow')echo 'selected'; ?>>No Reflow</option>
                        <option value="SlowFlow"<?php if ($Schockwave_compli== 'SlowFlow')echo 'selected'; ?>>SlowFlow</option>
                        <option value="Perforación"<?php if ($Schockwave_compli== 'Perforación')echo 'selected'; ?>>Perforación</option>
                        <option value="Ninguno"<?php if ($Schockwave_compli== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108,0.5);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        Marcapasos Temporal</h5>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Marcapasos</strong>
                    <select name="Marcapasos" id="Marcapasos" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Marcapasos== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Marcapasos== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Marcapasos== 'No')echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-6" id="sopor_ventri">
                    <strong style="font-size: 13px;">Soporte Ventricular</strong>
                    <select name="Soporte_ventricular" id="Soporte_ventricular" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Soporte_ventricular== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="No aplica"<?php if ($Soporte_ventricular== 'No aplica')echo 'selected'; ?>>No aplica</option>
                        <option value="Sin Registro"<?php if ($Soporte_ventricular== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                        <option value="Balón de Contrapulsación"<?php if ($Soporte_ventricular== 'Balón de Contrapulsación')echo 'selected'; ?>>Balón de Contrapulsación</option>
                        <option value="ECMO"<?php if ($Soporte_ventricular== 'ECMO')echo 'selected'; ?>>ECMO</option>
                        <option value="IMPELLA"<?php if ($Soporte_ventricular== 'IMPELLA')echo 'selected'; ?>>IMPELLA</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108,0.5);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        Complicaciones</h5>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Complicaciones</strong>
                    <select name="Complicaciones" id="Complicaciones" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Complicaciones== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Ninguno"<?php if ($Complicaciones== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                        <option value="Disfunción Ventricular"<?php if ($Complicaciones== 'Disfunción Ventricular')echo 'selected'; ?>>Disfunción Ventricular</option>
                        <option value="Mecánicas"<?php if ($Complicaciones== 'Mecánicas')echo 'selected'; ?>>Mecánicas</option>
                        <option value="Pericárdicas"<?php if ($Complicaciones== 'Pericárdicas')echo 'selected'; ?>>Pericárdicas</option>
                        <option value="Eléctricas"<?php if ($Complicaciones== 'Eléctricas')echo 'selected'; ?>>Eléctricas</option>
                    </select>
                </div>

                <div class="col-md-6" id="Disfuncion_ventri">
                    <strong style="font-size: 13px;">Tipo Disfunción Ventricular</strong>
                    <select name="disfu_ventri" id="disfu_ventri" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($disfu_ventri== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Remodelado Adverso"<?php if ($disfu_ventri== 'Remodelado Adverso')echo 'selected'; ?>>Remodelado Adverso</option>
                        <option value="Insuficiencia Cardiaca Aguda"<?php if ($disfu_ventri== 'Insuficiencia Cardiaca Aguda')echo 'selected'; ?>>Insuficiencia Cardiaca Aguda</option>
                        <option value="Shock Cardiogénico"<?php if ($disfu_ventri== 'Shock Cardiogénico')echo 'selected'; ?>>Shock Cardiogénico</option>
                        <option value="Infarto de Ventrículo Derecho"<?php if ($disfu_ventri== 'Infarto de Ventrículo Derecho')echo 'selected'; ?>>Infarto de Ventrículo Derecho</option>
                        <option value="Edema Agudo Pulmonar"<?php if ($disfu_ventri== 'Edema Agudo Pulmonar')echo 'selected'; ?>>Edema Agudo Pulmonar</option>
                        <option value="IAM Periprocedimiento"<?php if ($disfu_ventri== 'IAM Periprocedimiento')echo 'selected'; ?>>IAM Periprocedimiento</option>
                        <option value="Tamponade"<?php if ($disfu_ventri== 'Tamponade')echo 'selected'; ?>>Tamponade</option>
                        <option value="Muerte"<?php if ($disfu_ventri== 'Muerte')echo 'selected'; ?>>Muerte</option>
                    </select>
                </div>

                <div class="col-md-6" id="Mecanicas">
                    <strong style="font-size: 13px;">Tipo Complicaciones Mecánicas</strong>
                    <select name="compli_mecanicas" id="compli_mecanicas" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($compli_mecanicas== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Comunicación Interventricular"<?php if ($compli_mecanicas== 'Comunicación Interventricular')echo 'selected'; ?>>Comunicación Interventricular</option>
                        <option value="Rotura Cardiaca"<?php if ($compli_mecanicas== 'Rotura Cardiaca')echo 'selected'; ?>>Rotura Cardiaca</option>
                        <option value="Insuficiencia Mitral Aguda"<?php if ($compli_mecanicas== 'Insuficiencia Mitral Aguda')echo 'selected'; ?>>Insuficiencia Mitral Aguda</option>
                        <option value="Ruptura de Septum"<?php if ($compli_mecanicas== 'Ruptura de Septum')echo 'selected'; ?>>Ruptura de Septum</option>
                        <option value="Ruptura de Cuerdas"<?php if ($compli_mecanicas== 'Ruptura de Cuerdas')echo 'selected'; ?>>Ruptura de Cuerdas</option>
                        <option value="Ruptura de Pared Libre"<?php if ($compli_mecanicas== 'Ruptura de Pared Libre')echo 'selected'; ?>>Ruptura de Pared Libre</option>
                    </select>
                </div>

                <div class="col-md-6" id="Pericardicas">
                    <strong style="font-size: 13px;">Pericárdicas</strong>
                    <select name="compli_Pericarditis" id="compli_Pericarditis" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($compli_Pericarditis== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Pericarditis"<?php if ($compli_Pericarditis== 'Pericarditis')echo 'selected'; ?>>Pericarditis</option>
                    </select>
                </div>

                <div class="col-md-6" id="Electricas">
                    <strong style="font-size: 13px;">Eléctricas</strong>
                    <select name="compli_Electricas" id="compli_Electricas" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($compli_Electricas== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Taquicardia Ventricular"<?php if ($compli_Electricas== 'Taquicardia Ventricular')echo 'selected'; ?>>Taquicardia Ventricular</option>
                        <option value="Fibrilación Ventricular"<?php if ($compli_Electricas== 'Fibrilación Ventricular')echo 'selected'; ?>>Fibrilación Ventricular</option>
                        <option value="Fibrilación Auricular"<?php if ($compli_Electricas== 'Fibrilación Auricular')echo 'selected'; ?>>Fibrilación Auricular</option>
                        <option value="Bloqueo Auroventricular"<?php if ($compli_Electricas== 'Bloqueo Auroventricular')echo 'selected'; ?>>Bloqueo Auroventricular</option>
                        <option value="Trastorno de la Conducción"<?php if ($compli_Electricas== 'Trastorno de la Conducción')echo 'selected'; ?>>Trastorno de la Conducción</option>
                        <option value="Arritmia"<?php if ($compli_Electricas== 'Arritmia')echo 'selected'; ?>>Arritmia</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        Viabilidad y Perfusión Miocardia</h5>
                </div>


                <div class="col-md-6">
                    <strong style="font-size: 13px;">Gammagrama Cardiaco Inicial</strong>
                    <select name="Gamma" id="Gamma" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Gamma== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Gamma== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Gamma== 'No')echo 'selected'; ?>>No</option>
                    </select>
                </div>


                <div class="col-md-6" id="resultado_gamma">
                    <strong style="font-size: 13px;">Resultado Gammagrama Cardiaco</strong>
                    <select name="gamma_cardi" id="gamma_cardi" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($gamma_cardi== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($gamma_cardi== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($gamma_cardi== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-6" id="positivo_1">
                    <strong style="font-size: 13px;">Localización Gammagrama</strong>
                    <select name="Localizacion_gamma" id="Localizacion_gamma" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Localizacion_gamma== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Inferior"<?php if ($Localizacion_gamma== 'Inferior')echo 'selected'; ?>>Inferior</option>
                        <option value="Septal"<?php if ($Localizacion_gamma== 'Septal')echo 'selected'; ?>>Septal</option>
                        <option value="Lateral"<?php if ($Localizacion_gamma== 'Lateral')echo 'selected'; ?>>Lateral</option>
                        <option value="Ninguno"<?php if ($Localizacion_gamma== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                    </select>
                </div>


                <div class="col-md-6" id="positivo_2">
                    <strong style="font-size: 13px;">Segmento</strong>
                    <select name="Segmento_gamma" id="Segmento_gamma" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Segmento_gamma== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Apical"<?php if ($Segmento_gamma== 'Apical')echo 'selected'; ?>>Apical</option>
                        <option value="Basal"<?php if ($Segmento_gamma== 'Basal')echo 'selected'; ?>>Basal</option>
                        <option value="Medio"<?php if ($Segmento_gamma== 'Medio')echo 'selected'; ?>>Medio</option>
                        <option value="Ninguno"<?php if ($Segmento_gamma== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                    </select>
                </div>




                <div class="col-md-6">
                    <strong style="font-size: 13px;">Resonancia Magnetica Inicial</strong>
                    <select name="Resonancia_inicial" id="Resonancia_inicial" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Resonancia_inicial== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Resonancia_inicial== 'Si')echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Resonancia_inicial== 'No')echo 'selected'; ?>>No</option>
                    </select>
                </div>



                <div class="col-md-6" id="resonancia_resu">
                    <strong style="font-size: 13px;">Resultado Resonancia Magnetica</strong>
                    <select name="resultado_resonancia" id="resultado_resonancia" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($resultado_resonancia== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($resultado_resonancia== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($resultado_resonancia== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-6" id="resonancia_ergometria">
                    <strong style="font-size: 13px;">Ergometría Inicial</strong>
                    <select name="ergometria" id="ergometria" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($ergometria== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Protocolo Bruce"<?php if ($ergometria== 'Protocolo Bruce')echo 'selected'; ?>>Protocolo Bruce</option>
                    </select>
                </div>



                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 1</strong>
                    <select name="Etapa_1" id="Etapa_1" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_1== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_1== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_1== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 2</strong>
                    <select name="Etapa_2" id="Etapa_2" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_2== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_2== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_2== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 3</strong>
                    <select name="Etapa_3" id="Etapa_3" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_3== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_3== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_3== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 4</strong>
                    <select name="Etapa_4" id="Etapa_4" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_4== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_4== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_4== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 5</strong>
                    <select name="Etapa_5" id="Etapa_5" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_5== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_5== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_5== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 6</strong>
                    <select name="Etapa_6" id="Etapa_6" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_6== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_6== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_6== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Etapa 7</strong>
                    <select name="Etapa_7" id="Etapa_7" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Etapa_7== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Positivo"<?php if ($Etapa_7== 'Positivo')echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo"<?php if ($Etapa_7== 'Negativo')echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Suspensión de Estudio</strong>
                    <select name="Suspension_estudio" id="Suspension_estudio" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Suspension_estudio== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Diminución de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia"<?php if ($Suspension_estudio== 'Diminución de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia')echo 'selected'; ?>> Diminución de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia</option>
                        <option value="Arritmia"<?php if ($Suspension_estudio== 'Arritmia')echo 'selected'; ?>>Arritmia</option>
                        <option value="Angina Moderada"<?php if ($Suspension_estudio== 'Angina Moderada')echo 'selected'; ?>>Angina Moderada</option>
                        <option value="Aumento de Actividad de Sistema Nervioso"<?php if ($Suspension_estudio== 'Aumento de Actividad de Sistema Nervioso')echo 'selected'; ?>>Aumento de Actividad de Sistema Nervioso</option>
                        <option value="Cianosis/ Palidez"<?php if ($Suspension_estudio== 'Cianosis/ Palidez')echo 'selected'; ?>>Cianosis/ Palidez</option>
                        <option value="Deseo del Paciente de Detenerse"<?php if ($Suspension_estudio== 'Deseo del Paciente de Detenerse')echo 'selected'; ?>>Deseo del Paciente de Detenerse</option>
                        <option value="Elevación del Segmento ST(< 1Mm)"<?php if ($Suspension_estudio== 'Elevación del Segmento ST(< 1Mm)')echo 'selected'; ?>> Elevación del Segmento ST (< 1Mm)</option>
                        <option value="Taquicardia Ventricular Sostenina"<?php if ($Suspension_estudio== 'Taquicardia Ventricular Sostenina')echo 'selected'; ?>>Taquicardia Ventricular Sostenina</option>
                        <option value="No aplica"<?php if ($Suspension_estudio== 'No aplica')echo 'selected'; ?>>No aplica</option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        Ecocardiograma </h5>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px">Diastólico Inicial</strong>
                    <input type="text" class="control form-control" id="Distolico_inicial" name="Distolico_inicial" value="<?php echo $Distolico_inicial; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px">Sistolico Inicial</strong>
                    <input type="text" class="control form-control" id="Sistolico_inicial" name="Sistolico_inicial" value="<?php echo $Sistolico_inicial; ?>""
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Frac. Eyección Ventrículo Izq Inicial</strong>
                    <select name="eyeccion_ventriizqui" id="eyeccion_ventriizqui" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($eyeccion_ventriizqui== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Menos del 30%"<?php if ($eyeccion_ventriizqui== 'Menos del 30%')echo 'selected'; ?>>Menos del 30%</option>
                        <option value="Del 31% -50%"<?php if ($eyeccion_ventriizqui== 'Del 31% -50%')echo 'selected'; ?>>Del 31% -50%</option>
                        <option value="Del 51% -70%"<?php if ($eyeccion_ventriizqui== 'Del 51% -70%')echo 'selected'; ?>>Del 51% -70%</option>
                        <option value="Más del 71%"<?php if ($eyeccion_ventriizqui== 'Más del 71%')echo 'selected'; ?>>Más del 71%</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Movilidad Inicial</strong>
                    <select name="movilidad_inicial" id="movilidad_inicial" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($movilidad_inicial== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Acinesia"<?php if ($movilidad_inicial== 'Acinesia')echo 'selected'; ?>>Acinesia</option>
                        <option value="Aneurismático"<?php if ($movilidad_inicial== 'Aneurismático')echo 'selected'; ?>>Aneurismático</option>
                        <option value="Discinecia"<?php if ($movilidad_inicial== 'Discinecia')echo 'selected'; ?>>Discinecia</option>
                        <option value="Hipocinesia"<?php if ($movilidad_inicial== 'Hipocinesia')echo 'selected'; ?>>Hipocinesia</option>
                        <option value="Normal"<?php if ($movilidad_inicial== 'Normal')echo 'selected'; ?>>Normal</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <strong style="font-size: 13px;">Segmento</strong>
                    <select name="Segmento" id="Segmento" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Segmento== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Ninguno"<?php if ($Segmento== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                        <option value="Apical"<?php if ($Segmento== 'Apical')echo 'selected'; ?>>Apical</option>
                        <option value="Basal"<?php if ($Segmento== 'Basal')echo 'selected'; ?>>Basal</option>
                        <option value="Medio"<?php if ($Segmento== 'Medio')echo 'selected'; ?>>Medio</option>
                    </select>
                </div>

                <!-- Seguimiento Postprocedimiento -->

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
            background-color:rgb(255, 65, 108);
            color: aliceblue;
            margin-top:15px;
            font-size: 13px;">
                        Seguimiento Postprocedimiento </h5>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Causa de Defunción</strong>
                    <select name="Causa_defun" id="Causa_defun" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Causa_defun== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                        <option value="Cardiaca"<?php if ($Causa_defun== 'Cardiaca')echo 'selected'; ?>>Cardiaca</option>
                        <option value="No Cardiaca"<?php if ($Causa_defun== 'No Cardiaca')echo 'selected'; ?>>No Cardiaca</option>
                        <option value="Sin Registro"<?php if ($Causa_defun== 'Sin Registro')echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-6" id="fecha_defuncion">
                    <strong style="font-size: 13px">Fecha de Defunción</strong>
                    <input type="datetime-local" value="<?php echo $Defuncion_fecha; ?>" class="control form-control" id="Defuncion_fecha"
                        name="Defuncion_fecha" style="font-size: 13px;">
                </div>



            </div>


            <br>

            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
            </div><br><br>

        </form>

    </div>
        <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/scripteditar.js"></script>

<script type="module">
    import { editForm } from "./js/update.js";
    editForm();
</script>



</html>