<?php
include ('php/controllers/consulta_seguimiento.controller.php');
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
    <link rel="stylesheet" href="css/styles.css">
    <title>Consulta</title>
</head>

<body>
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="color: white; background-color: rgb(106, 158, 218);"> Datos del Seguimiento</th>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> </th>
            </tr>

        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <!--====================================Datos del Terapueta============================-->

            <tr>
                <td class="estilo-celda">Fecha del Seguimiento</td>
                <td><?php echo $Fecha_Seguimiento ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218,0.5);">Escalas</th>
                <th scope="col" style="background-color: rgb(106, 158, 218,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">NIHSS</td>
                <td><?php echo $NIHSS ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">NIHSS</td>
                <td><?php echo $NIHSS_escala ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Barthel</td>
                <td><?php echo $BARTHEL ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Barthel</td>
                <td><?php echo $BARTHEL_escala ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Escala FIM</td>
                <td><?php echo $FIM ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Escala FIM</td>
                <td><?php echo $FIM_escala ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rankin</td>
                <td><?php echo $RANKIN ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rankin</td>
                <td><?php echo $RANKIN_escala ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">Motricity Index</td>
                <td><?php echo $MOTRICITY ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Marcha FAC</td>
                <td><?php echo $MARCHA ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Marcha FAC</td>
                <td><?php echo $MARCHA_escala ?></td>
            </tr>


        </tbody>
    </table>





</body>

</html>