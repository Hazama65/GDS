<?php
    include("php/visualizacion.php");
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
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8); color: aliceblue;"> Datos Generales</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8); color: aliceblue;"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">Fecha:</td>
                <td><?php echo $fecha; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Diabetico</td>
                <td><?php echo $diabetico; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertensión</td>
                <td><?php echo $hipertension; ?></td>
            </tr>
            
           
          <!--CONMORBILIDADES-->
            

            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.7); color: aliceblue;"> Atención Médica</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Médico Tratante</td>
                <td><?php echo $medico; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Diagnóstico</td>
                <td><?php echo $diagnostico; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Procedimiento</td>
                <td><?php echo $procedimiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Procedimiento programado</td>
                <td><?php echo $proce_programado; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Infarto</td>
                <td><?php echo $infarto; ?></td>
            </tr>

<!--=================================Atención médica============================-->
            
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.7); color: aliceblue;">Sitio Abordaje</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Braquial</td>
                <td><?php echo $braquial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_braquial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cubital</td>
                <td><?php echo $cubital; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_cubital; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Deltopectoral</td>
                <td><?php echo $deltopectoral; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_dectopectoral; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Femoral</td>
                <td><?php echo $femoral; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_femoral; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Radial</td>
                <td><?php echo $radial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_radial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Subclavio</td>
                <td><?php echo $subclavio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_subclavio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Transradial Distal</td>
                <td><?php echo $transradial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lateralidad</td>
                <td><?php echo $lateralidad_transradial; ?></td>
            </tr>

            

            <!--===================================PREVIA APLICACIÓN DE HIERRO====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.7); color: aliceblue;">Destino Final</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Destino</td>
                <td><?php echo $destino_final; ?></td>
            </tr>
            
            
            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.7); color: aliceblue;">Lesión Coronaria</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Bifurcación</td>
                <td><?php echo $bifurcacion; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cincunfleja</td>
                <td><?php echo $cincunfleja; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Coronario Derecha</td>
                <td><?php echo $coronaria_derecha; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Descendente Anterior</td>
                <td><?php echo $desendente_ant; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ramo Intermedio</td>
                <td><?php echo $ramo_inter; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tronco Coronario Izquierdo</td>
                <td><?php echo $tronco_coronario; ?></td>
            </tr>
            
            
            <!--===================================Procedimiento Qx Programado Tipo cirugía====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.7); color: aliceblue;">Stent | Balón</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>

            

            <tr>
                <td class="estilo-celda">Stent</td>
                <td><?php echo $stent; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número</td>
                <td><?php echo $stent_numero; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Medidas</td>
                <td><?php echo $stent_medidas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Balón</td>
                <td><?php echo $balon; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número</td>
                <td><?php echo $balon_numeros; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Medidas</td>
                <td><?php echo $balon_medidas; ?></td>
            </tr>


        </tbody>
    </table>
    
</body>
</html>