
<!-- Modal -->
<div class="modal fade" id="Ganglio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="color: aliceblue; background-color:rgb(247, 130, 72);">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            <i class="bi bi-person-plus-fill"></i> Registrar Paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> <!-- <div class="modal-header" style="color: aliceblue; background-color:rgb(14, 162, 153);">-->
     <form action="">
      
     <div class="modal-body">
    

            <div style="background-color: rgb(247, 130, 72, 0.8);
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Generales</h6> 
            </div>

            <div class="row"> <!-- DATOS GENERALES  -->

                <div class="col-md-4">
                    <strong style="font-size:14px;">Nombre Paciente</strong>
                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"  placeholder="Nombre(s) Apellidos"   style="font-size:14px;" required>
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Sexo</strong>
                    <input type="text" name="sexo" id="sexo" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Edad de Abordaje</strong>
                    <input type="text" name="edad" id="edad" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Residencia</strong>
                    <input id="residencia" name="residencia" type="text" class="control form-control"  style="font-size:14px;" required>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Nivel Socioeconomico</strong>
                    <select name="Nivel_socioeconomico" id="Nivel_socioeconomico" class="form-control" style="font-size:14px;">
                    <option value="0">Seleccione...</option>
                    <option value="Alto">Alto</option>
                    <option value="Medio">Medio</option>
                    <option value="Medio/Bajo">Medio/Bajo</option>
                    <option value="Bajo">Bajo</option>
                    </select>
                </div>

            </div> <!-- DIV DATOS GENERALES PX  -->
               
            
            
            <!-- ANTECEDENTES PERSONALES NO PATOLOGICOS -->

                <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Antecendentes Pesonales No Patológicos</h6> 
                </div>

            <div class="row"> <!-- ***********************************INTERROGATORIO ANTECEDENTES NO PATOLOGICOS*********************************** -->

                
                <div class="col-md-12">
                    <strong style="font-size:14px;">Contacto con Personas Enfermas</strong>
                    <select name="contacto_personas" id="contacto_personas" class="form-control" onchange="mostrarOcultarSecciones()" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                </select>
                </div>
<!-- ***********************************PATOLOGIAS*********************************** -->


<!--===============AH: TOS CRÓNICA=======================-->

                <div class="col-md-12" id="ah_TosCronica" style="display: none;">
                    <strong style="font-size: 14px;">Tos Crónica</strong>
                    <select name="TosCronicaSelect" id="TosCronicaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>    


<!--===============FAMILIAR TOS CRÓNICA=======================-->
                
        <!--===============sI SELECCIONAMOS PADRE =======================-->
        <div class="container" id="heredo_familia1"  style="display: none;">
                    
            <div class ="row">
                
            <div class="col-md-4" id="PadreTos">
                    <span style="font-size: 14px;">Padre</span>
                    <select name="TosPadre" id="TosPadre" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                    </div>
        <!--===============sI SELECCIONAMOS MADRE =======================-->
                    <div class="col-md-4" id="MadreTos" >
                        <span style="font-size: 14px;" >Madre</span>
                            <select name="Tos_Madre" id="Tos_Madre" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                    
                    <div class="col-md-4" id="Abuelo_MaternoTos" >
                        <span style="font-size: 14px;" >Abuelo Materno</span>
                            <select name="TosAbueloMaterno" id="TosAbueloMaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA =======================-->      
                    <div class="col-md-4" id="Abuela_MaternaTos">
                        <span style="font-size: 14px;" >Abuela Materna</span>
                            <select name="TosAbuelaMaterna" id="TosAbuelaMaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                    <div class="col-md-4" id="Abuelo_PaternoTos">
                        <span style="font-size: 14px;" >Abuelo Paterno</span>
                            <select name="TosAbueloPaterno" id="TosAbueloPaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO =======================-->

                    <div class="col-md-4" id="Abuela_PaternaTos" >
                        <span style="font-size: 14px;">Abuela Paterna</span>
                            <select name="TosAbuelaPaterna" id="TosAbuelaPaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA =======================-->

                    <div class="col-md-4" id="HermanaTos" >
                        <span style="font-size: 14px;">Número de Hermanas</span>
                        <input type="number" step="any" class="form-control" id="Tos_hermanas" name="Tos_hermanas"  style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO =======================-->
                        
                    <div class="col-md-4" id="HermanoTos">
                        <span style="font-size: 14px;" >Número de Hermanos</span>
                        <input type="number" step="any" class="form-control" id="Tos_hermanos" name="Tos_hermanos" >
                    </div>

                    </div>  <!--===========DIV CONTAINER TOS CRÓNICA ================--> <br>
                </div> <!--=========== DIV DEL ROW DE TOS CRÓNICA ================-->


                            <!--===========TUBERCULOSIS  ================-->

                <div class="col-md-12" id="ah_Tuberculosis" style="display: none;">
                    <strong style="font-size: 14px;">Tuberculosis</strong>
                    <select name="TuberculosisSelect" id="TuberculosisSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>    

