<?php

class HelloServer
{
    function sayHello(string $name): string
    {
        return "Hello $name!";
    }
    function sayGoodbye(string $name): string
    {
        return "GoodBye $name!";
    }
}

$server = new SoapServer('greeter.wsdl');

$server->setClass(HelloServer::class);
$server->handle();

//php -S localhost:8000 soap_server.php
