<?php 
require_once 'app/controller/controller.php';
$controller = $_GET['controller'];
if (isset($_GET['controller']) && !empty($_GET['controller'])) {
    switch ($_GET['controller']) {
        case $controller:
            controller::$controller();
            break;
    }
}else {
    header('Location:inicio');
}
