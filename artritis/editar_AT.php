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

    <title>Artritis Reumatoide</title>
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


        <h5>Artritis Reumatoide</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="contenedor">
        <form id="editar_AT" method="POST">


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
                        <input class="form-control" type="text" name="nombre_completo" id="nombre_completo"
                            value="<?php echo $nombre_paciente; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Escolaridad</strong>
                        <select class="form-control" name="escolaridad" id="escolaridad">
                            <option value="0" <?php if ($escolaridad == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Primaria" <?php if ($escolaridad == 'Primaria')
                                echo 'selected'; ?>>Primaria
                            </option>
                            <option value="Secundaria" <?php if ($escolaridad == 'Secundaria')
                                echo 'selected'; ?>>
                                Secundaria</option>
                            <option value="Preparatoria/Bachillerato" <?php if ($escolaridad == 'Preparatoria/Bachillerato')
                                echo 'selected'; ?>>
                                Preparatoria/Bachillerato</option>
                            <option value="Licenciatura/Ingenieria" <?php if ($escolaridad == 'Licenciatura/Ingenieria')
                                echo 'selected'; ?>>Licenciatura/Ingenieria</option>
                            <option value="Maestria" <?php if ($escolaridad == 'Maestria')
                                echo 'selected'; ?>>Maestria
                            </option>
                            <option value="Doctorado" <?php if ($escolaridad == 'Doctorado')
                                echo 'selected'; ?>>Doctorado
                            </option>
                            <option value="Sin estudios" <?php if ($escolaridad == 'Sin estudios')
                                echo 'selected'; ?>>Sin
                                estudios</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Fecha de nacimiento</strong>
                        <input class="form-control" type="date" name="birth_date" id="birth_date"
                            value="<?php echo $fecha_nacimiento; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Edad</strong>
                        <input class="form-control" type="text" name="edad" id="edad" value="<?php echo $edad; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Sexo</strong>
                        <input class="form-control" type="text" name="sex" id="sex" value="<?php echo $sexo; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Talla</strong>
                        <input class="form-control" type="text" name="talla" id="talla" value="<?php echo $talla; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Peso</strong>
                        <input class="form-control" type="number" name="peso" id="peso" onblur="calculaIMC();"
                            value="<?php echo $peso; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>IMC</strong>
                        <input class="form-control" type="text" name="imc" id="imc" readonly
                            value="<?php echo $imc; ?>">
                    </div>
                </div> <!-- div row-->

                <div class="form-header">
                    <h5 class="form-title">Antecendetes Patologicos</h5>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <span>Tabaquismo</span>
                        <label class="container">
                            <input type="checkbox" name="tabaquismo" id="tabaquismo" <?php if ($tabaquismo == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Alcoholismo</span>
                        <label class="container">
                            <input type="checkbox" name="alcoholismo" id="alcoholismo" <?php if ($alcoholismo == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Esteatosis Hepatica</span>
                        <label class="container">
                            <input type="checkbox" name="EH" id="EH" <?php if ($EH == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Diabetes Mellitus</span>
                        <label class="container">
                            <input type="checkbox" name="DM" id="DM" <?php if ($DM == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Hipertensión Arterial</span>
                        <label class="container">
                            <input type="checkbox" name="HA" id="HA" <?php if ($HA == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Obesidad</span>
                        <label class="container">
                            <input type="checkbox" name="obesidad" id="obesidad" <?php if ($obesidad == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Hiperlipidemia</span>
                        <label class="container">
                            <input type="checkbox" name="hiperlipidemia" id="hiperlipidemia" <?php if ($hiperlipidemia == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>


                </div>

                <div class="form-header">
                    <h5 class="form-title">Laboratorios</h5>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Plaquetas</strong>
                        <input class="form-control" type="number" name="plaquetas" id="plaquetas"
                            value="<?php echo $plaquetas; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Factor Reumatoide Basal</strong>
                        <input class="form-control" type="number" name="FRB" id="FRB" value="<?php echo $FRB; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Factor Reumatoide Nominal</strong>
                        <select class="form-control" name="FRN" id="FRN">
                            <option value="0" <?php if ($FRN == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo" <?php if ($FRN == 'Positivo')
                                echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo" <?php if ($FRN == 'Negativo')
                                echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>PCR</strong>
                        <input class="form-control" type="number" name="PCR" id="PCR" value="<?php echo $PCR; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Vitamina D Basal</strong>
                        <input class="form-control" type="number" name="VDB" id="VDB" value="<?php echo $VDB; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Vitamina D Nominal</strong>
                        <select class="form-control" name="VDN" id="VDN">
                            <option value="0" <?php if ($VDN == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Normal" <?php if ($VDN == 'Normal')
                                echo 'selected'; ?>>Normal</option>
                            <option value="Deficiente" <?php if ($VDN == 'Deficiente')
                                echo 'selected'; ?>>Deficiente
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>AC Anticpp Basal</strong>
                        <input class="form-control" type="number" name="AAB" id="AAB" value="<?php echo $AAB; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>AC Anticpp Nominal</strong>
                        <select class="form-control" name="AAN" id="AAN">
                            <option value="0" <?php if ($AAN == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo" <?php if ($AAN == 'Positivo')
                                echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo" <?php if ($AAN == 'Negativo')
                                echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>VSG</strong>
                        <input class="form-control" type="number" name="VSG" id="VSG" value="<?php echo $VSG; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>TGO Basal</strong>
                        <input class="form-control" type="number" name="TGOB" id="TGOB" value="<?php echo $TGOB; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>TGO Nominal</strong>
                        <select class="form-control" name="TGON" id="TGON">
                            <option value="0" <?php if ($TGON == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Normal" <?php if ($TGON == 'Normal')
                                echo 'selected'; ?>>Normal</option>
                            <option value="Anormal" <?php if ($TGON == 'Anormal')
                                echo 'selected'; ?>>Anormal</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>TGP Basal</strong>
                        <input class="form-control" type="number" name="TGPB" id="TGPB" value="<?php echo $TGPB; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>TGP Nominal</strong>
                        <select class="form-control" name="TGPN" id="TGPN">
                            <option value="0" <?php if ($TGPN == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Normal" <?php if ($TGPN == 'Normal')
                                echo 'selected'; ?>>Normal</option>
                            <option value="Anormal" <?php if ($TGPN == 'Anormal')
                                echo 'selected'; ?>>Anormal</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Glucosa</strong>
                        <input class="form-control" type="number" name="glucosa" id="glucosa"
                            value="<?php echo $glucosa; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Colesterol</strong>
                        <input class="form-control" type="number" name="colesterol" id="colesterol"
                            value="<?php echo $colesterol; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Trigliceridos</strong>
                        <input class="form-control" type="number" name="trigliceridos" id="trigliceridos"
                            value="<?php echo $trigliceridos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong><a href="https://www.hepatitisc.uw.edu/page/clinical-calculators/fib-4">Fib
                                4</a></strong>
                        <input class="form-control" type="number" name="FIB4" id="FIB4" onblur="calculateFIB4Result()"
                            value="<?php echo $FIB4; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Resultado FIB 4</strong>
                        <input class="form-control" type="text" name="resultado_fib" id="resultado_fib"
                            value="<?php echo $resultado_fib; ?>" readonly>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">USG HEPÁTICO</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>USG Hepático</strong>
                        <select class="form-control" name="USG_hep" id="USG_hep">
                            <option value="0" <?php if ($USG_hep == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si" <?php if ($USG_hep == 'Si')
                                echo 'selected'; ?>>Si</option>
                            <option value="No" <?php if ($USG_hep == 'No')
                                echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Hallazgo USG</strong>
                        <select class="form-control" name="USG_haz" id="USG_haz">
                            <option value="0" <?php if ($USG_haz == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Normal" <?php if ($USG_haz == 'Normal')
                                echo 'selected'; ?>>Normal</option>
                            <option value="Cirrosis hepatica" <?php if ($USG_haz == 'Cirrosis hepatica')
                                echo 'selected'; ?>>Cirrosis hepatica</option>
                            <option value="Esteatosis" <?php if ($USG_haz == 'Esteatosis')
                                echo 'selected'; ?>>Esteatosis
                            </option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Clasificación Esteatosis</strong>
                        <select class="form-control" name="CE" id="CE">
                            <option value="0" <?php if ($CE == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Leve" <?php if ($CE == 'Leve')
                                echo 'selected'; ?>>Leve</option>
                            <option value="Moderada" <?php if ($CE == 'Moderada')
                                echo 'selected'; ?>>Moderada</option>
                            <option value="Severa" <?php if ($CE == 'Severa')
                                echo 'selected'; ?>>Severa</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Clinica</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Articulaciones Inflamadas SJC28</strong>
                        <input class="form-control" type="number" name="sjc28" id="sjc28" value="<?php echo $sjc28; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Articulaciones Dolorosas TJC28</strong>
                        <input class="form-control" type="number" name="tjc28" id="tjc28" value="<?php echo $tjc28; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Evaluación Global PGA</strong>
                        <input class="form-control" type="number" name="pga" id="pga" value="<?php echo $pga; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Evaluación del Evaluador EGA</strong>
                        <input class="form-control" type="number" name="ega" id="ega" value="<?php echo $ega; ?>"
                            onblur="suma_CDAI(),suma_SDAI()">
                    </div>
                    <div class="col-md-4">
                        <strong>Resultado CDAI</strong>
                        <input class="form-control" type="number" name="CDAI" id="CDAI" value="<?php echo $CDAI; ?>">
                    </div>
                    <div class="col-md-4">
                        <strong>Resultado SDAI</strong>
                        <input class="form-control" type="number" name="SDAI" id="SDAI" value="<?php echo $SDAI; ?>">
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Tratamiento</h5>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <span>Metrotexate</span>
                        <label class="container">
                            <input type="checkbox" name="Metrotexate" id="Metrotexate" <?php if ($Metrotexate == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_metro" id="ds_metro"
                            value="<?php echo $ds_metro; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Leflunomide</span>
                        <label class="container">
                            <input type="checkbox" name="Leflunomide" id="Leflunomide" <?php if ($Leflunomide == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_leflu" id="ds_leflu"
                            value="<?php echo $ds_leflu; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Sulfazalasina</span>
                        <label class="container">
                            <input type="checkbox" name="Sulfazalasina" id="Sulfazalasina" <?php if ($Sulfazalasina == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_sulfa" id="ds_sulfa"
                            value="<?php echo $ds_sulfa; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Tocoferol</span>
                        <label class="container">
                            <input type="checkbox" name="Tocoferol" id="Tocoferol" <?php if ($Tocoferol == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_toco" id="ds_toco"
                            value="<?php echo $ds_toco; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Glucocorticoide</span>
                        <label class="container">
                            <input type="checkbox" name="Glucocorticoide" id="Glucocorticoide" <?php if ($Glucocorticoide == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-5">
                        <strong>Tratamiento</strong>
                        <select class="form-control" name="tx_gluco" id="tx_gluco">
                            <option value="0" <?php if ($tx_gluco == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Deflazacort" <?php if ($tx_gluco == 'Deflazacort')
                                echo 'selected'; ?>>
                                Deflazacort</option>
                            <option value="Prednisona" <?php if ($tx_gluco == 'Prednisona')
                                echo 'selected'; ?>>Prednisona
                            </option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_gluco" id="ds_gluco"
                            value="<?php echo $ds_gluco; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Vitamina D</span>
                        <label class="container">
                            <input type="checkbox" name="vit_d" id="vit_d" <?php if ($vit_d == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_vit" id="ds_vit"
                            value="<?php echo $ds_vit; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Biológico</span>
                        <label class="container">
                            <input type="checkbox" name="Biologico" id="Biologico" <?php if ($Biologico == 'Si')
                                echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Tratamiento</strong>
                        <select class="form-control" name="tx_bio" id="tx_bio">
                            <option value="0" <?php if ($tx_bio == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Rituximab" <?php if ($tx_bio == 'Rituximab')
                                echo 'selected'; ?>>Rituximab
                            </option>
                            <option value="Abatacept" <?php if ($tx_bio == 'Abatacept')
                                echo 'selected'; ?>>Abatacept
                            </option>
                            <option value="Adalimumab" <?php if ($tx_bio == 'Adalimumab')
                                echo 'selected'; ?>>Adalimumab
                            </option>
                            <option value="Tocilizumab" <?php if ($tx_bio == 'Tocilizumab')
                                echo 'selected'; ?>>
                                Tocilizumab</option>
                            <option value="Pertuzumab" <?php if ($tx_bio == 'Pertuzumab')
                                echo 'selected'; ?>>Pertuzumab
                            </option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Apego a Tratamiento</strong>
                        <select class="form-control" name="AT" id="AT">
                            <option value="0" <?php if ($AT == '0')
                                echo 'selected'; ?>>Seleccione...</option>
                            <option value="Parcial" <?php if ($AT == 'Parcial')
                                echo 'selected'; ?>>Parcial</option>
                            <option value="Total" <?php if ($AT == 'Total')
                                echo 'selected'; ?>>Total</option>
                            <option value="Sin Apego" <?php if ($AT == 'Sin Apego')
                                echo 'selected'; ?>>Sin Apego</option>
                        </select>
                    </div>

                </div>


            </div> <!-- DIV ROW LINEA 13 -->

            <div class="footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
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
    <script src="js/scriptmodal.js"></script>


    <script type="module">
        import { editForm } from "./js/update.js";
        editForm();
    </script>




</body>
</head>