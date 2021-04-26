<?php

namespace Smiirl;


class SmiirlSdkPhp
{

    private $mode;

    public function __construct($mode = 'DEV')
    {
        $this->mode = $mode;
    }

    public function pushNumberOnCounter($counterMac, $counterToken, $numberToDisplay)
    {
        $urlPushNumber = "http://api.smiirl.com/" . $counterMac . "/set-number/" . $counterToken . "/" . $numberToDisplay;
        $ch = curl_init($urlPushNumber);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function jsonUrl($numberToDisplay)
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(["number" => intval($numberToDisplay)]);
    }

    public function listCurlUrlAccessParameters($url)
    {
        $urlExploded = explode("/", $url);
        if (isset($urlExploded[3], $urlExploded[5])) {
            return [$urlExploded[3], $urlExploded[5]];
        }
        return [null, null];
    }

}




