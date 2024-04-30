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
                <td><?php echo $curp; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre_completo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Escolaridad</td>
                <td><?php echo $escolaridad; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de nacimiento</td>
                <td><?php echo $birth_date; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Talla</td>
                <td><?php echo $talla; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Peso</td>
                <td><?php echo $peso; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">IMC</td>
                <td><?php echo $imc; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Estado</td>
                <td><?php echo $estado; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Municipio</td>
                <td><?php echo $municipio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Referencia</td>
                <td><?php echo $ref; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Unidad de Referencia</td>
                <td><?php echo $uni_ref; ?></td>
            </tr>
            <tr>
                <th scope="col">Antecedentes No Patologicos</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Exposición Solar</td>
                <td><?php echo $exp_solar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Comidas al Día</td>
                <td><?php echo $num_comidas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Higiene Bucal</td>
                <td><?php echo $higinee_bucal; ?></td>
            </tr>
            <tr>
                <th scope="col">Antecedentes Personales Patologicos</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Alcoholismo</td>
                <td><?php echo $alcoholismo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tabaquismo</td>
                <td><?php echo $tabaquismo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cocaina</td>
                <td><?php echo $cocaina; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Marihuana</td>
                <td><?php echo $marihuana; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Medicamentos Controlados</td>
                <td><?php echo $med_control; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Solventes</td>
                <td><?php echo $solventes; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $at_ninguno; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Frecuencia del Alcoholismo</td>
                <td><?php echo $hz_alcohol; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Años con Tabaquismo</td>
                <td><?php echo $tiempo_tabaco; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cigarros al día</td>
                <td><?php echo $num_cigarros; ?></td>
            </tr>
            <tr>
                <th scope="col">Habitos</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Autolesiones</td>
                <td><?php echo $autolesiones; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Bruxismo</td>
                <td><?php echo $bruxismo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Interposicion Lingual</td>
                <td><?php echo $IL; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Onicofagia</td>
                <td><?php echo $onicofagia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Queilofagia</td>
                <td><?php echo $queilofagia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Respiracion Oral</td>
                <td><?php echo $RO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Succion Labial</td>
                <td><?php echo $SL; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Succion Digital</td>
                <td><?php echo $SD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $hab_ninguno; ?></td>
            </tr>
            <tr>
                <th scope="col">Virus</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">VIH</td>
                <td><?php echo $VIH; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">VPH</td>
                <td><?php echo $VPH; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">I. Epstein Barr</td>
                <td><?php echo $epste_bar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $vr_ninguno; ?></td>
            </tr>
            <tr>
                <th scope="col">Cáncer</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Colon y Recto</td>
                <td><?php echo $colon_rec; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Endometrio</td>
                <td><?php echo $endometrio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Gástrico</td>
                <td><?php echo $gastrico; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Hígado</td>
                <td><?php echo $higado; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Leucemia</td>
                <td><?php echo $leucemia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Linfoma No Hodgkin</td>
                <td><?php echo $hodgkin; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Mama</td>
                <td><?php echo $mama; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Melanoma</td>
                <td><?php echo $melanoma; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ovario</td>
                <td><?php echo $ovario; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Páncreas</td>
                <td><?php echo $pancreas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Próstata</td>
                <td><?php echo $prostata; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Pulmón</td>
                <td><?php echo $pulmon; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Riñón</td>
                <td><?php echo $rinon; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Testículo</td>
                <td><?php echo $testiculo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tiroides</td>
                <td><?php echo $tiroides; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Vejiga</td>
                <td><?php echo $vejiga; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $cancer_ninguno; ?></td>
            </tr>
            <tr>
                <th scope="col">Afecciones Orales</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Afectacion Dental</td>
                <td><?php echo $afec_dent; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lesiones Orales</td>
                <td><?php echo $les_orales; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ubicacion</td>
                <td><?php echo $ubicacion; ?></td>
            </tr>
            <tr>
                <th scope="col">Afectacion Dental</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Enfermedad Periodontal</td>
                <td><?php echo $enf_perio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Organo Dental Fracturado</td>
                <td><?php echo $org_dent_frac; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Protesis Fija Desajustada</td>
                <td><?php echo $prot_f_desa; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Protesis Fija Fracturada</td>
                <td><?php echo $prot_f_fract; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Protesis Removible Desajustada</td>
                <td><?php echo $prot_r_desa; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Protesis Removible Fracturada</td>
                <td><?php echo $prot_r_fract; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Superior Derecho</td>
                <td><?php echo $msd; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Superior Izquierdo</td>
                <td><?php echo $msi; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Inferior Derecho</td>
                <td><?php echo $mid; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Inferior Izquierdo</td>
                <td><?php echo $mii; ?></td>
            </tr>
            <tr>
                <th scope="col">Lesiones Orales</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Existe Lesion Oral</td>
                <td><?php echo $elo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo de Tejido</td>
                <td><?php echo $tipo_tejido; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Melatónica</td>
                <td><?php echo $melatonica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Nódulo</td>
                <td><?php echo $nodulo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Pigmentada</td>
                <td><?php echo $pigmentada; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tumor</td>
                <td><?php echo $tumor; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ulcera</td>
                <td><?php echo $ulcera; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Verruga</td>
                <td><?php echo $verruga; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Vesicula</td>
                <td><?php echo $vesicula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Coloración</td>
                <td><?php echo $coloracion; ?></td>
            </tr>
            <tr>
                <th scope="col">Ubicación</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Derecha</td>
                <td><?php echo $ubic_derecha; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Izquierda</td>
                <td><?php echo $ubic_Izquierda; ?></td>
            </tr>
            <tr>
                <th scope="col">Ubicación Derecha</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $derec_ninguno; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cuerpo Mandibular</td>
                <td><?php echo $derec_CM; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia Superior</td>
                <td><?php echo $derec_ES; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Labios</td>
                <td><?php echo $derec_labio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lengua</td>
                <td><?php echo $derec_lengua; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia Inferior</td>
                <td><?php echo $derec_EI; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Posterior</td>
                <td><?php echo $derec_MP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Mucosa Bucal</td>
                <td><?php echo $derec_MB; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Blando</td>
                <td><?php echo $derec_PB; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Duro</td>
                <td><?php echo $derec_PD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Piso</td>
                <td><?php echo $derec_piso; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Premaxilar</td>
                <td><?php echo $derec_premaxilar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Proceso Alveolar</td>
                <td><?php echo $derec_PA; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Rama Mandibular</td>
                <td><?php echo $derec_RM; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Trigono Retromolar</td>
                <td><?php echo $derec_TR; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Labios</td>
                <td><?php echo $derec_labios; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lengua</td>
                <td><?php echo $derec_lenguas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Blando</td>
                <td><?php echo $derec_PBL; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Duro</td>
                <td><?php echo $derec_PDR; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia superior</td>
                <td><?php echo $derec_ESP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia inferior</td>
                <td><?php echo $derec_EIF; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Está relacionado con un órgano dental</td>
                <td><?php echo $derec_EROD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Superior Derecho</td>
                <td><?php echo $derec_MSD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Inferior Derecho</td>
                <td><?php echo $derec_MID; ?></td>
            </tr>
            <tr>
                <th scope="col">Ubicación Izquierda</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $izqui_ninguno; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cuerpo Mandibular</td>
                <td><?php echo $izqui_CM; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia Superior</td>
                <td><?php echo $izqui_ES; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Labios</td>
                <td><?php echo $izqui_labio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lengua</td>
                <td><?php echo $izqui_lengua; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia Inferior</td>
                <td><?php echo $izqui_EI; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Posterior</td>
                <td><?php echo $izqui_MP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Mucosa Bucal</td>
                <td><?php echo $izqui_MB; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Blando</td>
                <td><?php echo $izqui_PB; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Duro</td>
                <td><?php echo $izqui_PD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Piso</td>
                <td><?php echo $izqui_piso; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Premaxilar</td>
                <td><?php echo $izqui_premaxilar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Proceso Alveolar</td>
                <td><?php echo $izqui_PA; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Rama Mandibular</td>
                <td><?php echo $izqui_RM; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Trigono Retromolar</td>
                <td><?php echo $izqui_TR; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Labios</td>
                <td><?php echo $izqui_labios; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lengua</td>
                <td><?php echo $izqui_lenguas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Blando</td>
                <td><?php echo $izqui_PBL; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Paladar Duro</td>
                <td><?php echo $izqui_PDR; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia superior</td>
                <td><?php echo $izqui_ESP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Encia inferior</td>
                <td><?php echo $izqui_EIF; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Está relacionado con un órgano dental</td>
                <td><?php echo $izqui_EROD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Superior Izquierdo</td>
                <td><?php echo $izqui_MSD; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilar Inferior Izquierdo</td>
                <td><?php echo $izqui_MID; ?></td>
            </tr>
            <tr>
                <th scope="col">Atencion Clinica</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha primer atención</td>
                <td><?php echo $fecha_primera_at; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Etapa clinica</td>
                <td><?php echo $etapa_clinica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tamaño Tumoral</td>
                <td><?php echo $size_tumoral; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Compromiso Linfático Nodal</td>
                <td><?php echo $compro_linfa; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Metástasis</td>
                <td><?php echo $metastatis; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Sin registro</td>
                <td><?php echo $at_sinReg; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Hepatica</td>
                <td><?php echo $at_hepatica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Pulmonar</td>
                <td><?php echo $at_pulmonar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cerebrales</td>
                <td><?php echo $at_cerebrales; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Óseas</td>
                <td><?php echo $at_oseas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cervicouterino</td>
                <td><?php echo $at_cervicouterino; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Mediastino</td>
                <td><?php echo $at_mediastino; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Suprarrenal</td>
                <td><?php echo $at_suprarrenal; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tiroidea</td>
                <td><?php echo $at_tiroidea; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ganglionar</td>
                <td><?php echo $at_ganglionar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Estadío Clinico</td>
                <td><?php echo $estado_clinico; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Calidad de vida ECOG</td>
                <td><?php echo $ECOG; ?></td>
            </tr>
            <tr>
                <th scope="col">Histopatología</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Dx Histopatologico</td>
                <td><?php echo $dx_histo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de Reporte</td>
                <td><?php echo $fecha_repo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td><?php echo $tipo_histo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maligno</td>
                <td><?php echo $maligno_histo; ?></td>
            </tr>
            <tr>
                <th scope="col">Inmunohistoquímica</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Se realizó PDL</td>
                <td><?php echo $inmuno_pdl; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">PDL</td>
                <td><?php echo $inmuno_pdl_val; ?></td>
            </tr>
            <tr>
                <th scope="col">Tratamiento</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Quimioterapia</td>
                <td><?php echo $tx_quimio; ?></td>
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
                <td class="estilo-celda">Quirúrgico</td>
                <td><?php echo $tx_quiru; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo de Cirugía</td>
                <td><?php echo $tx_quiru_tipo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Lugar DRMC</td>
                <td><?php echo $lugar_DRMC; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo DRMC</td>
                <td><?php echo $tipo_DRMC; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Nivel Cervical</td>
                <td><?php echo $nivel_cervical; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Maxilectomia de Infraestructura</td>
                <td><?php echo $tx_maxilo_infra; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Reconstrucción</td>
                <td><?php echo $tx_recontruccion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $recons_ninguno; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Colgajo Microvascular</td>
                <td><?php echo $recons_CM; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Injerto Oseo Autologo o Cadaverico</td>
                <td><?php echo $recons_IO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Material de Osteosintesis</td>
                <td><?php echo $recons_MO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Rotacion de Colgajo</td>
                <td><?php echo $recons_RC; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Toma y Aplicacion de Injerto</td>
                <td><?php echo $recons_AI; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Radioterapia</td>
                <td><?php echo $tx_radio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha</td>
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
                <td><?php echo $fracciones_dosis; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">No. Fracciones</td>
                <td><?php echo $no_fracciones; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Técnica</td>
                <td><?php echo $fracciones_tecnica; ?></td>
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
                <td class="estilo-celda">Cavidad Oral</td>
                <td><?php echo $OARS_CO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cocleas</td>
                <td><?php echo $OARS_cocleas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cristalinos</td>
                <td><?php echo $OARS_cristalinos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Esofago</td>
                <td><?php echo $OARS_esofago; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Labios</td>
                <td><?php echo $OARS_labios; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Laringe</td>
                <td><?php echo $OARS_laringe; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Mandibula</td>
                <td><?php echo $OARS_mandibula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Medula</td>
                <td><?php echo $OARS_medula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Nervio Óptico</td>
                <td><?php echo $OARS_NO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Ojos</td>
                <td><?php echo $OARS_ojos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Pared Faringea Posterior</td>
                <td><?php echo $OARS_PFP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Parotidas</td>
                <td><?php echo $OARS_parotidas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Sublinguales</td>
                <td><?php echo $OARS_sublinguales; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tallo</td>
                <td><?php echo $OARS_tallo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Tiroides</td>
                <td><?php echo $OARS_tiroides; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Cavidad Oral</td>
                <td><?php echo $Dosis_Máx_CO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Cavidad Oral</td>
                <td><?php echo $Dosis_Prom_CO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Cocleas</td>
                <td><?php echo $Dosis_Máx_Cocleas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Cocleas</td>
                <td><?php echo $Dosis_Prom_Cocleas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Cristalinos</td>
                <td><?php echo $Dosis_Máx_Cristalinos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Cristalinos</td>
                <td><?php echo $Dosis_Prom_Cristalinos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Esofago</td>
                <td><?php echo $Dosis_Máx_Esofago; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Esofago</td>
                <td><?php echo $Dosis_Prom_Esofago; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Labios</td>
                <td><?php echo $Dosis_Máx_Labios; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Labios</td>
                <td><?php echo $Dosis_Prom_Labios; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Laringe</td>
                <td><?php echo $Dosis_Máx_Laringe; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Laringe</td>
                <td><?php echo $Dosis_Prom_Laringe; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Mandibula</td>
                <td><?php echo $Dosis_Máx_Mandibula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Mandibula</td>
                <td><?php echo $Dosis_Prom_Mandibula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Medula</td>
                <td><?php echo $Dosis_Máx_Medula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Medula</td>
                <td><?php echo $Dosis_Prom_Medula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Nervio Óptico</td>
                <td><?php echo $Dosis_Máx_NO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Nervio Óptico</td>
                <td><?php echo $Dosis_Prom_NO; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Ojos</td>
                <td><?php echo $Dosis_Máx_Ojos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Ojos</td>
                <td><?php echo $Dosis_Prom_Ojos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Pared Faringea Posterior</td>
                <td><?php echo $Dosis_Máx_PFP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Pared Faringea Posterior</td>
                <td><?php echo $Dosis_Prom_PFP; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Parotidas</td>
                <td><?php echo $Dosis_Máx_Parotidas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Parotidas</td>
                <td><?php echo $Dosis_Prom_Parotidas; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Sublinguales</td>
                <td><?php echo $Dosis_Máx_Sublinguales; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Sublinguales</td>
                <td><?php echo $Dosis_Prom_Sublinguales; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Tallo</td>
                <td><?php echo $Dosis_Máx_Tallo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Tallo</td>
                <td><?php echo $Dosis_Prom_Tallo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Máx Tiroides</td>
                <td><?php echo $Dosis_Máx_Tiroides; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Prom Tiroides</td>
                <td><?php echo $Dosis_Prom_Tiroides; ?></td>
            </tr>
            <tr>
                <th scope="col">Caso Existoso</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Caso Exitoso</td>
                <td><?php echo $caso_exitoso; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Respuesta al Tratamiento</td>
                <td><?php echo $resp_tx; ?></td>
            </tr>
            <tr>
                <th scope="col">Defunción</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Defunción</td>
                <td><?php echo $defuncion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha Defunción</td>
                <td><?php echo $fecha_defuncion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Causa</td>
                <td><?php echo $causa_defuncion; ?></td>
            </tr>





        </tbody>
    </table>

</body>

</html>