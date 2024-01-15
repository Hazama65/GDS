<?php
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
            width: 48%; /* el ancho de la gráfica */
            margin-bottom: 20px; /* Espacio entre las gráficas */
            height: 400px; /* Reduce la altura para que quepan todas las gráficas en la página */
            margin-top: 10px; /* Agrega margen superior para separar las gráficas del encabezado */
            margin-bottom: 5%; /* Agrega margen inferior para separar las gráficas del pie de página */
            vertical-align: top;
        }

        .graficas-indice {
            display: inline-block;
            width: 30%; /* Ajusta el ancho según tus necesidades */
            margin-right: 2%; /* Agrega un margen derecho para separar las gráficas */
            height: 400px; /* Ajusta la altura según tus necesidades */
            margin-top: 10px; /* Agrega margen superior para separar las gráficas del encabezado */
            margin-bottom: 5%; /* Agrega margen inferior para separar las gráficas del pie de página */
            vertical-align: top;
        }

        /* Añade un clearfix para evitar problemas de alineación después de elementos flotantes */
        .container::after {
            content: "";
            display: table;
            clear: both;
        }


        

        .badge {
            display: block;
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #f5acdd, #7e1d51);
            color: white;
            font-size: 20px;
            }

            body{
                text-align: center;
                
            }




    </style>

    </style>
    <title>Gráficas - Cirugia Ambulatoria</title>
</head>
<body>
    <header>
        <a style="color:white;" href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        <h5 style="color:white; margin-top: 15px;">Gráficas - Triage Gineco-Obstetrico</h5>
        <br>
    </header>
    <br>

    <div class="container">
        <div class="graficas" id="grafica1">
            <span class="badge">Elabora</span>
        </div>
        <div class="graficas" id="grafica2">
            <span class="badge">Resultados del Triage</span>
        </div>
        <div class="graficas" id="grafica3">
            <span class="badge">Destinos</span>
        </div>
        <div class="graficas" id="grafica4">
            <span class="badge">Codigos</span>
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

?>
</html>