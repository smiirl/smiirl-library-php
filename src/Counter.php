<?php

namespace Smiirl;


class Counter
{
    private $mac;
    private $token;

    public function __construct($mac = null, $token = null)
    {
        $this->mac = $mac;
        $this->token = $token;
    }

    private function request($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    static private function normalize($number)
    {
        return intval($number);
    }

    public function push($number)
    {
        if ($this->mac === null || $this->token === null) {
            return '{"error":"identify_your_counter_correctly"}';
        }
        $url = "http://api.smiirl.com/"
            . ($this->mac ? $this->mac : '')
            . "/set-number/"
            . ($this->token?$this->token:'')
            . "/" . $this->normalize($number);
        return $this->request($url);
    }

    static public function jsonResponse($number)
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(["number" => self::normalize($number)]);
    }
}




