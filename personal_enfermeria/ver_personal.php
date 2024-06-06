<?php
require ('php/controllers/ver_personal.controller.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver detalles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <?php include 'components/navbar.php'; ?>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="enfermero-container d-flex align-items-center">
          <div class="foto-enfermero mr-3">
            <img src="<?php echo $foto; ?>" alt="Foto del Enfermero" class="img-fluid">
          </div>

          <div class="nombre-enfermero">
            <h4><?php echo $apellidoPaterno . ' ' . $apellidoMaterno . ' ' . $nombre ?></h4>
            <table class="tabla-datos">
              <tr>
                <th>No. Empleado</th>
                <th><?php echo $noempleado ?></th>
              </tr>
              <tr>
                <td>Tipo de Contrato</td>
                <th><?php echo $tipocontrato ?></th>

              </tr>
              <tr>
                <td>Servicio</td>
                <th><?php echo $servicio ?></th>

              </tr>
              <tr>
                <td>Fecha de Ingreso</td>
                <th><?php echo $fechaIngreso ?></th>

              </tr>
              <tr>
                <td>Onomástico</td>
                <th><?php echo $onomastico ?></th>

              </tr>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">

          <table class="tabla-datos">
            <tr>
              <th>INFORMACIÓN PLAZA</th>
            </tr>
            <tr>
              <td>Código</td>
              <th><?php echo $codigo ?></th>

            </tr>
            <tr>
              <td>Puesto</td>
              <th><?php echo $puesto ?></th>

            </tr>
            <tr>
              <td>Turno actual</td>
              <th><?php echo $turno ?></th>

            </tr>
            <tr>
              <td>Jornada Laboral</td>
              <th><?php echo $jornada ?></th>

            </tr>
            <tr>
              <td>Servicio</td>
              <th><?php echo $servicio ?></th>

            </tr>
          </table>


        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">

          <table class="tabla-datos">
            <tr>
              <th>INFORMACIÓN ACADÉMICA</th>
            </tr>
            <tr>
              <td>Técnico</td>
              <th><?php echo $grado_tecnico ?></th>
              <th> - </th>
              <th><?php echo $cedula_tecnico ?></th>
            </tr>
            <tr>
              <td>Post-técnico</td>
              <th><?php echo $grado_posttecnico ?></th>
              <th> - </th>
              <th><?php echo $cedula_posttecnico ?></th>
            </tr>
            <tr>
              <td>Licenciatura</td>
              <th><?php echo $grado_licenciatura ?></th>
              <th> - </th>
              <th><?php echo $cedula_lic ?></th>
            </tr>
            <tr>
              <td>Especialidad</td>
              <th><?php echo $grado_especialidad ?></th>
              <th> - </th>
              <th><?php echo $cedula_especialidad ?></th>
            </tr>
            <tr>
              <td>Maestría</td>
              <th><?php echo $grado_maestria ?></th>
              <th> - </th>
              <th><?php echo $cedula_maestria ?></th>
            </tr>
          </table>


        </div>
      </div>
    </div>
  </div>





  <script src="js/script_index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>