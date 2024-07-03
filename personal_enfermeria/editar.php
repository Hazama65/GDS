<?php
include ('php/controllers/edit.controller.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Personal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

  <?php include 'components/navbar.php'; ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="modal-content">
          <div class="edicion-personal">
            <h5 class="modal-title text-center">Edición de Personal</h5>
          </div>
          <div class="body-container">
            <div class="titulo-personal">
              <h6 class="bi bi-person-fill-add"> Datos Personales</h6>
            </div> <br>

            <form id="patientForm" method="POST">
              <div class="row">
                <input type="hidden" id="id_enfermero" name="id_enfermero" value="<?php echo $id_enfermero; ?>">

                <div class="col-md-4">
                  <strong>CURP</strong>
                  <input type="text" class="form-control" id="CURP" name="CURP" required>
                </div>

                <div class="col-md-4">
                  <strong>Apellido Paterno</strong>
                  <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno"
                    value="<?php echo $apellidoPaterno ?>" required>
                </div>

                <div class="col-md-4">
                  <strong>Apellido Materno</strong>
                  <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno"
                    value="<?php echo $apellidoMaterno ?>" required>
                </div>

                <div class="col-md-4">
                  <strong>Nombre(s)</strong>
                  <input type="text" class="form-control" id="nombre" name="nombre"
                    value="<?php echo $nombre ?>" required>
                </div>

                <div class="col-md-4">
                  <strong>Género</strong>
                  <input type="text" class="form-control" id="genero" name="genero" readonly>
                </div>

                <div class="col-md-4">
                    <strong>Onomástico</strong>
                    <input type="date" class="form-control" id="onomastico" name="onomastico" readonly>
                </div>

                <div class="col-md-4">
                    <strong>Edad</strong>
                    <input type="text" class="form-control" id="edad" name="edad" readonly>
                </div>

                <div class="col-md-4">
                <strong>RFC </strong>
                <input type="text" class="form-control" id="RFC" name="RFC" required>
            </div>

                </div> <br>

                <div class="row">

                <div class="col-md-4">
                  <strong>Contacto Emergencia</strong>
                  <select id="contacto_emergencia" name="contacto_emergencia" class="control form-control"
                    required>
                    <option value="Sin seleccion">Seleccione...</option>
                    <option value="Padre / Madre">Padre / Madre</option>
                    <option value="Hermano (a)">Hermano (a)</option>
                    <option value="Esposo (a)">Esposo (a)</option>
                    <option value="Hijo (a)">Hijo (a)</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>

                <div class="col-md-4">
                    <strong>Nombre Contacto Emergencia</strong>
                    <input type="text" class="form-control" id="contacto" name="contacto" required>
                </div>



                <div class="col-md-4">
                  <strong>No. Contacto Emergencia</strong>
                  <input type="number" class="form-control" id="no_contacto_emergencia" name="no_contacto_emergencia" placeholder="5558585767" required>
                </div>

                

              </div><br>

              <div class="titulo-personal">
                <h6 class="bi bi-person-vcard"> Información Contrato</h6>
              </div> <br>

              <div class="row">
                
                

                <div class="col-md-4">
                  <strong>No. Empleado</strong>
                  <input type="number" name="noempleado" id="noempleado" class="form-control"
                    value="<?php echo $noempleado ?>" required>
                </div>

                <div class="col-md-4">
                  <strong>Tipo de Contrato:</strong>
                  <select id="tipocontrato" name="tipocontrato" class="control form-control" style="font-size: 13px;"
                    required>
                    <option value="Sin seleccion"<?php if ($tipocontrato == 'Sin seleccion')echo 'selected'; ?>>Seleccione...</option>
                    <option value="Base"<?php if ($tipocontrato == 'Base')echo 'selected'; ?>>Base</option>
                    <option value="Confianza"<?php if ($tipocontrato == 'Confianza')echo 'selected'; ?>>Confianza</option>
                    <option value="Eventual"<?php if ($tipocontrato == 'Eventual')echo 'selected'; ?>>Eventual</option>
                    <option value="Provisional Reservada"<?php if ($tipocontrato == 'Provisional Reservada')echo 'selected'; ?>>Provisional Reservada</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <strong>Código</strong>
                  <input type="number" class="form-control" id="codigo" name="codigo"
                    value="<?php echo $codigo ?>" required>
                </div>

                <div class="col-md-4">
                  <strong>Puesto</strong>
                  <select class="form-control" name="puesto" id="puesto" required>
                    <?php
                    if (!empty($data_puesto)) {
                      foreach ($data_puesto as $row1) {
                        $selected = ($row1["id_puesto"] == $puesto) ? 'selected' : '';
                        echo "<option value='" . $row1["id_puesto"] . "' $selected>" . $row1["puesto"] . "</option>";
                      }
                    } else {
                      echo "<option value=''>No hay datos disponibles</option>";
                    }
                    ?>
                  </select>
                </div>

                <div class="col-md-4">
                  <strong>Fecha Ingreso</strong>
                  <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" value="<?php echo $fechaIngreso ?>" required>
                </div>

               
                <!-- PONER AÑO -->
                <div class="col-md-4">
                  <strong>Año En Curso</strong>
                  <select class="form-control" name="ayo_curso" id="ayo_curso" required>
                    <option value=""<?php if ($ayo_curso == '')echo 'selected'; ?>>Seleccione</option>
                    <option value="2024-1"<?php if ($ayo_curso == '2024-1')echo 'selected'; ?>>2024-1</option>
                    <option value="2024-2"<?php if ($ayo_curso == '2024-2')echo 'selected'; ?>>2024-2</option>
                    <option value="2025-1"<?php if ($ayo_curso == '2025-1')echo 'selected'; ?>>2025-1</option>
                    <option value="2025-2"<?php if ($ayo_curso == '2025-2')echo 'selected'; ?>>2025-2</option>
                    <option value="2026-1"<?php if ($ayo_curso == '2026-1')echo 'selected'; ?>>2026-1</option>
                    <option value="2026-2"<?php if ($ayo_curso == '2026-2')echo 'selected'; ?>>2026-2</option>
                  </select>
                </div>


                <!--
                <div class="col-md-8">
                  <strong>Turno - Jornada laboral</strong>
                  <select class="form-control" name="Turno" id="Turno" required>
                    <?php
                    if (!empty($data_turno)) {
                      foreach ($data_turno as $row1) {
                        $selected = ($row1["id_turno"] == $turno) ? 'selected' : '';
                        echo "<option value='" . $row1["id_turno"] . "' $selected>" . $row1["turno"] . "</option>";
                      }
                    } else {
                      echo "<option value=''>No hay datos disponibles</option>";
                    }
                    ?>
                  </select>
                </div>-->


                <div class="col-md-4">
                  <strong>Turno</strong>
                  <select class="form-control" name="turno" id="turno">
                      <option value="Seleccione...">Seleccione...</option>
                      <option value="Matutino">Matutino</option>
                      <option value="Vespertino">Vespertino</option>
                      <option value="Nocturno">Nocturno</option>
                      <option value="Jornada Especial">Jornada Especial</option>
                    </select>
                </div>


                <div class="col-md-8">
                  <strong>Días laborales</strong>
                    <div class="checkbox-container">
                  
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="lunes" value="Lunes">
                            <label class="form-check-label" for="lunes">Lunes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="martes" value="Martes">
                            <label class="form-check-label" for="martes">Martes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="miercoles" value="Miércoles">
                            <label class="form-check-label" for="miercoles">Miércoles</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jueves" value="Jueves">
                            <label class="form-check-label" for="jueves">Jueves</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="viernes" value="Viernes">
                            <label class="form-check-label" for="viernes">Viernes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="sabado" value="Sábado">
                            <label class="form-check-label" for="sabado">Sábado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="domingo" value="Domingo">
                            <label class="form-check-label" for="domingo">Domingo</label>
                        </div>

                  </div>
                </div>



                <div class="col-md-4">
                  <strong>Servicio</strong>
                  <select class="form-control" name="Servicio" id="Servicio" required>
                    <?php
                    if (!empty($data_servicio)) {
                      foreach ($data_servicio as $row1) {
                        $selected = ($row1["id_servicio"] == $servicio) ? 'selected' : '';
                        echo "<option value='" . $row1["id_servicio"] . "' $selected>" . $row1["servicio"] . "</option>";
                      }
                    } else {
                      echo "<option value=''>No hay datos disponibles</option>";
                    }
                    ?>
                  </select>
                </div>

            


              </div><br>


              <div class="titulo-personal">
                <h6 class="bi bi-mortarboard-fill"> Información Académica</h6>
              </div> <br>

              <div class="row">

                <div class="col-md-8">
                  <strong>Técnico</strong>
                  <input type="text" class="form-control" id="grado_tecnico" name="grado_tecnico" value="<?php echo $grado_tecnico ?>">
                </div>

                <div class="col-md-4">
                  <strong>Cédula</strong>
                  <input type="number" class="form-control" id="cedula_tecnico" name="cedula_tecnico" value="<?php echo $cedula_tecnico ?>">
                </div>

                <div class="col-md-8">
                  <strong>Post-Técnico</strong>
                  <input type="text" class="form-control" id="grado_posttecnico" name="grado_posttecnico" value="<?php echo $grado_posttecnico ?>">
                </div>

                <div class="col-md-4">
                  <strong>Cédula</strong>
                  <input type="number" class="form-control" id="cedula_posttecnico" name="cedula_posttecnico" value="<?php echo $cedula_posttecnico ?>">
                </div>

                <div class="col-md-8">
                  <strong>Licenciatura</strong>
                  <input type="text" class="form-control" id="grado_licenciatura" name="grado_licenciatura" value="<?php echo $grado_licenciatura ?>">
                </div>

                <div class="col-md-4">
                  <strong>Cédula</strong>
                  <input type="number" class="form-control" id="cedula_lic" name="cedula_lic" value="<?php echo $cedula_lic ?>">
                </div>

                <div class="col-md-8">
                  <strong>Especialidad</strong>
                  <input type="text" class="form-control" id="grado_especialidad" name="grado_especialidad" value="<?php echo $grado_especialidad ?>">
                </div>

                <div class="col-md-4">
                  <strong>Cédula</strong>
                  <input type="number" class="form-control" id="cedula_especialidad" name="cedula_especialidad" value="<?php echo $cedula_especialidad ?>">
                </div>

                <div class="col-md-8">
                  <strong>Maestría</strong>
                  <input type="text" class="form-control" id="grado_maestria" name="grado_maestria" value="<?php echo $grado_maestria ?>">
                </div>

                <div class="col-md-4">
                  <strong>Cédula</strong>
                  <input type="number" class="form-control" id="cedula_maestria" name="cedula_maestria" value="<?php echo $cedula_maestria ?>">
                </div>

                <div class="col-md-8">
                  <strong>Doctorado</strong>
                  <input type="text" class="form-control" id="grado_doctorado" name="grado_doctorado" value="<?php echo $grado_doctorado ?>">
                </div>

                <div class="col-md-4">
                  <strong>Cédula</strong>
                  <input type="number" class="form-control" id="cedula_doctorado" name="cedula_doctorado" value="<?php echo $cedula_doctorado ?>">
                </div>
                


                <!-- Sección de Colegiación -->
                <div class="col-md-3">
                  <strong>Colegiación</strong>
                  <select class="form-control" name="colegiacion" id="colegiacion" required onchange="habilitarCampos('colegiacion')">
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_colegiacion" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_colegiacion" name="fechaExpedicion_colegiacion" required disabled max="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="col-md-3" id="divFechaVigencia_colegiacion" style="display: none;">
                  <strong>Vigencia Colegiación</strong>
                  <input type="date" class="form-control" id="fechaVigencia_colegiacion" name="fechaVigencia_colegiacion" readonly disabled>
                </div>

                <div class="col-md-3" id="divEstatus_colegiacion" style="display: none;">
                  <strong>Estatus Colegiación</strong>
                  <input type="text" class="form-control" id="estatus_colegiacion" name="estatus_colegiacion" readonly>
                </div>
                                      

              <!-- Sección de Certificación -->
              
              <div class="col-md-3">
              <strong>Certificación</strong>
              <select class="form-control" name="certificacion" id="certificacion" required onchange="habilitarCampos('certificacion')">
                <option value="">Seleccione</option>
                <option value="Si">Sí</option>
                <option value="No">No</option>
              </select>
            </div>

            <div class="col-md-3" id="divFechaExpedicion_certificacion" style="display: none;">
              <strong>Fecha Expedición</strong>
              <input type="date" class="form-control" id="fechaExpedicion_certificacion" name="fechaExpedicion_certificacion" required disabled max="<?php echo date('Y-m-d'); ?>">
            </div>

            <div class="col-md-3" id="divFechaVigencia_certificacion" style="display: none;">
              <strong>Vigencia Certificación</strong>
              <input type="date" class="form-control" id="fechaVigencia_certificacion" name="fechaVigencia_certificacion" readonly disabled>
            </div>

            <div class="col-md-3" id="divEstatus_certificacion" style="display: none;">
              <strong>Estatus Certificación</strong>
              <input type="text" class="form-control" id="estatus_certificacion" name="estatus_certificacion" readonly>
            </div>
            
              






                <div class="col-md-12">
                  <strong>Observaciones</strong>
                  <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?php echo $observaciones ?>">
                </div>

              </div> <br>



              <div class="titulo-personal">
                <h6 class="bi bi-mortarboard-fill"> Cursos Obligatorios</h6>
              </div> <br>

              <div class="row">


              <div class="col-md-3">
                <strong>BLS</strong>
                  <select class="form-control" name="BLS" id="BLS" onchange="toggleFields('BLS')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                </select>
              </div>

              <div class="col-md-3" id="divFechaExpedicion_BLS" style="display: none;">
                <strong>Fecha Expedición</strong>
                <input type="date" class="form-control" id="fechaExpedicion_BLS" name="fechaExpedicion_BLS" required>
              </div>

              <div class="col-md-3" id="divFechaVigencia_BLS" style="display: none;">
                <strong>Fecha Vigencia</strong>
                <input type="date" class="form-control" id="fechaVigencia_BLS" name="fechaVigencia_BLS" disabled>
              </div>

              <div class="col-md-3" id="divEstatus_BLS" style="display: none;">
                <strong>Estatus BLS</strong>
                <input type="text" class="form-control" id="estatus_BLS" name="estatus_BLS" readonly>
              </div>
              
              




                <div class="col-md-3">
                  <strong>ACLS</strong>
                  <select class="form-control" name="ACLS" id="ACLS" onchange="toggleFields('ACLS')" required >
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_ACLS" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_ACLS" name="fechaExpedicion_ACLS" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_ACLS" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_ACLS" name="fechaVigencia_ACLS" required disabled>
                </div>

                <div class="col-md-3" id="divEstatus_ACLS" style="display: none;">
                  <strong>Estatus ACLS</strong>
                  <input type="text" class="form-control" id="estatus_ACLS" name="estatus_ACLS" readonly>
                </div>



                <div class="col-md-3">
                  <strong>ReNeo</strong>
                  <select class="form-control" name="ReNeo" id="ReNeo" onchange="toggleFields('ReNeo')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_ReNeo" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_ReNeo" name="fechaExpedicion_ReNeo" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_ReNeo" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_ReNeo" name="fechaVigencia_ReNeo" required disabled>
                </div>

                <div class="col-md-3" id="divEstatus_ReNeo" style="display: none;">
                  <strong>Estatus ReNeo</strong>
                  <input type="text" class="form-control" id="estatus_ReNeo" name="estatus_ReNeo" readonly>
                </div>





                <div class="col-md-3">
                  <strong>PALS</strong>
                  <select class="form-control" name="PALS" id="PALS" onchange="toggleFields('PALS')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_PALS" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_PALS" name="fechaExpedicion_PALS" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_PALS" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_PALS" name="fechaVigencia_PALS" required disabled>
                </div>

                <div class="col-md-3" id="divEstatus_PALS" style="display: none;">
                  <strong>Estatus PALS</strong>
                  <input type="text" class="form-control" id="estatus_PALS" name="estatus_PALS" readonly>
                </div>





                <div class="col-md-3" >
                  <strong>ALSO</strong>
                  <select class="form-control" name="ALSO" id="ALSO" onchange="toggleFields('ALSO')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_ALSO" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_ALSO" name="fechaExpedicion_ALSO" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_ALSO" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_ALSO" name="fechaVigencia_ALSO" required disabled>
                </div>

                <div class="col-md-3" id="divEstatus_ALSO" style="display: none;">
                  <strong>Estatus ALSO</strong>
                  <input type="text" class="form-control" id="estatus_ALSO" name="estatus_ALSO" readonly>
                </div>





                <div class="col-md-3">
                  <strong>POE</strong>
                  <select class="form-control" name="POE" id="POE" onchange="toggleFields('POE')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_POE" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_POE" name="fechaExpedicion_POE" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_POE" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_POE" name="fechaVigencia_POE" required>
                </div>

                <div class="col-md-3" id="divEstatus_POE" style="display: none;">
                  <strong>Estatus POE</strong>
                  <input type="text" class="form-control" id="estatus_POE" name="estatus_POE" readonly>
                </div>




                <div class="col-md-3">
                  <strong>CBSPD</strong>
                  <select class="form-control" name="CBSPD" id="CBSPD" onchange="toggleFields('CBSPD')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_CBSPD" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_CBSPD" name="fechaExpedicion_CBSPD" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_CBSPD" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_CBSPD" name="fechaVigencia_CBSPD" required>
                </div>

                <div class="col-md-3" id="divEstatus_CBSPD" style="display: none;">
                  <strong>Estatus CBSPD</strong>
                  <input type="text" class="form-control" id="estatus_CBSPD" name="estatus_CBSPD" readonly>
                </div>




                <div class="col-md-3">
                  <strong>Certificación</strong>
                  <select class="form-control" name="Certificación" id="Certificación" onchange="toggleFields('Certificación')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_Certificación" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_Certificación" name="fechaExpedicion_Certificación" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_Certificación" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_Certificación" name="fechaVigencia_Certificación" required>
                </div>

                <div class="col-md-3" id="divEstatus_Certificación" style="display: none;">
                  <strong>Estatus Certificación</strong>
                  <input type="text" class="form-control" id="estatus_Certificación" name="estatus_Certificación" readonly>
                </div>







                <div class="col-md-3">
                  <strong>Certificación PICC</strong>
                  <select class="form-control" name="CertificaciónPICC" id="CertificaciónPICC" onchange="toggleFields('CertificaciónPICC')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-3" id="divFechaExpedicion_CertificaciónPICC" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_CertificaciónPICC" name="fechaExpedicion_CertificaciónPICC" required>
                </div>

                <div class="col-md-3" id="divFechaVigencia_CertificaciónPICC" style="display: none;">
                  <strong>Fecha Vigencia</strong>
                  <input type="date" class="form-control" id="fechaVigencia_CertificaciónPICC" name="fechaVigencia_CertificaciónPICC" required>
                </div>

                <div class="col-md-3" id="divEstatus_CertificaciónPICC" style="display: none;">
                  <strong>Estatus Certificación</strong>
                  <input type="text" class="form-control" id="estatus_CertificaciónPICC" name="estatus_CertificaciónPICC" readonly>
                </div>





              </div> <br>




              <div class="titulo-personal">
                <h6 class="bi bi-mortarboard-fill"> Capacitación HRAEI </h6>
              </div> <br>

              <div class="row">
              
              <div class="col-md-6">
                <strong>Interculturalidad</strong>
                <select class="form-control" name="interculturalidad" id="interculturalidad" onchange="toggleFechaExpedicion('interculturalidad')" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6" id="divFechaExpedicion_interculturalidad" style="display: none;">
                <strong>Fecha Expedición</strong>
                <input type="date" class="form-control" id="fechaExpedicion_interculturalidad" name="fechaExpedicion_interculturalidad" required>
              </div>



                <div class="col-md-6">
                  <strong>Capacitación Virtual de Higiene de Manos</strong>
                  <select class="form-control" name="higienemanos" id="higienemanos" onchange="toggleFechaExpedicion('higienemanos')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_higienemanos" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_higienemanos" name="fechaExpedicion_higienemanos" required>
                </div>



                <div class="col-md-6">
                  <strong>Capacitación Virtual Manejo de Residuos Hospitalarios</strong>
                  <select class="form-control" name="residuoshospitalarios" id="residuoshospitalarios" onchange="toggleFechaExpedicion('residuoshospitalarios')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_residuoshospitalarios" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_residuoshospitalarios" name="fechaExpedicion_residuoshospitalarios" required>
                </div>




                <div class="col-md-6">
                  <strong>Acciones Esenciales de Seguridad del Paciente</strong>
                  <select class="form-control" name="seguridadpaciente" id="seguridadpaciente" onchange="toggleFechaExpedicion('seguridadpaciente')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_seguridadpaciente" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_seguridadpaciente" name="fechaExpedicion_seguridadpaciente" required>
                </div>


                
                <div class="col-md-6">
                  <strong>Curso Virtual Sobre los Fundamentos del Cuidado Paliativo</strong>
                  <select class="form-control" name="cuidadopaliativo" id="cuidadopaliativo" onchange="toggleFechaExpedicion('cuidadopaliativo')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_cuidadopaliativo" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_cuidadopaliativo" name="fechaExpedicion_cuidadopaliativo" required>
                </div>



                <div class="col-md-6">
                  <strong>Curso Básico de Combate de Incendios</strong>
                  <select class="form-control" name="combateincendios" id="combateincendios" onchange="toggleFechaExpedicion('combateincendios')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_combateincendio" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_combateincendios" name="fechaExpedicion_combateincendios" required>
                </div>




                <div class="col-md-6">
                  <strong>Introducción al Modelo Único de Evaluación de la Calidad</strong>
                  <select class="form-control" name="evaluacioncalidad" id="evaluacioncalidad" onchange="toggleFechaExpedicion('evaluacioncalidad')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_evaluacioncalidad" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_evaluacioncalidad" name="fechaExpedicion_evaluacioncalidad" required>
                </div>




                <div class="col-md-6">
                  <strong>Trato Digno en los Servicios de Salud</strong>
                  <select class="form-control" name="tratodigno" id="tratodigno" onchange="toggleFechaExpedicion('tratodigno')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6"  id="divFechaExpedicion_tratodigno" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_tratodigno" name="fechaExpedicion_tratodigno" required>
                </div>
                



                <div class="col-md-6">
                  <strong>Reanimación Cardiopulmonar en Adulto para Profesionales de la Salud</strong>
                  <select class="form-control" name="reanimacion" id="reanimacion" onchange="toggleFechaExpedicion('reanimacion')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_reanimacion" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_reanimacion" name="fechaExpedicion_reanimacion" required>
                </div>




                <div class="col-md-6">
                  <strong>Salud Mental en Profesionales de la Salud</strong>
                  <select class="form-control" name="saludmental" id="saludmental" onchange="toggleFechaExpedicion('saludmental')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_saludmental" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_saludmental" name="fechaExpedicion_saludmental" required>
                </div>





                <div class="col-md-6">
                  <strong style="font-size:13px;">Capacitación de Códigos y Protocolos Hospitalarios de Emergencias y Desastres</strong>
                  <select class="form-control" name="emergenciasydesastres" id="emergenciasydesastres" onchange="toggleFechaExpedicion('emergenciasydesastres')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6" id="divFechaExpedicion_emergenciasydesastres" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_emergenciasydesastres" name="fechaExpedicion_emergenciasydesastres" required>
                </div>



                
                <div class="col-md-6">
                  <strong style="font-size:13px;">Medidas Basadas en la Transmisión de Agentes Infecciosos y Procesos de Limpieza</strong>
                  <select class="form-control" name="procesoslimpieza" id="procesoslimpieza" onchange="toggleFechaExpedicion('procesoslimpieza')" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-md-6" id="divFechaExpedicion_procesoslimpieza" style="display: none;">
                  <strong>Fecha Expedición</strong>
                  <input type="date" class="form-control" id="fechaExpedicion_procesoslimpieza" name="fechaExpedicion_procesoslimpieza" required>
                </div>


              </div> <br>
                  



              <br>
              <div class="text-right"> <!-- Agregamos la clase text-right para alinear el contenido a la derecha -->

                <button type="submit" class="btn btn-success btn-sm">Guardar Cambios</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/loader.php'; ?>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

  <script type="module">
    import { editForm } from "./js/update.js";
    editForm();
  </script>


</body>

</html>