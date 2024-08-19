<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Verificar si el usuario ha iniciado sesión y si tiene el sistema correcto
if (!isset($_SESSION['valid_user']) || $_SESSION['system_type'] !== 'medicamentos') {
    // El usuario no ha iniciado sesión o no tiene permiso para este sistema
    header('Location: ../login/index.php');
    exit;
}
require ('php/controllers/table.controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap 5.3.3 JS (con Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Incluye la biblioteca jsPDF versión 1.5.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Abasto</title>
</head>

<body>

    <header>
        <h5 class="bi bi-capsule" style="color:rgb(243, 243, 243); margin-top: 10px;">Abasto</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->
    <div class="container mt-4">
        <div class="row">
            <!-- Formulario de subida de archivo -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Subir Archivo de Excel</h5>
                    </div>
                    <div class="card-body">
                        <form action="php/controllers/upload.controller.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="file">Selecciona un archivo de Excel:</label>
                                <input type="file" name="file" id="file" class="form-control-file" accept=".xlsx, .xls"
                                    required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Subir Archivo</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Botón para ver el historial de archivos -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Historial de Archivos</h5>
                    </div>
                    <div class="card-body text-center">
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#historyModal">Ver
                            Historial de Archivos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para el historial de archivos -->
    <div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="historyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="historyModalLabel">Historial de Archivos</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="fileList" class="list-group">
                        <!-- Aquí se mostrarán los archivos -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container buscador" style="width: 50%">
        <div class="row" style="color: white;">

            <div class="col-md-2">
                <span style="font-size:13px; display: block;">CENAPRECE</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="CENAPRECE" id="CENAPRECE"
                    value="CENAPRECE-HRAEI-">
            </div>

            <div class="col-md-2">
                <span style="font-size:13px; display: block;">GC</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="GC" id="GC" value="GC-HRAEI-">
            </div>

            <div class="col-md-2">
                <span style="font-size:13px; display: block;">HRAEI</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="HRAEI" id="HRAEI" value="HRAEI-">
            </div>

            <div class="col-md-2">
                <span style="font-size:13px; display: block;">SADMI</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="SADMI" id="SADMI" value="SADMI-HRAEI-">
            </div>

            <div class="col-md-2">
                <button onclick="buscar()" class="btn btn-primary boton">Buscar</button>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 90px">
        <table id="miTabla" class="table" style="width: 100%; margin: 0 auto; font-size: 10px;">
            <thead class="thead-dark">
                <tr>
                    <th>Clave</th>
                    <th>Descripcion</th>
                    <th>Existencia</th>
                    <th>CPM</th>
                    <th>Meses Existencia</th>
                    <th>Observaciones</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Itera a través de los datos obtenidos de la consulta y genera las filas y celdas
                foreach ($data_folios as $folio) {
                    echo '<tr>';
                    echo "<td class='tipo_clave'>" . $folio['clave'] . "</td>";
                    echo "<td>" . $folio['descripcion'] . "</td>";
                    echo "<td class='tipo_existencia'>" . $folio['existencia'] . "</td>";
                    echo "<td>" . $folio['cpm'] . "</td>";
                    echo "<td>" . $folio['meses_existencia'] . "</td>";
                    echo "<td>" . $folio['observaciones'] . "</td>";
                    echo "<td class='tipo_status'>" . $folio['status'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <br>
        Dirección de Operaciones - Gestión Digital en Salud - 2024

    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/historial_modal.js"></script>
    <script src="js/table.js"></script>
    <script type="module" src="js/success.js"></script>





</body>

</html>