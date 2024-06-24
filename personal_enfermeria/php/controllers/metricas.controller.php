    <?php
    require (__DIR__ . '/../models/database.model.php');
    include (__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query = "SELECT t.turno,s.servicio
            FROM datos_personal dp
            JOIN servicio s ON dp.servicio = s.id_servicio
            JOIN turno t ON dp.turno = t.id_turno";

    $AllData = $connectionDB->getRows($query);

    $query_servicio = "SELECT * FROM servicio";
    $data_servicio = $connectionDB->getRows($query_servicio);

    $query_turno = "SELECT * FROM turno";
    $data_turno = $connectionDB->getRows($query_turno);

    $data = array(
        'personal' => $AllData,
        'servicio' => $data_servicio,
        'turno' => $data_turno
    );

    echo json_encode($data);
    ?>
