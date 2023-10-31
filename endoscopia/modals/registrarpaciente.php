<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header custom-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
                <i class="bi bi-person-plus"></i> Registrar Paciente
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

      <div class="modal-body">
         <!--En la siguiente línea de código se realiza la incersión en la BD-->
         <form id="endoscopia_form" autocomplete="off" method="POST" enctype="multipart/form-data" >

            <div style="background-color: rgb(0, 139, 139,0.7);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Procedimientos Endoscopicos</h6> 
            </div> 

            <div class="row">
                <div class="col-md-3">
                    <strong style="font-size:14px;">Fecha</strong>
                    <input type="date" id="fecha_registro" name="fecha_registro" class="form-control" value="<?php echo date('Y-m-d'); ?>" style="font-size:14px;" readonly>
                </div>

                <div class="col-md-3" id="idcurp">
                    <strong style="font-size:14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size:14px;">
                </div>

                <div class="col-md-3" id="idnombre_paciente">
                    <strong style="font-size:14px;">Nombre Completo</strong>
                    <input id="nombre_paciente" name="nombre_paciente" onblur="calcularEdad();" type="text" class="control form-control"  placeholder="Nombre(s) Apellidos"   style="font-size:14px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date"  onblur="curp2date();" class="control form-control" style="font-size:14px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" style="font-size:14px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size:14px;" readonly>
                </div>
            </div> <!-- div row-->

<!-- ***********************************ATENCIÓN MÉDICA*********************************** -->

            <div class="col-md-12">
                <div class="form-header">
                    <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(0, 139, 139, 0.7);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        Datos de hospitalización</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <strong style="font-size:14px;">Diagnóstico</strong>
                    <select name="diagnostico" id="diagnostico" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione...</option>
                        <option value="Angioectasia Vascular">Angioectasia Vascular</option>
                        <option value="Bulbo Duodenitis">Bulbo Duodenitis</option>
                        <option value="Candidiasis Esofágica">Candidiasis Esofágica</option>
                        <option value="Chron">Chron</option>
                        <option value="Colitis Inespecífica">Colitis Inespecífica</option>
                        <option value="Desgarro Union  Esófago Gástrica">Desgarro Unión  Esófago Gástrica</option>
                        <option value="Diverticulosos Colonica">Diverticulosos Colonica</option>
                        <option value="Esofagitis">Esofagitis</option>
                        <option value="Esófago De Barrett">Esófago De Barrett</option>
                        <option value="Estómago Retencionista No Obstructivo">Estómago Retencionista No Obstructivo</option>
                        <option value="Fístula Colo Vaginal">Fístula Coló Vaginal</option>
                        <option value="Fístula Colo Vesical">Fístula Coló Vesical</option>
                        <option value="Gastritis Alcalina">Gastritis Alcalina</option>
                        <option value="Gastritis Cronica Erosiva">Gastritis Cronica Erosiva</option>
                        <option value="Gastritis Folicular">Gastritis Folicular</option>
                        <option value="Hernia Hiatal">Hernia Hiatal</option>
                        <option value="Ileitis">Ileitis</option>
                        <option value="Metaplasia Intestinal">Metaplasia Intestinal</option>
                        <option value="Polipo Colonico">Pólipo Colonico</option>
                        <option value="Polipo Gastrico">Pólipo Gástrico</option>
                        <option value="Porctitis Post Radiacion">Porctitis Post Radiación</option>
                        <option value="Reflujo Duodeno Gastrico">Reflujo Duodeno Gástrico</option>
                        <option value="Transtorno Motor Esofagico">Transtorno Motor Esofagico</option>
                        <option value="Tumor De Colon">Tumor De Colon</option>
                        <option value="Tumor De Estomago">Tumor De Estómago</option>
                        <option value="Tumor Esofagico">Tumor Esofágico</option>
                        <option value="Ulcera Duodenal">Úlcera Duodenal</option>
                        <option value="Ulcera Gastrica">Úlcera Gastrica</option>
                        <option value="Varices Esofagicas">Varices Esofagicas</option>
                        <option value="Varices Gastricas">Varices Gastricas</option>     
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Cama</strong>
                    <input type="number" name="cama" id="cama" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Días de EIH</strong>
                    <input type="number" name="dias_eih" id="dias_eih" class="form-control" style="font-size:14px;">
                </div>
            </div> <!-- div row-->

