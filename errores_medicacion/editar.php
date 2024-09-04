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

        <h5>Errores de Medicación</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <fieldset>
            <legend>
                <div class="row">

                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(42, 157, 143);
                color: aliceblue;
                margin-top:c15px;
                font-size: 15px;
                text-align: center;">Datos Generales</h4>
                    </div>

                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row">

                                    <div class="col-md-4">
                                        <strong style="font-size: 12px;">Nombre del Paciente</strong>
                                        <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>


                                    <div class="col-md-4">
                                        <strong style="font-size: 12px;">Cama</strong>
                                        <input id="cama" name="cama" type="text" class="control form-control" value=""
                                            style="font-size: 12px;">
                                    </div>


                                    <div class="col-md-4">
                                        <strong style="font-size: 12px;">Servicio</strong>
                                        <select name="servicio" id="servicio" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Imagen">Imagen</option>
                                            <option value="Laboratorio">Laboratorio</option>
                                            <option value="Patología">Patología</option>
                                            <option value="Urgencias">Urgencias</option>
                                            <option value="Banco De Sangre">Banco De Sangre</option>
                                            <option value="Quimioterapia">Quimioterapia</option>
                                            <option value="Radioterapia">Radioterapia</option>
                                            <option value="Braquiterapia">Braquiterapia</option>
                                            <option value="Rehabilitación">Rehabilitación</option>
                                            <option value="Endoscopia">Endoscopia</option>
                                            <option value="Cirugía Ambulatoria">Cirugía Ambulatoria</option>
                                            <option value="Hemodiálisis">Hemodiálisis</option>
                                            <option value="Hematología">Hematología</option>
                                            <option value="Hospitalización Pediatría">Hospitalización Pediatría</option>
                                            <option value="Hospitalización 2do Piso">Hospitalización 2do Piso</option>
                                            <option value="Hospitalización 3er Piso">Hospitalización 3er Piso</option>
                                            <option value="Hospitalización 4to Piso">Hospitalización 4to Piso</option>
                                            <option value="Gineco-Obstetricia">Gineco-Obstetricia</option>
                                            <option value="Clínica De Heridas">Clínica De Heridas</option>
                                            <option value="Clínica De Catéteres">Clínica De Catéteres</option>
                                            <option value="Quirófano">Quirófano</option>
                                            <option value="Clínica Del Dolor">Clínica Del Dolor</option>
                                            <option value="Hemodinamia">Hemodinamia</option>
                                            <option value="Inhaloterapia">Inhaloterapia</option>
                                            <option value="UTIP">UTIP</option>
                                            <option value="UTIHP">UTIHP</option>
                                            <option value="UCIN">UCIN</option>
                                            <option value="UTIN">UTIN</option>
                                            <option value="UCIA">UCIA</option>
                                            <option value="UTIA">UTIA</option>
                                        </select>
                                    </div>
                                </div>
                            </legend>
                        </fieldset>
                    </div>
                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(42, 157, 143);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Error en la Medicación</h4>
                    </div>
                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row">


                                    <div class="col-md-6">
                                        <strong style="font-size: 12px; ">Fecha de Reporte (CIFV)</strong>
                                        <input id="fecha_cifv" name="fecha_cifv" type="date" value=""
                                            class="control form-control" style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px; ">Fecha de Error de Medicación</strong>
                                        <input id="fecha_medicacion" name="fecha_medicacion" type="date" value=""
                                            class="control form-control" style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Utilización del Medicamento Erroneo en el Paciente</strong>
                                        <select name="uti_medicamento" id="uti_medicamento" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="No">No</option>
                                            <option value="Si">Si</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Hubo Consecuncia en el Paciente</strong>
                                        <select name="consecuencia_px" id="consecuencia_px" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="No">No</option>
                                            <option value="Si">Si</option>
                                        </select>
                                    </div>


                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Medicamento Involucrado</strong>
                                        <select name="realizo_investigacion" id="realizo_investigacion" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Medicamentos Involucrados Uno">Medicamentos Involucrados Uno</option>
                                            <option value="Medicamentos Involucrado Dos">Medicamentos Involucrado Dos</option>
                                            <option value="Medicamentos Involucrado Tres">Medicamentos Involucrado Tres</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="un_medicamento">
                                        <br>

                                        <fieldset>
                                            <legend>

                                                <div class="form-header">
                                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(42, 157, 143,0.5);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Medicamentos Involucrado Uno </h4>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Denominación Genérica </strong>
                                                        <input id="Denominacion" name="Denominacion" type="text" class="control form-control" value=""
                                                            style="font-size: 12px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Concentración</strong>
                                                        <input id="Concentracion" name="Concentracion" type="text" class="control form-control" value=""
                                                            style="font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Fabricante</strong>
                                                        <input id="Fabricante" name="Fabricante" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">No.Lote</strong>
                                                        <input id="Lote" name="Lote" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Caducidad</strong>
                                                        <input id="Caducidad" name="Caducidad" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Forma Farmacéutica</strong>
                                                        <input id="Forma" name="Forma" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Dosis</strong>
                                                        <input id="Dosis" name="Dosis" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Via de Administración</strong>
                                                        <input id="Via_Administracion" name="Via_Administracion" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Intervalo de Administración</strong>
                                                        <input id="Intervalo_Administracion" name="Intervalo_Administracion" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                </div>

                                            </legend>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6" id="dos_medicamento">
                                        <br>

                                        <fieldset>
                                            <legend>

                                                <div class="form-header">
                                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(42, 157, 143,0.5);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Medicamentos Involucrado Dos</h4>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Denominación Genérica: </strong>
                                                        <input id="Denominacion_1" name="Denominacion_1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Concentración</strong>
                                                        <input id="Concentracion1" name="Concentracion1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Fabricante</strong>
                                                        <input id="Fabricante1" name="Fabricante1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">No.Lote</strong>
                                                        <input id="Lote1" name="Lote1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Caducidad</strong>
                                                        <input id="Caducidad1" name="Caducidad1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Forma Farmacéutica</strong>
                                                        <input id="Forma1" name="Forma1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Dosis</strong>
                                                        <input id="Dosis1" name="Dosis1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Via de Administración</strong>
                                                        <input id="Via_Administracion1" name="Via_Administracion1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Intervalo de Administración</strong>
                                                        <input id="Intervalo_Administracion1" name="Intervalo_Administracion1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>


                                                </div>

                                            </legend>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-3">

                                    </div>




                                    <div class="col-md-6" id="tres_medicamento">
                                        <br>

                                        <fieldset>
                                            <legend>



                                                <div class="form-header">
                                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(42, 157, 143,0.5);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Medicamentos Involucrado Tres</h4>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Denominación Genérica: </strong>
                                                        <input id="Denominacion_3" name="Denominacion_3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Concentración</strong>
                                                        <input id="Concentracion3" name="Concentracion3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Fabricante</strong>
                                                        <input id="Fabricante3" name="Fabricante3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">No.Lote</strong>
                                                        <input id="Lote3" name="Lote3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Caducidad</strong>
                                                        <input id="Caducidad3" name="Caducidad3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Forma Farmacéutica</strong>
                                                        <input id="Forma3" name="Forma3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Dosis</strong>
                                                        <input id="Dosis3" name="Dosis3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Via de Administración</strong>
                                                        <input id="Via_Administracion3" name="Via_Administracion3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Intervalo de Administración</strong>
                                                        <input id="Intervalo_Administracion3" name="Intervalo_Administracion3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                </div>

                                            </legend>
                                        </fieldset>
                                        <br>

                                    </div>



                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Descripción del Error</strong>
                                        <textarea id="descripcion_error" name="descripcion_error" type="text" class="control form-control" value=""
                                            style="font-size: 12px;"
                                            placeholder="Cual fue el Error y Agregar Sintomas en Caso de Presentarse"></textarea>
                                        <br>

                                    </div>



                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Nombre de quien notifica el caso</strong>
                                        <input id="nombbre_notificacion" name="nombbre_notificacion" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>


                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Cargo</strong>
                                        <select name="cargo" id="cargo" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Médico">Médico</option>
                                            <option value="Enfermo(a)">Enferm(a)</option>
                                            <option value="Farmaceutico">Farmaceutico</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>






                                    <div class="col-md-4">
                                        <!-- Div para el espacio entre campos. -->
                                    </div>

                                </div>
                            </legend>
                        </fieldset>
                    </div>



                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(242, 77, 19);
                            color: aliceblue;
                            margin-top:20px;
                            font-size: 18px;
                            text-align: center;">Seguimiento</h4>
                    </div>


                    <div class="container">
                        <fieldset>
                            <legend>

                                <div class="row">

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Validación del Evento</strong>
                                        <select name="validacion_evento" id="validacion_evento" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="tipo_valevento" style="display:none;">
                                        <strong style="font-size: 12px;">Tipo</strong>
                                        <select name="tipo_evento" id="tipo_evento" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Calidad">Calidad</option>
                                            <option value="Tecnovigilancia">Tecnovigilancia</option>
                                        </select>
                                    </div>

                                    <div class="container" id="hraei_idmos" style="display:none;">
                                        <div class="row">



                                            <div class="col-md-4">
                                                <strong style="font-size: 12px;">ID HRAEI</strong>
                                                <input id="id_hraei" name="id_hraei" placeholder="EM/00000/2024" type="text"
                                                    class="control form-control" value="" style="font-size: 12px;" disabled>
                                            </div>

                                            <div class="col-md-4">
                                                <strong style="font-size: 12px;">ID CIFV</strong>
                                                <input id="id_CIFV" name="id_CIFV" placeholder="CIFV/HRAEI/00000/2024" type="text"
                                                    class="control form-control" value="" style="font-size: 12px;" >
                                            </div>



                                            <div class="col-md-4">
                                                <strong style="font-size: 12px;">ID VIGIFLOW</strong>
                                                <input id="id_ESAVI" name="id_ESAVI" placeholder="MX-COFEPRIS-0000" type="text"
                                                    class="control form-control" value="" style="font-size: 12px;">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <strong style="font-size: 12px; ">Fecha de Reporte en Plataforma</strong>
                                        <input id="fecha" name="fecha" type="date" value=""
                                            class="control form-control" style="font-size: 12px;">
                                    </div>

                                    <!-- 
                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Nombre de quien notifica el Seguimiento</strong>
                                        <input id="nombbre_seguimiento" name="nombbre_seguimiento" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div> -->

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Tipo de Error</strong>
                                        <select name="tipo_error" id="tipo_error" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Prescripción">Prescripción</option>
                                            <option value="Transcripción">Transcripción</option>
                                            <option value="Administración">Administración</option>
                                            <option value="Monitorización">Monitorización</option>
                                            <option value="Validación">Validación</option>
                                            <option value="Preparación">Preparación</option>
                                            <option value="Dispensación">Dispensación</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>




                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Error</strong>
                                        <select name="error" id="error" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Medicamento Erróneo">Medicamento Erróneo</option>
                                            <option value="Omisión de Dosis o de Medicamento">Omisión de Dosis o de Medicamento</option>
                                            <option value="Dosis Incorrecta">Dosis Incorrecta</option>
                                            <option value="Frecuencia de Administración Errónea">Frecuencia de Administración Errónea</option>
                                            <option value="Forma Farmacéutica Errónea">Forma Farmacéutica Errónea</option>
                                            <option value="Error de Preparación, Manipulación y/o Acondicionamiento">Error de Preparación, Manipulación y/o Acondicionamiento</option>
                                            <option value="Técnica de Administración Incorrecta">Técnica de Administración Incorrecta</option>
                                            <option value="Vía de Administración Errónea">Vía de Administración Errónea</option>
                                            <option value="Velocidad de Administración Errónea">Velocidad de Administración Errónea</option>
                                            <option value="Hora de Administración Incorrecta">Hora de Administración Incorrecta</option>
                                            <option value="Paciente Equivocado">Paciente Equivocado</option>
                                            <option value="Duración del Tratamiento Incorrecta">Duración del Tratamiento Incorrecta</option>
                                            <option value="Monitorización Insuficiente del Tratamiento">Monitorización Insuficiente del Tratamiento</option>
                                            <option value="Medicamento Deteriorado">Medicamento Deteriorado</option>
                                            <option value="Falta de Cumplimiento por el Paciente">Falta de Cumplimiento por el Paciente</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="TipoOtro_error" style="display:none;">
                                        <strong style="font-size: 12px;">Otro</strong>
                                        <input id="error_tipootro" name="error_tipootro" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>




                                    <div class="col-md-6" id="erroneo_medic" style="display:none;">
                                        <strong style="font-size: 12px;">Medicamento Erróneo</strong>
                                        <select name="medicamento_erroneo" id="medicamento_erroneo" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Selección Inapropiada Del Medicamento">Selección Inapropiada Del Medicamento</option>
                                            <option value="Medicamento Innecesario">Medicamento Innecesario</option>
                                            <option value="Transcripción/Dispensación/Administración De Un Medicamento Diferente Al Prescrito">Transcripción/Dispensación/Administración De Un Medicamento Diferente Al Prescrito</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6" id="medicamento_inapropiada" style="display:none;">
                                        <strong style="font-size: 12px;">Selección Inapropiada Del Medicamento</strong>
                                        <select name="inapropiada_medic" id="inapropiada_medic" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Medicamento No Indicado/Apropiado Para El Diagnóstico Que Se Pretende Tratar">Medicamento No Indicado/Apropiado Para El Diagnóstico Que Se Pretende Tratar</option>
                                            <option value="Historia Previa De Alergia O Efecto Adverso Similar Con El Mismo Medicamento O Con Otros Similares">Historia Previa De Alergia O Efecto Adverso Similar Con El Mismo Medicamento O Con Otros Similares</option>
                                            <option value="Medicamento Contraindicado">Medicamento Contraindicado</option>
                                            <option value="Medicamento Inapropiado Para El Paciente Por Su Edad, Situación Clínica O Patología Subyacente">Medicamento Inapropiado Para El Paciente Por Su Edad, Situación Clínica O Patología Subyacente</option>
                                            <option value="Duplicidad Terapéutica">Duplicidad Terapéutica</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6" id="medicamento_omision" style="display:none;">
                                        <strong style="font-size: 12px;">Omisión de Dosis o de Medicamento</strong>
                                        <select name="omision" id="omision" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Falta De Prescripción De Un Medicamento Necesario">Falta De Prescripción De Un Medicamento Necesario</option>
                                            <option value="Omisión En La Transcripción">Omisión En La Transcripción</option>
                                            <option value="Omisión En La Dispensación">Omisión En La Dispensación</option>
                                            <option value=" Omisión En La Administración"> Omisión En La Administración</option>
                                        </select>
                                    </div>



                                    <div class="col-md-6" id="IncorrectasDosis" style="display:none;">
                                        <strong style="font-size: 12px;">Dosis Incorrecta</strong>
                                        <select name="dosis_incorrecta" id="dosis_incorrecta" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Dosis Mayor De La Correcta">Dosis Mayor De La Correcta</option>
                                            <option value="Dosis Menor De La Correcta">Dosis Menor De La Correcta</option>
                                            <option value="Dosis Extra">Dosis Extra</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="medicamento_dosisincorrecta" style="display:none;">
                                        <strong style="font-size: 12px;">Duración del Tratamiento Incorrecta</strong>
                                        <select name="tratamiento_incorrecta" id="tratamiento_incorrecta" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Dosis Mayor De La Correcta">Dosis Mayor De La Correcta</option>
                                            <option value="Dosis Menor De La Correcta">Dosis Menor De La Correcta</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="medicamento_monitorizacion" style="display:none;">
                                        <strong style="font-size: 12px;">Monitorización Insuficiente del Tratamiento</strong>
                                        <select name="monitorizacion_insuficiente" id="monitorizacion_insuficiente" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Falta De Revisión Clínica">Falta De Revisión Clínica</option>
                                            <option value="Falta De Controles Analíticos">Falta De Controles Analíticos</option>
                                            <option value="Interacción Medicamento-Medicamento">Interacción Medicamento-Medicamento</option>
                                            <option value="Interacción Medicamento-Alimento">Interacción Medicamento-Alimento</option>
                                        </select>
                                    </div>


                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Medicamento Involucrado</strong>
                                        <select name="realizo_investigacion_1" id="realizo_investigacion_1" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Medicamentos Involucrados Uno">Medicamentos Involucrados Uno</option>
                                            <option value="Medicamentos Involucrado Dos">Medicamentos Involucrado Dos</option>
                                            <option value="Medicamentos Involucrado Tres">Medicamentos Involucrado Tres</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4" id="un_medicamento1">
                                        <br>

                                        <fieldset>
                                            <legend>

                                                <div class="form-header">
                                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(242, 77, 19,0.5);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Medicamentos Involucrado Uno </h4>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Denominación Genérica </strong>
                                                        <input id="Denominacion_editar1" name="Denominacion_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 12px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Concentración</strong>
                                                        <input id="Concentracion_editar1" name="Concentracion_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Fabricante</strong>
                                                        <input id="Fabricante_editar1" name="Fabricante_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">No.Lote</strong>
                                                        <input id="Lote_editar1" name="Lote_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Caducidad</strong>
                                                        <input id="Caducidad_editar1" name="Caducidad_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Forma Farmacéutica</strong>
                                                        <input id="Forma_editar1" name="Forma_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Dosis</strong>
                                                        <input id="Dosis_editar1" name="Dosis_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Via de Administración</strong>
                                                        <input id="Via_Administracion_editar1" name="Via_Administracion_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Intervalo de Administración</strong>
                                                        <input id="Intervalo_Administracion_editar1" name="Intervalo_Administracion_editar1" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>


                                                </div>

                                            </legend>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-4" id="dos_medicamento_editar2">
                                        <br>

                                        <fieldset>
                                            <legend>

                                                <div class="form-header">
                                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(242, 77, 19,0.5);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Medicamentos Involucrado Dos</h4>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Denominación Genérica: </strong>
                                                        <input id="Denominacion_editar2" name="Denominacion_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Concentración</strong>
                                                        <input id="Concentracion_editar2" name="Concentracion_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Fabricante</strong>
                                                        <input id="Fabricante_editar2" name="Fabricante_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">No.Lote</strong>
                                                        <input id="Lote_editar2" name="Lote_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Caducidad</strong>
                                                        <input id="Caducidad_editar2" name="Caducidad_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Forma Farmacéutica</strong>
                                                        <input id="Forma_editar2" name="Forma_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Dosis</strong>
                                                        <input id="Dosis_editar2" name="Dosis_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Via de Administración</strong>
                                                        <input id="Via_Administracion_editar2" name="Via_Administracion_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Intervalo de Administración</strong>
                                                        <input id="Intervalo_Administracion_editar2" name="Intervalo_Administracion_editar2" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                </div>

                                            </legend>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-4" id="tres_medicamento_editar3">
                                        <br>

                                        <fieldset>
                                            <legend>



                                                <div class="form-header">
                                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(242, 77, 19,0.5);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Medicamentos Involucrado Tres</h4>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Denominación Genérica: </strong>
                                                        <input id="Denominacion_editar3" name="Denominacion_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Concentración</strong>
                                                        <input id="Concentracion_editar3" name="Concentracion_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Fabricante</strong>
                                                        <input id="Fabricante_editar3" name="Fabricante_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">No.Lote</strong>
                                                        <input id="Lote_editar3" name="Lote_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Caducidad</strong>
                                                        <input id="Caducidad_editar3" name="Caducidad_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 11px;">Forma Farmacéutica</strong>
                                                        <input id="Forma_editar3" name="Forma_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 11px;">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Dosis</strong>
                                                        <input id="Dosis_editar3" name="Dosis_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Via de Administración</strong>
                                                        <input id="Via_Administracion_editar3" name="Via_Administracion_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong style="font-size: 10px;">Intervalo de Administración</strong>
                                                        <input id="Intervalo_Administracion_editar3" name="Intervalo_Administracion_editar3" type="text" class="control form-control" value=""
                                                            style="font-size: 10px;">
                                                    </div>
                                                </div>

                                            </legend>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Se Realizo Investigación</strong>
                                        <select name="realizoInvestigacion" id="realizoInvestigacion" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>

                                    <div class="container" id="descrp_inve" style="display:none;">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <strong style="font-size: 12px;">Descripción de la Investigación</strong>
                                                <textarea id="descripcion_investigacion" name="descripcion_investigacion" type="text" class="control form-control" value=""
                                                    style="font-size: 12px;"
                                                    placeholder="Describa"></textarea>
                                            </div>

                                            <div class="col-md-6">
                                                <strong style="font-size: 12px;">Se Cuenta con Evidencia de la Investigación</strong>
                                                <select name="evidencia_inves" id="evidencia_inves" class="form-select" style="font-size: 12px;">
                                                    <option value="">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6" id="seleccion_archivo" style="display:none;">
                                                <label for="file" class="form-label" style="font-size: 12px; font-weight: bold;">Selecciona un archivo PDF:</label>
                                                <input type="file" name="file_1" id="file" class="form-control" accept=".pdf" required>
                                                <!-- <button type="submit" class="btn btn-primary mt-3" style="font-size: 12px; width: 100%;">Subir Archivo</button> -->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Categoria</strong>
                                        <select name="Medicamento_categoria" id="Medicamento_categoria" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Error Potencial o No Daño">Error Potencial o No Daño</option>
                                            <option value="Error Sin Daño">Error Sin Daño</option>
                                            <option value="Error Con Daño">Error Con Daño</option>
                                            <option value="Error Mortal">Error Mortal</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="potencialError" style="display:none;">
                                        <strong style="font-size: 12px;">Error Potencial o No Daño</strong>
                                        <select name="error_potencial" id="error_potencial" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Categoría A Circunstancias O Incidentes Con Capacidad De Causar Error">Categoría A Circunstancias O Incidentes Con Capacidad De Causar Error</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="errorsindaño" style="display:none;">
                                        <strong style="font-size: 12px;">Error Sin Daño</strong>
                                        <select name="Error_sindaño" id="Error_sindaño" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Categoría B El Error Se Produjo, Pero No Alcanzó Al Paciente">Categoría B El Error Se Produjo, Pero No Alcanzó Al Paciente</option>
                                            <option value="Categoría C El Error Alcanzó Al Paciente, Pero No Le Causó Daño">Categoría C El Error Alcanzó Al Paciente, Pero No Le Causó Daño</option>
                                            <option value="Categoría D El Error Alcanzó Al Paciente Y No Le Causó Daño, Pero Precisó Monitorización Y/O Intervención Para Comprobar Que No Había Sufrido Daño">
                                                Categoría D El Error Alcanzó Al Paciente Y No Le Causó Daño, Pero Precisó Monitorización Y/O Intervención Para Comprobar Que No Había Sufrido Daño</option>
                                        </select>
                                    </div>

                                    <div class="col md-6" id="ErrorconDaño" style="display:none;">
                                        <strong style="font-size: 12px;">Error Con Daño</strong>
                                        <select name="error_condaño" id="error_condaño" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Categoría E El Error Contribuyó O Causó Daño Temporal Al Paciente Y Precisó Intervención
                                            ">Categoría E El Error Contribuyó O Causó Daño Temporal Al Paciente Y Precisó Intervención</option>
                                            <option value="Categoría F El Error Contribuyó O Causó Daño Temporal Al Paciente Y Precisó O Prolongó La Hospitalización
                                            ">Categoría F El Error Contribuyó O Causó Daño Temporal Al Paciente Y Precisó O Prolongó La Hospitalización</option>
                                            <option value="Categoría G El Error Contribuyó O Causó Daño Permanente Al Paciente
                                            ">Categoría G El Error Contribuyó O Causó Daño Permanente Al Paciente</option>
                                            <option value="Categoría H El Error Comprometió La Vida Del Paciente Y Se Precisó Intervención Para Mantener Su Vida5
                                            ">Categoría H El Error Comprometió La Vida Del Paciente Y Se Precisó Intervención Para Mantener Su Vida5</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="ErrorMortal" style="display:none;">
                                        <strong style="font-size: 12px;">Error Mortal</strong>
                                        <select name="Error_Mortal" id="Error_Mortal" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Categoría I El Error Contribuyó O Causó La Muerte Del Paciente">Categoría I El Error Contribuyó O Causó La Muerte Del Paciente</option>
                                        </select>
                                    </div>







                                    <div class="row" id="analsisicausaraiz" style="display:none;">
                                        <div class="col-md-6" id="analisis_causaraiz">
                                            <strong style="font-size: 12px;">Análisis Causa Raíz</strong>
                                            <select name="analisis_causa" id="analisis_causa" class="form-select" style="font-size: 12px;">
                                                <option value="Seleccione">Seleccione</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>


                                        <div class="col-md-12" id="descri_analisisraiz" style="display:none;">
                                            <strong style="font-size: 12px;">Descripción</strong>
                                            <textarea id="raiz_descrip" name="raiz_descrip" type="text" class="control form-control" value=""
                                                style="font-size: 12px;"
                                                placeholder="Describa"></textarea>
                                        </div>


                                        <div class="col-md-6" id="archivocausaraiz" style="display:none;">
                                            <label for="file" class="form-label" style="font-size: 12px; font-weight: bold;">Selecciona un archivo PDF:</label>
                                            <input type="file" name="file_2" id="file" class="form-control" accept=".pdf" required>
                                            <!-- <button type="submit" class="btn btn-primary mt-3" style="font-size: 12px; width: 100%;">Subir Archivo</button> -->
                                        </div>

                                    </div>
                                    <div class="container" id="investi_estrate" style="display:none;">


                                        <div class="row">

                                            <div class="col-md-6" id="Investigacionconclusion">
                                                <strong style="font-size: 12px;">Conclusión De La Investigación</strong>
                                                <select name="conclusion_investigacion" id="conclusion_investigacion" class="form-select" style="font-size: 12px;">
                                                    <option value="Seleccione">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12" id="descri_conclusion" style="display:none;">
                                                <strong style="font-size: 12px;">Descripción de la Investigación</strong>
                                                <textarea id="conclusiondes_investigacion" name="conclusiondes_investigacion" type="text" class="control form-control" value=""
                                                    style="font-size: 12px;"
                                                    placeholder="Describa"></textarea>
                                            </div>

                                            <div class="col-md-6">
                                                <strong style="font-size: 12px;">Estrategias De Prevención</strong>
                                                <select name="estrategia_preve" id="estrategia_preve" class="form-select" style="font-size: 12px;">
                                                    <option value="Seleccione">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>





                                            <div class="col-md-12" id="descri_prevencion" style="display:none;">
                                                <strong style="font-size: 12px;">Descripción</strong>
                                                <textarea id="prevencion_investigacion" name="prevencion_investigacion" type="text" class="control form-control" value=""
                                                    style="font-size: 12px;"
                                                    placeholder="Describa"></textarea>
                                            </div>


                                        </div> <!-- CIERRE DE SEGUIMIENTO  -->

                                    </div>


                                    <div class="form-header">
                                        <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(242, 77, 19);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Estatus</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Estatus</strong>
                                        <select name="Estatus" id="Estatus" class="form-select" style="font-size: 12px;">
                                            <option value="">Seleccione</option>
                                            <option value="Bajo Evaluación">Bajo Evaluación</option>
                                            <option value="Cerrado">Cerrado</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 12px;">Nombre del Encargado de Enfermeria </strong>
                                        <input id="nombre_enfermeria" name="nombre_enfermeria" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 12px;">Nombre del Encargado de Área Médica</strong>
                                        <input id="nombre_medico" name="nombre_medico" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 12px;">Nombre del Encargado CISFA</strong>
                                        <input id="nombre_cisfa" name="nombre_cisfa" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>


                                    <div class="col-md-3">
                                        <strong style="font-size: 12px;">Nombre del Personal que Elabora</strong>
                                        <input id="nombre_personallabora" name="nombre_personallabora" type="text" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>






                                    <!-- CIERRE DE SEGUIMIENTO -->
                                </div>
                            </legend>
                        </fieldset>
                    </div>










                </div> <!--Row de Registro -->





            </legend>
        </fieldset> <br>

        <div style="display: flex; justify-content: flex-end; align-items: center;">
            <button type="submit" class="btn btn-primary" style="font-size: 14px; padding: 6px 14px;">Editar</button>
        </div> <br>
    </div>






    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/scripteditar.js"></script>



</body>

</html>