<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");

    if (!isset($_SESSION['valid_user'])) {
        // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
        header('Location: ../login/index.php');
        exit;
    }
    $username = $_SESSION['valid_user'];
    require('php/controllers/tabla.controller.php');
    include("modals/generarfolio.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Folios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- [JavaScript] -->
    <script  src="js/cerrarSesion.js"></script>
    <script type="module" src="js/funcionesTabla1.js"></script>
    <script  src="js/funcionesTabla2.js"></script>



    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />  
</head>

    <header>
        <h5 style="color:#DDC9A3; margin-top: 20px;">
        <i class="bi bi-hospital"></i>
        Generador de Folios</h5>
    </header>
<br><br><br>


<body>

    <div class="container">
    <!-- ... Tu formulario existente ... -->

    <div style="overflow-x: auto;">

    <div class="d-flex justify-content-between align-items-center mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-file-earmark-plus"></i>
        Nuevo
    </button>
    <button id="cerrar-sesion-button" class="btn btn-danger">Cerrar Sesión</button>
</div>

<h1>Folios Activos</h1>
<table id="miTabla" class="table table-bordered" style="width: 90%; margin: 0 auto;">
    <thead>
        <tr>
            <th>Fecha y Hora</th>
            <th>Servicio</th>
            <th>Médico Valora</th>
            <th>Médico Autoriza</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre(s)</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Diagnóstico</th>
            <th>Fecha de Llegada</th>
            <th>Folio</th>
            <th>Estatus</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Itera a través de los datos obtenidos de la consulta y genera las filas y celdas
        foreach ($data_folios as $folio) {
            echo '<tr data-id="' . $folio['id_folio'] . '">';
            echo "<td>" . $folio['fechaHora'] . "</td>";
            echo "<td>" . $folio['servicio'] . "</td>";
            echo "<td>" . $folio['medicoValorador'] . "</td>";
            echo "<td>" . $folio['mediocoAutorizador'] . "</td>";
            echo "<td>" . $folio['apellidoPaterno'] . "</td>";
            echo "<td>" . $folio['apellidoMaterno'] . "</td>";
            echo "<td>" . $folio['nombre'] . "</td>";
            echo "<td>" . $folio['edad'] . "</td>";
            echo "<td>" . $folio['sexo'] . "</td>";
            echo "<td>" . $folio['diagnostico'] . "</td>";
            echo "<td>" . $folio['fechaLlegada'] . "</td>";
            echo "<td>" . $folio['folio'] . "</td>";
            echo "<td>" . $folio['estatus'] . "</td>";
            echo '<td>
                <button class="btn btn-success btn-lg" ><i class="fa-solid fa-user-check"></i></button>
            </td>';
        
        
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<br>
<h1>Folios Inactivos</h1>
<table id="tabla2" class="table table-bordered" style="width: 90%; margin: 0 auto;">
    <thead>
        <tr>
            <th>Fecha y Hora</th>
            <th>Servicio</th>
            <th>Médico Valora</th>
            <th>Médico Autoriza</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre(s)</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Diagnóstico</th>
            <th>Fecha de Llegada</th>
            <th>Folio</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Itera a través de los datos obtenidos de la consulta y genera las filas y celdas
        foreach ($data_folios as $folio) {
            echo "<tr>";
            echo "<td>" . $folio['fechaHora'] . "</td>";
            echo "<td>" . $folio['servicio'] . "</td>";
            echo "<td>" . $folio['medicoValorador'] . "</td>";
            echo "<td>" . $folio['mediocoAutorizador'] . "</td>";
            echo "<td>" . $folio['apellidoPaterno'] . "</td>";
            echo "<td>" . $folio['apellidoMaterno'] . "</td>";
            echo "<td>" . $folio['nombre'] . "</td>";
            echo "<td>" . $folio['edad'] . "</td>";
            echo "<td>" . $folio['sexo'] . "</td>";
            echo "<td>" . $folio['diagnostico'] . "</td>";
            echo "<td>" . $folio['fechaLlegada'] . "</td>";
            echo "<td>" . $folio['folio'] . "</td>";
            echo "<td>" . $folio['estatus'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

    <br>
</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


    <script src="js/script.js"></script>



    <script type="module">
        import { mainForm } from "./js/insert.js";
        mainForm();
    </script>








</body>
</html>


