<?php



require "vendor/autoload.php";

$access_token = 'CH8jD0w6dMJHTFvZ8jU5PHOWvj+ZqmyAE16WmxU/PUAd1Gzz20BKDLujB9WIOmn79DSdgzDzA/erymDyaGdUIo10BEaC23cMGwkQ/mP9V+k3V7t3CN6XmIjsjZvxyIRwT6dafo5yUn68x/yaaA3ytwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '390dfa56ed453822362c44f1ecfc6372';

$pushID = 'Uf37e7f19f7e89c958f6f548fa04d8f9e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('smoke is coming');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







