<?php

namespace Smoetje\EatonEasyE4;

class EatonEasyE4Class
{
    private $authorization = "a3f4335848def7168cdbccf0bfb5fbb0b3c4189b4dd3e00ecdaab1ee17fe5aa4d542da66efaba067";
    //private $uri = "http://192.168.1.146/api/get/data";
    private $uri = "http://10.201.50.41/api/get/data";
    private $token;
    private $client;
    private $headers;

    public function __construct()
    {
//        $this->token = 'a3f4335848def7168cdbccf0bfb5fbb0b3c4189b4dd3e00ecdaab1ee17fe5aa4d542da66efaba067';
//        $this->uri = 'http://192.168.1.146/api/get/data';

        $url = $this->uri;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = [
            "Accept: application/json",
            "Authorization: Bearer {$this->authorization}",
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $dataArray = [
            'elm' => "I(1)",
//            'elm' => "O(1,64)"
        ];
        $data = http_build_query($dataArray);

        $getUrl = urldecode($url."?".$data);

        // Combination of requests by using the "+"
        // Call example
        // /api/get/data?elm=I+I(3)+I(5)+I(1,8)+I(1,16)+STATE+IPSET
        $getUrl = "http://10.201.50.41:8080/api/get/data?elm=I(1)+O(1,64)+STATE+IPSET";

//        dump($getUrl);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $getUrl);
        curl_setopt($curl, CURLOPT_TIMEOUT, 80);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);

        if (curl_error($curl)) {
            echo 'Request Error:' . curl_error($curl);
        } else {
//            echo $response;
        }

        curl_close($curl);
        dd(json_decode($response));

//        $this->client = new Client(['base_uri' => $this->uri]);
//        $this->headers = [
//            'Authorization' => 'Bearer' . $this->token,
//            'Accept' => 'application/json',
//        ];
    }


//
//    public function index()
//    {
//        dump($this->readProgramCycleTime());
//        dump($this->readProgramName());
//
//        dd(gettype($this->readDIRange(1, 128)));
//
//        $json = json_decode($this->readDIRange(1, 128), true);
//
//        $asciiHex = base64_decode($json['OPERANDS']['IRANGE'][0]['V']);  // BASE64STRING
//        $hex = bin2hex($asciiHex);
//        $hex = $this->swapEndianness($hex); // Hexadecimaal
//
//        $binary = base_convert($hex, 16, 2);
//        return $binary;
//    }
//
//    private function swapEndianness($hex)
//    {
//        return implode('', array_reverse(str_split($hex, 2)));
//    }
//
//    // error code handler erbij steken?
}
