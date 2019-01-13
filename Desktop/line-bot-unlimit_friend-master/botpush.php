<?php



require "vendor/autoload.php";

$access_token = '*Channel_access_token*';

$channelSecret = '*Channel_Secret*';
// ID ที่ต้องการส่งไปหา
$pushID = '*ReceiverID*';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







