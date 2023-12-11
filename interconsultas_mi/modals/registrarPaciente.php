
<!-- Modal -->
<div class="modal fade" id="RegistrarPacienteInterconsulta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="color: aliceblue; background-color:rgb(96, 146, 209);">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            <i class="bi bi-person-plus-fill"></i> Registrar Paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> <!-- <div class="modal-header" style="color: aliceblue; background-color:rgb(14, 162, 153);">-->
      <div class="modal-body">
        <form id="interconsulta_form"  method="POST" autocomplete="off">

            <div style="background-color: rgb(211, 211, 211, 0.5);
                        color: rgb(96, 146, 209, 0.8);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Generales</h6> 
            </div>

            <div class="row">

                <div class="col-md-6">
                    <strong style="font-size:14px;">Nombre Paciente</strong>
                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"  placeholder="Nombre(s) Apellidos"   style="font-size:14px;" required>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Cama</strong>
                    <input type="number" name="cama" id="cama" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Nombre Residente</strong>
                    <select name="nombre_residente" id="nombre_residente" class="form-control" style="font-size:14px;">
                        <option value="0">Seleccione...</option>
                        <option value="Ana Libertad Salazar Trapala">Ana Libertad Salazar Trapala</option>
                        <option value="Angelica Johana Perez Hernandez">Angelica Johana Perez Hernandez</option>
                        <option value="Angelica Leal Camarrillo">Angelica Leal Camarrillo</option>
                        <option value="Arturo Israel Jacinto Tovar">Arturo Israel Jacinto Tovar</option>
                        <option value="Brenda Mendoza Vega">Brenda Mendoza Vega</option>
                        <option value="Christian Mejia Herrera">Christian Mejia Herrera</option>
                        <option value="Ezequiel Betancourt Uriostegui">Ezequiel Betancourt Uriostegui</option>
                        <option value="Gerardo Saavedra Jimenez">Gerardo Saavedra Jimenez </option>
                        <option value="Hugo A. Silguero Rivera">Hugo A. Silguero Rivera</option>
                        <option value="Jacobo U. Mercado Estrada">Jacobo U. Mercado Estrada</option>
                        <option value="Jennifer Arias Huerta">Jennifer Arias Huerta</option>
                        <option value="Jose Gomez Pardo">Jose Gomez Pardo</option>
                        <option value="Jose Roberto Marino Sanchez">Jose Roberto Marino Sanchez</option>
                        <option value="Leidy Vanessa Siachoque Gomez">Leidy Vanessa Siachoque Gomez</option>
                        <option value="Maria A. Rodriguez Mendoza">Maria A. Rodriguez Mendoza</option>
                        <option value="Mohamad Jamal Eddin">Mohamad Jamal Eddin</option>
                        <option value="Pamela Priscila Palacios Ortiz">Pamela Priscila Palacios Ortiz</option>
                        <option value="Paula Daniela Rodriguez Arciniegas">Paula Daniela Rodriguez Arciniegas</option>
                        <option value="Paula Elizabeth Paredes Cabrera">Paula Elizabeth Paredes Cabrera</option>
                        <option value="Paulina Ortega Iturbide">Paulina Ortega Iturbide</option>
                        <option value="Sonia Lisset Mandoujano Sanchez">Sonia Lisset Mandoujano Sanchez</option>
                        <option value="Victor Espinoza Hernandez">Victor Espinoza Hernández</option>
                        <option value="Villegas Contreras Cristian Ricardo">Villegas Contreras Cristian Ricardo</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Adscrito Responsable</strong>
                    <select name="nombre_adscrito" id="nombre_adscrito" class="form-control" style="font-size:14px;">
                    <option value="0">Seleccione...</option>
                    <option value="Carlos Waldo Vargas">Carlos Waldo Vargas</option>
                    <option value="Dante Rivera Zetina">Dante Rivera Zetina</option>
                    <option value="David Castaneda">David Castañeda</option>
                    <option value="Eliseo Perez Silva">Eliseo Perez Silva </option>
                    <option value="Evelyn Samantha Perez Huerta">Evelyn Samantha Pérez Huerta</option>
                    <option value="Fernando Rivera Ortega">Fernando Rivera Ortega</option>
                    <option value="Flor Elena Rojas Terrazas">Flor Elena Rojas Terrazas</option>
                    <option value="Francisco Gallego Sanchez">Francisco Gallego Sánchez</option>
                    <option value="Gerardo Rojas Magana">Gerardo Rojas Magaña</option>
                    <option value="Guadalupe Garduno Arriaga">Guadalupe Garduño Arriaga</option>
                    <option value="Israel Gil Velazquez">Israel Gil Velazquez</option>
                    <option value="José Antonio García Cuéllar">José Antonio García Cuéllar</option>
                    <option value="Juan Edilberto Rodriguez Pina">Juan Edilberto Rodriguez Piña </option>
                    <option value="Luis Alfonso Covarrubias">Luis Alfonso Covarrubias</option>
                    <option value="Maria Isabel Silva Cruz">María Isabel Silva Cruz</option>
                    <option value="Monica Herrera Duran">Monica Herrera Durán </option>
                    <option value="Oscar Yamil Huacuja Salmon">Oscar Yamil Huacuja Salmon</option>
                    <option value="Patricia Alejandra Mesa Meneses">Patricia Alejandra Mesa Meneses </option>
                    <option value="Rafael Alejandro Cid Guitierrez">Rafael Alejandro Cid Guitierrez</option>
                    <option value="Rafael Garcia Rascon">Rafael Garcia Rascon </option>
                    <option value="Sajid Ramirez Carreto">Sajid Ramirez Carreto</option>
                    <option value="Salvador Hernandez">Salvador Hernández</option>
                    <option value="Sandy Badillo De La Pena">Sandy Badillo De La Peña</option>
                    <option value="Sayuri Espindola Chavarria">Sayuri Espindola Chavarria</option>
                    </select>
                </div>

            </div>
                <!-- PROCEDIMIENTOS -->

                <div style="background-color: rgb(211, 211, 211, 0.5);
                        color: rgb(96, 146, 209, 0.8);
                        text-align: center;
                        margin-top: 20px;">
                        <h6>Procedimientos</h6> 
                </div>

                <div class="row">

                <div class="col-md-6">
                    <strong style="font-size:14px;">Servicio IC</strong>
                    <select name="servicio_ic" id="servicio_ic" class="form-control" style="font-size:14px;">
                    <option value="0">Seleccione...</option>
                    <option value="Cardiologia">Cardiología</option>
                    <option value="Cirugia">Cirugía</option>
                    <option value="Ginecologia Y Obstetricia">Ginecología Y Obstetricia</option>
                    <option value="Maxilofacial">Maxilofacial</option>
                    <option value="Neurocirugia">Neurocirugía </option>
                    <option value="Oftalmologia">Oftalmología</option>
                    <option value="Oncologia">Oncología</option>
                    <option value="Otorrinolaringologia">Otorrinolaringología</option>
                    <option value="Terapia Intensiva">Terapia Intensiva</option>
                    <option value="Traumatologia Y Ortopedia">Traumatología Y Ortopedia</option>
                    <option value="Urgencias">Urgencias</option>
                    <option value="Urologia">Urología</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Servicio Respondiente</strong>
                    <select name="servicio_respondiente" id="servicio_respondiente" class="form-control" style="font-size:14px;">
                    <option value="0">Seleccione...</option>
                    <option value="Endocrinologia">Endocrinología </option>
                    <option value="Gastroenterologia">Gastroenterología</option>
                    <option value="Geriatria">Geriatría</option>
                    <option value="Infectologia">Infectología</option>
                    <option value="Medicina Interna">Medicina Interna </option>
                    <option value="Nefrologia">Nefrología</option>
                    <option value="Neumologia">Neumología </option>
                    <option value="Neurologia">Neurología</option>
                    <option value="Reumatologia">Reumatología</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Fecha IC</strong>
                    <input type="date" id="fecha_ic" name="fecha_ic" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Respuesta IC</strong>
                    <input type="date" id="fecha_ric" name="fecha_ric" class="form-control" style="font-size:14px;">
                </div>

                <div class="col-md-12">
                    <strong style="font-size:14px;">Observaciones</strong>
                    <textarea id="observaciones" name="observaciones" type="text" class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div> <!--<div class="row">-->

      </div> <!-- <div class="modal-body">-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div> <!-- <div class="modal-footer">-->
    </div> <!-- <div class="modal-content">-->
  </div> <!-- cierra el div <div class="modal-dialog modal-lg">-->
</div> <!-- cierra el primer div <div class="modal fade" id="RegistrarPacienteInterconsulta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">-->