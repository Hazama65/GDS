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

    <title>Lupus</title>
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
        <form id="editar_LP" method="POST">

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
                            onblur="curp2date()" value="<?php echo $curp; ?>">
                    </div>
                    <div class="col-md-8">
                        <strong>Nombre Completo</strong>
                        <input class="form-control" type="text" name="nombre_completo" id="nombre_completo"
                            value="<?php echo $nombre_completo; ?>">
                    </div>

                    <div class="col-md-4">
                        <strong>Fecha de nacimiento</strong>
                        <input class="form-control" type="date" name="birth_date" id="birth_date" value="<?php echo $fecha_nacimiento; ?>">
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
                        <strong>Escolaridad</strong>
                        <select class="form-control" name="escolaridad" id="escolaridad">
                            <option value="0"<?php if ($escolaridad == '0') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Primaria"<?php if ($escolaridad == 'Primaria') echo 'selected'; ?>>Primaria</option>
                            <option value="Secundaria"<?php if ($escolaridad == 'Secundaria') echo 'selected'; ?>>Secundaria</option>
                            <option value="Preparatoria/Bachillerato"<?php if ($escolaridad == 'Preparatoria/Bachillerato') echo 'selected'; ?>>Preparatoria/Bachillerato</option>
                            <option value="Licenciatura/Ingenieria"<?php if ($escolaridad == 'Licenciatura/Ingenieria') echo 'selected'; ?>>Licenciatura/Ingenieria</option>
                            <option value="Maestria"<?php if ($escolaridad == 'Maestria') echo 'selected'; ?>>Maestria</option>
                            <option value="Doctorado"<?php if ($escolaridad == 'Doctorado') echo 'selected'; ?>>Doctorado</option>
                            <option value="Sin estudios"<?php if ($escolaridad == 'Sin estudios') echo 'selected'; ?>>Sin estudios</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                                <strong>Año de Diagnóstico</strong>
                                <input class="form-control" type="text" pattern="\d{4}" maxlength="4" name="dx" id="dx" value="<?php echo $dx; ?>" required>
                                <small class="form-text text-muted">Ejemplo: 2024</small>
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
                        <strong style="font-size: 14px;">Resultado IMC</strong>
                        <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" style="font-size: 13px;" value="<?php echo $imcdescripcion; ?>" readonly>
                    </div>

                    <div class="col-md-4">
                                <strong>Tensión Arterial</strong>
                                <input class="form-control" type="text" name="ta" id="ta" value="<?php echo $ta; ?>">
                            </div>
                </div> <!-- div row-->

                <div class="form-header">
                    <h5 class="form-title">Antecendetes Patologicos</h5>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <span>Ninguno</span>
                        <label class="container">
                            <input type="checkbox" name="ninguno" id="ninguno" <?php if ($ninguno == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Alcoholismo</span>
                        <label class="container">
                            <input type="checkbox" name="alcoholismo" id="alcoholismo" <?php if ($alcoholismo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Artritis Reumatoide</span>
                        <label class="container">
                            <input type="checkbox" name="AR" id="AR" <?php if ($AR == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Diabetes Mellitus</span>
                        <label class="container">
                            <input type="checkbox" name="DM" id="DM" <?php if ($DM == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Hipertensión Arterial</span>
                        <label class="container">
                            <input type="checkbox" name="HA" id="HA" <?php if ($HA == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Obesidad</span>
                        <label class="container">
                            <input type="checkbox" name="obesidad" id="obesidad" <?php if ($obesidad == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <span>Sx Antifosfolípidos</span>
                        <label class="container">
                            <input type="checkbox" name="SA" id="SA" <?php if ($SA == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Enfermedad Mental</span>
                        <label class="container">
                            <input type="checkbox" name="Enfermedad_Mental" id="Enfermedad_Mental" <?php if ($Enfermedad_Mental == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Fibrilación Auricular</span>
                        <label class="container">
                            <input type="checkbox" name="FA" id="FA" <?php if ($FA == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Migraña</span>
                        <label class="container">
                            <input type="checkbox" name="Migraña" id="Migraña" <?php if ($Migraña == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>


                    <div class="col-md-3">
                        <span>SICA</span>
                        <label class="container">
                            <input type="checkbox" name="SICA" id="SICA" <?php if ($SICA == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Tabaquismo</span>
                        <label class="container">
                            <input type="checkbox" name="tabaquismo" id="tabaquismo" <?php if ($tabaquismo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Tratamiento antipsicotico</span>
                        <label class="container">
                            <input type="checkbox" name="antipsicotico" id="antipsicotico" <?php if ($antipsicotico == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Tx disfunción erectil</span>
                        <label class="container">
                            <input type="checkbox" name="erectil" id="erectil" <?php if ($erectil == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>S.O.P</span>
                        <label class="container">
                            <input type="checkbox" name="sop" id="sop" <?php if ($sop == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Hipotiroidismo</span>
                        <label class="container">
                            <input type="checkbox" name="hipotiroidismo" id="hipotiroidismo" <?php if ($hipotiroidismo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Pre-Diabetes</span>
                        <label class="container">
                            <input type="checkbox" name="prediabetes" id="prediabetes" <?php if ($prediabetes == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Dislipidemia</span>
                        <label class="container">
                            <input type="checkbox" name="dislipidemia" id="dislipidemia" <?php if ($dislipidemia == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <span>Menopausia</span>
                        <label class="container">
                            <input type="checkbox" name="menopausia" id="menopausia" onchange="mostrarMeno()" <?php if ($menopausia == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-3" id="menopausia_grad_container" style="display: none;">
                        <strong style="font-size: 12px;">Etapa Menopausia</strong>
                        <select class="form-control" name="menopausia_grad" id="menopausia_grad">
                            <option value=""<?php if ($menopausia_grad == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Temprano"<?php if ($menopausia_grad == 'Temprano') echo 'selected'; ?>>Temprano</option>
                            <option value="Tardio"<?php if ($menopausia_grad == 'Tardio') echo 'selected'; ?>>Tardio</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <span>Enfermedad Renal Crónica</span>
                        <label class="container">
                            <input type="checkbox" name="ERC" id="ERC" onchange="mostrarGradoERC()" <?php if ($ERC == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    
                    <div class="col-md-3" id="grado_ERC_container" style="display: none;">
                        <strong style="font-size: 12px;">Grado ERC</strong>
                        <select class="form-control" name="grado_ERC" id="grado_ERC">
                            <option value=""<?php if ($grado_ERC == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="1"<?php if ($grado_ERC == '1') echo 'selected'; ?>>1</option>
                            <option value="2"<?php if ($grado_ERC == '2') echo 'selected'; ?>>2</option>
                            <option value="3"<?php if ($grado_ERC == '3') echo 'selected'; ?>>3</option>
                            <option value="4"<?php if ($grado_ERC == '4') echo 'selected'; ?>>4</option>
                            <option value="5"<?php if ($grado_ERC == '5') echo 'selected'; ?>>5</option>
                        </select>
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
                            <option value=""<?php if ($AA == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($AA == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($AA == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Cutánea</strong>
                        <select class="form-control" name="AC" id="AC">
                            <option value=""<?php if ($AC == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($AC == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($AC == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Hematología</strong>
                        <select class="form-control" name="AH" id="AH">
                            <option value=""<?php if ($AH == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($AH == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($AH == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Inmunológica</strong>
                        <select class="form-control" name="AI" id="AI">
                            <option value=""<?php if ($AI == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($AI == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($AI == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Neurológica</strong>
                        <select class="form-control" name="AN" id="AN">
                            <option value=""<?php if ($AN == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($AN == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($AN == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Renal</strong>
                        <select class="form-control" name="ARE" id="ARE">
                            <option value=""<?php if ($ARE == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($ARE == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($ARE == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Muscular</strong>
                        <select class="form-control" name="AM" id="AM">
                            <option value=""<?php if ($AM == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($AM == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($AM == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Actividad Cardiaca</strong>
                        <select class="form-control" name="ACA" id="ACA">
                            <option value=""<?php if ($ACA == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($ACA == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($ACA == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                                <strong>Actividad Serosa</strong>
                                <select class="form-control" name="ASA" id="ASA">
                                    <option value=""<?php if ($ASA == '') echo 'selected'; ?>>Seleccione...</option>
                                    <option value="Si"<?php if ($ASA == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($ASA == 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong>Actividad Constitucional</strong>
                                <select class="form-control" name="ACONS" id="ACONS">
                                    <option value=""<?php if ($ACONS == '') echo 'selected'; ?>>Seleccione...</option>
                                    <option value="Si"<?php if ($ACONS == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($ACONS == 'No') echo 'selected'; ?>>No</option>
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
                                            value="Convulsión" <?php if ($convulsion == 'Convulsión') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Convulsión</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="psicosis" name="psicosis" valor=8 value="Psicosis" <?php if ($psicosis == 'Psicosis') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Psicosis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="SCO" name="SCO" valor=8
                                            value="Síndrome Cerebral Orgánico" <?php if ($SCO == 'Síndrome Cerebral Orgánico') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Síndrome Cerebral Orgánico</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="AV" name="AV" valor=8 value="Alteración Visual" <?php if ($AV == 'Alteración Visual') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Alteración Visual</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="TNC" name="TNC" valor=8
                                            value="Trastorno De Los Nervios Craneales" <?php if ($TNC == 'Trastorno De Los Nervios Craneales') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Trastorno De Los Nervios Craneales</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="DCL" name="DCL" valor=8
                                            value="Dolor De Cabeza Por Lupus" <?php if ($DCL == 'Dolor De Cabeza Por Lupus') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Dolor De Cabeza Por Lupus</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="EVC" name="EVC" valor=8 value="EVC" <?php if ($EVC == 'EVC') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>EVC</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="vasculitis" name="vasculitis" valor=8
                                            value="Vasculitis" <?php if ($vasculitis == 'Vasculitis') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Vasculitis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="artritis" name="artritis" valor=4 value="Artritis" <?php if ($artritis == 'Artritis') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Artritis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="miositis" name="miositis" valor=4 value="Miositis" <?php if ($miositis == 'Miositis') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Miositis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="CU" name="CU" valor=4 value="Cilindros Urinarios" <?php if ($CU == 'Cilindros Urinarios') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Cilindros Urinarios</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="hematuria" name="hematuria" valor=4
                                            value="Hematuria" <?php if ($hematuria == 'Hematuria') echo "checked"; ?>>
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
                                        <input type="checkbox" id="piuria" name="piuria" valor=4 value="Piuria" <?php if ($piuria == 'Piuria') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Piuria</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="proteinuria" name="proteinuria" valor=2
                                            value="Proteinuria" <?php if ($proteinuria == 'Proteinuria') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Proteinuria</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="erupcion" name="erupcion" valor=2 value="Erupción" <?php if ($erupcion == 'Erupción') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Erupción</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="UM" name="UM" valor=2 value="Úlceras De Las Mucosas" <?php if ($UM == 'Úlceras De Las Mucosas') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Úlceras De Las Mucosas</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="pleuritis" name="pleuritis" valor=2
                                            value="Pleuritis" <?php if ($pleuritis == 'Pleuritis') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Pleuritis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="pericarditis" name="pericarditis" valor=2
                                            value="Pericarditis" <?php if ($pericarditis == 'Pericarditis') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Pericarditis</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="COM" name="COM" valor=2
                                            value="Bajo com(C3,C4 O Ch50 Bajo)" <?php if ($COM == 'Bajo com(C3,C4 O Ch50 Bajo)') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Bajo com(C3,C4 O Ch50 Bajo)</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="ADN" name="ADN" valor=2
                                            value="Aumento de la Unión al ADN" <?php if ($ADN == 'Aumento de la Unión al ADN') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Aumento de la Unión al ADN</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="fiebre" name="fiebre" valor=1 value="Fiebre" <?php if ($fiebre == 'Fiebre') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Fiebre</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="trombocitopenia" name="trombocitopenia" valor=1
                                            value="Trombocitopenia" <?php if ($trombocitopenia == 'Trombocitopenia') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Trombocitopenia</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="leucopenia" name="leucopenia" valor=1
                                            value="Leucopenia" <?php if ($leucopenia == 'Leucopenia') echo "checked"; ?>>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <h6>Leucopenia</h6>
                                </div>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" id="alopecia" name="alopecia" valor=1 value="Alopecia" <?php if ($alopecia == 'Alopecia') echo "checked"; ?>>
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
                            readonly value="<?php echo $resultados_sledai; ?>">
                    </div>
                    <div class="col-md-12">
                        <strong>Categoria SLEDAI</strong>
                        <input class="form-control" type="text" name="Categoria_sledai"
                            id="Categoria_sledai" readonly value="<?php echo $Categoria_sledai; ?>">
                    </div>

                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Laboratorios</h6>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Albúmina Sérica</strong>
                        <input class="form-control" type="number" name="ASE" id="ASE" value="<?php echo $ASE; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong>BUN</strong>
                        <input class="form-control" type="number" name="BUN" id="BUN" value="<?php echo $BUN; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong>C3</strong>
                        <input class="form-control" type="number" name="C3" id="C3" value="<?php echo $C3; ?>">
                    </div>
                    <div class="col-md-2">
                        <strong>C4</strong>
                        <input class="form-control" type="number" name="C4" id="C4" value="<?php echo $C4; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Creatina Sérica</strong>
                        <input class="form-control" type="number" name="CS" id="CS" value="<?php echo $CS; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Proteinuria en 24 hrs</strong>
                        <input class="form-control" type="number" name="P24" id="P24" value="<?php echo $P24; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Albúminuria en 24 hrs</strong>
                        <input class="form-control" type="number" name="A24" id="A24" value="<?php echo $A24; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Leucocitos</strong>
                        <input class="form-control" type="number" name="leucocitos" id="leucocitos" value="<?php echo $leucocitos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Linfocitos</strong>
                        <input class="form-control" type="number" name="linfocitos" id="linfocitos" value="<?php echo $linfocitos; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Plaquetas</strong>
                        <input class="form-control" type="number" name="plaquetas" id="plaquetas" value="<?php echo $plaquetas; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Hemoglobina</strong>
                        <input class="form-control" type="number" name="hemoglobina" id="hemoglobina" value="<?php echo $hemoglobina; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Vitamina D</strong>
                        <input class="form-control" type="number" name="VD" id="VD" value="<?php echo $VD; ?>">
                    </div>
                    <div class="col-md-3">
                        <strong>Anticuerpo Lúpico</strong>
                        <select class="form-control" name="AL" id="AL">
                            <option value=""<?php if ($AL == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Detectado"<?php if ($AL == 'Detectado') echo 'selected'; ?>>Detectado</option>
                            <option value="No Detectado"<?php if ($AL == 'No Detectado') echo 'selected'; ?>>No Detectado</option>
                        </select>
                    </div>

                    

                    <div class="col-md-3">
                        <strong>Urea</strong>
                        <input class="form-control" type="number" name="Urea" id="Urea" value="<?php echo $Urea; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong>Colesterol</strong>
                        <input class="form-control" type="number" name="Colesterol" id="Colesterol" value="<?php echo $Colesterol; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong>Trigliceridos</strong>
                        <input class="form-control" type="number" name="Trigliceridos" id="Trigliceridos" value="<?php echo $Trigliceridos; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong>HDL</strong>
                        <input class="form-control" type="number" name="HDL" id="HDL" value="<?php echo $HDL; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong>LDL</strong>
                        <input class="form-control" type="number" name="LDL" id="LDL" value="<?php echo $LDL; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong>Relacion Colesteros HDL</strong>
                        <input class="form-control" type="number" name="Colesteros_HDL" id="Colesteros_HDL" value="<?php echo $Colesteros_HDL; ?>">
                    </div>

                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">EGO</h6>
                </div>

                <div class="row">

                    <div class="col-md-4 center-items">
                        <span>Hematuria</span>
                        <label class="container">
                            <input type="checkbox" name="hematuria_1" id="hematuria_1" <?php if ($hematuria_1 == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-4 center-items">
                        <span>Cilindro</span>
                        <label class="container">
                            <input type="checkbox" name="cilindro_1" id="cilindro_1" <?php if ($cilindro_1 == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>

                    <div class="col-md-4 center-items">
                        <span>Piuria</span>
                        <label class="container">
                            <input type="checkbox" name="piuria_1" id="piuria_1" <?php if ($piuria_1 == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    
                    
                    
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">USG Doppler Carotideo</h6>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <strong>USG Doppler Carotideo</strong>
                        <select class="form-control" name="doppler" id="doppler">
                            <option value=""<?php if ($doppler == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($doppler == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="No"<?php if ($doppler == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    
                    <div class="col-md-12">
                        <strong>USG Uso</strong>
                        <div class="row">

                            <div class="col-md-2 center-items">
                                <span>Derecha</span>
                                <label class="container">
                                    <input type="checkbox" name="Uso_derecha" id="Uso_derecha" <?php if ($Uso_derecha == 'Si') echo "checked"; ?> onchange="mostrar_derecha()">
                                    <div class="checkmark"></div>
                                </label>
                            </div>

                            <div class="col-md-2 center-items">
                                <span>Izquierda</span>
                                <label class="container">
                                    <input type="checkbox" name="Uso_izquierda" id="Uso_izquierda" <?php if ($Uso_izquierda == 'Si') echo "checked"; ?> onchange="mostrar_izquierda()">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                        </div>

                    </div>
                    
                    
                </div>

                <div id="derecha_div" style="display: none;">

                    <div class="form-header">
                        <h6 class="form-subtitle">USG Carótida Derecha</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-12" id="campoGrosor">
                            <strong>Grosor de intima</strong>
                            <input class="form-control" type="number" name="grosor_derecha" id="grosor_derecha" value="<?php echo $grosor_derecha; ?>">
                        </div>

                        <div class="col-md-12" id="campoGrosor">
                            <strong>Clasificacion</strong>
                            <input class="form-control" type="number" name="clasificacion_derecha" id="clasificacion_derecha" value="<?php echo $clasificacion_derecha; ?>">
                        </div>

                        <div class="col-md-12">
                            <strong>Placa Ateromatosa</strong>
                            <select class="form-control" name="placa_ateromatosa_derecha" id="placa_ateromatosa_derecha">
                                <option value=""<?php if ($placa_ateromatosa_derecha == '') echo 'selected'; ?>>Seleccione...</option>
                                <option value="Si"<?php if ($placa_ateromatosa_derecha == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="No"<?php if ($placa_ateromatosa_derecha == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>

                        
                    </div>
                </div>

                <div id="izquierda_div" style="display: none;">
                    <div class="form-header">
                        <h6 class="form-subtitle">USG Carótida Izquierda</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-12" id="campoGrosor">
                            <strong>Grosor de intima</strong>
                            <input class="form-control" type="number" name="grosor_izquierda" id="grosor_izquierda" value="<?php echo $grosor_izquierda; ?>">
                        </div>

                        <div class="col-md-12" id="campoGrosor">
                            <strong>Clasificacion</strong>
                            <input class="form-control" type="number" name="clasificacion_izquierda" id="clasificacion_izquierda" value="<?php echo $clasificacion_izquierda; ?>">
                        </div>

                        <div class="col-md-12">
                            <strong>Placa Ateromatosa</strong>
                            <select class="form-control" name="placa_ateromatosa_izquierda" id="placa_ateromatosa_izquierda">
                                <option value=""<?php if ($placa_ateromatosa_izquierda == '') echo 'selected'; ?>>Seleccione...</option>
                                <option value="Si"<?php if ($placa_ateromatosa_izquierda == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="No"<?php if ($placa_ateromatosa_izquierda == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-header">
                    <h6 class="form-subtitle">Anticuerpos</h6>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <strong>Ac-DNA Elevado</strong>
                        <select class="form-control" name="AC_DNA" id="AC_DNA">
                            <option value=""<?php if ($AC_DNA == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_DNA == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_DNA == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac-SM</strong>
                        <select class="form-control" name="AC_SM" id="AC_SM">
                            <option value=""<?php if ($AC_SM == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_SM == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_SM == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <strong>Ac-RNP</strong>
                        <select class="form-control" name="AC_RNP" id="AC_RNP">
                            <option value=""<?php if ($AC_RNP == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_RNP == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_RNP == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <strong>Ac-RO</strong>
                        <select class="form-control" name="AC_RO" id="AC_RO">
                            <option value=""<?php if ($AC_RO == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_RO == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_RO == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <strong>Ac-LA</strong>
                        <select class="form-control" name="AC_LA" id="AC_LA">
                            <option value=""<?php if ($AC_LA == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_LA == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_LA == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac-Cardiolipinas IgM</strong>
                        <select class="form-control" name="AC_CM" id="AC_CM">
                            <option value=""<?php if ($AC_CM == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_CM == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_CM == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac-Cardiolipinas IgG</strong>
                        <select class="form-control" name="AC_CG" id="AC_CG">
                            <option value=""<?php if ($AC_CG == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_CG == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_CG == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac B2-GPI IgG</strong>
                        <select class="form-control" name="AC_BG" id="AC_BG">
                            <option value=""<?php if ($AC_BG == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_BG == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_BG == 'Negativo') echo 'selected'; ?>>Negativo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <strong>Ac B2-GPI IgM</strong>
                        <select class="form-control" name="AC_BM" id="AC_BM">
                            <option value=""<?php if ($AC_BM == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Positivo"<?php if ($AC_BM == 'Positivo') echo 'selected'; ?>>Positivo</option>
                            <option value="Negativo"<?php if ($AC_BM == 'Negativo') echo 'selected'; ?>>Negativo</option>
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
                            <option value=""<?php if ($BR == '') echo 'selected'; ?>>Seleccione..</option>
                            <option value="Si"<?php if ($BR == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($BR == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <strong>Tipo</strong>
                        <select class="form-control" name="BR_tipo" id="BR_tipo">
                            <option value=""<?php if ($BR_tipo == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Clase 1. G. Mesangial"<?php if ($BR_tipo == 'Clase 1. G. Mesangial') echo 'selected'; ?>>Clase 1. G. Mesangial</option>
                            <option value="Clase 2. G. Mesangio Proliferativa"<?php if ($BR_tipo == 'Clase 2. G. Mesangio Proliferativa') echo 'selected'; ?>>Clase 2. G. Mesangio
                                Proliferativa</option>
                            <option value="Clase 3. G. Proliferativa Focal"<?php if ($BR_tipo == 'Clase 3. G. Proliferativa Focal') echo 'selected'; ?>>Clase 3. G. Proliferativa Focal
                            </option>
                            <option value="Clase 4. G. Proliferativa Difusa"<?php if ($BR_tipo == 'Clase 4. G. Proliferativa Difusa') echo 'selected'; ?>>Clase 4. G. Proliferativa Difusa
                            </option>
                            <option value="Clase 5. G. Membranosa"<?php if ($BR_tipo == 'Clase 5. G. Membranosa') echo 'selected'; ?>>Clase 5. G. Membranosa</option>
                            <option value="Clase 6. Enfermedad Renal Crónica"<?php if ($BR_tipo == 'Clase 6. Enfermedad Renal Crónica') echo 'selected'; ?>>Clase 6. Enfermedad Renal Crónica
                            </option>
                            <option value="Glomerulos Normales"<?php if ($BR_tipo == 'Glomerulos Normales') echo 'selected'; ?>>Glomerulos Normales</option>
                        </select>
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">Marcadores de Mal Pronóstico</h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Índice</strong>
                        <select class="form-control" name="indice" id="indice">
                            <option value=""<?php if ($indice == '') echo 'selected'; ?>>Seleccione..</option>
                            <option value="Si"<?php if ($indice == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($indice == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <strong>Tipo</strong>
                        <select class="form-control" name="indice_tipo" id="indice_tipo">
                            <option value=""<?php if ($indice_tipo == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Clase 1. G. Mesangial"<?php if ($indice_tipo == 'Clase 1. G. Mesangial') echo 'selected'; ?>>Clase 1. G. Mesangial</option>
                            <option value="Clase 2. G. Mesangio Proliferativa"<?php if ($indice_tipo == 'Clase 2. G. Mesangio Proliferativa') echo 'selected'; ?>>Clase 2. G. Mesangio
                                Proliferativa</option>
                            <option value="Clase 3. G. Proliferativa Focal"<?php if ($indice_tipo == 'Clase 3. G. Proliferativa Focal') echo 'selected'; ?>>Clase 3. G. Proliferativa Focal
                            </option>
                            <option value="Clase 4. G. Proliferativa Difusa"<?php if ($indice_tipo == 'Clase 4. G. Proliferativa Difusa') echo 'selected'; ?>>Clase 4. G. Proliferativa Difusa
                            </option>
                            <option value="Clase 5. G. Membranosa"<?php if ($indice_tipo == 'Clase 5. G. Membranosa') echo 'selected'; ?>>Clase 5. G. Membranosa</option>
                            <option value="Clase 6. Enfermedad Renal Crónica"<?php if ($indice_tipo == 'Clase 6. Enfermedad Renal Crónica') echo 'selected'; ?>>Clase 6. Enfermedad Renal Crónica
                            </option>
                            <option value="Glomerulos Normales"<?php if ($indice_tipo == 'Glomerulos Normales') echo 'selected'; ?>>Glomerulos Normales</option>
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
                            <input type="checkbox" name="Metrotexate" id="Metrotexate" <?php if ($Metrotexate == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_metro" id="ds_metro" value="<?php echo $ds_metro; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Hidroxicloroquina</span>
                        <label class="container">
                            <input type="checkbox" name="Hidroxicloroquina" id="Hidroxicloroquina" <?php if ($Hidroxicloroquina == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_hidro" id="ds_hidro" value="<?php echo $ds_hidro; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Azatioprina</span>
                        <label class="container">
                            <input type="checkbox" name="Azatioprina" id="Azatioprina" <?php if ($Azatioprina == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_aza" id="ds_aza" value="<?php echo $ds_aza; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Prednisona</span>
                        <label class="container">
                            <input type="checkbox" name="Prednisona" id="Prednisona" <?php if ($Prednisona == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_predi" id="ds_predi" value="<?php echo $ds_predi; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Micofenolato de Mofetilo</span>
                        <label class="container">
                            <input type="checkbox" name="Micofenolato" id="Micofenolato" <?php if ($Micofenolato == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_mico" id="ds_mico" value="<?php echo $ds_mico; ?>">
                    </div>
                    <div class="col-md-2">
                        <span>Ciclofosfamida</span>
                        <label class="container">
                            <input type="checkbox" name="Ciclofosfamida" id="Ciclofosfamida" <?php if ($Ciclofosfamida == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_ciclo" id="ds_ciclo" value="<?php echo $ds_ciclo; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Rituximab</span>
                        <label class="container">
                            <input type="checkbox" name="Rituximab" id="Rituximab" <?php if ($Rituximab == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong></strong>
                        <strong>Apego a Tratamiento</strong>
                        <select class="form-control" name="AT" id="AT">
                            <option value="0"<?php if ($AT == '0') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Parcial"<?php if ($AT == 'Parcial') echo 'selected'; ?>>Parcial</option>
                            <option value="Total"<?php if ($AT == 'Total') echo 'selected'; ?>>Total</option>
                            <option value="Sin Apego"<?php if ($AT == 'Sin Apego') echo 'selected'; ?>>Sin Apego</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <span>Leflunomide</span>
                        <label class="container">
                            <input type="checkbox" name="Leflunomide" id="Leflunomide" <?php if ($Leflunomide == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Leflunomide" id="ds_Leflunomide" value="<?php echo $ds_Leflunomide; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Glucocorticoide</span>
                        <label class="container">
                            <input type="checkbox" name="Glucocorticoide" id="Glucocorticoide" <?php if ($Glucocorticoide == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Glucocorticoide" id="ds_Glucocorticoide" value="<?php echo $ds_Glucocorticoide; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Aspirina</span>
                        <label class="container">
                            <input type="checkbox" name="Aspirina" id="Aspirina" <?php if ($Aspirina == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Aspirina" id="ds_Aspirina" value="<?php echo $ds_Aspirina; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Estatinas</span>
                        <label class="container">
                            <input type="checkbox" name="Estatinas" id="Estatinas" <?php if ($Estatinas == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Estatinas" id="ds_Estatinas" value="<?php echo $ds_Estatinas; ?>">
                    </div>


                    <div class="col-md-2">
                        <span>Antihipertensivo</span>
                        <label class="container">
                            <input type="checkbox" name="Antihipertensivo" id="Antihipertensivo" <?php if ($Antihipertensivo == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Antihipertensivo" id="ds_Antihipertensivo" value="<?php echo $ds_Antihipertensivo; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Antidiabético O.</span>
                        <label class="container">
                            <input type="checkbox" name="Antidiabetico" id="Antidiabetico" <?php if ($Antidiabetico == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Antidiabetico" id="ds_Antidiabetico" value="<?php echo $ds_Antidiabetico; ?>">
                    </div>

                    <div class="col-md-2">
                        <span>Insulinas</span>
                        <label class="container">
                            <input type="checkbox" name="Insulinas" id="Insulinas" <?php if ($Insulinas == 'Si') echo "checked"; ?>>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <strong>Dosis Semanal</strong>
                        <input class="form-control" type="number" name="ds_Insulinas" id="ds_Insulinas" value="<?php echo $ds_Insulinas; ?>">
                    </div>

                </div>

                <div class="form-header">
                    <h5 class="form-title">Defunción</h5>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <strong>Defuncion</strong>
                        <select class="form-control" name="defuncion" id="defuncion" >
                            <option value=""<?php if ($defuncion == '') echo 'selected'; ?>>Seleccione...</option>
                            <option value="Si"<?php if ($defuncion == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($defuncion == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="col-md-12" id="causa_defuncion_container">
                        <strong>Causa Defunción</strong>
                        <input class="form-control" type="text" name="causa_defuncion" id="causa_defuncion" value="<?php echo $causa_defuncion; ?>">
                    </div>
                </div>

                <div class="form-header">
                    <h5 class="form-title">NOTAS</h5>
                </div>

                <div class="row">
                    <div class="col-md-12" class="input-group">
                        <strong>Notas</strong>
                        <textarea class="form-control" aria-label="With textarea" name="nota" id="nota"><?php echo $nota; ?></textarea>
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




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scriptmodal.js"></script>


    <script type="module">
        import { editForm } from "./js/update.js";
        editForm();
    </script>




</body>
</head>