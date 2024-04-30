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
                <th scope="col">Datos Paciente</th>
                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">Fecha de Seguimiento</td>
                <td><?php echo $fecha_seg; ?></td>
            </tr>
            <tr>
                <th scope="col">Enfermedad</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Progresión Enfermedad</td>
                <td><?php echo $progre_enf; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Dx Progresión</td>
                <td><?php echo $fecha_progre; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Recurrencia Enfermedad</td>
                <td><?php echo $recu_enfer; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de recurrencia</td>
                <td><?php echo $fecha_recu; ?></td>
            </tr>
            <tr>
                <th scope="col">Reintervención</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Amerita Reintervención</td>
                <td><?php echo $reintervencion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de Reintervención</td>
                <td><?php echo $fecha_reintervencion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lateralidad Reintervención</td>
                <td><?php echo $lat_reintervencion; ?></td>
            </tr>
            <tr>
                <th scope="col">QT</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Amerita Nueva QT</td>
                <td><?php echo $nuevo_qt; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">5Fluororacilo</td>
                <td><?php echo $tx_5Fluororacilo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Beuacizumab</td>
                <td><?php echo $tx_Beuacizumab; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Capecitabina</td>
                <td><?php echo $tx_Capecitabina; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Carboplatino</td>
                <td><?php echo $tx_Carboplatino; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cetuximab</td>
                <td><?php echo $tx_Cetuximab; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ciclofosfamida</td>
                <td><?php echo $tx_Ciclofosfamida; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cisplatino</td>
                <td><?php echo $tx_Cisplatino; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Docetaxel</td>
                <td><?php echo $tx_Docetaxel; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Etoposido</td>
                <td><?php echo $tx_Etoposido; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Herceptin</td>
                <td><?php echo $tx_Herceptin; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paclitaxel</td>
                <td><?php echo $tx_Paclitaxel; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Pertuzumab</td>
                <td><?php echo $tx_Pertuzumab; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Trastuzumab</td>
                <td><?php echo $tx_Trastuzumab; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Momento QT</td>
                <td><?php echo $momento_qt; ?></td>
            </tr>
            <tr>
                <th scope="col">Radioterapia</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Amerita Nueva Radioterapia</td>
                <td><?php echo $nueva_radio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Nueva RT</td>
                <td><?php echo $fecha_radio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Momento RT</td>
                <td><?php echo $momento_radio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis</td>
                <td><?php echo $dosis_radio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fracciones</td>
                <td><?php echo $fracciones_radio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">No. Fracciones</td>
                <td><?php echo $no_fracciones; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Técnica</td>
                <td><?php echo $tecnica_fracciones; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Caries</td>
                <td><?php echo $rt_caries; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Disgeusia</td>
                <td><?php echo $rt_disgeusia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dolor</td>
                <td><?php echo $rt_dolor; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fractura</td>
                <td><?php echo $rt_fractura; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Infeccion</td>
                <td><?php echo $rt_infeccion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Hemorragias</td>
                <td><?php echo $rt_hemorragias; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Mucositis</td>
                <td><?php echo $rt_mucositis; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Osteonecrosis</td>
                <td><?php echo $rt_osteonecrosis; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Parestesia</td>
                <td><?php echo $rt_parestesia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Propios De La Anestesia Local</td>
                <td><?php echo $rt_propios; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Radiodermitis</td>
                <td><?php echo $rt_radiodermitis; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Reaccion Alergica</td>
                <td><?php echo $rt_RA; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Trismus</td>
                <td><?php echo $rt_trismus; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Xerostomia</td>
                <td><?php echo $rt_xerostomia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $rt_ninguno; ?></td>
            </tr>
            <tr>
                <th scope="col">Cuidados Paliativos - Protocolo</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Cuidados Paliativos</td>
                <td><?php echo $cuidado_palia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo de Cuidado Paliativo</td>
                <td><?php echo $tipo_palia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Protocolo Clínico</td>
                <td><?php echo $proto_clinico; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Protocolo de Investigación</td>
                <td><?php echo $proto_inv; ?></td>
            </tr>


            


        </tbody>
    </table>

</body>

</html>