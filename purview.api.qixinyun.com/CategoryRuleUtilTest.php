<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8005/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);
// $response = $client->request('GET', 'categories/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'categories?filter[platformId]=2',['haders'=>['Content-' => 'application/vnd.api+json']]);
//add
$data = array("data"=>array("type"=>"categories",
                                    "attributes"=>array("name"=>'cname3','platformId'=>1)
                            )
             );

$response = $client->request(
                'POST',
                'categories',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

//edit
// $data = array("data"=>array("type"=>"categories",
//                                     "attributes"=>array("name"=>'cname4444')
//                             )
//              );

// $response = $client->request(
//                 'PUT',
//                 'categories/2',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);
