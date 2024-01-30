<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Seguimiento Código EVC</title>
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


        <h5>Seguimiento Código EVC</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>


    <div class="container">

        <div class="row">

            <div class="form-header">
                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(237, 105, 127) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                    Dependencia Funcional</h5>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">Seguimiento</strong>
                <select name="dependendcia_funcional_seg" id="dependendcia_funcional_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Mes">Mes</option>
                    <option value="Tres Meses">Tres Meses</option>
                    <option value="Seis Meses">Seis Meses</option>
                    <option value="Un año">Un año</option>
                </select>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">Nivel</strong>
                <select name="dependendcia_nivel_seg" id="dependendcia_nivel_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Leve">Leve</option>
                    <option value="Moderado">Moderado</option>
                    <option value="Severa">Severa</option>
                </select>
            </div>

            <div class="form-header">
                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(127, 184, 235);
                         color:aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                    FIM</h5>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">FIM Inicial </strong>
                <input type="number" step="any" class="form-control" id="fim_inicial_seg" name="fim_inicial_seg" style="font-size: 13px;">
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px; margin-top: 50px;">Nivel</strong>
                <select name="FIM_nivel_seg" id="FIM_nivel_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Leve">Leve</option>
                    <option value="Moderado">Moderado</option>
                    <option value="Severa">Severa</option>
                </select>
            </div>

            <div class="col-md-4">
                <strong style="font-size: 14px;">FIM</strong>
                <input type="number" step="any" class="form-control" id="fim_seg" name="fim_seg" style="font-size: 13px;">
            </div>

            <div class="form-header">
                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(139, 93, 149,0.6);;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                    Barthel</h5>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">Seguimiento</strong>
                <select name="barhtel_seg" id="barhtel_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Mes">Mes</option>
                    <option value="Tres Meses">Tres Meses</option>
                    <option value="Seis Meses">Seis Meses</option>
                    <option value="Un año">Un año</option>
                </select>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">Nivel</strong>
                <select name="barthel_nivel_seg" id="barthel_nivel_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Leve">Leve</option>
                    <option value="Moderado">Moderado</option>
                    <option value="Severa">Severa</option>
                </select>
            </div>


            <div class="form-header">
                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(237, 105, 127);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                    NIHHS</h5>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">Seguimiento</strong>
                <select name="nihss_seg" id="nihss_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Mes">Mes</option>
                    <option value="Tres Meses">Tres Meses</option>
                    <option value="Seis Meses">Seis Meses</option>
                    <option value="Un año">Un año</option>
                </select>
            </div>

            <div class="col-md-6" id="escala_nihss_seg">
                <strong style="font-size: 14px; margin-top: 50px;">Escala NIHSS</strong>
                <select name="nihss_seg" id="nihss_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="1-4 Leve">1- 4 Leve</option>
                    <option value="5-15 Moderado">5- 15 Moderado</option>
                    <option value="16-20 Moderado Severo">16- 20 Moderado Severo</option>
                    <option value="21-42 Severo">21- 42 Severo</option>
                </select>
            </div>

            <div class="form-header">
                <h5 class="form-title" style="text-align: center;
                        background-color:rgb(127, 184, 235);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                    RANKIN</h5>
            </div>

            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">Seguimiento</strong>
                <select name="RANKIN_funcional_seg" id="RANKIN_funcional_seg" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Mes">Mes</option>
                    <option value="Tres Meses">Tres Meses</option>
                    <option value="Seis Meses">Seis Meses</option>
                    <option value="Un año">Un año</option>
                </select>
            </div>


            <div class="col-md-6">
                <strong style="font-size: 14px; margin-top: 50px;">RANKIN</strong>
                <select name="rankin_seguimiento" id="rankin_seguimiento" class="form-control" style="font-size: 14px;">
                    <option value="Seleccione">Seleccione</option>
                    <option value="0 Sin Sintomas A pesar de sintomas  realiza actividades cotidianas.">0 Sin Sintomas A pesar de sintomas realiza actividades cotidianas.</option>
                    <option value="2 Incapacidad Leve. Incapaz de realizar actividades  previas  pero capaz de  hacer alguna actividad sin asistencia .">2 Incapacidad Leve. Incapaz de realizar actividades previas pero capaz de hacer alguna actividad sin asistencia .</option>
                    <option value="3 Incapacidad Moderada  Requiere alguna ayuda pero capaz de caminar sin ayuda.">3 Incapacidad Moderada Requiere alguna ayuda pero capaz de caminar sin ayuda.</option>
                    <option value="4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda">4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda</option>
                    <option value="5 Incapacidad Severa  Confinado a cama,incontinente y requiere cuidado constante.">5 Incapacidad Severa Confinado a cama,incontinente y requiere cuidado constante.</option>
                </select>
            </div>














        </div> <!--DIV DE CONTAINER LINEA 38-->

        <div class="seguimiento_btns">
            <button type="submit" class="btn btn-primary">Guardar Seguimiento</button>
        </div>

    </div> <!--DIV DEL ROW LINEA 38-->







</body>

</html>