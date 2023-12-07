<?php
include('php/controllers/consulta_seguimiento.controller.php');
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

    <table class="table table-striped table-hover table-bordered tabla-ver_registro">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(62, 104, 170,0.5);">ANTROPOMETRÍA</th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">CURP</td>
                <td> <?php echo $curp; ?></td>

            </tr>
            <tr>
                <td class="estilo-celda">Talla</td>
                <td> <?php echo $talla; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Peso</td>
                <td> <?php echo $peso; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">IMC</td>
                <td> <?php echo $imc; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado IMC</td>
                <td> <?php echo $resultado_imc; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Circunferencia Cintura</td>
                <td> <?php echo $circunferencia_abdominal; ?></td>
            </tr>

            <!--COMORBILIDADES-->

            <tr>
                <th scope="col" style="background-color:rgb(62, 104, 170,0.5); "> Conmorbilidades</th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">Enfermedad hepática grasa no alcohólica</td>
                <td> <?php echo $EHGNA; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Child-Pugh</td>
                <td> <?php echo $Child_Pugh; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Dislipidemia</td>
                <td> <?php echo $dislipidemia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Distiroidismo</td>
                <td> <?php echo $distiroidismo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cancer</td>
                <td> <?php echo $cancer; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Insuficiencia Cardiaca</td>
                <td> <?php echo $insuficiencia_cardiaca; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Disritmias cardiacas</td>
                <td> <?php echo $disritmias_cardiacas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Osteoporosis</td>
                <td> <?php echo $osteoporosis; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Gota/Hiperuricemia</td>
                <td> <?php echo $gota; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lupus Eritematoso Sistemico</td>
                <td> <?php echo $LES; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Artritris Reumatoide</td>
                <td> <?php echo $artritis_reumatoide; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertension Arterial</td>
                <td> <?php echo $hipertension; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Síndrome de Cushing</td>
                <td> <?php echo $SC; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo de Cushing</td>
                <td> <?php echo $tipo_SC; ?></td>
            </tr>


            <!--====================================LABORATORIOS===========================-->

            <tr>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> LABORATORIOS</th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">TGO</td>
                <td> <?php echo $TGO; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">TGP</td>
                <td> <?php echo $TGP; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">FA</td>
                <td> <?php echo $FA; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">GGT</td>
                <td> <?php echo $GGT; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">DHL</td>
                <td> <?php echo $DHL; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proteínas totales</td>
                <td> <?php echo $proteinas_totales; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Albumina</td>
                <td> <?php echo $albumina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Globulinas</td>
                <td> <?php echo $globulinas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Relación (A/G)</td>
                <td> <?php echo $AG; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">BT</td>
                <td> <?php echo $BT; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">BD</td>
                <td> <?php echo $BD; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">BI</td>
                <td> <?php echo $BI; ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">HB</td>
                <td> <?php echo $HB; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">VSG</td>
                <td> <?php echo $VSG; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">25-OHD</td>
                <td> <?php echo $OHD; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Creatinina</td>
                <td> <?php echo $creatinina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cistatina</td>
                <td> <?php echo $creatinina_cistatina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Glucosa</td>
                <td> <?php echo $glucosa; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">HB Glucosilada</td>
                <td> <?php echo $glucosilada; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ácido Úrico</td>
                <td> <?php echo $acido_urico; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Urea</td>
                <td> <?php echo $urea; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Creatinina</td>
                <td> <?php echo $creatinina2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Colesterol</td>
                <td> <?php echo $colesterol; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Triglicéridos</td>
                <td> <?php echo $trigliceridos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">LDL</td>
                <td> <?php echo $LDL; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">HDL</td>
                <td> <?php echo $HDL; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">ALB 24 HRS</td>
                <td> <?php echo $HBG; ?></td>
            </tr>





            <!--====================================COMPLICACIONES============================-->

            <tr>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> COMPLICACIONES</th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Retinopatía</td>
                <td> <?php echo $retinopatia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ceguera</td>
                <td> <?php echo $ceguera; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nefropatía</td>
                <td> <?php echo $nefropatia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cardiopatía isquémica</td>
                <td> <?php echo $neuropatia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Enfermedad Vascular Cerebral Isquémica</td>
                <td> <?php echo $polineuropatia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Insuficiencia Arterial Periférica</td>
                <td> <?php echo $Simetrica_Distal; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neuropatía</td>
                <td> <?php echo $Pie_Charcot; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Polineuropatía</td>
                <td> <?php echo $neuropatia_gastro; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Simétrica Distal</td>
                <td> <?php echo $neuropatia_genito; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pie de Charcot</td>
                <td> <?php echo $neuropatia_cardio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neuropatía Gastrointestinal</td>
                <td> <?php echo $CI; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neuropatía Genitourinaria</td>
                <td> <?php echo $amputacion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neuropatía Cardiovascular</td>
                <td> <?php echo $amputaciones_dedos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Amputaciones</td>
                <td> <?php echo $Mano_dedos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Dedos</td>
                <td> <?php echo $Pies_dedos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Dedos-Mano</td>
                <td> <?php echo $amputaciones_transmetatarsiana; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Dedos-Pie</td>
                <td> <?php echo $lateralidad_Transmetatarsiana; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Transmetatarsiana</td>
                <td> <?php echo $amputaciones_infracondilea; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Transmetatarsiana-Lateralidad</td>
                <td> <?php echo $lateralidad_Infracondilea; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Infracondílea</td>
                <td> <?php echo $amputaciones_Supracondilea; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Infracondílea-Lateralidad</td>
                <td> <?php echo $lateralidad_Supracondilea; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Supracondílea</td>
                <td> <?php echo $EVCI; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Supracondílea-Lateralidad</td>
                <td> <?php echo $IAP; ?></td>
            </tr>




            <!--====================================TRATAMIENTOS============================-->

            <tr>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> TRATAMIENTOS</th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Hipoglucemiantes</td>
                <td> <?php echo $hipoglucemiantes; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Metformina</td>
                <td> <?php echo $metformina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sulfonilureas</td>
                <td> <?php echo $sulfonilureas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Glinidas</td>
                <td> <?php echo $glinidas; ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">I-DPP4</td>
                <td> <?php echo $DPP4; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">ISGLT-2</td>
                <td> <?php echo $ISGLT; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Análogos de GLP-1</td>
                <td> <?php echo $GLP; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pioglitazona</td>
                <td> <?php echo $pioglitazona; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Inhibidores de la alfaglucosidasa</td>
                <td> <?php echo $IA; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Insulinas</td>
                <td> <?php echo $insulina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">NPH</td>
                <td> <?php echo $NPH; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rápida regular</td>
                <td> <?php echo $rapida_regular; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Glargina</td>
                <td> <?php echo $glardina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Glargina 300</td>
                <td> <?php echo $glardina_300; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Detemir</td>
                <td> <?php echo $detemir; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Degludec</td>
                <td> <?php echo $degludec; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lispro</td>
                <td> <?php echo $lispro; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Aspart</td>
                <td> <?php echo $aspart; ?></td>

            </tr>

            <tr>
                <td class="estilo-celda">Glulisina</td>
                <td> <?php echo $glulisina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">NPH/Regular</td>
                <td> <?php echo $NPH_regular; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lispro protamina/lispro</td>
                <td> <?php echo $lispro_prota; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipolipemiantes</td>
                <td> <?php echo $hipolipemiante; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estatinas</td>
                <td> <?php echo $estatinas; ?></td>

            </tr>

            <tr>
                <td class="estilo-celda">Fibratos</td>
                <td> <?php echo $fibratos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Omega 3</td>
                <td> <?php echo $omega_3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Inhibidores de la Absorción </td>
                <td> <?php echo $IAB; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Antihipertensivos</td>
                <td> <?php echo $antihipertensivos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">IECAS</td>
                <td> <?php echo $IECAS; ?></td>

            </tr>

            <tr>
                <td class="estilo-celda">ARA-II</td>
                <td> <?php echo $ARAII; ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">Inhibidores de la Renina</td>
                <td> <?php echo $IR; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Calcioantagonistas</td>
                <td> <?php echo $calcioantagonistas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Betabloqueadores</td>
                <td> <?php echo $betabloqueadores; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Diuréticos tiazidas</td>
                <td> <?php echo $DT; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alfabloqueadores</td>
                <td> <?php echo $alfabloqueadores; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Espironolactona</td>
                <td> <?php echo $espironolactoma; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otros</td>
                <td> <?php echo $otros; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">ASA</td>
                <td> <?php echo $ASA; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alopurinol</td>
                <td> <?php echo $alopurinol; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neuromodulador</td>
                <td> <?php echo $neuromodulador; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Procineticos</td>
                <td> <?php echo $procineticos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Polifarmacia</td>
                <td> <?php echo $no_farmacos; ?></td>
            </tr>
            <tr>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> Medidas Generales</th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Ejercicio</td>
                <td> <?php echo $no_semana; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Apego Veces</td>
                <td> <?php echo $no_veces; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tiempo a la Semana</td>
                <td> <?php echo $t_semana; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Apego a la Semana</td>
                <td> <?php echo $t_no_semana; ?></td>
            </tr>

        </tbody>
    </table>





</body>

</html>