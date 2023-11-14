<?php
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
    
    <title>Clínica Integral de Labio y Paladar Hendido - CLILPH</title>
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
        <form action=""></form>
            <h5>Clínica Integral de Labio y Paladar Hendido - CLILPH</h5>
            <div style="padding: 20px; text-align: right;">
                <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                    <i class="bi bi-power"></i> 
                </button>
            </div>
        </header>
    <br>
    <form id="editarLph_form"  method="POST" >
    <div class="container">
                    <!-- Header inicial Datos del Paciente -->
            <div style="background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>DATOS GENERALES</h6> 
            </div> 
       
            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">
    
<!-- Inicia formulario de Datos del Paciente-->

                <div class="col-md-3" id="id_curp"> 
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" value="<?php echo $curp; ?>" placeholder="CURP" style="font-size: 13px;">
                </div>

                <div class="col-md-3" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="<?php echo $nombre_paciente; ?>" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px; background">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" value="<?php echo $fecha_nacimiento; ?>" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                </div>
                <div class="col-md-3">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" value="<?php echo $edad; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" value="<?php echo $sexo; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-3" id="id_estado">
                    <strong style="font-size: 14px;">Estado de Origen</strong>
                    <input id="estado_Origen" name="Estado" onblur="calcularEdad();" type="text" class="control form-control" value="<?php echo $estado; ?>" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3" id="id_municipio">
                    <strong style="font-size: 14px;"> Alcaldía o Municipio</strong>
                    <input type="text" class="form-control" id="id_municipio" name="municipio" value="<?php echo $municipio; ?>" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Referenciado</strong>
                    <select name="referencia" id="refererencia" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($referencia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="Si"<?php if ($referencia == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($referencia == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-3">
                            <strong style="font-size: 14px;">Número Telefónico</strong>
                            <input type="tel" id="telefono" name="telefono" class="control form-control" value="<?php echo $num_telefonico; ?>" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" minlength="10" maxlength="12">
                        </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Escolaridad</strong>
                        <select name="Escolaridad" id="Escolaridad" class="form-control" style="font-size: 13px;">
                                <option value=""<?php if ($escolaridad == '') echo 'selected'; ?>>Seleccione</option>
                                <option value="Primaria Completa"<?php if ($escolaridad == 'Primaria Completa') echo 'selected'; ?>>Primaria Completa</option>
                                <option value="Primaria Incompleta"<?php if ($escolaridad == 'Primaria Incompleta') echo 'selected'; ?>>Primaria Incompleta</option>
                                <option value="Secundaria Completa"<?php if ($escolaridad == 'Secundaria Completa') echo 'selected'; ?>>Secundaria Completa</option>
                                <option value="Secundaria Incompleta"<?php if ($escolaridad == 'Secundaria Incompleta') echo 'selected'; ?>>Secundaria Incompleta</option>
                                <option value="Preparatoria Completa"<?php if ($escolaridad == 'Preparatoria Completa') echo 'selected'; ?>>Preparatoria Completa</option>
                                <option value="Preparatoria Incompleta"<?php if ($escolaridad == 'Preparatoria Incompleta') echo 'selected'; ?>>Preparatoria Incompleta</option>
                                <option value ="Licenciatura Completa"<?php if ($escolaridad == 'Licenciatura Completa') echo 'selected'; ?>>Licenciatura Completa </otion>
                                <option value="Licenciatura Incompleta"<?php if ($escolaridad == 'Licenciatura Incompleta') echo 'selected'; ?>>Licenciatura Incompleta</option>
                                <option value="Doctorado Completo"<?php if ($escolaridad == 'Doctorado Completo') echo 'selected'; ?>>Doctorado Completo</option>
                                <option value="Doctorado Incompleto"<?php if ($escolaridad == 'Doctorado Incompleto') echo 'selected'; ?>>Doctorado Incompleto</option>
                                <option value="Sin Registro"<?php if ($escolaridad == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Estado Civil</strong>
                    <select name="Estadocivil" id="Estadocivil" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($estado_civil == 'Sin Registro') echo 'selected'; ?>>Seleccione</option>
                        <option value="Soltera"<?php if ($estado_civil == 'Soltera') echo 'selected'; ?>>Soltero</option>
                        <option value="Casada"<?php if ($estado_civil == 'Casada') echo 'selected'; ?>>Casado</option>
                        <option value="Viuda"<?php if ($estado_civil == 'Viuda') echo 'selected'; ?>>Viudo</option>
                        <option value="Divorciada"<?php if ($estado_civil == 'Divorciada') echo 'selected'; ?>>Divorciado</option>
                        <option value="Concubinato"<?php if ($estado_civil == 'Concubinato') echo 'selected'; ?>>Concubinato</option>
                        <option value="Separada"<?php if ($estado_civil == 'Separada') echo 'selected'; ?>>Separado</option>
                        <option value=""<?php if ($estado_civil == '') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla" name="talla" value="<?php echo $talla; ?>" placeholder="Ejemplo: 1.50" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso" value="<?php echo $peso; ?>" name="peso" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc" value="<?php echo $imc; ?>" name="imc" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion" value="<?php echo $resultado_imc; ?>" name="imcdescripcion" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Circunferencia Abdominal</strong>
                    <input type="number" step="any" class="form-control" id="circunferencia" value="<?php echo $circunferencia_abdominal; ?>" name="circunferencia" style="font-size: 13px;" required>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Derechohabiencia</strong>
                    <select name="derechohabiencia" id="derechohabiencia" class="form-control" style="font-size: 14px;" onchange="mostrarCampos()">
                        <option value="Sin registro"<?php if ($derecho_habiencia == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Si"<?php if ($derecho_habiencia == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No"<?php if ($derecho_habiencia == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-3" id="estudio_socioeconomico_field" >
                    <strong style="font-size: 12px;">Estudio Socioeconómico</strong>
                    <select name="estudio_socioeconomico" id="estudio_socioeconomico" class="form-control" style="font-size: 14px;" onchange="mostrarNivel()">
                        <option value="Sin registro"<?php if ($socioeconomico == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Si"<?php if ($socioeconomico == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="No"<?php if ($socioeconomico == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-3" id="nivel_field" >
                    <strong style="font-size: 14px;">Nivel</strong>
                    <select name="nivel" id="nivel" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($nivel_economico == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Nx"<?php if ($nivel_economico == 'Nx') echo 'selected'; ?>>Nx</option>
                        <option value="N1"<?php if ($nivel_economico == 'N1') echo 'selected'; ?>>N1</option>
                        <option value="N2"<?php if ($nivel_economico == 'N2') echo 'selected'; ?>>N2</option>
                        <option value="N3"<?php if ($nivel_economico == 'N3') echo 'selected'; ?>>N3</option>
                        <option value="N4"<?php if ($nivel_economico == 'N4') echo 'selected'; ?>>N4</option>
                        <option value="N5"<?php if ($nivel_economico == 'N5') echo 'selected'; ?>>N5</option>
                        <option value="N6"<?php if ($nivel_economico == 'N6') echo 'selected'; ?>>N6</option>
                        <option value="N7"<?php if ($nivel_economico == 'N7') echo 'selected'; ?>>N7</option>
                    </select>
                </div>


<!-- ***********************************ANTECEDENTES HEREDOFAMILIARES*********************************** -->
                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        ANTECEDENTES HEREDOFAMILIARES</h5>
                    </div>
                </div>
                <!--===============AH: Fisura Labiopalatina=======================-->

                <div class="col-md-12" id="ah_lph" >
                <strong style="font-size: 14px;">Fisura Labiopalatina </strong>
                    <select name="fisura" id="fisura" class="form-control" style="font-size: 14px;" >
                        <option value="Negado"<?php if ($fisura == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($fisura == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="Desconoce"<?php if ($fisura == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div> 

                <div class ="col-md-12">

                <div class= "row">
               
                       <div class="col-md-3" id="PadreLPH">
                    <span style="font-size: 14px;">Padre</span>
                    <select name="LPH_Padre" id="LPH_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($padre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($padre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS MADRE  LPH=======================-->
                    <div class="col-md-3" id="MadreLPH" >
                        <span style="font-size: 14px;" >Madre</span>
                            <select name="LPH_Madre" id="LPH_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($madre == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($madre == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO LPH=======================-->
                    
                    <div class="col-md-3" id="Abuelo_MaternoLPH" >
                        <span style="font-size: 14px;">Abuelo Materno</span>
                            <select name="AbueloM_LPH" id="AbueloM_LPH" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($abuelo_materno == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($abuelo_materno == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA LPH  =======================-->      
                    <div class="col-md-3" id="Abuela_MaternaLPH" >
                        <span style="font-size: 14px;" >Abuela Materna</span>
                            <select name="AbuelaM_LPH" id="AbuelaM_LPH" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($abuela_materna == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($abuela_materna == 'Si') echo 'selected'; ?>>Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO LPH =======================-->
                    <div class="col-md-3" id="Abuelo_PaternoLPH" >
                        <span style="font-size: 14px;" >Abuelo Paterno</span>
                        <select name="AbueloP_LPH" id="AbueloP_LPH" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($abuelo_paterno == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($abuelo_paterno == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>  
                    
        <!--===============sI SELECCIONAMOS ABUELA PATERNA LPH =======================-->
                    <div class="col-md-3" id="Abuela_PaternaHAS" >
                        <span style="font-size: 14px;" >Abuela Paterna</span>
                            <select name="AbuelaP_LPH" id="AbuelaP_LPH" class="form-control" style="font-size: 14px;">
                                    <option value="Negado"<?php if ($abuela_paterna == 'Negado') echo 'selected'; ?>>Negado</option>
                                    <option value="Si"<?php if ($abuela_paterna == 'Si') echo 'selected'; ?>>Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA  LPH =======================-->

                    <div class="col-md-3" id="HermanaLPH" >
                    <span style="font-size: 13px;">Número de Hermanas</span>
                            <input type="number" step="any" class="form-control" id="num_hermanasLPH" name="num_hermanas" value="<?php echo $no_hermanas; ?>" required style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO  LPH =======================-->
                        
                    <div class="col-md-3" id="HermanoLPH">
                        <span style="font-size: 13px;" >Número de Hermanos</span>
                        <input type="number" step="any" class="form-control" id="num_hermanosLPH" name="num_hermanos" value="<?php echo $no_hermanos; ?>" required style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV LPH ================--><br> 

                </div> <!--=========== DIV DEL ROW DE LPH ================-->
        
        
<!-- *********************************** Inicia ANTECEDENTES PERINATALES*********************************** -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                       ANTECEDENTES PERINATALES</h5>
                    </div>
                </div>

                <div class="col-md-4">
                            <strong style="font-size: 14px;">Semanas Gestación</strong>
                            <input type="number" min="0" max="40" class="form-control" id="semanasgestacion" name="semanasgestacion" value="<?php echo $sem_gestacion; ?>" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Complicaciones en Embarazo</strong>
                            <select name="complicacionesembarazo" id="complicacionesembarazo"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($comp_embarazo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($comp_embarazo == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($comp_embarazo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Complicaciones en Parto</strong>
                            <select name="complicacionesparto" id="complicacionesparto" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($comp_parto == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($comp_parto == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($comp_parto == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Tabaquismo Durante Embarazo</strong>
                            <select name="tabaquismo" id="tabaquismo" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($tabaquismo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($tabaquismo == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($tabaquismo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;" >Alcoholismo Durante Embarazo</strong>
                            <select name="alcoholismo" style="font-size: 14px;" id="alcoholismo" class="form-control">
                                <option value="Negado"<?php if ($alcoholismo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($alcoholismo == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($alcoholismo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
                    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Malformaciones Congénitas</strong>
                            <select name="malformaciones" style="font-size: 14px;"  id="malformaciones" class="form-control">
                                <option value="Negado"<?php if ($malformaciones == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($malformaciones == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($malformaciones == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="idxfisura">
                            <strong style="font-size: 14px;">Dx de Fisura Durante Embarazo</strong>
                            <select name="dxfisuraembarazo" style="font-size: 14px;" id="dxfisuraembarazo" class="form-control">
                                <option value="Negado"<?php if ($fisura_embarazo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($fisura_embarazo == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($fisura_embarazo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

<!-- *********************************** Inicia Sección de Antecedentes Personales PatológicOS*********************************** -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                ANTECEDENTES PERSONALES PATOLÓGICOS</h5>
                    </div>
                </div>

              <div class="col-md-12">
                <strong style="font-size: 14px;">Alergicos</strong>
                <select name="alergicos" style="font-size: 14px;" id="alergicos" class="form-control">
                    <option value="Negado"<?php if ($alergias == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($alergias == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($alergias == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-12" id="medicamentos" >

                <div class= "row">
               
                       <div class="col-md-3" id="analgesicos_medicamentos">
                    <span style="font-size: 14px;">Analgesicos</span>
                    <select name="Analgesicos" id="Analgesicos" class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($analgesicos == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($analgesicos == 'Si') echo 'selected'; ?>>Si</option>
                    </select>
                    </div>
        <!--===============sI SELECCIONAMOS   Anestesicos=======================-->
                    <div class="col-md-3" id="anestesicos_medicamentos" >
                        <span style="font-size: 14px;" >Anestesicos</span>
                        <select name="Anestesicos" id="Anestesicos" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($anastesicos == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($anastesicos == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>


        <!--===============sI SELECCIONAMOS  Antibioticos  =======================-->      
                    <div class="col-md-3" id="antibioticos_medicamentos" >
                        <span style="font-size: 14px;" >Antibioticos</span>
                        <select name="Antibioticos" id="Antibioticos" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($antibioticos == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($antibioticos == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>
        <!--===============sI SELECCIONAMOS  Antiinflamatorios =======================-->
                    <div class="col-md-3" id="antiinflamatorios_medicamentos" >
                        <span style="font-size: 14px;" >Antiinflamatorios</span>
                        <select name="Antiinflamatorios" id="Antiinflamatorios" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($antiinflamatorios == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($antiinflamatorios == 'Si') echo 'selected'; ?>>Si</option>
                        </select>
                    </div>  
                    

                    </div><!--===========DIV Alergias ================--><br> 

                </div> <!--=========== DIV DEL ROW DE Alergias ================-->
        

<!-- *********************************** Inicia Sección de  ATENCIÓN CLINICA*********************************** -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 15px;">
                ATENCIÓN CLÍNICA</h5>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133,0.5);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                ETAPA DE ATENCIÓN CLÍNICA</h5>
                    </div>
                </div>
                <div class="col-md-6" id="idfechaingreso">
                                <strong style="font-size: 14px;">Fecha Ingreso Clínica </strong>
                                <input type="date" id="fechaingreso" style="font-size: 14px;" name="fechaingreso" value="<?php echo $fecha_ingreso; ?>" class="form-control" max="<?= date("Y-m-d") ?>">
                            </div>
<!-- *********************************** ETAPA DE ATENCIÓN ********************************** -->
                            
                <div class=" col-md-6">
                    <strong style="font-size: 14px;">Etapa de Atención</strong>
                    <select name="etapaatencion" style="font-size: 14px;"  id="etapaatencion" class="form-control">
                        <option value="Sin registro"<?php if ($etapa_atencion == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Etapa A de 0 a 24 meses"<?php if ($etapa_atencion == 'Etapa A de 0 a 24 meses') echo 'selected'; ?>>Etapa A - 0 a 24 meses</option>
                        <option value="Etapa B de 3 a 8 años"<?php if ($etapa_atencion == 'Etapa B de 3 a 8 años') echo 'selected'; ?>>Etapa B - 3 a 8 años</option>
                        <option value="Etapa C de 9 a 15 años"<?php if ($etapa_atencion == 'Etapa C de 9 a 15 años') echo 'selected'; ?>>Etapa C - 9 a 15 años</option>
                        <option value="Etapa D de 16 a 22 años"<?php if ($etapa_atencion == 'Etapa D de 16 a 22 años') echo 'selected'; ?>>Etapa D - 16 a 22 años</option>
                    </select>
                </div> <br>

<!-- Etapa A de 0 a 24 meses-->

        <div class="col-md-12" id="idmsvaloracionesmedicasa">
    <div class="form-header">
        <h5 class="form-title"
            style="text-align: center;
            background-color: rgb(3, 168, 195);
            color: aliceblue;
            margin-top: 5px;
            font-size: 15px;">
            Etapa A: Valoraciones Médicas
        </h5>
    </div>
            <div class="row">

                    <div class="col-md-3">
                            <strong style="font-size: 14px;">Audiologia</strong>
                            <select name="Audiologia" id="Audiologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_audiologia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_audiologia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_audiologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                            <select name="Maxilofacial" id="Cirugia_Maxilofacial_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_maxilofacial == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_maxilofacial == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_maxilofacial == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                            <select name="Reconstructiva" id="Cirugia_Reconstructiva_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_reconstructiva == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_reconstructiva == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_reconstructiva == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
               
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Neonatología</strong>
                            <select name="Neonatologia" id="Neonatologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_neonatologia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_neonatologia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_neonatologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Ortodoncia</strong>
                            <select name="Ortodoncia" id="Ortodoncia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_ortodoncia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_ortodoncia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_ortodoncia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
        
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                            <select name="Otorrinolaringologia_A" id="Otorrinolaringologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_otorrino == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_otorrino == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_otorrino == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                            <select name="Protesis_MaxilofacialA" id="Protesis_Maxilofacial_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_protesis_maxilo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_protesis_maxilo == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_protesis_maxilo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Psicologia</strong>
                            <select name="Psicologia_A" id="Psicologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_psicologia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_psicologia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_psicologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Rehabilitación</strong>
                            <select name="Rehabilitacion_A" id="Rehabilitacion_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_rehabilitacion == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_rehabilitacion == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_rehabilitacion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                            <select name="Lenguaje_A" id="Terapia_De_Lenguaje_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_terapia_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_terapia_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_terapia_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
       
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Fisica</strong>
                            <select name="Fisica_A" id="Terapia_Fisica_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_terapia_fisica == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_terapia_fisica == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_terapia_fisica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                            <select name="Ocupacional_A" id="Terapia_Ocupacional_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($a_terapia_ocupacional == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($a_terapia_ocupacional == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($a_terapia_ocupacional == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
                </div>  <br> <!-- Etapa A de 0 a 24 meses  Valoraciones Medicas-->
                </div> <!-- Etapa A de 0 a 24 meses Valoraciones Medicas-->


                <!-- Etapa A de 0 a 24 meses Etapa A: Tipo Tratamiento Médico-->

                <div class="col-md-12" id="idmstratamientomedicoa" >
                <div class="form-header">
                    <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(3, 168, 195);
                        color: aliceblue;
                        margin-top: 5px;
                        font-size: 15px;">
                        Etapa A : Tipo de Tratamiento Médico
                    </h5>
    </div>

            <div class="row">

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Atención Psicomotriz</strong>
                        <select name="Atencion_Psicomotriz_A" id="Atencion_Psicomotriz_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_psicomotriz == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_psicomotriz == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_psicomotriz == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Curso De Inducción</strong>
                        <select name="Curso_De_Induccion_A" id="Curso_De_Induccion_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_curso_induccion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_curso_induccion == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_curso_induccion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Curso Lactancia Materna</strong>
                        <select name="Curso_Lactancia_Materna_A" id="Curso_Lactancia_Materna_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_lactancia_materna == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_lactancia_materna == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_lactancia_materna == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
        
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                        <select name="Estudios_Audiologicos_A" id="Estudios_Audiologicos_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_estudios_audio == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_estudios_audio == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_estudios_audio == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Terapia Para Padres</strong>
                        <select name="Terapia_Para_Padres_A" id="Terapia_Para_Padres_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_terapia_padres == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_terapia_padres == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_terapia_padres == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Valoración Inicial De Lenguaje</strong>
                        <select name="Valoracion_Inicial_De_Lenguaje_A" id="Valoracion_Inicial_De_Lenguaje_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_valoracion_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_valoracion_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_valoracion_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

            </div>  <!-- Etapa A de 0 a 24 meses  TIPO DE TRATAMIENTO MÉDICO--> <br>
            </div> <!-- Etapa A de 0 a 24 meses TIPO DE TRATAMIENTO MÉDICOs-->


        <!-- Etapa A de 0 a 24 meses Etapa A: Tratamiento Quirurgico-->

                <div class="col-md-12" id="idmstipotratamientoqxa" >
                       <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa A: Tratamiento Quirúrgico
                            </h5>
                        </div>

                    <div class="row">

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Ortopedia Pre-quirúrgica</strong>
                        <select name="Ortopedia_PreQuirurgica_XA" id="Ortopedia_PreQuirurgica_XA"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_ortopedia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_ortopedia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_ortopedia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Palatoplastia</strong>
                        <select name="Palatoplastia_XA" id="Palatoplastia_XA"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_palatoplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_palatoplastia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_palatoplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Queiloplastias</strong>
                        <select name="Queiloplastias_XA" id="Queiloplastias_XA"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($a_queiloplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($a_queiloplastia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($a_queiloplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

            </div> <br>  <!-- Etapa A de 0 a 24 meses  ESTATUS-->

            <div class="row">
            <div class="col-md-6" id="idestatusa" >
                    <strong style="font-size: 14px;">Etapa A: Estatus</strong>
                    <select name="EstatusQxa" id="EstatusQxa" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($a_estapa_estatus == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Realizado"<?php if ($a_estapa_estatus == 'Realizado') echo 'selected'; ?>>Realizado</option>
                        <option value="En Curso"<?php if ($a_estapa_estatus == 'En Curso') echo 'selected'; ?>>En Curso</option>
                        <option value="No Requiere"<?php if ($a_estapa_estatus == 'No Requiere') echo 'selected'; ?>>No Requiere</option>
                    </select>
                </div>

                 <!--Etapa A: Estatus-->

            <!--Etapa A: Fecha de Cirugia-->

                    <div class="col-md-6" id="idfechacirugiaa" >
                        <strong  style="font-size: 14px;">Etapa A: Fecha de Cirugia</strong>
                        <input type="date" id="fechacirugiaa" name="fechacirugiaa" value="<?php echo $a_fecha_cirugia; ?>" class="form-control">
                    </div>


                    </div><!--row de ESTATUS Y HORA DE CIRUGIA-->
            </div> <!-- Etapa A de 0 a 24 meses Tratamiento Quirurgico-->



                    
                                    <!--INICIA ETAPA B -->

<!-- Etapa B de 0 a 24 meses-->

            <div class ="col-md-12"  id="idmsvaloracionesmedicasb" name="idmsvaloracionesmedicasb" >

                <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa B: Valoraciones Medicas
                            </h5>
                        </div>

                <div class="row">

                    <div class="col-md-3">
                            <strong style="font-size: 14px;">Audiologia</strong>
                            <select name="Audiologia_B" id="Audiologia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_audiologia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_audiologia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_audiologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                            <select name="Cirugoa_Maxilofacial_B" id="Cirugoa_Maxilofacial_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_maxilofacial == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_maxilofacial == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_maxilofacial == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                            <select name="Cirugia_Reconstructiva_B" id="Cirugia_Reconstructiva_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_reconstructiva == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_reconstructiva == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_reconstructiva == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
               
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Nutricion</strong>
                            <select name="Nutricion_B" id="Nutricion_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_nutricion == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_nutricion == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_nutricion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Ortodoncia</strong>
                            <select name="Ortodoncia_B" id="Ortodoncia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_ortodoncia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_ortodoncia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_ortodoncia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
        
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                            <select name="Otorrinolaringologia_B" id="Otorrinolaringologia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_otorrino == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_otorrino == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_otorrino == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Pediatría</strong>
                            <select name="Pediatria_B" id="Pediatria_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_pediatria == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_pediatria == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_pediatria == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Psicologia</strong>
                            <select name="Psicologia_B" id="Psicologia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_psicologia == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_psicologia == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_psicologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                            <select name="Protesis_Maxilofacial_B" id="Protesis_Maxilofacial_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_protesis_maxilo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_protesis_maxilo == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_protesis_maxilo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Rehabilitación</strong>
                            <select name="Rehabilitacion_B" id="Rehabilitacion_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_rehabilitacion == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_rehabilitacion == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_rehabilitacion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>
       
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                            <select name="Terapia_De_Lenguaje_B" id="Terapia_De_Lenguaje_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_terapia_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_terapia_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_terapia_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Fisica</strong>
                            <select name="Terapia_Fisica_B" id="Terapia_Fisica_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_terapia_fisica == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_terapia_fisica == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_terapia_fisica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                            <select name="Terapia_Ocupacional_B" id="Terapia_Ocupacional_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($b_terapia_ocupacional == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Si"<?php if ($b_terapia_ocupacional == 'Si') echo 'selected'; ?>>Sí</option>
                                <option value="Desconoce"<?php if ($b_terapia_ocupacional == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                            </select>
                        </div>

                </div> <br> <!-- Etapa B de 0 a 24 meses  Valoraciones Medicas-->
                </div> <!-- Etapa B de 0 a 24 meses Valoraciones Medicas-->

        <!--ETAPA B : TIPO DE TRATAMIENTO MÉDICO-->

            
                <div class ="col-md-12"  id="idmstratamientomedicob"  >
              
                        <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa B: Tipo Tratamiento Médico
                            </h5>
                        </div>

                
                <div class="row">

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Atención Psicologica</strong>
                        <select name="Atencion_Psicologica_B" id="Atencion_Psicologica_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($b_atencion_psicologia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($b_atencion_psicologia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($b_atencion_psicologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Curso De Inducción</strong>
                        <select name="Curso_De_Induccion_B" id="Curso_De_Induccion_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($b_curso_induccion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($b_curso_induccion == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($b_curso_induccion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                        <select name="Estudios_Audiologicos_B" id="Estudios_Audiologicos_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($b_estudios_audiologicos == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($b_estudios_audiologicos == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($b_estudios_audiologicos == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
           
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Valoración Patrón De Cierre Velar</strong>
                        <select name="Valoracion_Patron_De_Cierre_Velar_B" id="Valoracion_Patron_De_Cierre_Velar_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($b_cierre_velar == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($b_cierre_velar == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($b_cierre_velar == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Valoración Del Lenguaje</strong>
                        <select name="Valoracion_Del_Lenguaje_B" id="Valoracion_Del_Lenguaje_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($b_valoracion_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($b_valoracion_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($b_valoracion_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

            </div>  <br> <!-- ROW DE ETAPA B : TIPO DE TRATAMIENTO MÉDICO-->

            </div>  <!--ETAPA B : TIPO DE TRATAMIENTO MÉDICO-->


        <!--Etapa B: Tipo Tratamiento Quirurgico-->


        <div class ="col-md-12"  id="idmstipotratamientoqxb"  >
            
                        <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                             Etapa B: Tipo Tratamiento Quirurgico
                            </h5>
                        </div>
       
            <div class="row">

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Injerto Óseo</strong>
                    <select name="Injerto_Oseo_XB" id="Injerto_Oseo_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($b_inserto_oseo == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($b_inserto_oseo == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($b_inserto_oseo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Ortopedia Maxilar</strong>
                    <select name="Ortopedia_Maxilar_XB" id="Ortopedia_Maxilar_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($b_ortopedia_maxilar == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($b_ortopedia_maxilar == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($b_ortopedia_maxilar == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Palatoplastia</strong>
                    <select name="Palatoplastia_XB" id="Palatoplastia_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($b_palatoplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($b_palatoplastia == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($b_palatoplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Queiloplastia</strong>
                    <select name="Queiloplastias_XB" id="Queiloplastias_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($b_queiloplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($b_queiloplastia == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($b_queiloplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                </div> <br>   <!--Etapa B: Tipo Tratamiento Quirurgico-->

                 <!--Etapa B: Estatus-->

                 <div class="row">
            <div class="col-md-6" id="idestatusb" >
                    <strong style="font-size: 14px;">Etapa B: Estatus</strong>
                        <select name="EstatusQxb" id="EstatusQxb" class="form-control" style="font-size: 14px;">
                            <option value="Sin registro"<?php if ($b_etapa_estatus == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                            <option value="Realizado"<?php if ($b_etapa_estatus == 'Realizado') echo 'selected'; ?>>Realizado</option>
                            <option value="En Curso"<?php if ($b_etapa_estatus == 'En Curso') echo 'selected'; ?>>En Curso</option>
                            <option value="No Requiere"<?php if ($b_etapa_estatus == 'No Requiere') echo 'selected'; ?>>No Requiere</option>
                        </select>
                    </div>

                    
            <!--Etapa B: Fecha de Cirugia-->

                <div class="col-md-6" id="id_datecirugiab" >
                    <strong style="font-size: 14px;">Etapa B: Fecha de Cirugia</strong>
                    <input type="date" id="idfechacirugiab" name="fechacirugiab" value="<?php echo $b_fecha_cirugia; ?>" class="form-control">
                </div>

            </div> <!--DIV DEL ROW DE ESTATUS Y FECHA DE CIRUGIA-->


        </div>    <!--Etapa B: Tipo Tratamiento Quirurgico-->

                        <!-- EMPIEZA ETAPA C-->

<!-- Etapa C-->

        <div class ="col-md-12"  id="idmsvaloracionesmedicasc" name="idmsvaloracionesmedicasc" >
             
                    <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                              Etapa C: Valoraciones Medicas
                            </h5>
                        </div>

            <div class="row">

                <div class="col-md-3">
                        <strong style="font-size: 14px;">Audiologia</strong>
                        <select name="Audiologia_C" id="Audiologia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_audiologia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_audiologia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_audiologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                        <select name="Cirugia_Maxilofacial_C" id="Cirugia_Maxilofacial_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_maxilofacial == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_maxilofacial == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_maxilofacial == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                        <select name="Cirugia_Reconstructiva_C" id="Cirugia_Reconstructiva_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_cirugia_recontructiva == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_cirugia_recontructiva == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_cirugia_recontructiva == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
           
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Nutricion</strong>
                        <select name="Nutricion_C" id="Nutricion_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_nutricion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_nutricion == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_nutricion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Ortodoncia</strong>
                        <select name="Ortodoncia_C" id="Ortodoncia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_ortodoncia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_ortodoncia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_ortodoncia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
    
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                        <select name="Otorrinolaringologia_C" id="Otorrinolaringologia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_otorrino == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_otorrino == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_otorrino == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Pediatría</strong>
                        <select name="Pediatria_C" id="Pediatria_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_otorrino == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_otorrino == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_otorrino == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Psicologia</strong>
                        <select name="Psicologia_C" id="Psicologia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_psicologia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_psicologia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_psicologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                        <select name="Protesis_Maxilofacial_C" id="Protesis_Maxilofacial_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_protesis_maxilo == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_protesis_maxilo == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_protesis_maxilo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Rehabilitación</strong>
                        <select name="Rehabilitacion_C" id="Rehabilitacion_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_rehabilitacion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_rehabilitacion == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_rehabilitacion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
   
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                        <select name="Terapia_De_Lenguaje_C" id="Terapia_De_Lenguaje_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_terapia_leguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_terapia_leguaje == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_terapia_leguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Fisica</strong>
                        <select name="Terapia_Fisica_C" id="Terapia_Fisica_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_terapia_fisica == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_terapia_fisica == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_terapia_fisica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                        <select name="Terapia_Ocupacional_C" id="Terapia_Ocupacional_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($c_terapia_ocupacional == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($c_terapia_ocupacional == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($c_terapia_ocupacional == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

            </div> <br> <!-- Etapa C de 0 a 24 meses  Valoraciones Medicas-->
            </div> <!-- Etapa C de 0 a 24 meses Valoraciones Medicas-->

    <!--ETAPA C : TIPO DE TRATAMIENTO MÉDICO-->

        <div class ="col-md-12"  id="idmstratamientomedicoc"  >
            <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa C: Tipo Tratamiento Médico
                            </h5>
                        </div>
        
            <div class="row">

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Atención Psicologica</strong>
                    <select name="Atencion_Psicologica_C" id="Atencion_Psicologica_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($c_atencion_psicologica == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($c_atencion_psicologica == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($c_atencion_psicologica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Curso De Inducción</strong>
                    <select name="Curso_De_Induccion_C" id="Curso_De_Induccion_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($c_curso_induccion == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($c_curso_induccion == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($c_curso_induccion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                    <select name="Estudios_Audiologicos_C" id="Estudios_Audiologicos_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($c_estudio_audiologicos == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($c_estudio_audiologicos == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($c_estudio_audiologicos == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 14px;">Valoración Patrón De Cierre Velar</strong>
                    <select name="Valoracion_Patron_De_Cierre_Velar_C" id="Valoracion_Patron_De_Cierre_Velar_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($c_cierre_veral == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($c_cierre_veral == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($c_cierre_veral == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Valoración Del Lenguaje</strong>
                    <select name="Valoracion_Del_Lenguaje_C" id="Valoracion_Del_Lenguaje_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($c_valoracion_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($c_valoracion_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($c_valoracion_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

        </div>  <br> <!-- ROW DE ETAPA C : TIPO DE TRATAMIENTO MÉDICO-->

        </div>  <!--ETAPA C : TIPO DE TRATAMIENTO MÉDICO-->


    <!--Etapa C: Tipo Tratamiento Quirurgico-->


    <div class ="col-md-12"  id="idmstipotratamientoqxc"  >

              <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa C: Tipo Tratamiento Quirurgico
                            </h5>
                        </div>

        <div class="row">

            <div class="col-md-4">
                <strong style="font-size: 14px;">Injerto Óseo</strong>
                <select name="Injerto_Oseo_XC" id="Injerto_Oseo_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($c_inserto_oseo == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($c_inserto_oseo == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($c_inserto_oseo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortodoncia</strong>
                <select name="Ortodoncia_XC" id="Ortodoncia_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($c_ortodoncia_tratamiento == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($c_ortodoncia_tratamiento == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($c_ortodoncia_tratamiento == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortopedia Maxilar</strong>
                <select name="Ortopedia_Maxilar_XC" id="Ortopedia_Maxilar_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($c_ortopedia_maxilar == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($c_ortopedia_maxilar == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($c_ortopedia_maxilar == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Otras Plastias</strong>
                <select name="Otras_Plastias_XC" id="Otras_Plastias_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($c_otras_plastias == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($c_otras_plastias == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($c_otras_plastias == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Palatoplastia</strong>
                <select name="Palatoplastia_XC" id="Palatoplastia_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($c_palatoplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($c_palatoplastia == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($c_palatoplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Queiloplastia</strong>
                <select name="Queiloplastia_XC" id="Queiloplastia_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($c_queiloplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($c_queiloplastia == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($c_queiloplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>



            </div>   <br> <!--Etapa C: Tipo Tratamiento Quirurgico-->

                        <!--Etapa C: Estatus-->
    <div class="row">

                <div class="col-md-6" id="idestatusc">
                    <strong style="font-size: 14px;">Etapa C: Estatus</strong>
                    <select name="EstatusQxc" id="EstatusQxc" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro"<?php if ($c_etapa_estatus == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                        <option value="Realizado"<?php if ($c_etapa_estatus == 'Realizado') echo 'selected'; ?>>Realizado</option>
                        <option value="En Curso"<?php if ($c_etapa_estatus == 'En Curso') echo 'selected'; ?>>En Curso</option>
                        <option value="No Requiere"<?php if ($c_etapa_estatus == 'No Requiere') echo 'selected'; ?>>No Requiere</option>
                    </select>
                </div>

                <!--Etapa C: Fecha de Cirugia-->
        <div class="col-md-6" id="id_fechacirugiac" >
                    <strong style="font-size: 14px;">Etapa C: Fecha de Cirugia</strong>
                    <input type="date" id="idfechacirugia_c" name="idfechacirugia_c" value="<?php echo $c_fecha_cirugia; ?>" class="form-control">
                </div>

            </div><!--ROW DE ESTATUS Y FECHA DE CIRUGIA-->


        </div>    <!--Etapa D: Tipo Tratamiento Quirurgico-->

    
        <!-- INICIA ETAPA D-->

            <!-- Etapa D -->

            <div class ="col-md-12"  id="idmsvaloracionesmedicasd" name="idmsvaloracionesmedicasd" >
            
                <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa D: Valoraciones Medicas
                            </h5>
                        </div>

                <div class="row">

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Audiologia</strong>
                        <select name="Audiologia_D" id="Audiologia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_audiologia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_audiologia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_audiologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                        <select name="Cirugia_Maxilofacial_D" id="Cirugia_Maxilofacial_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_maxilofacial == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_maxilofacial == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_maxilofacial == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                        <select name="Cirugia_Reconstructiva_D" id="Cirugia_Reconstructiva_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_cirugia_recontructiva == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_cirugia_recontructiva == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_cirugia_recontructiva == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
           
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Nutricion</strong>
                        <select name="Nutricion_D" id="Nutricion_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_nutricion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_nutricion == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_nutricion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Ortodoncia</strong>
                        <select name="Ortodoncia_D" id="Ortodoncia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_ortodoncia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_ortodoncia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_ortodoncia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
    
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                        <select name="Otorrinolaringologia_D" id="Otorrinolaringologia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_otorrino == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_otorrino == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_otorrino == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Pediatría</strong>
                        <select name="Pediatria_D" id="Pediatria_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_pediatria == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_pediatria == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_pediatria == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Psicologia</strong>
                        <select name="Psicologia_D" id="Psicologia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_psicologia == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_psicologia == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_psicologia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                        <select name="Protesis_Maxilofacial_D" id="Protesis_Maxilofacial_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_protesis_maxilo == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_protesis_maxilo == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_protesis_maxilo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Rehabilitación</strong>
                        <select name="Rehabilitacion_D" id="Rehabilitacion_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_rehabilitacion == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_rehabilitacion == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_rehabilitacion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>
   
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                        <select name="Terapia_De_Lenguaje_D" id="Terapia_De_Lenguaje_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_terapia_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_terapia_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_terapia_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Fisica</strong>
                        <select name="Terapia_Fisica_D" id="Terapia_Fisica_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_terapia_fisica == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_terapia_fisica == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_terapia_fisica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                        <select name="Terapia_Ocupacional_D" id="Terapia_Ocupacional_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($d_terapia_ocupacional == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Si"<?php if ($d_terapia_ocupacional == 'Si') echo 'selected'; ?>>Sí</option>
                            <option value="Desconoce"<?php if ($d_terapia_ocupacional == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                        </select>
                    </div>

            </div> <br>  <!-- Etapa D   Valoraciones Medicas-->
            </div> <!-- Etapa D  Valoraciones Medicas-->


    <!--ETAPA D : TIPO DE TRATAMIENTO MÉDICO-->

            <div class ="col-md-12"  id="idmstratamientomedicod"  >
        
                    <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa D: Tipo Tratamiento Médico
                            </h5>
                        </div>

            <div class="row">


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Atención Psicologica</strong>
                    <select name="Atencion_Psicologica_D" id="Atencion_Psicologica_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($d_atencion_psicologica == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($d_atencion_psicologica == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($d_atencion_psicologica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Curso De Inducción</strong>
                    <select name="Curso_De_Induccion_D" id="Curso_De_Induccion_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($d_curso_induccion == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($d_curso_induccion == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($d_curso_induccion == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                    <select name="Estudios_Audiologicos_D" id="Estudios_Audiologicos_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($d_estudios_audiologicos == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($d_estudios_audiologicos == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($d_estudios_audiologicos == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Valoración Del Lenguaje</strong>
                    <select name="Valoracion_Del_Lenguaje_D" id="Valoracion_Del_Lenguaje_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($d_valoracion_lenguaje == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($d_valoracion_lenguaje == 'Si') echo 'selected'; ?>>Sí</option>
                        <option value="Desconoce"<?php if ($d_valoracion_lenguaje == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

        </div> <br> <!-- ROW DE ETAPA D : TIPO DE TRATAMIENTO MÉDICO-->

        </div>  <!--ETAPA D : TIPO DE TRATAMIENTO MÉDICO-->


    <!--Etapa D: Tipo Tratamiento Quirurgico-->

        <div class ="col-md-12"  id="idmstipotratamientoqxd"  >
        
                    <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa D: Tipo Tratamiento Quirurgico
                            </h5>
                        </div>

        <div class="row">

            <div class="col-md-4">
                <strong style="font-size: 13px;">Cirugía  Ortognatica/Distracción Ósea</strong>
                <select name="Cirugia_Ortognatica_Distraccion_Osea_XD" id="Cirugia_Ortognatica_Distraccion_Osea_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_ortagnatica == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_ortagnatica == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_ortagnatica == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

        <div class="col-md-4">
                <strong style="font-size: 14px;">Injerto Óseo</strong>
                <select name="Injerto_Oseo_XD" id="Injerto_Oseo_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_inserto_oseo == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_inserto_oseo == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_inserto_oseo == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortodoncia</strong>
                <select name="Ortodoncia_XD" id="Ortodoncia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_ortodoncia_tratamiento == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_ortodoncia_tratamiento == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_ortodoncia_tratamiento == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortopedia Maxilar</strong>
                <select name="Ortopedia_Maxilar_XD" id="Ortopedia_Maxilar_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_ortopedia_maxilar == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_ortopedia_maxilar == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_ortopedia_maxilar == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Otras Plastias</strong>
                <select name="Otras_Plastias_XD" id="Otras_Plastias_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_otras_plastias == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_otras_plastias == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_otras_plastias == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Palatoplastia</strong>
                <select name="Palatoplastia_XD" id="Palatoplastia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_palatoplastias == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_palatoplastias == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_palatoplastias == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Queiloplastia</strong>
                <select name="Queiloplastia_XD" id="Queiloplastia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_queiloplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_queiloplastia == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_queiloplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Rinoplastia</strong>
                <select name="Rinoplastia_XD" id="Rinoplastia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado"<?php if ($d_rinoplastia == 'Negado') echo 'selected'; ?>>Negado</option>
                    <option value="Si"<?php if ($d_rinoplastia == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="Desconoce"<?php if ($d_rinoplastia == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                </select>
            </div>

            </div> <br>   <!--Etapa D: Tipo Tratamiento Quirurgico-->
            
            <div class="row">
            <!--Etapa D: Estatus-->

                    <div class="col-md-6" id="idestatusd">
                        <strong style="font-size: 14px;">Etapa D: Estatus</strong>
                            <select name="EstatusQxd" id="EstatusQxd" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro"<?php if ($d_etapa_estatus == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                                <option value="Realizado"<?php if ($d_etapa_estatus == 'Realizado') echo 'selected'; ?>>Realizado</option>
                                <option value="En Curso"<?php if ($d_etapa_estatus == 'En Curso') echo 'selected'; ?>>En Curso</option>
                                <option value="No Requiere"<?php if ($d_etapa_estatus == 'No Requiere') echo 'selected'; ?>>No Requiere</option>
                            </select>
                        </div>

        <!--Etapa D: Fecha de Cirugia-->

                <div class="col-md-6" id="id_fechacirugiad" >
                    <strong style="font-size: 14px;">Etapa D: Fecha de Cirugia</strong>
                    <input type="date" id="idfechacirugia_d" name="idfechacirugia_d" value="<?php echo $d_etapa_fecha; ?>" class="form-control">
                </div>

                </div><!--ROW DEL ESTATUS D Y FECHA CIRUGIA -->

            </div>    <!--Etapa D: Tipo Tratamiento Quirurgico-->

            <!-- ***********************************FISURA*********************************** -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        FISURA</h5>
                    </div>
                </div>
                <!--=============== Fisura =======================-->

                <div class="col-md-12">
                    <strong style="font-size: 14px;">Fisura</strong>
                    <select name="fisura_or" id="fisura_or" class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($fisura_or == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Si"<?php if ($fisura_or == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="Desconoce"<?php if ($fisura_or == 'Desconoce') echo 'selected'; ?>>Desconoce</option>
                    </select>
                </div>

                   
                <div class="col-md-12" id="fisura_organo">
                        <strong style="font-size: 14px;">Órgano</strong>
               
                        <div class= "row" >

                       <!--===============LABIO DERECHO=======================-->
                       <div class="col-md-4" id="labio_derecho">
                    <span style="font-size: 14px;">Labio Derecho</span>
                    <select name="labioderecho" id="labioderecho" class="form-control" style="font-size: 14px;">
                        <option value="Negado"<?php if ($labio_dcho == 'Negado') echo 'selected'; ?>>Negado</option>
                        <option value="Completo"<?php if ($labio_dcho == 'Completo') echo 'selected'; ?>>Completo</option>
                        <option value="Incompleto"<?php if ($labio_dcho == 'Incompleto') echo 'selected'; ?>>Incompleto</option>
                        <option value="Sin Fisura"<?php if ($labio_dcho == 'Sin Fisura') echo 'selected'; ?>>Sin Fisura</option>
                        <option value="Submucoso"<?php if ($labio_dcho == 'Submucoso') echo 'selected'; ?>>Submucoso</option>
                    </select>
                    </div>

        <!--===============LABIO IZQUIERO=======================-->
                    <div class="col-md-4" id="labio_izq" >
                        <span style="font-size: 14px;" >Labio Izquierdo</span>
                            <select name="labioizq" id="labioizq" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($labio_izdo == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Completo"<?php if ($labio_izdo == 'Completo') echo 'selected'; ?>>Completo</option>
                                <option value="Incompleto"<?php if ($labio_izdo == 'Incompleto') echo 'selected'; ?>>Incompleto</option>
                                <option value="Sin Fisura"<?php if ($labio_izdo == 'Sin Fisura') echo 'selected'; ?>>Sin Fisura</option>
                                <option value="Submucoso"<?php if ($labio_izdo == 'Submucoso') echo 'selected'; ?>>Submucoso</option>
                            </select>
                    </div>
        <!--===============Alveolo Derecho=======================-->
                    
                    <div class="col-md-4" id="AlveoloDerecho" >
                        <span style="font-size: 14px;">Alveolo Derecho</span>
                            <select name="Alveolo_Derecho" id="Alveolo_Derecho" class="form-control" style="font-size: 14px;">
                                <option value="Negado"<?php if ($alveolo_dcho == 'Negado') echo 'selected'; ?>>Negado</option>
                                <option value="Completo"<?php if ($alveolo_dcho == 'Completo') echo 'selected'; ?>>Completo</option>
                                <option value="Incompleto"<?php if ($alveolo_dcho == 'Incompleto') echo 'selected'; ?>>Incompleto</option>
                                <option value="Sin Fisura"<?php if ($alveolo_dcho == 'Sin Fisura') echo 'selected'; ?>>Sin Fisura</option>
                                <option value="Submucoso"<?php if ($alveolo_dcho == 'Submucoso') echo 'selected'; ?>>Submucoso</option>
                            </select>
                    </div>
        <!--===============Alveolo Izquierdo =======================-->      
                    <div class="col-md-4" id="Alveolo_Izquierdo" >
                        <span style="font-size: 14px;" >Alveolo Izquierdo</span>
                            <select name="AlveoloIzquierdo" id="AbuelaM_LPH" class="form-control" style="font-size: 14px;">
                            <option value="Negado"<?php if ($alveolo_izdo == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Completo"<?php if ($alveolo_izdo == 'Completo') echo 'selected'; ?>>Completo</option>
                            <option value="Incompleto"<?php if ($alveolo_izdo == 'Incompleto') echo 'selected'; ?>>Incompleto</option>
                            <option value="Sin Fisura"<?php if ($alveolo_izdo == 'Sin Fisura') echo 'selected'; ?>>Sin Fisura</option>
                            <option value="Submucoso"<?php if ($alveolo_izdo == 'Submucoso') echo 'selected'; ?>>Submucoso</option>
                        </select>
                    </div>
        <!--===============Paladar Duro=======================-->
                    <div class="col-md-4" id="paladar_duro" >
                        <span style="font-size: 14px;" >Paladar Duro</span>
                        <select name="paladarduro" id="paladarduro" class="form-control" style="font-size: 14px;">
                           <option value="Negado"<?php if ($paladar_duro == 'Negado') echo 'selected'; ?>>Negado</option>
                            <option value="Completo"<?php if ($paladar_duro == 'Completo') echo 'selected'; ?>>Completo</option>
                            <option value="Incompleto"<?php if ($paladar_duro == 'Incompleto') echo 'selected'; ?>>Incompleto</option>
                            <option value="Sin Fisura"<?php if ($paladar_duro == 'Sin Fisura') echo 'selected'; ?>>Sin Fisura</option>
                            <option value="Submucoso"<?php if ($paladar_duro == 'Submucoso') echo 'selected'; ?>>Submucoso</option>
                        </select>
                    </div>  
                    
        <!--===============VELO DE PALADAR=======================-->
                    <div class="col-md-4" id="velo_paladar" >
                        <span style="font-size: 14px;" >Velo De Paladar</span>
                            <select name="velopaladar" id="velopaladar" class="form-control" style="font-size: 14px;">
                                    <option value="Negado"<?php if ($velo_paladar == 'Negado') echo 'selected'; ?>>Negado</option>
                                    <option value="Completo"<?php if ($velo_paladar == 'Completo') echo 'selected'; ?>>Completo</option>
                                    <option value="Incompleto"<?php if ($velo_paladar == 'Incompleto') echo 'selected'; ?>>Incompleto</option>
                                    <option value="Sin Fisura"<?php if ($velo_paladar == 'Sin Fisura') echo 'selected'; ?>>Sin Fisura</option>
                                    <option value="Submucoso"<?php if ($velo_paladar == 'Submucoso') echo 'selected'; ?>>Submucoso</option>
                                </select>
                    </div>

                    </div><!--===========DIV LPH ================--><br> 

                </div> <!--=========== DIV DEL ROW DE LPH ================-->

      
            </div> <!-- <row PRIMERO-->


            <!--=========== Boton de editar ================-->
                <div style="display: flex; justify-content: flex-end; align-items: center;">
                    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
                </div>
                <br>



            </div><!-- CONTAINER-->

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script type="module">
                    import { editForm } from "./js/update.js";
                    editForm();
            </script>
            
    </body>
    </html>