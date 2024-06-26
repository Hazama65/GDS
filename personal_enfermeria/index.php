<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - Enfermería</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <?php include 'components/navbar.php'; ?>

  <div class="container mt-5">
    <h2 class="text-center mb-4">Personal Enfermería</h2>
    <input type="text" id="buscador" class="form-control mb-3" placeholder="Buscar...">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="titulo-tabla"> <!-- Agregar clase CSS para la primera fila -->
          <tr>
            <th>Foto</th>
            <th>No. Empleado</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre(s)</th>
            <th>Código</th>
            <th>Ver</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody id="tablaEnfermeros">
          <!-- Aquí se llenará dinámicamente la tabla con los datos -->
        </tbody>
      </table>
    </div>
    <nav aria-label="Paginación">
      <ul class="pagination justify-content-center" id="paginador"></ul>
    </nav>
  </div>


  <script src="js/script_index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>