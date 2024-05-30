<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
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
        <div class="row">

            <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(198, 79, 113);
                color: aliceblue;
                margin-top:15px;
                font-size: 15px;
                text-align: center;">Datos del Paciente</h4>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">Nombre del Paciente</strong>
                <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">CURP</strong>
                <input id="curp" name="curp" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px; ">Fecha de Nacimiento</strong>
                <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
            </div>
            <div class="col-md-3">
                <strong style="font-size: 13px;">Edad</strong>
                <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Sexo</strong>
                <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Cama</strong>
                <input type="number" class="control form-control" id="cama" name="cama" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Servicio</strong>
                <select name="servicio" id="servicio" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="UTIP">UTIP</option>
                    <option value="NEUROCIRUGIA ADULTOS">NEUROCIRUGIA ADULTOS</option>
                    <option value="MEDICINA CRITICA">MEDICINA CRITICA</option>
                    <option value="CIRUGIA GENERAL">CIRUGIA GENERAL</option>
                    <option value="ANGIOLOGIA Y CIRUGIA VASCULAR">ANGIOLOGIA Y CIRUGIA VASCULAR</option>
                    <option value="UCIN EXTERNO">UCIN EXTERNO</option>
                    <option value="UTIA">UTIA</option>
                    <option value="UCIN">UCIN</option>
                    <option value="HEMATOLOGIA">HEMATOLOGIA</option>
                    <option value="ONCO-QCO">ONCO-QCO</option>
                    <option value="UTIN">UTIN</option>
                    <option value="ENDOCRINOLOGIA">ENDOCRINOLOGIA</option>
                    <option value="PEDIATRIA">PEDIATRIA</option>
                    <option value="MEDICINA INTERNA">MEDICINA INTERNA</option>
                    <option value="GINECOLOGIA">GINECOLOGIA</option>
                    <option value="ONCOLOGIA">ONCOLOGIA</option>
                    <option value="URGENCIAS MEDICAS">URGENCIAS MEDICAS</option>
                    <option value="GINECO Y OBS">GINECO Y OBS</option>
                    <option value="CIRUGIA MAXILOFACIAL">CIRUGIA MAXILOFACIAL</option>
                    <option value="UCIA">UCIA</option>
                    <option value="OFTALMOLOGIA">OFTALMOLOGIA</option>
                    <option value="MEDICO GENERAL">MEDICO GENERAL</option>
                    <option value="HEMODIALISIS">HEMODIALISIS</option>
                    <option value="IMAGENOLOGIA">IMAGENOLOGIA</option>
                    <option value="QUIMIOTERAPIA">QUIMIOTERAPIA</option>
                    <option value="BANCO DE SANGRE">BANCO DE SANGRE</option>
                    <option value="CISFA">CISFA</option>
                    <option value="RADIOTERAPIA">RADIOTERAPIA</option>
                    <option value="RELACIONES LABORALES">RELACIONES LABORALES</option>
                    <option value="LOBBY">LOBBY</option>
                    <option value="TRAUMOTOLOGIA-ORTOPEDIA">TRAUMOTOLOGIA-ORTOPEDIA</option>
                    <option value="ALMACÉN">ALMACÉN</option>
                    <option value="ENFERMERIA">ENFERMERIA</option>
                    <option value="ANESTESIOLOGIA">ANESTESIOLOGIA</option>
                    <option value="BRAQUITERAPIA">BRAQUITERAPIA</option>
                    <option value="INAI">INAI</option>
                    <option value="CARDIOLOGIA">CARDIOLOGIA</option>
                    <option value="DIRECCIÓN MEDICA">DIRECCIÓN MEDICA</option>
                    <option value="ADMISIÓN">ADMISIÓN</option>
                    <option value="FARMACIA AMBULATORIA">FARMACIA AMBULATORIA</option>
                    <option value="OTORRINOLARINGOLOGIA">OTORRINOLARINGOLOGIA</option>
                    <option value="LABORATORIO MOLECULAR">LABORATORIO MOLECULAR</option>
                    <option value="ESTACIONAMIENTO ENTRADA PRINCIPAL">ESTACIONAMIENTO ENTRADA PRINCIPAL</option>
                    <option value="NEFROLOGÍA">NEFROLOGÍA</option>
                    <option value="CLINICA DE LA MUJER">CLINICA DE LA MUJER</option>
                    <option value="PATOLOGIA">PATOLOGIA</option>
                    <option value="CLINICA DE HERIDAS">CLINICA DE HERIDAS</option>
                    <option value="RECEPCION">RECEPCION</option>
                    <option value="REHABILITACIÓN">REHABILITACIÓN</option>
                    <option value="CLÍNICA DE HERIDAS">CLÍNICA DE HERIDAS</option>
                    <option value="ELECTRODIAGNOSTICO">ELECTRODIAGNOSTICO</option>
                    <option value="MEDICINA NUCLEAR">MEDICINA NUCLEAR</option>
                    <option value="LABORATORIO">LABORATORIO</option>
                </select>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Piso</strong>
                <select name="piso" id="piso" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="PB">PB</option>
                </select>
            </div>


            <div class="col-md-3">
                <strong style="font-size: 13px;">Turno</strong>
                <select name="Turno" id="Turno" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Jornada Especial">Jornada Especial</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option>
                </select>
            </div>


            <div class="col-md-3">
                <strong style="font-size: 13px;">Personal</strong>
                <select name="Personal" id="Personal" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Enfermera">Enfermera</option>
                    <option value="Médico">Médico</option>
                </select>
            </div>


            <div class="col-md-3">
                <strong style="font-size: 13px;">Hospitalización</strong>
                <select name="Hospitalizacion" id="Hospitalizacion" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Ambulatorio">Ambulatorio</option>
                    <option value="Médico">Médico</option>
                </select>
            </div>

            <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(198, 79, 113);
                color: aliceblue;
                margin-top:15px;
                font-size: 15px;
                text-align: center;">Notificación</h4>
            </div>



            <div class="col-md-6">
                <strong style="font-size: 13px;">Fecha de Notificación</strong>
                <input id="fecha_notificacion" name="fecha_notificacion" type="date" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">Fecha de Incidente</strong>
                <input id="fecha_notificacion" name="fecha_notificacion" type="date" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-6">
                <strong style="font-size: 13px;">No de Caso</strong>
                <input type="text" class="control form-control" id="no_caso" placeholder="#" name="no_caso" value="" style="font-size: 13px;">
            </div>



            <div class="col-md-6">
                <strong style="font-size: 13px;">Medio de Notificación</strong>
                <select name="Medio_notificacion" id="Medio_notificacion" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="FCV">FCV</option>
                    <option value="BA">BA</option>
                    <option value="R">R</option>
                    <option value="S">S</option>
                    <option value="SINOI">SINOI</option>
                    <option value="SINOI/SNS/BA">SINOI/SNS/BA</option>
                    <option value="SS">SS</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="descripcion" style="font-size: 13px; font-weight: bold;">Descripción del evento</label>
                <textarea name="descripcion" id="descripcion" class="form-control" style="font-size: 13px;"></textarea>
            </div>


            <div class="col-md-3">
                <strong style="font-size: 13px;">Tipo del Evento</strong>
                <select name="Tipo_evento" id="Tipo_evento" class="form-select" style="font-size: 13px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="CUASIFALLA">CUASIFALLA</option>
                    <option value="EA LEVE">EA LEVE</option>
                    <option value="EA MODERADO">EA MODERADO</option>
                    <option value="EA SIN DAÑO">EA SIN DAÑO</option>
                    <option value="INCIDENTE">INCIDENTE</option>
                    <option value="REPETIDAS">REPETIDAS</option>
                    <option value="RIESGO DE INFECCIÓN">RIESGO DE INFECCIÓN</option>
                </select>
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">CISP</strong>
                <input type="text" class="control form-control" id="CISP" name="CISP" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Proceso</strong>
                <input type="text" class="control form-control" id="PROCESO" name="PROCESO" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Problema</strong>
                <input type="text" class="control form-control" id="PROBLEMA" name="PROBLEMA" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">SREA</strong>
                <input type="text" class="control form-control" id="SREA" name="SREA" value="" style="font-size: 13px;">
            </div>

            <!-- SEGUIMIENTO -->


            <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(198, 79, 113);
                color: aliceblue;
                margin-top:15px;
                font-size: 15px;
                text-align: center;">Seguimiento</h4>
            </div>



            <div class="col-md-3">
                <strong style="font-size: 13px;">Fecha de Envio</strong>
                <input id="fecha_Envio" name="fecha_Envio" type="date" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">No. de Oficio</strong>
                <input id="no_envio" name="no_envio" type="number" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Fecha de Respuesta</strong>
                <input id="fecha_respuesta" name="fecha_respuesta" type="date" class="control form-control" value="" style="font-size: 13px;">
            </div>


            <div class="col-md-3">
                <strong style="font-size: 13px;">Respuesta</strong>
                <input id="respuesta" name="respuesta" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Corto</strong>
                <input id="Corto" name="Corto" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Mediano</strong>
                <input id="Mediano" name="Mediano" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Largo</strong>
                <input id="Largo" name="Largo" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Seguimiento</strong>
                <input id="Seguimiento_seg" name="Seguimiento_seg" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>

            <div class="col-md-3">
                <strong style="font-size: 13px;">Evidencia</strong>
                <input id="Evidencia" name="Evidencia" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>


            <div class="col-md-3">
                <strong style="font-size: 13px;">Status</strong>
                <input id="Status" name="Status" type="text" class="control form-control" value="" style="font-size: 13px;">
            </div>





        </div>

        <div style="display: flex; justify-content: flex-end; align-items: center;">
                    <button type="submit" class="btn btn-primary" style="font-size: 18px; padding: 8px 18px;">Editar</button>
                </div><br><br>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/scripteditar.js"></script>



</body>

</html>