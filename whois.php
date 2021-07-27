<?php
$IP = $_SERVER["REMOTE_ADDR"];
$res = [];
$comand = "whois -h whois.nic.ad.jp {$IP}";
exec($comand, $res);
$host_name = str_ireplace("[Organization]", "", str_ireplace(" ", "", $ary[8]));
echo json_encode([
    "code" => "200",
    "host" => $host_name
]);