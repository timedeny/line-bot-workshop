<?php


$access_token = 'HzLcHMoikqIy3hHnAZBMv/qcPjx3MGmE7Fo2C75+UlJEmXIbiP/bciNnxixZwNaT+JiSjqEYKBQMMMK0CvYGuTuPEMM9a9g5QvhGuL5Qb7/C68CXRi6d2+U3KU5VAP4GnygMrqirH1dIMS4jenxZxwdB04t89/1O/w1cDnyilFU=';

$userId = 'U61b3066a5501ff72f1952ab65c7bd4d0';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

