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
        .graficas{

width: 50%;
height: 500px;

}

    </style>
    <title>Gráficas - Interconsulta</title>
</head>
<body>
    <header>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        <h5 style="color:#DDC9A3; margin-top: 15px;">Gráficas - Interconsulta</h5>
        <br>
    </header>
    <br>


    <h1>Residentes</h1>
    <div class="graficas" id="grafica1"></div>
    <h1>Responsable</h1>
    <div class="graficas" id="grafica2"></div>
    <h1>Servicio IC</h1>
    <div class="graficas" id="grafica3"></div>
    <h1>Servicio Respondiente</h1>  
    <div class="graficas" id="grafica4"></div>
    <h1>Tiempo de Respuesta (Dias) </h1>
    <div class="graficas" id="grafica5"></div>



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