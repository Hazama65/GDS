<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Diabetes Mellitus</title>
</head>
<body>
    
        <header style="text-align: center;">
                
                <div style=" padding: 20px; text-align: left;">
                        <a href="index.php">
                            <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                                <i class="bi bi-rewind-fill"></i>
                            </button>
                        </a>
                </div>

              

                    <h5>Diabetes Mellitus</h5>
                    <div style="padding: 20px; text-align: right;">
                        <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                            <i class="bi bi-power"></i> 
                        </button>
                    </div>
            </header>
            <br>

            <div class="container">

            <div style="background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>DATOS GENERALES</h6> 
            </div> 

            <div class="row">

            <div class="col-md-4" id="idcurp"> 
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" placeholder="CURP" style="font-size: 13px;">
                </div>

                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px; background">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                </div>
                <div class="col-md-4">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Escolaridad</strong>
                    <select name="Escolaridad" id="Escolaridad" class="form-control" style="font-size: 13px;">
                    <option value="Sin Registro">Seleccione</option>
                                <option value="">Primaria Completa</option>
                                <option value="">Primaria Incompleta</option>
                                <option value="">Secundaria Completa</option>
                                <option value="">Secundaria Incompleta</option>
                                <option value="">Preparatoria Completa</option>
                                <option value="">Preparatoria Incompleta</option>
                                <option value ="">Licenciatura Completa </otion>
                                <option value="">Licenciatura Incompleta</option>
                                <option value="">Doctorado Completo</option>
                                <option value="">Doctorado Incompleto</option>
                                <option value="">Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estado Civil</strong>
                    <select name="Estadocivil" id="Estadocivil" class="form-control" style="font-size: 13px;">
                    <option value="Sin Registro">Seleccione</option>
                                <option value="Soltera">Soltero</option>
                                <option value="Casada">Casado</option>
                                <option value="Viuda">Viudo</option>
                                <option value="Divorciada">Divorciado</option>
                                <option value="Concubinato">Concubinato</option>
                                <option value="Separada">Separado</option>
                                <option value="">Sin Registro</option>
                            </select>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estado</strong>
                    <input type="text" class="form-control" id="estado" name="estado" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Municipio</strong>
                    <input type="text" class="form-control" id="municipio" name="municipio" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Referencia</strong>
                    <input type="text" class="form-control" id="referencia" name="referencia" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Circunferencia Abdominal</strong>
                    <input type="number" step="any" class="form-control" id="circunferencia"  name="circunferencia" style="font-size: 13px;" >
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Derechohabiencia</strong>
                    <select name="derechohabiencia" id="derechohabiencia" class="form-control" style="font-size: 14px;" onchange="mostrarCampos()">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="col-md-4" id="estudio_socioeconomico_field">
                    <strong style="font-size: 14px;">Estudio Socioeconómico</strong>
                    <select name="estudio_socioeconomico" id="estudio_socioeconomico" class="form-control" style="font-size: 14px;" onchange="mostrarNivel()">
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="col-md-4" id="nivel_field">
                    <strong style="font-size: 14px;">Nivel</strong>
                    <select name="nivel" id="nivel" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Nx">Nx</option>
                        <option value="N1">N1</option>
                        <option value="N2">N2</option>
                        <option value="N3">N3</option>
                        <option value="N4">N4</option>
                        <option value="N5">N5</option>
                        <option value="N6">N6</option>
                        <option value="N7">N7</option>
                    </select>
                </div> <br>
<br>
                
<!-- ***********************************ANTECEDENTES HEREDOFAMILIARES*********************************** -->
                <div class="col-md-12" >
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        ANTECEDENTES HEREDOFAMILIARES</h5>
                    </div>
                </div>
<!--===============AH: DIABETES=======================-->

                <div class="col-md-12" id="ah_diabetes">
                    <strong style="font-size: 14px;">Diabetes Mellitus </strong>
                    <select name="diabetes" id="diabetesSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="si">Si</option>
                    </select>
                </div>    

        
<!--===============HEREDOFAMILIARES DIABETES=======================-->
                
        <!--===============sI SELECCIONAMOS PADRE =======================-->
            <div class="container" id="heredo_familia" >
                    
            <div class ="row">
                
            <div class="col-md-3" id="PadreField">
                    <span style="font-size: 14px;">Padre - Tipo DM</span>
                    <select name="tipoPadre" id="tipoPadre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="tipo_1">Tipo 1</option>
                                <option value="tipo_2">Tipo 2</option>
                                <option value="Gestacional">Gestacional</option>
                                <option value="MODY">MODY</option>
                                <option value="LADA">LADA</option>
                                <option value="Otra">Otra</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS MADRE =======================-->
                    <div class="col-md-3" id="MadreField" >
                        <span style="font-size: 14px;" >Madre - Tipo DM</span>
                            <select name="tipo_Madre" id="tipoMadre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="tipo_1">Tipo 1</option>
                                <option value="tipo_2">Tipo 2</option>
                                <option value="Gestacional">Gestacional</option>
                                <option value="MODY">MODY</option>
                                <option value="LADA">LADA</option>
                                <option value="Otra">Otra</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                    
                    <div class="col-md-3" id="Abuelo_MaternoField" >
                        <span style="font-size: 14px;" >Abuelo Materno - Tipo DM</span>
                            <select name="tipoAbueloMaterno" id="tipoAbueloMaterno" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="tipo_1">Tipo 1</option>
                                <option value="tipo_2">Tipo 2</option>
                                <option value="Gestacional">Gestacional</option>
                                <option value="MODY">MODY</option>
                                <option value="LADA">LADA</option>
                                <option value="Otra">Otra</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA =======================-->      
                    <div class="col-md-3" id="Abuela_MaternaField">
                        <span style="font-size: 14px;" >Abuela Materna - Tipo DM</span>
                            <select name="tipoAbuelaMaterna" id="tipoAbuelaMaterna" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="tipo_1">Tipo 1</option>
                                <option value="tipo_2">Tipo 2</option>
                                <option value="Gestacional">Gestacional</option>
                                <option value="MODY">MODY</option>
                                <option value="LADA">LADA</option>
                                <option value="Otra">Otra</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO =======================-->
                    <div class="col-md-3" id="Abuelo_PaternoField">
                        <span style="font-size: 14px;" >Abuelo Paterno - Tipo DM</span>
                            <select name="tipoAbueloPaterno" id="tipoAbueloPaterno" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="tipo_1">Tipo 1</option>
                                <option value="tipo_2">Tipo 2</option>
                                <option value="Gestacional">Gestacional</option>
                                <option value="MODY">MODY</option>
                                <option value="LADA">LADA</option>
                                <option value="Otra">Otra</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO =======================-->

                    <div class="col-md-3" id="Abuela_PaternaField" >
                        <span style="font-size: 14px;">Abuela Paterna - Tipo DM</span>
                            <select name="tipoAbuelaPaterna" id="tipoAbuelaPaterna" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="tipo_1">Tipo 1</option>
                                <option value="tipo_2">Tipo 2</option>
                                <option value="Gestacional">Gestacional</option>
                                <option value="MODY">MODY</option>
                                <option value="LADA">LADA</option>
                                <option value="Otra">Otra</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA =======================-->

                    <div class="col-md-3" id="HermanaField" >
                    <span style="font-size: 14px;">Número de Hermanas-DM </span>
                            <input type="number" step="any" class="form-control" id="num_hermanas" name="num_hermanas"  style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO =======================-->
                        
                    <div class="col-md-3" id="HermanoField">
                        <span style="font-size: 14px;" >Número de Hermanos- DM</span>
                        <input type="number" step="any" class="form-control" id="num_hermanos" name="num_hermanos"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div>  <!--===========DIV CONTAINER DIABETES ================--> <br>
                </div> <!--=========== DIV DEL ROW DE DIABETES ================-->
            
               

