<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header custom-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            <i class="bi bi-pass-fill"></i>Registro Pacientes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form id="lph_form"  method="POST" >
            <div style="background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>DATOS GENERALES</h6> 
            </div> 

            <div class="row">

            <div class="col-md-4" id="id_curp"> 
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 13px;">
                </div>

                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px; background">Fecha de Nacimiento</strong>
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

                <div class="col-md-4" id="id_estado">
                    <strong style="font-size: 14px;">Estado de Origen</strong>
                    <input id="estado_Origen" name="Estado" onblur="calcularEdad();" type="text" class="control form-control" value="" style="font-size: 13px;" >
                </div>

                <div class="col-md-4" id="id_municipio">
                    <strong style="font-size: 14px;"> Alcaldía o Municipio</strong>
                    <input type="text" class="form-control" id="id_municipio" name="municipio" value="" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Referenciado</strong>
                    <select name="referencia" id="refererencia" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                
                <div class="col-md-4">
                            <strong style="font-size: 14px;">Número Telefónico</strong>
                            <input type="tel" id="telefono" name="telefono" class="control form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" minlength="10" maxlength="12">
                        </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Escolaridad</strong>
                    <select name="Escolaridad" id="Escolaridad" class="form-control" style="font-size: 13px;">
                    <option value="">Seleccione</option>
                                <option value="Primaria Completa">Primaria Completa</option>
                                <option value="Primaria Incompleta">Primaria Incompleta</option>
                                <option value="Secundaria Completa">Secundaria Completa</option>
                                <option value="Secundaria Incompleta">Secundaria Incompleta</option>
                                <option value="Preparatoria Completa">Preparatoria Completa</option>
                                <option value="Preparatoria Incompleta">Preparatoria Incompleta</option>
                                <option value ="Licenciatura Completa">Licenciatura Completa </otion>
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
                                <option value="">Sin Registro</option>
                            </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Circunferencia Abdominal</strong>
                    <input type="number" step="any" class="form-control" id="circunferencia"  name="circunferencia" style="font-size: 13px;" >
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
                    <strong style="font-size: 12px;">Estudio Socioeconómico</strong>
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
                        <option value="Nx">Nx</option>
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
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        ANTECEDENTES HEREDOFAMILIARES</h5>
                    </div>
                </div>
                <!--===============AH: Fisura Labiopalatina=======================-->

                <div class="col-md-12" id="ah_lph" >
                <strong style="font-size: 14px;">Fisura Labiopalatina </strong>
                    <select name="fisura" id="fisura" class="form-control" style="font-size: 14px;" >
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div> 

                <div class ="col-md-12"  id="camposOcultos" style="display: none;">

                <div class= "row">
               
                       <div class="col-md-3" id="PadreLPH">
                    <span style="font-size: 14px;">Padre</span>
                    <select name="LPH_Padre" id="LPH_Padre" class="form-control" style="font-size: 14px;">
                        <option value="no">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                    </div>
        <!--===============sI SELECCIONAMOS MADRE  LPH=======================-->
                    <div class="col-md-3" id="MadreLPH" >
                        <span style="font-size: 14px;" >Madre</span>
                            <select name="LPH_Madre" id="LPH_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO LPH=======================-->
                    
                    <div class="col-md-3" id="Abuelo_MaternoLPH" >
                        <span style="font-size: 14px;">Abuelo Materno</span>
                            <select name="AbueloM_LPH" id="AbueloM_LPH" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA LPH  =======================-->      
                    <div class="col-md-3" id="Abuela_MaternaLPH" >
                        <span style="font-size: 14px;" >Abuela Materna</span>
                            <select name="AbuelaM_LPH" id="AbuelaM_LPH" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO LPH =======================-->
                    <div class="col-md-3" id="Abuelo_PaternoLPH" >
                        <span style="font-size: 14px;" >Abuelo Paterno</span>
                        <select name="AbueloP_LPH" id="AbueloP_LPH" class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    
        <!--===============sI SELECCIONAMOS ABUELA PATERNA LPH =======================-->
                    <div class="col-md-3" id="Abuela_PaternaHAS" >
                        <span style="font-size: 14px;" >Abuela Paterna</span>
                            <select name="AbuelaP_LPH" id="AbuelaP_LPH" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA  LPH =======================-->

                    <div class="col-md-3" id="HermanaLPH" >
                    <span style="font-size: 13px;">Número de Hermanas</span>
                            <input type="number" step="any" class="form-control" id="num_hermanasLPH" name="num_hermanas"  style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO  LPH =======================-->
                        
                    <div class="col-md-3" id="HermanoLPH">
                        <span style="font-size: 13px;" >Número de Hermanos</span>
                        <input type="number" step="any" class="form-control" id="num_hermanosLPH" name="num_hermanos"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV LPH ================--><br> 

                </div> <!--=========== DIV DEL ROW DE LPH ================-->
        
        
