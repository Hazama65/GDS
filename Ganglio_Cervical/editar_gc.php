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
        <!-- ======================== AQUI INICIA  ======================== -->
        <h5>Editar-Registro Ganglio Cervical</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>


    <div class="container">
        <form id="editar_gc" method="POST" autocomplete="off">
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                <h6>Generales</h6>
            </div>

            <div class="row"> <!-- DATOS GENERALES  -->

                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="col-md-4">
                    <strong style="font-size:12px;">Nombre Paciente</strong>
                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" placeholder="Nombre(s) Apellidos" style="font-size:12px;" value="<?php echo $nombre_paciente; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size:12px;">Sexo</strong>
                    <input type="text" name="sexo" id="sexo" class="form-control" style="font-size:12px;" value="<?php echo $sexo; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size:12px;">Edad de Abordaje</strong>
                    <input type="text" name="edad" id="edad" class="form-control" style="font-size:12px;" value="<?php echo $edad; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:12px;">Residencia</strong>
                    <input id="residencia" name="residencia" type="text" class="control form-control" style="font-size:12px;" value="<?php echo $residencia; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:12px;">Nivel Socioeconomico</strong>
                    <select name="Nivel_socioeconomico" id="Nivel_socioeconomico" class="form-control" style="font-size:12px;">
                        <option value="0" <?php if ($nivel_socioeconomico == '0') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Alto" <?php if ($nivel_socioeconomico == 'Alto') echo 'selected'; ?>>Alto</option>
                        <option value="Medio" <?php if ($nivel_socioeconomico == 'Medio') echo 'selected'; ?>>Medio</option>
                        <option value="Medio/Bajo" <?php if ($nivel_socioeconomico == 'Medio/Bajo') echo 'selected'; ?>>Medio/Bajo</option>
                        <option value="Bajo" <?php if ($nivel_socioeconomico == 'Bajo') echo 'selected'; ?>>Bajo</option>
                    </select>
                </div>

            </div> <!-- DIV DATOS GENERALES PX  -->



            <!-- ANTECEDENTES PERSONALES NO PATOLOGICOS -->

            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                <h6>Antecendentes Pesonales No Patológicos</h6>
            </div>

            <div class="row"> <!-- ***********************************INTERROGATORIO ANTECEDENTES NO PATOLOGICOS*********************************** -->


                <div class="col-md-12">
                    <strong style="font-size:12px;">Contacto con Personas Enfermas</strong>
                    <select name="contacto_personas" id="contacto_personas" class="form-control" onchange="mostrarOcultarSecciones()" style="font-size: 12px;">
                        <option value="Negado" <?php if ($contacto_enfermos == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($contacto_enfermos == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>
                <!-- ***********************************PATOLOGIAS*********************************** -->


                <!--===============AH: TOS CRÓNICA=======================-->

                <div class="col-md-12" id="ah_TosCronica">
                    <strong style="font-size: 12px;">Tos Crónica</strong>
                    <select name="TosCronicaSelect" id="TosCronicaSelect" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($tos_cronica == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($tos_cronica == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>


                <!--===============FAMILIAR TOS CRÓNICA=======================-->

                <!--===============sI SELECCIONAMOS PADRE =======================-->
                <div class="container" id="heredo_familia1">

                    <div class="row">

                        <div class="col-md-4" id="PadreTos">
                            <label style="font-size: 12px;">Padre</label>
                            <select name="TosPadre" id="TosPadre" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tos_padre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tos_padre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE =======================-->
                        <div class="col-md-4" id="MadreTos">
                            <label style="font-size: 12px;">Madre</label>
                            <select name="Tos_Madre" id="Tos_Madre" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tos_madre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tos_madre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->

                        <div class="col-md-4" id="Abuelo_MaternoTos">
                            <label style="font-size: 12px;">Abuelo Materno</label>
                            <select name="TosAbueloMaterno" id="TosAbueloMaterno" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tos_abuelo_m == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tos_abuelo_m == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA =======================-->
                        <div class="col-md-4" id="Abuela_MaternaTos">
                            <label style="font-size: 12px;">Abuela Materna</label>
                            <select name="TosAbuelaMaterna" id="TosAbuelaMaterna" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tos_abuela_m == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tos_abuela_m == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                        <div class="col-md-4" id="Abuelo_PaternoTos">
                            <label style="font-size: 12px;">Abuelo Paterno</label>
                            <select name="TosAbueloPaterno" id="TosAbueloPaterno" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tos_abuelo_p == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tos_abuelo_p == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO =======================-->

                        <div class="col-md-4" id="Abuela_PaternaTos">
                            <label style="font-size: 12px;">Abuela Paterna</label>
                            <select name="TosAbuelaPaterna" id="TosAbuelaPaterna" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tos_abuela_p == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tos_abuela_p == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA =======================-->

                        <div class="col-md-4" id="HermanaTos">
                            <label style="font-size: 12px;">Número de Hermanas</label>
                            <input type="number" step="any" class="form-control" id="Tos_hermanas" name="Tos_hermanas" style="font-size: 12px;" value="<?php echo $tos_no_hermanas; ?>">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO =======================-->

                        <div class="col-md-4" id="HermanoTos">
                            <label style="font-size: 12px;">Número de Hermanos</label>
                            <input type="number" step="any" class="form-control" id="Tos_hermanos" name="Tos_hermanos" style="font-size: 12px;" value="<?php echo $tos_no_hermanos; ?>">
                        </div>

                    </div> <!--===========DIV CONTAINER TOS CRÓNICA ================--> <br>
                </div> <!--=========== DIV DEL ROW DE TOS CRÓNICA ================-->


                <!--===========TUBERCULOSIS  ================-->

                <div class="col-md-12" id="ah_Tuberculosis">
                    <strong style="font-size: 12px;">Tuberculosis</strong>
                    <select name="TuberculosisSelect" id="TuberculosisSelect" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($tuberculosis == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($tuberculosis == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===============TUBERCULOSIS FAMILIA======================-->

                <!--===============sI SELECCIONAMOS PADRE TUBERCULOSIS =======================-->
                <div class="container" id="heredo_familia2">

                    <div class="row">

                        <div class="col-md-4" id="PadreTuber">
                            <label style="font-size: 12px;">Padre</label>
                            <select name="TuberPadre" id="TuberPadre" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tuberculosis_padre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tuberculosis_padre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE TUBERCULOSIS=======================-->
                        <div class="col-md-4" id="MadreTuber">
                            <label style="font-size: 12px;">Madre</label>
                            <select name="TuberMadre" id="TuberMadre" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tuberculosis_madre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tuberculosis_madre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO  TUBERCULOSIS=======================-->

                        <div class="col-md-4" id="Abuelo_MaternoTuber">
                            <label style="font-size: 12px;">Abuelo Materno</label>
                            <select name="TuberAbueloMaterno" id="TuberAbueloMaterno" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tuberculosis_abuelo_m == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tuberculosis_abuelo_m == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA  TUBERCULOSIS=======================-->
                        <div class="col-md-4" id="Abuela_MaternaTuber">
                            <label style="font-size: 12px;">Abuela Materna</label>
                            <select name="TuberAbuelaMaterna" id="TuberAbuelaMaterna" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tuberculosis_abuela_m == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tuberculosis_abuela_m == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO TUBERCULOSIS =======================-->
                        <div class="col-md-4" id="Abuelo_PaternoTuber">
                            <label style="font-size: 12px;">Abuelo Paterno</label>
                            <select name="TuberAbueloPaterno" id="TuberAbueloPaterno" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tuberculosis_abuelo_p == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tuberculosis_abuelo_p == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO TUBERCULOSIS=======================-->

                        <div class="col-md-4" id="Abuela_PaternaTuber">
                            <label style="font-size: 12px;">Abuela Paterna</label>
                            <select name="TuberAbuelaPaterna" id="TuberAbuelaPaterna" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($tuberculosis_abuela_p == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($tuberculosis_abuela_p == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA TUBERCULOSIS =======================-->

                        <div class="col-md-4" id="HermanaTuber">
                            <label style="font-size: 12px;">Número de Hermanas</label>
                            <input type="number" step="any" class="form-control" id="Tuber_hermanas" name="Tuber_hermanas" style="font-size: 12px;" value="<?php echo $tuberculosis_no_hermanas; ?>">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO TUBERCULOSIS =======================-->

                        <div class="col-md-4" id="HermanoTuber">
                            <label style="font-size: 12px;">Número de Hermanos</label>
                            <input type="number" step="any" class="form-control" id="Tuber_hermanos" name="Tuber_hermanos" style="font-size: 12px;" value="<?php echo $tuberculosis_no_hermanos; ?>">
                        </div>

                    </div> <!--===========DIV CONTAINER TUBERCULOSIS ================--> <br>
                </div> <!--=========== DIV DEL ROW DE TUBERCULOSIS  ================-->


                <!--=========== VIH  ================-->

                <div class="col-md-12" id="ah_VIH">
                    <strong style="font-size: 12px;">VIH</strong>
                    <select name="VIHSelect" id="VIHSelect" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($vih == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($vih == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <!--===============FAMILIAR VIH=======================-->

                <!--===============sI SELECCIONAMOS PADRE =======================-->
                <div class="container" id="heredo_familia3">

                    <div class="row">
                        <!--===============sI SELECCIONAMOS PADRE  VIH=======================-->
                        <div class="col-md-4" id="PadreVIH">
                            <label style="font-size: 12px;">Padre</label>
                            <select name="VIHPadre" id="VIHPadre" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($vih_padre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($vih_padre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS MADRE  VIH=======================-->
                        <div class="col-md-4" id="MadreVIH">
                            <label style="font-size: 12px;">Madre</label>
                            <select name="VIHMadre" id="VIHMadre" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($vih_madre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($vih_madre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO VIH=======================-->

                        <div class="col-md-4" id="Abuelo_MaternoVIH">
                            <label style="font-size: 12px;">Abuelo Materno</label>
                            <select name="VIHAbueloMaterno" id="VIHAbueloMaterno" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($vih_abuelo_m == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($vih_abuelo_m == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELA MATERNA VIH=======================-->
                        <div class="col-md-4" id="Abuela_MaternaVIH">
                            <label style="font-size: 12px;">Abuela Materna</label>
                            <select name="VIHAbuelaMaterna" id="VIHAbuelaMaterna" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($vih_abuela_m == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($vih_abuela_m == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO MATERNO VIH=======================-->
                        <div class="col-md-4" id="Abuelo_PaternoVIH">
                            <label style="font-size: 12px;">Abuelo Paterno</label>
                            <select name="VIHAbueloPaterno" id="VIHAbueloPaterno" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($vih_abuelo_p == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($vih_abuelo_p == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS ABUELO PATERNO VIH =======================-->

                        <div class="col-md-4" id="Abuela_PaternaVIH">
                            <label style="font-size: 12px;">Abuela Paterna</label>
                            <select name="VIHAbuelaPaterna" id="VIHAbuelaPaterna" class="form-control" style="font-size: 12px;">
                                <option value="Negado" <?php if ($vih_abuela_p == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si" <?php if ($vih_abuela_p == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANA VIH=======================-->

                        <div class="col-md-4" id="HermanaVIH">
                            <label style="font-size: 12px;">Número de Hermanas</label>
                            <input type="number" step="any" class="form-control" id="VIH_hermanas" name="VIH_hermanas" style="font-size: 12px;" value="<?php echo $vih_no_hermanas; ?>">
                        </div>
                        <!--===============sI SELECCIONAMOS HERMANO VIH=======================-->

                        <div class="col-md-4" id="HermanoVIH">
                            <label style="font-size: 12px;">Número de Hermanos</label>
                            <input type="number" step="any" class="form-control" id="VIH_hermanos" name="VIH_hermanos" style="font-size: 12px;" value="<?php echo $vih_no_hermanos; ?>">
                        </div>

                    </div> <!--===========DIV CONTAINER VIH ================--> <br>
                </div> <!--=========== DIV DEL ROW DE VIH================-->



                <div class="col-md-12">
                    <strong style="font-size:12px;">Contacto con Animales</strong>
                    <select name="contacto_animales" id="contacto_animales" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($contacto_animales == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($contacto_animales == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="container-animales">

                    <fieldset>
                        <legend>
                            <div class="row">

                                <div class="col-md-2">
                                    <input type="checkbox" name="Perros" id="Perros" value="Si" style="font-size:12px;" <?php if ($perro == 'Si') echo "checked"; ?>>
                                    <label for="Perros" style="font-size:12px;">Perros</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Gatos" id="Gatos" value="Si" style="font-size:12px;" <?php if ($gato == 'Si') echo "checked"; ?>>
                                    <label for="Gatos" style="font-size:12px;">Gatos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Conejos" id="Conejos" value="Si" style="font-size:12px;" <?php if ($conejo == 'Si') echo "checked"; ?>>
                                    <label for="Conejos" style="font-size:12px;">Conejos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Pollos" id="Pollos" value="Si" style="font-size:12px;" <?php if ($pollo == 'Si') echo "checked"; ?>>
                                    <label for="Pollos" style="font-size:12px;">Pollos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Chinches" id="Chinches" value="Si" style="font-size:12px;" <?php if ($chinche == 'Si') echo "checked"; ?>>
                                    <label for="Chinches" style="font-size:12px;">Chinches</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Ratas" id="Ratas" value="Si" style="font-size:12px;" <?php if ($rata == 'Si') echo "checked"; ?>>
                                    <label for="Ratas" style="font-size:12px;">Ratas</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Moscos" id="Moscos" value="Si" style="font-size:12px;" <?php if ($mosco == 'Si') echo "checked"; ?>>
                                    <label for="Moscos" style="font-size: 12px;">Moscos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Gallinas" id="Gallinas" value="Si" style="font-size:12px;" <?php if ($gallinas == 'Si') echo "checked"; ?>>
                                    <label for="Gallinas" style="font-size: 12px;">Gallinas</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Cerdos" id="Cerdos" value="Si" style="font-size:12px;" <?php if ($cerdo == 'Si') echo "checked"; ?>>
                                    <label for="Cerdos" style="font-size: 12px;">Cerdos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Caballos" id="Caballos" value="Si" style="font-size:12px;" <?php if ($caballo == 'Si') echo "checked"; ?>>
                                    <label for="Caballos" style="font-size:12px;">Caballos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Becerros" id="Becerros" value="Si" style="font-size:12px;" <?php if ($becerro == 'Si') echo "checked"; ?>>
                                    <label for="Becerros" style="font-size: 12px;">Becerros</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Pajaros" id="Pajaros" value="Si" style="font-size: 12px;" <?php if ($pajaro == 'Si') echo "checked"; ?>>
                                    <label for="Pajaros" style="font-size:12px;">Pajaros</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Borregos" id="Borregos" value="Si" style="font-size: 12px;" <?php if ($borrego == 'Si') echo "checked"; ?>>
                                    <label for="Borregos" style="font-size:12px;">Borregos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Tortugas" id="Tortugas" value="Si" style="font-size:12px;" <?php if ($tortuga == 'Si') echo "checked"; ?>>
                                    <label for="Tortugas" style="font-size:12px;">Tortugas</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Patos" id="Patos" value="Si" style="font-size:12px;" <?php if ($pato == 'Si') echo "checked"; ?>>
                                    <label for="Patos" style="font-size:12px;">Patos</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Burros" id="Burros" value="Si" style="font-size:12px;" <?php if ($burro == 'Si') echo "checked"; ?>>
                                    <label for="Burros" style="font-size:12px;">Burros</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="Moscas" id="Moscas" value="Si" style="font-size:12px;" <?php if ($mosca == 'Si') echo "checked"; ?>>
                                    <label for="Moscas" style="font-size: 12px;">Moscas</label>
                                </div>

                            </div>
                        </legend>
                    </fieldset> <!--=========== DIV DEL ROW DE  ANIMALES ================-->
                </div><!--=========== DIV DEL CONTAINER ANIMALES  ================-->

                <div class="col-md-6">
                    <strong style="font-size:12px;">Viajes Recientes</strong>
                    <select name="viajes" id="viajes" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($viajes_recientes == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($viajes_recientes == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="lugar">
                    <strong style="font-size:12px;">Lugar</strong>
                    <select name="lugarSelect" id="lugarSelect" class="form-control" style="font-size:12px;">
                        <option value="0" <?php if ($lugar == '0') echo 'selected'; ?>>Seleccione</option>
                        <option value="Ixmiquilpan Veracruz" <?php if ($lugar == 'Ixmiquilpan Veracruz') echo 'selected'; ?>>Ixmiquilpan Veracruz</option>
                        <option value="Guerrero" <?php if ($lugar == 'Guerrero') echo 'selected'; ?>>Guerrero</option>
                        <option value="Tlaxcala" <?php if ($lugar == 'Tlaxcala') echo 'selected'; ?>>Tlaxcala</option>
                        <option value="Hidalgo" <?php if ($lugar == 'Hidalgo') echo 'selected'; ?>>Hidalgo</option>
                        <option value="Oaxtepec" <?php if ($lugar == 'Oaxtepec') echo 'selected'; ?>>Oaxtepec</option>
                        <option value="Michoacan" <?php if ($lugar == 'Michoacan') echo 'selected'; ?>>Michoacan</option>
                        <option value="Puebla" <?php if ($lugar == 'Puebla') echo 'selected'; ?>>Puebla</option>
                        <option value="Otros" <?php if ($lugar == 'Otros') echo 'selected'; ?>>Otros</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <strong style="font-size:12px;">Visita a Cuevas</strong>
                    <select name="cuevas" id="cuevas" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($vist_cuevas == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($vist_cuevas == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:12px;">Alimentarios</strong>
                    <select name="alimentos" id="alimentos" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($alimentarios == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($alimentarios == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="tipo_alimentarios">
                    <strong style="font-size:12px;">Tipo-Alimentarios</strong>
                    <select name="tipoalimentos" id="tipoalimentos" class="form-control" style="font-size:12px;">
                        <option value="Seleccione" <?php if ($tipo_alimentarios == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Queso Fresco" <?php if ($tipo_alimentarios == 'Queso Fresco') echo 'selected'; ?>>Queso Fresco</option>
                        <option value="Otros" <?php if ($tipo_alimentarios == 'Otros') echo 'selected'; ?>>Otros</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <strong style="font-size:12px;">Vacunación Completa</strong>
                    <select name="vacunacion" id="vacunacion" class="form-control" style="font-size:12px;">
                        <option value="Seleccione" <?php if ($vacunacion == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si" <?php if ($vacunacion == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No" <?php if ($vacunacion == 'No') echo 'selected'; ?>>No</option>
                        <option value="Desconoce" <?php if ($vacunacion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="container mt-4" id="Faltante">
                    <fieldset>
                        <legend>
                            <table class="table table-striped">
                                <thead>

                                    <tr>
                                        <th style="font-weight: bold;  font-size: 25px;">Aplicación</th>
                                        <th collabel="4" style="text-center">Vacuna-Faltante</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">Nacimiento</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="bcg" id="bcg" <?php if ($BCG == 'Si') echo "checked"; ?>>
                                                <label style="font-size: 12px;" class="custom-control-label" for="bcg">BCG</label>
                                                <br>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="hepatitis_nacimiento" id="hepatitis_nacimiento" <?php if ($Hepatitis_B_1 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="hepatitis_nacimiento" style="font-size:12px;">Hepatitis B</label>
                                                <br>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td style="font-weight: bold;  font-size: 19px;">2 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="pentavalente_2mes" id="pentavalente_2mes" <?php if ($Pentavalente_Acelular_1 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="pentavalente_2mes" style="font-size:12px;">Pentavalente Acelular</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="hepatitisB_2mes" id="hepatitisB_2mes" <?php if ($Hepatitis_B_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="hepatitisB_2mes" style="font-size:12px;">Hepatitis B</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="rotavirus_2mes" id="rotavirus_2mes" <?php if ($Rotavirus_1 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="rotavirus_2mes" style="font-size:12px;">Rotavirus</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="neumococo_2mes" id="neumococo_2mes" <?php if ($Neumococo_1 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="neumococo_2mes" style="font-size:12px;">Neumococo</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <!-- 4 Meses-->
                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">4 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="pentavalente_4mes" id="pentavalente_4mes" <?php if ($Pentavalente_Acelular_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="pentavalente_4mes" style="font-size:12px;">Pentavalente Acelular</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="rotavirus_4mes" id="rotavirus_4mes" <?php if ($Rotavirus_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="rotavirus_4mes" style="font-size:12px;">Rotavirus</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="neumococo_4mes" id="neumococo_4mes" <?php if ($Neumococo_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="neumococo_4mes" style="font-size:12px;">Neumococo C.</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <!-- 6 Meses -->
                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">6 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="pentavalente_6mes" id="pentavalente_6mes" <?php if ($Pentavalente_Acelular_3 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="pentavalente_6mes" style="font-size:12px;">Pentavalente Acelular</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="rotavirus_6mes" id="rotavirus_6mes" <?php if ($Rotavirus_3 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="rotavirus_6mes" style="font-size:12px;">Rotavirus</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="Influenza_6mes" id="Influenza_6mes" <?php if ($Influenza_1 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="Influenza_6mes" style="font-size:12px;">Influenza</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <!-- 7 Meses -->
                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">7 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="Influenza_7mes" id="Influenza_7mes" <?php if ($Influenza_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="Influenza_7mes" style="font-size:12px;">Influenza 2da dosis</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <!--  12 meses -->
                                    <td style="font-weight: bold; font-size: 19px;">12 meses</td>

                                    <td>
                                        <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                            <input type="checkbox" class="custom-control-input" name="SRP_12mes" id="SRP_12mes" <?php if ($SRP_1 == 'Si') echo "checked"; ?>>
                                            <label class="custom-control-label" for="SRP_12mes" style="font-size:12px;">SRP</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="neumococo_12mes" id="neumococo_12mes" style="font-size:13px;" <?php if ($Neumococo_3 == 'Si') echo "checked"; ?>>
                                            <label class="custom-control-label" for="neumococo_12mes" style="font-size:12px;">Neumococo C.</label>
                                        </div>
                                    </td>

                                    <td>


                                    </td>

                                    <td>

                                    </td>

                                    </tr>

                                    <!--    18 meses -->
                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">18 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="Pentavaleente_18mes" id="Pentavaleente_18mes" <?php if ($Pentavalente_Acelular_4 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="Pentavaleente_18mes" style="font-size:12px;">Pentavalente Acelular</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <!--    24 meses -->

                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">24 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="influenza_refuerzo_24mes" id="influenza_refuerzo_24mes" <?php if ($Influenza_refuerzo_1 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="influenza_refuerzo_24mes" style="font-size:12px;">Influenza Refuerzo Anual</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <!--    36 meses -->

                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">36 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="influenza_refuerzo_36mes" id="influenza_refuerzo_36mes" <?php if ($Influenza_refuerzo_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="influenza_refuerzo_36mes" style="font-size:12px;">Influenza Refuerzo Anual</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                    </tr>

                                    <!--    48 meses -->

                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">48 meses</td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="DPTrefuerzo_48mes" id="DPTrefuerzo_48mes" <?php if ($DPT == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="DPTrefuerzo_48mes" style="font-size:12px;">DPT(Refuerzo)</label>
                                            </div>
                                        </td>


                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="Influenza_R48mes" id="Influenza_R48mes" <?php if ($Influenza_refuerzo_3 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="Influenza_R48mes" style="font-size:12px;">Influenza Refuerzo Anual</label>
                                            </div>
                                        </td>


                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                    </tr>


                                    <!--    59 meses -->

                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">59 meses</td>


                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="Influenza_R59" id="Influenza_R59" <?php if ($Influenza_refuerzo_4 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="Influenza_R59" style="font-size:12px;">Influenza Refuerzo Anual</label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="OVP59" id="OVP59" <?php if ($OVP == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="OVP59" style="font-size:12px;">OVP</label>
                                            </div>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight: bold; font-size: 19px;">72 meses</td>


                                        <td>
                                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                <input type="checkbox" class="custom-control-input" name="srp_refuerzo" id="srp_refuerzo" <?php if ($SRP_2 == 'Si') echo "checked"; ?>>
                                                <label class="custom-control-label" for="srp_refuerzo" style="font-size:12px;">SRP (Refuerzo)</label>
                                            </div>
                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                        </td>
                                    </tr>

                                    <td style="font-weight: bold; font-size: 19px;">11 años</td>


                                    <td>
                                        <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                            <input type="checkbox" class="custom-control-input" name="VPH_11" id="VVPH_11PH" <?php if ($VPH == 'Si') echo "checked"; ?>>
                                            <label class="custom-control-label" for="VVPH_11PH" style="font-size:12px;">VPH</label>
                                        </div>
                                    </td>

                                    <td>

                                    </td>

                                    <td>

                                    </td>

                                    <td>

                                    </td>
                                    </tr>

                                </tbody>
                            </table>
                </div>



            </div> <!--===========DIV DEL ROW ANTECEDENTES NO PATOLOGICOS ================-->


            <!--===========ANTECEDENTES PATOLOGICOS ================-->

            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                <h6>Antecendentes Pesonales Patológicos</h6>
            </div>

            <div class="row"> <!--===========ROW DE ANTECEDENTES PATOLOGICOS ================-->


                <div class="col-md-3">
                    <strong style="font-size: 12px;">Reflujo</strong>
                    <select name="Reflujo" id="Reflujo" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($reflujo == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($reflujo == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Neumopatía Crónica</strong>
                    <select name="Neuropatia_croninca" id="Neuropatia_croninca" class="form-control" style="font-size:14px">
                        <option value="Negado" <?php if ($neuropatica_cron == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($neuropatica_cron == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3" id="edad_neumo">
                    <strong style="font-size:12px;">Edad-Neumopatía</strong>
                    <input type="number" step="any" class="form-control" id="neumo_edad" name="neumo_edad" style="font-size: 12px;" value="<?php echo $edad_neuro; ?>">
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size:12px;">Talla Baja</strong>
                    <select name="talla_baja" id="talla_baja" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($talla_baja == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($talla_baja == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size:12px;">Discapacidad Intelectual</strong>
                    <select name="Discapacidad_intelectual" id="Discapacidad_intelectual" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($discapacidad_intelec == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($discapacidad_intelec == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Pancreatitis por AVP</strong>
                    <select name="pancreatitis_avp" id="pancreatitis_avp" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($AVP == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($AVP == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">LPH</strong>
                    <select name="LPH" id="LPH" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($LPH == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($LPH == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Epilepsia</strong>
                    <select name="Epilepsia" id="Epilepsia" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($epilipsia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($epilipsia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Amigdalectomía</strong>
                    <select name="Amigda" id="Amigda" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($amigdalectomia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($amigdalectomia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Apendicectomía</strong>
                    <select name="apendicectomia" id="apendicectomia" class="form-control" style="font-size: 14px">
                        <option value="Negado" <?php if ($apendicectomia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($apendicectomia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Rubeola</strong>
                    <select name="Rubeola" id="Rubeola" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($rubeola == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($rubeola == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Invaginación</strong>
                    <select name="invaginacion" id="invaginacion" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($invaginacion == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($invaginacion == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size:12px;">Fractura</strong>
                    <select name="fractura" id="fractura" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($fractura == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($fractura == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Rinitis Alérgica</strong>
                    <select name="rinitis_alergica" id="rinitis_alergica" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($rinitis == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($rinitis == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:12px;">Pielonefritis</strong>
                    <select name="Pielonefritis" id="Pielonefritis" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($pielonefritis == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($pielonefritis == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size:12px;">Varicela</strong>
                    <select name="varicela" id="varicela" class="form-control" style="font-size:12px;">
                        <option value="Negado" <?php if ($varicela == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($varicela == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-3" id="edad_varicela">
                    <strong style="font-size:12px;">Edad-Varicela</strong>
                    <input type="number" step="any" class="form-control" id="varicela_edad" name="varicela_edad" style="font-size: 12px;" value="<?php echo $edad_varicela; ?>">
                    </select>
                </div>


            </div><!--===========ROW DE ANTECEDENTES PATOLOGICOS ================-->

            <!--===========ATENCIÓN CLÍNICA ================-->

            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                <h6>Atención Clínica</h6>
            </div>

            <div class="row">

                <div class="col-md-4" id="tiempo_evolucion">
                    <strong style="font-size:12px;">Tiempo de Evolución</strong>
                    <input type="number" step="any" class="form-control" id="evolucion_ganglio" name="evolucion_ganglio" style="font-size: 12px;" value="<?php echo $tiempo_evo; ?>">
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size:12px;">Período Evolución</strong>
                    <select name="evolucion_periodo" id="evolucion_periodo" class="form-control" style="font-size:12px;">
                        <option value="Seleccione" <?php if ($periodo_evo == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Días" <?php if ($periodo_evo == 'Días') echo 'selected'; ?>>Días</option>
                        <option value="Semanas" <?php if ($periodo_evo == 'Semanas') echo 'selected'; ?>>Semanas</option>
                        <option value="Mes" <?php if ($periodo_evo == 'Mes') echo 'selected'; ?>>Mes</option>
                        <option value="Años" <?php if ($periodo_evo == 'Años') echo 'selected'; ?>>Años</option>
                    </select>
                </div>

                <div class="col-md-4" id="tamaño_ganglio">
                    <strong style="font-size:12px;">Tamaño del Ganglio</strong>
                    <input type="number" step="any" class="form-control" id="Ganglio_tama" name="Ganglio_tama" style="font-size: 12px;" value="<?php echo $tamaño_ganglio; ?>">
                    </select>
                </div>

            </div><!--===========ROW ATENCIÓN CLÍNICA ================-->

            <!--===========CARACTERISTICAS ================-->
            <div style="background-color: rgb(149, 118, 152);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                <h6>Caracteristicas</h6>
            </div>

            <div class="container ">
                <fieldset>
                    <legend>
                        <div class="row">

                            <div class="col-md-3">
                                <input type="checkbox" name="Doloroso" id="Doloroso" value="Si" style="font-size:12px;" <?php if ($doloroso == 'Si') echo "checked"; ?>>
                                <label for="Doloroso" style="font-size:12px;">Doloroso</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="No_doloroso" id="No_doloroso" value="Si" style="font-size:12px;" <?php if ($no_doloroso == 'Si') echo "checked"; ?>>
                                <label for="No_doloroso" style="font-size: 12px;">No Doloroso</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="Indurado" id="Indurado" value="Si" style="font-size:12px;" <?php if ($indurado == 'Si') echo "checked"; ?>>
                                <label for="Indurado" style="font-size: 12px;">Indurado</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="No_Indurado" id="No_Indurado" value="Si" style="font-size:12px;" <?php if ($no_indurado == 'Si') echo "checked"; ?>>
                                <label for="No_Indurado" style="font-size: 12px">No Indurado</label>
                            </div>





                            <div class="col-md-3">
                                <input type="checkbox" name="Eritematoso" id="Eritematoso" value="Si" style="font-size: 12px;" <?php if ($eritematoso == 'Si') echo "checked"; ?>>
                                <label for="Eritematoso" style="font-size: 12px;">Eritematoso</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="Hipertermico" id="Hipertermico" value="Si" style="font-size: 12px;" <?php if ($hipertermico == 'Si') echo "checked"; ?>>
                                <label for="Hipertermico" style="font-size: 12px;">Hipertermico</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="con_Secrecion" id="con_Secrecion" value="Si" style="font-size: 12px;" <?php if ($secrecion == 'Si') echo "checked"; ?>>
                                <label for="con_Secrecion" style="font-size: 12px;">Con Secreción</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="sin_secrecion" id="sin_secrecion" value="Si" style="font-size: 12px;" <?php if ($sin_secrecion == 'Si') echo "checked"; ?>>
                                <label for="sin_secrecion" style="font-size: 12px;">Sin Secreción</label>
                            </div>



                            <div class="col-md-3">
                                <input type="checkbox" name="bien_delimitado" id="bien_delimitado" value="Si" style="font-size: 12px;" <?php if ($bien_delimitado == 'Si') echo "checked"; ?>>
                                <label for="bien_delimitado" style="font-size: 12px;">Bien Delimitado</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="mal_delimitado" id="mal_delimitado" value="Si" style="font-size: 12px;" <?php if ($mal_delimitado == 'Si') echo "checked"; ?>>
                                <label for="mal_delimitado" style="font-size: 12px;">Mal Delimitado</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="Fijo" id="Fijo" value="Si" style="font-size: 12px;" <?php if ($fijo == 'Si') echo "checked"; ?>>
                                <label for="Fijo" style="font-size: 12px;">Fijo</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="Movil" id="Movil" value="Si" style="font-size: 12px;" <?php if ($movil == 'Si') echo "checked"; ?>>
                                <label for="Movil" style="font-size: 12px;">Movíl</label>
                            </div>




                            <div class="col-md-3">
                                <input type="checkbox" name="cambios_coloracion" id="cambios_coloracion" value="Si" style="font-size: 12px;" <?php if ($cambio_coloracion == 'Si') echo "checked"; ?>>
                                <label for="cambios_coloracion" style="font-size: 12px;">Cambios de Coloración</label>
                            </div>



                            <div class="col-md-4">
                                <input type="checkbox" name="sin_cambios" id="sin_cambios" value="Si" style="font-size:12px;" <?php if ($sin_cambio_coloracion == 'Si') echo "checked"; ?>>
                                <label for="sin_cambios" style="font-size: 12px;">Sin Cambios de Coloración</label>
                            </div>

                        </div>


                    </legend>
                </fieldset>

            </div><!--===========CARACTERISTICAS================-->

            <!--===========OTROS ================-->
            <div style="background-color: rgb(149, 118, 152);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                <h6>Otros</h6>
            </div>


            <!--===========Otros Ganglios ================-->
            <div class="col-md-12">
                <strong style="font-size:12px;">Otros Ganglios</strong>
                <select name="otros_ganglios" id="otros_ganglios" class="form-control" style="font-size: 12px;">
                    <option value="Negado" <?php if ($otros_ganglios == 'Negado ') echo 'selected'; ?>>Negado</option>
                    <option value="Si" <?php if ($otros_ganglios == 'Si ') echo 'selected'; ?>>Si</option>
                </select>
            </div>

            <div class="container text-center" id="otro_localizacion">
                <fieldset>
                    <legend>
                        <div class="row">

                            <div class="col-md-3">
                                <input type="checkbox" name="local_submandibulares" id="local_submandibulares" value="Si" style="font-size: 12px;" <?php if ($submandibulares == 'Si') echo "checked"; ?>>
                                <label for="local_submandibulares" style="font-size: 12px;">Submandibulares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_axilares" id="local_axilares" value="Si" style="font-size: 12px;" <?php if ($axilares == 'Si') echo "checked"; ?>>
                                <label for="local_axilares" style="font-size: 12px;">Axilares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_inguinales" id="local_inguinales" value="Si" style="font-size: 12px;" <?php if ($inguinales == 'Si') echo "checked"; ?>>
                                <label for="local_inguinales" style="font-size: 12px;">Inguinales</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_cervicales" id="local_cervicales" value="Si" style="font-size: 12px;" <?php if ($cervicales == 'Si') echo "checked"; ?>>
                                <label for="local_cervicales" style="font-size: 12px;">Cervicales</label>
                            </div>

                        </div> <!--===========primera mitad ================-->

                        <div class="row">
                            <div class="col-md-3">
                                <input type="checkbox" name="local_retroauri" id="local_retroauri" value="Si" style="font-size: 12px;" <?php if ($retroauriculares == 'Si') echo "checked"; ?>>
                                <label for="local_retroauri" style="font-size: 12px;">Retroauriculares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_subclav" id="local_subclav" value="Si" style="font-size: 12px;" <?php if ($subclavicular == 'Si') echo "checked"; ?>>
                                <label for="local_subclav" style="font-size: 12px;">Subclavicular</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_occipital" id="local_occipital" value="Si" style="font-size: 12px;" <?php if ($occipital == 'Si') echo "checked"; ?>>
                                <label for="local_occipital" style="font-size: 12px;">Occipital</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_adeno" id="local_adeno" value="Si" style="font-size: 12px;" <?php if ($adenopatias == 'Si') echo "checked"; ?>>
                                <label for="local_adeno" style="font-size: 12px;">Adenopatias</label>
                            </div>

                        </div><!--===========segunda mitad ================-->
                    </legend>
                </fieldset>
            </div> <!--===========CONTAINEROtros Ganglios ================-->


            <!--===========Etiología ================-->
            <div style="background-color: rgb(149, 118, 152);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                <h6>Etiología</h6>
            </div>


            <div class="container text-center" id="etiologia">
                <fieldset>
                    <legend>
                        <div class="row">


                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_VEB" id="etiologia_VEB" value="Si" style="font-size: 12px;" <?php if ($VEB == 'Si') echo "checked"; ?>>
                                <label for="etiologia_VEB" style="font-size: 12px;">VEB</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_CMV" id="etiologia_CMV" value="Si" style="font-size: 12px;" <?php if ($CMV == 'Si') echo "checked"; ?>>
                                <label for="etiologia_CMV" style="font-size: 12px;">CMV</label>
                            </div>

                            <div class="col-md-1">
                                <input type="checkbox" name="etiologia_TB" id="etiologia_TB" value="Si" style="font-size: 12px;" <?php if ($TB == 'Si') echo "checked"; ?>>
                                <label for="etiologia_TB" style="font-size: 12px;">TB</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_B19" id="etiologia_B19" value="Si" style="font-size: 12px;" <?php if ($B19 == 'Si') echo "checked"; ?>>
                                <label for="etiologia_B19" style="font-size: 12px;">B19</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_bocio" id="etiologia_bocio" value="Si" style="font-size: 12px;" <?php if ($bocio == 'Si') echo "checked"; ?>>
                                <label for="etiologia_bocio" style="font-size: 12px;">Bocio</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="etiologia_rubeola" id="etiologia_rubeola" value="Si" style="font-size: 12px;" <?php if ($rebeola == 'Si') echo "checked"; ?>>
                                <label for="etiologia_rubeola" style="font-size: 12px;">Rubéola</label>
                            </div>



                            <div class="col-md-1">

                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_bartonella" id="etiologia_bartonella" value="Si" style="font-size: 12px;" <?php if ($bartonella == 'Si') echo "checked"; ?>>
                                <label for="etiologia_bartonella" style="font-size: 12px;">Bartonella</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_toxoplamosis" id="etiologia_toxoplamosis" value="Si" style="font-size: 12px;" <?php if ($toxoplasmosis == 'Si') echo "checked"; ?>>
                                <label for="etiologia_toxoplamosis" style="font-size: 12px;">Toxoplamosis</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etioligia_inflamatorio" id="etioligia_inflamatorio" value="Si" style="font-size: 12px;" <?php if ($inflamatorio == 'Si') echo "checked"; ?>>
                                <label for="etioligia_inflamatorio" style="font-size: 12px;">Inflamatorio</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_parvovirus" id="etiologia_parvovirus" value="Si" style="font-size: 12px;" <?php if ($parvovirus == 'Si') echo "checked"; ?>>
                                <label for="etiologia_parvovirus" style="font-size: 12px;">Parvovirus</label>
                            </div>

                            <div class="col-md-2">
                                <input type="checkbox" name="etiologia_varicela" id="etiologia_varicela" value="Si" style="font-size: 12px;" <?php if ($varicela == 'Si') echo "checked"; ?>>
                                <label for="etiologia_varicela" style="font-size: 12px;">Varicela</label>
                            </div>

                            <div class="col-md-1">

                            </div>

                        </div>
                    </legend>
                </fieldset>
            </div><!--===========CONTAINER ETIOLOGIA ================-->

            <!--===========Tratamiento ================-->
            <div style="background-color:rgb(129, 99, 139,0.5); 
                border-radius: 10px;
                color: rgb(255, 255, 255); 
                text-align: center; 
                margin-top: 15px;">
                <h6>Tratamiento Farmacológico para TB</h6>
            </div>

            <div class="container text-center" id="tx_fx">
                <fieldset>
                    <legend>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="checkbox" name="tx_Isonicida" id="tx_Isonicida" value="Si" style="font-size: 12px;" <?php if ($isonicida == 'Si') echo "checked"; ?>>
                                <label for="tx_Isonicida" style="font-size: 12px;">Isonicida</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="tx_Rifampicina" id="tx_Rifampicina" value="Si" style="font-size: 12px;" <?php if ($rifampicina == 'Si') echo "checked"; ?>>
                                <label for="tx_Rifampicina" style="font-size: 12px;">Rifampicina</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="tx_Pirazinamida" id="tx_Pirazinamida" value="Si" style="font-size: 12px;" <?php if ($pirazinamida == 'Si') echo "checked"; ?>>
                                <label for="tx_Pirazinamida" style="font-size: 12px;">Pirazinamida</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="tx_Etambutol" id="tx_Etambutol" value="Si" style="font-size: 12px;" <?php if ($etambutol == 'Si') echo "checked"; ?>>
                                <label for="tx_Etambutol" style="font-size: 12px;">Etambutol</label>
                            </div>
                        </div>
                    </legend>
                </fieldset>
            </div>




            <!--===========LABORATORIOS ================-->

            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px            ;">
                <h6>Laboratorios</h6>
            </div>

            <div style="background-color: rgb(149, 118, 152);
    border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Biometría</h6>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <strong style="font-size: 12px;">Hemoglobina</strong>
                    <input type="number" step="any" class="form-control" id="id_Hemoglobina" name="id_Hemoglobina" value="<?php echo $hemoglobina; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Hematocrito</strong>
                    <input type="number" step="any" class="form-control" id="id_Hematocrito" name="id_Hematocrito" value="<?php echo $hematocrito; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Leucocitos</strong>
                    <input type="number" step="any" class="form-control" id="id_Leucocitos" name="id_Leucocitos" value="<?php echo $leucocitos; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Neutrófilos</strong>
                    <input type="number" step="any" class="form-control" id="id_Neutrfilos" name="id_Neutrfilos" value="<?php echo $neutrofilos; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Linfocitos</strong>
                    <input type="number" step="any" class="form-control" id="id_Linfocitos" name="id_Linfocitos" value="<?php echo $linfocitos; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Monocitos</strong>
                    <input type="number" step="any" class="form-control" id="id_Monocitos" name="id_Monocitos" value="<?php echo $monocitos; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Plaquetas</strong>
                    <input type="number" step="any" class="form-control" id="id_Plaquetas" name="id_Plaquetas" value="<?php echo $plaquetas; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Eosinófilos</strong>
                    <input type="number" step="any" class="form-control" id="id_Eosinofilos" name="id_Eosinofilos" value="<?php echo $eosinofilos; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 12px;">Eritrocitos</strong>
                    <input type="number" step="any" class="form-control" id="id_Eritrocitos" name="id_Eritrocitos" value="<?php echo $eritrocitos; ?>">
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 12px;">Procalcitonina</strong>
                    <input type="number" step="any" class="form-control" id="id_Procalcitonina" name="id_Procalcitonina" value="<?php echo $procalcitonina; ?>">
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 12px;">Volumen Corpuscular Medio</strong>
                    <input type="number" step="any" class="form-control" id="id_VCM" name="id_VCM" valu e="<?php echo $vol_corpuscular; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 12px;">Ancho de Distribución Eritrocitaria</strong>
                    <input type="number" step="any" class="form-control" id="id_ADE" name="id_ADE" value="<?php echo $ancho_eritrocitaria; ?>">
                </div>


            </div> <!--==========LABORATORIOS ================-->

            <!--==========PFH  ================-->
            <div style="background-color: rgb(149, 118, 152);
    border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>PFH</h6>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <strong style="font-size: 12px;">DHL</strong>
                    <input type="number" step="any" class="form-control" id="id_DHL" name="id_DHL" value="<?php echo $DHL; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px">AST</strong>
                    <input type="number" step="any" class="form-control" id="id_AST" name="id_AST" value="<?php echo $AST; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">ALT</strong>
                    <input type="number" step="any" class="form-control" id="id_ALT" name="id_ALT" value="<?php echo $ALT; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">Globulina</strong>
                    <input type="number" step="any" class="form-control" id="id_glob" name="id_Glob" value="<?php echo $globulina; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">Albúmina</strong>
                    <input type="number" step="any" class="form-control" id="id_albumina" name="id_albumina" value="<?php echo $albumina; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">BD</strong>
                    <input type="number" step="any" class="form-control" id="id_BD" name="id_BD" value="<?php echo $db; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14;">BI</strong>
                    <input type="number" step="any" class="form-control" id="id_BI" name="id_BI" value="<?php echo $bi; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">TGO</strong>
                    <input type="number" step="any" class="form-control" id="id_TGO" name="id_TGO" value="<?php echo $tgo; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">TGP</strong>
                    <input type="number" step="any" class="form-control" id="id_TGP" name="id_TGP" value="<?php echo $tgp; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">FA</strong>
                    <input type="number" step="any" class="form-control" id="id_FA" name="id_FA" value="<?php echo $fa; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">GGT</strong>
                    <input type="number" step="any" class="form-control" id="id_GGT" name="id_GGT" value="<?php echo $ggt; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 12px;">PT</strong>
                    <input type="number" step="any" class="form-control" id="id_PT" name="id_PT" value="<?php echo $pt; ?>">
                </div>


                <div class="col-md-6">
                    <strong style="font-size: 12px;">REL A/G</strong>
                    <input type="number" step="any" class="form-control" id="id_Real" name="id_Real" value="<?php echo $rel; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Proteinas Totales</strong>
                    <input type="number" step="any" class="form-control" id="id_PT" name="id_PT" value="<?php echo $proteinas_totales; ?>">
                </div>

            </div><!-- <div Laboratorios PFH Y DHL ="-->


            <!--=========== DIV SEROLOGÍA ================-->

            <div style="background-color: rgb(149, 118, 152);
    border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Serología</h6>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <strong style="font-size:12px;">Serología</strong>
                    <select name="lab_serologia" id="lab_serologia" class="form-control" style="font-size: 12px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Negado" <?php if ($serologia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($serologia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="serologia_resultado">
                    <strong style="font-size:12px;">Resultado-Serología</strong>
                    <select name="resultado_cultivo" id="resultado_serologia" class="form-control" style="font-size: 12px;">
                        <option value="0" <?php if ($resultado_sero == '0') echo 'selected'; ?>>Selecione</option>
                        <option value="Positivo" <?php if ($resultado_sero == 'Positivo') echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo" <?php if ($resultado_sero == 'Negativo') echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>

                <div class="col-md-6" id="pcr_r         esultado">
                    <strong style="font-size:12px;">Prueba PCR</strong>
                    <select name="prueb_pcr" id="prueb_pcr" class="form-control" style="font-size: 12px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Negado" <?php if ($PCR == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($PCR == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="resul_pcr">
                    <strong style="font-size:12px;">Resultado-PCR</strong>
                    <select name="resultado_PCR" id="resultado_PCR" class="form-control" style="font-size: 12px;">
                        <option value="0" <?php if ($resultado_PCR == '0') echo 'selected'; ?>>Selecione</option>
                        <option value="Positivo" <?php if ($resultado_PCR == 'Positivo') echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo" <?php if ($resultado_PCR == 'Negativo') echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>





            </div><!--=========== DIV SEROLOGÍA ================-->


            <div style="background-color: rgb(149, 118, 152);
    border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Cultivo</h6>
            </div>


            <!--===========CULTIVOS ================-->
            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:12px;">Cultivo</strong>
                    <select name="lab_cultivo" id="lab_cultivo" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($cultivo == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($cultivo == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="cultivo_resultado">
                    <strong style="font-size:12px;">Resultado-Cultivo</strong>
                    <select name="resultado_cultivo" id="resultado_cultivo" class="form-control" style="font-size: 12px;">
                        <option value="0" <?php if ($resultado_cultivo == '0') echo 'selected'; ?>>Selecione</option>
                        <option value="Positivo" <?php if ($resultado_cultivo == 'Positivo') echo 'selected'; ?>>Positivo</option>
                        <option value="Negativo" <?php if ($resultado_cultivo == 'Negativo') echo 'selected'; ?>>Negativo</option>
                    </select>
                </div>

            </div><!--=========== DIV CULTIVOS ================-->

            <!--=========== TOMOGRAFÍA ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Tomografía</h6>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:12px;">Tomografía</strong>
                    <select name="lab_tomografia" id="lab_tomografia" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($tomografia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($tomografia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="resultado_dxRFC">
                    <strong style="font-size: 12px;">Resultado-Tomografía</strong>
                    <input type="text" step="any" class="form-control" id="resultado_tomografia" name="resultado_tomografia" value="<?php echo $resultado_tomografia; ?>">
                </div>
            </div><!--=========== DIV ROW TOMOGRAFÍA================-->

            <!--=========== ULTRASONIDO ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Ultrasonido</h6>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:12px;">Ultrasonido</strong>
                    <select name="lab_Ultrasonido" id="lab_Ultrasonido" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($ultrasonido == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($ultrasonido == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="ultrasonido_resultado">
                    <strong style="font-size: 12px;">Resultado-Ultrasonido</strong>
                    <input type="text" step="any" class="form-control" id="resultado_Ultrasonido" name="resultado_Ultrasonido" value="<?php echo $resultado_ultrasonido; ?>">
                </div>
            </div><!--=========== DIV ROW ULTRASONIDO================-->

            <!--=========== BIOPSIA ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Biopsia</h6>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:12px;">Biopsia</strong>
                    <select name="lab_Biopsia" id="lab_Biopsia" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($biopsia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($biopsia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="biopsia_resultado">
                    <strong style="font-size: 12px;">Resultado-Biopsia</strong>
                    <input type="text" step="any" class="form-control" id="resultado_Biopsia" name="resultado_Biopsia" value="<?php echo $resultado_biopsia; ?>">
                </div>
            </div><!--=========== DIV ROW BIOPSIA================-->

            <!--=========== REFERENCIA ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Referencia a Otra Institución</h6>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:12px;">Referencia</strong>
                    <select name="referencia" id="referencia" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($referencia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($referencia == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="id_refe">
                    <strong style="font-size: 12px;">Institución</strong>
                    <input type="text" step="any" class="form-control" id="resultado_referencia" name="resultado_referencia" value="<?php echo $institucion; ?>">
                </div>

                <div class="col-md-4" id="causa_refe">
                    <strong style="font-size: 12px;">Causa</strong>
                    <input type="text" step="any" class="form-control" id="causa_ref" name="causa_ref" value="<?php echo $causa_referencia; ?>">
                </div>
            </div>

            <!--=========== Alta ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                <h6>Alta</h6>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:12px;">Alta</strong>
                    <select name="id_Alta" id="id_Alta" class="form-control" style="font-size: 12px;">
                        <option value="Negado" <?php if ($alta == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si" <?php if ($alta == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="causa_alta">
                    <strong style="font-size:12px;">Causa</strong>
                    <select name="id_causa" id="id_causa" class="form-control" style="font-size: 12px;">
                        <option value="0" <?php if ($causa_alta == '0') echo 'selected'; ?>>Seleccione</option>
                        <option value="Mejoría" <?php if ($causa_alta == 'Mejoría') echo 'selected'; ?>>Mejoría</option>
                        <option value="Remisión" <?php if ($causa_alta == 'Remisión') echo 'selected'; ?>>Remisión</option>
                        <option value="Abandono" <?php if ($causa_alta == 'Abandono') echo 'selected'; ?>>Abandono</option>
                        <option value="No Cumple Criterios" <?php if ($causa_alta == 'No Cumple Criterios') echo 'selected'; ?>>No Cumple Criterios</option>
                    </select>
                </div>

            </div><br>

            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
            </div><br>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="module">
        import {
            editForm
        } from "./js/update.js";
        editForm();
    </script>






</body>

</html>