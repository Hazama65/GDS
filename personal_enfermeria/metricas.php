<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Métricas</title>
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
            <h5 class="modal-title text-center">Datos Actuales</h5>
          </div>

          <div class="body-container">
            <div class="titulo-personal">
              <h6 class="bi bi-person-fill-add"> Resumen Personal por Servicio y Turno</h6>
            </div> <br>


            <div style="overflow-x: auto;">
              <table class="table">
                  <thead id="tabla-cabeceras">
                  </thead>
                  <tbody id="tabla-datos">
                  </tbody>
              </table>
          </div>
          


          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/metricas.js"></script>



</body>

</html>