<?php
class Connection {
    private $connection;
    private string $dbhost = 'localhost';
    private string $user = '';
    private string $password = '';
    private string $dbname = 'pds2resto';
    public function __construct() {
        $this->connection = new mysqli($this->dbhost, $this->user, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            echo "Error de conexión ({$this->connection->connect_errno}) {$this->connection->connect_error}";
        }
    }
    public function getConnection() {
        return $this->connection;
    }
}
?>