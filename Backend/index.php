<?php 

include_once './controller/controller.php';

include_once './router/router.php';

include_once '../mongo.php';

$router = new Router();
$router->router();



?>