<!--===============     Hipertensión Arterial =======================-->
            
            <div class="col-md-12" id="ah_Hipertension">
                    <strong style="font-size: 14px;">Hipertensión Arterial </strong>
                    <select name="hipertension" id="hipertensionSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="si">Si</option>
                    </select>
                </div>  

<!--===============Hipertensión Arterial Heredofamiliar  =======================-->

                <div class="container" id="HAS_familia" >
                    
        <div class ="row">
                
            <div class="col-md-3" id="PadreHAS">
                    <span style="font-size: 14px;">Padre - HAS</span>
                    <select name="HAS_Padre" id="HAS_Padre" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS MADRE  HAS=======================-->
                    <div class="col-md-3" id="MadreHAS" >
                        <span style="font-size: 14px;" >Madre - HAS</span>
                            <select name="HAS_Madre" id="HAS_Madre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO MATERNO HAS=======================-->
                    
                    <div class="col-md-3" id="Abuelo_MaternoHAS" >
                        <span style="font-size: 14px;" >Abuelo Materno - HAS</span>
                            <select name="AbueloM_HAS" id="AbueloM_HAS" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELA MATERNA HAS  =======================-->      
                    <div class="col-md-3" id="Abuela_MaternaHAS" >
                        <span style="font-size: 14px;" >Abuela Materno - HAS</span>
                            <select name="AbuelaM_HAS" id="AbuelaM_HAS" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS ABUELO PATERNO HAS =======================-->
                    <div class="col-md-3" id="Abuelo_PaternoHAS" >
                        <span style="font-size: 14px;" >Abuelo Paterno - HAS</span>
                        <select name="AbueloP_HAS" id="AbueloP_HAS" class="form-control" style="font-size: 14px;">
                            <option value="negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    
        <!--===============sI SELECCIONAMOS ABUELA PATERNA HAS =======================-->
                    <div class="col-md-3" id="Abuela_PaternaHAS" >
                        <span style="font-size: 14px;" >Abuela Paterna  - HAS</span>
                            <select name="AbuelaP_HAS" id="AbuelaP_HAS" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
        <!--===============sI SELECCIONAMOS HERMANA  HAS =======================-->

                    <div class="col-md-3" id="HermanaHAS" >
                    <span style="font-size: 14px;">Número de Hermanas- HAS </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasHAS" name="num_hermananum_hermanasHASs"  style="font-size: 14px;">
                    </div>
        <!--===============sI SELECCIONAMOS HERMANO  HAS =======================-->
                        
                    <div class="col-md-3" id="HermanoHAS">
                        <span style="font-size: 14px;" >Número de Hermanos- HAS</span>
                        <input type="number" step="any" class="form-control" id="num_hermanosHAS" name="num_hermanosHAS"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV HAS ================--><br> 

                </div> <!--=========== DIV DEL ROW DE HAS ================-->

            

        <!--=========== HEREDOFAMILIARES DE ENFERMEDADES CARDIOVASCULAR  ================-->

            <div class="col-md-12" id="ah_evc">
                <strong style="font-size: 14px;">Enfermedad Cardiovascular</strong>
                <select name="EVC" id="EVCSelect" class="form-control" style="font-size: 14px;" onchange="mostrarOcultarSecciones()">
                    <option value="Negado">Negado</option>
                    <option value="si">Si</option>
                </select>
            </div>
                    <!--===========  EVENTO VASCULAR CEREBRAL  ================-->

            <div class="col-md-12" id="ah_ecv">
                <strong style="font-size: 14px;">Evento Vascular Cerebral</strong>
                <select name="ECV" id="ECVSelect" class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="si">Si</option>
                </select>
            </div> 

            <!--=========== HEREDOFAMILIARES DE EVENTO VASCULAR CEREBRAL  ================-->

                <div class="container" id="ECV_familia" >
                    
        <div class ="row">
                
            <div class="col-md-3" id="PadreECV">
                    <span style="font-size: 14px;">Padre - ECV</span>
                    <select name="ECV_Padre" id="ECV_Padre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                    <!--===============sI SELECCIONAMOS MADRE  ECV=======================-->
                    <div class="col-md-3" id="MadreECV" >
                        <span style="font-size: 14px;" >Madre - ECV</span>
                            <select name="ECV_Madre" id="ECV_Madre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO MATERNO ECV=======================-->
                    
                    <div class="col-md-3" id="Abuelo_MaternoECV" >
                        <span style="font-size: 14px;" >Abuelo Materno - ECV</span>
                            <select name="AbueloM_ECV" id="AbueloM_ECV" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
                <!--===============sI SELECCIONAMOS ABUELA MATERNA ECV  =======================-->      
                    <div class="col-md-3" id="Abuela_MaternaECV" >
                        <span style="font-size: 14px;" >Abuela Materno - ECV </span>
                            <select name="AbuelaM_ECV" id="AbuelaM_ECV" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO PATERNO ECV =======================-->
                   <div class="col-md-3" id="Abuelo_PaternoECV" >
                        <span style="font-size: 14px;" >Abuelo Paterno - ECV</span>
                        <select name="AbueloP_ECV" id="AbueloP_ECV" class="form-control" style="font-size: 14px;">
                            <option value="negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    
<!--===============sI SELECCIONAMOS ABUELA PATERNA ECV =======================-->
                    <div class="col-md-3" id="Abuela_PaternaECV" >
                        <span style="font-size: 14px;" >Abuela Paterna  - ECV</span>
                            <select name="AbuelaP_ECV" id="AbuelaP_ECV" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
