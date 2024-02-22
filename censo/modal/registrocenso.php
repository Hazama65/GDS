<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard2-pulse modal-title fs-4" id="exampleModalLabel">Censo Diario Pacientes De Urgencias</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Datos de llegada del paciente  -->
                <div class="row">


                    <div class="col-md-4">
                        <strong style="font-size: 14px; ">Fecha</strong>
                        <input id="fecha_inicio" name="fecha_inicio" type="date" value="" class="control form-control" style="font-size: 13px;">
                    </div>


                    <div class="col-md-4" id="idnombre">
                        <strong style="font-size: 14px;">Nombre Completo</strong>
                        <input id="nombre" name="nombre" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">CURP</strong>
                        <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                        <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Sexo</strong>
                        <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Edad</strong>
                        <input id="edad" name="edad" type="number" class="control form-control" value="" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Cama</strong>
                        <input type="number" class="control form-control" id="cama" name="cama" style="font-size: 13px;">
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Estado de Salud</strong>
                        <select name="estado_salud" id="estado_salud" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Grave">Grave</option>
                            <option value="Muy Grave">Muy Grave</option>
                            <option value="Delicada">Delicada</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Diagnóstico</strong>
                        <input type="text" class="control form-control" id="Diagnostico" name="Diagnostico" style="font-size: 13px;">
                    </div>




                    <!-- ************************Clínica********************************** -->
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Clínica</h5>
                    </div>
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Estado de Alerta</h5>
                    </div>


                    <div class="row"> <!--clinica  -->
                        <div class="col-md-6">
                            <strong style="font-size: 14px;">GLASGOW</strong>
                            <input type="number" class="control form-control" id="GLASGOW" name="GLASGOW" style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">RAMSEY</strong>
                            <input type="number" class="control form-control" id="RAMSEY" name="RAMSEY" style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Actividad Motora</strong>
                            <input type="text" class="control form-control" id="act_motora" name="act_motora" style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Signos Vitales</strong>
                            <select name="Signos_vitales" id="Signos_vitales" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">PVC</strong>
                            <select name="PVC" id="PVC" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Precauciones Basadas T.</strong>
                            <select name="precauciones_basadast" id="precauciones_basadast" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Precauciones para Gotas">Precauciones para Gotas</option>
                                <option value="Precauciones Vía Aérea">Precauciones Vía Aérea</option>
                                <option value="Precauciones Estándar">Precauciones Estándar</option>
                                <option value="Precauciones para Contacto">Precauciones para Contacto</option>
                            </select>
                        </div>



                    </div><!-- row  ESCALA FAST-->

                    <!-- ************************SONDAS DISPOSITIVOS LINEA VASCULARES********************************** -->
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Sondas, Dispositivos, Líneas Vasculares</h5>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Líneas Vasculares</h5>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Catéter Periférico C.</strong>
                        <select name="cateter_perifericoC" id="cateter_perifericoC" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>



                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Catéter Venoso Central.</strong>
                        <select name="cateter_venoso" id="cateter_venoso" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Dispositivos Respiratorios </h5>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Dispositivo Respiratorio</strong>
                        <select name="dispositivo_respiratorio" id="dispositivo_respiratorio" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Sondas</h5>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Sonda Foley</strong>
                        <select name="sonda_foley" id="sonda_foley" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Sonda Nasogástrica</strong>
                        <select name="sonda_nasogastrica" id="sonda_nasogastrica" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Colostomía</strong>
                        <select name="sonda_colostomia" id="sonda_colostomia" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Penrose</strong>
                        <select name="penrose" id="penrose" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Tratamiento</h5>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Dieta</strong>
                        <select name="tratamiento_dieta" id="tratamiento_dieta" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Terapia Intravenosa</strong>
                        <select name="tratamiento" id="tratamiento" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Infusiones Especiales de Tx </strong>
                        <select name="infusiones_especiales" id="infusiones_especiales" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>


































                </div> <!-- DIV ROW LINEA 11 -->



            </div><!--DIV DEL BODY  -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>