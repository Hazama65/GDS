<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header custom-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            <i class="bi bi-person-lines-fill"></i>Productividad Residentes Medicina Interna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="residente_form"  method="POST" autocomplete="off">
        <div style="background-color:#4b376a ;
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>PRODUCTIVIDAD RESIDENTES MEDICINA INTERNA</h6> 
            </div> 
<div class="row">

        <div class="col-md-4">
                    <strong style="font-size: 14px; background">Fecha</strong>
                    <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;">
        </div>

        
        <div class="col-md-6">
                    <strong style="font-size: 14px;">Nombre Residentes</strong>
                    <select name="nombre_residentes" id="nombre_residentes" class="form-control" style="font-size: 13px;">
                    <option value="Sin Registro">SELECCIONE</option>
                                <option value="JOSE ROBERTO MARINO SANCHEZ">JOSE ROBERTO MARINO SANCHEZ</option>
                                <option value="PAULINA ORTEGA ITURBIDE">PAULINA ORTEGA ITURBIDE</option>
                                <option value="HUGO A. SILGUERO RIVERA">HUGO A. SILGUERO RIVERA</option>
                                <option value="MOHAMAD JAMAL EDDIN">MOHAMAD JAMAL EDDIN</option>
                                <option value="JACOBO U. MERCADO ESTRADA">JACOBO U. MERCADO ESTRADA</option>
                                <option value="CHRISTIAN MEJIA HERRERA">CHRISTIAN MEJIA HERRERA</option>
                                <option value ="MARIA A. RODRIGUEZ MENDOZA">MARIA A. RODRIGUEZ MENDOZA</option>
                                <option value="ARIAS HUERTA JENNIFERD">ARIAS HUERTA JENNIFERD</option>
                                <option value="ESPINOZA HERNÁNDEZ VICTOR">ESPINOZA HERNÁNDEZ VICTOR</option>
                                <option value="GOMEZ PARDO JOSE">GOMEZ PARDO JOSÉ</option>
                                <option value="LEAL CAMARRILLO ANGELICA">LEAL CAMARRILLO ANGELICA</option>
                                <option value="MENDOZA VEGA BRENDA">MENDOZA VEGA BRENDA</option>
                                <option value="SIACHOQUE GOMEZ LEIDY VANESSA">SIACHOQUE GOMEZ LEIDY VANESSA</option>
                                <option value="ANA LIBERTAD SALAZAR TRAPALA">ANA LIBERTAD SALAZAR TRAPALA</option>
                                <option value="EZEQUIEL BETANCOURT URIOSTEGUI">EZEQUIEL BETANCOURT URIOSTEGUI</option>
                                <option value="SONIA LISSET MANDOUJANO SANCHEZ">SONIA LISSET MANDOUJANO SANCHEZ</option>
                                <option value="VILLEGAS CONTRERAS CRISTIAN RICARDOA">VILLEGAS CONTRERAS CRISTIAN RICARDO</option>
                                <option value="ANGELICA JOHANA PEREZ HERNANDEZ">ANGELICA JOHANA PEREZ HERNANDEZ</option>
                                <option value="PAULA DANIELA RODRIGUEZ ARCINIEGAS">PAULA DANIELA RODRIGUEZ ARCINIEGAS</option>
                                <option value="ARTURO ISRAEL JACINTO TOVAR">ARTURO ISRAEL JACINTO TOVAR</option>
                                <option value="PAMELA PRISCILA PALACIOS ORTIZ">PAMELA PRISCILA PALACIOS ORTIZ</option>
                                <option value="GERARDO SAAVEDRA JIMENEZ">GERARDO SAAVEDRA JIMENEZ </option>
                                <option value=" ">OTRO</option>
                    </select>
                </div>
<!-- ***********************************PROCEDIMIENTOS*********************************** -->
<div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#7252a0 ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 14px;">
                        PROCEDIMIENTOS</h5>
                    </div>
                </div>
                
        <!-- ***********************************PUNCIÓN LUMBAR*********************************** -->
        <div class="col-md-6" id="p_puncionlumbar">
            <strong style="font-size: 14px;">PUNCIÓN LUMBAR</strong>
            <select name="puncion_lumbar" id="puncion_lumbar" class="form-control" style="font-size: 14px;">
                <option value="Sin registro">Sin registro</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>
    
        <div class="col-md-6" id="procedimientos" style="display: none;">
            <strong style="font-size: 14px;">Punción Lumbar</strong>
            <select name="conteo_pl" id="procedimientos123" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Punción Lumbar 1</option>
                <option value= 2 >Punción Lumbar 2</option>  
                <option value= 3 >Punción Lumbar 3</option>
            </select>
        </div>


        <!-- ***********************************Al SELECCIONAR SI EN PUNCIÓN LUMBAR  Puncion 1*********************************** -->
        
        <div class="col-md-12" id="pl_puncionlumbar1" style="display: none;">
            <div class="form-header">
                <h5 class="form-title"
                style="text-align: center;
                background-color:#9932CC; 
                color: aliceblue;
                margin-top:5px;
                font-size: 13px;">
                Punción Lumbar 1</h5>
            </div>
            
            <div class="row">
                
            <div class="col-md-3" id="pl_lumbar1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_1" id="intento_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
            </div> 

            <div class="col-md-3" id="com_puncionlumbar1">
                <span style="font-size: 14px;">Complicaciones</span>
                <select name="complicacion_1" id="complicacion_1" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="col-md-3" id="tipo_puncionlumbar1" style="display: none;">
                <span style="font-size: 14px;">Tipo de Complicaciones</span>
                <select name="tipocomplicacion_1" id="tipocomplicacion_1" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtros()">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Cefalea">Cefalea</option>
                    <option value="Dolor transitorio radicular">Dolor Transitorio Radicular</option>
                    <option value="Hematoma Subdural">Hematoma Subdural</option>
                    <option value="Meningitis">Meningitis</option>
                    <option value="Lesión Neural">Lesión Neural</option>
                    <option value="otros">Otros</option>
                </select>
            </div>

        <div class="col-md-3" id="otros_1" name="otros_1" style="display: none;">
            <span style="font-size: 14px;">Otros</span>
            <input id="pl_otros_1" name="pl_otros_1" type="text" class="form-control" style="font-size: 13px;" >
        </div>

        </div>
    </div>
            
 <!-- ***********************************PUNCION LUMBAR 2 *********************************** -->