<!--===============sI SELECCIONAMOS HERMANA  ECV =======================-->

                    <div class="col-md-3" id="HermanaECV" >
                    <span style="font-size: 14px;">Número de Hermanas- ECV </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasECV" name="num_hermanasECV"  style="font-size: 14px;">
                    </div>
<!--===============sI SELECCIONAMOS HERMANO ECV =======================-->
                        
                    <div class="col-md-3" id="HermanoECV">
                        <span style="font-size: 14px;" >Número de Hermanos- ECV</span>
                        <input type="number" step="any" class="form-control" id="num_hermanosECV" name="num_hermanosECV"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV ECV ================--> <br> 

                </div> <!--=========== DIV DEL ROW DE ECV ================-->

            
                
                        <!--=========== Cardiopatía isquémica ================--> 
            
                        <div class="col-md-12" id="ah_ci">
                    <strong style="font-size: 14px;">Cardiopatía isquémica</strong>
                    <select name="Cardiopatia" id="CardiopatiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="si">Si</option>
                    </select>
                </div>

                <div class="container" id="CI_familia" >
                    
            <div class ="row">
                
            <!--===============sI SELECCIONAMOS PADRE  Cardiopatía isquémica=======================-->
        
            <div class="col-md-3" id="PadreCI">
                    <span style="font-size: 14px;">Padre - CI</span>
                    <select name="CI_Padre" id="CI_Padre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                    <!--===============sI SELECCIONAMOS MADRE  Cardiopatía isquémica=======================-->
                    <div class="col-md-3" id="MadreCI" >
                        <span style="font-size: 14px;" >Madre - CI</span>
                            <select name="CI_Madre" id="CI_Madre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO MATERNO Cardiopatía isquémica======================-->
                    
                    <div class="col-md-3" id="Abuelo_MaternoCI" >
                        <span style="font-size: 14px;" >Abuelo Materno - CI</span>
                            <select name="AbueloM_CI" id="AbueloM_CI" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
                <!--===============sI SELECCIONAMOS ABUELA MATERNA Cardiopatía isquémica =======================-->      
                    <div class="col-md-3" id="Abuela_MaternaCI" >
                        <span style="font-size: 14px;" >Abuela Materno - CI </span>
                            <select name="AbuelaM_CI" id="AbuelaM_CI" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO PATERNO Cardiopatía isquémica =======================-->
                   <div class="col-md-3" id="Abuelo_PaternoCI" >
                        <span style="font-size: 14px;" >Abuelo Paterno - CI</span>
                        <select name="AbueloP_CI" id="AbueloP_CI" class="form-control" style="font-size: 14px;">
                            <option value="negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    
<!--===============sI SELECCIONAMOS ABUELA PATERNA Cardiopatía isquémica =======================-->
                    <div class="col-md-3" id="Abuela_PaternaCI" >
                        <span style="font-size: 14px;" >Abuela Paterna  - CI</span>
                            <select name="AbuelaP_CI" id="AbuelaP_CI" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
<!--===============sI SELECCIONAMOS HERMANA Cardiopatía isquémica =======================-->

                    <div class="col-md-3" id="HermanaCI" >
                    <span style="font-size: 14px;">Número de Hermanas- CI  </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasECV" name="num_hermanasECV"  style="font-size: 14px;">
                    </div>
<!--===============sI SELECCIONAMOS HERMANO Cardiopatía isquémica =======================-->
                        
                    <div class="col-md-3" id="HermanoCI">
                        <span style="font-size: 14px;" >Número de Hermanos- CI </span>
                        <input type="number" step="any" class="form-control" id="num_hermanosECV" name="num_hermanosECV"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV Cardiopatía isquémica ================--> <br> 

                </div> <!--=========== DIV DEL ROW DE Cardiopatía isquémica================-->


    <!--========= DISLIPIDEMIA ================-->

            <div class="col-md-12" id="ah_dislipidemia">
                <strong style="font-size: 14px;">Dislipidemia</strong>
                <select name="dislipidemia" id="dislipidemiaSelect" class="form-control" style="font-size: 14px;" onchange="mostrarOcultarSeccionesdislipidemias()">
                    <option value="Negado">Negado</option>
                    <option value="si">Si</option>
                </select>
            </div>
                                                    <!--========= HIPERTRIGLICERIDEMIA ================-->


            <div class="col-md-12" id="ah_trigliceridemia">
                <strong style="font-size: 14px;">Hipertrigliceridemia</strong>
                <select name="trigliceridemia" id="trigliceridemiaSelect" class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="si">Si</option>
                </select>
            </div> 
            
                <div class="container" id="trigliceridemia_familia" >
                    
        <div class ="row">
                
            <div class="col-md-3" id="Padre_trigliceridemia">
                    <span style="font-size: 14px;">Padre - HTG</span>
                    <select name="trigliceridemia_Padre" id="trigliceridemia_Padre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                    <!--===============sI SELECCIONAMOS MADRE  HTG=======================-->
                    <div class="col-md-3" id="Madre_trigliceridemia" >
                        <span style="font-size: 14px;" >Madre - HTG</span>
                            <select name="HTG_Madre" id="HTG_Madre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO MATERNO HTG=======================-->
                    
                    <div class="col-md-3" id="AbueloMaterno_trigliceridemia" >
                        <span style="font-size: 14px;" >Abuelo Materno - HTG</span>
                            <select name="AbueloM_HTG" id="AbueloM_HTG" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
                <!--===============sI SELECCIONAMOS ABUELA MATERNA HTG  =======================-->      
                    <div class="col-md-3" id="AbuelaMaterna_trigliceridemia" >
                        <span style="font-size: 14px;" >Abuela Materno - HTG </span>
                            <select name="AbuelaM_HTG" id="AbuelaM_HTG" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO PATERNO HTG =======================-->
                   <div class="col-md-3" id="AbueloPaterno_trigliceridemia" >
                        <span style="font-size: 14px;" >Abuelo Paterno - HTG</span>
                        <select name="AbueloP_HTG" id="AbueloP_HTG" class="form-control" style="font-size: 14px;">
                            <option value="negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    
<!--===============sI SELECCIONAMOS ABUELA PATERNA HTG =======================-->
                    <div class="col-md-3" id="AbuelaPaterna_trigliceridemia" >
                        <span style="font-size: 14px;" >Abuela Paterna  - HTG</span>
                            <select name="AbuelaPaterna_HTG" id="AbuelaPaterna_HTG" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