<!-- ***********************************LABORATORIOS*********************************** -->

            <div class="col-md-12">
                <div class="form-header">
                    <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(0, 139, 139, 0.7);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        Laboratorios</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <strong style="font-size:14px;">HB</strong>
                    <input type="number" name="hb" id="hb" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size:14px;">HCTO</strong>
                    <input type="number" name="hcto" id="hcto" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size:14px;">INR</strong>
                    <input type="number" name="inr" id="inr" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;" >Plaquetas</strong>
                    <input type="number" name="plaquetas" id="plaquetas" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Cultivo</strong>
                    <select name="cultivo" id="cultivo" class="form-control" style="font-size:14px;">
                        <option value="0">Selecciones</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div> <!-- div row-->


<!-- **********************************ESTUDIO SOLICITADO*********************************** -->
            <div class="col-md-12">
                <div class="form-header">
                    <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(0, 139, 139, 0.7);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        Estudio Solicitado</h5>
                </div>
            </div>

            <div class="row">

            
                <div class="col-md-4">
                    <strong style="font-size:14px;">Prioridad</strong>
                    <select name="prioridad" id="prioridad" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione...</option>
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Servicio</strong>
                    <select name="medico_endo" id="medico_endo" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione...</option>
                        <option value="Medicina interna">Medicina Interna</option>
                        <option value="UCIA">UCIA</option>
                        <option value="UTIA">UTIA</option>
                        <option value="Urgencias">Urgencias</option>
                        <option value="Cirugia General">Cirugía General</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size:14px;">Estatus de Solicitud</strong>
                    <select name="estatus_solicitud" id="estatus_solicitud" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione...</option>
                        <option value="Programada">Programada</option>
                        <option value="Sin programar">Sin Programar</option>
                        <option value="Urgencia">Urgencia</option>
                        <option value="Realizada">Realizada</option>
                        <option value="Pospuesta">Pospuesta</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Fecha Programada</strong>
                    <input type="date" name="fecha_programada" id="fecha_programada" class="form-control" style="font-size:14px;">
                </div>

                <!-- se agrega procedimiento realizado-->
                <div class="col-md-8">
                    <strong style="font-size:14px;">Procedimiento</strong>
                    <select name="procedimiento_realizado" id="procedimiento_realizado" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione...</option>
                        <option value="Cápsula Endoscópica">Cápsula Endoscópica</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópica ">Colangiopancreatografia Retrograda Endoscópica </option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con  Spyglass Y Toma De Biopsias">Colangiopancreatografia Retrograda Endoscópíca Con  Spyglass Y Toma De Biopsias</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Ablación Por Radiofrecuencia En Colédoco">Colangiopancreatografia Retrograda Endoscópíca Con Ablación Por Radiofrecuencia En Colédoco</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Cepillado Biliar">Colangiopancreatografia Retrograda Endoscópíca Con Cepillado Biliar</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Colocación De Endoprótesis">Colangiopancreatografia Retrograda Endoscópíca Con Colocación De Endoprótesis</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Colocacion De Prótesis Metálica Biliar">Colangiopancreatografia Retrograda Endoscópíca Con Colocacion De Prótesis Metálica Biliar</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Colocación De Prótesis Pancreática">Colangiopancreatografia Retrograda Endoscópíca Con Colocación De Prótesis Pancreática</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Dilatación De Via Biliar">Colangiopancreatografia Retrograda Endoscópíca Con Dilatación De Via Biliar</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Esfinteroplastia">Colangiopancreatografia Retrograda Endoscópíca Con Esfinteroplastia</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Esfinterotomia">Colangiopancreatografia Retrograda Endoscópíca Con Esfinterotomia</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Esfinterotomia Corta Y Esfinteroplastia">Colangiopancreatografia Retrograda Endoscópíca Con Esfinterotomia Corta Y Esfinteroplastia</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Litoextracción">Colangiopancreatografia Retrograda Endoscópíca Con Litoextracción</option>
                        <option value="Colangiopancreatografia Retrograda Endoscópíca Con Spyglass Y Litotripsia Con Autolith">Colangiopancreatografia Retrograda Endoscópíca Con Spyglass Y Litotripsia Con Autolith</option>
                        <option value="Colonoscopia Diagnostica">Colonoscopia Diagnostica</option>
                        <option value="Colonoscopia Diagnostica Con Toma De Biopsias">Colonoscopia Diagnostica Con Toma De Biopsias</option>
                        <option value="Colonoscopia Terapeutica">Colonoscopia Terapeutica</option>
                        <option value="Colonoscopia Terapeutica Con Cierre Primario De Fístula">Colonoscopia Terapeutica Con Cierre Primario De Fístula</option>
                        <option value="Colonoscopia Terapeutica Con Coagulación Argón Plasma">Colonoscopia Terapeutica Con Coagulación Argón Plasma</option>
                        <option value="Colonoscopia Terapeutica Con Colocación De Prótesis Metálica">Colonoscopia Terapeutica Con Colocación De Prótesis Metálica</option>
                        <option value="Colonoscopia Terapeutica Con Control De Hemorragia Con Escleroterapia Con Adrenalina">Colonoscopia Terapeutica Con Control De Hemorragia Con Escleroterapia Con Adrenalina</option>
                        <option value="Colonoscopia Terapeutica Con Control De Hemorragia Con Hemoclip">Colonoscopia Terapeutica Con Control De Hemorragia Con Hemoclip</option>
                        <option value="Colonoscopia Terapeutica Con Control De Hemorragia Con Ovesco">Colonoscopia Terapeutica Con Control De Hemorragia Con Ovesco</option>
                        <option value="Colonoscopia Terapeutica Con Dilatación Colónica">Colonoscopia Terapeutica Con Dilatación Colónica</option>
                        <option value="Colonoscopia Terapeutica Con Polipectomia">Colonoscopia Terapeutica Con Polipectomia</option>
                        <option value="Enteroscopia De Doble Balón Con Toma De Biopsias">Enteroscopia De Doble Balón Con Toma De Biopsias</option>
                        <option value="Enteroscopia De Doble Balón Terapéutica Con Argón Plasma">Enteroscopia De Doble Balón Terapéutica Con Argón Plasma</option>
                        <option value="Enteroscopia De Doble Balón Terapéutica Con Polipectomia">Enteroscopia De Doble Balón Terapéutica Con Polipectomia</option>
                        <option value="Gastrostomia Endsocópica Percutánea">Gastrostomia Endsocópica Percutánea</option>
                        <option value="Panendoscopia Diagnostica">Panendoscopia Diagnóstica</option>
                        <option value="Panendoscopia Diagnostica Con Toma De Biopsias">Panendoscopia Diagnóstica Con Toma De Biopsias</option>
                        <option value="Panendoscopia Terapeutica">Panendoscopia Terapeutica</option>
                        <option value="Panendoscopia Terapeutica Con Ablacion Por Radiofrecuencia">Panendoscopia Terapeutica Con Ablacion Por Radiofrecuencia</option>
                        <option value="Panendoscopia Terapéutica Con Cierre De Fístula Duodenal">Panendoscopia Terapéutica Con Cierre De Fístula Duodenal</option>
                        <option value="Panendoscopia Terapeutica Con Cierre Primario De Fístula Esofágica">Panendoscopia Terapeutica Con Cierre Primario De Fístula Esofágica</option>
                        <option value="Panendoscopia Terapéutica Con Coagulación Argón Plasma">Panendoscopia Terapéutica Con Coagulación Argón Plasma</option>
                        <option value="Panendoscopia Terapeutica Con Colocacion De Prótesis Esofágica">Panendoscopia Terapeutica Con Colocacion De Prótesis Esofágica</option>
                        <option value="Panendoscopia Terapeutica Con Colocacion De Prótesis Pilórica">Panendoscopia Terapeutica Con Colocacion De Prótesis Pilórica</option>
                        <option value="Panendoscopia Terapeutica Con Colocación De Prótesis Tipo Axios">Panendoscopia Terapeutica Con Colocación De Prótesis Tipo Axios</option>
                        <option value="Panendoscopia Terapéutica Con Control De Hemorragia Con Hemoclip">Panendoscopia Terapéutica Con Control De Hemorragia Con Hemoclip</option>
                        <option value="Panendoscopia Terapéutica Con Control De Hemorragia Con Sistema Ovesco">Panendoscopia Terapéutica Con Control De Hemorragia Con Sistema Ovesco</option>
                        <option value="Panendoscopia Terapéutica Con Control De Sangrado Con Escleroterapia Con Adrenalina">Panendoscopia Terapéutica Con Control De Sangrado Con Escleroterapia Con Adrenalina</option>
                        <option value="Panendoscopia Terapéutica Con Control De Sangrado Con Hemospray">Panendoscopia Terapéutica Con Control De Sangrado Con Hemospray</option>
                        <option value="Panendoscopia Terapeutica Con Dilatación Duodenal">Panendoscopia Terapeutica Con Dilatación Duodenal</option>
                        <option value="Panendoscopia Terapeutica Con Dilatación Esofágica">Panendoscopia Terapeutica Con Dilatación Esofágica</option>
                        <option value="Panendoscopia Terapeutica Con Dilatación Pilórica">Panendoscopia Terapeutica Con Dilatación Pilórica</option>
                        <option value="Panendoscopia Terapéutica Con Escleroterapia Con Cianocrilato">Panendoscopia Terapéutica Con Escleroterapia Con Cianocrilato</option>
                        <option value="Panendoscopia Terapeutica Con Extracción De Cuerpo Extraño">Panendoscopia Terapeutica Con Extracción De Cuerpo Extraño</option>
                        <option value="Panendoscopia Terapéutica Con Ligadura De Várices Esofágicas">Panendoscopia Terapéutica Con Ligadura De Várices Esofágicas</option>
                        <option value="Panendoscopia Terapéutica Con Polipectomia">Panendoscopia Terapéutica Con Polipectomia</option>
                        <option value="Panendoscopia Terapeutica Con Resección Endoscópica De La Mucosa">Panendoscopia Terapeutica Con Resección Endoscópica De La Mucosa</option>
                        <option value="Panendoscopia Terapéutica Con Retiro De Endoprótesis Biliar">Panendoscopia Terapéutica Con Retiro De Endoprótesis Biliar</option>
                        <option value="Panendoscopia Terapéutica Con Retiro De Gastrostomia">Panendoscopia Terapéutica Con Retiro De Gastrostomia</option>
                        <option value="Panendoscopia Terapeutica Z-Poem">Panendoscopia Terapeutica Z-Poem</option>
                    </select>
                </div> <!-- <div class="row">-->

