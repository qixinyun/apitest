<?php

require '../vendor/autoload.php';

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'dictionaries/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'dictionaries/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
$response = $client->request('GET', 'dictionaries?filter[categoryId]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);
//add -- 开始
// $data = array("data"=>array("type"=>"dictionaries",
//                             "attributes"=>array("name"=>"name",
//                                                 "value"=>"value",
//                                                 "categoryId"=>1
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'dictionaries',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"dictionaries",
//                             "attributes"=>array("name"=>"name1",
//                                                 "value"=>"value1"
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'dictionaries/1',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//edit -- 结束

//delete
// $response = $client->request('DELETE', 'dictionaries/1',
//  [
//  'haders'=>['Content-' => 'application/vnd.api+json']
//  ]);
//delete

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);

