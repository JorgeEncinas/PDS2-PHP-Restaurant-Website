<?php
require_once("config/dbconnect.php");
class Ad {
    private $conObj;
    private $connection;
    public function __construct() {
        $this->conObj = new Connection();
        $this->connection = $this->conObj->getConnection();
    }
    public function listAds() {
        try {
            $statement = $this->connection->prepare("SELECT * FROM ads");
            if($statement) {
                $statement->execute();
                $result = $statement->get_result();
                $ads = $result->fetch_all(MYSQLI_ASSOC);
                $statement->close();
                return $ads;
            } else {
                die("Error al preparar consulta {$this->connection->error}");
            }
        } catch (Exception $e) {
            die("Error al ejecutar consulta {$e->getMessage()}");
            return null;
        }
    }
}