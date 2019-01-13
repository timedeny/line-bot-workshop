<?php


$access_token = 'vJIEowPmdyfHgrc5O2TSSloPoXb6aiuyw1xQUBUxGImky2VMCHv/TYPOmdapEuvur85Sh6SSGYGumQxfk1vuSFd4lkYACEDzkI/aqKJQ9Vpu9QehboHvW7JsBGBgKAD1ecCbpLH0AliBEhFnHCY0NAdB04t89/1O/w1cDnyilFU=';

$userId = 'U8a92bfd43082c7ff22087c34228c57cd';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

