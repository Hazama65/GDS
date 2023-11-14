<!-- Modal -->
<div class="modal fade" id="RegistrarPacienteAmbulatoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-add"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><!-- <div class="modal-header">-->
      <div class="modal-body">

        <form id="hemofilia_form" autocomplete="off">

            <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                <h6>Datos del Paciente</h6>
            </div>

            <div class="row">

            <div class="col-md-4" id="idnombre">
                <strong style="font-size: 14px;">Nombre Completo</strong>
                <input type="text" name="nombre" id="nombre" class="control form-control" placeholder="Nombre(s) Apellido(s)" style="font-size:14px;" onblur="formatoNombre();" required>
            </div>

            <div class="col-md-4" id="idcurp">
                <strong style="font-size: 14px;">CURP</strong>
                <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP..." style="font-size: 14px;" onblur="curp2date();" required>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Fecha Nacimiento</strong>
                <input id="fecha" name="fecha" type="date" value="" class="control form-control" style="font-size: 14px; background-color:#F2F4F4;" readonly>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Edad</strong>
                <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 14px; background-color:#F2F4F4;" readonly>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">Sexo</strong>
                <input type="text" class="control form-control" id="sexo" name="sexo" style="font-size: 14px; background-color:#F2F4F4;" readonly>
            </div>

                <div class="col-md-4">
                        <strong style="font-size: 14px;">Peso</strong>
                      <input type="number" step="any" class="form-control" id="peso" placeholder="Kg" name="peso" required>
                </div>

            </div> <!-- div del row de datos del paciente-->


            <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                <h6>Clinica</h6>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Tipo de Hemofilia</strong>
                    <select name="tipohemofilia" id="tipohemofilia" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Congenita">Congenita</option>
                        <option value="Adquirida">Adquirida</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Deficiencia de factor</strong>
                    <select name="deficienciafactor" id="deficienciafactor" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="VIII">VIII</option>
                        <option value="IX">IX</option>
                        <option value="XI">XI</option>
                        <option value="EVW">EVW</option>
                        <option value="V">V</option>
                        <option value="VII">VII</option>
                        <option value="Otras">Otras</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipovw" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0); ">Tipo de EVW</strong>
                    <select name="tipovw" id="tipovw" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Tipo 1">Tipo 1</option>
                        <option value="Tipo 2">Tipo 2</option>
                        <option value="Tipo 3">Tipo 3</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipoVIII" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Clasificación de Hemofilia (VIII)</strong>
                    <select name="tipoVIII" id="tipoVIII" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Tipo A">Tipo A</option>
                        <option value="Tipo B">Tipo B</option>
                        <option value="Tipo 3">Tipo C</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipoIX" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Clasificación de Hemofilia (IX)</strong>
                    <select name="tipoIX" id="tipoIX" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Tipo A">Tipo A</option>
                        <option value="Tipo B">Tipo B</option>
                        <option value="Tipo 3">Tipo C</option>
                    </select>
                </div>

                <div class="col-md-4" id="idtipoXI" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Clasificación de Hemofilia (XI)</strong>
                    <select name="tipoXI" id="tipoXI" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Tipo A">Tipo A</option>
                        <option value="Tipo B">Tipo B</option>
                        <option value="Tipo 3">Tipo C</option>
                    </select>
                </div>

                <div class="col-md-4" id="idotrashemofilias" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Otras</strong>
                    <input type="text" id="otrashemofilias" name="otrashemofilias" class="form-control" style="font-size: 14px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Clasificación por gravedad</strong>
                    <select name="deficienciafactor" id="deficienciafactor" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Leve">Leve</option>
                        <option value="Moderado">Moderado</option>
                        <option value="Severo">Severo</option>
                    </select>
                </div>

                <div class="col-md-4">
                <strong style="font-size: 14px;">Inhibidor</strong>
                    <select name="inhibidor" id="inhibidor" class="form-control" style="font-size: 14px;" onchange="mostrarTerapiaReemplazo()">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Baja respuesta -5UB">Baja respuesta -5UB</option>
                        <option value="Alta respuesta >5UB">Alta respuesta >5UB</option>
                    </select>
                </div>

                <div class="col-md-4" id="idbajarespuesta" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Inhibidor Baja Respuesta</strong>
                    <input type="number" id="bajarespuesta" name="bajarespuesta" class="form-control" style="font-size: 14px;">
                </div>

                <div class="col-md-4" id="idaltarespuesta" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Inhibidor Alta Respuesta</strong>
                    <input type="number" id="altarespuesta" name="altarespuesta" class="form-control" style="font-size: 14px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Artropatia Hemolitica </strong>
                    <select name="artropatiahemolitica" id="artropatiahemolitica" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="col-md-4" id="idarea_afectada" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Área Afectada</strong>
                    <select name="area_afectada" id="area_afectada" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Codos">Codos</option>
                        <option value="Rodillas">Rodillas</option>
                        <option value="Tobillos">Tobillos</option>
                    </select>
                </div>

                <div class="col-md-4" id="idsangradosmensuales">
                    <strong style="font-size: 14px;">No. de Sangrados Mensuales</strong>
                    <input type="number" id="sangradosmensuales" name="sangradosmensuales" class="form-control" style="font-size: 14px;">
                </div>

                <div class="col-md-4" id="idrequierefactor" style="display: none;">
                    <strong style="font-size: 14px; color: rgb(135, 54, 0);">Requirió factor</strong>
                    <select name="requierefactor" id="requierefactor" class="form-control" style="font-size: 14px;">
                        <option value="Sin registro">Seleccione...</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

               <!-- Aquí se hace el primer Collapse de INDEPENDENCIA FUNCIONAL FISH -->
               <!-- hacemos un elemento grupal donde la primer parte es un boton que despliega el collapse-->

                <div class="col-md-12"><br>
                    <div class="input-group mb-3">
                        <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#FISH" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">Independencia Funcional (FISH)</a>
                        <input type="text" class="form-control" id="resultadoFISH" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                    </div>
                </div>
            
                <div class="collapse" id="FISH">
                    <div class="card card-body">
                        <div class="col-md-12">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                    <b style="font-size: 16px; color: #A44A04; ">Cuidado Personal</b><br><br>
                                    <strong style="font-size: 14px;">Comer y Asearse</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="comer" value="4"> 4
                                            </label>
                                        </div>

                                        <!-- Bañarse-->

                                        <strong style="font-size: 14px;">Bañarse</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="banarse" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="banarse" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="banarse" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="banarse" value="4"> 4
                                            </label>
                                        </div>


                                        <!-- Vestirse-->

                                        <strong style="font-size: 14px;">Vestirse</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="vestirse" value="4"> 4
                                            </label>
                                        </div>
                                    </div> <!-- es el div que cierra el div class="col"> de Cuidado Personal-->
                                    
                                    
                                    <div class="col">
                                    <b style="font-size: 16px; color: #A44A04; ">Transferir</b><br><br>

                                        <strong style="font-size: 14px;">Sentar</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="sentar" value="4"> 4
                                            </label>
                                        </div>


                                        <strong style="font-size: 14px;">Cunclillas</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Cunclillas" value="4"> 4
                                            </label>
                                        </div>
                                    </div>



                                    <div class="col">
                                    <b style="font-size: 16px; color: #A44A04; ">Locomotor</b><br><br>

                                        <strong style="font-size: 14px;">Caminar</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Caminar" value="4"> 4
                                            </label>
                                        </div>


                                        <strong style="font-size: 14px;">Correr</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Correr" value="4"> 4
                                            </label>
                                        </div>


                                        <strong style="font-size: 14px;">Subir Escaleras (12-14 pasos)</strong>
                                        <div>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="1"> 1
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="2"> 2
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="3"> 3
                                            </label>
                                            <label style="display: inline-block; margin-right: 10px;">
                                                <input type="radio" name="Subir" value="4"> 4
                                            </label>
                                        </div>
                                    </div> <!--  <div class="col"> locomotor-->
                            
                                    
                                </div> <!-- <div class="row"> este es el div que cierra el row después del container-->
                            </div> <!-- el <div class="container text-center"> -->     
                            <br><p style="font-size: 10px;">
                            Donde: <br>
                            1: El sujeto no puede realizar la actividad o necesita ayuda. <br>
                            2: El sujeto necesita asistencia parcial/ayuda/instrumentos modificados/ para realizar la actividad.<br>
                            3: El sujeto es capaz de realizar la actividad sin ayuda  pero con ligera molestia.<br>
                            4: El sujeto es capaz de realizar la actividad sin ninguna dificultad.
                            </p>                       
                        </div> <!-- cierre de <div class="col-md-12">-->
                    </div>
                </div>


                <!-- Aquí se hace el segundo Collapse de Salud Articular (HJHS)-->
               <!-- hacemos un elemento grupal donde la primer parte es un boton que despliega el collapse-->

               <div class="col-md-12"><br>
                    <div class="input-group mb-3">
                        <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HJHS" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">Salud Articular (HJHS)</a>
                        <input type="text" class="form-control" id="puntuacion_HJHS" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </div>
            
                <div class="collapse" id="HJHS">
                    <div class="card card-body">
                        <div class="col-md-12">
                        
                        <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                            <p>Codo Izquierdo</p>
                        </div>


                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion" id="inflamacion" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1">1= leve</option>
                                            <option value="2= Moderada" data-valor="2">2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3">3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="NE">NE = No Evaluable</option>
                                        </select>
                                    </div>


                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion" id="duracion" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="0 < 6 meses" data-valor="0">0 < 6 meses</option>
                                            <option value="1 => 6 meses" data-valor="1">1 => 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular" id="atrofiamuscular" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento" id="crepitacion_movimiento" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion" id="perdida_flexion" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension" id="perdida_extension" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular" id="dolor_articular" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0">0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo, solamente dolor en la presion suave o en la palpacion" data-valor="1">1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2">2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza" id="fuerza" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- <div class="row"> este es el div que cierra el row después del container-->

                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Codo Derecho</p>
                                </div>

                                <div class ="row">

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_codoDerecho" id="inflamacion_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1">1= leve</option>
                                            <option value="2= Moderada" data-valor="2">2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3">3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_codoDerecho" id="duracion_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="0 < 6 meses" data-valor="0">0 < 6 meses</option>
                                            <option value="1 => 6 meses" data-valor="1">1 => 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_codoDerecho" id="atrofiamuscular_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_codoDerecho" id="crepitacion_movimiento_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_codoDerecho" id="perdida_flexion_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_codoDerecho" id="perdida_extension_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_codoDerecho" id="dolor_articular_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0">0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1">1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2">2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_codoDerecho" id="fuerza_codoDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div><!-- se cierra el row de codo derecho -->

                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Rodilla Izquierda</p>
                                </div>

                                <div class="row">

                                <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_RodillaIzquierda" id="inflamacion_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion">0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1">1= leve</option>
                                            <option value="2= Moderada" data-valor="2">2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3">3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_RodillaIzquierda" id="duracion_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="0 = 0 < 6 meses" data-valor="0">0= 0 < 6 meses</option>
                                            <option value="1 = > 6 meses" data-valor="1">1 = > 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_RodillaIzquierda" id="atrofiamuscular_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_RodillaIzquierda" id="crepitacion_movimiento_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_RodillaIzquierda" id="perdida_flexion_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_RodillaIzquierda" id="perdida_extension_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_RodillaIzquierda" id="dolor_articular_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0">0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1">1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2">2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_RodillaIzquierda" id="fuerza_RodillaIzquierda" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                </div> <!-- se cierra el div row de rodilla izquierda -->


                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Rodilla Derecha</p>
                                </div>

                                <div class="row">

                                <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_RodillaDerecha" id="inflamacion_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1">1= leve</option>
                                            <option value="2= Moderada" data-valor="2">2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3">3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_RodillaDerecha" id="duracion_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="0 = 0 < 6 meses" data-valor="0">0 = 0 < 6 meses</option>
                                            <option value="1 = > 6 meses" data-valor="1">1 = > 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_RodillaDerecha" id="atrofiamuscular_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_RodillaDerecha" id="crepitacion_movimiento_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_RodillaDerecha" id="perdida_flexion_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_RodillaDerecha" id="perdida_extension_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_RodillaDerecha" id="dolor_articular_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0">0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1">1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2">2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_RodillaDerecha" id="fuerza_RodillaDerecha" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- se cierra el div row de rodilla derecha -->


                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Tobillo Izquierdo</p>
                                </div>

                                <div class="row">

                                <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_TobilloIzquierdo" id="inflamacion_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1">1= leve</option>
                                            <option value="2= Moderada" data-valor="2">2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3">3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_TobilloIzquierdo" id="duracion_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="0 = 0 < 6 meses" data-valor="0">0 = 0 < 6 meses</option>
                                            <option value="1 = > 6 meses" data-valor="1">1 = > 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_TobilloIzquierdo" id="atrofiamuscular_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_TobilloIzquierdo" id="crepitacion_movimiento_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_TobilloIzquierdo" id="perdida_flexion_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_TobilloIzquierdo" id="perdida_extension_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_TobilloIzquierdo" id="dolor_articular_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0">0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1">1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2">2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_TobilloIzquierdo" id="fuerza_TobilloIzquierdo" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- se cierra el div row de tobillo izquierdo -->



                                <div style="background-color: rgb(164, 4, 82, 0.5); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Tobillo Derecho</p>
                                </div>

                                <div class="row">

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Inflamación</strong>
                                        <select name="inflamacion_TobilloDerecho" id="inflamacion_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="1= Leve" data-valor="1">1= leve</option>
                                            <option value="2= Moderada" data-valor="2">2= Moderada</option>
                                            <option value="3= Intensa" data-valor="3">3= Intensa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Duración</strong>
                                        <select name="duracion_TobilloDerecho" id="duracion_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin Inflamacion" data-valor="0">0 = Sin Inflamación</option>
                                            <option value="0 < 6 meses" data-valor="0">0 < 6 meses</option>
                                            <option value="1 => 6 meses" data-valor="1">1 => 6 meses</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Atrofia Muscular</strong>
                                        <select name="atrofiamuscular_TobilloDerecho" id="atrofiamuscular_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Crepitación al Movimiento</strong>
                                        <select name="crepitacion_movimiento_TobilloDerecho" id="crepitacion_movimiento_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Ninguna" data-valor="0">0 = Ninguna</option>
                                            <option value="1 = Leve" data-valor="1">1 = Leve</option>
                                            <option value="2 = Severa" data-valor="2">2 = Severa</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                        

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Flexión</strong>
                                        <select name="perdida_flexion_TobilloDerecho" id="perdida_flexion_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Pérdida de la Extensión</strong>
                                        <select name="perdida_extension_TobilloDerecho" id="perdida_extension_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Dentro del Rango" data-valor="0">0 = Dentro del Rango</option>
                                            <option value="1 = Prdida de 1 a 4" data-valor="1">1 = Pérdida de 1 a 4°</option>
                                            <option value="2 = Perdida de 5 a 10" data-valor="2">2 = Pérdida de 5 a 10°</option>
                                            <option value="3 = Perdida de > 10°" data-valor="3">3 = Pérdida de > 10°</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Dolor Articular</strong>
                                        <select name="dolor_articular_TobilloDerecho" id="dolor_articular_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = Sin dolor en el rango de movimiento activo" data-valor="0">0 = Sin dolor en el rango de movimiento activo</option>
                                            <option value="1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación" data-valor="1">1 = Sin dolor en el rango de movimiento activo; solamente dolor en la presión suave o en la palpación</option>
                                            <option value="2 = Dolor en el rango de movimiento activo" data-valor="2">2 = Dolor en el rango de movimiento activo</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <strong style="font-size: 14px;">Fuerza</strong>
                                        <select name="fuerza_TobilloDerecho" id="fuerza_TobilloDerecho" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                            <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                            <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                            <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                            <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                            <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                        </select>
                                    </div>
                                </div> <!-- se cierra el div row de tobillo derecho -->

                                <div style="background-color: rgb(227, 185, 152 ); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Resultados</p>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <strong style="font-size: 14px;">Suma del total de Articulaciones</strong>
                                        <input id="suma_articulaciones" name="suma_articulaciones" type="number" class="control form-control" value="" style="font-size: 14px;" readonly>
                                    </div>

                                    <div class="col-md-6">
                                            <strong style="font-size: 14px;">Marcha Global (caminar, escaleras, correr, salto sobre una pierna)</strong>
                                            <select name="marcha_global" id="marcha_global" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="0 = todas las habilidades se encuentran en los limites normales." data-valor="0">0 = Todas las habilidades se encuentran en los limites normales.</option>
                                                <option value="1 = una habilidad no está dentro de los limites normales." data-valor="1">1 = Una habilidad no está dentro de los limites normales.</option>
                                                <option value="2 = dos habilidades no están dentro de los límites normales." data-valor="2">2 = Dos habilidades no están dentro de los límites normales.</option>
                                                <option value="3 = tres habilidades no están dentro de los limites normales." data-valor="3">3 = Tres habilidades no están dentro de los limites normales.</option>
                                                <option value="4 = ninguna habilidad está dentro de los limites normales." data-valor="4">4 = Ninguna habilidad está dentro de los limites normales.</option>
                                                <option value="NE = No Evaluable" data-valor="0">NE = No Evaluable</option>
                                            </select>
                                    </div>

                                    <!--<div class="col-md-6">
                                        <strong style="font-size: 14px;">Puntuación HJHS total</strong>
                                        <input id="puntuacion_HJHS" name="puntuacion_HJHS" type="number" class="control form-control" value="" style="font-size: 14px;" readonly>
                                    </div>-->

                                </div><!-- es el div que cierra el row de los totales de HJHS-->
                            </div> <!-- el <div class="container text-center"> -->    
                        </div> <!-- cierre de <div class="col-md-12">-->
                    </div>
                </div>
            </div> <!-- es el div del row clinicas-->


                <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                    <h6>USG (escala HEAD US)</h6>
                </div>

               

                <div class="row">


                    <div class="col-md-12"><br>
                        <div class="input-group mb-3">
                            <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HEADUS6" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">6 meses</a>
                            <input type="text" class="form-control" id="USG_6meses" style="font-size: 14px;" readonly>

                        </div>
                    </div>


                    <div class="collapse" id="HEADUS6">
                        <div class="card card-body">
                            <div class="col-md-12">
                        
                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Actividad Inflamatoria</p>
                                </div>


                            <div class="container">
                                <div class="row">
                                
                                   
                                    <div class="col-md-12">
                                        <strong style="font-size: 14px;">Actividad Inflamatoria</strong>
                                        <select name="actividad_inflamatoria" id="actividad_inflamatoria" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="Derrame Sinovitis">Derrame / Sinovitis</option>
                                            <option value="Hipertrofia sinovial">Hipertrofia Sinovial</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12" style="display: none;" id="id_derrame_sinovitis">
                                        <strong style="font-size: 14px;">Escala de Derrame / Sinovitis</strong>
                                        <select name="derrame_sinovitis" id="derrame_sinovitis" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="Moderado" data-valor="1">Moderado</option>
                                            <option value="Severo" data-valor="2">Severo</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12" style="display: none;" id="id_hipertrofia_sinovial">
                                        <strong style="font-size: 14px;">Escala de Hipertrofia Sinovial</strong>
                                        <select name="hipertrofia_sinovial" id="hipertrofia_sinovial" class="form-control" style="font-size: 14px;">
                                            <option value="Sin registro">Seleccione...</option>
                                            <option value="Moderado" data-valor="1">Moderado</option>
                                            <option value="Severo" data-valor="2">Severo</option>
                                        </select>
                                    </div>

                                </div>

                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Daño Osteocondral</p>
                                </div>

                                <div class="row">
                                <div class="col-md-6" id="id_Cartilago">
                                    <strong style="font-size: 14px;">Cartilago</strong>
                                    <select name="Cartilago" id="Cartilago" class="form-control" style="font-size: 14px;">
                                        <option value="Sin registro">Seleccione...</option>
                                        <option value="Normal" data-valor="0">Normal</option>
                                        <option value="Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular" data-valor="1">Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular</option>
                                        <option value="Pérdida parcial o completa del cartílago articular ч 50 %" data-valor="2">Pérdida parcial o completa del cartílago articular ч 50 %</option>
                                        <option value="Pérdida parcial o completa de > 50%" data-valor="3">Pérdida parcial o completa de > 50%</option>
                                        <option value="Destrucción completa" data-valor="4">Destrucción completa</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="id_Hueso">
                                    <strong style="font-size: 14px;">Hueso</strong>
                                    <select name="Hueso" id="Hueso" class="form-control" style="font-size: 14px;">
                                        <option value="Sin registro">Seleccione...</option>
                                        <option value="Normal" data-valor="0">Normal</option>
                                        <option value="Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares" data-valor="1">Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares</option>
                                        <option value="Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares" data-valor="2">Alteración del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares</option>
                                    </select>
                                </div>

                                </div> 



                                
                            </div><!--es del div del container de actividad inflamatoria-->
                            </div><!--<div class="col-md-12">-->
                        </div>
                    </div>


                    <div class="col-md-12"><br>
                        <div class="input-group mb-3">
                            <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HEADUS12" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">12 meses</a>
                            <input type="text" class="form-control" id="USG_12"placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </div>


                    <div class="collapse" id="HEADUS12">
                        <div class="card card-body">
                            <div class="col-md-12">
                            
                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Actividad Inflamatoria</p>
                                </div>


                                <div class="container">
                                    <div class="row">
                        
                           
                                        <div class="col-md-12">
                                            <strong style="font-size: 14px;">Actividad Inflamatoria</strong>
                                            <select name="actividad_inflamatoria12" id="actividad_inflamatoria12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Derrame Sinovitis">Derrame / Sinovitis</option>
                                                <option value="Hipertrofia sinovial">Hipertrofia Sinovial</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" style="display: none;" id="id_derrame_sinovitis12">
                                            <strong style="font-size: 14px;">Escala de Derrame / Sinovitis</strong>
                                            <select name="derrame_sinovitis12" id="derrame_sinovitis12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Moderado" data-valor="1">Moderado</option>
                                                <option value="Severo" data-valor="2">Severo</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" style="display: none;" id="id_hipertrofia_sinovial12">
                                            <strong style="font-size: 14px;">Escala de Hipertrofia Sinovial</strong>
                                            <select name="hipertrofia_sinovial12" id="hipertrofia_sinovial12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Moderado" data-valor="1">Moderado</option>
                                                <option value="Severo" data-valor="2">Severo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                        <p>Daño Osteocondral</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6" id="id_Cartilago">
                                            <strong style="font-size: 14px;">Cartilago</strong>
                                            <select name="Cartilago12" id="Cartilago12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Normal" data-valor="0">Normal</option>
                                                <option value="Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular" data-valor="1">Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular</option>
                                                <option value="Pérdida parcial o completa del cartílago articular ч 50 %" data-valor="2">Pérdida parcial o completa del cartílago articular ч 50 %</option>
                                                <option value="Pérdida parcial o completa de > 50%" data-valor="3">Pérdida parcial o completa de > 50%</option>
                                                <option value="Destrucción completa" data-valor="4">Destrucción completa</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6" id="id_Hueso">
                                            <strong style="font-size: 14px;">Hueso</strong>
                                            <select name="Hueso12" id="Hueso12" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Normal" data-valor="0">Normal</option>
                                                <option value="Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares" data-valor="1">Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares</option>
                                                <option value="Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares" data-valor="2">Alteración del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares</option>
                                            </select>
                                        </div>
                                    </div>                         
                                </div><!--es del div del container de actividad inflamatoria-->
                            </div><!--<div class="col-md-12">-->

                        </div>
                    </div>


                    <div class="col-md-12"><br>
                        <div class="input-group mb-3">
                            <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#HEADUS24" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 12px;">24 meses</a>
                            <input type="text" class="form-control" id="USG_24" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </div>


                    <div class="collapse" id="HEADUS24">
                        <div class="card card-body">
                            <div class="col-md-12">
                            
                                <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                    <p>Actividad Inflamatoria</p>
                                </div>


                                <div class="container">
                                    <div class="row">
                        
                           
                                        <div class="col-md-12">
                                            <strong style="font-size: 14px;">Actividad Inflamatoria</strong>
                                            <select name="actividad_inflamatoria24" id="actividad_inflamatoria24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Derrame Sinovitis">Derrame / Sinovitis</option>
                                                <option value="Hipertrofia sinovial">Hipertrofia Sinovial</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" style="display: none;" id="id_derrame_sinovitis24">
                                            <strong style="font-size: 14px;">Escala de Derrame / Sinovitis</strong>
                                            <select name="derrame_sinovitis24" id="derrame_sinovitis24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Moderado" data-valor="1">Moderado</option>
                                                <option value="Severo" data-valor="2">Severo</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12" style="display: none;" id="id_hipertrofia_sinovial24">
                                            <strong style="font-size: 14px;">Escala de Hipertrofia Sinovial</strong>
                                            <select name="hipertrofia_sinovial24" id="hipertrofia_sinovial24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Moderado" data-valor="1">Moderado</option>
                                                <option value="Severo" data-valor="2">Severo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div style="background-color: rgb(203, 170, 136, 0.8); color: aliceblue; text-align: center; font-size:14px; margin-top: 20px;">
                                        <p>Daño Osteocondral</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6" id="id_Cartilago">
                                            <strong style="font-size: 14px;">Cartilago</strong>
                                            <select name="Cartilago24" id="Cartilago24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Normal" data-valor="0">Normal</option>
                                                <option value="Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular" data-valor="1">Alteración de la ecoestructura o pérdida de espesor que afecta < 25% de la superficie articular</option>
                                                <option value="Pérdida parcial o completa del cartílago articular ч 50 %" data-valor="2">Pérdida parcial o completa del cartílago articular ч 50 %</option>
                                                <option value="Pérdida parcial o completa de > 50%" data-valor="3">Pérdida parcial o completa de > 50%</option>
                                                <option value="Destrucción completa" data-valor="4">Destrucción completa</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6" id="id_Hueso">
                                            <strong style="font-size: 14px;">Hueso</strong>
                                            <select name="Hueso24" id="Hueso24" class="form-control" style="font-size: 14px;">
                                                <option value="Sin registro">Seleccione...</option>
                                                <option value="Normal" data-valor="0">Normal</option>
                                                <option value="Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares" data-valor="1">Irregularidad moderada del hueso subcondral con/sin osteofitos periarticulares</option>
                                                <option value="Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares" data-valor="2">Alteración del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares</option>
                                            </select>
                                        </div>
                                    </div>                         
                                </div><!--es del div del container de actividad inflamatoria-->
                            </div><!--<div class="col-md-12">-->
                        </div>
                    </div>

                </div> <!-- div de los tres collapse de USG-->

                        <div style="background-color: rgb(222, 144, 146); color: aliceblue; text-align: center; margin-top: 20px;">
                            <h6>Tratamiento</h6>
                        </div>

                <div class="row">

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Tipo de Tratamiento</strong>
                            <select name="tipo_tratamiento" id="tipo_tratamiento" class="form-control" style="font-size: 14px;" onchange="mostrarProfilaxis()">
                                <option value="Sin registro">Seleccione...</option>
                                <option value="Tratamiento a demanda">Tratamiento a demanda</option>
                                <option value="Profilaxis">Profilaxis</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="id_Profilaxis" style="display:none;">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Profilaxis</strong>
                            <select name="Profilaxis" id="Profilaxis" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro">Seleccione...</option>
                                <option value="Oculto">Oculto</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Terciaria">Terciaria</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Profilaxis con Emicizumab</strong>
                            <select name="Profilaxis_Emicizumab" id="Profilaxis_Emicizumab" class="form-control" style="font-size: 14px;" onchange="mostrarCampos()">
                                <option value="Sin registro">Seleccione...</option>
                                <option value="No">No</option>
                                <option value="Si">Sí</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="camposProfilaxis" style="display:none;">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Tipo Profilaxis con Emicizumab</strong>
                            <select name="tipo_Profilaxis" id="tipo_Profilaxis" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro">Seleccione...</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Terciaria">Terciaria</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="id_dosis_tipoProfilaxis" style="display:none;">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Dosis(mg) / Kg</strong>
                            <input type="number" class="form-control" id="dosis_tipoProfilaxis" name="dosis_tipoProfilaxis" placeholder="Dosis(mg)/ Kg" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3" id="id_totalui" style="display:none;">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Total de mg por Dosis</strong>
                            <input type="number" class="form-control" id="totalui" name="totalui" placeholder="Total de UI por Dosis" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3" id="id_nodosisporsemana" style="display:none;">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">N° de Dosis por semana</strong>
                            <input type="number" class="form-control" id="nodosisporsemana" name="nodosisporsemana" placeholder="Total de UI por Dosis" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3" id="id_entrega" style="display:none;">
                            <strong style="font-size: 14px; color: rgb(135, 54, 0)">Entrega</strong>
                            <select name="entrega" id="entrega" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro">Seleccione...</option>
                                <option value="Domiciliaria">Domiciliaria</option>
                                <option value="Hospitalaria">Hospitalaria</option>
                            </select>
                        </div>
                    
                    </div> <!-- div del row tratamiento -->




                   
                        <div id="terapiaReemplazo" style="display:none; background-color: #F6DDCC ; color: aliceblue; text-align: center; margin-top: 20px; font-size:14px;">
                            <p>Terapia de remplazo (Inhibidor < 5UB)</p>
                        </div> 
                    
                     

                        <div class="row"  id="camposTerapiaReemplazo" style="display:none;">
                            <div class="row">
                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Dosis / Kg</strong>
                                    <input type="number" class="form-control" id="dosis" name="dosis" placeholder="Dosis / Kg" style="font-size: 14px;" required>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por Dosis</strong>
                                    <input type="number" class="form-control" id="totalui" name="totalui" placeholder="Total de UI por Dosis" style="font-size: 14px;" required>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">N° de Dosis por semana</strong>
                                    <input type="number" class="form-control" id="nodosisporsemana" name="nodosisporsemana" placeholder="Total de UI por Dosis" style="font-size: 14px;" required>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por semana</strong>
                                    <input type="number" class="form-control" id="totaluisemana" name="totalui" placeholder="Total de UI por semana" style="font-size: 14px;" required>
                                </div>
                            </div>
                        </div> <!-- row de terapia de remplazo-->

                        
                        




                        <div id="agenteDesvio" style="display:none; background-color: rgb(240, 128, 128, 0.65); color: aliceblue; text-align: center; margin-top: 20px; font-size:14px;">
                            <p>Agente de Desvío (Inhibidor > 5UB)</p>
                        </div>

                        <div class="row" id="camposAgenteDesvio" style="display:none;">
                            <div class="row">
                                <div class="col-md-3" id="id_agente_desvio">
                                    <strong style="font-size: 14px;">Dosis / Kg</strong>
                                    <input type="number" class="form-control" id="disis_desvio" name="dosis_desvio" placeholder="Dosis / Kg" style="font-size: 14px;" required>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por Dosis</strong>
                                    <input type="number" class="form-control" id="totalui_desvio" name="totalui_desvio" placeholder="Total de UI por Dosis" style="font-size: 14px;" required>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">N° de Dosis por semana</strong>
                                    <input type="number" class="form-control" id="nodosisporsemana_desvio" name="nodosisporsemana_desvio" placeholder="Total de UI por Dosis" style="font-size: 14px;" required>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 14px;">Total de UI por semana</strong>
                                    <input type="number" class="form-control" id="totalui_desvio_semana" name="totalui_desvio_semana" placeholder="Total de UI por semana" style="font-size: 14px;" required>
                                </div>
                            </div>
                        </div> <!-- es el row de terapia de reemplazo-->




                    <div style="background-color: rgb(240, 128, 128, 0.65); color: aliceblue; text-align: center; margin-top: 20px; font-size:14px;">
                            <p>Tratamiento mensual</p>
                    </div>

                    

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>Recombinante</p>
                    </div>


                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Turoctocog Alfa 250 UI</strong>
                            <input type="number" class="form-control" id="turo_250" name="turo_250" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Turoctocog Alfa 500 UI</strong>
                            <input type="number" class="form-control" id="turo_500" name="turo_500" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Turoctocog Alfa 1000 UI</strong>
                            <input type="number" class="form-control" id="turo_1000" name="turo_1000" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Octocog Alfa 250 UI</strong>
                            <input type="number" class="form-control" id="octo_250" name="octo_250" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Octocog Alfa 500 UI</strong>
                            <input type="number" class="form-control" id="octo_500" name="octo_500" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Simoctocog Alfa 250 UI</strong>
                            <input type="number" class="form-control" id="simo_250" name="simo_250" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Simoctocog Alfa 500 UI</strong>
                            <input type="number" class="form-control" id="simo_500" name="simo_500" style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;"> Simoctocog Alfa 1000 UI</strong>
                            <input type="number" class="form-control" id="simo_1000" name="simo_1000" style="font-size: 14px;" required>
                        </div>

                    </div> <!-- es el div del row de recombinante -->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>Plasmático</p>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII 250 UI</strong>
                            <input type="number" class="form-control" id="factorVIII_250" name="factorVIII_250"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII 500 UI</strong>
                            <input type="number" class="form-control" id="factorVIII_500" name="factorVIII_500"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII + vW 500 UI</strong>
                            <input type="number" class="form-control" id="factorVIIIvW_500" name="factorVIIIvW_500"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor VIII + vW 1000 UI</strong>
                            <input type="number" class="form-control" id="factorVIIIvW_1000" name="factorVIIIvW_1000" style="font-size: 14px;" required>
                        </div>

                    </div> <!-- div del row de Plasmático-->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>FIX</p>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 500 UI</strong>
                            <input type="number" class="form-control" id="factorIX_500" name="factorIX_500"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 500 UI</strong>
                            <input type="number" class="form-control" id="factorIX_500_2" name="factorIX_500_2"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 600 UI</strong>
                            <input type="number" class="form-control" id="factorIX_600" name="factorIX_600"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Factor IX 1000 UI</strong>
                            <input type="number" class="form-control" id="factorIX_1000" name="factorIX_1000" style="font-size: 14px;" required>
                        </div>

                    </div> <!-- div del row de FIX-->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>Emicizumab</p>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <strong style="font-size: 14px;">Emicizumab</strong>
                            <select name="entrega" id="entrega" class="form-control" style="font-size: 14px;">
                                <option value="Sin registro">Seleccione...</option>
                                <option value="30 MG">30 MG</option>
                                <option value="60 MG">60 MG</option>
                                <option value="105 MG">105 MG</option>
                                <option value="150 MG">150 MG</option>
                            </select>
                        </div>
                    </div> <!-- div del row de Emicizumab-->

                    <div style="background-color: rgb(233, 150, 122, 0.7); color: rgb(135, 54, 0); text-align: center; margin-top: 10px; font-size: 14px; width: %; margin-left: auto; margin-right: auto; padding: auto;">
                        <p>F Von Willebrand</p>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">F VW 500 UI</strong>
                            <input type="number" class="form-control" id="fVW_500" name="fVW_500"  style="font-size: 14px;" required>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">F VW 1000 UI</strong>
                            <input type="number" class="form-control" id="fvw_100" name="fvw_100"  style="font-size: 14px;" required>
                        </div>

                    </div> <!-- div del row de FIX-->

        </form>
        




      </div> <!-- <div class="modal-body">-->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div> <!--<div class="modal-footer">-->
    </div> <!-- <div class="modal-content">-->
  </div> <!--<div class="modal-dialog modal-xl">-->
</div> <!--<div class="modal fade" id="RegistrarPacienteAmbulatoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->