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

    <title>Seguimiento / Artritis Reumatoide</title>
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

        <form id="seguimiento_AT" method="POST">
            <!-- Datos de llegada del paciente  -->
            <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

            <div class="row">

                <div class="form-header">
                    <h5 class="form-title">Datos Paciente</h5>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <strong>Fecha de Seguimiento</strong>
                        <input class="form-control" type="date" name="fecha_seg" id="fecha_seg">
                    </div>
                    <div class="col-md-4">
                        <strong>CURP</strong>
                        <input class="form-control" type="text" name="curp" id="curp" value="<?php echo $curp; ?>"
                            readonly>
                    </div>
                    <div class="col-md-2">
                        <strong>Talla</strong>
                        <input class="form-control" type="text" name="talla" id="talla">
                    </div>
                    <div class="col-md-2">
                        <strong>Peso</strong>
                        <input class="form-control" type="number" name="peso" id="peso" onblur="calculaIMC();">
                    </div>
                    <div class="col-md-2">
                        <strong>IMC</strong>
                        <input class="form-control" type="text" name="imc" id="imc" readonly>
                    </div>
                </div> <!-- div row-->


                <div class="form-header">
                    <h5 class="form-title">Laboratorios</h5>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Plaquetas</strong>
                        <input class="form-control" type="number" name="plaquetas" id="plaquetas">
                    </div>
                    <div class="col-md-3">
                        <strong>Factor Reumatoide Basal</strong>
                        <input class="form-control" type="number" name="FRB" id="FRB">
                    </div>
                    <div class="col-md-3">
                        <strong>Factor Reumatoide Nominal</strong>
                        <select class="form-control" name="FRN" id="FRN">
                            <option value="0">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>PCR</strong>
                        <input class="form-control" type="number" name="PCR" id="PCR">
                    </div>
                    <div class="col-md-3">
                        <strong>Vitamina D Basal</strong>
                        <input class="form-control" type="number" name="VDB" id="VDB">
                    </div>
                    <div class="col-md-3">
                        <strong>Vitamina D Nominal</strong>
                        <select class="form-control" name="VDN" id="VDN">
                            <option value="0">Seleccione...</option>
                            <option value="Normal">Normal</option>
                            <option value="Deficiente">Deficiente</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>AC Anticpp Basal</strong>
                        <input class="form-control" type="number" name="AAB" id=AAB"">
                    </div>
                    <div class="col-md-3">
                        <strong>AC Anticpp Nominal</strong>
                        <select class="form-control" name="AAN" id="AAN">
                            <option value="0">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>VSG</strong>
                        <input class="form-control" type="number" name="VSG" id="VSG">
                    </div>
                    <div class="col-md-3">
                        <strong>TGO Basal</strong>
                        <input class="form-control" type="number" name="TGOB" id="TGOB">
                    </div>
                    <div class="col-md-3">
                        <strong>TGO Nominal</strong>
                        <select class="form-control" name="TGON" id="TGON">
                            <option value="0">Seleccione...</option>
                            <option value="Normal">Normal</option>
                            <option value="Anormal">Anormal</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>TGP Basal</strong>
                        <input class="form-control" type="number" name="TGPB" id="TGPB">
                    </div>
                    <div class="col-md-3">
                        <strong>TGP Nominal</strong>
                        <select class="form-control" name="TGPN" id="TGPN">
                            <option value="0">Seleccione...</option>
                            <option value="Normal">Normal</option>
                            <option value="Anormal">Anormal</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Glucosa</strong>
                        <input class="form-control" type="number" name="glucosa" id="glucosa">
                    </div>
                    <div class="col-md-3">
                        <strong>Colesterol</strong>
                        <input class="form-control" type="number" name="colesterol" id="colesterol">
                    </div>
                    <div class="col-md-3">
                        <strong>Trigliceridos</strong>
                        <input class="form-control" type="number" name="trigliceridos" id="trigliceridos">
                    </div>
                    <div class="col-md-3">
                        <strong><a href="https://www.hepatitisc.uw.edu/page/clinical-calculators/fib-4">Fib
                                4</a></strong>
                        <input class="form-control" type="number" name="FIB4" id="FIB4" onblur="calculateFIB4Result()">
                    </div>
                    <div class="col-md-3">
                        <strong>Resultado FIB 4</strong>
                        <input class="form-control" type="text" name="resultado_fib" id="resultado_fib" readonly>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">USG HEPÁTICO</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>USG Hepático</strong>
                        <select class="form-control" name="USG_hep" id="USG_hep">
                            <option value="0">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Hallazgo USG</strong>
                        <select class="form-control" name="USG_haz" id="USG_haz">
                            <option value="0">Seleccione...</option>
                            <option value="Normal">Normal</option>
                            <option value="Cirrosis hepatica">Cirrosis hepatica</option>
                            <option value="Esteatosis">Esteatosis</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Clasificación Esteatosis</strong>
                        <select class="form-control" name="CE" id="CE">
                            <option value="0">Seleccione...</option>
                            <option value="Leve">Leve</option>
                            <option value="Moderada">Moderada</option>
                            <option value="Severa">Severa</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Clinica</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Articulaciones Inflamadas SJC28</strong>
                        <input class="form-control" type="number" name="sjc28" id="sjc28">
                    </div>
                    <div class="col-md-4">
                        <strong>Articulaciones Dolorosas TJC28</strong>
                        <input class="form-control" type="number" name="tjc28" id="tjc28">
                    </div>
                    <div class="col-md-4">
                        <strong>Evaluación Global PGA</strong>
                        <input class="form-control" type="number" name="pga" id="pga">
                    </div>
                    <div class="col-md-4">
                        <strong>Evaluación del Evaluador EGA</strong>
                        <input class="form-control" type="number" name="ega" id="ega" onblur="suma_CDAI(),suma_SDAI()">
                    </div>
                    <div class="col-md-4">
                        <strong>Resultado CDAI</strong>
                        <input class="form-control" type="number" name="CDAI" id="CDAI">
                    </div>
                    <div class="col-md-4">
                        <strong>Resultado SDAI</strong>
                        <input class="form-control" type="number" name="SDAI" id="SDAI">
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Tratamiento</h5>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <span>Metrotexate</span>
                        <label class="container">
                            <input type="checkbox" name="Metrotexate" id="Metrotexate">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4" id="ds_metro">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_metro" id="ds_metro">
                    </div>
                    <div class="col-md-2">
                        <span>Leflunomide</span>
                        <label class="container">
                            <input type="checkbox" name="Leflunomide" id="Leflunomide">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4" id="ds_leflu">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_leflu" id="ds_leflu">
                    </div>
                    <div class="col-md-2">
                        <span>Sulfazalasina</span>
                        <label class="container">
                            <input type="checkbox" name="Sulfazalasina" id="Sulfazalasina">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4" id="ds_sulfa">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_sulfa" id="ds_sulfa">
                    </div>
                    <div class="col-md-2">
                        <span>Tocoferol</span>
                        <label class="container">
                            <input type="checkbox" name="Tocoferol" id="Tocoferol">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4" id="ds_toco">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_toco" id="ds_toco">
                    </div>

                    <div class="col-md-2">
                        <span>Glucocorticoide</span>
                        <label class="container">
                            <input type="checkbox" name="Glucocorticoide" id="Glucocorticoide">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-5" id="tx_gluco">
                        <strong>Tratamiento</strong>
                        <select class="form-control" name="tx_gluco" id="tx_gluco">
                            <option value="0">Seleccione...</option>
                            <option value="Deflazacort">Deflazacort</option>
                            <option value="Prednisona">Prednisona</option>
                        </select>
                    </div>
                    <div class="col-md-5" id="ds_gluco">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_gluco" id="ds_gluco">
                    </div>

                    <div class="col-md-2">
                        <span>Vitamina D</span>
                        <label class="container">
                            <input type="checkbox" name="vit_d" id="vit_d">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4" id="ds_vit">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_vit" id="ds_vit">
                    </div>
                    <div class="col-md-2">
                        <span>Biológico</span>
                        <label class="container">
                            <input type="checkbox" name="Biologico" id="Biologico">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4" id="tx_bio">
                        <strong>Tratamiento</strong>
                        <select class="form-control" name="tx_bio" id="tx_bio">
                            <option value="0">Seleccione...</option>
                            <option value="Rituximab">Rituximab</option>
                            <option value="Abatacept">Abatacept</option>
                            <option value="Adalimumab">Adalimumab</option>
                            <option value="Tocilizumab">Tocilizumab</option>
                            <option value="Pertuzumab">Pertuzumab</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <strong>Apego a Tratamiento</strong>
                        <select class="form-control" name="AT" id="AT">
                            <option value="0">Seleccione...</option>
                            <option value="Parcial">Parcial</option>
                            <option value="Total">Total</option>
                            <option value="Sin Apego">Sin Apego</option>
                        </select>
                    </div>

                </div>


            </div> <!-- DIV ROW LINEA 13 -->

            <div class="footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
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


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/scriptseguimiento.js"></script>

    <script type="module">
        import { seguimientoForm } from "./js/seguimiento.js";
        seguimientoForm();
    </script>



</body>

</html>