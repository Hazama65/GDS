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
                            </select>
                        </div>
    
    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Turno</strong>
                            <select name="Turno" id="Turno" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Nocturno">Nocturno</option>
                                <option value="Jornada Acumulada">Jornada Acumulada</option>
                            </select>
                        </div>
    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Servicio</strong>
                            <input type="text" class="control form-control" id="servicio" name="servicio" style="font-size: 13px;">
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
    
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div><!--DIV DEL BODY  -->

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>