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

    <title>Seguimiento / Cáncer Bucal</title>
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

        <form id="seguimiento_BC" method="POST">
            <!-- Datos de llegada del paciente  -->
            <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

            <div class="row">

                <div class="form-header">
                    <h5 class="form-title">Datos Paciente</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>Fecha de Seguimiento</strong>
                        <input class="form-control" type="date" name="fecha_seg" id="fecha_seg">
                    </div>
                </div> <!-- div row-->


                <div class="form-header">
                    <h5 class="form-title">Enfermedad</h5>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Progresión Enfermedad</strong>
                        <select class="form-control" name="progre_enf" id="progre_enf">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Fecha Dx Progresión</strong>
                        <input class="form-control" type="date" name="fecha_progre" id="fecha_progre">
                    </div>
                    <div class="col-md-3">
                        <strong>Recurrencia Enfermedad</strong>
                        <select class="form-control" name="recu_enfer" id="recu_enfer">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Fecha de recurrencia</strong>
                        <input class="form-control" type="date" name="fecha_recu" id="fecha_recu">
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Reintervención</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Amerita Reintervención</strong>
                        <select class="form-control" name="reintervencion" id="reintervencion">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Fecha de Reintervención</strong>
                        <input class="form-control" type="date" name="fecha_reintervencion" id="fecha_reintervencion">

                    </div>
                    <div class="col-md-4">
                        <strong>Lateralidad Reintervención</strong>
                        <select class="form-control" name="lat_reintervencion" id="lat_reintervencion">
                            <option value="">Seleccione...</option>
                            <option value="Derecha">Derecha</option>
                            <option value="Izquierda">Izquierda</option>
                            <option value="Bilateral">Bilateral</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">QT</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>Amerita Nueva QT</strong>
                        <select class="form-control" name="nuevo_qt" id="nuevo_qt">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-2 checkboxes">
                            <span>5Fluororacilo</span>
                            <label class="container">
                                <input type="checkbox" name="tx_5Fluororacilo" id="tx_5Fluororacilo">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Beuacizumab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Beuacizumab" id="tx_Beuacizumab">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Capecitabina</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Capecitabina" id="tx_Capecitabina">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Carboplatino</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Carboplatino" id="tx_Carboplatino">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Cetuximab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Cetuximab" id="tx_Cetuximab">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Ciclofosfamida</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Ciclofosfamida" id="tx_Ciclofosfamida">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Cisplatino</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Cisplatino" id="tx_Cisplatino">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Docetaxel</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Docetaxel" id="tx_Docetaxel">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Etoposido</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Etoposido" id="tx_Etoposido">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Herceptin</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Herceptin" id="tx_Herceptin">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Paclitaxel</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Paclitaxel" id="tx_Paclitaxel">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Pertuzumab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Pertuzumab" id="tx_Pertuzumab">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-2 checkboxes">
                            <span>Trastuzumab</span>
                            <label class="container">
                                <input type="checkbox" name="tx_Trastuzumab" id="tx_Trastuzumab">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <strong>Momento QT</strong>
                        <select class="form-control" name="momento_qt" id="momento_qt">
                            <option value="">Seleccione...</option>
                            <option value="Adyuvante">Adyuvante</option>
                            <option value="Paliativa">Paliativa</option>
                            <option value="Concomitante">Concomitante</option>
                        </select>

                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Radioterapia</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Amerita Nueva Radioterapia</strong>
                        <select class="form-control" name="nueva_radio" id="nueva_radio">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                    </div>
                    <div class="col-md-4">
                        <strong>Fecha Nueva RT</strong>
                        <input class="form-control" type="date" name="fecha_radio" id="fecha_radio">
                    </div>
                    <div class="col-md-4">
                        <strong>Momento RT</strong>
                        <select class="form-control" name="momento_radio" id="momento_radio">
                            <option value="">Seleccione...</option>
                            <option value="Adyuvante">Adyuvante</option>
                            <option value="Paliativa">Paliativa</option>
                            <option value="Concomitante">Concomitante</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis</strong>
                        <input class="form-control" type="number" name="dosis_radio" id="dosis_radio">
                    </div>
                    <div class="col-md-4">
                        <strong>Fracciones</strong>
                        <select class="form-control" name="fracciones_radio" id="fracciones_radio">
                            <option value="">Seleccione...</option>
                            <option value="Convencional">Convencional</option>
                            <option value="Hiperfraccionamiento">Hiperfraccionamiento</option>
                            <option value="Hipofraccionamiento">Hipofraccionamiento</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>No. Fracciones</strong>
                        <input class="form-control" type="number" name="no_fracciones" id="no_fracciones">
                    </div>
                    <div class="col-md-12">
                        <strong>Técnica</strong>
                        <select class="form-control" name="tecnica_fracciones" id="tecnica_fracciones">
                            <option value="">Seleccione...</option>
                            <option value="3D Conformal">3D Conformal</option>
                            <option value="Braquiterapia">Braquiterapia</option>
                            <option value="IMRT">IMRT</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-3 checkboxes">
                            <span>Caries</span>
                            <label class="container">
                                <input type="checkbox" name="rt_caries" id="rt_caries">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Disgeusia</span>
                            <label class="container">
                                <input type="checkbox" name="rt_disgeusia" id="rt_disgeusia">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Dolor</span>
                            <label class="container">
                                <input type="checkbox" name="rt_dolor" id="rt_dolor">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Fractura</span>
                            <label class="container">
                                <input type="checkbox" name="rt_fractura" id="rt_fractura">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Infeccion</span>
                            <label class="container">
                                <input type="checkbox" name="rt_infeccion" id="rt_infeccion">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Hemorragias</span>
                            <label class="container">
                                <input type="checkbox" name="rt_hemorragias" id="rt_hemorragias">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Mucositis</span>
                            <label class="container">
                                <input type="checkbox" name="rt_mucositis" id="rt_mucositis">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Osteonecrosis</span>
                            <label class="container">
                                <input type="checkbox" name="rt_osteonecrosis" id="rt_osteonecrosis">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Parestesia</span>
                            <label class="container">
                                <input type="checkbox" name="rt_parestesia" id="rt_parestesia">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Propios De La Anestesia Local</span>
                            <label class="container">
                                <input type="checkbox" name="rt_propios" id="rt_propios">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Radiodermitis</span>
                            <label class="container">
                                <input type="checkbox" name="rt_radiodermitis" id="rt_radiodermitis">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Reaccion Alergica</span>
                            <label class="container">
                                <input type="checkbox" name="rt_RA" id="rt_RA">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Trismus</span>
                            <label class="container">
                                <input type="checkbox" name="rt_trismus" id="rt_trismus">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Xerostomia</span>
                            <label class="container">
                                <input type="checkbox" name="rt_xerostomia" id="rt_xerostomia">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                        <div class="col-md-3 checkboxes">
                            <span>Ninguno</span>
                            <label class="container">
                                <input type="checkbox" name="rt_ninguno" id="rt_ninguno">
                                <div class="checkmark"></div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Cuidados Paliativos - Protocolo </h5>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <strong>Cuidados Paliativos</strong>
                        <select class="form-control" name="cuidado_palia" id="cuidado_palia">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Tipo de Cuidado Paliativo</strong>
                        <select class="form-control" name="tipo_palia" id="tipo_palia">
                            <option value="">Seleccione...</option>
                            <option value="Clinica del Dolor">Clinica del Dolor</option>
                            <option value="Medicina palia">Medicina palia</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Protocolo Clínico</strong>
                        <select class="form-control" name="proto_clinico" id="proto_clinico">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Protocolo de Investigación</strong>
                        <select class="form-control" name="proto_inv" id="proto_inv">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
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