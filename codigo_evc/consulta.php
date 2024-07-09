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
                        <th colspan="2" style="background-color:rgb(114, 27, 47, 0.5)"> Datos Generales</th>
                    </tr>

                </thead>

                <tbody style="font-size:13px;" class="table-bordered">

                    <tr>
                        <td class="estilo-celda">Nombre Completo</td>
                        <td><?php echo $nombre_paciente; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">CURP</td>
                        <td><?php echo $curp; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Fecha Nacimiento</td>
                        <td><?php echo $fecha_nacimiento; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Sexo</td>
                        <td><?php echo $sexo; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Edad de Ingreso</td>
                        <td><?php echo $edad; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Fecha de Sintomas</td>
                        <td><?php echo $fecha_sintomas; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Inicio de Sintomas</td>
                        <td><?php echo $inicio_sintomas; ?></td>
                    </tr>


                    <tr>
                    <tr>
                        <th colspan="2" style="background-color:rgb(114, 27, 47, 0.5)"> Escala F.A.S.T.</th>
                    </tr>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Cara</td>
                        <td><?php echo $face; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Brazos</td>
                        <td><?php echo $arms; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Lenguaje</td>
                        <td><?php echo $speech; ?></td>
                    </tr>

                
                    <tr>

                    <tr>
                        <th colspan="2" style="background-color:rgb(114, 27, 47, 0.5)"> Escala N.I.H.S.S Inicial</th>
                    </tr>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Escala NIHSS</td>
                        <td><?php echo $escala; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Trombolisis</td>
                        <td><?php echo $trombolisis; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">r-TPA</td>
                        <td><?php echo $tpa; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Sangrado</td>
                        <td><?php echo $sangrado; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Nivel</td>
                        <td><?php echo $nivel; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Fecha de Sangrado</td>
                        <td></td>

                    <tr>
                        <th colspan="2" style="background-color:rgb(114, 27, 47, 0.5)"> Factor de Riesgo</th>
                    </tr>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Enfermedad Vascular Cerebral</td>
                        <td><?php echo $evc; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hipertensión </td>
                        <td><?php echo $hipertension; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Diabetes</td>
                        <td><?php echo $diabetes; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Tabaquismo </td>
                        <td><?php echo $tabaquismo; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Covid </td>
                        <td><?php echo $covid; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hiperlipidemia </td>
                        <td><?php echo $hiperlipidemia; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Apnea de Sueño </td>
                        <td><?php echo $apnea; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Enfermedad Cardiovascular</td>
                        <td><?php echo $enfcardio; ?></td>
                    </tr>

                    <tr>

                    <tr>
                        <th colspan="2" style="background-color:rgb(114, 27, 47, 0.5)"> Código de EVC</th>
                    </tr>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Se Activa Código EVC</td>
                        <td><?php echo $activacion; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Defunción</td>
                        <td><?php echo $defuncion; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Área</td>
                        <td></td>
                    </tr>

                    <tr>
                    <tr>
                        <th colspan="2" style="background-color:rgb(213, 204, 224)"> Equipo Multidisciplinario</th>
                    </tr>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Personal Médico Adscrito Urgencias</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td class="estilo-celda">Personal de Admisión Hospitalaria</td>
                        <td></td>

                    <tr>
                        <td class="estilo-celda">Personal de Enfermería</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Personal de Imagenología</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Personal de Laboratorio</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Personal de CISFA</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Trabajo Social</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Camillero</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Médico neurólogo</td>
                        <td></td>
                    </tr>

                   
                    <tr>
                    <tr>
                        <th colspan="2" style="background-color:rgb(114, 27, 47, 0.5)"> Puertas</th>
                    </tr>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de llegada Urgencias</td>
                        <td><?php echo $hora_llegada; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de Atención TRIAGE</td>
                        <td><?php echo $hora_triage; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Puerta-TRIAGE</td>
                        <td><?php echo $puerta_triage; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de Atención CHOQUE</td>
                        <td><?php echo $hora_choque; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Puerta-URGENCIAS</td>
                        <td><?php echo $puerta_urgencias; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de Realización TAC</td>
                        <td><?php echo $hora_tac; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Puerta-TAC</td>
                        <td><?php echo $puerta_tac; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de Atención Equipo Multidisciplinario</td>
                        <td><?php echo $hora_em; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Puerta-MÉDICOS</td>
                        <td><?php echo $puerta_medicos; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de Inicio de Trombolisis</td>
                        <td><?php echo $hora_trombo; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Puerta-AGUJA</td>
                        <td><?php echo $puerta_aguja; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de Inicio a Terapia</td>
                        <td><?php echo $hora_terapia; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Terapia Intensiva</td>
                        <td><?php echo $terapia_intensiva; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Hora de TAC-Control</td>
                        <td><?php echo $hora_tac_control; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">TAC-Control</td>
                        <td><?php echo $tac_control; ?></td>
                    </tr>


                    <tr>

                    <tr>
                        <th colspan="2" style="background-color:rgb(213, 204, 224)"> Valoración de Rehabilitación</th>
                    </tr>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Val. Inicial de Rehabilitación</td>
                        <td><?php echo $inicial; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Val. Rehabilitación Hospitalaria</td>
                        <td><?php echo $hospitalaria; ?></td>
                    </tr>

                    <tr>
                    <tr>
                        <th colspan="2" style="background-color:rgb(213, 204, 224)"> Escalas</th>
                    </tr>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Dependencia Funcional</td>
                        <td><?php echo $df_nivel; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Dependencia Funcional-Nivel</td>
                        <td><?php echo $df; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">FIM Inicial</td>
                        <td><?php echo $fim; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Barthel Inicial</td>
                        <td><?php echo $barthel; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">RANKIN</td>
                        <td><?php echo $rankin; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Motricity Index</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Marcha FAC</td>
                        <td></td>
                    </tr>
                   


                    <tr>
                    <tr>
                        <th colspan="2" style="background-color:rgb(213, 204, 224)"> Escalas de Rehabilitación</th>
                    </tr>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Deglución</td>
                        <td><?php echo $deglucion; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Lenguaje</td>
                        <td><?php echo $lenguaje; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Motor</td>
                        <td><?php echo $motor; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Extremidad Superior</td>
                        <td><?php echo $extr_sup; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Extremidad Inferior</td>
                        <td><?php echo $extr_inf; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Dolor</td>
                        <td><?php echo $dolor; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Tipo-Neuropático</td>
                        <td><?php echo $tipo_neuro; ?></td>
                    </tr>


                    <tr>
                        <td class="estilo-celda">Cognitivo</td>
                        <td><?php echo $cognitivo; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Interconsulta</td>
                        <td><?php echo $interconsulta; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Neuropsicología</td>
                        <td><?php echo $neuro; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Marcha</td>
                        <td><?php echo $marcha; ?></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Equilibrio</td>
                        <td><?php echo $equilibrio; ?></td>
                    </tr>

                    <tr>
                        <th colspan="2" style="background-color:rgb(213, 204, 224)">Escala Salida</th>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Escala NIHSS Salida</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="estilo-celda">Escala GOSE</td>
                        <td></td>
                    </tr>







                </tbody>
            </table>


</body>

</html>