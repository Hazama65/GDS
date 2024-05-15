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
    <title>Document</title>
</head>

<body>
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(231, 52, 78);"> DATOS Seguimiento </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">Fecha de Seguimiento</td>
                <td><?php echo $fecha_seg; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Seguimiento</td>
                <td><?php echo $Seguimiento_SXcoronario; ?> </td>
            </tr>



            <tr>
                <th scope="col" style="background-color:  rgb(231, 52, 78);">Tratamiento </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">Ácido Acetil Salicílico</td>
                <td><?php echo $Acido_salicilico; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Clopidogrel</td>
                <td><?php echo $Clopidogrel; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Eptifibatida</td>
                <td><?php echo $Eptifibatida; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Prasugrel</td>
                <td><?php echo $Prasugrel; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Ticagrelor</td>
                <td><?php echo $Ticagrelor; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Anticoagulantes</td>
                <td><?php echo $Anticuagulantes; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Betabloqueadores</td>
                <td><?php echo $Betabloqueadores; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">IECA</td>
                <td><?php echo $IECA; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Calcioantagonistas</td>
                <td><?php echo $Calcioantagonistas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">ARA II</td>
                <td><?php echo $ARA_II; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Estatinas</td>
                <td><?php echo $Estatinas; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Fibratos</td>
                <td><?php echo $Fibratos; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Antianginosos</td>
                <td><?php echo $Antianginosos; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Inhibidor de la Absorción</td>
                <td><?php echo $Inhibidor_absorcion; ?> </td>
            </tr>

            <tr>
                <td class="estilo-celda">Anticuerpos Monoclonales</td>
                <td><?php echo $Anticuerpos_Monoclonales; ?> </td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Paraclínicos </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">CK</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">CK-MB</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Troponinas</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Glucosa</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Urea</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Creatinina</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Colesterol</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Trigliceridos</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ácido Úrico</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">HB Glucosilada</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proteínas</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">LDL</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">HDL</td>
                <td></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Viabilidad y Perfusión Miocardia </th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>

            </tr>

            <tr>
                <td class="estilo-celda">Gammagrama Cardiaco Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado Gammagrama Cardiaco</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Localización Gammagrama</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resonancia Magnetica Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado Resonancia Magnetica</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ergometría Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 1</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 2</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 3</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 4</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 5</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 6</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etapa 7</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Suspensión de Estudio</td>
                <td></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(231, 52, 78);">Ecocardiograma</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Diastólico Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sistolico Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Frac. Eyección Ventrículo Izq Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Movilidad Inicial</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Segmento</td>
                <td></td>
            </tr>

            <tr>
            <th scope="col" style="background-color: rgb(231, 52, 78);">Defunción</th>
                <th scope="col" style="background-color: rgb(231, 52, 78);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Defunción</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Causa de Defunción</td>
                <td></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Defunción</td>
                <td></td>
            </tr>

    

        </tbody>
    </table>





</body>

</html>