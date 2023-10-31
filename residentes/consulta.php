<?php
    include('php/controllers/consulta.controller.php');
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
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-hover table-bordered tabla-consulta">
       <thead>   <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
            
            <tr>
                <th scope="col"> Datos Residentes</th>
                <th scope="col"> </th> <!--Esto indica que esta celda contiene el título de la primera columna de la tabla, que se refiere a "Datos Residentes -->
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr> <!--Esta etiqueta define una fila en el cuerpo de la tabla.-->
                <td class="estilo-celda">Fecha</td>
                <td><?php echo $fecha; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $residentes; ?></td>
            </tr>


        <!--====================================PUNCIÓN LUMBAR 1============================-->
            
            <tr>
                <th scope="col"  style="background-color: #9932CC;"> Punción Lumbar 1</th> <!--Define un fondo para esta celda de encabezado.-->
                <th scope="col" style="background-color: #9932CC;"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $pl_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $pl_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $pl_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $pl_otros1; ?></td>
            </tr>



            <!--====================================PUNCIÓN LUMBAR 2============================-->
            <tr>
                <th scope="col"  style="background-color: #9932CC;"> Punción Lumbar 2</th>
                <th scope="col" style="background-color: #9932CC;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $pl_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $pl_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $pl_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $pl_otros2; ?></td>
            </tr>



   <!--====================================PUNCIÓN LUMBAR 3============================-->
            <tr>
                <th scope="col"  style="background-color: #9932CC;"> Punción Lumbar 3</th>
                <th scope="col" style="background-color: #9932CC;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $pl_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $pl_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $pl_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $pl_otros3; ?></td>
            </tr>
 <!--=================================== INTUBACIÓN ============================-->
            <tr>
                <th scope="col"  style="background-color: #9400db;"> Intubación 1</th>
                <th scope="col" style="background-color: #9400db;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $ib_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $ib_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $ib_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $ib_otros1; ?></td>
            </tr>
 <!--=================================== INTUBACIÓN 2 ============================-->
            <tr>
                <th scope="col"  style="background-color: #9400db;"> Intubación 2 </th>
                <th scope="col" style="background-color: #9400db;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $ib_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $ib_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $ib_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $ib_otros2; ?></td>
            </tr>
            <!--=================================== INTUBACIÓN 3============================-->
            <tr>
                <th scope="col"  style="background-color: #9400db;"> Intubación 3</th>
                <th scope="col" style="background-color: #9400db;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $ib_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $ib_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $ib_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $ib_otros3; ?></td>
            </tr>
 <!--=================================== CVC 1============================-->
            <tr>
                <th scope="col"  style="background-color: #8a2be2;"> CVC 1 </th>
                <th scope="col" style="background-color: #8a2be2;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo de CVC</td>
                <td><?php echo $cv_TpoCVC1; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $cv_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $cv_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $cv_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $cv_otros1; ?></td>
            </tr>

 <!--=================================== CVC 2============================-->
            <tr>
                <th scope="col"  style="background-color: #8a2be2;"> CVC 2 </th>
                <th scope="col" style="background-color: #8a2be2;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo de CVC</td>
                <td><?php echo $cv_TpoCVC2; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $cv_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $cv_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $cv_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $cv_otros2; ?></td>
            </tr>

        <!--=================================== CVC 3============================-->
            <tr>
                <th scope="col"  style="background-color: #8a2be2;"> CVC 3 </th>
                <th scope="col" style="background-color: #8a2be2;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo de CVC</td>
                <td><?php echo $cv_TpoCVC3; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $cv_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $cv_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $cv_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $cv_otros3; ?></td>
            </tr>

  <!--=================================== PARACENTESIS 1 ============================-->
            <tr>
                <th scope="col"  style="background-color: #9370db;"> Paracentesis 1 </th>
                <th scope="col" style="background-color: #9370db;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $pt_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $pt_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $pt_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $pt_otros1; ?></td>
            </tr>


            
  <!--=================================== PARACENTESIS 2 ============================-->
            <tr>
                <th scope="col"  style="background-color: #9370db;"> Paracentesis 2 </th>
                <th scope="col" style="background-color: #9370db;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $pt_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $pt_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $pt_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $pt_otros2; ?></td>
            </tr>


              <!--=================================== PARACENTESIS 3 ============================-->
              <tr>
                <th scope="col"  style="background-color: #9370db;"> Paracentesis 3 </th>
                <th scope="col" style="background-color: #9370db;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $pt_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $pt_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $pt_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $pt_otros3; ?></td>
            </tr>

    <!--=================================== BIOPSIA PIEL 1 ============================-->
            <tr>
                <th scope="col"  style="background-color: #ba55d3;"> Biopsia Piel 1 </th>
                <th scope="col" style="background-color: #ba55d3;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bp_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bp_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bp_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bp_otros1; ?></td>
            </tr>
