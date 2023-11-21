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
        <thead>
            
            <tr>
                <th scope="col"> Datos Generales</th>
                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Nacimiento</td>
                <td><?php echo $fecha_nacimiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estado Civil</td>
                <td><?php echo $estado_civil; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estado</td>
                <td><?php echo $Estado1; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Municipio</td>
                <td><?php echo $Municipio1; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Referenciado</td>
                <td><?php echo $referencia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Unidad de Referencia</td>
                <td><?php echo $unidad_referencia; ?></td>
            </tr>

            <!--CONMORBILIDADES-->
            

            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)"> Somatometría</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Talla</td>
                <td><?php echo $talla; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Peso</td>
                <td><?php echo $peso; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">IMC</td>
                <td><?php echo $imc; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado IMC</td>
                <td><?php echo $descripcionIMC; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Circunferencia</td>
                <td><?php echo $circunferencia; ?></td>
            </tr>

<!--=================================Atención médica============================-->
            
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)"> Factores de Riesgo</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Sin Registro</td>
                <td><?php echo $sinRegistro; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Relaciones Sexuales</td>
                <td><?php echo $relacionesSex; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Transfusiones</td>
                <td><?php echo $transfusiones; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Drogas Endovenosas</td>
                <td><?php echo $drogasEnd; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Piercing</td>
                <td><?php echo $piercing; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Presidiario</td>
                <td><?php echo $presidiario; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Expresidiario</td>
                <td><?php echo $expresidiario; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Situación de Calle</td>
                <td><?php echo $situacionCalle; ?></td>
            </tr>

            

            <!--===================================PREVIA APLICACIÓN DE HIERRO====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)"> Relaciones Sexuales</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">Pacientes con VIH</td>
                <td><?php echo $vih; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Pacientes con Hepatitis</td>
                <td><?php echo $hepatitis; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Sexo Servidoras</td>
                <td><?php echo $sexoServidoras; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Parejas Ocasionales</td>
                <td><?php echo $parejasOcasionales; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Pacientes con Toxicomanias</td>
                <td><?php echo $pacienteToxicomanias; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ninguna</td>
                <td><?php echo $ninguna; ?></td>
            </tr>

            

            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Antecedentes Personales Patológicos </th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Hemofilia</td>
                <td><?php echo $hemofilia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">ERC en Hemodialisis</td>
                <td><?php echo $ERC; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Trabajador de la Salud</td>
                <td><?php echo $trabajadorSalud; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Transplante</td>
                <td><?php echo $transplante; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cirrosis</td>
                <td><?php echo $cirrosis; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Obesidad</td>
                <td><?php echo $obesidad; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Prediabetes</td>
                <td><?php echo $prediabetes; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Diabetes Mellitus</td>
                <td><?php echo $diabetesMellitus; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertensión Arterial</td>
                <td><?php echo $hipertencionArt; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Alcoholismo</td>
                <td><?php echo $alcoholismo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Virus HB</td>
                <td><?php echo $HB; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $ninguno_Ant; ?></td>
            </tr>

            

            <!--===================================Procedimiento Qx Programado Tipo cirugía====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Atención Clínica</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>

            

            <tr>
                <td class="estilo-celda">Atención Inicial</td>
                <td><?php echo $atencion_inicial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Carga Viral Inicial</td>
                <td><?php echo $carga_inicial; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Carga Viral Dx</td>
                <td><?php echo $cargaDX; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Respuesta Viral Sostenida</td>
                <td><?php echo $respuestaViral; ?></td>
            </tr>


            <tr>
                <td style="color:maroon; font-size: 13px;"># RVS</td>
                <td><?php echo $RVS; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha RVS</td>
                <td><?php echo $fechaRVS; ?></td>
            </tr>


            <!--===================================Durante Procedimiento====================================-->
           
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Laboratorios</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">AST</td>
                <td><?php echo $AST; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">BUN</td>
                <td><?php echo $BUN; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">CREAT</td>
                <td><?php echo $CREAT; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">ALT</td>
                <td><?php echo $ALT; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Plaquetas</td>
                <td><?php echo $plaquetas; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Albumina</td>
                <td><?php echo $albumina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Glucosa</td>
                <td><?php echo $glucosa; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">HBA1C</td>
                <td><?php echo $HBA1C; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Trigliceridos</td>
                <td><?php echo $trigliceridos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">HDL</td>
                <td><?php echo $HDL; ?></td>
            </tr>

           


<!--===================================Post Infusión====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Ultrasonido Hepático</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>

            

            <tr>
                <td class="estilo-celda">Ultrasonido Hepático</td>
                <td><?php echo $ultrasonido; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Resultado Ultrasonido</td>
                <td><?php echo $resultadoUltra; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Esteatosis</td>
                <td><?php echo $esteatosis; ?></td>
            </tr>

           

            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->

            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Índice de Enfermedad Hepática</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">FIB 4</td>
                <td><?php echo $FIB4; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Resultado FIB 4</td>
                <td><?php echo $FIB4resultado; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">NAFLD</td>
                <td><?php echo $NAFLD; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado NAFLD</td>
                <td><?php echo $NAFLDresultado; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">APRI</td>
                <td><?php echo $APRI; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado APRI</td>
                <td><?php echo $APRIresultado; ?></td>
            </tr>

            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Tratamiento</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Fecha Inicio Tratamiento</td>
                <td><?php echo $fecha_inicio; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Tratamiento</td>
                <td><?php echo $fecha_fin; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ribavirina</td>
                <td><?php echo $tratamiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Fin Tratamiento</td>
                <td><?php echo $ribavirina; ?></td>
            </tr>


            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(210, 173, 126 , 0.80)">Defunción</th>
                <th scope="col" style="background-color: rgb(210, 173, 126 , 0.80)"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Defunción</td>
                <td><?php echo $defuncion_paciente; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Causa</td>
                <td><?php echo $causa; ?></td>
            </tr>

        </tbody>
    </table>





</body>
</html>
       