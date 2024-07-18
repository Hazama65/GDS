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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>


<table class="table table-striped table-hover table-bordered tabla-consulta">
       <thead>   <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
       <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>
            
            <tr>
                <th scope="col" style="background-color: rgb(129, 99, 139);"> Datos Generales</th>
                <th scope="col" style="background-color: rgb(129, 99, 139);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">Nombre Paciente</td>
                <td><?php echo $nombre_paciente ; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Fecha de Seguimiento</td>
                <td><?php echo $fecha_seguimiento ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(129, 99, 139,0.5);">Atención Clínica</th>
                <th scope="col" style="background-color: rgb(129, 99, 139,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tiempo de Evolución</td>
                <td><?php echo $tiempo_evo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Período Evolución</td>
                <td><?php echo $periodo_evo ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Tamaño del Ganglio</td>
                <td><?php echo $tam_ganglio ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(129, 99, 139,0.5);">Caracteristicas </th>
                <th scope="col" style="background-color: rgb(129, 99, 139,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda"> Doloroso </td>
                <td><?php echo $doloroso ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda"> No Doloroso </td>
                <td><?php echo $no_doloroso ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Indurado</td>
                <td><?php echo $indurado ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">No Indurado</td>
                <td><?php echo $no_indurado ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Eritematoso</td>
                <td><?php echo $eritematoso ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertermico</td>
                <td><?php echo $hipertermico ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Con Secreción</td>
                <td><?php echo $secrecion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sin Secreción</td>
                <td><?php echo $sin_secrecion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Bien Delimitado</td>
                <td><?php echo $delimitado ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Mal Delimitado</td>
                <td><?php echo $mal_delimitado ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fijo</td>
                <td><?php echo $fijo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Movíl</td>
                <td><?php echo $movil ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cambios de Coloración</td>
                <td><?php echo $coloracion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sin Cambios de Coloració</td>
                <td><?php echo $sin_coloracion ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(129, 99, 139,0.5);">Otros</th>
                <th scope="col" style="background-color: rgb(129, 99, 139,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Otros Ganglios </td>
                <td><?php echo $otros_ganglios ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Submandibulares</td>
                <td><?php echo $submandibulares ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Axilares</td>
                <td><?php echo $axilares ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Inguinales</td>
                <td><?php echo $inguinales ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cervicales</td>
                <td><?php echo $cervicales ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Retroauriculares</td>
                <td><?php echo $retroauriculares ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Subclavicular</td>
                <td><?php echo $subclavicular ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Occipital</td>
                <td><?php echo $occipital ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Adenopatias</td>
                <td><?php echo $adenopatias ; ?></td>
            </tr>

</tbody>
    </table>
</body>

</html>