<!-- Modal -->
<div class="modal fade" id="bitacora" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bitacoraLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <i class="bi bi-person-plus-fill"></i>Registro Paciente
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
                text-align: center;">Proceso Escuchar - Escribir - Leer - Confirmar</h4>
                </div>

                <fieldset>
                    <legend>

                        <div class="row">

                          
                            <div class="col-md-4">
                                <strong style="font-size:12px;">Nombre Paciente</strong>
                                <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" placeholder="Nombre(s) Apellidos" style="font-size:12px;">
                            </div>

                        
                            <br>
                            <br>

                            <div class="col-md-4" id="indicacion_res">
                                <strong style="font-size: 12px;">Área que emite resultado </strong>
                                <select name="AreaResultado" id="AreaResultado" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Imagen">Imagen</option>
                                    <option value="Laboratorio">Laboratorio</option>
                                    <option value="Patología">Patología</option>
                                    <option value="Molecular">Molecular</option>
                                </select>
                            </div>


                            <div class="col-md-4">
                                <strong  style="font-size: 12px;">Fecha y hora de Solicitud del Estudio </strong>
                                <input class="form-control" type="datetime-local" name="fecha_estudio" id="fecha_estudio" style="font-size:12px;">
                            </div>


                            <div class="col-md-12" id="Resultado_laboratorio" style="display:none;">
                                <strong style="font-size:12px;">Analito</strong>
                                <input id="Analito" name="Analito" type="text" class="control form-control" style="font-size:12px;">
                            </div>

                            <div class="col-md-12"  id="Resultado_Imagaen" style="display:none;">
                                <strong style="font-size:12px;">Resultado de Imagen </strong>
                                <input id="resu_imagen" name="resu_imagen" type="text" class="control form-control" style="font-size:12px;">
                            </div>

                            
                            <div class="col-md-12" id="Resultado_Patologia" style="display:none;">
                                <strong style="font-size:12px;">Resultado de Patología </strong>
                                <input id="resu_pato" name="resu_pato" type="text" class="control form-control" style="font-size:12px;">
                            </div>

                            <div class="col-md-12" id="Resultado_Molecular" style="display:none;">
                                <strong style="font-size:12px;">Resultado de Molecular </strong>
                                <input id="resu_molec" name="resu_molec" type="text" class="control form-control" style="font-size:12px;">
                            </div>



                            <div class="col-md-12" id="respuesta_indi" style="display:none;">
                                <label for="descripcion" style="font-size: 12px; font-weight: bold;">Describir la información o indicación emitida</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" style="font-size: 12px;"></textarea>
                            </div>


                            <div class="col-md-6">
                                <strong style="font-size:12px;">Nombre  de quien da Respuesta</strong>
                                <input id="nombre_Emite" name="nombre_Emite" type="text" class="control form-control" style="font-size:12px;">
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size:12px;">Cargo</strong>
                                <input id="Caro_Emite" name="Caro_Emite" type="text" class="control form-control" style="font-size:12px;">
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 12px;">Turno</strong>
                                <select name="Turno" id="Turno" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Jornada Especial">Jornada Especial</option>
                                    <option value="Matutino">Matutino</option>
                                    <option value="Vespertino">Vespertino</option>
                                    <option value="Nocturno">Nocturno</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <strong  style="font-size: 12px;">Fecha y Hora que se emite Respuesta</strong>
                                <input class="form-control" type="datetime-local" name="fecha_estudio" id="fecha_estudio" style="font-size:12px;">
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