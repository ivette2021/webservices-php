//hhtp_response_header

<?php

$baseUrl = 'https://pokeapi.co/api/v2/';

$finalUrl = $baseUrl . $argv[1];

if ($json = file_get_contents($finalUrl)) {
    $result = json_decode($json, true);

    echo $result['profile']['mktCap'];
} else {
    var_dump($http_response_header);
}