<div class="col-md-12" id="pl_lumbar2" style="display: none;">
        <div class="form-header">
            <h5 class="form-title"
            style="text-align: center;
            background-color:#9932CC;
            color: aliceblue;
            margin-top:5px;
            font-size: 13px;">
            Punción Lumbar 2</h5>
        </div>
    <div class="row">
    
        <div class="col-md-3" id="pl_lumbar2">
            <span style="font-size: 14px;">Intento</span>
            <select name="intento_2" id="intento_2" class="form-control" style="font-size: 14px;" >
                <option value="Seleccione">Seleccione</option>
                <option value="Exitoso">Exitoso</option>
                <option value="Fallido">Fallido</option>
            </select>
        </div>
        
        <div class="col-md-3" id="com_puncionlumbar2" >
            <span style="font-size: 14px;">Complicaciones</span>
            <select name="complicacion_2" id="complicacion_2" class="form-control" style="font-size: 14px;" >
                <option value="Seleccione">Seleccione</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>
        
        <div class="col-md-3" id="tipo_puncionlumbar_2" style="display: none;" >
            <span style="font-size: 14px;">Tipo de Complicaciones</span>
            <select name="tipocomplicacion_2" id="tipocomplicacion_2" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtros2()">
                <option value="Seleccione">Seleccione</option>
                <option value="Cefalea">Cefalea</option>
                <option value="Dolor transitorio radicular">Dolor Transitorio Radicular</option>
                <option value="Hematoma Subdural">Hematoma Subdural</option>
                <option value="Meningitis">Meningitis</option>
                <option value="Lesión Neural">Lesión Neural</option>
                <option value="otros">Otros</option>
            </select>
        </div>
        
        <div class="col-md-3" id="otros_2" name="otros_2" style="display: none;">
            <span style="font-size: 14px;">Otros</span>
            <input id="pl_otros_2" name="pl_otros_2" type="text" class="form-control" style="font-size: 13px;" >
        </div>

        </div>
