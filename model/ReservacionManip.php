<?php
require_once("reservacion.php"); //not using model/reservacion bc we're in the same file
require_once("config/dbconnect.php");

class ReservacionManip extends Reservacion {
    private $conObj;
    private $connection;
    public function __construct() {
        $this->conObj = new Connection();
        $this->connection = $this->conObj->getConnection();
    }
    public function insert(Reservacion $objReserv) {
        try {
            $statement = $this->connection->prepare("INSERT reservacion(nombre, correo, telefono, datetime_rsv, comensales, demandas) VALUES (?, ?, ?, ?, ?, ?);");
            if ($statement) {
                $nombre = $objReserv->getNombre();
                $correo = $objReserv->getCorreo();
                $telefono = $objReserv->getTelefono();
                $datetime_rsv = $objReserv->getDatetime_rsv();
                $comensales = $objReserv->getComensales();
                $demandas = $objReserv->getDemandas();
                $statement->bind_param("ssssis", $nombre, $correo, $telefono, $datetime_rsv, $comensales, $demandas);
                $statement->execute();

                $id = $this->connection->insert_id;

                $statement->close();
                return $id;
            } else {
                die('Error al actualizar los datos '. $this->connection->error);
                return 0;
            }
        } catch (Exception $e) {
            die($e->getMessage());
            return 0;
        }

    }
}

?>