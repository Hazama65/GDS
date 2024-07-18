<?php
include('php/controllers/consulta_seguimiento_n.controller.php');
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

    <title>Seguimiento de Rehabilitación</title>
</head>

<body>
    <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(237, 105, 127)">Datos del Seguimiento</th>
                <th scope="col" style="background-color:rgb(237, 105, 127)"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">Fecha de Seguimiento</td>
                <td><?php echo $fecha_seg ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de Sintomas</td>
                <td><?php echo $fecha_inicio ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Inicio de Sintomas</td>
                <td><?php echo $inicio_sintomas ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de Atencion</td>
                <td><?php echo $fecha_atencion ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(127, 184, 235)">Factor de Riesgo</th>
                <th scope="col" style="background-color: rgb(127, 184, 235)"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Enfermedad Vascular Cerebral</td>
                <td><?php echo $EVC ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Hipertensión</td>
                <td><?php echo $Hipertension ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Diabetes</td>
                <td><?php echo $Diabetes ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tabaquismo</td>
                <td><?php echo $Tabaquismo ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Covid</td>
                <td><?php echo $Covid ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Hiperlipidemia</td>
                <td><?php echo $Hiperlipidemia ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Apnea de Sueño</td>
                <td><?php echo $Apnea ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Enfermedad Cardiovascular</td>
                <td><?php echo $enfermedad_cardio ?></td>
            </tr>
            <tr>
                <th scope="col" style="background-color: rgb(180, 153, 186)">Tratamiento</th>
                <th scope="col" style="background-color: rgb(180, 153, 186)"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Antiagregante</td>
                <td><?php echo $antiagregante ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Anticoagulante</td>
                <td><?php echo $antioagulante ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Estatinas</td>
                <td><?php echo $estatinas ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estatinas Medicamento</td>
                <td><?php echo $Estatinas_med ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Dosis-Dosis-Estatinas</td>
                <td><?php echo $dosis_Estatinas ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tiempo-Tiempo-Estatinas</td>
                <td><?php echo $tiempo_Estatinas ?></td>
            </tr>


            <tr>
                <th scope="col" style="background-color: rgb(127, 184, 235)">Cerebrolisina</th>
                <th scope="col" style="background-color: rgb(127, 184, 235)"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Cerebrolisina</td>
                <td><?php echo $cerebrolisina ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis</td>
                <td><?php echo $dosis_cerebro ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tiempo</td>
                <td><?php echo $tiempo_cerebro ?></td>
            </tr>


            <tr>
                <th scope="col" style="background-color: rgb(237, 105, 127)">Trombolisis</th>
                <th scope="col" style="background-color: rgb(237, 105, 127)"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Trombolisis</td>
                <td><?php echo $trombolisis ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">r-TPA</td>
                <td><?php echo $r_TPA_1 ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Sangrado</td>
                <td><?php echo $sangrado ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Nivel</td>
                <td><?php echo $nivel ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de Sangrado</td>
                <td><?php echo $fecha_sangrado ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(180, 153, 186)">Escalas</th>
                <th scope="col" style="background-color: rgb(180, 153, 186)"> </th>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(180, 153, 186)">NIHHS</th>
                <th scope="col" style="background-color: rgb(180, 153, 186)"> </th>
            </tr>
           
            <tr>
                <td class="estilo-celda">Escala NIHSS</td>
                <td><?php echo $escala_nihss_seg ?></td>
            </tr>
            <tr>
                <th scope="col" style="background-color: rgb(237, 105, 127)">RANKIN</th>
                <th scope="col" style="background-color: rgb(237, 105, 127)"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">RANKIN</td>
                <td><?php echo $rankin_seguimiento ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(127, 184, 235)">HAS-BLED</th>
                <th scope="col" style="background-color: rgb(127, 184, 235)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Puntuación HAS-BLED</td>
                <td><?php echo $puntuacion_has ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Interpretación</td>
                <td><?php echo $interpretacion_has ?></td>
            </tr>


            <tr>
                <th scope="col" style="background-color: rgb(127, 184, 235)">CHADS2-VASc</th>
                <th scope="col" style="background-color: rgb(127, 184, 235)"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado</td>
                <td><?php echo $chads ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Riesgo de accidente cerebrovascular isquémico</td>
                <td><?php echo $riesgo_chads ?></td>
            </tr>

        </tbody>
    </table>

</body>

</html>