<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Métricas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }
  </style>
</head>

<body>

  <?php include 'components/navbar.php'; ?>


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="modal-content">
          <div class="edicion-personal">
            <h5 class="modal-title text-center">Datos Actuales</h5>
          </div>
          <div class="body-container">
            <div class="titulo-personal">
              <h6 class="bi bi-person-fill-add"> Resumen Personal por Turno</h6>
            </div> <br>
            <div style="overflow-x: auto;">
              <table class="table">
                <thead>
                  <th></th>
                  <th>JORNADA ESPECIAL</th>
                  <th>MATUTINO</th>
                  <th>VESPERTINO</th>
                  <th>NOCTURNO</th>
                </thead>
                <tbody id="tabla-recuento">
                  <th>Recuento</th>
                  <td id="recuento-jornada"></td>
                  <td id="recuento-matutino"></td>
                  <td id="recuento-vespertino"></td>
                  <td id="recuento-nocturno"></td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="modal-content">
          <div class="edicion-personal">
            <h5 class="modal-title text-center">Gráficas</h5>
          </div>
          <div id="chartdiv"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="modal-content">
          <div class="body-container">
            <div class="titulo-personal">
              <h6 class="bi bi-person-fill-add"> Resumen Personal por Servicio y Turno</h6>
            </div> <br>
            <div style="overflow-x: auto;" id="tabla-turnos-areas">
              <table class="table">
                <thead id="tabla-cabeceras">
                </thead>
                <tbody id="tabla-datos">
                </tbody>
              </table>
            </div>
            <div class="text-center mt-3">
              <button class="btn btn-success" onclick="exportToExcel('tabla-turnos-areas')">Exportar a Excel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
  <script src="js/metricas.js"></script>




</body>

</html>