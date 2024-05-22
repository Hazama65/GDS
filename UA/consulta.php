<?php
    include('php/controllers/consulta.controller.php');
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
  <link rel="stylesheet" href="styles/styles.css">
  <title>Turnos Unidad de Apoyo</title>
</head>

<body>

  <div class="container">

    <br>

    <div class="row">
      <div class="col">
        <table class="table">

          <!--encabezado de la tabla-->
          <thead>
            <tr>
              <td colspan="2" style="padding: 0;">
                <div class="d-flex justify-content-center">
                  <img src="img/imssb.png" alt="img1" style="max-width: 80%;">
                </div>
              </td>
            </tr>
          </thead>

          <!-- aquí finaliza el encabezado-->

          <tbody>
            <tr>
              <td colspan="4"></td>
            </tr>

            <tr>
              <td colspan="4" style="text-align: center; background-color:rgb(162, 217, 206,0.2);">Datos Generales</td>
            </tr>

            <tr>
              <td colspan="1">Nombre Paciente</td>
              <td colspan="1"><?php echo $nombre ?></td>
            </tr>

            <tr>
              <td colspan="1">Médico</td>
              <td colspan="1"><?php echo $horallegada ?></td>
            </tr>

            <tr>
              <td colspan="1">Hora de llegada</td>
              <td colspan="1"><?php echo $medico ?></td>
            </tr>

            <tr>
              <td colspan="4" style="text-align: center; background-color:rgb(162, 217, 206,0.2);">Somatometría
              </td>
            </tr>

            <tr>
              <td colspan="1">Temperatura:</td>
              <td colspan="1"><?php echo $Temperatura ?></td>
            </tr>

            <tr>
              <td colspan="1">FR:</td>
              <td colspan="1"><?php echo $FR ?></td>
            </tr>

            <tr>
              <td colspan="1">Presión arterial:</td>
              <td colspan="1"><?php echo $Presion_arterial ?></td>
            </tr>


            <tr>
              <td colspan="1">Saturación:</td>
              <td colspan="1"><?php echo $Pulso ?></td>

            </tr>

            <tr>

              <td colspan="1">Talla:</td>
              <td colspan="1"><?php echo $Talla ?></td>
            </tr>

            <tr>

              <td colspan="1">Peso:</td>
              <td colspan="1"><?php echo $Peso ?></td>
            </tr>


          </tbody>
        </table>


      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





</body>

</html>