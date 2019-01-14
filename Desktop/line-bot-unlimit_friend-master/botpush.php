<?php



require "vendor/autoload.php";

$access_token = 'dTR0SHo0XqlUgjBNlKPyHQm4vJ0BZCGNy3eN4M36W8OsTBmLaQD5vW0yl4Gr0DgfyzZa0zMVr1RoYpPeebROAf3BfuXwwcvKiLhiZ1BMebD2/WR8SmE5kuqxARzxArLAqTzTk+INEvPm3No/Vw0QmAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8469fb285ea12d210d88f921a3d47c4b';
// ID ที่ต้องการส่งไปหา
$pushID = 'U3d8452b9156537665d6b9021ea3c2c05';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กันtest');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







