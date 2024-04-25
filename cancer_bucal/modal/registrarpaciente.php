<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-person-fill-add modal-title fs-4" id="exampleModalLabel"> Registro Paciente</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="CB_form" method="POST">

                    <!-- Datos de llegada del paciente  -->
                    <div class="row">

                        <div class="form-header">
                            <h5 class="form-title">Datos Paciente</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>CURP</strong>
                                <input class="form-control" type="text" name="curp" id="curp" maxlength="18"
                                    minlength="18" onblur="curp2date()">
                            </div>
                            <div class="col-md-4">
                                <strong>Nombre Completo</strong>
                                <input class="form-control" type="text" name="nombre_completo" id="nombre_completo">
                            </div>
                            <div class="col-md-4">
                                <strong>Escolaridad</strong>
                                <select class="form-control" name="escolaridad" id="escolaridad">
                                    <option value="0">Seleccione...</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Preparatoria/Bachillerato">Preparatoria/Bachillerato</option>
                                    <option value="Licenciatura/Ingenieria">Licenciatura/Ingenieria</option>
                                    <option value="Maestria">Maestria</option>
                                    <option value="Doctorado">Doctorado</option>
                                    <option value="Sin estudios">Sin estudios</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Fecha de nacimiento</strong>
                                <input class="form-control" type="date" name="birth_date" id="birth_date">
                            </div>
                            <div class="col-md-4">
                                <strong>Edad</strong>
                                <input class="form-control" type="text" name="edad" id="edad">
                            </div>
                            <div class="col-md-4">
                                <strong>Sexo</strong>
                                <input class="form-control" type="text" name="sex" id="sex">
                            </div>
                            <div class="col-md-4">
                                <strong>Talla</strong>
                                <input class="form-control" type="text" name="talla" id="talla">
                            </div>
                            <div class="col-md-4">
                                <strong>Peso</strong>
                                <input class="form-control" type="number" name="peso" id="peso" onblur="calculaIMC();">
                            </div>
                            <div class="col-md-4">
                                <strong>IMC</strong>
                                <input class="form-control" type="text" name="imc" id="imc" readonly>
                            </div>
                            <div class="col-md-4">
                                <strong>Estado</strong>
                                <select class="form-control" name="estado" id="estado">
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
                                <strong>Municipio</strong>
                                <select class="form-control" name="municipio" id="municipio">
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Referencia</strong>
                                <select class="form-control" name="ref" id="ref">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>

                            </div>
                            <div class="col-md-12" id="uni_ref">
                                <strong>Unidad de Referencia</strong>
                                <input list="Clues" class="form-control" type="text" name="uni_ref" id="uni_ref">
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
                        </div> <!-- div row-->

                        <div class="form-header">
                            <h5 class="form-title">Antecedentes No Patologicos</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Exposición Solar</strong>
                                <select class="form-control" name="exp_solar" id="exp_solar">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Comidas al Día</strong>
                                <select class="form-control" name="num_comidas" id="num_comidas">
                                    <option value="">Seleccione...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3 o mas">3 o mas</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Higiene Bucal</strong>
                                <select class="form-control" name="higinee_bucal" id="higinee_bucal">
                                    <option value="">Seleccione...</option>
                                    <option value="1 vez al día">1 vez al día</option>
                                    <option value="2 vez al día">2 vez al día</option>
                                    <option value="3 o mas veces al día">3 o mas veces al día</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-header">
                            <h5 class="form-title">Antecedentes Personales Patologicos</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-3 checkboxes">
                                <span>Alcoholismo</span>
                                <label class="container">
                                    <input type="checkbox" name="alcoholismo" id="alcoholismo">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Tabaquismo</span>
                                <label class="container">
                                    <input type="checkbox" name="tabaquismo" id="tabaquismo">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Cocaina</span>
                                <label class="container">
                                    <input type="checkbox" name="cocaina" id="cocaina">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Marihuana</span>
                                <label class="container">
                                    <input type="checkbox" name="marihuana" id="marihuana">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Medicamentos Controlados</span>
                                <label class="container">
                                    <input type="checkbox" name="med_control" id="med_control">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Solventes</span>
                                <label class="container">
                                    <input type="checkbox" name="solventes" id="solventes">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Ninguno</span>
                                <label class="container">
                                    <input type="checkbox" name="ninguno" id="at_ninguno">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                        </div>

                        <!-- Separacion de los checkbox y textos que surgen -->
                        <div>
                            <h5> </h5>
                        </div>


                        <div class="row">
                            <div class="col-md-4" id='hz_alcohol'>
                                <strong>Frecuencia del Alcoholismo</strong>
                                <select class="form-control" name="hz_alcohol" id="hz_alcohol">
                                    <option value="">Seleccione...</option>
                                    <option value="Social">Social</option>
                                    <option value="Embriaguez">Embriaguez</option>
                                </select>
                            </div>
                            <div class="col-md-4" id="tabaquismo1">
                                <strong>Años con Tabaquismo</strong>
                                <input type="number" class="form-control" name="tiempo_tabaco" id="tiempo_tabaco">
                            </div>
                            <div class="col-md-4" id="tabaquismo2">
                                <strong>Cigarros al día:</strong>
                                <input type="number" class="form-control" name="num_cigarros" id="num_cigarros">
                            </div>
                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Habitos</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-2 checkboxes">
                                <span>Autolesiones</span>
                                <label class="container">
                                    <input type="checkbox" name="autolesiones" id="autolesiones">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Bruxismo</span>
                                <label class="container">
                                    <input type="checkbox" name="bruxismo" id="bruxismo">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Interposicion Lingual</span>
                                <label class="container">
                                    <input type="checkbox" name="IL" id="IL">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Onicofagia</span>
                                <label class="container">
                                    <input type="checkbox" name="onicofagia" id="onicofagia">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Queilofagia</span>
                                <label class="container">
                                    <input type="checkbox" name="queilofagia" id="queilofagia">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Respiracion Oral</span>
                                <label class="container">
                                    <input type="checkbox" name="RO" id="RO">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Succion Labial</span>
                                <label class="container">
                                    <input type="checkbox" name="SL" id="SL">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Succion Digital</span>
                                <label class="container">
                                    <input type="checkbox" name="SD" id="SD">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Ninguno</span>
                                <label class="container">
                                    <input type="checkbox" name="hab_ninguno" id="hab_ninguno">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Virus</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-3 checkboxes">
                                <span>VIH</span>
                                <label class="container">
                                    <input type="checkbox" name="VIH" id="VIH">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>VPH</span>
                                <label class="container">
                                    <input type="checkbox" name="VPH" id="VPH">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>I. Epstein Barr</span>
                                <label class="container">
                                    <input type="checkbox" name="epste_bar" id="epste_bar">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3 checkboxes">
                                <span>Ninguno</span>
                                <label class="container">
                                    <input type="checkbox" name="vr_ninguno" id="vr_ninguno">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Cáncer</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-2 checkboxes">
                                <span>Colon y Recto</span>
                                <label class="container">
                                    <input type="checkbox" name="colon_rec" id="colon_rec">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Endometrio</span>
                                <label class="container">
                                    <input type="checkbox" name="endometrio" id="endometrio">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Gástrico</span>
                                <label class="container">
                                    <input type="checkbox" name="gastrico" id="gastrico">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Hígado</span>
                                <label class="container">
                                    <input type="checkbox" name="higado" id="higado">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Leucemia</span>
                                <label class="container">
                                    <input type="checkbox" name="leucemia" id="leucemia">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Linfoma No Hodgkin</span>
                                <label class="container">
                                    <input type="checkbox" name="hodgkin" id="hodgkin">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Mama</span>
                                <label class="container">
                                    <input type="checkbox" name="mama" id="mama">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Melanoma</span>
                                <label class="container">
                                    <input type="checkbox" name="melanoma" id="melanoma">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Ovario</span>
                                <label class="container">
                                    <input type="checkbox" name="ovario" id="ovario">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Páncreas</span>
                                <label class="container">
                                    <input type="checkbox" name="pancreas" id="pancreas">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Próstata</span>
                                <label class="container">
                                    <input type="checkbox" name="prostata" id="prostata">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Pulmón</span>
                                <label class="container">
                                    <input type="checkbox" name="pulmon" id="pulmon">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Riñón</span>
                                <label class="container">
                                    <input type="checkbox" name="rinon" id="rinon">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Testículo</span>
                                <label class="container">
                                    <input type="checkbox" name="testiculo" id="testiculo">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Tiroides</span>
                                <label class="container">
                                    <input type="checkbox" name="tiroides" id="tiroides">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Vejiga</span>
                                <label class="container">
                                    <input type="checkbox" name="vejiga" id="vejiga">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-2 checkboxes">
                                <span>Ninguno</span>
                                <label class="container">
                                    <input type="checkbox" name="cancer_ninguno" id="cancer_ninguno">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Afecciones Orales</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-4 checkboxes">
                                <span>Afectacion Dental</span>
                                <label class="container">
                                    <input type="checkbox" name="afec_dent" id="afec_dent">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Lesiones Orales</span>
                                <label class="container">
                                    <input type="checkbox" name="les_orales" id="les_orales">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4 checkboxes">
                                <span>Ubicacion</span>
                                <label class="container">
                                    <input type="checkbox" name="ubicacion" id="ubicacion">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                        </div>

                        <div id="zona_afe_dent">
                            <div class="form-header" id="Afectacion Dental">
                                <h6 class="form-subtitle">Afectacion Dental</h6>
                            </div>
    
                            <div class="row">
                                <div class="col-md-4 checkboxes">
                                    <span>Enfermedad Periodontal</span>
                                    <label class="container">
                                        <input type="checkbox" name="enf_perio" id="enf_perio">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-4 checkboxes">
                                    <span>Organo Dental Fracturado</span>
                                    <label class="container">
                                        <input type="checkbox" name="org_dent_frac" id="org_dent_frac">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-4 checkboxes">
                                    <span>Protesis Fija Desajustada</span>
                                    <label class="container">
                                        <input type="checkbox" name="prot_f_desa" id="prot_f_desa">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-4 checkboxes">
                                    <span>Protesis Fija Fracturada</span>
                                    <label class="container">
                                        <input type="checkbox" name="prot_f_fract" id="prot_f_fract">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-4 checkboxes">
                                    <span>Protesis Removible Desajustada</span>
                                    <label class="container">
                                        <input type="checkbox" name="prot_r_desa" id="prot_r_desa">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-4 checkboxes">
                                    <span>Protesis Removible Fracturada</span>
                                    <label class="container">
                                        <input type="checkbox" name="prot_r_fract" id="prot_r_fract">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
    
                                <div id="fractura_opt">
                                    <div class="row" id="organo_fractura">
                                        <div class="col-md-3">
                                            <strong>Maxilar Superior Derecho</strong>
                                            <input type="text" class="form-control" name="msd" id="msd">
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Maxilar Superior Izquierdo</strong>
                                            <input type="text" class="form-control" name="msi" id="msi">
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Maxilar Inferior Derecho</strong>
                                            <input type="text" class="form-control" name="mid" id="mid">
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Maxilar Inferior Izquierdo</strong>
                                            <input type="text" class="form-control" name="mii" id="mii">
                                        </div>
                                    </div>
                                </div>
    
    
    
                            </div>
                        </div>

                        <div id="zona_les_orales">
                            <div class="form-header">
                                <h6 class="form-subtitle">Lesiones Orales</h6>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Existe Lesion Oral</strong>
                                    <select class="form-control" name="elo" id="elo">
                                        <option value="">Seleccione...</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <strong>Tipo de Tejido</strong>
                                    <select class="form-control" name="tipo_tejido" id="tipo_tejido">
                                        <option value="">Seleccione...</option>
                                        <option value="Blando">Blando</option>
                                        <option value="Duro">Duro</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkboxes">
                                        <strong>Tipo Lesión</strong>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 checkboxes">
                                            <span>Melatónica</span>
                                            <label class="container">
                                                <input type="checkbox" name="melatonica" id="melatonica">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-4 checkboxes">
                                            <span>Nódulo</span>
                                            <label class="container">
                                                <input type="checkbox" name="nodulo" id="nodulo">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-4 checkboxes">
                                            <span>Pigmentada</span>
                                            <label class="container">
                                                <input type="checkbox" name="pigmentada" id="pigmentada">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-4 checkboxes">
                                            <span>Tumor</span>
                                            <label class="container">
                                                <input type="checkbox" name="tumor" id="tumor">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-4 checkboxes">
                                            <span>Ulcera</span>
                                            <label class="container">
                                                <input type="checkbox" name="ulcera" id="ulcera">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-4 checkboxes">
                                            <span>Verruga</span>
                                            <label class="container">
                                                <input type="checkbox" name="verruga" id="verruga">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-4 checkboxes">
                                            <span>Vesicula</span>
                                            <label class="container">
                                                <input type="checkbox" name="vesicula" id="vesicula">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <strong>Coloración</strong>
                                    <select class="form-control" name="coloracion" id="coloracion">
                                        <option value="">Seleccione</option>
                                        <option value="Blanca">Blanca</option>
                                        <option value="Roja">Roja</option>
                                        <option value="Blanca/Roja">Blanca/Roja</option>
                                    </select>
                                </div>
    
                            </div>
                        </div>

                        <div id="zona_ubicaciones">
                            <div class="form-header">
                                <h6 class="form-subtitle">Ubicación</h6>
                            </div>
    
                            <div class="row">
    
                                <div class="col-md-6 checkboxes">
                                    <span>Derecha</span>
                                    <label class="container">
                                        <input type="checkbox" name="ubic_derecha" id="ubic_derecha">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-6 checkboxes">
                                    <span>Izquierda</span>
                                    <label class="container">
                                        <input type="checkbox" name="ubic_Izquierda" id="ubic_Izquierda">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
    
    
                            </div>
                        </div>

                        <div id="zona_derecha">
                            <div class="form-header">
                                <h6 class="form-subtitle">Ubicación Derecha</h6>
                            </div>
    
                            <div class="row">
                                <div class="checkboxes">
                                    <strong>Subsitio Anatómico</strong>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Ninguno</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_ninguno" id="derec_ninguno">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Cuerpo Mandibular</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_CM" id="derec_CM">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Encia Superior</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_ES" id="derec_ES">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Labios</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_labio" id="derec_labio">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Lengua</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_lengua" id="derec_lengua">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Encia Inferior</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_EI" id="derec_EI">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Maxilar Posterior</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_MP" id="derec_MP">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Mucosa Bucal</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_MB" id="derec_MB">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Paladar Blando</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_PB" id="derec_PB">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Paladar Duro</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_PD" id="derec_PD">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Piso</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_piso" id="derec_piso">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Premaxilar</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_premaxilar" id="derec_premaxilar">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Proceso Alveolar</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_PA" id="derec_PA">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Rama Mandibular</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_RM" id="derec_RM">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Trigono Retromolar</span>
                                    <label class="container">
                                        <input type="checkbox" name="derec_TR" id="derec_TR">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Labios</strong>
                                        <select class="form-control" name="derec_labios" id="derec_labios">
                                            <option value="">Seleccione...</option>
                                            <option value="Labio Inferior">Labio Inferior</option>
                                            <option value="Labio Superior">Labio Superior</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Lengua</strong>
                                        <select class="form-control" name="derec_lenguas" id="derec_lenguas">
                                            <option value="">Seleccione...</option>
                                            <option value="Borde Lateral">Borde Lateral</option>
                                            <option value="Cara Ventral">Cara Ventral</option>
                                            <option value="Dorso">Dorso</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Paladar Blando</strong>
                                        <select class="form-control" name="derec_PBL" id="derec_PBL">
                                            <option value="">Seleccione...</option>
                                            <option value="Boveda de Paladar">Boveda de Paladar</option>
                                            <option value="Velo de Paladar">Velo de Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Paladar Duro</strong>
                                        <select class="form-control" name="derec_PDR" id="derec_PDR">
                                            <option value="">Seleccione...</option>
                                            <option value="Boveda de Paladar">Boveda de Paladar</option>
                                            <option value="Velo de Paladar">Velo de Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Encia superior</strong>
                                        <select class="form-control" name="derec_ESP" id="derec_ESP">
                                            <option value="">Seleccione...</option>
                                            <option value="Bucal">Bucal</option>
                                            <option value="Interpapilar">Interpapilar</option>
                                            <option value="Lingual">Lingual</option>
                                            <option value="Paladar">Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Encia inferior</strong>
                                        <select class="form-control" name="derec_EIF" id="derec_EIF">
                                            <option value="">Seleccione...</option>
                                            <option value="Bucal">Bucal</option>
                                            <option value="Interpapilar">Interpapilar</option>
                                            <option value="Lingual">Lingual</option>
                                            <option value="Paladar">Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Está relacionado con un órgano dental</strong>
                                        <select class="form-control" name="derec_EROD" id="derec_EROD">
                                            <option value="">Seleccione...</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Maxilar Superior Derecho</strong>
                                        <input type="text" class="form-control" name="derec_MSD" id="derec_MSD">
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Maxilar Inferior Derecho</strong>
                                        <input type="text" class="form-control" name="derec_MID" id="derec_MID">
                                    </div>
                                </div>
    
    
    
                            </div>
                        </div>

                        <div id="zona_izquierda">
                            <div class="form-header" id="zona_izquierda1">
                                <h6 class="form-subtitle">Ubicación Izquierda</h6>
                            </div>
    
                            <div class="row" id="zona_izquierda2">
                                <div class="checkboxes">
                                    <strong>Subsitio Anatómico</strong>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Ninguno</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_ninguno" id="izqui_ninguno">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Cuerpo Mandibular</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_CM" id="izqui_CM">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Encia Superior</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_ES" id="izqui_ES">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Labios</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_labio" id="izqui_labio">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Lengua</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_lengua" id="izqui_lengua">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Encia Inferior</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_EI" id="izqui_EI">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Maxilar Posterior</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_MP" id="izqui_MP">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Mucosa Bucal</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_MB" id="izqui_MB">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Paladar Blando</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_PB" id="izqui_PB">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Paladar Duro</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_PD" id="izqui_PD">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Piso</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_piso" id="izqui_piso">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Premaxilar</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_premaxilar" id="izqui_premaxilar">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Proceso Alveolar</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_PA" id="izqui_PA">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Rama Mandibular</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_RM" id="izqui_RM">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-2 checkboxes">
                                    <span>Trigono Retromolar</span>
                                    <label class="container">
                                        <input type="checkbox" name="izqui_TR" id="izqui_TR">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Labios</strong>
                                        <select class="form-control" name="izqui_labios" id="izqui_labios">
                                            <option value="">Seleccione...</option>
                                            <option value="Labio Inferior">Labio Inferior</option>
                                            <option value="Labio Superior">Labio Superior</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Lengua</strong>
                                        <select class="form-control" name="izqui_lenguas" id="izqui_lenguas">
                                            <option value="">Seleccione...</option>
                                            <option value="Borde Lateral">Borde Lateral</option>
                                            <option value="Cara Ventral">Cara Ventral</option>
                                            <option value="Dorso">Dorso</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Paladar Blando</strong>
                                        <select class="form-control" name="izqui_PBL" id="izqui_PBL">
                                            <option value="">Seleccione...</option>
                                            <option value="Boveda de Paladar">Boveda de Paladar</option>
                                            <option value="Velo de Paladar">Velo de Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Paladar Duro</strong>
                                        <select class="form-control" name="izqui_PDR" id="izqui_PDR">
                                            <option value="">Seleccione...</option>
                                            <option value="Boveda de Paladar">Boveda de Paladar</option>
                                            <option value="Velo de Paladar">Velo de Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Encia superior</strong>
                                        <select class="form-control" name="izqui_ESP" id="izqui_ESP">
                                            <option value="">Seleccione...</option>
                                            <option value="Bucal">Bucal</option>
                                            <option value="Interpapilar">Interpapilar</option>
                                            <option value="Lingual">Lingual</option>
                                            <option value="Paladar">Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Encia inferior</strong>
                                        <select class="form-control" name="izqui_EIF" id="izqui_EIF">
                                            <option value="">Seleccione...</option>
                                            <option value="Bucal">Bucal</option>
                                            <option value="Interpapilar">Interpapilar</option>
                                            <option value="Lingual">Lingual</option>
                                            <option value="Paladar">Paladar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Está relacionado con un órgano dental</strong>
                                        <select class="form-control" name="izqui_EROD" id="izqui_EROD">
                                            <option value="">Seleccione...</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Maxilar Superior Izquierdo</strong>
                                        <input type="text" class="form-control" name="izqui_MSD" id="izqui_MSD">
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Maxilar Inferior Izquierdo</strong>
                                        <input type="text" class="form-control" name="izqui_MID" id="izqui_MID">
                                    </div>
                                </div>
    
    
    
                            </div>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Atencion Clinica</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Fecha primer atención</strong>
                                <input type="date" class="form-control" name="fecha_primera_at" id="fecha_primera_at">
                            </div>
                            <div class="col-md-4">
                                <strong>Etapa clinica</strong>
                                <input type="text" class="form-control" name="etapa_clinica" id="etapa_clinica" value="TNM" readonly>
                            </div>
                            <div class="col-md-4">
                                <strong>Tamaño Tumoral</strong>
                                <select class="form-control" name="size_tumoral" id="size_tumoral">
                                    <option value="">Seleccione...</option>
                                    <option value="T1 Menor o igual a 2cm">T1 Menor o igual a 2cm</option>
                                    <option value="T2 Mayor a 2 cm pero menor a 4 cm">T2 Mayor a 2 cm pero menor a 4 cm</option>
                                    <option value="T3 más de 4cm">T3 más de 4cm</option>
                                    <option value="T4a Invade piel, mandibula, canal auditivo y nervio facial">T4a Invade piel, mandibula, canal auditivo y nervio facial</option>
                                    <option value="T4b Tumor que invade la base del cráneo y/o Pterigoides">T4b Tumor que invade la base del cráneo y/o Pterigoides</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Compromiso Linfático Nodal</strong>
                                <select class="form-control" name="compro_linfa" id="compro_linfa">
                                    <option value="">Seleccione...</option>
                                    <option value="NX: No puede ser evaluado por falta de datos">NX: No puede ser evaluado por falta de datos</option>
                                    <option value="N0:Ausencia de adenopatias palpables">N0:Ausencia de adenopatias palpables</option>
                                    <option value="N1: Nodulos Palpables Ipsilaterales, menores a 3cm">N1: Nodulos Palpables Ipsilaterales, menores a 3cm</option>
                                    <option value="N2a. Metástasis en Nodulo Ipsilateral, mayor de 3cm menor de 6cm">N2a. Metástasis en Nodulo Ipsilateral, mayor de 3cm menor de 6cm</option>
                                    <option value="N2b. Metástasis en múltiples nodulos Ipsilaterales mayores a 6cm">N2b. Metástasis en múltiples nodulos Ipsilaterales mayores a 6cm</option>
                                    <option value="N2c. Metástasis en nodulos bilaterales y contralaterales mayores a 6cm">N2c. Metástasis en nodulos bilaterales y contralaterales mayores a 6cm</option>
                                    <option value="N3. Nodulos palpables fijos mayor a 6cm">N3. Nodulos palpables fijos mayor a 6cm</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Metástasis</strong>
                                <select class="form-control" name="metastatis" id="metastatis">
                                    <option value="">Seleccione...</option>
                                    <option value="MX: No se pueden evaluar metastasis distantes">MX: No se pueden evaluar metastasis distantes</option>
                                    <option value="M0 Sin enfermedad a distancia">M0 Sin enfermedad a distancia</option>
                                    <option value="M1 Evidencia de Metástasis por clínica o radiografia">M1 Evidencia de Metástasis por clínica o radiografia</option>
                                </select>
                            </div>
                            <div id="sitio_meta">
                                <div class="row">
                                    <div class="checkboxes">
                                        <strong>Sitio Metástasis</strong>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Sin registro</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_sinReg" id="at_sinReg">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Hepatica</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_hepatica" id="at_hepatica">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Pulmonar</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_pulmonar" id="at_pulmonar">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Cerebrales</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_cerebrales" id="at_cerebrales">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Óseas</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_oseas" id="at_oseas">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Cervicouterino</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_cervicouterino" id="at_cervicouterino">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Mediastino</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_mediastino" id="at_mediastino">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Suprarrenal</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_suprarrenal" id="at_suprarrenal">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Tiroidea</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_tiroidea" id="at_tiroidea">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Ganglionar</span>
                                        <label class="container">
                                            <input type="checkbox" name="at_ganglionar" id="at_ganglionar">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <strong>Estadío Clinico</strong>
                                <select class="form-control" name="estado_clinico" id="estado_clinico">
                                    <option value="">Seleccione...</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV A">IV A</option>
                                    <option value="IV B">IV B</option>
                                    <option value="IV C">IV C</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Calidad de vida ECOG</strong>
                                <select class="form-control" name="ECOG" id="ECOG">
                                    <option value="">Seleccione...</option>
                                    <option value="Ecog 0  Desempeño Funcional Normal">Ecog 0  Desempeño Funcional Normal</option>
                                    <option value="Ecog 1 Desempeño Leve">Ecog 1 Desempeño Leve</option>
                                    <option value="Ecog 2 El 50% Del Tiempo Postrado">Ecog 2 El 50% Del Tiempo Postrado</option>
                                    <option value="Ecog 3 Mas Del 50% Postrado">Ecog 3 Mas Del 50% Postrado</option>
                                    <option value="Ecog 4 Dependiente Al 100% Para Vida Basica">Ecog 4 Dependiente Al 100% Para Vida Basica</option>
                                    <option value="Ecog 5 Fallecio">Ecog 5 Fallecio</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Histopatología</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <strong>Dx Histopatologico</strong>
                                <select class="form-control" name="dx_histo" id="dx_histo">
                                    <option value="">Seleccione...</option>
                                    <option value="Adenocarcinoma">Adenocarcinoma</option>
                                    <option value="Adenoideoquistico">Adenoideoquistico</option>
                                    <option value="Basocelular">Basocelular</option>
                                    <option value="Carcinoma Ameloblastico">Carcinoma Ameloblastico</option>
                                    <option value="Epidermoide o Celulas Escamosas (Verrucoso o Basaloide)">Epidermoide o Celulas Escamosas (Verrucoso o Basaloide)</option>
                                    <option value="Linfoma">Linfoma</option>
                                    <option value="Melanoma">Melanoma</option>
                                    <option value="Metastasico">Metastasico</option>
                                    <option value="Neuroendocrino">Neuroendocrino</option>
                                    <option value="Sarcoma de Kaposi">Sarcoma de Kaposi</option>
                                    <option value="Sarcomatoide">Sarcomatoide</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Fecha de Reporte</strong>
                                <input type="date" class="form-control" name="fecha_repo" id="fecha_repo">
                            </div>
                            <div class="col-md-4">
                                <strong>Tipo</strong>
                                <select class="form-control" name="tipo_histo" id="tipo_histo">
                                    <option value="">Seleccione...</option>
                                    <option value="Benigno">Benigno</option>
                                    <option value="Maligno">Maligno</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
                            </div>
                            <div class="col-md-4" id='maligno_histo1'>
                                <strong>Maligno</strong>
                                <select class="form-control" name="maligno_histo" id="maligno_histo">
                                    <option value="">Seleccione...</option>
                                    <option value="Bien Diferenciado">Bien Diferenciado</option>
                                    <option value="Poco Diferenciado">Poco Diferenciado</option>
                                    <option value="Indefinido">Indefinido</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-header">
                            <h5 class="form-title">Inmunohistoquímica</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Se realizó PDL</strong>
                                <select class="form-control" name="inmuno_pdl" id="inmuno_pdl">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6" id="inmuno_pdl_val1">
                                <strong>PDL</strong>
                                <input type="number" class="form-control" name="inmuno_pdl_val" id="inmuno_pdl_val">
                            </div>
                        </div>
                        
                        <div class="form-header">
                            <h5 class="form-title">Tratamiento</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <strong>Quimioterapia</strong>
                                <select class="form-control" name="tx_quimio" id="tx_quimio">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div id="quimio_tx">
                                <div class="row">
                                    <div class="checkboxes">
                                        <strong>QT</strong>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>5Fluororacilo</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_5Fluororacilo" id="tx_5Fluororacilo">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Beuacizumab</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Beuacizumab" id="tx_Beuacizumab">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Capecitabina</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Capecitabina" id="tx_Capecitabina">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Carboplatino</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Carboplatino" id="tx_Carboplatino">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Cetuximab</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Cetuximab" id="tx_Cetuximab">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Ciclofosfamida</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Ciclofosfamida" id="tx_Ciclofosfamida">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Cisplatino</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Cisplatino" id="tx_Cisplatino">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Docetaxel</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Docetaxel" id="tx_Docetaxel">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Etoposido</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Etoposido" id="tx_Etoposido">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Herceptin</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Herceptin" id="tx_Herceptin">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Paclitaxel</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Paclitaxel" id="tx_Paclitaxel">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Pertuzumab</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Pertuzumab" id="tx_Pertuzumab">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-2 checkboxes">
                                        <span>Trastuzumab</span>
                                        <label class="container">
                                            <input type="checkbox" name="tx_Trastuzumab" id="tx_Trastuzumab">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <strong>Quirúrgico</strong>
                                <select class="form-control" name="tx_quiru" id="tx_quiru">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-12" id='tx_quiru_tipo1'>
                                <strong>Tipo de Cirugía</strong>
                                <select class="form-control" name="tx_quiru_tipo" id="tx_quiru_tipo">
                                    <option value="">Seleccione...</option>
                                    <option value="Amigdalectomia">Amigdalectomia</option>
                                    <option value="Comando">Comando</option>
                                    <option value="Diseccion Radical Modificada de Cuello">Diseccion Radical Modificada de Cuello</option>
                                    <option value="Excision Local Amplia">Excision Local Amplia</option>
                                    <option value="Glosectomia Parcial">Glosectomia Parcial</option>
                                    <option value="Hemiglosectomia">Hemiglosectomia</option>
                                    <option value="Mandibulectomia (Parcial, Segmentaria, Maginal)">Mandibulectomia (Parcial, Segmentaria, Maginal)</option>
                                    <option value="Maxilectomia de Infraestructura">Maxilectomia de Infraestructura</option>
                                    <option value="Maxilectomia de Superestructura">Maxilectomia de Superestructura</option>
                                    <option value="Reseccion de Glandula Salival Menor">Reseccion de Glandula Salival Menor</option>
                                </select>
                            </div>

                            <div id="quiru_select">
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Lugar DRMC</strong>
                                        <select class="form-control" name="lugar_DRMC" id="lugar_DRMC">
                                            <option value="">Seleccione...</option>
                                            <option value="Bilateral">Bilateral</option>
                                            <option value="Unilateral">Unilateral</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Tipo DRMC</strong>
                                        <select class="form-control" name="tipo_DRMC" id="tipo_DRMC">
                                            <option value="">Seleccione...</option>
                                            <option value="Selectiva">Selectiva</option>
                                            <option value="Superselectiva">Superselectiva</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Nivel Cervical</strong>
                                        <select class="form-control" name="nivel_cervical" id="nivel_cervical">
                                            <option value="">Seleccione...</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" id="tx_maxilo_infra1">
                                <strong>Maxilectomia de Infraestructura</strong>
                                <select class="form-control" name="tx_maxilo_infra" id="tx_maxilo_infra">
                                    <option value="">Seleccione...</option>
                                    <option value="Clase I. Reseccion quirurgica clasica del maxilar que abarca paladar duro y dentición hasta la linea media, es unilateral.">Clase I. Reseccion quirurgica clasica del maxilar que abarca paladar duro y dentición hasta la linea media, es unilateral.</option>
                                    <option value="Clase II. Incluye defectos que mantienen la denticion del lado contralateral. Es unilateral posterior que no abarca hasta la linea media.">Clase II. Incluye defectos que mantienen la denticion del lado contralateral. Es unilateral posterior que no abarca hasta la linea media.</option>
                                    <option value="Clase III. Implica un defecto en la línea media del paladar duro y puede incluir una porcion del velo del paladar, sin involucrar proceso alveolar ni organos dentarios">Clase III. Implica un defecto en la línea media del paladar duro y puede incluir una porcion del velo del paladar, sin involucrar proceso alveolar ni organos dentarios</option>
                                    <option value="Clase IV. Es un defecto extenso bilateral anterior, involucra dientes anteriores y posteriores.">Clase IV. Es un defecto extenso bilateral anterior, involucra dientes anteriores y posteriores.</option>
                                    <option value="Clase V. Defecto bilateral posterior, situado por detras de los dientes remanentes.">Clase V. Defecto bilateral posterior, situado por detras de los dientes remanentes.</option>
                                    <option value="Clase VI. Defecto bilateral de la zona anterior sin involucrar dientes posteriores.">Clase VI. Defecto bilateral de la zona anterior sin involucrar dientes posteriores.</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <strong>Reconstrucción</strong>
                                <select class="form-control" name="tx_recontruccion" id="tx_recontruccion">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div id="recontruccion_t">
                                <div class="row">
                                    <div class="checkboxes">
                                        <strong>Tipo de Reconstrucción</strong>
                                    </div>
                                    <div class="col-md-4 checkboxes">
                                        <span>Ninguno</span>
                                        <label class="container">
                                            <input type="checkbox" name="recons_ninguno" id="recons_ninguno">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkboxes">
                                        <span>Colgajo Microvascular</span>
                                        <label class="container">
                                            <input type="checkbox" name="recons_CM" id="recons_CM">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkboxes">
                                        <span>Injerto Oseo Autologo o Cadaverico</span>
                                        <label class="container">
                                            <input type="checkbox" name="recons_IO" id="recons_IO">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkboxes">
                                        <span>Material de Osteosintesis</span>
                                        <label class="container">
                                            <input type="checkbox" name="recons_MO" id="recons_MO">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkboxes">
                                        <span>Rotacion de Colgajo</span>
                                        <label class="container">
                                            <input type="checkbox" name="recons_RC" id="recons_RC">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkboxes">
                                        <span>Toma y Aplicacion de Injerto</span>
                                        <label class="container">
                                            <input type="checkbox" name="recons_AI" id="recons_AI">
                                            <div class="checkmark"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <strong>Radioterapia</strong>
                                <select class="form-control" name="tx_radio" id="tx_radio">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div id="radio_select">
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Fecha</strong>
                                        <input type="date" class="form-control" name="fecha_radio" id="fecha_radio">
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Momento RT</strong>
                                        <select class="form-control" name="momento_radio" id="momento_radio">
                                            <option value="">Seleccione...</option>
                                            <option value="Adyuvante">Adyuvante</option>
                                            <option value="Paliativa">Paliativa</option>
                                            <option value="Radical">Radical</option>
                                            <option value="Concomitante">Concomitante</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Dosis</strong>
                                        <input type="number" class="form-control" name="dosis_radio" id="dosis_radio">
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Fracciones</strong>
                                        <select class="form-control" name="fracciones_dosis" id="fracciones_dosis">
                                            <option value="">Seleccione...</option>
                                            <option value="Convencional">Convencional</option>
                                            <option value="Hiperfraccionamiento">Hiperfraccionamiento</option>
                                            <option value="Hipofraccionamiento">Hipofraccionamiento</option>
                                        </select>
                                    </div>
        
                                    <div class="col-md-6">
                                        <strong>No. Fracciones</strong>
                                        <input type="number" class="form-control" name="no_fracciones" id="no_fracciones">
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Técnica</strong>
                                        <select class="form-control" name="fracciones_tecnica" id="fracciones_tecnica">
                                            <option value="">Seleccione...</option>
                                            <option value="3D Conformal">3D Conformal</option>
                                            <option value="Braquiterapia">Braquiterapia</option>
                                            <option value="IMRT">IMRT</option>
                                        </select>
                                    </div>
        
                                    <div class="row">
                                        <div class="checkboxes">
                                            <strong>Complicaciones RT</strong>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Caries</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_caries" id="rt_caries">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Disgeusia</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_disgeusia" id="rt_disgeusia">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Dolor</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_dolor" id="rt_dolor">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Fractura</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_fractura" id="rt_fractura">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Infeccion</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_infeccion" id="rt_infeccion">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Hemorragias</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_hemorragias" id="rt_hemorragias">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Mucositis</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_mucositis" id="rt_mucositis">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Osteonecrosis</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_osteonecrosis" id="rt_osteonecrosis">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Parestesia</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_parestesia" id="rt_parestesia">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Propios De La Anestesia Local</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_propios" id="rt_propios">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Radiodermitis</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_radiodermitis" id="rt_radiodermitis">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Reaccion Alergica</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_RA" id="rt_RA">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Trismus</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_trismus" id="rt_trismus">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Xerostomia</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_xerostomia" id="rt_xerostomia">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 checkboxes">
                                            <span>Ninguno</span>
                                            <label class="container">
                                                <input type="checkbox" name="rt_ninguno" id="rt_ninguno">
                                                <div class="checkmark"></div>
                                            </label>
                                        </div>
        
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="checkboxes">
                                    <strong>OARS Dosis</strong>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Cavidad Oral</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_CO" id="OARS_CO">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Cocleas</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_cocleas" id="OARS_cocleas">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Cristalinos</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_cristalinos" id="OARS_cristalinos">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Esofago</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_esofago" id="OARS_esofago">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Labios</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_labios" id="OARS_labios">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Laringe</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_laringe" id="OARS_laringe">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Mandibula</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_mandibula" id="OARS_mandibula">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Medula</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_medula" id="OARS_medula">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Nervio Óptico</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_NO" id="OARS_NO">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Ojos</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_ojos" id="OARS_ojos">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Pared Faringea Posterior</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_PFP" id="OARS_PFP">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Parotidas</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_parotidas" id="OARS_parotidas">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Sublinguales</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_sublinguales" id="OARS_sublinguales">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Tallo</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_tallo" id="OARS_tallo">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-md-3 checkboxes">
                                    <span>Tiroides</span>
                                    <label class="container">
                                        <input type="checkbox" name="OARS_tiroides" id="OARS_tiroides">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                

                            </div>

                            <div class="col-md-3" id="CO1">
                                <strong>Dosis Máx Cavidad Oral</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_CO" id="Dosis_Máx_CO">
                            </div>
                            <div class="col-md-3" id="CO2">
                                <strong>Dosis Prom Cavidad Oral</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_CO" id="Dosis_Prom_CO">
                            </div>
                            <div class="col-md-3" id="Cocleas1">
                                <strong>Dosis Máx Cocleas</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Cocleas" id="Dosis_Máx_Cocleas">
                            </div>
                            <div class="col-md-3" id="Cocleas2">
                                <strong>Dosis Prom Cocleas</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Cocleas" id="Dosis_Prom_Cocleas">
                            </div>
                            <div class="col-md-3" id="Cristalinos1">
                                <strong>Dosis Máx Cristalinos</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Cristalinos" id="Dosis_Máx_Cristalinos">
                            </div>
                            <div class="col-md-3" id="Cristalinos2">
                                <strong>Dosis Prom Cristalinos</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Cristalinos" id="Dosis_Prom_Cristalinos">
                            </div>
                            <div class="col-md-3" id="Esofago1">
                                <strong>Dosis Máx Esofago</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Esofago" id="Dosis_Máx_Esofago">
                            </div>
                            <div class="col-md-3" id="Esofago2">
                                <strong>Dosis Prom Esofago</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Esofago" id="Dosis_Prom_Esofago">
                            </div>
                            <div class="col-md-3" id="Labios1">
                                <strong>Dosis Máx Labios</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Labios" id="Dosis_Máx_Labios">
                            </div>
                            <div class="col-md-3" id="Labios2">
                                <strong>Dosis Prom Labios</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Labios" id="Dosis_Prom_Labios">
                            </div>
                            <div class="col-md-3" id="Laringe1">
                                <strong>Dosis Máx Laringe</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Laringe" id="Dosis_Máx_Laringe">
                            </div>
                            <div class="col-md-3" id="Laringe2">
                                <strong>Dosis Prom Laringe</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Laringe" id="Dosis_Prom_Laringe">
                            </div>
                            <div class="col-md-3" id="Mandibula1">
                                <strong>Dosis Máx Mandibula</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Mandibula" id="Dosis_Máx_Mandibula">
                            </div>
                            <div class="col-md-3" id="Mandibula2">
                                <strong>Dosis Prom Mandibula</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Mandibula" id="Dosis_Prom_Mandibula">
                            </div>
                            <div class="col-md-3" id="Medula1">
                                <strong>Dosis Máx Medula</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Medula" id="Dosis_Máx_Medula">
                            </div>
                            <div class="col-md-3" id="Medula2">
                                <strong>Dosis Prom Medula</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Medula" id="Dosis_Prom_Medula">
                            </div>
                            <div class="col-md-3" id="NO1">
                                <strong>Dosis Máx Nervio Óptico</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_NO" id="Dosis_Máx_NO">
                            </div>
                            <div class="col-md-3" id="NO2">
                                <strong>Dosis Prom Nervio Óptico</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_NO" id="Dosis_Prom_NO">
                            </div>
                            <div class="col-md-3" id="Ojos1">
                                <strong>Dosis Máx Ojos</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Ojos" id="Dosis_Máx_Ojos">
                            </div>
                            <div class="col-md-3" id="Ojos2">
                                <strong>Dosis Prom Ojos</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Ojos" id="Dosis_Prom_Ojos">
                            </div>
                            <div class="col-md-3" id="PFP1">
                                <strong>Dosis Máx Pared Faringea Posterior</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_PFP" id="Dosis_Máx_PFP">
                            </div>
                            <div class="col-md-3" id="PFP2">
                                <strong>Dosis Prom Pared Faringea Posterior</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_PFP" id="Dosis_Prom_PFP">
                            </div>
                            <div class="col-md-3" id="Parotidas1">
                                <strong>Dosis Máx Parotidas</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Parotidas" id="Dosis_Máx_Parotidas">
                            </div>
                            <div class="col-md-3" id="Parotidas2">
                                <strong>Dosis Prom Parotidas</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Parotidas" id="Dosis_Prom_Parotidas">
                            </div>
                            <div class="col-md-3" id="Sublinguales1">
                                <strong>Dosis Máx Sublinguales</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Sublinguales" id="Dosis_Máx_Sublinguales">
                            </div>
                            <div class="col-md-3" id="Sublinguales2">
                                <strong>Dosis Prom Sublinguales</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Sublinguales" id="Dosis_Prom_Sublinguales">
                            </div>
                            <div class="col-md-3" id="Tallo1">
                                <strong>Dosis Máx Tallo</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Tallo" id="Dosis_Máx_Tallo">
                            </div>
                            <div class="col-md-3" id="Tallo2">
                                <strong>Dosis Prom Tallo</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Tallo" id="Dosis_Prom_Tallo">
                            </div>
                            <div class="col-md-3" id="Tiroides1">
                                <strong>Dosis Máx Tiroides</strong>
                                <input type="number" class="form-control" name="Dosis_Máx_Tiroides" id="Dosis_Máx_Tiroides">
                            </div>
                            <div class="col-md-3" id="Tiroides2">
                                <strong>Dosis Prom Tiroides</strong>
                                <input type="number" class="form-control" name="Dosis_Prom_Tiroides" id="Dosis_Prom_Tiroides">
                            </div>



                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Caso Existoso</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Caso Exitoso</strong>
                                <select class="form-control" name="caso_exitoso" id="caso_exitoso">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <strong>Respuesta al Tratamiento</strong>
                                <select class="form-control" name="resp_tx" id="resp_tx">
                                    <option value="">Seleccione...</option>
                                    <option value="Completa">Completa</option>
                                    <option value="Nula">Nula</option>
                                    <option value="Parcial">Parcial</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-header">
                            <h5 class="form-title">Defunción</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Defunción</strong>
                                <select class="form-control" name="defuncion" id="defuncion">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <strong>Fecha Defunción</strong>
                                <input type="date" class="form-control" name="fecha_defuncion" id="fecha_defuncion">
                            </div>
                            <div class="col-md-4">
                                <strong>Causa</strong>
                                <select class="form-control" name="causa_defuncion" id="causa_defuncion">
                                    <option value="">Seleccione...</option>
                                    <option value="Oncologica">Oncologica</option>
                                    <option value="No Oncologica">No Oncologica</option>
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div><!--DIV DEL BODY  -->


        </div>
    </div>
</div>
