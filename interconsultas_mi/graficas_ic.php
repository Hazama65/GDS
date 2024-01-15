<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");

    if (!isset($_SESSION['valid_user'])) {
        header('Location: ../login/index.php');
        exit;
    }
    include('includes/consultas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI (Datepicker) -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        .container {
            
            text-align: center;
            margin-bottom: 80px;
            }

        .graficas {
            display: inline-block;
            width: 100%; /* el ancho de la gráfica */
            margin-bottom: 20px; /* Espacio entre las gráficas */
            height: 400px; /* Reduce la altura para que quepan todas las gráficas en la página */
            margin-top: 10px; /* Agrega margen superior para separar las gráficas del encabezado */
            margin-bottom: 5%; /* Agrega margen inferior para separar las gráficas del pie de página */
            vertical-align: top;
        }

        .badge {
            display: block;
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            background: rgb(0,29,113);
            background: linear-gradient(90deg, rgba(0,29,113,1) 0%,rgba(0,212,255,1) 100%);
            color: white;
            font-size: 20px;
            }

            body{
                text-align: center;
                
            }

            .fecha {
            color: #ff5733; /* Color rojo (#ff5733) para las fechas */
            }
    </style>

    <title>Gráficas - Interconsulta</title>
</head>
<body>
    <header>
        <a href="index.php">
            <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                <i class="bi bi-rewind-fill"></i>
            </button>
        </a>
        <h5 style="color:#DDC9A3; margin-top: 15px;">Gráficas - Interconsulta</h5>
        <br>
    </header>
    <br>

    <div class="search">
        <form method="POST" autocomplete="off">

            <label for="fechaInicio">Fecha de inicio:</label>
            <input class="form-control" type="date" id="fechaInicio" name="fechaInicio" required>

            <label for="fechaFin">Fecha de fin:</label>
            <input class="form-control" type="date" id="fechaFin" name="fechaFin" required>

            <input class="form-control" type="submit" value="Filtrar">
            <?php
                echo "<br><br><h2>Resultados para el período " . $fechaInicio . " al " . $fechaFin . ":</h2>"; 
            ?>

        </form>
    </div>

    <div class="container">
        <div class="graficas" id="grafica1">        
            <span class="badge">Residentes</span>
        </div>
        <div class="graficas" id="grafica2">
            <span class="badge">Responsable</span>
        </div>
        <div class="graficas" id="grafica3">
            <span class="badge">Servicio IC</span>
        </div>
        <div class="graficas" id="grafica4">
            <span class="badge">Servicio Respondiente</span>
        </div>
        <div class="graficas" id="grafica5">
            <span class="badge">Tiempo de Respuesta (Dias)</span>
        </div>
    </div>



    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <p style="font-size: 10px">
            Dirección de Operaciones - Subdirección de Tecnologías de la Información 
            <br> Gestión Digital en Salud - 2023
        </p> 
    </footer>

</body>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<?php
    include('includes/grafica1.php');
    include('includes/grafica2.php');
    include('includes/grafica3.php');
    include('includes/grafica4.php');    
    include('includes/grafica5.php');


?>
</html>