<!-- *********************************** Inicia ANTECEDENTES PERINATALES*********************************** -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                       ANTECEDENTES PERINATALES</h5>
                    </div>
                </div>

                <div class="col-md-4">
                            <strong style="font-size: 14px;">Semanas Gestación</strong>
                            <input type="number" min="0" max="40" class="form-control" id="semanasgestacion" name="semanasgestacion" style="font-size: 14px;" >
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Complicaciones en Embarazo</strong>
                            <select name="complicacionesembarazo" id="complicacionesembarazo"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Complicaciones en Parto</strong>
                            <select name="complicacionesparto" id="complicacionesparto" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Tabaquismo Durante Embarazo</strong>
                            <select name="tabaquismo" id="tabaquismo" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;" >Alcoholismo Durante Embarazo</strong>
                            <select name="alcoholismo" style="font-size: 14px;" id="alcoholismo" class="form-control">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
                    
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Malformaciones Congénitas</strong>
                            <select name="malformaciones" style="font-size: 14px;"  id="malformaciones" class="form-control">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="idxfisura">
                            <strong style="font-size: 14px;">Dx de Fisura Durante Embarazo</strong>
                            <select name="dxfisuraembarazo" style="font-size: 14px;" id="dxfisuraembarazo" class="form-control">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

<!-- *********************************** Inicia Sección de Antecedentes Personales PatológicOS*********************************** -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                ANTECEDENTES PERSONALES PATOLÓGICOS</h5>
                    </div>
                </div>

              <div class="col-md-12">
                <strong style="font-size: 14px;">Alergicos</strong>
                <select name="alergicos" style="font-size: 14px;" id="alergicos" class="form-control">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-12" id="medicamentos" style="display: none;">

                <div class= "row">
               
                       <div class="col-md-3" id="analgesicos_medicamentos">
                    <span style="font-size: 14px;">Analgesicos</span>
                    <select name="Analgesicos" id="Analgesicos" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS   Anestesicos=======================-->
                    <div class="col-md-3" id="anestesicos_medicamentos" >
                        <span style="font-size: 14px;" >Anestesicos</span>
                            <select name="Anestesicos" id="Anestesicos" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>

        <!--===============sI SELECCIONAMOS  Antibioticos  =======================-->      
                    <div class="col-md-3" id="antibioticos_medicamentos" >
                        <span style="font-size: 14px;" >Antibioticos</span>
                            <select name="Antibioticos" id="Antibioticos" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS  Antiinflamatorios =======================-->
                    <div class="col-md-3" id="antiinflamatorios_medicamentos" >
                        <span style="font-size: 14px;" >Antiinflamatorios</span>
                        <select name="Antiinflamatorios" id="Antiinflamatorios" class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    

                    </div><!--===========DIV Alergias ================--><br> 

                </div> <!--=========== DIV DEL ROW DE Alergias ================-->
        

<!-- *********************************** Inicia Sección de  ATENCIÓN CLINICA*********************************** -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 15px;">
               ATENCIÓN CLÍNICA</h5>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133,0.5);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
               ETAPA DE ATENCIÓN CLÍNICA</h5>
                    </div>
                </div>
                <div class="col-md-6" id="idfechaingreso">
                                <strong style="font-size: 14px;">Fecha Ingreso Clínica </strong>
                                <input type="date" id="fechaingreso" style="font-size: 14px;" name="fechaingreso" class="form-control" max="<?= date("Y-m-d") ?>">
                            </div>
