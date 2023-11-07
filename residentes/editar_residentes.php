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
    
    <title>Productividad Residentes Medicina Interna</title>
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
        
            <h5>Productividad Residentes Medicina Interna</h5>
            <div style="padding: 20px; text-align: right;">
                <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                    <i class="bi bi-power"></i> 
                </button>
            </div>
        </header>
    <br>

    <div class="container">
        <form id="editarResidentes_form" method="POST" autocomplete="off">

        <!-- Header inicial Datos del Paciente -->
                <div style="background-color:rgb(101, 184, 190);
                            color: aliceblue;
                            text-align: center;
                            margin-top: 20px;">
                    <h6>Datos Residentes</h6> 
                </div> 
        
            <div class="row">

            <input type="hidden" id="id_residente" name="id_residente" value="<?php echo $id_productividad; ?>">


            <!-- Inicia formulario de Datos del Residente-->


            <div class="col-md-6">
                        <strong style="font-size: 14px; background">Fecha</strong>
                        <input id="fecha" name="fecha" type="date" value="<?php echo $fecha; ?>" class="control form-control" style="font-size: 13px;">
            </div>

            
            <div class="col-md-6">
                        <strong style="font-size: 14px;">Nombre del Residente</strong>
                        <select name="nombre_residentes" id="nombre_residentes" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro"<?php if ($residentes == 'Sin Registro') echo 'selected'; ?>>SELECCIONE</option>
                            <option value="JOSE ROBERTO MARINO SANCHEZ"<?php if ($residentes == 'JOSE ROBERTO MARINO SANCHEZ') echo 'selected'; ?>>JOSE ROBERTO MARINO SANCHEZ</option>
                            <option value="PAULINA ORTEGA ITURBIDE"<?php if ($residentes == 'PAULINA ORTEGA ITURBIDE') echo 'selected'; ?>>PAULINA ORTEGA ITURBIDE</option>
                            <option value="HUGO A. SILGUERO RIVERA"<?php if ($residentes == 'HUGO A. SILGUERO RIVERA') echo 'selected'; ?>>HUGO A. SILGUERO RIVERA</option>
                            <option value="MOHAMAD JAMAL EDDIN"<?php if ($residentes == 'MOHAMAD JAMAL EDDIN') echo 'selected'; ?>>MOHAMAD JAMAL EDDIN</option>
                            <option value="JACOBO U. MERCADO ESTRADA"<?php if ($residentes == 'JACOBO U. MERCADO ESTRADA') echo 'selected'; ?>>JACOBO U. MERCADO ESTRADA</option>
                            <option value="CHRISTIAN MEJIA HERRERA"<?php if ($residentes == 'CHRISTIAN MEJIA HERRERA') echo 'selected'; ?>>CHRISTIAN MEJIA HERRERA</option>
                            <option value="MARIA A. RODRIGUEZ MENDOZA"<?php if ($residentes == 'MARIA A. RODRIGUEZ MENDOZA') echo 'selected'; ?>>MARIA A. RODRIGUEZ MENDOZA</option>
                            <option value="ARIAS HUERTA JENNIFERD"<?php if ($residentes == 'ARIAS HUERTA JENNIFERD') echo 'selected'; ?>>ARIAS HUERTA JENNIFERD</option>
                            <option value="ESPINOZA HERNÁNDEZ VICTOR"<?php if ($residentes == 'ESPINOZA HERNÁNDEZ VICTOR') echo 'selected'; ?>>ESPINOZA HERNÁNDEZ VICTOR</option>
                            <option value="GOMEZ PARDO JOSE"<?php if ($residentes == 'GOMEZ PARDO JOSE') echo 'selected'; ?>>GOMEZ PARDO JOSÉ</option>
                            <option value="LEAL CAMARRILLO ANGELICA"<?php if ($residentes == 'LEAL CAMARRILLO ANGELICA') echo 'selected'; ?>>LEAL CAMARRILLO ANGELICA</option>
                            <option value="MENDOZA VEGA BRENDA"<?php if ($residentes == 'MENDOZA VEGA BRENDA') echo 'selected'; ?>>MENDOZA VEGA BRENDA</option>
                            <option value="SIACHOQUE GOMEZ LEIDY VANESSA"<?php if ($residentes == 'SIACHOQUE GOMEZ LEIDY VANESSA') echo 'selected'; ?>>SIACHOQUE GOMEZ LEIDY VANESSA</option>
                            <option value="ANA LIBERTAD SALAZAR TRAPALA"<?php if ($residentes == 'ANA LIBERTAD SALAZAR TRAPALA') echo 'selected'; ?>>ANA LIBERTAD SALAZAR TRAPALA</option>
                            <option value="EZEQUIEL BETANCOURT URIOSTEGUI"<?php if ($residentes == 'EZEQUIEL BETANCOURT URIOSTEGUI') echo 'selected'; ?>>EZEQUIEL BETANCOURT URIOSTEGUI</option>
                            <option value="SONIA LISSET MANDOUJANO SANCHEZ"<?php if ($residentes == 'SONIA LISSET MANDOUJANO SANCHEZ') echo 'selected'; ?>>SONIA LISSET MANDOUJANO SANCHEZ</option>
                            <option value="VILLEGAS CONTRERAS CRISTIAN RICARDOA"<?php if ($residentes == 'VILLEGAS CONTRERAS CRISTIAN RICARDOA') echo 'selected'; ?>>VILLEGAS CONTRERAS CRISTIAN RICARDO</option>
                            <option value="ANGELICA JOHANA PEREZ HERNANDEZ"<?php if ($residentes == 'ANGELICA JOHANA PEREZ HERNANDEZ') echo 'selected'; ?>>ANGELICA JOHANA PEREZ HERNANDEZ</option>
                            <option value="PAULA DANIELA RODRIGUEZ ARCINIEGAS"<?php if ($residentes == 'PAULA DANIELA RODRIGUEZ ARCINIEGAS') echo 'selected'; ?>>PAULA DANIELA RODRIGUEZ ARCINIEGAS</option>
                            <option value="ARTURO ISRAEL JACINTO TOVAR"<?php if ($residentes == 'ARTURO ISRAEL JACINTO TOVAR') echo 'selected'; ?>>ARTURO ISRAEL JACINTO TOVAR</option>
                            <option value="PAMELA PRISCILA PALACIOS ORTIZ"<?php if ($residentes == 'PAMELA PRISCILA PALACIOS ORTIZ') echo 'selected'; ?>>PAMELA PRISCILA PALACIOS ORTIZ</option>
                            <option value="GERARDO SAAVEDRA JIMENEZ"<?php if ($residentes == 'GERARDO SAAVEDRA JIMENEZ') echo 'selected'; ?>>GERARDO SAAVEDRA JIMENEZ </option>
                            <option value=" "<?php if ($residentes == ' ') echo 'selected'; ?>>OTRO</option>
                        </select>
                    </div>
    <!-- ***********************************PROCEDIMIENTOS*********************************** -->
                    <div class="col-md-12" style= "margin-top:10px;">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(101, 184, 190, 0.5); ;
                            font-weight: bold;
                            color:rgb(18, 18, 18)
                            margin-top:5px;
                            font-size: 14px;">
                            PROCEDIMIENTOS</h5>
                        </div>
                    </div>
                    
            <!-- ***********************************PUNCIÓN LUMBAR*********************************** -->

        
            <div class="col-md-6" id="procedimientos" >
                <strong style="font-size: 14px;">Procedimiento Punción Lumbar</strong>
                <select name="conteo_pl" id="conteo_pl" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($puncionLumbar == 0 ) echo 'selected'; ?>>Seleccione</option>
                    <option value= 1 <?php if ($puncionLumbar == 1 ) echo 'selected'; ?>>Punción Lumbar 1</option>
                    <option value= 2 <?php if ($puncionLumbar == 2 ) echo 'selected'; ?>>Punción Lumbar 2</option>
                    <option value= 3 <?php if ($puncionLumbar == 3 ) echo 'selected'; ?>>Punción Lumbar 3</option>
                </select>
            </div>


            <!-- ***********************************Al SELECCIONAR SI EN PUNCIÓN LUMBAR  Puncion 1*********************************** -->
            
            <div class="col-md-12" id="pl_puncionlumbar1" >
                <div class="form-header">
                    <h5 class="form-title"
                    style="text-align: center;
                    background-color:rgb(114, 80, 190); 
                    color: aliceblue;
                    margin-top:5px;
                    font-size: 13px;">
                    Punción Lumbar 1</h5>
                </div>
                
                <div class="row"> <!-- *************ROW DE PUNCIÓN LUMBAR 1 *********************************** -->
                    
                <div class="col-md-3" id="pl_lumbar1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_1" id="intento_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pl_intento1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($pl_intento1 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($pl_intento1 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
                </div> 

                <div class="col-md-3" id="com_puncionlumbar1">
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_1" id="complicacion_1" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($pl_comp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="si"<?php if ($pl_comp1 == 'si') echo 'selected'; ?>>Si</option>
                        <option value="no"<?php if ($pl_comp1 == 'no') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="col-md-3" id="tipo_puncionlumbar1" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_1" id="tipocomplicacion_1" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtros()">
                        <option value="Seleccione"<?php if ($pl_TpoComp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Cefalea"<?php if ($pl_TpoComp1 == 'Cefalea') echo 'selected'; ?>>Cefalea</option>
                        <option value="Dolor Transitorio Radicular"<?php if ($pl_TpoComp1 == 'Dolor Transitorio Radicular') echo 'selected'; ?>>Dolor Transitorio Radicular</option>
                        <option value="Hematoma Subdural"<?php if ($pl_TpoComp1 == 'Hematoma Subdural') echo 'selected'; ?>>Hematoma Subdural</option>
                        <option value="Meningitis"<?php if ($pl_TpoComp1 == 'Meningitis') echo 'selected'; ?>>Meningitis</option>
                        <option value="Lesión Neural"<?php if ($pl_TpoComp1 == 'Lesión Neural') echo 'selected'; ?>>Lesión Neural</option>
                        <option value="otros"<?php if ($pl_TpoComp1 == 'otros') echo 'selected'; ?>>Otros</option>
                    </select>
                </div>

            <div class="col-md-3" id="otros_1" name="otros_1" >
                <span style="font-size: 14px;">Otros</span>
                <input id="pl_otros_1" name="pl_otros_1" type="text" value="<?php echo $pl_otros1; ?>" class="form-control" style="font-size: 13px;" >
            </div>

            </div><!-- *************ROW DE PUNCIÓN LUMBAR 1 *********************************** -->
        </div><!-- *************ROW el Div PUNCIÓN LUMBAR 1 *********************************** -->
                
    <!-- ***********************************PUNCION LUMBAR 2 *********************************** -->

        <div class="col-md-12" id="pl_lumbar2" >
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(149, 121, 205);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Punción Lumbar 2</h5>
                    </div>

        <div class="row">
        
            <div class="col-md-3" id="pl_lumbar2">
                <span style="font-size: 14px;">Intento</span>
                <select name="intento_2" id="intento_2" class="form-control" style="font-size: 14px;" >
                    <option value="Seleccione"<?php if ($pl_intento2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                    <option value="Exitoso"<?php if ($pl_intento2 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                    <option value="Fallido"<?php if ($pl_intento2 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                </select>
            </div>
            
            <div class="col-md-3" id="com_puncionlumbar2" >
                <span style="font-size: 14px;">Complicaciones</span>
                <select name="complicacion_2" id="complicacion_2" class="form-control" style="font-size: 14px;" >
                    <option value="Seleccione"<?php if ($pl_comp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                    <option value="si"<?php if ($pl_comp2 == 'si') echo 'selected'; ?>>Si</option>
                    <option value="no"<?php if ($pl_comp2 == 'no') echo 'selected'; ?>>No</option>
                </select>
            </div>
            
            <div class="col-md-3" id="tipo_puncionlumbar_2"  >
                <span style="font-size: 14px;">Tipo de Complicaciones</span>
                <select name="tipocomplicacion_2" id="tipocomplicacion_2" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtros2()">
                    <option value="Seleccione"<?php if ($pl_TpoComp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                    <option value="Cefalea"<?php if ($pl_TpoComp2 == 'Cefalea') echo 'selected'; ?>>Cefalea</option>
                    <option value="Dolor Transitorio Radicular"<?php if ($pl_TpoComp2 == 'Dolor Transitorio Radicular') echo 'selected'; ?>>Dolor Transitorio Radicular</option>
                    <option value="Hematoma Subdural"<?php if ($pl_TpoComp2 == 'Hematoma Subdural') echo 'selected'; ?>>Hematoma Subdural</option>
                    <option value="Meningitis"<?php if ($pl_TpoComp2 == 'Meningitis') echo 'selected'; ?>>Meningitis</option>
                    <option value="Lesión Neural"<?php if ($pl_TpoComp2 == 'Lesión Neural') echo 'selected'; ?>>Lesión Neural</option>
                    <option value="otros"<?php if ($pl_TpoComp2 == 'otros') echo 'selected'; ?>>Otros</option>
                </select>
            </div>
            
            <div class="col-md-3" id="otros_2" name="otros_2" >
                <span style="font-size: 14px;">Otros</span>
                <input id="pl_otros_2" name="pl_otros_2" type="text" value="<?php echo $pl_otros2; ?>" class="form-control" style="font-size: 13px;" >
            </div>

            </div><!-- *************ROW DE PUNCIÓN LUMBAR 2 *********************************** -->
        </div><!-- *************ROW DEl DIVLUMBAR 2 *********************************** -->


    <!-- ***********************************PUNCION LUMBAR 3 *********************************** -->

            <div class="col-md-12" id="pl_lumbar3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Punción Lumbar 3</h5>
                        </div>
            <div class="row">

            <div class="col-md-3" id="pl_lumbar3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_3" id="intento_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pl_intento3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($pl_intento3 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($pl_intento3 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
                </div> 
        

            <div class="col-md-3" id="com_puncionlumbar3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_3" id="complicacion_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pl_comp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($pl_comp3 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($pl_comp3 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipo_puncionlumbar_3"  >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_3" id="tipocomplicacion_3" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtros3()" >
                            <option value="Seleccione"<?php if ($pl_TpoComp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Cefalea"<?php if ($pl_TpoComp3 == 'Cefalea') echo 'selected'; ?>>Cefalea</option>
                            <option value="Dolor Transitorio Radicular"<?php if ($pl_TpoComp3 == 'Dolor Transitorio Radicular') echo 'selected'; ?>>Dolor Transitorio Radicular</option>
                            <option value="Hematoma Subdural"<?php if ($pl_TpoComp3 == 'Hematoma Subdural') echo 'selected'; ?>>Hematoma Subdural</option>
                            <option value="Meningitis"<?php if ($pl_TpoComp3 == 'Meningitis') echo 'selected'; ?>>Meningitis</option>
                            <option value="Lesión Neural"<?php if ($pl_TpoComp3 == 'Lesión Neural') echo 'selected'; ?>>Lesión Neural</option>
                            <option value="otros"<?php if ($pl_TpoComp3 == 'otros') echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 

            <div class="col-md-3" id="otros_3" name="otros_3">
                        <span style="font-size: 14px;">Otros</span >
                        <input id="pl_otros_3" name="pl_otros_3" type="text" value="<?php echo $pl_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                    </div>

                </div> <br>
                <!-- *************ROW DE PUNCIÓN LUMBAR 3 *********************************** -->
            </div><!-- *************ROW DEL Div LUMBAR 3 *********************************** -->

            <!-- ***********************************INTUBACIÓN*********************************** -->
            
            <!-- **********Linea de separación ********************* -->

            <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            color: rgb(18, 18, 18);
                            margin-top:8px;
                            font-size: 13px;">
                            INTUBACIÓN</h5>
                        </div>
                    </div>

            <div class="col-md-6" id="pro_intubacion" >
                <strong style="font-size: 14px;">Procedimiento Intubación </strong>
                <select name="conteo_intubacion" id="conteo_intubacion" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($intubacion == 0 ) echo 'selected'; ?>>Seleccione</option>
                    <option value= 1 <?php if ($intubacion == 1 ) echo 'selected'; ?>>Intubación 1</option>
                    <option value= 2 <?php if ($intubacion == 2 ) echo 'selected'; ?>>Intubación 2</option>
                    <option value= 3 <?php if ($intubacion == 3 ) echo 'selected'; ?>>Intubación 3</option>
                </select>
            </div>
    <!-- **********************************INTUBACIÓN 1*********************************** -->
            <div class="col-md-12" id="pl_intubacion1" >
                <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Intubación 1</h5>
                </div>

        <div class="row">

            <div class="col-md-3" id="si_intubacion" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_intubacion1" id="intento_intubacion1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($ib_intento1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($ib_intento1 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($ib_intento1 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div> 

            <div class="col-md-3" id="com_intubacion1">
                <span style="font-size: 14px;">Complicaciones</span>
                <select name="complicacion_intubacion_1" id="complicacion_intubacion_1" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione"<?php if ($ib_comp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                    <option value="si"<?php if ($ib_comp1 == 'si') echo 'selected'; ?>>Si</option>
                    <option value="no"<?php if ($ib_comp1 == 'no') echo 'selected'; ?>>No</option>
                </select>
            </div>

            <div class="col-md-3" id="tipocomplicacion_intubacion11">
                <span style="font-size: 14px;">Tipo de Complicaciones</span>
                <select name="tipocomplicacion_intubacion1" id="tipocomplicacion_intubacion1" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtrosintu1()">
                    <option value="Seleccione"<?php if ($ib_TpoComp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                    <option value="Broncoaspiración"<?php if ($ib_TpoComp1 == 'Broncoaspiración') echo 'selected'; ?>>Broncoaspiración</option>
                    <option value="Ruptura de Tráquea"<?php if ($ib_TpoComp1 == 'Ruptura de Tráquea') echo 'selected'; ?>>Ruptura de Tráquea</option>
                    <option value="Traumatismo Dental"<?php if ($ib_TpoComp1 == 'Traumatismo Dental') echo 'selected'; ?>>Traumatismo Dental</option>
                    <option value="Edema Glótico"<?php if ($ib_TpoComp1 == 'Edema Glótico') echo 'selected'; ?>>Edema Glótico</option>
                    <option value="Lesión de Cuerdas Vocales"<?php if ($ib_TpoComp1 == 'Lesión de Cuerdas Vocales') echo 'selected'; ?>>Lesión de Cuerdas Vocales</option>
                    <option value="Otros"<?php if ($ib_TpoComp1 == 'Otros') echo 'selected'; ?>>Otros</option>
                </select>
            </div>

                <div class="col-md-3" id="intubacion_otros" >
                    <span style="font-size: 14px;">Otros</span>
                    <input id="intub_otros_1" name="intub_otros_1" type="text" value="<?php echo $ib_otros1; ?>" class="form-control" style="font-size: 13px;" >
                </div>
                </div> 
            </div>


                <!-- **********************************INTUBACIÓN 2 *********************************** -->
                    <div class="col-md-12" id="pl_intubacion2">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Intubación 2</h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="si_intubacion2">
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_intubacion2" id="intento_intubacion2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($ib_intento2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($ib_intento2 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($ib_intento2 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
                </div> 

            <div class="col-md-3" id="com_intubacion2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_intubacion_2" id="complicacion_intubacion_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($ib_comp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($ib_comp2 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($ib_comp2 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 
            <div class="col-md-3" id="tipocomplicacion_intubacion22">
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_intubacion2" id="tipocomplicacion_intubacion2" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtrosintu2()">
                            <option value="Seleccione"<?php if ($ib_TpoComp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Broncoaspiración"<?php if ($ib_TpoComp2 == 'Broncoaspiración') echo 'selected'; ?>>Broncoaspiración</option>
                            <option value="Ruptura de Tráquea"<?php if ($ib_TpoComp2 == 'Ruptura de Tráquea') echo 'selected'; ?>>Ruptura de Tráquea</option>
                            <option value="Traumatismo Dental"<?php if ($ib_TpoComp2 == 'Traumatismo Dental') echo 'selected'; ?>>Traumatismo Dental</option>
                            <option value="Edema Glótico"<?php if ($ib_TpoComp2 == 'Edema Glótico') echo 'selected'; ?>>Edema Glótico</option>
                            <option value="Lesión de Cuerdas Vocales"<?php if ($ib_TpoComp2 == 'Lesión de Cuerdas Vocales') echo 'selected'; ?>>Lesión de Cuerdas Vocales</option>
                            <option value="Otros"<?php if ($ib_TpoComp2 == 'Otros') echo 'selected'; ?>>Otros</option>
                        </select>
                </div> 
            
            <div class="col-md-3" id="intubacion_otros2" name="intubacion_otros2">
                        <span style="font-size: 14px;">Otros</span>
                        <input id="intub_otros_2" name="intub_otros_2" type="text" value="<?php echo $ib_otros2; ?>" class="form-control" style="font-size: 13px;" >
                </div>

                </div>
            </div>

                <!-- **********************************INTUBACIÓN 3 *********************************** -->
                <div class="col-md-12" id="pl_intubacion3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Intubación 3</h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="si_intubacion" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_intubacion3" id="intento_intubacion3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($ib_intento3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($ib_intento3 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($ib_intento3 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div> 

            <div class="col-md-3" id="complicaciones_intubacion3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_intubacion_3" id="complicacion_intubacion_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($ib_comp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($ib_comp3 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($ib_comp3 == 'no') echo 'selected'; ?>>No</option>
                        </select>
                </div> 

            <div class="col-md-3" id="tipocomplicacion_intubacion33">
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_intubacion3" id="tipocomplicacion_intubacion3" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtrosintu3()">
                            <option value="Seleccione"<?php if ($ib_TpoComp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Broncoaspiración"<?php if ($ib_TpoComp3 == 'Broncoaspiración') echo 'selected'; ?>>Broncoaspiración</option>
                            <option value="Ruptura de Tráquea"<?php if ($ib_TpoComp3 == 'Ruptura de Tráquea') echo 'selected'; ?>>Ruptura de Tráquea</option>
                            <option value="Traumatismo Dental"<?php if ($ib_TpoComp3 == 'Traumatismo Dental') echo 'selected'; ?>>Traumatismo Dental</option>
                            <option value="Edema Glótico"<?php if ($ib_TpoComp3 == 'Edema Glótico') echo 'selected'; ?>>Edema Glótico</option>
                            <option value="Lesión de Cuerdas Vocales"<?php if ($ib_TpoComp3 == 'Lesión de Cuerdas Vocales') echo 'selected'; ?>>Lesión de Cuerdas Vocales</option>
                            <option value="Otros"<?php if ($ib_TpoComp3 == 'Otros') echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
            
                    <div class="col-md-3"id="intubacion_otros3" name="intubacion_otros3" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="intub_otros_3" name="intub_otros_3" type="text" value="<?php echo $ib_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                    </div>
                </div> <br>
            
            </div>

    <!-- **********Linea de separación PARA CVC  ********************* -->
                <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            color: rgb(18, 18, 18)
                            margin-top:8px;
                            font-size: 13px;">
                            CVC</h5>
                        </div>
                    </div>
            <!-- ***********************************CVC********************************** -->

                <div class="col-md-6" id="num_cvc" >
                    <strong style="font-size: 14px;">Procedimiento CVC</strong>
                    <select name="conteo_cvc" id="conteo_cvc" class="form-control" style="font-size: 14px;">
                        <option value= 0 <?php if ($cvc == 0 ) echo 'selected'; ?>>Seleccione</option>
                        <option value= 1 <?php if ($cvc == 1 ) echo 'selected'; ?>>CVC 1</option>
                        <option value= 2 <?php if ($cvc == 2 ) echo 'selected'; ?>>CVC 2</option>
                        <option value= 3 <?php if ($cvc == 3 ) echo 'selected'; ?>>CVC 3</option>
                    </select>
                </div>


    <!-- ***********************************CVC 1 ********************************** -->

    <!-- Contenedor para CVC 1 con estilo personalizado -->
                
            <div class="col-md-12" id="cvc1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            CVC 1 </h5>
                        </div>
                    
        <div class="row">


            <div class="col-md-3" id="tipo_cvc">
                <strong style="font-size: 14px;">Tipo de CVC </strong>
                <select name="tipocvc" id="tipocvc" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione"<?php if ($cv_TpoCVC1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Tipó de CVC -->
                    <option value="MAHURKAR"<?php if ($cv_TpoCVC1 == 'MAHURKAR') echo 'selected'; ?>>MAHURKAR</option>
                    <option value="NIAGARA"<?php if ($cv_TpoCVC1 == 'NIAGARA') echo 'selected'; ?>>NIAGARA</option>
                    <option value="CATÉTER VENOSO CENTRAL"<?php if ($cv_TpoCVC1 == 'CATÉTER VENOSO CENTRAL') echo 'selected'; ?>>CATÉTER VENOSO CENTRAL</option>
                </select>
            </div>

            <div class="col-md-3" id="intento_cvc1" >
                        <span style="font-size: 14px;">Sitio Anatomico</span>
                        <select name="sitio_anatomico_1" id="sitio_anatomico_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_Anatomia1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Subclavio"<?php if ($cv_Anatomia1 == 'Subclavio') echo 'selected'; ?>>Subclavio</option>
                            <option value="Yugular"<?php if ($cv_Anatomia1 == 'Yugular') echo 'selected'; ?>>Yugular</option>
                            <option value="Femoral"<?php if ($cv_Anatomia1 == 'Femoral') echo 'selected'; ?>>Femoral</option>
                        </select>
            </div>

            <div class="col-md-3" id="intento_cvc1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_cvc_1" id="intento_cvc_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_intento1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($cv_intento1 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($cv_intento1 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>

                
            <div class="col-md-3" id="complicaciones_cvc1">
                <span style="font-size: 14px;">Complicaciones</span>
                <select name="complicacion_cvc1" id="complicacion_cvc1" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione"<?php if ($cv_comp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                    <option value="si"<?php if ($cv_comp1 == 'si') echo 'selected'; ?>>Si</option>
                    <option value="no"<?php if ($cv_comp1 == 'no') echo 'selected'; ?>>No</option>
                </select>
            </div>

            <div class="col-md-3" id="tipocomplicacion_cvc11">
                <span style="font-size: 14px;">Tipo de Complicaciones</span>
                <select name="tipocomplicacion_cvc1" id="tipocomplicacion_cvc1" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtroscvc1()" >
                    <option value="Seleccione"<?php if ($cv_TpoComp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable de Tipo de complicaciones . -->
                    <option value="Neumotórax"<?php if ($cv_TpoComp1 == 'Neumotórax') echo 'selected'; ?>>Neumotórax</option>
                    <option value="Hemotórax"<?php if ($cv_TpoComp1 == 'Hemotórax') echo 'selected'; ?>>Hemotórax</option>
                    <option value="Punción Arterial Trombosis"<?php if ($cv_TpoComp1 == 'Punción Arterial Trombosis') echo 'selected'; ?>>Punción Arterial</option>
                    <option value="Trombosis"<?php if ($cv_TpoComp1 == 'Trombosis') echo 'selected'; ?>>Trombosis</option>
                    <option value="Mal Posición del CVC"<?php if ($cv_TpoComp1 == 'Mal Posición del CVC') echo 'selected'; ?>>Mal Posición del CVC</option>
                    <option value="Otros"<?php if ($cv_TpoComp1 == 'Otros') echo 'selected'; ?>>Otros</option>
                </select>
            </div>

                    <div class="col-md-3" id="otros_cvc1" name="otros_cvc1">  <!-- Estas líneas se se el campo Otros. -->
                        <span style="font-size: 14px;">Otros</span>
                        <input id="cvc_otros_1" name="cvc_otros_1" type="text" value="<?php echo $cv_otros1; ?>"  class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        </div>  <!-- div del row -->


            <!-- ***********************************CVC 2 ********************************** -->

            <div class="col-md-12" id="cvc2" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            CVC 2 </h5>
                        </div>
                    

        <div class="row">

            <div class="col-md-3" id="tipo_cvc2">
                <strong style="font-size: 14px;">Tipo de CVC </strong>
                <select name="tipocvc2" id="tipocvc2" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione"<?php if ($cv_TpoCVC2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Tipó de CVC -->
                    <option value="MAHURKAR"<?php if ($cv_TpoCVC2 == 'MAHURKAR') echo 'selected'; ?>>MAHURKAR</option>
                    <option value="NIAGARA"<?php if ($cv_TpoCVC2 == 'NIAGARA') echo 'selected'; ?>>NIAGARA</option>
                    <option value="CATÉTER VENOSO CENTRAL"<?php if ($cv_TpoCVC2 == 'CATÉTER VENOSO CENTRAL') echo 'selected'; ?>>CATÉTER VENOSO CENTRAL</option>
                </select>
            </div>

            <div class="col-md-3" id="intento_cvc1" >
                        <span style="font-size: 14px;">Sitio Anatomico</span>
                        <select name="sitio_anatomico_2" id="sitio_anatomico_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_Anatomia2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Subclavio"<?php if ($cv_Anatomia2 == 'Subclavio') echo 'selected'; ?>>Subclavio</option>
                            <option value="Yugular"<?php if ($cv_Anatomia2 == 'Yugular') echo 'selected'; ?>>Yugular</option>
                            <option value="Femoral"<?php if ($cv_Anatomia2 == 'Femoral') echo 'selected'; ?>>Femoral</option>
                        </select>
            </div>

            <div class="col-md-3" id="intento_cvc2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_cvc_2" id="intento_cvc_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_intento2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($cv_intento2 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($cv_intento2 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            
            <div class="col-md-3" id="complicaciones_cvc2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_cvc2" id="complicacion_cvc2"  class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_comp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($cv_comp2 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($cv_comp2 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

                <div class="col-md-3" id="tipocomplicacion_cvc22" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_cvc2" id="tipocomplicacion_cvc2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione"<?php if ($cv_TpoComp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable de Tipo de complicaciones . -->
                        <option value="Neumotórax"<?php if ($cv_TpoComp2 == 'Neumotórax') echo 'selected'; ?>>Neumotórax</option>
                        <option value="Hemotórax"<?php if ($cv_TpoComp2 == 'Hemotórax') echo 'selected'; ?>>Hemotórax</option>
                        <option value="Punción Arterial Trombosis"<?php if ($cv_TpoComp2 == 'Punción Arterial Trombosis') echo 'selected'; ?>>Punción Arterial</option>
                        <option value="Trombosis"<?php if ($cv_TpoComp2 == 'Trombosis') echo 'selected'; ?>>Trombosis</option>
                        <option value="Mal Posición del CVC"<?php if ($cv_TpoComp2 == 'Mal Posición del CVC') echo 'selected'; ?>>Mal Posición del CVC</option>
                        <option value="Otros"<?php if ($cv_TpoComp2 == 'Otros') echo 'selected'; ?>>Otros</option>
                    </select>
                </div>

                <div class="col-md-3" id="otros_cvc2" name="otros_cvc2" >
                    <span style="font-size: 14px;">Otros</span>
                    <input id="cvc_otros_2" name="cvc_otros_2" type="text" value="<?php echo $cv_otros2; ?>" class="form-control" style="font-size: 13px;" >
                </div>
            </div>
        </div> <!-- div del row2 -->

            <!-- ***********************************CVC 3 ********************************** -->

            <div class="col-md-12" id="cvc3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            CVC 3</h5>
                        </div>
                    
    <div class="row">

            <div class="col-md-3" id="tipo_cvc3">
                <strong style="font-size: 14px;">Tipo de CVC </strong>
                <select name="tipocvc3" id="tipocvc3" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione"<?php if ($cv_TpoCVC3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Tipó de CVC -->
                    <option value="MAHURKAR"<?php if ($cv_TpoCVC3 == 'MAHURKAR') echo 'selected'; ?>>MAHURKAR</option>
                    <option value="NIAGARA"<?php if ($cv_TpoCVC3 == 'NIAGARA') echo 'selected'; ?>>NIAGARA</option>
                    <option value="CATÉTER VENOSO CENTRAL"<?php if ($cv_TpoCVC3 == 'CATÉTER VENOSO CENTRAL') echo 'selected'; ?>>CATÉTER VENOSO CENTRAL</option>
                </select>
            </div>

            <div class="col-md-3" id="intento_cvc1" >
                        <span style="font-size: 14px;">Sitio Anatomico</span>
                        <select name="sitio_anatomico_3" id="sitio_anatomico_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_Anatomia3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Subclavio"<?php if ($cv_Anatomia3 == 'Subclavio') echo 'selected'; ?>>Subclavio</option>
                            <option value="Yugular"<?php if ($cv_Anatomia3 == 'Yugular') echo 'selected'; ?>>Yugular</option>
                            <option value="Femoral"<?php if ($cv_Anatomia3 == 'Femoral') echo 'selected'; ?>>Femoral</option>
                        </select>
            </div>

            <div class="col-md-3" id="intento_cvc3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_cvc_3" id="intento_cvc_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_intento3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($cv_intento3 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($cv_intento3 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_cvc3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_cvc3" id="complicacion_cvc3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($cv_comp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($cv_comp3 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($cv_comp3 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_cvc33">
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_cvc3" id="tipocomplicacion_cvc3" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtroscvc3()" >
                            <option value="Seleccione"<?php if ($cv_TpoComp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable de Tipo de complicaciones . -->
                            <option value="Neumotórax"<?php if ($cv_TpoComp3 == 'Neumotórax') echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemotórax"<?php if ($cv_TpoComp3 == 'Hemotórax') echo 'selected'; ?>>Hemotórax</option>
                            <option value="Punción Arterial Trombosis"<?php if ($cv_TpoComp3 == 'Punción Arterial Trombosis') echo 'selected'; ?>>Punción Arterial</option>
                            <option value="Trombosis"<?php if ($cv_TpoComp3 == 'Trombosis') echo 'selected'; ?>>Trombosis</option>
                            <option value="Mal Posición del CVC"<?php if ($cv_TpoComp3 == 'Mal Posición del CVC') echo 'selected'; ?>>Mal Posición del CVC</option>
                            <option value="Otros"<?php if ($cv_TpoComp3 == 'Otros') echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otros_cvc3" name="otros_cvc3" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="cvc_otros_3" name="cvc_otros_3" type="text" value="<?php echo $cv_otros3; ?>" class="form-control" style="font-size: 13px;" >
                </div>
            </div> <br>
        </div>




    <!-- **********Linea de separación PARA PARACENTESIS ********************* -->
                <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            color: rgb(18, 18, 18)
                            margin-top:8px;
                            font-size: 13px;">
                            PARACENTESIS</h5>
                        </div>
                    </div>

    <!-- ***********************************PARACENTESIS*********************************** -->


            <div class="col-md-6" id="num_parecentesis1"> 
                <strong style="font-size: 14px;">Procedimiento Paracentesis </strong>
                <select name="conteo_parecentesis" id="conteo_parecentesis" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($parasentesis == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($parasentesis == 1 ) echo 'selected'; ?> >Paracentesis 1</option>
                    <option value= 2 <?php if ($parasentesis == 2 ) echo 'selected'; ?> >Paracentesis 2</option>
                    <option value= 3 <?php if ($parasentesis == 3 ) echo 'selected'; ?> >Paracentesis 3</option>
                </select>
            </div>



            <!-- *********************************** PARACENTESIS 1 ********************************** -->

            <div class="col-md-12" id="paracentesis1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Paracentesis 1</h5>
                        </div>
                        
    <div class="row">

            <div class="col-md-3" id="intento_paracentesis1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_paracentesis_1" id="intento_paracentesis_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_intento1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($pt_intento1 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($pt_intento1 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_paracentesis1" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_paracentesis_1" id="complicacion_paracentesis_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_comp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($pt_comp1 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($pt_comp1 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_paracentesis1" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_paracentesis_1" id="tipocomplicacion_paracentesis_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Hematoma de la Pared Abdominal"<?php if ($pt_TpoComp1 == 'Hematoma de la Pared Abdominal' ) echo 'selected'; ?>>Hematoma de la Pared Abdominal</option>
                            <option value="Perforación Intestinal"<?php if ($pt_TpoComp1 == 'Perforación Intestinal' ) echo 'selected'; ?>>Perforación Intestinal</option>
                            <option value="Hemoperitoneo"<?php if ($pt_TpoComp1 == 'Hemoperitoneo' ) echo 'selected'; ?>>Hemoperitoneo</option>
                            <option value="Fistula"<?php if ($pt_TpoComp1 == 'Fistula' ) echo 'selected'; ?>>Fistula</option>
                            <option value="Muerte"<?php if ($pt_TpoComp1 == 'Muerte' ) echo 'selected'; ?>>Muerte</option>
                            <option value="Otros"<?php if ($pt_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                    <div class="col-md-3" id="otros_paracentesis_1" name="otros_paracentesis_1"  >
                                <span style="font-size: 14px;">Otros</span>
                                <input id="paracen_otros_1" name="paracen_otros_1" type="text" value="<?php echo $pt_otros1; ?>" class="form-control" style="font-size: 13px;" >
                        </div>
                </div>
            </div>
                    <!-- *********************************** PARACENTESIS 2 ********************************** -->

                    <div class="col-md-12" id="paracentesis2">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Paracentesis 2</h5>
                        </div>
                    
    <div class="row">

            <div class="col-md-3" id="intento_paracentesis2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_paracentesis_2" id="intento_paracentesis_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_intento2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($pt_intento2 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($pt_intento2 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_paracentesis2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_paracentesis_2" id="complicacion_paracentesis_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_comp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($pt_comp2 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($pt_comp2 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_paracentesis2" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_paracentesis_2" id="tipocomplicacion_paracentesis_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Hematoma de la Pared Abdominal"<?php if ($pt_TpoComp2 == 'Hematoma de la Pared Abdominal' ) echo 'selected'; ?>>Hematoma de la Pared Abdominal</option>
                            <option value="Perforación Intestinal"<?php if ($pt_TpoComp2 == 'Perforación Intestinal' ) echo 'selected'; ?>>Perforación Intestinal</option>
                            <option value="Hemoperitoneo"<?php if ($pt_TpoComp2 == 'Hemoperitoneo' ) echo 'selected'; ?>>Hemoperitoneo</option>
                            <option value="Fistula"<?php if ($pt_TpoComp2 == 'Fistula' ) echo 'selected'; ?>>Fistula</option>
                            <option value="Muerte"<?php if ($pt_TpoComp2 == 'Muerte' ) echo 'selected'; ?>>Muerte</option>
                            <option value="Otros"<?php if ($pt_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                    <div class="col-md-3" id="otros_paracentesis_2" name="otros_paracentesis_2" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="paracen_otros_2" name="paracen_otros_2" type="text" value="<?php echo $pt_otros2; ?>" class="form-control"  style="font-size: 13px;" >
                    </div>
                </div>
            </div>
    <!-- *********************************** PARACENTESIS 3 ********************************** -->

    <div class="col-md-12" id="paracentesis3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Paracentesis 3</h5>
                        </div>
                    
    <div class="row">
            <div class="col-md-3" id="intento_paracentesis2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_paracentesis_3" id="intento_paracentesis_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_intento3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($pt_intento3 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($pt_intento3 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_paracentesis3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_paracentesis_3" id="complicacion_paracentesis_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_comp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($pt_comp3 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($pt_comp3 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_paracentesis3"  >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tipocomplicacion_paracentesis_3" id="tipocomplicacion_paracentesis_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($pt_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Hematoma de la Pared Abdominal"<?php if ($pt_TpoComp3 == 'Hematoma de la Pared Abdominal' ) echo 'selected'; ?>>Hematoma de la Pared Abdominal</option>
                            <option value="Perforación Intestinal"<?php if ($pt_TpoComp3 == 'Perforación Intestinal' ) echo 'selected'; ?>>Perforación Intestinal</option>
                            <option value="Hemoperitoneo"<?php if ($pt_TpoComp3 == 'Hemoperitoneo' ) echo 'selected'; ?>>Hemoperitoneo</option>
                            <option value="Fistula"<?php if ($pt_TpoComp3 == 'Fistula' ) echo 'selected'; ?>>Fistula</option>
                            <option value="Muerte"<?php if ($pt_TpoComp3 == 'Muerte' ) echo 'selected'; ?>>Muerte</option>
                            <option value="Otros"<?php if ($pt_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                    <div class="col-md-3" id="otros_paracentesis_3" name="otros_paracentesis_3">
                        <span style="font-size: 14px;">Otros</span>
                        <input id="paracen_otros_3" name="paracen_otros_3" type="text" value="<?php echo $pt_otros3; ?>" class="form-control" style="font-size: 13px;" >
                    </div>
            </div><br>
        </div>

                <!-- ********** Linea de division BIOPSIA PIEL ********************* -->
                <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            margin-top:8px;
                            font-size: 13px;">
                            BIOPSIA PIEL</h5>
                        </div>
                    </div>

    <!-- ***********************************BIOPSIA PIEL*********************************** -->
            

            
            <div class="col-md-6" id="num_biopsia" >
                <strong style="font-size: 14px;">Procedimiento Biopsia Piel </strong>
                <select name="conteo_biopsiapiel" id="conteo_biopsiapiel" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($biopsia_piel == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($biopsia_piel == 1 ) echo 'selected'; ?> >Biopsia piel 1</option>
                    <option value= 2 <?php if ($biopsia_piel == 2 ) echo 'selected'; ?> >Biopsia piel 2</option>
                    <option value= 3 <?php if ($biopsia_piel == 3 ) echo 'selected'; ?> >Biopsia piel 3</option>
                </select>
            </div>
            <!-- *********************************** BIOPSIA PIEL 1 ********************************** -->

            <div class="col-md-12" id="pl_bp1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biopsia Piel 1</h5>
                        </div>
        <div class="row">

            <div class="col-md-3" id="intento_biopsiapiel1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_biopsiapiel_1" id="intento_pbiopsiapiel_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_intento1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bp_intento1 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bp_intento1 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_paracentesis1" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_biopsiapiel_1" id="complicacion_biopsiapiel_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_comp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($bp_comp1 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bp_comp1 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_biopsiapiel1" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_biopsiapiel_1" id="tp_biopsiapiel_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Sangrado"<?php if ($bp_TpoComp1 == 'Sangrado' ) echo 'selected'; ?>>Sangrado</option>
                            <option value="Infección"<?php if ($bp_TpoComp1 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Lesión Neuronal"<?php if ($bp_TpoComp1 == 'Lesión Neuronal' ) echo 'selected'; ?>>Lesión Neuronal</option>
                            <option value="Lesión Muscular"<?php if ($bp_TpoComp1 == 'Lesión Muscular' ) echo 'selected'; ?>>Lesión Muscular</option>
                            <option value="Otros"<?php if ($bp_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_biopsiapiel" name="otros_biopsiapiel">
                        <span style="font-size: 14px;">Otros</span>
                        <input id="biopiel_otros_1" name="biopiel_otros_1" type="text" value="<?php echo $bp_otros1; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        </div>
            <!-- *********************************** BIOPSIA PIEL 2 ********************************** -->

            <div class="col-md-12" id="pl_bp2"  >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biopsia Piel 2</h5>
                        </div>
                <div class="row">

            <div class="col-md-3" id="intento_biopsiapiel2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_biopsiapiel_2" id="intento_pbiopsiapiel_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_intento2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bp_intento2 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bp_intento2 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_paracentesis2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_biopsiapiel_2" id="complicacion_biopsiapiel_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_comp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($bp_comp2 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bp_comp2 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_biopsiapiel2" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_biopsiapiel_2" id="tp_biopsiapiel_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Sangrado"<?php if ($bp_TpoComp2 == 'Sangrado' ) echo 'selected'; ?>>Sangrado</option>
                            <option value="Infección"<?php if ($bp_TpoComp2 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Lesión Neuronal"<?php if ($bp_TpoComp2 == 'Lesión Neuronal' ) echo 'selected'; ?>>Lesión Neuronal</option>
                            <option value="Lesión Muscular"<?php if ($bp_TpoComp2 == 'Lesión Muscular' ) echo 'selected'; ?>>Lesión Muscular</option>
                            <option value="Otros"<?php if ($bp_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_biopsiapiel2" name="otros_biopsiapiel2" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="biopiel_otros_2" name="biopiel_otros_2" type="text" value="<?php echo $bp_otros2; ?>" class="form-control" style="font-size: 13px;" >
                </div>

            </div>
        </div>
    <!-- *********************************** BIOPSIA PIEL 3 ********************************** -->

            <div class="col-md-12" id="pl_bp3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biopsia Piel 3</h5>
                        </div>
                    
    <div class="row">
            <div class="col-md-3" id="intento_biopsiapiel3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="intento_biopsiapiel_3" id="intento_pbiopsiapiel_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_intento3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bp_intento3 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bp_intento3 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_paracentesis3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_biopsiapiel_3" id="complicacion_biopsiapiel_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_comp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($bp_comp3 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bp_comp3 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_biopsiapiel3" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_biopsiapiel_3" id="tp_biopsiapiel_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bp_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Sangrado"<?php if ($bp_TpoComp3 == 'Sangrado' ) echo 'selected'; ?>>Sangrado</option>
                            <option value="Infección"<?php if ($bp_TpoComp3 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Lesión Neuronal"<?php if ($bp_TpoComp3 == 'Lesión Neuronal' ) echo 'selected'; ?>>Lesión Neuronal</option>
                            <option value="Lesión Muscular"<?php if ($bp_TpoComp3 == 'Lesión Muscular' ) echo 'selected'; ?>>Lesión Muscular</option>
                            <option value="Otros"<?php if ($bp_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_biopsiapiel3" name="otros_biopsiapiel3" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="biopiel_otros_3" name="biopiel_otros_3" type="text" value="<?php echo $bp_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div> <br>
        </div>

                    <!-- ***********************************BIOPSIA TEJIDO CELULAR SUBC *********************************** -->

    <!-- ********** Linea de division  Biposia Tejido Celular SUBC ********************* -->
            <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            margin-top:8px;
                            font-size: 13px;">
                            BIOPSIA TEJIDO CELULAR SUBC</h5>
                        </div>
                    </div>


            <div class="col-md-6" id="num_biopsiatejido" >
                <strong style="font-size: 14px;">Procedimiento Biopsia Tejido Celular SUBC </strong>
                <select name="conteo_biopsiaSUBC" id="conteo_biopsiaSUBC" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($biopsia_celular == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($biopsia_celular == 1 ) echo 'selected'; ?> >Biopsia Tejido Celular SUBC 1</option>
                    <option value= 2 <?php if ($biopsia_celular == 2 ) echo 'selected'; ?> >Biopsia Tejido Celular SUBC 2</option>
                    <option value= 3 <?php if ($biopsia_celular == 3 ) echo 'selected'; ?> >Biopsia Tejido Celular SUBC 3</option>
                </select>
            </div>

    <!-- *********************************** Biposia Tejido Celular SUBC 1 ********************************** -->

            <div class="col-md-12"  id="btc1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                                    background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biopsia Tejido Celular SUBC 1 </h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="Biopsia_tejido_celular1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="SUBC_1" id="SUBC_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_intento1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bc_intento1 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bc_intento1 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>

            <div class="col-md-3" id="complicaciones_biopsia_subc1" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_SUBC_1" id="complicacion_SUBC_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_comp1 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($bc_comp1 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bc_comp1 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_SUBC_1"  >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_SUBC_1" id="tp_SUBC_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Sangrado"<?php if ($bc_TpoComp1 == 'Sangrado' ) echo 'selected'; ?>>Sangrado</option>
                            <option value="Infección"<?php if ($bc_TpoComp1 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Lesión Neuronal"<?php if ($bc_TpoComp1 == 'Lesión Neuronal' ) echo 'selected'; ?>>Lesión Neuronal</option>
                            <option value="Lesión Muscular"<?php if ($bc_TpoComp1 == 'Lesión Muscular' ) echo 'selected'; ?>>Lesión Muscular</option>
                            <option value="Otros"<?php if ($bc_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_SUBC_1" name="otros_SUBC_1" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="subc_otros_1" name="subc_otros_1" type="text" value="<?php echo $bc_otros1; ?>" class="form-control" >
                </div>
            </div>
        </div>

    <!-- *********************************** Biposia Tejido Celular SUBC 2 ********************************** -->

            <div class="col-md-12" id="btc2" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biopsia Tejido Celular SUBC 2 </h5>
                        </div>
                <div class="row">

            <div class="col-md-3" id="Biopsia_tejido_celular2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="SUBC_2" id="SUBC_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_intento2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bc_intento2 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bc_intento2 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_biopsia_subc2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_SUBC_2" id="complicacion_SUBC_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_comp2 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($bc_comp2 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bc_comp2 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_SUBC_2"  >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_SUBC_2" id="tp_SUBC_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Sangrado"<?php if ($bc_TpoComp2 == 'Sangrado' ) echo 'selected'; ?>>Sangrado</option>
                            <option value="Infección"<?php if ($bc_TpoComp2 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Lesión Neuronal"<?php if ($bc_TpoComp2 == 'Lesión Neuronal' ) echo 'selected'; ?>>Lesión Neuronal</option>
                            <option value="Lesión Muscular"<?php if ($bc_TpoComp2 == 'Lesión Muscular' ) echo 'selected'; ?>>Lesión Muscular</option>
                            <option value="Otros"<?php if ($bc_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_SUBC_2" name="otros_SUBC_2" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="subc_otros_2" name="subc_otros_2" type="text" value="<?php echo $bc_otros2; ?>"  class="form-control" style="font-size: 13px;" >
                </div>
            </div>
        </div>
    <!-- *********************************** Biposia Tejido Celular SUBC 3 ********************************** -->

            <div class="col-md-12" id="btc3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biopsia Tejido Celular SUBC 3</h5>
                        </div>
                        
                <div class="row">
            <div class="col-md-3" id="Biopsia_tejido_celular3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="SUBC_3" id="SUBC_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_intento3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bc_intento3 == 'Exitoso') echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bc_intento3 == 'Fallido') echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_biopsia_subc3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_SUBC_3" id="complicacion_SUBC_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_comp3 == 'Seleccione') echo 'selected'; ?>>Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                            <option value="si"<?php if ($bc_comp3 == 'si') echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bc_comp3 == 'no') echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_SUBC_3"  >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_SUBC_3" id="tp_SUBC_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bc_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Sangrado"<?php if ($bc_TpoComp3 == 'Sangrado' ) echo 'selected'; ?>>Sangrado</option>
                            <option value="Infección"<?php if ($bc_TpoComp3 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Lesión Neuronal"<?php if ($bc_TpoComp3 == 'Lesión Neuronal' ) echo 'selected'; ?>>Lesión Neuronal</option>
                            <option value="Lesión Muscular"<?php if ($bc_TpoComp3 == 'Lesión Muscular' ) echo 'selected'; ?>>Lesión Muscular</option>
                            <option value="Otros"<?php if ($bc_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_SUBC_3" name="otros_SUBC_3" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="subc_otros_3" name="subc_otros_3" type="text" value="<?php echo $bc_otros3; ?>"  class="form-control"  style="font-size: 13px;" >
                </div>
            </div> <br>
        </div>

            
    <!-- ***********************************BIOPSIA TIROIDES *********************************** -->
    <!-- ********** Linea de division  Biposia Tiroides ********************* -->
            <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            margin-top:8px;
                            font-size: 13px;">
                            BIOPSIA TIROIDES</h5>
                        </div>
                    </div>

            <div class="col-md-6" id="num_biopsiat" >
                <strong style="font-size: 14px;">Procedimiento Biposia Tiroides </strong>
                <select name="conteo_biopsiatiroides" id="conteo_biopsiatiroides" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($biopsia_tiroides == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($biopsia_tiroides == 1 ) echo 'selected'; ?> >Biopsia Tiroides 1</option>
                    <option value= 2 <?php if ($biopsia_tiroides == 2 ) echo 'selected'; ?> >Biopsia Tiroides 2</option>
                    <option value= 3 <?php if ($biopsia_tiroides == 3 ) echo 'selected'; ?> >Biopsia Tiroides 3</option>
                </select>
            </div>

    <!-- *********************************** Biposia Tiroides  1 ********************************** -->

            <div class="col-md-12" id="bt1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biposia Tiroides 1</h5>
                        </div>
                <div class="row">

            <div class="col-md-3" id="Biposia_Tiroides1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="BT_1" id="BT_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_intento1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bt_intento1 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bt_intento1 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_BT1" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_BT_1" id="complicacion_BT_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_comp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($bt_comp1 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bt_comp1 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_BT_1">
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_BT1" id="tp_BT1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Infección"<?php if ($bt_TpoComp1 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Hematoma"<?php if ($bt_TpoComp1 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Punción Vascular"<?php if ($bt_TpoComp1 == 'Punción Vascular' ) echo 'selected'; ?>>Punción Vascular</option>
                            <option value="Perforación de Traquea"<?php if ($bt_TpoComp1 == 'Perforación de Traquea' ) echo 'selected'; ?>>Perforación de Traquea</option>
                            <option value="Otros"<?php if ($bt_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_BT_1" name="otros_BT_1" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="bt_otros_1" name="bt_otros_1" type="text" value="<?php echo $bt_otros1; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div> 
        </div>
    <!-- *********************************** Biposia Tiroides  2 ********************************** -->

            <div class="col-md-12" id="bt2" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biposia Tiroides 2</h5>
                        </div>
            <div class="row">

            <div class="col-md-3" id="Biposia_Tiroides2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="BT_2" id="BT_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_intento2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bt_intento2 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bt_intento2 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_BT2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_BT_2" id="complicacion_BT_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_comp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($bt_comp2 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bt_comp2 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_BT_2">
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_BT2" id="tp_BT2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Infección"<?php if ($bt_TpoComp2 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Hematoma"<?php if ($bt_TpoComp2 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Punción Vascular"<?php if ($bt_TpoComp2 == 'Punción Vascular' ) echo 'selected'; ?>>Punción Vascular</option>
                            <option value="Perforación de Traquea"<?php if ($bt_TpoComp2 == 'Perforación de Traquea' ) echo 'selected'; ?>>Perforación de Traquea</option>
                            <option value="Otros"<?php if ($bt_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
            <div class="col-md-3" id="otro_BT_2" name="otros_BT_2"  >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="bt_otros_2" name="bt_otros_2" type="text" value="<?php echo $bt_otros2; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>     
        </div>
    <!-- *********************************** Biposia Tiroides  3 ********************************** -->

            <div class="col-md-12" id="bt3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Biposia Tiroides 3</h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="Biposia_Tiroides3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="BT_3" id="BT_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_intento3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($bt_intento3 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($bt_intento3 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_BT3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_BT_3" id="complicacion_BT_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_comp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($bt_comp3 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($bt_comp3 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_BT_3" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_BT3" id="tp_BT3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($bt_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Infección"<?php if ($bt_TpoComp3 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Hematoma"<?php if ($bt_TpoComp3 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Punción Vascular"<?php if ($bt_TpoComp3 == 'Punción Vascular' ) echo 'selected'; ?>>Punción Vascular</option>
                            <option value="Perforación de Traquea"<?php if ($bt_TpoComp3 == 'Perforación de Traquea' ) echo 'selected'; ?>>Perforación de Traquea</option>
                            <option value="Otros"<?php if ($bt_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_BT_3" name="otros_BT_3">
                        <span style="font-size: 14px;">Otros</span>
                        <input id="bt_otros_3" name="bt_otros_3" type="text" value="<?php echo $bt_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>  <br>
        </div>
    <!-- ***********************************TORACOCENTESIS *********************************** -->
    <!-- ********** Linea de division  Toracocentesis ********************* -->
            <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            margin-top:8px;
                            font-size: 13px;">
                            TORACOCENTESIS</h5>
                        </div>
                    </div>
                    

            <div class="col-md-6" id="num_tora">
                <strong style="font-size: 14px;">Procedimiento Toracocentesis </strong>
                <select name="conteo_toracocentesis" id="conteo_toracocentesis" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($toracosentesis == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($toracosentesis == 1 ) echo 'selected'; ?> >Toracocentesis 1</option>
                    <option value= 2 <?php if ($toracosentesis == 2 ) echo 'selected'; ?> >Toracocentesis 2</option>
                    <option value= 3 <?php if ($toracosentesis == 3 ) echo 'selected'; ?> >Toracocentesis 3</option>
                </select>
            </div>
    <!-- *********************************** Toracocentesis  1 ********************************** -->

            <div class="col-md-12" id="toracocentesis1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Toracocentesis 1</h5>
                        </div>
        <div class="row">

            <div class="col-md-3" id="Toracocentesi1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="Toracocentesi_1" id="Toracocentesi_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_intento1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($tora_intento1 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($tora_intento1 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_tora_1" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_tora_1" id="complicacion_tora_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_comp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($tora_comp1 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($tora_comp1 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_tora_1">
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_tora1" id="tp_tora1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Neumotorax"<?php if ($tora_TpoComp1 == 'Neumotorax' ) echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemotorax"<?php if ($tora_TpoComp1 == 'Hemotorax' ) echo 'selected'; ?>>Hemotórax</option>
                            <option value="Punción Visceral"<?php if ($tora_TpoComp1 == 'Punción Visceral' ) echo 'selected'; ?>>Punción Visceral</option>
                            <option value="Infección"<?php if ($tora_TpoComp1 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Otros"<?php if ($tora_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_tora_1" name="otros_tora_1">
                        <span style="font-size: 14px;">Otros</span>
                        <input id="tora_otros_1" name="tora_otros_1" type="text" value="<?php echo $tora_otros1; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div> 
        </div>
    <!-- *********************************** Toracocentesis  2 ********************************** -->

            <div class="col-md-12" id="toracocentesis2" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Toracocentesis 2</h5>
                        </div>
                <div class="row">

            <div class="col-md-3" id="Toracocentesi2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="Toracocentesi_2" id="Toracocentesi_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_intento2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($tora_intento2 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($tora_intento2 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_tora_2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_tora_2" id="complicacion_tora_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_comp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($tora_comp2 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($tora_comp2 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_tora_2" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_tora2" id="tp_tora2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Neumotorax"<?php if ($tora_TpoComp2 == 'Neumotorax' ) echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemotorax"<?php if ($tora_TpoComp2 == 'Hemotorax' ) echo 'selected'; ?>>Hemotórax</option>
                            <option value="Punción Visceral"<?php if ($tora_TpoComp2 == 'Punción Visceral' ) echo 'selected'; ?>>Punción Visceral</option>
                            <option value="Infección"<?php if ($tora_TpoComp2 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Otros"<?php if ($tora_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_tora_2" name="otros_tora_2" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="tora_otros_2" name="tora_otros_2" type="text" value="<?php echo $tora_otros2; ?>" class="form-control" style="font-size: 13px;" >
                </div>
            </div> 
        </div>
                <!-- *********************************** Toracocentesis  3 ********************************** -->

            <div class="col-md-12" id="toracocentesis3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Toracocentesis 3</h5>
                        </div>
        <div class="row">

            <div class="col-md-3" id="Toracocentesi3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="Toracocentesi_3" id="Toracocentesi_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_intento3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($tora_intento3 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($tora_intento3 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_tora_3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_tora_3" id="complicacion_tora_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_comp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($tora_comp3 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($tora_comp3 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_tora_3" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_tora3" id="tp_tora3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($tora_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Neumotorax"<?php if ($tora_TpoComp3 == 'Neumotorax' ) echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemotorax"<?php if ($tora_TpoComp3 == 'Hemotorax' ) echo 'selected'; ?>>Hemotórax</option>
                            <option value="Punción Visceral"<?php if ($tora_TpoComp3 == 'Punción Visceral' ) echo 'selected'; ?>>Punción Visceral</option>
                            <option value="Infección"<?php if ($tora_TpoComp3 == 'Infección' ) echo 'selected'; ?>>Infección</option>
                            <option value="Otros"<?php if ($tora_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                    <div class="col-md-3" id="otro_tora_3" name="otros_tora_3" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="tora_otros_3" name="tora_otros_3" type="text" value="<?php echo $tora_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                    </div>
                </div>  <br>
            </div>

            
    <!-- ***********************************ARTROCENTESIS *********************************** -->
            <!-- ********** Linea de division  Biposia Tiroides ********************* -->
            <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            margin-top:8px;
                            font-size: 13px;">
                            ARTROCENTESIS</h5>
                        </div>
                    </div>

            <div class="col-md-6" id="num_artrocentesis1" >
                <strong style="font-size: 14px;">Procedimiento Artrocentesis</strong>
                <select name="conteo_artrocentesis" id="conteo_artrocentesis" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($artrocentesis == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($artrocentesis == 1 ) echo 'selected'; ?> >Artrocentesis 1</option>
                    <option value= 2 <?php if ($artrocentesis == 2 ) echo 'selected'; ?> >Artrocentesis 2</option>
                    <option value= 3 <?php if ($artrocentesis == 3 ) echo 'selected'; ?> >Artrocentesis 3</option>
                </select>
            </div>
    <!-- *********************************** Artrocentesis 1 ********************************** -->

            <div class="col-md-12" id="atro1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Artrocentesis 1</h5>
                        </div>

        <div class="row">

                <div class="col-md-3" id="Artrocentesis1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="Artro_1" id="Artro_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_intento1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($at_intento1 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($at_intento1 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
                </div>

                <div class="col-md-3" id="complicaciones_Artro_1">
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_Artro_1" id="complicacion_Artro_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_comp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($at_comp1 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($at_comp1 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
                </div> 

                <div class="col-md-3" id="tipocomplicacion_Artro_1" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_Artro_1" id="tp_Artro_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Artritis Séptica"<?php if ($at_TpoComp1 == 'Artritis Séptica' ) echo 'selected'; ?>>Artritis Séptica </option>
                            <option value="Bursitis Séptica"<?php if ($at_TpoComp1 == 'Bursitis Séptica' ) echo 'selected'; ?>>Bursitis Séptica</option>
                            <option value="Ruptura de Tendón"<?php if ($at_TpoComp1 == 'Ruptura de Tendón' ) echo 'selected'; ?>>Ruptura de Tendón</option>
                            <option value="Hematoma"<?php if ($at_TpoComp1 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Otros"<?php if ($at_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
                </div> 
        
                    <div class="col-md-3" id="otro_Artro_1" name="otros_Artro_1">
                        <span style="font-size: 14px;">Otros</span>
                        <input id="artro_otros_1" name="artro_otros_1" type="text" value="<?php echo $at_otros1; ?>" class="form-control" style="font-size: 13px;" >
                    </div>

                </div>  
            </div>

                <!-- *********************************** Artrocentesis 2 ********************************** -->

            <div class="col-md-12" id="atro2" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Artrocentesis 2</h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="Artrocentesis2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="Artro_2" id="Artro_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_intento2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($at_intento2 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($at_intento2 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_Artro_2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_Artro_2" id="complicacion_Artro_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_comp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($at_comp2 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($at_comp2 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

                <div class="col-md-3" id="tipocomplicacion_Artro_2" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_Artro_2" id="tp_Artro_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Artritis Séptica"<?php if ($at_TpoComp2 == 'Artritis Séptica' ) echo 'selected'; ?>>Artritis Séptica </option>
                            <option value="Bursitis Séptica"<?php if ($at_TpoComp2 == 'Bursitis Séptica' ) echo 'selected'; ?>>Bursitis Séptica</option>
                            <option value="Ruptura de Tendón"<?php if ($at_TpoComp2 == 'Ruptura de Tendón' ) echo 'selected'; ?>>Ruptura de Tendón</option>
                            <option value="Hematoma"<?php if ($at_TpoComp2 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Otros"<?php if ($at_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
                </div> 
        
                <div class="col-md-3" id="otro_Artro_2" name="otros_Artro_2" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="artro_otros_2" name="artro_otros_2" type="text" value="<?php echo $at_otros2; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        </div>
    <!-- *********************************** Artrocentesis 3 ********************************** -->

            <div class="col-md-12" id="atro3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Artrocentesis 3</h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="Artrocentesis3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="Artro_3" id="Artro_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_intento3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($at_intento3 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($at_intento3 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_Artro_3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_Artro_3" id="complicacion_Artro_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_comp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($at_comp3 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($at_comp3 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

                <div class="col-md-3" id="tipocomplicacion_Artro_3" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tp_Artro_3" id="tp_Artro_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($at_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Artritis Séptica"<?php if ($at_TpoComp3 == 'Artritis Séptica' ) echo 'selected'; ?>>Artritis Séptica </option>
                            <option value="Bursitis Séptica"<?php if ($at_TpoComp3 == 'Bursitis Séptica' ) echo 'selected'; ?>>Bursitis Séptica</option>
                            <option value="Ruptura de Tendón"<?php if ($at_TpoComp3 == 'Ruptura de Tendón' ) echo 'selected'; ?>>Ruptura de Tendón</option>
                            <option value="Hematoma"<?php if ($at_TpoComp3 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Otros"<?php if ($at_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
                </div> 
        
                    <div class="col-md-3" id="otro_Artro_3" name="otros_Artro_3"  >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="artro_otros_3" name="artro_otros_3" type="text" value="<?php echo $at_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                    </div>
                </div>  <br>
            </div>


            <!-- *********************************** ASPIRACION DE MO *********************************** -->
            
            <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(172, 234, 167, 0.5) ;
                            font-weight: bold;
                            margin-top:8px;
                            font-size: 13px;">
                            ASPIRACIÓN DE MO </h5>
                        </div>
                    </div>

                    <!-- ********** Linea de division  ASPIRACION DE MO  ********************* -->
        

            <div class="col-md-6" id="num_mo" > 
                <strong style="font-size: 14px;">Procedimiento Aspiración de MO </strong>
                <select name="conteo_mo" id="conteo_mo" class="form-control" style="font-size: 14px;">
                    <option value= 0 <?php if ($mo == 0 ) echo 'selected'; ?> >Seleccione</option>
                    <option value= 1 <?php if ($mo == 1 ) echo 'selected'; ?> >Aspiración de MO 1</option>
                    <option value= 2 <?php if ($mo == 2 ) echo 'selected'; ?> >Aspiración de MO 2</option>
                    <option value= 3 <?php if ($mo == 3 ) echo 'selected'; ?> >Aspiración de MO 3</option>
                </select>
            </div>
    <!-- *********************************** Aspiración de MO 1 ********************************** -->

            <div class="col-md-12" id="mo1" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(114, 80, 190); 
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Aspiración de MO 1</h5>
                        </div>
                <div class="row">

            <div class="col-md-3" id="Aspiración_MO_1" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="MO_1" id="MO_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_intento1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($mo_intento1 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($mo_intento1 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_MO_1" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_MO_1" id="complicacion_MO_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_comp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($mo_comp1 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($mo_comp1 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_MO_1" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tc_MO1" id="tc_MO_1" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_TpoComp1 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Hematoma"<?php if ($mo_TpoComp1 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Neuropatia Transitoria"<?php if ($mo_TpoComp1 == 'Neuropatia Transitoria' ) echo 'selected'; ?>>Neuropatia Transitoria</option>
                            <option value="Neumotorax"<?php if ($mo_TpoComp1 == 'Neumotorax' ) echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemomediastino"<?php if ($mo_TpoComp1 == 'Hemomediastino' ) echo 'selected'; ?>>Hemomediastino</option>
                            <option value="Hemotorax"<?php if ($mo_TpoComp1 == 'Hemotorax' ) echo 'selected'; ?>>Hemotórax</option>
                            <option value="Otros"<?php if ($mo_TpoComp1 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_MO_1" name="otros_MO_1" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="mo_otros_1" name="mo_otros_1" type="text" value="<?php echo $mo_otros1; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        </div>
                <!-- *********************************** Aspiración de MO 2 ********************************** -->

            <div class="col-md-12" id="mo2" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(149, 121, 205);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Aspiración de MO 2</h5>
                        </div>
                    <div class="row">

            <div class="col-md-3" id="Aspiración_MO_2" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="MO_2" id="MO_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_intento2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($mo_intento2 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($mo_intento2 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_MO_2" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_MO_2" id="complicacion_MO_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_comp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($mo_comp2 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($mo_comp2 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_MO_2" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tc_MO_2" id="tc_MO_2" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_TpoComp2 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Hematoma"<?php if ($mo_TpoComp2 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Neuropatia Transitoria"<?php if ($mo_TpoComp2 == 'Neuropatia Transitoria' ) echo 'selected'; ?>>Neuropatia Transitoria</option>
                            <option value="Neumotorax"<?php if ($mo_TpoComp2 == 'Neumotorax' ) echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemomediastino"<?php if ($mo_TpoComp2 == 'Hemomediastino' ) echo 'selected'; ?>>Hemomediastino</option>
                            <option value="Hemotorax"<?php if ($mo_TpoComp2 == 'Hemotorax' ) echo 'selected'; ?>>Hemotórax</option>
                            <option value="Otros"<?php if ($mo_TpoComp2 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_MO_2" name="otros_MO_2" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="mo_otros_2" name="mo_otros_2" type="text" value="<?php echo $mo_otros2; ?>" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        </div>
                <!-- *********************************** Aspiración de MO 3 ********************************** -->

                <div class="col-md-12" id="mo3" >
                        <div class="form-header">
                            <h5 class="form-title"
                            style="text-align: center;
                            background-color:rgb(173, 159, 212);
                            color: aliceblue;
                            margin-top:5px;
                            font-size: 13px;">
                            Aspiración de MO 3</h5>
                        </div>

        <div class="row">

            <div class="col-md-3" id="Aspiración_MO_3" >
                        <span style="font-size: 14px;">Intento</span>
                        <select name="MO_3" id="MO_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_intento3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Exitoso"<?php if ($mo_intento3 == 'Exitoso' ) echo 'selected'; ?>>Exitoso</option>
                            <option value="Fallido"<?php if ($mo_intento3 == 'Fallido' ) echo 'selected'; ?>>Fallido</option>
                        </select>
            </div>
            <div class="col-md-3" id="complicaciones_MO_3" >
                        <span style="font-size: 14px;">Complicaciones</span>
                        <select name="complicacion_MO_3" id="complicacion_MO_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_comp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="si"<?php if ($mo_comp3 == 'si' ) echo 'selected'; ?>>Si</option>
                            <option value="no"<?php if ($mo_comp3 == 'no' ) echo 'selected'; ?>>No</option>
                        </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_MO_3" >
                        <span style="font-size: 14px;">Tipo de Complicaciones</span>
                        <select name="tc_MO_3" id="tc_MO_3" class="form-control" style="font-size: 14px;" >
                            <option value="Seleccione"<?php if ($mo_TpoComp3 == 'Seleccione' ) echo 'selected'; ?>>Seleccione</option>
                            <option value="Hematoma"<?php if ($mo_TpoComp3 == 'Hematoma' ) echo 'selected'; ?>>Hematoma</option>
                            <option value="Neuropatia Transitoria"<?php if ($mo_TpoComp3 == 'Neuropatia Transitoria' ) echo 'selected'; ?>>Neuropatia Transitoria</option>
                            <option value="Neumotorax"<?php if ($mo_TpoComp3 == 'Neumotorax' ) echo 'selected'; ?>>Neumotórax</option>
                            <option value="Hemomediastino"<?php if ($mo_TpoComp3 == 'Hemomediastino' ) echo 'selected'; ?>>Hemomediastino</option>
                            <option value="Hemotorax"<?php if ($mo_TpoComp3 == 'Hemotorax' ) echo 'selected'; ?>>Hemotórax</option>
                            <option value="Otros"<?php if ($mo_TpoComp3 == 'Otros' ) echo 'selected'; ?>>Otros</option>
                        </select>
            </div> 
        
                <div class="col-md-3" id="otro_MO_3" name="otros_MO_3" >
                        <span style="font-size: 14px;">Otros</span>
                        <input id="mo_otros_3" name="mo_otros_3" type="text" value="<?php echo $mo_otros3; ?>" class="form-control"  style="font-size: 13px;" >
                </div>

            </div>  <br>
        </div>






            </div><!--Div del primer Row-->
    <!--=========== Boton de editar ================-->
                    <div style="display: flex; justify-content: flex-end; align-items: center;">
                        <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Guardar</button>
                    </div>
                    <br>

    </div><!--Div del Container-->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="module">
            import { editForm } from "./js/update.js";
            editForm();
    </script>
    
</body>
</html>