<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(
    [
        'base_uri' => 'https://pokeapi.co/api/v2/',
        'timeout' => 2.0,
    ]
);

try {
    $response = $client->get('pokemon/ditto/' . $argv¨[1]);
    echo $response->getBody();
} catch (\GuzzleHttp\Exception\ClientException $exception) {
    echo $exception->getMessage();
}