</div>
 <!-- ***********************************PUNCION LUMBAR 3 *********************************** -->

        <div class="col-md-12" id="pl_lumbar3" style="display:none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9932CC;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Punción Lumbar 3</h5>
                    </div>
        <div class="row">

        <div class="col-md-3" id="pl_lumbar3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_3" id="intento_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
            </div> 
       

        <div class="col-md-3" id="com_puncionlumbar3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_3" id="complicacion_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipo_puncionlumbar_3"  style="display: none;">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_3" id="tipocomplicacion_3" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtros3()" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Cefalea">Cefalea</option>
                        <option value="Dolor transitorio radicular">Dolor Transitorio Radicular</option>
                        <option value="Hematoma Subdural">Hematoma Subdural</option>
                        <option value="Meningitis">Meningitis</option>
                        <option value="Lesión Neural">Lesión Neural</option>
                        <option value="otros">Otros</option>
                    </select>
        </div> 

        <div class="col-md-3" id="otros_3" name="otros_3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span >
                    <input id="pl_otros_3" name="pl_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
                </div>
            </div> 
        </div>

        <!-- ***********************************INTUBACIÓN*********************************** -->
        
        <!-- **********Linea de separación ********************* -->
                <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        intubacion</h5>
                    </div>
                </div>

    
        <div class="col-md-6" id="p_intubacion" >
                    <strong style="font-size: 14px;">INTUBACIÓN</strong>
                    <select name="intubacion" id="intubacion" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="pro_intubacion" style="display: none;">
            <strong style="font-size: 14px;">Procedimiento Intubación </strong>
            <select name="conteo_intubacion" id="intubacion123" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Intubación 1</option>
                <option value= 2 >Intubación 2</option>
                <option value= 3 >Intubación 3</option>
            </select>
        </div>
 <!-- **********************************INTUBACIÓN 1*********************************** -->
        <div class="col-md-12" id="pl_intubacion1" style="display: none;">
            <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9400db;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Intubación 1</h5>
            </div>

    <div class="row">

        <div class="col-md-3" id="si_intubacion" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_intubacion1" id="intento_intubacion1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div> 

        <div class="col-md-3" id="com_intubacion1">
            <span style="font-size: 14px;">Complicaciones</span>
            <select name="complicacion_intubacion_1" id="complicacion_intubacion_1" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="col-md-3" id="tipocomplicacion_intubacion11">
            <span style="font-size: 14px;">Tipo de Complicaciones</span>
            <select name="tipocomplicacion_intubacion1" id="tipocomplicacion_intubacion1" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtrosintu1()">
                <option value="Seleccione">Seleccione</option>
                <option value="Broncoaspiración">Broncoaspiración</option>
                <option value="Ruptura de Tráquea">Ruptura de Tráquea</option>
                <option value="Traumatismo Dental">Traumatismo Dental</option>
                <option value="Edema Glótico">Edema Glótico</option>
                <option value="Lesión de Cuerdas Vocales">Lesión de Cuerdas Vocales</option>
                <option value="Otros">Otros</option>
            </select>
        </div>

            <div class="col-md-3" id="intubacion_otros" style="display: none;">
                <span style="font-size: 14px;">Otros</span>
                <input id="intub_otros_1" name="intub_otros_1" type="text" class="form-control" style="font-size: 13px;" >
            </div>
            </div> 
        </div>


            <!-- **********************************INTUBACIÓN 2 *********************************** -->
                <div class="col-md-12" id="pl_intubacion2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9400db;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Intubación 2</h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="si_intubacion2">
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_intubacion2" id="intento_intubacion2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
            </div> 

        <div class="col-md-3" id="com_intubacion2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_intubacion_2" id="complicacion_intubacion_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 
        <div class="col-md-3" id="tipocomplicacion_intubacion22">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_intubacion2" id="tipocomplicacion_intubacion2" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtrosintu2()">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Broncoaspiración">Broncoaspiración</option>
                        <option value="Ruptura de Tráquea">Ruptura de Tráquea</option>
                        <option value="Traumatismo Dental">Traumatismo Dental</option>
                        <option value="Edema Glótico">Edema Glótico</option>
                        <option value="Lesión de Cuerdas Vocales">Lesión de Cuerdas Vocales</option>
                        <option value="Otros">Otros</option>
                    </select>
            </div> 
        
        <div class="col-md-3" id="intubacion_otros2" name="intubacion_otros2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="intub_otros_2" name="intub_otros_2" type="text" class="form-control" style="font-size: 13px;" >
            </div>

            </div>
        </div>

            <!-- **********************************INTUBACIÓN 3 *********************************** -->
            <div class="col-md-12" id="pl_intubacion3" style="display: none;" >
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9400db;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Intubación 3</h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="si_intubacion" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_intubacion3" id="intento_intubacion3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div> 

        <div class="col-md-3" id="complicaciones_intubacion3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_intubacion_3" id="complicacion_intubacion_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
            </div> 

        <div class="col-md-3" id="tipocomplicacion_intubacion33">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_intubacion3" id="tipocomplicacion_intubacion3" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtrosintu3()">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Broncoaspiración">Broncoaspiración</option>
                        <option value="Ruptura de Tráquea">Ruptura de Tráquea</option>
                        <option value="Traumatismo Dental">Traumatismo Dental</option>
                        <option value="Edema Glótico">Edema Glótico</option>
                        <option value="Lesión de Cuerdas Vocales">Lesión de Cuerdas Vocales</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
        
                <div class="col-md-3"id="intubacion_otros3" name="intubacion_otros3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="intub_otros_3" name="intub_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        
        </div>

 <!-- **********Linea de separación PARA CVC  ********************* -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        CVC</h5>
                    </div>
                </div>
           <!-- ***********************************CVC********************************** -->
            <div class="col-md-6" id="p_cvc">
                <strong style="font-size: 14px;">CVC</strong>
                <select name="cvc" id="cvc" class="form-control" style="font-size: 14px;">
                    <option value="Sin registro">Sin registro</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="col-md-6" id="num_cvc" style="display: none;">
                <strong style="font-size: 14px;">Procedimiento CVC</strong>
                <select name="conteo_cvc" id="cvc123" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value= 1 >CVC 1</option>
                    <option value= 2 >CVC 2</option>
                    <option value= 3 >CVC 3</option>
                </select>
            </div>


<!-- ***********************************CVC 1 ********************************** -->

<!-- Contenedor para CVC 1 con estilo personalizado -->
            
        <div class="col-md-12" id="cvc1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#8a2be2;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        CVC 1 </h5>
                    </div>
                
    <div class="row">


        <div class="col-md-3" id="tipo_cvc">
            <strong style="font-size: 14px;">Tipo de CVC </strong>
            <select name="tipocvc" id="tipocvc" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Tipó de CVC -->
                <option value="MAHURKAR">MAHURKAR</option>
                <option value="NIAGARA">NIAGARA</option>

            </select>
        </div>

        <div class="col-md-3" id="intento_cvc1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_cvc_1" id="intento_cvc_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable de Intentos. -->
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>

            
        <div class="col-md-3" id="complicaciones_cvc1">
            <span style="font-size: 14px;">Complicaciones</span>
            <select name="complicacion_cvc1" id="complicacion_cvc1" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable Complicaciones. -->
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="col-md-3" id="tipocomplicacion_cvc11" style="display: none;">
            <span style="font-size: 14px;">Tipo de Complicaciones</span>
            <select name="tipocomplicacion_cvc1" id="tipocomplicacion_cvc1" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtroscvc1()" >
                <option value="Seleccione">Seleccione</option>  <!-- Estas líneas definen las opciones dentro del menú desplegable de Tipo de complicaciones . -->
                <option value="Neumotórax">Neumotórax</option>
                <option value="Hemotórax">Hemotórax</option>
                <option value="Punción Arterial Trombosis">Punción Arterial</option>
                <option value="Trombosis">Trombosis</option>
                <option value="Mal Posición del CVC">Mal Posición del CVC</option>
                <option value="Otros">Otros</option>
            </select>
        </div>

                <div class="col-md-3" id="otros_cvc1" name="otros_cvc1"style="display: none;">  <!-- Estas líneas se se el campo Otros. -->
                    <span style="font-size: 14px;">Otros</span>
                    <input id="cvc_otros_1" name="cvc_otros_1" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>  <!-- div del row -->


        <!-- ***********************************CVC 2 ********************************** -->

        <div class="col-md-12" id="cvc2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#8a2be2 ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        CVC 2 </h5>
                    </div>
                

    <div class="row">

        <div class="col-md-3" id="tipo_cvc2">
            <strong style="font-size: 14px;">Tipo de CVC </strong>
            <select name="tipocvc2" id="tipocvc2" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value="MAHURKAR">MAHURKAR</option>
                <option value="NIAGARA">NIAGARA</option>
            </select>
        </div>

        <div class="col-md-3" id="intento_cvc2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_cvc_2" id="intento_cvc_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        
        <div class="col-md-3" id="complicaciones_cvc2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_cvc2" id="complicacion_cvc2"  class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

            <div class="col-md-3" id="tipocomplicacion_cvc22" style="display: none;">
                <span style="font-size: 14px;">Tipo de Complicaciones</span>
                <select name="tipocomplicacion_cvc2" id="tipocomplicacion_cvc2" class="form-control" style="font-size: 14px;" >
                    <option value="Seleccione">Seleccione</option>
                    <option value="Neumotórax">Neumotórax</option>
                    <option value="Hemotórax">Hemotórax</option>
                    <option value="Punción Arterial Trombosis">Punción Arterial</option>
                    <option value="Trombosis">Trombosis</option>
                    <option value="Mal Posición del CVC">Mal Posición del CVC</option>
                    <option value="Otros">Otros</option>
                </select>
            </div>

            <div class="col-md-3" id="otros_cvc2" name="otros_cvc2" style="display: none;">
                <span style="font-size: 14px;">Otros</span>
                <input id="cvc_otros_2" name="cvc_otros_2" type="text" class="form-control" style="font-size: 13px;" >
            </div>
        </div>
    </div> <!-- div del row2 -->

        <!-- ***********************************CVC 3 ********************************** -->

        <div class="col-md-12" id="cvc3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#8a2be2 ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        CVC 3</h5>
                    </div>
                
