<?php

    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");

    if (!isset($_SESSION['valid_user'])) {
        // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
        header('Location: ../login/index.php');
        exit;
    }
    include('php/diagnosticos_procedimientos.php');
    include('php/edit.php');
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
    <title>Editar Paciente</title>
</head>
<body>

    <header>
        <h5 style="color:aliceblue; margin-top: 15px;">
        <i class="bi bi-hospital"></i> Hemodinamia - Editar Paciente</h5>
        <br>
        <!-- Nuevo contenedor para el botón en el lado derecho -->
            <div style="padding: 20px; text-align: right;">
                <button type="button" class="btn btn-outline-light" title="Cerrar sesión">
                    <i class="bi bi-power"></i>
                </button>
            </div>
    </header>
<br>

    <form action="" id="edit_form">
        <div class="container" width="100%" height="800px" style="margin-bottom: 100px;">
            <div class ="row">
                <div class="col col-2">
                    <!--botones-->
                    <a href="index.php">
                        <button type="button" class="btn btn-warning">Volver</button>
                    </a>
                </div> <!--<div class="col col-2">-->

                <div class="col col-10">

                <div style="background-color: rgb(138, 8, 41);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Datos del Paciente</h6> 
          </div>
                    
          <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

          <div class="row">

              <div class="col-md-3">
                <strong style="font-size: 14px;">Fecha:</strong>
                <input type="date" class="form-control" id="fecha" name="fecha" required value="<?php echo $fecha; ?>">
              </div>

              <div class="col-md-3" id="idnombre">
                <strong style="font-size: 14px;">Nombre Completo</strong>
                <input id="nombre" name="nombre" type="text" class="control form-control" placeholder="Nombre(s) Apellidos" style="font-size: 14px;" required value="<?php echo $nombre_paciente; ?>">
              </div>


              <div class="col-md-3">
                <strong style="font-size: 14px;">Edad</strong>
                <input id="edad" name="edad" type="number" class="control form-control" value="<?php echo $edad; ?>" style="font-size: 14px;" required>
              </div>

              <div class="col-md-3" style="font-size: 14px;">
                <strong style="font-size: 14px;">Sexo</strong>
                <select name="sexo" id="sexo" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro"<?php if ($sexo == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                  <option value="Hombre"<?php if ($sexo == 'Hombre') echo 'selected'; ?>>Hombre</option>
                  <option value="Mujer"<?php if ($sexo == 'Mujer') echo 'selected'; ?>>Mujer</option>
                </select>
              </div>

              <div class="col-md-3" style="font-size: 14px;">
                <strong style="font-size: 14px;">Diabetico</strong>
                <select name="diabetico" id="diabetico" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro"<?php if ($diabetico == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                  <option value="Si"<?php if ($diabetico == 'Si') echo 'selected'; ?>>Sí</option>
                  <option value="No"<?php if ($diabetico == 'No') echo 'selected'; ?>>No</option>
                </select>
              </div>

              <div class="col-md-3" style="font-size: 14px;">
                  <strong style="font-size: 14px;">Hipertensión</strong>
                  <select name="has" id="has" class="form-control" style="font-size: 14px;">
                    <option value="Sin Registro"<?php if ($hipertension == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                    <option value="Si"<?php if ($hipertension == 'Si') echo 'selected'; ?>>Sí</option>
                    <option value="No"<?php if ($hipertension == 'No') echo 'selected'; ?>>No</option>
                  </select>
              </div>
          </div>

          <!--********************************-->

          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Atención Médica</h6> 
          </div> 

          <div class="row">
            <div class="col-md-4" style="font-size: 14px;">
                  <strong style="font-size: 14px;">Médico Tratante</strong>
                  <select name="medico" id="medico" class="form-control" style="font-size: 14px;">
                    <option value="Seleccionar"<?php if ($medico == 'Seleccionar') echo 'selected'; ?>>Seleccionar...</option>
                    <option value="Alma Rosa Sanchez Conejo"<?php if ($medico == 'Alma Rosa Sanchez Conejo') echo 'selected'; ?>>Alma Rosa Sanchez Conejo</option>
                    <option value="Arnoldo Loaisiga Saenz"<?php if ($medico == 'Arnoldo Loaisiga Saenz') echo 'selected'; ?>>Arnoldo Loaisiga Saenz</option>
                    <option value="Carlos Sandoval"<?php if ($medico == 'Carlos Sandoval') echo 'selected'; ?>>Carlos Sandoval</option>
                    <option value="Ceballos Medina"<?php if ($medico == 'Ceballos Medina') echo 'selected'; ?>>Ceballos Medina</option>
                    <option value="Eric Cuevas Medina"<?php if ($medico == 'Eric Cuevas Medina') echo 'selected'; ?>>Eric Cuevas Medina</option>
                    <option value="Gerardo Zavala García"<?php if ($medico == 'Gerardo Zavala García') echo 'selected'; ?>>Gerardo Zavala García</option>
                    <option value="Guillermo Alejandro Muñoz Benavides"<?php if ($medico == 'Guillermo Alejandro Muñoz Benavides') echo 'selected'; ?>>Guillermo Alejandro Muñoz Benavides</option>
                    <option value="Karla Felicia Martinez Medina"<?php if ($medico == 'Karla Felicia Martinez Medina') echo 'selected'; ?>>Karla Felicia Martinez Medina</option>
                    <option value="Karla Ivonne Solis Mendoza"<?php if ($medico == 'Karla Ivonne Solis Mendoza') echo 'selected'; ?>>Karla Ivonne Solis Mendoza</option>
                    <option value="Maricruz Cespedes Contreras"<?php if ($medico == 'Maricruz Cespedes Contreras') echo 'selected'; ?>>Maricruz Cespedes Contreras</option>
                    <option value="Maricurz Sanchez Cuz "<?php if ($medico == 'Maricurz Sanchez Cuz') echo 'selected'; ?>>Maricurz Sanchez Cuz </option>
                    <option value="Misael Silva Gonzalez"<?php if ($medico == 'Misael Silva Gonzalez') echo 'selected'; ?>>Misael Silva Gonzalez</option>
                    <option value="Noe Alfredo Osorio Velasco"<?php if ($medico == 'Noe Alfredo Osorio Velasco') echo 'selected'; ?>>Noe Alfredo Osorio Velasco</option>
                    <option value="Teresa Margarita Casares Bran"<?php if ($medico == 'Teresa Margarita Casares Bran') echo 'selected'; ?>>Teresa Margarita Casares Bran</option>
                  </select>
              </div>

            <div class="col-md-4">
              <strong style="font-size: 14px;">Diagnóstico</strong>
              <select name="diagnostico" id="diagnostico" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <?php
                  if ($dataDiagnosticos->num_rows > 0) {
                      while ($row = $dataDiagnosticos->fetch_assoc()) {
                          $selected = ($row["nombre"] == $diagnostico) ? 'selected' : '';
                          echo "<option value='" . $row["id_diagnostico"] . "' $selected>" . $row["nombre"] . "</option>";
                      }
                  } else {
                      echo "<option value=''>No hay datos disponibles</option>";
                  }
                ?>
              </select>
            </div>

            <div class="col-md-4">
              <strong style="font-size: 14px;">Procedimiento</strong>
              <select name="procedimiento" id="procedimiento" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                  <?php
                    if ($dataProcediminetos->num_rows > 0) {
                        while ($row = $dataProcediminetos->fetch_assoc()) {
                            $selected = ($row["nombre"] == $procedimiento) ? 'selected' : '';
                            echo "<option value='" . $row["id_procedimiento"] . "' $selected>" . $row["nombre"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay datos disponibles</option>";
                    }
                  ?>
              </select>
            </div>

            <div class="col-md-4" style="font-size: 14px;">
                <strong style="font-size: 14px;">Procedimiento programado</strong>
                <select name="Programada" id="Programada" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro"<?php if ($proce_programado == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                  <option value="Si"<?php if ($proce_programado == 'Si') echo 'selected'; ?>>Sí</option>
                  <option value="No"<?php if ($proce_programado == 'No') echo 'selected'; ?>>No</option>
                </select>
            </div>

            <div class="col-md-4" style="font-size: 14px;">
                <strong style="font-size: 14px;">Infarto</strong>
                <select name="STEMI" id="STEMI" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro"<?php if ($infarto == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                  <option value="con elevacion"<?php if ($infarto == 'con elevacion') echo 'selected'; ?>>Con Elevacion</option>
                  <option value="sin elevacion"<?php if ($infarto == 'sin elevacion') echo 'selected'; ?>>Sin Elevacion</option>
                </select>
            </div>
          </div>
          
          <!--Sitio de abordaje-->

          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Sitio Abordaje</h6> 
          </div> 
           
          <div class="row">
            <!--******+Braquial*******-->

            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Braquial</strong>
              <select name="braquial" id="braquial" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($braquial == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($braquial == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadbraquial">
              <label style="font-size: 14px; color: red;">Lateralidad Braquial</label>
              <select name="lateralidadbraquial" id="lateralidadbraquial" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_braquial == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_braquial == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_braquial == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_braquial == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>

            <!-- Cubital -->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Cubital</strong>
              <select name="Cubital" id="Cubital" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($cubital == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($cubital == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadCubital">
              <label style="font-size: 14px; color: red;">Lateralidad Cubital</label>
              <select name="lateralidadCubital" id="lateralidadCubital" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_cubital == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_cubital == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_cubital == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_cubital == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>

            <!--******Deltopectoral*******-->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Deltopectoral</strong>
              <select name="Deltopectoral" id="Deltopectoral" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($deltopectoral == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($deltopectoral == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadDeltopectoral">
              <label style="font-size: 14px; color: red;">Lateralidad Deltopectoral</label>
              <select name="lateralidadDeltopectoral" id="lateralidadDeltopectoral" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_dectopectoral == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_dectopectoral == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_dectopectoral == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_dectopectoral == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>

            <!--******+Femoral*******-->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Femoral</strong>
              <select name="Femoral" id="Femoral" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($femoral == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($femoral == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadFemoral">
              <label style="font-size: 14px; color: red;">Lateralidad Femoral</label>
              <select name="lateralidadFemoral" id="lateralidadFemoral" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_femoral == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_femoral == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_femoral == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_femoral == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>


            <!--******+Radial*******-->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Radial</strong>
              <select name="Radial" id="Radial" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($radial == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($radial == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadRadial">
              <label style="font-size: 14px; color: red;">Lateralidad Radial</label>
              <select name="lateralidadRadial" id="lateralidadRadial" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_radial == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_radial == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_radial == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_radial == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>

            <!-- Subclavio -->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Subclavio</strong>
              <select name="Subclavio" id="Subclavio" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($subclavio == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($subclavio == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadSubclavio">
              <label style="font-size: 14px; color: red;">Lateralidad Subclavio</label>
              <select name="lateralidadSubclavio" id="lateralidadSubclavio" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_subclavio == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_subclavio == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_subclavio == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_subclavio == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>

            <!-- Transradial Distal -->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Transradial Distal</strong>
              <select name="TransradialDistal" id="TransradialDistal" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($transradial == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($transradial == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadTransradialDistal">
              <label style="font-size: 14px; color: red;">Lateralidad Transradial Distal</label>
              <select name="lateralidadTransradialDistal" id="lateralidadTransradialDistal" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro"<?php if ($lateralidad_transradial == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                <option value="Derecha"<?php if ($lateralidad_transradial == 'Derecha') echo 'selected'; ?>>Derecha</option>
                <option value="Izquierda"<?php if ($lateralidad_transradial == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                <option value="Bilateral"<?php if ($lateralidad_transradial == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
              </select>
            </div>
          </div> <!-- <div class="row">-->

          <!--********************destino final*********************-->
          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6> Destino Final </h6> 
          </div>

          <div class="row">
            <div class="col-md-4" style="font-size: 14px;">
                <strong style="font-size: 14px;">Destino Final</strong>
                <select name="destinofinal" id="destinofinal" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro"<?php if ($destino_final == 'Sin Registro') echo 'selected'; ?>>Seleccione...</option>
                  <option value="Domicilio"<?php if ($destino_final == 'Domicilio') echo 'selected'; ?>>Domicilio</option>
                  <option value="Hospitalizacion Obstetricos 4Piso"<?php if ($destino_final == 'Hospitalizacion Obstetricos 4Piso') echo 'selected'; ?>>Hospitalización Obstétricos (1er Piso)</option>
                  <option value="Hospitalizacion Clinicos Adultos 1Piso"<?php if ($destino_final == 'Hospitalizacion Clinicos Adultos 1Piso') echo 'selected'; ?>>Hospitalización Clínicos Adultos (1er Piso)</option>
                  <option value="Hospitalización Quirurgicos Adultos 2Piso"<?php if ($destino_final == 'Hospitalización Quirurgicos Adultos 2Piso') echo 'selected'; ?>>Hospitalización Quirúrgicos Adultos (2o Piso)</option>
                  <option value="Hospitalizacion Clinicos Adultos 3Piso"<?php if ($destino_final == 'Hospitalizacion Clinicos Adultos 3Piso') echo 'selected'; ?>>Hospitalización Clínicos Adultos (3er Piso)</option>
                  <option value="Hospitalizacion Clinicos Adultos 4Piso"<?php if ($destino_final == 'Hospitalizacion Clinicos Adultos 4Piso') echo 'selected'; ?>>Hospitalización Clínicos Adultos (4o Piso)</option>
                  <option value="Hospitalizacion Procedimientos Urgentes"<?php if ($destino_final == 'Hospitalizacion Procedimientos Urgentes') echo 'selected'; ?>>Hospitalización Procedimientos Urgentes</option>
                  <option value="UCIA"<?php if ($destino_final == 'UCIA') echo 'selected'; ?>>UCIA - Unidad de Cuidados Intensivos Adultos</option>
                  <option value="UTIA"<?php if ($destino_final == 'UTIA') echo 'selected'; ?>>UTIA - Unidad de Cuidados Intermedios Adultos</option>
                  <option value="UTPH"<?php if ($destino_final == 'UTPH') echo 'selected'; ?>>UTPH - Unidad de Trasplante de Progenitores Hematopoyéticos</option>
                  <option value="Patologia"<?php if ($destino_final == 'Patologia') echo 'selected'; ?>>Patologia</option>
                </select>
            </div>
          </div> <!--Div del row-->

          <!--**********************************Lesión coronaria***************************************-->

          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6> Lesión Coronaria </h6> 
          </div>

          <div class="row">
            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Bifurcación</strong>
              <select name="bifurcacion" id="bifurcacion" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($bifurcacion == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($bifurcacion == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Cincunfleja</strong>
              <select name="Cincunfleja" id="Cincunfleja" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($cincunfleja == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($cincunfleja == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Coronario Derecha</strong>
              <select name="coronarioderecha" id="coronarioderecha" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($coronaria_derecha == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($coronaria_derecha == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Descendente Anterior</strong>
              <select name="descendenteanterior" id="descendenteanterior" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($desendente_ant == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($desendente_ant == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Ramo Intermedio</strong>
              <select name="ramointermedio" id="ramointermedio" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($ramo_inter == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($ramo_inter == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Tronco Coronario Izquierdo</strong>
              <select name="troncocoronario" id="troncocoronario" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($tronco_coronario == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($tronco_coronario == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>
          </div> <!--Div del row-->


           <!--**********************************Lesión coronaria***************************************-->

           <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6> Stent | Balón </h6> 
          </div>

          <div class="row">
            <div class="col-md-12" style="font-size:14px;">
              <strong style="font-size:14px;">Stent</strong>
              <select name="Stent" id="Stent" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($stent == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($stent == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-6" id="numeroStent">
              <label style="font-size: 14px; color: red;"> Número </label>
              <input id="nostent" name="nostent" type="number" class="control form-control" value="<?php echo $stent_numero; ?>" style="font-size: 14px;" required>
            </div>

            <div class="col-md-6" id="medidasStent" >
              <label style="font-size: 14px; color: red;"> Medidas </label>
              <input id="medidastent" name="medidastent" type="string" class="control form-control" value="<?php echo $stent_medidas; ?>" style="font-size: 14px;" required>
            </div>

            <!-- Balón -->
            <div class="col-md-12" style="font-size:14px;">
              <strong style="font-size:14px;">Balón</strong>
              <select name="balon" id="balon" class="form-control" style="font-size: 14px;">
                <option value="No"<?php if ($balon == 'No') echo 'selected'; ?>>No</option>
                <option value="Si"<?php if ($balon == 'Si') echo 'selected'; ?>>Sí</option>
              </select>
            </div>

            <div class="col-md-6" id="numeroBalon" >
              <label style="font-size: 14px; color: red;"> Número </label>
              <input id="nobalon" name="nobalon" type="number" class="control form-control" value="<?php echo $balon_numeros; ?>" style="font-size: 14px;" required>
            </div>

            <div class="col-md-6" id="medidasBalon" >
              <label style="font-size: 14px; color: red;"> Medidas </label>
              <input id="medidabalon" name="medidabalon" type="string" class="control form-control" value="<?php echo $balon_medidas; ?>" style="font-size: 14px;" required>
            </div>
          </div> <!--div del row de Lesión Coronaria-->
        
                </div> <!-- <div class="col col-10">-->
            </div> <!-- <div class ="row">-->
<br>
            <div class="container" style="text-align: right;">
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
        </div> <!-- <div class="container" width="100%" height="800px" style="margin-bottom: 100px;">-->
    </form>

        


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/update.js"></script>

<!-- se agrega el footer-->
    <footer>Hospital Regional de Alta Especialidad de Ixtapaluca<p style="font-size: 10px">
            Dirección de Operaciones - Gestión Digital en Salud - 2023</p> 
    </footer>
    
</body>
</html>