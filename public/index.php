<?php

require_once '../vendor/autoload.php';

$autoloader = new Autoloader();
$autoloader->addNamespace("app","../src");
$autoloader->register();

$color = new app\Color;

