<?php

require_once '../vendor/autoload.php';

$autoloader = new Autoloader();
//$autoloader->addNamespace("app","../src");
//$autoloader->addNamespace("app2","../src");
$autoloader->addNamespace("app3","../src");
$autoloader->register();

//$color1 = new app\Color;
//$color2 = new app2\Color2;
$color3 = new app3\asd\Color3;
