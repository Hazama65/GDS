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
                        <th scope="col" style="background-color:rgb(138, 190, 124) "> Datos Generales</th>
                        <th scope="col" style="background-color:rgb(138, 190, 124) "> </th>
                    </tr>
                </thead>

                <tbody style="font-size:13px;" class="table-bordered">

                    <tr>
                        <td class="estilo-celda">Fecha</td>
                        <td><?php echo $fecha ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Nombre Completo</td>
                        <td><?php echo $nombre_paciente ; ?> </td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">CURP</td>
                        <td><?php echo $curp ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Fecha Nacimiento</td>
                        <td><?php echo $fecha_nacimiento ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Sexo</td>
                        <td><?php echo $sexo ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Edad</td>
                        <td><?php echo $edad ; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Cama</td>
                        <td><?php echo $cama ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Cama Nueva Asignada</td>
                        <td><?php echo $cama_movimiento ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Estado de Salud</td>
                        <td><?php echo $estado_salud ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Diagnóstico</td>
                        <td><?php echo $dx ; ?></td>
                    </tr>

                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124)">Clínica</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124)"> </th>
                    </tr>

                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)">Estado de Alerta</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)"> </th>
                    </tr>

                    <tr>
                        <td class="estilo-celda">GLASGOW</td>
                        <td><?php echo $glasgow ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">RAMSEY</td>
                        <td><?php echo $ramsey ; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Actividad Motora</td>
                        <td><?php echo $act_mot ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Signos Vitales</td>
                        <td><?php echo $signos_v ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">PVC</td>
                        <td><?php echo $pvc ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Precauciones Basadas T.</td>
                        <td><?php echo $precaucion_t ; ?></td>
                    </tr>


                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124)">Sondas, Dispositivos, Líneas Vasculares</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124)"> </th>
                    </tr>

                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)">Líneas Vasculares</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)"> </th>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Catéter Periférico C.</td>
                        <td><?php echo $cateter_c ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Catéter Venoso Central.</td>
                        <td><?php echo $cateter_v ; ?></td>
                    </tr>

                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)">Dispositivos Respiratorios</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)"> </th>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Dispositivo Respiratorio</td>
                        <td><?php echo $dispositivo_r ; ?></td>
                    </tr>

                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)">Sondas</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124,0.4)"> </th>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Sonda Foley</td>
                        <td><?php echo $sonda_foley ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Sonda Nasogástrica</td>
                        <td><?php echo $sonda_naso ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Colostomía</td>
                        <td><?php echo $colostomia ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Penrose</td>
                        <td><?php echo $penrose ; ?></td>
                    </tr>

                    
                    <tr>
                        <th scope="col" style="background-color: rgb(138, 190, 124)">Tratamiento</th>
                        <th scope="col" style="background-color: rgb(138, 190, 124)"> </th>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Dieta</td>
                        <td><?php echo $dieta ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Terapia Intravenosa</td>
                        <td><?php echo $introvenosa ; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Infusiones Especiales de Tx</td>
                        <td><?php echo $infusiones ; ?></td>
                    </tr>




                   






                </tbody>
            </table>


</body>

</html>