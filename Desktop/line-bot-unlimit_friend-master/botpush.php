<?php



require "vendor/autoload.php";

$access_token = 'HzLcHMoikqIy3hHnAZBMv/qcPjx3MGmE7Fo2C75+UlJEmXIbiP/bciNnxixZwNaT+JiSjqEYKBQMMMK0CvYGuTuPEMM9a9g5QvhGuL5Qb7/C68CXRi6d2+U3KU5VAP4GnygMrqirH1dIMS4jenxZxwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '592cc4bdd3c7c8ceb35d316dfa35ffe1';
// ID ที่ต้องการส่งไปหา
$pushID = 'U61b3066a5501ff72f1952ab65c7bd4d0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