<!--===============TUBERCULOSIS FAMILIA======================-->
                
        <!--===============sI SELECCIONAMOS PADRE TUBERCULOSIS =======================-->
        <div class="container" id="heredo_familia2"  style="display: none;">
                    
            <div class ="row">
                
            <div class="col-md-4" id="PadreTuber">
                    <span style="font-size: 14px;">Padre</span>
                    <select name="TuberPadre" id="TuberPadre" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>
        <!--===============sI SELECCIONAMOS MADRE TUBERCULOSIS=======================-->
                    <div class="col-md-4" id="MadreTuber" >
                        <span style="font-size: 14px;" >Madre</span>
                            <select name="TuberMadre" id="TuberMadre" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO  TUBERCULOSIS=======================-->
                    
                    <div class="col-md-4" id="Abuelo_MaternoTuber">
                        <span style="font-size: 14px;" >Abuelo Materno</span>
                            <select name="TuberAbueloMaterno" id="TuberAbueloMaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA  TUBERCULOSIS=======================-->      
                    <div class="col-md-4" id="Abuela_MaternaTuber">
                        <span style="font-size: 14px;" >Abuela Materna</span>
                            <select name="TuberAbuelaMaterna" id="TuberAbuelaMaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO TUBERCULOSIS =======================-->
                    <div class="col-md-4" id="Abuelo_PaternoTuber">
                        <span style="font-size: 14px;" >Abuelo Paterno</span>
                            <select name="TuberAbueloPaterno" id="TuberAbueloPaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO TUBERCULOSIS=======================-->

                    <div class="col-md-4" id="Abuela_PaternaTuber" >
                        <span style="font-size: 14px;">Abuela Paterna</span>
                            <select name="TuberAbuelaPaterna" id="TuberAbuelaPaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA TUBERCULOSIS =======================-->

                    <div class="col-md-4" id="HermanaTuber" >
                    <span style="font-size: 14px;">Número de Hermanas</span>
                            <input type="number" step="any" class="form-control" id="Tuber_hermanas" name="Tuber_hermanas"  style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO TUBERCULOSIS =======================-->
                        
                    <div class="col-md-4" id="HermanoTuber">
                        <span style="font-size: 14px;" >Número de Hermanos</span>
                        <input type="number" step="any" class="form-control" id="Tuber_hermanos" name="Tuber_hermanos"  style="font-size: 14px;">
                    </div>

                    </div>  <!--===========DIV CONTAINER TUBERCULOSIS ================--> <br>
                </div> <!--=========== DIV DEL ROW DE TUBERCULOSIS  ================-->


                <!--=========== VIH  ================-->

        <div class="col-md-12" id="ah_VIH" style="display: none;">
                    <strong style="font-size: 14px;">VIH</strong>
                    <select name="VIHSelect" id="VIHSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>    

