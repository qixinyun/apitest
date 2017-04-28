<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

$response = $client->request('GET', 'accounts/194',['haders'=>['Content-' => 'application/vnd.api+json']]);

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";

var_dump($response->getHeaders());
print_r($status);
print_r($contents);