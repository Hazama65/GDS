<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-journal-medical modal-title fs-4" id="exampleModalLabel">Registro Guardias</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="EG_form"  method="POST">

                    
                    <!-- Datos de llegada del paciente  -->
                    <div class="row">
    
    
                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Trabajador Sustituido</strong>
                            <input id="enlace_numeroempleado" name="enlace_numeroempleado" type="text" class="control form-control" style="font-size: 13px;">
                        </div>
    
    
                        <div class="col-md-6" id="idnombre">
                            <strong style="font-size: 14px;">Trabajador Sustituto</strong>
                            <input id="nombre" name="nombre" type="text" class="control form-control" style="font-size: 13px;">
                        </div>
    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Nivel Académico</strong>
                            <select name="nivel_academico" id="nivel_academico" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Postécnico">Postécnico</option>
                                <option value="Licenciatura">Licenciatura</option>
                                <option value="Posgrado">Posgrado</option>
                                <option value="Maestría">Maestría</option>

                            </select>
                        </div>
    
    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Turno</strong>
                            <select name="Turno" id="Turno" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Nocturno A">Nocturno A</option>
                                <option value="Nocturno B">Nocturno B</option>
                                <option value="Nocturno Especíal">Nocturno Especíal</option>

                            </select>
                        </div>
    

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Servicio</strong>
                            <select name="servicio" id="servicio" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Críticas">Críticas</option>
                                <option value="Clínicas">Clínicas</option>
                                <option value="Quirúrgicas">Quirúrgicas</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="servicio_critica" style="display: none;">
                            <strong style="font-size: 14px;">Críticas</strong>
                            <select name="critica" id="critica" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Urgencias">Urgencias</option>
                                <option value="UCIA">UCIA</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="servicio_clinica" style="display: none;">
                            <strong style="font-size: 14px;">Clínicas</strong>
                            <select name="clinicas" id="clinicas" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Medicina Interna">Medicina Interna</option>
                                <option value="Hematología">Hematología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Oncopediatría ">Oncopediatría </option>
                                <option value="Hemodiálisis">Hemodiálisis</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="servicio_quirurgica" style="display: none;">
                            <strong style="font-size: 14px;">Quirúrgicas</strong>
                            <select name="quirurgicas" id="quirurgicas" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="TyO">TyO</option>
                                <option value="Neurocirugía">Neurocirugía</option>
                                <option value="Cirugía oncológica">Cirugía oncológica</option>
                                <option value="Cirugía Cardiotorácica">Cirugía Cardiotorácica</option>
                                <option value="Cirugía General">Cirugía General</option>
                                <option value="Ortopédica">Ortopédica</option>
                                <option value="Ginecología y Obstetricia">Ginecología y Obstetricia</option>
                                <option value="Urología">Urología</option>
                                <option value="Trasplante">Trasplante</option>
                            </select>
                        </div>


    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha de Tramite</strong>
                            <input type="date" class="control form-control" id="fecha_tramite" name="fecha_tramite" style="font-size: 13px;">
                        </div>
    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha de Suplencia</strong>
                            <input type="date" class="control form-control" id="fecha_suplencia" name="fecha_suplencia" style="font-size: 13px;">
                        </div>
    
                        
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Nombre de Quien Autoriza </strong>
                            <input type="text" class="control form-control" id="autoriza" name="autoriza" style="font-size: 13px;">
                        </div>
    
    
    
                    </div> <!-- DIV ROW LINEA 13 -->

                    </div><!--DIV DEL BODY  -->
    
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

          

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>