<!-- *********************************** ETAPA DE ATENCIÓN ********************************** -->
                            
                <div class=" col-md-6">
                    <strong style="font-size: 14px;">Etapa de Atención</strong>
                    <select name="etapaatencion" style="font-size: 14px;"  id="etapaatencion" class="form-control">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Etapa A de 0 a 24 meses">Etapa A - 0 a 24 meses</option>
                        <option value="Etapa B de 3 a 8 años">Etapa B - 3 a 8 años</option>
                        <option value="Etapa C de 9 a 15 años">Etapa C - 9 a 15 años</option>
                        <option value="Etapa D de 16 a 22 años">Etapa D - 16 a 22 años</option>
                    </select>
                </div> <br>

<!-- Etapa A de 0 a 24 meses-->

        <div class="col-md-12" id="idmsvaloracionesmedicasa" style="display: none;">
    <div class="form-header">
        <h5 class="form-title"
            style="text-align: center;
            background-color: rgb(3, 168, 195);
            color: aliceblue;
            margin-top: 5px;
            font-size: 15px;">
            Etapa A: Valoraciones Médicas
        </h5>
    </div>
            <div class="row">

                    <div class="col-md-3">
                            <strong style="font-size: 14px;">Audiologia</strong>
                            <select name="Audiologia" id="Audiologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                            <select name="Maxilofacial" id="Cirugia_Maxilofacial_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                            <select name="Reconstructiva" id="Cirugia_Reconstructiva_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
               
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Neonatología</strong>
                            <select name="Neonatologia" id="Neonatologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Ortodoncia</strong>
                            <select name="Ortodoncia" id="Ortodoncia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
        
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                            <select name="Otorrinolaringologia_A" id="Otorrinolaringologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                            <select name="Protesis_MaxilofacialA" id="Protesis_Maxilofacial_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Psicologia</strong>
                            <select name="Psicologia_A" id="Psicologia_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Rehabilitación</strong>
                            <select name="Rehabilitacion_A" id="Rehabilitacion_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                            <select name="Lenguaje_A" id="Terapia_De_Lenguaje_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
       
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Fisica</strong>
                            <select name="Fisica_A" id="Terapia_Fisica_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                            <select name="Ocupacional_A" id="Terapia_Ocupacional_A"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
                </div>  <br> <!-- Etapa A de 0 a 24 meses  Valoraciones Medicas-->
                </div> <!-- Etapa A de 0 a 24 meses Valoraciones Medicas-->


                <!-- Etapa A de 0 a 24 meses Etapa A: Tipo Tratamiento Médico-->

                <div class="col-md-12" id="idmstratamientomedicoa" style="display: none;">
                <div class="form-header">
                    <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(3, 168, 195);
                        color: aliceblue;
                        margin-top: 5px;
                        font-size: 15px;">
                        Etapa A : Tipo de Tratamiento Médico
                    </h5>
    </div>

            <div class="row">

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Atención Psicomotriz</strong>
                        <select name="Atencion_Psicomotriz_A" id="Atención_Psicomotriz_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Curso De Inducción</strong>
                        <select name="Curso_De_Induccion_A" id="Curso_De_Induccion_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Curso Lactancia Materna</strong>
                        <select name="Curso_Lactancia_Materna_A" id="Curso_Lactancia_Materna_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
        
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                        <select name="Estudios_Audiologicos_A" id="Estudios_Audiologicos_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Terapia Para Padres</strong>
                        <select name="Terapia_Para_Padres_A" id="Terapia_Para_Padres_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
    
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Valoración Inicial De Lenguaje</strong>
                        <select name="Valoracion_Inicial_De_Lenguaje_A" id="Valoracion_Inicial_De_Lenguaje_A"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

            </div>  <!-- Etapa A de 0 a 24 meses  TIPO DE TRATAMIENTO MÉDICO--> <br>
            </div> <!-- Etapa A de 0 a 24 meses TIPO DE TRATAMIENTO MÉDICOs-->


        <!-- Etapa A de 0 a 24 meses Etapa A: Tratamiento Quirurgico-->

                <div class="col-md-12" id="idmstipotratamientoqxa" style="display: none;">
                       <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa A: Tratamiento Quirúrgico
                            </h5>
                        </div>

                    <div class="row">

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Ortopedia Pre-quirúrgica</strong>
                        <select name="Ortopedia_PreQuirurgica_XA" id="Ortopedia_PreQuirurgica_XA"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Palatoplastia</strong>
                        <select name="Palatoplastia_XA" id="Palatoplastia_XA"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Queiloplastias</strong>
                        <select name="Queiloplastias_XA" id="Queiloplastias_XA"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

            </div> <br>  <!-- Etapa A de 0 a 24 meses  ESTATUS-->

            <div class="row">
            <div class="col-md-6" id="idestatusa" style="display: none;">
                    <strong style="font-size: 14px;">Etapa A: Estatus</strong>
                    <select name="EstatusQxa" id="EstatusQxa" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Realizado">Realizado</option>
                        <option value="En Curso">En Curso</option>
                        <option value="No Requiere">No Requiere</option>
                    </select>
                </div>

                 <!--Etapa A: Estatus-->

            <!--Etapa A: Fecha de Cirugia-->

                    <div class="col-md-6" id="idfechacirugiaa" style="display: none;">
                        <strong  style="font-size: 14px;">Etapa A: Fecha de Cirugia</strong>
                        <input type="date" id="fechacirugiaa" name="fechacirugiaa" class="form-control">
                    </div>


                    </div><!--row de ESTATUS Y HORA DE CIRUGIA-->
            </div> <!-- Etapa A de 0 a 24 meses Tratamiento Quirurgico-->



                    
                                    <!--INICIA ETAPA B -->

