<?php
require_once("config/dbconnect.php");
if (!isset($_GET["c"])) {
    $controller = "default";
} else {
    $controller = $_GET["c"]; //might need strtolower
}
$link = "controller/{$controller}_controller.php";
if (file_exists($link)) {
    require_once("$link");
    $classController = ucwords($controller) . "Controller"; //Get DefaultController
    $objController = new $classController; //Create new controller class
    if (!isset($_GET["c"])) {
        $objController->index(); //Get the index function from the controller if controller isn't set?
    } else {
        $action = isset($_GET["c"]) ? $_GET["a"] : "index"; //Is there an action that has been asked?
        call_user_func(array($objController, $action));
    }
} else {
    echo "Error 404: File not Found.";
}
?>