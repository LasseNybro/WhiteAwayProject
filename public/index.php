<?php

use Classes\Movierater;

require_once __DIR__ . "/../vendor/autoload.php";

$movierater = new Movierater();

var_dump($movierater->getStars($argv[1]));
return($movierater->getStars($argv[1]));