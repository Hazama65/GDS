<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-title-bg">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">NIHSS</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 1a Nivel de conciencia</h4>
                </div>

                <!--este es el primer row para seleccionar 1a Nivel de conciencia-->
                <div class="row">


                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nivel_conciencia" id="inlineRadio1" value="0">
                            <label class="form-check-label" for="inlineRadio1" style="font-size:14px;">Alerta</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nivel_conciencia" id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2" style="font-size:14px;">Somnoliencia</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nivel_conciencia" id="inlineRadio3" value="2">
                            <label class="form-check-label" for="inlineRadio3" style="font-size:14px;">Obturación</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nivel_conciencia" id="inlineRadio4" value="3">
                            <label class="form-check-label" for="inlineRadio4" style="font-size:14px;">Coma</label>
                        </div>
                    </div>

                    <!--Mostrar puntaje obtenido-->
                    <div id="puntaje_obtenido">
                        <p style="color: purple; font-size:14px; text-align: right">NIHSS: <span id="puntaje_nivel_conciencia_valor">0</span></p>
                    </div>
                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 1b Nivel de conciencia, Preguntas verbales</h4>
                </div>

                <div class="row">
                    <!-- Segundo grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="preguntas_verbales" id="preguntas_verbales_inlineRadio1" value="0">
                            <label class="form-check-label" for="preguntas_verbales_inlineRadio1" style="font-size:14px;">Ambas correctas</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="preguntas_verbales" id="preguntas_verbales_inlineRadio2" value="1">
                            <label class="form-check-label" for="preguntas_verbales_inlineRadio2" style="font-size:14px;">Una Correcta</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="preguntas_verbales" id="preguntas_verbales_inlineRadio3" value="2">
                            <label class="form-check-label" for="preguntas_verbales_inlineRadio3" style="font-size:14px;">Ninguna Correcta</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_preguntas_verbales">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_verbales_valor">0</span></p>
                    </div>

                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 1c Nivel de conciencia, Ordenes motoras</h4>
                </div>

                <div class="row">

                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ordenes_motoras" id="ordenes_motoras_inlineRadio1" value="0">
                            <label class="form-check-label" for="ordenes_motoras_inlineRadio1" style="font-size:14px;">Ambas correctas</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ordenes_motoras" id="ordenes_motoras_inlineRadio2" value="1">
                            <label class="form-check-label" for="ordenes_motoras_inlineRadio2" style="font-size:14px;">Una Correcta</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ordenes_motoras" id="ordenes_motoras_inlineRadio3" value="2">
                            <label class="form-check-label" for="ordenes_motoras_inlineRadio3" style="font-size:14px;">Ninguna Correcta</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_ordenes_motoras">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_ordenes_motoras">0</span></p>
                    </div>
                </div>



                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 2 Mirada Conjugada</h4>
                </div>

                <div class="row">

                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="mirada_conjugada" id="miradac_inlineRadio1" value="0">
                            <label class="form-check-label" for="miradac_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="mirada_conjugada" id="miradac_inlineRadio2" value="1">
                            <label class="form-check-label" for="miradac_inlineRadio2" style="font-size:14px;">Paresia parcial de la mirada</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="mirada_conjugada" id="miradac_inlineRadio3" value="2">
                            <label class="form-check-label" for="miradac_inlineRadio3" style="font-size:14px;">Paresia total o desviacion forzada</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_miradac">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_mirada">0</span></p>
                    </div>
                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 3 Campos Visuales</h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="campos_visuales" id="campos_visuales_inlineRadio1" value="0">
                            <label class="form-check-label" for="campos_visuales_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="campos_visuales" id="campos_visuales_inlineRadio2" value="1">
                            <label class="form-check-label" for="campos_visuales_inlineRadio2" style="font-size:14px;">Hemianopsia Parcial</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="campos_visuales" id="campos_visuales_inlineRadio3" value="2">
                            <label class="form-check-label" for="campos_visuales_inlineRadio3" style="font-size:14px;">Hemianopsia Completa</label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="campos_visuales" id="campos_visuales_inlineRadio4" value="3">
                            <label class="form-check-label" for="campos_visuales_inlineRadio3" style="font-size:14px;">Ceguera Total</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_campos_visuales">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_campos_visuales">0</span></p>
                    </div>
                </div>




                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 4 Paresia Facial</h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paresia_facial" id="paresia_facial_inlineRadio1" value="0">
                            <label class="form-check-label" for="paresia_facial_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paresia_facial" id="paresia_facial_inlineRadio2" value="1">
                            <label class="form-check-label" for="paresia_facial_inlineRadio2" style="font-size:14px;">Pareseia Leve (Asimetria Al Sonreir)</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paresia_facial" id="paresia_facial_inlineRadio3" value="2">
                            <label class="form-check-label" for="paresia_facial_inlineRadio3" style="font-size:14px;">Paralisis Musc Facial Inferior</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paresia_facial" id="paresia_facial_inlineRadio4" value="3">
                            <label class="form-check-label" for="paresia_facial_inlineRadio3" style="font-size:14px;">Paralisis Facial Superior E Inferior</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_paresia_facial">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_paresia_facial">0</span></p>
                    </div>
                </div>




                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 5 Paresia de Extremidades Superiores</h4>
                </div>

                <div class="row">

                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                    border-radius: 10px;
                    background-color: rgb(100, 40, 85 ,0.45);
                    color: aliceblue;
                    font-size: 14px;"> Brazo Derecho</h4>
                    </div>
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_derecho" id="superiores_brazo_derecho_inlineRadio1" value="0">
                            <label class="form-check-label" for="superiores_brazo_derecho_inlineRadio1" style="font-size:14px;">Mantiene La Posicion 10 "</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_derecho" id="superiores_brazo_derecho_inlineRadio2" value="1">
                            <label class="form-check-label" for="superiores_brazo_derecho_inlineRadio2" style="font-size:14px;">Claudica En Menos De 10°, Sin Llegar A Tocar La Cama</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_derecho" id="superiores_brazo_derecho_inlineRadio3" value="2">
                            <label class="form-check-label" for="superiores_brazo_derecho_inlineRadio3" style="font-size:14px;">Claudica Y Toca La Cama En Menos De 10"</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_derecho" id="superiores_brazo_derecho_inlineRadio4" value="3">
                            <label class="form-check-label" for="superiores_brazo_derecho_inlineRadio4" style="font-size:14px;">Hay Movimiento Pero No Vence Gravedad</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_derecho" id="superiores_brazo_derecho_inlineRadio3" value="4">
                            <label class="form-check-label" for="superiores_brazo_derecho_inlineRadio5" style="font-size:14px;">Paralisis Completa</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_derecho" id="superiores_brazo_derecho_inlineRadio4" value="9">
                            <label class="form-check-label" for="superiores_brazo_derecho_inlineRadio6" style="font-size:14px;">Extremidad Amputada O Inmobilizada</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_superiores_brazo_derecho">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_superiores_brazo_derecho">0</span></p>
                    </div>



                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                    border-radius: 10px;
                    background-color: rgb(100, 40, 85 ,0.45);
                    color: aliceblue;
                    font-size: 14px;">Brazo Izquierdo</h4>
                    </div>

                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-124">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_izquierdo" id="superiores_brazo_izquierdo_inlineRadio1" value="0">
                            <label class="form-check-label" for="superiores_brazo_izquierdo_inlineRadio1" style="font-size: 14px;">Mantiene La Posicion 10 "</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_izquierdo" id="superiores_brazo_izquierdo_inlineRadio2" value="1">
                            <label class="form-check-label" for="superiores_brazo_izquierdo_inlineRadio2" style="font-size: 14px;">Claudica En Menos De 10°, Sin Llegar A Tocar La Cama</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_izquierdo" id="superiores_brazo_izquierdo_inlineRadio3" value="2">
                            <label class="form-check-label" for="superiores_brazo_izquierdo_inlineRadio3" style="font-size: 14px;">Claudica Y Toca La Cama En Menos De 10"</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_izquierdo" id="superiores_brazo_izquierdo_inlineRadio4" value="3">
                            <label class="form-check-label" for="superiores_brazo_izquierdo_inlineRadio4" style="font-size: 14px;">Hay Movimiento Pero No Vence Gravedad</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_izquierdo" id="superiores_brazo_izquierdo_inlineRadio5" value="4">
                            <label class="form-check-label" for="superiores_brazo_izquierdo_inlineRadio5" style="font-size: 14px;">Paralisis Completa</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superiores_brazo_izquierdo" id="superiores_brazo_izquierdo_inlineRadio6" value="9">
                            <label class="form-check-label" for="superiores_brazo_izquierdo_inlineRadio6" style="font-size: 14px;">Extremidad Amputada O Inmobilizada</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_superiores_brazo_izquierdo">
                        <p style="color: purple; font-size: 14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_superiores_brazo_izquierdo">0</span></p>
                    </div>

                </div>





                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 6 Paresia de Extremidades Inferiores</h4>
                </div>

                <div class="row">

                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                    border-radius: 10px;
                    background-color: rgb(100, 40, 85 ,0.45);
                    color: aliceblue;
                    font-size: 14px;"> Pierna Derecha</h4>
                    </div>
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_derecha" id="inferiores_pierna_derecha_inlineRadio1" value="0">
                            <label class="form-check-label" for="inferiores_pierna_derecha_inlineRadio1" style="font-size:14px;">Mantiene La Posicion 10 "</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_derecha" id="inferiores_pierna_derecha_inlineRadio2" value="1">
                            <label class="form-check-label" for="inferiores_pierna_derecha_inlineRadio2" style="font-size:14px;">Claudica En Menos De 10°, Sin Llegar A Tocar La Cama</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_derecha" id="inferiores_pierna_derecha_inlineRadio3" value="2">
                            <label class="form-check-label" for="inferiores_pierna_derecha_inlineRadio3" style="font-size:14px;">Claudica Y Toca La Cama En Menos De 10"</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_derecha" id="inferiores_pierna_derecha_inlineRadio4" value="3">
                            <label class="form-check-label" for="inferiores_pierna_derecha_inlineRadio4" style="font-size:14px;">Hay Movimiento Pero No Vence Gravedad</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_derecha" id="inferiores_pierna_derecha_inlineRadio5" value="4">
                            <label class="form-check-label" for="inferiores_pierna_derecha_inlineRadio5" style="font-size:14px;">Paralisis Completa</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_derecha" id="inferiores_pierna_derecha_inlineRadio6" value="9">
                            <label class="form-check-label" for="inferiores_pierna_derecha_inlineRadio6" style="font-size:14px;">Extremidad Amputada O Inmobilizada</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_inferiores_pierna_derecha">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_inferiores_pierna_derecha">0</span></p>
                    </div>



                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                    border-radius: 10px;
                    background-color: rgb(100, 40, 85 ,0.45);
                    color: aliceblue;
                    font-size: 14px;"> Pierna Izquierda</h4>
                    </div>
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_izquierda" id="inferiores_pierna_izquierda_inlineRadio1" value="0">
                            <label class="form-check-label" for="inferiores_pierna_izquierda_inlineRadio1" style="font-size:14px;">Mantiene La Posicion 10 "</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_izquierda" id="inferiores_pierna_izquierda_inlineRadio2" value="1">
                            <label class="form-check-label" for="inferiores_pierna_izquierda_inlineRadio2" style="font-size:14px;">Claudica En Menos De 10°, Sin Llegar A Tocar La Cama</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_izquierda" id="inferiores_pierna_izquierda_inlineRadio3" value="2">
                            <label class="form-check-label" for="inferiores_pierna_izquierda_inlineRadio3" style="font-size:14px;">Claudica Y Toca La Cama En Menos De 10"</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_izquierda" id="inferiores_pierna_izquierda_inlineRadio4" value="3">
                            <label class="form-check-label" for="inferiores_pierna_izquierda_inlineRadio4" style="font-size:14px;">Hay Movimiento Pero No Vence Gravedad</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_izquierda" id="inferiores_pierna_izquierda_inlineRadio5" value="4">
                            <label class="form-check-label" for="inferiores_pierna_izquierda_inlineRadio5" style="font-size:14px;">Paralisis Completa</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inferiores_pierna_izquierda" id="inferiores_pierna_izquierda_inlineRadio6" value="9">
                            <label class="form-check-label" for="inferiores_pierna_izquierda_inlineRadio6" style="font-size:14px;">Extremidad Amputada O Inmobilizada</label>
                        </div>
                    </div>

                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_inferiores_pierna_izquierda">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_inferiores_pierna_izquierda">0</span></p>
                    </div>
                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 7 Ataxia de Extremidades</h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ataxia" id="ataxia_inlineRadio1" value="0">
                            <label class="form-check-label" for="ataxia_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ataxia" id="ataxia_inlineRadio2" value="1">
                            <label class="form-check-label" for="ataxia_inlineRadio2" style="font-size:14px;">Ataxia Una Extramidad</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ataxia" id="ataxia_inlineRadio3" value="2">
                            <label class="form-check-label" for="ataxia_inlineRadio3" style="font-size:14px;">Ataxia Dos Extremidades</label>
                        </div>
                    </div>
                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_ataxia">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_ataxia">0</span></p>
                    </div>
                </div>






                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 8 Sensibilidad</h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sensibilidad" id="sensibilidad_inlineRadio1" value="0">
                            <label class="form-check-label" for="sensibilidad_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sensibilidad" id="sensibilidad_inlineRadio2" value="1">
                            <label class="form-check-label" for="sensibilidad_inlineRadio2" style="font-size:14px;">Leve O Moderada Hipoestesia</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sensibilidad" id="sensibilidad_inlineRadio3" value="2">
                            <label class="form-check-label" for="sensibilidad_inlineRadio3" style="font-size:14px;">Anestesia</label>
                        </div>
                    </div>
                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_sensibilidad">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_sensibilidad">0</span></p>
                    </div>
                </div>





                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 9 Lenguaje</h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="lenguaje" id="lenguaje_inlineRadio1" value="0">
                            <label class="form-check-label" for="lenguaje_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="lenguaje" id="lenguaje_inlineRadio2" value="1">
                            <label class="form-check-label" for="lenguaje_inlineRadio2" style="font-size:14px;">Leve O Moderada Hipoestesia</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="lenguaje" id="lenguaje_inlineRadio3" value="2">
                            <label class="form-check-label" for="lenguaje_inlineRadio3" style="font-size:14px;">Anestesia</label>
                        </div>
                    </div>
                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_lenguaje">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_lenguaje">0</span></p>
                    </div>
                </div>




                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 10 Disartria </h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Disartria" id="Disartria_inlineRadio1" value="0">
                            <label class="form-check-label" for="Disartria_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Disartria" id="Disartria_inlineRadio2" value="1">
                            <label class="form-check-label" for="Disartria_inlineRadio2" style="font-size:14px;">Leve, Se Puede Enterder</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Disartria" id="Disartria_inlineRadio3" value="2">
                            <label class="form-check-label" for="Disartria_inlineRadio3" style="font-size:14px;">Grave Ininteligible O Anartria</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Disartria" id="Disartria_inlineRadio4" value="3">
                            <label class="form-check-label" for="Disartria_inlineRadio3" style="font-size:14px;">Intubado, No Puntua</label>
                        </div>
                    </div>
                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_Disartria">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_Disartria">0</span></p>
                    </div>
                </div>








                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #9F7795;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;"> 11 Extinción - Negligencia - Intención </h4>
                </div>

                <div class="row">
                    <!-- tercer grupo de radio buttons -->
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eni" id="eni_inlineRadio1" value="0">
                            <label class="form-check-label" for="eni_inlineRadio1" style="font-size:14px;">Normal</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eni" id="eni_inlineRadio2" value="1">
                            <label class="form-check-label" for="eni_inlineRadio2" style="font-size:14px;">Intencion/Extincion En Una Modalidad</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eni" id="eni_inlineRadio3" value="2">
                            <label class="form-check-label" for="eni_inlineRadio3" style="font-size:14px;">Intencion/Extincion En Mas De Una Modalidad</label>
                        </div>
                    </div>
                    <!-- Mostrar puntaje obtenido del segundo grupo -->
                    <div id="puntaje_eni">
                        <p style="color: purple; font-size:14px; text-align: right;">NIHSS: <span id="puntaje_preguntas_eni">0</span></p>
                    </div>
                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: center;
                border-radius: 10px;
                background-color: #941574;
                color: aliceblue;
                margin-top:10px;
                font-size: 14px;">

                        <div id="puntajes_totales">
                            <strong style="color: aliceblue; font-size: 20px;">Puntaje Total: </strong>
                            <strong id="puntaje_total_valor" style="color: aliceblue; font-size: 20px;">0</strong>
                            <span id="puntaje_total_texto" style="font-size: 20px;"> </span>
                        </div>
                    </h4>
                </div>








            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>