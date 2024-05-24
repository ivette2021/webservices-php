<?php

$client = new SoapClient(
    null,
    [
        'location' => 'http://localhost:8000',
        'uri' => 'http.//academy.leewayweb.com/udemy'
    ]
);

echo "El nos recibe con: " . $client->sayHello("Mauro") . PHP_EOL;
echo "El nos despide con: " . $client->sayGoodbye("Mauro") . PHP_EOL;
