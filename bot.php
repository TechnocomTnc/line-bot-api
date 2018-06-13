<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'c3aa02ca5442a7640d2c577f936da0d4';
$access_token  = 'QV4Z3GwTNAwu+MVcwGCGAALxv9W/lHMLm6J/tvZvdS8eBf6A2nRlC1QdFvLI28iZ+zFZ7FrYjjbrFvQw84+Axi+P1zWPnxSCTl/lF5gVTDYFM8sdYtwxA1PVP5Tir5WzkwwsuzPxbs9IkWqxEvvcvQdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
