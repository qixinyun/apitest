<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1:8001/']);

//get 
$response = $client->request('GET', 'operationFlows?filter[sourceApplicationId]=1&filter[sourceApplicationCategory]=2',['haders'=>['Content-' => 'application/vnd.api+json']]);

// $data = array("data"=>array("type"=>"operationFlows",
//                             "attributes"=>array(
//                                                 'content'=>['ttt']
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'operationFlows/22/decline',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

//approve
//confirm
//decline

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
var_dump($status);
echo "<pre>";
print_r($contents);