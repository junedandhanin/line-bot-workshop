<?php
$access_token = 'dTR0SHo0XqlUgjBNlKPyHQm4vJ0BZCGNy3eN4M36W8OsTBmLaQD5vW0yl4Gr0DgfyzZa0zMVr1RoYpPeebROAf3BfuXwwcvKiLhiZ1BMebD2/WR8SmE5kuqxARzxArLAqTzTk+INEvPm3No/Vw0QmAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
