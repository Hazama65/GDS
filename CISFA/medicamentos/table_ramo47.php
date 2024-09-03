<?php
require ('./php/controllers/table.controller_ramo47.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap 5.3.3 JS (con Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Incluye la biblioteca jsPDF versión 1.5.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <title>RAMO 47</title>
</head>

<body>

    <header>
        <h5 class="bi bi-capsule" style="color:rgb(243, 243, 243); margin-top: 10px;">RAMO 47</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->
     <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="container">
                    <fieldset class="fieldset-botones">
                        <legend>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <button type="button" class="btn btn-circular"
                                    onclick="location.href='index.php';">
                                    Resumen Ramo 47
                                </button>
                            </div>
                        </legend>
                    </fieldset>
                </div>
            </div>
            <div class="col-md-2">
                <div class="container">
                    <fieldset class="fieldset-botones">
                        <legend>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <button type="button" class="btn btn-circular"
                                    onclick="location.href='table_ramo47.php';">
                                    Ramo 47
                                </button>
                            </div>
                        </legend>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-bottom: 90px; padding-left: 0; padding-right: 0;">
    <table id="miTabla" class="table" style="width: 100%; font-size: 12px;">
        <thead class="thead-dark">
            <tr>
                <th>Ejercicio Fiscal</th>
                <th>Fuente</th>
                <th>Procedimiento</th>
                <th>Ramo Presupuestal</th>
                <th>Partida Presupuestal</th>
                <th>Contrato</th>
                <th>Proveedor</th>
                <th>Clave</th>
                <th>CNIS</th>
                <th>CUCOP</th>
                <th>Descripción</th>
                <th>Unidad de Presentación</th>
                <th>P.U.</th>
                <th>Cantidad Minima</th>
                <th>Cantidad Maxima</th>
                <th>Importe Minimo</th>
                <th>Importe Maximo</th>
                <th>Tasa IVA</th>
                <th>Tipo de Compra</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Itera a través de los datos obtenidos de la consulta y genera las filas y celdas
            foreach ($data_folios as $folio) {
                echo '<tr>';
                echo "<td>" . $folio['ejercicio_fiscal'] . "</td>";
                echo "<td>" . $folio['fuente'] . "</td>";
                echo "<td>" . $folio['procedimiento'] . "</td>";
                echo "<td>" . $folio['ramo_presupuestal'] . "</td>";
                echo "<td>" . $folio['partida_presupuestal'] . "</td>";
                echo "<td>" . $folio['contrato'] . "</td>";
                echo "<td>" . $folio['proveedor'] . "</td>";
                echo "<td>" . $folio['clave'] . "</td>";
                echo "<td>" . $folio['cnis'] . "</td>";
                echo "<td>" . $folio['cucop'] . "</td>";
                echo "<td>" . $folio['descripcion'] . "</td>";
                echo "<td>" . $folio['unidad_de_presentacion'] . "</td>";
                echo "<td>" . $folio['pu'] . "</td>";
                echo "<td>" . $folio['cantidad_minima'] . "</td>";
                echo "<td>" . $folio['cantidad_maxima'] . "</td>";
                echo "<td>" . $folio['importe_minimo'] . "</td>";
                echo "<td>" . $folio['importe_maximo'] . "</td>";
                echo "<td>" . $folio['tasa_iva'] . "</td>";
                echo "<td>" . $folio['tipo_de_compra'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <br>
        Dirección de Operaciones - Gestión Digital en Salud - 2024

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="js/scriptmodal.js"></script>
    <script src="js/scripteditar.js"></script>
    <script src="js/table_ramo47.js"></script>

</body>

</html>