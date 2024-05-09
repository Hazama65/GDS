<?php
include ('php/controllers/consulta.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap 5.3.3 JS (con Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



  <!--estilos css-->
  <link rel="stylesheet" href="css/styles.css">
  <title>Consulta Suplencia de Personal</title>
</head>

<body>

  <div class="container">
    <!-- boton -->
    <form action="php/controllers/generar_pdf.controller.php" method="POST" target="_blank">
      <div class="btn-group d-flex justify-content-end" role="group" aria-label="Basic example">
        <input type="hidden" name="valor" value="<?php echo $id_suplencia; ?>">
        <button type="submit" class="btn btn-outline-success">
          IMPRIMIR <i class="bi bi-printer"></i> | <i class="bi bi-filetype-pdf"></i> PDF
        </button>
      </div>
    </form>




    <br>

    <div class="row">
      <div class="col">
        <table class="table">

          <!--encabezado de la tabla-->
          <thead>
            <tr>
              <td colspan="2" style="padding: 0;">
                <img src="img/imssb.png" alt="img1" style="width: 500px; display: block;">
              </td>
              <td colspan="2" style="padding: 0;">
                <span style="font-size: 10px; color: gray; display: block;">HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE
                  IXTAPALUCA<br>DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS<br>SUBDIRECCIÓN DE RECURSOS HUMANOS</span>
              </td>
            </tr>
          </thead> <!-- aquí finaliza el encabezado-->

          <tbody>
            <tr>
              <td colspan="4"></td>
            </tr>

            <tr>
              <td colspan="4" style="text-align: center; font-weight: bold;">FORMATO PARA SOLICITUD DE AUTORIZACIÓN DE
                SUPLENCIA PERSONAL</td>
            </tr>

            <tr>
              <td colspan="1">No. Suplencia</td>
              <td colspan="1">
                <?php echo $num_suplencia; ?>
              </td>
              <td colspan="1">Fecha Solicitud</td>
              <td colspan="1">
                <?php echo $fecha_realizada; ?>
              </td>
            </tr>

            <tr>
              <td colspan="4" style="text-align: center; background-color:rgb(162, 217, 206,0.2);">DATOS DEL SOLICITANTE
              </td>
            </tr>

            <tr>
              <td colspan="2">Nombre</td>
              <td colspan="2">
                <?php echo $enlace_numeroempleado; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">No. Empleado</td>
              <td colspan="1">
                <?php echo $numeroempleado_1; ?>
              </td>
              <td colspan="1">Nivel Académico</td>
              <td colspan="1">
                <?php echo $niv_academico; ?>
              </td>
            </tr>



            <tr>
              <td colspan="1">Turno</td>
              <td colspan="1">
                <?php echo $turno; ?>
              </td>
              <td colspan="1">Días Hábiles</td>
              <td colspan="1">
                <?php echo $dias_h; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">Horario entrada</td>
              <td colspan="1">
                <?php echo $horaInicio; ?>
              </td>
              <td colspan="1">Horario salida</td>
              <td colspan="1">
                <?php echo $horaFin; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">Código Puesto</td>
              <td colspan="1">
                <?php echo $codigopuesto; ?>
              </td>
              <td colspan="1">Puesto</td>
              <td colspan="1">
                <?php echo $puesto; ?>
              </td>
            </tr>


            <tr>
              <td colspan="1">Servicio</td>
              <td colspan="1">
                <?php echo $servicio; ?>
              </td>
              <td colspan="1">Sub-servicio</td>
              <td colspan="1">
                <?php echo $sub_servicio; ?>
              </td>
            </tr>

            <tr>
              <td colspan="4" style="text-align: center; background-color:rgb(162, 217, 206,0.2);">DATOS DE QUIEN
                EFECTUA LA SUPLENCIA</td>
            </tr>

            <tr>
              <td colspan="2">Nombre</td>
              <td colspan="2">
                <?php echo $nombre_suplencia; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">No. Empleado</td>
              <td colspan="1">
                <?php echo $numeroempleado_suplencia; ?>
              </td>
              <td colspan="1">Nivel Académico</td>
              <td colspan="1">
                <?php echo $niv_academico2; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">Turno</td>
              <td colspan="1">
                <?php echo $turno2; ?>
              </td>
              <td colspan="1">Días Hábiles</td>
              <td colspan="1">
                <?php echo $dias_h2; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">Horario entrada</td>
              <td colspan="1">
                <?php echo $horaInicio2; ?>
              </td>
              <td colspan="1">Horario salida</td>
              <td colspan="1">
                <?php echo $horaFin; ?>
              </td>
            </tr>

            <tr>
              <td colspan="1">Código Puesto</td>
              <td colspan="1">
                <?php echo $codigopuesto_suplencia; ?>
              </td>
              <td colspan="1">Puesto</td>
              <td colspan="1">
                <?php echo $puesto_suplencia; ?>
              </td>
            </tr>


            <tr>
              <td colspan="1">Servicio</td>
              <td colspan="1">
                <?php echo $servicio2; ?>
              </td>
              <td colspan="1">Sub-servicio</td>
              <td colspan="1">
                <?php echo $sub_servicio2; ?>
              </td>
            </tr>


            <tr>
              <td colspan="4" style="text-align: center; background-color:rgb(162, 217, 206,0.2);">DÍA QUE SOLICITA</td>
            </tr>

            <tr>
              <td colspan="1">Del:</td> <!-- fecha inicio de solicitud de guardia-->
              <td colspan="1">
                <?php echo $fecha_tramite; ?>
              </td>
              <td colspan="1">Al:</td> <!-- fecha fin de solicitud de guardia-->
              <td colspan="1">
                <?php echo $fecha_suplencia; ?>
              </td>
            </tr>

            <tr>
              <td colspan="2">Autoriza:</td>
              <td colspan="2">
                <?php echo $autoriza; ?>
              </td>
            </tr>

            <tr>
              <td colspan="2">Observaciones:</td>
              <td colspan="2">
                <?php echo $observaciones; ?>
              </td>
            </tr>



          </tbody>

        </table>


      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





</body>

</html>