<?php

require_once __DIR__ . "/../vendor/autoload.php";

define('APP_ROOT', dirname(__DIR__));

use App\Controller\PageController;

$pagecontroller = new PageController();
$pagecontroller->home();