<!--===============FAMILIAR VIH=======================-->
                
        <!--===============sI SELECCIONAMOS PADRE =======================-->
        <div class="container" id="heredo_familia3"  style="display: none;">
                    
            <div class ="row">
 <!--===============sI SELECCIONAMOS PADRE  VIH=======================-->               
            <div class="col-md-4" id="PadreVIH">
                    <span style="font-size: 14px;">Padre</span>
                    <select name="VIHPadre" id="VIHPadre" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS MADRE  VIH=======================-->
                    <div class="col-md-4" id="MadreVIH" >
                        <span style="font-size: 14px;" >Madre</span>
                            <select name="VIHMadre" id="VIHMadre" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO VIH=======================-->
                    
                    <div class="col-md-4" id="Abuelo_MaternoVIH">
                        <span style="font-size: 14px;" >Abuelo Materno</span>
                            <select name="VIHAbueloMaterno" id="VIHAbueloMaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA VIH=======================-->      
                    <div class="col-md-4" id="Abuela_MaternaVIH">
                        <span style="font-size: 14px;" >Abuela Materna</span>
                            <select name="VIHAbuelaMaterna" id="VIHAbuelaMaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO VIH=======================-->
                    <div class="col-md-4" id="Abuelo_PaternoVIH">
                        <span style="font-size: 14px;" >Abuelo Paterno</span>
                            <select name="VIHAbueloPaterno" id="VIHAbueloPaterno" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO VIH =======================-->

                    <div class="col-md-4" id="Abuela_PaternaVIH" >
                        <span style="font-size: 14px;">Abuela Paterna</span>
                            <select name="VIHAbuelaPaterna" id="VIHAbuelaPaterna" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA VIH=======================-->

                    <div class="col-md-4" id="HermanaVIH" >
                    <span style="font-size: 14px;">Número de Hermanas</span>
                            <input type="number" step="any" class="form-control" id="VIH_hermanas" name="VIH_hermanas"  style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO VIH=======================-->
                        
                    <div class="col-md-4" id="HermanoVIH">
                        <span style="font-size: 14px;" >Número de Hermanos</span>
                        <input type="number" step="any" class="form-control" id="VIH_hermanos" name="VIH_hermanos"  style="font-size: 14px;">
                    </div>

                    </div>  <!--===========DIV CONTAINER VIH ================--> <br>
                </div> <!--=========== DIV DEL ROW DE VIH================-->



                <div class="col-md-12">
                    <strong style="font-size:14px;">Contacto con Animales</strong>
                    <select name="contacto_animales" id="contacto_animales" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

        <div class="grid-container" id="Animales_Cual"  style="display: none;">
            <div class="grid-row">

                <div class="grid-item">
                    <span style="font-size:14px;">Perros</span>
                    <input type="checkbox" name="Perros" id="Perros" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Gatos</span>
                    <input type="checkbox" name="Gatos" id="Gatos" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Conejos</span>
                    <input type="checkbox" name="Conejos" id="Conejos" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Pollos</span>
                    <input type="checkbox" name="Pollos" id="Pollos" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Chinches</span>
                    <input type="checkbox" name="Chinches" id="Chinches" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Ratas</span>
                    <input type="checkbox" name="Ratas" id="Ratas" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size: 14px;">Moscos</span>
                    <input type="checkbox" name="Moscos" id="Moscos" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size: 14px;">Gallinas</span>
                    <input type="checkbox" name="Gallinas" id="Gallinas" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size: 14px;">Cerdos</span>
                    <input type="checkbox" name="Cerdos" id="Cerdos"  value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Caballos</span>
                    <input type="checkbox" name="Caballos" id="Caballos"  value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size: 14px;">Becerros</span>
                    <input type="checkbox" name="Becerros" id="Becerros"  value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Pajaros</span>
                    <input type="checkbox" name="Pajaros" id="Pajaros" value="Si" style="font-size: 14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Borregos</span>
                    <input type="checkbox" name="Borregos" id="Borregos" value="Si" style="font-size: 14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Tortugas</span>
                    <input type="checkbox" name="Tortugas" id="Tortugas" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Patos</span>
                    <input type="checkbox" name="Patos" id="Patos" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size:14px;">Burros</span>
                    <input type="checkbox" name="Burros" id="Burros" value="Si" style="font-size:14px;">
                </div>

                <div class="grid-item">
                    <span style="font-size: 14px;">Moscas</span>
                    <input type="checkbox" name="Moscas" id="Moscas" value="Si" style="font-size:14px;">
                </div>

        </div> <!--=========== DIV DEL ROW DE  ANIMALES ================-->
    </div><!--=========== DIV DEL CONTAINER ANIMALES  ================-->
            
                <div class="col-md-6">
                    <strong style="font-size:14px;">Viajes Recientes</strong>
                    <select name="viajes" id="viajes" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6" id ="lugar"  style="display: none;">
                    <strong style="font-size:14px;">Lugar</strong>
                    <select name="lugarSelect" id="lugarSelect" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione</option>
                        <option value="Ixmiquilpan Veracruz">Ixmiquilpan Veracruz</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Oaxtepec">Oaxtepec</option>
                        <option value="Michoacan">Michoacan</option>  
                        <option value="Puebla">Puebla</option>     
                        <option value="Otros">Otros</option> 
                    </select>
                </div>


                <div class="col-md-6">
                    <strong style="font-size:14px;">Visita a Cuevas</strong>
                    <select name="cuevas" id="cuevas" class="form-control" style="font-size:14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Alimentarios</strong>
                    <select name="alimentos" id="alimentos" class="form-control" style="font-size:14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6" id ="tipo_alimentarios"  style="display: none;">
                    <strong style="font-size:14px;">Tipo-Alimentarios</strong>
                    <select name="tipoalimentos" id="tipoalimentos" class="form-control" style="font-size:14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Queso Fresco">Queso Fresco</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <strong style="font-size:14px;">Vacunación Competa</strong>
                    <select name="vacunacion" id="vacunacion" class="form-control" style="font-size:14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="Desconoce">Desconoce</option>
                    <option value="No">No</option>
                </select>
                </div>

        <div class="container mt-4" id="Faltante" style="display: none;">
            <table class="table table-striped">
                <thead>

                    <tr>
                        <th style="font-weight: bold;">Aplicación</th>
                        <th colspan="4" style="text-center">Vacuna-Faltante</th>
                    </tr>

                </thead>
                <tbody>

                    <tr>
                        <td style="font-weight: bold;">Nacimiento</td>
                                
                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="bcg" id="bcg">
                                <label style="font-size: 14px;" class="custom-control-label" for="bcg_NC">BCG</label>
                                <br>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="hepatitis_nacimiento"id="hepatitis_nacimiento">
                                <label class="custom-control-label" for="hepatitis_RC" style="font-size:14px;">Hepatitis B</label>
                                <br>
                            </div>
                        </td>

                        <td>

                        </td>

                        <td>

                        </td>

                    </tr>

                <tr>
                    <td style="font-weight: bold;">2 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input"  name="pentavalente_2mes" id="pentavalente_2mes">
                                <label class="custom-control-label" for="pentavalente2" style="font-size:14px;">Pentavalente Acelular</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="hepatitisB_2mes" id="hepatitisB_2mes">
                                <label class="custom-control-label" for="hepatitis_2B" style="font-size:14px;">Hepatitis B</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="rotavirus_2mes" id="rotavirus_2mes" >
                                <label class="custom-control-label" for="rotavirus_2" style="font-size:14px;">Rotavirus</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="neumococo_2mes" id="neumococo_2mes" >
                                <label class="custom-control-label" for="neumococo_c2" style="font-size:14px;">Neumococo</label>
                            </div>
                        </td>
                        
                </tr>
                <!-- 4 Meses-->
                <tr>
                    <td style="font-weight: bold;">4 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="pentavalente_4mes" id="pentavalente_4mes">
                                <label class="custom-control-label" for="pentavalente_acelular_4" style="font-size:14px;">Pentavalente Acelular</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="rotavirus_4mes" id="rotavirus_4mes">
                                <label class="custom-control-label" for="rotavirus_4" style="font-size:14px;">Rotavirus</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="neumococo_4mes"id="neumococo_4mes">
                                <label class="custom-control-label" for="neumococo_4c" style="font-size:14px;">Neumococo C.</label>
                            </div>
                        </td>

                        <td>

                        </td>
                        
                </tr>

        <!-- 6 Meses -->
                <tr>
                    <td style="font-weight: bold;">6 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="pentavalente_6mes" id="pentavalente_6mes">
                                <label class="custom-control-label" for="pentavalente_6" style="font-size:14px;">Pentavalente Acelular</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name-="rotavirus_6mes" id="rotavirus_6mes">
                                <label class="custom-control-label" for="rotavirus_6" style="font-size:14px;">Rotavirus</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="Influenza_6mes" id="Influenza_6mes">
                                <label class="custom-control-label" for="Influenza_6" style="font-size:14px;">Influenza</label>
                            </div>
                        </td>

                        <td>

                        </td>
                        
                </tr>

            <!-- 7 Meses -->
                <tr>
                    <td style="font-weight: bold;">7 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="Influenza_7mes" id="Influenza_6mes">
                                <label class="custom-control-label" for="Influenza_2da" style="font-size:14px;">Influenza 2da dosis</label>
                            </div>
                        </td>
                        
                        <td>

                        </td>

                        <td>

                        </td>

                        <td>

                        </td>
                        
                </tr>

        <!--  12 meses -->
            <td style="font-weight: bold;">12 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input"  name="SRP_12mes" id="SRP_12mes">
                                <label class="custom-control-label" for="SRP_12" style="font-size:14px;">SRP</label>
                            </div>
                        </td>

                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="neumococo_12mes" id="neumococo_12mes" style="font-size:13px;">
                                <label class="custom-control-label" for="neumococo_c12" style="font-size:14px;">Neumococo C.</label>
                            </div>
                        </td>

                        <td>
                            

                        </td>

                        <td>

                        </td>
                        
                </tr>

        <!--    18 meses -->
                <tr>
                    <td style="font-weight: bold;">18 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="Pentavaleente_18mes" id="Pentavaleente_18mes">
                                <label class="custom-control-label" for="Pentavalente_Acelular_18" style="font-size:14px;">Pentavalente Acelular</label>
                            </div>
                        </td>
                        
                        <td>

                        </td>

                        <td>

                        </td>

                        <td>

                        </td>
                        
                </tr>

            <!--    24 meses -->

                <tr>
                    <td style="font-weight: bold;">24 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="influenza_refuerzo_24mes" id="influenza_refuerzo_24mes">
                                <label class="custom-control-label" for="influenza_R24" style="font-size:14px;">Influenza Refuerzo Anual</label>
                            </div>
                        </td>
                        
                        <td>

                        </td>

                        <td>

                        </td>

                        <td>

                        </td>
                        
                </tr>

    <!--    36 meses -->

                <tr>
                    <td style="font-weight: bold;">36 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="influenza_refuerzo_36mes" id="influenza_refuerzo_36mes">
                                <label class="custom-control-label" for="influenza_R36" style="font-size:14px;">Influenza Refuerzo Anual</label>
                            </div>
                        </td>
                        
                        <td>

                        </td>

                        <td>

                        </td>

                        <td>

                        </td>
                        
                </tr>

    <!--    48 meses -->

                <tr>
                    <td style="font-weight: bold;">48 meses</td>

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="DPTrefuerzo_48mes" id="DPTrefuerzo_48mes">
                                <label class="custom-control-label" for="DPT_R48" style="font-size:14px;">DPT(Refuerzo)</label>
                            </div>
                        </td>

                
                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="Influenza_R48mes" id="Influenza_R48mes">
                                <label class="custom-control-label" for="Influenza_RA48" style="font-size:14px;">Influenza Refuerzo Anual</label>
                            </div>
                    </td>


                        <td>

                        </td>

                        <td>

                        </td>
                        
                </tr>


    <!--    59 meses -->

                <tr>
                    <td style="font-weight: bold;">59 meses</td>
                    

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="Influenza_R59" id="Influenza_R59">
                                <label class="custom-control-label" for="Influenza_enero" style="font-size:14px;">Influenza Refuerzo Anual</label>
                            </div>
                        </td>

                        <td>

                        <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                            <input type="checkbox" class="custom-control-input" name="OVP59" id="OVP59">
                            <label class="custom-control-label" for="OVP" style="font-size:14px;">OVP</label>
                        </div>

                        </td>

                        <td>

                        </td>

                        <td>
                            
                        </td>        
                </tr>

                <tr>
                    <td style="font-weight: bold;">72 meses</td>
                    

                        <td>
                            <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                <input type="checkbox" class="custom-control-input" name="srp_refuerzo" id="srp_refuerzo">
                                <label class="custom-control-label" for="SRP_ref" style="font-size:14px;">SRP (Refuerzo)</label>
                            </div>
                        </td>

                        <td>

                        </td>

                        <td>

                        </td>

                        <td>
                            
                        </td>        
                </tr>          
                
                <td style="font-weight: bold;">11 años</td>
                    

                    <td>
                        <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                            <input type="checkbox" class="custom-control-input" name="VPH_11" id="VVPH_11PH">
                            <label class="custom-control-label" for="VPH" style="font-size:14px;">VPH</label>
                        </div>
                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                    <td>
                        
                    </td>        
            </tr>   

            </tbody>
        </table>
    </div>

       

        </div> <!--===========DIV DEL ROW ANTECEDENTES NO PATOLOGICOS ================-->
                

        <!--===========ANTECEDENTES PATOLOGICOS ================-->
                
                <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Antecendentes Pesonales Patológicos</h6> 
                </div>

                <div class="row"> <!--===========ROW DE ANTECEDENTES PATOLOGICOS ================-->


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Reflujo</strong>
                    <select name="Reflujo" id="Reflujo" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Neumopatía Crónica</strong>
                    <select name="Neuropatia_croninca" id="Neuropatia_croninca" class="form-control" style="font-size:14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3" id="edad_neumo" style="display: none;">
                    <strong style="font-size:14px;">Edad-Neumopatía</strong>
                    <input type="number" step="any" class="form-control" id="neumo_edad" name="neumo_edad"  style="font-size: 14px;">
                </select>
            </div>


                <div class="col-md-3">
                    <strong style="font-size:14px;">Talla Baja</strong>
                    <select name="talla_baja" id="talla_baja" class="form-control" style="font-size:14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div>

                
                <div class="col-md-3">
                    <strong style="font-size:14px;">Discapacidad Intelectual</strong>
                    <select name="Discapacidad_intelectual" id="Discapacidad_intelectual" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                </select>
                </div>



                <div class="col-md-3">
                    <strong style="font-size:14px;">Pancreatitis por AVP</strong>
                    <select name="pancreatitis_avp" id="pancreatitis_avp" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">LPH</strong>
                    <select name="LPH" id="LPH" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Epilepsia</strong>
                    <select name="Epilepsia" id="Epilepsia" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Amigdalectomía</strong>
                    <select name="Amigda" id="Amigda" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Apendicectomía</strong>
                    <select name="apendicectomia" id="apendicectomia" class="form-control" style="font-size: 14px">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Rubeola</strong>
                    <select name="Rubeola" id="Rubeola" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Invaginación</strong>
                    <select name="invaginacion" id="invaginacion" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                

                <div class="col-md-3">
                    <strong style="font-size:14px;">Fractura</strong>
                    <select name="fractura" id="fractura" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Rinitis Alérgica</strong>
                    <select name="rinitis_alergica" id="rinitis_alergica" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size:14px;">Pielonefritis</strong>
                    <select name="Pielonefritis" id="Pielonefritis" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size:14px;">Varicela</strong>
                    <select name="varicela" id="varicela" class="form-control" style="font-size:14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3" id="edad_varicela" style="display: none;">
                    <strong style="font-size:14px;">Edad-Varicela</strong>
                    <input type="number" step="any" class="form-control" id="varicela_edad" name="varicela_edad"  style="font-size: 14px;">
                </select>
            </div>


        </div><!--===========ROW DE ANTECEDENTES PATOLOGICOS ================-->

        <!--===========ATENCIÓN CLÍNICA ================-->
                
        <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Atención Clínica</h6> 
                </div>

        <div class="row">
        
            <div class="col-md-4" id="tiempo_evolucion" >
                    <strong style="font-size:14px;">Tiempo de Evolución</strong>
                    <input type="number" step="any" class="form-control" id="evolucion_ganglio" name="evolucion_ganglio"  style="font-size: 14px;">
                </select>
            </div>

            <div class="col-md-4">
                    <strong style="font-size:14px;">Período Evolución</strong>
                    <select name="evolucion_ganglio" id="evolucion_ganglio" class="form-control" style="font-size:14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Días">Días</option>
                        <option value="Semanas">Semanas</option>
                        <option value="Mes">Mes</option>
                        <option value="Años">Años</option>
                    </select>
                </div>

            <div class="col-md-4" id="tamaño_ganglio" >
                    <strong style="font-size:14px;">Tamaño del Ganglio</strong>
                    <input type="number" step="any" class="form-control" id="Ganglio_tamaño" name="Ganglio_tamaño"  style="font-size: 14px;">
                </select>
            </div>

        </div><!--===========ROW ATENCIÓN CLÍNICA ================-->

        <!--===========CARACTERISTICAS ================-->
            <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                        <h6>Caracteristicas</h6> 
                </div>

        <div class="container text-center">
            <div class="row">

                <div class="col-md-3">
                    <span style="font-size:14px;">Doloroso</span>
                    <input type="checkbox" name="Doloroso" id="Doloroso" value="Si" style="font-size:14px;">
                </div>

                <div class="col-md-3">
                    <span style="font-size: 14px;">No Doloroso</span>
                    <input type="checkbox" name="No_doloroso" id="No_doloroso" values="Si" style="font-size:14px;">
                </div>


            <div class="col-md-3">
                    <span style="font-size: 14px;">Indurado</span>
                    <input type="checkbox" name="Indurado" id="Indurado" values="Si" style="font-size:14px;">
                </div>

                <div class="col-md-3">
                    <span style="font-size: 14px">No Indurado</span>
                    <input type="checkbox" name="No_Indurado" id="No_Indurado" values="Si" style="font-size:14px;">
                </div>
        </div><br>
        
 
            <div class="row">

                <div class="col-md-3">
                    <span style="font-size: 14px;">Eritematoso</span>
                    <input type="checkbox" name="Eritematoso" id="Eritematoso" values="Si" style="font-size: 14px;">
                </div>

                <div class="col-md-3">
                    <span style="font-size: 14px;">Hipertermico</span>
                    <input type="checkbox" name="Hipertermico" id="Hipertermico" values="Si" style="font-size: 14px;">
                </div>

    
                <div class="col-md-3">
                        <span style="font-size: 14px;">Con Secreción</span>
                        <input type="checkbox" name="Fijo" id="Fijo" values="Si" style="font-size: 14px;">
                    </div>
    
                    <div class="col-md-3">
                        <span style="font-size: 14px;">Sin Secreción</span>
                        <input type="checkbox" name="Movil" id="Movil" values="Si" style="font-size: 14px;">
                    </div>

            </div> <br>
                    <div class="row">

                <div class="col-md-3">
                    <span style="font-size: 14px;">Bien Delimitado</span>
                    <input type="checkbox" name="bien_delimitado" id="bien_delimitado" values="Si" style="font-size: 14px;">
                </div>

                <div class="col-md-3">
                    <span style="font-size: 14px;">Mal Delimitado</span>
                    <input type="checkbox" name="mal_delimitado" id="mal_delimitado" values="Si" style="font-size: 14px;">
                </div>

    
                <div class="col-md-4">
                        <span style="font-size: 14px;">Fijo</span>
                        <input type="checkbox" name="Fijo" id="Fijo" values="Si" style="font-size: 14px;">
                    </div>
    
                    <div class="col-md-2">
                        <span style="font-size: 14px;">Movíl</span>
                        <input type="checkbox" name="Movil" id="Movil" values="Si" style="font-size: 14px;">
                    </div>

            </div><br>
    
        <div class="row">


                <div class="col-md-3">
                    <span style="font-size: 14px;">Cambios de Coloración</span>
                    <input type="checkbox" name="cambios_coloracion" id="cambios_coloracion" values="Si" style="font-size: 14px;">
                </div>



                <div class="col-md-4">
                    <span style="font-size: 14px;">Sin Cambios de Coloración</span>
                    <input type="checkbox" name="sin_cambios" id="sin_cambios" values="Si" style="font-size:14px;">
                </div>

            </div> <br>
        

    </div><!--===========CARACTERISTICAS================--> 

        <!--===========OTROS ================-->
        <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                        <h6>Otros</h6> 
                </div>


                <!--===========Otros Ganglios ================-->
                <div class="col-md-12">
                    <strong style="font-size:14px;">Otros Ganglios</strong>
                    <select name="otros_ganglios" id="otros_ganglios" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

        <div class="container text-center" id="otro_localizacion" style="display: none;" >
            <div class="row">

            <div class="col-md-3">
                <span style="font-size: 14px;">Submandibulares</span>
                <input type="checkbox" name="local_submandibulares" id="local_submandibulares" value="Si" style="font-size: 14px;">
            </div>

            <div class="col-md-3">
                <span style="font-size: 14px;">Axilares</span>
                <input type="checkbox" name="local_axilares" id="local_axilares" value="Si" style="font-size: 14px;">
            </div>

            <div class="col-md-3">
                <span style="font-size: 14px;">Inguinales</span>
                <input type="checkbox" name="local_inguinales" id="local_inguinales" value="Si" style="font-size: 14px;">
            </div>

            <div class="col-md-3">
                <span style="font-size: 14px;">Cervicales</span>
                <input type="checkbox" name="local_cervicales" id="local_cervicales" value="Si" style="font-size: 14px;">
            </div>

    </div>  <br><!--===========primera mitad ================-->

    <div class="row">
            <div class="col-md-3">
                <span style="font-size: 14px;">Retroauriculares</span>
                <input type="checkbox" name="local_retroauri" id="local_retroauri" value="Si" style="font-size: 14px;">
            </div>

            <div class="col-md-3">
                <span style="font-size: 14px;">Subclavicular</span>
                <input type="checkbox" name="local_subclav" id="local_subclav" value="Si" style="font-size: 14px;">
            </div>

            <div class="col-md-3">
                <span style="font-size: 14px;">Occipital</span>
                <input type="checkbox" name="local_occipital" id="local_occipital" value="Si" style="font-size: 14px;">
            </div>

            <div class="col-md-3">
                <span style="font-size: 14px;">Adenopatias</span>
                <input type="checkbox" name="local_adeno" id="local_adeno" value="Si" style="font-size: 14px;">
            </div>
            
            </div><!--===========segunda mitad ================-->
            
        </div> <!--===========CONTAINEROtros Ganglios ================-->
    

                <!--===========OTROS ================-->
                <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                        <h6>Etiología</h6> 
                </div>


            <div class="container text-center" id="etiologia">

                       <div class="row">


                    <div class="col-md-2">
                        <span style="font-size: 14px;">VEB</span>
                        <input type="checkbox" name="etiologia_VEB" id="etiologia_VEB" values="Si" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">CMV</span>
                        <input type="checkbox" name="etiologia_CMV" id="etiologia_CMV" style="font-size: 14px;">
                    </div>


                    <div class="col-md-1">
                        <span style="font-size: 14px;">TB</span>
                        <input type="checkbox" name="etiologia_TB" id="etiologia_TB" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">B19</span>
                        <input type="checkbox" name="etiologia_B19" id="etiologia_B19" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">Bocio</span>
                        <input type="checkbox" name="etiologia_bocio" id="etiologia_bocio" style="font-size: 14px;">
                    </div>

                    <div class="col-md-3">
                        <span style="font-size: 14px;">Rubéola</span>
                        <input type="checkbox" name="etiologia_rubeola" id="etiologia_rubeola" style="font-size: 14px;">
                    </div>
                    
    
            </div><br>

                
                
            <div class="row">

                    <div class="col-md-1">

                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">Bartonella</span>
                        <input type="checkbox" name="etiologia_bartonella" id="etiologia_bartonella" value="Si" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">Toxoplamosis</span>
                        <input type="checkbox" name="etiologia_toxoplamosis" id="etiologia_toxoplamosis" value="Si" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">Inflamatorio</span>
                        <input type="checkbox" name="etioligia_inflamatorio" id="etioligia_inflamatorio" values="Si" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">Parvovirus</span>
                        <input type="checkbox" name="etiologia_parvovirus" id="etiologia_parvovirus" values="Si" style="font-size: 14px;">
                    </div>

                    <div class="col-md-2">
                        <span style="font-size: 14px;">Varicela</span>
                        <input type="checkbox" name="etiologia_varicela" id="etiologia_varicela" style="font-size: 14px;">
                    </div>

                    <div class="col-md-1">

                    </div>

            </div> 

            </div><!--===========CONTAINER ETIOLOGIA ================-->

                    <!--===========LABORATORIOS ================-->
                
        <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Laboratorios</h6> 
                </div>

                <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Biometría</h6> 
                </div>


