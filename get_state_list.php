<?php
$country=$_GET['country'];
$curl = curl_init();

switch ($country) {
  case 'United States of America (the)':
    $country = 'United States';
    break;
    case 'Niger(the)':
    $country = 'Niger';
    break;
}

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://countriesnow.space/api/v0.1/countries/states',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "country": "' . $country . '"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>