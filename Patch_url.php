<?php

$token = file_get_contents('token.txt');
$baseUrl = 'https://api.github.com';
$actionURI = '/repos/leeway-academy/webscrapper/issues/' . $argv[1];
$serviceURL = $baseUrl . $actionURI;
$ch = curl_init($serviceURL);
$body = json_encode(['title' => $argv[2],]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "mchojrin:$token");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Macintosh; Intel Mac OS X 10.75");

$ret = curl_exec($ch);

if (curl_errno($ch)) {
    echo curl_error($ch);
} else {
    echo $ret;
}

//cmd colocas:  php update_issue.php 8 'Nuevo titulo'