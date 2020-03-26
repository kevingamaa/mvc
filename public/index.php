<?php
header('Content-Type: text/html; charset=utf-8');

require_once "../config/config.php";

require_once __DIR__. "/../vendor/autoload.php";


$app = new Core\App();
require_once '../routes/web.php';
$app->init();