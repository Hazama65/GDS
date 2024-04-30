<?php
require_once ('../../fpdf/fpdf.php');
require_once ('../../fpdi2/src/autoload.php');
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_EG.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


use setasign\Fpdi\Fpdi;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idSuplencia = $_POST['valor'];

    $queryAllData = "SELECT * FROM datos_suplencia ds
    JOIN trabajador_sustituido ts ON ds.id_sustituido = ts.id_sustituido
    JOIN trabajador_sustituto tss ON ds.id_sustituto = tss.id_sustituto
    JOIN uso_suplencias us ON ds.id_suplencia = us.id_suplencia
    WHERE ds.id_suplencia ='$idSuplencia'";

    $AllData = $connectionDB->getRows($queryAllData);

    if (!empty($AllData)) {
        foreach ($AllData as $data) {

            $id_suplencia = $data['id_suplencia'];
            $num_suplencia = $data['num_suplencia'];
            $fecha_realizada = $data['fecha_realizada'];
            $enlace_numeroempleado = $data['enlace_numeroempleado'];
            $numeroempleado_1 = $data['numeroempleado_1'];
            $niv_academico = $data['niv_academico'];
            $codigopuesto = $data['codigopuesto'];
            $puesto = $data['puesto'];
            $turno = $data['turno'];
            $dias_h = $data['dias_h'];
            $horaInicio = $data['horaInicio'];
            $horaFin = $data['horaFin'];
            $servicio = $data['servicio'];

            $nombre_suplencia = $data['nombre_suplencia'];
            $numeroempleado_suplencia = $data['numeroempleado_suplencia'];
            $niv_academico2 = $data['niv_academico2'];
            $codigopuesto_suplencia = $data['codigopuesto_suplencia'];
            $puesto_suplencia = $data['puesto_suplencia'];
            $turno2 = $data['turno2'];
            $dias_h2 = $data['dias_h2'];
            $horaInicio2 = $data['horaInicio2'];
            $horaFin2 = $data['horaFin2'];
            $servicio2 = $data['servicio2'];
            $fecha_tramite = $data['fecha_tramite'];
            $fecha_suplencia = $data['fecha_suplencia'];
            $autoriza = $data['autoriza'];
            $observaciones = $data['observaciones'];





            // Ruta del archivo PDF existente
            $originalPdf = '../../docs/FORMATO 2024 PARA JUSTICACION DE INCIDENCIAS Y SUPLENCIAS_1.pdf';

            // Instancia de FPDI
            $pdf = new Fpdi();
            $pageCount = $pdf->setSourceFile($originalPdf);

            // Importar todas las páginas del PDF existente
            // Array de textos adicionales con sus respectivas coordenadas (x, y)
            $textosAdicionales = array(

                array($num_suplencia, 55, 28.5, 10),
                array($fecha_realizada, 155, 28.5, 10),
                array($enlace_numeroempleado, 27, 40, 10),
                array($numeroempleado_1, 27, 46, 10),
                array($turno, 58, 46, 7),
                array($dias_h, 112, 46, 6),
                array($horaInicio, 160, 46, 10),
                array($horaFin, 182, 46, 10),
                array($servicio, 27, 50.5, 10),
                array($codigopuesto, 105, 50.5, 10),
                array($puesto, 145, 50.5, 8),

                array($nombre_suplencia, 27, 60, 10),
                array($numeroempleado_suplencia, 27, 66, 10),
                array($turno2, 58, 66, 7),
                array($dias_h2, 112, 66, 6),
                array($horaInicio2, 160, 66, 10),
                array($horaFin2, 182, 66, 10),
                array($servicio, 27, 70.5 , 10),
                array($codigopuesto, 105, 70.5, 10),
                array($puesto, 145, 70.5, 8),

                array($fecha_tramite, 83, 79.5, 10),
                array($fecha_suplencia, 109, 79.5, 10),

                array($enlace_numeroempleado, 15, 101.5, 6),
                array($nombre_suplencia, 77, 101.5, 6),
                array($autoriza, 139, 101.5, 6),
                array($observaciones, 40, 106.5, 8),


                array($num_suplencia, 55, 161.5, 10),
                array($fecha_realizada, 155, 161.5, 10),
                array($enlace_numeroempleado, 27, 173, 10),
                array($numeroempleado_1, 27, 179, 10),
                array($turno, 58, 179, 7),
                array($dias_h, 112, 179, 6),
                array($horaInicio, 160, 179, 10),
                array($horaFin, 182, 179, 10),
                array($servicio, 27, 183.5 , 10),
                array($codigopuesto, 105, 183.5, 10),
                array($puesto, 145, 183.5, 8),

                array($nombre_suplencia, 27, 193, 10),
                array($numeroempleado_suplencia, 27, 199, 10),
                array($turno2, 58, 199, 7),
                array($dias_h2, 112, 199, 6),
                array($horaInicio2, 160, 199, 10),
                array($horaFin2, 182, 199, 10),
                array($servicio, 27, 203.5, 10),
                array($codigopuesto, 105, 203.5, 10),
                array($puesto, 145, 203.5, 8),

                array($fecha_tramite, 83, 212.5, 10),
                array($fecha_suplencia, 109, 212.5, 10),

                array($enlace_numeroempleado, 15, 236.5, 6),
                array($nombre_suplencia, 77, 236.5, 6),
                array($autoriza, 139, 236.5, 6),
                array($observaciones, 40, 242, 8),
    
            );

            for ($pageNumber = 1; $pageNumber <= $pageCount; $pageNumber++) {
                $templateId = $pdf->importPage($pageNumber);
                $pdf->AddPage();
                $pdf->useTemplate($templateId);

                // Agregar textos adicionales en diferentes posiciones
                $pdf->SetTextColor(0, 0, 0); // Cambia el color del texto según sea necesario
                // Agregar textos adicionales en diferentes posiciones
                foreach ($textosAdicionales as $texto) {
                    $pdf->SetFont('Arial', '', $texto[3]); // Establecer el tamaño de fuente
                    $pdf->SetXY($texto[1], $texto[2]); // Establecer las coordenadas (x, y)
                    $pdf->Cell(0, 10, utf8_decode($texto[0]), 0, 2); // Agregar el texto
                }
            }

            // Enviar el PDF al navegador como respuesta AJAX
            $pdf->Output();

        }
    }






}
?>