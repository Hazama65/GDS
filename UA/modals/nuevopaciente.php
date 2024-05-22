<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(103, 172, 166); color: aliceblue;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="patientForm" method="POST">

          <div class="row">
            <div class="col-md-12">
              <strong>Nombre Paciente</strong>
              <input id="nombre" name="nombre" type="text" class="control form-control" value=""
                style="font-size: 13px;" required>
            </div>

            <div class="col-md-12">
              <strong>Hora de llegada:</strong>
              <input id="horallegada" name="horallegada" type="time" class="control form-control" value=""
                style="font-size: 13px;" required>
            </div>

            <div class="col-md-12">
              <strong>Médico:</strong>
              <select id="medico" name="medico" class="control form-control" style="font-size: 13px;" required>
                <option value="">Selecciona un médico...</option>
                <option value="Alberto Monroy Chargoy">Alberto Monroy Chargoy</option>
                <option value="Álvaro Cabrera Hernández">Álvaro Cabrera Hernández</option>
                <option value="Armando Cabello Alvarado">Armando Cabello Alvarado</option>
                <option value="Cristobal Martínez Vázquez">Cristobal Martínez Vázquez</option>
                <option value="César Ceja Razon">César Ceja Razon</option>
                <option value="Daniel Medrano Espinosa">Daniel Medrano Espinosa</option>
                <option value="José Martín Solana Hernández">José Martín Solana Hernández</option>
                <option value="Kuautzin Alfonso Hernández Cisneros">Kuautzin Alfonso Hernández Cisneros</option>
                <option value="Luis Cruz Benitez">Luis Cruz Benitez</option>
                <option value="Raul Arturo Guzmán Trigueros">Raul Arturo Guzmán Trigueros</option>
                <option value="Ubaldo Rafael Hernández Rocha">Ubaldo Rafael Hernández Rocha</option>
              </select>
            </div>

          </div>

          <div style="background-color: rgb(103, 172, 166,0.85);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
            <h6>Signos Vitales</h6>
          </div>


          <div class="row">
            <div class="col-md-12">
              <strong>Temperatura:</strong>
              <input id="Temperatura" name="Temperatura" type="number" class="control form-control" value=""
                style="font-size: 13px;" step="0.1" required>
            </div>


            <div class="col-md-12">
              <strong>FR:</strong>
              <input id="FR" name="FR" type="number" class="control form-control" value="" style="font-size: 13px;"
                step="0.1" required>
            </div>

            <div class="col-md-12">
              <strong>Presión arterial:</strong>
              <input id="Presion_arterial" name="Presion_arterial" type="text" class="control form-control" 
                style="font-size: 13px;" required>
            </div>

            <div class="col-md-12">
              <strong>Pulso</strong>
              <input id="Pulso" name="Pulso" type="number" class="control form-control" value=""
                style="font-size: 13px;" step="0.1" required>
            </div>

            <div class="col-md-12">
              <strong>Talla</strong>
              <input id="Talla" name="Talla" type="number" class="control form-control" value=""
                style="font-size: 13px;" step="0.01" required>
            </div>

            <div class="col-md-12">
              <strong>Peso</strong>
              <input id="Peso" name="Peso" type="number" class="control form-control" value="" style="font-size: 13px;"
                step="0.1" required>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Formar Paciente</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>