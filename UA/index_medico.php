<?php

session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['valid_user'])) {
  // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
  header('Location: login/index.php');
  exit;
}
$username = $_SESSION['valid_user'];

require ('php/controllers/registro_medico.controller.php');
include 'modals/nuevopaciente.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="styles/styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Unidad de Apoyo</title>
</head>

<body>

  <header>
    <div class="welcome-message">
      Bienvenido(a), Dr(a). <?php echo $username ?>
    </div>
    <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
      <i class="bi bi-power"></i>
    </button>
  </header>

  <main>

    <div class="container-fluid">

      <!-- este boton solo lo puede ver enfermería-->
      <!-- Contenedor para la segunda columna -->
      <div class="row">
        <div class="col">
          <!-- Segunda columna -->
          <div style="height: 50px;">
            <!-- Contenido de la segunda columna aquí -->
            <div class="btn-container">
            </div>
          </div>
        </div>
      </div>

      <!-- Contenedor para las dos partes verticales -->

      <div class="container">
        <div class="row">
          <!-- Primera parte vertical -->
          <div class="col-md-3">
            <!-- Contenido de la primera parte vertical aquí -->
            <div class="container-box">
              <h5>Pacientes</h5>
              <div class="form-group">
                <input type="text" class="form-control" id="realtimeSearch" placeholder="Buscar...">
                <ul id="patient-list">
                  <?php
                  if (!empty($data_AT)) {
                    // Comienza a generar la lista de pacientes
                    echo '<ul class="patient-list" >';
                    foreach ($data_AT as $datos) {
                      $id_paciente = $datos["id_paciente"];
                      $nombrePaciente = $datos["nombre"];
                      // Genera un elemento de lista para cada paciente
                      echo '<li class="patient-item" data-id-paciente="' . $id_paciente . '">';
                      echo $nombrePaciente;
                      echo '</li>';
                    }
                    echo '</ul>';
                  } else {
                    echo "No se encontraron pacientes";
                  }
                  ?>
                </ul>
              </div>
              <!-- Aquí puedes agregar más contenido según sea necesario -->
            </div>
          </div>

          <!-- Segunda parte vertical -->
          <div class="col-md-9">
            <div class="container">

              <div class="btn-group d-flex justify-content-end" role="group" aria-label="Basic example">
                <button id="borrar_paciente" style="display:none;" type="submit" class="btn btn-outline-danger">
                  SALE PACIENTE
                </button>
              </div>

              <div id="tabla-seguimiento" style="height: 545px; overflow-y: auto; margin-bottom: 20px;"></div>

            </div>
          </div>
        </div>
      </div>
    </div>


  </main>

  <div id="loading-overlay" style="display: none;" class="loading">
    <svg width="128px" height="96px">
      <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
      <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
    </svg>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/visualizacion_medico.js"></script>
<script type="module" src="js/delete.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

    cerrarSesionButton.addEventListener('click', function () {
      // Redirige al usuario a la página de cierre de sesión
      window.location.href = 'php/destroysession.php';
    });
  });
</script>

</html>