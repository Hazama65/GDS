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
                <td>
                    <?php echo $fecha_seg; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">CURP</td>
                <td>
                    <?php echo $curp; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Talla</td>
                <td>
                    <?php echo $talla; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Peso</td>
                <td>
                    <?php echo $peso; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">IMC</td>
                <td>
                    <?php echo $imc; ?>
                </td>
            </tr>

            <tr>
                <th scope="col">Laboratorios</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Plaquetas</td>
                <td>
                    <?php echo $plaquetas; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Factor Reumatoide Basal</td>
                <td>
                    <?php echo $FRB; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Factor Reumatoide Nominal</td>
                <td>
                    <?php echo $FRN; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">PCR</td>
                <td>
                    <?php echo $PCR; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Vitamina D Basal</td>
                <td>
                    <?php echo $VDB; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Vitamina D Nominal</td>
                <td>
                    <?php echo $VDN; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC Anticpp Basal</td>
                <td>
                    <?php echo $AAB; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">AC Anticpp Nominal</td>
                <td>
                    <?php echo $AAN; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">VSG</td>
                <td>
                    <?php echo $VSG; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">TGO Basal</td>
                <td>
                    <?php echo $TGOB; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">TGO Nominal</td>
                <td>
                    <?php echo $TGON; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">TGP Basal</td>
                <td>
                    <?php echo $TGPB; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">TGP Nominal</td>
                <td>
                    <?php echo $TGPN; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Glucosa</td>
                <td>
                    <?php echo $glucosa; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Colesterol</td>
                <td>
                    <?php echo $colesterol; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Trigliceridos</td>
                <td>
                    <?php echo $trigliceridos; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fib 4</td>
                <td>
                    <?php echo $FIB4; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado FIB 4</td>
                <td>
                    <?php echo $resultado_fib; ?>
                </td>
            </tr>

            <tr>
                <th scope="col">USG HEPÁTICO</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">USG Hepático</td>
                <td>
                    <?php echo $USG_hep; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hallazgo USG</td>
                <td>
                    <?php echo $USG_haz; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Clasificación Esteatosis</td>
                <td>
                    <?php echo $CE; ?>
                </td>
            </tr>

            <tr>
                <th scope="col">Clinica</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Articulaciones Inflamadas SJC28</td>
                <td>
                    <?php echo $sjc28; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Articulaciones Dolorosas TJC28</td>
                <td>
                    <?php echo $tjc28; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Evaluación Global PGA</td>
                <td>
                    <?php echo $pga; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Evaluación del Evaluador EGA</td>
                <td>
                    <?php echo $ega; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado CDAI</td>
                <td>
                    <?php echo $CDAI; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado SDAI</td>
                <td>
                    <?php echo $SDAI; ?>
                </td>
            </tr>

            <tr>
                <th scope="col">Tratamiento</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Metrotexate</td>
                <td>
                    <?php echo $Metrotexate; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td>
                    <?php echo $ds_metro; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Leflunomide</td>
                <td>
                    <?php echo $Leflunomide; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td>
                    <?php echo $ds_leflu; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sulfazalasina</td>
                <td>
                    <?php echo $Sulfazalasina; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td>
                    <?php echo $ds_sulfa; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tocoferol</td>
                <td>
                    <?php echo $Tocoferol; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td>
                    <?php echo $ds_toco; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Glucocorticoide</td>
                <td>
                    <?php echo $Glucocorticoide; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tratamiento</td>
                <td>
                    <?php echo $tx_gluco; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td>
                    <?php echo $ds_gluco; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Vitamina D</td>
                <td>
                    <?php echo $vit_d; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td>
                    <?php echo $ds_vit; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Biológico</td>
                <td>
                    <?php echo $Biologico; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tratamiento</td>
                <td>
                    <?php echo $tx_bio; ?>
                </td>
            </tr>
            <tr>
                <td class="estilo-celda">Apego a Tratamiento</td>
                <td>
                    <?php echo $AT; ?>
                </td>
            </tr>



        </tbody>
    </table>

</body>

</html>