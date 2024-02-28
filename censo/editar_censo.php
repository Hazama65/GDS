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
    <title>Censo Diario Pacientes De Urgencias</title>
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


        <h5>Censo Diario Pacientes De Urgencias</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <form id="censo_update" method="POST">
        <div class="container">
            <div class="row">

            <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="col-md-4">
                    <strong style="font-size: 14px; ">Fecha</strong>
                    <input id="fecha_inicio" name="fecha_inicio" type="date" class="control form-control" style="font-size: 13px;" value="<?php echo $fecha; ?>">
                </div>


                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $nombre_paciente; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 13px;" value="<?php echo $curp; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly value="<?php echo $fecha_nacimiento; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly value="<?php echo $sexo; ?>">
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="number" class="control form-control" style="font-size: 13px;" readonly value="<?php echo $edad; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Cama</strong>
                    <input type="number" class="control form-control" id="cama" name="cama" style="font-size: 13px;" value="<?php echo $cama; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Nueva Cama Asignada</strong>
                    <input type="number" class="control form-control" id="cama_cambio" name="cama_cambio" style="font-size: 13px;" value="<?php echo $cama_movimiento; ?>">
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Estado de Salud</strong>
                    <select name="estado_salud" id="estado_salud" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($estado_salud == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Grave"<?php if ($estado_salud == 'Grave') echo 'selected'; ?>>Grave</option>
                        <option value="Muy Grave"<?php if ($estado_salud == 'Muy Grave') echo 'selected'; ?>>Muy Grave</option>
                        <option value="Delicada"<?php if ($estado_salud == 'Delicada') echo 'selected'; ?>>Delicada</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Diagnóstico</strong>
                    <input type="text" class="control form-control" id="Diagnostico" name="Diagnostico" style="font-size: 13px;" value="<?php echo $dx; ?>">
                </div>




                <!-- ************************Clínica********************************** -->
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Clínica</h5>
                </div>
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                        Estado de Alerta</h5>
                </div>


                <div class="row"> <!--clinica  -->
                    <div class="col-md-6">
                        <strong style="font-size: 14px;">GLASGOW</strong>
                        <input type="number" class="control form-control" id="GLASGOW" name="GLASGOW" style="font-size: 13px;" value="<?php echo $glasgow; ?>">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 14px;">RAMSEY</strong>
                        <input type="number" class="control form-control" id="RAMSEY" name="RAMSEY" style="font-size: 13px;" value="<?php echo $ramsey; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Actividad Motora</strong>
                        <input type="text" class="control form-control" id="act_motora" name="act_motora" style="font-size: 13px;" value="<?php echo $act_mot; ?>">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">Signos Vitales</strong>
                        <select name="Signos_vitales" id="Signos_vitales" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($signos_v == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value=""<?php if ($signos_v == '') echo 'selected'; ?>></option>
                            <option value=""<?php if ($signos_v == '') echo 'selected'; ?>></option>
                            <option value=""<?php if ($signos_v == '') echo 'selected'; ?>></option>
                            <option value=""<?php if ($signos_v == '') echo 'selected'; ?>></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 14px;">PVC</strong>
                        <select name="PVC" id="PVC" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($pvc == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value=""<?php if ($pvc == '') echo 'selected'; ?>></option>
                            <option value=""<?php if ($pvc == '') echo 'selected'; ?>></option>
                            <option value=""<?php if ($pvc == '') echo 'selected'; ?>></option>
                            <option value=""<?php if ($pvc == '') echo 'selected'; ?>></option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Precauciones Basadas T.</strong>
                        <select name="precauciones_basadast" id="precauciones_basadast" class="form-control" style="font-size: 14px;">
                            <option value="Seleccione"<?php if ($precaucion_t == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                            <option value="Precauciones para Gotas"<?php if ($precaucion_t == 'Precauciones para Gotas') echo 'selected'; ?>>Precauciones para Gotas</option>
                            <option value="Precauciones Vía Aérea"<?php if ($precaucion_t == 'Precauciones Vía Aérea') echo 'selected'; ?>>Precauciones Vía Aérea</option>
                            <option value="Precauciones Estándar"<?php if ($precaucion_t == 'Precauciones Estándar') echo 'selected'; ?>>Precauciones Estándar</option>
                            <option value="Precauciones para Contacto"<?php if ($precaucion_t == 'Precauciones para Contacto') echo 'selected'; ?>>Precauciones para Contacto</option>
                        </select>
                    </div>



                </div><!-- row  ESCALA FAST-->

                <!-- ************************SONDAS DISPOSITIVOS LINEA VASCULARES********************************** -->
                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Sondas, Dispositivos, Líneas Vasculares</h5>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                        Líneas Vasculares</h5>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 14px;">Catéter Periférico C.</strong>
                    <select name="cateter_perifericoC" id="cateter_perifericoC" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($cateter_c == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($cateter_c == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($cateter_c == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($cateter_c == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($cateter_c == '') echo 'selected'; ?>></option>
                    </select>
                </div>



                <div class="col-md-3">
                    <strong style="font-size: 14px;">Catéter Venoso Central.</strong>
                    <select name="cateter_venoso" id="cateter_venoso" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($cateter_v == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($cateter_v == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($cateter_v == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($cateter_v == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($cateter_v == '') echo 'selected'; ?>></option>
                    </select>
                </div>

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                        Dispositivos Respiratorios </h5>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Dispositivo Respiratorio</strong>
                    <select name="dispositivo_respiratorio" id="dispositivo_respiratorio" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($dispositivo_r == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($dispositivo_r == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($dispositivo_r == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($dispositivo_r == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($dispositivo_r == '') echo 'selected'; ?>></option>
                    </select>
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                        Sondas</h5>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Sonda Foley</strong>
                    <select name="sonda_foley" id="sonda_foley" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($sonda_foley == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($sonda_foley == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($sonda_foley == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($sonda_foley == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($sonda_foley == '') echo 'selected'; ?>></option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Sonda Nasogástrica</strong>
                    <select name="sonda_nasogastrica" id="sonda_nasogastrica" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($sonda_naso == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($sonda_naso == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($sonda_naso == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($sonda_naso == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($sonda_naso == '') echo 'selected'; ?>></option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Colostomía</strong>
                    <select name="sonda_colostomia" id="sonda_colostomia" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($colostomia == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($colostomia == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($colostomia == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($colostomia == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($colostomia == '') echo 'selected'; ?>></option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Penrose</strong>
                    <select name="penrose" id="penrose" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($penrose == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($penrose == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($penrose == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($penrose == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($penrose == '') echo 'selected'; ?>></option>
                    </select>
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(138, 190, 124) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                        Tratamiento</h5>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Dieta</strong>
                    <select name="tratamiento_dieta" id="tratamiento_dieta" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($dieta == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($dieta == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($dieta == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($dieta == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($dieta == '') echo 'selected'; ?>></option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Terapia Intravenosa</strong>
                    <select name="tratamiento" id="tratamiento" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($introvenosa == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($introvenosa == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($introvenosa == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($introvenosa == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($introvenosa == '') echo 'selected'; ?>></option>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Infusiones Especiales de Tx </strong>
                    <select name="infusiones_especiales" id="infusiones_especiales" class="form-control" style="font-size: 14px;">
                        <option value="Seleccione"<?php if ($infusiones == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value=""<?php if ($infusiones == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($infusiones == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($infusiones == '') echo 'selected'; ?>></option>
                        <option value=""<?php if ($infusiones == '') echo 'selected'; ?>></option>
                    </select>
                </div>



            </div> <br>

            
            <div class="modal-footer">
        
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
                <br>
        </div>
        </div>

        <div id="loading-overlay" style="display: none;" class="loading">
            <svg width="128px" height="96px">
                <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
                <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
            </svg>
        </div>
</body>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/scripteditar.js"></script>


<script type="module">
    import { editForm } from "./js/update.js";
    editForm();
</script>

</html>