<div class="row">
                <div class="col-md-3">
                            <strong style="font-size: 14px;">Hemoglobina</strong>
                            <input type="number" step="any" class="form-control" id="id_Hemoglobina" name="id_Hemoglobina" >
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Hematocrito</strong>
                            <input type="number" step="any" class="form-control" id="id_Hematocrito" name="id_Hematocrito" >
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Leucocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Leucocitos" name="id_Leucocitos">
                        </div>       
                                        
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Neutrófilos</strong>
                            <input type="number" step="any" class="form-control" id="id_Neutrfilos" name="id_Neutrfilos">
                        </div>  

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Linfocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Linfocitos" name="id_Linfocitos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Monocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Monocitos" name="id_Monocitos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Plaquetas</strong>
                            <input type="number" step="any" class="form-control" id="id_Plaquetas" name="id_Plaquetas">
                        </div>                        
                    
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Eosinófilos</strong>
                            <input type="number" step="any" class="form-control" id="id_Eosinofilos" name="id_Eosinofilos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Eritrocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Eritrocitos" name="id_Eritrocitos">
                        </div>                    
                    

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Procalcitonina</strong>
                            <input type="number" step="any" class="form-control" id="id_Procalcitonina" name="id_Procalcitonina">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Volumen Corpuscular Medio</strong>
                            <input type="number" step="any" class="form-control" id="id_VCM" name="id_VCM">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Ancho de Distribución Eritrocitaria</strong>
                            <input type="number" step="any" class="form-control" id="id_ADE" name="id_ADE">
                        </div>
                        

                    </div> <!--==========LABORATORIOS ================-->
    
                    <!--==========PFH  ================-->
                    <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>PFH</h6> 
                    </div>  

        <div class="row">
                    <div class="col-md-2">
                        <strong style="font-size: 14px;">DHL</strong>
                        <input type="number" step="any" class="form-control" id="id_DHL" name="id_DHL">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px">AST</strong>
                        <input type="number" step="any" class="form-control" id="id_AST" name="id_AST">
                    </div> 

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">ALT</strong>
                        <input type="number" step="any" class="form-control" id="id_ALT" name="id_ALT">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">Globulina</strong>
                        <input type="number" step="any" class="form-control" id="id_glob" name="id_Glob">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">Albúmina</strong>
                        <input type="number" step="any" class="form-control" id="id_albumina" name="id_albumina">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">BD</strong>
                        <input type="number" step="any" class="form-control" id="id_BD" name="id_BD">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14;">BI</strong>
                        <input type="number" step="any" class="form-control" id="id_BI" name="id_BI">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">TGO</strong>
                        <input type="number" step="any" class="form-control" id="id_TGO" name="id_TGO">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">TGP</strong>
                        <input type="number" step="any" class="form-control" id="id_TGP" name="id_TGP">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">FA</strong>
                        <input type="number" step="any" class="form-control" id="id_FA" name="id_FA">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">GGT</strong>
                        <input type="number" step="any" class="form-control" id="id_GGT" name="id_GGT">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 14px;">PT</strong>
                        <input type="number" step="any" class="form-control" id="id_PT" name="id_PT">
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 14px;">REL A/G</strong>
                        <input type="number" step="any" class="form-control" id="id_Real" name="id_Real">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 14px">Proteinas Totales</strong>
                        <input type="number" step="any" class="form-control" id="id_PT" name="id_PT">
                    </div>

        </div><!-- <div Laboratorios PFH Y DHL ="-->


                    <!--=========== DIV SEROLOGÍA ================-->

                    <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Serología</h6> 
                    </div> 

        <div class="row">
                        
                <div class="col-md-6">
                    <strong style="font-size:14px;">Serología</strong>
                    <select name="lab_serologia" id="lab_serologia" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div> 

                <div class="col-md-6" id="serologia_resultado" style="display: none;">
                    <strong style="font-size:14px;">Resultado-Serología</strong>
                    <select name="resultado_cultivo" id="resultado_serologia" class="form-control" style="font-size: 14px;">
                        <option value="0">Selecione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div> 

                <div class="col-md-6" id="pcr_resultado" style="display: none;">
                    <strong style="font-size:14px;">Prueba PCR</strong>
                    <select name="prueb_pcr" id="prueb_pcr" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div> 

                <div class="col-md-6" id="resul_pcr"style="display: none;">
                    <strong style="font-size:14px;">Resultado-PCR</strong>
                    <select name="resultado_PCR" id="resultado_PCR" class="form-control" style="font-size: 14px;">
                        <option value="0">Selecione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div> 

           



            </div><!--=========== DIV SEROLOGÍA ================-->


                    <div style="background-color: rgb(247, 130, 72,0.3);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Cultivo</h6> 
                    </div>  

                
                <!--===========CULTIVOS ================-->
            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:14px;">Cultivo</strong>
                    <select name="lab_cultivo" id="lab_cultivo" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

                <div class="col-md-6" id="cultivo_resultado" style="display: none;">
                    <strong style="font-size:14px;">Resultado-Cultivo</strong>
                    <select name="resultado_cultivo" id="resultado_cultivo" class="form-control" style="font-size: 14px;">
                        <option value="0">Selecione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                </select>
                </div> 

            </div><!--=========== DIV CULTIVOS ================-->

        <!--=========== TOMOGRAFÍA ================-->
                    <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Tomografía</h6> 
                    </div> 

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:14px;">Tomografía</strong>
                    <select name="lab_tomografia" id="lab_tomografia" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

                <div class="col-md-6" id="resultado_dxRFC" style="display: none;">
                        <strong style="font-size: 14px;">Resultado-Tomografía</strong>
                        <input type="text" step="any" class="form-control" id="resultado_tomografia" name="resultado_tomografia">
                </div>
            </div><!--=========== DIV ROW TOMOGRAFÍA================-->

        <!--=========== ULTRASONIDO ================-->
        <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Ultrasonido</h6> 
                    </div> 

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:14px;">Ultrasonido</strong>
                    <select name="lab_Ultrasonido" id="lab_Ultrasonido" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

                <div class="col-md-6" id="ultrasonido_resultado" style="display: none;">
                        <strong style="font-size: 14px;">Resultado-Ultrasonido</strong>
                        <input type="text" step="any" class="form-control" id="resultado_Ultrasonido" name="resultado_Ultrasonido">
                </div>
            </div><!--=========== DIV ROW ULTRASONIDO================-->

            <!--=========== BIOPSIA ================-->
        <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Biopsia</h6> 
                    </div> 

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:14px;">Biopsia</strong>
                    <select name="lab_Biopsia" id="lab_Biopsia" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

                <div class="col-md-6" id="biopsia_resultado" style="display: none;">
                        <strong style="font-size: 14px;">Resultado-Biopsia</strong>
                        <input type="text" step="any" class="form-control" id="resultado_Biopsia" name="resultado_Biopsia">
                </div>
            </div><!--=========== DIV ROW BIOPSIA================-->

        <!--=========== REFERENCIA ================-->
        <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Referencia a Otra Institución</h6> 
                    </div> 

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:14px;">Referencia</strong>
                    <select name="referencia" id="referencia" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

                <div class="col-md-6" id="id_refe" style="display: none;">
                        <strong style="font-size: 14px;">Institución</strong>
                        <input type="text" step="any" class="form-control" id="resultado_referencia" name="resultado_referencia">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Causa</strong>
                    <input type="text" step="any" class="form-control" id="causa_ref" name="causa_ref">
                </div>
            </div><!--=========== DIV ROW REFERENCIA================-->

<!--=========== Alta ================-->
        <div style="background-color: rgb(247, 130, 72,0.8);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Alta</h6> 
                    </div> 

            <div class="row">
                <div class="col-md-6">
                    <strong style="font-size:14px;">Alta</strong>
                    <select name="id_Alta" id="id_Alta" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                </select>
                </div> 

                <div class="col-md-6" id="causa_alta"style="display: none;">
                    <strong style="font-size:14px;">Causa</strong>
                    <select name="id_causa" id="id_causa" class="form-control" style="font-size: 14px;">
                        <option value="0">Seleccione</option>
                        <option value="Mejoría">Mejoría</option>
                        <option value="Remisión">Remisión</option>
                        <option value="Abandono">Abandono</option>
                        <option value="No Cumple Criterios">No Cumple Criterios</option>
                </select>
                </div> 
            
            </div><!--=========== DIV ROW REFERENCIA================-->




                </form>
        </div> <!-- <div class="modal-body">-->

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div> <!-- <div class="modal-footer">-->
            
        </div> <!-- <div class="modal-content">-->
    </div> <!-- cierra el div <div class="modal-dialog modal-lg">-->
    </div> <!-- cierra el primer div <div class="modal fade" id="RegistrarPacienteInterconsulta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">-->