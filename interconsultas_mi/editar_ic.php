<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");

    if (!isset($_SESSION['valid_user'])) {
        // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
        header('Location: ../login/index.php');
        exit;
    }
    include('php/controllers/edit.controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Eidición Paciente</title>
</head>
<body>

    <header>
        <h6 style="color:aliceblue; margin-top: 10px;">
        <button type="button" class="btn btn-outline-light"><i class="bi bi-house"></i></button>
        Editar Interconsultas de Medicina Interna</h6>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header> <br>


    <!-- ================= Aquí inicia el form ============= -->
    <div class="container">
        <form id="editinterconsulta_form" method="POST" autocomplete="off">

            <div style="background-color: rgb(211, 211, 211, 0.5);
                color: rgb(96, 146, 209, 0.8);
                text-align: center;
                margin-top: 20px;">
                <h6>Generales</h6> 
            </div>

            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">
                
                <div class="col-md-6">
                    <strong style="font-size:14px;">Nombre Paciente</strong>
                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"  placeholder="Nombre(s) Apellidos"   style="font-size:14px;"  value="<?php echo $nombre_paciente; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Cama</strong>
                    <input type="number" name="cama" id="cama" class="form-control" style="font-size:14px;" value="<?php echo $cama; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Nombre Residente</strong>
                    <select name="nombre_residente" id="nombre_residente" class="form-control" style="font-size:14px;">
                        <option value="0"<?php if ($residente == '0') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Alejandra Sanchez Gil"<?php if ($residente == 'Alejandra Sanchez Gil') echo 'selected'; ?>>Alejandra Sanchez Gil</option>
                        <option value="Ana Libertad Salazar Trapala"<?php if ($residente == 'Ana Libertad Salazar Trapala') echo 'selected'; ?>>Ana Libertad Salazar Trapala</option>
                        <option value="Angelica Johana Perez Hernandez"<?php if ($residente == 'Angelica Johana Perez Hernandez') echo 'selected'; ?>>Angelica Johana Perez Hernandez</option>
                        <option value="Angelica Leal Camarrillo"<?php if ($residente == 'Angelica Leal Camarrillo') echo 'selected'; ?>>Angelica Leal Camarrillo</option>
                        <option value="Arturo Israel Jacinto Tovar"<?php if ($residente == 'Arturo Israel Jacinto Tovar') echo 'selected'; ?>>Arturo Israel Jacinto Tovar</option>
                        <option value="Brenda Mendoza Vega"<?php if ($residente == 'Brenda Mendoza Vega') echo 'selected'; ?>>Brenda Mendoza Vega</option>
                        <option value="Christian Mejia Herrera"<?php if ($residente == 'Christian Mejia Herrera') echo 'selected'; ?>>Christian Mejia Herrera</option>
                        <option value="Emyli Marin Guzman"<?php if ($residente == 'Emyli Marin Guzman') echo 'selected'; ?>>Emyli Marin Guzman</option>
                        <option value="Ezequiel Betancourt Uriostegui"<?php if ($residente == 'Ezequiel Betancourt Uriostegui') echo 'selected'; ?>>Ezequiel Betancourt Uriostegui</option>
                        <option value="Gerardo Saavedra Jimenez"<?php if ($residente == 'Gerardo Saavedra Jimenez') echo 'selected'; ?>>Gerardo Saavedra Jimenez </option>
                        <option value="Hugo A. Silguero Rivera"<?php if ($residente == 'Hugo A. Silguero Rivera') echo 'selected'; ?>>Hugo A. Silguero Rivera</option>
                        <option value="Jacobo U. Mercado Estrada"<?php if ($residente == 'Jacobo U. Mercado Estrada') echo 'selected'; ?>>Jacobo U. Mercado Estrada</option>
                        <option value="Jair Fernando Baños Bracho"<?php if ($residente == 'Jair Fernando Baños Bracho') echo 'selected'; ?>>Jair Fernando Baños Bracho</option>
                        <option value="Jennifer Arias Huerta"<?php if ($residente == 'Jennifer Arias Huerta') echo 'selected'; ?>>Jennifer Arias Huerta</option>
                        <option value="Jesus De La Cruz Salgado"<?php if ($residente == 'Jesus De La Cruz Salgado') echo 'selected'; ?>>Jesus De La Cruz Salgado</option>
                        <option value="Jose Gomez Pardo"<?php if ($residente == 'Jose Gomez Pardo') echo 'selected'; ?>>Jose Gomez Pardo</option>
                        <option value="Jose Roberto Marino Sanchez"<?php if ($residente == 'Jose Roberto Marino Sanchez') echo 'selected'; ?>>Jose Roberto Marino Sanchez</option>
                        <option value="Julian Grande Miguel"<?php if ($residente == 'Julian Grande Miguel') echo 'selected'; ?>>Julian Grande Miguel</option>
                        <option value="Karen Guevara Serrano"<?php if ($residente == 'Karen Guevara Serrano') echo 'selected'; ?>>Karen Guevara Serrano</option>
                        <option value="Leidy Vanessa Siachoque Gomez"<?php if ($residente == 'Leidy Vanessa Siachoque Gomez') echo 'selected'; ?>>Leidy Vanessa Siachoque Gomez</option>
                        <option value="Maria A. Rodriguez Mendoza"<?php if ($residente == 'Maria A. Rodriguez Mendoza') echo 'selected'; ?>>Maria A. Rodriguez Mendoza</option>
                        <option value="Misael Mora Dionisio"<?php if ($residente == 'Misael Mora Dionisio') echo 'selected'; ?>>Misael Mora Dionisio</option>
                        <option value="Mohamad Jamal Eddin"<?php if ($residente == 'Mohamad Jamal Eddin') echo 'selected'; ?>>Mohamad Jamal Eddin</option>
                        <option value="Pamela Priscila Palacios Ortiz"<?php if ($residente == 'Pamela Priscila Palacios Ortiz') echo 'selected'; ?>>Pamela Priscila Palacios Ortiz</option>
                        <option value="Paula Daniela Rodriguez Arciniegas"<?php if ($residente == 'Paula Daniela Rodriguez Arciniegas') echo 'selected'; ?>>Paula Daniela Rodriguez Arciniegas</option>
                        <option value="Paulina Ortega Iturbide"<?php if ($residente == 'Paulina Ortega Iturbide') echo 'selected'; ?>>Paulina Ortega Iturbide</option>
                        <option value="Paula Elizabeth Paredes Cabrera"<?php if ($residente == 'Paula Elizabeth Paredes Cabrera') echo 'selected'; ?>>Paula Elizabeth Paredes Cabrera</option>
                        <option value="Sonia Lisset Mandoujano Sanchez"<?php if ($residente == 'Sonia Lisset Mandoujano Sanchez') echo 'selected'; ?>>Sonia Lisset Mandoujano Sanchez</option>
                        <option value="Victor Espinoza Hernandez"<?php if ($residente == 'Victor Espinoza Hernandez') echo 'selected'; ?>>Victor Espinoza Hernández</option>
                        <option value="Villegas Contreras Cristian Ricardo"<?php if ($residente == 'Villegas Contreras Cristian Ricardo') echo 'selected'; ?>>Villegas Contreras Cristian Ricardo</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Adscrito Responsable</strong>
                    <select name="nombre_adscrito" id="nombre_adscrito" class="form-control" style="font-size:14px;">
                        <option value="0"<?php if ($responsable == '0') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Carlos Waldo Vargas"<?php if ($responsable == 'Carlos Waldo Vargas') echo 'selected'; ?>>Carlos Waldo Vargas</option>
                        <option value="Dante Rivera Zetina"<?php if ($responsable == 'Dante Rivera Zetina') echo 'selected'; ?>>Dante Rivera Zetina</option>
                        <option value="David Castaneda"<?php if ($responsable == 'David Castaneda') echo 'selected'; ?>>David Castañeda</option>
                        <option value="Eliseo Perez Silva"<?php if ($responsable == 'Eliseo Perez Silva') echo 'selected'; ?>>Eliseo Perez Silva </option>
                        <option value="Evelyn Samantha Perez Huerta"<?php if ($responsable == 'Evelyn Samantha Perez Huerta') echo 'selected'; ?>>Evelyn Samantha Pérez Huerta</option>
                        <option value="Fernando Rivera Ortega"<?php if ($responsable == 'Fernando Rivera Ortega') echo 'selected'; ?>>Fernando Rivera Ortega</option>
                        <option value="Flor Elena Rojas Terrazas"<?php if ($responsable == 'Flor Elena Rojas Terrazas') echo 'selected'; ?>>Flor Elena Rojas Terrazas</option>
                        <option value="Francisco Gallego Sanchez"<?php if ($responsable == 'Francisco Gallego Sanchez') echo 'selected'; ?>>Francisco Gallego Sánchez</option>
                        <option value="Gerardo Rojas Magana"<?php if ($responsable == 'Gerardo Rojas Magana') echo 'selected'; ?>>Gerardo Rojas Magaña</option>
                        <option value="Guadalupe Garduno Arriaga"<?php if ($responsable == 'Guadalupe Garduno Arriaga') echo 'selected'; ?>>Guadalupe Garduño Arriaga</option>
                        <option value="Israel Gil Velazquez"<?php if ($responsable == 'Israel Gil Velazquez') echo 'selected'; ?>>Israel Gil Velazquez</option>
                        <option value="José Antonio García Cuéllar"<?php if ($responsable == 'José Antonio García Cuéllar') echo 'selected'; ?>>José Antonio García Cuéllar</option>
                        <option value="Juan Edilberto Rodriguez Pina"<?php if ($responsable == 'Juan Edilberto Rodriguez Pina') echo 'selected'; ?>>Juan Edilberto Rodriguez Piña </option>
                        <option value="Luis Alfonso Covarrubias"<?php if ($responsable == 'Luis Alfonso Covarrubias') echo 'selected'; ?>>Luis Alfonso Covarrubias</option>
                        <option value="Maria Isabel Silva Cruz"<?php if ($responsable == 'Maria Isabel Silva Cruz') echo 'selected'; ?>>María Isabel Silva Cruz</option>
                        <option value="Monica Herrera Duran"<?php if ($responsable == 'Monica Herrera Duran') echo 'selected'; ?>>Monica Herrera Durán </option>
                        <option value="Oscar Yamil Huacuja Salmon"<?php if ($responsable == 'Oscar Yamil Huacuja Salmon') echo 'selected'; ?>>Oscar Yamil Huacuja Salmon</option>
                        <option value="Patricia Alejandra Mesa Meneses"<?php if ($responsable == 'Patricia Alejandra Mesa Meneses') echo 'selected'; ?>>Patricia Alejandra Mesa Meneses </option>
                        <option value="Rafael Alejandro Cid Guitierrez"<?php if ($responsable == 'Rafael Alejandro Cid Guitierrez') echo 'selected'; ?>>Rafael Alejandro Cid Guitierrez</option>
                        <option value="Rafael Garcia Rascon"<?php if ($responsable == 'Rafael Garcia Rascon') echo 'selected'; ?>>Rafael Garcia Rascon </option>
                        <option value="Sajid Ramirez Carreto"<?php if ($responsable == 'Sajid Ramirez Carreto') echo 'selected'; ?>>Sajid Ramirez Carreto</option>
                        <option value="Salvador Hernandez"<?php if ($responsable == 'Salvador Hernandez') echo 'selected'; ?>>Salvador Hernández</option>
                        <option value="Sandy Badillo De La Pena"<?php if ($responsable == 'Sandy Badillo De La Pena') echo 'selected'; ?>>Sandy Badillo De La Peña</option>
                        <option value="Sayuri Espindola Chavarria"<?php if ($responsable == 'Sayuri Espindola Chavarria') echo 'selected'; ?>>Sayuri Espindola Chavarria</option>
                    </select>
                </div>
            </div> <!-- div del <div class="row"> -->

                <!-- ================================ PROCEDIMIENTOS =============================-->

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
                        <option value="0"<?php if ($servicio_inter == '0') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Anestesiología"<?php if ($servicio_inter == 'Anestesiología') echo 'selected'; ?>>Anestesiología</option>
                        <option value="Cardiologia"<?php if ($servicio_inter == 'Cardiologia') echo 'selected'; ?>>Cardiología</option>
                        <option value="Cirugia"<?php if ($servicio_inter == 'Cirugia') echo 'selected'; ?>>Cirugía</option>
                        <option value="Coloproctología"<?php if ($servicio_inter == 'Coloproctología') echo 'selected'; ?>>Coloproctología</option>
                        <option value="Ginecologia Y Obstetricia"<?php if ($servicio_inter == 'Ginecologia Y Obstetricia') echo 'selected'; ?>>Ginecología Y Obstetricia</option>
                        <option value="Hematología"<?php if ($servicio_inter == 'Hematología') echo 'selected'; ?>>Hematología</option>
                        <option value="Maxilofacial"<?php if ($servicio_inter == 'Maxilofacial') echo 'selected'; ?>>Maxilofacial</option>
                        <option value="Neurocirugia"<?php if ($servicio_inter == 'Neurocirugia') echo 'selected'; ?>>Neurocirugía </option>
                        <option value="Oftalmologia"<?php if ($servicio_inter == 'Oftalmologia') echo 'selected'; ?>>Oftalmología</option>
                        <option value="Oncocirugia"<?php if ($servicio_inter == 'Oncocirugia') echo 'selected'; ?>>Oncocirugia</option>
                        <option value="Oncologia"<?php if ($servicio_inter == 'Oncologia') echo 'selected'; ?>>Oncología</option>
                        <option value="Otorrinolaringologia"<?php if ($servicio_inter == 'Otorrinolaringologia') echo 'selected'; ?>>Otorrinolaringología</option>
                        <option value="Terapia Intensiva"<?php if ($servicio_inter == 'Terapia Intensiva') echo 'selected'; ?>>Terapia Intensiva</option>
                        <option value="Traumatologia Y Ortopedia"<?php if ($servicio_inter == 'Traumatologia Y Ortopedia') echo 'selected'; ?>>Traumatología Y Ortopedia</option>
                        <option value="Urgencias"<?php if ($servicio_inter == 'Urgencias') echo 'selected'; ?>>Urgencias</option>
                        <option value="Urologia"<?php if ($servicio_inter == 'Urologia') echo 'selected'; ?>>Urología</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Servicio Respondiente</strong>
                    <select name="servicio_respondiente" id="servicio_respondiente" class="form-control" style="font-size:14px;">
                        <option value="0"<?php if ($servicio_resp == '0') echo 'selected'; ?>>Seleccione...</option>
                        <option value="Endocrinologia"<?php if ($servicio_resp == 'Endocrinologia') echo 'selected'; ?>>Endocrinología </option>
                        <option value="Gastroenterologia"<?php if ($servicio_resp == 'Gastroenterologia') echo 'selected'; ?>>Gastroenterología</option>
                        <option value="Geriatria"<?php if ($servicio_resp == 'Geriatria') echo 'selected'; ?>>Geriatría</option>
                        <option value="Infectologia"<?php if ($servicio_resp == 'Infectologia') echo 'selected'; ?>>Infectología</option>
                        <option value="Medicina Interna"<?php if ($servicio_resp == 'Medicina Interna') echo 'selected'; ?>>Medicina Interna </option>
                        <option value="Nefrologia"<?php if ($servicio_resp == 'Nefrologia') echo 'selected'; ?>>Nefrología</option>
                        <option value="Neumologia"<?php if ($servicio_resp == 'Neumologia') echo 'selected'; ?>>Neumología </option>
                        <option value="Neurologia"<?php if ($servicio_resp == 'Neurologia') echo 'selected'; ?>>Neurología</option>
                        <option value="Reumatologia"<?php if ($servicio_resp == 'Reumatologia') echo 'selected'; ?>>Reumatología</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Fecha IC</strong>
                    <input type="date" id="fecha_ic" name="fecha_ic" class="form-control" style="font-size:14px;" value="<?php echo $fecha_inter; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Respuesta IC</strong>
                    <input type="date" id="fecha_ric" name="fecha_ric" class="form-control" style="font-size:14px;" value="<?php echo $fecha_resp; ?>">
                </div>

                <div class="col-md-12">
                    <strong style="font-size:14px;">Observaciones</strong>
                    <textarea id="observaciones" name="observaciones" class="form-control" aria-label="With textarea"><?php echo $observaciones; ?></textarea>
                </div>
            </div> <!--<div class="row">-->

            <br>
            <button type="submit" class="btn btn-success float-end" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Guardar
            </button>


    </div>



    <footer>
            Hospital Regional de Alta Especialidad de Ixtapaluca
            <br>Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="module">
            import { editForm } from "./js/update.js";
            editForm();
    </script>
    
</body>
</html>