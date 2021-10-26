<?php
// $country=$_GET['country'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.first.org/data/v1/countries?limit=300',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>''
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;