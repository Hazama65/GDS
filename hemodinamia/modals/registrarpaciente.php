<!-- Modal -->
<div class="modal fade" id="ModalHemodinamia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(138, 8, 41); color: aliceblue">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
          <i class="bi bi-person-fill-add"></i> Registrar Paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="" id="hemodinamia_form" autocomplete="off" method="post">

          <!--********************************-->

          <div style="background-color: rgb(138, 8, 41);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Datos del Paciente</h6> 
          </div> 

          <div class="row">

              <div class="col-md-3">
                <strong style="font-size: 14px;">Fecha:</strong>
                <input type="date" class="form-control" id="fecha" name="fecha" >
              </div>

              <div class="col-md-3" id="idnombre">
                <strong style="font-size: 14px;">Nombre Completo</strong>
                <input id="nombre" name="nombre" type="text" class="control form-control" value="" placeholder="Nombre(s) Apellidos" style="font-size: 14px;" >
              </div>


              <div class="col-md-3">
                <strong style="font-size: 14px;">Edad</strong>
                <input id="edad" name="edad" type="number" class="control form-control" value="" style="font-size: 14px;" >
              </div>

              <div class="col-md-3" style="font-size: 14px;">
                <strong style="font-size: 14px;">Sexo</strong>
                <select name="sexo" id="sexo" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro">Seleccione...</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
                </select>
              </div>

              <div class="col-md-3" style="font-size: 14px;">
                <strong style="font-size: 14px;">Diabetico</strong>
                <select name="diabetico" id="diabetico" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro">Seleccione...</option>
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="col-md-3" style="font-size: 14px;">
                  <strong style="font-size: 14px;">Hipertensión</strong>
                  <select name="has" id="has" class="form-control" style="font-size: 14px;">
                    <option value="Sin Registro">Seleccione...</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
              </div>
          </div>

          

          <!--********************************-->

          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Atención Médica</h6> 
          </div> 

          <div class="row">
            <div class="col-md-4" style="font-size: 14px;">
                  <strong style="font-size: 14px;">Médico Tratante</strong>
                  <select name="medico" id="medico" class="form-control" style="font-size: 14px;">
                    <option value="Seleccionar">Seleccionar...</option>
                    <option value="Alma Rosa Sanchez Conejo">Alma Rosa Sanchez Conejo</option>
                    <option value="Arnoldo Loaisiga Saenz">Arnoldo Loaisiga Saenz</option>
                    <option value="Carlos Sandoval">Carlos Sandoval</option>
                    <option value="Ceballos Medina">Ceballos Medina</option>
                    <option value="Eric Cuevas Medina">Eric Cuevas Medina</option>
                    <option value="Gerardo Zavala García">Gerardo Zavala García</option>
                    <option value="Guillermo Alejandro Muñoz Benavides">Guillermo Alejandro Muñoz Benavides</option>
                    <option value="Karla Felicia Martinez Medina">Karla Felicia Martinez Medina</option>
                    <option value="Karla Ivonne Solis Mendoza">Karla Ivonne Solis Mendoza</option>
                    <option value="Maricruz Cespedes Contreras">Maricruz Cespedes Contreras</option>
                    <option value="Maricurz Sanchez Cuz ">Maricurz Sanchez Cuz </option>
                    <option value="Misael Silva Gonzalez">Misael Silva Gonzalez</option>
                    <option value="Noe Alfredo Osorio Velasco">Noe Alfredo Osorio Velasco</option>
                    <option value="Teresa Margarita Casares Bran">Teresa Margarita Casares Bran</option>
                  </select>
              </div>

            <div class="col-md-4">
              <strong style="font-size: 14px;">Diagnóstico</strong>
              <select name="diagnostico" id="diagnostico" class="form-control" >
                <option value="Selecciones">Selecciones</option>
                  <?php
                      if ($dataDiagnosticos->num_rows > 0) {
                          while ($row = $dataDiagnosticos->fetch_assoc()) {
                          echo "<option value='" . $row["id_diagnostico"] . "'>" . $row["nombre"] . "</option>";
                      }
                      }else {
                          echo "<option value=''>No hay datos disponibles</option>";
                      }
                  ?>
              </select>
            </div>

            <div class="col-md-4">
              <strong style="font-size: 14px;">Procedimiento</strong>
              <select name="procedimiento" id="procedimiento" class="form-control">
                <option value="Selecciones">Selecciones</option>
                  <?php
                      if ($dataProcediminetos->num_rows > 0) {
                          while ($row = $dataProcediminetos->fetch_assoc()) {
                          echo "<option value='" . $row["id_procedimiento"] . "'>" . $row["nombre"] . "</option>";
                      }
                      }else {
                          echo "<option value=''>No hay datos disponibles</option>";
                      }
                  ?>
              </select>
            </div>



            <div class="col-md-4" style="font-size: 14px;">
                <strong style="font-size: 14px;">Procedimiento programado</strong>
                <select name="Programada" id="Programada" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro">Seleccione...</option>
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
            </div>

            <div class="col-md-4" style="font-size: 14px;">
                <strong style="font-size: 14px;">Infarto</strong>
                <select name="STEMI" id="STEMI" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro">Seleccione...</option>
                  <option value="con elevacion">Con Elevacion</option>
                  <option value="sin elevacion">Sin Elevacion</option>
                </select>
            </div>
          </div>
          
          <!--Sitio de abordaje-->

          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>Sitio Abordaje</h6> 
          </div> 
           
          <div class="row">
            <!--******+Braquial*******-->

            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Braquial</strong>
              <select name="braquial" id="braquial" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('braquial')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadbraquial">
              <label style="font-size: 14px; color: red;">Lateralidad Braquial</label>
              <select name="lateralidadbraquial" id="lateralidadbraquial" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>

            <!-- Cubital -->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Cubital</strong>
              <select name="Cubital" id="Cubital" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('Cubital')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadCubital">
              <label style="font-size: 14px; color: red;">Lateralidad Cubital</label>
              <select name="lateralidadCubital" id="lateralidadCubital" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>

            <!--******+Deltopectoral*******-->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Deltopectoral</strong>
              <select name="Deltopectoral" id="Deltopectoral" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('Deltopectoral')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadDeltopectoral">
              <label style="font-size: 14px; color: red;">Lateralidad Deltopectoral</label>
              <select name="lateralidadDeltopectoral" id="lateralidadDeltopectoral" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>

            <!--******+Femoral*******-->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Femoral</strong>
              <select name="Femoral" id="Femoral" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('Femoral')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadFemoral">
              <label style="font-size: 14px; color: red;">Lateralidad Femoral</label>
              <select name="lateralidadFemoral" id="lateralidadFemoral" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>


            <!--******+Radial*******-->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Radial</strong>
              <select name="Radial" id="Radial" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('Radial')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadRadial">
              <label style="font-size: 14px; color: red;">Lateralidad Radial</label>
              <select name="lateralidadRadial" id="lateralidadRadial" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>

            <!-- Subclavio -->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Subclavio</strong>
              <select name="Subclavio" id="Subclavio" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('Subclavio')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadSubclavio">
              <label style="font-size: 14px; color: red;">Lateralidad Subclavio</label>
              <select name="lateralidadSubclavio" id="lateralidadSubclavio" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>

            <!-- Transradial Distal -->
            <div class="col-md-3" style="font-size: 14px;">
              <strong style="font-size: 14px;">Transradial Distal</strong>
              <select name="TransradialDistal" id="TransradialDistal" class="form-control" style="font-size: 14px;" onchange="mostrarLateralidad('TransradialDistal')">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3 lateralidad-select" id="id_lateralidadTransradialDistal">
              <label style="font-size: 14px; color: red;">Lateralidad Transradial Distal</label>
              <select name="lateralidadTransradialDistal" id="lateralidadTransradialDistal" class="form-control" style="font-size: 14px;">
                <option value="Sin Registro">Seleccione...</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
                <option value="Bilateral">Bilateral</option>
              </select>
            </div>
          </div> <!-- <div class="row">-->

          <!--********************destino final*********************-->
          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6> Destino Final </h6> 
          </div>

          <div class="row">
            <div class="col-md-4" style="font-size: 14px;">
                <strong style="font-size: 14px;">Destino Final</strong>
                <select name="destinofinal" id="destinofinal" class="form-control" style="font-size: 14px;">
                  <option value="Sin Registro">Seleccione...</option>
                  <option value="Domicilio">Domicilio</option>
                  <option value="Hospitalizacion Obstetricos 4Piso">Hospitalización Obstétricos (1er Piso)</option>
                  <option value="Hospitalizacion Clinicos Adultos 1Piso">Hospitalización Clínicos Adultos (1er Piso)</option>
                  <option value="Hospitalización Quirurgicos Adultos 2Piso">Hospitalización Quirúrgicos Adultos (2o Piso)</option>
                  <option value="Hospitalizacion Clinicos Adultos 3Piso">Hospitalización Clínicos Adultos (3er Piso)</option>
                  <option value="Hospitalizacion Clinicos Adultos 4Piso">Hospitalización Clínicos Adultos (4o Piso)</option>
                  <option value="Hospitalizacion Procedimientos Urgentes">Hospitalización Procedimientos Urgentes</option>
                  <option value="UCIA">UCIA - Unidad de Cuidados Intensivos Adultos</option>
                  <option value="UTIA">UTIA - Unidad de Cuidados Intermedios Adultos</option>
                  <option value="UTPH">UTPH - Unidad de Trasplante de Progenitores Hematopoyéticos</option>
                  <option value="Patologia">Patologia</option>
                </select>
            </div>
          </div> <!--Div del row-->

          <!--**********************************Lesión coronaria***************************************-->

          <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6> Lesión Coronaria </h6> 
          </div>

          <div class="row">
            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Bifurcación</strong>
              <select name="bifurcacion" id="bifurcacion" class="form-control" style="font-size: 14px;">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Cincunfleja</strong>
              <select name="Cincunfleja" id="Cincunfleja" class="form-control" style="font-size: 14px;">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Coronario Derecha</strong>
              <select name="coronarioderecha" id="coronarioderecha" class="form-control" style="font-size: 14px;">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Descendente Anterior</strong>
              <select name="descendenteanterior" id="descendenteanterior" class="form-control" style="font-size: 14px;">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Ramo Intermedio</strong>
              <select name="ramointermedio" id="ramointermedio" class="form-control" style="font-size: 14px;">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-3" style="font-size:14px;">
              <strong style="font-size:14px;">Tronco Coronario Izquierdo</strong>
              <select name="troncocoronario" id="troncocoronario" class="form-control" style="font-size: 14px;">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>
          </div> <!--Div del row-->


           <!--**********************************Lesión coronaria***************************************-->

           <div style="background-color: rgb(138, 8, 41, 0.8);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6> Stent | Balón </h6> 
          </div>

          <div class="row">
            <div class="col-md-12" style="font-size:14px;">
              <strong style="font-size:14px;">Stent</strong>
              <select name="Stent" id="Stent" class="form-control" style="font-size: 14px;" onchange="mostrarCamposStent()">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-6" id="numeroStent" style="display: none;">
              <label style="font-size: 14px; color: red;"> Número </label>
              <input id="nostent" name="nostent" type="number" class="control form-control" value="" style="font-size: 14px;" >
            </div>

            <div class="col-md-6" id="medidasStent" style="display: none;">
              <label style="font-size: 14px; color: red;"> Medidas </label>
              <input id="medidastent" name="medidastent" type="string" class="control form-control" value="" style="font-size: 14px;" >
            </div>

            <!-- Balón -->
            <div class="col-md-12" style="font-size:14px;">
              <strong style="font-size:14px;">Balón</strong>
              <select name="balon" id="balon" class="form-control" style="font-size: 14px;" onchange="mostrarCamposBalon()">
                <option value="No">No</option>
                <option value="Si">Sí</option>
              </select>
            </div>

            <div class="col-md-6" id="numeroBalon" style="display: none;">
              <label style="font-size: 14px; color: red;"> Número </label>
              <input id="nobalon" name="nobalon" type="number" class="control form-control" value="" style="font-size: 14px;" >
            </div>

            <div class="col-md-6" id="medidasBalon" style="display: none;">
              <label style="font-size: 14px; color: red;"> Medidas </label>
              <input id="medidabalon" name="medidabalon" type="string" class="control form-control" value="" style="font-size: 14px;" >
            </div>
          </div> <!--div del row de Lesión Coronaria-->
        </div>

      
      <div class="modal-footer" style="background-color: rgb(138, 8, 41);">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>


    </div>
  </div>
</div>
