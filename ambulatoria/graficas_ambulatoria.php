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
           background-color: rgb(97, 24, 9,0.5); /* Color de fondo */
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


    <title>Gráficas - Cirugia Ambulatoria</title>
</head>


<body>
    <header>
        <a href="index.php"> <!-- Redirige al index -->
            <button type="button" class="btn btn-outline-light">
                <i class="bi bi-sign-turn-left"></i>
            </button>
        </a>
        <h5 style="color:#DDC9A3; margin-top: 15px;">Gráficas - Cirugia Ambulatoria</h5>
        <br>
    </header>


    <br>
    <form action="" method="POST" autocomplete="off">
        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="text" id="fechaInicio" name="fechaInicio">

        <label for="fechaFin">Fecha de fin:</label>
        <input type="text" id="fechaFin" name="fechaFin">

        <input type="submit" value="Filtrar">
        <?php
            echo "<br><br><h2>Resultados para el período " . $fechaInicio . " al " . $fechaFin . ":</h2>"; 
        ?>
    </form>

    <div class="container">
        <div class="graficas" id="grafica1">
            <span class="badge">Uso de Salas</span>
        </div>

        <div class="graficas" id="grafica2">
            <span class="badge">Programada - Inicio</span>
        </div>

        <div class="graficas" id="grafica3">
            <span class="badge">Ingreso - Egreso</span>
        </div>

        <div class="graficas" id="grafica4">
            <span class="badge">Ingreso - Anestesia</span>
        </div>

        <div class="graficas" id="grafica5">
            <span class="badge">Ingreso - Inicio</span>
        </div>

        <div class="graficas" id="grafica6">
            <span class="badge">Inicio de Cirugía - Fin de Cirugía</span>
        </div>

        <div class="graficas" id="grafica7">
            <span class="badge">Total de cirugías</span>
        </div>

        <div class="graficas" id="grafica8">
            <span class="badge">Cirugías Suspendidas</span>
        </div>

    </div>

 


    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <p style="font-size: 10px">
            Dirección de Operaciones - Gestión Digital en Salud - 2023
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
    include('includes/grafica6.php');
    include('includes/grafica7.php');
    include('includes/grafica8.php');
?>
</html>