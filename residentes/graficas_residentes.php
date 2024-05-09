<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");

    if (!isset($_SESSION['valid_user'])) {
        // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
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
            width: 48%; /* el ancho de la gráfica */
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
            background: linear-gradient(45deg, #7250be, #aceaa7);
            color: white;
            font-size: 20px;
            }

            body{
                text-align: center;
                
            }

            .fecha {
            color: #ff5733; /* Color rojo (#ff5733) para las fechas */
            }

            .graficas-container {
                display: flex;  /* Usar flexbox para alinear elementos en línea */
                justify-content: space-between;  /* Espacio igual entre las gráficas */
                align-items: flex-start; /* Alinear las gráficas en la parte superior */
                flex-wrap: wrap;  /* Envolver las gráficas si no caben en una sola línea */
            }


    </style>

    </style>
    <title>Gráficas - Residentes</title>
</head>
<body>
    <header>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        <h5 style="color:white; margin-top: 15px;">Gráficas - Residentes</h5>
        <br>
    </header>
    <br>
    <form action="" method="POST" autocomplete="off">
        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="date" id="fechaInicio" name="fechaInicio" required>

        <label for="fechaFin">Fecha de fin:</label>
        <input type="date" id="fechaFin" name="fechaFin" required>

        <label for="residente">Residentes:</label>
        <select name="residente" id="residente" required>
            <option value="">Selecciona un residente</option>
            <option value="ANGELICA JOHANA PEREZ HERNANDEZ">ANGELICA JOHANA PEREZ HERNANDEZ</option>
            <option value="ARIAS HUERTA JENNIFERD">ARIAS HUERTA JENNIFERD</option>
            <option value="ARTURO ISRAEL JACINTO TOVAR">ARTURO ISRAEL JACINTO TOVAR</option>
            <option value="CHRISTIAN MEJIA HERRERA">CHRISTIAN MEJIA HERRERA</option>
            <option value="EZEQUIEL BETANCOURT URIOSTEGUI">EZEQUIEL BETANCOURT URIOSTEGUI</option>
            <option value="GERARDO SAAVEDRA JIMENEZ ">GERARDO SAAVEDRA JIMENEZ </option>
            <option value="GOMEZ PARDO JOSE">GOMEZ PARDO JOSE</option>
            <option value="HUGO A. SILGUERO RIVERA">HUGO A. SILGUERO RIVERA</option>
            <option value="JACOBO U. MERCADO ESTRADA">JACOBO U. MERCADO ESTRADA</option>
            <option value="JOSE ROBERTO MARINO SANCHEZ">JOSE ROBERTO MARINO SANCHEZ</option>
            <option value="LEAL CAMARRILLO ANGELICA">LEAL CAMARRILLO ANGELICA</option>
            <option value="MARIA A. RODRIGUEZ MENDOZA">MARIA A. RODRIGUEZ MENDOZA</option>
            <option value="MOHAMAD JAMAL EDDIN">MOHAMAD JAMAL EDDIN</option>
            <option value="PAMELA PRISCILA PALACIOS ORTIZ">PAMELA PRISCILA PALACIOS ORTIZ</option>
            <option value="PAULA DANIELA RODRIGUEZ ARCINIEGAS">PAULA DANIELA RODRIGUEZ ARCINIEGAS</option>
            <option value="PAULINA ORTEGA ITURBIDE">PAULINA ORTEGA ITURBIDE</option>
            <option value="SIACHOQUE GOMEZ LEIDY VANESSA">SIACHOQUE GOMEZ LEIDY VANESSA</option>
            <option value="SONIA LISSET MANDOUJANO SANCHEZ">SONIA LISSET MANDOUJANO SANCHEZ</option>
            <option value="VILLEGAS CONTRERAS CRISTIAN RICARDOA">VILLEGAS CONTRERAS CRISTIAN RICARDO</option>
            <option value ="MARIA A. RODRIGUEZ MENDOZA">MARIA A. RODRIGUEZ MENDOZA</option>
            <option value="ANA LIBERTAD SALAZAR TRAPALA">ANA LIBERTAD SALAZAR TRAPALA</option>
            <option value="ESPINOZA HERNÁNDEZ VICTOR">ESPINOZA HERNÁNDEZ VICTOR</option>
            <option value="GOMEZ PARDO JOSE">GOMEZ PARDO JOSE</option>
            <option value="JOSE ROBERTO MARINO SANCHEZ">JOSE ROBERTO MARINO SANCHEZ</option>
            <option value="MOHAMAD JAMAL EDDIN">MOHAMAD JAMAL EDDIN</option>
            <option value="PAULINA ORTEGA ITURBIDE">PAULINA ORTEGA ITURBIDE</option>
            <option value="HUGO A. SILGUERO RIVERA">HUGO A. SILGUERO RIVERA</option>
        </select>

        <input type="submit" value="Filtrar">
        <?php
            echo "<br><br><h2>Resultados para el período " . $fechaInicio . " al " . $fechaFin . ":</h2>"; 
        ?>
    </form>


    <div class="container">
        <div class="graficas" id="grafica1">
            <span class="badge">Conteo Total</span>
        </div>
        <div class="graficas" id="grafica2">
            <span class="badge">Conteo Residentes</span>
        </div>
        <!-- <div class="graficas" id="grafica3">
            <span class="badge">Datos de: <?php echo $residente; ?></span>
        </div> -->
        <div class="graficas-container">
            <div class="graficas" id="grafica4">
                <span class="badge">Intento Punción Lumbar</span>
            </div>
            <div class="graficas" id="grafica5">
                <span class="badge">Complicaciones Punción Lumbar</span>
            </div>
            <div class="graficas" id="grafica6">
                <span class="badge">Intento Intubación</span>
            </div>
            <div class="graficas" id="grafica7">
                <span class="badge">Complicaciones Intubación</span>
            </div>
            <div class="graficas" id="grafica8">
                <span class="badge">Intento CVC</span>
            </div>
            <div class="graficas" id="grafica9">
                <span class="badge">Complicaciones CVC</span>
            </div>
            <div class="graficas" id="grafica10">
                <span class="badge">Intento Paracentesis</span>
            </div>
            <div class="graficas" id="grafica11">
                <span class="badge">Complicaciones Paracentesis</span>
            </div>
            <div class="graficas" id="grafica12">
                <span class="badge">Intento Biopsia Piel</span>
            </div>
            <div class="graficas" id="grafica13">
                <span class="badge">Complicaciones Biopsia Piel</span>
            </div>
            <div class="graficas" id="grafica14">
                <span class="badge">Intento Biopsia Tejido Celular SUBC</span>
            </div>
            <div class="graficas" id="grafica15">
                <span class="badge">Complicaciones Biopsia Tejido Celular SUBC</span>
            </div>
            <div class="graficas" id="grafica16">
                <span class="badge">Intento Biopsia Tiroides</span>
            </div>
            <div class="graficas" id="grafica17">
                <span class="badge">Complicaciones Biopsia Tiroides</span>
            </div>
            <div class="graficas" id="grafica18">
                <span class="badge">Intento Toracocentesis</span>
            </div>
            <div class="graficas" id="grafica19">
                <span class="badge">Complicaciones Toracocentesis</span>
            </div>
            <div class="graficas" id="grafica20">
                <span class="badge">Intento Artrocentesis</span>
            </div>
            <div class="graficas" id="grafica21">
                <span class="badge">Complicaciones Artrocentesis</span>
            </div>
            <div class="graficas" id="grafica22">
                <span class="badge">Intento Aspiración de MO</span>
            </div>
            <div class="graficas" id="grafica23">
                <span class="badge">Complicaciones Aspiración de MO</span>
            </div>
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
    include('includes/grafica6.php');
    include('includes/grafica7.php');
    include('includes/grafica8.php');
    include('includes/grafica9.php');
    include('includes/grafica10.php');
    include('includes/grafica11.php');
    include('includes/grafica12.php');
    include('includes/grafica13.php');
    include('includes/grafica14.php');
    include('includes/grafica15.php');
    include('includes/grafica16.php');
    include('includes/grafica17.php');
    include('includes/grafica18.php');
    include('includes/grafica19.php');
    include('includes/grafica20.php');
    include('includes/grafica21.php');
    include('includes/grafica22.php');
    include('includes/grafica23.php');
?>
</html>