<?php
require_once("model/ReservacionManip.php");
class ReservacionController {
    private $model;
    public function __construct() {
        $this->model = new ReservacionManip();
    }
    public function index() { //mostrar form de reservacion
        require_once("view/header.php");
        require_once("view/reservacion/reservacion_add.php");
        require_once("view/footer.php");
    }
    public function add() { //recibir y guardar form

        $objReserv = new Reservacion(); //ReservManip extends AND requires Reservacion
        $objReserv->setNombre($_POST["nombre"]);
        $objReserv->setCorreo($_POST["correo"]);
        $objReserv->setTelefono($_POST["telefono"]);
        $objReserv->setDatetime_rsv($_POST["date_rsv"]." ".$_POST["time_rsv"]);
        $objReserv->setComensales($_POST["comensales"]);
        $objReserv->setDemandas("");
        if (isset($_POST["demandas"])) {
            $objReserv->setDemandas($_POST["demandas"]);
        }
        $id = $this->model->insert($objReserv);
        require_once("view/header.php");
        require_once("view/reservacion/reservacion_add.php");
        require_once("view/footer.php");
    }
}

?>