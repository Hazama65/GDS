<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Verificar si el usuario ha iniciado sesión y si tiene el sistema correcto
if (!isset($_SESSION['valid_user']) || $_SESSION['system_type'] !== 'medicamentos') {
    // El usuario no ha iniciado sesión o no tiene permiso para este sistema
    header('Location: ../login/index.php');
    exit;
}
$username = $_SESSION['valid_user'];
require('php/controllers/count_table.controller.php');
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
    <style>
        .table-cg{
            --bs-table-bg: #dda0dd;
        }
        .table-sandi{
            --bs-table-bg: #98ff98;
        }
        .table-desabasto{
            --bs-table-bg: #ffb6c1;
        }
    </style>
    <title>Nivel de Abasto</title>
</head>

<body>

    <header>
        <h5 class="bi bi-capsule" style="color:rgb(243, 243, 243); margin-top: 10px;">Nivel de Abasto </h5>
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
                <?php if ($username == 'abasto1'): ?>
                    <div class="container">
                        <fieldset class="fieldset-botones">
                            <legend>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <button type="button" class="btn btn-circular" onclick="location.href='table.php';">
                                        Actualización de abasto
                                    </button>
                                </div>
                            </legend>
                        </fieldset>
                    </div>
                <?php else: ?>

                <?php endif; ?>
            </div>
            <div class="col-md-10 d-flex justify-content-end">
                <button style="margin-top: 45px;height: 40px;" id="download-pdf" class="btn btn-primary">Descargar PDF</button>
            </div>
        </div>
    </div>


    <div id="pdf-container" class="container mt-4" style="margin-bottom: 100px">
        <table class="table table-bordered">
            <thead>
                <tr class="table-warning">
                    <!-- Encabezados de columna -->
                    <th>Cantidad</th>
                    <th>Concepto</th>
                    <th>C/existencia</th>
                    <th>% de abasto</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fila 1 -->
                <tr>
                    <td><?php echo $count_hraei ?></td>
                    <td>Claves en catalogo HRAEI</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 2 -->
                <tr>
                    <td><?php echo $count_hraei_no_utilizado ?></td>
                    <td>Claves HRAEI sin utilizar</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 3 -->
                <tr class="table-warning">
                    <td><?php echo $count_hraei_activo ?></td>
                    <td>CLAVES ACTIVAS HRAEI</td>
                    <td><?php echo $count_hraei_existencia ?></td>
                    <td><?php echo $count_hraei_abasto . '%' ?></td>
                </tr>
                <!-- Fila 4 -->
                <tr class="table-cg">
                    <td><?php echo $count_gc ?></td>
                    <td>Claves GC</td>
                    <td><?php echo $count_gc_existencia ?></td>
                    <td><?php echo $count_gc_abasto . '%' ?></td>
                </tr>
                <!-- Fila 5 -->
                <tr class="table-sandi">
                    <td><?php echo $count_sadmi ?></td>
                    <td>Claves SADMI</td>
                    <td><?php echo $count_sadmi_existencia ?></td>
                    <td><?php echo $count_sadmi_abasto . '%' ?></td>
                </tr>
                <!-- Fila 6 -->
                <tr class="table-danger">
                    <td><?php echo $claves_total ?></td>
                    <td>CLAVES TOTAL DE CATALOGO</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 7 -->
                <tr class="table-success">
                    <td><?php echo $claves_total_existencia ?></td>
                    <td>CLAVES CON EXISTENCIA</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 8 -->
                <tr class="table-info">
                    <td><?php echo $nivel_abasto . '%' ?></td>
                    <td>NIVEL DE ABASTO</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 9 -->
                <tr class="table-desabasto">
                    <td><?php echo $claves_desabasto ?></td>
                    <td><a href="desabasto.php">CLAVES EN DESABASTO</a></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 10 -->
                <tr>
                    <td><?php echo $count_criticas ?></td>
                    <td><a href="criticas.php">Claves 'CRITICAS'</a></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Fila 11 -->
                <tr>
                    <td><?php echo $count_existencia_mes ?></td>
                    <td>Claves con menos de 30 dias de inventario</td>
                    <td></td>
                    <td></td>
                </tr>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="js/download_table.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

            cerrarSesionButton.addEventListener('click', function () {
                // Redirige al usuario a la página de cierre de sesión
                window.location.href = 'php/destroysession.php';
            });
        });
    </script>





</body>

</html>