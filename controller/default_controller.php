<?php //Display the ad page
require_once("model/Ad.php");
class DefaultController {
    private $model;
    private $modelDefault;
    public function __construct() {
        $this->model = new Ad();
    }
    public function index() {
        require_once("view/header.php");
        require_once("view/default/default.php");
        require_once("view/default/list_ads.php");
        require_once("view/footer.php");
    }

    public function restaurante() {
        require_once("view/header.php");
        require_once("view/restaurante.php");
        require_once("view/footer.php");
    }
}
?>