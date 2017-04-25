<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8006/']);

//get 
$response = $client->request('GET', 'workflows/snapshots/12',['haders'=>['Content-' => 'application/vnd.api+json']]);


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
var_dump($status);
echo "<pre>";
print_r($contents);