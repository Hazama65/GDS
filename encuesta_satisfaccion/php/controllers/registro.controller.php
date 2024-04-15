<?php

require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$queryAllData = "SELECT dc.*,
                p1.pregunta_1,
                pc.preguntas_compuestas1,
                p2.pregunta_2,
                pc.preguntas_compuestas2,
                p3.pregunta_3,
                p3.pregunta_3_otros,
                p4.pregunta_4,
                pc.preguntas_compuestas4_1,
                pc.preguntas_compuestas4_2,
                pc.preguntas_compuestas4_3
                FROM datos_cuestionario dc
                LEFT JOIN pregunta1 p1 ON dc.num_cuestionario = p1.num_cuestionario
                LEFT JOIN pregunta2 p2 ON dc.num_cuestionario = p2.num_cuestionario
                LEFT JOIN pregunta3 p3 ON dc.num_cuestionario = p3.num_cuestionario
                LEFT JOIN pregunta4 p4 ON dc.num_cuestionario = p4.num_cuestionario
                LEFT JOIN preguntas_concatenadas pc ON dc.num_cuestionario = pc.num_cuestionario";

$AllData = $connectionDB->getRows($queryAllData);
?>