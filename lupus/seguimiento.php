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

    <title>Seguimiento / Lupus</title>
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


        <h5>Lupus</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="contenedor">

        <form id="seguimiento_LP" method="POST">

            <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

            <!-- Datos de llegada del paciente  -->
            <div class="row">

                <div class="form-header">
                    <h5 class="form-title">Datos Paciente</h5>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <strong>CURP</strong>
                        <input class="form-control" type="text" name="curp" id="curp" maxlength="18" minlength="18"
                            onblur="curp2date()" value="<?php echo $curp; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <strong>Nombre Completo</strong>
                        <input class="form-control" type="text" name="nombre_completo" id="nombre_completo" value="<?php echo $nombre_completo; ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <strong>Fecha Seguimiento</strong>
                        <input class="form-control" type="date" name="fecha_seguimiento" id="fecha_seguimiento">
                    </div>

                </div>

                <div class="form-header">
                    <h5 class="form-title">Laboratorios</h5>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Actividad Lúpica</h6>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <strong>Actividad Articular</strong>
                        <select class="form-control" name="AA" id="AA">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Cutánea</strong>
                        <select class="form-control" name="AC" id="AC">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Hematología</strong>
                        <select class="form-control" name="AH" id="AH">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Inmunológica</strong>
                        <select class="form-control" name="AI" id="AI">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Neurológica</strong>
                        <select class="form-control" name="AN" id="AN">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Renal</strong>
                        <select class="form-control" name="ARE" id="ARE">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Muscular</strong>
                        <select class="form-control" name="AM" id="AM">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Cardiaca</strong>
                        <select class="form-control" name="ACA" id="ACA">
                            <option value="">Seleccione...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Calculo SLEDAI</h6>
                </div>

                <div class="row">

                    <div class="contenedor_switch">

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="convulsion" name="convulsion" valor=8
                                            value="Convulsión">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Convulsión</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="psicosis" name="psicosis" valor=8 value="Psicosis">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Psicosis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="SCO" name="SCO" valor=8
                                            value="Síndrome Cerebral Orgánico">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Síndrome Cerebral Orgánico</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="AV" name="AV" valor=8 value="Alteración Visual">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Alteración Visual</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="TNC" name="TNC" valor=8
                                            value="Trastorno De Los Nervios Craneales">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Trastorno De Los Nervios Craneales</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="DCL" name="DCL" valor=8
                                            value="Dolor De Cabeza Por Lupus">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Dolor De Cabeza Por Lupus</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="EVC" name="EVC" valor=8 value="EVC">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>EVC</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="vasculitis" name="vasculitis" valor=8
                                            value="Vasculitis">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Vasculitis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="artritis" name="artritis" valor=4 value="Artritis">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Artritis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="miositis" name="miositis" valor=4 value="Miositis">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Miositis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="CU" name="CU" valor=4 value="Cilindros Urinarios">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Cilindros Urinarios</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="hematuria" name="hematuria" valor=4
                                            value="Hematuria">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Hematuria</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="piuria" name="piuria" valor=4 value="Piuria">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Piuria</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="proteinuria" name="proteinuria" valor=2
                                            value="Proteinuria">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Proteinuria</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="erupcion" name="erupcion" valor=2 value="Erupción">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Erupción</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="UM" name="UM" valor=2 value="Úlceras De Las Mucosas">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Úlceras De Las Mucosas</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="pleuritis" name="pleuritis" valor=2
                                            value="Pleuritis">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Pleuritis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="pericarditis" name="pericarditis" valor=2
                                            value="Pericarditis">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Pericarditis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="COM" name="COM" valor=2
                                            value="Bajo com(C3,C4 O Ch50 Bajo)">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Bajo com(C3,C4 O Ch50 Bajo)</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="ADN" name="ADN" valor=2
                                            value="Aumento de la Unión al ADN">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Aumento de la Unión al ADN</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="fiebre" name="fiebre" valor=1 value="Fiebre">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Fiebre</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="trombocitopenia" name="trombocitopenia" valor=1
                                            value="Trombocitopenia">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Trombocitopenia</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="leucopenia" name="leucopenia" valor=1
                                            value="Leucopenia">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Leucopenia</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="alopecia" name="alopecia" valor=1 value="Alopecia">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Alopecia</h6>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <strong>Resultado SLEDAI</strong>
                        <input class="form-control" type="number" name="resultados_sledai" id="resultados_sledai"
                            readonly>
                    </div>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Laboratorios</h6>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Albúmina Sérica</strong>
                        <input class="form-control" type="number" name="ASE" id="ASE">
                    </div>
                    <div class="col-md-2">
                        <strong>BUN</strong>
                        <input class="form-control" type="number" name="BUN" id="BUN">
                    </div>
                    <div class="col-md-2">
                        <strong>C3</strong>
                        <input class="form-control" type="number" name="C3" id="C3">
                    </div>
                    <div class="col-md-2">
                        <strong>C4</strong>
                        <input class="form-control" type="number" name="C4" id="C4">
                    </div>
                    <div class="col-md-3">
                        <strong>Creatina Sérica</strong>
                        <input class="form-control" type="number" name="CS" id="CS">
                    </div>
                    <div class="col-md-3">
                        <strong>Proteinuria en 24 hrs</strong>
                        <input class="form-control" type="number" name="P24" id="P24">
                    </div>
                    <div class="col-md-3">
                        <strong>Albúminuria en 24 hrs</strong>
                        <input class="form-control" type="number" name="A24" id="A24">
                    </div>
                    <div class="col-md-3">
                        <strong>Leucocitos</strong>
                        <input class="form-control" type="number" name="leucocitos" id="leucocitos">
                    </div>
                    <div class="col-md-3">
                        <strong>Linfocitos</strong>
                        <input class="form-control" type="number" name="linfocitos" id="linfocitos">
                    </div>
                    <div class="col-md-3">
                        <strong>Plaquetas</strong>
                        <input class="form-control" type="number" name="plaquetas" id="plaquetas">
                    </div>
                    <div class="col-md-3">
                        <strong>Hemoglobina</strong>
                        <input class="form-control" type="number" name="hemoglobina" id="hemoglobina">
                    </div>
                    <div class="col-md-3">
                        <strong>Vitamina D</strong>
                        <input class="form-control" type="number" name="VD" id="VD">
                    </div>
                    <div class="col-md-3">
                        <strong>Anticuerpo Lúpico</strong>
                        <select class="form-control" name="AL" id="AL">
                            <option value="">Seleccione...</option>
                            <option value="Detectado">Detectado</option>
                            <option value="No Detectado">No Detectado</option>
                        </select>
                    </div>

                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Anticuerpos</h6>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Ac-DNA Elevado</strong>
                        <select class="form-control" name="AC_DNA" id="AC_DNA">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac-SM</strong>
                        <select class="form-control" name="AC_SM" id="AC_SM">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <strong>Ac-RNP</strong>
                        <select class="form-control" name="AC_RNP" id="AC_RNP">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <strong>Ac-RO</strong>
                        <select class="form-control" name="AC_RO" id="AC_RO">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <strong>Ac-LA</strong>
                        <select class="form-control" name="AC_LA" id="AC_LA">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac-Cardiolipinas IgM</strong>
                        <select class="form-control" name="AC_CM" id="AC_CM">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac-Cardiolipinas IgG</strong>
                        <select class="form-control" name="AC_CG" id="AC_CG">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac B2-GPI IgG</strong>
                        <select class="form-control" name="AC_BG" id="AC_BG">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac B2-GPI IgM</strong>
                        <select class="form-control" name="AC_BM" id="AC_BM">
                            <option value="">Seleccione...</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Biopsia Renal</h6>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <strong>Biopsia Renal</strong>
                        <select class="form-control" name="BR" id="BR">
                            <option value="">Seleccione..</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <strong>Tipo</strong>
                        <select class="form-control" name="BR_tipo" id="BR_tipo">
                            <option value="">Seleccione...</option>
                            <option value="Clase 1. G. Mesangial">Clase 1. G. Mesangial</option>
                            <option value="Clase 2. G. Mesangio Proliferativa">Clase 2. G. Mesangio
                                Proliferativa</option>
                            <option value="Clase 3. G. Proliferativa Focal">Clase 3. G. Proliferativa Focal
                            </option>
                            <option value="Clase 4. G. Proliferativa Difusa">Clase 4. G. Proliferativa Difusa
                            </option>
                            <option value="Clase 5. G. Membranosa">Clase 5. G. Membranosa</option>
                            <option value="Clase 6. Enfermedad Renal Crónica">Clase 6. Enfermedad Renal Crónica
                            </option>
                            <option value="Glomerulos Normales">Glomerulos Normales</option>
                        </select>
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
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_metro" id="ds_metro">
                    </div>
                    <div class="col-md-2">
                        <span>Hidroxicloroquina</span>
                        <label class="container">
                            <input type="checkbox" name="Hidroxicloroquina" id="Hidroxicloroquina">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_hidro" id="ds_hidro">
                    </div>
                    <div class="col-md-2">
                        <span>Azatioprina</span>
                        <label class="container">
                            <input type="checkbox" name="Azatioprina" id="Azatioprina">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_aza" id="ds_aza">
                    </div>
                    <div class="col-md-2">
                        <span>Prednisona</span>
                        <label class="container">
                            <input type="checkbox" name="Prednisona" id="Prednisona">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_predi" id="ds_predi">
                    </div>
                    <div class="col-md-2">
                        <span>Micofenolato de Mofetilo</span>
                        <label class="container">
                            <input type="checkbox" name="Micofenolato" id="Micofenolato">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_mico" id="ds_mico">
                    </div>
                    <div class="col-md-2">
                        <span>Ciclofosfamida</span>
                        <label class="container">
                            <input type="checkbox" name="Ciclofosfamida" id="Ciclofosfamida">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_ciclo" id="ds_ciclo">
                    </div>

                    <div class="col-md-2">
                        <span>Rituximab</span>
                        <label class="container">
                            <input type="checkbox" name="Rituximab" id="Rituximab">
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong></strong>
                        <strong>Apego a Tratamiento</strong>
                        <select class="form-control" name="AT" id="AT">
                            <option value="0">Seleccione...</option>
                            <option value="Parcial">Parcial</option>
                            <option value="Total">Total</option>
                            <option value="Sin Apego">Sin Apego</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Defunción</h5>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>Defuncion</strong>
                        <select class="form-control" name="defuncion" id="defuncion">
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