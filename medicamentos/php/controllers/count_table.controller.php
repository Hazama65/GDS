<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig_medicamentos.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

// HRAEI
$query_hraei = "SELECT COUNT(*) FROM `tabla_medicamentos`";
$result_hraei = $connectionDB->getRows($query_hraei);
$count_hraei = isset($result_hraei[0]['COUNT(*)']) ? intval($result_hraei[0]['COUNT(*)']) : 0;

$query_hraei_no_utilizado = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'HRAEI-%' AND status = 'NO UTILIZADA'";
$result_hraei_no_utilizado = $connectionDB->getRows($query_hraei_no_utilizado);
$count_hraei_no_utilizado = isset($result_hraei_no_utilizado[0]['COUNT(*)']) ? intval($result_hraei_no_utilizado[0]['COUNT(*)']) : 0;

// $count_hraei_activo = $count_hraei - $count_hraei_no_utilizado;

$query_hraei_activo = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'HRAEI-%' AND status = 'CATALOGO ACTIVO'";
$result_hraei_activo = $connectionDB->getRows($query_hraei_activo);
$count_hraei_activo = isset($result_hraei_activo[0]['COUNT(*)']) ? intval($result_hraei_activo[0]['COUNT(*)']) : 0;

$query_cena_activo = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'CENAPRECE-%' AND status = 'CATALOGO ACTIVO'";
$result_cena_activo = $connectionDB->getRows($query_cena_activo);
$count_cena_activo = isset($result_cena_activo[0]['COUNT(*)']) ? intval($result_cena_activo[0]['COUNT(*)']) : 0;

$count_hraei_activo = $count_hraei_activo + $count_cena_activo;


$query_hraei_existencia = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'HRAEI-%' AND status = 'CATALOGO ACTIVO' AND existencia > 0";
$result_hraei_existencia = $connectionDB->getRows($query_hraei_existencia);
$count_hraei_existencia = isset($result_hraei_existencia[0]['COUNT(*)']) ? intval($result_hraei_existencia[0]['COUNT(*)']) : 0;

$query_cena_existencia = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'CENAPRECE-%' AND status = 'CATALOGO ACTIVO' AND existencia > 0";
$result_cena_existencia = $connectionDB->getRows($query_cena_existencia);
$count_cena_existencia = isset($result_cena_existencia[0]['COUNT(*)']) ? intval($result_cena_existencia[0]['COUNT(*)']) : 0;

$count_hraei_existencia = $count_hraei_existencia + $count_cena_existencia;

// Evitar división por cero
$count_hraei_abasto = $count_hraei_activo > 0 ? number_format((($count_hraei_existencia / $count_hraei_activo) * 100), 2) : 0;


// GC-HRAEI
$query_gc = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'GC-%'";
$result_gc = $connectionDB->getRows($query_gc);
$count_gc = isset($result_gc[0]['COUNT(*)']) ? intval($result_gc[0]['COUNT(*)']) : 0;

$query_gc_existencia = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'GC-%' AND existencia > 0";
$result_gc_existencia = $connectionDB->getRows($query_gc_existencia);
$count_gc_existencia = isset($result_gc_existencia[0]['COUNT(*)']) ? intval($result_gc_existencia[0]['COUNT(*)']) : 0;

// Evitar división por cero
$count_gc_abasto = $count_gc > 0 ? number_format((($count_gc_existencia / $count_gc) * 100), 2) : 0;


// SADMI-HRAEI
$query_sadmi = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'SADMI-%'";
$result_sadmi = $connectionDB->getRows($query_sadmi);
$count_sadmi = isset($result_sadmi[0]['COUNT(*)']) ? intval($result_sadmi[0]['COUNT(*)']) : 0;

$query_sadmi_existencia = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE clave LIKE 'SADMI-%' AND existencia > 0";
$result_sadmi_existencia = $connectionDB->getRows($query_sadmi_existencia);
$count_sadmi_existencia = isset($result_sadmi_existencia[0]['COUNT(*)']) ? intval($result_sadmi_existencia[0]['COUNT(*)']) : 0;

// Evitar división por cero
$count_sadmi_abasto = $count_sadmi > 0 ? number_format((($count_sadmi_existencia / $count_sadmi) * 100), 2) : 0;


// Totales
$claves_total = $count_hraei_activo + $count_gc + $count_sadmi;
$claves_total_existencia = $count_hraei_existencia + $count_gc_existencia + $count_sadmi_existencia;

// Evitar división por cero
$nivel_abasto = $claves_total > 0 ? number_format((($claves_total_existencia / $claves_total) * 100), 2) : 0;

$query_mas_2 = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE meses_existencia >= 2";
$result_mas_2 = $connectionDB->getRows($query_mas_2);
$count_mas_2 = isset($result_mas_2[0]['COUNT(*)']) ? intval($result_mas_2[0]['COUNT(*)']) : 0;

$query_menos_2 = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE meses_existencia <= 1";
$result_menos_2 = $connectionDB->getRows($query_menos_2);
$count_menos_2 = isset($result_menos_2[0]['COUNT(*)']) ? intval($result_menos_2[0]['COUNT(*)']) : 0;


$query_desabasto = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE existencia = 0";
$result_desabasto = $connectionDB->getRows($query_desabasto);
$claves_desabasto = isset($result_desabasto[0]['COUNT(*)']) ? intval($result_desabasto[0]['COUNT(*)']) : 0;



// CRITICAS
$query_criticas = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE observaciones = 'CRITICA' AND existencia = 0 ";
$result_criticas = $connectionDB->getRows($query_criticas);
$count_criticas = isset($result_criticas[0]['COUNT(*)']) ? intval($result_criticas[0]['COUNT(*)']) : 0;


// Existencia por mes
$query_existencia_mes = "SELECT COUNT(*) FROM `tabla_medicamentos` WHERE meses_existencia <= 1";
$result_existencia_mes = $connectionDB->getRows($query_existencia_mes);
$count_existencia_mes = isset($result_existencia_mes[0]['COUNT(*)']) ? intval($result_existencia_mes[0]['COUNT(*)']) : 0;



?>