<!-- Modal -->
<div class="modal fade" id="registromedicamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bitacoraLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <i class="bi bi-person-plus-fill"></i>Registro Medicamento
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                border-radius: 14px;
                background-color: rgb(129, 99, 139);
                color: aliceblue;
                margin-top: 16px;
                font-size: 16px;
                text-align: center;">Registro Medicamento</h4>
                </div>

                <fieldset class="fieldset-otros">
                    <legend>

                        <div class="row">

                            <div class="col-md-6">
                                <strong style="font-size: 12px;">Tipo de Clave</strong>
                                <select name="Tipo_clave" id="Tipo_clave" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="HRAEI">HRAEI</option>
                                    <option value="GC">GC</option>
                                    <option value="SADMI">SADMI</option>
                                    <option value="CENAPRECE">CENAPRECE</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <strong style="font-size:12px;">Clave</strong>
                                <div class="input-group">
                                    <input id="clave_HRAEI" name="clave_HRAEI" type="text" class="control form-control" style="font-size:12px;" readonly>
                                    <input id="numero_clave_HRAEI" name="numero_clave_HRAEI" type="number" class="control form-control" placeholder="Núm." style="width: 60px; font-size:12px;">
                                </div>
                            </div>

                            <div class="row"></div> <br>

                            <div class="col-md-12">
                                <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción</label>
                                <textarea name="corto_descrip" id="corto_descrip" class="form-control" style="font-size: 12px;"></textarea>
                            </div>

                            <div class="row"></div> <br>


                            <div class="col-md-4">
                                <strong style="font-size:12px;">Existencia</strong>
                                <div class="input-group">
                                    <input id="fecha_existencia" name="fecha_existencia" type="date" class="control form-control" style="font-size:12px;" readonly>
                                    <input id="num_existencia" name="num_existencia" type="number" class="control form-control" placeholder="Núm." style="width: 60px; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <strong style="font-size:12px;">CPM </strong>
                                <div class="input-group">
                                    <strong style="font-size:11px;">Periodo-Inicio: </strong> <br>
                                    <input class="form-control" type="date" name="fecha_primer" id="fecha_primer" style="font-size:12px;">
                                    <strong style="font-size:11px;">.Periodo-Final: </strong>
                                    <input class="form-control" type="date" name="fecha_segundo" id="fecha_segundo" style="font-size:12px;">
                                    <input id="num_cpm" name="num_cpm" type="number" class="control form-control" placeholder="Núm." style="width: 60px; font-size:12px;">
                                </div>
                            </div>
                            <br> <br><br>

                        

                            <div class="col-md-4">
                                <strong style="font-size:12px;">Meses de Existencia</strong>
                                <input id="Meses_existencia" name="Meses_existencia" type="number" class="control form-control" style="font-size:12px;" readonly>
                            </div>

         


                            <div class="col-md-4">
                                <strong style="font-size: 12px;">Observación</strong>
                                <select name="observacion" id="observacion" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="CRITICA">CRITICA</option>
                                    <option value="NO UTILIZADA">NO UTILIZADA</option>
                                    <option value="ONCOLOGICA">ONCOLOGICA</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 12px;">Estatus</strong>
                                <select name="Estatus" id="Estatus" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="CATALOGO ACTIVO">CATALOGO ACTIVO</option>
                                    <option value="NO UTILIZADA">NO UTILIZADA</option>
                                </select>
                            </div>


                        </div>

                    </legend>
                </fieldset>




            </div> <!--DIV DEL MODAL/ BODY-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>