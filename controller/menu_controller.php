<?php  //Display the main menu page, and the submenu page
require_once("model/Menu.php");
class MenuController {
    private $model;
    private $modeloMenu;
    public function __construct() {
        $this->model = new Menu();
    }
    public function index() { //mostrar form de reservacion
        require_once("view/header.php");
        require_once("view/menu/menu.php");
        require_once("view/footer.php");
    }
    public function submenu() {
        require_once("view/header.php");
        $idSubmenu = $_GET["idsubm"];
        $categMenu = $_GET["categ"];
        $result = $this->model->listSubmenu($idSubmenu);
        if (isset($idSubmenu) and $idSubmenu > 0) {
            require_once("view/menu/submenu.php");
        } else {
            echo "No se ha encontrado el submenu";
        }
        require_once("view/footer.php");
    }
}
?>