<!--===============sI SELECCIONAMOS HERMANA  HTG =======================-->

                    <div class="col-md-3" id="Hermana_trigliceridemia" >
                    <span style="font-size: 14px;">Número de Hermanas- HTG  </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasHTG" name="num_hermanasHTG"  style="font-size: 14px;">
                    </div>
<!--===============sI SELECCIONAMOS HERMANO HTG =======================-->
                        
                    <div class="col-md-3" id="Hermano_trigliceridemia">
                        <span style="font-size: 14px;" >Número de Hermanos- HTG </span>
                        <input type="number" step="any" class="form-control" id="num_hermanosHTG" name="num_hermanosHTG"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV HTG ================--> <br> 

                </div> <!--=========== DIV DEL ROW DE HTG ================-->

                <!--=========== DIV DEL ROW DE HTG ================-->



    <!--=========== Hipercolesterolemia================-->

                <div class="col-md-12" id="ah_Hipercolesterolemia">
                    <strong style="font-size: 14px;">Hipercolesterolemia</strong>
                    <select name="Hipercolesterolemia" id="HipercolesterolemiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="si">Si</option>
                    </select>
                </div> 
            
                <div class="container" id="Hipercolesterolemia_familia" >
                    
        <div class ="row">
                
            <div class="col-md-3" id="Padre_LDL">
                    <span style="font-size: 14px;">Padre -H-LDL</span>
                    <select name="LDL_Padre" id="LDL_Padre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
            <!--===============sI SELECCIONAMOS MADRE  H-LDL=======================-->
                    <div class="col-md-3" id="Madre_LDL">
                        <span style="font-size: 14px;" >Madre - H-LDL</span>
                            <select name="LDL_Madre" id="LDL_Madre" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO MATERNO H-LDL =======================-->
                    
                    <div class="col-md-3" id="AbueloMaterno_LDL">
                        <span style="font-size: 14px;" >Abuelo Materno - H-LDL</span>
                            <select name="AbueloM_LDL" id="AbueloM_LDL" class="form-control" style="font-size: 14px;">
                                <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELA MATERNA H-LDL=======================-->      
                    <div class="col-md-3" id="AbuelaMaterna_LDL">
                        <span style="font-size: 14px;" >Abuela Materna-H-LDL </span>
                            <select name="AbuelaM_LDL" id="AbuelaM_LDL" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
            <!--===============sI SELECCIONAMOS ABUELO PATERNO H-LDL =======================-->
                   <div class="col-md-3" id="AbueloPaterno_LDL">
                        <span style="font-size: 14px;" >Abuelo Paterno - H-LDL</span>
                        <select name="AbueloP_LDL" id="AbueloP_LDL" class="form-control" style="font-size: 14px;">
                            <option value="negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>  
                    
            <!--===============sI SELECCIONAMOS ABUELA PATERNA H-LDL =======================-->
                    <div class="col-md-3" id="AbuelaPaterna_LDL" >
                        <span style="font-size: 14px;" >Abuela Paterna  - H-LDL</span>
                            <select name="AbuelaP_LDL" id="AbuelaP_LDL" class="form-control" style="font-size: 14px;">
                                    <option value="negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                    </div>
            <!--===============sI SELECCIONAMOS HERMANA  LDL =======================-->

                    <div class="col-md-3" id="Hermana_LDL" >
                    <span style="font-size: 14px;">Número de Hermanas- H-LDL  </span>
                            <input type="number" step="any" class="form-control" id="num_hermanasLDL" name="num_hermanasLDL"  style="font-size: 14px;">
                    </div>
            <!--===============sI SELECCIONAMOS HERMANO LDL =======================-->
                        
                    <div class="col-md-3" id="Hermano_trigliceridemia">
                        <span style="font-size: 14px;" >Número de Hermanos- H-LDL</span>
                        <input type="number" step="any" class="form-control" id="num_hermanosLDL" name="num_hermanosLDL"  oninput="mostrarCamposHermanos()" style="font-size: 14px;">
                    </div>

                    </div><!--===========DIV LDL================--> <br> 

                </div> <!--=========== DIV DEL ROW DE LDL================-->  


<!-- **********************************COMORBILIDADES*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:10px">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        COMORBILIDADES</h5>
                    </div>
                </div>
                
    <!--=========== -	Enfermedad hepática grasa no alcohólica ================-->
                <div class="col-md-6" id="com_hepato">
                    <strong style="font-size: 14px;">Enfermedad hepática grasa no alcohólica </strong>
                    <select name="hepatica" id="HepaticaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Esteatosis">Esteatosis</option>
                        <option value="Esteatohepatitis">Esteatohepatitis</option>
                        <option value="Cirrosis">Cirrosis</option>
                    </select>
                </div> 

                <!--=========== SELECCION DE CIRROSIS Y CHILD-PUGH ================-->
                <div class="col-md-6" id="com_Child">
                    <strong style="font-size: 14px;"> Child-Pugh </strong>
                    <select name="child_pugh" id="CirrosisSelect" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div> 

<!--===========Dislipidemia ================-->
                <div class="col-md-6" id="com_dislipidemia">
                    <strong style="font-size: 14px;">Dislipidemia </strong>
                    <select name="dislipidemia" id="DislipidemiaSelect" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Hipertrigliceridemia">Hipertrigliceridemia</option>
                        <option value="Hipercolesterolemia">Hipercolesterolemia</option>
                        <option value="Hipoalfalipoproteinemia">Hipoalfalipoproteinemia</option>
                        <option value="Mixta">Mixta</option>
                    </select>
                </div> 

