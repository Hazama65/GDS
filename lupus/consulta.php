<?php
include ('php/controllers/consulta.controller.php');
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Consulta</title>
</head>

<body>
    <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col">Datos Paciente</th>
                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre_completo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Escolaridad</td>
                <td><?php echo $escolaridad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de nacimiento</td>
                <td><?php echo $fecha_nacimiento; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Año de Diagnóstico</td>
                <td><?php echo $dx; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Talla</td>
                <td><?php echo $talla; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Peso</td>
                <td><?php echo $peso; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">IMC</td>
                <td><?php echo $imc; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado IMC</td>
                <td><?php echo $imcdescripcion; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tensión Arterial</td>
                <td><?php echo $ta; ?> </td>
            </tr>

            <tr>
                <th scope="col">Antecendetes Patologicos</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $ninguno; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Alcoholismo</td>
                <td><?php echo $alcoholismo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Artritis Reumatoide</td>
                <td><?php echo $AR; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Diabetes Mellitus</td>
                <td><?php echo $DM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hipertensión Arterial</td>
                <td><?php echo $HA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Obesidad</td>
                <td><?php echo $obesidad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sx Antifosfolípidos</td>
                <td><?php echo $SA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Enfermedad Mental</td>
                <td><?php echo $Enfermedad_Mental; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fibrilación Auricular</td>
                <td><?php echo $FA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Migraña</td>
                <td><?php echo $Migraña; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">SICA</td>
                <td><?php echo $SICA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tabaquismo</td>
                <td><?php echo $tabaquismo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tratamiento antipsicotico</td>
                <td><?php echo $antipsicotico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tx disfunción erectil</td>
                <td><?php echo $erectil; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">S.O.P</td>
                <td><?php echo $sop; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hipotiroidismo</td>
                <td><?php echo $hipotiroidismo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Pre-Diabetes</td>
                <td><?php echo $prediabetes; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dislipidemia</td>
                <td><?php echo $dislipidemia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Menopausia</td>
                <td><?php echo $menopausia; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Etapa Menopausia</td>
                <td><?php echo $menopausia_grad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Enfermedad Renal Crónica</td>
                <td><?php echo $ERC; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Grado ERC</td>
                <td><?php echo $grado_ERC; ?> </td>
            </tr>

            <tr>
                <th scope="col">Actividad Lúpica</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Actividad Articular</td>
                <td><?php echo $AA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Cutánea</td>
                <td><?php echo $AC; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Hematología</td>
                <td><?php echo $AH; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Inmunológica</td>
                <td><?php echo $AI; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Neurológica</td>
                <td><?php echo $AN; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Renal</td>
                <td><?php echo $ARE; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Muscular</td>
                <td><?php echo $AM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Cardiaca</td>
                <td><?php echo $ACA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Serosa</td>
                <td><?php echo $ASA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Constitucional</td>
                <td><?php echo $ACONS; ?> </td>
            </tr>

            <tr>
                <th scope="col">Calculo SLEDAI</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Registros calculadora</td>
                <td><?php echo $valores_sledai; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado SLEDAI</td>
                <td><?php echo $resultados_sledai; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Categoria SLEDAI</td>
                <td><?php echo $Categoria_sledai; ?> </td>
            </tr>

            <tr>
                <th scope="col">Laboratorios</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Albúmina Sérica</td>
                <td><?php echo $ASE; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">BUN</td>
                <td><?php echo $BUN; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">C3</td>
                <td><?php echo $C3; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">C4</td>
                <td><?php echo $C4; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Creatina Sérica</td>
                <td><?php echo $CS; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Proteinuria en 24 hrs</td>
                <td><?php echo $P24; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Albúminuria en 24 hrs</td>
                <td><?php echo $A24; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Leucocitos</td>
                <td><?php echo $leucocitos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Linfocitos</td>
                <td><?php echo $linfocitos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Plaquetas</td>
                <td><?php echo $plaquetas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hemoglobina</td>
                <td><?php echo $hemoglobina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Vitamina D</td>
                <td><?php echo $VD; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Anticuerpo Lúpico</td>
                <td><?php echo $AL; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Urea</td>
                <td><?php echo $Urea; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Colesterol</td>
                <td><?php echo $Colesterol; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Trigliceridos</td>
                <td><?php echo $Trigliceridos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">HDL</td>
                <td><?php echo $HDL; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">LDL</td>
                <td><?php echo $LDL; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Relacion Colesteros HDL</td>
                <td><?php echo $Colesteros_HDL; ?> </td>
            </tr>
            <tr>
                <th scope="col">EGO</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Hematuria</td>
                <td><?php echo $hematuria_1; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Cilindro</td>
                <td><?php echo $cilindro_1; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Piuria</td>
                <td><?php echo $piuria_1; ?> </td>
            </tr>

            <tr>
                <th scope="col">USG Doppler</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">USG Doppler Carotideo</td>
                <td><?php echo $doppler; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">USG Uso Derecha</td>
                <td><?php echo $Uso_derecha; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">USG Uso Izquierda</td>
                <td><?php echo $Uso_izquierda; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Grosor Derecho</td>
                <td><?php echo $grosor_derecha; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Clasificacion Derecho</td>
                <td><?php echo $clasificacion_derecha; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Placa Ateromatosa Derecho</td>
                <td><?php echo $placa_ateromatosa_derecha; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Grosor Izquierdo</td>
                <td><?php echo $grosor_izquierda; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Clasificacion Izquierdo</td>
                <td><?php echo $clasificacion_izquierda; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Placa Ateromatosa Izquierdo</td>
                <td><?php echo $placa_ateromatosa_izquierda; ?> </td>
            </tr>


            <tr>
                <th scope="col">Anticuerpos</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Ac-DNA Elevado</td>
                <td><?php echo $AC_DNA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-SM</td>
                <td><?php echo $AC_SM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-RNP</td>
                <td><?php echo $AC_RNP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-RO</td>
                <td><?php echo $AC_RO; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-LA</td>
                <td><?php echo $AC_LA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-Cardiolipinas IgM</td>
                <td><?php echo $AC_CM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-Cardiolipinas IgG</td>
                <td><?php echo $AC_CG; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac B2-GPI IgG</td>
                <td><?php echo $AC_BG; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac B2-GPI IgM</td>
                <td><?php echo $AC_BM; ?> </td>
            </tr>

            <tr>
                <th scope="col">Biopsia Renal</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Biopsia Renal</td>
                <td><?php echo $BR; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td><?php echo $BR_tipo; ?> </td>
            </tr>

            <tr>
                <th scope="col">Marcadores de Mal Pronóstico</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Índice</td>
                <td><?php echo $indice; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td><?php echo $indice_tipo; ?> </td>
            </tr>

            <tr>
                <th scope="col">Tratamiento</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Metrotexate</td>
                <td><?php echo $Metrotexate; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_metro; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hidroxicloroquina</td>
                <td><?php echo $Hidroxicloroquina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_hidro; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Azatioprina</td>
                <td><?php echo $Azatioprina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_aza; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Prednisona</td>
                <td><?php echo $Prednisona; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_predi; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Micofenolato de Mofetilo</td>
                <td><?php echo $Micofenolato; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_mico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ciclofosfamida</td>
                <td><?php echo $Ciclofosfamida; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_ciclo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Rituximab</td>
                <td><?php echo $Rituximab; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Apego a Tratamiento</td>
                <td><?php echo $AT; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Leflunomide</td>
                <td><?php echo $Leflunomide; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Leflunomide; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Glucocorticoide</td>
                <td><?php echo $Glucocorticoide; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Glucocorticoide; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Aspirina</td>
                <td><?php echo $Aspirina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Aspirina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Estatinas</td>
                <td><?php echo $Estatinas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Estatinas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Antihipertensivo</td>
                <td><?php echo $Antihipertensivo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Antihipertensivo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Antidiabético O.</td>
                <td><?php echo $Antidiabetico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Antidiabetico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Insulinas</td>
                <td><?php echo $Insulinas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_Insulinas; ?> </td>
            </tr>
            <tr>
                <th scope="col">Defunción</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Defunción</td>
                <td><?php echo $defuncion; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Causa Defunción</td>
                <td><?php echo $causa_defuncion; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Notas</td>
                <td><?php echo $nota; ?> </td>
            </tr>

        </tbody>
    </table>

</body>

</html>