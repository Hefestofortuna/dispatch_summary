<?php

namespace frontend\components;
use Yii;

class Verification
{
    private $ip_list = [
        1 => [
            '10.110.88.1/24',
        ],
        2 =>[
            '10.110.72.1/24',
            '10.110.32.1/24'
        ]
    ];#Ассоциация ID-IP для организаций

    public function IpVerification($ip_client)
    {
        foreach ($this->ip_list as $key=>$ip)
            foreach ($ip as $item)
                if($this->net_match($item, $ip_client))
                    return $key;
    }

    private function net_match($network, $ip)
    {
        $ip_arr = explode('/', $network);
        $network_long = ip2long($ip_arr[0]);
        $x = ip2long($ip_arr[1]);
        $mask =  long2ip($x) == $ip_arr[1] ? $x : 0xffffffff << (32 - $ip_arr[1]);
        $ip_long = ip2long($ip);
        return ($ip_long & $mask) == ($network_long & $mask);
    }

    public function __construct() {
    }

}