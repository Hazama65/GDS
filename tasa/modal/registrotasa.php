<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-virus modal-title fs-4" id="exampleModalLabel">Infecciones Asociadas a la Atención de Salud</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Datos de llegada del paciente  -->
                <div class="row">


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Total de IAAS</strong>
                        <input type="number" class="control form-control" id="total_iass" name="total_iass" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">DEIH</strong>
                        <input type="number" class="control form-control" id="deih" name="deih" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Egresos</strong>
                        <input type="number" class="control form-control" id="egresos" name="egresos" style="font-size: 13px;">
                    </div>

                    <!-- ************************TASA IAAS********************************** -->
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(157, 208, 84);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Tasas IASS</h5>
                    </div>



                    <div class="col-md-6">
                        <strong style="font-size: 14px;">Tasas IAAS / 100 Egresos</strong>
                        <input type="number" class="control form-control" id="tasas_IAAS100" name="tasas_IAAS100" style="font-size: 13px;">
                    </div>

            
                    <div class="col-md-6">
                        <strong style="font-size: 14px;">Tasas IAAS / 1000 DEIH </strong>
                        <input type="number" class="control form-control" id="DEIH_1000" name="DEIH_1000" style="font-size: 13px;">
                    </div>





                    <!-- ************************TASA DE IASS ASOCIADAS A DISPOSIVOS********************************** -->
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(157, 208, 84);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Tasa de IASS Asociadas a Dispositivos</h5>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Tasa de Neumonía Nasocomiales</h5>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 14px;">Neumonía Nasocomiales (NN)</strong>
                        <input type="number" class="control form-control" id="neumonia_nasocomiales" name="neumonia_nasocomiales" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Número de Egresos(NN)</strong>
                        <input type="number" class="control form-control" id="num_egresos" name="num_egresos" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TASA Neumonía (NN)</strong>
                        <input type="number" class="control form-control" id="tasa_neumoniaNN" name="tasa_neumoniaNN" style="font-size: 13px;" readonly>
                    </div>


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Tasa de Neumonía Asociada a la Ventilación Mecánica</h5>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 14px;">Neumonía Asociada a la Ventilación Mecánica</strong>
                        <input type="number" class="control form-control" id="neumonia_ventilacionmecanica" name="neumonia_ventilacionmecanica" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Días Ventilador</strong>
                        <input type="number" class="control form-control" id="dias_ventilacion_mecanica" name="dias_ventilacion_mecanica" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TASA Neumonía VM</strong>
                        <input type="number" class="control form-control" id="tasa_neumoniaVM" name="tasa_neumoniaVM" style="font-size: 13px;" readonly>
                    </div>


                    <!-- ************************Tasa de Bacteriemia Asociada al Uso de Catéter Venoso Central********************************** -->


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Tasa de Bacteriemia Asociada al Uso de Catéter Venoso Central</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Bacteriemia Asociadas Cateter Central</strong>
                        <input type="number" class="control form-control" id="infeccion_torrentesanguineo_cateterVC" name="infeccion_torrentesanguineo_cateterVC" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Días Catéter Central</strong>
                        <input type="number" class="control form-control" id="dias_catetercentral" name="dias_catetercentral" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TASA Bacteriemia</strong>
                        <input type="number" class="control form-control" id="tasa_bacteriemia" name="tasa_bacteriemia" style="font-size: 13px;" readonly>
                    </div>

                    <!-- ************************Tasa de Infección de Vías Urinarias Asociada al Uso de Cateter Urinario********************************** -->


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Tasa de Infección de Vías Urinarias Asociada al Uso de Cateter Urinario</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Infeccion de Tracto Urinario Asociadas a Cateter Urinario</strong>
                        <input type="number" class="control form-control" id="infeccion_tractoUrinario_CaterUrinario" name="infeccion_tractoUrinario_CaterUrinario" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Días Sondas Vesical</strong>
                        <input type="number" class="control form-control" id="dias_SondasVesical" name="dias_SondasVesical" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TASA Infeccion C.U</strong>
                        <input type="number" class="control form-control" id="tasa_infeccion_ViasUrinarias" name="act_motora" style="font-size: 13px;" readonly>
                    </div>



                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(157, 208, 84);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Diarreas Nasocomiales</h5>
                    </div>
                    <div class="col-md-6">
                    <strong style="font-size: 13px;">Tasa de Diarreas C.Difficile</strong>
                        <input type="number" class="control form-control" id="diarrea_tasa" name="diarrea_tasa" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Número Egresos</strong>
                        <input type="number" class="control form-control" id="numero_egresos_diarreas" name="numero_egresos_diarreas" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TASA Diarreas C.Difficile </strong>
                        <input type="number" class="control form-control" id="tasa_diarrea_resul" name="tasa_diarrea_resul" style="font-size: 13px;" readonly>
                    </div>





                    <!-- ************************Tasa de ISQX********************************** -->


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(157, 208, 84);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                            Tasa de ISQX</h5>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(138, 190, 124,0.5);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                            Tasa de Infección en Sitio Quirúrgico</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Infeccion de Sitio Quirúrgico</strong>
                        <input type="number" class="control form-control" id="Infeccion_sitio_qx" name="Infeccion_sitio_qx" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Número Total de ISQX</strong>
                        <input type="number" class="control form-control" id="numero_total_ISQX" name="numero_total_ISQX" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">TASA ISQX</strong>
                        <input type="number" class="control form-control" id="tasa_isqx" name="tasa_isqx" style="font-size: 13px;" readonly>
                    </div>




























                </div> <!-- DIV ROW LINEA 11 -->



            </div><!--DIV DEL BODY  -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>