<div class="row">

        <div class="col-md-3" id="tipo_cvc3">
            <strong style="font-size: 14px;">Tipo de CVC </strong>
            <select name="tipocvc3" id="tipocvc3" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value="MAHURKAR">MAHURKAR</option>
                <option value="NIAGARA">NIAGARA</option>

            </select>
        </div>

        <div class="col-md-3" id="intento_cvc3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_cvc_3" id="intento_cvc_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_cvc3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_cvc3" id="complicacion_cvc3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_cvc33">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_cvc3" id="tipocomplicacion_cvc3" class="form-control" style="font-size: 14px;" onchange="mostrarCampoOtroscvc3()" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Neumotórax">Neumotórax</option>
                        <option value="Hemotórax">Hemotórax</option>
                        <option value="Punción ArterialTrombosois">Punción Arterial</option>
                        <option value="Trombosois">Trombosois</option>
                        <option value="Mal Posición del CVC">Mal Posición del CVC</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otros_cvc3" name="otros_cvc3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="cvc_otros_3" name="cvc_otros_3" type="text" class="form-control" style="font-size: 13px;" >
            </div>
        </div>
    </div>




<!-- **********Linea de separación PARA PARACENTESIS ********************* -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        PARACENTESIS</h5>
                    </div>
                </div>

<!-- ***********************************PARACENTESIS*********************************** -->
        <div class="col-md-6" id="p_paracentesis"  >
                    <strong style="font-size: 14px;">PARACENTESIS</strong>
                    <select name="paracentesis" id="paracentesis" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="num_parecentesis1" style="display: none;"> 
            <strong style="font-size: 14px;">Procedimiento Paracentesis </strong>
            <select name="conteo_parecentesis" id="num_parecentesis" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Paracentesis 1</option>
                <option value= 2 >Paracentesis 2</option>
                <option value= 3 >Paracentesis 3</option>
            </select>
        </div>



        <!-- *********************************** PARACENTESIS 1 ********************************** -->

        <div class="col-md-12" id="paracentesis1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9370db ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Paracentesis 1</h5>
                    </div>
                    
<div class="row">

        <div class="col-md-3" id="intento_paracentesis1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_paracentesis_1" id="intento_paracentesis_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_paracentesis1" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_paracentesis_1" id="complicacion_paracentesis_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_paracentesis1" style="display: none;">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_paracentesis_1" id="tipocomplicacion_paracentesis_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Hematoma de la Pared Abdominal">Hematoma de la Pared Abdominal</option>
                        <option value="Perforación Intestinal">Perforación Intestinal</option>
                        <option value="Hemoperitoneo">Hemoperitoneo</option>
                        <option value="Fistula">Fistula</option>
                        <option value="Muerte">Muerte</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
                <div class="col-md-3" id="otros_paracentesis_1" name="otros_paracentesis_1"  style="display: none;">
                            <span style="font-size: 14px;">Otros</span>
                            <input id="paracen_otros_1" name="paracen_otros_1" type="text" class="form-control" style="font-size: 13px;" >
                    </div>
            </div>
        </div>
                <!-- *********************************** PARACENTESIS 2 ********************************** -->

                <div class="col-md-12" id="paracentesis2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9370db ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Paracentesis 2</h5>
                    </div>
                
<div class="row">

        <div class="col-md-3" id="intento_paracentesis2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_paracentesis_2" id="intento_paracentesis_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_paracentesis2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_paracentesis_2" id="complicacion_paracentesis_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_paracentesis2" style="display: none;" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_paracentesis_2" id="tipocomplicacion_paracentesis_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Hematoma de la Pared Abdominal">Hematoma de la Pared Abdominal</option>
                        <option value="Perforación Intestinal">Perforación Intestinal</option>
                        <option value="Hemoperitoneo">Hemoperitoneo</option>
                        <option value="Fistula">Fistula</option>
                        <option value="Muerte">Muerte</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
                <div class="col-md-3" id="otros_paracentesis_2" name="otros_paracentesis_2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="paracen_otros_2" name="paracen_otros_2" type="text" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>
        </div>