<!--===========Distiroidismo ================-->
                <div class="col-md-6" id="com_distiroidismo ">
                    <strong style="font-size: 14px">Distiroidismo </strong>
                    <select name="Distiroidismo " id="DistiroidismoSelect" class="form-control" style="font-size: 14px">
                    <option value="Negado">Negado</option>
                    <option value="Hipotiroidismo">Hipotiroidismo</option>
                    <option value="Hipertiroidismo">Hipertiroidismo</option>
                    <option value="Bocio">Bocio</option>
                </select>
                </div>

    <!--===========  Cancer ================-->
                <div class="col-md-6" id="com_cancer">
                    <strong style="font-size: 14px">Cancer</strong>
                    <select name="cancer" id="CancerSelect" class="form-control" style="font-size: 14px">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                </select>
                </div>

    <!--===========  Insuficiencia Cardiaca ================-->  
                <div class="col-md-6" id="com_insuCardiaca">
                    <strong style="font-size: 14px">Insuficiencia Cardiaca</strong>
                    <select name="Insfuciencia_Cardiaca" id="InsuCardiacaSelect" class="form-control" style="font-size: 14px">
                    <option value="Negado">Negado</option>  
                    <option value="Si">Si</option> 
                </select>
                </div>


    <!--===========  Disritmias cardiacas ================-->
                <div class="col-md-6" id="com_Disritmiascardiacas">
                    <strong style="font-size: 14px">Disritmias cardiacas</strong>
                    <select name="Disritmias_cardiacas" id="DisritmiasSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

    <!--===========  Osteoporosis ================-->
                <div class="col-md-6" id="com_Osteoporosis">
                    <strong style="font-size: 14px">Osteoporosis</strong>
                    <select name="Osteoporosis" id="OsteoporosisSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

    <!--===========  Gota/Hiperuricemia  ================-->
                <div class="col-md-6" id="com_Gota">
                    <strong style="font-size: 14px">Gota/Hiperuricemia</strong>
                    <select name="Gota" id="GotaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

    <!--=========== Lupus Eritematoso Sistemico  ================-->
                <div class="col-md-6" id="com_LES">
                    <strong style="font-size: 14px">Lupus Eritematoso Sistemico</strong>
                    <select name="LES" id="LupusSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

    <!--=========== Artritris Reumatoide   ================-->
                <div class="col-md-6" id="com_atrtitis">
                    <strong style="font-size: 14px">Artritris Reumatoide</strong>
                    <select name="artritis" id="ArtritisSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

    <!--===========  Síndrome de Cushing    ================-->
                <div class="col-md-6" id="com_cushing">
                    <strong style="font-size: 14px">Síndrome de Cushing </strong>
                    <select name="Cushing" id="CushingSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>
                    <!--===========  Al seleeccionar  Cushing    ================-->
                    <div class="col-md-6" id="com_sindrome">
                    <strong style="font-size: 14px">Tipo de Cushing </strong>
                    <select name="Sindrome_Cushing" id="SindromeSelect" class="form-control" style="font-size: 14px">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exogeno">Exógeno</option>
                        <option value="Endogeno">Endógeno</option>
                    </select>
                </div>

<!-- **********************************LABORATORIOS*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        LABORATORIOS</h5>
                    </div>
                </div>
                
        <!--===============   Laboratorios -	TGO=======================-->       

                        <div class="col-md-2">
                            <strong style="font-size: 14px;">TGO</strong>
                            <input type="number" step="any" class="form-control" id="id_TGO" name="TGO" >
                        </div>
    <!--===============   Laboratorios -	TGP=======================-->      
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">TGP</strong>
                            <input type="number" step="any" class="form-control" id="id_TGP" name="TGP" >
                        </div>
    <!--===============   Laboratorios -	FA=======================-->    
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">FA</strong>
                            <input type="number" step="any" class="form-control" id="id_FA " name="FA" >
                        </div>
<!--===============   Laboratorios -	GGT=======================-->    
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">GGT</strong>
                            <input type="number" step="any" class="form-control" id="id_GGT" name="GGT" >
                        </div>
<!--===============   Laboratorios -	DHL=======================-->    
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">DHL</strong>
                            <input type="number" step="any" class="form-control" id="id_DHL" name="DHL" >
                        </div>
<!--===============   Laboratorios - Proteínas totales=======================-->   
                        <div class="col-md-2">
                            <strong style="font-size: 13px;">Proteínas totales</strong>
                            <input type="number" step="any" class="form-control" id="id_proteinastotales" name="Proteinas_totales" >
                        </div>
<!--===============   Laboratorios - Albumina=======================--> 
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Albumina</strong>
                            <input type="number" step="any" class="form-control" id="id_Albumina" name="Albumina" >
                        </div>
<!--===============   Laboratorios - Globulinas=======================--> 
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Globulinas</strong>
                            <input type="number" step="any" class="form-control" id="id_Globulinas" name="Globulinas" >
                        </div>
<!--===============   Laboratorios - Relación (A/G)=======================-->
                        <div class="col-md-2" id="relacionAG">
                            <strong style="font-size: 14px;">Relación (A/G)</strong>
                            <input type="number" step="any" class="form-control" id="id_relacion" name="relacion" >
                        </div>
<!--===============   Laboratorios - BT=======================-->
                        <div class="col-md-2" id="BT">
                            <strong style="font-size: 14px;">BT</strong>
                            <input type="number" step="any" class="form-control" id="id_BT" name="BT" >
                        </div>
<!--===============   Laboratorios - BD=======================-->
                        <div class="col-md-2" id="BT">
                            <strong style="font-size: 14px;">BD</strong>
                            <input type="number" step="any" class="form-control" id="id_BD" name="BD" >
                        </div>
<!--===============   Laboratorios - BI=======================-->
                        <div class="col-md-2" id="BT">
                            <strong style="font-size: 14px;">BI</strong>
                            <input type="number" step="any" class="form-control" id="id_BI" name="BI" >
                        </div>
<!--===============   Laboratorios - HB=======================-->
                        <div class="col-md-2" id="HB">
                            <strong style="font-size: 14px;">HB</strong>
                            <input type="number" step="any" class="form-control" id="id_HB" name="HB" >
                        </div>
<!--===============   Laboratorios - VSG=======================-->
                        <div class="col-md-2" id="VSG">
                            <strong style="font-size: 14px;">VSG</strong>
                            <input type="number" step="any" class="form-control" id="id_VSG" name="VSG" >
                        </div>
<!--===============   Laboratorios - OHD=======================-->
                        <div class="col-md-2" id="25-OHD">
                            <strong style="font-size: 14px;">25-OHD</strong>
                            <input type="number" step="any" class="form-control" id="id_OHD" name="OHD" >
                        </div>
<!--===============   Laboratorios - creatinina=======================-->
                        <div class="col-md-3">
                            <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI Creatinina</a></i>
                            <input type="number" step="any" class="form-control" id="creatinina" name="creatinina" onchange="calcularNefropatia()">
                        </div>
<!--===============   Laboratorios - cistatina=======================-->
                        <div class="col-md-3">
                            <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI creatinina-cistatina</a></i>
                            <input type="number" step="any" class="form-control" id="cistatina" name="cistatina">
                        </div>

<!-- **********************************COMPLICACIONES*********************************** -->
                <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        COMPLICACIONES</h5>
                    </div>
                </div>

<!--===========             Retinopatía     ================-->
                <div class="col-md-4" id="com_retinopatia ">
                    <strong style="font-size: 14px">Retinopatía</strong>
                    <select name="Retinopatía" id="RetinopatiaSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="No proliferativa">No proliferativa</option>
                        <option value="Proliferativa">Proliferativa</option>
                        <option value="Edema Macular de significancia clínica">Edema Macular de significancia clínica</option>
                    </select>
                </div>
