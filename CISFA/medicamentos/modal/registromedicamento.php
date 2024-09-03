<?php
// Verifica si se ha enviado el parámetro de búsqueda vía AJAX
if (isset($_GET['input'])) {
    buscarN_contrato($_GET['input']);
    exit; // Termina la ejecución para no renderizar el HTML cuando se hace la llamada AJAX
}

function buscarN_contrato($input)
{
    // Conexión a la base de datos
    $host = 'localhost';
    $dbname = 'medicamentos';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT n_contrato FROM contratos WHERE n_contrato LIKE :input LIMIT 7");
        $stmt->execute(['input' => "%$input%"]);

        $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);

        echo json_encode($resultados);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="registromedicamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="bitacoraLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <i class="bi bi-clipboard2-plus-fill"></i> Orden de Pedido
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                border-radius: 14px;
                background-color: rgb(62, 111, 127);
                color: aliceblue;
                margin-top: 16px;
                font-size: 16px;
                text-align: center;">Datos Generales</h4>
                </div>

                <fieldset class="fieldset-otros">
                    <legend>

                        <div class="row">

                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Fecha de Expedición:</label>
                                <input type="date" name="fecha_expedicion" id="fecha_expedicion" class="form-control"
                                    style="font-size: 12px;" readonly>
                            </div>


                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Numero de Procedimiento:</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;" placeholder="LA-012M7B997-E115-2022">
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 12px; font-weight: bold;">Numero de Contrato:</strong>
                                <input class="control form-control" id="contrato" name="contrato"
                                    style="font-size: 13px;" onkeyup="buscarContrato(this.value)"
                                    placeholder="HRAEI-LPI-CC-427-2022"></input>
                                <div id="sugerenciasContrato"></div>
                            </div>

                            <script>
                                function buscarContrato(input) {
                                    if (input.length === 0) {
                                        document.getElementById('sugerenciasContrato').innerHTML = '';
                                        return;
                                    }

                                    // Modificado para usar GET y ajustado para el contexto actual
                                    fetch('?input=' + encodeURIComponent(input))
                                        .then(response => response.json())
                                        .then(data => {
                                            let sugerenciasHTML = '';
                                            data.forEach(function (sugerencia) {
                                                sugerenciasHTML += `<div onclick="seleccionarContrato('${sugerencia}')" style="cursor: pointer; padding: 5px;">${sugerencia}</div>`;
                                            });
                                            document.getElementById('sugerenciasContrato').innerHTML = sugerenciasHTML;
                                        }).catch(error => console.error('Error:', error));
                                }

                                function seleccionarDiagnostico(valor) {
                                    document.getElementById('contrato').value = valor;
                                    document.getElementById('sugerenciasContrato').innerHTML = '';
                                }
                            </script>



                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Numero de Suministro:</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-6">
                                <label style="font-size: 12px; font-weight: bold;">Ramo Presupuestal</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;" value="RAMO 47" readonly>
                            </div>

                            <div class="col-md-6">
                                <label style="font-size: 12px; font-weight: bold;">Partida Presupuestal</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;" value="25301" readonly>
                            </div>

                            <div class="form-header">
                                <h4 class="form-title" style="text-align: left;
                                border-radius: 14px;
                                background-color: rgb(62, 111, 127);
                                color: aliceblue;
                                margin-top: 16px;
                                font-size: 16px;
                                text-align: center;">Datos de la Orden de Suministro</h4>
                            </div>

                            <div class="col-md-6">
                                <label style="font-size: 12px; font-weight: bold;">Nombre del Proveedor</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-4">
                                <label style="font-size: 12px; font-weight: bold;">Clave HRAEI</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-4">
                                <label style="font-size: 12px; font-weight: bold;">CNIS</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-4">
                                <label style="font-size: 12px; font-weight: bold;">CUCOP</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-6">
                                <label style="font-size: 12px; font-weight: bold;">Descripcion</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Unidad de Presentación</label>
                                <input name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Precio Unitario ($)</label>
                                <input type="number" name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-4">
                                <label style="font-size: 12px; font-weight: bold;">Cantidad Mínima</label>
                                <input type="number" name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-4">
                                <label style="font-size: 12px; font-weight: bold;">Cantidad Máxima</label>
                                <input type="number" name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-4">
                                <label style="font-size: 12px; font-weight: bold;">Importe Mínimo ($)</label>
                                <input type="number" name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Importe Máximo ($)</label>
                                <input type="number" name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-3">
                                <label style="font-size: 12px; font-weight: bold;">Tasa IVA (%)</label>
                                <input type="number" name="corto_descrip" id="corto_descrip" class="form-control"
                                    style="font-size: 12px;">
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 12px;">Tipo de Compra</strong>
                                <select name="Estatus" id="Estatus" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Compra Consolidada Bianual 2023-2024">Compra Consolidada Bianual
                                        2023-2024</option>
                                    <option value="Compra Consolidada Complementaria 2024">Compra Consolidada
                                        Complementaria 2024</option>
                                </select>
                            </div>

                        </div>

                    </legend>

                </fieldset>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Clave interna de Almacén</th>
                                <th>Clave del insumo</th>
                                <th>CUCOP</th>
                                <th>Descripción</th>
                                <th>Unidad de Medida</th>
                                <th>Cantidad Solicitada</th>
                                <th>Precio unitario</th>
                                <th>Importe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HRAEI-MD1267</td>
                                <td>010.000.0472.00</td>
                                <td>25301772</td>
                                <td>PREDNISONA. TABLETA CADA TABLETA CONTIENE: PREDNISONA 5 MG ENVASE CON 20 TABLETAS.
                                </td>
                                <td>ENVASE CON 20 TABLETAS</td>
                                <td>66</td>
                                <td>$4.25</td>
                                <td>$280.50</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD0255</td>
                                <td>010.000.0574.00</td>
                                <td>25300423</td>
                                <td>CAPTOPRIL. TABLETA CADA TABLETA CONTIENE: CAPTOPRIL 25 MG ENVASE CON 30 TABLETAS.
                                </td>
                                <td>ENVASE CON 30 TABLETAS</td>
                                <td>54</td>
                                <td>$6.00</td>
                                <td>$324.00</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD1361</td>
                                <td>010.000.1272.00</td>
                                <td>25301894</td>
                                <td>SENÓSIDOS A-B. TABLETA CADA TABLETA CONTIENE: CONCENTRADOS DE SEN DESSECADOS 187 MG
                                    (NORMALIZADO A 8.6 MG DE SENÓSIDOS A-B). ENVASE CON 20 TABLETAS.</td>
                                <td>ENVASE CON 20 TABLETAS</td>
                                <td>131</td>
                                <td>$8.05</td>
                                <td>$1,054.55</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD0702</td>
                                <td>010.000.2307.00</td>
                                <td>25301035</td>
                                <td>FUROSEMIDA. TABLETA. CADA TABLETA CONTIENE: FUROSEMIDA 40 MG ENVASE CON 20 TABLETAS.
                                </td>
                                <td>ENVASE CON 20 TABLETAS</td>
                                <td>32</td>
                                <td>$4.27</td>
                                <td>$136.64</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD0970</td>
                                <td>010.000.4184.00</td>
                                <td>25301376</td>
                                <td>LOPERAMIDA. COMPRIMIDO TABLETA O GRAGEA. CADA COMPRIMIDO TABLETA O GRAGEA CONTIENE:
                                    CLORHIDRATO DE LOPERAMIDA 2 MG. ENVASE CON 12 COMPRIMIDOS TABLETAS O GRAGEAS.</td>
                                <td>ENVASE CON 12 COMPRIMIDOS TABLETAS O GRAGEAS</td>
                                <td>41</td>
                                <td>$3.50</td>
                                <td>$143.50</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD0306</td>
                                <td>010.000.4255.00</td>
                                <td>25300494</td>
                                <td>CIPROFLOXACINO. CAPSULA O TABLETA CADA CAPSULA O TABLETA CONTIENE: 500 MG DE
                                    CLORHIDRATO DE CIPROFLOXACINO MONOHIDRATO EQUIVALENTE A 250 MG DE CIPROFLOXACINO.
                                    ENVASE CON 8 CÁPSULAS O TABLETAS</td>
                                <td>ENVASE CON 8 CÁPSULAS O TABLETAS</td>
                                <td>4</td>
                                <td>$5.57</td>
                                <td>$22.28</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD1127</td>
                                <td>010.000.5354.00</td>
                                <td>25301583</td>
                                <td>NIMODIPINO. SOLUCIÓN INYECTABLE CADA FRASCO AMPOLLA CONTIENE: NIMODIPINO 10 MG EN 50
                                    ML. 1 FRASCO AMPOLLA CON 50 ML CON O SIN EQUIPO PERFUSOR DE POLIETILENO.</td>
                                <td>1 FRASCO AMPOLLA CON 50 ML CON O SIN EQUIPO PERFUSOR DE POLIETILENO</td>
                                <td>4</td>
                                <td>$77.22</td>
                                <td>$308.88</td>
                            </tr>
                            <tr>
                                <td>HRAEI-MD1038</td>
                                <td>010.000.1242.00</td>
                                <td>25301467</td>
                                <td>METOCLOPRAMIDA. TABLETA CADA TABLETA CONTIENE: CLORHIDRATO DE METOCLOPRAMIDA 10 MG
                                    ENVASE CON 20 TABLETAS.</td>
                                <td>ENVASE CON 20 TABLETAS</td>
                                <td>4</td>
                                <td>$4.90</td>
                                <td>$19.60</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7" class="text-end">SUB-TOTAL</td>
                                <td>$2,289.95</td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-end">IVA</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-end"><strong>TOTAL</strong></td>
                                <td><strong>$2,289.95</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div> <!-- DIV ROW LINEA 11 -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>

        </div><!--DIV DEL BODY  -->

    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>