<!--******************************************************* MATERIALES *****************************************-->
                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(0, 139, 139, 0.7);
                                color: aliceblue;
                                margin-top:5px;
                                font-size: 14px;">
                                Materiales</h5>
                    </div>
                </div>

                



                    <div class="row">

                        <div class="col-md-4">
                            <strong style="font-size:14px;" >Aguja de Escleroterapia</strong>
                            <input type="number" name="Aguja_Escleroterapia" id="Aguja_Escleroterapia" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size:14px;">Argon Plasma</strong>
                            <input type="number" name="Argon_Plasma" id="Argon_Plasma" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Asa de Polipectomia</strong>
                            <input type="number" name="Asa_de_Polipectomia" id="Asa_de_Polipectomia" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>
                        
                        <div class="col-md-4">
                            <strong style="font-size:14px;">Balon Cre</strong>
                            <input type="number" name="Balon_Cre" id="Balon_Cre" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Guia Hidrofilica</strong>
                            <input type="number" name="Guia_Hidrofilica" id="Guia_Hidrofilica" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Hemoclips</strong>
                            <input type="number" name="Hemoclips" id="Hemoclips" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;" >Kit de Ligadura Microtech</strong>
                            <input type="number" name="Kit_Ligadura_microtech" id="Kit_Ligadura_microtech" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-8">
                            <strong style="font-size:14px;">Kit de Gastrotomia Endoscopica Pull</strong>
                            <input type="number" name="Kit_Gastrotomia_Endoscopica_Pull" id="Kit_Gastrotomia_Endoscopica_Pull" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Kit de Ligadura</strong>
                            <input type="number" name="Kit_Ligadura" id="Kit_Ligadura" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size:14px;" >Pinzas Biopsia</strong>
                            <input type="number" name="Pinza_Biopsia" id="Pinza_Biopsia" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Ovesco</strong>
                            <input type="number" name="Ovesco" id="Ovesco" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-8">
                            <strong style="font-size:14px;">Protesis Esofágica Wallflex Parcialmente Cubierta</strong>
                            <input type="number" name="Protesis_Esofagica_Wallflex" id="Protesis_Esofagica_Wallflex" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Sonda FiAPC</strong>
                            <input type="number" name="Sonda_FiAPC" id="Sonda_FiAPC" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Sonda de Gastrotomia</strong>
                            <input type="number" name="Sonda_de_Gastrotomia" id="Sonda_de_Gastrotomia" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:14px;">Sistema Ovesco</strong>
                            <input type="number" name="Sistema_Ovesco" id="Sistema_Ovesco" class="form-control" placeholder="0" style="font-size:14px;">
                        </div>
                    </div>
