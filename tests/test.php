<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use Smiirl\SmiirlSdkPhp;
$smiirlSdk = new SmiirlSdkPhp();


var_dump($smiirlSdk->jsonUrl("424242"));

list($mac,$token) = $smiirlSdk->listCurlUrlAccessParameters("http://api.smiirl.com/myMacAdressHere/set-number/MyTokenThere/54321");
var_dump($mac, $token);

$pushExample = $smiirlSdk->pushNumberOnCounter($mac,$token,12345);
var_dump($pushExample);