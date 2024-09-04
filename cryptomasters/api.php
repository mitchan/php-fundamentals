<?php
include_once './classes.php';

header("Content-type: application/json");

$code = $_GET["code"] ?? "BTC";
$converter = new Converter($code);
$rateInUSD = $converter->convert();
echo "{\"rate\": $rateInUSD }";
