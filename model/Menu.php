<?php
require_once("config/dbconnect.php");
class Menu {
    private $conObj;
    private $connection;
    public function __construct() {
        $this->conObj = new Connection();
        $this->connection = $this->conObj->getConnection();
    }
    public function listMenuCategories() {
        try {
            $statement = $this->connection->prepare("SELECT * FROM categoriasmenu;");
            if($statement) {
                $statement->execute();
                $result = $statement->get_result();
                $menucat = $result->fetch_all(MYSQLI_ASSOC);
                $statement->close();
                return $menucat;
            } else {
                die("Error al preparar consulta {$this->connection->error}");
            }
        } catch (Exception $e) {
            die("Error al ejecutar consulta {$e->getMessage()}");
            return null;
        }
    }
    public function listSubmenu($id_submenu = 1) {
        try {
            $statement = $this->connection->prepare("SELECT * FROM menu WHERE categoria = {$id_submenu}; ");
            if($statement) {
                $statement->execute();
                $result = $statement->get_result();
                $submenu = $result->fetch_all(MYSQLI_ASSOC);
                $statement->close();
                return $submenu;
            } else {
                die("Error al preparar consulta {$this->connection->error}");
            }
        } catch (Exception $e) {
            die("Error al ejecutar consulta {$e->getMessage()}");
            return null;
        }
    }
}
?>