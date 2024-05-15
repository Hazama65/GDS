<div class="modal fade" id="CancerMama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard2-pulse modal-title fs-4" id="exampleModalLabel">Lupus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

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
                            
                            <div class="col-md-2">
                                <strong>Talla</strong>
                                <input class="form-control" type="text" name="talla" id="talla">
                            </div>

                            <div class="col-md-2">
                                <strong>Peso</strong>
                                <input class="form-control" type="number" name="peso" id="peso" onblur="calculaIMC();">
                            </div>

                            <div class="col-md-2">
                                <strong>IMC</strong>
                                <input class="form-control" type="text" name="imc" id="imc" readonly>
                            </div>

                            
                            <div class="col-md-3">
                                <strong>Fecha de Diagnostico</strong>
                                <input class="form-control" type="date" name="diagnostico_date" id="diagnostico_date">
                            </div>

                            
                            <div class="col-md-3">
                                <strong>Etnia</strong>
                                <input class="form-control" type="text" name="Etnia" id="Etnia" readonly>
                            </div>


                        </div> <!-- div row-->

                        <div class="form-header">
                            <h5 class="form-title">Antecendetes Patologicos</h5>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <span>Ninguno</span>
                                <label class="container">
                                    <input type="checkbox" name="ninguno" id="ninguno">
                                    <div class="checkmark"></div>
                                </label>
                            </div>

                            <div class="col-md-3">
                                <span>Alcoholismo</span>
                                <label class="container">
                                    <input type="checkbox" name="alcoholismo" id="alcoholismo">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <span>Artritis Reumatoide</span>
                                <label class="container">
                                    <input type="checkbox" name="AR" id="AR">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <span>Diabetes Mellitus</span>
                                <label class="container">
                                    <input type="checkbox" name="DM" id="DM">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <span>Hipertensión Arterial</span>
                                <label class="container">
                                    <input type="checkbox" name="HA" id="HA">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <span>Obesidad</span>
                                <label class="container">
                                    <input type="checkbox" name="obesidad" id="obesidad">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <span>Sx Antifosfolípidos</span>
                                <label class="container">
                                    <input type="checkbox" name="SA" id="SA">
                                    <div class="checkmark"></div>
                                </label>
                            </div>


                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Laboratorios</h5>
                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Actividad Lúpica</h6>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <strong>Actividad Articular</strong>
                                <select class="form-control" name="AA" id="AA">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Cutánea</strong>
                                <select class="form-control" name="AC" id="AC">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Hematología</strong>
                                <select class="form-control" name="AH" id="AH">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Inmunológica</strong>
                                <select class="form-control" name="AI" id="AI">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Neurológica</strong>
                                <select class="form-control" name="AN" id="AN">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Renal</strong>
                                <select class="form-control" name="ARE" id="ARE">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Muscular</strong>
                                <select class="form-control" name="AM" id="AM">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Actividad Cardiaca</strong>
                                <select class="form-control" name="ACA" id="ACA">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Calculo SLEDAI</h6>
                        </div>

                        <div class="row">

                            <div class="contenedor_switch">

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="convulsion" name="convulsion" valor=8 value="Convulsión">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Convulsión</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="psicosis" name="psicosis" valor=8 value="Psicosis">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Psicosis</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="SCO" name="SCO" valor=8 value="Síndrome Cerebral Orgánico">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Síndrome Cerebral Orgánico</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="AV" name="AV" valor=8 value="Alteración Visual">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Alteración Visual</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="TNC" name="TNC" valor=8 value="Trastorno De Los Nervios Craneales">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Trastorno De Los Nervios Craneales</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="DCL" name="DCL" valor=8 value="Dolor De Cabeza Por Lupus">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Dolor De Cabeza Por Lupus</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="EVC" name="EVC" valor=8 value="EVC">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>EVC</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="vasculitis" name="vasculitis" valor=8 value="Vasculitis">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Vasculitis</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="artritis" name="artritis" valor=4 value="Artritis">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Artritis</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="miositis" name="miositis" valor=4 value="Miositis">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Miositis</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="CU" name="CU" valor=4 value="Cilindros Urinarios">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Cilindros Urinarios</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="hematuria" name="hematuria" valor=4 value="Hematuria">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Hematuria</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="piuria" name="piuria" valor=4 value="Piuria">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Piuria</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="proteinuria" name="proteinuria" valor=2 value="Proteinuria">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Proteinuria</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="erupcion" name="erupcion" valor=2 value="Erupción">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Erupción</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="UM" name="UM" valor=2 value="Úlceras De Las Mucosas">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Úlceras De Las Mucosas</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="pleuritis" name="pleuritis" valor=2 value="Pleuritis">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Pleuritis</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="pericarditis" name="pericarditis" valor=2 value="Pericarditis">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Pericarditis</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="COM" name="COM" valor=2 value="Bajo com(C3,C4 O Ch50 Bajo)">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Bajo com(C3,C4 O Ch50 Bajo)</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="ADN" name="ADN" valor=2 value="Aumento de la Unión al ADN">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Aumento de la Unión al ADN</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="fiebre" name="fiebre" valor=1 value="Fiebre">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Fiebre</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="trombocitopenia" name="trombocitopenia" valor=1 value="Trombocitopenia">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Trombocitopenia</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="leucopenia" name="leucopenia" valor=1 value="Leucopenia">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Leucopenia</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="switch">
                                                <input type="checkbox" id="alopecia" name="alopecia" valor=1 value="Alopecia">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <h6>Alopecia</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <strong>Resultado SLEDAI</strong>
                                <input class="form-control" type="number" name="resultados_sledai"
                                    id="resultados_sledai" readonly>
                            </div>
                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Laboratorios</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <strong>Albúmina Sérica</strong>
                                <input class="form-control" type="number" name="ASE" id="ASE">
                            </div>
                            <div class="col-md-2">
                                <strong>BUN</strong>
                                <input class="form-control" type="number" name="BUN" id="BUN">
                            </div>
                            <div class="col-md-2">
                                <strong>C3</strong>
                                <input class="form-control" type="number" name="C3" id="C3">
                            </div>
                            <div class="col-md-2">
                                <strong>C4</strong>
                                <input class="form-control" type="number" name="C4" id="C4">
                            </div>
                            <div class="col-md-3">
                                <strong>Creatina Sérica</strong>
                                <input class="form-control" type="number" name="CS" id="CS">
                            </div>
                            <div class="col-md-3">
                                <strong>Proteinuria en 24 hrs</strong>
                                <input class="form-control" type="number" name="P24" id="P24">
                            </div>
                            <div class="col-md-3">
                                <strong>Albúminuria en 24 hrs</strong>
                                <input class="form-control" type="number" name="A24" id="A24">
                            </div>
                            <div class="col-md-3">
                                <strong>Leucocitos</strong>
                                <input class="form-control" type="number" name="leucocitos" id="leucocitos">
                            </div>
                            <div class="col-md-3">
                                <strong>Linfocitos</strong>
                                <input class="form-control" type="number" name="linfocitos" id="linfocitos">
                            </div>
                            <div class="col-md-3">
                                <strong>Plaquetas</strong>
                                <input class="form-control" type="number" name="plaquetas" id="plaquetas">
                            </div>
                            <div class="col-md-3">
                                <strong>Hemoglobina</strong>
                                <input class="form-control" type="number" name="hemoglobina" id="hemoglobina">
                            </div>
                            <div class="col-md-3">
                                <strong>Vitamina D</strong>
                                <input class="form-control" type="number" name="VD" id="VD">
                            </div>
                            <div class="col-md-3">
                                <strong>Anticuerpo Lúpico</strong>
                                <select class="form-control" name="AL" id="AL">
                                    <option value="">Seleccione...</option>
                                    <option value="Detectado">Detectado</option>
                                    <option value="No Detectado">No Detectado</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Anticuerpos</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <strong>Ac-DNA Elevado</strong>
                                <select class="form-control" name="AC_DNA" id="AC_DNA">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Ac-SM</strong>
                                <select class="form-control" name="AC_SM" id="AC_SM">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <strong>Ac-RNP</strong>
                                <select class="form-control" name="AC_RNP" id="AC_RNP">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <strong>Ac-RO</strong>
                                <select class="form-control" name="AC_RO" id="AC_RO">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <strong>Ac-LA</strong>
                                <select class="form-control" name="AC_LA" id="AC_LA">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Ac-Cardiolipinas IgM</strong>
                                <select class="form-control" name="AC_CM" id="AC_CM">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Ac-Cardiolipinas IgG</strong>
                                <select class="form-control" name="AC_CG" id="AC_CG">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Ac B2-GPI IgG</strong>
                                <select class="form-control" name="AC_BG" id="AC_BG">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Ac B2-GPI IgM</strong>
                                <select class="form-control" name="AC_BM" id="AC_BM">
                                    <option value="">Seleccione...</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-header">
                            <h6 class="form-subtitle">Biopsia Renal</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Biopsia Renal</strong>
                                <select class="form-control" name="BR" id="BR">
                                    <option value="">Seleccione..</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <strong>Tipo</strong>
                                <select class="form-control" name="BR_tipo" id="BR_tipo">
                                    <option value="">Seleccione...</option>
                                    <option value="Clase 1. G. Mesangial">Clase 1. G. Mesangial</option>
                                    <option value="Clase 2. G. Mesangio Proliferativa">Clase 2. G. Mesangio
                                        Proliferativa</option>
                                    <option value="Clase 3. G. Proliferativa Focal">Clase 3. G. Proliferativa Focal
                                    </option>
                                    <option value="Clase 4. G. Proliferativa Difusa">Clase 4. G. Proliferativa Difusa
                                    </option>
                                    <option value="Clase 5. G. Membranosa">Clase 5. G. Membranosa</option>
                                    <option value="Clase 6. Enfermedad Renal Crónica">Clase 6. Enfermedad Renal Crónica
                                    </option>
                                    <option value="Glomerulos Normales">Glomerulos Normales</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Marcadores de Mal Pronóstico</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Índice</strong>
                                <select class="form-control" name="indice" id="indice">
                                    <option value="">Seleccione..</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <strong>Tipo</strong>
                                <select class="form-control" name="indice_tipo" id="indice_tipo">
                                    <option value="">Seleccione...</option>
                                    <option value="Clase 1. G. Mesangial">Clase 1. G. Mesangial</option>
                                    <option value="Clase 2. G. Mesangio Proliferativa">Clase 2. G. Mesangio
                                        Proliferativa</option>
                                    <option value="Clase 3. G. Proliferativa Focal">Clase 3. G. Proliferativa Focal
                                    </option>
                                    <option value="Clase 4. G. Proliferativa Difusa">Clase 4. G. Proliferativa Difusa
                                    </option>
                                    <option value="Clase 5. G. Membranosa">Clase 5. G. Membranosa</option>
                                    <option value="Clase 6. Enfermedad Renal Crónica">Clase 6. Enfermedad Renal Crónica
                                    </option>
                                    <option value="Glomerulos Normales">Glomerulos Normales</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Tratamiento</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <span>Metrotexate</span>
                                <label class="container">
                                    <input type="checkbox" name="Metrotexate" id="Metrotexate">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong>Dosis Semanal</strong>
                                <input class="form-control" type="number" name="ds_metro" id="ds_metro">
                            </div>
                            <div class="col-md-2">
                                <span>Hidroxicloroquina</span>
                                <label class="container">
                                    <input type="checkbox" name="Hidroxicloroquina" id="Hidroxicloroquina">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong>Dosis Semanal</strong>
                                <input class="form-control" type="number" name="ds_hidro" id="ds_hidro">
                            </div>
                            <div class="col-md-2">
                                <span>Azatioprina</span>
                                <label class="container">
                                    <input type="checkbox" name="Azatioprina" id="Azatioprina">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong>Dosis Semanal</strong>
                                <input class="form-control" type="number" name="ds_aza" id="ds_aza">
                            </div>
                            <div class="col-md-2">
                                <span>Prednisona</span>
                                <label class="container">
                                    <input type="checkbox" name="Prednisona" id="Prednisona">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong>Dosis Semanal</strong>
                                <input class="form-control" type="number" name="ds_predi" id="ds_predi">
                            </div>
                            <div class="col-md-2">
                                <span>Micofenolato de Mofetilo</span>
                                <label class="container">
                                    <input type="checkbox" name="Micofenolato" id="Micofenolato">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong>Dosis Semanal</strong>
                                <input class="form-control" type="number" name="ds_mico" id="ds_mico">
                            </div>
                            <div class="col-md-2">
                                <span>Ciclofosfamida</span>
                                <label class="container">
                                    <input type="checkbox" name="Ciclofosfamida" id="Ciclofosfamida">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong>Dosis Semanal</strong>
                                <input class="form-control" type="number" name="ds_ciclo" id="ds_ciclo">
                            </div>

                            <div class="col-md-2">
                                <span>Rituximab</span>
                                <label class="container">
                                    <input type="checkbox" name="Rituximab" id="Rituximab">
                                    <div class="checkmark"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <strong></strong>
                                <strong>Apego a Tratamiento</strong>
                                <select class="form-control" name="AT" id="AT">
                                    <option value="0">Seleccione...</option>
                                    <option value="Parcial">Parcial</option>
                                    <option value="Total">Total</option>
                                    <option value="Sin Apego">Sin Apego</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title">Defunción</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Defuncion</strong>
                                <select class="form-control" name="defuncion" id="defuncion">
                                    <option value="">Seleccione...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>







            




                </div> <!-- DIV ROW LINEA 11 -->


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

            </div><!--DIV DEL BODY  -->


        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>