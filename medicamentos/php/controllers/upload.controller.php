<?php
require '../../../vendor/autoload.php';
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_medicamentos.php');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

date_default_timezone_set('America/Mexico_City');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

$success = false; // Variable para controlar el éxito de la operación

// Verifica si se ha subido un archivo
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    // Carpeta temporal para manejar el archivo subido
    $tempDir = '../../temp/';
    $fileName = basename($_FILES['file']['name']);
    $tempFilePath = $tempDir . $fileName;

    // Mueve el archivo subido a la carpeta temporal
    if (move_uploaded_file($_FILES['file']['tmp_name'], $tempFilePath)) {
        try {
            // Carga el archivo Excel desde la carpeta temporal
            $spreadsheet = IOFactory::load($tempFilePath);
            $worksheet = $spreadsheet->getActiveSheet();

            // Verifica las columnas del archivo Excel
            $valid = true;
            foreach ($worksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false);

                $data = [];
                foreach ($cellIterator as $cell) {
                    $data[] = $cell->getValue();
                }

                if (count($data) !== 7) {
                    $valid = false;
                    throw new Exception("La fila " . $row->getRowIndex() . " contiene un número incorrecto de columnas: " . count($data));
                }
            }

            if ($valid) {
                // Elimina todos los registros existentes en la tabla antes de comenzar a procesar los datos
                $stmt = $pdo->prepare("DELETE FROM tabla_medicamentos");
                $stmt->execute();

                foreach ($worksheet->getRowIterator() as $row) {
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(false);

                    $data = [];
                    foreach ($cellIterator as $cell) {
                        $data[] = $cell->getValue();
                    }

                    if (count($data) === 7) {
                        $clave = $data[0];
                        $descripcion = $data[1];
                        $existencia = $data[2];
                        $cpm = !empty($data[3]) ? $data[3] : '0';
                        $meses_existencia = ($cpm != 0) ? round($existencia / $cpm) : 0;                        
                        $observaciones = !empty($data[5]) ? $data[5] : '';
                        $status = $data[6];

                        // Inserta un nuevo registro con los valores de $data
                        $stmt = $pdo->prepare("INSERT INTO tabla_medicamentos 
                            (clave, descripcion, existencia, cpm, meses_existencia, observaciones, status) 
                            VALUES 
                            (:clave, :descripcion, :existencia, :cpm, :meses_existencia, :observaciones, :status)");

                        $stmt->execute(
                            [
                                'clave' => $clave,
                                'descripcion' => $descripcion,
                                'existencia' => $existencia,
                                'cpm' => $cpm,
                                'meses_existencia' => $meses_existencia,
                                'observaciones' => $observaciones,
                                'status' => $status
                            ]
                        );
                    }
                }


                // Genera el timestamp (fecha y hora actual)
                $timestamp = date('Y-m-d_H-i-s');

                // Crear el nuevo nombre del archivo
                $newFileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . $timestamp . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
                $uploadDir = '../../uploads/';
                $uploadFilePath = $uploadDir . $newFileName;

                // Mueve el archivo a la carpeta de destino
                rename($tempFilePath, $uploadFilePath);
                $success = true; // La operación fue exitosa
            }

        } catch (Exception $e) {
            // Maneja cualquier excepción que ocurra durante el procesamiento
            echo "Error: " . $e->getMessage();

            // Elimina el archivo temporal si ocurre un error
            if (file_exists($tempFilePath)) {
                unlink($tempFilePath);
            }
        }
    }
}

if ($success) {
    header('Location: ../../table.php?status=success');
} else {
    header('Location: ../../table.php?status=error');
}
exit;
