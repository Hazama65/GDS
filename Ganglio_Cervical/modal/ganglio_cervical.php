<!-- Modal -->
<div class="modal fade" id="Ganglio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="color: aliceblue; background-color:rgb(129, 99, 139);">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <i class="bi bi-person-plus-fill"></i> Registrar Paciente
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> <!-- <div class="modal-header" style="color: aliceblue; background-color:rgb(14, 162, 153);">-->
            <form id="gc_form" method="POST" autocomplete="off">
                <div class="modal-body">


                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Generales</h6>
                    </div>

                    <div class="row"> <!-- DATOS GENERALES  -->

                        <div class="col-md-4">
                            <strong style="font-size:12px;">Nombre Paciente</strong>
                            <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" placeholder="Nombre(s) Apellidos" style="font-size:12px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:12px;">Sexo</strong>
                            <input type="text" name="sexo" id="sexo" class="form-control" style="font-size:12px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:12px;">Edad de Abordaje</strong>
                            <input type="text" name="edad" id="edad" class="form-control" style="font-size:12px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size:12px;">Residencia</strong>
                            <input id="residencia" name="residencia" type="text" class="control form-control" style="font-size:12px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size:12px;">Nivel Socioeconomico</strong>
                            <select name="Nivel_socioeconomico" id="Nivel_socioeconomico" class="form-control" style="font-size:12px;">
                                <option value="0">Seleccione...</option>
                                <option value="Alto">Alto</option>
                                <option value="Medio">Medio</option>
                                <option value="Medio/Bajo">Medio/Bajo</option>
                                <option value="Bajo">Bajo</option>
                            </select>
                        </div>

                    </div> <!-- DIV DATOS GENERALES PX  -->



                    <!-- ANTECEDENTES PERSONALES NO PATOLOGICOS -->

                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Antecendentes Pesonales No Patológicos</h6>
                    </div>

                    <div class="row">
                        <!-- ***********************************INTERROGATORIO ANTECEDENTES NO PATOLOGICOS*********************************** -->


                        <div class="col-md-12">
                            <strong style="font-size:12px;">Contacto con Personas Enfermas</strong>
                            <select name="contacto_personas" id="contacto_personas" class="form-control" onchange="mostrarOcultarSecciones()" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        <!-- ***********************************PATOLOGIAS*********************************** -->


                        <!--===============AH: TOS CRÓNICA=======================-->

                        <div class="col-md-12" id="ah_TosCronica" style="display: none;">
                            <strong style="font-size: 12px;">Tos Crónica</strong>
                            <select name="TosCronicaSelect" id="TosCronicaSelect" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <!--===============FAMILIAR TOS CRÓNICA=======================-->

                        <!--===============sI SELECCIONAMOS PADRE =======================-->
                        <div class="container" id="heredo_familia1" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="PadreTos">
                                    <label style="font-size: 12px;">Padre</label>
                                    <select name="TosPadre" id="TosPadre" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE =======================-->
                                <div class="col-md-4" id="MadreTos">
                                    <label style="font-size: 12px;">Madre</label>
                                    <select name="Tos_Madre" id="Tos_Madre" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->

                                <div class="col-md-4" id="Abuelo_MaternoTos">
                                    <label style="font-size: 12px;">Abuelo Materno</label>
                                    <select name="TosAbueloMaterno" id="TosAbueloMaterno" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA =======================-->
                                <div class="col-md-4" id="Abuela_MaternaTos">
                                    <label style="font-size: 12px;">Abuela Materna</label>
                                    <select name="TosAbuelaMaterna" id="TosAbuelaMaterna" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                                <div class="col-md-4" id="Abuelo_PaternoTos">
                                    <label style="font-size: 12px;">Abuelo Paterno</label>
                                    <select name="TosAbueloPaterno" id="TosAbueloPaterno" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO =======================-->

                                <div class="col-md-4" id="Abuela_PaternaTos">
                                    <label style="font-size: 12px;">Abuela Paterna</label>
                                    <select name="TosAbuelaPaterna" id="TosAbuelaPaterna" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA =======================-->

                                <div class="col-md-4" id="HermanaTos">
                                    <label style="font-size: 12px;">Número de Hermanas</label>
                                    <input type="number" step="any" class="form-control" id="Tos_hermanas" name="Tos_hermanas" style="font-size: 12px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO =======================-->

                                <div class="col-md-4" id="HermanoTos">
                                    <label style="font-size: 12px;">Número de Hermanos</label>
                                    <input type="number" step="any" class="form-control" id="Tos_hermanos" name="Tos_hermanos">
                                </div>

                            </div> <!--===========DIV CONTAINER TOS CRÓNICA ================--> <br>
                        </div> <!--=========== DIV DEL ROW DE TOS CRÓNICA ================-->


                        <!--===========TUBERCULOSIS  ================-->

                        <div class="col-md-12" id="ah_Tuberculosis" style="display: none;">
                            <strong style="font-size: 12px;">Tuberculosis</strong>
                            <select name="TuberculosisSelect" id="TuberculosisSelect" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===============TUBERCULOSIS FAMILIA======================-->

                        <!--===============sI SELECCIONAMOS PADRE TUBERCULOSIS =======================-->
                        <div class="container" id="heredo_familia2" style="display: none;">

                            <div class="row">

                                <div class="col-md-4" id="PadreTuber">
                                    <label style="font-size: 12px;">Padre</label>
                                    <select name="TuberPadre" id="TuberPadre" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE TUBERCULOSIS=======================-->
                                <div class="col-md-4" id="MadreTuber">
                                    <label style="font-size: 12px;">Madre</label>
                                    <select name="TuberMadre" id="TuberMadre" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO  TUBERCULOSIS=======================-->

                                <div class="col-md-4" id="Abuelo_MaternoTuber">
                                    <label style="font-size: 12px;">Abuelo Materno</label>
                                    <select name="TuberAbueloMaterno" id="TuberAbueloMaterno" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA  TUBERCULOSIS=======================-->
                                <div class="col-md-4" id="Abuela_MaternaTuber">
                                    <label style="font-size: 12px;">Abuela Materna</label>
                                    <select name="TuberAbuelaMaterna" id="TuberAbuelaMaterna" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO TUBERCULOSIS =======================-->
                                <div class="col-md-4" id="Abuelo_PaternoTuber">
                                    <label style="font-size: 12px;">Abuelo Paterno</label>
                                    <select name="TuberAbueloPaterno" id="TuberAbueloPaterno" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO TUBERCULOSIS=======================-->

                                <div class="col-md-4" id="Abuela_PaternaTuber">
                                    <label style="font-size: 12px;">Abuela Paterna</label>
                                    <select name="TuberAbuelaPaterna" id="TuberAbuelaPaterna" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA TUBERCULOSIS =======================-->

                                <div class="col-md-4" id="HermanaTuber">
                                    <label style="font-size: 12px;">Número de Hermanas</label>
                                    <input type="number" step="any" class="form-control" id="Tuber_hermanas" name="Tuber_hermanas" style="font-size: 12px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO TUBERCULOSIS =======================-->

                                <div class="col-md-4" id="HermanoTuber">
                                    <label style="font-size: 12px;">Número de Hermanos</label>
                                    <input type="number" step="any" class="form-control" id="Tuber_hermanos" name="Tuber_hermanos" style="font-size: 12px;">
                                </div>

                            </div> <!--===========DIV CONTAINER TUBERCULOSIS ================--> <br>
                        </div> <!--=========== DIV DEL ROW DE TUBERCULOSIS  ================-->


                        <!--=========== VIH  ================-->

                        <div class="col-md-12" id="ah_VIH" style="display: none;">
                            <strong style="font-size: 12px;">VIH</strong>
                            <select name="VIHSelect" id="VIHSelect" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <!--===============FAMILIAR VIH=======================-->

                        <!--===============sI SELECCIONAMOS PADRE =======================-->
                        <div class="container" id="heredo_familia3" style="display: none;">

                            <div class="row">
                                <!--===============sI SELECCIONAMOS PADRE  VIH=======================-->
                                <div class="col-md-4" id="PadreVIH">
                                    <label style="font-size: 12px;">Padre</label>
                                    <select name="VIHPadre" id="VIHPadre" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS MADRE  VIH=======================-->
                                <div class="col-md-4" id="MadreVIH">
                                    <label style="font-size: 12px;">Madre</label>
                                    <select name="VIHMadre" id="VIHMadre" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO VIH=======================-->

                                <div class="col-md-4" id="Abuelo_MaternoVIH">
                                    <label style="font-size: 12px;">Abuelo Materno</label>
                                    <select name="VIHAbueloMaterno" id="VIHAbueloMaterno" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELA MATERNA VIH=======================-->
                                <div class="col-md-4" id="Abuela_MaternaVIH">
                                    <label style="font-size: 12px;">Abuela Materna</label>
                                    <select name="VIHAbuelaMaterna" id="VIHAbuelaMaterna" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO MATERNO VIH=======================-->
                                <div class="col-md-4" id="Abuelo_PaternoVIH">
                                    <label style="font-size: 12px;">Abuelo Paterno</label>
                                    <select name="VIHAbueloPaterno" id="VIHAbueloPaterno" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS ABUELO PATERNO VIH =======================-->

                                <div class="col-md-4" id="Abuela_PaternaVIH">
                                    <label style="font-size: 12px;">Abuela Paterna</label>
                                    <select name="VIHAbuelaPaterna" id="VIHAbuelaPaterna" class="form-control" style="font-size: 12px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANA VIH=======================-->

                                <div class="col-md-4" id="HermanaVIH">
                                    <label style="font-size: 12px;">Número de Hermanas</label>
                                    <input type="number" step="any" class="form-control" id="VIH_hermanas" name="VIH_hermanas" style="font-size: 12px;">
                                </div>
                                <!--===============sI SELECCIONAMOS HERMANO VIH=======================-->

                                <div class="col-md-4" id="HermanoVIH">
                                    <label style="font-size: 12px;">Número de Hermanos</label>
                                    <input type="number" step="any" class="form-control" id="VIH_hermanos" name="VIH_hermanos" style="font-size: 12px;">
                                </div>

                            </div> <!--===========DIV CONTAINER VIH ================--> <br>
                        </div> <!--=========== DIV DEL ROW DE VIH================-->



                        <div class="col-md-12">
                            <strong style="font-size:12px;">Contacto con Animales</strong>
                            <select name="contacto_animales" id="contacto_animales" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div> <br>

                        <div class="container" id="Animales_Cual" style="display: none;">
                            <fieldset>
                                <legend>
                                    <div class="row">

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Perros" id="Perros" value="Si" style="font-size:12px; margin: 5px auto; ">
                                            <label for="Perros" style="font-size:12px; display: block;">Perros</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Gatos" id="Gatos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Gatos" style="font-size:12px; display: block;">Gatos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Conejos" id="Conejos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Conejos" style="font-size:12px; display: block;">Conejos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Pollos" id="Pollos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Pollos" style="font-size:12px; display: block;">Pollos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Chinches" id="Chinches" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Chinches" style="font-size:12px; display: block;">Chinches</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Ratas" id="Ratas" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Ratas" style="font-size:12px; display: block;">Ratas</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Moscos" id="Moscos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Moscos" style="font-size: 12px; display: block;">Moscos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Gallinas" id="Gallinas" value="Si" style="font-size:12px;">
                                            <label for="Gallinas" style="font-size: 12px; display: block;">Gallinas</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Cerdos" id="Cerdos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Cerdos" style="font-size: 12px; display: block;">Cerdos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Caballos" id="Caballos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Caballos" style="font-size:12px; display: block;">Caballos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Becerros" id="Becerros" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Becerros" style="font-size: 12px; display: block;">Becerros</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Pajaros" id="Pajaros" value="Si" style="font-size: 12px; margin: 5px auto;">
                                            <label for="Pajaros" style="font-size:12px;  display: block;">Pajaros</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Borregos" id="Borregos" value="Si" style="font-size: 12px; margin: 5px auto;">
                                            <label for="Borregos" style="font-size:12px; display: block;">Borregos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Tortugas" id="Tortugas" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Tortugas" style="font-size:12px;  display: block;">Tortugas</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Patos" id="Patos" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Patos" style="font-size:12px; display: block;">Patos</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Burros" id="Burros" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Burros" style="font-size:12px; display: block; ">Burros</label>
                                        </div>

                                        <div class="col-md-2" style="text-align: center;">
                                            <input type="checkbox" name="Moscas" id="Moscas" value="Si" style="font-size:12px; margin: 5px auto;">
                                            <label for="Moscas" style="font-size: 12px; display: block;">Moscas</label>
                                        </div>

                                    </div> <!--=========== DIV DEL ROW DE  ANIMALES ================-->
                                </legend>
                            </fieldset>
                        </div> <!--=========== DIV DEL CONTAINER ANIMALES  ================-->

                        <div class="row"> <br>

                        </div>
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Viajes Recientes</strong>
                            <select name="viajes" id="viajes" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="lugar" style="display: none;">
                            <strong style="font-size:12px;">Lugar</strong>
                            <select name="lugarSelect" id="lugarSelect" class="form-control" style="font-size:12px;">
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
                            <strong style="font-size:12px;">Visita a Cuevas</strong>
                            <select name="cuevas" id="cuevas" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size:12px;">Alimentarios</strong>
                            <select name="alimentos" id="alimentos" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="tipo_alimentarios" style="display: none;">
                            <strong style="font-size:12px;">Tipo-Alimentarios</strong>
                            <select name="tipoalimentos" id="tipoalimentos" class="form-control" style="font-size:12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Queso Fresco">Queso Fresco</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <strong style="font-size:12px;">Vacunación Completa</strong>
                            <select name="vacunacion" id="vacunacion" class="form-control" style="font-size:12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="container mt-4" id="Faltante" style="display: none;">
                            <fieldset>
                                <legend>
                                    <table class="table table-striped">
                                        <thead>

                                            <tr>
                                                <th style="font-weight: bold;">Aplicación</th>
                                                <th collabel="4" style="text-center">Vacuna-Faltante</th>
                                            </tr>

                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td style="font-weight: bold;">Nacimiento</td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="bcg" id="bcg">
                                                        <label style="font-size: 12px;" class="custom-control-label" for="bcg">BCG</label>
                                                        <br>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="hepatitis_nacimiento" id="hepatitis_nacimiento">
                                                        <label class="custom-control-label" for="hepatitis_nacimiento" style="font-size:12px;">Hepatitis B</label>
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
                                                        <input type="checkbox" class="custom-control-input" name="pentavalente_2mes" id="pentavalente_2mes">
                                                        <label class="custom-control-label" for="pentavalente_2mes" style="font-size:12px;">Pentavalente Acelular</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="hepatitisB_2mes" id="hepatitisB_2mes">
                                                        <label class="custom-control-label" for="hepatitisB_2mes" style="font-size:12px;">Hepatitis B</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="rotavirus_2mes" id="rotavirus_2mes">
                                                        <label class="custom-control-label" for="rotavirus_2mes" style="font-size:12px;">Rotavirus</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="neumococo_2mes" id="neumococo_2mes">
                                                        <label class="custom-control-label" for="neumococo_2mes" style="font-size:12px;">Neumococo</label>
                                                    </div>
                                                </td>

                                            </tr>
                                            <!-- 4 Meses-->
                                            <tr>
                                                <td style="font-weight: bold;">4 meses</td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="pentavalente_4mes" id="pentavalente_4mes">
                                                        <label class="custom-control-label" for="pentavalente_4mes" style="font-size:12px;">Pentavalente Acelular</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="rotavirus_4mes" id="rotavirus_4mes">
                                                        <label class="custom-control-label" for="rotavirus_4mes" style="font-size:12px;">Rotavirus</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="neumococo_4mes" id="neumococo_4mes">
                                                        <label class="custom-control-label" for="neumococo_4mes" style="font-size:12px;">Neumococo C.</label>
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
                                                        <label class="custom-control-label" for="pentavalente_6mes" style="font-size:12px;">Pentavalente Acelular</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="rotavirus_6mes" id="rotavirus_6mes">
                                                        <label class="custom-control-label" for="rotavirus_6mes" style="font-size:12px;">Rotavirus</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="Influenza_6mes" id="Influenza_6mes">
                                                        <label class="custom-control-label" for="Influenza_6mes" style="font-size:12px;">Influenza</label>
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
                                                        <input type="checkbox" class="custom-control-input" name="Influenza_7mes" id="Influenza_7mes">
                                                        <label class="custom-control-label" for="Influenza_7mes" style="font-size:12px;">Influenza 2da dosis</label>
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
                                                    <input type="checkbox" class="custom-control-input" name="SRP_12mes" id="SRP_12mes">
                                                    <label class="custom-control-label" for="SRP_12mes" style="font-size:12px;">SRP</label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="neumococo_12mes" id="neumococo_12mes" style="font-size:13px;">
                                                    <label class="custom-control-label" for="neumococo_12mes" style="font-size:12px;">Neumococo C.</label>
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
                                                        <label class="custom-control-label" for="Pentavaleente_18mes" style="font-size:12px;">Pentavalente Acelular</label>
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
                                                        <label class="custom-control-label" for="influenza_refuerzo_24mes" style="font-size:12px;">Influenza Refuerzo Anual</label>
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
                                                        <label class="custom-control-label" for="influenza_refuerzo_36mes" style="font-size:12px;">Influenza Refuerzo Anual</label>
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
                                                        <label class="custom-control-label" for="DPTrefuerzo_48mes" style="font-size:12px;">DPT(Refuerzo)</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="Influenza_R48mes" id="Influenza_R48mes">
                                                        <label class="custom-control-label" for="Influenza_R48mes" style="font-size:12px;">Influenza Refuerzo Anual</label>
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
                                                        <label class="custom-control-label" for="Influenza_R59" style="font-size:12px;">Influenza Refuerzo Anual</label>
                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="custom-control custom-checkbox" style="white-space: nowrap;">
                                                        <input type="checkbox" class="custom-control-input" name="OVP59" id="OVP59">
                                                        <label class="custom-control-label" for="OVP59" style="font-size:12px;">OVP</label>
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
                                                        <label class="custom-control-label" for="srp_refuerzo" style="font-size:12px;">SRP (Refuerzo)</label>
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
                                                    <label class="custom-control-label" for="VVPH_11PH" style="font-size:12px;">VPH</label>
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

                        </legend>
                        </fieldset>



                    </div> <!--===========DIV DEL ROW ANTECEDENTES NO PATOLOGICOS ================-->


                    <!--===========ANTECEDENTES PATOLOGICOS ================-->

                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Antecendentes Pesonales Patológicos</h6>
                    </div>

                    <div class="row"> <!--===========ROW DE ANTECEDENTES PATOLOGICOS ================-->


                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Reflujo</strong>
                            <select name="Reflujo" id="Reflujo" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Neumopatía Crónica</strong>
                            <select name="Neuropatia_croninca" id="Neuropatia_croninca" class="form-control" style="font-size:14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="edad_neumo" style="display: none;">
                            <strong style="font-size:12px;">Edad-Neumopatía</strong>
                            <input type="number" step="any" class="form-control" id="neumo_edad" name="neumo_edad" style="font-size: 12px;">
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size:12px;">Talla Baja</strong>
                            <select name="talla_baja" id="talla_baja" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size:12px;">Discapacidad Intelectual</strong>
                            <select name="Discapacidad_intelectual" id="Discapacidad_intelectual" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>



                        <div class="col-md-3">
                            <strong style="font-size:12px;">Pancreatitis por AVP</strong>
                            <select name="pancreatitis_avp" id="pancreatitis_avp" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">LPH</strong>
                            <select name="LPH" id="LPH" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Epilepsia</strong>
                            <select name="Epilepsia" id="Epilepsia" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Amigdalectomía</strong>
                            <select name="Amigda" id="Amigda" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Apendicectomía</strong>
                            <select name="apendicectomia" id="apendicectomia" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Rubeola</strong>
                            <select name="Rubeola" id="Rubeola" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Invaginación</strong>
                            <select name="invaginacion" id="invaginacion" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size:12px;">Fractura</strong>
                            <select name="fractura" id="fractura" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Rinitis Alérgica</strong>
                            <select name="rinitis_alergica" id="rinitis_alergica" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size:12px;">Pielonefritis</strong>
                            <select name="Pielonefritis" id="Pielonefritis" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size:12px;">Varicela</strong>
                            <select name="varicela" id="varicela" class="form-control" style="font-size:12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="edad_varicela" style="display: none;">
                            <strong style="font-size:12px;">Edad-Varicela</strong>
                            <input type="number" step="any" class="form-control" id="varicela_edad" name="varicela_edad" style="font-size: 12px;">
                            </select>
                        </div>


                    </div><!--===========ROW DE ANTECEDENTES PATOLOGICOS ================-->

                    <!--===========ATENCIÓN CLÍNICA ================-->

                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Atención Clínica</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-4" id="tiempo_evolucion">
                            <strong style="font-size:12px;">Tiempo de Evolución</strong>
                            <input type="number" step="any" class="form-control" id="evolucion_ganglio" name="evolucion_ganglio" style="font-size: 12px;">
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size:12px;">Período Evolución</strong>
                            <select name="evolucion_periodo" id="evolucion_periodo" class="form-control" style="font-size:12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Días">Días</option>
                                <option value="Semanas">Semanas</option>
                                <option value="Mes">Mes</option>
                                <option value="Años">Años</option>
                            </select>
                        </div>

                        <div class="col-md-4" id="tamaño_ganglio">
                            <strong style="font-size:12px;">Tamaño del Ganglio</strong>
                            <input type="number" step="any" class="form-control" id="Ganglio_tama" name="Ganglio_tama" style="font-size: 12px;">
                            </select>
                        </div>

                    </div><!--===========ROW ATENCIÓN CLÍNICA ================-->

                    <!--===========CARACTERISTICAS ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                        <h6>Caracteristicas</h6>
                    </div>

                    <div class="container ">
                        <fieldset>
                            <legend>
                                <div class="row">

                                    <div class="col-md-3">
                                        <input type="checkbox" name="Doloroso" id="Doloroso" value="Si" style="font-size:12px;">
                                        <label for="Doloroso" style="font-size:12px;">Doloroso</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="No_doloroso" id="No_doloroso" value="Si" style="font-size:12px;">
                                        <label for="No_doloroso" style="font-size: 12px;">No Doloroso</label>
                                    </div>


                                    <div class="col-md-3">
                                        <input type="checkbox" name="Indurado" id="Indurado" value="Si" style="font-size:12px;">
                                        <label for="Indurado" style="font-size: 12px;">Indurado</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="No_Indurado" id="No_Indurado" value="Si" style="font-size:12px;">
                                        <label for="No_Indurado" style="font-size: 12px">No Indurado</label>
                                    </div>





                                    <div class="col-md-3">
                                        <input type="checkbox" name="Eritematoso" id="Eritematoso" value="Si" style="font-size: 12px;">
                                        <label for="Eritematoso" style="font-size: 12px;">Eritematoso</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="Hipertermico" id="Hipertermico" value="Si" style="font-size: 12px;">
                                        <label for="Hipertermico" style="font-size: 12px;">Hipertermico</label>
                                    </div>


                                    <div class="col-md-3">
                                        <input type="checkbox" name="con_Secrecion" id="con_Secrecion" value="Si" style="font-size: 12px;">
                                        <label for="con_Secrecion" style="font-size: 12px;">Con Secreción</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="sin_secrecion" id="sin_secrecion" value="Si" style="font-size: 12px;">
                                        <label for="sin_secrecion" style="font-size: 12px;">Sin Secreción</label>
                                    </div>




                                    <div class="col-md-3">
                                        <input type="checkbox" name="bien_delimitado" id="bien_delimitado" value="Si" style="font-size: 12px;">
                                        <label for="bien_delimitado" style="font-size: 12px;">Bien Delimitado</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="mal_delimitado" id="mal_delimitado" value="Si" style="font-size: 12px;">
                                        <label for="mal_delimitado" style="font-size: 12px;">Mal Delimitado</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="cambios_coloracion" id="cambios_coloracion" value="Si" style="font-size: 12px;">
                                        <label for="cambios_coloracion" style="font-size: 12px;">Cambios de Coloración</label>
                                    </div>


                                    <div class="col-md-3">
                                        <input type="checkbox" name="Fijo" id="Fijo" value="Si" style="font-size: 12px;">
                                        <label for="Fijo" style="font-size: 12px;">Fijo</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="Movil" id="Movil" value="Si" style="font-size: 12px;">
                                        <label for="Movil" style="font-size: 12px;">Movíl</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox" name="sin_cambios" id="sin_cambios" value="Si" style="font-size:12px;">
                                        <label for="sin_cambios" style="font-size: 12px;">Sin Cambios de Coloración</label>
                                    </div>

                                </div>
                            </legend>
                        </fieldset>

                    </div><!--===========CARACTERISTICAS================-->

                    <!--===========OTROS ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                        <h6>Otros</h6>
                    </div>


                    <!--===========Otros Ganglios ================-->
                    <div class="col-md-12">
                        <strong style="font-size:12px;">Otros Ganglios</strong>
                        <select name="otros_ganglios" id="otros_ganglios" class="form-control" style="font-size: 12px;">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>

                    <div class="container text-center" id="otro_localizacion" style="display: none;">
                    <fieldset>
                    <legend>
                        <div class="row">

                            <div class="col-md-3">
                                <input type="checkbox" name="local_submandibulares" id="local_submandibulares" value="Si" style="font-size: 12px;">
                                <label for="local_submandibulares" style="font-size: 12px;">Submandibulares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_axilares" id="local_axilares" value="Si" style="font-size: 12px;">
                                <label for="local_axilares" style="font-size: 12px;">Axilares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_inguinales" id="local_inguinales" value="Si" style="font-size: 12px;">
                                <label for="local_inguinales" style="font-size: 12px;">Inguinales</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_cervicales" id="local_cervicales" value="Si" style="font-size: 12px;">
                                <label for="local_cervicales" style="font-size: 12px;">Cervicales</label>
                            </div>

                        </div> <br><!--===========primera mitad ================-->

                        <div class="row">
                            <div class="col-md-3">
                                <input type="checkbox" name="local_retroauri" id="local_retroauri" value="Si" style="font-size: 12px;">
                                <label for="local_retroauri" style="font-size: 12px;">Retroauriculares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_subclav" id="local_subclav" value="Si" style="font-size: 12px;">
                                <label for="local_subclav" style="font-size: 12px;">Subclavicular</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_occipital" id="local_occipital" value="Si" style="font-size: 12px;">
                                <label for="local_occipital" style="font-size: 12px;">Occipital</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_adeno" id="local_adeno" value="Si" style="font-size: 12px;">
                                <label for="local_adeno" style="font-size: 12px;">Adenopatias</label>
                            </div>
                        </div><!--===========segunda mitad ================-->
                        </legend>
                        </fieldset>
                    </div> <!--===========CONTAINEROtros Ganglios ================-->


                    <!--===========Etiología ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                        <h6>Etiología</h6>
                    </div>


                    <div class="container text-center" id="etiologia">
                        <fieldset>
                            <legend>
                                <div class="row">


                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_VEB" id="etiologia_VEB" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_VEB" style="font-size: 12px;">VEB</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_CMV" id="etiologia_CMV" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_CMV" style="font-size: 12px;">CMV</label>
                                    </div>

                                    <div class="col-md-1">
                                        <input type="checkbox" name="etiologia_TB" id="etiologia_TB" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_TB" style="font-size: 12px;">TB</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_B19" id="etiologia_B19" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_B19" style="font-size: 12px;">B19</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_bocio" id="etiologia_bocio" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_bocio" style="font-size: 12px;">Bocio</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="etiologia_rubeola" id="etiologia_rubeola" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_rubeola" style="font-size: 12px;">Rubéola</label>
                                    </div>


                                </div><br>



                                <div class="row">

                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_bartonella" id="etiologia_bartonella" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_bartonella" style="font-size: 12px;">Bartonella</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_toxoplamosis" id="etiologia_toxoplamosis" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_toxoplamosis" style="font-size: 12px;">Toxoplamosis</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etioligia_inflamatorio" id="etioligia_inflamatorio" value="Si" style="font-size: 12px;">
                                        <label for="etioligia_inflamatorio" style="font-size: 12px;">Inflamatorio</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_parvovirus" id="etiologia_parvovirus" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_parvovirus" style="font-size: 12px;">Parvovirus</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox" name="etiologia_varicela" id="etiologia_varicela" value="Si" style="font-size: 12px;">
                                        <label for="etiologia_varicela" style="font-size: 12px;">Varicela</label>
                                    </div>

                                    <div class="col-md-1">

                                    </div>

                                </div>
                            </legend>
                        </fieldset>
                    </div><!--===========CONTAINER ETIOLOGIA ================-->

                    <!--===========Tratamiento ================-->
                    <div id="tx" style="display: none; 
                border-radius: 10px;
                background-color: rgb(255, 170, 76, 0.4); 
                color: rgb(255, 255, 255); 
                text-align: center; 
                margin-top: 15px;">
                        <h6>Tratamiento Farmacológico para TB</h6>
                    </div>

                    <div class="container text-center" id="tx_fx" style="display: none;">
                        <fieldset>
                            <legend>

                                <div class="row ">
                                    <div class="col-md-3">
                                        <input type="checkbox" name="tx_Isonicida" id="tx_Isonicida" value="Si" style="font-size: 12px;">
                                        <label for="tx_Isonicida" style="font-size: 12px;">Isonicida</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="tx_Rifampicina" id="tx_Rifampicina" value="Si" style="font-size: 12px;">
                                        <label for="tx_Rifampicina" style="font-size: 12px;">Rifampicina</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="tx_Pirazinamida" id="tx_Pirazinamida" value="Si" style="font-size: 12px;">
                                        <label for="tx_Pirazinamida" style="font-size: 12px;">Pirazinamida</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" name="tx_Etambutol" id="tx_Etambutol" value="Si" style="font-size: 12px;">
                                        <label for="tx_Etambutol" style="font-size: 12px;">Etambutol</label>
                                    </div>
                                </div>
                            </legend>
                        </fieldset>
                    </div>




                    <!--===========LABORATORIOS ================-->

                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Laboratorios</h6>
                    </div>

                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Biometría</h6>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Hemoglobina</strong>
                            <input type="number" step="any" class="form-control" id="id_Hemoglobina" name="id_Hemoglobina">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Hematocrito</strong>
                            <input type="number" step="any" class="form-control" id="id_Hematocrito" name="id_Hematocrito">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Leucocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Leucocitos" name="id_Leucocitos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Neutrófilos</strong>
                            <input type="number" step="any" class="form-control" id="id_Neutrfilos" name="id_Neutrfilos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Linfocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Linfocitos" name="id_Linfocitos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Monocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Monocitos" name="id_Monocitos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Plaquetas</strong>
                            <input type="number" step="any" class="form-control" id="id_Plaquetas" name="id_Plaquetas">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Eosinófilos</strong>
                            <input type="number" step="any" class="form-control" id="id_Eosinofilos" name="id_Eosinofilos">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Eritrocitos</strong>
                            <input type="number" step="any" class="form-control" id="id_Eritrocitos" name="id_Eritrocitos">
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Procalcitonina</strong>
                            <input type="number" step="any" class="form-control" id="id_Procalcitonina" name="id_Procalcitonina">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Volumen Corpuscular Medio</strong>
                            <input type="number" step="any" class="form-control" id="id_VCM" name="id_VCM">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 12px;">Ancho de Distribución Eritrocitaria</strong>
                            <input type="number" step="any" class="form-control" id="id_ADE" name="id_ADE">
                        </div>


                    </div> <!--==========LABORATORIOS ================-->

                    <!--==========PFH  ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>PFH</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">DHL</strong>
                            <input type="number" step="any" class="form-control" id="id_DHL" name="id_DHL">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 14px">AST</strong>
                            <input type="number" step="any" class="form-control" id="id_AST" name="id_AST">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">ALT</strong>
                            <input type="number" step="any" class="form-control" id="id_ALT" name="id_ALT">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Globulina</strong>
                            <input type="number" step="any" class="form-control" id="id_glob" name="id_Glob">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Albúmina</strong>
                            <input type="number" step="any" class="form-control" id="id_albumina" name="id_albumina">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">BD</strong>
                            <input type="number" step="any" class="form-control" id="id_BD" name="id_BD">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 14;">BI</strong>
                            <input type="number" step="any" class="form-control" id="id_BI" name="id_BI">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">TGO</strong>
                            <input type="number" step="any" class="form-control" id="id_TGO" name="id_TGO">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">TGP</strong>
                            <input type="number" step="any" class="form-control" id="id_TGP" name="id_TGP">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">FA</strong>
                            <input type="number" step="any" class="form-control" id="id_FA" name="id_FA">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">GGT</strong>
                            <input type="number" step="any" class="form-control" id="id_GGT" name="id_GGT">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">PT</strong>
                            <input type="number" step="any" class="form-control" id="id_PT" name="id_PT">
                        </div>


                        <div class="col-md-6">
                            <strong style="font-size: 12px;">REL A/G</strong>
                            <input type="number" step="any" class="form-control" id="id_Real" name="id_Real">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px">Proteinas Totales</strong>
                            <input type="number" step="any" class="form-control" id="id_PT" name="id_PT">
                        </div>

                    </div><!-- <div Laboratorios PFH Y DHL ="-->


                    <!--=========== DIV SEROLOGÍA ================-->

                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Serología</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <strong style="font-size:12px;">Serología</strong>
                            <select name="lab_serologia" id="lab_serologia" class="form-control" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="serologia_resultado" style="display: none;">
                            <strong style="font-size:12px;">Resultado-Serología</strong>
                            <select name="resultado_cultivo" id="resultado_serologia" class="form-control" style="font-size: 12px;">
                                <option value="0">Selecione</option>
                                <option value="Positivo">Positivo</option>
                                <option value="Negativo">Negativo</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="pcr_resultado" style="display: none;">
                            <strong style="font-size:12px;">Prueba PCR</strong>
                            <select name="prueb_pcr" id="prueb_pcr" class="form-control" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="resul_pcr" style="display: none;">
                            <strong style="font-size:12px;">Resultado-PCR</strong>
                            <select name="resultado_PCR" id="resultado_PCR" class="form-control" style="font-size: 12px;">
                                <option value="0">Selecione</option>
                                <option value="Positivo">Positivo</option>
                                <option value="Negativo">Negativo</option>
                            </select>
                        </div>





                    </div><!--=========== DIV SEROLOGÍA ================-->


                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Cultivo</h6>
                    </div>


                    <!--===========CULTIVOS ================-->
                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Cultivo</strong>
                            <select name="lab_cultivo" id="lab_cultivo" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="cultivo_resultado" style="display: none;">
                            <strong style="font-size:12px;">Resultado-Cultivo</strong>
                            <select name="resultado_cultivo" id="resultado_cultivo" class="form-control" style="font-size: 12px;">
                                <option value="0">Selecione</option>
                                <option value="Positivo">Positivo</option>
                                <option value="Negativo">Negativo</option>
                            </select>
                        </div>

                    </div><!--=========== DIV CULTIVOS ================-->

                    <!--=========== TOMOGRAFÍA ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Tomografía</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Tomografía</strong>
                            <select name="lab_tomografia" id="lab_tomografia" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="resultado_dxRFC" style="display: none;">
                            <strong style="font-size: 12px;">Resultado-Tomografía</strong>
                            <input type="text" step="any" class="form-control" id="resultado_tomografia" name="resultado_tomografia">
                        </div>
                    </div><!--=========== DIV ROW TOMOGRAFÍA================-->

                    <!--=========== ULTRASONIDO ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Ultrasonido</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Ultrasonido</strong>
                            <select name="lab_Ultrasonido" id="lab_Ultrasonido" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="ultrasonido_resultado" style="display: none;">
                            <strong style="font-size: 12px;">Resultado-Ultrasonido</strong>
                            <input type="text" step="any" class="form-control" id="resultado_Ultrasonido" name="resultado_Ultrasonido">
                        </div>
                    </div><!--=========== DIV ROW ULTRASONIDO================-->

                    <!--=========== BIOPSIA ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Biopsia</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Biopsia</strong>
                            <select name="lab_Biopsia" id="lab_Biopsia" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="biopsia_resultado" style="display: none;">
                            <strong style="font-size: 12px;">Resultado-Biopsia</strong>
                            <input type="text" step="any" class="form-control" id="resultado_Biopsia" name="resultado_Biopsia">
                        </div>
                    </div><!--=========== DIV ROW BIOPSIA================-->

                    <!--=========== REFERENCIA ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Referencia a Otra Institución</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Referencia</strong>
                            <select name="referencia" id="referencia" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="id_refe" style="display: none;">
                            <strong style="font-size: 12px;">Institución</strong>
                            <input type="text" step="any" class="form-control" id="resultado_referencia" name="resultado_referencia">
                        </div>

                        <div class="col-md-4" id="causa_refe" style="display: none;">
                            <strong style="font-size: 12px;">Causa</strong>
                            <input type="text" step="any" class="form-control" id="causa_ref" name="causa_ref">
                        </div>
                    </div>

                    <!--=========== Alta ================-->
                    <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 14px;">
                        <h6>Alta</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size:12px;">Alta</strong>
                            <select name="id_Alta" id="id_Alta" class="form-control" style="font-size: 12px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="causa_alta" style="display: none;">
                            <strong style="font-size:12px;">Causa</strong>
                            <select name="id_causa" id="id_causa" class="form-control" style="font-size: 12px;">
                                <option value="0">Seleccione</option>
                                <option value="Mejoría">Mejoría</option>
                                <option value="Remisión">Remisión</option>
                                <option value="Abandono">Abandono</option>
                                <option value="No Cumple Criterios">No Cumple Criterios</option>
                            </select>
                        </div>

                    </div><!--=========== DIV ROW REFERENCIA================-->







                </div> <!-- <div class="modal-body">-->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div> <!-- <div class="modal-footer">-->
            </form>


        </div> <!-- <div class="modal-content">-->
    </div> <!-- cierra el div <div class="modal-dialog modal-lg">-->
</div> <!-- cierra el primer div <div class="modal fade" id="RegistrarPacienteInterconsulta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">-->