<!--===========             Retinopatía     ================-->
                <div class="col-md-4" id="com_ceguera ">
                    <strong style="font-size: 14px">Ceguera </strong>
                    <select name="Ceguera" id="CegueraSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>
<!--===============  NEFROPATIA  =======================-->
                <div class="col-md-4" id="com_nefro">
                    <strong style="font-size: 14px;">Nefropatía</strong>
                    <input type="text" class="form-control" id="id_nefro" name="nefro" >
                </div>

<!--===========     Neuropatía     ================-->
                <div class="col-md-4" id="com_neuropatia">
                        <strong style="font-size: 14px">Neuropatía </strong>
                        <select name="neuropatia" id="neuropatiaSelect" class="form-control" style="font-size: 14px">
                            <option value="Negado">Negado</option>
                            <option value="Polineuropatía Simétrica Distal">Polineuropatía Simétrica Distal</option>
                            <option value="Pie de Charcot">Pie de Charcot</option>
                            <option value="Neuropatía Gastrointestinal">Neuropatía Gastrointestinal</option>
                            <option value="Neuropatía Genitourinaria">Neuropatía Genitourinaria</option>
                            <option value="Neuropatía Cardiovascular">Neuropatía Cardiovascular</option>
                            <option value="Otra">Otra</option>
                        </select>
                    </div>

<!--===========             Cardiopatía isquémica     ================-->
                <div class="col-md-4" id="com_cardiopatia ">
                        <strong style="font-size: 14px"> Cardiopatía isquémica</strong>
                        <select name="cardiopatia" id="Cardiopatia_isquemicaSelect" class="form-control" style="font-size: 14px">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>
<!--===========    Amputaciones    ================-->
                <div class="col-md-4" id="com_neuropatia">
                        <strong style="font-size: 14px"> Amputaciones </strong>
                        <select name="Amputaciones" id="AmputacionesSelect" class="form-control" style="font-size: 14px">
                            <option value="Negado">Negado</option>
                            <option value="Dedos">Dedos</option>
                            <option value="Transmetatarsina">Transmetatarsina</option>
                            <option value="Infracondílea">Infracondílea</option>
                            <option value="Supracondílea Derecha">Supracondílea Derecha</option>
                            <option value="Supracondílea Izquierda">Supracondílea Izquierda</option>
                        </select>
                    </div>

<!--===========     Enfermedad Vascular Cerebral Isquémica     ================-->
                <div class="col-md-6" id="com_isquemica ">
                        <strong style="font-size: 14px"> Enfermedad Vascular Cerebral Isquémica </strong>
                        <select name="isquemica" id="IsquemicaSelect" class="form-control" style="font-size: 14px">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>

<!--===========        Insuficiencia Arterial Periférica    ================-->
                <div class="col-md-6" id="com_cardiopatia ">
                        <strong style="font-size: 14px"> Insuficiencia Arterial Periférica</strong>
                        <select name="InsuficienciaArterialPeriferica" id="InsuficienciaArterialPerifericaSelect" class="form-control" style="font-size: 14px">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                    </div>


<!-- ********************************** TRATAMIENTOS *********************************** -->
                
                    <div class="col-md-12">
                    <div class="form-header" style="margin-top:15px">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        TRATAMIENTO</h5>
                    </div>
                </div>

            <div class="col-md-12" id="id_tx1">
                <strong style="font-size: 14px">Hipoglucemiantes</strong>
                <select name="Hipoglucemiantes" id="HipoglucemiantesSelect" class="form-control" style="font-size: 14px">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                </select>
