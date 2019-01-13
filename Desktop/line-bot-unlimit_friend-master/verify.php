<?php
$access_token = 'vJIEowPmdyfHgrc5O2TSSloPoXb6aiuyw1xQUBUxGImky2VMCHv/TYPOmdapEuvur85Sh6SSGYGumQxfk1vuSFd4lkYACEDzkI/aqKJQ9Vpu9QehboHvW7JsBGBgKAD1ecCbpLH0AliBEhFnHCY0NAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