<!-- *********************************** PARACENTESIS 3 ********************************** -->

<div class="col-md-12" id="paracentesis3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9370db;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Paracentesis 3</h5>
                    </div>
                
<div class="row">
        <div class="col-md-3" id="intento_paracentesis2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_paracentesis_3" id="intento_paracentesis_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_paracentesis3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_paracentesis_3" id="complicacion_paracentesis_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_paracentesis3" style="display: none;" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tipocomplicacion_paracentesis_3" id="tipocomplicacion_paracentesis_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Hematoma de la Pared Abdominal">Hematoma de la Pared Abdominal</option>
                        <option value="Perforación Intestinal">Perforación Intestinal</option>
                        <option value="Hemoperitoneo">Hemoperitoneo</option>
                        <option value="Fistula">Fistula</option>
                        <option value="Muerte">Muerte</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
                <div class="col-md-3" id="otros_paracentesis_3" name="otros_paracentesis_3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="paracen_otros_3" name="paracen_otros_3" type="text" class="form-control" style="font-size: 13px;" >
                </div>
        </div>
    </div>

            <!-- ********** Linea de division BIOPSIA PIEL ********************* -->
            <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;;
                        margin-top:8px;
                        font-size: 13px;">
                        BIOPSIA PIEL</h5>
                    </div>
                </div>

<!-- ***********************************BIOPSIA PIEL*********************************** -->
        
        <div class="col-md-6" id="p_biposia_piel" >
                    <strong style="font-size: 14px;">BIOPSIA PIEL</strong>
                    <select name="biposia_piel" id="biposia_piel" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>
        
        <div class="col-md-6" id="num_biopsia" style="display: none;">
            <strong style="font-size: 14px;">Procedimiento Biopsia Piel </strong>
            <select name="conteo_biopsiapiel" id="num_biopsiapiel" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Biopsia piel 1</option>
                <option value= 2 >Biopsia piel 2</option>
                <option value= 3 >Biopsia piel 3</option>
            </select>
        </div>
        <!-- *********************************** BIOPSIA PIEL 1 ********************************** -->

        <div class="col-md-12" id="pl_bp1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#ba55d3 ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biopsia Piel 1</h5>
                    </div>
    <div class="row">

        <div class="col-md-3" id="intento_biopsiapiel1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_biopsiapiel_1" id="intento_pbiopsiapiel_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_paracentesis1" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_biopsiapiel_1" id="complicacion_biopsiapiel_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_biopsiapiel1" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_biopsiapiel_1" id="tp_biopsiapiel_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sangrado">Sangrado</option>
                        <option value="Infección">Infección</option>
                        <option value="Lesión Neuronal">Lesión Neuronal</option>
                        <option value="Lesión Muscular">Lesión Muscular</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_biopsiapiel" name="otros_biopsiapiel" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="biopiel_otros_1" name="biopiel_otros_1" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>
        <!-- *********************************** BIOPSIA PIEL 2 ********************************** -->

        <div class="col-md-12" id="pl_bp2" style="display: none;" >
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#ba55d3 ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biopsia Piel 2</h5>
                    </div>
            <div class="row">

        <div class="col-md-3" id="intento_biopsiapiel2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_biopsiapiel_2" id="intento_pbiopsiapiel_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_paracentesis2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_biopsiapiel_2" id="complicacion_biopsiapiel_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_biopsiapiel2" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_biopsiapiel_2" id="tp_biopsiapiel_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sangrado">Sangrado</option>
                        <option value="Infección">Infección</option>
                        <option value="Lesión Neuronal">Lesión Neuronal</option>
                        <option value="Lesión Muscular">Lesión Muscular</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_biopsiapiel2" name="otros_biopsiapiel2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="biopiel_otros_2" name="biopiel_otros_2" type="text" class="form-control"  name="otros_biopsiapie2" style="font-size: 13px;" >
            </div>

        </div>
    </div>
  <!-- *********************************** BIOPSIA PIEL 3 ********************************** -->

        <div class="col-md-12" id="pl_bp3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#ba55d3 ;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biopsia Piel 3</h5>
                    </div>
                
<div class="row">
        <div class="col-md-3" id="intento_biopsiapiel3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="intento_biopsiapiel_3" id="intento_pbiopsiapiel_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_paracentesis3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_biopsiapiel_3" id="complicacion_biopsiapiel_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_biopsiapiel3" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_biopsiapiel_3" id="tp_biopsiapiel_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sangrado">Sangrado</option>
                        <option value="Infección">Infección</option>
                        <option value="Lesión Neuronal">Lesión Neuronal</option>
                        <option value="Lesión Muscular">Lesión Muscular</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_biopsiapiel3" name="otros_biopsiapiel3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="biopiel_otros_3" name="biopiel_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>

                <!-- ***********************************BIOPSIA TEJIDO CELULAR SUBC *********************************** -->

 <!-- ********** Linea de division  Biposia Tejido Celular SUBC ********************* -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        BIOPSIA TEJIDO CELULAR SUBC</h5>
                    </div>
                </div>

        <div class="col-md-6" id="p_biposia_tejido" >
                    <strong style="font-size: 14px;">BIOPSIA TEJIDO CELULAR SUBC</strong>
                    <select name="biposia_tejido" id="biposia_tejido" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="num_biopsiatejido" style="display: none;">
            <strong style="font-size: 14px;">Biopsia Tejido Celular SUBC </strong>
            <select name="conteo_biopsiaSUBC" id="num_biopsiaSUBC" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Biopsia Tejido Celular SUBC 1</option>
                <option value= 2 >Biopsia Tejido Celular SUBC 2</option>
                <option value= 3 >Biopsia Tejido Celular SUBC 3</option>
            </select>
        </div>

