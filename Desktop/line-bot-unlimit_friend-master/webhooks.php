<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'vJIEowPmdyfHgrc5O2TSSloPoXb6aiuyw1xQUBUxGImky2VMCHv/TYPOmdapEuvur85Sh6SSGYGumQxfk1vuSFd4lkYACEDzkI/aqKJQ9Vpu9QehboHvW7JsBGBgKAD1ecCbpLH0AliBEhFnHCY0NAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$text2 = '';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text']."\n".$event['source']['userId']."\n".$event['replyToken'];
			// Get replyToken
			$text2 = $text;
			$replyToken = $event['replyToken'];
		}
	}
}
require "vendor/autoload.php";
$channelSecret = '0bc40aeffb71f2f8314581d2e01ebed5';
$pushID = 'U83c99e6420973909a2b480b593179b98';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "ok";
echo "OK2";
