<!-- Modal -->
<div class="modal fade" id="ModalHepatitisc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(244, 164, 96); color:aliceblue;">
        <h1 class="modal-title fs-5" id="exampleModalLabel" >
        <i class="bi bi-person-fill-add"></i>
        Nuevo Paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--En la siguiente línea de código se realiza la incersión en la BD-->
        <form id="hepatitis_form" autocomplete="off">
        
          <div style="background-color: rgb(210, 180, 140);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Datos del Paciente</h6> 
          </div> 

          <div class="row">
                        <div class="col-md-4" id="idcurp">
                            <strong style="font-size: 14px;">CURP</strong>
                            <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP..." style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-4" id="idnombre">
                            <strong style="font-size: 14px;">Nombre Completo</strong>
                            <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="" placeholder="Nombre(s) Apellidos" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha Nacimiento</strong>
                            <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 14px;" readonly>
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Edad</strong>
                            <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 14px;" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Sexo</strong>
                            <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 14px;" readonly>
                        </div>

                        <div class="col-md-4" style="font-size: 14px;">
                            <strong style="font-size: 14px;">Estado Civil</strong>
                            <select name="estadocivil" id="estadocivil" class="form-control">
                                <option value="Sin Registro">Seleccione...</option>
                                <option value="Soltero">Soltero(a)</option>
                                <option value="Casado">Casado(a)</option>
                                <option value="Viudo">Viudo(a)</option>
                                <option value="Divorciado">Divorciado(a)</option>
                                <option value="Concubinato">Concubinato</option>
                                <option value="Divorciado">Separado(a)</option>
                            </select>
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Estado</strong>
                            <input type="text" id="estado" name="estado" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Municipio</strong>
                            <input type="text" id="municipio" name="municipio" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Referencia</strong>
                            <select id="referencia" name="referencia" class="form-control">
                                <option value="Seleccione">Seleccione...</option>
                                <option value="si">Sí</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="unidad_referencia_div" style="display: none;">
                            <strong style="font-size: 14px;">Unidad de Referencia</strong>
                            <input type="text" name="unidad_referencia" class="form-control">
                        </div>

          </div> <!--Se cierra <div class="row">-->


          <!--*************************************************************************************************+-->
          
            <div style="background-color: rgb(210, 180, 140);
                          color: aliceblue;
                          text-align: center;
                          margin-top: 20px;">
                  <h6>Somatometría</h6> 
            </div> 

              <div class="row">

                          <div class="col-md-2">
                              <strong style="font-size: 14px;">Talla</strong>
                              <input type="text" class="form-control" id="talla" name="talla" required>
                          </div>

                          <div class="col-md-2">
                              <strong style="font-size: 14px;">Peso</strong>
                              <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" required>
                          </div>

                          <div class="col-md-2">
                              <strong style="font-size: 14px;">IMC</strong>
                              <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="" readonly>
                          </div>

                          <div class="col-md-3">
                              <strong style="font-size: 14px;">Resultado IMC</strong>
                              <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="" readonly>
                          </div>

                          <div class="col-md-3">
                              <strong style="font-size: 14px;">Circunferencia</strong>
                              <input type="number" step="any" class="form-control" id="circunferencia" name="circunferencia" required>
                          </div>
              </div>

<!--*************************************************************************************************+-->
          
              <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Factores de Riesgo</h6> 
                          </div> 

                          <div class="col-md-12" style="font-size: 14px;">
                        
