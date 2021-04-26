<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use Smiirl\SmiirlSdkPhp;

print_r(SmiirlSdkPhp::listCurlUrlAccessParameters("http://api.smiirl.com/myMacAdressHere/set-number/MyTokenThere/54321"));
