<?php
include ('php/controllers/edit.controller.php');
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


    <title>Seguimiento Cancer de Mama</title>
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


        <h5> Seguimiento Síndrome Coronario Agudo </h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <form id="seguimiento_SC" method="POST">
            <div class="row">

                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

    
                <div class="col-md-6">
                    <strong style="font-size: 13px;">Fecha de Seguimiento</strong>
                    <input class="form-control" type="date" name="fecha_seg" id="fecha_seg" style="font-size: 13px;">
                </div>
    
                <div class="col-md-6">
                    <strong style="font-size: 13px;">Seguimiento</strong>
                    <select name="Seguimiento_SXcoronario" id="Seguimiento_SXcoronario" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Tres Meses">Tres Meses</option>
                        <option value="Seis Meses">Seis Meses</option>
                        <option value="1 Año">1 Año</option>
                    </select>
                </div>
    
    
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(222, 100, 150,0.5);
                                color:aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Tratamiento</h5>
                </div>
    
                <div class="row">
    
                    <label for="Antecedentes_ovario" style="font-size: 13px;"><strong>Antiagregantes: </strong></label><br>
    
                    <div class="col-md-1">
    
                    </div>
    
    
                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ácido Acetil Salicílico</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Acido_salicilico" id="Acido_salicilico" value="Acido_salicilico Izquierda" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>
    
                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Clopidogrel </span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Clopidogrel" id="Clopidogrel" value="Clopidogrel Anterior" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>
    
                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Eptifibatida</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Eptifibatida" id="Eptifibatida" value="Eptifibatida" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>
    
                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Prasugrel</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Prasugrel" id="Prasugrel" value="Prasugrel" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>
    
                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ticagrelor</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Ticagrelor" id="Ticagrelor" value="Ticagrelor" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>
    
    
                </div><br> <br>
    
    
                <div class="col-md-3">
                    <strong style="font-size: 13px;">Anticuagulantes</strong>
                    <select name="Anticuagulantes" id="Anticuagulantes" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="RivaroxabanY">RivaroxabanY</option>
                        <option value="Apixaban">Apixaban</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
    
                <div class="col-md-3">
                    <strong style="font-size: 13px;">Betabloqueadores</strong>
                    <select name="Betabloqueadores" id="Betabloqueadores" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Acetubolol">Acetubolol</option>
                        <option value="Atenolol">Atenolol</option>
                        <option value="Anterior">Anterior</option>
                        <option value="Disoprolol">Disoprolol</option>
                        <option value="Esmolol">Esmolol</option>
                        <option value="Metoprolol">Metoprolol</option>
                        <option value="Nebivolol">Nebivolol</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
    
                <div class="col-md-3">
                    <strong style="font-size: 13px;">IECA</strong>
                    <select name="IECA" id="IECA" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Enalapril">Enalapril</option>
                        <option value="Lisinopril">Lisinopril</option>
                        <option value="Ramipri">Ramipri</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
                <div class="col-md-3">
                    <strong style="font-size: 13px;">Calcioantagonistas</strong>
                    <select name="Calcioantagonistas" id="Calcioantagonistas" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Amlodipino">Amlodipino</option>
                        <option value="Diltiazem">Diltiazem</option>
                        <option value="Felodipino">Felodipino</option>
                        <option value="Lercadipino">Lercadipino</option>
                        <option value="Manidipino">Manidipino</option>
                        <option value="Nifedipino">Nifedipino</option>
                        <option value="Nimodipino">Nimodipino</option>
                        <option value="Verapamilo">Verapamilo</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
                <br>
    
    
                <div class="col-md-4">
                    <strong style="font-size: 13px;">ARA II</strong>
                    <select name="ARA_II" id="ARA_II" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Candesartan">Candesartan</option>
                        <option value="Besartan">Besartan</option>
                        <option value="Losartan">Losartan</option>
                        <option value="Olmesartan">Olmesartan</option>
                        <option value="Telmisartan">Telmisartan</option>
                        <option value="Valsartan">Valsartan</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 13px;">Estatinas</strong>
                    <select name="Estatinas" id="Estatinas" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Atorvastatina">Atorvastatina</option>
                        <option value="Pravastatina">Pravastatina</option>
                        <option value="Rosuvastatina">Rosuvastatina</option>
                        <option value="Simvastatina">Simvastatina</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 13px;">Fibratos</strong>
                    <select name="Fibratos" id="Fibratos" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Besafibrato">Besafibrato</option>
                        <option value="Cipofibrato">Cipofibrato</option>
                        <option value="Fenobifrato">Fenobifrato</option>
                        <option value="Gembibrozilo">Gembibrozilo</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 13px;">Antianginosos</strong>
                    <select name="Antianginosos" id="Antianginosos" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="NitroglicerinaT">NitroglicerinaT</option>
                        <option value="Isosorbide">Isosorbide</option>
                        <option value="Trimetazidina">Trimetazidina</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 13px;">Inhibidor de la Absorción</strong>
                    <select name="Inhibidor_absorcion" id="Inhibidor_absorcion" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Ezetimiba">Ezetimiba</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <strong style="font-size: 13px;">Anticuerpos Monoclonales</strong>
                    <select name="Anticuerpos_Monoclonales" id="Anticuerpos_Monoclonales" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Evolocumab">Evolocumab</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div style="display: flex; justify-content: flex-end; align-items: center; margin-top: 15px;">
                    <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Editar</button>
                </div><br><br>
                    
    
            </div>
        </form>
    </div>

        <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="module">
    import { seguimientoForm } from "./js/seguimiento.js";
    seguimientoForm();
</script>


</html>