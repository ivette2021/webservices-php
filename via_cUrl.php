//Consumo de servicios Rest via curl_close

<?php

$ch = curl_init('https://pokeapi.co/api/v2/' .$argv[1]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ret = curl_exec($ch);

$data = json_decode($ret, true);

echo $data['profile']['companyName';
curl_close($ch)];