<!-- Etapa B de 0 a 24 meses-->

            <div class ="col-md-12"  id="idmsvaloracionesmedicasb" name="idmsvaloracionesmedicasb" style="display: none; ">

                <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa B: Valoraciones Medicas
                            </h5>
                        </div>

                <div class="row">

                    <div class="col-md-3">
                            <strong style="font-size: 14px;">Audiologia</strong>
                            <select name="Audiologia_B" id="Audiologia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                            <select name="Cirugoa_Maxilofacial_B" id="Cirugoa_Maxilofacial_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                            <select name="Cirugia_Reconstructiva_B" id="Cirugia_Reconstructiva_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
               
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Nutricion</strong>
                            <select name="Nutricion_B" id="Nutricion_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Ortodoncia</strong>
                            <select name="Ortodoncia_B" id="Ortodoncia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
        
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                            <select name="Otorrinolaringologia_B" id="Otorrinolaringologia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Pediatría</strong>
                            <select name="Pediatria_B" id="Pediatria_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Psicologia</strong>
                            <select name="Psicologia_B" id="Psicologia_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                            <select name="Protesis_Maxilofacial_B" id="Protesis_Maxilofacial_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Rehabilitación</strong>
                            <select name="Rehabilitacion_B" id="Rehabilitacion_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>
       
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                            <select name="Terapia_De_Lenguaje_B" id="Terapia_De_Lenguaje_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Fisica</strong>
                            <select name="Terapia_Fisica_B" id="Terapia_Fisica_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                            <select name="Terapia_Ocupacional_B" id="Terapia_Ocupacional_B"  class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Sí</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                </div> <br> <!-- Etapa B de 0 a 24 meses  Valoraciones Medicas-->
                </div> <!-- Etapa B de 0 a 24 meses Valoraciones Medicas-->

        <!--ETAPA B : TIPO DE TRATAMIENTO MÉDICO-->

            
                <div class ="col-md-12"  id="idmstratamientomedicob" style="display: none;" >
              
                        <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa B: Tipo Tratamiento Médico
                            </h5>
                        </div>

                
                <div class="row">

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Atención Psicologica</strong>
                        <select name="Atencion_Psicologica_B" id="Atención_Psicologica_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Curso De Inducción</strong>
                        <select name="Curso_De_Induccion_B" id="Curso_De_Induccion_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                        <select name="Estudios_Audiologicos_B" id="Estudios_Audiologicos_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
           
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Valoración Patrón De Cierre Velar</strong>
                        <select name="Valoracion_Patron_De_Cierre_Velar_B" id="Valoracion_Patron_De_Cierre_Velar_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Valoración Del Lenguaje</strong>
                        <select name="Valoracion_Del_Lenguaje_B" id="Valoracion_Del_Lenguaje_B"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

            </div>  <br> <!-- ROW DE ETAPA B : TIPO DE TRATAMIENTO MÉDICO-->

            </div>  <!--ETAPA B : TIPO DE TRATAMIENTO MÉDICO-->


        <!--Etapa B: Tipo Tratamiento Quirurgico-->


        <div class ="col-md-12"  id="idmstipotratamientoqxb" style="display: none;" >
            
                        <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                             Etapa B: Tipo Tratamiento Quirurgico
                            </h5>
                        </div>
       
            <div class="row">

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Injerto Óseo</strong>
                    <select name="Injerto_Oseo_XB" id="Injerto_Óseo_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Ortopedia Maxilar</strong>
                    <select name="Ortopedia_Maxilar_XB" id="Ortopedia_Maxilar_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Palatoplastia</strong>
                    <select name="Palatoplastia_XB" id="Palatoplastia_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Queiloplastia</strong>
                    <select name="Queiloplastias_XB" id="Queiloplastias_XB"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                </div> <br>   <!--Etapa B: Tipo Tratamiento Quirurgico-->

                 <!--Etapa B: Estatus-->

                 <div class="row">
            <div class="col-md-6" id="idestatusb" style="display: none;">
                    <strong style="font-size: 14px;">Etapa B: Estatus</strong>
                        <select name="EstatusQxb" id="EstatusQxb" class="form-control" style="font-size: 14px;">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Realizado">Realizado</option>
                            <option value="En Curso">En Curso</option>
                            <option value="No Requiere">No Requiere</option>
                        </select>
                    </div>

                    
            <!--Etapa B: Fecha de Cirugia-->

                <div class="col-md-6" id="id_datecirugiab" style="display: none;">
                    <strong style="font-size: 14px;">Etapa B: Fecha de Cirugia</strong>
                    <input type="date" id="idfechacirugiab" name="fechacirugiab" class="form-control">
                </div>

            </div> <!--DIV DEL ROW DE ESTATUS Y FECHA DE CIRUGIA-->


        </div>    <!--Etapa B: Tipo Tratamiento Quirurgico-->

                        <!-- EMPIEZA ETAPA C-->

