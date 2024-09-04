<?php
    include ('php/controllers/edit.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar-Seguimiento</title>
</head>

<body>
    <header style="text-align: center;">
        <div style=" padding: 20px; text-align: left;">
            <a href="index.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                    <i class="bi bi-rewind-fill"></i>
                </button>
            </a>
        </div>


        <h5>Editar Registro Notificación de Eventos</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">

        <form id="editar_evento" method="POST">
            
            <div class="row">
    
    
    
                <div class="container">
                    <div class="row">
    
                        <div class="form-header">
                            <h4 class="form-title" style="text-align: left;
                    border-radius: 10px;
                    background-color: rgb(157, 7, 7);
                    color: aliceblue;
                    margin-top:15px;
                    font-size: 15px;
                    text-align: center;">Datos del Paciente</h4>
                        </div>
    
                        <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">
    
    
                        <div class="col-md-6">
                            <strong style="font-size: 12px;">Nombre del Paciente</strong>
                            <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" style="font-size: 12px;" value="<?php echo $nombre_paciente; ?>">
                        </div>
    
                        <div class="col-md-6">
                            <strong style="font-size: 12px; ">Fecha de Nacimiento</strong>
                            <input id="fecha" name="fecha" type="date" class="control form-control" style="font-size: 12px;" value="<?php echo $fecha; ?>">
                        </div>
                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Edad</strong>
                            <input id="edad" name="edad" type="text" class="control form-control" style="font-size: 12px;" value="<?php echo $edad; ?>">
                        </div>
    
                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Sexo</strong>
                            <select name="sexo" id="sexo" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione"<?php if ($sexo== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                <option value="Masculino"<?php if ($sexo== 'Masculino')echo 'selected'; ?>>Masculino</option>
                                <option value="Femenino"<?php if ($sexo== 'Femenino')echo 'selected'; ?>>Femenino</option>
                                <option value="Otro"<?php if ($sexo== 'Otro')echo 'selected'; ?>>Otro</option>
                            </select>
                        </div>
    
                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Cama</strong>
                            <input type="number" class="control form-control" id="cama" name="cama" style="font-size: 12px;" value="<?php echo $cama; ?>">
                        </div>
    
    
                        <div class="col-md-6">
                            <strong style="font-size: 12px;">Turno</strong>
                            <select name="Turno" id="Turno" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione"<?php if ($Turno== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                <option value="Jornada Especial"<?php if ($Turno== 'Jornada')echo 'selected'; ?>>Jornada Especial</option>
                                <option value="Matutino"<?php if ($Turno== 'Matutino')echo 'selected'; ?>>Matutino</option>
                                <option value="Vespertino"<?php if ($Turno== 'Vespertino')echo 'selected'; ?>>Vespertino</option>
                                <option value="Nocturno"<?php if ($Turno== 'Nocturno')echo 'selected'; ?>>Nocturno</option>
                            </select>
                        </div>
    
    
                        <div class="col-md-6">
                            <strong style="font-size: 12px;">Personal</strong>
                            <select name="Personal" id="Personal" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione"<?php if ($Personal== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                <option value="Enfermera"<?php if ($Personal== 'Enfermera')echo 'selected'; ?>>Enfermera</option>
                                <option value="Médico"<?php if ($Personal== 'Médico')echo 'selected'; ?>>Médico</option>
                                <option value="Repeción"<?php if ($Personal== 'Repeción')echo 'selected'; ?>>Repeción</option>
                                <option value="Trabajo Social"<?php if ($Personal== 'Trabajo Social')echo 'selected'; ?>>Trabajo Social</option>
                                <option value="Laboratorio"<?php if ($Personal== 'Laboratorio')echo 'selected'; ?>>Laboratorio</option>
                                <option value="Imagen"<?php if ($Personal== 'Imagen')echo 'selected'; ?>>Imagen</option>
                                <option value="Vigilancia"<?php if ($Personal== 'Vigilancia')echo 'selected'; ?>>Vigilancia</option>
                                <option value="Kiosco"<?php if ($Personal== 'Kiosco')echo 'selected'; ?>>Kiosco</option>
                                <option value="Limpieza"<?php if ($Personal== 'Limpieza')echo 'selected'; ?>>Limpieza</option>
                                <option value="Banco De Sangre"<?php if ($Personal== 'Banco De Sangre')echo 'selected'; ?>>Banco De Sangre</option>
                                <option value="Quimioterapia"<?php if ($Personal== 'Quimioterapia')echo 'selected'; ?>>Quimioterapia</option>
                                <option value="Radioterapia"<?php if ($Personal== 'Radioterapia')echo 'selected'; ?>>Radioterapia</option>
                                <option value="Farmacia"<?php if ($Personal== 'Farmacia')echo 'selected'; ?>>Farmacia</option>
                                <option value="Camillero"<?php if ($Personal== 'Camillero')echo 'selected'; ?>>Camillero</option>
                                <option value="Personal En Formación"<?php if ($Personal== 'Personal En Formación')echo 'selected'; ?>>Personal En Formación</option>
                                <option value="Atención Al Usuario"<?php if ($Personal== 'Atención Al Usuario')echo 'selected'; ?>>Atención Al Usuario</option>
                                <option value="Psicología"<?php if ($Personal== 'Psicología')echo 'selected'; ?>>Psicología</option>
                            </select>
                        </div>
    
    
                        <div class="col-md-12">
                            <strong style="font-size: 12px;">Area de Atención</strong>
                            <select name="area_atencion" id="area_atencion" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione"<?php if ($area_atencion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                <option value="Ambulatorio"<?php if ($area_atencion== 'Ambulatorio')echo 'selected'; ?>>Ambulatorio</option>
                                <option value="Hospitalizacion"<?php if ($area_atencion== 'Hospitalizacion')echo 'selected'; ?>>Hospitalización</option>
                            </select>
                        </div>
    
                        <div class="container" id="hospitalazacion_area" style="display:none;">
    
                            <div class="row">
    
                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color: rgb(203, 0, 0);
                                        color: aliceblue;
                                        margin-top:12px;
                                        font-size: 12px;
                                        text-align: center;">Servicios Hospitalización</h4>
                                </div>
    
                                <div class="col-md-6" id="atencion_hospitalizacion">
                                    <strong style="font-size: 12px;">Pisos y Servicios</strong>
                                    <select name="area_atencionHospi" id="area_atencionHospi" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($area_atencionHospi== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="P.B"<?php if ($area_atencionHospi== 'P.B')echo 'selected'; ?>>P.B</option>
                                        <option value="Primero Piso"<?php if ($area_atencionHospi== 'Primero Piso')echo 'selected'; ?>>Primero Piso</option>
                                        <option value="Segundo Piso"<?php if ($area_atencionHospi== 'Segundo Piso')echo 'selected'; ?>>Segundo Piso</option>
                                        <option value="Tercer Piso"<?php if ($area_atencionHospi== 'Tercer Piso')echo 'selected'; ?>>Tercer Piso</option>
                                        <option value="Cuarto Piso"<?php if ($area_atencionHospi== 'Cuarto Piso')echo 'selected'; ?>>Cuarto Piso</option>
                                    </select>
                                </div>
    
    
                                <div class="col-md-6" id="PB" style="display:none;">
                                    <strong style="font-size: 12px;">P.B P </strong>
                                    <select name="pb_urgencias" id="pb_urgencias" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($pb_urgencias== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Urgencias"<?php if ($pb_urgencias== 'Urgencias')echo 'selected'; ?>>Urgencias</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="primerpiso" style="display:none;">
                                    <strong style="font-size: 12px;">Primer Piso</strong>
                                    <select name="planta_primerpiso" id="planta_primerpiso" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($planta_primerpiso== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Hematología"<?php if ($planta_primerpiso== 'Hematología')echo 'selected'; ?>>Hematología</option>
                                        <option value="Ginecología"<?php if ($planta_primerpiso== 'Ginecología')echo 'selected'; ?>>Ginecología</option>
                                        <option value="Hosp.Pediatría"<?php if ($planta_primerpiso== 'Hosp.Pediatría')echo 'selected'; ?>>Hosp.Pediatría</option>
                                        <option value="UTIP"<?php if ($planta_primerpiso== 'UTIP')echo 'selected'; ?>>UTIP</option>
                                        <option value="UCIP"<?php if ($planta_primerpiso== 'UCIP')echo 'selected'; ?>>UCIP</option>
                                        <option value="UCIN"<?php if ($planta_primerpiso== 'UCIN')echo 'selected'; ?>>UCIN</option>
                                        <option value="UTIN"<?php if ($planta_primerpiso== 'UTIN')echo 'selected'; ?>>UTIN</option>
                                        <option value="Tococirugía"<?php if ($planta_primerpiso== 'Tococirugía')echo 'selected'; ?>>Tococirugía</option>
                                        <option value="Lactario"<?php if ($planta_primerpiso== 'Lactario')echo 'selected'; ?>>Lactario</option>
                                        <option value="Unidad de T."<?php if ($planta_primerpiso== 'Unidad de T.')echo 'selected'; ?>>Unidad de T.</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="segundopiso" style="display:none;">
                                    <strong style="font-size: 12px">Segundo Piso</strong>
                                    <select name="planta_segundopiso" id="planta_segundopiso" class="form-select" style="font-size: 12px">
                                        <option value="Seleccione"<?php if ($planta_segundopiso== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Cirugía General"<?php if ($planta_segundopiso== 'Cirugía General')echo 'selected'; ?>>Cirugía General</option>
                                        <option value="Cirugía Oncólogica"<?php if ($planta_segundopiso== 'Cirugía Oncólogica')echo 'selected'; ?>>Cirugía Oncólogica</option>
                                        <option value="CEYE"<?php if ($planta_segundopiso== 'CEYE')echo 'selected'; ?>>CEYE</option>
                                        <option value="UTIA"<?php if ($planta_segundopiso== 'UTIA')echo 'selected'; ?>>UTIA</option>
                                        <option value="UCIA"<?php if ($planta_segundopiso== 'UCIA')echo 'selected'; ?>>UCIA</option>
                                        <option value="Quirófano"<?php if ($planta_segundopiso== 'Quirófano')echo 'selected'; ?>>Quirófano</option>
                                        <option value="Hemodinamia"<?php if ($planta_segundopiso== 'Hemodinamia')echo 'selected'; ?>>Hemodinamia</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="tercerpiso" style="display:none;">
                                    <strong style="font-size: 12px;">Tercer Piso</strong>
                                    <select name="planta_tercerpiso" id="planta_tercerpiso" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($planta_tercerpiso== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Neurocirugía"<?php if ($planta_tercerpiso== 'Neurocirugía')echo 'selected'; ?>>Neurocirugía</option>
                                        <option value="Trauma-Ortopedia"<?php if ($planta_tercerpiso== 'Trauma-Ortopedia')echo 'selected'; ?>>Trauma-Ortopedia</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="cuartopiso" style="display:none;">
                                    <strong style="font-size: 12px;">Cuarto Piso</strong>
                                    <select name="planta_cuartopiso" id="planta_cuartopiso" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($planta_cuartopiso== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Medicina Interna"<?php if ($planta_cuartopiso== 'Medicina Interna')echo 'selected'; ?>>Medicina Interna</option>
                                    </select>
                                </div>
    
                            </div>
    
                        </div>
    
                        <!-- SERVICIOS AMBULATORIOS -->
    
                        <div class="container" id="area_ambulatorio" style="display:none;">
                            <div class="row">
    
                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color:  rgb(203, 0, 0);
                                        color: aliceblue;
                                        margin-top:12px;
                                        font-size: 12px;
                                        text-align: center;">Servicios Ambulatorios</h4>
                                </div>
    
    
                                <div class="col-md-6" id="atencion_ambulatorias">
                                    <strong style="font-size: 12px;">Pisos y Servicios</strong>
                                    <select name="area_ambu" id="area_ambu" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($area_ambu== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="P.B"<?php if ($area_ambu== 'P.B')echo 'selected'; ?>>P.B</option>
                                        <option value="Piso 1"<?php if ($area_ambu== 'Piso 1')echo 'selected'; ?>>Piso 1</option>
                                        <option value="Piso 2"<?php if ($area_ambu== 'Piso 2')echo 'selected'; ?>>Piso 2</option>
                                        <option value="Piso 3"<?php if ($area_ambu== 'Piso 3')echo 'selected'; ?>>Piso 3</option>
                                        <option value="Unidad de Apoyo de PB"<?php if ($area_ambu== 'Unidad de Apoyo de PB')echo 'selected'; ?>>Unidad de Apoyo de PB</option>
                                        <option value="Unidad de Apoyo Piso 1"<?php if ($area_ambu== 'Unidad de Apoyo Piso 1')echo 'selected'; ?>>Unidad de Apoyo Piso 1</option>
                                        <option value="Enseñanza Piso 1"<?php if ($area_ambu== 'Enseñanza Piso 1')echo 'selected'; ?>>Enseñanza Piso 1</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_PB" style="display:none;">
                                    <strong style="font-size: 12px;">P.B</strong>
                                    <select name="ambu_pb" id="ambu_pb" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_pb== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Imagenología"<?php if ($ambu_pb== 'Imagenología')echo 'selected'; ?>>Imagenología</option>
                                        <option value="Banco de Sangre"<?php if ($ambu_pb== 'Banco de Sangre')echo 'selected'; ?>>Banco de Sangre</option>
                                        <option value="Medicina Nuclear"<?php if ($ambu_pb== 'Medicina Nuclear')echo 'selected'; ?>>Medicina Nuclear</option>
                                        <option value="Laboratorio"<?php if ($ambu_pb== 'Laboratorio')echo 'selected'; ?>>Laboratorio</option>
                                        <option value="Salud Mental"<?php if ($ambu_pb== 'Salud Mental')echo 'selected'; ?>>Salud Mental</option>
                                        <option value="CISFA"<?php if ($ambu_pb== 'CISFA')echo 'selected'; ?>>CISFA</option>
                                        <option value="Farmacia Ambulatoria"<?php if ($ambu_pb== 'Farmacia Ambulatoria')echo 'selected'; ?>>Farmacia Ambulatoria</option>
                                        <option value="INAI"<?php if ($ambu_pb== 'INAI')echo 'selected'; ?>>INAI</option>
                                        <option value="Anatomía Patológica"<?php if ($ambu_pb== 'Anatomía Patológica')echo 'selected'; ?>>Anatomía Patológica</option>
                                        <option value="Recepción"<?php if ($ambu_pb== 'Recepción')echo 'selected'; ?>>Recepción</option>
                                        <option value="Comedor"<?php if ($ambu_pb== 'Comedor')echo 'selected'; ?>>Comedor</option>
                                        <option value="Estacionamiento"<?php if ($ambu_pb== 'Estacionamiento')echo 'selected'; ?>>Estacionamiento</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_unidadapoyo" style="display:none;">
                                    <strong style="font-size: 12px;">Unidad de Apoyo PB</strong>
                                    <select name="ambu_unidadapoyo" id="ambu_unidadapoyo" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_unidadapoyo== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Oncología"<?php if ($ambu_unidadapoyo== 'Oncología')echo 'selected'; ?>>Oncología</option>
                                        <option value="Quimioterapia"<?php if ($ambu_unidadapoyo== 'Quimioterapia')echo 'selected'; ?>>Quimioterapia</option>
                                        <option value="Radioterapia"<?php if ($ambu_unidadapoyo== 'Radioterapia')echo 'selected'; ?>>Radioterapia</option>
                                        <option value="Braquiterapia"<?php if ($ambu_unidadapoyo== 'Braquiterapia')echo 'selected'; ?>>Braquiterapia</option>
                                        <option value="Rehabilitación"<?php if ($ambu_unidadapoyo== 'Rehabilitación')echo 'selected'; ?>>Rehabilitación</option>
                                        <option value="Maxilofacial"<?php if ($ambu_unidadapoyo== 'Maxilofacial')echo 'selected'; ?>>Maxilofacial</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_piso1" style="display:none;">
                                    <strong style="font-size : 12px;">Piso 1</strong>
                                    <select name="ambu_piso1" id="ambu_piso1" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_piso1== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Clínica de Heridas"<?php if ($ambu_piso1== 'Clínica de Heridas')echo 'selected'; ?>>Clínica de Heridas</option>
                                        <option value="Clínica de Cateteres"<?php if ($ambu_piso1== 'Clínica de Cateteres')echo 'selected'; ?>>Clínica de Cateteres</option>
                                        <option value="Clínica de la Mujer"<?php if ($ambu_piso1== 'Clínica de la Mujer')echo 'selected'; ?>>Clínica de la Mujer</option>
                                        <option value="Signos Vitales"<?php if ($ambu_piso1== 'Signos Vitales')echo 'selected'; ?>>Signos Vitales</option>
                                        <option value="Consulta Externa"<?php if ($ambu_piso1== 'Consulta Externa')echo 'selected'; ?>>Consulta Externa</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_unidadapoyopiso1" style="display:none;">
                                    <strong style="font-size: 12px;">Unidad de Apoyo Piso 1</strong>
                                    <select name="ambu_unidadapoyo1" id="ambu_unidadapoyo1" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_unidadapoyo1== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Endoscopía"<?php if ($ambu_unidadapoyo1== 'Endoscopía')echo 'selected'; ?>>Endoscopía</option>
                                        <option value="Electrodiágnostico"<?php if ($ambu_unidadapoyo1== 'Electrodiágnostico')echo 'selected'; ?>>Electrodiágnostico</option>
                                        <option value="Hemodiálisis"<?php if ($ambu_unidadapoyo1== 'Hemodiálisis')echo 'selected'; ?>>Hemodiálisis</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_piso2" style="display:none;">
                                    <strong style="font-size: 12px;">Piso 2</strong>
                                    <select name="ambu_piso2" id="ambu_piso2" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_piso2== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Cardiología"<?php if ($ambu_piso2== 'Cardiología')echo 'selected'; ?>>Cardiología</option>
                                        <option value="Electrodiágnostico"<?php if ($ambu_piso2== 'Electrodiágnostico')echo 'selected'; ?>>Electrodiágnostico</option>
                                        <option value="Clínica del Dolor"<?php if ($ambu_piso2== 'Clínica del Dolor')echo 'selected'; ?>>Clínica del Dolor</option>
                                        <option value="Audiología"<?php if ($ambu_piso2== 'Audiología')echo 'selected'; ?>>Audiología</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_piso3" style="display:none;">
                                    <strong style="font-size: 12px;">Piso 3</strong>
                                    <select name="ambu_piso3" id="ambu_piso3" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_piso3== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Inhaloterapia"<?php if ($ambu_piso3== 'Inhaloterapia')echo 'selected'; ?>>Inhaloterapia</option>
                                        <option value="Area Administrativa"<?php if ($ambu_piso3== 'Area Administrativa')echo 'selected'; ?>>Area Administrativa</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" id="ambulatoria_enseñanzapiso1" style="display:none;">
                                    <strong style="font-size: 12px;">Enseñanza Piso 1</strong>
                                    <select name="ambu_enseñanza1" id="ambu_enseñanza1" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($ambu_enseñanza1== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Laboratorio Molecular"<?php if ($ambu_enseñanza1== 'Laboratorio Molecular')echo 'selected'; ?>>Laboratorio Molecular</option>
                                    </select>
                                </div>
    
                            </div>
                        </div>
    
                        <div class="form-header">
                            <h4 class="form-title" style="text-align: left;
                    border-radius: 10px;
                    background-color: rgb(157, 7, 7);
                    color: aliceblue;
                    margin-top:15px;
                    font-size: 15px;
                    text-align: center;">Notificación</h4>
                        </div>
    
                        <fieldset>
                            <legend>
                                <div class="container">
    
                                    <div class="row">
    
    
                                        <div class="col-md-6">
                                            <strong style="font-size: 12px;">Fecha de Notificación</strong>
                                            <input id="fecha_notificacion" name="fecha_notificacion" type="date" class="control form-control" style="font-size: 12px;" value="<?php echo $fecha_notificacion; ?>">
                                        </div>
    
                                        <div class="col-md-6">
                                            <strong style="font-size: 12px;">Fecha de Incidente</strong>
                                            <input id="fecha_incidente" name="fecha_incidente" type="date" class="control form-control" style="font-size: 12px;" value="<?php echo $fecha_incidente; ?>">
                                        </div>
    
    
                                        <div class="col-md-4">
                                            <!-- Div para el espacio entre campos. -->
                                        </div>
                                        

                                        <div class="col-md-12">
                                            <label for="descripcion" style="font-size: 12px; font-weight: bold;">Descripción del evento</label>
                                            <textarea name="descripcion" id="descripcion" class="form-control" style="font-size: 12px;"><?php echo $descripcion; ?></textarea>
                                        </div>
    
    
                                        <div class="col-md-12">
                                            <strong style="font-size: 12px;">Tipo del Evento</strong>
                                            <select name="Tipo_evento" id="Tipo_evento" class="form-select" style="font-size: 12px;">
                                                <option value="Seleccione"<?php if ($Tipo_evento== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                <option value="Cuasifalla"<?php if ($Tipo_evento== 'Cuasifalla')echo 'selected'; ?>>Cuasifalla</option>
                                                <option value="Evento Adverso"<?php if ($Tipo_evento== 'Evento Adverso')echo 'selected'; ?>>Evento Adverso</option>
                                                <option value="Centinela"<?php if ($Tipo_evento== 'Centinela')echo 'selected'; ?>>Centinela</option>
                                                <option value="Riesgo de Infección"<?php if ($Tipo_evento== 'Riesgo de Infección')echo 'selected'; ?>>Riesgo de Infección</option>
                                                <option value="Incidente"<?php if ($Tipo_evento== 'Incidente')echo 'selected'; ?>>Incidente</option>
                                            </select>
                                        </div>
    
    
                                        <div class="col-md-6" id="tip_adverso" style="display:none;">
                                            <strong style="font-size: 12px;">Evento Adverso</strong>
                                            <select name="evento_tipoadv" id="evento_tipoadv" class="form-select" style="font-size: 12px;">
                                                <option value="Seleccione"<?php if ($evento_tipoadv== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                <option value="Sin daño"<?php if ($evento_tipoadv== 'Sin daño')echo 'selected'; ?>>Sin daño</option>
                                                <option value="Leve"<?php if ($evento_tipoadv== 'Leve')echo 'selected'; ?>>Leve</option>
                                                <option value="Moderado"<?php if ($evento_tipoadv== 'Moderado')echo 'selected'; ?>>Moderado</option>
                                                <option value="Grave"<?php if ($evento_tipoadv== 'Grave')echo 'selected'; ?>>Grave</option>
                                            </select>
                                        </div>
    
                                        <div class="col-md-6" id="tip_centinela" style="display:none;">
                                            <strong style="font-size: 12px;">Evento Centinela</strong>
                                            <select name="evento_tipocenti" id="evento_tipocenti" class="form-select" style="font-size: 12px;">
                                                <option value="Seleccione"<?php if ($evento_tipocenti== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                <option value="Sin daño"<?php if ($evento_tipocenti== 'Sin daño')echo 'selected'; ?>>Sin daño</option>
                                                <option value="Leve"<?php if ($evento_tipocenti== 'Leve')echo 'selected'; ?>>Leve</option>
                                                <option value="Moderado"<?php if ($evento_tipocenti== 'Moderado')echo 'selected'; ?>>Moderado</option>
                                                <option value="Grave"<?php if ($evento_tipocenti== 'Grave')echo 'selected'; ?>>Grave</option>
                                            </select>
                                        </div>
    
                                        <div class="col-md-6" id="info_familiar" style="display:none;">
                                            <strong style="font-size: 12px;">Se le brindo información al familiar</strong>
                                            <select name="infopx" id="infopx" class="form-select" style="font-size: 12px;">
                                                <option value="Seleccione"<?php if ($infopx== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                <option value="Si"<?php if ($infopx== 'Si')echo 'selected'; ?>>Si</option>
                                                <option value="No"<?php if ($infopx== 'No')echo 'selected'; ?>>No</option>
                                            </select>
                                        </div>
    
    
                                    </div>
    
                                </div>
                            </legend>
                        </fieldset>
    
    
                        <!-- SEGUIMIENTO -->
    
    
                        <!-- SEGUIMIENTO -->
    
    
                        <div class="form-header">
                            <h4 class="form-title" style="text-align: left;
                                border-radius: 10px;
                                background-color: rgb(157, 7, 7);
                                color: aliceblue;
                                margin-top:15px;
                                font-size: 15px;
                                text-align: center;">Seguimiento</h4>
                        </div>
    
                        <fieldset>
                            <legend>
                                <div class="Container">
                                    <div class="row">
                                        <div class="container">
    
    
                                            <fieldset>
                                                <legend>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="form-header">
                                                                <h4 class="form-title" style="text-align: left;
                                                                border-radius: 10px;
                                                                background-color: rgb(203, 0, 0);
                                                                color: aliceblue;
                                                                margin-top:15px;
                                                                font-size: 13px;
                                                                text-align: center;">Clasificación Internacional De Seguridad Del Paciente (CISP)</h4>
                                                            </div>
    
    
                                                            <div class="col-md-12">
                                                                <strong style="font-size: 12px;">Tipo de incidente</strong>
                                                                <select name="tipo_incidente" id="tipo_incidente" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($tipo_incidente== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Administración clínica"<?php if ($tipo_incidente== 'Administración clínica')echo 'selected'; ?>>Administración clínica</option>
                                                                    <option value="Proceso/procedimiento clínico"<?php if ($tipo_incidente== 'Proceso/procedimiento clínico')echo 'selected'; ?>>Proceso/procedimiento clínico</option>
                                                                    <option value="Documentación"<?php if ($tipo_incidente== 'Documentación')echo 'selected'; ?>>Documentación</option>
                                                                    <option value="Infección asociada a la atención sanitaria"<?php if ($tipo_incidente== 'Infección asociada a la atención sanitaria')echo 'selected'; ?>>Infección asociada a la atención sanitaria</option>
                                                                    <option value="Sangre/productos sanguíneos"<?php if ($tipo_incidente== 'Sangre/productos sanguíneos')echo 'selected'; ?>>Sangre/productos sanguíneos</option>
                                                                    <option value="Nutrición"<?php if ($tipo_incidente== 'Nutrición')echo 'selected'; ?>>Nutrición</option>
                                                                    <option value="Oxígeno/gases/vapores"<?php if ($tipo_incidente== 'Oxígeno/gases/vapores')echo 'selected'; ?>>Oxígeno/gases/vapores</option>
                                                                    <option value="Comportamiento"<?php if ($tipo_incidente== 'Comportamiento')echo 'selected'; ?>>Comportamiento</option>
                                                                    <option value="Accidentes de los pacientes"<?php if ($tipo_incidente== 'Accidentes de los pacientes')echo 'selected'; ?>>Accidentes de los pacientes</option>
                                                                    <option value="Recursos/Gestión de la organización"<?php if ($tipo_incidente== 'Recursos/Gestión de la organización')echo 'selected'; ?>>Recursos/Gestión de la organización</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <div class="container" id="admi_Clinica" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Proceso AC</strong>
                                                                <select name="Proceso_AC" id="Proceso_AC" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Proceso_AC== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Relevo de equipo asistencial"<?php if ($Proceso_AC== 'Relevo de equipo asistencial')echo 'selected'; ?>>Relevo de equipo asistencial</option>
                                                                    <option value="Cita"<?php if ($Proceso_AC== 'Cita')echo 'selected'; ?>>Cita</option>
                                                                    <option value="Lista de espera"<?php if ($Proceso_AC== 'Lista de espera')echo 'selected'; ?>>Lista de espera</option>
                                                                    <option value="Derivación/interconsulta"<?php if ($Proceso_AC== 'Derivación/interconsulta')echo 'selected'; ?>>Derivación/interconsulta</option>
                                                                    <option value="Ingreso"<?php if ($Proceso_AC== 'Ingreso')echo 'selected'; ?>>Ingreso</option>
                                                                    <option value="Alta"<?php if ($Proceso_AC== 'Alta')echo 'selected'; ?>>Alta</option>
                                                                    <option value="Traspaso asistencial"<?php if ($Proceso_AC== 'Traspaso asistencial')echo 'selected'; ?>>Traspaso asistencial</option>
                                                                    <option value="Respuesta a una urgencia"<?php if ($Proceso_AC== 'Respuesta a una urgencia')echo 'selected'; ?>>Respuesta a una urgencia</option>
                                                                    <option value="Asignación de tareas"<?php if ($Proceso_AC== 'Asignación de tareas')echo 'selected'; ?>>Asignación de tareas</option>
                                                                    <option value="Consentimiento"<?php if ($Proceso_AC== 'Consentimiento')echo 'selected'; ?>>Consentimiento</option>
                                                                    <option value="Identificación del paciente"<?php if ($Proceso_AC== 'Identificación del paciente')echo 'selected'; ?>>Identificación del paciente</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Problema Incidente AC</strong>
                                                                <select name="Problema_ac" id="Problema_ac" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Problema_ac== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="No se hizo cuando estaba indicado"<?php if ($Problema_ac== 'No se hizo cuando estaba indicado')echo 'selected'; ?>>No se hizo cuando estaba indicado</option>
                                                                    <option value="Incompleto/inadecuado"<?php if ($Problema_ac== 'Incompleto/inadecuado')echo 'selected'; ?>>Incompleto/inadecuado</option>
                                                                    <option value="No disponible"<?php if ($Problema_ac== 'No disponible')echo 'selected'; ?>>No disponible</option>
                                                                    <option value="Paciente erróneo"<?php if ($Problema_ac== 'Paciente erróneo')echo 'selected'; ?>>Paciente erróneo</option>
                                                                    <option value="Proceso/servicio erróneo"<?php if ($Problema_ac== 'Proceso/servicio erróneo')echo 'selected'; ?>>Proceso/servicio erróneo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- PROCESO/PROCEDIMIENTO -->
                                                    <div class="container" id="Proceso_procedimiento" style="display:none;">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Proceso (PC)</strong>
                                                                <select name="Proceso_PC" id="Proceso_PC" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Proceso_PC== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Cribado/prevención/reconocimiento"<?php if ($Proceso_PC== 'Cribado/prevención/reconocimiento')echo 'selected'; ?>>Cribado/prevención/reconocimiento</option>
                                                                    <option value="Sistemático"<?php if ($Proceso_PC== 'Sistemático')echo 'selected'; ?>>Sistemático</option>
                                                                    <option value="Diagnóstico/evaluación"<?php if ($Proceso_PC== 'Diagnóstico/evaluación')echo 'selected'; ?>>Diagnóstico/evaluación</option>
                                                                    <option value="Procedimiento/tratamiento/intervención"<?php if ($Proceso_PC== 'Procedimiento/tratamiento/intervención')echo 'selected'; ?>>Procedimiento/tratamiento/intervención</option>
                                                                    <option value="Atención/tratamiento general"<?php if ($Proceso_PC== 'Atención/tratamiento general')echo 'selected'; ?>>Atención/tratamiento general</option>
                                                                    <option value="Análisis/pruebas"<?php if ($Proceso_PC== 'Análisis/pruebas')echo 'selected'; ?>>Análisis/pruebas</option>
                                                                    <option value="Muestras/resultados"<?php if ($Proceso_PC== 'Muestras/resultados')echo 'selected'; ?>>Muestras/resultados</option>
                                                                    <option value="Confinamiento/restricción física"<?php if ($Proceso_PC== 'Confinamiento/restricción física')echo 'selected'; ?>>Confinamiento/restricción física</option>
    
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Problema PC</strong>
                                                                <select name="Problema_PC" id="Problema_PC" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Problema_PC== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="No se hizo cuando estaba indicado"<?php if ($Problema_PC== 'No se hizo cuando estaba indicado')echo 'selected'; ?>>No se hizo cuando estaba indicado</option>
                                                                    <option value="Incompleto/inadecuado"<?php if ($Problema_PC== 'Incompleto/inadecuado')echo 'selected'; ?>>Incompleto/inadecuado</option>
                                                                    <option value="No disponible"<?php if ($Problema_PC== 'No disponible')echo 'selected'; ?>>No disponible</option>
                                                                    <option value="Paciente erróneo"<?php if ($Problema_PC== 'Paciente erróneo')echo 'selected'; ?>>Paciente erróneo</option>
                                                                    <option value="Proceso/tratamiento/procedimiento erróneo"<?php if ($Problema_PC== 'Proceso/tratamiento/procedimiento erróneo')echo 'selected'; ?>>Proceso/tratamiento/procedimiento erróneo</option>
                                                                    <option value="Parte/lado/lugar del cuerpo erróneo"<?php if ($Problema_PC== 'Parte/lado/lugar del cuerpo erróneo')echo 'selected'; ?>>Parte/lado/lugar del cuerpo erróneo</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <!-- Documentación -->
    
                                                    <div class="container" id="Documentacion" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Tipo Documentación</strong>
                                                                <select name="tipo_Documentacion" id="tipo_Documentacion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($tipo_Documentacion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Pedidos/solicitudes"<?php if ($tipo_Documentacion== 'Pedidos/solicitudes')echo 'selected'; ?>>Pedidos/solicitudes</option>
                                                                    <option value="Hojas de evolución/historias clínicas/evaluaciones/interconsultas"<?php if ($tipo_Documentacion== 'Hojas de evolución/historias clínicas/evaluaciones/interconsultas')echo 'selected'; ?>>Hojas de evolución/historias clínicas/evaluaciones/interconsultas</option>
                                                                    <option value="Listas de comprobación"<?php if ($tipo_Documentacion== 'Listas de comprobación')echo 'selected'; ?>>Listas de comprobación</option>
                                                                    <option value="Formularios/certificados"<?php if ($tipo_Documentacion== 'Formularios/certificados')echo 'selected'; ?>>Formularios/certificados</option>
                                                                    <option value="Instrucciones/información/políticas/procedimientos/directrices"<?php if ($tipo_Documentacion== 'Instrucciones/información/políticas/procedimientos/directrices')echo 'selected'; ?>>Instrucciones/información/políticas/procedimientos/directrices</option>
                                                                    <option value="Etiquetas/adhesivos/pulseras de identificación/tarjetas"<?php if ($tipo_Documentacion== 'Etiquetas/adhesivos/pulseras de identificación/tarjetas')echo 'selected'; ?>>Etiquetas/adhesivos/pulseras de identificación/tarjetas</option>
                                                                    <option value="Cartas/correos electrónicos/registros de comunicación"<?php if ($tipo_Documentacion== 'Cartas/correos electrónicos/registros de comunicación')echo 'selected'; ?>>Cartas/correos electrónicos/registros de comunicación</option>
                                                                    <option value="Informes/resultados/imágenes"<?php if ($tipo_Documentacion== 'Informes/resultados/imágenes')echo 'selected'; ?>>Informes/resultados/imágenes</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Problema Documentación</strong>
                                                                <select name="Problema_Documentacion" id="Problema_Documentacion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Problema_Documentacion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Documento ausente o no disponible"<?php if ($Problema_Documentacion== 'Documento ausente o no disponible')echo 'selected'; ?>>Documento ausente o no disponible</option>
                                                                    <option value="Demora en el acceso al documento"<?php if ($Problema_Documentacion== 'Demora en el acceso al documento')echo 'selected'; ?>>Demora en el acceso al documento</option>
                                                                    <option value="Documento para un paciente erróneo o documento erróneo"<?php if ($Problema_Documentacion== 'Documento para un paciente erróneo o documento erróneo')echo 'selected'; ?>>Documento para un paciente erróneo o documento erróneo</option>
                                                                    <option value="Documentación"<?php if ($Problema_Documentacion== 'Documentación')echo 'selected'; ?>>Documentación</option>
                                                                    <option value="Información del documento poco Clara/Ambigua/Ilegible/Incompleta"<?php if ($Problema_Documentacion== 'Información del documento poco Clara/Ambigua/Ilegible/Incompleta')echo 'selected'; ?>>Información del documento poco Clara/Ambigua/Ilegible/Incompleta</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <!-- INFECCION ASOCIADA A LA ATENCION  -->
                                                    <div class="container" id="Documentacion_InfeccionSanitaria" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Tipo Organismo IAAS</strong>
                                                                <select name="tipo_OrganismoIAAS" id="tipo_OrganismoIAAS" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($tipo_OrganismoIAAS== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Bacteria"<?php if ($tipo_OrganismoIAAS== 'Bacteria')echo 'selected'; ?>>Bacteria</option>
                                                                    <option value="Virus"<?php if ($tipo_OrganismoIAAS== 'Virus')echo 'selected'; ?>>Virus</option>
                                                                    <option value="Hongo"<?php if ($tipo_OrganismoIAAS== 'Hongo')echo 'selected'; ?>>Hongo</option>
                                                                    <option value="Parásito"<?php if ($tipo_OrganismoIAAS== 'Parásito')echo 'selected'; ?>>Parásito</option>
                                                                    <option value="Protozoo"<?php if ($tipo_OrganismoIAAS== 'Protozoo')echo 'selected'; ?>>Protozoo</option>
                                                                    <option value="Rickettsia"<?php if ($tipo_OrganismoIAAS== 'Rickettsia')echo 'selected'; ?>>Rickettsia</option>
                                                                    <option value="Prion"<?php if ($tipo_OrganismoIAAS== 'Prion')echo 'selected'; ?>>Prion</option>
                                                                    <option value="Microorganismo causal no identificado"<?php if ($tipo_OrganismoIAAS== 'Microorganismo causal no identificado')echo 'selected'; ?>>Microorganismo causal no identificado</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Lugar de la Infección</strong>
                                                                <select name="Lugar_infeccion" id="Lugar_infeccion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Lugar_infeccion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Torrente sanguíneo"<?php if ($Lugar_infeccion== 'Torrente sanguíneo')echo 'selected'; ?>>Torrente sanguíneo</option>
                                                                    <option value="Sitio quirúrgico"<?php if ($Lugar_infeccion== 'Sitio quirúrgico')echo 'selected'; ?>>Sitio quirúrgico</option>
                                                                    <option value="Absceso"<?php if ($Lugar_infeccion== 'Absceso')echo 'selected'; ?>>Absceso</option>
                                                                    <option value="Neumonía"<?php if ($Lugar_infeccion== 'Neumonía')echo 'selected'; ?>>Neumonía</option>
                                                                    <option value="Cánulas intravasculares"<?php if ($Lugar_infeccion== 'Cánulas intravasculares')echo 'selected'; ?>>Cánulas intravasculares</option>
                                                                    <option value="Prótesis/sitio infectado"<?php if ($Lugar_infeccion== 'Prótesis/sitio infectado')echo 'selected'; ?>>Prótesis/sitio infectado</option>
                                                                    <option value="Sonda/drenaje urinario"<?php if ($Lugar_infeccion== 'Sonda/drenaje urinario')echo 'selected'; ?>>Sonda/drenaje urinario</option>
                                                                    <option value="Tejidos blandos"<?php if ($Lugar_infeccion== 'Tejidos blandos')echo 'selected'; ?>>Tejidos blandos</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <!-- Sangre/productos sanguíneos -->
    
                                                    <div class="container" id="Sangre_productos" style="display:none;">
                                                        <div class="row">
    
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Sangre/Producto en Cuestión</strong>
                                                                <select name="cuestion_sangre" id="cuestion_sangre" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($cuestion_sangre== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Productos celulares"<?php if ($cuestion_sangre== 'Productos celulares')echo 'selected'; ?>>Productos celulares</option>
                                                                    <option value="Factores de la coagulación"<?php if ($cuestion_sangre== 'Factores de la coagulación')echo 'selected'; ?>>Factores de la coagulación</option>
                                                                    <option value="Albúmina/proteínas plasmáticas"<?php if ($cuestion_sangre== 'Albúmina/proteínas plasmáticas')echo 'selected'; ?>>Albúmina/proteínas plasmáticas</option>
                                                                    <option value="Inmunoglobulinas"<?php if ($cuestion_sangre== 'Inmunoglobulinas')echo 'selected'; ?>>Inmunoglobulinas</option>
    
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Proceso Uso Sangre/Producto En Cuestión</strong>
                                                                <select name="Proceso_sangre" id="Proceso_sangre" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Proceso_sangre== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Pruebas pretransfusionales"<?php if ($Proceso_sangre== 'Pruebas pretransfusionales')echo 'selected'; ?>>Pruebas pretransfusionales</option>
                                                                    <option value="Prescripción"<?php if ($Proceso_sangre== 'Prescripción')echo 'selected'; ?>>Prescripción</option>
                                                                    <option value="Preparación/dispensación"<?php if ($Proceso_sangre== 'Preparación/dispensación')echo 'selected'; ?>>Preparación/dispensación</option>
                                                                    <option value="Distribución"<?php if ($Proceso_sangre== 'Distribución')echo 'selected'; ?>>Distribución</option>
                                                                    <option value="Administración"<?php if ($Proceso_sangre== 'Administración')echo 'selected'; ?>>Administración</option>
                                                                    <option value="Conservación"<?php if ($Proceso_sangre== 'Conservación')echo 'selected'; ?>>Conservación</option>
                                                                    <option value="Supervisión"<?php if ($Proceso_sangre== 'Supervisión')echo 'selected'; ?>>Supervisión</option>
                                                                    <option value="Presentación/Envasado"<?php if ($Proceso_sangre== 'Presentación/Envasado')echo 'selected'; ?>>Presentación/Envasado</option>
                                                                    <option value="Suministro/Pedido"<?php if ($Proceso_sangre== 'Suministro/Pedido')echo 'selected'; ?>>Suministro/Pedido</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Problema Sangre/Producto En Cuestión</strong>
                                                                <select name="Problema_sangre" id="Problema_sangre" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Problema_sangre== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Paciente erróneo"<?php if ($Problema_sangre== 'Paciente erróneo')echo 'selected'; ?>>Paciente erróneo</option>
                                                                    <option value="Sangre/producto sanguíneo erróneo"<?php if ($Problema_sangre== 'Sangre/producto sanguíneo erróneo')echo 'selected'; ?>>Sangre/producto sanguíneo erróneo</option>
                                                                    <option value="Dosis o frecuencia errónea"<?php if ($Problema_sangre== 'Dosis o frecuencia errónea')echo 'selected'; ?>>Dosis o frecuencia errónea</option>
                                                                    <option value="Cantidad errónea"<?php if ($Problema_sangre== 'Cantidad errónea')echo 'selected'; ?>>Cantidad errónea</option>
                                                                    <option value="Información/instrucciones de dispensación errónea"<?php if ($Problema_sangre== 'Información/instrucciones de dispensación errónea')echo 'selected'; ?>>Información/instrucciones de dispensación errónea</option>
                                                                    <option value="Contraindicación"<?php if ($Problema_sangre== 'Contraindicación')echo 'selected'; ?>>Contraindicación</option>
                                                                    <option value="Condiciones de conservación inadecuadas"<?php if ($Problema_sangre== 'Condiciones de conservación inadecuadas')echo 'selected'; ?>>Condiciones de conservación inadecuadas</option>
                                                                    <option value="Omisión de medicamento o dosis"<?php if ($Problema_sangre== 'Omisión de medicamento o dosis')echo 'selected'; ?>>Omisión de medicamento o dosis</option>
                                                                    <option value="Sangre/producto sanguíneo caducado"<?php if ($Problema_sangre== 'Sangre/producto sanguíneo caducado')echo 'selected'; ?>>Sangre/producto sanguíneo caducado</option>
                                                                    <option value="Efecto adverso"<?php if ($Problema_sangre== 'Efecto adverso')echo 'selected'; ?>>Efecto adverso</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <!-- Nutricion -->
    
                                                    <div class="container" id="Nutricion" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Nutrición en Cuestión</strong>
                                                                <select name="Nutri_cuestion" id="Nutri_cuestion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Nutri_cuestion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Dieta general"<?php if ($Nutri_cuestion== 'Dieta general')echo 'selected'; ?>>Dieta general</option>
                                                                    <option value="Dieta especial"<?php if ($Nutri_cuestion== 'Dieta especial')echo 'selected'; ?>>Dieta especial</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Proceso de uso Nutrición</strong>
                                                                <select name="Proceso_nutricion" id="Proceso_nutricion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Proceso_nutricion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Prescripción/solicitud"<?php if ($Proceso_nutricion== 'Prescripción/solicitud')echo 'selected'; ?>>Prescripción/solicitud</option>
                                                                    <option value="Preparación/fabricación/cocinado"<?php if ($Proceso_nutricion== 'Preparación/fabricación/cocinado')echo 'selected'; ?>>Preparación/fabricación/cocinado</option>
                                                                    <option value="Suministro/pedido"<?php if ($Proceso_nutricion== 'Suministro/pedido')echo 'selected'; ?>>Suministro/pedido</option>
                                                                    <option value="Presentación"<?php if ($Proceso_nutricion== 'Presentación')echo 'selected'; ?>>Presentación</option>
                                                                    <option value="Dispensación/asignación"<?php if ($Proceso_nutricion== 'Dispensación/asignación')echo 'selected'; ?>>Dispensación/asignación</option>
                                                                    <option value="Distribución"<?php if ($Proceso_nutricion== 'Distribución')echo 'selected'; ?>>Distribución</option>
                                                                    <option value="Administración"<?php if ($Proceso_nutricion== 'Administración')echo 'selected'; ?>>Administración</option>
                                                                    <option value="Conservación"<?php if ($Proceso_nutricion== 'Conservación')echo 'selected'; ?>>Conservación</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Problema En Nutrición</strong>
                                                                <select name="Problema_nutricion" id="Problema_nutricion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Problema_nutricion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Paciente erróneo"<?php if ($Problema_nutricion== 'Paciente erróneo')echo 'selected'; ?>>Paciente erróneo</option>
                                                                    <option value="Dieta errónea"<?php if ($Problema_nutricion== 'Dieta errónea')echo 'selected'; ?>>Dieta errónea</option>
                                                                    <option value="Cantidad errónea"<?php if ($Problema_nutricion== 'Cantidad errónea')echo 'selected'; ?>>Cantidad errónea</option>
                                                                    <option value="Frecuencia errónea"<?php if ($Problema_nutricion== 'Frecuencia errónea')echo 'selected'; ?>>Frecuencia errónea</option>
                                                                    <option value="Consistencia errónea"<?php if ($Problema_nutricion== 'Consistencia errónea')echo 'selected'; ?>>Consistencia errónea</option>
                                                                    <option value="Condiciones de conservación inadecuada"<?php if ($Problema_nutricion== 'Condiciones de conservación inadecuada')echo 'selected'; ?>>Condiciones de conservación inadecuada</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <!-- Oxígeno/gases/vapores -->
    
                                                    <div class="container" id="oxigeno_gasesVapores" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Oxígeno/Gases/Vapores</strong>
                                                                <input id="oxigeno" name="oxigeno" type="text" class="control form-control" style="font-size: 12px;" value="<?php echo $oxigeno; ?>">
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Proceso de uso de O2/Gases/Vapores</strong>
                                                                <select name="Proceso_O2" id="Proceso_O2" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Proceso_O2== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Etiquetado de la botella/código de colores/estribo de seguridad"<?php if ($Proceso_O2== 'Etiquetado de la botella/código de colores/estribo de seguridad')echo 'selected'; ?>>Etiquetado de la botella/código de colores/estribo de seguridad</option>
                                                                    <option value="Prescripción"<?php if ($Proceso_O2== 'Prescripción')echo 'selected'; ?>>Prescripción</option>
                                                                    <option value="Administración"<?php if ($Proceso_O2== 'Administración')echo 'selected'; ?>>Administración</option>
                                                                    <option value="Distribución"<?php if ($Proceso_O2== 'Distribución')echo 'selected'; ?>>Distribución</option>
                                                                    <option value="Suministro/pedido"<?php if ($Proceso_O2== 'Suministro/pedido')echo 'selected'; ?>>Suministro/pedido</option>
                                                                    <option value="Conservación"<?php if ($Proceso_O2== 'Conservación')echo 'selected'; ?>>Conservación</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Problema O2/Gases/Vapores</strong>
                                                                <select name="Problema_gases" id="Problema_gases" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Problema_gases== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Paciente erróneo"<?php if ($Problema_gases== 'Paciente erróneo')echo 'selected'; ?>>Paciente erróneo</option>
                                                                    <option value="Gas/vapor erróneo"<?php if ($Problema_gases== 'Gas/vapor erróneo')echo 'selected'; ?>>Gas/vapor erróneo</option>
                                                                    <option value="Velocidad/concentración/caudal erróneo"<?php if ($Problema_gases== 'Velocidad/concentración/caudal erróneo')echo 'selected'; ?>>Velocidad/concentración/caudal erróneo</option>
                                                                    <option value="Modo de administración erróneo"<?php if ($Problema_gases== 'Modo de administración erróneo')echo 'selected'; ?>>Modo de administración erróneo</option>
                                                                    <option value="Contraindicación"<?php if ($Problema_gases== 'Contraindicación')echo 'selected'; ?>>Contraindicación</option>
                                                                    <option value="Condiciones de conservación inadecuadas"<?php if ($Problema_gases== 'Condiciones de conservación inadecuadas')echo 'selected'; ?>>Condiciones de conservación inadecuadas</option>
                                                                    <option value="Ausencia de administración"<?php if ($Problema_gases== 'Ausencia de administración')echo 'selected'; ?>>Ausencia de administración</option>
                                                                    <option value="Contaminación"<?php if ($Problema_gases== 'Contaminación')echo 'selected'; ?>>Contaminación</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <!-- COMPORTAMIENTO -->
    
                                                    <div class="container" id="Comportamiento" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Comportamiento del Personal</strong>
                                                                <select name="Comportamiento_personal" id="Comportamiento_personal" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Comportamiento_personal== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Incumplidor/no colaborador/obstructivo"<?php if ($Comportamiento_personal== 'Incumplidor/no colaborador/obstructivo')echo 'selected'; ?>>Incumplidor/no colaborador/obstructivo</option>
                                                                    <option value="Desconsiderado/grosero/hostil/inapropiado"<?php if ($Comportamiento_personal== 'Desconsiderado/grosero/hostil/inapropiado')echo 'selected'; ?>>Desconsiderado/grosero/hostil/inapropiado</option>
                                                                    <option value="Arriesgado/imprudente/peligroso"<?php if ($Comportamiento_personal== 'Arriesgado/imprudente/peligroso')echo 'selected'; ?>>Arriesgado/imprudente/peligroso</option>
                                                                    <option value="Problema de uso/abuso de sustancias"<?php if ($Comportamiento_personal== 'Problema de uso/abuso de sustancias')echo 'selected'; ?>>Problema de uso/abuso de sustancias</option>
                                                                    <option value="Acoso"<?php if ($Comportamiento_personal== 'Acoso')echo 'selected'; ?>>Acoso</option>
                                                                    <option value="Discriminación/prejuicio"<?php if ($Comportamiento_personal== 'Discriminación/prejuicio')echo 'selected'; ?>>Discriminación/prejuicio</option>
                                                                    <option value="Vagabundeo/fugas"<?php if ($Comportamiento_personal== 'Vagabundeo/fugas')echo 'selected'; ?>>Vagabundeo/fugas</option>
                                                                    <option value="Autolesión deliberada/suicidio"<?php if ($Comportamiento_personal== 'Autolesión deliberada/suicidio')echo 'selected'; ?>>Autolesión deliberada/suicidio</option>
                                                                    <option value="Agresión verbal"<?php if ($Comportamiento_personal== 'Agresión verbal')echo 'selected'; ?>>Agresión verbal</option>
                                                                    <option value="Agresión física"<?php if ($Comportamiento_personal== 'Agresión física')echo 'selected'; ?>>Agresión física</option>
                                                                    <option value="Agresión sexual"<?php if ($Comportamiento_personal== 'Agresión sexual')echo 'selected'; ?>>Agresión sexual</option>
                                                                    <option value="Agresión a objeto inanimado"<?php if ($Comportamiento_personal== 'Agresión a objeto inanimado')echo 'selected'; ?>>Agresión a objeto inanimado</option>
                                                                    <option value="Amenaza de muerte"<?php if ($Comportamiento_personal== 'Amenaza de muerte')echo 'selected'; ?>>Amenaza de muerte</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Comportamiento del Paciente</strong>
                                                                <select name="Comportamiento_paciente" id="Comportamiento_paciente" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Comportamiento_paciente== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Incumplidor/no colaborador/obstructivo"<?php if ($Comportamiento_paciente== 'Incumplidor/no colaborador/obstructivo')echo 'selected'; ?>>Incumplidor/no colaborador/obstructivo</option>
                                                                    <option value="Desconsiderado/grosero/hostil/inapropiado"<?php if ($Comportamiento_paciente== 'Desconsiderado/grosero/hostil/inapropiado')echo 'selected'; ?>>Desconsiderado/grosero/hostil/inapropiado</option>
                                                                    <option value="Arriesgado/imprudente/peligroso"<?php if ($Comportamiento_paciente== 'Arriesgado/imprudente/peligroso')echo 'selected'; ?>>Arriesgado/imprudente/peligroso</option>
                                                                    <option value="Problema de uso/abuso de sustancias"<?php if ($Comportamiento_paciente== 'Problema de uso/abuso de sustancias')echo 'selected'; ?>>Problema de uso/abuso de sustancias</option>
                                                                    <option value="Acoso"<?php if ($Comportamiento_paciente== 'Acoso')echo 'selected'; ?>>Acoso</option>
                                                                    <option value="Discriminación/prejuicio"<?php if ($Comportamiento_paciente== 'Discriminación/prejuicio')echo 'selected'; ?>>Discriminación/prejuicio</option>
                                                                    <option value="Vagabundeo/fugas"<?php if ($Comportamiento_paciente== 'Vagabundeo/fugas')echo 'selected'; ?>>Vagabundeo/fugas</option>
                                                                    <option value="Autolesión deliberada/suicidio"<?php if ($Comportamiento_paciente== 'Autolesión deliberada/suicidio')echo 'selected'; ?>>Autolesión deliberada/suicidio</option>
                                                                    <option value="Agresión verbal"<?php if ($Comportamiento_paciente== 'Agresión verbal')echo 'selected'; ?>>Agresión verbal</option>
                                                                    <option value="Agresión física"<?php if ($Comportamiento_paciente== 'Agresión física')echo 'selected'; ?>>Agresión física</option>
                                                                    <option value="Agresión sexual"<?php if ($Comportamiento_paciente== 'Agresión sexual')echo 'selected'; ?>>Agresión sexual</option>
                                                                    <option value="Agresión a objeto inanimado"<?php if ($Comportamiento_paciente== 'Agresión a objeto inanimado')echo 'selected'; ?>>Agresión a objeto inanimado</option>
                                                                    <option value="Amenaza de muerte"<?php if ($Comportamiento_paciente== 'Amenaza de muerte')echo 'selected'; ?>>Amenaza de muerte</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
    
                                                    <!-- Accidentes de los pacientes -->
                                                    <div class="container" id="AccidentesPacientes" style="display:none;">
                                                        <div class="row">
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Accidentes Por Fuerza No Penetrante</strong>
                                                                <select name="aacidentes_fuerzaNoPenetrante" id="aacidentes_fuerzaNoPenetrante" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($aacidentes_fuerzaNoPenetrante== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Contacto con objeto o animal"<?php if ($aacidentes_fuerzaNoPenetrante== 'Contacto con objeto o animal')echo 'selected'; ?>>Contacto con objeto o animal</option>
                                                                    <option value="Contacto con persona"<?php if ($aacidentes_fuerzaNoPenetrante== 'Contacto con persona')echo 'selected'; ?>>Contacto con persona</option>
                                                                    <option value="Exposición A gravedad baja"<?php if ($aacidentes_fuerzaNoPenetrante== 'Exposición A gravedad baja')echo 'selected'; ?>>Exposición a gravedad baja</option>
                                                                    <option value="Aplastamiento"<?php if ($aacidentes_fuerzaNoPenetrante== 'Aplastamiento')echo 'selected'; ?>>Aplastamiento</option>
                                                                    <option value="Abrasión/ROCE"<?php if ($aacidentes_fuerzaNoPenetrante== 'Abrasión/ROCE')echo 'selected'; ?>>Abrasión/ROCE</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Fuerza Punzante/Penetrante</strong>
                                                                <select name="Fuerza_Punzante" id="Fuerza_Punzante" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Fuerza_Punzante== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Rasguño/corte/desgarro/sección"<?php if ($Fuerza_Punzante== 'Rasguño/corte/desgarro/sección')echo 'selected'; ?>>Rasguño/corte/desgarro/sección</option>
                                                                    <option value="Pinchazo/herida punzante"<?php if ($Fuerza_Punzante== 'Pinchazo/herida punzante')echo 'selected'; ?>>Pinchazo/herida punzante</option>
                                                                    <option value="Mordedura/picadura/inoculación de veneno de animal"<?php if ($Fuerza_Punzante== 'Mordedura/picadura/inoculación de veneno de animal')echo 'selected'; ?>>Mordedura/picadura/inoculación de veneno de animal</option>
                                                                    <option value="Otra fuerza punzante/penetrante especificada"<?php if ($Fuerza_Punzante== 'Otra fuerza punzante/penetrante especificada')echo 'selected'; ?>>Otra fuerza punzante/penetrante especificada</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Otra Fuerza Mecánica</strong>
                                                                <select name="Otra_fuerza" id="Otra_fuerza" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Otra_fuerza== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Afectado por una Explosión"<?php if ($Otra_fuerza== 'Afectado por una Explosión')echo 'selected'; ?>>Afectado por una Explosión</option>
                                                                    <option value="Contacto con Maquinaria"<?php if ($Otra_fuerza== 'Contacto con Maquinaria')echo 'selected'; ?>>Contacto con Maquinaria</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Mecanismo Térmico </strong>
                                                                <select name="Mecanismo_termino" id="Mecanismo_termino" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Mecanismo_termino== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Calor excesivo/fuego"<?php if ($Mecanismo_termino== 'Calor excesivo/fuego')echo 'selected'; ?>>Calor excesivo/fuego</option>
                                                                    <option value="Frío excesivo/congelación"<?php if ($Mecanismo_termino== 'Frío excesivo/congelación')echo 'selected'; ?>>Frío excesivo/congelación</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Amenaza a la Respiración</strong>
                                                                <select name="AmenazaRespi" id="AmenazaRespi" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($AmenazaRespi== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Amenaza mecánica para la respiración"<?php if ($AmenazaRespi== 'Amenaza mecánica para la respiración')echo 'selected'; ?>>Amenaza mecánica para la respiración</option>
                                                                    <option value="Ahogamiento/cuasi ahogamiento"<?php if ($AmenazaRespi== 'Ahogamiento/cuasi ahogamiento')echo 'selected'; ?>>Ahogamiento/cuasi ahogamiento</option>
                                                                    <option value="Reclusión en lugar con falta de oxígeno"<?php if ($AmenazaRespi== 'Reclusión en lugar con falta de oxígeno')echo 'selected'; ?>>Reclusión en lugar con falta de oxígeno</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Exposición A Productos Químicos</strong>
                                                                <select name="Productos_quimicos" id="Productos_quimicos" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Productos_quimicos== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Intoxicación por producto químico u otra sustancia"<?php if ($Productos_quimicos== 'Intoxicación por producto químico u otra sustancia')echo 'selected'; ?>>Intoxicación por producto químico u otra sustancia</option>
                                                                    <option value="Corrosión por producto químico u otra sustancia"<?php if ($Productos_quimicos== 'Corrosión por producto químico u otra sustancia')echo 'selected'; ?>>Corrosión por producto químico u otra sustancia</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Otros Mecanismos de Lesión</strong>
                                                                <select name="mecanismo_lesion" id="mecanismo_lesion" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($mecanismo_lesion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Exposición a electricidad/radiación"<?php if ($mecanismo_lesion== 'Exposición a electricidad/radiación')echo 'selected'; ?>>Exposición a electricidad/radiación</option>
                                                                    <option value="Exposición a sonido/vibración"<?php if ($mecanismo_lesion== 'Exposición a sonido/vibración')echo 'selected'; ?>>Exposición a sonido/vibración</option>
                                                                    <option value="Exposición a presión de aire"<?php if ($mecanismo_lesion== 'Exposición a presión de aire')echo 'selected'; ?>>Exposición a presión de aire</option>
                                                                    <option value="Exposición a gravedad baja"<?php if ($mecanismo_lesion== 'Exposición a gravedad baja')echo 'selected'; ?>>Exposición a gravedad baja</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Exposición A Fenómenos Meteorológicos, Catástrofes, Etc</strong>
                                                                <select name="fenomenos" id="fenomenos" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($fenomenos== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="huracan"<?php if ($fenomenos== 'huracan')echo 'selected'; ?>>Huracán</option>
                                                                    <option value="tornado"<?php if ($fenomenos== 'tornado')echo 'selected'; ?>>Tornado</option>
                                                                    <option value="terremoto"<?php if ($fenomenos== 'terremoto')echo 'selected'; ?>>Terremoto</option>
                                                                    <option value="inundacion"<?php if ($fenomenos== 'inundacion')echo 'selected'; ?>>Inundación</option>
                                                                    <option value="sequía"<?php if ($fenomenos== 'sequía')echo 'selected'; ?>>Sequía</option>
                                                                    <option value="deslizamiento"<?php if ($fenomenos== 'deslizamiento')echo 'selected'; ?>>Deslizamiento de tierra</option>
                                                                    <option value="erupcion"<?php if ($fenomenos== 'erupcion')echo 'selected'; ?>>Erupción volcánica</option>
                                                                    <option value="tormenta"<?php if ($fenomenos== 'tormenta')echo 'selected'; ?>>Tormenta eléctrica</option>
                                                                    <option value="granizo"<?php if ($fenomenos== 'granizo')echo 'selected'; ?>>Granizo</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <strong style="font-size: 12px;">Caídas</strong>
                                                                <select name="Caidas" id="Caidas" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($Caidas== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Si"<?php if ($Caidas== 'Si')echo 'selected'; ?>>Si</option>
                                                                    <option value="No"<?php if ($Caidas== 'No')echo 'selected'; ?>>No</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
                                                    <div class="container" id="caidas_tipo" style="display:none;">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Tipo de Caída</strong>
                                                                <select name="TipoCaidas" id="TipoCaidas" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($TipoCaidas== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Tropezón/Traspié"<?php if ($TipoCaidas== 'Tropezón/Traspié')echo 'selected'; ?>>Tropezón/Traspié</option>
                                                                    <option value="Resbalón"<?php if ($TipoCaidas== 'Resbalón')echo 'selected'; ?>>Resbalón</option>
                                                                    <option value="Desmayo"<?php if ($TipoCaidas== 'Desmayo')echo 'selected'; ?>>Desmayo</option>
                                                                    <option value="Pérdida de equilibrio"<?php if ($TipoCaidas== 'Pérdida de equilibrio')echo 'selected'; ?>>Pérdida de equilibrio</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <strong style="font-size: 12px;">Elemento Implicado en la Caída</strong>
                                                                <select name="ElementoCaidas" id="ElementoCaidas" class="form-select" style="font-size: 12px;">
                                                                    <option value="Seleccione"<?php if ($ElementoCaidas== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Seleccione"<?php if ($ElementoCaidas== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                                    <option value="Cuna"<?php if ($ElementoCaidas== 'Cuna')echo 'selected'; ?>>Cuna</option>
                                                                    <option value="Cama"<?php if ($ElementoCaidas== 'Cama')echo 'selected'; ?>>Cama</option>
                                                                    <option value="Silla"<?php if ($ElementoCaidas== 'Silla')echo 'selected'; ?>>Silla</option>
                                                                    <option value="Camilla"<?php if ($ElementoCaidas== 'Camilla')echo 'selected'; ?>>Camilla</option>
                                                                    <option value="Inodoro"<?php if ($ElementoCaidas== 'Inodoro')echo 'selected'; ?>>Inodoro</option>
                                                                    <option value="Equipo Terapéutico"<?php if ($ElementoCaidas== 'Equipo Terapéutico')echo 'selected'; ?>>Equipo Terapéutico</option>
                                                                    <option value="Escaleras/Escalones"<?php if ($ElementoCaidas== 'Escaleras/Escalones')echo 'selected'; ?>>Escaleras/Escalones</option>
                                                                    <option value="Transporte/Sujeción por otra persona"<?php if ($ElementoCaidas== 'Transporte/Sujeción por otra persona')echo 'selected'; ?>>Transporte/Sujeción por otra persona</option>
                                                                </select>
                                                            </div>
    
                                                        </div>
                                                    </div>
    
    
                                                    <!-- Recursos/gestión de la organización -->
    
                                                    <div class="col-md-12" id="Gestion_recursos" style="display:none;">
                                                        <strong style="font-size: 12px;">Recursos/Gestión de la Organización</strong>
                                                        <select name="Recursos_Gestion" id="Recursos_Gestion" class="form-select" style="font-size: 12px;">
                                                            <option value="Seleccione"<?php if ($Recursos_Gestion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                                            <option value="Adaptación de la gestión de la carga de trabajo"<?php if ($Recursos_Gestion== 'Adaptación de la gestión de la carga de trabajo')echo 'selected'; ?>>Adaptación de la gestión de la carga de trabajo</option>
                                                            <option value="Disponibilidad/idoneidad de camas/servicios"<?php if ($Recursos_Gestion== 'Disponibilidad/idoneidad de camas/servicios')echo 'selected'; ?>>Disponibilidad/idoneidad de camas/servicios</option>
                                                            <option value="Disponibilidad/idoneidad de recursos humanos/personal"<?php if ($Recursos_Gestion== 'Disponibilidad/idoneidad de recursos humanos/personal')echo 'selected'; ?>>Disponibilidad/idoneidad de recursos humanos/personal</option>
                                                            <option value="Disponibilidad/Idoneidad de"<?php if ($Recursos_Gestion== 'Disponibilidad/Idoneidad de')echo 'selected'; ?>>Disponibilidad/Idoneidad de</option>
                                                            <option value="Protocolos/Políticas/Procedimientos/Directrices de Protocolos Etc"<?php if ($Recursos_Gestion== 'Protocolos/Políticas/Procedimientos/Directrices de Protocolos Etc')echo 'selected'; ?>>Protocolos/Políticas/Procedimientos/Directrices de Protocolos Etc</option>
                                                        </select>
                                                    </div>
    
    
    
                                            </fieldset>
                            </legend>
                    </div>
    
    
    
    
                    <div class="col-md-12"></div><br>
    
                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row">
    
                                    <div class="form-header">
                                        <h4 class="form-title" style="text-align: left;
                                            border-radius: 10px;
                                            background-color:  rgb(203, 0, 0);
                                            color: aliceblue;
                                            margin-top:13px;
                                            font-size: 13px;
                                            text-align: center;">Resultados para el paciente</h4>
                                    </div>
    
                                    <div class="col-md-12" id="GradoDaño">
                                        <strong style="font-size: 12px;">Grado del Daño</strong>
                                        <select id="Dañop_grado" name="Dañop_grado" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione"<?php if ($Dañop_grado== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                            <option value="Ninguno"<?php if ($Dañop_grado== 'Ninguno')echo 'selected'; ?>>Ninguno</option>
                                            <option value="Leve"<?php if ($Dañop_grado== 'Leve')echo 'selected'; ?>>Leve</option>
                                            <option value="Moderado"<?php if ($Dañop_grado== 'Moderado')echo 'selected'; ?>>Moderado</option>z
                                            <option value="Grave"<?php if ($Dañop_grado== 'Grave')echo 'selected'; ?>>Grave</option>
                                            <option value="Muerte"<?php if ($Dañop_grado== 'Muerte')echo 'selected'; ?>>Muerte</option>
                                        </select>
                                    </div>
    
                                </div>
                            </legend>
                        </fieldset>
                    </div>
    
                    <div class="row"></div> <br>
    
                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row">
                                    <div class="form-header">
                                        <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color:  rgb(203, 0, 0);
                                                    color: aliceblue;
                                                    margin-top:13px;
                                                    font-size: 13px;
                                                    text-align: center;">Resultados para la Organización</h4>
                                    </div>
    
                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Resultados para la Organización</strong>
                                        <select id="resultados_organizacion" name="resultados_organizacion" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione"<?php if ($resultados_organizacion== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                            <option value="Daños a bienes"<?php if ($resultados_organizacion== 'Daños a bienes')echo 'selected'; ?>>Daños a bienes</option>
                                            <option value="Aumento de los recursos asignados al paciente"<?php if ($resultados_organizacion== 'Aumento de los recursos asignados al paciente')echo 'selected'; ?>>Aumento de los recursos asignados al paciente</option>
                                            <option value="Atención de los medios de comunicación"<?php if ($resultados_organizacion== 'Atención de los medios de comunicación')echo 'selected'; ?>>Atención de los medios de comunicación</option>
                                            <option value="Reclamación formal"<?php if ($resultados_organizacion== 'Reclamación formal')echo 'selected'; ?>>Reclamación formal</option>
                                            <option value="Perjuicio para la reputación <?php if ($resultados_organizacion== 'Perjuicio para la reputación')echo 'selected'; ?>">Perjuicio para la reputación </option>
                                            <option value="Consecuencias jurídicas"<?php if ($resultados_organizacion== 'Consecuencias jurídicas')echo 'selected'; ?>>Consecuencias jurídicas</option>
                                            <option value="Otros"<?php if ($resultados_organizacion== 'Otros')echo 'selected'; ?>>Otros</option>
                                        </select>
                                    </div>
    
                                    <div class="col-md-6" id="AumentoRecursosPX" style="display:none;">
                                        <strong style="font-size: 12px;">Aumento de los recursos asignados al paciente</strong>
                                        <select id="pxAumentoRecursos" name="pxAumentoRecursos" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione"<?php if ($pxAumentoRecursos== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                            <option value="Prolongación de la estancia"<?php if ($pxAumentoRecursos== 'Prolongación de la estancia')echo 'selected'; ?>>Prolongación de la estancia</option>
                                            <option value="Ingreso en una zona de atención especial"<?php if ($pxAumentoRecursos== 'Ingreso en una zona de atención especial')echo 'selected'; ?>>Ingreso en una zona de atención especial</option>
                                            <option value="Tratamientos/pruebas suplementarias"<?php if ($pxAumentoRecursos== 'Tratamientos/pruebas suplementarias')echo 'selected'; ?>>Tratamientos/pruebas suplementarias</option>
                                            <option value="Alteración del flujo de trabajo/demoras para otros pacientes"<?php if ($pxAumentoRecursos== 'Alteración del flujo de trabajo/demoras para otros pacientes')echo 'selected'; ?>>Alteración del flujo de trabajo/demoras para otros pacientes</option>
                                            <option value="Necesidad de más personal"<?php if ($pxAumentoRecursos== 'Necesidad de más personal')echo 'selected'; ?>>Necesidad de más personal</option>
                                            <option value="Necesidad de más equipos"<?php if ($pxAumentoRecursos== 'Necesidad de más equipos')echo 'selected'; ?>>Necesidad de más equipos</option>
                                        </select>
                                    </div>
    
                                </div>
    
                    </div>
                    </legend>
                    </fieldset>
                </div>
    
            </div>
    
            </legend>
            </fieldset>
    
    
    
            <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                                            border-radius: 10px;
                                            background-color: rgb(157, 7, 7);
                                            color: aliceblue;
                                            margin-top:13px;
                                            font-size: 13px;
                                            text-align: center;">Validación</h4>
            </div>
            <fieldset>
                <legend>
                    <div class="container">
    
                        <div class="row">
    
                            <div class="col-md-3">
                                <strong style="font-size: 12px;">No. Caso</strong>
                                <input id="no_caso" name="no_caso" type="text" class="control form-control" style="font-size: 12px;" value="<?php echo $no_caso; ?>">
                            </div>
    
                            <div class="col-md-4">
                                <strong style="font-size: 12px;">Validación del Evento</strong>
                                <select name="Val_evento" id="Val_evento" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($Val_evento== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Cuasifalla"<?php if ($Val_evento== 'Cuasifalla')echo 'selected'; ?>>Cuasifalla</option>
                                    <option value="Evento Adverso"<?php if ($Val_evento== 'Evento Adverso')echo 'selected'; ?>>Evento Adverso</option>
                                    <option value="Centinela"<?php if ($Val_evento== 'Centinela')echo 'selected'; ?>>Centinela</option>
                                    <option value="Riesgo de Infección"<?php if ($Val_evento== 'Riesgo de Infección')echo 'selected'; ?>>Riesgo de Infección</option>
                                    <option value="Incidente"<?php if ($Val_evento== 'Incidente')echo 'selected'; ?>>Incidente</option>
                                    <option value="No aplica"<?php if ($Val_evento== 'No aplica')echo 'selected'; ?>>No aplica</option>
                                </select>
                            </div>
    
                            <div class="col-md-5">
                                <strong style="font-size: 12px;">Evidencia</strong>
                                <select id="Evidencia" name="Evidencia" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($Evidencia== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Si"<?php if ($Evidencia== 'Si')echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Evidencia== 'No')echo 'selected'; ?>>No</option>
                                </select>
                            </div>
    
                            <div class="col-md-6" id="tipo_adverso" style="display:none;">
                                <strong style="font-size: 12px;">Evento Adverso</strong>
                                <select name="evento_adversoseg" id="evento_adversoseg" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($evento_adversoseg== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Sin daño"<?php if ($evento_adversoseg== 'Sin daño')echo 'selected'; ?>>Sin daño</option>
                                    <option value="Leve"<?php if ($evento_adversoseg== 'Leve')echo 'selected'; ?>>Leve</option>
                                    <option value="Moderado"<?php if ($evento_adversoseg== 'Moderado')echo 'selected'; ?>>Moderado</option>
                                    <option value="Grave"<?php if ($evento_adversoseg== 'Grave')echo 'selected'; ?>>Grave</option>
                                </select>
                            </div>
    
                            <div class="col-md-12" id="analisis_event" style="display:none;">
                                <strong style="font-size: 12px;">Análisis</strong>
                                <select name="evento_analisis" id="evento_analisis" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($evento_analisis== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Si"<?php if ($evento_analisis== 'Si')echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($evento_analisis== 'No')echo 'selected'; ?>>No</option>
                                </select>
                            </div>
    
                            <div class="col-md-6" id="Analisis_cr" style="display:none;">
                                <strong style="font-size: 12px;">Análisis C-R</strong>
                                <select name="analisis" id="analisis" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($analisis== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Si"<?php if ($analisis== 'Si')echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($analisis== 'No')echo 'selected'; ?>>No</option>
                                </select>
                            </div>
    
                            <div class="col-md-12" id="No_porque" style="display:none;">
                                <strong style="font-size: 12px;">¿Por qué?</strong>
                                <select name="No_porque_select" id="No_porque_select" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($No_porque_select== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Se descarta EA"<?php if ($No_porque_select== 'Se descarta EA')echo 'selected'; ?>>Se descarta EA</option>
                                    <option value="No recolección de información"<?php if ($No_porque_select== 'No recolección de información')echo 'selected'; ?>>No recolección de información</option>
                                </select>
                            </div>
    
                            <div class="col-md-12" id="resultado_centi" style="display:none;">
                                <label for="respuesta_eve" style="font-size: 12px; font-weight: bold;">Resultado</label>
                                <textarea name="respuesta_eve" id="respuesta_eve" class="form-control" style="font-size: 12px;"><?php echo $respuesta_eve; ?></textarea>
                            </div>
    
    
    
                            <div class="container" id="validacion_segui" style="display:none;">
                                <div class="row">
    
    
                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">No. Oficio</strong>
                                        <input id="no_oficio" name="no_oficio" type="text" class="control form-control" style="font-size: 12px;" value="<?php echo $no_oficio; ?>">
                                    </div>
    
                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Fecha de Envio</strong>
                                        <input id="fecha_Envio" name="fecha_Envio" type="date" class="control form-control" style="font-size: 12px;" value="<?php echo $fecha_Envio; ?>">
                                    </div>
                                </div>
    
    
    
                                <div class="col-md-3" id="segui_respuesVal" style="display:none;">
                                    <strong style="font-size: 12px;">Respuesta</strong>
                                    <select name="respuesta" id="respuesta" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($respuesta== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Si"<?php if ($respuesta== 'Si')echo 'selected'; ?>>Si</option>
                                        <option value="No"<?php if ($respuesta== 'No')echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
    
                            </div>
                        </div>
    
                        <div class="container" id="respuesta_tipo" style="display:none;">
                            <div class="row">
    
                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Corto Plazo</strong>
                                    <select id="Corto" name="Corto" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($Corto== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Si"<?php if ($Corto== 'Si')echo 'selected'; ?>>Si</option>
                                        <option value="No"<?php if ($Corto== 'No')echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
    
                                <div class="col-md-8" id="desc_corto" style="display:none;">
                                    <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción de Respuesta Corto Plazo</label>
                                    <textarea name="corto_descrip" id="corto_descrip" class="form-control" style="font-size: 12px;"><?php echo $corto_descrip; ?></textarea>
                                </div>
    
                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Mediano Plazo</strong>
                                    <select id="Mediano" name="Mediano" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($Mediano== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Si"<?php if ($Mediano== 'Si')echo 'selected'; ?>>Si</option>
                                        <option value="No"<?php if ($Mediano== 'No')echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
    
                                <div class="col-md-8" id="desc_mediano" style="display:none;">
                                    <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción de Respuesta Mediano Plazo</label>
                                    <textarea name="Mediano_descrip" id="Mediano_descrip" class="form-control" style="font-size: 12px;"><?php echo $Mediano_descrip; ?></textarea>
                                </div>
    
    
                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Largo Plazo</strong>
                                    <select id="Largo" name="Largo" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione"<?php if ($Largo== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                        <option value="Si"<?php if ($Largo== 'Si')echo 'selected'; ?>>Si</option>
                                        <option value="No"<?php if ($Largo== 'No')echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
    
                                <div class="col-md-8" id="desc_largo" style="display:none;">
                                    <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción de Respuesta Largo Plazo</label>
                                    <textarea name="largo_descrip" id="largo_descrip" class="form-control" style="font-size: 12px;"><?php echo $largo_descrip; ?></textarea>
                                </div>
    
                            </div>
                        </div>
    
                    </div>
    
    
                </legend>
            </fieldset>
    
            <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                                border-radius: 10px;
                                background-color: rgb(157, 7, 7);
                                color: aliceblue;
                                margin-top:13px;
                                font-size: 13px;
                                text-align: center;">Evitabilidad</h4>
    
            </div>
    
    
            <fieldset>
                <legend>
                    <div class="container">
    
                        <div class="row">
    
                            <div class="col-md-12">
                                <strong style="font-size: 12px;">Era Evitable</strong>
                                <select id="Evitabilidad" name="Evitabilidad" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($Evitabilidad== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Si"<?php if ($Evitabilidad== 'Si')echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Evitabilidad== 'No')echo 'selected'; ?>>No</option>
                                </select>
                            </div>
    
    
                            <div class="container">
                                <strong style="font-size: 12px;">Factores del Incidente</strong> <br>
    
                                <fieldset>
                                    <legend>
    
                                        <div class="row"> <!-- DIV DE ROW DEL FACTOR DE RIESGO-->
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="CaracteristicasPaciente" id="CaracteristicasPaciente" style="font-size:12px;" <?php if ($CaracteristicasPaciente == 'Si') echo "checked"; ?>>
                                                <label for="CaracteristicasPaciente" style="font-size:12px;">Relacionados Con Las Características Del Paciente</label>
                                            </div>
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="IndividualesEquipo" id="IndividualesEquipo" style="font-size: 12px;" <?php if ($IndividualesEquipo == 'Si') echo "checked"; ?>>
                                                <label for="IndividualesEquipo" style="font-size: 12px;">Individuales Asociadas Con Los Integrantes Del Equipo</label>
                                            </div>
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="TrabajoEquipo" id="TrabajoEquipo" style="font-size: 12px;" <?php if ($TrabajoEquipo == 'Si') echo "checked"; ?>>
                                                <label for="TrabajoEquipo" style="font-size: 12px;">Relacionados Con El Trabajo En Equipo</label>
                                            </div>
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="AmbienteTrabajo" id="AmbienteTrabajo" style="font-size: 12px;" <?php if ($AmbienteTrabajo == 'Si') echo "checked"; ?>>
                                                <label for="AmbienteTrabajo" style="font-size: 12px;">Relacionados Con El Ambiente De Trabajo Y El Entorno</label>
                                            </div>
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="OrganizacionalesEstablecimiento" id="OrganizacionalesEstablecimiento" style="font-size: 12px;" <?php if ($OrganizacionalesEstablecimiento == 'Si') echo "checked"; ?>>
                                                <label for="OrganizacionalesEstablecimiento" style="font-size: 12px;">Organizacionales Del Establecimiento De Atención Médica</label>
                                            </div>
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="InstitucionalesExternos" id="InstitucionalesExternos" style="font-size: 12px;" <?php if ($InstitucionalesExternos == 'Si') echo "checked"; ?>>
                                                <label for="InstitucionalesExternos" style="font-size: 12px;">Institucionales O Del Ambiente Externo</label>
                                            </div>
    
    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="Otro" id="Otro" style="font-size: 12px;" <?php if ($Otro == 'Si') echo "checked"; ?>>
                                                <label for="Otro" style="font-size: 12px;">Otro</label>
                                            </div>
    
    
                                            <div class="col-md-8">
                                                <input type="checkbox" name="AplicacionIndicaciones" id="AplicacionIndicaciones" style="font-size: 12px;" <?php if ($AplicacionIndicaciones == 'Si') echo "checked"; ?>>
                                                <label for="AplicacionIndicaciones" style="font-size: 12px;">Relacionados Con La Aplicación De Las Indicaciones, Protocolos, Manuales, Lineamientos Y Guías De Práctica Clínica</label>
                                            </div>
    
                                        </div>
                                    </legend>
                                </fieldset>
                            </div>
    
                        </div>
                    </div>
                </legend>
            </fieldset>
    
    
    
    
            <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                                            border-radius: 10px;
                                            background-color: rgb(157, 7, 7);
                                            color: aliceblue;
                                            margin-top:13px;
                                            font-size: 13px;
                                            text-align: center;">Registro</h4>
            </div>
    
            <fieldset>
                <legend>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <strong style="font-size: 12px;">SREA</strong>
                                <input id="SREA_seg" name="SREA_seg" type="number" class="control form-control" style="font-size: 12px;" value="<?php echo $SREA_seg; ?>">
                            </div>
    
                            <div class="col-md-12">
                                <strong style="font-size: 12px;">Estatus</strong>
                                <select id="estatus" name="estatus" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione"<?php if ($estatus== 'Seleccione')echo 'selected'; ?>>Seleccione</option>
                                    <option value="Solo Detectado"<?php if ($estatus== 'Solo Detectado')echo 'selected'; ?>>Solo Detectado</option>
                                    <option value="No hay respuesta"<?php if ($estatus== 'No hay respuesta')echo 'selected'; ?>>No hay respuesta</option>
                                    <option value="Respuesta"<?php if ($estatus== 'Respuesta')echo 'selected'; ?>>Respuesta</option>
                                    <option value="Seguimiento"<?php if ($estatus== 'Seguimiento')echo 'selected'; ?>>Seguimiento</option>
                                    <option value="Cerrado Caso"<?php if ($estatus== 'Cerrado Caso')echo 'selected'; ?>>Cerrado Caso</option>
                                </select>
                            </div>
    
                        </div>
                    </div>
                </legend>
            </fieldset>
    
            <div style="display: flex; justify-content: flex-end; align-items: center; margin-top: 10px;">
                <button type="submit" class="btn btn-primary" style="font-size: 14px; padding: 6px 14px;">Editar</button>
            </div><br>
        </form>
    </div><br>



    </div>

    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/scripteditar.js"></script>
    <script type="module">
        import { editForm } from "./js/update.js";
        editForm();
    </script>



</body>

</html>