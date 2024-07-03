<?php
require ('php/controllers/ver_personal.controller.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver detalles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <?php include 'components/navbar.php'; ?>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="enfermero-container d-flex align-items-center">
          <div class="foto-enfermero mr-3">
            <img src="<?php echo $foto; ?>" alt="Foto del Enfermero" class="img-fluid">
          </div>

          <div class="nombre-enfermero">
            <h4><?php echo $apellidoPaterno . ' ' . $apellidoMaterno . ' ' . $nombre ?></h4>
            <table class="tabla-datos">

              <tr>
                <td>CURP</td>
                <th></th>
              </tr>

              <tr>
                <td>Género</td>
                <th></th>
              </tr>

              <tr>
                <td>Onomástico</td>
                <th></th>
              </tr>

              <tr>
                <td>Edad</td>
                <th></th>
              </tr>

              <tr>
                <td>RFC</td>
                <th></th>
              </tr>

            </table>

          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">

          <table class="tabla-datos">
          <tr>
              <th>CONTACTO EMERGENCIA</th>
            </tr>

              <tr>
                <td>Contacto Emergencia</td>
                <th></th>
              </tr>

              <tr>
                <td>Nombre Contacto</td>
                <th></th>

              </tr>
              <tr>
                <td>Teléfono Emergencia</td>
                <th></th>

             
          </table>


        </div>
      </div>
    </div>
  </div>






  





  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">

          <table class="tabla-datos">
            <tr>
              <th>INFORMACIÓN CONTRATO</th>
            </tr>

            <tr>
              <td>No. Empleado</td>
              <th></th>

            </tr>

            <tr>
              <td>Tipo de Contrato</td>
              <th></th>

            </tr>

           
            <tr>
              <td>Código</td>
              <th><?php echo $codigo ?></th>

            </tr>
            <tr>
              <td>Puesto</td>
              <th><?php echo $puesto ?></th>

            </tr>

            <tr>
              <td>Turno actual</td>
              <th><?php echo $turno ?></th>

            </tr>

            <tr>
              <td>Días Laborales</td>
              <th></th>

            </tr>


            <tr>
              <td>Servicio</td>
              <th><?php echo $servicio ?></th>

            </tr>
          </table>


        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">

          <table class="tabla-datos">
            <tr>
              <th>INFORMACIÓN ACADÉMICA</th>
            </tr>
            <tr>
              <td>Técnico</td>
              <th><?php echo $grado_tecnico ?></th>
              <th> - </th>
              <th><?php echo $cedula_tecnico ?></th>
            </tr>
            <tr>
              <td>Post-técnico</td>
              <th><?php echo $grado_posttecnico ?></th>
              <th> - </th>
              <th><?php echo $cedula_posttecnico ?></th>
            </tr>
            <tr>
              <td>Licenciatura</td>
              <th><?php echo $grado_licenciatura ?></th>
              <th> - </th>
              <th><?php echo $cedula_lic ?></th>
            </tr>
            <tr>
              <td>Especialidad</td>
              <th><?php echo $grado_especialidad ?></th>
              <th> - </th>
              <th><?php echo $cedula_especialidad ?></th>
            </tr>
            <tr>
              <td>Maestría</td>
              <th><?php echo $grado_maestria ?></th>
              <th> - </th>
              <th><?php echo $cedula_maestria ?></th>
            </tr>

            <tr>
              <td>Doctorado</td>
              <th></th>
              <th> - </th>
              <th></th>
            </tr>


            <tr>
              <td>Colegiación</td>
              <th></th>
              <th> Expedición: </th>
              <th></th>
              <th> Vigencia: </th>
              <th> </th>
              <th> Estatus: </th>
              <th></th>
            </tr>

            <tr>
              <td>Cerificación</td>
              <th></th>
              <th> Expedición: </th>
              <th></th>
              <th> Vigencia: </th>
              <th> </th>
              <th> Estatus: </th>
              <th></th>
            </tr>


          </table>


        </div>
      </div>
    </div>
  </div>




  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">
        
        <table class="tabla-datos">
          <thead>
            <tr>
              <th scope="col">CURSO</th>
              <th scope="col">Fecha Expedición</th>
              <th scope="col">Fecha Vigencia</th>
              <th scope="col">Estatus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">BLS</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">ACLS</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">ReNeo</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">PALS</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">ALSO</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">POE</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">CBSPD</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Certificación</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Certificación PICC</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>


        </div>
      </div>
    </div>
  </div>






  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="datos-container d-flex align-items-center">
        
        <table class="tabla-datos">
          <thead>
            <tr>
              <th scope="col">Curso</th>
              <th scope="col">Elaboro</th>
              <th scope="col">Fecha Expedición</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Interculturalidad</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Capacitación Virtual de Higiene de Manos</td>
              <td></td>
              <td></td>
              
            </tr>
            <tr>
              <td scope="row">Capacitación Virtual Manejo de Residuos Hospitalarios</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Acciones Esenciales de Seguridad del Paciente</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Curso Virtual Sobre los Fundamentos del Cuidado Paliativo</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Curso Básico de Combate de Incendios</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Introducción al Modelo Único de Evaluación de la Calidad</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Trato Digno en los Servicios de Salud</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Reanimación Cardiopulmonar en Adulto para Profesionales de la Salud</td>
              <td></td>
              <td></td>
            </tr>

            <tr>
              <td scope="row">Salud Mental en Profesionales de la Salud</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Capacitación de Códigos y Protocolos Hospitalarios de Emergencias y Desastres</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Medidas Basadas en la Transmisión de Agentes Infecciosos y Procesos de Limpieza</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>


        </div>
      </div>
    </div>
  </div>

  <br>
  <br>





  <script src="js/script_index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>