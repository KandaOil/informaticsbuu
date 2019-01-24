<?php
$access_token = 'GNfV73OB7ImLpGHOSviQOuEcIcyqOVNCTIW7YjBUC997l+TrHLwvzrPEjYHL3WW5qXsvTxu898umtJguLO5/vOSfpgtUHZziX7KffCgG25ctjxuGtmRN8GE6J0z6XJYT6A01yQIeCFv/0pyvus/P3wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
