<?php
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

    <title>Seguimiento / Diabetes Mellitus</title>
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

        <form id="seguimiento_diabetes"  method="POST" autocomplete="off">

            <div style="background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>ANTROPOMETRÍA</h6> 
            </div>

            <!--===============DIV DEL PRIMER ROW =======================-->
            <div class="row">

                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

                
                <div class="col-md-3"> 
                        <strong style="font-size: 14px;">CURP</strong>
                        <input type="text" class="form-control" id="curp_seg" name="curp_seg" placeholder="CURP" style="font-size: 13px;" value="<?php echo $curp; ?>">
                </div>

                <div class="col-md-3"> 
                        <strong style="font-size: 14px;">Fecha de Seguimiento</strong>
                        <input type="date" class="form-control" id="fecha_seg" name="fecha_seg"  style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla_seg" name="talla_seg" placeholder="Ejemplo: 1.50" style="font-size: 13px;" >
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso_seg" onblur="calculaIMC1();" name="peso_seg" style="font-size: 13px;" >
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc_seg" onblur="calculaIMC1();" name="imc_seg" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion_seg" name="imcdescripcion_seg" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Circunferencia Cintura</strong>
                    <input type="number" step="any" class="form-control" id="circunferencia_seg"  name="circunferencia_seg" style="font-size: 13px;" >
                </div>

                <!--===============COMORBILIDADES=======================-->

                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                        COMORBILIDADES</h5>
                    </div>
                </div>

                <div class="col-md-6" id="seg_hepato">
                    <strong style="font-size: 14px;">Enfermedad hepática grasa no alcohólica </strong>
                    <select name="HepaticaSelect_seg" id="HepaticaSelect_seg" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Esteatosis">Esteatosis</option>
                        <option value="Esteatohepatitis">Esteatohepatitis</option>
                        <option value="Cirrosis">Cirrosis</option>
                    </select>
                </div> 

                <div class="col-md-6" id="seg_Child" style="display: none;">
                    <strong style="font-size: 14px;"> Child-Pugh </strong>
                    <select name="CirrosisSelect_seg" id="CirrosisSelect_seg" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px;">Dislipidemia </strong>
                    <select name="DislipidemiaSelect_seg" id="DislipidemiaSelect_seg" class="form-control" style="font-size: 14px;">
                        <option value="Negado">Negado</option>
                        <option value="Hipertrigliceridemia">Hipertrigliceridemia</option>
                        <option value="Hipercolesterolemia">Hipercolesterolemia</option>
                        <option value="Hipoalfalipoproteinemia">Hipoalfalipoproteinemia</option>
                        <option value="Mixta">Mixta</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Distiroidismo </strong>
                    <select name="DistiroidismoSelect_seg" id="DistiroidismoSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Hipotiroidismo">Hipotiroidismo</option>
                        <option value="Hipertiroidismo">Hipertiroidismo</option>
                        <option value="Bocio">Bocio</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Cancer</strong>
                    <select name="CancerSelect_seg" id="CancerSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Insuficiencia Cardiaca</strong>
                    <select name="Insfuciencia_Cardiaca_seg" id="InsuCardiacaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>  
                        <option value="Si">Si</option> 
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Disritmias cardiacas</strong>
                    <select name="Disritmias_cardiacas_seg" id="DisritmiasSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6" >
                    <strong style="font-size: 14px">Osteoporosis</strong>
                    <select name="OsteoporosisSelect_seg" id="OsteoporosisSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Gota/Hiperuricemia</strong>
                    <select name="Gota_seg" id="GotaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Lupus Eritematoso Sistemico</strong>
                    <select name="LupusSelect_seg" id="LupusSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Artritis Reumatoide</strong>
                        <select name="ArtritisSelect_seg" id="ArtritisSelect_seg" class="form-control" style="font-size: 14px">
                            <option value="Negado">Negado</option>
                            <option value="Si">Si</option>
                        </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Hipertensión Arterial</strong>
                    <select name="HipertensioncomorSelect_seg" id="HipertensioncomorSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px">Síndrome de Cushing </strong>
                    <select name="CushingSelect_seg" id="CushingSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6" id="seg_sindrome" style="display: none;">
                    <strong style="font-size: 14px">Tipo de Cushing </strong>
                    <select name="SindromeSelect_seg" id="SindromeSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exogeno">Exógeno</option>
                        <option value="Endogeno">Endógeno</option>
                    </select>
                </div>

                <!--===============Laboratorios=======================-->
                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                        LABORATORIOS</h5>
                    </div>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">TGO</strong>
                    <input type="number" step="any" class="form-control" id="id_TGO_seg" name="id_TGO_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">TGP</strong>
                    <input type="number" step="any" class="form-control" id="id_TGP_seg" name="id_TGP_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">FA</strong>
                    <input type="number" step="any" class="form-control" id="id_FA_seg" name="id_FA_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">GGT</strong>
                    <input type="number" step="any" class="form-control" id="id_GGT_seg" name="id_GGT_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">DHL</strong>
                    <input type="number" step="any" class="form-control" id="id_DHL_seg" name="id_DHL_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px;">Proteínas totales</strong>
                    <input type="number" step="any" class="form-control" id="id_proteinastotales_seg" name="id_proteinastotales_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Albumina</strong>
                    <input type="number" step="any" class="form-control" id="id_Albumina_seg" name="id_Albumina_seg" >
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Globulinas</strong>
                    <input type="number" step="any" class="form-control" id="id_Globulinas_seg" name="id_Globulinas_seg" >
                </div>

                <div class="col-md-2" id="relacionAG">
                    <strong style="font-size: 14px;">Relación (A/G)</strong>
                    <input type="number" step="any" class="form-control" id="id_relacion_seg" name="id_relacion_seg" >
                </div>

                <div class="col-md-2" id="BT">
                    <strong style="font-size: 14px;">BT</strong>
                    <input type="number" step="any" class="form-control" id="id_BT_seg" name="id_BT_seg" >
                </div>

                <div class="col-md-2" id="BT">
                    <strong style="font-size: 14px;">BD</strong>
                    <input type="number" step="any" class="form-control" id="id_BD_seg" name="id_BD_seg" >
                </div>

                <div class="col-md-2" id="BT">
                    <strong style="font-size: 14px;">BI</strong>
                    <input type="number" step="any" class="form-control" id="id_BI_seg" name="id_BI_seg" >
                </div>

                <div class="col-md-2" id="HB">
                    <strong style="font-size: 14px;">HB</strong>
                    <input type="number" step="any" class="form-control" id="id_HB_seg" name="id_HB_seg" >
                </div>

                <div class="col-md-2" id="VSG">
                    <strong style="font-size: 14px;">VSG</strong>
                    <input type="number" step="any" class="form-control" id="id_VSG_seg" name="id_VSG_seg" >
                </div>

                <div class="col-md-2" id="25-OHD">
                    <strong style="font-size: 14px;">25-OHD</strong>
                    <input type="number" step="any" class="form-control" id="id_OHD_seg" name="id_OHD_seg" >
                </div>

                <div class="col-md-3">
                    <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI Creatinina</a></i>
                    <input type="number" step="any" class="form-control" id="creatinina_seg" name="creatinina_seg" onchange="imprimirValor()">
                </div>

                <div class="col-md-3">
                    <i><a style="font-size: 13px;" href="https://www.mdcalc.com/calc/3939/ckd-epi-equations-glomerular-filtration-rate-gfr" target="_blank">CKD-EPI creatinina-cistatina</a></i>
                    <input type="number" step="any" class="form-control" id="cistatina_seg" name="cistatina_seg">
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 14px;">Glucosa</strong>
                    <input type="number" step="any" class="form-control" id="id_glucosa_seg" name="id_glucosa_seg" >
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 14px;">HB Glucosilada</strong>
                    <input type="number" step="any" class="form-control" id="id_glucosilada_seg" name="id_glucosilada_seg" >
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 14px;">Ácido Úrico</strong>
                    <input type="number" step="any" class="form-control" id="id_urico_seg" name="id_urico_seg" >
                </div>  
            

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Urea</strong>
                    <input type="number" step="any" class="form-control" id="id_urea_seg" name="id_urea_seg" >
                </div>    


                <div class="col-md-2">
                    <strong style="font-size: 14px;">Creatinina</strong>
                    <input type="number" step="any" class="form-control" id="id_creatinina_seg" name="id_creatinina_seg" >
                </div>
                                

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Colesterol</strong>
                    <input type="number" step="any" class="form-control" id="id_colesterol_seg" name="id_colesterol_seg" >
                </div> 


                <div class="col-md-2">
                    <strong style="font-size: 14px;">Triglicéridos</strong>
                    <input type="number" step="any" class="form-control" id="id_trigliceridos_seg" name="id_trigliceridos_seg" >
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 14px;">LDL</strong>
                    <input type="number" step="any" class="form-control" id="id_LDL_seg" name="id_LDL_seg" >
                </div> 


                <div class="col-md-2">
                    <strong style="font-size: 14px;">HDL</strong>
                    <input type="number" step="any" class="form-control" id="id_HDL_seg" name="id_HDL_seg" >
                </div> 


                <div class="col-md-2">
                    <strong style="font-size: 14px;">ALB 24 HRS</strong>
                    <input type="number" step="any" class="form-control" id="id_HBG_seg" name="id_HBG_seg" >
                </div>



                <!--===============COMPLICACIONES=======================-->
                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                        COMPLICACIONES</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px">Retinopatía</strong>
                    <select name="RetinopatiaSelect_seg" id="RetinopatiaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="No proliferativa">No proliferativa</option>
                        <option value="Proliferativa">Proliferativa</option>
                        <option value="Edema Macular de significancia clínica">Edema Macular de significancia clínica</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px">Ceguera </strong>
                    <select name="CegueraSelect_seg" id="CegueraSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Nefropatía</strong>
                    <input type="text" class="form-control" id="id_nefro_seg" name="nefro_seg" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px"> Cardiopatía isquémica</strong>
                    <select name="Cardiopatia_isquemicaSelect_seg" id="Cardiopatia_isquemicaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px"> Enfermedad Vascular Cerebral Isquémica </strong>
                    <select name="IsquemicaSelect_seg" id="IsquemicaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>_seg
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 14px"> Insuficiencia Arterial Periférica</strong>
                    <select name="InsuficienciaArterialPerifericaSelect_seg" id="InsuficienciaArterialPerifericaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <div class="col-md-12" id="com_neuropatia_seg">
                    <strong style="font-size: 14px">Neuropatía </strong>
                    <select name="neuropatiaSelect_seg" id="neuropatiaSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>
                
                <!--===============Seleccion multiple de Neuropatia =======================-->
                <div class="container" id="neuropatia_seg"  style="display: none;">
                    <div class="row">

                        <div class="col-md-4">
                            <span style="font-size: 14px;">Polineuropatía </span>
                            <select name="polineuropatia_seg" id="polineuropatia_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px;" >Simétrica Distal</span>
                            <select name="Simetrica_Distal_seg" id="Simetrica_Distal_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px;" >Pie de Charcot</span>
                            <select name="Pie_Charcot_seg" id="Pie_Charcot_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 13px;" >Neuropatía Gastrointestinal</span>
                            <select name="neuropatia_gastro_seg" id="neuropatia_gastro_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px;" >Neuropatía Genitourinaria</span>
                            <select name="neuropatia_genito_seg" id="neuropatia_genito_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px;" >Neuropatía Cardiovascular</span>
                            <select name="neuropatia_cardio_seg" id="neuropatia_cardio_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="col-md-12" id="com_amputaciones">
                    <strong style="font-size: 14px">Amputaciones</strong>
                    <select name="AmputacionesSelect_seg" id="AmputacionesSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>


                <!--===============Seleccion multiple de Amputacion =======================-->
                <div class="container" id="amputaciones_seg"  style="display: none;">
                    <div class="row">

                        <div class="col-md-12" id="Dedos_seg">
                        <span style="font-size: 14px;">Dedos </span>
                        <select name="amputaciones_dedos_seg" id="amputaciones_dedos_seg" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                        </div>

                        <div class="col-md-6" id="dedos_Mano_seg" style="display: none">
                            <span style="font-size: 14px;">Dedos-Mano </span>
                            <select name="Mano_dedos_seg" id="Mano_dedos_seg" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dedos_Pies_seg" style="display: none">
                            <span style="font-size: 14px;">Dedos-Pie</span>
                            <select name="Pies_dedos_seg" id="Pies_dedos_seg" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Transmetatarsiana_seg">
                            <span style="font-size: 14px;">Transmetatarsiana</span>
                            <select name="amputaciones_transmetatarsiana_seg" id="amputaciones_transmetatarsiana_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Transmetatarsiana_lateralidad_seg" style="display: none">
                            <span style="font-size: 14px;">Transmetatarsiana-Lateralidad </span>
                            <select name="lateralidad_Transmetatarsiana_seg" id="lateralidad_Transmetatarsiana_seg" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Infracondílea_seg">
                            <span style="font-size: 14px;">Infracondílea</span>
                            <select name="amputaciones_infracondilea_seg" id="amputaciones_infracondilea_seg" class="form-control" style="font-size: 14px;">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Infracondílea_lateralidad_seg" style="display: none">
                            <span style="font-size: 14px;">Infracondílea-Lateralidad </span>
                            <select name="lateralidad_Infracondilea_seg" id="lateralidad_Infracondilea_seg" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="supracondilea_seg">
                            <span style="font-size: 14px;">Supracondílea</span>
                                <select name="amputaciones_Supracondilea_seg" id="amputaciones_Supracondilea_seg" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                        </div>

                        <div class="col-md-6" id="Supracondilea_lateralidad_seg" style="display: none">
                            <span style="font-size: 14px;">Supracondilea-Lateralidad </span>
                            <select name="lateralidad_Supracondilea_seg" id="lateralidad_Supracondilea_seg" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>   

                    </div>
                </div>



                <!--===============Tratamiento =======================-->
                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:rgb(80, 177, 210);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                        TRATAMIENTO</h5>
                    </div>
                </div>

                <div class="col-md-12">
                    <strong style="font-size: 14px">Hipoglucemiantes</strong>
                    <select name="HipoglucemiantesSelect_seg" id="HipoglucemiantesSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <!--===============Seleccion multiple de Hipoglucemiantes =======================-->
                <div class="container" id="tx_Hipoglucemiantes_seg" style="display: none">
                    <div class="row">

                        <div class="col-md-4">
                            <span style="font-size: 14px;" >Metformina</span>
                            <select name="MetforminaSelect_seg" id="MetforminaSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px;" >Sulfonilureas</span>
                            <select name="SulfonilureaSelect_seg" id="SulfonilureaSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Glibenclamida">Glibenclamida</option>
                                <option value="Clorpropamida">Clorpropamida</option>
                                <option value="Glibenclamida">Glibenclamida</option>
                                <option value="Glipizida">Glipizida</option>
                                <option value="Glicazida">Glicazida</option>
                                <option value="Otra">Otra</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px">Glinidas</span>
                            <select name="GlinidasSelect_seg" id="GlinidasSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Nateglinida">Nateglinida</option>
                                <option value="Repaglinida">Repaglinida</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px">I-DPP4</span>
                            <select name="I_DPP4Select_seg" id="I_DPP4Select_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Sitagliptina">Sitagliptina</option>
                                <option value="Linagliptina">Linagliptina</option>
                                <option value="Alogliptina">Alogliptina</option>
                                <option value="Saxagliptina">Saxagliptina</option>
                                <option value="Vildagliptina">Vildagliptina</option>
                                <option value="Otra">Otra</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px">ISGLT-2 </span>
                            <select name="ISGLT2Select_seg" id="ISGLT2Select_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Dapaglifozina">Dapaglifozina</option>
                                <option value="Canaglifozina">Canaglifozina</option>
                                <option value="Empaglifozina">Empaglifozina</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <span style="font-size: 14px">Análogos de GLP-1</span>
                            <select name="GLP1Select_seg" id="GLP1Select_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Exenatida">Exenatida</option>
                                <option value="Liraglutida">Liraglutida</option>
                                <option value="Semaglutida">Semaglutida</option>
                                <option value="Lixisenatida">Lixisenatida</option>
                                <option value="Otra">Otra</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span style="font-size: 14px">Pioglitazona</span>
                            <select name="PioglitazonaSelect_seg" id="PioglitazonaSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span style="font-size: 14px">Inhibidores de la alfaglucosidasa </span>
                            <select name="inhibidoresSelect_seg" id="inhibidoresSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Acarbosa">Acarbosa</option>
                                <option value="Miglitol">Miglitol</option>
                            </select>
                        </div>

                    </div>
                </div>


                <div class="col-md-12" id="id_tx2">
                    <strong style="font-size: 14px">Insulinas</strong>
                    <select name="InsulinasSelect_Seg" id="InsulinasSelect_Seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>
                
                <!--===============Seleccion multiple de Insulinas =======================-->
                <div class="container" id="tx_Insulinas_Seg" style="display: none" >
                    <div class="row">


                        <div class="col-md-6">
                            <span style="font-size: 14px">NPH</span>
                            <select name="NPHSelect_Seg" id="NPHSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_nph_Seg" style="display: none">
                            <span style="font-size: 14px;">NPH Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_nph_Seg" name="id_nph_Seg" >
                        </div>


                        <div class="col-md-6">
                            <span style="font-size: 14px">Rápida regular </span>
                            <select name="RapidaRegularSelect_Seg" id="RapidaRegularSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_rapidaregular_Seg" style="display: none">
                            <span style="font-size: 14px;"> Rápida Regular Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_rapidaregular_Seg" name="id_rapidaregular_Seg" >
                        </div>


                        <div class="col-md-6">
                            <span style="font-size: 14px">Glargina</span>
                            <select name="GlarginaSelect_Seg" id="GlarginaSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                            
                        <div class="col-md-6" id="dosis_Glargina_Seg" style="display: none">
                                <span style="font-size: 14px;">Glargina Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_glargina_Seg" name="id_glargina_Seg" >
                        </div>


                        <div class="col-md-6" >
                            <span style="font-size: 14px">Glargina 300</span>
                            <select name="Glar300Select_Seg" id="Glar300Select_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Glar300_Seg" style="display: none">
                            <span style="font-size: 14px;"> Glargina 300 Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_glargina300_Seg" name="id_glargina300_Seg" >
                        </div>


                        <div class="col-md-6">
                            <span style="font-size: 14px">Detemir</span>
                            <select name="DetemirSelect_Seg" id="DetemirSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Detemir_Seg" style="display: none">
                                <span style="font-size: 14px;">Detemir Dosis Diarias</span>
                                <input type="number" step="any" class="form-control" id="id_detemir_Seg" name="id_detemir_Seg" >
                        </div>


                        <div class="col-md-6">
                            <span style="font-size: 14px">Degludec</span>
                            <select name="DegludecrSelect_Seg" id="DegludecrSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Degludec_Seg" style="display: none">
                            <span style="font-size: 14px;">Degludec Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_degludec_Seg" name="id_degludec_Seg" >
                        </div>


                        <div class="col-md-6" >
                            <span style="font-size: 14px">Lispro</span>
                            <select name="LisproSelect_Seg" id="LisproSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6" id="dosis_Lispro_Seg" style="display: none">
                            <span style="font-size: 14px;">Lispro Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_lispro_Seg" name="id_lispro_Seg" >
                        </div>


                        <div class="col-md-6" >
                            <span style="font-size: 14px">Aspart</span>
                            <select name="AspartSelect_Seg" id="AspartSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6" id="dosis_Aspart_Seg" style="display: none">
                            <span style="font-size: 14px;">Aspart Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_aspart_Seg" name="id_aspart_Seg" >
                        </div>


                        <div class="col-md-6" id="tx_glulisina" >
                            <span style="font-size: 14px">Glulisina</span>
                            <select name="Glulisina_Seg" id="GlulisinaSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>
                            
                        <div class="col-md-6" id="dosis_Glulisina_Seg" style="display: none">
                            <span style="font-size: 14px;">Glulisina Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_glulisina_Seg" name="id_glulisina_Seg" >
                        </div>


                        <div class="col-md-6">
                            <span style="font-size: 14px">NPH/Regular</span>
                            <select name="NPH_Regular_Seg" id="NPHRegularSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_nphRegular_Seg" style="display: none">
                            <span style="font-size: 14px;">NPH/Regular Dosis Diarias</span>
                            <input type="number" step="any" class="form-control" id="id_nphRegular_Seg" name="id_nphRegular_Seg" >
                        </div>


                        <div class="col-md-6">
                            <span style="font-size: 14px">Lispro protamina/Lispro</span>
                            <select name="protamina_Seg" id="ProtaminaSelect_Seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="dosis_Protamina_Seg" style="display: none">
                            <span style="font-size: 14px;">Lispro protamina/Lispro</span>
                            <input type="number" step="any" class="form-control" id="id_Protamina_Seg" name="id_Protamina_Seg" >
                        </div>

                    </div>
                </div>


                <div class="col-md-12">
                    <strong style="font-size: 14px">Hipolipemiantes</strong>
                    <select name="HipolipemiantesSelect_seg" id="HipolipemiantesSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <!--===============Seleccion multiple de Hipolipemiantes =======================-->
                <div class="container" id="tx_Hipolipemiantes_seg" style="display: none" >
                    <div class="row">

                        <div class="col-md-3" >
                            <span style="font-size: 14px">Estatinas</span>
                            <select name="EstatinasSelect_seg" id="EstatinasSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Rosuvastatina">Rosuvastatina</option>
                                <option value="Atorvastatina">Atorvastatina</option>
                                <option value="Pravastatina">Pravastatina</option>
                                <option value="Simvastatina">Simvastatina</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <span style="font-size: 14px">Fibratos</span>
                            <select name="FibratosSelect_seg" id="FibratosSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Bezafibrato">Bezafibrato</option>
                                <option value="Fenofibrato">Fenofibrato</option>
                                <option value="Gemfibrozil">Gemfibrozil</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <span style="font-size: 14px">Omega 3</span>
                            <select name="OmegaSelect_seg" id="OmegaSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <span style="font-size: 14px">Inhibidores de la Absorción</span>
                            <select name="Inhibidores_AbsorcionSelect_seg" id="Inhibidores_AbsorcionSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Ezetimiba">Ezetimiba</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="col-md-12" id="id_tx4">
                    <strong style="font-size: 14px">Antihipertensivos</strong>
                    <select name="AntihipertensivosSelect_seg" id="AntihipertensivosSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>


                <!--===============Seleccion multiple de Antihipertensivos =======================-->
                <div class="container" id="tx_Antihipertensivos_seg" style="display: none" >
                    <div class="row">


                        <div class="col-md-6">
                            <span style="font-size: 14px">IECAS</span>
                            <select name="IECASSelect_seg" id="IECASSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Enalapril">Enalapril</option>
                                <option value="Lisinopril">Lisinopril</option>
                                <option value="Captopril">Captopril</option>
                                <option value="Ramipril">Ramipril</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span style="font-size: 14px">ARA-II</span>
                            <select name="ARAIISelect_seg" id="ARAIISelect_seg" class="form-control estadoSelect" style="font-size: 14px">
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

                        <div class="col-md-6">
                            <span style="font-size: 14px">Inhibidores de la Renina</span>
                            <select name="InhibidoresSelect_seg" id="InhibidoresSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Aliskiren">Aliskiren</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span style="font-size: 14px">Calcioantagonistas</span>
                            <select name="CalcioantagonistasSelect_seg" id="CalcioantagonistasSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Nifedipino">Nifedipino</option>
                                <option value="Amlodipino">Amlodipino</option>
                                <option value="Verapamilo">Verapamilo</option>
                                <option value="Felodipino">Felodipino</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        
                        <div class="col-md-6">
                            <span style="font-size: 14px">Betabloqueadores</span>
                            <select name="BetabloqueadoresSelect_seg" id="BetabloqueadoresSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
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

                        <div class="col-md-6">
                            <span style="font-size: 14px">Diuréticos tiazidas</span>
                            <select name="DiureticosSelect_seg" id="DiureticosSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Hidroclorotiazida">Hidroclorotiazida</option>
                                <option value="Clortalidona">Clortalidona</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        
                        <div class="col-md-6">
                            <span style="font-size: 14px">Alfabloqueadores</span>
                            <select name="AlfabloqueadoresSelect_seg" id="AlfabloqueadoresSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Prazocina">Prazocina</option>
                                <option value="Terazocina">Terazocina</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="col-md-6" >
                            <span style="font-size: 14px">Espironolactona</span>
                            <select name="EspironolactonaSelect_seg" id="EspironolactonaSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div> 

                    </div>
                </div>

                <div class="col-md-12" id="id_tx5">
                    <strong style="font-size: 14px">Otros</strong>
                    <select name="OtrosSelect_seg" id="OtrosSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <!--===============Seleccion multiple de Otros =======================-->
                <div class="container" id="tx_Otros_seg" style="display: none" >
                    <div class="row">

                        <div class="col-md-6">
                            <span style="font-size: 14px">ASA</span>
                            <select name="ASASelect_seg" id="ASASelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span style="font-size: 14px">Alopurinol</span>
                            <select name="AlopurinolSelect_seg" id="AlopurinolSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span style="font-size: 14px">Neuromodulador</span>
                            <select name="NeuromoduladorSelect_seg" id="NeuromoduladorSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Gabapentina">Gabapentina</option>
                                <option value="Pregabalina">Pregabalina</option>
                                <option value="Carbamazepina">Carbamazepina</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="col-md-6" >
                            <span style="font-size: 14px">Procineticos</span>
                            <select name="ProcineticosSelect_seg" id="ProcineticosSelect_seg" class="form-control estadoSelect" style="font-size: 14px">
                                <option value="Negado">Negado</option>
                                <option value="Metocloprmida">Metocloprmida</option>
                                <option value="Cisaprida">Cisaprida</option>
                                <option value="Cinitaprida">Cinitaprida</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                    </div>
                </div>


                <!--===============Numero total de Farmacos =======================-->

                <div class="col-md-6">
                    <strong style="font-size: 14px;">Número de Fármacos Totales utilizados </strong>
                    <input type="number" class="form-control" name="Farmacos_utilizados" id="Farmacos_utilizados" style="font-size: 13px;">
                </div> 

                <!--===============Seccion de Ejercicio/Medidas Generales =======================-->
                <div class="form-header">
                    <h5 class="form-title"
                    style="text-align: center;
                    background-color:rgb(80, 177, 210,0.5);
                    color: aliceblue;
                    margin-top:10px;
                    font-size: 14px;">
                    Medidas Generales</h5>
                </div>

                <div class="col-md-12">
                    <strong style="font-size: 14px">Ejercicio</strong>
                    <select name="EjercicioSelect_seg" id="EjercicioSelect_seg" class="form-control" style="font-size: 14px">
                        <option value="Negado">Negado</option>
                        <option value="Si">Si</option>
                    </select>
                </div>

                <!--===============Seleccion multiple de Ejercicio =======================-->
                <div class="container" id="tx_ejercicio_seg" style="display: none" >
                    <div class="row">

                        <div class="col-md-3" >
                            <strong style="font-size: 14px;">Veces a la Semana</strong>
                            <input type="number" class="form-control" id="id_vecestiempo_seg" name="id_vecestiempo_seg">
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Apego Veces</strong>
                            <input type="text" class="form-control" id="id_apegotiempo_seg" name="id_apegotiempo_seg" readonly>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Tiempo a la Semana</strong>
                            <input type="number" class="form-control" id="id_tiemposemana_seg" name="id_tiemposemana_seg" placeholder="min">
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Apego a la Semana</strong>
                            <input type="text" class="form-control" id="id_apegoveces_seg" name="id_apegoveces_seg" readonly>
                        </div>

                    </div>
                </div>

                <div class="seguimiento_btns">
                    <button type="submit" class="btn btn-primary">Guardar Seguimiento</button>
                </div>


            </div>


        </form>

    </div>

    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/scriptseguimiento.js"></script>
    <script src="js/conteo.js"></script>

    <script type="module">
            import { seguimientoForm } from "./js/seguimiento.js";
            seguimientoForm();
    </script>


    
</body>
</html>