<!-- Modal -->
<div class="modal fade" id="barthel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header modal-title-bt">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Barthel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Comer</h4>
        </div>
        <!--Comer-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_comer" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Incapaz</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_comer" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Necesita ayuda para cortar, extender mantequilla, usar condimentos, etc.</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_comer" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Independiente (la comida está al alcance de la mano)</label>
                </div>
            </div>
            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_comer">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_comer">0</span></p>
            </div>
        </div>








        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Trasladarse entre la silla y la cama</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthe_traslado" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Incapaz, no se mantiene sentado</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthe_traslado" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Necesita ayuda importante (una persona entrenada o dos personas), puede estar sentado</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthe_traslado" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Necesita algo de ayuda (una pequeña ayuda física o ayuda verbal)</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthe_traslado" id="inlineRadio4" value="15">
                    <label class="form-check-label" for="inlineRadio4" style="font-size:14px;">Independiente</label>
                </div>
            </div>
            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_traslado">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_traslado">0</span></p>
            </div>
        </div> 







        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Aseo Personal</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_aseo" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Necesita ayuda con el aseo personal</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_aseo" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Independiente para lavarse la cara, las manos y los dientes, maquillarse, peinarse y afeitarse</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_aseo">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_aseo">0</span></p>
            </div>
        </div>











        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Uso del retrete</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_retrete" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Dependiente</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_retrete" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Necesita ayuda para ir al retrete, pero puede hacer algo sólo</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_retrete" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Independiente (entrar y salir, limpiarse y vestirse)</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_retrete">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_retrete">0</span></p>
            </div>
        </div>








        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Bañarse / Ducharse</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_ducharse" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Dependiente</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_ducharse" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Independiente para bañarse o ducharse</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_ducharse">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_ducharse">0</span></p>
            </div>
        </div>






        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Desplazarse</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_desplazarse" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Inmóvil</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_desplazarse" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Independiente en silla de ruedas en 50m</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_desplazarse" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Anda con pequeña ayuda de una persona (física o verbal)</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_desplazarse" id="inlineRadio4" value="15">
                    <label class="form-check-label" for="inlineRadio4" style="font-size:14px;">Independiente al menos 50 m, con cualquier tipo de muleta, excepto andador</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_desplazarse">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_desplazarse">0</span></p>
            </div>
        </div>









        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Subir y bajar escaleras</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_escaleras" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Incapaz</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_escaleras" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Necesita ayuda física o verbal, puede llevar cualquier tipo de muleta</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_escaleras" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Independiente para subir y bajar</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_escaleras">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_escaleras">0</span></p>
            </div>
        </div>






        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Vestirse y Desvestirse</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_vestirse" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Dependiente</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_vestirse" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Necesita ayuda, pero puede hacer la mitad aproximadamente, sin ayuda</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_vestirse" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Independiente, incluyendo botones, cremalleras, cordones, etc</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_vestirse">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_vestirse">0</span></p>
            </div>
        </div>





        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Control de heces</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_heces" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Incontinente (o necesita que le suministren enema)</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_heces" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Accidente excepcional (uno/semana)</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_heces" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Continente</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_heces">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_heces">0</span></p>
            </div>
        </div>






        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(120,85,80,0.6);
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">Control de orina</h4>
        </div>
        <!--Trasladarse entre la silla y la cama-->
        <div class="row"> 
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_orina" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Incontinente, o sondado incapaz de cambiarse la bolsa</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_orina" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Accidente excepcional (máximo uno/24 horas)</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barthel_orina" id="inlineRadio3" value="10">
                    <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Continente, durante al menos 7 días</label>
                </div>
            </div>

            <!--Mostrar puntaje obtenido-->
            <div id="puntaje_orina">
                <p style="color: #785550; font-size:14px; text-align: right;">Barthel: <span id="puntaje_nivel_orina">0</span></p>
            </div>
        </div>

        




        <div class="form-header">
                <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: #C88E86;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;
                text-align: center;">
                    <div id="puntajes_totalesB">
                        <strong style="color: aliceblue; font-size: 20px;">Puntaje Total: </strong>
                        <strong id="puntaje_total_valorB" style="color: aliceblue; font-size: 20px;">0</strong>
                        <span id="puntaje_total_textoB" style="font-size: 20px;"> </span>
                    </div></h4>
        </div>


      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>