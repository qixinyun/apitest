<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
$response = $client->request('GET', 'businessAreas/2/usergroups',['haders'=>['Content-' => 'application/vnd.api+json']]);


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);
