<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Smiirl\Counter;
$counter = new Counter("mac-address", "access-token");

$pushExample = $counter->push(12345);
var_dump($pushExample);