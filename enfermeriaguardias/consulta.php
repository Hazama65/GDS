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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Consulta</title>
</head>

<body>



    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead> <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
            <table class="table table-striped table-hover table-bordered tabla-consulta">
                <thead>

                    <tr>
                        <th scope="col" style="background-color:rgb(137, 97, 126) "> Datos Generales</th>
                        <th scope="col" style="background-color:rgb(137, 97, 126) "> </th>
                    </tr>
                </thead>

                <tbody style="font-size:13px;" class="table-bordered">

                    <tr>
                        <td class="estilo-celda">Trabajador Sustituido</td>
                        <td><?php echo $trabajador_sustituido ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Trabajador Sustituto</td>
                        <td><?php echo $trabajador_sustituto ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Nivel Académico</td>
                        <td><?php echo $nivel_academia ; ?> </td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Turno</td>
                        <td><?php echo $turno ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Servicio</td>
                        <td><?php echo $servicio ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Críticas</td>
                        <td><?php echo $criticas ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Clínicas</td>
                        <td><?php echo $clinicas ; ?></td>
                    </tr>

                    
                    <tr>
                        <td class="estilo-celda">Quirúrgicas</td>
                        <td><?php echo $quirurgicas ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Fecha de Tramite</td>
                        <td><?php echo $fecha_tramite ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Fecha de Suplencia</td>
                        <td><?php echo $fecha_suplencia ; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Nombre de Quien Autoriza</td>
                        <td><?php echo $autoriza ; ?></td>
                    </tr>

                    






                </tbody>
            </table>


</body>

</html>