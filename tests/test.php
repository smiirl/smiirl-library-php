<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use Smiirl\SmiirlSdkPhp;
$smiirlSdk = new SmiirlSdkPhp();

list($mac,$token) = $smiirlSdk->listCurlUrlAccessParameters("http://api.smiirl.com/myMacAdressHere/set-number/MyTokenThere/54321");
list($mac,$token) = $smiirlSdk->listCurlUrlAccessParameters("http://api.smiirl.com/e08e3c39c9b4/set-number/97cbc24fe27233cd746ffb09a45f3754/54321");
var_dump($mac, $token);

$pushExample = $smiirlSdk->pushNumberOnCounter($mac,$token,12345);
var_dump($pushExample);