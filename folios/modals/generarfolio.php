<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header custom-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
            <i class="bi bi-file-person"></i>
            Registrar Paciente</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="container">
        
        <form id="form_folio" method="post">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(230, 230, 250);
                        color: rgb(75, 0, 130, 0.5);
                        margin-top:5px;
                        font-size: 13px;">
                        Generales</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Fecha y Hora:</strong>
                        <input type="datetime-local" class="form-control" id="fechaHora" name="fechaHora" required>
                    </div>
                </div>
        
                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Servicio:</strong>
                        <input type="text" class="form-control" id="servicio" name="servicio" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Médico Valora:</strong>
                        <input type="text" class="form-control" id="medico" name="medico" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Médico Autoriza:</strong>
                        <input type="text" class="form-control" id="autoriza" name="autoriza" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(230, 230, 250);
                        color: rgb(75, 0, 130, 0.5);
                        margin-top:5px;
                        font-size: 13px;">
                        Datos del Paciente</h5>
                    </div>
                </div> 

                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Apellido Paterno:</strong>
                        <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Apellido Materno:</strong>
                        <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Nombre(s):</strong>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Edad:</strong>
                        <input type="text" class="form-control" id="edad" name="edad" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="Sin Registro">Sin Registro...</option>
                        <option value="HOMBRE">HOMBRE</option>
                        <option value="MUJER">MUJER</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Diagnóstico:</strong>
                        <input type="text" class="form-control" id="diagnostico" name="diagnostico" required>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Fecha de Llegada:</strong>
                        <input type="datetime-local" class="form-control" id="fechaLlegada" name="fechaLlegada" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong style="font-size: 14px;">Folio:</strong>
                        <input type="text" class="form-control" id="folio" name="folio" readonly>
                    </div>
                </div>
            </div>
            <br>

            <button type="button" class="btn btn-outline-primary btn-sm" onclick="generarFolio()">Generar Folio</button>
    </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
    </div>
</div>