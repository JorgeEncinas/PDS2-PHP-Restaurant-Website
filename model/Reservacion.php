<?php
class Reservacion {
    private string $nombre; //nombre
    private string $correo; //correo
    private string $telefono; //teléfono
    private string $datetime_rsv; //fecha de reservación
    //private string $hora_reservacion; //franja horaria (hora de apertura y cierre)
    private string $comensales; //número de personas (comensales)
    private string $demandas; //demandas especiales (alergia a alguna comida)
    public function __construct(
        string $nombre = "",
        string $correo = "",
        string $telefono = "",
        string $datetime_rsv = "",
        string $comensales = "",
        string $demandas = "") {
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->telefono = $telefono;
            $this->datetime_rsv = $datetime_rsv;
            $this->comensales = $comensales;
            $this->demandas = $demandas;
        }
    public function getNombre() {
        return $this->nombre;
    }
    public function getCorreo() {
        return $this->correo;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function getDatetime_rsv() {
        return $this->datetime_rsv;
    }
    public function getComensales() {
        return $this->comensales;
    }
    public function getDemandas() {
        return $this->demandas;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
    public function setCorreo(string $correo) {
        $this->correo = $correo;
    }
    public function setTelefono(string $telefono) {
        $this->telefono = $telefono;
    }
    public function setDatetime_rsv(string $datetime_rsv) {
        $this->datetime_rsv = $datetime_rsv;
    }
    public function setComensales(string $comensales) {
        $this->comensales = $comensales;
    }
    public function setDemandas(string $demandas) {
        $this->demandas = $demandas;
    }
}
?>