<?php

namespace Smoetje\EatonEasyE4\Data;

class EatonDataClass implements EatonDataInterface
{
    // Digital Input
    public function readDISingle(int $input): string
    {
        return "elm=I({$input})";
    }

    public function readDIRange(int $start, int $end): string
    {
        return "elm=I({$start},{$end})";
    }

    public function readDIAll(): string
    {
        return "elm=I";
    }

    public function readOSingle(int $output): string
    {
        return "elm=O({$output})";
    }

    // Digital Output

    public function readORange(int $start, int $end): string
    {
        return "elm=O({$start},{$end})";
    }

    public function readOAll(): string
    {
        return "elm=O";
    }

    // Analog Input

    public function readAISingle(int $input): string
    {
        return "elm=AI({$input})";
    }

    public function readAIRange(int $start, int $end): string
    {
        return "elm=AI({$start},{$end})";
    }

    public function readAIAll(): string
    {
        return "elm=AI";
    }

    // Analog Output

    public function readAOSingle(int $output): string
    {
        return "AO({$output})";
    }

    public function readAORange(int $start, int $end): string
    {
        return "elm=AO({$start},{$end})";
    }

    public function readAOAll(): string
    {
        return "elm=AO";
    }

    // ID Diagnostics

    public function readIDSingle(int $id): string
    {
        return "elm=ID({$id})";
    }

    public function readIDRange(int $start, int $end): string
    {
        return "elm=ID({$start},{$end})";
    }

    public function readSingleFunctionBlockSinglePin()
    {

    }

    public function readSingleFunctionBlocksMultiplePins()
    {

    }

    public function readMultipleFunctionBlocksMultiplePins()
    {

    }

    public function readFunctionBlockAC()
    {

    }

    public function readFunctionBlockT()
    {

    }

    public function writeSingleFunctionBlockSinglePin()
    {

    }

    public function writeMultipleFunctionBlocksMultiplePins()
    {

    }

    public function writeExampleFunctionBlockAC()
    {

    }

    public function writeExampleFunctionBlockT()
    {

    }

    public function saveAllFBChanges()
    {

    }

    public function readMSingle()
    {

    }

    public function readMRange()
    {

    }

    public function readMAll()
    {

    }

    public function writeMSingle()
    {

    }

    public function readMBSingle()
    {

    }

    public function readMBRange()
    {

    }

    public function writeMBSingle()
    {

    }

    public function readMWSingle()
    {

    }

    public function readMWRange()
    {

    }

    public function writeMWSingle()
    {

    }

    public function readMDSingle()
    {

    }

    public function readMDRange()
    {

    }

    public function writeMDSingle()
    {

    }

    public function readNSingle()
    {

    }

    public function readNRange() : string
    {

    }

    public function writeNSingle() : string
    {

    }

    public function readNBSingle() : string
    {

    }

    public function readNBRange() : string
    {

    }

    public function writeNBSingle() : string
    {

    }

    public function readNWSingle() : string
    {

    }

    public function readNWRange() : string
    {

    }

    public function writeNWSingle() : string
    {

    }

    public function readNDSingle() : string
    {

    }

    public function readNDRange() : string
    {

    }

    public function writeNDSingle() : string
    {

    }

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
    public function ReadFirmwareVersion(): string
    {
        return "elm=VERSION";
    }

    public function ReadDeviceLanguage(): string
    {
        return "elm=DEVLANG";
    }

    public function ReadDeviceName(): string
    {
        return "elm=DEVNAME";
    }

    // je hebt adm functies, mode en elm functies -> instinker!
    // --> niet chainable maken?

    public function WriteDeviceName(): string
    {
        //api/set/adm?op=devname&v1=easyE4_2
        return "adm?op=devname&v1=easyE4_2";
    }

    public function ReadDeviceLocation(): string
    {
        return "elm=DEVLOCATION";
    }

    // Device State

    public function ReadDeviceState(): string
    {
        return "elm=STATE";
    }

    public function ReadDeviceExtensionState(): string
    {
        return "elm=EXTSTATE";
    }

    // je hebt adm functies, clock, mode en elm functies -> instinker!
    // --> niet chainable maken?

    public function WriteDeviceStateRun()
    {
        //api/set/mode?op=state&v1=RUN
        return ""//api/set/mode?op=state&v1=RUN
    }

    public function WriteDeviceStateStop()
    {
        //api/set/mode?op=state&v1=STOP
        return ""///api/set/mode?op=state&v1=STOP

    }
//
    public function ReadDeviceDiagnosis(): string
    {
        return "elm=DIAG";
    }

    // Device Date & Time
    public function ReadDeviceDate(): string
    {
        return "elm=DATE";
    }

    // er zijn GETTERS en SETTERS
    // je hebt adm functies, clock, mode en elm functies -> instinker!
    // --> niet chainable maken?

    public function WriteDeviceDate(): string
    {
        //api/set/clock?op=date&v1=2019&v2=4&v3=9
        return "";
    }

    public function ReadDeviceTime(): string
    {
        return "elm=TIME";
    }
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
    // Communication settings
    public function readDeviceIpSettings(): string
    {
        return "elm=IPSET";
    }

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
}