<!-- *********************************** Biposia Tejido Celular SUBC 1 ********************************** -->

        <div class="col-md-12"  id="btc1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9f58a4;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biopsia Tejido Celular SUBC 1 </h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="Biopsia_tejido_celular1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="SUBC_1" id="SUBC_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>

        <div class="col-md-3" id="complicaciones_biopsia_subc1" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_SUBC_1" id="complicacion_SUBC_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_SUBC_1" style="display: none;" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_SUBC_1" id="tp_SUBC_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sangrado">Sangrado</option>
                        <option value="Infección">Infección</option>
                        <option value="Lesión Neuronal">Lesión Neuronal</option>
                        <option value="Lesión Muscular">Lesión Muscular</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_SUBC_1" name="otros_SUBC_1" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="subc_otros_1" name="subc_otros_1" type="text" class="form-control" >
            </div>
        </div>
    </div>

<!-- *********************************** Biposia Tejido Celular SUBC 2 ********************************** -->

        <div class="col-md-12" id="btc2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9f58a4;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biopsia Tejido Celular SUBC 2 </h5>
                    </div>
              <div class="row">

        <div class="col-md-3" id="Biopsia_tejido_celular2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="SUBC_2" id="SUBC_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_biopsia_subc2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_SUBC_2" id="complicacion_SUBC_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_SUBC_2" style="display: none;" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_SUBC_2" id="tp_SUBC_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sangrado">Sangrado</option>
                        <option value="Infección">Infección</option>
                        <option value="Lesión Neuronal">Lesión Neuronal</option>
                        <option value="Lesión Muscular">Lesión Muscular</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_SUBC_2" name="otros_SUBC_2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="subc_otros_2" name="subc_otros_2" type="text" class="form-control" style="font-size: 13px;" >
            </div>
        </div>
    </div>
<!-- *********************************** Biposia Tejido Celular SUBC 3 ********************************** -->

        <div class="col-md-12" id="btc3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#9f58a4;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biopsia Tejido Celular SUBC 3</h5>
                    </div>
                    
               <div class="row">
        <div class="col-md-3" id="Biopsia_tejido_celular3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="SUBC_3" id="SUBC_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_biopsia_subc3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_SUBC_3" id="complicacion_SUBC_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_SUBC_3" style="display: none;" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_SUBC_3" id="tp_SUBC_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sangrado">Sangrado</option>
                        <option value="Infección">Infección</option>
                        <option value="Lesión Neuronal">Lesión Neuronal</option>
                        <option value="Lesión Muscular">Lesión Muscular</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_SUBC_3" name="otros_SUBC_3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="subc_otros_3" name="subc_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>

        
<!-- ***********************************BIOPSIA TIROIDES *********************************** -->
<!-- ********** Linea de division  Biposia Tiroides ********************* -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        BIOPSIA TIROIDES</h5>
                    </div>
                </div>

        <div class="col-md-6" id="p_biposia_tiroides" >
                    <strong style="font-size: 14px;">BIOPSIA TIROIDES</strong>
                    <select name="biposia_tiroides" id="biposia_tiroides" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="num_biopsiat" >
            <strong style="font-size: 14px;">Biposia Tiroides </strong>
            <select name="conteo_biopsiatiroides" id="num_biopsiatiroides" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Biopsia Tiroides 1</option>
                <option value= 2 >Biopsia Tiroides 2</option>
                <option value= 3 >Biopsia Tiroides 3</option>
            </select>
        </div>

<!-- *********************************** Biposia Tiroides  1 ********************************** -->

        <div class="col-md-12" id="bt1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#b246f2;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biposia Tiroides</h5>
                    </div>
              <div class="row">

        <div class="col-md-3" id="Biposia_Tiroides1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="BT_1" id="BT_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_BT1" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_BT_1" id="complicacion_BT_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_BT_1" style="display: none;">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_BT1" id="tp_BT1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Infección">Infección</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Punción Vascular">Punción Vascular</option>
                        <option value="Perforación de Traquea">Perforación de Traquea</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_BT_1" name="otros_BT_1" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="bt_otros_1" name="bt_otros_1" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div> 
    </div>
<!-- *********************************** Biposia Tiroides  2 ********************************** -->

        <div class="col-md-12" id="bt2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#b246f2;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biposia Tiroides</h5>
                    </div>
          <div class="row">

        <div class="col-md-3" id="Biposia_Tiroides2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="BT_2" id="BT_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_BT2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_BT_2" id="complicacion_BT_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_BT_2" style="display: none;">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp__BT2" id="tp_BT2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Infección">Infección</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Punción Vascular">Punción Vascular</option>
                        <option value="Perforación de Traquea">Perforación de Traquea</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
        <div class="col-md-3" id="otro_BT_2" name="otros_BT_2" style="display: none;" >
                    <span style="font-size: 14px;">Otros</span>
                    <input id="bt_otros_2" name="bt_otros_2" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>     
    </div>
<!-- *********************************** Biposia Tiroides  3 ********************************** -->

        <div class="col-md-12" id="bt3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#b246f2;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Biposia Tiroides</h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="Biposia_Tiroides3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="BT_3" id="BT_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_BT3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_BT_3" id="complicacion_BT_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_BT_3" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp__BT3" id="tp_BT3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Infección">Infección</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Punción Vascular">Punción Vascular</option>
                        <option value="Perforación de Traquea">Perforación de Traquea</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_BT_3" name="otros_BT_3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="bt_otros_3" name="bt_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div> 
    </div>
