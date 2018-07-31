<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$composer = require __DIR__.'/vendor/autoload.php';

require __DIR__. '/config/modules.php';

$app = new Hode\Framework\App($composer, $modules);
$app->run();