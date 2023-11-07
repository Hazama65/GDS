<?php
    include('php/controllers/consulta.controller.php');
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
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>
            <tr>
                <th scope="col">INTERCONSULTAS RESIDENTES MEDICINA INTERNA</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
                <tr>
                    <td class="estilo-celda">Paciente</td>
                    <td><?php echo $nombre_paciente; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Cama</td>
                    <td><?php echo $cama; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Nombre Responsable</td>
                    <td><?php echo $residente; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Adscrito Responsable</td>
                    <td><?php echo $responsable; ?></td>
                </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(70, 130, 180, 0.6);">Procedimientos</th>
                <th scope="col" style="background-color: rgb(70, 130, 180, 0.6);"> </th>
            </tr>
                <tr>
                    <td class="estilo-celda">Servicio IC</td>
                    <td><?php echo $servicio_inter; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Servicio Respondiente</td>
                    <td><?php echo $servicio_resp; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Fecha de IC</td>
                    <td><?php echo $fecha_inter; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Respuesta de IC</td>
                    <td><?php echo $fecha_resp; ?></td>
                </tr>
                <tr>
                    <td class="estilo-celda">Tiempo de Respuesta</td>
                    <td id="diferencia_celda"><?php echo $diferencia_dias; ?> Dia(s)</td>
                </tr>
                <tr>
                    <td class="estilo-celda">Observaciones</td>
                    <td><?php echo $observaciones; ?></td>
                </tr>
        </tbody>
    </table>
    <script src="js/consulta.js"></script>


    
</body>
</html>