<!-- hice cambios aqui -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Sin_Registro" name="FR_Sin_Registro" value="Sin Registro">
                                <label class="form-check-label" for="FR_Sin_Registro" style="font-size: 14px;">Sin registro</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Relaciones_Sexuales" name="FR_Relaciones_Sexuales" value="Relaciones Sexuales" onchange="showRelacionesSexualesDiv(this)">
                                <label class="form-check-label" for="FR_Relaciones_Sexuales" style="font-size: 14px;">Relaciones Sexuales</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Transfusiones" name="FR_Transfusiones" value="Transfusiones">
                                <label class="form-check-label" for="FR_Transfusiones" style="font-size: 14px;">Transfusiones</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Drogas_Endovenosas" name="FR_Drogas_Endovenosas" value="Drogas Endovenosas">
                                <label class="form-check-label" for="FR_Drogas_Endovenosas" style="font-size: 14px;">Drogas Endovenosas</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Piercing" name="FR_Piercing" value="Piercing">
                                <label class="form-check-label" for="FR_Piercing" style="font-size: 14px;">Piercing</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Presidiario" name="FR_Presidiario" value="Presidiario">
                                <label class="form-check-label" for="FR_Presidiario" style="font-size: 14px;">Presidiario</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Expresidiario" name="FR_Expresidiario" value="Expresidiario">
                                <label class="form-check-label" for="FR_Expresidiario" style="font-size: 14px;">Expresidiario</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="FR_Situacion_de_Calle" name="FR_Situacion_de_Calle" value="Situación de Calle">
                                <label class="form-check-label" for="FR_Situacion_de_Calle" style="font-size: 14px;">Situación de Calle</label>
                            </div>
                    </div>

                    <!--************************************************************************************************-->

                    <div class="col-md-12" id="idrelacionessexuales" style="display: none;">
                    
                        <div style="background-color: rgb(160, 82, 45,0.5);
                                        color: aliceblue;
                                        font-size: 14px;
                                        text-align: center;
                                        margin-top: 20px;">
                                        
                                Relaciones Sexuales
                          </div>
                        
                            <!-- hice cambios aqui -->

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RS_Ninguna" name="RS_Ninguna" value="Ninguna">
                                <label class="form-check-label" for="RS_Ninguna" style="font-size: 14px;">Ninguna de las anteriores</label>
                            </div> 

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RS_Pacientes_con_VIH" name="RS_Pacientes_con_VIH" value="Pacientes con VIH">
                                <label class="form-check-label" for="RS_Pacientes con VIH" style="font-size: 14px;">Pacientes con VIH</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RS_Pacientes_con_Hepatitis" name="RS_Pacientes_con_Hepatitis" value="Pacientes con Hepatitis">
                                <label class="form-check-label" for="RS_Pacientes con Hepatitis" style="font-size: 14px;">Pacientes con Hepatitis</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RS_Sexo_Servidoras" name="RS_Sexo_Servidoras" value="Sexo Servidoras">
                                <label class="form-check-label" for="RS_Sexo Servidoras" style="font-size: 14px;">Sexo Servidoras</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RS_Parejas_Ocasionales" name="RS_Parejas_Ocasionales" value="Parejas Ocasionales">
                                <label class="form-check-label" for="RS_Parejas Ocasionales" style="font-size: 14px;">Parejas Ocasionales</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RS_Pacientes_con_Toxicomanias" name="RS_Pacientes_con_Toxicomanias" value="Pacientes con Toxicomanias">
                                <label class="form-check-label" for="RS_Pacientes con Toxicomanias" style="font-size: 14px;">Pacientes con Toxicomanias</label>
                            </div>
                    </div>


                    <!--*************************************************************************************************+-->
          
                    <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Antecedentes Personales Patológicos</h6> 
                    </div> 

                        <div class="col-md-12" style="font-size: 14px;">

                          <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Hemofilia" name="APP_Hemofilia" value="Hemofilia">
                                <label class="form-check-label" for="APP_Hemofilia">Hemofilia</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_ERC_en_Hemodialisis" name="APP_ERC_en_Hemodialisis" value="ERC en Hemodialisis">
                                <label class="form-check-label" for="APP_ERC_en_Hemodialisis">ERC en Hemodialisis</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Trabajador_de_la_Salud" name="APP_Trabajador_de_la_Salud" value="Trabajador de la Salud">
                                <label class="form-check-label" for="APP_Trabajador_de_la_Salud">Trabajador de la Salud</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Transplante" name="APP_Transplante" value="Transplante">
                                <label class="form-check-label" for="APP_Transplante">Transplante</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Cirrosis" name="APP_Cirrosis" value="Cirrosis">
                                <label class="form-check-label" for="APP_Cirrosis">Cirrosis</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Obesidad" name="APP_Obesidad" value="Obesidad">
                                <label class="form-check-label" for="APP_Obesidad">Obesidad</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Prediabetes" name="APP_Prediabetes" value="Prediabetes">
                                <label class="form-check-label" for="APP_Prediabetes">Prediabetes</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Diabetes_Mellitus" name="APP_Diabetes_Mellitus" value="Diabetes Mellitus">
                                <label class="form-check-label" for="APP_Diabetes_Mellitus">Diabetes Mellitus</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Hipertension_Arterial" name="APP_Hipertension_Arterial" value="Hipertensión Arterial">
                                <label class="form-check-label" for="APP_Hipertension_Arterial">Hipertensión Arterial</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Alcoholismo" name="APP_Alcoholismo" value="Alcoholismo">
                                <label class="form-check-label" for="APP_Alcoholismo">Alcoholismo</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Virus_HB" name="APP_Virus_HB" value="Virus HB">
                                <label class="form-check-label" for="APP_Virus_HB">Virus HB</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="APP_Ninguno" name="APP_Ninguno" value="Ninguno">
                                <label class="form-check-label" for="APP_Ninguno">Ninguno</label>
                            </div>
                        </div>

                        
        <!--*************************************************************************************************+-->
          
                    <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Atención Clinica</h6> 
                    </div> 

                    <div class="row">
                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Atención Inicial</strong>
                        <input type="date" id="fai" name="fai" class="form-control" style="font-size: 14px;" max="<?= date("Y-m-d") ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Carga Viral Inicial</strong>
                        <input type="date" id="fcvi" name="fcvi" class="form-control" style="font-size: 14px;" max="<?= date("Y-m-d") ?>">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Carga Viral Dx</strong>
                        <input type="number" step="any" class="form-control" id="cvd" name="cvd" style="font-size: 14px;">
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 14px;">Respuesta Viral Sostenida (RVS)</strong>
                        <select name="respuestaviralsostenida" id="respuestaviralsostenida" class="form-control" style="font-size: 14px;" onchange="showRVSOptions(this)">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Indetectable">Indetectable</option>
                            <option value="Detectable">Detectable</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="idvalorrvs" style="display: none;">
                        <strong style="font-size: 14px;">Número RVS</strong>
                        <input type="number" step="any" class="form-control" id="valorrvs" style="font-size: 14px;" name="valorrvs">
                    </div>

                    <div class="col-md-6" id="idfrvs" style="display: none;">
                        <strong style="font-size: 14px;">Fecha RVS</strong>
                        <input type="date" id="frvs" name="frvs" class="form-control" style="font-size: 14px;" max="<?= date("Y-m-d") ?>">
                    </div>

                    </div>

                     <!--*************************************************************************************************+-->
          
                     <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Laboratorios</h6> 
                    </div> 
                    <div class="row">
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">AST</strong>
                            <input type="number" step="any" class="form-control" id="AST" name="AST" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">BUN</strong>
                            <input type="number" step="any" class="form-control" id="BUN" name="BUN" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">CREAT</strong>
                            <input type="number" step="any" class="form-control" id="CREAT" name="CREAT" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;" >ALT</strong>
                            <input type="number" step="any" class="form-control" id="ALT" name="ALT" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Plaquetas</strong>
                            <input type="number" step="any" class="form-control" id="Plaquetas" name="Plaquetas" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Albumina</strong>
                            <input type="number" step="any" class="form-control" id="Albumina" name="Albumina" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Glucosa</strong>
                            <input type="number" step="any" class="form-control" id="Glucosa" name="Glucosa" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">HBA1C</strong>
                            <input type="number" step="any" class="form-control" id="HBA1C" name="HBA1C" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Trigliceridos</strong>
                            <input type="number" step="any" class="form-control" id="Trigliceridos" name="Trigliceridos" style="font-size: 14px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">HDL</strong>
                            <input type="number" step="any" class="form-control" id="HDL" name="HDL" style="font-size: 14px;" required>
                        </div>
                    </div>

                    <!--*************************************************************************************************+-->
          
                    <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Ultrasonido Hepático</h6> 
                    </div> 
                    
                    <div class="col-md-12">
                        <strong style="font-size: 14px;">Ultrasonido Hepático</strong>
                        <select name="ultrasonidohepatico" id="ultrasonidohepatico" class="form-control" style="font-size: 14px;" onchange="showUHOptions(this)">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Si">Sí</option>
                            <option value="No">No</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-12" id="idresultadoultrasonido" style="display: none;">
                        <strong style="font-size: 14px;">Resultado Ultrasonido</strong>
                        <select name="resultadoultrasonido" id="resultadoultrasonido" class="form-control" style="font-size: 14px;" onchange="showEsteatosisOptions(this)">
                            <option value="Seleccione">Seleccione...</option>
                            <option value="Normal">Normal</option>
                            <option value="Esteatosis">Esteatosis</option>
                            <option value="Cirrosis">Cirrosis</option>
                            <option value="Tumor">Tumor</option>
                        </select>
                    </div>


                    <div class="col-md-12" id="idesteatosis" style="display: none;">
                        <strong style="font-size: 14px;">Esteatosis</strong>
                        <select name="opcionesteatosis" id="opcionesteatosis" style="font-size: 14px;" class="form-control">
                            <option value="Seleccione">Seleccione...</option>
                            <option value="S1 del 11 al 33">S1 (11% al 33%)</option>
                            <option value="S2 del 34 al 66">S2 (34% al 66%)</option>
                            <option value="S3 (67 O Positivo)">S3 (>67%)</option>
                        </select>
                    </div>

                    <!--*************************************************************************************************+-->
          
                    <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Índice de Enfermedad Hepática</h6> 
                    </div> 

                    <div class="row">
                    <div class="col-md-2">
                        <a style="font-size: 14px;" href="https://www.hepatitisc.uw.edu/page/clinical-calculators/fib-4" target="_blank">FIB 4</a>
                        <input type="number" step="any" class="form-control" id="fib4" name="fib4" style="font-size: 14px;" onkeyup="calculateFIB4Result()">
                    </div>
                    <div class="col-md-4">
                        <strong id="calcularresultado" style="font-size: 14px;">Resultado FIB 4</strong>
                        <input type="text" class="form-control" id="resultadofib" value="" name="resultadofib" style="font-size: 14px;" readonly>
                    </div>


                    <div class="col-md-2">
                        <a style="font-size: 14px;" href="https://www.rccc.eu/calculadoras/NFS.html" target="_blank">NAFLD</a>
                        <input type="number" step="any" class="form-control" id="nafld" name="nafld" style="font-size: 14px;" onkeyup="calculateNAFLDResult()">
                    </div>
                    <div class="col-md-4">
                        <strong id="calcularresultado" style="font-size: 14px;">Resultado NAFLD</strong>
                        <input type="text" class="form-control" id="resultadonafld" value="" name="resultadonafld" style="font-size: 14px;" readonly>
                    </div>

                    <div class="col-md-2">
                        <a style="font-size: 14px;" href="https://www.hepatitisc.uw.edu/page/clinical-calculators/apri" target="_blank">APRI</a>
                        <input type="number" step="any" class="form-control" id="apri" name="apri" style="font-size: 14px;" onkeyup="calculateAPRIResult()">
                    </div>
                    <div class="col-md-4">
                        <strong id="calcularresultado" style="font-size: 14px;">Resultado APRI</strong>
                        <input type="text" class="form-control" id="resultadoapri" value="" name="resultadoapri" style="font-size: 14px;" readonly>
                    </div>

                    </div>

                    <!--*************************************************************************************************+-->
          
                    <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Tratamiento</h6> 
                    </div> 

                    <div class="row">
                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha Inicio Tratamiento</strong>
                            <input type="date" id="fit" name="fit" style="font-size: 14px;" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Tratamiento</strong>
                            <select name="tratamiento" id="tratamiento" style="font-size: 14px;" class="form-control">
                                <option value="Seleccione...">Seleccione...</option>
                                <option value="Peginterferon">Peginterferon</option>
                                <option value="Sofosbuvir/Velpatasvir">Sofosbuvir/Velpatasvir</option>
                                <option value="Sofosbuvir/Ledipasvir">Sofosbuvir/Ledipasvir</option>
                                <option value="Desabuvir/Ombitasvir">Desabuvir/Ombitasvir</option>
                                <option value="Paritaprevir/Ritonavir">Paritaprevir/Ritonavir</option>
                                <option value="Daclatasvir+Sofosbuvir">Daclatasvir+Sofosbuvir</option>
                                <option value="Glecaprevir/Pibrentasvir">Glecaprevir/Pibrentasvir</option>
                                <option value="Glecaprevir/Pibrentasvir">Desabuvir/Ombitasvir+Paritaprevir/Ritonavir</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Ribavirina</strong>
                            <select name="Ribavirina" id="Ribavirina" style="font-size: 14px;" class="form-control">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha Fin Tratamiento</strong>
                            <input type="date" id="fft" name="fft" style="font-size: 14px;" class="form-control">
                        </div>

                    </div>

                     <!--*************************************************************************************************+-->
          
                     <div style="background-color: rgb(210, 180, 140);
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                                <h6>Defunción</h6> 
                    </div> 

                    <!--Cuando seleccione Sí en Defunción, muestra el select de Causa-->

                    <div class="col-md-12">
                        <strong style="font-size: 14px;">Defunción</strong>
                        <select name="defuncion" id="defuncion" class="form-control" style="font-size: 14px;" onchange="showDefuncionOptions(this)">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                        <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-12" id="idcausadefuncion" style="display:none;">
                        <strong style="font-size: 14px;">Causa</strong>
                        <select name="causadefuncion" id="causadefuncion" style="font-size: 14px;" class="form-control">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Normal">Hepatitis C</option>
                        <option value="Otra Patología">Otra Patología</option>
                        </select>
                    </div>
          
      
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