<!-- ***********************************TORACOCENTESIS *********************************** -->
<!-- ********** Linea de division  Toracocentesis ********************* -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        TORACOCENTESIS</h5>
                    </div>
                </div>
                
        <div class="col-md-6" id="p_toracocentesis" >
                    <strong style="font-size: 14px;">TORACOCENTESIS</strong>
                    <select name="toracocentesis" id="toracocentesis" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="num_tora">
            <strong style="font-size: 14px;">Toracocentesis </strong>
            <select name="conteo_toracocentesis" id="num_toracocentesis" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Toracocentesis 1</option>
                <option value= 2 >Toracocentesis 2</option>
                <option value= 3 >Toracocentesis 3</option>
            </select>
        </div>
<!-- *********************************** Toracocentesis  1 ********************************** -->

        <div class="col-md-12" id="toracocentesis1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#ee80ee;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Toracocentesis 1</h5>
                    </div>
    <div class="row">

        <div class="col-md-3" id="Toracocentesi1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="Toracocentesi_1" id="Toracocentesi_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_tora_1" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_tora_1" id="complicacion_tora_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_tora_1" style="display: none;">
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_tora1" id="tp_tora1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Neumotorax">Neumotórax</option>
                        <option value="Hemotorax">Hemotórax</option>
                        <option value="Punción Visceral">Punción Visceral</option>
                        <option value="Infección">Infección</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_tora_1" name="otros_tora_1" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="tora_otros_1" name="tora_otros_1" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div> 
    </div>
<!-- *********************************** Toracocentesis  2 ********************************** -->

        <div class="col-md-12" id="toracocentesis2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#ee80ee;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Toracocentesis 2</h5>
                    </div>
             <div class="row">

        <div class="col-md-3" id="Toracocentesi2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="Toracocentesi_2" id="Toracocentesi_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_tora_2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_tora_2" id="complicacion_tora_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_tora_2" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_tora2" id="tp_tora2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Neumotorax">Neumotórax</option>
                        <option value="Hemotorax">Hemotórax</option>
                        <option value="Punción Visceral">Punción Visceral</option>
                        <option value="Infección">Infección</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_tora_2" name="otros_tora_2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="tora_otros_2" name="tora_otros_2" type="text" class="form-control" id="otro_tora_2" name="otros_tora_2" style="font-size: 13px;" >
            </div>
        </div> 
    </div>
            <!-- *********************************** Toracocentesis  3 ********************************** -->

        <div class="col-md-12" id="toracocentesis3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#ee80ee;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Toracocentesis 3</h5>
                    </div>
    <div class="row">

        <div class="col-md-3" id="Toracocentesi3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="Toracocentesi_3" id="Toracocentesi_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_tora_3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_tora_3" id="complicacion_tora_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_tora_3" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_tora3" id="tp_tora3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Neumotorax">Neumotórax</option>
                        <option value="Hemotorax">Hemotórax</option>
                        <option value="Punción Visceral">Punción Visceral</option>
                        <option value="Infección">Infección</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
                <div class="col-md-3" id="otro_tora_3" name="otros_tora_3" style="display: none;" >
                    <span style="font-size: 14px;">Otros</span>
                    <input id="tora_otros_3" name="tora_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
                </div>
            </div> 
        </div>

        
<!-- ***********************************ARTROCENTESIS *********************************** -->
        <!-- ********** Linea de division  Biposia Tiroides ********************* -->
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;;
                        margin-top:8px;
                        font-size: 13px;">
                        ARTROCENTESIS</h5>
                    </div>
                </div>

        <div class="col-md-6" id="p_artrocentesis" >
                    <strong style="font-size: 14px;">ARTROCENTESIS</strong>
                    <select name="artrocentesis" id="artrocentesis" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="num_artrocentesis1" style="display: none;">
            <strong style="font-size: 14px;">Artrocentesis</strong>
            <select name="conteo_artrocentesis" id="num_artrocentesis" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Artrocentesis 1</option>
                <option value= 2 >Artrocentesis 2</option>
                <option value= 3 >Artrocentesis 3</option>
            </select>
        </div>
<!-- *********************************** Artrocentesis 1 ********************************** -->

        <div class="col-md-12" id="atro1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#dda0dd;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Artrocentesis 1</h5>
                    </div>

    <div class="row">

            <div class="col-md-3" id="Artrocentesis1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="Artro_1" id="Artro_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
            </div>

            <div class="col-md-3" id="complicaciones_Artro_1">
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_Artro_1" id="complicacion_Artro_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
            </div> 

            <div class="col-md-3" id="tipocomplicacion_Artro_1" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_Artro_1" id="tp_Artro_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Artritis Séptica">Artritis Séptica </option>
                        <option value="Bursitis Séptica">Bursitis Séptica</option>
                        <option value="Ruptura de Tendón">Ruptura de Tendón</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Otros">Otros</option>
                    </select>
            </div> 
    
                <div class="col-md-3" id="otro_Artro_1" name="otros_Artro_1" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="artro_otros_1" name="artro_otros_1" type="text" class="form-control" style="font-size: 13px;" >
                </div>

            </div>  
        </div>

            <!-- *********************************** Artrocentesis 2 ********************************** -->

        <div class="col-md-12" id="atro2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#dda0dd;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Artrocentesis 2</h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="Artrocentesis2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="Artro_2" id="Artro_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_Artro_2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_Artro_2" id="complicacion_Artro_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

            <div class="col-md-3" id="tipocomplicacion_Artro_2" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_Artro_2" id="tp_Artro_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Artritis Séptica">Artritis Séptica </option>
                        <option value="Bursitis Séptica">Bursitis Séptica</option>
                        <option value="Ruptura de Tendón">Ruptura de Tendón</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Otros">Otros</option>
                    </select>
            </div> 
    
            <div class="col-md-3" id="otro_Artro_2" name="otros_Artro_2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="artro_otros_2" name="artro_otros_2" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>
