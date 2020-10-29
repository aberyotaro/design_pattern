<?php
require_once "vendor/autoload.php";

use App\Controller\RobotController;
use App\Robots\BType;
use App\Robots\AType;

$aType = new AType();
$bType = new BType();
$controller = new RobotController();

echo 'AType = ' . $controller->display($aType) . PHP_EOL;
echo 'BType = ' . $controller->display($bType) . PHP_EOL;
