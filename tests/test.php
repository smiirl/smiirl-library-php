<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use SmiirlLibrary\SmiirlLibraryPhp;

print_r(SmiirlLibraryPhp::listCurlUrlAccessParameters("http://api.smiirl.com/myMacAdressHere/set-number/MyTokenThere/54321"));