<!--*********************************SEGUIMIENTO********************************-->
                    <div class="col-md-12">
                        <div class="form-header">
                            <h5 class="form-title"
                                    style="text-align: center;
                                    background-color: rgb(0, 139, 139, 0.7);
                                    color: aliceblue;
                                    margin-top:5px;
                                    font-size: 14px;">
                                Seguimiento</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:14px;">Fecha de Preprogramacion y/o programacion</strong>
                            <input type="date" name="fecha_pre_programada" id="fecha_pre_programada" class="form-control" style="font-size:14px;">
                        </div>
                        
                        <div class="col-md-6">
                            <strong style="font-size:14px;">Fecha de realización de estudios</strong>
                            <input type="date" name="fecha_estudio" id="fecha_estudio"class="form-control" style="font-size:14px;">
                        </div>


                        
                        <div class="col-md-12">
                            <strong style="font-size:14px;">Defunción</strong>
                            <select name="defuncion" id="defuncion" class="form-control" style="font-size:14px;">
                                <option value="0">Seleccione</option>
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                        <br>
                            <div class="input-group">
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                        </div>


                    </div> <!-- div del row-->
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>


<script src="js/script.js"></script>
<script src="js/scriptmodal.js"></script>


<script>
        // Obtener el elemento select
        var selectPrioridad = document.getElementById("prioridad");

        // Agregar un evento "change" al select
        selectPrioridad.addEventListener("change", function () {
            // Obtener el valor seleccionado
            var selectedValue = selectPrioridad.value;

            // Cambiar el color de fondo basado en el valor seleccionado
            if (selectedValue === "Alta") {
                selectPrioridad.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
            } else if (selectedValue === "Media") {
                selectPrioridad.style.backgroundColor = "rgb(255, 255, 0, 0.30)";
            } else if (selectedValue === "Baja") {
                selectPrioridad.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
            } else {
                selectPrioridad.style.backgroundColor = "";
            }
        });
    </script>