<?php
include('includes/consultas.php');
    
?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        
        .container {
            
            text-align: center;
            margin-bottom: 80px;
            }
        .container_form{
            color: white;
            border-radius:10px;
            background: linear-gradient(0deg, #C06C84,#355C7D);
            text-align: center;
            margin: 2%;
            padding: 2%;
        }
        .container_form button {
            margin-top: 15px;
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
            background: linear-gradient(45deg, #C06C84,#6C5B7B,#355C7D);
            color: white;
            font-size: 20px;
            }

            body{
                text-align: center;
                
            }




    </style>

    <title>Guardias</title>
</head>

<body>
    <header>
        <h5 class="bi bi-prescription2" style="color:#ffffff; margin-top: 15px;">Guardias</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="container_form">
        <form method="POST" class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <label for="servicio" class="form-label">Servicio</label>
                <select name="servicio" id="servicio" class="form-select" required>
                    <option value="Críticas">Críticas</option>
                    <option value="Clínicas">Clínicas</option>
                    <option value="Quirúrgicas">Quirúrgicas</option>
                    <!-- Opciones del select -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="fecha" class="form-label">Primera fecha</label>
                <input type="month" name="fecha" id="fecha" class="form-control" required>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>


    <div class="container">

        <div class="graficas" id="grafica1">
            <span class="badge">Conteo Total de Guardias(Solicitadas)</span>
        </div>

        <div class="graficas" id="grafica2">
            <span class="badge">Conteo Total de Guardias(Tomadas)</span>
        </div>
    </div>


    <footer>
        <a>Hospital Regional de Alta Especialidad de Ixtapaluca</a>
        <p style="font-size: 10px">
            Gestión Digital en Salud - 2024
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

            cerrarSesionButton.addEventListener('click', function () {
                // Redirige al usuario a la página de cierre de sesión
                window.location.href = 'php/destroysession.php';
            });
        });
    </script>

    <?php
        include('includes/grafica1.php');
        include('includes/grafica2.php');

    ?>
</body>

</html>