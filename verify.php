<?php
$access_token = 'Dp5cTXj8NHTYDiKoy/fQeb1zcbXljHoONSe4hCHXj1SIQ2FJCCH7qQXjnvfjxR21PWBquHunHE0HZtRL8Ezq9xf7cxTdeI/fKSKy9uNqwBIn3XicVdrptnh7SW4nD77FZeYQgrBWfpTFW9FG1EEujQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