<!-- *********************************** Artrocentesis 3 ********************************** -->

        <div class="col-md-12" id="atro3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#dda0dd;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Artrocentesis 3</h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="Artrocentesis3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="Artro_3" id="Artro_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_Artro_3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_Artro_3" id="complicacion_Artro_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

            <div class="col-md-3" id="tipocomplicacion_Artro_3" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tp_Artro_3" id="tp_Artro_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Artritis Séptica">Artritis Séptica </option>
                        <option value="Bursitis Séptica">Bursitis Séptica</option>
                        <option value="Ruptura de Tendón">Ruptura de Tendón</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Otros">Otros</option>
                    </select>
            </div> 
    
                <div class="col-md-3" id="otro_Artro_3" name="otros_Artro_3" style="display: none;" >
                    <span style="font-size: 14px;">Otros</span>
                    <input id="artro_otros_3" name="artro_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
                </div>
            </div>  
        </div>


        <!-- *********************************** ASPIRACION DE MO *********************************** -->
        
        <div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#e0e0e0 ;
                        color: #e0e0e0;
                        margin-top:8px;
                        font-size: 13px;">
                        ASPIRACIÓN DE MO </h5>
                    </div>
                </div>

                <!-- ********** Linea de division  ASPIRACION DE MO  ********************* -->
        
        <div class="col-md-6" id="p_aspiracion_mo" >
                    <strong style="font-size: 14px;">ASPIRACIÓN DE MO </strong>
                    <select name="aspiracion_mo" id="aspiracion_mo" class="form-control" style="font-size: 14px;" >
                        <option value="Sin registro">Sin registro</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
        </div>

        <div class="col-md-6" id="num_mo" style="display: none;"> 
            <strong style="font-size: 14px;">Aspiración de MO </strong>
            <select name="conteo_mo" id="num_aspiracion" class="form-control" style="font-size: 14px;">
                <option value="Seleccione">Seleccione</option>
                <option value= 1 >Aspiración de MO 1</option>
                <option value= 2 >Aspiración de MO 2</option>
                <option value= 3 >Aspiración de MO 3</option>
            </select>
        </div>
<!-- *********************************** Aspiración de MO 1 ********************************** -->

        <div class="col-md-12" id="mo1" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#d8bfd8;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Aspiración de MO 1</h5>
                    </div>
               <div class="row">

        <div class="col-md-3" id="Aspiración_MO_1" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="MO_1" id="MO_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_MO_1" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_MO_1" id="complicacion_MO_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_MO_1" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tc_MO1" id="tc_MO_1" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Neuropatia Transitoria">Neuropatia Transitoria</option>
                        <option value="Neumotorax">Neumotórax</option>
                        <option value="Hemomediastino">Hemomediastino</option>
                        <option value="Hemotorax">Hemotórax</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_MO_1" name="otros_MO_1" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="mo_otros_1" name="mo_otros_1" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>
            <!-- *********************************** Aspiración de MO 2 ********************************** -->

        <div class="col-md-12" id="mo2" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#d8bfd8;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Aspiración de MO 2</h5>
                    </div>
                <div class="row">

        <div class="col-md-3" id="Aspiración_MO_2" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="MO_2" id="MO_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_MO_2" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_MO_2" id="complicacion_MO_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_MO_2" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tc_MO_2" id="tc_MO_2" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Neuropatia Transitoria">Neuropatia Transitoria</option>
                        <option value="Neumotorax">Neumotórax</option>
                        <option value="Hemomediastino">Hemomediastino</option>
                        <option value="Hemotorax">Hemotórax</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_MO_2" name="otros_MO_2" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="mo_otros_2" name="mo_otros_2" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>
    </div>
            <!-- *********************************** Aspiración de MO 3 ********************************** -->

            <div class="col-md-12" id="mo3" style="display: none;">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color:#d8bfd8;
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        Aspiración de MO 3</h5>
                    </div>

    <div class="row">

        <div class="col-md-3" id="Aspiración_MO_3" >
                    <span style="font-size: 14px;">Intento</span>
                    <select name="MO_3" id="MO_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Exitoso">Exitoso</option>
                        <option value="Fallido">Fallido</option>
                    </select>
        </div>
        <div class="col-md-3" id="complicaciones_MO_3" >
                    <span style="font-size: 14px;">Complicaciones</span>
                    <select name="complicacion_MO_3" id="complicacion_MO_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
        </div> 

        <div class="col-md-3" id="tipocomplicacion_MO_3" >
                    <span style="font-size: 14px;">Tipo de Complicaciones</span>
                    <select name="tc_MO_3" id="tc_MO_3" class="form-control" style="font-size: 14px;" >
                        <option value="Seleccione">Seleccione</option>
                        <option value="Hematoma">Hematoma</option>
                        <option value="Neuropatia Transitoria">Neuropatia Transitoria</option>
                        <option value="Neumotorax">Neumotórax</option>
                        <option value="Hemomediastino">Hemomediastino</option>
                        <option value="Hemotorax">Hemótorax</option>
                        <option value="Otros">Otros</option>
                    </select>
        </div> 
    
            <div class="col-md-3" id="otro_MO_3" name="otros_MO_3" style="display: none;">
                    <span style="font-size: 14px;">Otros</span>
                    <input id="mo_otros_3" name="mo_otros_3" type="text" class="form-control"  style="font-size: 13px;" >
            </div>
        </div>  
    </div>


</div>  <!-- delprimer  row -->





        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guadar</button>
        </div>
    </div>
    </div>
</div>
<script src=js/scriptmodal.js></script>