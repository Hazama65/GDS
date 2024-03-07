<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(80, 177, 210)">
                <h1 class="modal-title fs-5" id="exampleModalLabel">

                    <i class="bi bi-pass-fill"></i>Registro Pacientes
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="diabetes_form" method="POST" autocomplete="off">

                    <div style="background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                        <h6>DATOS GENERALES</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-4" id="idcurp">
                            <strong style="font-size: 14px;">CURP</strong>
                            <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 13px;" required>
                        </div>

                        <div class="col-md-4" id="idnombre">
                            <strong style="font-size: 14px;">Nombre Completo</strong>
                            <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="" style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                            <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                        </div>
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Edad</strong>
                            <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Sexo</strong>
                            <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Escolaridad</strong>
                            <select name="Escolaridad" id="Escolaridad" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Seleccione</option>
                                <option value="Primaria Completa">Primaria Completa</option>
                                <option value="Primaria Incompleta">Primaria Incompleta</option>
                                <option value="Secundaria Completa">Secundaria Completa</option>
                                <option value="Secundaria Incompleta">Secundaria Incompleta</option>
                                <option value="Preparatoria Completa">Preparatoria Completa</option>
                                <option value="Preparatoria Incompleta">Preparatoria Incompleta</option>
                                <option value="Licenciatura Completa">Licenciatura Completa</otion>
                                <option value="Licenciatura Incompleta">Licenciatura Incompleta</option>
                                <option value="Doctorado Completo">Doctorado Completo</option>
                                <option value="Doctorado Incompleto">Doctorado Incompleto</option>
                                <option value="Sin Registro">Sin Registro</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Estado Civil</strong>
                            <select name="Estadocivil" id="Estadocivil" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Seleccione</option>
                                <option value="Soltera">Soltero</option>
                                <option value="Casada">Casado</option>
                                <option value="Viuda">Viudo</option>
                                <option value="Divorciada">Divorciado</option>
                                <option value="Concubinato">Concubinato</option>
                                <option value="Separada">Separado</option>
                            </select>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Estado</strong>
                            <select name="estado" id="estado" class="form-control" style="font-size: 13px;">
                                <option value="0">Seleccione</option>
                                <?php
                                if (!empty($AllData_Estados)) {
                                    foreach ($AllData_Estados as $row1) {
                                        echo "<option value='" . $row1["Estado_Id"] . "'>" . $row1["NombreEstado"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay datos disponibles</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Municipio</strong>
                            <select name="municipio" id="municipio" class="form-control" style="font-size: 13px;">
                                <option value="0">Seleccione</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Referencia</strong>
                            <input list="Clues" type="text" class="form-control" id="referencia" name="referencia" style="font-size: 13px;">
                        </div>
                        <datalist id="Clues">
                            <?php
                            if (!empty($AllData_Clues)) {
                                foreach ($AllData_Clues as $row1) {
                                    echo "<option value='" . $row1["id_clues"] . "'>" . $row1["nombre_clues"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No hay datos disponibles</option>";
                            }
                            ?>
                        </datalist>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Talla</strong>
                            <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Peso</strong>
                            <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">IMC</strong>
                            <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Resultado IMC</strong>
                            <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Circunferencia Cintura</strong>
                            <input type="number" step="any" class="form-control" id="circunferencia" name="circunferencia" style="font-size: 13px;">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Derechohabiencia</strong>
                            <select name="derechohabiencia" id="derechohabiencia" class="form-control" style="font-size: 14px;" onchange="mostrarCampos()">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="estudio_socioeconomico_field" style="display: none;">
                            <strong style="font-size: 14px;">Estudio Socioeconómico</strong>
                            <select name="estudio_socioeconomico" id="estudio_socioeconomico" class="form-control" style="font-size: 14px;" onchange="mostrarNivel()">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="nivel_field" style="display: none;">
                            <strong style="font-size: 14px;">Nivel</strong>
                            <select name="nivel" id="nivel" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="1x">1x</option>
                                <option value="N1">N1</option>
                                <option value="N2">N2</option>
                                <option value="N3">N3</option>
                                <option value="N4">N4</option>
                                <option value="N5">N5</option>
                                <option value="N6">N6</option>
                                <option value="N7">N7</option>
                            </select>
                        </div>


                        <!-- ***********************************ANTECEDENTES HEREDOFAMILIARES*********************************** -->
                        <div class="col-md-12">
                            <div class="form-header">
                                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                    ANTECEDENTES HEREDOFAMILIARES</h5>
                            </div>
                        </div>
                        <!--===============AH: DIABETES=======================-->

                        <div class="col-md-12" id="ah_diabetes">
                            <strong style="font-size: 14px;">Diabetes Mellitus </strong>
                            <select name="diabetesSelect" id="diabetesSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <!--===============HEREDOFAMILIARES DIABETES=======================-->

                        <!--===============sI SELECCIONAMOS PADRE =======================-->
                        <div class="container" id="heredo_familia" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="PadreField">
                                    <span style="font-size: 14px;">Padre - Tipo DM</span>
                                    <select name="tipoPadre" id="tipoPadre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Gestacional">Gestacional</option>
                                        <option value="MODY">MODY</option>
                                        <option value="LADA">LADA</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE =======================-->
                                <div class="col-md-4" id="MadreField">
                                    <span style="font-size: 14px;">Madre - Tipo DM</span>
                                    <select name="tipoMadre" id="tipoMadre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Gestacional">Gestacional</option>
                                        <option value="MODY">MODY</option>
                                        <option value="LADA">LADA</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->

                                <div class="col-md-4" id="Abuelo_MaternoField">
                                    <span style="font-size: 14px;">Abuelo Materno - Tipo DM</span>
                                    <select name="tipoAbueloMaterno" id="tipoAbueloMaterno" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Gestacional">Gestacional</option>
                                        <option value="MODY">MODY</option>
                                        <option value="LADA">LADA</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA =======================-->
                                <div class="col-md-4" id="Abuela_MaternaField">
                                    <span style="font-size: 14px;">Abuela Materna - Tipo DM</span>
                                    <select name="tipoAbuelaMaterna" id="tipoAbuelaMaterna" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Gestacional">Gestacional</option>
                                        <option value="MODY">MODY</option>
                                        <option value="LADA">LADA</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                                <div class="col-md-4" id="Abuelo_PaternoField">
                                    <span style="font-size: 14px;">Abuelo Paterno - Tipo DM</span>
                                    <select name="tipoAbueloPaterno" id="tipoAbueloPaterno" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Gestacional">Gestacional</option>
                                        <option value="MODY">MODY</option>
                                        <option value="LADA">LADA</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO =======================-->

                                <div class="col-md-4" id="Abuela_PaternaField">
                                    <span style="font-size: 14px;">Abuela Paterna - Tipo DM</span>
                                    <select name="tipoAbuelaPaterna" id="tipoAbuelaPaterna" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Gestacional">Gestacional</option>
                                        <option value="MODY">MODY</option>
                                        <option value="LADA">LADA</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA =======================-->

                                <div class="col-md-4" id="HermanaField">
                                    <span style="font-size: 14px;">Número de Hermanas-DM </span>
                                    <input type="number" step="any" class="form-control" id="num_hermanas" name="num_hermanas" style="font-size: 14px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO =======================-->

                                <div class="col-md-4" id="HermanoField">
                                    <span style="font-size: 14px;">Número de Hermanos- DM</span>
                                    <input type="number" step="any" class="form-control" id="num_hermanos" name="num_hermanos" style="font-size: 14px;">
                                </div>

                            </div> <!--===========DIV CONTAINER DIABETES ================--> <br>
                        </div> <!--=========== DIV DEL ROW DE DIABETES ================-->



                        <!--===============     Hipertensión Arterial =======================-->

                        <div class="col-md-12" id="ah_Hipertension">
                            <strong style="font-size: 14px;">Hipertensión Arterial </strong>
                            <select name="hipertensionSelect" id="hipertensionSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===============Hipertensión Arterial Heredofamiliar  =======================-->

                        <div class="container" id="HAS_familia" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="PadreHAS">
                                    <span style="font-size: 14px;">Padre - HAS</span>
                                    <select name="HAS_Padre" id="HAS_Padre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE  HAS=======================-->
                                <div class="col-md-4" id="MadreHAS">
                                    <span style="font-size: 14px;">Madre - HAS</span>
                                    <select name="HAS_Madre" id="HAS_Madre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO HAS=======================-->

                                <div class="col-md-4" id="Abuelo_MaternoHAS">
                                    <span style="font-size: 14px;">Abuelo Materno - HAS</span>
                                    <select name="AbueloM_HAS" id="AbueloM_HAS" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA HAS  =======================-->
                                <div class="col-md-4" id="Abuela_MaternaHAS">
                                    <span style="font-size: 14px;">Abuela Materno - HAS</span>
                                    <select name="AbuelaM_HAS" id="AbuelaM_HAS" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO HAS =======================-->
                                <div class="col-md-4" id="Abuelo_PaternoHAS">
                                    <span style="font-size: 14px;">Abuelo Paterno - HAS</span>
                                    <select name="AbueloP_HAS" id="AbueloP_HAS" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============sI SELECCIONAMOS ABUELA PATERNA HAS =======================-->
                                <div class="col-md-4" id="Abuela_PaternaHAS">
                                    <span style="font-size: 14px;">Abuela Paterna - HAS</span>
                                    <select name="AbuelaP_HAS" id="AbuelaP_HAS" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA  HAS =======================-->

                                <div class="col-md-4" id="HermanaHAS">
                                    <span style="font-size: 14px;">Número de Hermanas- HAS </span>
                                    <input type="number" step="any" class="form-control" id="num_hermanasHAS" name="num_hermanasHAS" style="font-size: 14px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO  HAS =======================-->

                                <div class="col-md-4" id="HermanoHAS">
                                    <span style="font-size: 14px;">Número de Hermanos- HAS</span>
                                    <input type="number" step="any" class="form-control" id="num_hermanosHAS" name="num_hermanosHAS" style="font-size: 14px;">
                                </div>

                            </div><!--===========DIV HAS ================--><br>

                        </div> <!--=========== DIV DEL ROW DE HAS ================-->



                        <!--=========== HEREDOFAMILIARES DE ENFERMEDADES CARDIOVASCULAR  ================-->

                        <div class="col-md-12" id="ah_evc">
                            <strong style="font-size: 14px;">Enfermedad Cardiovascular</strong>
                            <select name="EVCSelect" id="EVCSelect" class="form-control" style="font-size: 14px;" onchange="mostrarOcultarSecciones()">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <!--===========  EVENTO VASCULAR CEREBRAL  ================-->

                        <div class="col-md-12" id="ah_ecv" style="display: none;">
                            <strong style="font-size: 14px;">Evento Vascular Cerebral</strong>
                            <select name="ECVSelect" id="ECVSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--=========== HEREDOFAMILIARES DE EVENTO VASCULAR CEREBRAL  ================-->

                        <div class="container" id="ECV_familia" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="PadreECV">
                                    <span style="font-size: 14px;">Padre - ECV</span>
                                    <select name="ECV_Padre" id="ECV_Padre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE  ECV=======================-->
                                <div class="col-md-4" id="MadreECV">
                                    <span style="font-size: 14px;">Madre - ECV</span>
                                    <select name="ECV_Madre" id="ECV_Madre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO ECV=======================-->

                                <div class="col-md-4" id="Abuelo_MaternoECV">
                                    <span style="font-size: 14px;">Abuelo Materno - ECV</span>
                                    <select name="AbueloM_ECV" id="AbueloM_ECV" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA ECV  =======================-->
                                <div class="col-md-4" id="Abuela_MaternaECV">
                                    <span style="font-size: 14px;">Abuela Materno - ECV </span>
                                    <select name="AbuelaM_ECV" id="AbuelaM_ECV" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO ECV =======================-->
                                <div class="col-md-4" id="Abuelo_PaternoECV">
                                    <span style="font-size: 14px;">Abuelo Paterno - ECV</span>
                                    <select name="AbueloP_ECV" id="AbueloP_ECV" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============sI SELECCIONAMOS ABUELA PATERNA ECV =======================-->
                                <div class="col-md-4" id="Abuela_PaternaECV">
                                    <span style="font-size: 14px;">Abuela Paterna - ECV</span>
                                    <select name="AbuelaP_ECV" id="AbuelaP_ECV" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA  ECV =======================-->

                                <div class="col-md-4" id="HermanaECV">
                                    <span style="font-size: 14px;">Número de Hermanas- ECV </span>
                                    <input type="number" step="any" class="form-control" id="num_hermanasECV" name="num_hermanasECV" style="font-size: 14px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO ECV =======================-->

                                <div class="col-md-4" id="HermanoECV">
                                    <span style="font-size: 14px;">Número de Hermanos- ECV</span>
                                    <input type="number" step="any" class="form-control" id="num_hermanosECV" name="num_hermanosECV" style="font-size: 14px;">
                                </div>

                            </div><!--===========DIV ECV ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE ECV ================-->



                        <!--=========== Cardiopatía isquémica ================-->

                        <div class="col-md-12" id="ah_ci" style="display: none;">
                            <strong style="font-size: 14px;">Cardiopatía isquémica</strong>
                            <select name="CardiopatiaSelect" id="CardiopatiaSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="container" id="CI_familia" style="display: none;">

                            <div class="row">

                                <!--===============sI SELECCIONAMOS PADRE  Cardiopatía isquémica=======================-->

                                <div class="col-md-4" id="PadreCI">
                                    <span style="font-size: 14px;">Padre - CI</span>
                                    <select name="CI_Padre" id="CI_Padre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE  Cardiopatía isquémica=======================-->
                                <div class="col-md-4" id="MadreCI">
                                    <span style="font-size: 14px;">Madre - CI</span>
                                    <select name="CI_Madre" id="CI_Madre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO Cardiopatía isquémica======================-->

                                <div class="col-md-4" id="Abuelo_MaternoCI">
                                    <span style="font-size: 14px;">Abuelo Materno - CI</span>
                                    <select name="AbueloM_CI" id="AbueloM_CI" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA Cardiopatía isquémica =======================-->
                                <div class="col-md-4" id="Abuela_MaternaCI">
                                    <span style="font-size: 14px;">Abuela Materno - CI </span>
                                    <select name="AbuelaM_CI" id="AbuelaM_CI" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO Cardiopatía isquémica =======================-->
                                <div class="col-md-4" id="Abuelo_PaternoCI">
                                    <span style="font-size: 14px;">Abuelo Paterno - CI</span>
                                    <select name="AbueloP_CI" id="AbueloP_CI" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============sI SELECCIONAMOS ABUELA PATERNA Cardiopatía isquémica =======================-->
                                <div class="col-md-4" id="Abuela_PaternaCI">
                                    <span style="font-size: 14px;">Abuela Paterna - CI</span>
                                    <select name="AbuelaP_CI" id="AbuelaP_CI" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA Cardiopatía isquémica =======================-->

                                <div class="col-md-4" id="HermanaCI">
                                    <span style="font-size: 14px;">Número de Hermanas- CI</span>
                                    <input type="number" step="any" class="form-control" id="num_hermanasCI" name="num_hermanasCI" style="font-size: 14px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO Cardiopatía isquémica =======================-->

                                <div class="col-md-4" id="HermanoCI">
                                    <span style="font-size: 14px;">Número de Hermanos- CI</span>
                                    <input type="number" step="any" class="form-control" id="num_hermanosCI" name="num_hermanosCI" style="font-size: 14px;">
                                </div>

                            </div><!--===========DIV Cardiopatía isquémica ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE Cardiopatía isquémica================-->


                        <!--========= DISLIPIDEMIA ================-->

                        <div class="col-md-12" id="ah_dislipidemia">
                            <strong style="font-size: 14px;">Dislipidemia</strong>
                            <select name="dislipidemiaSelect" id="dislipidemiaSelect" class="form-control" style="font-size: 14px;" onchange="mostrarOcultarSeccionesdislipidemias()">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <!--========= HIPERTRIGLICERIDEMIA ================-->


                        <div class="col-md-12" id="ah_trigliceridemia" style="display: none;">
                            <strong style="font-size: 14px;">Hipertrigliceridemia</strong>
                            <select name="trigliceridemiaSelect" id="trigliceridemiaSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="container" id="trigliceridemia_familia" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="Padre_trigliceridemia">
                                    <span style="font-size: 14px;">Padre - HTG</span>
                                    <select name="trigliceridemia_Padre" id="trigliceridemia_Padre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE  HTG=======================-->
                                <div class="col-md-4" id="Madre_trigliceridemia">
                                    <span style="font-size: 14px;">Madre - HTG</span>
                                    <select name="HTG_Madre" id="HTG_Madre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO HTG=======================-->

                                <div class="col-md-4" id="AbueloMaterno_trigliceridemia">
                                    <span style="font-size: 14px;">Abuelo Materno - HTG</span>
                                    <select name="AbueloM_HTG" id="AbueloM_HTG" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA HTG  =======================-->
                                <div class="col-md-4" id="AbuelaMaterna_trigliceridemia">
                                    <span style="font-size: 14px;">Abuela Materno - HTG </span>
                                    <select name="AbuelaM_HTG" id="AbuelaM_HTG" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO HTG =======================-->
                                <div class="col-md-4" id="AbueloPaterno_trigliceridemia">
                                    <span style="font-size: 14px;">Abuelo Paterno - HTG</span>
                                    <select name="AbueloP_HTG" id="AbueloP_HTG" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============sI SELECCIONAMOS ABUELA PATERNA HTG =======================-->
                                <div class="col-md-4" id="AbuelaPaterna_trigliceridemia">
                                    <span style="font-size: 14px;">Abuela Paterna - HTG</span>
                                    <select name="AbuelaPaterna_HTG" id="AbuelaPaterna_HTG" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA  HTG =======================-->

                                <div class="col-md-4" id="Hermana_trigliceridemia">
                                    <span style="font-size: 14px;">Número de Hermanas- HTG </span>
                                    <input type="number" step="any" class="form-control" id="num_hermanasHTG" name="num_hermanasHTG" style="font-size: 14px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO HTG =======================-->

                                <div class="col-md-4" id="Hermano_trigliceridemia">
                                    <span style="font-size: 14px;">Número de Hermanos- HTG </span>
                                    <input type="number" step="any" class="form-control" id="num_hermanosHTG" name="num_hermanosHTG" style="font-size: 14px;">
                                </div>

                            </div><!--===========DIV HTG ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE HTG ================-->

                        <!--=========== DIV DEL ROW DE HTG ================-->



                        <!--=========== Hipercolesterolemia================-->

                        <div class="col-md-12" id="ah_Hipercolesterolemia" style="display: none;">
                            <strong style="font-size: 14px;">Hipercolesterolemia</strong>
                            <select name="HipercolesterolemiaSelect" id="HipercolesterolemiaSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="container" id="Hipercolesterolemia_familia" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="Padre_LDL">
                                    <span style="font-size: 14px;">Padre -H-LDL</span>
                                    <select name="LDL_Padre" id="LDL_Padre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE  H-LDL=======================-->
                                <div class="col-md-4" id="Madre_LDL">
                                    <span style="font-size: 14px;">Madre - H-LDL</span>
                                    <select name="LDL_Madre" id="LDL_Madre" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO H-LDL =======================-->

                                <div class="col-md-4" id="AbueloMaterno_LDL">
                                    <span style="font-size: 14px;">Abuelo Materno - H-LDL</span>
                                    <select name="AbueloM_LDL" id="AbueloM_LDL" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA H-LDL=======================-->
                                <div class="col-md-4" id="AbuelaMaterna_LDL">
                                    <span style="font-size: 14px;">Abuela Materna-H-LDL </span>
                                    <select name="AbuelaM_LDL" id="AbuelaM_LDL" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO H-LDL =======================-->
                                <div class="col-md-4" id="AbueloPaterno_LDL">
                                    <span style="font-size: 14px;">Abuelo Paterno - H-LDL</span>
                                    <select name="AbueloP_LDL" id="AbueloP_LDL" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============sI SELECCIONAMOS ABUELA PATERNA H-LDL =======================-->
                                <div class="col-md-4" id="AbuelaPaterna_LDL">
                                    <span style="font-size: 14px;">Abuela Paterna - H-LDL</span>
                                    <select name="AbuelaP_LDL" id="AbuelaP_LDL" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA  LDL =======================-->

                                <div class="col-md-4" id="Hermana_LDL">
                                    <span style="font-size: 14px;">Número de Hermanas- H-LDL </span>
                                    <input type="number" step="any" class="form-control" id="num_hermanasLDL" name="num_hermanasLDL" style="font-size: 14px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO LDL =======================-->

                                <div class="col-md-4" id="Hermano_trigliceridemia">
                                    <span style="font-size: 14px;">Número de Hermanos- H-LDL</span>
                                    <input type="number" step="any" class="form-control" id="num_hermanosLDL" name="num_hermanosLDL" style="font-size: 14px;">
                                </div>

                            </div><!--===========DIV LDL================--> <br>

                        </div> <!--=========== DIV DEL ROW DE LDL================-->


                        <!-- **********************************COMORBILIDADES*********************************** -->
                        <div class="col-md-12">
                            <div class="form-header">
                                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                    COMORBILIDADES</h5>
                            </div>
                        </div>

                        <!--=========== -	Enfermedad hepática grasa no alcohólica ================-->
                        <div class="col-md-6" id="com_hepato">
                            <strong style="font-size: 14px;">Enfermedad hepática grasa no alcohólica </strong>
                            <select name="HepaticaSelect" id="HepaticaSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Esteatosis">Esteatosis</option>
                                <option value="Esteatohepatitis">Esteatohepatitis</option>
                                <option value="Cirrosis">Cirrosis</option>
                            </select>
                        </div>

                        <!--=========== SELECCION DE CIRROSIS Y CHILD-PUGH ================-->
                        <div class="col-md-6" id="com_Child" style="display: none;">
                            <strong style="font-size: 14px;"> Child-Pugh </strong>
                            <select name="CirrosisSelect" id="CirrosisSelect" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>

                        <!--===========Dislipidemia ================-->
                        <div class="col-md-6" id="com_dislipidemia">
                            <strong style="font-size: 14px;">Dislipidemia </strong>
                            <select name="DislipidemiaSelect" id="DislipidemiaSelect" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Hipertrigliceridemia">Hipertrigliceridemia</option>
                                <option value="Hipercolesterolemia">Hipercolesterolemia</option>
                                <option value="Hipoalfalipoproteinemia">Hipoalfalipoproteinemia</option>
                                <option value="Mixta">Mixta</option>
                            </select>
                        </div>

                        <!--===========Distiroidismo ================-->
                        <div class="col-md-6" id="com_distiroidismo ">
                            <strong style="font-size: 14px">Distiroidismo </strong>
                            <select name="DistiroidismoSelect" id="DistiroidismoSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Hipotiroidismo">Hipotiroidismo</option>
                                <option value="Hipertiroidismo">Hipertiroidismo</option>
                                <option value="Bocio">Bocio</option>
                            </select>
                        </div>

                        <!--===========  Cancer ================-->
                        <div class="col-md-6" id="com_cancer">
                            <strong style="font-size: 14px">Cancer</strong>
                            <select name="CancerSelect" id="CancerSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===========  Insuficiencia Cardiaca ================-->
                        <div class="col-md-6" id="com_insuCardiaca">
                            <strong style="font-size: 14px">Insuficiencia Cardiaca</strong>
                            <select name="Insfuciencia_Cardiaca" id="InsuCardiacaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <!--===========  Disritmias cardiacas ================-->
                        <div class="col-md-6" id="com_Disritmiascardiacas">
                            <strong style="font-size: 14px">Disritmias cardiacas</strong>
                            <select name="Disritmias_cardiacas" id="DisritmiasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===========  Osteoporosis ================-->
                        <div class="col-md-6" id="com_Osteoporosis">
                            <strong style="font-size: 14px">Osteoporosis</strong>
                            <select name="OsteoporosisSelect" id="OsteoporosisSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===========  Gota/Hiperuricemia  ================-->
                        <div class="col-md-6" id="com_Gota">
                            <strong style="font-size: 14px">Gota/Hiperuricemia</strong>
                            <select name="Gota" id="GotaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--=========== Lupus Eritematoso Sistemico  ================-->
                        <div class="col-md-6" id="com_LES">
                            <strong style="font-size: 14px">Lupus Eritematoso Sistemico</strong>
                            <select name="LupusSelect" id="LupusSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--=========== Artritis Reumatoide   ================-->
                        <div class="col-md-6" id="com_atrtitis">
                            <strong style="font-size: 14px">Artritis Reumatoide</strong>
                            <select name="ArtritisSelect" id="ArtritisSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--=========== Hipertension  ================-->
                        <div class="col-md-6" id="com_hipertension">
                            <strong style="font-size: 14px">Hipertensión Arterial</strong>
                            <select name="HipertensioncomorSelect" id="HipertensioncomorSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===========  Síndrome de Cushing    ================-->
                        <div class="col-md-6" id="com_cushing">
                            <strong style="font-size: 14px">Síndrome de Cushing </strong>
                            <select name="CushingSelect" id="CushingSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <!--===========  Al seleeccionar  Cushing    ================-->
                        <div class="col-md-6" id="com_sindrome" style="display: none;">
                            <strong style="font-size: 14px">Tipo de Cushing </strong>
                            <select name="SindromeSelect" id="SindromeSelect" class="form-control" style="font-size: 14px">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Exogeno">Exógeno</option>
                                <option value="Endogeno">Endógeno</option>
                            </select>
                        </div>

                        <!-- **********************************LABORATORIOS*********************************** -->
                        <div class="col-md-12">
                            <div class="form-header">
                                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                    LABORATORIOS</h5>
                            </div>
                        </div>

                        <!--===============   Laboratorios -	TGO=======================-->

                        <div class="col-md-2">
                            <strong style="font-size: 14px;">TGO</strong>
                            <input type="number" step="any" class="form-control" id="id_TGO" name="id_TGO">
                        </div>
                        <!--===============   Laboratorios -	TGP=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">TGP</strong>
                            <input type="number" step="any" class="form-control" id="id_TGP" name="id_TGP">
                        </div>
                        <!--===============   Laboratorios -	FA=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">FA</strong>
                            <input type="number" step="any" class="form-control" id="id_FA " name="id_FA">
                        </div>
                        <!--===============   Laboratorios -	GGT=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">GGT</strong>
                            <input type="number" step="any" class="form-control" id="id_GGT" name="id_GGT">
                        </div>
                        <!--===============   Laboratorios -	DHL=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">DHL</strong>
                            <input type="number" step="any" class="form-control" id="id_DHL" name="id_DHL">
                        </div>
                        <!--===============   Laboratorios - Proteínas totales=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 13px;">Proteínas totales</strong>
                            <input type="number" step="any" class="form-control" id="id_proteinastotales" name="id_proteinastotales">
                        </div>
                        <!--===============   Laboratorios - Albumina=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Albumina</strong>
                            <input type="number" step="any" class="form-control" id="id_Albumina" name="id_Albumina">
                        </div>
                        <!--===============   Laboratorios - Globulinas=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Globulinas</strong>
                            <input type="number" step="any" class="form-control" id="id_Globulinas" name="id_Globulinas">
                        </div>
                        <!--===============   Laboratorios - Relación (A/G)=======================-->
                        <div class="col-md-2" id="relacionAG">
                            <strong style="font-size: 14px;">Relación (A/G)</strong>
                            <input type="number" step="any" class="form-control" id="id_relacion" name="id_relacion">
                        </div>
                        <!--===============   Laboratorios - BT=======================-->
                        <div class="col-md-2" id="BT">
                            <strong style="font-size: 14px;">BT</strong>
                            <input type="number" step="any" class="form-control" id="id_BT" name="id_BT">
                        </div>
                        <!--===============   Laboratorios - BD=======================-->
                        <div class="col-md-2" id="BT">
                            <strong style="font-size: 14px;">BD</strong>
                            <input type="number" step="any" class="form-control" id="id_BD" name="id_BD">
                        </div>
                        <!--===============   Laboratorios - BI=======================-->
                        <div class="col-md-2" id="BT">
                            <strong style="font-size: 14px;">BI</strong>
                            <input type="number" step="any" class="form-control" id="id_BI" name="id_BI">
                        </div>
                        <!--===============   Laboratorios - HB=======================-->
                        <div class="col-md-2" id="HB">
                            <strong style="font-size: 14px;">HB</strong>
                            <input type="number" step="any" class="form-control" id="id_HB" name="id_HB">
                        </div>
                        <!--===============   Laboratorios - VSG=======================-->
                        <div class="col-md-2" id="VSG">
                            <strong style="font-size: 14px;">VSG</strong>
                            <input type="number" step="any" class="form-control" id="id_VSG" name="id_VSG">
                        </div>
                        <!--===============   Laboratorios - OHD=======================-->
                        <div class="col-md-2" id="25-OHD">
                            <strong style="font-size: 14px;">25-OHD</strong>
                            <input type="number" step="any" class="form-control" id="id_OHD" name="id_OHD">
                        </div>
                        <!--===============   Laboratorios - creatinina=======================-->
                        <div class="col-md-3">
                            <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI Creatinina</a></i>
                            <input type="number" step="any" class="form-control" id="creatinina" name="creatinina" onchange="calcularNefropatia()">
                        </div>
                        <!--===============   Laboratorios - cistatina=======================-->
                        <div class="col-md-3">
                            <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI creatinina-cistatina</a></i>
                            <input type="number" step="any" class="form-control" id="cistatina" name="cistatina">
                        </div>

                        <!--===============   Laboratorios - Glucosa=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Glucosa</strong>
                            <input type="number" step="any" class="form-control" id="id_glucosa" name="id_glucosa">
                        </div>


                        <!--===============   Laboratorios- HB Glucosilada=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">HB Glucosilada</strong>
                            <input type="number" step="any" class="form-control" id="id_glucosilada" name="id_glucosilada">
                        </div>

                        <!--===============   Laboratorios- Ácido Úrico=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Ácido Úrico</strong>
                            <input type="number" step="any" class="form-control" id="id_urico" name="id_urico">
                        </div>

                        <!--===============   Laboratorios- Urea=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Urea</strong>
                            <input type="number" step="any" class="form-control" id="id_urea" name="id_urea">
                        </div>

                        <!--===============   Laboratorios- Creatinina=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Creatinina</strong>
                            <input type="number" step="any" class="form-control" id="id_creatinina" name="id_creatinina">
                        </div>

                        <!--===============   Laboratorios- Colesterol=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Colesterol</strong>
                            <input type="number" step="any" class="form-control" id="id_colesterol" name="id_colesterol">
                        </div>

                        <!--===============   Laboratorios- Triglicéridos=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Triglicéridos</strong>
                            <input type="number" step="any" class="form-control" id="id_trigliceridos" name="id_trigliceridos">
                        </div>

                        <!--===============   Laboratorios- LDL=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">LDL</strong>
                            <input type="number" step="any" class="form-control" id="id_LDL" name="id_LDL">
                        </div>

                        <!--===============   Laboratorios- HDL=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">HDL</strong>
                            <input type="number" step="any" class="form-control" id="id_HDL" name="id_HDL">
                        </div>

                        <!--===============   Laboratorios- ALB24 HRS=======================-->
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">ALB 24 HRS</strong>
                            <input type="number" step="any" class="form-control" id="id_HBG" name="id_HBG">
                        </div>

                        <!-- **********************************COMPLICACIONES*********************************** -->
                        <div class="col-md-12">
                            <div class="form-header">
                                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                    COMPLICACIONES</h5>
                            </div>
                        </div>

                        <!--===========     Retinopatía     ================-->
                        <div class="col-md-3" id="com_retinopatia ">
                            <strong style="font-size: 14px">Retinopatía</strong>
                            <select name="RetinopatiaSelect" id="RetinopatiaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="No proliferativa">No proliferativa</option>
                                <option value="Proliferativa">Proliferativa</option>
                                <option value="Edema Macular de significancia clínica">Edema Macular de significancia clínica</option>
                            </select>
                        </div>
                        <!--===========      Ceguera     ================-->
                        <div class="col-md-3" id="com_ceguera ">
                            <strong style="font-size: 14px">Ceguera </strong>
                            <select name="CegueraSelect" id="CegueraSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <!--===============  NEFROPATIA  =======================-->
                        <div class="col-md-3" id="com_nefro">
                            <strong style="font-size: 14px;">Nefropatía</strong>
                            <input type="text" class="form-control" id="id_nefro" name="nefro" readonly>
                        </div>

                        <!--===========             Cardiopatía isquémica     ================-->
                        <div class="col-md-3" id="com_cardiopatia ">
                            <strong style="font-size: 14px"> Cardiopatía isquémica</strong>
                            <select name="Cardiopatia_isquemicaSelect" id="Cardiopatia_isquemicaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===========     Enfermedad Vascular Cerebral Isquémica     ================-->
                        <div class="col-md-6" id="com_isquemica ">
                            <strong style="font-size: 14px"> Enfermedad Vascular Cerebral Isquémica </strong>
                            <select name="IsquemicaSelect" id="IsquemicaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===========        Insuficiencia Arterial Periférica    ================-->
                        <div class="col-md-6" id="com_cardiopatia ">
                            <strong style="font-size: 14px"> Insuficiencia Arterial Periférica</strong>
                            <select name="InsuficienciaArterialPerifericaSelect" id="InsuficienciaArterialPerifericaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <!--===========     Neuropatía     ================-->
                        <div class="col-md-12" id="com_neuropatia">
                            <strong style="font-size: 14px">Neuropatía </strong>
                            <select name="neuropatiaSelect" id="neuropatiaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="container" id="neuropatia" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="neuropatia_polineuropatia">
                                    <span style="font-size: 14px;">Polineuropatía </span>
                                    <select name="polineuropatia" id="polineuropatia" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Simétrica Distal=======================-->
                                <div class="col-md-4" id="neuropatia_simetrica">
                                    <span style="font-size: 14px;">Simétrica Distal</span>
                                    <select name="Simetrica_Distal" id="Simetrica_Distal" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Pie de Charcot =======================-->

                                <div class="col-md-4" id="neuropatia_Charcot">
                                    <span style="font-size: 14px;">Pie de Charcot</span>
                                    <select name="Pie_Charcot" id="Pie_Charcot" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Neuropatía GastrointestinalL=======================-->
                                <div class="col-md-4" id="neuropatia_gastrointestinal">
                                    <span style="font-size: 13px;">Neuropatía Gastrointestinal</span>
                                    <select name="neuropatia_gastro" id="neuropatia_gastro" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Neuropatía Genitourinaria =======================-->
                                <div class="col-md-4" id="neuropatia_genitourinario">
                                    <span style="font-size: 14px;">Neuropatía Genitourinaria</span>
                                    <select name="neuropatia_genito" id="neuropatia_genito" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============Neuropatía Cardiovascular=======================-->
                                <div class="col-md-4" id="neuropatia_Cardiovascular">
                                    <span style="font-size: 14px;">Neuropatía Cardiovascular</span>
                                    <select name="neuropatia_cardio" id="neuropatia_cardio" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                            </div><!--===========DIV NEUROPATIA================-->

                        </div> <!--=========== DIV NEUROPATIA================-->

                        <!--===========    Amputaciones    ================-->

                        <div class="col-md-12" id="com_amputaciones">
                            <strong style="font-size: 14px">Amputaciones</strong>
                            <select name="AmputacionesSelect" id="AmputacionesSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="container" id="amputaciones" style="display: none;">

                            <div class="row">

                                <div class="col-md-12" id="Dedos">
                                    <span style="font-size: 14px;">Dedos </span>
                                    <select name="amputaciones_dedos" id="amputaciones_dedos" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Lateralidad-DEDOS-MANOS =======================-->
                                <div class="col-md-6" id="dedos_Mano" style="display: none">
                                    <span style="font-size: 14px;">Dedos-Mano </span>
                                    <select name="Mano_dedos" id="Mano_dedos" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Derecho">Derecho</option>
                                        <option value="Izquierda">Izquierda</option>
                                        <option value="Bilateral">Bilateral</option>
                                    </select>
                                </div>
                                <!--===============Lateralidad-DEDOS-PIES =======================-->
                                <div class="col-md-6" id="dedos_Pies" style="display: none">
                                    <span style="font-size: 14px;">Dedos-Pie</span>
                                    <select name="Pies_dedos" id="Pies_dedos" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Derecho">Derecho</option>
                                        <option value="Izquierda">Izquierda</option>
                                        <option value="Bilateral">Bilateral</option>
                                    </select>
                                </div>


                                <!--===============Transmetatarsiana =======================-->
                                <div class="col-md-6" id="Transmetatarsiana">
                                    <span style="font-size: 14px;">Transmetatarsiana</span>
                                    <select name="amputaciones_transmetatarsiana" id="amputaciones_transmetatarsiana" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Lateralidad-Transmetatarsiana =======================-->
                                <div class="col-md-6" id="Transmetatarsiana_lateralidad" style="display: none">
                                    <span style="font-size: 14px;">Transmetatarsiana-Lateralidad </span>
                                    <select name="lateralidad_Transmetatarsiana" id="lateralidad_Transmetatarsiana" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Derecho">Derecho</option>
                                        <option value="Izquierda">Izquierda</option>
                                        <option value="Bilateral">Bilateral</option>
                                    </select>
                                </div>
                                <!--===============Infracondílea =======================-->

                                <div class="col-md-6" id="Infracondílea">
                                    <span style="font-size: 14px;">Infracondílea</span>
                                    <select name="amputaciones_infracondilea" id="amputaciones_infracondilea" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Lateralidad-Infracondílea =======================-->
                                <div class="col-md-6" id="Infracondílea_lateralidad" style="display: none">
                                    <span style="font-size: 14px;">Infracondílea-Lateralidad </span>
                                    <select name="lateralidad_Infracondilea" id="lateralidad_Infracondilea" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Derecho">Derecho</option>
                                        <option value="Izquierda">Izquierda</option>
                                        <option value="Bilateral">Bilateral</option>
                                    </select>
                                </div>
                                <!--===============Supracondílea Derecha=======================-->
                                <div class="col-md-6" id="supracondilea">
                                    <span style="font-size: 14px;">Supracondílea</span>
                                    <select name="amputaciones_Supracondilea" id="amputaciones_Supracondilea" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============Lateralidad-Supracondilea =======================-->
                                <div class="col-md-6" id="Supracondilea_lateralidad" style="display: none">
                                    <span style="font-size: 14px;">Supracondilea-Lateralidad </span>
                                    <select name="lateralidad_Supracondilea" id="lateralidad_Supracondilea" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Derecho">Derecho</option>
                                        <option value="Izquierda">Izquierda</option>
                                        <option value="Bilateral">Bilateral</option>
                                    </select>
                                </div>

                            </div><!--===========DIV AMPUTACIONES================-->

                        </div> <!--=========== DIV AMPUTACIONES================-->


                        <!-- ********************************** TRATAMIENTOS *********************************** -->

                        <div class="col-md-12">
                            <div class="form-header">
                                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                    TRATAMIENTO</h5>
                            </div>
                        </div>
                        <!-- ********************************** Tratamiento Farmacolofico *********************************** -->
                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                background-color:rgb(80, 177, 210,0.5);
                color: aliceblue;
                margin-top:5px;
                font-size: 13px;">
                                Tratamiento Farmacológico</h5>
                        </div>

                        <div class="col-md-12" id="id_tx1">
                            <strong style="font-size: 14px">Hipoglucemiantes</strong>
                            <select name="HipoglucemiantesSelect" id="HipoglucemiantesSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <div class="container" id="tx_Hipoglucemiantes" style="display: none">

                            <div class="row">

                                <!--===============Si con Tratamiento Hipoglucemiantes =======================-->

                                <!--===========    Metformina    ================-->
                                <div class="col-md-4" id="tx_metformina">
                                    <span style="font-size: 14px;">Metformina</span>
                                    <select name="MetforminaSelect" id="MetforminaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===========     Sulfonilureas     ================-->
                                <div class="col-md-4" id="tx_sulfonilureas">
                                    <span style="font-size: 14px;">Sulfonilureas</span>
                                    <select name="SulfonilureaSelect" id="SulfonilureaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Glibenclamida">Glibenclamida</option>
                                        <option value="Clorpropamida">Clorpropamida</option>
                                        <option value="Glibenclamida">Glibenclamida</option>
                                        <option value="Glipizida">Glipizida</option>
                                        <option value="Glicazida">Glicazida</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>

                                <!--===========     Glinidas    ================-->
                                <div class="col-md-4" id="tx_glinidas">
                                    <span style="font-size: 14px">Glinidas</span>
                                    <select name="GlinidasSelect" id="GlinidasSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Nateglinida">Nateglinida</option>
                                        <option value="Repaglinida">Repaglinida</option>
                                    </select>
                                </div>

                                <!--===========     I-DPP4    ================-->
                                <div class="col-md-4" id="tx_IDPP4">
                                    <span style="font-size: 14px">I-DPP4</span>
                                    <select name="I_DPP4Select" id="I_DPP4Select" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Sitagliptina">Sitagliptina</option>
                                        <option value="Linagliptina">Linagliptina</option>
                                        <option value="Alogliptina">Alogliptina</option>
                                        <option value="Saxagliptina">Saxagliptina</option>
                                        <option value="Vildagliptina">Vildagliptina</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>

                                <!--===========   -	ISGLT-2    ================-->
                                <div class="col-md-4" id="tx_ISGLT2">
                                    <span style="font-size: 14px">ISGLT-2 </span>
                                    <select name="ISGLT2Select" id="ISGLT2Select" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Dapaglifozina">Dapaglifozina</option>
                                        <option value="Canaglifozina">Canaglifozina</option>
                                        <option value="Empaglifozina">Empaglifozina</option>
                                    </select>
                                </div>

                                <!--===========     Análogos de GLP-1     ================-->
                                <div class="col-md-4" id="tx_GLP1">
                                    <span style="font-size: 14px">Análogos de GLP-1</span>
                                    <select name="GLP1Select" id="GLP1Select" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Exenatida">Exenatida</option>
                                        <option value="Liraglutida">Liraglutida</option>
                                        <option value="Semaglutida">Semaglutida</option>
                                        <option value="Lixisenatida">Lixisenatida</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                <!--===========    Pioglitazona     ================-->

                                <div class="col-md-6" id="tx_pioglitazona">
                                    <span style="font-size: 14px">Pioglitazona</span>
                                    <select name="PioglitazonaSelect" id="PioglitazonaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===========    Inhibidores de la alfaglucosidasa    ================-->
                                <div class="col-md-6" id="tx_inhibidores">
                                    <span style="font-size: 14px">Inhibidores de la alfaglucosidasa </span>
                                    <select name="inhibidoresSelect" id="inhibidoresSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Acarbosa">Acarbosa</option>
                                        <option value="Miglitol">Miglitol</option>
                                    </select>
                                </div>

                            </div><!--===========DIV TX Hipoglucemiantes ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE Hipoglucemiantes================-->

                        <!--=========== TRATAMIENTOS CON INSULINAS================-->

                        <div class="col-md-12" id="id_tx2">
                            <strong style="font-size: 14px">Insulinas</strong>
                            <select name="InsulinasSelect" id="InsulinasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <div class="container" id="tx_Insulinas" style="display: none">

                            <div class="row">

                                <!--===============Si con Tratamiento Hipoglucemiantes =======================-->

                                <!--===========    NPH    ================-->
                                <div class="col-md-6" id="tx_NPH">
                                    <span style="font-size: 14px">NPH</span>
                                    <select name="NPHSelect" id="NPHSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_nph" style="display: none">
                                    <span style="font-size: 14px;">NPH Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_nph" name="id_nph">
                                </div>

                                <!--===========    RAPIDA REGULAR    ================-->
                                <div class="col-md-6" id="tx_rapidaregular">
                                    <span style="font-size: 14px">Rápida regular </span>
                                    <select name="RapidaRegularSelect" id="RapidaRegularSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_rapidaregular" style="display: none">
                                    <span style="font-size: 14px;"> Rápida Regular Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_rapidaregular" name="id_rapidaregular">
                                </div>

                                <!--===========    GLARGINA     ================-->
                                <div class="col-md-6" id="tx_glargina ">
                                    <span style="font-size: 14px">Glargina</span>
                                    <select name="GlarginaSelect" id="GlarginaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Glargina" style="display: none">
                                    <span style="font-size: 14px;">Glargina Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_glargina" name="id_glargina">
                                </div>

                                <!--===========    GLARGINA 300     ================-->
                                <div class="col-md-6" id="tx_glargina300 ">
                                    <span style="font-size: 14px">Glargina 300</span>
                                    <select name="Glar300Select" id="Glar300Select" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Glar300" style="display: none">
                                    <span style="font-size: 14px;"> Glargina 300 Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_glargina300" name="id_glargina300">
                                </div>

                                <!--===========    DETEMIR       ================-->
                                <div class="col-md-6" id="tx_detemir">
                                    <span style="font-size: 14px">Detemir</span>
                                    <select name="DetemirSelect" id="DetemirSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Detemir" style="display: none">
                                    <span style="font-size: 14px;">Detemir Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_detemir" name="id_detemir">
                                </div>


                                <!--===========    DEGLUDEC   ================-->
                                <div class="col-md-6" id="tx_degludec">
                                    <span style="font-size: 14px">Degludec</span>
                                    <select name="DegludecrSelect" id="DegludecrSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Degludec" style="display: none">
                                    <span style="font-size: 14px;">Degludec Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_degludec" name="id_degludec">
                                </div>

                                <!--===========    LISPRO   ================-->
                                <div class="col-md-6" id="tx_lispro">
                                    <span style="font-size: 14px">Lispro</span>
                                    <select name="LisproSelect" id="LisproSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Lispro" style="display: none">
                                    <span style="font-size: 14px;">Lispro Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_lispro" name="id_lispro">
                                </div>

                                <!--===========   ASPART Aspart    ================-->
                                <div class="col-md-6" id="tx_aspart">
                                    <span style="font-size: 14px">Aspart</span>
                                    <select name="AspartSelect" id="AspartSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Aspart" style="display: none">
                                    <span style="font-size: 14px;">Aspart Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_aspart" name="id_aspart">
                                </div>


                                <!--===========   Glulisina     ================-->
                                <div class="col-md-6" id="tx_glulisina">
                                    <span style="font-size: 14px">Glulisina</span>
                                    <select name="Glulisina" id="GlulisinaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Glulisina" style="display: none">
                                    <span style="font-size: 14px;">Glulisina Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_glulisina" name="id_glulisina">
                                </div>

                                <!--===========    NPH/REGULAR   ================-->
                                <div class="col-md-6" id="tx_NPH_Regular">
                                    <span style="font-size: 14px">NPH/Regular</span>
                                    <select name="NPH_Regular" id="NPHRegularSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_nphRegular" style="display: none">
                                    <span style="font-size: 14px;">NPH/Regular Dosis Diarias</span>
                                    <input type="number" step="any" class="form-control" id="id_nphRegular" name="id_nphRegular">
                                </div>


                                <!--===========    Lispro protamina/lispro   ================-->
                                <div class="col-md-6" id="tx_protamina">
                                    <span style="font-size: 14px">Lispro protamina/Lispro</span>
                                    <select name="protamina" id="ProtaminaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="dosis_Protamina" style="display: none">
                                    <span style="font-size: 14px;">Lispro protamina/Lispro</span>
                                    <input type="number" step="any" class="form-control" id="id_Protamina" name="id_Protamina">
                                </div>

                            </div><!--===========DIV TX INSULINAS ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE INSULINAS================-->

                        <!--===========    Hipolipemiantes    ================-->

                        <div class="col-md-12" id="id_tx3">
                            <strong style="font-size: 14px">Hipolipemiantes</strong>
                            <select name="HipolipemiantesSelect" id="HipolipemiantesSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <div class="container" id="tx_Hipolipemiantes" style="display: none">
                            <div class="row">

                                <!--===============Si con Tratamiento Hipolipemiantes=======================-->


                                <!--===========    Estatinas   ================-->
                                <div class="col-md-3" id="tx_Estatinas">
                                    <span style="font-size: 14px">Estatinas</span>
                                    <select name="EstatinasSelect" id="EstatinasSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Rosuvastatina">Rosuvastatina</option>
                                        <option value="Atorvastatina">Atorvastatina</option>
                                        <option value="Pravastatina">Pravastatina</option>
                                        <option value="Simvastatina">Simvastatina</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===========    Fibratos   ================-->
                                <div class="col-md-3" id="tx_Fibratos">
                                    <span style="font-size: 14px">Fibratos</span>
                                    <select name="FibratosSelect" id="FibratosSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Bezafibrato">Bezafibrato</option>
                                        <option value="Fenofibrato">Fenofibrato</option>
                                        <option value="Gemfibrozil">Gemfibrozil</option>
                                    </select>
                                </div>

                                <!--===========    Omega   ================-->
                                <div class="col-md-3" id="tx_Omega">
                                    <span style="font-size: 14px">Omega 3</span>
                                    <select name="OmegaSelect" id="OmegaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===========    Inhibidores de la Absorción   ================-->
                                <div class="col-md-3" id="tx_absorcion">
                                    <span style="font-size: 14px">Inhibidores de la Absorción</span>
                                    <select name="Inhibidores_AbsorcionSelect" id="Inhibidores_AbsorcionSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Ezetimiba">Ezetimiba</option>
                                    </select>
                                </div>



                            </div><!--===========DIV TX Hipolipemiantes ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE Hipolipemiantes================-->



                        <!--=========== tratamientos con  Antihipertensivos================-->


                        <div class="col-md-12" id="id_tx4">
                            <strong style="font-size: 14px">Antihipertensivos</strong>
                            <select name="AntihipertensivosSelect" id="AntihipertensivosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <div class="container" id="tx_Antihipertensivos" style="display: none">

                            <div class="row">

                                <!--===============Si con Antihipertensivos=======================-->

                                <!--===========    Hipolipemiantes    ================-->
                                <div class="col-md-6" id="tx_IECAS">
                                    <span style="font-size: 14px">IECAS</span>
                                    <select name="IECASSelect" id="IECASSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Enalapril">Enalapril</option>
                                        <option value="Lisinopril">Lisinopril</option>
                                        <option value="Captopril">Captopril</option>
                                        <option value="Ramipril">Ramipril</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===============Si con ARA-II=======================-->
                                <div class="col-md-6" id="tx_ARAII">
                                    <span style="font-size: 14px">ARA-II</span>
                                    <select name="ARAIISelect" id="ARAIISelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Losartan">Losartan</option>
                                        <option value="Telmisartan">Telmisartan</option>
                                        <option value="Irbesartan">Irbesartan</option>
                                        <option value="Candesartan">Candesartan</option>
                                        <option value="Olmesartan">Olmesartan</option>
                                        <option value="Valsartan">Valsartan</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===============Si conInhibidores de la Renina=======================-->

                                <div class="col-md-6" id="tx_Inhibidores">
                                    <span style="font-size: 14px">Inhibidores de la Renina</span>
                                    <select name="InhibidoresSelect" id="InhibidoresSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Aliskiren">Aliskiren</option>
                                    </select>
                                </div>


                                <!--===============Si Calcioantagonistas=======================-->
                                <div class="col-md-6" id="tx_Calcioantagonistas">
                                    <span style="font-size: 14px">Calcioantagonistas</span>
                                    <select name="CalcioantagonistasSelect" id="CalcioantagonistasSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Nifedipino">Nifedipino</option>
                                        <option value="Amlodipino">Amlodipino</option>
                                        <option value="Verapamilo">Verapamilo</option>
                                        <option value="Felodipino">Felodipino</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===============Si Betabloqueadores=======================-->

                                <div class="col-md-6" id="tx_Betabloqueadores">
                                    <span style="font-size: 14px">Betabloqueadores</span>
                                    <select name="BetabloqueadoresSelect" id="BetabloqueadoresSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Metoprolol">Metoprolol</option>
                                        <option value="Propranolol">Propranolol</option>
                                        <option value="Labetalol">Labetalol</option>
                                        <option value="Carvedilol">Carvedilol</option>
                                        <option value="Atenolol">Atenolol</option>
                                        <option value="Bisoprolol">Bisoprolol</option>
                                        <option value="Nebivolol">Nebivolol</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>


                                <!--===============Si Diuréticos tiazidas=======================-->

                                <div class="col-md-6" id="tx_Diureticos">
                                    <span style="font-size: 14px">Diuréticos tiazidas</span>
                                    <select name="DiureticosSelect" id="DiureticosSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Hidroclorotiazida">Hidroclorotiazida</option>
                                        <option value="Clortalidona">Clortalidona</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===============Si Alfabloqueadores  =======================-->

                                <div class="col-md-6" id="tx_Alfabloqueadores">
                                    <span style="font-size: 14px">Alfabloqueadores</span>
                                    <select name="AlfabloqueadoresSelect" id="AlfabloqueadoresSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Prazocina">Prazocina</option>
                                        <option value="Terazocina">Terazocina</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===============Si Espironolactona =======================-->

                                <div class="col-md-6" id="tx_Espironolactona">
                                    <span style="font-size: 14px">Espironolactona</span>
                                    <select name="EspironolactonaSelect" id="EspironolactonaSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>


                            </div><!--===========DIV TX Antihipertensivos ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE Antihipertensivos================-->


                        <!--=========== tratamientos con  OTROS ================-->


                        <div class="col-md-12" id="id_tx5">
                            <strong style="font-size: 14px">Otros</strong>
                            <select name="OtrosSelect" id="OtrosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <div class="container" id="tx_Otros" style="display: none">

                            <div class="row">

                                <!--===============Si con OTROS=======================-->

                                <!--===========    ASA    ================-->
                                <div class="col-md-6" id="tx_ASA">
                                    <span style="font-size: 14px">ASA</span>
                                    <select name="ASASelect" id="ASASelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>


                                <!--===========    Alopurinol    ================-->
                                <div class="col-md-6" id="tx_Alopurinol">
                                    <span style="font-size: 14px">Alopurinol</span>
                                    <select name="AlopurinolSelect" id="AlopurinolSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <!--===============Si -	Neuromodulador =======================-->
                                <div class="col-md-6" id="tx_Neuromodulador">
                                    <span style="font-size: 14px">Neuromodulador</span>
                                    <select name="NeuromoduladorSelect" id="NeuromoduladorSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Gabapentina">Gabapentina</option>
                                        <option value="Pregabalina">Pregabalina</option>
                                        <option value="Carbamazepina">Carbamazepina</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <!--===============Si -	Procineticos =======================-->

                                <div class="col-md-6" id="tx_Procineticos">
                                    <span style="font-size: 14px">Procineticos</span>
                                    <select name="ProcineticosSelect" id="ProcineticosSelect" class="form-control estadoSelect" style="font-size: 14px">
                                        <option value="Negado">Negado</option>
                                        <option value="Metocloprmida">Metocloprmida</option>
                                        <option value="Cisaprida">Cisaprida</option>
                                        <option value="Cinitaprida">Cinitaprida</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                            </div><!--===========DIV TX OTROS ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE OTROS================-->


                        <!--===========Numero de Farmacos Totales ================-->
                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Número de Fármacos Totales utilizados </strong>
                            <input type="number" class="form-control" name="Farmacos_utilizados" id="Farmacos_utilizados" style="font-size: 13px;">
                        </div> <br>

                        <!--===========Medidas Generales================-->
                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                background-color:rgb(80, 177, 210,0.5);
                color: aliceblue;
                margin-top:15px;
                font-size: 14px;">
                                Medidas Generales</h5>
                        </div>

                        <div class="col-md-12" id="id_Ejercicio">
                            <strong style="font-size: 14px">Ejercicio</strong>
                            <select name="EjercicioSelect" id="EjercicioSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <div class="container" id="tx_ejercicio" style="display: none">

                            <div class="row">

                                <!--===============Si EJERCICIO=======================-->

                                <!-- Veces a la Semana -->
                                <div class="col-md-3" id="Veces_tiempo">
                                    <strong style="font-size: 14px;">Veces a la Semana</strong>
                                    <input type="number" class="form-control" id="id_vecestiempo" name="id_vecestiempo">
                                </div>

                                <!-- Apego Veces -->
                                <div class="col-md-3" id="Apego_tiempo">
                                    <strong style="font-size: 14px;">Apego Veces</strong>
                                    <input type="text" class="form-control" id="id_apegotiempo" name="id_apegotiempo" readonly>
                                </div>

                                <!-- Tiempo a la Semana -->
                                <div class="col-md-3" id="Tiempo_Semana">
                                    <strong style="font-size: 14px;">Tiempo a la Semana</strong>
                                    <input type="number" class="form-control" id="id_tiemposemana" name="id_tiemposemana" placeholder="min">
                                </div>

                                <!-- Apego a la Semana -->
                                <div class="col-md-3" id="Apego_Veces">
                                    <strong style="font-size: 14px;">Apego a la Semana</strong>
                                    <input type="text" class="form-control" id="id_apegoveces" name="id_apegoveces" readonly>
                                </div>


                            </div><!--===========DIV TX Ejercicio ================--> <br>

                        </div> <!--=========== DIV DEL ROW DE Ejercicio================-->








                    </div> <!-- <row PRIMERO-->



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="js/conteo.js"></script>

<script>
    $(document).ready(function() {
        // Cuando se selecciona un estado
        $('#estado').change(function() {
            var estadoId = $(this).val(); // Obtiene el valor seleccionado

            // Filtra los municipios por el estado seleccionado
            var filteredMunicipios = municipiosData.filter(function(municipio) {
                return municipio.Estado_Id == estadoId;
            });

            // Limpia el segundo select
            $('#municipio').empty();

            // Agrega las opciones recuperadas
            if (filteredMunicipios.length > 0) {
                $.each(filteredMunicipios, function(index, municipio) {
                    $('#municipio').append('<option value="' + municipio.MunicipioID + '">' + municipio.NombreMunicipio + '</option>');
                });
            } else {
                // Si no hay municipios, muestra un mensaje
                $('#municipio').append('<option value="">No hay municipios disponibles</option>');
            }
        });
    });
</script>