<!--=================================== BIOPSIA PIEL 2 ============================-->
            <tr>
                <th scope="col"  style="background-color: #ba55d3;"> Biopsia Piel 2 </th>
                <th scope="col" style="background-color: #ba55d3;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bp_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bp_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bp_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bp_otros2; ?></td>
            </tr>

            <!--=================================== BIOPSIA PIEL 3 ============================-->
            <tr>
                <th scope="col"  style="background-color: #ba55d3;"> Biopsia Piel 3 </th>
                <th scope="col" style="background-color: #ba55d3;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bp_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bp_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bp_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bp_otros3; ?></td>
            </tr>

    <!--===================================   BIOPSIAS TEJIDO CELULAR SUBC 1 ============================-->
            <tr>
                <th scope="col"  style="background-color: #9f58a4;"> Biopsia Tejido Celular SUBC 1 </th>
                <th scope="col" style="background-color: #9f58a4;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bc_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bc_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bc_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bc_otros1; ?></td>
            </tr>


            <!--===================================   BIOPSIAS TEJIDO CELULAR SUBC 2 ============================-->
            <tr>
                <th scope="col"  style="background-color: #9f58a4;"> Biopsia Tejido Celular SUBC 2 </th>
                <th scope="col" style="background-color: #9f58a4;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bc_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bc_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bc_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bc_otros2; ?></td>
                
    <!--===================================   BIOPSIAS TEJIDO CELULAR SUBC 3 ============================-->
            <tr>
                <th scope="col"  style="background-color: #9f58a4;"> Biopsia Tejido Celular SUBC 3 </th>
                <th scope="col" style="background-color: #9f58a4;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bc_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bc_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bc_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bc_otros3; ?></td>
            </tr>
   <!--===================================   BIOPSIA TIROIDES  1============================-->
            <tr>
                <th scope="col"  style="background-color: #b246f2;"> Biopsia Tiroides 1 </th>
                <th scope="col" style="background-color: #b246f2;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bt_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bt_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bt_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bt_otros1; ?></td>
            </tr>
   <!--===================================   BIOPSIA TIROIDES  2============================-->
            <tr>
                <th scope="col"  style="background-color: #b246f2;"> Biopsia Tiroides 2 </th>
                <th scope="col" style="background-color: #b246f2;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bt_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bt_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bt_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bt_otros2; ?></td>
            </tr>

        <!--===================================   BIOPSIA TIROIDES  3 ============================-->
            <tr>
                <th scope="col"  style="background-color: #b246f2;"> Biopsia Tiroides 3 </th>
                <th scope="col" style="background-color: #b246f2;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $bt_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $bt_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $bt_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $bt_otros3; ?></td>
            </tr>

    <!--===================================   TORACOCENTESIS 1============================-->
            <tr>
                <th scope="col"  style="background-color: #ee80ee;"> Toracocentesis 1 </th>
                <th scope="col" style="background-color: #ee80ee;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $tora_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $tora_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $tora_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $tora_otros1; ?></td>
            </tr>
<!--===================================   TORACOCENTESIS 2============================-->
            <tr>
                <th scope="col"  style="background-color: #ee80ee;"> Toracocentesis 2 </th>
                <th scope="col" style="background-color: #ee80ee;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $tora_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $tora_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $tora_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $tora_otros2; ?></td>
            </tr>
<!--===================================   TORACOCENTESIS 3 ============================-->
            <tr>
                <th scope="col"  style="background-color: #ee80ee;"> Toracocentesis 3 </th>
                <th scope="col" style="background-color: #ee80ee;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $tora_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $tora_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $tora_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $tora_otros3; ?></td>
            </tr>

            <!--===================================   ARTROCENTESIS 1 ============================-->
            <tr>
                <th scope="col"  style="background-color: #dda0dd;"> Artrocentesis 1 </th>
                <th scope="col" style="background-color: #dda0dd;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $at_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $at_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $at_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $at_otros1; ?></td>
            </tr>
            <!--===================================   ARTROCENTESIS 2 ============================-->
            <tr>
                <th scope="col"  style="background-color: #dda0dd;"> Artrocentesis 2 </th>
                <th scope="col" style="background-color: #dda0dd;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $at_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $at_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $at_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $at_otros2; ?></td>
            </tr>

            <!--===================================   ARTROCENTESIS 3 ============================-->
            <tr>
                <th scope="col"  style="background-color: #dda0dd;"> Artrocentesis 3 </th>
                <th scope="col" style="background-color: #dda0dd;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $at_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $at_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $at_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $at_otros3; ?></td>
            </tr>

            <!--===================================   ASPIRACION DE MO 1 ============================-->
            <tr>
                <th scope="col"  style="background-color: #d8bfd8;"> Aspiración  de MO 1  </th>
                <th scope="col" style="background-color: #d8bfd8;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $mo_intento1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $mo_comp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $mo_TpoComp1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $mo_otros1; ?></td>
            </tr>

            <!--===================================   ASPIRACION DE MO 2 ============================-->
            <tr>
                <th scope="col"  style="background-color: #d8bfd8;"> Aspiración  de MO 2  </th>
                <th scope="col" style="background-color: #d8bfd8;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $mo_intento2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $mo_comp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $mo_TpoComp2; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $mo_otros2; ?></td>
            </tr>
                        <!--===================================   ASPIRACION DE MO 3 ============================-->
                        <tr>
                <th scope="col"  style="background-color: #d8bfd8;"> Aspiración  de MO 3 </th>
                <th scope="col" style="background-color: #d8bfd8;"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Intento</td>
                <td><?php echo $mo_intento3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $mo_comp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tipo de complicaciones</td>
                <td><?php echo $mo_TpoComp3; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otra Complicación</td>
                <td><?php echo $mo_otros3; ?></td>
            </tr>


        
            

            

        </tbody>
    </table>

</body>
</html>