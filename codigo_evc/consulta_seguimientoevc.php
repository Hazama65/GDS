<?php
include('php/controllers/consulta_seguimiento.controller.php');
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



            <table class="table table-striped table-hover table-bordered tabla-consulta">
                <thead> <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
                    <table class="table table-striped table-hover table-bordered tabla-consulta">
                        <thead>

                            <tr>
                                <th scope="col" style="background-color:rgb(237, 105, 127)">Dependencia Funcional</th>
                                <th scope="col" style="background-color:rgb(237, 105, 127)"> </th>
                            </tr>
                        </thead>

                        <tbody style="font-size:13px;" class="table-bordered">

                            <tr>
                                <td class="estilo-celda">Fecha Seguimiento</td>
                                <td><?php echo $fecha_seg ; ?></td>
                            </tr>
                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $tiempo_seguimiento ; ?></td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $nivel_seguimiento ; ?></td>
                            </tr>

                            <tr>
                                <th scope="col" style="background-color: rgb(127, 184, 235)">FIM</th>
                                <th scope="col" style="background-color: rgb(127, 184, 235)"> </th>
                            </tr>

                            <tr>
                                <td class="estilo-celda">FIM Inicial</td>
                                <td><?php echo $fim_inicial ; ?></td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $nivel_fim ; ?></td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $fim_final ; ?></td>
                            </tr>

                            <tr>
                                <th scope="col" style="background-color: rgb(180, 153, 186)">Barthel</th>
                                <th scope="col" style="background-color: rgb(180, 153, 186)"> </th>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $seguimineto_barthel ; ?></td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $nivel_barthel ; ?></td>
                            </tr>

                            <tr>
                                <th scope="col" style="background-color: rgb(237, 105, 127)">NIHHS</th>
                                <th scope="col" style="background-color: rgb(237, 105, 127)"> </th>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $nihss_tiempo ; ?></td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $escala ; ?></td>
                            </tr>

                            <tr>
                                <th scope="col" style="background-color: rgb(127, 184, 235)">RANKIN</th>
                                <th scope="col" style="background-color: rgb(127, 184, 235)"> </th>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $rankin_tiempo ; ?> </td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $valor ; ?></td>
                            </tr>

                            <tr>
                                <th scope="col" style="background-color: rgb(180, 153, 186)">Motricity Index</th>
                                <th scope="col" style="background-color: rgb(180, 153, 186)"> </th>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $motricity_seg ; ?> </td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $motri ; ?></td>
                            </tr>

                            <tr>
                                <th scope="col" style="background-color: rgb(237, 105, 127)">Marcha FAC</th>
                                <th scope="col" style="background-color: rgb(237, 105, 127)"> </th>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Seguimiento</td>
                                <td><?php echo $marcha_seg ; ?> </td>
                            </tr>

                            <tr>
                                <td class="estilo-celda">Nivel</td>
                                <td><?php echo $marcha ; ?></td>
                            </tr>





    </tbody>
    </table>

</body>

</html>