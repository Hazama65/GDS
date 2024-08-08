<?php

class Database {

    public $numberRows;
    public $last_id;

    private $host;
    private $dbName;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $dbName, $username, $password) {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Could not connect to the database: " . $e->getMessage());
        }
    }

    public function getRows($query, $params = []) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $this->numberRows = $stmt->rowCount();
        return $stmt->fetchAll();
    }

    public function getSimple($query, $params = []) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchColumn();
    }

    public function executeQuery($query, $params = []) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $this->last_id = $this->connection->lastInsertId();
    }

    public function closeConnection() {
        $this->connection = null;
    }
}

?>
