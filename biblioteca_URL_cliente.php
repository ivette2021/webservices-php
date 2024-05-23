//biblioteca_URL_cliente

<?php

$baseUrl = 'https://pokeapi.co/api/v2/';

$finalUrl = $baseUrl . $argv[1];

$ch = curl_init($finalUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true)

$ret = curl_exec($ch);

echo $ret;



//opcion 2

$baseUrl = 'https://pokeapi.co/api/v2/';

$finalUrl = $baseUrl . $argv[1];

$ch = curl_init($finalUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ret = curl_exec($ch);

if (!curl_errno($ch)) {
   $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

   if (200 === $http_code) {
      echo $ret;
   }else {
    echo $http_code;
   }
  }  else {
    echo curl_error($ch);
   }