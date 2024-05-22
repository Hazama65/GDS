<div class="modal fade" id="Calculadoras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard-plus modal-title fs-4" id="exampleModalLabel">Registro Paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <!-- Datos de llegada del paciente  -->

                <div class="row">

                    <div class="form-header">
                        <h3 class="form-title" style="text-align: center;
                            background-color:rgb(106, 158, 218);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Datos del Paciente</h3>
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Nombre del Paciente</strong>
                        <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>



                    <div class="col-md-3">
                        <strong style="font-size: 13px;">CURP</strong>
                        <input id="curp" name="curp" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                        <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                    </div>
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Edad</strong>
                        <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Sexo</strong>
                        <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                    </div>







                </div>




            </div> <!-- DIV ROW LINEA 11 -->


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> <br>
                <button type="submit" class="btn btn-primary">Registrar</button>

            </div>

        </div><!--DIV DEL BODY  -->


    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>