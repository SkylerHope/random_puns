<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://punapi.rest/api/pun',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
$data = json_decode($response, true);
$outputFile = fopen('latest output.txt', 'w');
$punElement = $data['pun'];

curl_close($curl);
echo $punElement;

fwrite($outputFile, $punElement);
fclose($outputFile);
?>