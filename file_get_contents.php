//file_get_contents

<?php

$baseUrl = 'https://pokeapi.co/api/v2/';

$finalUrl = $baseUrl . $argv[1];

$json = file_get_contents($finalUrl);

$result = json_decode($json, true);

echo $result['profile']['mktCap'];
