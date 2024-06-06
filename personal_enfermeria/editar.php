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

                <div class="col-md-4">
                  <strong>Onomástico</strong>
                  <input type="date" class="form-control" id="onomastico" name="onomastico" value="<?php echo $onomastico ?>" required>
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

                <div class="col-md-4">
                  <strong>Turno</strong>
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
                </div>

                <div class="col-md-4">
                  <strong>Jornada laboral</strong>
                  <input type="text" class="form-control" id="Jornada" name="Jornada" value="<?php echo $jornada ?>" required>
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

                <div class="col-md-12">
                  <strong>Observaciones</strong>
                  <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?php echo $observaciones ?>">
                </div>

              </div>



              <br>
              <div class="text-right"> <!-- Agregamos la clase text-right para alinear el contenido a la derecha -->
                <button type="button" class="btn btn-danger btn-sm" id="limpiarFormularioBtn">Limpiar</button>
                <button type="submit" class="btn btn-success btn-sm">Guardar</button>

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