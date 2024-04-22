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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(188, 58, 126)">Datos Seguimiento</th>
                <th scope="col" style="background-color:rgb(188, 58, 126)"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">Fecha de Seguimiento</td>
                <td> <?php echo $fecha_seg; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Calidad Vida ECOG</td>
                <td> <?php echo $Seguimiento_Calidad_ECOG; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Progresión Enfermedad</td>
                <td> <?php echo $ProgresionEnfermedad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Progresión Enfermedad</td>
                <td> <?php echo $fecha_progreEnfermedad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Recurrencia</td>
                <td> <?php echo $Recurrencia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Recurrencia</td>
                <td> <?php echo $Recurrencia_fecha; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo Cuidados Paliativos</td>
                <td> <?php echo $tipo_cuidado_seguimiento; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Protocolo Clínico</td>
                <td> <?php echo $Protocolo_clinico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Protocolo Investigación</td>
                <td> <?php echo $Protocolo_Investigacion; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color:rgb(188, 58, 126)">Reintervención</th>
                <th scope="col" style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Reintervención</td>
                <td> <?php echo $Reintervencion_fecha; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Lateralidad QX</td>
                <td> <?php echo $Lateralidad_Seguimiento_QX; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color:rgb(188, 58, 126)">Nueva QT</th>
                <th scope="col" style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Reintervención</td>
                <td> <?php echo $Reintervencion_fecha2; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td> <?php echo $Tipo_Seguimiento; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tratamiento</td>
                <td> <?php echo $Tratamiento_Seguimiento; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color:rgb(188, 58, 126)">Radioterapia</th>
                <th scope="col" style="background-color:rgb(188, 58, 126)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo</td>
                <td> <?php echo $Tipo_RadioterapiaSeguimiento; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Inicio</td>
                <td> <?php echo $Seguimiento_Iniciofecha; ?> </td>
            </tr>

        </tbody>
    </table>

</body>

</html>