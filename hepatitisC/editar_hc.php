<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['valid_user'])) {
    // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
    header('Location: ../login/index.php');
    exit;
}
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
    <title>Editar Paciente</title>
</head>

<!-- Inicia cuerpo de la página -->

<body>
    <!-- Se agrega header-->
    <header>
        <p style="color: aliceblue; margin-top: 20px;">EDITAR REGISTRO</p><br>
    </header><br>

    <form id="edit_form" method="POST" autocomplete="off">
        <div class="container" width="100%" height="800px" style="margin-bottom: 100px;">
            <div class="row">
                <div class="col col-2">
                    <!--botones-->
                    <a href="index.php">
                        <button type="button" class="btn btn-warning">Volver</button>
                    </a>
                </div>

                <div style="background-color: rgb(210, 180, 140);
                        border-radius: 10px;
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                    <h6>Datos del Paciente</h6>
                </div>

                <div class="row">
                    <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

                    <div class="col-md-4" id="idcurp">
                        <strong style="font-size: 12px;">CURP</strong>
                        <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP..." style="font-size: 12px;" required value="<?php echo $curp; ?>">
                    </div>

                    <div class="col-md-4" id="idnombre">
                        <strong style="font-size: 12px;">Nombre Completo</strong>
                        <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" placeholder="Nombre(s) Apellidos" style="font-size: 12px;" required value="<?php echo $nombre; ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Fecha Nacimiento</strong>
                        <input id="fecha" name="fecha" type="date" onblur="curp2date();" class="control form-control" style="font-size: 12px;" readonly value="<?php echo $fecha_nacimiento; ?>">
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Edad</strong>
                        <input id="edad" name="edad" type="text" class="control form-control" style="font-size: 12px;" readonly value="<?php echo $edad; ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Sexo</strong>
                        <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 12px;" readonly value="<?php echo $sexo; ?>">
                    </div>

                    <div class="col-md-4" style="font-size: 12px;">
                        <strong style="font-size: 12px;">Estado Civil</strong>
                        <select name="estadocivil" id="estadocivil" class="form-control">
                            <option value="Sin Registro" <?php if ($estado_civil == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Soltero" <?php if ($estado_civil == 'Soltero') echo 'selected'; ?>>Soltero(a)</option>
                            <option value="Casado" <?php if ($estado_civil == 'Casado') echo 'selected'; ?>>Casado(a)</option>
                            <option value="Viudo" <?php if ($estado_civil == 'Viudo') echo 'selected'; ?>>Viudo(a)</option>
                            <option value="Divorciado" <?php if ($estado_civil == 'Divorciado') echo 'selected'; ?>>Divorciado(a)</option>
                            <option value="Concubinato" <?php if ($estado_civil == 'Concubinato') echo 'selected'; ?>>Concubinato</option>
                            <option value="Divorciado" <?php if ($estado_civil == 'Divorciado') echo 'selected'; ?>>Separado(a)</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Estado</strong>
                        <select name="estado" id="estado" class="form-control">
                            <?php
                            if (!empty($AllData_Estados)) {
                                foreach ($AllData_Estados as $row1) {
                                    $selected = ($row1["Estado_Id"] == $Estado) ? 'selected' : '';
                                    echo "<option value='" . $row1["Estado_Id"] . "' $selected>" . $row1["NombreEstado"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No hay datos disponibles</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Municipio</strong>
                        <select name="municipio" id="municipio" class="form-control">
                            <?php
                            if (!empty($AllData_Municipios)) {
                                foreach ($AllData_Municipios as $row2) {
                                    $selected = ($row2["MunicipioID"] == $Municipio) ? 'selected' : '';
                                    echo "<option value='" . $row2["MunicipioID"] . "' $selected>" . $row2["NombreMunicipio"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No hay datos disponibles</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Referencia</strong>
                        <select id="referencia" name="referencia" class="form-control">
                            <option value="Seleccione">Seleccione...</option>
                            <option value="si" <?php if ($referencia == 'si') echo 'selected'; ?>>Sí</option>
                            <option value="no" <?php if ($referencia == 'no') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="unidad_referencia_div">
                        <strong style="font-size: 12px;">Unidad de Referencia</strong>
                        <input list="Clues" type="text" name="unidad_referencia" class="form-control" value="<?php echo $unidad_referencia; ?>">
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

                </div> <!--Se cierra <div class="row">-->


                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                        border-radius: 10px;
                            color: aliceblue;
                            text-align: center;
                            margin-top: 20px;">
                    <h6>Somatometría</h6>
                </div>

                <div class="row">

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Talla</strong>
                        <input type="text" class="form-control" id="talla" name="talla" required value="<?php echo $talla; ?>">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Peso</strong>
                        <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" required value="<?php echo $peso; ?>">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">IMC</strong>
                        <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" readonly value="<?php echo $imc; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 12px;">Resultado IMC</strong>
                        <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" readonly value="<?php echo $descripcionIMC; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 12px;">Circunferencia</strong>
                        <input type="number" step="any" class="form-control" id="circunferencia" name="circunferencia" required value="<?php echo $circunferencia; ?>">
                    </div>
                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                    border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Factores de Riesgo</h6>
                </div>
                <div class="container">
                    <fieldset>
                        <legend>
                            <div class="row" style="font-size: 12px;">

                                <!-- hice cambios aqui -->
                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Sin_Registro" name="FR_Sin_Registro" <?php if ($sinRegistro == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Sin_Registro" style="font-size: 12px;">Sin registro</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Relaciones_Sexuales" name="FR_Relaciones_Sexuales" <?php if ($relacionesSex == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Relaciones_Sexuales" style="font-size: 12px;">Relaciones Sexuales</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Transfusiones" name="FR_Transfusiones" <?php if ($transfusiones == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Transfusiones" style="font-size: 12px;">Transfusiones</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Drogas_Endovenosas" name="FR_Drogas_Endovenosas" <?php if ($drogasEnd == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Drogas_Endovenosas" style="font-size: 12px;">Drogas Endovenosas</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Piercing" name="FR_Piercing" <?php if ($piercing == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Piercing" style="font-size: 12px;">Piercing</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Presidiario" name="FR_Presidiario" <?php if ($presidiario == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Presidiario" style="font-size: 12px;">Presidiario</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Expresidiario" name="FR_Expresidiario" <?php if ($expresidiario == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Expresidiario" style="font-size: 12px;">Expresidiario</label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" id="FR_Situacion_de_Calle" name="FR_Situacion_de_Calle" <?php if ($situacionCalle == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="FR_Situacion_de_Calle" style="font-size: 12px;">Situación de Calle</label>
                                </div>
                            </div>
                        </legend>
                    </fieldset>
                </div>
                <!--************************************************************************************************-->

                <div class="col-md-12" id="idrelacionessexuales">

                    <div style="background-color: rgb(160, 82, 45,0.5);
                                        color: aliceblue;
                                        font-size: 12px;
                                        text-align: center;
                                        margin-top: 20px;">

                        Relaciones Sexuales
                    </div>

                    <!-- hice cambios aqui -->
                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row">


                                    <div class="col-md-4">
                                        <input class="form-check-input" type="checkbox" id="RS_Ninguna" name="RS_Ninguna" <?php if ($ninguna == 'Si') echo "checked"; ?>>
                                        <label class="form-check-label" for="RS_Ninguna" style="font-size: 12px;">Ninguna de las anteriores</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="form-check-input" type="checkbox" id="RS_Pacientes_con_VIH" name="RS_Pacientes_con_VIH" <?php if ($vih == 'Si') echo "checked"; ?>>
                                        <label class="form-check-label" for="RS_Pacientes_con_VIH" style="font-size: 12px;">Pacientes con VIH</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="form-check-input" type="checkbox" id="RS_Pacientes_con_Hepatitis" name="RS_Pacientes_con_Hepatitis" <?php if ($hepatitis == 'Si') echo "checked"; ?>>
                                        <label class="form-check-label" for="RS_Pacientes_con_Hepatitis" style="font-size: 12px;">Pacientes con Hepatitis</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="form-check-input" type="checkbox" id="RS_Sexo_Servidoras" name="RS_Sexo_Servidoras" <?php if ($sexoServidoras == 'Si') echo "checked"; ?>>
                                        <label class="form-check-label" for="RS_Sexo_Servidoras" style="font-size: 12px;">Sexo Servidoras</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="form-check-input" type="checkbox" id="RS_Parejas_Ocasionales" name="RS_Parejas_Ocasionales" <?php if ($parejasOcasionales == 'Si') echo "checked"; ?>>
                                        <label class="form-check-label" for="RS_Parejas_Ocasionales" style="font-size: 12px;">Parejas Ocasionales</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="form-check-input" type="checkbox" id="RS_Pacientes_con_Toxicomanias" name="RS_Pacientes_con_Toxicomanias" <?php if ($pacienteToxicomanias == 'Si') echo "checked"; ?>>
                                        <label class="form-check-label" for="RS_Pacientes_con_Toxicomanias" style="font-size: 12px;">Pacientes con Toxicomanias</label>
                                    </div>
                                </div>
                    </div>
                    </legend>
                    </fieldset>

                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Antecedentes Personales Patológicos</h6>
                </div>
                <div class="container">
                    <fieldset>
                        <legend>

                            <div class="row" style="font-size: 12px;">

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Hemofilia" name="APP_Hemofilia" <?php if ($hemofilia == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Hemofilia">Hemofilia</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_ERC_en_Hemodialisis" name="APP_ERC_en_Hemodialisis" <?php if ($ERC == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_ERC_en_Hemodialisis">ERC en Hemodialisis</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Trabajador_de_la_Salud" name="APP_Trabajador_de_la_Salud" <?php if ($trabajadorSalud == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Trabajador_de_la_Salud">Trabajador de la Salud</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Transplante" name="APP_Transplante" <?php if ($transplante == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Transplante">Transplante</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Cirrosis" name="APP_Cirrosis" <?php if ($cirrosis == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Cirrosis">Cirrosis</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Obesidad" name="APP_Obesidad" <?php if ($obesidad == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Obesidad">Obesidad</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Prediabetes" name="APP_Prediabetes" <?php if ($prediabetes == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Prediabetes">Prediabetes</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Diabetes_Mellitus" name="APP_Diabetes_Mellitus" <?php if ($diabetesMellitus == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Diabetes_Mellitus">Diabetes Mellitus</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Hipertension_Arterial" name="APP_Hipertension_Arterial" <?php if ($hipertencionArt == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Hipertension_Arterial">Hipertensión Arterial</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Alcoholismo" name="APP_Alcoholismo" <?php if ($alcoholismo == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Alcoholismo">Alcoholismo</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Virus_HB" name="APP_Virus_HB" <?php if ($HB == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Virus_HB">Virus HB</label>
                                </div>

                                <div class="col-md-4">
                                    <input class="form-check-input" type="checkbox" id="APP_Ninguno" name="APP_Ninguno" <?php if ($ninguno_Ant == 'Si') echo "checked"; ?>>
                                    <label class="form-check-label" for="APP_Ninguno">Ninguno</label>
                                </div>
                            </div>
                        </legend>
                    </fieldset>
                </div>


                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Atención Clinica</h6>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Atención Inicial</strong>
                        <input type="date" id="fai" name="fai" class="form-control" style="font-size: 12px;" max="<?= date("Y-m-d") ?>" value="<?php echo $atencion_inicial; ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Carga Viral Inicial</strong>
                        <input type="date" id="fcvi" name="fcvi" class="form-control" style="font-size: 12px;" max="<?= date("Y-m-d") ?>" value="<?php echo $carga_inicial; ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Carga Viral Dx</strong>
                        <input type="number" step="any" class="form-control" id="cvd" name="cvd" style="font-size: 12px;" value="<?php echo $cargaDX; ?>">
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 12px;">Respuesta Viral Sostenida (RVS)</strong>
                        <select name="respuestaviralsostenida" id="respuestaviralsostenida" class="form-control" style="font-size: 12px;">
                            <option value="Sin registro" <?php if ($respuestaViral == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                            <option value="Indetectable" <?php if ($respuestaViral == 'Indetectable') echo 'selected'; ?>>Indetectable</option>
                            <option value="Detectable" <?php if ($respuestaViral == 'Detectable') echo 'selected'; ?>>Detectable</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="idvalorrvs">
                        <strong style="font-size: 12px;">Número RVS</strong>
                        <input type="number" step="any" class="form-control" id="valorrvs" style="font-size: 12px;" name="valorrvs" value="<?php echo $RVS; ?>">
                    </div>

                    <div class="col-md-6" id="idfrvs">
                        <strong style="font-size: 12px;">Fecha RVS</strong>
                        <input type="date" id="frvs" name="frvs" class="form-control" style="font-size: 12px;" max="<?= date("Y-m-d") ?>" value="<?php echo $fechaRVS; ?>">
                    </div>

                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Laboratorios</h6>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">AST</strong>
                        <input type="number" step="any" class="form-control" id="AST" name="AST" style="font-size: 12px;" required value="<?php echo $AST; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">BUN</strong>
                        <input type="number" step="any" class="form-control" id="BUN" name="BUN" style="font-size: 12px;" required value="<?php echo $BUN; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">CREAT</strong>
                        <input type="number" step="any" class="form-control" id="CREAT" name="CREAT" style="font-size: 12px;" required value="<?php echo $CREAT; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">ALT</strong>
                        <input type="number" step="any" class="form-control" id="ALT" name="ALT" style="font-size: 12px;" required value="<?php echo $ALT; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Plaquetas</strong>
                        <input type="number" step="any" class="form-control" id="Plaquetas" name="Plaquetas" style="font-size: 12px;" required value="<?php echo $plaquetas; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Albumina</strong>
                        <input type="number" step="any" class="form-control" id="Albumina" name="Albumina" style="font-size: 12px;" required value="<?php echo $albumina; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Glucosa</strong>
                        <input type="number" step="any" class="form-control" id="Glucosa" name="Glucosa" style="font-size: 12px;" required value="<?php echo $glucosa; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">HBA1C</strong>
                        <input type="number" step="any" class="form-control" id="HBA1C" name="HBA1C" style="font-size: 12px;" required value="<?php echo $HBA1C; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Trigliceridos</strong>
                        <input type="number" step="any" class="form-control" id="Trigliceridos" name="Trigliceridos" style="font-size: 12px;" required value="<?php echo $trigliceridos; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 12px;">HDL</strong>
                        <input type="number" step="any" class="form-control" id="HDL" name="HDL" style="font-size: 12px;" required value="<?php echo $HDL; ?>">
                    </div>
                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Ultrasonido Hepático</h6>
                </div>

                <div class="col-md-12">
                    <strong style="font-size: 12px;">Ultrasonido Hepático</strong>
                    <select name="ultrasonidohepatico" id="ultrasonidohepatico" class="form-control" style="font-size: 12px;">
                        <option value="Sin registro" <?php if ($ultrasonido == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Si" <?php if ($ultrasonido == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No" <?php if ($ultrasonido == 'No') echo 'selected'; ?>>No</option>
                        <option value="Desconoce" <?php if ($ultrasonido == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>


                <div class="col-md-12" id="idresultadoultrasonido">
                    <strong style="font-size: 12px;">Resultado Ultrasonido</strong>
                    <select name="resultadoultrasonido" id="resultadoultrasonido" class="form-control" style="font-size: 12px;">
                        <option value="Seleccione" <?php if ($resultadoUltra == 'Seleccione') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Normal" <?php if ($resultadoUltra == 'Normal') echo 'selected'; ?>>Normal</option>
                        <option value="Esteatosis" <?php if ($resultadoUltra == 'Esteatosis') echo 'selected'; ?>>Esteatosis</option>
                        <option value="Cirrosis" <?php if ($resultadoUltra == 'Cirrosis') echo 'selected'; ?>>Cirrosis</option>
                        <option value="Tumor" <?php if ($resultadoUltra == 'Tumor') echo 'selected'; ?>>Tumor</option>
                    </select>
                </div>


                <div class="col-md-12" id="idesteatosis">
                    <strong style="font-size: 12px;">Esteatosis</strong>
                    <select name="opcionesteatosis" id="opcionesteatosis" style="font-size: 12px;" class="form-control">
                        <option value="Seleccione" <?php if ($esteatosis == 'Seleccione') echo 'selected'; ?>>Seleccione...</option>
                        <option value="S1 del 11 al 33" <?php if ($esteatosis == 'S1 del 11 al 33') echo 'selected'; ?>>S1 (11% al 33%)</option>
                        <option value="S2 del 34 al 66" <?php if ($esteatosis == 'S2 del 34 al 66') echo 'selected'; ?>>S2 (34% al 66%)</option>
                        <option value="S3 (67 O Positivo)" <?php if ($esteatosis == 'S3 (67 O Positivo)') echo 'selected'; ?>>S3 (>67%)</option>
                    </select>
                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Índice de Enfermedad Hepática</h6>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <a style="font-size: 12px;" href="https://www.hepatitisc.uw.edu/page/clinical-calculators/fib-4" target="_blank">FIB 4</a>
                        <input type="number" step="any" class="form-control" id="fib4" name="fib4" style="font-size: 12px;" value="<?php echo $FIB4; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong id="calcularresultado" style="font-size: 12px;">Resultado FIB 4</strong>
                        <input type="text" class="form-control" id="resultadofib" name="resultadofib" style="font-size: 12px;" readonly value="<?php echo $FIB4resultado; ?>">
                    </div>


                    <div class="col-md-2">
                        <a style="font-size: 12px;" href="https://www.rccc.eu/calculadoras/NFS.html" target="_blank">NAFLD</a>
                        <input type="number" step="any" class="form-control" id="nafld" name="nafld" style="font-size: 12px;" value="<?php echo $NAFLD; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong id="calcularresultado" style="font-size: 12px;">Resultado NAFLD</strong>
                        <input type="text" class="form-control" id="resultadonafld" name="resultadonafld" style="font-size: 12px;" readonly value="<?php echo $NAFLDresultado; ?>">
                    </div>

                    <div class="col-md-2">
                        <a style="font-size: 12px;" href="https://www.hepatitisc.uw.edu/page/clinical-calculators/apri" target="_blank">APRI</a>
                        <input type="number" step="any" class="form-control" id="apri" name="apri" style="font-size: 12px;" value="<?php echo $APRI; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong id="calcularresultado" style="font-size: 12px;">Resultado APRI</strong>
                        <input type="text" class="form-control" id="resultadoapri" name="resultadoapri" style="font-size: 12px;" readonly value="<?php echo $APRIresultado; ?>">
                    </div>

                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Tratamiento</h6>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Fecha Inicio Tratamiento</strong>
                        <input type="date" id="fit" name="fit" style="font-size: 12px;" class="form-control" value="<?php echo $fecha_inicio; ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Tratamiento</strong>
                        <select name="tratamiento" id="tratamiento" style="font-size: 12px;" class="form-control">
                            <option value="Seleccione..." <?php if ($tratamiento == 'Seleccione...') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Peginterferon" <?php if ($tratamiento == 'Peginterferon') echo 'selected'; ?>>Peginterferon</option>
                            <option value="Sofosbuvir/Velpatasvir" <?php if ($tratamiento == 'Sofosbuvir/Velpatasvir') echo 'selected'; ?>>Sofosbuvir/Velpatasvir</option>
                            <option value="Sofosbuvir/Ledipasvir" <?php if ($tratamiento == 'Sofosbuvir/Ledipasvir') echo 'selected'; ?>>Sofosbuvir/Ledipasvir</option>
                            <option value="Desabuvir/Ombitasvir" <?php if ($tratamiento == 'Desabuvir/Ombitasvir') echo 'selected'; ?>>Desabuvir/Ombitasvir</option>
                            <option value="Paritaprevir/Ritonavir" <?php if ($tratamiento == 'Paritaprevir/Ritonavir') echo 'selected'; ?>>Paritaprevir/Ritonavir</option>
                            <option value="Daclatasvir+Sofosbuvir" <?php if ($tratamiento == 'Daclatasvir+Sofosbuvir') echo 'selected'; ?>>Daclatasvir+Sofosbuvir</option>
                            <option value="Glecaprevir/Pibrentasvir" <?php if ($tratamiento == 'Glecaprevir/Pibrentasvir') echo 'selected'; ?>>Glecaprevir/Pibrentasvir</option>
                            <option value="Glecaprevir/Pibrentasvir" <?php if ($tratamiento == 'Glecaprevir/Pibrentasvir') echo 'selected'; ?>>Desabuvir/Ombitasvir+Paritaprevir/Ritonavir</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Ribavirina</strong>
                        <select name="Ribavirina" id="Ribavirina" style="font-size: 12px;" class="form-control">
                            <option value="Sin registro" <?php if ($ribavirina == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                            <option value="Si" <?php if ($ribavirina == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="No" <?php if ($ribavirina == 'No') echo 'selected'; ?>>No</option>
                            <option value="Desconoce" <?php if ($ribavirina == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Fecha Fin Tratamiento</strong>
                        <input type="date" id="fft" name="fft" style="font-size: 12px;" class="form-control" value="<?php echo $fecha_fin; ?>">
                    </div>

                </div>

                <!--*************************************************************************************************+-->

                <div style="background-color: rgb(210, 180, 140);
                            border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                    <h6>Defunción</h6>
                </div>

                <!--Cuando seleccione Sí en Defunción, muestra el select de Causa-->

                <div class="col-md-12">
                    <strong style="font-size: 12px;">Defunción</strong>
                    <select name="defuncion" id="defuncion" class="form-control" style="font-size: 12px;">
                        <option value="Sin registro" <?php if ($defuncion_paciente == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Si" <?php if ($defuncion_paciente == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No" <?php if ($defuncion_paciente == 'No') echo 'selected'; ?>>No</option>
                        <option value="Desconoce" <?php if ($defuncion_paciente == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="col-md-12" id="idcausadefuncion">
                    <strong style="font-size: 12px;">Causa</strong>
                    <select name="causadefuncion" id="causadefuncion" style="font-size: 12px;" class="form-control">
                        <option value="Sin registro" <?php if ($causa == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Normal" <?php if ($causa == 'Normal') echo 'selected'; ?>>Hepatitis C</option>
                        <option value="Otra Patología" <?php if ($causa == 'Otra Patología') echo 'selected'; ?>>Otra Patología</option>
                    </select>
                </div>


            </div>
            <br>
            <div class="container" style="text-align: right;">
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
        </div> <!-- el div que cierra '<div class="container" width="100%" height="800px" style="margin-bottom: 100px;">'-->
    </form>




    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <p style="font-size: 10px">
            Dirección de Operaciones - Gestión Digital en Salud - 2023
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
</body>

</html>