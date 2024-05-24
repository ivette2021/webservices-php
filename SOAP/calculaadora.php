<?php

$client = new SoapClient('http://www.dneonline.com/calculator.asmx?WSDL');

echo 'El resultado es: ' . $client->Add([
    'intA' => $argv[1],
    'intB' => $argv[2],
])->AddResult;

print_r($client->__getFunctions());
