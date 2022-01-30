<?php

namespace Smoetje\EatonEasyE4;

class EatonEasyE4Class
{
    private $authorization = "a3f4335848def7168cdbccf0bfb5fbb0b3c4189b4dd3e00ecdaab1ee17fe5aa4d542da66efaba067";
    private $uri = "http://192.168.1.146/api/get/data";
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
        $getUrl = "http://192.168.1.146/api/get/data?elm=I(1)+O(1,64)+STATE+IPSET";

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

//    // Digital Input
//
//    public function readDISingle(int $input): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=I({$input})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readDIRange(int $start, int $end): string
//    {
//        $response = $this->client->request('GET', "api/get/data?elm=I({$start},{$end})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readDIAll(): string
//    {
//        $response = $this->client->request('GET', "api/get/data?elm=I", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readOSingle(int $output): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=O({$output})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    // Digital Output
//
//    public function readORange(int $start, int $end): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=O({$start},{$end})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readOAll(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=O", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    // Analog Input
//
//    public function readAISingle(int $input): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=AI({$input})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readAIRange(int $start, int $end): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=AI({$start},{$end})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readAIAll(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=AI", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    // Analog Output
//
//    public function readAOSingle(int $output): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=AO({$output})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readAORange(int $start, int $end): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=AO({$start},{$end})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readAOAll(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=AO", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    // ID Diagnostics
//
//    public function readIDSingle(int $id): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=ID({$id})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readIDRange(int $start, int $end): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=ID({$start},{$end})", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//
/////api/get/adm?elm=FBA1(0;0)
/////api/get/adm?elm=FBA1(1;1)+FBA1(2;2)
////
/////api/get/adm?elm=FBA1(1;1)+FBAC2(2;0)
/////api/get/data?elm=FBA1(1;1)+FBAC2(2;0)
////
/////api/get/adm?elm=FBAC1(2;1)
/////api/get/adm?elm=FBT1(2;1)
/////api/set/par?op=FB&v1=C1(2;1;698741)
/////api/set/par?op=FB&v1=C1(2;0;20)&v2=C1(2;1;10)&v3=T1(2;0;2000)&v4=T1(2;1;2000)
////&v5=AC1(2;0;7200000)&v6=AC1(2;1;1000)&v7=T1(0;0;1)
/////api/set/par?op=FB&v1=AC1(2;0;37200000)
/////api/set/par?op=FB&v1=T1(2;0;2000)
/////api/set/par?op=SAVE
/////api/get/data?elm=M(511)
/////api/get/data?elm=M(1,32)
/////api/get/data?elm=M
/////api/set/op?op=M&index=1&val=1
/////api/get/data?elm=MB(5)
/////api/get/data?elm=MB(1,8)
/////api/set/op?op=MB&index=1&val=4
/////api/get/data?elm=MW(5)
/////api/get/data?elm=MW(1,8)
/////api/set/op?op=MW&index=1&val=10
/////api/get/data?elm=MD(8)
/////api/get/data?elm=MD(9,16)
/////api/set/op?op=MD&index=1&val=20
/////api/get/data?elm=N(4;212)
/////api/get/data?elm=N(1;1,32)
/////api/set/op?op=N&index=1&netid=0&val=1
/////api/get/data?elm=NB(1;4)
/////api/get/data?elm=NB(3;1,8)
/////api/set/op?op=NB&index=1&netid=0&val=10
/////api/get/data?elm=NW(1;2)
/////api/get/data?elm=NW(1;1,8)
/////api/set/op?op=NW&index=1&netid=0&val=10
/////api/get/data?elm=ND(1;3)
/////api/get/data?elm=ND(1;1,8)
/////api/set/op?op=ND&index=1&netid=0&val=10
//
//    // Device Properties
//
//    public function ReadFirmwareVersion(): string
//    {
/////api/get/data?elm=VERSION
//    }
//
//    public function ReadDeviceLanguage(): string
//    {
/////api/get/data?elm=DEVLANG
//    }
//
//    public function ReadDeviceName(): string
//    {
/////api/get/data?elm=DEVNAME
//    }
//
//    public function WriteDeviceName(): string
//    {
/////api/set/adm?op=devname&v1=easyE4_2
//    }
//
//    public function ReadDeviceLocation(): string
//    {
/////api/get/data?elm=DEVLOCATION
//    }
//
//    // Device State
//
//    public function ReadDeviceState(): string
//    {
/////api/get/data?elm=STATE
//    }
//
//    public function ReadDeviceExtensionState(): string
//    {
/////api/get/data?elm=EXTSTATE
//    }
//
//    public function WriteDeviceState()
//    {
/////api/set/mode?op=state&v1=STOP
/////api/set/mode?op=state&v1=RUN
//    }
//
//    public function ReadDeviceDiagnosis(): string
//    {
/////api/get/data?elm=DIAG
//    }
//
//    // Device Date & Time
//
//    public function ReadDeviceDate(): string
//    {
/////api/get/data?elm=DATE
//    }
//
//    public function WriteDeviceDate(): string
//    {
/////api/set/clock?op=date&v1=2019&v2=4&v3=9
//    }
//
//    public function ReadDeviceTime(): string
//    {
/////api/get/data?elm=TIME
//    }
//
//    public function WriteDeviceTime(): string
//    {
/////api/set/clock?op=time&v1=12&v2=11&v3=3
//    }
//
//    // Email
//    public function ReadEmailSettings(): string
//    {
/////api/get/adm?elm=EMAIL
//    }
//
//    public function ReadEmailGroupSettings(): string
//    {
/////api/get/adm?elm=EMAILGROUPS
//    }
//
//    // Communication settings
//    public function readDeviceIpSettings(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=IPSET", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    /**
//     * @param int $ipmode // 0: Auto-IP, 1: DHCP, 2: Set IP adress
//     * @param string $ip
//     * @param string $subnetmask
//     * @param string $gateway
//     * @return string
//     * @throws \GuzzleHttp\Exception\GuzzleException
//     */
//    public function writeDeviceIPSettings(int $ipmode, string $ip, string $subnetmask, string $gateway): string
//    {
//        $response = $this->client->request('GET', "/api/set/adm?op=ipset&v1={$ipmode}&v2={$ip}&v3={$subnetmask}&v4={$gateway}", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readDeviceNetID(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=DEVID", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    // Program settings
//    public function readProgramName(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=PROGNAME", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
//
//    public function readProgramCycleTime(): string
//    {
//        $response = $this->client->request('GET', "/api/get/data?elm=CYC", [
//            'headers' => $this->headers
//        ]);
//        return $response->getBody()->getContents();
//    }
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
