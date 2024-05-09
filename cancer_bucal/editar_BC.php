<?php
// session_start();
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Pragma: no-cache");

// if (!isset($_SESSION['valid_user'])) {
//     // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
//     header('Location: ../login/index.php');
//     exit;
// }
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

    <title>Cáncer Bucal</title>
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


        <h5>Cáncer Bucal</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="contenedor">
        <form id="editar_CB" method="POST">

            <!-- Datos de llegada del paciente  -->
            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="form-header">
                    <h5 class="form-title">Datos Paciente</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>CURP</strong>
                        <input class="form-control" type="text" name="curp" id="curp" maxlength="18" minlength="18"
                            onblur="curp2date()" value="<?php echo $curp; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Nombre Completo</strong>
                        <input class="form-control" type="text" name="nombre_completo" id="nombre_completo" value="<?php echo $nombre_completo; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Escolaridad</strong>
                        <select class="form-control" name="escolaridad" id="escolaridad">
                            <option value="0"<?php if ($escolaridad== '0')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Primaria"<?php if ($escolaridad== 'Primaria')echo 'selected'; ?>>Primaria</option>
                            <option value="Secundaria"<?php if ($escolaridad== 'Secundaria')echo 'selected'; ?>>Secundaria</option>
                            <option value="Preparatoria/Bachillerato"<?php if ($escolaridad== 'Preparatoria/Bachillerato')echo 'selected'; ?>>Preparatoria/Bachillerato</option>
                            <option value="Licenciatura/Ingenieria"<?php if ($escolaridad== 'Licenciatura/Ingenieria')echo 'selected'; ?>>Licenciatura/Ingenieria</option>
                            <option value="Maestria"<?php if ($escolaridad== 'Maestria')echo 'selected'; ?>>Maestria</option>
                            <option value="Doctorado"<?php if ($escolaridad== 'Doctorado')echo 'selected'; ?>>Doctorado</option>
                            <option value="Sin estudios"<?php if ($escolaridad== 'Sin estudios')echo 'selected'; ?>>Sin estudios</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Fecha de nacimiento</strong>
                        <input class="form-control" type="date" name="birth_date" id="birth_date" value="<?php echo $birth_date; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Edad</strong>
                        <input class="form-control" type="text" name="edad" id="edad" value="<?php echo $edad; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Sexo</strong>
                        <input class="form-control" type="text" name="sex" id="sex" value="<?php echo $sex; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Talla</strong>
                        <input class="form-control" type="text" name="talla" id="talla" value="<?php echo $talla; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Peso</strong>
                        <input class="form-control" type="number" name="peso" id="peso" onblur="calculaIMC();" value="<?php echo $peso; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>IMC</strong>
                        <input class="form-control" type="text" name="imc" id="imc" readonly value="<?php echo $imc; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Estado</strong>
                        <select class="form-control" name="estado" id="estado">
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
                        <strong>Municipio</strong>
                        <select class="form-control" name="municipio" id="municipio">
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
                        <strong>Referencia</strong>
                        <select class="form-control" name="ref" id="ref">
                            <option value=""<?php if ($ref== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($ref== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($ref== 'No')echo 'selected'; ?>>No</option>
                        </select>

                    </div>
                    <div class="col-md-12">
                        <strong>Unidad de Referencia</strong>
                        <input list="Clues" class="form-control" type="text" name="uni_ref" id="uni_ref" value="<?php echo $uni_ref; ?>">
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
                </div> <!-- div row-->

                <div class="form-header">
                    <h5 class="form-title">Antecedentes No Patologicos</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Exposición Solar</strong>
                        <select class="form-control" name="exp_solar" id="exp_solar">
                            <option value=""<?php if ($exp_solar== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($exp_solar== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($exp_solar== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Comidas al Día</strong>
                        <select class="form-control" name="num_comidas" id="num_comidas">
                            <option value=""<?php if ($num_comidas== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="1"<?php if ($num_comidas== '1')echo 'selected'; ?>>1</option>
                            <option value="2"<?php if ($num_comidas== '2')echo 'selected'; ?>>2</option>
                            <option value="3 o mas"<?php if ($num_comidas== '3 o mas')echo 'selected'; ?>>3 o mas</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Higiene Bucal</strong>
                        <select class="form-control" name="higinee_bucal" id="higinee_bucal">
                            <option value=""<?php if ($higinee_bucal== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="1 vez al día"<?php if ($higinee_bucal== '1 vez al día')echo 'selected'; ?>>1 vez al día</option>
                            <option value="2 vez al día"<?php if ($higinee_bucal== '2 vez al día')echo 'selected'; ?>>2 vez al día</option>
                            <option value="3 o mas veces al día"<?php if ($higinee_bucal== '3 o mas veces al día')echo 'selected'; ?>>3 o mas veces al día</option>
                        </select>
                    </div>
                </div>


                <div class="form-header">
                    <h5 class="form-title">Antecedentes Personales Patologicos</h5>
                </div>

                <div class="row">
                    <div class="col-md-3 checkboxes">
                        <span>Alcoholismo</span>
                        <label class="container">
                            <input type="checkbox" name="alcoholismo" id="alcoholismo" <?php if ($alcoholismo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Tabaquismo</span>
                        <label class="container">
                            <input type="checkbox" name="tabaquismo" id="tabaquismo" <?php if ($tabaquismo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Cocaina</span>
                        <label class="container">
                            <input type="checkbox" name="cocaina" id="cocaina" <?php if ($cocaina == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Marihuana</span>
                        <label class="container">
                            <input type="checkbox" name="marihuana" id="marihuana" <?php if ($marihuana == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Medicamentos Controlados</span>
                        <label class="container">
                            <input type="checkbox" name="med_control" id="med_control" <?php if ($med_control == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Solventes</span>
                        <label class="container">
                            <input type="checkbox" name="solventes" id="solventes" <?php if ($solventes == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="ninguno" id="at_ninguno" <?php if ($at_ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                </div>

                <!-- Separacion de los checkbox y textos que surgen -->
                <div>
                    <h5> </h5>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <strong>Frecuencia del Alcoholismo</strong>
                        <select class="form-control" name="hz_alcohol" id="hz_alcohol">
                            <option value=""<?php if ($hz_alcohol== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Social"<?php if ($hz_alcohol== 'Social')echo 'selected'; ?>>Social</option>
                            <option value="Embriaguez"<?php if ($hz_alcohol== 'Embriaguez')echo 'selected'; ?>>Embriaguez</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Años con Tabaquismo</strong>
                        <input type="number" class="form-control" name="tiempo_tabaco" id="tiempo_tabaco" value="<?php echo $tiempo_tabaco; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Cigarros al día:</strong>
                        <input type="number" class="form-control" name="num_cigarros" id="num_cigarros" value="<?php echo $num_cigarros; ?>">
                    </div>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Habitos</h6>
                </div>

                <div class="row">
                    <div class="col-md-2 checkboxes">
                        <span>Autolesiones</span>
                        <label class="container">
                            <input type="checkbox" name="autolesiones" id="autolesiones" <?php if ($autolesiones == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Bruxismo</span>
                        <label class="container">
                            <input type="checkbox" name="bruxismo" id="bruxismo" <?php if ($bruxismo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Interposicion Lingual</span>
                        <label class="container">
                            <input type="checkbox" name="IL" id="IL" <?php if ($IL == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Onicofagia</span>
                        <label class="container">
                            <input type="checkbox" name="onicofagia" id="onicofagia" <?php if ($onicofagia == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Queilofagia</span>
                        <label class="container">
                            <input type="checkbox" name="queilofagia" id="queilofagia" <?php if ($queilofagia == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Respiracion Oral</span>
                        <label class="container">
                            <input type="checkbox" name="RO" id="RO" <?php if ($RO == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Succion Labial</span>
                        <label class="container">
                            <input type="checkbox" name="SL" id="SL" <?php if ($SL == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Succion Digital</span>
                        <label class="container">
                            <input type="checkbox" name="SD" id="SD" <?php if ($SD == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="hab_ninguno" id="hab_ninguno" <?php if ($hab_ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Virus</h6>
                </div>

                <div class="row">
                    <div class="col-md-3 checkboxes">
                        <span>VIH</span>
                        <label class="container">
                            <input type="checkbox" name="VIH" id="VIH" <?php if ($VIH == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>VPH</span>
                        <label class="container">
                            <input type="checkbox" name="VPH" id="VPH" <?php if ($VPH == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>I. Epstein Barr</span>
                        <label class="container">
                            <input type="checkbox" name="epste_bar" id="epste_bar" <?php if ($epste_bar == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3 checkboxes">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="vr_ninguno" id="vr_ninguno" <?php if ($vr_ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Cáncer</h6>
                </div>

                <div class="row">
                    <div class="col-md-2 checkboxes">
                        <span>Colon y Recto</span>
                        <label class="container">
                            <input type="checkbox" name="colon_rec" id="colon_rec" <?php if ($colon_rec == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Endometrio</span>
                        <label class="container">
                            <input type="checkbox" name="endometrio" id="endometrio" <?php if ($endometrio == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Gástrico</span>
                        <label class="container">
                            <input type="checkbox" name="gastrico" id="gastrico" <?php if ($gastrico == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Hígado</span>
                        <label class="container">
                            <input type="checkbox" name="higado" id="higado" <?php if ($higado == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Leucemia</span>
                        <label class="container">
                            <input type="checkbox" name="leucemia" id="leucemia" <?php if ($leucemia == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Linfoma No Hodgkin</span>
                        <label class="container">
                            <input type="checkbox" name="hodgkin" id="hodgkin" <?php if ($hodgkin == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Mama</span>
                        <label class="container">
                            <input type="checkbox" name="mama" id="mama" <?php if ($mama == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Melanoma</span>
                        <label class="container">
                            <input type="checkbox" name="melanoma" id="melanoma" <?php if ($melanoma == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Ovario</span>
                        <label class="container">
                            <input type="checkbox" name="ovario" id="ovario" <?php if ($ovario == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Páncreas</span>
                        <label class="container">
                            <input type="checkbox" name="pancreas" id="pancreas" <?php if ($pancreas == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Próstata</span>
                        <label class="container">
                            <input type="checkbox" name="prostata" id="prostata" <?php if ($prostata == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Pulmón</span>
                        <label class="container">
                            <input type="checkbox" name="pulmon" id="pulmon" <?php if ($pulmon == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Riñón</span>
                        <label class="container">
                            <input type="checkbox" name="rinon" id="rinon" <?php if ($rinon == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Testículo</span>
                        <label class="container">
                            <input type="checkbox" name="testiculo" id="testiculo" <?php if ($testiculo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Tiroides</span>
                        <label class="container">
                            <input type="checkbox" name="tiroides" id="tiroides" <?php if ($tiroides == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Vejiga</span>
                        <label class="container">
                            <input type="checkbox" name="vejiga" id="vejiga" <?php if ($vejiga == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="cancer_ninguno" id="cancer_ninguno" <?php if ($cancer_ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Afecciones Orales</h5>
                </div>

                <div class="row">
                    <div class="col-md-4 checkboxes">
                        <span>Afectacion Dental</span>
                        <label class="container">
                            <input type="checkbox" name="afec_dent" id="afec_dent" <?php if ($afec_dent == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Lesiones Orales</span>
                        <label class="container">
                            <input type="checkbox" name="les_orales" id="les_orales" <?php if ($les_orales == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Ubicacion</span>
                        <label class="container">
                            <input type="checkbox" name="ubicacion" id="ubicacion" <?php if ($ubicacion == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                </div>

                <div class="form-header" id="Afectacion Dental">
                    <h6 class="form-subtitle">Afectacion Dental</h6>
                </div>

                <div class="row">
                    <div class="col-md-4 checkboxes">
                        <span>Enfermedad Periodontal</span>
                        <label class="container">
                            <input type="checkbox" name="enf_perio" id="enf_perio" <?php if ($enf_perio == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Organo Dental Fracturado</span>
                        <label class="container">
                            <input type="checkbox" name="org_dent_frac" id="org_dent_frac" <?php if ($org_dent_frac == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Protesis Fija Desajustada</span>
                        <label class="container">
                            <input type="checkbox" name="prot_f_desa" id="prot_f_desa" <?php if ($prot_f_desa == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Protesis Fija Fracturada</span>
                        <label class="container">
                            <input type="checkbox" name="prot_f_fract" id="prot_f_fract" <?php if ($prot_f_fract == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Protesis Removible Desajustada</span>
                        <label class="container">
                            <input type="checkbox" name="prot_r_desa" id="prot_r_desa" <?php if ($prot_r_desa == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4 checkboxes">
                        <span>Protesis Removible Fracturada</span>
                        <label class="container">
                            <input type="checkbox" name="prot_r_fract" id="prot_r_fract" <?php if ($prot_r_fract == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="row" id="organo_fractura">
                        <div class="col-md-3">
                            <strong>Maxilar Superior Derecho</strong>
                            <input type="text" class="form-control" name="msd" id="msd" value="<?php echo $msd; ?>">
                        </div>
                        <div class="col-md-3">
                            <strong>Maxilar Superior Izquierdo</strong>
                            <input type="text" class="form-control" name="msi" id="msi" value="<?php echo $msi; ?>">
                        </div>
                        <div class="col-md-3">
                            <strong>Maxilar Inferior Derecho</strong>
                            <input type="text" class="form-control" name="mid" id="mid" value="<?php echo $mid; ?>">
                        </div>
                        <div class="col-md-3">
                            <strong>Maxilar Inferior Izquierdo</strong>
                            <input type="text" class="form-control" name="mii" id="mii" value="<?php echo $mii; ?>">
                        </div>
                    </div>


                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Lesiones Orales</h6>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <strong>Existe Lesion Oral</strong>
                        <select class="form-control" name="elo" id="elo">
                            <option value=""<?php if ($elo== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($elo== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($elo== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <strong>Tipo de Tejido</strong>
                        <select class="form-control" name="tipo_tejido" id="tipo_tejido">
                            <option value=""<?php if ($tipo_tejido== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Blando"<?php if ($tipo_tejido== 'Blando')echo 'selected'; ?>>Blando</option>
                            <option value="Duro"<?php if ($tipo_tejido== 'Duro')echo 'selected'; ?>>Duro</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="checkboxes">
                            <strong>Tipo Lesión</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-4 checkboxes">
                                <span>Melatónica</span>
                                <label class="container">
                                    <input type="checkbox" name="melatonica" id="melatonica" <?php if ($melatonica == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Nódulo</span>
                                <label class="container">
                                    <input type="checkbox" name="nodulo" id="nodulo" <?php if ($nodulo == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Pigmentada</span>
                                <label class="container">
                                    <input type="checkbox" name="pigmentada" id="pigmentada" <?php if ($pigmentada == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Tumor</span>
                                <label class="container">
                                    <input type="checkbox" name="tumor" id="tumor" <?php if ($tumor == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Ulcera</span>
                                <label class="container">
                                    <input type="checkbox" name="ulcera" id="ulcera" <?php if ($ulcera == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Verruga</span>
                                <label class="container">
                                    <input type="checkbox" name="verruga" id="verruga" <?php if ($verruga == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Vesicula</span>
                                <label class="container">
                                    <input type="checkbox" name="vesicula" id="vesicula" <?php if ($vesicula == 'Si') echo "checked"; ?>>
                                    <div class="checkmark"></div>
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <strong>Coloración</strong>
                        <select class="form-control" name="coloracion" id="coloracion">
                            <option value=""<?php if ($coloracion== '')echo 'selected'; ?>>Seleccione</option>
                            <option value="Blanca"<?php if ($coloracion== 'Blanca')echo 'selected'; ?>>Blanca</option>
                            <option value="Roja"<?php if ($coloracion== 'Roja')echo 'selected'; ?>>Roja</option>
                            <option value="Blanca/Roja"<?php if ($coloracion== 'Blanca/Roja')echo 'selected'; ?>>Blanca/Roja</option>
                        </select>
                    </div>

                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Ubicación</h6>
                </div>

                <div class="row">

                    <div class="col-md-6 checkboxes">
                        <span>Derecha</span>
                        <label class="container">
                            <input type="checkbox" name="ubic_derecha" id="ubic_derecha" <?php if ($ubic_derecha == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-6 checkboxes">
                        <span>Izquierda</span>
                        <label class="container">
                            <input type="checkbox" name="ubic_Izquierda" id="ubic_Izquierda" <?php if ($ubic_Izquierda == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>


                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Ubicación Derecha</h6>
                </div>

                <div class="row">
                    <div class="checkboxes">
                        <strong>Subsitio Anatómico</strong>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="derec_ninguno" id="derec_ninguno" <?php if ($derec_ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Cuerpo Mandibular</span>
                        <label class="container">
                            <input type="checkbox" name="derec_CM" id="derec_CM" <?php if ($derec_CM == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Encia Superior</span>
                        <label class="container">
                            <input type="checkbox" name="derec_ES" id="derec_ES" <?php if ($derec_ES == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Labios</span>
                        <label class="container">
                            <input type="checkbox" name="derec_labio" id="derec_labio" <?php if ($derec_labio == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Lengua</span>
                        <label class="container">
                            <input type="checkbox" name="derec_lengua" id="derec_lengua" <?php if ($derec_lengua == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Encia Inferior</span>
                        <label class="container">
                            <input type="checkbox" name="derec_EI" id="derec_EI" <?php if ($derec_EI == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Maxilar Posterior</span>
                        <label class="container">
                            <input type="checkbox" name="derec_MP" id="derec_MP" <?php if ($derec_MP == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Mucosa Bucal</span>
                        <label class="container">
                            <input type="checkbox" name="derec_MB" id="derec_MB" <?php if ($derec_MB == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Paladar Blando</span>
                        <label class="container">
                            <input type="checkbox" name="derec_PB" id="derec_PB" <?php if ($derec_PB == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Paladar Duro</span>
                        <label class="container">
                            <input type="checkbox" name="derec_PD" id="derec_PD" <?php if ($derec_PD == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Piso</span>
                        <label class="container">
                            <input type="checkbox" name="derec_piso" id="derec_piso" <?php if ($derec_piso == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Premaxilar</span>
                        <label class="container">
                            <input type="checkbox" name="derec_premaxilar" id="derec_premaxilar" <?php if ($derec_premaxilar == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Proceso Alveolar</span>
                        <label class="container">
                            <input type="checkbox" name="derec_PA" id="derec_PA" <?php if ($derec_PA == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Rama Mandibular</span>
                        <label class="container">
                            <input type="checkbox" name="derec_RM" id="derec_RM" <?php if ($derec_RM == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Trigono Retromolar</span>
                        <label class="container">
                            <input type="checkbox" name="derec_TR" id="derec_TR" <?php if ($derec_TR == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <strong>Labios</strong>
                            <select class="form-control" name="derec_labios" id="derec_labios">
                                <option value=""<?php if ($derec_labios== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Labio Inferior"<?php if ($derec_labios== 'Labio Inferior')echo 'selected'; ?>>Labio Inferior</option>
                                <option value="Labio Superior"<?php if ($derec_labios== 'Labio Superior')echo 'selected'; ?>>Labio Superior</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Lengua</strong>
                            <select class="form-control" name="derec_lenguas" id="derec_lenguas">
                                <option value=""<?php if ($derec_lenguas== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Borde Lateral"<?php if ($derec_lenguas== 'Borde Lateral')echo 'selected'; ?>>Borde Lateral</option>
                                <option value="Cara Ventral"<?php if ($derec_lenguas== 'Cara Ventral')echo 'selected'; ?>>Cara Ventral</option>
                                <option value="Dorso"<?php if ($derec_lenguas== 'Dorso')echo 'selected'; ?>>Dorso</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Paladar Blando</strong>
                            <select class="form-control" name="derec_PBL" id="derec_PBL">
                                <option value=""<?php if ($derec_PBL== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Boveda de Paladar"<?php if ($derec_PBL== 'Boveda de Paladar')echo 'selected'; ?>>Boveda de Paladar</option>
                                <option value="Velo de Paladar"<?php if ($derec_PBL== 'Velo de Paladar')echo 'selected'; ?>>Velo de Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Paladar Duro</strong>
                            <select class="form-control" name="derec_PDR" id="derec_PDR">
                                <option value=""<?php if ($derec_PDR== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Boveda de Paladar"<?php if ($derec_PDR== 'Boveda de Paladar')echo 'selected'; ?>>Boveda de Paladar</option>
                                <option value="Velo de Paladar"<?php if ($derec_PDR== 'Velo de Paladar')echo 'selected'; ?>>Velo de Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Encia superior</strong>
                            <select class="form-control" name="derec_ESP" id="derec_ESP">
                                <option value=""<?php if ($derec_ESP== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Bucal"<?php if ($derec_ESP== 'Bucal')echo 'selected'; ?>>Bucal</option>
                                <option value="Interpapilar"<?php if ($derec_ESP== 'Interpapilar')echo 'selected'; ?>>Interpapilar</option>
                                <option value="Lingual"<?php if ($derec_ESP== 'Lingual')echo 'selected'; ?>>Lingual</option>
                                <option value="Paladar"<?php if ($derec_ESP== 'Paladar')echo 'selected'; ?>>Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Encia inferior</strong>
                            <select class="form-control" name="derec_EIF" id="derec_EIF">
                                <option value=""<?php if ($derec_EIF== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Bucal"<?php if ($derec_EIF== 'Bucal')echo 'selected'; ?>>Bucal</option>
                                <option value="Interpapilar"<?php if ($derec_EIF== 'Interpapilar')echo 'selected'; ?>>Interpapilar</option>
                                <option value="Lingual"<?php if ($derec_EIF== 'Lingual')echo 'selected'; ?>>Lingual</option>
                                <option value="Paladar"<?php if ($derec_EIF== 'Paladar')echo 'selected'; ?>>Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Está relacionado con un órgano dental</strong>
                            <select class="form-control" name="derec_EROD" id="derec_EROD">
                                <option value=""<?php if ($derec_EROD== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Si"<?php if ($derec_EROD== 'Si')echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($derec_EROD== 'No')echo 'selected'; ?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Maxilar Superior Derecho</strong>
                            <input type="text" class="form-control" name="derec_MSD" id="derec_MSD" value="<?php echo $derec_MSD; ?>">
                        </div>
                        <div class="col-md-4">
                            <strong>Maxilar Inferior Derecho</strong>
                            <input type="text" class="form-control" name="derec_MID" id="derec_MID" value="<?php echo $derec_MID; ?>">
                        </div>
                    </div>



                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Ubicación Izquierda</h6>
                </div>

                <div class="row">
                    <div class="checkboxes">
                        <strong>Subsitio Anatómico</strong>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_ninguno" id="izqui_ninguno"  <?php if ($izqui_ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Cuerpo Mandibular</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_CM" id="izqui_CM"  <?php if ($izqui_CM == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Encia Superior</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_ES" id="izqui_ES"  <?php if ($izqui_ES == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Labios</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_labio" id="izqui_labio"  <?php if ($izqui_labio == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Lengua</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_lengua" id="izqui_lengua"  <?php if ($izqui_lengua == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Encia Inferior</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_EI" id="izqui_EI"  <?php if ($izqui_EI == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Maxilar Posterior</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_MP" id="izqui_MP"  <?php if ($izqui_MP == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Mucosa Bucal</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_MB" id="izqui_MB"  <?php if ($izqui_MB == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Paladar Blando</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_PB" id="izqui_PB"  <?php if ($izqui_PB == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Paladar Duro</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_PD" id="izqui_PD"  <?php if ($izqui_PD == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Piso</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_piso" id="izqui_piso"  <?php if ($izqui_piso == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Premaxilar</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_premaxilar" id="izqui_premaxilar"  <?php if ($izqui_premaxilar == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Proceso Alveolar</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_PA" id="izqui_PA"  <?php if ($izqui_PA == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Rama Mandibular</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_RM" id="izqui_RM"  <?php if ($izqui_RM == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-2 checkboxes">
                        <span>Trigono Retromolar</span>
                        <label class="container">
                            <input type="checkbox" name="izqui_TR" id="izqui_TR"  <?php if ($izqui_TR == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <strong>Labios</strong>
                            <select class="form-control" name="izqui_labios" id="izqui_labios">
                                <option value=""<?php if ($izqui_labios== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Labio Inferior"<?php if ($izqui_labios== 'Labio Inferior')echo 'selected'; ?>>Labio Inferior</option>
                                <option value="Labio Superior"<?php if ($izqui_labios== 'Labio Superior')echo 'selected'; ?>>Labio Superior</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Lengua</strong>
                            <select class="form-control" name="izqui_lenguas" id="izqui_lenguas">
                                <option value=""<?php if ($izqui_lenguas== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Borde Lateral"<?php if ($izqui_lenguas== 'Borde Lateral')echo 'selected'; ?>>Borde Lateral</option>
                                <option value="Cara Ventral"<?php if ($izqui_lenguas== 'Cara Ventral')echo 'selected'; ?>>Cara Ventral</option>
                                <option value="Dorso"<?php if ($izqui_lenguas== 'Dorso')echo 'selected'; ?>>Dorso</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Paladar Blando</strong>
                            <select class="form-control" name="izqui_PBL" id="izqui_PBL">
                                <option value=""<?php if ($izqui_PBL== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Boveda de Paladar"<?php if ($izqui_PBL== 'Boveda de Paladar')echo 'selected'; ?>>Boveda de Paladar</option>
                                <option value="Velo de Paladar"<?php if ($izqui_PBL== 'Velo de Paladar')echo 'selected'; ?>>Velo de Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Paladar Duro</strong>
                            <select class="form-control" name="izqui_PDR" id="izqui_PDR">
                                <option value=""<?php if ($izqui_PDR== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Boveda de Paladar"<?php if ($izqui_PDR== 'Boveda de Paladar')echo 'selected'; ?>>Boveda de Paladar</option>
                                <option value="Velo de Paladar"<?php if ($izqui_PDR== 'Velo de Paladar')echo 'selected'; ?>>Velo de Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Encia superior</strong>
                            <select class="form-control" name="izqui_ESP" id="izqui_ESP">
                                <option value=""<?php if ($izqui_ESP== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Bucal"<?php if ($izqui_ESP== 'Bucal')echo 'selected'; ?>>Bucal</option>
                                <option value="Interpapilar"<?php if ($izqui_ESP== 'Interpapilar')echo 'selected'; ?>>Interpapilar</option>
                                <option value="Lingual"<?php if ($izqui_ESP== 'Lingual')echo 'selected'; ?>>Lingual</option>
                                <option value="Paladar"<?php if ($izqui_ESP== 'Paladar')echo 'selected'; ?>>Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Encia inferior</strong>
                            <select class="form-control" name="izqui_EIF" id="izqui_EIF">
                                <option value=""<?php if ($izqui_EIF== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Bucal"<?php if ($izqui_EIF== 'Bucal')echo 'selected'; ?>>Bucal</option>
                                <option value="Interpapilar"<?php if ($izqui_EIF== 'Interpapilar')echo 'selected'; ?>>Interpapilar</option>
                                <option value="Lingual"<?php if ($izqui_EIF== 'Lingual')echo 'selected'; ?>>Lingual</option>
                                <option value="Paladar"<?php if ($izqui_EIF== 'Paladar')echo 'selected'; ?>>Paladar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Está relacionado con un órgano dental</strong>
                            <select class="form-control" name="izqui_EROD" id="izqui_EROD">
                                <option value=""<?php if ($izqui_EROD== '')echo 'selected'; ?>>Seleccione...</option>
                                <option value="Si"<?php if ($izqui_EROD== 'Si')echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($izqui_EROD== 'No')echo 'selected'; ?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <strong>Maxilar Superior Izquierdo</strong>
                            <input type="text" class="form-control" name="izqui_MSD" id="izqui_MSD" value="<?php echo $izqui_MSD; ?>">
                        </div>
                        <div class="col-md-4">
                            <strong>Maxilar Inferior Izquierdo</strong>
                            <input type="text" class="form-control" name="izqui_MID" id="izqui_MID" value="<?php echo $izqui_MID; ?>">
                        </div>
                    </div>



                </div>

                <div class="form-header">
                    <h5 class="form-title">Atencion Clinica</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Fecha primer atención</strong>
                        <input type="date" class="form-control" name="fecha_primera_at" id="fecha_primera_at" value="<?php echo $fecha_primera_at; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Etapa clinica</strong>
                        <input type="text" class="form-control" name="etapa_clinica" id="etapa_clinica" value="TNM"
                            readonly>
                    </div>
                    <div class="col-md-4">
                        <strong>Tamaño Tumoral</strong>
                        <select class="form-control" name="size_tumoral" id="size_tumoral">
                            <option value=""<?php if ($size_tumoral== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="T1 Menor o igual a 2cm"<?php if ($size_tumoral== 'T1 Menor o igual a 2cm')echo 'selected'; ?>>T1 Menor o igual a 2cm</option>
                            <option value="T2 Mayor a 2 cm pero menor a 4 cm"<?php if ($size_tumoral== 'T2 Mayor a 2 cm pero menor a 4 cm')echo 'selected'; ?>>T2 Mayor a 2 cm pero menor a 4 cm</option>
                            <option value="T3 más de 4cm"<?php if ($size_tumoral== 'T3 más de 4cm')echo 'selected'; ?>>T3 más de 4cm</option>
                            <option value="T4a Invade piel, mandibula, canal auditivo y nervio facial"<?php if ($size_tumoral== 'T4a Invade piel, mandibula, canal auditivo y nervio facial')echo 'selected'; ?>>T4a Invade piel,
                                mandibula, canal auditivo y nervio facial</option>
                            <option value="T4b Tumor que invade la base del cráneo y/o Pterigoides"<?php if ($size_tumoral== 'T4b Tumor que invade la base del cráneo y/o Pterigoides')echo 'selected'; ?>>T4b Tumor que invade
                                la base del cráneo y/o Pterigoides</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Compromiso Linfático Nodal</strong>
                        <select class="form-control" name="compro_linfa" id="compro_linfa">
                            <option value=""<?php if ($compro_linfa== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="NX: No puede ser evaluado por falta de datos"<?php if ($compro_linfa== 'NX: No puede ser evaluado por falta de datos')echo 'selected'; ?>>NX: No puede ser evaluado por
                                falta de datos</option>
                            <option value="N0:Ausencia de adenopatias palpables"<?php if ($compro_linfa== 'N0:Ausencia de adenopatias palpables')echo 'selected'; ?>>N0:Ausencia de adenopatias palpables
                            </option>
                            <option value="N1: Nodulos Palpables Ipsilaterales, menores a 3cm"<?php if ($compro_linfa== 'N1: Nodulos Palpables Ipsilaterales, menores a 3cm')echo 'selected'; ?>>N1: Nodulos Palpables
                                Ipsilaterales, menores a 3cm</option>
                            <option value="N2a. Metástasis en Nodulo Ipsilateral, mayor de 3cm menor de 6cm"<?php if ($compro_linfa== 'N2a. Metástasis en Nodulo Ipsilateral, mayor de 3cm menor de 6cm')echo 'selected'; ?>>N2a.
                                Metástasis en Nodulo Ipsilateral, mayor de 3cm menor de 6cm</option>
                            <option value="N2b. Metástasis en múltiples nodulos Ipsilaterales mayores a 6cm"<?php if ($compro_linfa== 'N2b. Metástasis en múltiples nodulos Ipsilaterales mayores a 6cm')echo 'selected'; ?>>N2b.
                                Metástasis en múltiples nodulos Ipsilaterales mayores a 6cm</option>
                            <option value="N2c. Metástasis en nodulos bilaterales y contralaterales mayores a 6cm"<?php if ($compro_linfa== 'N2c. Metástasis en nodulos bilaterales y contralaterales mayores a 6cm')echo 'selected'; ?>>N2c.
                                Metástasis en nodulos bilaterales y contralaterales mayores a 6cm</option>
                            <option value="N3. Nodulos palpables fijos mayor a 6cm"<?php if ($compro_linfa== 'N3. Nodulos palpables fijos mayor a 6cm')echo 'selected'; ?>>N3. Nodulos palpables fijos mayor a
                                6cm</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Metástasis</strong>
                        <select class="form-control" name="metastatis" id="metastatis">
                            <option value=""<?php if ($metastatis== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="MX: No se pueden evaluar metastasis distantes"<?php if ($metastatis== 'MX: No se pueden evaluar metastasis distantes')echo 'selected'; ?>>MX: No se pueden evaluar
                                metastasis distantes</option>
                            <option value="M0 Sin enfermedad a distancia"<?php if ($metastatis== 'M0 Sin enfermedad a distancia')echo 'selected'; ?>>M0 Sin enfermedad a distancia</option>
                            <option value="M1 Evidencia de Metástasis por clínica o radiografia"<?php if ($metastatis== 'M1 Evidencia de Metástasis por clínica o radiografia')echo 'selected'; ?>>M1 Evidencia de
                                Metástasis por clínica o radiografia</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="checkboxes">
                            <strong>Sitio Metástasis</strong>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Sin registro</span>
                            <label class="container">
                                <input type="checkbox" name="at_sinReg" id="at_sinReg" <?php if ($at_sinReg == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Hepatica</span>
                            <label class="container">
                                <input type="checkbox" name="at_hepatica" id="at_hepatica" <?php if ($at_hepatica == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Pulmonar</span>
                            <label class="container">
                                <input type="checkbox" name="at_pulmonar" id="at_pulmonar" <?php if ($at_pulmonar == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Cerebrales</span>
                            <label class="container">
                                <input type="checkbox" name="at_cerebrales" id="at_cerebrales" <?php if ($at_cerebrales == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Óseas</span>
                            <label class="container">
                                <input type="checkbox" name="at_oseas" id="at_oseas" <?php if ($at_oseas == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Cervicouterino</span>
                            <label class="container">
                                <input type="checkbox" name="at_cervicouterino" id="at_cervicouterino" <?php if ($at_cervicouterino == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Mediastino</span>
                            <label class="container">
                                <input type="checkbox" name="at_mediastino" id="at_mediastino" <?php if ($at_mediastino == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Suprarrenal</span>
                            <label class="container">
                                <input type="checkbox" name="at_suprarrenal" id="at_suprarrenal" <?php if ($at_suprarrenal == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Tiroidea</span>
                            <label class="container">
                                <input type="checkbox" name="at_tiroidea" id="at_tiroidea" <?php if ($at_tiroidea == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Ganglionar</span>
                            <label class="container">
                                <input type="checkbox" name="at_ganglionar" id="at_ganglionar" <?php if ($at_ganglionar == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <strong>Estadío Clinico</strong>
                        <select class="form-control" name="estado_clinico" id="estado_clinico">
                            <option value=""<?php if ($estado_clinico== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="I"<?php if ($estado_clinico== 'I')echo 'selected'; ?>>I</option>
                            <option value="II"<?php if ($estado_clinico== 'II')echo 'selected'; ?>>II</option>
                            <option value="III"<?php if ($estado_clinico== 'III')echo 'selected'; ?>>III</option>
                            <option value="IV A"<?php if ($estado_clinico== 'IV A')echo 'selected'; ?>>IV A</option>
                            <option value="IV B"<?php if ($estado_clinico== 'IV B')echo 'selected'; ?>>IV B</option>
                            <option value="IV C"<?php if ($estado_clinico== 'IV C')echo 'selected'; ?>>IV C</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Calidad de vida ECOG</strong>
                        <select class="form-control" name="ECOG" id="ECOG">
                            <option value=""<?php if ($ECOG== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Ecog 0  Desempeño Funcional Normal"<?php if ($ECOG== 'Ecog 0  Desempeño Funcional Normal')echo 'selected'; ?>>Ecog 0 Desempeño Funcional Normal
                            </option>
                            <option value="Ecog 1 Desempeño Leve"<?php if ($ECOG== 'Ecog 1 Desempeño Leve')echo 'selected'; ?>>Ecog 1 Desempeño Leve</option>
                            <option value="Ecog 2 El 50% Del Tiempo Postrado"<?php if ($ECOG== 'Ecog 2 El 50% Del Tiempo Postrado')echo 'selected'; ?>>Ecog 2 El 50% Del Tiempo Postrado</option>
                            <option value="Ecog 3 Mas Del 50% Postrado"<?php if ($ECOG== 'Ecog 3 Mas Del 50% Postrado')echo 'selected'; ?>>Ecog 3 Mas Del 50% Postrado</option>
                            <option value="Ecog 4 Dependiente Al 100% Para Vida Basica"<?php if ($ECOG== 'Ecog 4 Dependiente Al 100% Para Vida Basica')echo 'selected'; ?>>Ecog 4 Dependiente Al 100% Para
                                Vida Basica</option>
                            <option value="Ecog 5 Fallecio"<?php if ($ECOG== 'Ecog 5 Fallecio')echo 'selected'; ?>>Ecog 5 Fallecio</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Histopatología</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>Dx Histopatologico</strong>
                        <select class="form-control" name="dx_histo" id="dx_histo">
                            <option value=""<?php if ($dx_histo== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Adenocarcinoma"<?php if ($dx_histo== 'Adenocarcinoma')echo 'selected'; ?>>Adenocarcinoma</option>
                            <option value="Adenoideoquistico"<?php if ($dx_histo== 'Adenoideoquistico')echo 'selected'; ?>>Adenoideoquistico</option>
                            <option value="Basocelular"<?php if ($dx_histo== 'Basocelular')echo 'selected'; ?>>Basocelular</option>
                            <option value="Carcinoma Ameloblastico"<?php if ($dx_histo== 'Carcinoma Ameloblastico')echo 'selected'; ?>>Carcinoma Ameloblastico</option>
                            <option value="Epidermoide o Celulas Escamosas (Verrucoso o Basaloide)"<?php if ($dx_histo== 'Epidermoide o Celulas Escamosas (Verrucoso o Basaloide)')echo 'selected'; ?>>Epidermoide o
                                Celulas Escamosas (Verrucoso o Basaloide)</option>
                            <option value="Linfoma"<?php if ($dx_histo== 'Linfoma')echo 'selected'; ?>>Linfoma</option>
                            <option value="Melanoma"<?php if ($dx_histo== 'Melanoma')echo 'selected'; ?>>Melanoma</option>
                            <option value="Metastasico"<?php if ($dx_histo== 'Metastasico')echo 'selected'; ?>>Metastasico</option>
                            <option value="Neuroendocrino"<?php if ($dx_histo== 'Neuroendocrino')echo 'selected'; ?>>Neuroendocrino</option>
                            <option value="Sarcoma de Kaposi"<?php if ($dx_histo== 'Sarcoma de Kaposi')echo 'selected'; ?>>Sarcoma de Kaposi</option>
                            <option value="Sarcomatoide"<?php if ($dx_histo== 'Sarcomatoide')echo 'selected'; ?>>Sarcomatoide</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Fecha de Reporte</strong>
                        <input type="date" class="form-control" name="fecha_repo" id="fecha_repo" value="<?php echo $fecha_repo; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Tipo</strong>
                        <select class="form-control" name="tipo_histo" id="tipo_histo">
                            <option value=""<?php if ($tipo_histo== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Benigno"<?php if ($tipo_histo== 'Benigno')echo 'selected'; ?>>Benigno</option>
                            <option value="Maligno"<?php if ($tipo_histo== 'Maligno')echo 'selected'; ?>>Maligno</option>
                            <option value="Ninguno"<?php if ($tipo_histo== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Maligno</strong>
                        <select class="form-control" name="maligno_histo" id="maligno_histo">
                            <option value=""<?php if ($maligno_histo== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Bien Diferenciado"<?php if ($maligno_histo== 'Bien Diferenciado')echo 'selected'; ?>>Bien Diferenciado</option>
                            <option value="Poco Diferenciado"<?php if ($maligno_histo== 'Poco Diferenciado')echo 'selected'; ?>>Poco Diferenciado</option>
                            <option value="Indefinido"<?php if ($maligno_histo== 'Indefinido')echo 'selected'; ?>>Indefinido</option>
                        </select>
                    </div>
                </div>


                <div class="form-header">
                    <h5 class="form-title">Inmunohistoquímica</h5>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <strong>Se realizó PDL</strong>
                        <select class="form-control" name="inmuno_pdl" id="inmuno_pdl">
                            <option value=""<?php if ($inmuno_pdl== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($inmuno_pdl== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($inmuno_pdl== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <strong>PDL</strong>
                        <input type="number" class="form-control" name="inmuno_pdl_val" id="inmuno_pdl_val" value="<?php echo $inmuno_pdl_val; ?>">
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Tratamiento</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>Quimioterapia</strong>
                        <select class="form-control" name="tx_quimio" id="tx_quimio">
                            <option value=""<?php if ($tx_quimio== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($tx_quimio== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($tx_quimio== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="checkboxes">
                            <strong>QT</strong>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>5Fluororacilo</span>
                            <label class="container">
                                <input type="checkbox" name="tx_5Fluororacilo" id="tx_5Fluororacilo" <?php if ($tx_5Fluororacilo == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Beuacizumab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Beuacizumab" id="tx_Beuacizumab" <?php if ($tx_Beuacizumab == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Capecitabina</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Capecitabina" id="tx_Capecitabina" <?php if ($tx_Capecitabina == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Carboplatino</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Carboplatino" id="tx_Carboplatino" <?php if ($tx_Carboplatino == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Cetuximab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Cetuximab" id="tx_Cetuximab" <?php if ($tx_Cetuximab == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Ciclofosfamida</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Ciclofosfamida" id="tx_Ciclofosfamida" <?php if ($tx_Ciclofosfamida == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Cisplatino</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Cisplatino" id="tx_Cisplatino" <?php if ($tx_Cisplatino == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Docetaxel</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Docetaxel" id="tx_Docetaxel" <?php if ($tx_Docetaxel == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Etoposido</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Etoposido" id="tx_Etoposido" <?php if ($tx_Etoposido == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Herceptin</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Herceptin" id="tx_Herceptin" <?php if ($tx_Herceptin == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Paclitaxel</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Paclitaxel" id="tx_Paclitaxel" <?php if ($tx_Paclitaxel == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Pertuzumab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Pertuzumab" id="tx_Pertuzumab" <?php if ($tx_Pertuzumab == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Trastuzumab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Trastuzumab" id="tx_Trastuzumab" <?php if ($tx_Trastuzumab == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <strong>Quirúrgico</strong>
                        <select class="form-control" name="tx_quiru" id="tx_quiru">
                            <option value=""<?php if ($tx_quiru== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($tx_quiru== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($tx_quiru== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Tipo de Cirugía</strong>
                        <select class="form-control" name="tx_quiru_tipo" id="tx_quiru_tipo">
                            <option value=""<?php if ($tx_quiru_tipo== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Amigdalectomia"<?php if ($tx_quiru_tipo== 'Amigdalectomia')echo 'selected'; ?>>Amigdalectomia</option>
                            <option value="Comando"<?php if ($tx_quiru_tipo== 'Comando')echo 'selected'; ?>>Comando</option>
                            <option value="Diseccion Radical Modificada de Cuello"<?php if ($tx_quiru_tipo== 'Diseccion Radical Modificada de Cuello')echo 'selected'; ?>>Diseccion Radical Modificada de
                                Cuello</option>
                            <option value="Excision Local Amplia"<?php if ($tx_quiru_tipo== 'Excision Local Amplia')echo 'selected'; ?>>Excision Local Amplia</option>
                            <option value="Glosectomia Parcial"<?php if ($tx_quiru_tipo== 'Glosectomia Parcial')echo 'selected'; ?>>Glosectomia Parcial</option>
                            <option value="Hemiglosectomia"<?php if ($tx_quiru_tipo== 'Hemiglosectomia')echo 'selected'; ?>>Hemiglosectomia</option>
                            <option value="Mandibulectomia (Parcial, Segmentaria, Maginal)"<?php if ($tx_quiru_tipo== 'Mandibulectomia (Parcial, Segmentaria, Maginal)')echo 'selected'; ?>>Mandibulectomia (Parcial,
                                Segmentaria, Maginal)</option>
                            <option value="Maxilectomia de Infraestructura"<?php if ($tx_quiru_tipo== 'Maxilectomia de Infraestructura')echo 'selected'; ?>>Maxilectomia de Infraestructura</option>
                            <option value="Maxilectomia de Superestructura"<?php if ($tx_quiru_tipo== 'Maxilectomia de Superestructura')echo 'selected'; ?>>Maxilectomia de Superestructura</option>
                            <option value="Reseccion de Glandula Salival Menor"<?php if ($tx_quiru_tipo== 'Reseccion de Glandula Salival Menor')echo 'selected'; ?>>Reseccion de Glandula Salival Menor
                            </option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Lugar DRMC</strong>
                        <select class="form-control" name="lugar_DRMC" id="lugar_DRMC">
                            <option value=""<?php if ($lugar_DRMC== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Bilateral"<?php if ($lugar_DRMC== 'Bilateral')echo 'selected'; ?>>Bilateral</option>
                            <option value="Unilateral"<?php if ($lugar_DRMC== 'Unilateral')echo 'selected'; ?>>Unilateral</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Tipo DRMC</strong>
                        <select class="form-control" name="tipo_DRMC" id="tipo_DRMC">
                            <option value=""<?php if ($tipo_DRMC== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Selectiva"<?php if ($tipo_DRMC== 'Selectiva')echo 'selected'; ?>>Selectiva</option>
                            <option value="Superselectiva"<?php if ($tipo_DRMC== 'Superselectiva')echo 'selected'; ?>>Superselectiva</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Nivel Cervical</strong>
                        <select class="form-control" name="nivel_cervical" id="nivel_cervical">
                            <option value=""<?php if ($nivel_cervical== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="I"<?php if ($nivel_cervical== 'I')echo 'selected'; ?>>I</option>
                            <option value="II"<?php if ($nivel_cervical== 'II')echo 'selected'; ?>>II</option>
                            <option value="III"<?php if ($nivel_cervical== 'III')echo 'selected'; ?>>III</option>
                            <option value="IV"<?php if ($nivel_cervical== 'IV')echo 'selected'; ?>>IV</option>
                            <option value="V"<?php if ($nivel_cervical== 'V')echo 'selected'; ?>>V</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Maxilectomia de Infraestructura</strong>
                        <select class="form-control" name="tx_maxilo_infra" id="tx_maxilo_infra">
                            <option value=""<?php if ($tx_maxilo_infra== '')echo 'selected'; ?>>Seleccione...</option>
                            <option
                                value="Clase I. Reseccion quirurgica clasica del maxilar que abarca paladar duro y dentición hasta la linea media, es unilateral."<?php if ($tx_maxilo_infra== 'Clase I. Reseccion quirurgica clasica del maxilar que abarca paladar duro y dentición hasta la linea media, es unilateral.')echo 'selected'; ?>>
                                Clase I. Reseccion quirurgica clasica del maxilar que abarca paladar duro y dentición
                                hasta la linea media, es unilateral.</option>
                            <option
                                value="Clase II. Incluye defectos que mantienen la denticion del lado contralateral. Es unilateral posterior que no abarca hasta la linea media."<?php if ($tx_maxilo_infra== 'Clase II. Incluye defectos que mantienen la denticion del lado contralateral. Es unilateral posterior que no abarca hasta la linea media.')echo 'selected'; ?>>
                                Clase II. Incluye defectos que mantienen la denticion del lado contralateral. Es
                                unilateral posterior que no abarca hasta la linea media.</option>
                            <option
                                value="Clase III. Implica un defecto en la línea media del paladar duro y puede incluir una porcion del velo del paladar, sin involucrar proceso alveolar ni organos dentarios"<?php if ($tx_maxilo_infra== 'Clase III. Implica un defecto en la línea media del paladar duro y puede incluir una porcion del velo del paladar, sin involucrar proceso alveolar ni organos dentarios')echo 'selected'; ?>>
                                Clase III. Implica un defecto en la línea media del paladar duro y puede incluir una
                                porcion del velo del paladar, sin involucrar proceso alveolar ni organos dentarios
                            </option>
                            <option
                                value="Clase IV. Es un defecto extenso bilateral anterior, involucra dientes anteriores y posteriores."<?php if ($tx_maxilo_infra== 'Clase IV. Es un defecto extenso bilateral anterior, involucra dientes anteriores y posteriores.')echo 'selected'; ?>>
                                Clase IV. Es un defecto extenso bilateral anterior, involucra dientes anteriores y
                                posteriores.</option>
                            <option
                                value="Clase V. Defecto bilateral posterior, situado por detras de los dientes remanentes."<?php if ($tx_maxilo_infra== 'Clase V. Defecto bilateral posterior, situado por detras de los dientes remanentes.')echo 'selected'; ?>>
                                Clase V. Defecto bilateral posterior, situado por detras de los dientes remanentes.
                            </option>
                            <option
                                value="Clase VI. Defecto bilateral de la zona anterior sin involucrar dientes posteriores."<?php if ($tx_maxilo_infra== 'Clase VI. Defecto bilateral de la zona anterior sin involucrar dientes posteriores.')echo 'selected'; ?>>
                                Clase VI. Defecto bilateral de la zona anterior sin involucrar dientes posteriores.
                            </option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <strong>Reconstrucción</strong>
                        <select class="form-control" name="tx_recontruccion" id="tx_recontruccion">
                            <option value=""<?php if ($tx_recontruccion== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($tx_recontruccion== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($tx_recontruccion== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="checkboxes">
                            <strong>Tipo de Reconstrucción</strong>
                        </div>
                        <div class="col-md-4 checkboxes">
                            <span>Ninguno</span>
                            <label class="container">
                                <input type="checkbox" name="recons_ninguno" id="recons_ninguno" <?php if ($recons_ninguno == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-4 checkboxes">
                            <span>Colgajo Microvascular</span>
                            <label class="container">
                                <input type="checkbox" name="recons_CM" id="recons_CM" <?php if ($recons_CM == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-4 checkboxes">
                            <span>Injerto Oseo Autologo o Cadaverico</span>
                            <label class="container">
                                <input type="checkbox" name="recons_IO" id="recons_IO" <?php if ($recons_IO == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-4 checkboxes">
                            <span>Material de Osteosintesis</span>
                            <label class="container">
                                <input type="checkbox" name="recons_MO" id="recons_MO" <?php if ($recons_MO == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-4 checkboxes">
                            <span>Rotacion de Colgajo</span>
                            <label class="container">
                                <input type="checkbox" name="recons_RC" id="recons_RC" <?php if ($recons_RC == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-4 checkboxes">
                            <span>Toma y Aplicacion de Injerto</span>
                            <label class="container">
                                <input type="checkbox" name="recons_AI" id="recons_AI" <?php if ($recons_AI == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <strong>Radioterapia</strong>
                        <select class="form-control" name="tx_radio" id="tx_radio">
                            <option value=""<?php if ($tx_radio== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($tx_radio== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($tx_radio== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong>Fecha</strong>
                        <input type="date" class="form-control" name="fecha_radio" id="fecha_radio" value="<?php echo $fecha_radio; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Momento RT</strong>
                        <select class="form-control" name="momento_radio" id="momento_radio">
                            <option value=""<?php if ($momento_radio== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Adyuvante"<?php if ($momento_radio== 'Adyuvante')echo 'selected'; ?>>Adyuvante</option>
                            <option value="Paliativa"<?php if ($momento_radio== 'Paliativa')echo 'selected'; ?>>Paliativa</option>
                            <option value="Radical"<?php if ($momento_radio== 'Radical')echo 'selected'; ?>>Radical</option>
                            <option value="Concomitante"<?php if ($momento_radio== 'Concomitante')echo 'selected'; ?>>Concomitante</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis</strong>
                        <input type="number" class="form-control" name="dosis_radio" id="dosis_radio" value="<?php echo $dosis_radio; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Fracciones</strong>
                        <select class="form-control" name="fracciones_dosis" id="fracciones_dosis">
                            <option value=""<?php if ($fracciones_dosis== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Convencional"<?php if ($fracciones_dosis== 'Convencional')echo 'selected'; ?>>Convencional</option>
                            <option value="Hiperfraccionamiento"<?php if ($fracciones_dosis== 'Hiperfraccionamiento')echo 'selected'; ?>>Hiperfraccionamiento</option>
                            <option value="Hipofraccionamiento"<?php if ($fracciones_dosis== 'Hipofraccionamiento')echo 'selected'; ?>>Hipofraccionamiento</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <strong>No. Fracciones</strong>
                        <input type="number" class="form-control" name="no_fracciones" id="no_fracciones" value="<?php echo $no_fracciones; ?>">
                    </div>
                    <div class="col-md-6">
                        <strong>Técnica</strong>
                        <select class="form-control" name="fracciones_tecnica" id="fracciones_tecnica">
                            <option value=""<?php if ($fracciones_tecnica== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="3D Conformal"<?php if ($fracciones_tecnica== '3D Conformal')echo 'selected'; ?>>3D Conformal</option>
                            <option value="Braquiterapia"<?php if ($fracciones_tecnica== 'Braquiterapia')echo 'selected'; ?>>Braquiterapia</option>
                            <option value="IMRT"<?php if ($fracciones_tecnica== 'IMRT')echo 'selected'; ?>>IMRT</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="checkboxes">
                            <strong>Complicaciones RT</strong>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Caries</span>
                            <label class="container">
                                <input type="checkbox" name="rt_caries" id="rt_caries" <?php if ($rt_caries == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Disgeusia</span>
                            <label class="container">
                                <input type="checkbox" name="rt_disgeusia" id="rt_disgeusia" <?php if ($rt_disgeusia == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Dolor</span>
                            <label class="container">
                                <input type="checkbox" name="rt_dolor" id="rt_dolor" <?php if ($rt_dolor == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Fractura</span>
                            <label class="container">
                                <input type="checkbox" name="rt_fractura" id="rt_fractura" <?php if ($rt_fractura == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Infeccion</span>
                            <label class="container">
                                <input type="checkbox" name="rt_infeccion" id="rt_infeccion" <?php if ($rt_infeccion == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Hemorragias</span>
                            <label class="container">
                                <input type="checkbox" name="rt_hemorragias" id="rt_hemorragias" <?php if ($rt_hemorragias == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Mucositis</span>
                            <label class="container">
                                <input type="checkbox" name="rt_mucositis" id="rt_mucositis" <?php if ($rt_mucositis == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Osteonecrosis</span>
                            <label class="container">
                                <input type="checkbox" name="rt_osteonecrosis" id="rt_osteonecrosis" <?php if ($rt_osteonecrosis == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Parestesia</span>
                            <label class="container">
                                <input type="checkbox" name="rt_parestesia" id="rt_parestesia" <?php if ($rt_parestesia == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Propios De La Anestesia Local</span>
                            <label class="container">
                                <input type="checkbox" name="rt_propios" id="rt_propios" <?php if ($rt_propios == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Radiodermitis</span>
                            <label class="container">
                                <input type="checkbox" name="rt_radiodermitis" id="rt_radiodermitis" <?php if ($rt_radiodermitis == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Reaccion Alergica</span>
                            <label class="container">
                                <input type="checkbox" name="rt_RA" id="rt_RA" <?php if ($rt_RA == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Trismus</span>
                            <label class="container">
                                <input type="checkbox" name="rt_trismus" id="rt_trismus" <?php if ($rt_trismus == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Xerostomia</span>
                            <label class="container">
                                <input type="checkbox" name="rt_xerostomia" id="rt_xerostomia" <?php if ($rt_xerostomia == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Ninguno</span>
                            <label class="container">
                                <input type="checkbox" name="rt_ninguno" id="rt_ninguno" <?php if ($rt_ninguno == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="checkboxes">
                            <strong>OARS Dosis</strong>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Cavidad Oral</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_CO" id="OARS_CO" <?php if ($OARS_CO == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Cocleas</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_cocleas" id="OARS_cocleas" <?php if ($OARS_cocleas == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Cristalinos</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_cristalinos" id="OARS_cristalinos" <?php if ($OARS_cristalinos == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Esofago</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_esofago" id="OARS_esofago" <?php if ($OARS_esofago == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Labios</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_labios" id="OARS_labios" <?php if ($OARS_labios == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Laringe</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_laringe" id="OARS_laringe" <?php if ($OARS_laringe == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Mandibula</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_mandibula" id="OARS_mandibula" <?php if ($OARS_mandibula == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Medula</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_medula" id="OARS_medula" <?php if ($OARS_medula == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Nervio Óptico</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_NO" id="OARS_NO" <?php if ($OARS_NO == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Ojos</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_ojos" id="OARS_ojos" <?php if ($OARS_ojos == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Pared Faringea Posterior</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_PFP" id="OARS_PFP" <?php if ($OARS_PFP == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Parotidas</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_parotidas" id="OARS_parotidas" <?php if ($OARS_parotidas == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Sublinguales</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_sublinguales" id="OARS_sublinguales" <?php if ($OARS_sublinguales == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Tallo</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_tallo" id="OARS_tallo" <?php if ($OARS_tallo == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Tiroides</span>
                            <label class="container">
                                <input type="checkbox" name="OARS_tiroides" id="OARS_tiroides" <?php if ($OARS_tiroides == 'Si') echo "checked"; ?>>
                                <div class="checkmark"></div>
                            </label>
                        </div>


                    </div>

                    <div class="col-md-3">
                        <strong>Dosis Máx Cavidad Oral</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_CO" id="Dosis_Máx_CO" value="<?php echo $Dosis_Máx_CO; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Cavidad Oral</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_CO" id="Dosis_Prom_CO" value="<?php echo $Dosis_Prom_CO; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Cocleas</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Cocleas" id="Dosis_Máx_Cocleas" value="<?php echo $Dosis_Máx_Cocleas; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Cocleas</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Cocleas" id="Dosis_Prom_Cocleas" value="<?php echo $Dosis_Prom_Cocleas; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Cristalinos</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Cristalinos"
                            id="Dosis_Máx_Cristalinos" value="<?php echo $Dosis_Máx_Cristalinos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Cristalinos</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Cristalinos"
                            id="Dosis_Prom_Cristalinos" value="<?php echo $Dosis_Prom_Cristalinos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Esofago</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Esofago" id="Dosis_Máx_Esofago" value="<?php echo $Dosis_Máx_Esofago; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Esofago</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Esofago" id="Dosis_Prom_Esofago" value="<?php echo $Dosis_Prom_Esofago; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Labios</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Labios" id="Dosis_Máx_Labios" value="<?php echo $Dosis_Máx_Labios; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Labios</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Labios" id="Dosis_Prom_Labios" value="<?php echo $Dosis_Prom_Labios; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Laringe</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Laringe" id="Dosis_Máx_Laringe" value="<?php echo $Dosis_Máx_Laringe; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Laringe</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Laringe" id="Dosis_Prom_Laringe" value="<?php echo $Dosis_Prom_Laringe; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Mandibula</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Mandibula" id="Dosis_Máx_Mandibula" value="<?php echo $Dosis_Máx_Mandibula; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Mandibula</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Mandibula" id="Dosis_Prom_Mandibula" value="<?php echo $Dosis_Prom_Mandibula; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Medula</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Medula" id="Dosis_Máx_Medula" value="<?php echo $Dosis_Máx_Medula; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Medula</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Medula" id="Dosis_Prom_Medula" value="<?php echo $Dosis_Prom_Medula; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Nervio Óptico</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_NO" id="Dosis_Máx_NO" value="<?php echo $Dosis_Máx_NO; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Nervio Óptico</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_NO" id="Dosis_Prom_NO" value="<?php echo $Dosis_Prom_NO; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Ojos</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Ojos" id="Dosis_Máx_Ojos" value="<?php echo $Dosis_Máx_Ojos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Ojos</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Ojos" id="Dosis_Prom_Ojos" value="<?php echo $Dosis_Prom_Ojos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Pared Faringea Posterior</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_PFP" id="Dosis_Máx_PFP" value="<?php echo $Dosis_Máx_PFP; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Pared Faringea Posterior</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_PFP" id="Dosis_Prom_PFP" value="<?php echo $Dosis_Prom_PFP; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Parotidas</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Parotidas" id="Dosis_Máx_Parotidas" value="<?php echo $Dosis_Máx_Parotidas; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Parotidas</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Parotidas" id="Dosis_Prom_Parotidas" value="<?php echo $Dosis_Prom_Parotidas; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Sublinguales</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Sublinguales"
                            id="Dosis_Máx_Sublinguales" value="<?php echo $Dosis_Máx_Sublinguales; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Sublinguales</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Sublinguales"
                            id="Dosis_Prom_Sublinguales" value="<?php echo $Dosis_Prom_Sublinguales; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Tallo</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Tallo" id="Dosis_Máx_Tallo" value="<?php echo $Dosis_Máx_Tallo; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Tallo</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Tallo" id="Dosis_Prom_Tallo" value="<?php echo $Dosis_Prom_Tallo; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Máx Tiroides</strong>
                        <input type="number" class="form-control" name="Dosis_Máx_Tiroides" id="Dosis_Máx_Tiroides" value="<?php echo $Dosis_Máx_Tiroides; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Dosis Prom Tiroides</strong>
                        <input type="number" class="form-control" name="Dosis_Prom_Tiroides" id="Dosis_Prom_Tiroides" value="<?php echo $Dosis_Prom_Tiroides; ?>">
                    </div>



                </div>

                <div class="form-header">
                    <h5 class="form-title">Caso Existoso</h5>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <strong>Caso Exitoso</strong>
                        <select class="form-control" name="caso_exitoso" id="caso_exitoso">
                            <option value=""<?php if ($caso_exitoso== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($caso_exitoso== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($caso_exitoso== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <strong>Respuesta al Tratamiento</strong>
                        <select class="form-control" name="resp_tx" id="resp_tx">
                            <option value=""<?php if ($resp_tx== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Completa"<?php if ($resp_tx== 'Completa')echo 'selected'; ?>>Completa</option>
                            <option value="Nula"<?php if ($resp_tx== 'Nula')echo 'selected'; ?>>Nula</option>
                            <option value="Parcial"<?php if ($resp_tx== 'Parcial')echo 'selected'; ?>>Parcial</option>
                        </select>
                    </div>
                </div>


                <div class="form-header">
                    <h5 class="form-title">Defunción</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Defunción</strong>
                        <select class="form-control" name="defuncion" id="defuncion">
                            <option value=""<?php if ($defuncion== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($defuncion== 'Si')echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($defuncion== 'No')echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Fecha Defunción</strong>
                        <input type="date" class="form-control" name="fecha_defuncion" id="fecha_defuncion" value="<?php echo $fecha_defuncion; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Causa</strong>
                        <select class="form-control" name="causa_defuncion" id="causa_defuncion">
                            <option value=""<?php if ($causa_defuncion== '')echo 'selected'; ?>>Seleccione...</option>
                            <option value="Oncologica"<?php if ($causa_defuncion== 'Oncologica')echo 'selected'; ?>>Oncologica</option>
                            <option value="No Oncologica"<?php if ($causa_defuncion== 'No Oncologica')echo 'selected'; ?>>No Oncologica</option>
                        </select>
                    </div>
                </div>






            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
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




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scriptmodal.js"></script>


    <script type="module">
        import { editForm } from "./js/update.js";
        editForm();
    </script>

    <script>
        $(document).ready(function () {
            // Cuando se selecciona un estado
            $('#estado').change(function () {
                var estadoId = $(this).val(); // Obtiene el valor seleccionado

                // Filtra los municipios por el estado seleccionado
                var filteredMunicipios = municipiosData.filter(function (municipio) {
                    return municipio.Estado_Id == estadoId;
                });

                // Limpia el segundo select
                $('#municipio').empty();

                // Agrega las opciones recuperadas
                if (filteredMunicipios.length > 0) {
                    $.each(filteredMunicipios, function (index, municipio) {
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
</head>