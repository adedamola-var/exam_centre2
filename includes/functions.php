<?php

  function makeApiCall($data) {
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://core.revocube.com/api/index.php',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        // 'Authorization: Bearer LMK4DGJMEU67C00P4M9RIYLOCBTHCH'
        'Authorization: Bearer INKJL41SEL6S49VHHKXRSZ98UCFOJZ76X0AS53V5'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;
  }
?>