</div>
        <div class="container" id="tx_Hipoglucemiantes" >
                    
        <div class ="row">
                
                <!--===============Si con Tratamiento Hipoglucemiantes =======================-->
    
    <!--===========    Metformina    ================-->
                <div class="col-md-4" id="tx_metformina">
                            <span style="font-size: 14px;" >Metformina</span>
                            <select name="Metformina" id="MetforminaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                            </div>
    
    <!--===========     Sulfonilureas     ================-->
                <div class="col-md-4" id="tx_sulfonilureas">
                            <span style="font-size: 14px;" >Sulfonilureas</span>
                            <select name="Sulfonilureas" id="SulfonilureaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Glibenclamida">Glibenclamida</option>
                                <option value="Clorpropamida">Clorpropamida</option>
                                <option value="Glibenclamida">Glibenclamida</option>
                                <option value="Glipizida">Glipizida</option>
                                <option value="Glicazida">Glicazida</option>
                                <option value="Otra">Otra</option>
                            </select>
            </div>
    
    <!--===========     Glinidas    ================-->
            <div class="col-md-4" id="tx_glinidas">
                            <span style="font-size: 14px">Glinidas</span>
                            <select name="Glinidas" id="GlinidasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Nateglinida">Nateglinida</option>
                                <option value="Repaglinida">Repaglinida</option>
                            </select>
            </div>
    
    <!--===========     I-DPP4    ================-->
            <div class="col-md-4" id="tx_IDPP4">
                            <span style="font-size: 14px">I-DPP4</span>
                            <select name="IDPP4" id="I-DPP4Select" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Sitagliptina">Sitagliptina</option>
                                <option value="Linagliptina">Linagliptina</option>
                                <option value="Alogliptina">Alogliptina</option>
                                <option value="Saxagliptina">Saxagliptina</option>
                                <option value="Vildagliptina">Vildagliptina</option>
                                <option value="Otra">Otra</option>
                            </select>
            </div>
    
    <!--===========   -	ISGLT-2    ================-->
            <div class="col-md-4" id="tx_ISGLT2">
                            <span style="font-size: 14px">ISGLT-2 </span>
                            <select name="ISGLT2" id="ISGLT2Select" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Dapaglifozina">Dapaglifozina</option>
                                <option value="Canaglifozina">Canaglifozina</option>
                                <option value="Empaglifozina">Empaglifozina</option>
                            </select>
            </div>
    
    <!--===========     Análogos de GLP-1     ================-->
            <div class="col-md-4" id="tx_GLP1">
                            <span style="font-size: 14px">Análogos de GLP-1</span>
                            <select name="GLP1" id="GLP1Select" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Exenatida">Exenatida</option>
                                <option value="Liraglutida">Liraglutida</option>
                                <option value="Semaglutida">Semaglutida</option>
                                <option value="Lixisenatida">Lixisenatida</option>
                                <option value="Otra">Otra</option>
                            </select>
            </div>
    <!--===========    Pioglitazona     ================-->
    
            <div class="col-md-6" id="tx_pioglitazona">
                            <span style="font-size: 14px">Pioglitazona</span>
                            <select name="Pioglitazona" id="PioglitazonaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
            </div>
    
    <!--===========    Inhibidores de la alfaglucosidasa    ================-->    
            <div class="col-md-6" id="tx_inhibidores">
                            <span style="font-size: 14px">Inhibidores de la alfaglucosidasa </span>
                            <select name="Inhibidores" id="inhibidoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Acarbosa">Acarbosa</option>
                                <option value="Miglitol">Miglitol</option>
                            </select>
            </div>
    
        </div><!--===========DIV TX Hipoglucemiantes ================--> <br> 
    
    </div> <!--=========== DIV DEL ROW DE Hipoglucemiantes================-->
    
    <!--=========== TRATAMIENTOS CON INSULINAS================-->
    
        <div class="col-md-12" id="id_tx2">
                    <strong style="font-size: 14px">Insulinas</strong>
                    <select name="Insulinas" id="InsulinasSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
        </div>
            <div class="container" id="tx_Insulinas">
                        
                <div class ="row">
                    
                <!--===============Si con Tratamiento Hipoglucemiantes =======================-->
    
    <!--===========    NPH    ================-->
            <div class="col-md-6" id="tx_NPH" >
                            <span style="font-size: 14px">NPH</span>
                            <select name="NPH" id="NPHSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
    
                        <div class="col-md-6" id="dosis_nph">
                                <span style="font-size: 14px;">NPH Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_nph" name="nph" >
                            </div>
    
    <!--===========    RAPIDA REGULAR    ================-->
                <div class="col-md-6" id="tx_rapidaregular" >
                            <span style="font-size: 14px">Rápida regular </span>
                            <select name="RapidaRegular" id="RapidaRegularSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                            </div>
    
                        <div class="col-md-6" id="dosis_rapidaregular" >
                                <span style="font-size: 14px;"> Rápida Regular Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_rapidaregular" name="nph" >
                            </div>
    
    <!--===========    GLARGINA     ================-->
                <div class="col-md-6" id="tx_glargina " >
                            <span style="font-size: 14px">Glargina</span>
                            <select name="Glargina" id="GlarginaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Glargina" >
                                <span style="font-size: 14px;">Glargina Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_glargina" name="Glargina" >
                    </div>
    
    <!--===========    GLARGINA 300     ================-->
                <div class="col-md-6" id="tx_glargina300 " >
                            <span style="font-size: 14px">Glargina 300</span>
                            <select name="Glar_300" id="Glar300Select" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Glar300" >
                                <span style="font-size: 14px;"> Glargina 300 Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_glargina300" name="Glargina_300" >
                    </div>
    
    <!--===========    DETEMIR       ================-->
                <div class="col-md-6" id="tx_detemir" >
                            <span style="font-size: 14px">Detemir</span>
                            <select name="Detemir" id="DetemirSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Detemir" >
                                <span style="font-size: 14px;">Detemir Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_detemir" name="Detemir" >
                    </div>
    
    
    <!--===========    DEGLUDEC   ================-->
                <div class="col-md-6" id="tx_degludec" >
                            <span style="font-size: 14px">Degludec</span>
                            <select name="Degludec" id="DegludecrSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Degludec" >
                                <span style="font-size: 14px;">Degludec Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_degludec" name="Detemir" >
                    </div>
    
    <!--===========    LISPRO   ================-->
                <div class="col-md-6" id="tx_lispro" >
                            <span style="font-size: 14px">Lispro</span>
                            <select name="Lispro" id="LisproSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Lispro" >
                                <span style="font-size: 14px;">Lispro Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_lispro" name="Detemir" >
                    </div>
    
    <!--===========   ASPART Aspart    ================-->
                <div class="col-md-6" id="tx_aspart" >
                            <span style="font-size: 14px">Aspart</span>
                            <select name="Aspart" id="AspartSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Aspart" >
                                <span style="font-size: 14px;">Aspart Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_aspart" name="Detemir" >
                    </div>
    
    
    <!--===========   Glulisina     ================-->
                <div class="col-md-6" id="tx_glulisina" >
                            <span style="font-size: 14px">Glulisina</span>
                            <select name="Glulisina" id="GlulisinaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
                            
                        <div class="col-md-6" id="dosis_Glulisina" >
                                <span style="font-size: 14px;">Glulisina Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_glulisina" name="Detemir" >
                    </div>
    
    <!--===========    NPH/REGULAR   ================-->
                <div class="col-md-6" id="tx_NPH_Regular" >
                            <span style="font-size: 14px">NPH/Regular</span>
                            <select name="NPH_Regular" id="NPHRegularSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                            </div>
    
                        <div class="col-md-6" id="dosis_nphRegular" >
                                <span style="font-size: 14px;">NPH/Regular Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_nphRegular" name="nphregular" >
                            </div>
    
    
    <!--===========    Lispro protamina/lispro   ================-->
                <div class="col-md-6" id="tx_protamina" >
                            <span style="font-size: 14px">Lispro protamina/Lispro</span>
                            <select name="protamina" id="ProtaminaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                            </div>
    
                        <div class="col-md-6" id="dosis_Protamina" >
                                <span style="font-size: 14px;">Lispro protamina/Lispro</span>
                                <input type="number" step="any" class="form-control" id="id_Protamina" name="nphregular" >
                            </div>
    
        </div><!--===========DIV TX INSULINAS ================--> <br> 
    
    </div> <!--=========== DIV DEL ROW DE INSULINAS================-->
    
    
    <div class="col-md-12" id="id_tx3">
                    <strong style="font-size: 14px">Hipolipemiantes</strong>
                    <select name="Hipolipemiantes" id="HipolipemiantesSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
        </div>
            <div class="container" id="tx_Hipolipemiantes">
                        
                <div class ="row">
                    
                <!--===============Si con Tratamiento Hipolipemiantes=======================-->
    
    <!--===========    Hipolipemiantes    ================-->
            <div class="col-md-4" id="tx_Estatinas" >
                            <span style="font-size: 14px">Estatinas</span>
                            <select name="Estatinas" id="EstatinasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Rosuvastatina">Rosuvastatina</option>
                                <option value="Atorvastatina">Atorvastatina</option>
                                <option value="Pravastatina">Pravastatina</option>
                                <option value="Simvastatina">Simvastatina</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
                    <div class="col-md-4" id="tx_Fibratos" >
                            <span style="font-size: 14px">Fibratos</span>
                            <select name="Fibratos" id="FibratosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Bezafibrato">Bezafibrato</option>
                                <option value="Fenofibrato">Fenofibrato</option>
                                <option value="Gemfibrozil">Gemfibrozil</option>
                            </select>
                    </div>
    
                    <div class="col-md-4" id="tx_Omega">
                            <span style="font-size: 14px">Omega 3</span>
                            <select name="Omega" id="OmegaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
    
        </div><!--===========DIV TX Hipolipemiantes ================--> <br> 
    
    </div> <!--=========== DIV DEL ROW DE Hipolipemiantes================-->
    
    
    
    <!--=========== tratamientos con  Antihipertensivos================-->
    
    
        <div class="col-md-12" id="id_tx4">
                    <strong style="font-size: 14px">Antihipertensivos</strong>
                    <select name="Antihipertensivos" id="AntihipertensivosSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
        </div>
            <div class="container" id="tx_Antihipertensivos">
                        
                <div class ="row">
                    
                <!--===============Si con Antihipertensivos=======================-->
    
    <!--===========    Hipolipemiantes    ================-->
            <div class="col-md-6" id="tx_IECAS" >
                            <span style="font-size: 14px">IECAS</span>
                            <select name="IECAS" id="IECASSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Enalapril">Enalapril</option>
                                <option value="Lisinopril">Lisinopril</option>
                                <option value="Captopril">Captopril</option>
                                <option value="Ramipril">Ramipril</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    <!--===============Si con ARA-II=======================-->
                    <div class="col-md-6" id="tx_ARAII" >
                            <span style="font-size: 14px">ARA-II</span>
                            <select name="ARAII" id="ARAIISelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Losartan">Losartan</option>
                                <option value="Telmisartan">Telmisartan</option>
                                <option value="Irbesartan">Irbesartan</option>
                                <option value="Candesartan">Candesartan</option>
                                <option value="Olmesartan">Olmesartan</option>
                                <option value="Valsartan">Valsartan</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    <!--===============Si conInhibidores de la Renina=======================-->
    
                    <div class="col-md-6" id="tx_Inhibidores" >
                            <span style="font-size: 14px">Inhibidores de la Renina</span>
                            <select name="Inhibidores" id="InhibidoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Aliskiren">Aliskiren</option>
                            </select>
                    </div>
    
    
    <!--===============Si Calcioantagonistas=======================-->
                    <div class="col-md-6" id="tx_Calcioantagonistas" >
                            <span style="font-size: 14px">Calcioantagonistas</span>
                            <select name="Calcioantagonistas" id="CalcioantagonistasSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Nifedipino">Nifedipino</option>
                                <option value="Amlodipino">Amlodipino</option>
                                <option value="Verapamilo">Verapamilo</option>
                                <option value="Felodipino">Felodipino</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    <!--===============Si Betabloqueadores=======================-->
    
                    <div class="col-md-6" id="tx_Betabloqueadores" >
                            <span style="font-size: 14px">Betabloqueadores</span>
                            <select name="Betabloqueadores" id="BetabloqueadoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Metoprolol">Metoprolol</option>
                                <option value="Propranolol">Propranolol</option>
                                <option value="Labetalol">Labetalol</option>
                                <option value="Carvedilol">Carvedilol</option>
                                <option value="Atenolol">Atenolol</option>
                                <option value="Bisoprolol">Bisoprolol</option>
                                <option value="Nebivolol">Nebivolol</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    
    <!--===============Si Diuréticos tiazidas=======================--> 
    
                    <div class="col-md-6" id="tx_Diureticos" >
                            <span style="font-size: 14px">Diuréticos tiazidas</span>
                            <select name="Diureticos" id="DiureticosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Hidroclorotiazida">Hidroclorotiazida</option>
                                <option value="Clortalidona">Clortalidona</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    <!--===============Si Alfabloqueadores  =======================--> 
    
                    <div class="col-md-6" id="tx_Alfabloqueadores" >
                            <span style="font-size: 14px">Alfabloqueadores</span>
                            <select name="Alfabloqueadores" id="AlfabloqueadoresSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Prazocina">Prazocina</option>
                                <option value="Terazocina">Terazocina</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
                    <!--===============Si Espironolactona =======================--> 
    
                    <div class="col-md-6" id="tx_Espironolactona" >
                            <span style="font-size: 14px">Espironolactona</span>
                            <select name="Espironolactona" id="EspironolactonaSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div> 
    
    
        </div><!--===========DIV TX Antihipertensivos ================--> <br> 
    
    </div> <!--=========== DIV DEL ROW DE Antihipertensivos================-->
    
    
    <!--=========== tratamientos con  OTROS ================-->
    
    
        <div class="col-md-12" id="id_tx5">
                    <strong style="font-size: 14px">Otros</strong>
                    <select name="Otros" id="OtrosSelect" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
        </div>
            <div class="container" id="tx_Otros">
                        
                <div class ="row">
                    
                <!--===============Si con Antihipertensivos=======================-->
    
    <!--===========    ASA    ================-->
            <div class="col-md-6" id="tx_ASA" >
                            <span style="font-size: 14px">ASA</span>
                            <select name="ASA" id="ASASelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
    
    
    <!--===========    Alopurinol    ================-->
            <div class="col-md-6" id="tx_Alopurinol" >
                            <span style="font-size: 14px">Alopurinol</span>
                            <select name="Alopurinol" id="AlopurinolSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                    </div>
    
    <!--===============Si -	Neuromodulador =======================-->
                    <div class="col-md-6" id="tx_Neuromodulador" >
                            <span style="font-size: 14px">Neuromodulador</span>
                            <select name="Neuromodulador" id="NeuromoduladorSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Gabapentina">Gabapentina</option>
                                <option value="Pregabalina">Pregabalina</option>
                                <option value="Carbamazepina">Carbamazepina</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    <!--===============Si -	Procineticos =======================-->
    
                    <div class="col-md-6" id="tx_Procineticos" >
                            <sapi_windows_cp_is_utf8 style="font-size: 14px">Procineticos</sapi_windows_cp_is_utf8>
                            <select name="Procineticos" id="ProcineticosSelect" class="form-control" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Metocloprmida">Metocloprmida</option>
                                <option value="Cisaprida">Cisaprida</option>
                                <option value="Cinitaprida">Cinitaprida</option>
                                <option value="Otros">Otros</option>
                            </select>
                    </div>
    
    
    
    
        </div><!--===========DIV TX OTROS ================--> <br> 
    
    </div> <!--=========== DIV DEL ROW DE OTROS================-->

<!--===========Numero de Farmacos Totales ================-->
        <div class="col-md-6">
                    <strong style="font-size: 14px;">Número de Fármacos Totales utilizados </strong>
                    <input type="number" class="form-control" id="Farmacos_utilizados" name="Farmacos_utilizados" style="font-size: 13px;" >
                </div><br>




            </div> <!-- <row PRIMERO-->

             <!--=========== Boton de editar ================-->
             <div style="display: flex; justify-content: flex-end; align-items: center;">
                    <button type="button" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
                </div>
                <br>
            </div><!-- <div container-->





    
</body>
</head>