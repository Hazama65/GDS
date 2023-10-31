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
        .graficas{

width: 50%;
height: 500px;

}

    </style>
    <title>Gráficas - Cirugia Ambulatoria</title>
</head>
<body>
    <header>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        <h5 style="color:#DDC9A3; margin-top: 15px;">Gráficas - Cirugia Ambulatoria</h5>
        <br>
    </header>
    <br>
    <form action="" method="POST" autocomplete="off">
        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="date" id="fechaInicio" name="fechaInicio" required>

        <label for="fechaFin">Fecha de fin:</label>
        <input type="date" id="fechaFin" name="fechaFin" required>

        <label for="residente">Residentes:</label>
        <select name="residente" id="residente">
            <option value=" "></option>
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

    <h1>Conteo Total</h1>
    <div class="graficas" id="grafica1"></div>
    <h1>Conteo Residentes</h1>
    <div class="graficas" id="grafica2"></div>
    <h1>Datos de: <?php echo $residente; ?></h1>
    <div class="graficas" id="grafica3"></div>
    <h1>Intento Punción Lumbar</h1>
    <div class="graficas" id="grafica4"></div>
    <h1>Complicaciones Punción Lumbar</h1>
    <div class="graficas" id="grafica5"></div>
    <h1>Intento Intubación</h1>
    <div class="graficas" id="grafica6"></div>
    <h1>Complicaciones Intubación</h1>
    <div class="graficas" id="grafica7"></div>
    <h1>Intento CVC</h1>
    <div class="graficas" id="grafica8"></div>
    <h1>Complicaciones CVC</h1>
    <div class="graficas" id="grafica9"></div>
    <h1>Intento Paracentesis</h1>
    <div class="graficas" id="grafica10"></div>
    <h1>Complicaciones Paracentesis</h1>
    <div class="graficas" id="grafica11"></div>
    <h1>Intento Biopsia Piel</h1>
    <div class="graficas" id="grafica12"></div>
    <h1>Complicaciones Biopsia Piel</h1>
    <div class="graficas" id="grafica13"></div>
    <h1>Intento Biopsia Tejido Celular SUBC</h1>
    <div class="graficas" id="grafica14"></div>
    <h1>Complicaciones Biopsia Tejido Celular SUBC</h1>
    <div class="graficas" id="grafica15"></div>
    <h1>Intento Biopsia Tiroides</h1>
    <div class="graficas" id="grafica16"></div>
    <h1>Complicaciones Biopsia Tiroides</h1>
    <div class="graficas" id="grafica17"></div>
    <h1>Intento Toracocentesis</h1>
    <div class="graficas" id="grafica18"></div>
    <h1>Complicaciones Toracocentesis</h1>
    <div class="graficas" id="grafica19"></div>
    <h1>Intento Artrocentesis</h1>
    <div class="graficas" id="grafica20"></div>
    <h1>Complicaciones Artrocentesis</h1>
    <div class="graficas" id="grafica21"></div>
    <h1>Intento Aspiración de MO</h1>
    <div class="graficas" id="grafica22"></div>
    <h1>Complicaciones Aspiración de MO</h1>
    <div class="graficas" id="grafica23"></div>




<!-- 
    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <p style="font-size: 10px">
            Dirección de Operaciones - Subdirección de Tecnologías de la Información 
            <br> Gestión Digital en Salud - 2023
        </p> 
    </footer> -->

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