<!-- Etapa C-->

        <div class ="col-md-12"  id="idmsvaloracionesmedicasc" name="idmsvaloracionesmedicasc" style="display: none; ">
             
                    <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                              Etapa C: Valoraciones Medicas
                            </h5>
                        </div>

            <div class="row">

                <div class="col-md-3">
                        <strong style="font-size: 14px;">Audiologia</strong>
                        <select name="Audiologia_C" id="Audiologia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                        <select name="Cirugia_Maxilofacial_C" id="Cirugia_Maxilofacial_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                        <select name="Cirugia_Reconstructiva_C" id="Cirugia_Reconstructiva_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
           
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Nutricion</strong>
                        <select name="Nutricion_C" id="Nutricion_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Ortodoncia</strong>
                        <select name="Ortodoncia_C" id="Ortodoncia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
    
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                        <select name="Otorrinolaringologia_C" id="Otorrinolaringologia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Pediatría</strong>
                        <select name="Pediatria_C" id="Pediatria_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Psicologia</strong>
                        <select name="Psicologia_C" id="Psicologia_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                        <select name="Protesis_Maxilofacial_C" id="Protesis_Maxilofacial_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Rehabilitación</strong>
                        <select name="Rehabilitacion_C" id="Rehabilitacion_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
   
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                        <select name="Terapia_De_Lenguaje_C" id="Terapia_De_Lenguaje_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Fisica</strong>
                        <select name="Terapia_Fisica_C" id="Terapia_Fisica_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                        <select name="Terapia_Ocupacional_C" id="Terapia_Ocupacional_C"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

            </div> <br> <!-- Etapa C de 0 a 24 meses  Valoraciones Medicas-->
            </div> <!-- Etapa C de 0 a 24 meses Valoraciones Medicas-->

    <!--ETAPA C : TIPO DE TRATAMIENTO MÉDICO-->

        <div class ="col-md-12"  id="idmstratamientomedicoc" style="display: none;" >
            <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa C: Tipo Tratamiento Médico
                            </h5>
                        </div>
        
            <div class="row">

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Atención Psicologica</strong>
                    <select name="Atencion_Psicologica_C" id="Atención_Psicologica_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Curso De Inducción</strong>
                    <select name="Curso_De_Induccion_C" id="Curso_De_Induccion_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                    <select name="Estudios_Audiologicos_C" id="Estudios_Audiologicos_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 14px;">Valoración Patrón De Cierre Velar</strong>
                    <select name="Valoracion_Patron_De_Cierre_Velar_C" id="Valoracion_Patron_De_Cierre_Velar_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Valoración Del Lenguaje</strong>
                    <select name="Valoracion_Del_Lenguaje_C" id="Valoracion_Del_Lenguaje_C"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

        </div>  <br> <!-- ROW DE ETAPA C : TIPO DE TRATAMIENTO MÉDICO-->

        </div>  <!--ETAPA C : TIPO DE TRATAMIENTO MÉDICO-->


    <!--Etapa C: Tipo Tratamiento Quirurgico-->


    <div class ="col-md-12"  id="idmstipotratamientoqxc" style="display: none;" >

              <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa C: Tipo Tratamiento Quirurgico
                            </h5>
                        </div>

        <div class="row">

            <div class="col-md-4">
                <strong style="font-size: 14px;">Injerto Óseo</strong>
                <select name="Injerto_Oseo_XC" id="Injerto_Óseo_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortodoncia</strong>
                <select name="Ortodoncia_XC" id="Ortodoncia_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortopedia Maxilar</strong>
                <select name="Ortopedia_Maxilar_XC" id="Ortopedia_Maxilar_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Otras Plastias</strong>
                <select name="Otras_Plastias_XC" id="Otras_Plastias_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Palatoplastia</strong>
                <select name="Palatoplastia_XC" id="Palatoplastia_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Queiloplastia</strong>
                <select name="Queiloplastia_XC" id="Queiloplastia_XC"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>



            </div>   <br> <!--Etapa C: Tipo Tratamiento Quirurgico-->

                        <!--Etapa C: Estatus-->
    <div class="row">

                <div class="col-md-6" id="idestatusc" style="display: none; ">
                    <strong style="font-size: 14px;">Etapa C: Estatus</strong>
                    <select name="EstatusQxc" id="EstatusQxc" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Realizado">Realizado</option>
                        <option value="En Curso">En Curso</option>
                        <option value="No Requiere">No Requiere</option>
                    </select>
                </div>

                <!--Etapa C: Fecha de Cirugia-->
        <div class="col-md-6" id="id_fechacirugiac" style="display: none;">
                    <strong style="font-size: 14px;">Etapa C: Fecha de Cirugia</strong>
                    <input type="date" id="idfechacirugia_c" name="idfechacirugia_c" class="form-control">
                </div>

            </div><!--ROW DE ESTATUS Y FECHA DE CIRUGIA-->


        </div>    <!--Etapa D: Tipo Tratamiento Quirurgico-->

    
        <!-- INICIA ETAPA D-->

            <!-- Etapa D -->

            <div class ="col-md-12"  id="idmsvaloracionesmedicasd" name="idmsvaloracionesmedicasd" style="display: none; ">
            
                <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa D: Valoraciones Medicas
                            </h5>
                        </div>

                <div class="row">

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Audiologia</strong>
                        <select name="Audiologia_D" id="Audiologia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Maxilofacial</strong>
                        <select name="Cirugia_Maxilofacial_D" id="Cirugia_Maxilofacial_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Cirugía Reconstructiva</strong>
                        <select name="Cirugia_Reconstructiva_D" id="Cirugia_Reconstructiva_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
           
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Nutricion</strong>
                        <select name="Nutricion_D" id="Nutricion_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Ortodoncia</strong>
                        <select name="Ortodoncia_D" id="Ortodoncia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
    
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Otorrinolaringologia</strong>
                        <select name="Otorrinolaringologia_D" id="Otorrinolaringologia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Pediatría</strong>
                        <select name="Pediatria_D" id="Pediatria_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Psicologia</strong>
                        <select name="Psicologia_D" id="Psicologia_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Protesis Maxilofacial</strong>
                        <select name="Protesis_Maxilofacial_D" id="Protesis_Maxilofacial_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Rehabilitación</strong>
                        <select name="Rehabilitacion_D" id="Rehabilitacion_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>
   
                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia De Lenguaje</strong>
                        <select name="Terapia_De_Lenguaje_D" id="Terapia_De_Lenguaje_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Fisica</strong>
                        <select name="Terapia_Fisica_D" id="Terapia_Fisica_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Terapia Ocupacional</strong>
                        <select name="Terapia_Ocupacional_D" id="Terapia_Ocupacional_D"  class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Sí</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

            </div> <br>  <!-- Etapa D   Valoraciones Medicas-->
            </div> <!-- Etapa D  Valoraciones Medicas-->


    <!--ETAPA D : TIPO DE TRATAMIENTO MÉDICO-->

            <div class ="col-md-12"  id="idmstratamientomedicod" style="display: none;" >
        
                    <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa D: Tipo Tratamiento Médico
                            </h5>
                        </div>

            <div class="row">


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Atención Psicologica</strong>
                    <select name="Atencion_Psicologica_D" id="Atención_Psicologica_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Curso De Inducción</strong>
                    <select name="Curso_De_Induccion_D" id="Curso_De_Induccion_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Estudios Audiológicos</strong>
                    <select name="Estudios_Audiologicos_D" id="Estudios_Audiologicos_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Valoración Del Lenguaje</strong>
                    <select name="Valoracion_Del_Lenguaje_D" id="Valoracion_Del_Lenguaje_D"  class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Sí</option>
                        <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

        </div> <br> <!-- ROW DE ETAPA D : TIPO DE TRATAMIENTO MÉDICO-->

        </div>  <!--ETAPA D : TIPO DE TRATAMIENTO MÉDICO-->


    <!--Etapa D: Tipo Tratamiento Quirurgico-->

        <div class ="col-md-12"  id="idmstipotratamientoqxd" style="display: none;" >
        
                    <div class="form-header">
                            <h5 class="form-title"
                                style="text-align: center;
                                background-color: rgb(3, 168, 195);
                                color: aliceblue;
                                margin-top: 5px;
                                font-size: 15px;">
                                Etapa D: Tipo Tratamiento Quirurgico
                            </h5>
                        </div>

        <div class="row">

            <div class="col-md-4">
                <strong style="font-size: 13px;">Cirugía  Ortognatica/Distracción Ósea</strong>
                <select name="Cirugia_Ortognatica_Distraccion_Osea_XD" id="Cirugia_Ortognatica_Distraccion_Ósea_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

        <div class="col-md-4">
                <strong style="font-size: 14px;">Injerto Óseo</strong>
                <select name="Injerto_Oseo_XD" id="Injerto_Óseo_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortodoncia</strong>
                <select name="Ortodoncia_XD" id="Ortodoncia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Ortopedia Maxilar</strong>
                <select name="Ortopedia_Maxilar_XD" id="Ortopedia_Maxilar_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Otras Plastias</strong>
                <select name="Otras_Plastias_XD" id="Otras_Plastias_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Palatoplastia</strong>
                <select name="Palatoplastia_XD" id="Palatoplastia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Queiloplastia</strong>
                <select name="Queiloplastia_XD" id="Queiloplastia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Rinoplastia</strong>
                <select name="Rinoplastia_XD" id="Rinoplastia_XD"  class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Sí</option>
                    <option value="Desconoce">Desconoce</option>
                </select>
            </div>

            </div> <br>   <!--Etapa D: Tipo Tratamiento Quirurgico-->
            
            <div class="row">
            <!--Etapa D: Estatus-->

                    <div class="col-md-6" id="idestatusd" style="display: none; ">
                        <strong style="font-size: 14px;">Etapa D: Estatus</strong>
                            <select name="EstatusQxd" id="EstatusQxd" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Realizado">Realizado</option>
                                <option value="En Curso">En Curso</option>
                                <option value="No Requiere">No Requiere</option>
                            </select>
                        </div>

        <!--Etapa D: Fecha de Cirugia-->

                <div class="col-md-6" id="id_fechacirugiad" style="display: none;">
                    <strong style="font-size: 14px;">Etapa D: Fecha de Cirugia</strong>
                    <input type="date" id="idfechacirugia_d" name="idfechacirugia_d" class="form-control">
                </div>

                </div><!--ROW DEL ESTATUS D Y FECHA CIRUGIA -->

            </div>    <!--Etapa D: Tipo Tratamiento Quirurgico-->

            <!-- ***********************************FISURA*********************************** -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(3, 187, 133) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        FISURA</h5>
                    </div>
                </div>
                <!--=============== Fisura =======================-->

                <div class="col-md-12">
                    <strong style="font-size: 14px;">Fisura</strong>
                    <select name="fisura_or" id="fisura_or" class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    <option value="Desconoce">Desconoce</option>
                    </select>
                </div>

                   
                <div class="col-md-12" id="fisura_organo" style="display: none;">
                        <strong style="font-size: 14px;">Órgano</strong>
               
                        <div class= "row" >

                       <!--===============LABIO DERECHO=======================-->
                       <div class="col-md-4" id="labio_derecho">
                    <span style="font-size: 14px;">Labio Derecho</span>
                    <select name="labioderecho" id="labioderecho" class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Completo">Completo</option>
                            <option value="Incompleto">Incompleto</option>
                            <option value="Sin Fisura">Sin Fisura</option>
                            <option value="Submucoso">Submucoso</option>
                    </select>
                    </div>

        <!--===============LABIO IZQUIERO=======================-->
                    <div class="col-md-4" id="labio_izq" >
                        <span style="font-size: 14px;" >Labio Izquierdo</span>
                            <select name="labioizq" id="labioizq" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Completo">Completo</option>
                                <option value="Incompleto">Incompleto</option>
                                <option value="Sin Fisura">Sin Fisura</option>
                                <option value="Submucoso">Submucoso</option>
                            </select>
                    </div>
        <!--===============Alveolo Derecho=======================-->
                    
                    <div class="col-md-4" id="AlveoloDerecho" >
                        <span style="font-size: 14px;">Alveolo Derecho</span>
                            <select name="Alveolo_Derecho" id="Alveolo_Derecho" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Completo">Completo</option>
                                <option value="Incompleto">Incompleto</option>
                                <option value="Sin Fisura">Sin Fisura</option>
                                <option value="Submucoso">Submucoso</option>
                            </select>
                    </div>
        <!--===============Alveolo Izquierdo =======================-->      
                    <div class="col-md-4" id="Alveolo_Izquierdo" >
                        <span style="font-size: 14px;" >Alveolo Izquierdo</span>
                            <select name="AlveoloIzquierdo" id="AbuelaM_LPH" class="form-control" style="font-size: 14px;">
                            <option value="Negado">Negado</option>
                            <option value="Completo">Completo</option>
                            <option value="Incompleto">Incompleto</option>
                            <option value="Sin Fisura">Sin Fisura</option>
                            <option value="Submucoso">Submucoso</option>
                        </select>
                    </div>
        <!--===============Paladar Duro=======================-->
                    <div class="col-md-4" id="paladar_duro" >
                        <span style="font-size: 14px;" >Paladar Duro</span>
                        <select name="paladarduro" id="paladarduro" class="form-control" style="font-size: 14px;">
                           <option value="Negado">Negado</option>
                            <option value="Completo">Completo</option>
                            <option value="Incompleto">Incompleto</option>
                            <option value="Sin Fisura">Sin Fisura</option>
                            <option value="Submucoso">Submucoso</option>
                        </select>
                    </div>  
                    
        <!--===============VELO DE PALADAR=======================-->
                    <div class="col-md-4" id="velo_paladar" >
                        <span style="font-size: 14px;" >Velo De Paladar</span>
                            <select name="velopaladar" id="velopaladar" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Completo">Completo</option>
                                    <option value="Incompleto">Incompleto</option>
                                    <option value="Sin Fisura">Sin Fisura</option>
                                    <option value="Submucoso">Submucoso</option>
                                </select>
                    </div>

                    </div><!--===========DIV LPH ================--><br> 

                </div> <!--=========== DIV DEL ROW DE LPH ================-->

 
    


    

            </div> <!-- <row PRIMERO-->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  </div> <!-- <div class="modal-footer">-->
          
              </div> <!-- <div class="modal-content">-->
        
            </form>
      </div><!-- <div class="modal-body">-->
        
  </div> <!-- cierra el div <div class="modal-dialog modal-lg">-->
</div> <!-- cierra el primer div <div class="modal fade" id="RegistrarPacienteInterconsulta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">-->

<script src=js/scriptmodal.js></script>