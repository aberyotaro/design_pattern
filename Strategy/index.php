<?php
require_once "vendor/autoload.php";

use App\Controller\RobotController;

$controller = new RobotController();
echo $controller->index();
