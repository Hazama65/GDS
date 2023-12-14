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
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-hover table-bordered tabla-consulta">
       <thead>   <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
       <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>
            
            <tr>
                <th scope="col" style="background-color:rgb(247, 130, 72,0.8)"> Datos Generales</th>
                <th scope="col" style="background-color:rgb(247, 130, 72,0.8);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">Nombre Paciente</td>
                <td><?php echo $nombre_paciente ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad de Abordaje</td>
                <td><?php echo $edad ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Residencia</td>
                <td><?php echo $residencia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nivel Socioeconomico</td>
                <td><?php echo $nivel_socioeconomico ; ?></td>
            </tr>

            <!--ANTECEDENTES HEREDOFAMILIARES -->
            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.4);"> Antecendentes Pesonales No Patológicos</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.4);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Contacto con Personas Enfermas </td>
                <td><?php echo $contacto_enfermos ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(255, 209, 99);"> Tos crónica</th>
                <th scope="col" style="background-color: rgb(255, 209, 99);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Contacto con personas Tos crónica</td>
                <td><?php echo $tos_cronica ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Padre</td>
                <td><?php echo $tos_padre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Madre</td>
                <td><?php echo $tos_madre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Materno</td>
                <td><?php echo $tos_abuelo_m ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td><?php echo $tos_abuela_m ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Paterno</td>
                <td><?php echo $tos_abuelo_p ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td><?php echo $tos_abuela_p ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Número de Hermanas</td>
                <td><?php echo $tos_no_hermanas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Hermanos</td>
                <td><?php echo $tos_no_hermanos ; ?></td>
            </tr>

            <tr>
            <th scope="col"  style="background-color: rgb(255, 209, 99);"> Tuberculosis</th>
            <th scope="col" style="background-color: rgb(255, 209, 99);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Contacto con personas Tuberculosis</td>
                <td><?php echo $tuberculosis ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Padre</td>
                <td><?php echo $tuberculosis_padre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Madre</td>
                <td><?php echo $tuberculosis_madre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Materno</td>
                <td><?php echo $tuberculosis_abuelo_m ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td><?php echo $tuberculosis_abuela_m ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Paterno</td>
                <td><?php echo $tuberculosis_abuelo_p ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td><?php echo $tuberculosis_abuela_p ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Número de Hermanas</td>
                <td><?php echo $tuberculosis_no_hermanas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Hermanos</td>
                <td><?php echo $tuberculosis_no_hermanos ; ?></td>
            </tr>

            <tr>
            <th scope="col"  style="background-color: rgb(255, 209, 99);"> VIH</th>
            <th scope="col" style="background-color: rgb(255, 209, 99);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Contacto con personas VIH</td>
                <td><?php echo $vih ; ?></td>
            </tr>            
            
            <tr>
                <td class="estilo-celda">Padre</td>
                <td><?php echo $vih_padre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Madre</td>
                <td><?php echo $vih_madre ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Materno</td>
                <td><?php echo $vih_abuelo_m ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Materna</td>
                <td><?php echo $vih_abuela_m ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuelo Paterno</td>
                <td><?php echo $vih_abuelo_p ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Abuela Paterna</td>
                <td><?php echo $vih_abuela_p ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Número de Hermanas</td>
                <td><?php echo $vih_no_hermanas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Hermanos</td>
                <td><?php echo $vih_no_hermanos ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(255, 209, 99);"> Animales</th>
                <th scope="col" style="background-color: rgb(255, 209, 99);">  </th>
            </tr>

            <tr>
                <td class="estilo-celda">Contacto con Animales</td>
                <td><?php echo $contacto_animales ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Perros</td>
                <td><?php echo $perro ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Gatos</td>
                <td><?php echo $gato ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Conejos </td>
                <td><?php echo $conejo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pollos </td>
                <td><?php echo $pollo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Chinches </td>
                <td><?php echo $chinche ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ratas </td>
                <td><?php echo $rata ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Moscos</td>
                <td><?php echo $mosco ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Gallinas</td>
                <td><?php echo $gallinas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cerdos</td>
                <td><?php echo $cerdo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Caballos</td>
                <td><?php echo $caballo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Becerros </td>
                <td><?php echo $becerro ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pajaro</td>
                <td><?php echo $pajaro ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Borregos</td>
                <td><?php echo $borrego ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tortugas </td>
                <td><?php echo $tortuga ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Patos </td>
                <td><?php echo $pato ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Burros</td>
                <td><?php echo $burro ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Moscas</td>
                <td><?php echo $mosca ; ?></td>
            </tr>

            <tr>
            <th scope="col"  style="background-color: rgb(255, 209, 99);"> Viajes Recientes</th>
            <th scope="col" style="background-color: rgb(255, 209, 99);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Viajes recientes</td>
                <td><?php echo $viajes_recientes ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lugar</td>
                <td><?php echo $lugar ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Visitas a Cuevas </td>
                <td><?php echo $vist_cuevas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alimentarios </td>
                <td><?php echo $alimentarios ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo-Alimentario </td>
                <td><?php echo $tipo_alimentarios ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Vacunación Completa </td>
                <td><?php echo $vacunacion ; ?></td>
            </tr>


            <tr>
            <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Vacunación Completa</th>
            <th scope="col" style="background-color: rgb(247, 130, 72,0.8)"> </th>
            </tr>

            <tr>
            <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Nacimiento</th>
            <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">BCG</td>
                <td><?php echo $BCG ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hepatitis B</td>
                <td><?php echo $Hepatitis_B_1 ; ?></td>
            </tr>

            <tr>
            <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">2 meses</th>
            <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Pentavalente Acelular </td>
                <td><?php echo $Pentavalente_Acelular_1 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hepatitis B</td>
                <td><?php echo $Hepatitis_B_2 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rotavirus</td>
                <td><?php echo $Rotavirus_1 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neumococo B</td>
                <td><?php echo $Neumococo_1 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">4 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Pentavalente Acelular </td>
                <td><?php echo $Pentavalente_Acelular_2 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rotavirus</td>
                <td><?php echo $Rotavirus_2 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neumococo B</td>
                <td><?php echo $Neumococo_2 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">6 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Pentavalente Acelular </td>
                <td><?php echo $Pentavalente_Acelular_3 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rotavirus</td>
                <td><?php echo $Rotavirus_3 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Influenza</td>
                <td><?php echo $Influenza_1 ; ?></td>
            </tr>


            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">7 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Influenza 2da dosis</td>
                <td><?php echo $Influenza_2 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">12 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">SRP</td>
                <td><?php echo $SRP_1 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neumococo C.</td>
                <td><?php echo $Neumococo_3 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">18 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Pentavalente Acelular</td>
                <td><?php echo $Pentavalente_Acelular_4 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">24 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Influenza Refuerzo Anual</td>
                <td><?php echo $Influenza_refuerzo_1 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">36 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Influenza Refuerzo Anual</td>
                <td><?php echo $Influenza_refuerzo_2 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">48 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">DPT(Refuerzo)</td>
                <td><?php echo $DPT ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Influenza Refuerzo Anual</td>
                <td><?php echo $Influenza_refuerzo_3 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">59 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Influenza Refuerzo Anual</td>
                <td><?php echo $Influenza_refuerzo_4 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">OVP</td>
                <td><?php echo $OVP ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">72 meses</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">SRP (Refuerzo)</td>
                <td><?php echo $SRP_2 ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">11 años</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">VPH</td>
                <td><?php echo $VPH ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Antecendentes Pesonales Patológicos</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Reflujo</td>
                <td><?php echo $reflujo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neumopatía Crónica</td>
                <td><?php echo $neuropatica_cron ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Edad-Neumopatía</td>
                <td><?php echo $edad_neuro ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Talla Baja</td>
                <td><?php echo $talla_baja ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Discapacidad Intelectual</td>
                <td><?php echo $discapacidad_intelec ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pancreatitis por AVP</td>
                <td><?php echo $AVP ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">LPH</td>
                <td><?php echo $LPH ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Epilepsia</td>
                <td><?php echo $epilipsia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Amigdalectomía</td>
                <td><?php echo $amigdalectomia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Apendicectomía</td>
                <td><?php echo $apendicectomia ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Rubeola</td>
                <td><?php echo $rubeola ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Invaginación</td>
                <td><?php echo $invaginacion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fractura</td>
                <td><?php echo $fractura ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rinitis Alérgica</td>
                <td><?php echo $rinitis ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pielonefritis</td>
                <td><?php echo $pielonefritis ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Varicela</td>
                <td><?php echo $varicela ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad-Varicela</td>
                <td><?php echo $edad_varicela ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Atención Clínica</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
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
                <td><?php echo $tamaño_ganglio ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Caracteristicas </th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
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
                <td><?php echo $bien_delimitado ; ?></td>
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
                <td><?php echo $cambio_coloracion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sin Cambios de Coloració</td>
                <td><?php echo $sin_cambio_coloracion ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Otros</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
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

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Etiología</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">VEB </td>
                <td><?php echo $VEB ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">CMV</td>
                <td><?php echo $CMV ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">TB</td>
                <td><?php echo $TB ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">B19</td>
                <td><?php echo $B19 ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Bocio</td>
                <td><?php echo $bocio ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rubéola</td>
                <td><?php echo $rebeola ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Bartonella</td>
                <td><?php echo $bartonella ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Toxoplamosis</td>
                <td><?php echo $toxoplasmosis ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Inflamatorio</td>
                <td><?php echo $inflamatorio ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Parvovirus</td>
                <td><?php echo $parvovirus ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Varicela</td>
                <td><?php echo $varicela ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Tratamiento Farmacológico para TB</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Isonicida</td>
                <td><?php echo $isonicida ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rifampicina</td>
                <td><?php echo $rifampicina ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Pirazinamida</td>
                <td><?php echo $pirazinamida ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Etambutol</td>
                <td><?php echo $etambutol ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Laboratorios</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.8);"> </th>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Biometría</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Hemoglobina</td>
                <td><?php echo $hemoglobina ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hematocrito</td>
                <td><?php echo $hematocrito ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Leucocitos</td>
                <td><?php echo $leucocitos ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Neutrófilos</td>
                <td><?php echo $neutrofilos ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Linfocitos</td>
                <td><?php echo $linfocitos ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Monocitos</td>
                <td><?php echo $monocitos ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Plaquetas</td>
                <td><?php echo $plaquetas ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Eosinófilos</td>
                <td><?php echo $eosinofilos ; ?></td>
            </tr>

            
            <tr>
                <td class="estilo-celda">Eritrocitos</td>
                <td><?php echo $eritrocitos ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Procalcitonina</td>
                <td><?php echo $procalcitonina ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Volumen Corpuscular Medio</td>
                <td><?php echo $vol_corpuscular ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ancho de Distribución Eritrocitaria</td>
                <td><?php echo $ancho_eritrocitaria ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">PFH</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">DHL</td>
                <td><?php echo $DHL ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">AST</td>
                <td><?php echo $AST ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">ALT</td>
                <td><?php echo $ALT ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Globulina</td>
                <td><?php echo $globulina ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Albúmina</td>
                <td><?php echo $albumina ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">BD</td>
                <td><?php echo $db ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">BI</td>
                <td><?php echo $bi ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">TGO</td>
                <td><?php echo $tgo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">TGP</td>
                <td><?php echo $tgp ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">FA</td>
                <td><?php echo $fa ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">GGT</td>
                <td><?php echo $ggt ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">PT</td>
                <td><?php echo $pt ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">REL A/G</td>
                <td><?php echo $rel ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proteinas Totales</td>
                <td><?php echo $proteinas_totales ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Serología</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Serología</td>
                <td><?php echo $serologia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado-Serología</td>
                <td><?php echo $resultado_sero ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Prueba PCR</td>
                <td><?php echo $PCR ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado-PCR</td>
                <td><?php echo $resultado_PCR ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Cultivo</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Cultivo</td>
                <td><?php echo $cultivo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado-Cultivo</td>
                <td><?php echo $resultado_cultivo ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Tomografía</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tomografía</td>
                <td><?php echo $tomografia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado-Tomografía</td>
                <td><?php echo $resultado_tomografia ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Ultrasonido</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Ultrasonido</td>
                <td><?php echo $ultrasonido ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado-Ultrasonido</td>
                <td><?php echo $resultado_ultrasonido ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.3);">Biopsia</th>
                <th scope="col" style="background-color: rgb(247, 130, 72,0.3);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Biopsia</td>
                <td><?php echo $biopsia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado-Biopsia</td>
                <td><?php echo $resultado_biopsia ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Referencia a Otra Institución</th>
                <th scope="col" style="background-color:rgb(247, 130, 72,0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Referencia</td>
                <td><?php echo $referencia ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Institución</td>
                <td><?php echo $institucion ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Causa</td>
                <td><?php echo $causa_referencia ; ?></td>
            </tr>

            <tr>
                <th scope="col"  style="background-color: rgb(247, 130, 72,0.8);">Alta</th>
                <th scope="col" style="background-color:rgb(247, 130, 72,0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Alta</td>
                <td><?php echo $alta ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Causa</td>
                <td><?php echo $causa_alta ; ?></td>
            </tr>


            </tbody>
    </table>
</body>

</html>