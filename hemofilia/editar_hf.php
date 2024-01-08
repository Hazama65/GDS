<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");

    if (!isset($_SESSION['valid_user'])) {
        // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
        header('Location: ../login/index.php');
        exit;
    }
    include ('php/controllers/edit.controller.php');
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
    <title>Editar Paciente Hemofilia</title>
</head>
<body>

    <header>
        <h5 style="color:#DDC9A3; margin-top: 12px;">
        <a href="index.php"><i class="bi bi-skip-backward-circle"></i></a>
        |<i class="bi bi-droplet"></i>
        Hemofilia</h5><br>
        <div style="padding:10px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <form id="edit_hemofilia" method="POST">
        <div class="container" width="100%" height="800px" style="margin-button:100px">
            <div class="row">
            <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                <h6>Datos del Paciente</h6>
            </div>

            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


            <div class="col-md-4" id="idnombre">
                <strong style="font-size: 14px;">Nombre Completo</strong>
                <input type="text" name="nombre" id="nombre" class="control form-control" placeholder="Nombre(s) Apellido(s)" style="font-size:14px;" value="<?php echo $nombre_paciente; ?>" required>
            </div>

            <div class="col-md-4" id="idcurp">
                <strong style="font-size: 14px;">CURP</strong>
                <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP..." style="font-size: 14px;" value="<?php echo $curp; ?>" required>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Fecha Nacimiento</strong>
                <input id="fecha" name="fecha" type="date"  class="control form-control" style="font-size: 14px; background-color:#F2F4F4;" readonly value="<?php echo $fecha_nacimiento; ?>">
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Edad</strong>
                <input id="edad" name="edad" type="text" class="control form-control"  style="font-size: 14px; background-color:#F2F4F4;" readonly value="<?php echo $edad; ?>">
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Sexo</strong>
                <input type="text" class="control form-control" id="sexo" name="sexo" style="font-size: 14px; background-color:#F2F4F4;" readonly value="<?php echo $sexo; ?>">
            </div>

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Peso</strong>
                      <input type="number" step="any" class="form-control" id="peso" placeholder="Kg" name="peso" required value="<?php echo $peso; ?>">
                </div>

            </div> <!-- div del row de datos del paciente-->


            <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                <h6>Clinica</h6>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Tipo de Hemofilia</strong>
                    <select name="tipohemofilia" id="tipohemofilia" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($tipohemofilia == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Congenita"<?php if ($tipohemofilia == 'Congenita') echo 'selected'; ?>>Congenita</option>
                        <option value="Adquirida"<?php if ($tipohemofilia == 'Adquirida') echo 'selected'; ?>>Adquirida</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Deficiencia de factor</strong>
                    <select name="deficienciafactor" id="deficienciafactor" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($deficienciafactor == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="VIII"<?php if ($deficienciafactor == 'VIII') echo 'selected'; ?>>VIII</option>
                        <option value="IX"<?php if ($deficienciafactor == 'IX') echo 'selected'; ?>>IX</option>
                        <option value="XI"<?php if ($deficienciafactor == 'XI') echo 'selected'; ?>>XI</option>
                        <option value="EVW"<?php if ($deficienciafactor == 'EVW') echo 'selected'; ?>>EVW</option>
                        <option value="V"<?php if ($deficienciafactor == 'V') echo 'selected'; ?>>V</option>
                        <option value="VII"<?php if ($deficienciafactor == 'VII') echo 'selected'; ?>>VII</option>
                        <option value="Otras"<?php if ($deficienciafactor == 'Otras') echo 'selected'; ?>>Otras</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipovw">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0); ">Tipo de EVW</strong>
                    <select name="tipovw" id="tipovw" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($tipovw == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Tipo 1"<?php if ($tipovw == 'Tipo 1') echo 'selected'; ?>>Tipo 1</option>
                        <option value="Tipo 2"<?php if ($tipovw == 'Tipo 2') echo 'selected'; ?>>Tipo 2</option>
                        <option value="Tipo 3"<?php if ($tipovw == 'Tipo 3') echo 'selected'; ?>>Tipo 3</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipoVIII">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Clasificación de Hemofilia (VIII)</strong>
                    <select name="tipoVIII" id="tipoVIII" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($tipoVIII == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Tipo A"<?php if ($tipoVIII == 'Tipo A') echo 'selected'; ?>>Tipo A</option>
                        <option value="Tipo B"<?php if ($tipoVIII == 'Tipo B') echo 'selected'; ?>>Tipo B</option>
                        <option value="Tipo C"<?php if ($tipoVIII == 'Tipo C') echo 'selected'; ?>>Tipo C</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipoIX">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Clasificación de Hemofilia (IX)</strong>
                    <select name="tipoIX" id="tipoIX" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($tipoIX == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Tipo A"<?php if ($tipoIX == 'Tipo A') echo 'selected'; ?>>Tipo A</option>
                        <option value="Tipo B"<?php if ($tipoIX == 'Tipo B') echo 'selected'; ?>>Tipo B</option>
                        <option value="Tipo C"<?php if ($tipoIX == 'Tipo C') echo 'selected'; ?>>Tipo C</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipoXI">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Clasificación de Hemofilia (XI)</strong>
                    <select name="tipoXI" id="tipoXI" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($tipoXI == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Tipo A"<?php if ($tipoXI == 'Tipo A') echo 'selected'; ?>>Tipo A</option>
                        <option value="Tipo B"<?php if ($tipoXI == 'Tipo B') echo 'selected'; ?>>Tipo B</option>
                        <option value="Tipo C"<?php if ($tipoXI == 'Tipo C') echo 'selected'; ?>>Tipo C</option>
                    </select>
                </div>

                <div class="col-md-4" id="idotrashemofilias">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Otras</strong>
                    <input type="text" id="otrashemofilias" name="otrashemofilias" class="form-control" style="font-size: 14px;" value="<?php echo $otrashemofilias; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Clasificación por gravedad</strong>
                    <select name="clasificacionGravedad" id="clasificacionGravedad" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($clasificacionGravedad == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Leve"<?php if ($clasificacionGravedad == 'Leve') echo 'selected'; ?>>Leve</option>
                        <option value="Moderado"<?php if ($clasificacionGravedad == 'Moderado') echo 'selected'; ?>>Moderado</option>
                        <option value="Severo"<?php if ($clasificacionGravedad == 'Severo') echo 'selected'; ?>>Severo</option>
                    </select>
                </div>

                <div class="col-md-4">
                <strong style="font-size: 14px;">Inhibidor</strong>
                    <select name="inhibidor" id="inhibidor" class="form-control" style="font-size: 14px;" onchange="mostrarTerapiaReemplazo()">
                        <option value="Sin registro"<?php if ($inhibidor == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Baja respuesta -5UB"<?php if ($inhibidor == 'Baja respuesta -5UB') echo 'selected'; ?>>Baja respuesta -5UB</option>
                        <option value="Alta respuesta >5UB"<?php if ($inhibidor == 'Alta respuesta >5UB') echo 'selected'; ?>>Alta respuesta >5UB</option>
                    </select>
                </div>

                <div class="col-md-4" id="idbajarespuesta">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Inhibidor Baja Respuesta</strong>
                    <input type="number" id="bajarespuesta" name="bajarespuesta" class="form-control" style="font-size: 14px;" value="<?php echo $bajarespuesta; ?>">
                </div>

                <div class="col-md-4" id="idaltarespuesta">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Inhibidor Alta Respuesta</strong>
                    <input type="number" id="altarespuesta" name="altarespuesta" class="form-control" style="font-size: 14px;" value="<?php echo $altarespuesta; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Artropatia Hemolitica </strong>
                    <select name="artropatiahemolitica" id="artropatiahemolitica" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($artropatiahemolitica == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Si"<?php if ($artropatiahemolitica == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No"<?php if ($artropatiahemolitica == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-4" id="idarea_afectada">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Área Afectada</strong>
                    <select name="area_afectada" id="area_afectada" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($area_afectada == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Codos"<?php if ($area_afectada == 'Codos') echo 'selected'; ?>>Codos</option>
                        <option value="Rodillas"<?php if ($area_afectada == 'Rodillas') echo 'selected'; ?>>Rodillas</option>
                        <option value="Tobillos"<?php if ($area_afectada == 'Tobillos') echo 'selected'; ?>>Tobillos</option>
                    </select>
                </div>

                <div class="col-md-4" id="idsangradosmensuales">
                    <strong style="font-size: 14px;">No. de Sangrados Mensuales</strong>
                    <input type="number" id="sangradosmensuales" name="sangradosmensuales" class="form-control" style="font-size: 14px;" value="<?php echo $sangradosmensuales; ?>">
                </div>

                <div class="col-md-4" id="idrequierefactor">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Requirió factor</strong>
                    <select name="requierefactor" id="requierefactor" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($requierefactor == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Si"<?php if ($requierefactor == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No"<?php if ($requierefactor == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

               <!-- Aquí se hace el primer Collapse de INDEPENDENCIA FUNCIONAL FISH -->
               <!-- hacemos un elemento grupal donde la primer parte es un boton que despliega el collapse-->

                <div class="col-md-12"><br>
                    <div class="input-group mb-3">
                        <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#FISH" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">Independencia Funcional (FISH)</a>
                        <input type="text" class="form-control" id="resultadoFISH" name="resultadoFISH" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?php echo $resultadoFISH; ?>">

                    </div>
                </div>
            
                <div class="collapse" id="FISH">
                    <div class="card card-body">
                        <div class="col-md-12">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                    <b style="font-size: 16px; color: #A44A04; ">Cuidado Personal</b><br><br>
                                    <strong style="font-size: 14px;">Comer y Asearse</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer_aseo" value="1" <?php echo ($comer_aseo == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer_aseo" value="2" <?php echo ($comer_aseo == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer_aseo" value="3" <?php echo ($comer_aseo == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer_aseo" value="4" <?php echo ($comer_aseo == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>


                                        <!-- Bañarse-->

                                        <strong style="font-size: 14px;">Bañarse</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="bathe" value="1" <?php echo ($bathe == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="bathe" value="2" <?php echo ($bathe == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="bathe" value="3" <?php echo ($bathe == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="bathe" value="4" <?php echo ($bathe == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>


                                        <!-- Vestirse-->

                                        <strong style="font-size: 14px;">Vestirse</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="1" <?php echo ($vestirse == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="2" <?php echo ($vestirse == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="3" <?php echo ($vestirse == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="4" <?php echo ($vestirse == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>
                                    </div> <!-- es el div que cierra el div class="col"> de Cuidado Personal-->
                                    
                                    
                                    <div class="col">
                                    <b style="font-size: 16px; color: #A44A04; ">Transferir</b><br><br>

                                        <strong style="font-size: 14px;">Sentar</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="1" <?php echo ($sentar == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="2" <?php echo ($sentar == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="3" <?php echo ($sentar == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="4" <?php echo ($sentar == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>


                                        <strong style="font-size: 14px;">Cunclillas</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="1" <?php echo ($Cunclillas == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="2" <?php echo ($Cunclillas == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="3" <?php echo ($Cunclillas == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="4" <?php echo ($Cunclillas == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>
                                    </div>



                                    <div class="col">
                                    <b style="font-size: 16px; color: #A44A04; ">Locomotor</b><br><br>

                                        <strong style="font-size: 14px;">Caminar</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="1" <?php echo ($Caminar == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="2" <?php echo ($Caminar == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="3" <?php echo ($Caminar == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="4" <?php echo ($Caminar == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>


                                        <strong style="font-size: 14px;">Correr</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="1" <?php echo ($Correr == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="2" <?php echo ($Correr == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="3" <?php echo ($Correr == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="4" <?php echo ($Correr == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>


                                        <strong style="font-size: 14px;">Subir Escaleras (12-14 pasos)</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="1" <?php echo ($Subir  == 1) ? 'checked' : ''; ?>> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="2" <?php echo ($Subir  == 2) ? 'checked' : ''; ?>> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="3" <?php echo ($Subir  == 3) ? 'checked' : ''; ?>> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="4" <?php echo ($Subir  == 4) ? 'checked' : ''; ?>> 4
                                            </label>
                                        </div>
                                    </div> <!--  <div class="col"> locomotor-->
                            
                                    
                                </div> <!-- <div class="row"> este es el div que cierra el row después del container-->
                            </div> <!-- el <div class="container text-center"> -->     
                            <br><p style="font-size: 10px;">
                            Donde: <br>
                            1: El sujeto no puede realizar la actividad o necesita ayuda. <br>
                            2: El sujeto necesita asistencia parcial/ayuda/instrumentos modificados/ para realizar la actividad.<br>
                            3: El sujeto es capaz de realizar la actividad sin ayuda  pero con ligera molestia.<br>
                            4: El sujeto es capaz de realizar la actividad sin ninguna dificultad.
                            </p>                       
                        </div> <!-- cierre de <div class="col-md-12">-->
                    </div>
                </div>


                <!-- Aquí se hace el segundo Collapse de Salud Articular (HJHS)-->
               <!-- hacemos un elemento grupal donde la primer parte es un boton que despliega el collapse-->

               <div class="col-md-12"><br>
                    <div class="input-group mb-3">
                        <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HJHS" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">Salud Articular (HJHS)</a>
                        <input type="text" class="form-control" id="puntuacion_HJHS" name="puntuacion_HJHS" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?php echo $puntuacion_HJHS; ?>">
                    </div>
                </div>
            
                <div class="collapse" id="HJHS">
                    <div class="card card-body">
                        <div class="col-md-12">
                        
                        <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                            <p>Codo Izquierdo</p>
                        </div>


                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion" id="inflamacion" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_inflamacion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($CI_inflamacion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1"<?php if ($CI_inflamacion == '1= Leve') echo 'selected'; ?>>1= leve</option>
                                            <option value="2= Moderada" data-valor="2"<?php if ($CI_inflamacion == '2= Moderada') echo 'selected'; ?>>2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3"<?php if ($CI_inflamacion == '3= Intensa') echo 'selected'; ?>>3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="NE"<?php if ($CI_inflamacion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>


                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion" id="duracion" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_duracion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($CI_duracion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="0 < 6 meses" data-valor="0"<?php if ($CI_duracion == '0 < 6 meses') echo 'selected'; ?>>0 < 6 meses</option>
                                            <option value="1 => 6 meses" data-valor="1"<?php if ($CI_duracion == '1 => 6 meses') echo 'selected'; ?>>1 => 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CI_duracion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular" id="atrofiamuscular" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_atrofiamuscular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($CI_atrofiamuscular == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($CI_atrofiamuscular == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($CI_atrofiamuscular == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CI_atrofiamuscular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento" id="crepitacion_movimiento" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_crepitacion_movimiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($CI_crepitacion_movimiento == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($CI_crepitacion_movimiento == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($CI_crepitacion_movimiento == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CI_crepitacion_movimiento == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion" id="perdida_flexion" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_perdida_flexion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($CI_perdida_flexion == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($CI_perdida_flexion == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($CI_perdida_flexion == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($CI_perdida_flexion == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CI_perdida_flexion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension" id="perdida_extension" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_perdida_extension == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($CI_perdida_extension == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($CI_perdida_extension == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($CI_perdida_extension == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($CI_perdida_extension == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CI_perdida_extension == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular" id="dolor_articular" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_dolor_articular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0"<?php if ($CI_dolor_articular == '0 = Sin dolor en el rango de movimiento activo') echo 'selected'; ?>>0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo, solamente dolor en la presion suave o en la palpacion" data-valor="1"<?php if ($CI_dolor_articular == '1 = Sin dolor en el rango de movimiento activo, solamente dolor en la presion suave o en la palpacion') echo 'selected'; ?>>1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2"<?php if ($CI_dolor_articular == '2 = Dolor en el rango de movimiento activo') echo 'selected'; ?>>2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CI_dolor_articular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza" id="fuerza" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CI_fuerza == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($CI_fuerza == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($CI_fuerza == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($CI_fuerza == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($CI_fuerza == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($CI_fuerza == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable"<?php if ($CI_fuerza == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- <div class="row"> este es el div que cierra el row después del container-->

                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Codo Derecho</p>
                                </div>

                                <div class ="row">

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_codoDerecho" id="inflamacion_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_inflamacion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($CD_inflamacion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1"<?php if ($CD_inflamacion == '1= Leve') echo 'selected'; ?>>1= leve</option>
                                            <option value="2= Moderada" data-valor="2"<?php if ($CD_inflamacion == '2= Moderada') echo 'selected'; ?>>2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3"<?php if ($CD_inflamacion == '3= Intensa') echo 'selected'; ?>>3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_inflamacion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_codoDerecho" id="duracion_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_duracion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($CD_duracion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="0 < 6 meses" data-valor="0"<?php if ($CD_duracion == '0 < 6 meses') echo 'selected'; ?>>0 < 6 meses</option>
                                            <option value="1 => 6 meses" data-valor="1"<?php if ($CD_duracion == '1 => 6 meses') echo 'selected'; ?>>1 => 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_duracion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_codoDerecho" id="atrofiamuscular_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_atrofiamuscular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($CD_atrofiamuscular == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($CD_atrofiamuscular == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($CD_atrofiamuscular == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_atrofiamuscular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_codoDerecho" id="crepitacion_movimiento_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_crepitacion_movimiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($CD_crepitacion_movimiento == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($CD_crepitacion_movimiento == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($CD_crepitacion_movimiento == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_crepitacion_movimiento == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_codoDerecho" id="perdida_flexion_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_perdida_flexion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($CD_perdida_flexion == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($CD_perdida_flexion == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($CD_perdida_flexion == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($CD_perdida_flexion == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_perdida_flexion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_codoDerecho" id="perdida_extension_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_perdida_extension == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($CD_perdida_extension == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($CD_perdida_extension == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($CD_perdida_extension == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($CD_perdida_extension == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_perdida_extension == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_codoDerecho" id="dolor_articular_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_dolor_articular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0"<?php if ($CD_dolor_articular == '0 = Sin dolor en el rango de movimiento activo') echo 'selected'; ?>>0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1"<?php if ($CD_dolor_articular == '1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación') echo 'selected'; ?>>1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2"<?php if ($CD_dolor_articular == '2 = Dolor en el rango de movimiento activo') echo 'selected'; ?>>2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($CD_dolor_articular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_codoDerecho" id="fuerza_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($CD_fuerza == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($CD_fuerza == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($CD_fuerza == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($CD_fuerza == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($CD_fuerza == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($CD_fuerza == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable"<?php if ($CD_fuerza == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div><!-- se cierra el row de codo derecho -->

                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Rodilla Izquierda</p>
                                </div>

                                <div class="row">

                                <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_RodillaIzquierda" id="inflamacion_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_inflamacion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion"<?php if ($RI_inflamacion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1"<?php if ($RI_inflamacion == '1= Leve') echo 'selected'; ?>>1= leve</option>
                                            <option value="2= Moderada" data-valor="2"<?php if ($RI_inflamacion == '2= Moderada') echo 'selected'; ?>>2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3"<?php if ($RI_inflamacion == '3= Intensa') echo 'selected'; ?>>3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_inflamacion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_RodillaIzquierda" id="duracion_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_duracion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($RI_duracion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="0 = 0 < 6 meses" data-valor="0"<?php if ($RI_duracion == '0 = 0 < 6 meses') echo 'selected'; ?>>0= 0 < 6 meses</option>
                                            <option value="1 = > 6 meses" data-valor="1"<?php if ($RI_duracion == '1 = > 6 meses') echo 'selected'; ?>>1 = > 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_duracion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_RodillaIzquierda" id="atrofiamuscular_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_atrofiamuscular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($RI_atrofiamuscular == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($RI_atrofiamuscular == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($RI_atrofiamuscular == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_atrofiamuscular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_RodillaIzquierda" id="crepitacion_movimiento_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_crepitacion_movimiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($RI_crepitacion_movimiento == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($RI_crepitacion_movimiento == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($RI_crepitacion_movimiento == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_crepitacion_movimiento == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_RodillaIzquierda" id="perdida_flexion_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_perdida_flexion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($RI_perdida_flexion == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($RI_perdida_flexion == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($RI_perdida_flexion == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($RI_perdida_flexion == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_perdida_flexion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_RodillaIzquierda" id="perdida_extension_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_perdida_extension == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($RI_perdida_extension == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($RI_perdida_extension == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($RI_perdida_extension == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($RI_perdida_extension == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_perdida_extension == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_RodillaIzquierda" id="dolor_articular_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_dolor_articular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0"<?php if ($RI_dolor_articular == '0 = Sin dolor en el rango de movimiento activo') echo 'selected'; ?>>0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1"<?php if ($RI_dolor_articular == '1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación') echo 'selected'; ?>>1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2"<?php if ($RI_dolor_articular == '2 = Dolor en el rango de movimiento activo') echo 'selected'; ?>>2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_dolor_articular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_RodillaIzquierda" id="fuerza_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RI_fuerza == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($RI_fuerza == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($RI_fuerza == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($RI_fuerza == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($RI_fuerza == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($RI_fuerza == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RI_fuerza == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                </div> <!-- se cierra el div row de rodilla izquierda -->


                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Rodilla Derecha</p>
                                </div>

                                <div class="row">

                                <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_RodillaDerecha" id="inflamacion_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_inflamacion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($RD_inflamacion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1"<?php if ($RD_inflamacion == '1= Leve') echo 'selected'; ?>>1= leve</option>
                                            <option value="2= Moderada" data-valor="2"<?php if ($RD_inflamacion == '2= Moderada') echo 'selected'; ?>>2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3"<?php if ($RD_inflamacion == '3= Intensa') echo 'selected'; ?>>3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_inflamacion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_RodillaDerecha" id="duracion_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_duracion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($RD_duracion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="0 = 0 < 6 meses" data-valor="0"<?php if ($RD_duracion == '0 = 0 < 6 meses') echo 'selected'; ?>>0 = 0 < 6 meses</option>
                                            <option value="1 = > 6 meses" data-valor="1"<?php if ($RD_duracion == '1 = > 6 meses') echo 'selected'; ?>>1 = > 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_duracion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_RodillaDerecha" id="atrofiamuscular_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_atrofiamuscular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($RD_atrofiamuscular == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($RD_atrofiamuscular == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($RD_atrofiamuscular == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_atrofiamuscular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_RodillaDerecha" id="crepitacion_movimiento_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_crepitacion_movimiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($RD_crepitacion_movimiento == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($RD_crepitacion_movimiento == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($RD_crepitacion_movimiento == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_crepitacion_movimiento == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_RodillaDerecha" id="perdida_flexion_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_perdida_flexion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($RD_perdida_flexion == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($RD_perdida_flexion == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($RD_perdida_flexion == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($RD_perdida_flexion == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_perdida_flexion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_RodillaDerecha" id="perdida_extension_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_perdida_extension == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($RD_perdida_extension == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($RD_perdida_extension == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($RD_perdida_extension == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($RD_perdida_extension == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_perdida_extension == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_RodillaDerecha" id="dolor_articular_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_dolor_articular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0"<?php if ($RD_dolor_articular == '0 = Sin dolor en el rango de movimiento activo') echo 'selected'; ?>>0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1"<?php if ($RD_dolor_articular == '1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación') echo 'selected'; ?>>1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2"<?php if ($RD_dolor_articular == '2 = Dolor en el rango de movimiento activo') echo 'selected'; ?>>2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_dolor_articular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_RodillaDerecha" id="fuerza_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($RD_fuerza == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($RD_fuerza == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($RD_fuerza == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($RD_fuerza == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($RD_fuerza == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($RD_fuerza == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($RD_fuerza == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- se cierra el div row de rodilla derecha -->


                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Tobillo Izquierdo</p>
                                </div>

                                <div class="row">

                                <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_TobilloIzquierdo" id="inflamacion_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_inflamacion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($TI_inflamacion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1"<?php if ($TI_inflamacion == '1= Leve') echo 'selected'; ?>>1= leve</option>
                                            <option value="2= Moderada" data-valor="2"<?php if ($TI_inflamacion == '2= Moderada') echo 'selected'; ?>>2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3"<?php if ($TI_inflamacion == '3= Intensa') echo 'selected'; ?>>3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_inflamacion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_TobilloIzquierdo" id="duracion_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_duracion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($TI_duracion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="0 = 0 < 6 meses" data-valor="0"<?php if ($TI_duracion == '0 = 0 < 6 meses') echo 'selected'; ?>>0 = 0 < 6 meses</option>
                                            <option value="1 = > 6 meses" data-valor="1"<?php if ($TI_duracion == '1 = > 6 meses') echo 'selected'; ?>>1 = > 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_duracion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_TobilloIzquierdo" id="atrofiamuscular_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_atrofiamuscular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($TI_atrofiamuscular == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($TI_atrofiamuscular == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($TI_atrofiamuscular == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_atrofiamuscular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_TobilloIzquierdo" id="crepitacion_movimiento_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_crepitacion_movimiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($TI_crepitacion_movimiento == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($TI_crepitacion_movimiento == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($TI_crepitacion_movimiento == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_crepitacion_movimiento == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_TobilloIzquierdo" id="perdida_flexion_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_perdida_flexion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($TI_perdida_flexion == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($TI_perdida_flexion == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($TI_perdida_flexion == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($TI_perdida_flexion == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_perdida_flexion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_TobilloIzquierdo" id="perdida_extension_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_perdida_extension == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($TI_perdida_extension == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($TI_perdida_extension == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($TI_perdida_extension == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($TI_perdida_extension == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_perdida_extension == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_TobilloIzquierdo" id="dolor_articular_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_dolor_articular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0"<?php if ($TI_dolor_articular == '0 = Sin dolor en el rango de movimiento activo') echo 'selected'; ?>>0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1"<?php if ($TI_dolor_articular == '1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación') echo 'selected'; ?>>1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2"<?php if ($TI_dolor_articular == '2 = Dolor en el rango de movimiento activo') echo 'selected'; ?>>2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_dolor_articular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_TobilloIzquierdo" id="fuerza_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TI_fuerza == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($TI_fuerza == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($TI_fuerza == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($TI_fuerza == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($TI_fuerza == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($TI_fuerza == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TI_fuerza == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- se cierra el div row de tobillo izquierdo -->



                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Tobillo Derecho</p>
                                </div>

                                <div class="row">

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_TobilloDerecho" id="inflamacion_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_inflamacion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($TD_inflamacion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1"<?php if ($TD_inflamacion == '1= Leve') echo 'selected'; ?>>1= leve</option>
                                            <option value="2= Moderada" data-valor="2"<?php if ($TD_inflamacion == '2= Moderada') echo 'selected'; ?>>2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3"<?php if ($TD_inflamacion == '3= Intensa') echo 'selected'; ?>>3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_inflamacion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_TobilloDerecho" id="duracion_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_duracion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0"<?php if ($TD_duracion == '0 = Sin Inflamacion') echo 'selected'; ?>>0 = Sin Inflamación</option>
                                            <option value="0 < 6 meses" data-valor="0"<?php if ($TD_duracion == '0 < 6 meses') echo 'selected'; ?>>0 < 6 meses</option>
                                            <option value="1 => 6 meses" data-valor="1"<?php if ($TD_duracion == '1 => 6 meses') echo 'selected'; ?>>1 => 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_duracion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_TobilloDerecho" id="atrofiamuscular_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_atrofiamuscular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($TD_atrofiamuscular == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($TD_atrofiamuscular == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($TD_atrofiamuscular == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_atrofiamuscular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_TobilloDerecho" id="crepitacion_movimiento_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_crepitacion_movimiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0"<?php if ($TD_crepitacion_movimiento == '0 = Ninguna') echo 'selected'; ?>>0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1"<?php if ($TD_crepitacion_movimiento == '1 = Leve') echo 'selected'; ?>>1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2"<?php if ($TD_crepitacion_movimiento == '2 = Severa') echo 'selected'; ?>>2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_crepitacion_movimiento == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_TobilloDerecho" id="perdida_flexion_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_perdida_flexion == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($TD_perdida_flexion == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($TD_perdida_flexion == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($TD_perdida_flexion == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($TD_perdida_flexion == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_perdida_flexion == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_TobilloDerecho" id="perdida_extension_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_perdida_extension == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0"<?php if ($TD_perdida_extension == '0 = Dentro del Rango') echo 'selected'; ?>>0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1"<?php if ($TD_perdida_extension == '1 = Prdida de 1 a 4') echo 'selected'; ?>>1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2"<?php if ($TD_perdida_extension == '2 = Perdida de 5 a 10') echo 'selected'; ?>>2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3"<?php if ($TD_perdida_extension == '3 = Perdida de > 10°') echo 'selected'; ?>>3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_perdida_extension == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_TobilloDerecho" id="dolor_articular_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_dolor_articular == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0"<?php if ($TD_dolor_articular == '0 = Sin dolor en el rango de movimiento activo') echo 'selected'; ?>>0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1"<?php if ($TD_dolor_articular == '1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación') echo 'selected'; ?>>1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2"<?php if ($TD_dolor_articular == '2 = Dolor en el rango de movimiento activo') echo 'selected'; ?>>2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_dolor_articular == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_TobilloDerecho" id="fuerza_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($TD_fuerza == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($TD_fuerza == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($TD_fuerza == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($TD_fuerza == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($TD_fuerza == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($TD_fuerza == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0"<?php if ($TD_fuerza == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- se cierra el div row de tobillo derecho -->

                                <div style="background-color: rgb(227, 185, 152 ); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Resultados</p>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <strong style="font-size: 14px;">Suma del total de Articulaciones</strong>
                                        <input id="suma_articulaciones" name="suma_articulaciones" type="number" class="control form-control"  style="font-size: 14px;" readonly value="<?php echo $suma_articulaciones; ?>">
                                    </div>

                                    <div class="col-md-6">
                                            <strong style="font-size: 14px;">Marcha Global (caminar, escaleras, correr, salto sobre una pierna)</strong>
                                            <select name="marcha_global" id="marcha_global" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($marcha_global == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0"<?php if ($marcha_global == '0 = todas las habilidades se encuentran en los limites normales.') echo 'selected'; ?>>0 = Todas las habilidades se encuentran en los limites normales.</option>
                                                <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1"<?php if ($marcha_global == '1 = una habilidad no está dentro de los limites normales.') echo 'selected'; ?>>1 = Una habilidad no está dentro de los limites normales.</option>
                                                <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2"<?php if ($marcha_global == '2 = dos habilidades no están dentro de los límites normales.') echo 'selected'; ?>>2 = Dos habilidades no están dentro de los límites normales.</option>
                                                <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3"<?php if ($marcha_global == '3 = tres habilidades no están dentro de los limites normales.') echo 'selected'; ?>>3 = Tres habilidades no están dentro de los limites normales.</option>
                                                <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4"<?php if ($marcha_global == '4 = ninguna habilidad está dentro de los limites normales.') echo 'selected'; ?>>4 = Ninguna habilidad está dentro de los limites normales.</option>
                                                <option value="NE = No Evaluable" data-valor="0"<?php if ($marcha_global == 'NE = No Evaluable') echo 'selected'; ?>>NE = No Evaluable</option>
                                            </select>
                                    </div>

                                    <!--<div class="col-md-6">
                                        <strong style="font-size: 14px;">Puntuación HJHS total</strong>
                                        <input id="puntuacion_HJHS" name="puntuacion_HJHS" type="number" class="control form-control"  style="font-size: 14px;" readonly>
                                    </div>-->

                                </div><!-- es el div que cierra el row de los totales de HJHS-->
                            </div> <!-- el <div class="container text-center"> -->    
                        </div> <!-- cierre de <div class="col-md-12">-->
                    </div>
                </div>
            </div> <!-- es el div del row clinicas-->


                <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                    <h6>USG (escala HEAD US)</h6>
                </div>

               

                <div class="row">


                    <div class="col-md-12"><br>
                        <div class="input-group mb-3">
                            <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HEADUS6" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">6 meses</a>
                            <input type="text" class="form-control" id="USG_6meses" name="USG_6meses" style="font-size: 14px;" readonly value="<?php echo $USG_6meses; ?>">

                        </div>
                    </div>


                    <div class="collapse" id="HEADUS6">
                        <div class="card card-body">
                            <div class="col-md-12">
                        
                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Actividad Inflamatoria</p>
                                </div>


                            <div class="container">
                                <div class="row">
                                
                                   
                                    <div class="col-md-12">
                                        <strong style="font-size: 14px;">Actividad Inflamatoria</strong>
                                        <select name="actividad_inflamatoria" id="actividad_inflamatoria" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($_6_actividad_inflamatoria == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="Derrame Sinovitis"<?php if ($_6_actividad_inflamatoria == 'Derrame Sinovitis') echo 'selected'; ?>>Derrame / Sinovitis</option>
                                            <option value="Hipertrofia sinovial"<?php if ($_6_actividad_inflamatoria == 'Hipertrofia sinovial') echo 'selected'; ?>>Hipertrofia Sinovial</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12" id="id_derrame_sinovitis">
                                        <strong style="font-size: 14px;">Escala de Derrame / Sinovitis</strong>
                                        <select name="derrame_sinovitis" id="derrame_sinovitis" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($_6_derrame_sinovitis == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="Moderado" data-valor="1"<?php if ($_6_derrame_sinovitis == 'Moderado') echo 'selected'; ?>>Moderado</option>
                                            <option value="Severo" data-valor="2"<?php if ($_6_derrame_sinovitis == 'Severo') echo 'selected'; ?>>Severo</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12" id="id_hipertrofia_sinovial">
                                        <strong style="font-size: 14px;">Escala de Hipertrofia Sinovial</strong>
                                        <select name="hipertrofia_sinovial" id="hipertrofia_sinovial" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro"<?php if ($_6_hipertrofia_sinovial == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                            <option value="Moderado" data-valor="1"<?php if ($_6_hipertrofia_sinovial == 'Moderado') echo 'selected'; ?>>Moderado</option>
                                            <option value="Severo" data-valor="2"<?php if ($_6_hipertrofia_sinovial == 'Severo') echo 'selected'; ?>>Severo</option>
                                        </select>
                                    </div>

                                </div>

                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Daño Osteocondral</p>
                                </div>

                                <div class="row">
                                <div class="col-md-6" id="id_Cartilago">
                                    <strong style="font-size: 14px;">Cartilago</strong>
                                    <select name="Cartilago" id="Cartilago" class="form-control" style="font-size: 14px;">
                                        <option value="Sin registro"<?php if ($_6_Cartilago == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                        <option value="Normal" data-valor="0"<?php if ($_6_Cartilago == 'Normal') echo 'selected'; ?>>Normal</option>
                                        <option value="Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular" data-valor="1"<?php if ($_6_Cartilago == 'Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular') echo 'selected'; ?>>Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular</option>
                                        <option value="Pérdida parcial o completa del cartílago articular ч 50 %" data-valor="2"<?php if ($_6_Cartilago == 'Pérdida parcial o completa del cartílago articular ч 50 %') echo 'selected'; ?>>Pérdida parcial o completa del cartílago articular ч 50 %</option>
                                        <option value="Pérdida parcial o completa de > 50%" data-valor="3"<?php if ($_6_Cartilago == 'Pérdida parcial o completa de > 50%') echo 'selected'; ?>>Pérdida parcial o completa de > 50%</option>
                                        <option value="Destrucción completa" data-valor="4"<?php if ($_6_Cartilago == 'Destrucción completa') echo 'selected'; ?>>Destrucción completa</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="id_Hueso">
                                    <strong style="font-size: 14px;">Hueso</strong>
                                    <select name="Hueso" id="Hueso" class="form-control" style="font-size: 14px;">
                                        <option value="Sin registro"<?php if ($_6_Hueso == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                        <option value="Normal" data-valor="0"<?php if ($_6_Hueso == 'Normal') echo 'selected'; ?>>Normal</option>
                                        <option value="Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares" data-valor="1"<?php if ($_6_Hueso == 'Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares') echo 'selected'; ?>>Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares</option>
                                        <option value="Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares" data-valor="2"<?php if ($_6_Hueso == 'Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares') echo 'selected'; ?>>Alteración del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares</option>
                                    </select>
                                </div>

                                </div> 



                                
                            </div><!--es del div del container de actividad inflamatoria-->
                            </div><!--<div class="col-md-12">-->
                        </div>
                    </div>


                    <div class="col-md-12"><br>
                        <div class="input-group mb-3">
                            <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HEADUS12" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">12 meses</a>
                            <input type="text" class="form-control" id="USG_12" name ="USG_12" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?php echo $USG_12meses; ?>">
                        </div>
                    </div>


                    <div class="collapse" id="HEADUS12">
                        <div class="card card-body">
                            <div class="col-md-12">
                            
                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Actividad Inflamatoria</p>
                                </div>


                                <div class="container">
                                    <div class="row">
                        
                           
                                        <div class="col-md-12">
                                            <strong style="font-size: 14px;">Actividad Inflamatoria</strong>
                                            <select name="actividad_inflamatoria12" id="actividad_inflamatoria12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_12_actividad_inflamatoria == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Derrame Sinovitis"<?php if ($_12_actividad_inflamatoria == 'Derrame Sinovitis') echo 'selected'; ?>>Derrame / Sinovitis</option>
                                                <option value="Hipertrofia sinovial"<?php if ($_12_actividad_inflamatoria == 'Hipertrofia sinovial') echo 'selected'; ?>>Hipertrofia Sinovial</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" id="id_derrame_sinovitis12">
                                            <strong style="font-size: 14px;">Escala de Derrame / Sinovitis</strong>
                                            <select name="derrame_sinovitis12" id="derrame_sinovitis12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_12_derrame_sinovitis == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Moderado" data-valor="1"<?php if ($_12_derrame_sinovitis == 'Moderado') echo 'selected'; ?>>Moderado</option>
                                                <option value="Severo" data-valor="2"<?php if ($_12_derrame_sinovitis == 'Severo') echo 'selected'; ?>>Severo</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" id="id_hipertrofia_sinovial12">
                                            <strong style="font-size: 14px;">Escala de Hipertrofia Sinovial</strong>
                                            <select name="hipertrofia_sinovial12" id="hipertrofia_sinovial12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_12_hipertrofia_sinovial == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Moderado" data-valor="1"<?php if ($_12_hipertrofia_sinovial == 'Moderado') echo 'selected'; ?>>Moderado</option>
                                                <option value="Severo" data-valor="2"<?php if ($_12_hipertrofia_sinovial == 'Severo') echo 'selected'; ?>>Severo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                        <p>Daño Osteocondral</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6" id="id_Cartilago">
                                            <strong style="font-size: 14px;">Cartilago</strong>
                                            <select name="Cartilago12" id="Cartilago12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_12_Cartilago == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Normal" data-valor="0"<?php if ($_12_Cartilago == 'Normal') echo 'selected'; ?>>Normal</option>
                                                <option value="Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular" data-valor="1"<?php if ($_12_Cartilago == 'Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular') echo 'selected'; ?>>Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular</option>
                                                <option value="Pérdida parcial o completa del cartílago articular ч 50 %" data-valor="2"<?php if ($_12_Cartilago == 'Pérdida parcial o completa del cartílago articular ч 50 %') echo 'selected'; ?>>Pérdida parcial o completa del cartílago articular ч 50 %</option>
                                                <option value="Pérdida parcial o completa de > 50%" data-valor="3"<?php if ($_12_Cartilago == 'Pérdida parcial o completa de > 50%') echo 'selected'; ?>>Pérdida parcial o completa de > 50%</option>
                                                <option value="Destrucción completa" data-valor="4"<?php if ($_12_Cartilago == 'Destrucción completa') echo 'selected'; ?>>Destrucción completa</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6" id="id_Hueso">
                                            <strong style="font-size: 14px;">Hueso</strong>
                                            <select name="Hueso12" id="Hueso12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_12_Hueso == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Normal" data-valor="0"<?php if ($_12_Hueso == 'Normal') echo 'selected'; ?>>Normal</option>
                                                <option value="Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares" data-valor="1"<?php if ($_12_Hueso == 'Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares') echo 'selected'; ?>>Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares</option>
                                                <option value="Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares" data-valor="2"<?php if ($_12_Hueso == 'Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares') echo 'selected'; ?>>Alteración del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares</option>
                                            </select>
                                        </div>
                                    </div>                         
                                </div><!--es del div del container de actividad inflamatoria-->
                            </div><!--<div class="col-md-12">-->

                        </div>
                    </div>


                    <div class="col-md-12"><br>
                        <div class="input-group mb-3">
                            <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HEADUS24" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">24 meses</a>
                            <input type="text" class="form-control" id="USG_24" name="USG_24" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?php echo $USG_24meses; ?>">
                        </div>
                    </div>


                    <div class="collapse" id="HEADUS24">
                        <div class="card card-body">
                            <div class="col-md-12">
                            
                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Actividad Inflamatoria</p>
                                </div>


                                <div class="container">
                                    <div class="row">
                        
                           
                                        <div class="col-md-12">
                                            <strong style="font-size: 14px;">Actividad Inflamatoria</strong>
                                            <select name="actividad_inflamatoria24" id="actividad_inflamatoria24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_24_actividad_inflamatoria == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Derrame Sinovitis"<?php if ($_24_actividad_inflamatoria == 'Derrame Sinovitis') echo 'selected'; ?>>Derrame / Sinovitis</option>
                                                <option value="Hipertrofia sinovial"<?php if ($_24_actividad_inflamatoria == 'Hipertrofia sinovial') echo 'selected'; ?>>Hipertrofia Sinovial</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" id="id_derrame_sinovitis24">
                                            <strong style="font-size: 14px;">Escala de Derrame / Sinovitis</strong>
                                            <select name="derrame_sinovitis24" id="derrame_sinovitis24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_24_derrame_sinovitis == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Moderado" data-valor="1"<?php if ($_24_derrame_sinovitis == 'Moderado') echo 'selected'; ?>>Moderado</option>
                                                <option value="Severo" data-valor="2"<?php if ($_24_derrame_sinovitis == 'Severo') echo 'selected'; ?>>Severo</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" id="id_hipertrofia_sinovial24">
                                            <strong style="font-size: 14px;">Escala de Hipertrofia Sinovial</strong>
                                            <select name="hipertrofia_sinovial24" id="hipertrofia_sinovial24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_24_hipertrofia_sinovial == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Moderado" data-valor="1"<?php if ($_24_hipertrofia_sinovial == 'Moderado') echo 'selected'; ?>>Moderado</option>
                                                <option value="Severo" data-valor="2"<?php if ($_24_hipertrofia_sinovial == 'Severo') echo 'selected'; ?>>Severo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                        <p>Daño Osteocondral</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6" id="id_Cartilago">
                                            <strong style="font-size: 14px;">Cartilago</strong>
                                            <select name="Cartilago24" id="Cartilago24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_24_Cartilago == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Normal" data-valor="0"<?php if ($_24_Cartilago == 'Normal') echo 'selected'; ?>>Normal</option>
                                                <option value="Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular" data-valor="1"<?php if ($_24_Cartilago == 'Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular') echo 'selected'; ?>>Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular</option>
                                                <option value="Pérdida parcial o completa del cartílago articular ч 50 %" data-valor="2"<?php if ($_24_Cartilago == 'Pérdida parcial o completa del cartílago articular ч 50 %') echo 'selected'; ?>>Pérdida parcial o completa del cartílago articular ч 50 %</option>
                                                <option value="Pérdida parcial o completa de > 50%" data-valor="3"<?php if ($_24_Cartilago == 'Pérdida parcial o completa de > 50%') echo 'selected'; ?>>Pérdida parcial o completa de > 50%</option>
                                                <option value="Destrucción completa" data-valor="4"<?php if ($_24_Cartilago == 'Destrucción completa') echo 'selected'; ?>>Destrucción completa</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6" id="id_Hueso">
                                            <strong style="font-size: 14px;">Hueso</strong>
                                            <select name="Hueso24" id="Hueso24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro"<?php if ($_24_Hueso == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                                <option value="Normal" data-valor="0"<?php if ($_24_Hueso == 'Normal') echo 'selected'; ?>>Normal</option>
                                                <option value="Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares" data-valor="1"<?php if ($_24_Hueso == 'Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares') echo 'selected'; ?>>Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares</option>
                                                <option value="Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares" data-valor="2"<?php if ($_24_Hueso == 'Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares') echo 'selected'; ?>>Alteración del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares</option>
                                            </select>
                                        </div>
                                    </div>                         
                                </div><!--es del div del container de actividad inflamatoria-->
                            </div><!--<div class="col-md-12">-->
                        </div>
                    </div>

                </div> <!-- div de los tres collapse de USG-->

                        <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                            <h6>Tratamiento</h6>
                        </div>

                <div class="row">

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Tipo de Tratamiento</strong>
                            <select name="tipo_tratamiento" id="tipo_tratamiento" class="form-control" style="font-size: 14px;" onchange="mostrarProfilaxis()">
                                <option value="Sin registro"<?php if ($tipo_tratamiento == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                <option value="Tratamiento a demanda"<?php if ($tipo_tratamiento == 'Tratamiento a demanda') echo 'selected'; ?>>Tratamiento a demanda</option>
                                <option value="Profilaxis"<?php if ($tipo_tratamiento == 'Profilaxis') echo 'selected'; ?>>Profilaxis</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="id_Profilaxis">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Profilaxis</strong>
                            <select name="Profilaxis" id="Profilaxis" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro"<?php if ($profilaxis == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                <option value="Oculto"<?php if ($profilaxis == 'Oculto') echo 'selected'; ?>>Oculto</option>
                                <option value="Primaria"<?php if ($profilaxis == 'Primaria') echo 'selected'; ?>>Primaria</option>
                                <option value="Secundaria"<?php if ($profilaxis == 'Secundaria') echo 'selected'; ?>>Secundaria</option>
                                <option value="Terciaria"<?php if ($profilaxis == 'Terciaria') echo 'selected'; ?>>Terciaria</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Profilaxis con Emicizumab</strong>
                            <select name="Profilaxis_Emicizumab" id="Profilaxis_Emicizumab" class="form-control" style="font-size: 14px;" onchange="mostrarCampos()">
                                <option value="Sin registro"<?php if ($Profilaxis_Emicizumab == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                <option value="No"<?php if ($Profilaxis_Emicizumab == 'No') echo 'selected'; ?>>No</option>
                                <option value="Si"<?php if ($Profilaxis_Emicizumab == 'Si') echo 'selected'; ?>>Sí</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="camposProfilaxis">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Tipo Profilaxis con Emicizumab</strong>
                            <select name="tipo_Profilaxis" id="tipo_Profilaxis" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro"<?php if ($tipo_Profilaxis == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                <option value="Primaria"<?php if ($tipo_Profilaxis == 'Primaria') echo 'selected'; ?>>Primaria</option>
                                <option value="Secundaria"<?php if ($tipo_Profilaxis == 'Secundaria') echo 'selected'; ?>>Secundaria</option>
                                <option value="Terciaria"<?php if ($tipo_Profilaxis == 'Terciaria') echo 'selected'; ?>>Terciaria</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="id_dosis_tipoProfilaxis">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Dosis(mg) / Kg</strong>
                            <input type="number" class="form-control" id="dosis_tipoProfilaxis" name="dosis_tipoProfilaxis" placeholder="Dosis(mg)/ Kg" style="font-size: 14px;" required value="<?php echo $dosis_tipoProfilaxis; ?>">
                        </div>

                        <div class="col-md-3" id="id_totalui">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Total de mg por Dosis</strong>
                            <input type="number" class="form-control" id="totalui" name="totalui" placeholder="Total de UI por Dosis" style="font-size: 14px;" required value="<?php echo $totalui; ?>">
                        </div>

                        <div class="col-md-3" id="id_nodosisporsemana">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">N° de Dosis por semana</strong>
                            <input type="number" class="form-control" id="nodosisporsemana" name="nodosisporsemana" placeholder="Total de UI por Dosis" style="font-size: 14px;" required value="<?php echo $nodosisporsemana; ?>">
                        </div>

                        <div class="col-md-3" id="id_entrega">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Entrega</strong>
                            <select name="entrega" id="entrega" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro"<?php if ($entrega == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                <option value="Domiciliaria"<?php if ($entrega == 'Domiciliaria') echo 'selected'; ?>>Domiciliaria</option>
                                <option value="Hospitalaria"<?php if ($entrega == 'Hospitalaria') echo 'selected'; ?>>Hospitalaria</option>
                            </select>
                        </div>
                    
                    </div> <!-- div del row tratamiento -->




                
                        <div id="terapiaReemplazo" style="background-color:  rgb(240, 128, 128, 0.65); color: aliceblue; text-align: center; margin-top: 20px; font-size:14px;">
                            <p>Terapia de remplazo (Inhibidor < 5UB)</p>
                        </div> 
                    
                    

                        <div class="row"  id="camposTerapiaReemplazo">
                            <div class="row">
                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Dosis / Kg</strong>
                                    <input type="number" class="form-control" id="dosis" name="dosis" placeholder="Dosis / Kg" style="font-size: 14px;" required value="<?php echo $dosis; ?>">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por Dosis</strong>
                                    <input type="number" class="form-control" id="totalui_total" name="totalui_total" placeholder="Total de UI por Dosis" style="font-size: 14px;" required value="<?php echo $totalui_total; ?>">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">N° de Dosis por semana</strong>
                                    <input type="number" class="form-control" id="nodosisporsemana_2" name="nodosisporsemana_2" placeholder="Total de UI por Dosis" style="font-size: 14px;" required value="<?php echo $nodosisporsemana; ?>">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por semana</strong>
                                    <input type="number" class="form-control" id="totaluisemana" name="totaluisemana" placeholder="Total de UI por semana" style="font-size: 14px;" required value="<?php echo $totaluisemana; ?>">
                                </div>
                            </div>
                        </div> <!-- row de terapia de remplazo-->

                        
                        




                        <div id="agenteDesvio" style="background-color: rgb(240, 128, 128, 0.65); color: aliceblue; text-align: center; margin-top: 20px; font-size:14px;">
                            <p>Agente de Desvío (Inhibidor > 5UB)</p>
                        </div>

                        <div class="row" id="camposAgenteDesvio">
                            <div class="row">
                                <div class="col-md-3" id="id_agente_desvio">
                                    <strong style="font-size: 14px;">Dosis / Kg</strong>
                                    <input type="number" class="form-control" id="disis_desvio" name="dosis_desvio" placeholder="Dosis / Kg" style="font-size: 14px;" required value="<?php echo $dosis_desvio; ?>">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por Dosis</strong>
                                    <input type="number" class="form-control" id="totalui_desvio" name="totalui_desvio" placeholder="Total de UI por Dosis" style="font-size: 14px;" required value="<?php echo $totalui_desvio; ?>">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">N° de Dosis por semana</strong>
                                    <input type="number" class="form-control" id="nodosisporsemana_desvio" name="nodosisporsemana_desvio" placeholder="Total de UI por Dosis" style="font-size: 14px;" required value="<?php echo $nodosisporsemana_desvio; ?>">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por semana</strong>
                                    <input type="number" class="form-control" id="totalui_desvio_semana" name="totalui_desvio_semana" placeholder="Total de UI por semana" style="font-size: 14px;" required value="<?php echo $totalui_desvio_semana; ?>">
                                </div>
                            </div>
                        </div> <!-- es el row de terapia de reemplazo-->




                    <div style="background-color: rgb(240, 128, 128, 0.65); color: aliceblue; text-align: center; margin-top: 20px; font-size:14px;">
                            <p>Tratamiento mensual</p>
                    </div>

                    

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>Recombinante</p>
                    </div>


                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Turoctocog Alfa 250 UI</strong>
                            <input type="number" class="form-control" id="turo_250" name="turo_250" style="font-size: 14px;" required value="<?php echo $turo_250; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Turoctocog Alfa 500 UI</strong>
                            <input type="number" class="form-control" id="turo_500" name="turo_500" style="font-size: 14px;" required value="<?php echo $turo_500; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Turoctocog Alfa 1000 UI</strong>
                            <input type="number" class="form-control" id="turo_1000" name="turo_1000" style="font-size: 14px;" required value="<?php echo $turo_1000; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Octocog Alfa 250 UI</strong>
                            <input type="number" class="form-control" id="octo_250" name="octo_250" style="font-size: 14px;" required value="<?php echo $octo_250; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Octocog Alfa 500 UI</strong>
                            <input type="number" class="form-control" id="octo_500" name="octo_500" style="font-size: 14px;" required value="<?php echo $octo_500; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Simoctocog Alfa 250 UI</strong>
                            <input type="number" class="form-control" id="simo_250" name="simo_250" style="font-size: 14px;" required value="<?php echo $simo_250; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Simoctocog Alfa 500 UI</strong>
                            <input type="number" class="form-control" id="simo_500" name="simo_500" style="font-size: 14px;" required value="<?php echo $simo_500; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Simoctocog Alfa 1000 UI</strong>
                            <input type="number" class="form-control" id="simo_1000" name="simo_1000" style="font-size: 14px;" required value="<?php echo $simo_1000; ?>">
                        </div>

                    </div> <!-- es el div del row de recombinante -->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>Plasmático</p>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII 250 UI</strong>
                            <input type="number" class="form-control" id="factorVIII_250" name="factorVIII_250"  style="font-size: 14px;" required value="<?php echo $factorVIII_250; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII 500 UI</strong>
                            <input type="number" class="form-control" id="factorVIII_500" name="factorVIII_500"  style="font-size: 14px;" required value="<?php echo $factorVIII_500; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII + vW 500 UI</strong>
                            <input type="number" class="form-control" id="factorVIIIvW_500" name="factorVIIIvW_500"  style="font-size: 14px;" required value="<?php echo $factorVIIIvW_500; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII + vW 1000 UI</strong>
                            <input type="number" class="form-control" id="factorVIIIvW_1000" name="factorVIIIvW_1000" style="font-size: 14px;" required value="<?php echo $factorVIIIvW_1000; ?>">
                        </div>

                    </div> <!-- div del row de Plasmático-->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>FIX</p>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 500 UI</strong>
                            <input type="number" class="form-control" id="factorIX_500" name="factorIX_500"  style="font-size: 14px;" required value="<?php echo $factorIX_500; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 500 UI</strong>
                            <input type="number" class="form-control" id="factorIX_500_2" name="factorIX_500_2"  style="font-size: 14px;" required value="<?php echo $factorIX_500_2; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 600 UI</strong>
                            <input type="number" class="form-control" id="factorIX_600" name="factorIX_600"  style="font-size: 14px;" required value="<?php echo $factorIX_600; ?>">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 1000 UI</strong>
                            <input type="number" class="form-control" id="factorIX_1000" name="factorIX_1000" style="font-size: 14px;" required value="<?php echo $factorIX_1000; ?>">
                        </div>

                    </div> <!-- div del row de FIX-->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>Emicizumab</p>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <strong style="font-size: 14px;">Emicizumab</strong>
                            <select name="entrega_Emi" id="entrega_Emi" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro"<?php if ($entrega_2 == 'Sin registro') echo 'selected'; ?>>Seleccione...</option>
                                <option value="30 MG"<?php if ($entrega_2 == '30 MG') echo 'selected'; ?>>30 MG</option>
                                <option value="60 MG"<?php if ($entrega_2 == '60 MG') echo 'selected'; ?>>60 MG</option>
                                <option value="105 MG"<?php if ($entrega_2 == '105 MG') echo 'selected'; ?>>105 MG</option>
                                <option value="150 MG"<?php if ($entrega_2 == '150 MG') echo 'selected'; ?>>150 MG</option>
                            </select>
                        </div>
                    </div> <!-- div del row de Emicizumab-->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>F Von Willebrand</p>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">F VW 500 UI</strong>
                            <input type="number" class="form-control" id="fVW_500" name="fVW_500"  style="font-size: 14px;" required value="<?php echo $fVW_500; ?>">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">F VW 1000 UI</strong>
                            <input type="number" class="form-control" id="fvw_100" name="fvw_100"  style="font-size: 14px;" required value="<?php echo $fvw_100; ?>">
                        </div>

                    </div> <!-- div del row de FIX-->

                

            </div> <!-- div del row-->
            <br><br>

            
            <button type="button" class="btn btn-danger">Cancelar</button>
            <button type="sumbit" class="btn btn-success">Guardar</button>
        </div><!--div que cierra el class container-->

        
    </form>


    <br><br><br><footer>Hospital Regional de Alta Especialidad de Ixtapaluca <br>
            Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="module">
            import { editForm } from "./js/update.js";
            editForm();
    </script>
    
</body>
</html>